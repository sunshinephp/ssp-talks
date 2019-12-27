<?php
return array(
    'controllers' => array(
        'factories' => array(
            'ssptalks-talks-controller' => SspTalks\Factory\TalksControllerFactory::class,
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory'
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
            'keynotes-index' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/keynotes',
                    'defaults' => array(
                        'controller'    => 'ssptalks-talks-controller',
                        'action'        => 'keynotes',
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
            'speakers-index' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/speakers',
                    'defaults' => array(
                        'controller'    => 'ssptalks-talks-controller',
                        'action'        => 'speakers',
                    ),
                ),
            ),
            'schedule-index' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/schedule',
                    'defaults' => array(
                        'controller'    => 'ssptalks-talks-controller',
                        'action'        => 'schedule',
                    ),
                ),
            ),
        ),
    ),
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Schedule',
                'route' => 'schedule-index',
                'lastmod' => '2016-10-30',
                'changefreq' => 'monthly',
                'priority' => '1.0',
                'order' => '27',
                'pages' => array(
                    array(
                        'label' => 'Schedule',
                        'route' => 'schedule-index',
                        'lastmod' => '2016-10-30',
                        'changefreq' => 'monthly',
                        'priority' => '1.0',
                        'order' => '25',
                    ),
                    array(
                        'label' => 'Speakers',
                        'route' => 'speakers-index',
                        'lastmod' => '2016-10-30',
                        'changefreq' => 'monthly',
                        'priority' => '1.0',
                        'order' => '26',
                    ),
                    array(
                        'label' => 'Keynotes',
                        'route' => 'keynotes-index',
                        'lastmod' => '2016-10-30',
                        'changefreq' => 'monthly',
                        'priority' => '1.0',
                        'order' => '27',
                    ),
                    array(
                        'label' => 'Tutorials',
                        'route' => 'tutorials-index',
                        'lastmod' => '2016-10-30',
                        'changefreq' => 'monthly',
                        'priority' => '1.0',
                        'order' => '28',
                    ),
                    array(
                        'label' => 'Talks',
                        'route' => 'talks-index',
                        'lastmod' => '2016-10-30',
                        'changefreq' => 'monthly',
                        'priority' => '1.0',
                        'order' => '29',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'SspTalks' => __DIR__ . '/../view',
        ),
    ),
);
