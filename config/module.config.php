<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'ssptalks-talks-controller' => 'SspTalks\Controller\TalksController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'talks-index' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/talks',
                    'defaults' => array(
                        'controller'    => 'ssptalks-talks-controller',
                        'action'        => 'talks',
                    ),
                ),
            ),
            'tutorials-index' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/tutorials',
                    'defaults' => array(
                        'controller'    => 'ssptalks-talks-controller',
                        'action'        => 'tutorials',
                    ),
                ),
            ),
        ),
    ),
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Talks',
                'route' => 'talks-index',
                'lastmod' => '2013-09-08',
                'changefreq' => 'monthly',
                'priority' => '1.0',
                'order' => '25',
            ),
            array(
                'label' => 'Tutorials',
                'route' => 'tutorials-index',
                'lastmod' => '2013-09-08',
                'changefreq' => 'monthly',
                'priority' => '1.0',
                'order' => '26',
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'SspTalks' => __DIR__ . '/../view',
        ),
    ),
);
