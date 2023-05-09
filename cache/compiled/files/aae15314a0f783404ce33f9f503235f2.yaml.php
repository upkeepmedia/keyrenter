<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/blueprints/flex-objects/upkeep.yaml',
    'modified' => 1682514415,
    'size' => 19725,
    'data' => [
        'title' => 'Upkeep',
        'description' => 'Upkeep',
        'type' => 'flex-objects',
        'config' => [
            'admin' => [
                'router' => [
                    'path' => '/upkeep'
                ],
                'menu' => [
                    'list' => [
                        'route' => '/upkeep/upkeep',
                        'title' => 'Upkeep',
                        'icon' => 'fa-arrow-up',
                        'authorize' => [
                            0 => 'admin.contracts.list',
                            1 => 'admin.super'
                        ],
                        'priority' => 2
                    ]
                ],
                'template' => 'default',
                'permissions' => [
                    'admin.contracts' => [
                        'type' => 'crudpl',
                        'label' => 'Upkeep'
                    ]
                ],
                'list' => [
                    'title' => 'title',
                    'fields' => [
                        'id' => NULL,
                        'title' => NULL
                    ]
                ],
                'edit' => [
                    'title' => [
                        'template' => '{{ object.last_name ?? \'Last\' }}, {{ object.first_name ?? \'First Name\' }}'
                    ]
                ],
                'export' => [
                    'enabled' => true,
                    'method' => 'jsonSerialize',
                    'formatter' => [
                        'class' => 'Grav\\Framework\\File\\Formatter\\YamlFormatter'
                    ],
                    'filename' => 'upkeep'
                ]
            ],
            'site' => [
                'templates' => [
                    'collection' => [
                        'paths' => [
                            0 => 'flex/{TYPE}/collection/{LAYOUT}{EXT}'
                        ]
                    ],
                    'object' => [
                        'paths' => [
                            0 => 'flex/{TYPE}/object/{LAYOUT}{EXT}'
                        ]
                    ],
                    'defaults' => [
                        'type' => 'upkeep',
                        'layout' => 'default'
                    ]
                ]
            ],
            'data' => [
                'object' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericObject',
                'collection' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericCollection',
                'index' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericIndex',
                'storage' => [
                    'class' => 'Grav\\Framework\\Flex\\Storage\\FileStorage',
                    'options' => [
                        'formatter' => [
                            'class' => 'Grav\\Framework\\File\\Formatter\\YamlFormatter'
                        ],
                        'folder' => 'config://upkeep',
                        'indexed' => true,
                        'key' => 'filename'
                    ]
                ],
                'search' => [
                    'options' => [
                        'contains' => 1
                    ],
                    'fields' => [
                        0 => 'id',
                        1 => 'title'
                    ]
                ]
            ]
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'fields' => [
                        'basics' => [
                            'type' => 'tab',
                            'title' => 'Site',
                            'fields' => [
                                'filename' => [
                                    'type' => 'hidden',
                                    'value' => 'upkeep',
                                    'default' => 'upkeep'
                                ],
                                'site_title' => [
                                    'type' => 'section',
                                    'underline' => true,
                                    'title' => 'Site'
                                ],
                                'favicons' => [
                                    'type' => 'file',
                                    'label' => 'Favicon Files',
                                    'multiple' => true,
                                    'destination' => 'user/assets',
                                    'help' => 'Generate favicons from favicon.io, unzip and upload them here.',
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.ico',
                                        2 => '.webmanifest'
                                    ]
                                ],
                                'bg' => [
                                    'type' => 'file',
                                    'label' => 'Site-Wide Background Image',
                                    'destination' => 'user/assets',
                                    'help' => 'The Background Image used throughout the site'
                                ],
                                'video_bg' => [
                                    'type' => 'file',
                                    'label' => 'Site-Wide Video',
                                    'destination' => 'user/assets',
                                    'help' => 'The Background Video used through the site'
                                ],
                                'video_bg_poster' => [
                                    'type' => 'file',
                                    'label' => 'Site-Wide Background Video Thumbnail',
                                    'destination' => 'user/assets',
                                    'help' => 'The Background Image used throughout the site while the video is loading'
                                ],
                                'padding_top' => [
                                    'type' => 'number',
                                    'label' => 'Body Padding Top (in Pixels)',
                                    'size' => 'x-small',
                                    'help' => 'The offset for the fixed header (in Pixels)'
                                ],
                                'contact_us' => [
                                    'type' => 'pages',
                                    'label' => 'Contact Us Page',
                                    'default' => '/contact-us',
                                    'show_modular' => false,
                                    'show_root' => false,
                                    'size' => 'medium',
                                    'help' => 'Sets the Contact Us page'
                                ],
                                'area_section' => [
                                    'type' => 'section',
                                    'title' => 'Areas We Serve',
                                    'underline' => true
                                ],
                                'area_title' => [
                                    'type' => 'text',
                                    'label' => 'Areas We Serve Section Title',
                                    'size' => 'large',
                                    'toggleable' => true,
                                    'default' => 'Areas We Serve',
                                    'help' => 'Ovewrite the default title for Areas We Serve'
                                ],
                                'areas_subtitle' => [
                                    'type' => 'text',
                                    'label' => 'Subtitle',
                                    'size' => 'large',
                                    'toggleable' => true,
                                    'help' => 'Add a subtitle to the Areas We Serve area'
                                ],
                                'area_tag' => [
                                    'type' => 'select',
                                    'size' => 'x-small',
                                    'label' => 'Areas We Serve Title Tag',
                                    'default' => 'span',
                                    'options' => [
                                        'h2' => 'H2',
                                        'h3' => 'H3',
                                        'h4' => 'H4',
                                        'span' => 'span'
                                    ]
                                ],
                                'areas_page' => [
                                    'type' => 'pages',
                                    'label' => 'Areas We Serve Page',
                                    'default' => '/areas-we-serve',
                                    'show_modular' => false,
                                    'show_root' => false,
                                    'size' => 'medium',
                                    'help' => 'Sets the Areas We Serve page'
                                ],
                                'company_section' => [
                                    'title' => 'Company',
                                    'type' => 'section',
                                    'underline' => true
                                ],
                                'company_name' => [
                                    'type' => 'text',
                                    'label' => 'Company Name',
                                    'size' => 'medium'
                                ],
                                'state' => [
                                    'type' => 'text',
                                    'label' => 'State/Province',
                                    'help' => 'The full state or povince name',
                                    'size' => 'medium'
                                ],
                                'address' => [
                                    'type' => 'markdown',
                                    'size' => 'medium',
                                    'label' => 'Use the exact address from Google My Business'
                                ],
                                'contact_section' => [
                                    'title' => 'Analytics & Social',
                                    'type' => 'section',
                                    'underline' => true
                                ],
                                'analytics_id' => [
                                    'type' => 'text',
                                    'label' => 'Google Analytics ID',
                                    'size' => 'small'
                                ],
                                'grade_us' => [
                                    'type' => 'url',
                                    'label' => 'Grade.us URL',
                                    'size' => 'large'
                                ],
                                'places_api_key' => [
                                    'type' => 'text',
                                    'label' => 'Google API Key',
                                    'size' => 'medium',
                                    'help' => 'The google@upkeepmedia.com credentials to access our Google APIs'
                                ],
                                'place_id' => [
                                    'type' => 'text',
                                    'label' => 'Google Place ID',
                                    'help' => 'Place ID from Google Maps/GMB',
                                    'size' => 'medium'
                                ],
                                'social' => [
                                    'type' => 'list',
                                    'collapsed' => true,
                                    'label' => 'Social',
                                    'btnLabel' => 'Add Social Link',
                                    'fields' => [
                                        '.type' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'Type',
                                            'help' => 'Facebook, LinkedIn, etc.'
                                        ],
                                        '.url' => [
                                            'type' => 'url',
                                            'label' => 'URL'
                                        ],
                                        '.icon' => [
                                            'type' => 'iconpicker',
                                            'size' => 'small;',
                                            'label' => 'Icon'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'header_tab' => [
                            'type' => 'tab',
                            'title' => 'Header',
                            'fields' => [
                                'htmltitle' => [
                                    'type' => 'section',
                                    'title' => 'HTML Head',
                                    'underline' => true
                                ],
                                'head_embed' => [
                                    'type' => 'textarea',
                                    'label' => 'Embed Code',
                                    'size' => 'large'
                                ],
                                'logo_title' => [
                                    'type' => 'section',
                                    'title' => 'Logo',
                                    'underline' => true
                                ],
                                'logo' => [
                                    'type' => 'file',
                                    'label' => 'Logo',
                                    'destination' => 'user/assets'
                                ],
                                'logo_svg' => [
                                    'type' => 'file',
                                    'label' => 'SVG Logo',
                                    'destination' => 'user/assets',
                                    'help' => 'SVG Logo is used by some themes to create white/color version of the logo'
                                ],
                                'logo_height' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'Logo Height (in Pixels)'
                                ],
                                'nav_title' => [
                                    'type' => 'section',
                                    'title' => 'Navigation',
                                    'underline' => true
                                ],
                                'navigation_style' => [
                                    'type' => 'select',
                                    'label' => 'Navigation Style',
                                    'default' => 'uppercase',
                                    'options' => [
                                        'uppercase' => 'Uppercase',
                                        'capitalize' => 'Capitalize'
                                    ]
                                ],
                                'toplinks_title' => [
                                    'type' => 'section',
                                    'title' => 'Top Links',
                                    'underline' => true
                                ],
                                'portals' => [
                                    'type' => 'list',
                                    'collapsed' => true,
                                    'label' => 'Portal Links',
                                    'btnLabel' => 'Add Portal Link',
                                    'help' => 'Links that appear above the logo (Desktop Only)',
                                    'min' => 0,
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'size' => 'medium',
                                            'label' => 'Link Text'
                                        ],
                                        '.page' => [
                                            'type' => 'pages',
                                            'size' => 'medium',
                                            'show_modular' => false,
                                            'label' => 'Page'
                                        ]
                                    ]
                                ],
                                'contact_links' => [
                                    'type' => 'list',
                                    'label' => 'Contact Links',
                                    'collapsed' => true,
                                    'help' => 'Links that appear above Contact Us (Desktop Only)',
                                    'btnLabel' => 'Add Contact Link',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'Link Text',
                                            'help' => 'Phone Number, etc...'
                                        ],
                                        '.link' => [
                                            'type' => 'text',
                                            'size' => 'medium',
                                            'label' => 'Link URL'
                                        ],
                                        '.icon' => [
                                            'type' => 'iconpicker',
                                            'label' => 'Icon'
                                        ],
                                        '.break' => [
                                            'type' => 'toggle',
                                            'label' => 'Line break',
                                            'default' => 0,
                                            'help' => 'Break this link onto a seperate line (increases topbar height)',
                                            'options' => [
                                                0 => 'Disabled',
                                                1 => 'Enabled'
                                            ],
                                            'vaidate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ],
                                'banner_title' => [
                                    'type' => 'section',
                                    'title' => 'Top Bar Banner',
                                    'underline' => true
                                ],
                                'banner' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Banner',
                                    'default' => 0,
                                    'highlight' => 1,
                                    'options' => [
                                        0 => 'Disabled',
                                        1 => 'Enabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'banner_text' => [
                                    'type' => 'Banner Text',
                                    'label' => 'Banner Text'
                                ],
                                'banner_link' => [
                                    'type' => 'pages',
                                    'show_root' => false,
                                    'label' => 'Banner Link',
                                    'toggleable' => true
                                ],
                                'banner_classes' => [
                                    'type' => 'text',
                                    'default' => 'bg-gray-800 text-white p-4',
                                    'label' => 'Banner Classes'
                                ],
                                'mobile_title' => [
                                    'type' => 'section',
                                    'title' => 'Mobile Top Link',
                                    'underline' => true
                                ],
                                'mobile_link_text' => [
                                    'type' => 'text',
                                    'label' => 'Mobile Link Text',
                                    'size' => 'medium',
                                    'help' => 'Usually Click to Call 555 555 5555'
                                ],
                                'mobile_link' => [
                                    'type' => 'text',
                                    'label' => 'Mobile Link',
                                    'size' => 'medium',
                                    'help' => 'The link for mobile'
                                ]
                            ]
                        ],
                        'footer' => [
                            'type' => 'tab',
                            'title' => 'Footer',
                            'fields' => [
                                'footer_title' => [
                                    'type' => 'section',
                                    'title' => 'Footer Links',
                                    'underline' => true
                                ],
                                'footer_case' => [
                                    'type' => 'select',
                                    'default' => 'uppercase',
                                    'label' => 'Footer Titles Case',
                                    'options' => [
                                        'uppercase' => 'Uppercase',
                                        'normal-case' => 'Normal Case',
                                        'capitalize' => 'Capitalize'
                                    ]
                                ],
                                'menu_as_links' => [
                                    'type' => 'toggle',
                                    'label' => 'Use Menu for Footer Links',
                                    'toggleable' => true,
                                    'help' => 'This recreates the menu in the footer and overrides and Footer Links that are set.',
                                    'default' => 0,
                                    'highlight' => 1,
                                    'options' => [
                                        0 => 'Disabled',
                                        1 => 'Enabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'footer_links' => [
                                    'type' => 'list',
                                    'label' => 'Footer Links',
                                    'collapsed' => true,
                                    'btnLabel' => 'Add Footer Link',
                                    'help' => 'Links in the second columns in the footer',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'size' => 'medium',
                                            'label' => 'Link Text'
                                        ],
                                        '.page' => [
                                            'type' => 'pages',
                                            'size' => 'medium',
                                            'show_modular' => false,
                                            'label' => 'Page'
                                        ]
                                    ]
                                ],
                                'footer_second_title' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Second Column Title',
                                    'default' => 'Our Company'
                                ],
                                'footer_right_settings' => [
                                    'type' => 'section',
                                    'title' => 'Footer Right Settings',
                                    'underline' => true
                                ],
                                'footer_right_title' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'toggleable' => true,
                                    'label' => 'Footer Right Title'
                                ],
                                'footer_right' => [
                                    'type' => 'select',
                                    'label' => 'Right-Most Column Content',
                                    'size' => 'medium',
                                    'default' => 'areas',
                                    'options' => [
                                        'areas' => 'Areas We Serve',
                                        'testimonial' => 'Testimonial',
                                        'recent_posts' => 'Recent Blog Posts',
                                        'google_map' => 'Google Map',
                                        'contact_form' => 'Contact Us',
                                        'website_links' => 'Website Links'
                                    ]
                                ],
                                'website_links' => [
                                    'type' => 'list',
                                    'label' => 'Website Links',
                                    'collapsed' => true,
                                    'btnLabel' => 'Add Website Link',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'Link Text',
                                            'help' => 'Name of the webiste'
                                        ],
                                        '.link' => [
                                            'type' => 'url',
                                            'size' => 'medium',
                                            'label' => 'Link URL'
                                        ]
                                    ]
                                ],
                                'bottom_footer_title' => [
                                    'type' => 'section',
                                    'title' => 'Bottom Footer Bar',
                                    'underline' => true
                                ],
                                'footer_prefix' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Footer Pre-Text',
                                    'default' => 'Property Management Websites by ',
                                    'help' => 'The text to display before the link to UpkeepMedia in the footer'
                                ],
                                'footer_ada' => [
                                    'type' => 'toggle',
                                    'label' => 'ADA Compliance',
                                    'default' => 0,
                                    'highlight' => 1,
                                    'options' => [
                                        0 => 'Disabled',
                                        1 => 'Enabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'prefooter_section' => [
                                    'type' => 'section',
                                    'title' => 'Prefooter',
                                    'underline' => true
                                ],
                                'prefooter_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Prefooter',
                                    'default' => 0,
                                    'highlight' => 1,
                                    'options' => [
                                        0 => 'Disabled',
                                        1 => 'Enabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'prefooter_content' => [
                                    'label' => 'Prefooter Content',
                                    'type' => 'markdown',
                                    'size' => 'medium'
                                ],
                                'prefooter_button_page' => [
                                    'type' => 'pages',
                                    'label' => 'Button Page'
                                ],
                                'prefooter_button_text' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Button Text'
                                ],
                                'bottom_embed_title' => [
                                    'type' => 'section',
                                    'title' => 'Bottom Embed'
                                ],
                                'bottom_embed' => [
                                    'type' => 'textarea',
                                    'label' => 'Bottom Embed Code',
                                    'size' => 'large'
                                ],
                                'fixed' => [
                                    'type' => 'section',
                                    'title' => 'Fixed CTA'
                                ],
                                'fixed_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Show CTA',
                                    'default' => 0,
                                    'highlight' => 1,
                                    'options' => [
                                        0 => 'Disabled',
                                        1 => 'Enabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'fixed_content' => [
                                    'type' => 'text',
                                    'label' => 'Content'
                                ],
                                'fixed_classes' => [
                                    'type' => 'text',
                                    'label' => 'CTA Classes'
                                ],
                                'fixed_link' => [
                                    'type' => 'pages',
                                    'label' => 'Page Link',
                                    'toggleable' => true
                                ]
                            ]
                        ],
                        'sidebar' => [
                            'type' => 'tab',
                            'title' => 'Sidebar',
                            'fields' => [
                                'testimonial_title' => [
                                    'type' => 'section',
                                    'title' => 'Testimonial',
                                    'underline' => true
                                ],
                                'testimonial' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'label' => 'Default Testimonial',
                                    'help' => 'Testimonial displayed in the sidebar. Can be changed on a page-by-page basis',
                                    'options' => [
                                        0 => 'First',
                                        1 => 'Second',
                                        2 => 'Third',
                                        'random' => 'Random'
                                    ]
                                ],
                                'guarantee_title' => [
                                    'type' => 'section',
                                    'title' => 'Guarantees',
                                    'underline' => true
                                ],
                                'guarantees' => [
                                    'type' => 'pages',
                                    'show_modular' => true,
                                    'size' => 'small',
                                    'start_route' => '/home/_guarantees',
                                    'label' => 'List Guarantees',
                                    'toggleable' => true
                                ],
                                'form_title' => [
                                    'type' => 'section',
                                    'title' => 'Sidebar Form',
                                    'underline' => true
                                ],
                                'sticky_top' => [
                                    'type' => 'number',
                                    'label' => 'Sticky Top Spacing',
                                    'help' => 'The space between the top of the form and the top of the window when it is set to position:sticky, in pixels',
                                    'size' => 'x-small',
                                    'validate' => [
                                        'type' => 'number'
                                    ]
                                ]
                            ]
                        ],
                        'community' => [
                            'type' => 'tab',
                            'title' => 'Community',
                            'fields' => [
                                'community_title' => [
                                    'type' => 'section',
                                    'underline' => true,
                                    'title' => 'Community Details'
                                ],
                                'apply_now' => [
                                    'type' => 'url',
                                    'size' => 'medium',
                                    'label' => 'Apply Now Link'
                                ],
                                'lease_terms' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Lease Terms'
                                ],
                                'deposit' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Security Deposit'
                                ],
                                'pets' => [
                                    'type' => 'selectize',
                                    'label' => 'Pet Policy',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ],
                                'community_features' => [
                                    'type' => 'array',
                                    'label' => 'Community Features',
                                    'collapsed' => true,
                                    'value_only' => true
                                ],
                                'apartment_features' => [
                                    'type' => 'array',
                                    'label' => 'Apartment Features',
                                    'collapsed' => true,
                                    'value_only' => true
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
