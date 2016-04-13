<?php

class logsBackendSettingsSaveController extends waJsonController
{
    public function execute()
    {
        if ($this->getRights('change_settings')) {
            $settings = waRequest::post('settings', array(), waRequest::TYPE_ARRAY);

            //PHP logging
            if (strlen($error = logsPhpLogging::setSetting(ifset($settings['php_log'], false)))) {
                $this->errors[] = $error;
            }

            //personal notification on large logs size
            $csm = new waContactSettingsModel();
            $csm->set(wa()->getUser()->getId(), 'logs', 'large_logs_notify', intval(ifset($settings['large_logs_notify'], 0)));
        }
    }
}
