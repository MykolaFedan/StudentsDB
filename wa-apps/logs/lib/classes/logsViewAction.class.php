<?php

class logsViewAction extends waViewAction
{
    public function __construct()
    {
        parent::__construct();

        $is_navigation_action = $this instanceof logsBackendNavigationAction;

        if (waRequest::get('action') == 'file') {
            //moved this logic here to make file-related data available both in navigation and in file actions

            static $data;
            if (is_null($data)) {
                $path = waRequest::get('path');
                $page = waRequest::get('page', null, waRequest::TYPE_INT);
                $data = array(
                    'path' => $path,
                    'page' => $page,
                    'file' => logsHelper::getFile(array(
                        'path' => $path,
                        'page' => $page,
                    )),
                );
            }

            if ($data['page'] !== null && ($data['page'] < 1 || $data['page'] > $data['file']['page_count'])) {
                $this->redirect('?action=file&path='.$data['path']);
            } else {
                $this->view->assign(array(
                    'file' => $data['file'],
                ));
            }
        } else {
            if (!$is_navigation_action) {
                wa()->getResponse()->setCookie('back_url', wa()->getConfig()->getCurrentUrl());
            }
        }

        $this->view->assign(array(
            'rights' => $this->getRights(),
            'admin'  => wa()->getUser()->isAdmin('logs'),
        ));

        if (!$is_navigation_action) {
            $this->setLayout(new logsBackendLayout());
        }
    }
}
