<?php

class logsBackendDeleteController extends waJsonController
{
    public function execute()
    {
        $path = waRequest::post('path');

        $deleted = false;
        if ($this->getRights('delete_files')) {
            if ($path) {
                $full_path = logsHelper::getAbsolutePath($path);
                if (!is_dir($full_path)) {
                    $available = logsHelper::checkPath($full_path, false);
                    if ($available) {
                        $deleted = waFiles::delete($full_path);
                    }
                }
            }
        }
        if ($deleted) {
            $this->logAction('file_delete', $path);

            $update_total_size = (bool) waRequest::get('update_size', 0, waRequest::TYPE_INT);
            if ($update_total_size) {
                $total_size = logsHelper::getTotalLogsSize();
                $is_large = logsHelper::isLargeSize($total_size);
                //remove outdated indicator from cache
                if (!$is_large) {
                    $apps_count = wa()->getStorage()->read('apps-count');
                    unset($apps_count['logs']);
                    wa()->getStorage()->set('apps-count', $apps_count);
                }
                $this->response['total_size'] = logsHelper::formatSize($total_size);
                $this->response['total_size_class'] = $is_large ? 'total-size total-size-large' : 'total-size';
                $this->response['is_large'] = $is_large;
            } else {
                $this->response['total_size'] = '';
            }

        } else {
            $this->errors[] = _wp('File cannot be deleted');
        }
    }
}
