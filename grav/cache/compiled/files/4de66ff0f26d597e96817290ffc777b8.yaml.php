<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav/user/themes/azul/blueprints/categories.yaml',
    'modified' => 1509760957,
    'data' => [
        'title' => 'Category',
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'general' => [
                            'type' => 'tab',
                            'title' => 'General',
                            'fields' => [
                                'header.title' => [
                                    'type' => 'text',
                                    'autofocus' => true,
                                    'style' => 'vertical',
                                    'label' => 'Nombre de categoría'
                                ],
                                'content' => [
                                    'type' => 'markdown',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ]
                                ],
                                'multimedia' => [
                                    'type' => 'section',
                                    'help' => 'Agregue imágenes que se usarán en este contenido.',
                                    'title' => 'Imágenes',
                                    'underline' => true
                                ],
                                'uploads' => [
                                    'type' => 'pagemedia',
                                    'label' => 'Agregue imágenes en formato JPG o PNG. Podrá seleccionar estas imágenes para utilizar en campos de imagen como logo o foto del coordinador.',
                                    'multiple' => false,
                                    'destination' => '@self',
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ]
                            ]
                        ],
                        'content' => [
                            'type' => 'tab',
                            'title' => 'Contenido',
                            'fields' => [
                                'header.logo_image' => [
                                    'type' => 'filepicker',
                                    'folder' => 'self@',
                                    'label' => 'Seleccione el logo',
                                    'preview_images' => true,
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
                                'header.commitee_type' => [
                                    'type' => 'select',
                                    'label' => 'Tipo de comité',
                                    'size' => 'small',
                                    'options' => [
                                        'community' => 'Comunidad',
                                        'company' => 'Empresa',
                                        'school' => 'Institución Educativa',
                                        'house' => 'Casa Particular',
                                        'church' => 'Iglesia'
                                    ]
                                ],
                                'header.requisitos' => [
                                    'type' => 'editor',
                                    'label' => 'Requisitos',
                                    'default' => 'Ingrese los requisitos de esta categoría',
                                    'validate' => [
                                        'required' => false
                                    ]
                                ],
                                'steps' => [
                                    'type' => 'section',
                                    'title' => 'Pasos a seguir',
                                    'underline' => true
                                ],
                                'steps_instructions' => [
                                    'type' => 'display',
                                    'size' => 'large',
                                    'label' => 'Instrucciones',
                                    'markdown' => true,
                                    'content' => 'Si no desea utilizar uno de los siguientes pasos, deje los campos vacíos'
                                ],
                                'header.steps_signup' => [
                                    'type' => 'section',
                                    'title' => '1. Inscripción',
                                    'underline' => false
                                ],
                                'header.steps_signup_enable' => [
                                    'type' => 'toggle',
                                    'label' => 'Activar Inscripción',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Sí',
                                        0 => 'No'
                                    ],
                                    'default' => 0,
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.steps_signup_title' => [
                                    'label' => 'Título',
                                    'type' => 'text',
                                    'default' => 'Inscripción'
                                ],
                                'header.steps_signup_description' => [
                                    'label' => 'Descripción (2 renglones)',
                                    'type' => 'textarea'
                                ],
                                'header.steps_signup_date_start' => [
                                    'label' => 'Fecha inicial',
                                    'type' => 'text',
                                    'placeholder' => 'ej. 15 de enero'
                                ],
                                'header.steps_signup_date_end' => [
                                    'label' => 'Fecha cierre',
                                    'type' => 'text',
                                    'placeholder' => 'ej. 20 de marzo'
                                ],
                                'header.steps_signup_file' => [
                                    'type' => 'file',
                                    'label' => 'Documento adjunto de este paso',
                                    'help' => 'Solamente PDF, word o excel',
                                    'multiple' => false,
                                    'destination' => '@self',
                                    'accept' => [
                                        0 => 'application/pdf',
                                        1 => 'application/msword',
                                        2 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                        3 => 'application/vnd.ms-excel',
                                        4 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                                    ]
                                ],
                                'header.steps_diagnose' => [
                                    'type' => 'section',
                                    'title' => '2. Diagnóstico inicial',
                                    'underline' => false
                                ],
                                'header.steps_diagnose_enable' => [
                                    'type' => 'toggle',
                                    'label' => 'Activar Diagnóstico Inicial',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Sí',
                                        0 => 'No'
                                    ],
                                    'default' => 0,
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.steps_diagnose_title' => [
                                    'label' => 'Título',
                                    'type' => 'text',
                                    'default' => 'Diagnóstico inicial'
                                ],
                                'header.steps_diagnose_description' => [
                                    'label' => 'Descripción (2 renglones)',
                                    'type' => 'textarea'
                                ],
                                'header.steps_diagnose_date_start' => [
                                    'label' => 'Fecha inicial',
                                    'type' => 'text',
                                    'placeholder' => 'ej. 15 de enero'
                                ],
                                'header.steps_diagnose_date_end' => [
                                    'label' => 'Fecha cierre',
                                    'type' => 'text',
                                    'placeholder' => 'ej. 20 de marzo'
                                ],
                                'header.steps_diagnose_file' => [
                                    'type' => 'file',
                                    'label' => 'Documento adjunto de este paso',
                                    'help' => 'Solamente PDF, word o excel',
                                    'multiple' => false,
                                    'destination' => '@self',
                                    'accept' => [
                                        0 => 'application/pdf',
                                        1 => 'application/msword',
                                        2 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                        3 => 'application/vnd.ms-excel',
                                        4 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                                    ]
                                ],
                                'header.steps_plan' => [
                                    'type' => 'section',
                                    'title' => '3. Plan de trabajo',
                                    'underline' => false
                                ],
                                'header.steps_plan_enable' => [
                                    'type' => 'toggle',
                                    'label' => 'Activar Plan de Trabajo',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Sí',
                                        0 => 'No'
                                    ],
                                    'default' => 0,
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.steps_plan_title' => [
                                    'label' => 'Título',
                                    'type' => 'text',
                                    'default' => 'Plan de trabajo'
                                ],
                                'header.steps_plan_description' => [
                                    'label' => 'Descripción (2 renglones)',
                                    'type' => 'textarea'
                                ],
                                'header.steps_plan_date_start' => [
                                    'label' => 'Fecha inicial',
                                    'type' => 'text',
                                    'placeholder' => 'ej. 15 de enero'
                                ],
                                'header.steps_plan_date_end' => [
                                    'label' => 'Fecha cierre',
                                    'type' => 'text',
                                    'placeholder' => 'ej. 20 de marzo'
                                ],
                                'header.steps_plan_file' => [
                                    'type' => 'file',
                                    'label' => 'Documento adjunto de este paso',
                                    'help' => 'Solamente PDF, word o excel',
                                    'multiple' => false,
                                    'destination' => '@self',
                                    'accept' => [
                                        0 => 'application/pdf',
                                        1 => 'application/msword',
                                        2 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                        3 => 'application/vnd.ms-excel',
                                        4 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                                    ]
                                ],
                                'header.steps_report' => [
                                    'type' => 'section',
                                    'title' => '4. Informe Final',
                                    'underline' => false
                                ],
                                'header.steps_report_enable' => [
                                    'type' => 'toggle',
                                    'label' => 'Activar Informe Final',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Sí',
                                        0 => 'No'
                                    ],
                                    'default' => 0,
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.steps_report_title' => [
                                    'label' => 'Título',
                                    'type' => 'text',
                                    'default' => 'Informe final'
                                ],
                                'header.steps_report_description' => [
                                    'label' => 'Descripción (2 renglones)',
                                    'type' => 'textarea'
                                ],
                                'header.steps_report_date_start' => [
                                    'label' => 'Fecha inicial',
                                    'type' => 'text',
                                    'placeholder' => 'ej. 15 de enero'
                                ],
                                'header.steps_report_date_end' => [
                                    'label' => 'Fecha cierre',
                                    'type' => 'text',
                                    'placeholder' => 'ej. 20 de marzo'
                                ],
                                'header.steps_report_file' => [
                                    'type' => 'file',
                                    'label' => 'Documento adjunto de este paso',
                                    'help' => 'Solamente PDF, word o excel',
                                    'multiple' => false,
                                    'destination' => '@self',
                                    'accept' => [
                                        0 => 'application/pdf',
                                        1 => 'application/msword',
                                        2 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                        3 => 'application/vnd.ms-excel',
                                        4 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                                    ]
                                ]
                            ]
                        ],
                        'coordinator' => [
                            'type' => 'tab',
                            'title' => 'Coordinador',
                            'fields' => [
                                'coordinator_section' => [
                                    'type' => 'section',
                                    'title' => 'Coordinador',
                                    'underline' => true
                                ],
                                'header.coordinator_picture' => [
                                    'type' => 'filepicker',
                                    'folder' => 'self@',
                                    'label' => 'Seleccione el logo',
                                    'preview_images' => true,
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
                                'header.coordinator_name' => [
                                    'label' => 'Nombre',
                                    'type' => 'text'
                                ],
                                'header.coordinator_org' => [
                                    'label' => 'Organización',
                                    'type' => 'text'
                                ],
                                'header.coordinator_email' => [
                                    'label' => 'Email',
                                    'type' => 'text'
                                ],
                                'header.coordinator_tel' => [
                                    'label' => 'Teléfono',
                                    'type' => 'text'
                                ]
                            ]
                        ],
                        'resources' => [
                            'type' => 'tab',
                            'title' => 'Recursos',
                            'fields' => [
                                'documents_section' => [
                                    'type' => 'section',
                                    'title' => 'Recursos',
                                    'underline' => true
                                ],
                                'header.resource_instructions' => [
                                    'type' => 'display',
                                    'size' => 'large',
                                    'label' => 'Instrucciones',
                                    'markdown' => true,
                                    'content' => 'Ingrese recursos importantes para esta categoría'
                                ],
                                'header.document_files' => [
                                    'name' => 'documentos',
                                    'type' => 'list',
                                    'label' => 'Documentos',
                                    'fields' => [
                                        '.resource_title' => [
                                            'type' => 'text',
                                            'label' => 'Nombre del recurso'
                                        ],
                                        '.resource_description' => [
                                            'type' => 'textarea',
                                            'label' => 'Descripción'
                                        ],
                                        '.resource_select' => [
                                            'type' => 'select',
                                            'label' => 'Tipo de recurso',
                                            'size' => 'small',
                                            'options' => [
                                                'download' => 'Descargable',
                                                'website' => 'Sitio web',
                                                'video' => 'Video'
                                            ]
                                        ],
                                        '.resource_url' => [
                                            'type' => 'url',
                                            'label' => 'URL externa'
                                        ],
                                        '.resource_file_upload' => [
                                            'type' => 'file',
                                            'label' => 'Suba un adjunto',
                                            'help' => 'Solamente PDF, word o excel',
                                            'multiple' => false,
                                            'destination' => '@self',
                                            'accept' => [
                                                0 => 'application/pdf',
                                                1 => 'application/msword',
                                                2 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                                3 => 'application/vnd.ms-excel',
                                                4 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'options' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.OPTIONS',
                            'fields' => [
                                'publishing' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.PUBLISHING',
                                    'underline' => true,
                                    'fields' => [
                                        'header.published' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.PUBLISHED',
                                            'help' => 'PLUGIN_ADMIN.PUBLISHED_HELP',
                                            'highlight' => 1,
                                            'size' => 'medium',
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.metadata' => [
                                            'toggleable' => true,
                                            'type' => 'array',
                                            'label' => 'PLUGIN_ADMIN.METADATA',
                                            'help' => 'PLUGIN_ADMIN.METADATA_HELP',
                                            'placeholder_key' => 'PLUGIN_ADMIN.METADATA_KEY',
                                            'placeholder_value' => 'PLUGIN_ADMIN.METADATA_VALUE'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'advanced' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.ADVANCED',
                            'fields' => [
                                'columns' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'settings' => [
                                                    'type' => 'section',
                                                    'title' => 'PLUGIN_ADMIN.SETTINGS',
                                                    'underline' => true
                                                ],
                                                'folder' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                                                    'validate' => [
                                                        'rule' => 'slug'
                                                    ]
                                                ],
                                                'route' => [
                                                    'type' => 'parents',
                                                    'label' => 'PLUGIN_ADMIN.PARENT',
                                                    'classes' => 'fancy'
                                                ],
                                                'name' => [
                                                    'type' => 'select',
                                                    'classes' => 'fancy',
                                                    'label' => 'PLUGIN_ADMIN.PAGE_FILE',
                                                    'help' => 'PLUGIN_ADMIN.PAGE_FILE_HELP',
                                                    'default' => 'default',
                                                    'data-options@' => '\\Grav\\Common\\Page\\Pages::pageTypes'
                                                ],
                                                'header.body_classes' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_ADMIN.BODY_CLASSES'
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'order_title' => [
                                                    'type' => 'section',
                                                    'title' => 'PLUGIN_ADMIN.ORDERING',
                                                    'underline' => true
                                                ],
                                                'ordering' => [
                                                    'type' => 'toggle',
                                                    'label' => 'PLUGIN_ADMIN.FOLDER_NUMERIC_PREFIX',
                                                    'help' => 'PLUGIN_ADMIN.FOLDER_NUMERIC_PREFIX_HELP',
                                                    'highlight' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'order' => [
                                                    'type' => 'order',
                                                    'label' => 'PLUGIN_ADMIN.SORTABLE_PAGES',
                                                    'sitemap' => NULL
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'overrides' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.OVERRIDES',
                                    'underline' => true,
                                    'fields' => [
                                        'header.dateformat' => [
                                            'toggleable' => true,
                                            'type' => 'select',
                                            'size' => 'medium',
                                            'selectize' => [
                                                'create' => true
                                            ],
                                            'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                                            'help' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_HELP',
                                            'placeholder' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_PLACEHOLDER',
                                            'data-options@' => '\\Grav\\Common\\Utils::dateFormats',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'header.menu' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_ADMIN.MENU',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.MENU_HELP'
                                        ],
                                        'header.slug' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_ADMIN.SLUG',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.SLUG_HELP',
                                            'validate' => [
                                                'message' => 'PLUGIN_ADMIN.SLUG_VALIDATE_MESSAGE',
                                                'rule' => 'slug'
                                            ]
                                        ],
                                        'header.redirect' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_ADMIN.REDIRECT',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.REDIRECT_HELP'
                                        ],
                                        'header.process' => [
                                            'type' => 'checkboxes',
                                            'label' => 'PLUGIN_ADMIN.PROCESS',
                                            'toggleable' => true,
                                            'config-default@' => 'system.pages.process',
                                            'default' => [
                                                'markdown' => true,
                                                'twig' => false
                                            ],
                                            'options' => [
                                                'markdown' => 'Markdown',
                                                'twig' => 'Twig'
                                            ],
                                            'use' => 'keys'
                                        ],
                                        'header.twig_first' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.TWIG_FIRST',
                                            'help' => 'PLUGIN_ADMIN.TWIG_FIRST_HELP',
                                            'highlight' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.never_cache_twig' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.NEVER_CACHE_TWIG',
                                            'help' => 'PLUGIN_ADMIN.NEVER_CACHE_TWIG_HELP',
                                            'highlight' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.child_type' => [
                                            'type' => 'select',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.DEFAULT_CHILD_TYPE',
                                            'default' => 'default',
                                            'placeholder' => 'PLUGIN_ADMIN.USE_GLOBAL',
                                            'data-options@' => '\\Grav\\Common\\Page\\Pages::types'
                                        ],
                                        'header.routable' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.ROUTABLE',
                                            'help' => 'PLUGIN_ADMIN.ROUTABLE_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.cache_enable' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.CACHING',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.visible' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.VISIBLE',
                                            'help' => 'PLUGIN_ADMIN.VISIBLE_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.debugger' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.DEBUGGER',
                                            'help' => 'PLUGIN_ADMIN.DEBUGGER_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.template' => [
                                            'type' => 'text',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.DISPLAY_TEMPLATE'
                                        ],
                                        'header.append_url_extension' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_ADMIN.APPEND_URL_EXT',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.APPEND_URL_EXT_HELP'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
