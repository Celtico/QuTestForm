<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */
return array(

    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'qu_test_controller' => 'QuTestForm\Controller\TestFormController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'qu_test_route' => array(
                'type' => 'literal',
                'priority' => 1000,
                'options' => array(
                    'route' => '/test-form',
                    'defaults' => array(
                        'controller'        => 'qu_test_controller',
                        'action'            => 'index',
                    ),
                ),
            ),
        ),
    ),
);