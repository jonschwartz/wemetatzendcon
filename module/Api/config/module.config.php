<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Api\Controller\Api' => 'Api\Controller\ApiController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'api' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/api[/:action[/:twitterhandle]]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'twitterhandle'     => '[@%a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'Api\Controller\Api',
                        'action'     => 'getpathhistory',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Api' => __DIR__ . '/../view',
        ),
    ),
);