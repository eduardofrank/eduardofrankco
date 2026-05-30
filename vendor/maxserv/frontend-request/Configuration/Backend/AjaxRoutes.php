<?php

use MaxServ\FrontendRequest\Controller\RequestController;

return [
    'frontendrequest_request' => [
        'path' => 'frontendrequest/request',
        'target' => RequestController::class . '::requestAction',
    ],
];
