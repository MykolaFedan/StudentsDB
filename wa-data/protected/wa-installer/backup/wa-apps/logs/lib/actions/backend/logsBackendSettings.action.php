<?php

class logsBackendSettingsAction extends waViewAction
{
    public function execute()
    {
        if ($this->getRights('change_settings')) {
            $php_log_setting = logsPhpLogging::getSetting();
            if (!$php_log_setting) {
                logsPhpLogging::setSetting(false);
            }
            $csm = new waContactSettingsModel();
            $large_logs_notify = $csm->getOne(wa()->getUser()->getId(), 'logs', 'large_logs_notify');

            $controls = array(
                _w('Enable PHP error log') => array(
                    'name'         => 'php_log',
                    'control_type' => waHtmlControl::CHECKBOX,
                    'value'        => 1,
                    'checked'      => $php_log_setting,
                    'description'  => _w('PHP error messages will be saved to file <tt>wa-log/<b>php.log</b></tt>.')
                        .'<br>'
                        .'<span class="bold black">'
                        ._w('This setting will remain valid during 1 hour only to avoid large error logs occupying server disk space.')
                        .'</span> '
                        ._w('Re-enable it after this time expires, if necessary.')
                        .'<br><br>'
                        .'<b>'._w('Enable this setting if you cannot, or do not want to, edit files on your server.').'</b><br>'
                        .sprintf(
                            _w('Otherwise add the following lines to your file <tt class>%s</tt>:'),
                            wa()->getConfig()->getRootPath().'/<b>.htaccess</b>'
                        )
                        .'<br><br>'
                        .'<tt>php_flag display_errors Off<br>
                            php_value error_reporting 2147483647<br>
                            php_flag log_errors On<br>
                            php_value error_log ./wa-log/php.log</tt>'
                ),
                _w('Notify me on large logs size') => array(
                    'name'         => 'large_logs_notify',
                    'control_type' => waHtmlControl::CHECKBOX,
                    'value'        => 1,
                    'checked'      => strlen($large_logs_notify) ? (bool) (int) $large_logs_notify : true,    //enabled by default
                    'description'  => _w('Show indicator next to app icon in main menu when total logs size exceed 1 GB.'),
                ),
            );
            $params = array(
                'namespace'           => 'settings',
                'description_wrapper' => '<span class="hint">%s</span>',
            );
            foreach ($controls as &$control) {
                $control += $params;
                $control = waHtmlControl::getControl($control['control_type'], $control['name'], $control);
            }
            unset($control);
            $this->view->assign('controls', $controls);
        }
    }
}
