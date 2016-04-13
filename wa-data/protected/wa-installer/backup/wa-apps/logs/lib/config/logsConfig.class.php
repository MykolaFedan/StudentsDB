<?php

class logsConfig extends waAppConfig
{
    public function explainLogs($logs)
    {
        foreach ($logs as $id => $log) {
            if ($log['action'] == 'file_delete' && strlen(ifset($log['params']))) {
                $logs[$id]['params_html'] = 'wa-log/'.$log['params'];
            }
        }
        return $logs;
    }

    public function onCount()
    {
        //remove useless expired setting
        if (logsPhpLogging::getSetting(true) && !logsPhpLogging::getSetting(false)) {
            logsPhpLogging::setSetting(false);
        }

        //notify user on large logs size
        $csm = new waContactSettingsModel();
        $large_logs_notify = $csm->getOne(wa()->getUser()->getId(), 'logs', 'large_logs_notify');
        $large_logs_notify = strlen($large_logs_notify) ? (bool) (int) $large_logs_notify : true;    //enabled by default
        if ($large_logs_notify) {
            $total_size = logsHelper::getTotalLogsSize();
            if (logsHelper::isLargeSize($total_size)) {
                return array(
                    'count' => _wd('logs', '1GB+'),
                    'url'   => wa()->getConfig()->getBackendUrl(true).'logs/?action=files&mode=size',
                );
            }
        }
    }
}
