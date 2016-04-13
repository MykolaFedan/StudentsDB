<?php

class logsPhpLogging
{
    const PHP_LOGGING_SECONDS = 3600;

    public static function getSetting($check_config_added = false)
    {
        $pattern = self::getPhpLogConfigRegexp();
        $system_config_contents = file_get_contents(self::getSystemConfigPath());

        if (preg_match($pattern, $system_config_contents, $matches)) {
            if ($check_config_added) {
                return true;
            } else {
                $old_timestamp = $matches[1];
                return time() - intval($old_timestamp) <= self::PHP_LOGGING_SECONDS;
            }
        } else {
            return false;
        }
    }

    public static function setSetting($enable)
    {
        $system_config_path = self::getSystemConfigPath();
        if (is_writable($system_config_path)) {
            //we do not know if we are going to enable logging, so assume it is disabled by default
            $new_contents = preg_replace(self::getPhpLogConfigRegexp(), '', file_get_contents($system_config_path));
            if ($enable) {
                //add logging config to "clean" files contents
                $new_contents = $new_contents.sprintf(self::getPhpLogConfig(), time(), self::PHP_LOGGING_SECONDS);
            }
            waFiles::write($system_config_path, $new_contents);
        } else {
            return sprintf(_w('Cannot save changes due to insufficient write permissions for file <tt>%s</tt>.'), $system_config_path);
        }
    }

    private static function getPhpLogConfig()
    {
        return include wa('logs')->getConfig()->getAppPath('lib/config/data/settings_php_log.php');
    }

    private static function getSystemConfigPath()
    {
        return wa()->getConfig()->getPath('config').'/SystemConfig.class.php';
    }

    private static function getPhpLogConfigRegexp()
    {
        $php_log_config = self::getPhpLogConfig();
        return '/'.str_replace('%d', '(\d+)', implode('\s+', array_map('wa_make_pattern', preg_split('/\s+/', $php_log_config)))).'/';
    }
}
