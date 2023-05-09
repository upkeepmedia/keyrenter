<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/blueprints/flex-objects/listings.yaml',
    'modified' => 1682514415,
    'size' => 13369,
    'data' => [
        'title' => 'Listings',
        'description' => 'Flex Articles emulate simple pages in Flex. Useful base type if you want to move flat folder of single page type into flex.',
        'type' => 'flex-objects',
        'config' => [
            'admin' => [
                'menu' => [
                    'list' => [
                        'route' => '/listings',
                        'title' => 'Listings',
                        'icon' => 'fa-list',
                        'authorize' => [
                            0 => 'admin.pages',
                            1 => 'admin.super'
                        ],
                        'priority' => 2
                    ]
                ],
                'list' => [
                    'title' => 'address',
                    'fields' => [
                        'header.published' => [
                            'field' => [
                                'type' => 'toggle',
                                'label' => 'Published'
                            ],
                            'width' => 10
                        ],
                        'header.address' => [
                            'link' => 'edit'
                        ],
                        'header.city' => NULL
                    ]
                ]
            ],
            'data' => [
                'object' => 'Grav\\Plugin\\Listings\\Flex\\Types\\Listings\\ListingObject',
                'collection' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericCollection',
                'index' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericIndex',
                'storage' => [
                    'class' => 'Grav\\Framework\\Flex\\Storage\\FolderStorage',
                    'options' => [
                        'formatter' => [
                            'class' => 'Grav\\Framework\\File\\Formatter\\MarkdownFormatter'
                        ],
                        'folder' => 'user-data://listings',
                        'pattern' => '{FOLDER}/{KEY}/listing.md'
                    ]
                ],
                'ordering' => [
                    'storage_key' => 'ASC'
                ]
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'rules' => [
                'slug' => [
                    'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                    'min' => 1,
                    'max' => 200
                ]
            ],
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            '@unset' => true
                        ],
                        'options' => [
                            '@unset' => true
                        ],
                        'seo' => [
                            '@unset' => true
                        ],
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'header.title' => [
                                    '@unset' => true
                                ],
                                'content' => [
                                    'ordering@' => 'row5'
                                ],
                                'hedaer.media_order' => [
                                    'ordering@' => 'features'
                                ],
                                'row1' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'col2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.published' => [
                                                    'type' => 'toggle',
                                                    'label' => 'PLUGIN_ADMIN.PUBLISHED',
                                                    'help' => 'PLUGIN_ADMIN.PUBLISHED_HELP',
                                                    'highlight' => 1,
                                                    'style' => 'vertical',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.YES',
                                                        0 => 'PLUGIN_ADMIN.NO'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col3' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.building_type' => [
                                                    'type' => 'select',
                                                    'style' => 'vertical',
                                                    'classes' => 'fancy',
                                                    'label' => 'Building Type',
                                                    'options' => [
                                                        '' => '',
                                                        'Commercial' => 'Commercial',
                                                        'Condo' => 'Condo',
                                                        'Lots & Land' => 'Lots & Land',
                                                        'Mobile/Manufactured' => 'Mobile/Manufactured',
                                                        'Multi-Family' => 'Multi-Family',
                                                        'Appartment' => 'Appartment',
                                                        'Single-Family' => 'Single-Family',
                                                        'Townhouse' => 'Townhouse'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col4' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.property_type' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Property Type',
                                                    'style' => 'vertical',
                                                    'value_only' => true,
                                                    'help' => 'Choose the type of property',
                                                    'default' => 'Residential',
                                                    'options' => [
                                                        'Residential' => 'Residential',
                                                        'Commercial' => 'Commercial'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col5' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.type' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Listing Type',
                                                    'style' => 'vertical',
                                                    'default' => 'rent',
                                                    'help' => 'Choose the type of listing',
                                                    'options' => [
                                                        'rent' => 'For Rent',
                                                        'sale' => 'For Sale'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'terms_title' => [
                                    'type' => 'section',
                                    'title' => 'Terms',
                                    'underline' => true
                                ],
                                'row2' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'col1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.mls' => [
                                                    'type' => 'number',
                                                    'label' => 'MLS Number',
                                                    'style' => 'vertical',
                                                    'size' => 'small',
                                                    'help' => 'Optional MLS Number'
                                                ]
                                            ]
                                        ],
                                        'col2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.price' => [
                                                    'type' => 'number',
                                                    'label' => 'Listing Price',
                                                    'style' => 'vertical',
                                                    'size' => 'small',
                                                    'help' => 'Monthly Rent or Asking Price'
                                                ]
                                            ]
                                        ],
                                        'col3' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.fee' => [
                                                    'type' => 'number',
                                                    'label' => 'Application Fee',
                                                    'style' => 'vertical',
                                                    'size' => 'small'
                                                ]
                                            ]
                                        ],
                                        'col4' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.deposit' => [
                                                    'type' => 'number',
                                                    'label' => 'Deposit',
                                                    'style' => 'vertical',
                                                    'size' => 'small'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'loc_title' => [
                                    'type' => 'section',
                                    'title' => 'Location',
                                    'underline' => true
                                ],
                                'row3' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'col1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.address' => [
                                                    'type' => 'text',
                                                    'autofocus' => true,
                                                    'style' => 'vertical',
                                                    'label' => 'Street Address',
                                                    'validate' => [
                                                        'required' => true
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.unit' => [
                                                    'type' => 'text',
                                                    'size' => 'small',
                                                    'style' => 'vertical',
                                                    'label' => 'Unit'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'row4' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'col1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.city' => [
                                                    'type' => 'text',
                                                    'style' => 'vertical',
                                                    'label' => 'City'
                                                ]
                                            ]
                                        ],
                                        'col2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.state' => [
                                                    'type' => 'select',
                                                    'style' => 'vertical',
                                                    'classes' => 'fancy',
                                                    'label' => 'State',
                                                    'options' => [
                                                        '' => '',
                                                        'AK' => 'Alaska',
                                                        'AL' => 'Alabama',
                                                        'AS' => 'American Samoa',
                                                        'AZ' => 'Arizona',
                                                        'AR' => 'Arkansas',
                                                        'CA' => 'California',
                                                        'CO' => 'Colorado',
                                                        'CT' => 'Connecticut',
                                                        'DE' => 'Delaware',
                                                        'DC' => 'District of Columbia',
                                                        'FM' => 'Federated States of Micronesia',
                                                        'FL' => 'Florida',
                                                        'GA' => 'Georgia',
                                                        'GU' => 'Guam',
                                                        'HI' => 'Hawaii',
                                                        'ID' => 'Idaho',
                                                        'IL' => 'Illinois',
                                                        'IN' => 'Indiana',
                                                        'IA' => 'Iowa',
                                                        'KS' => 'Kansas',
                                                        'KY' => 'Kentucky',
                                                        'LA' => 'Louisiana',
                                                        'ME' => 'Maine',
                                                        'MH' => 'Marshall Islands',
                                                        'MD' => 'Maryland',
                                                        'MA' => 'Massachusetts',
                                                        'MI' => 'Michigan',
                                                        'MN' => 'Minnesota',
                                                        'MS' => 'Mississippi',
                                                        'MO' => 'Missouri',
                                                        'MT' => 'Montana',
                                                        'NE' => 'Nebraska',
                                                        'NV' => 'Nevada',
                                                        'NH' => 'New Hampshire',
                                                        'NJ' => 'New Jersey',
                                                        'NM' => 'New Mexico',
                                                        'NY' => 'New York',
                                                        'NC' => 'North Carolina',
                                                        'ND' => 'North Dakota',
                                                        'MP' => 'Northern Mariana Islands',
                                                        'OH' => 'Ohio',
                                                        'OK' => 'Oklahoma',
                                                        'OR' => 'Oregon',
                                                        'PW' => 'Palau',
                                                        'PA' => 'Pennsylvania',
                                                        'PR' => 'Puerto Rico',
                                                        'RI' => 'Rhode Island',
                                                        'SC' => 'South Carolina',
                                                        'SD' => 'South Dakota',
                                                        'TN' => 'Tennessee',
                                                        'TX' => 'Texas',
                                                        'UT' => 'Utah',
                                                        'VT' => 'Vermont',
                                                        'VI' => 'Virgin Islands',
                                                        'VA' => 'Virginia',
                                                        'WA' => 'Washington',
                                                        'WV' => 'West Virginia',
                                                        'WI' => 'Wisconsin',
                                                        'WY' => 'Wyoming',
                                                        'AE' => 'Armed Forces Africa',
                                                        'AA' => 'Armed Forces Americas',
                                                        'AP' => 'Armed Forces Pacific'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col3' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.zip' => [
                                                    'type' => 'text',
                                                    'style' => 'vertical',
                                                    'size' => 'small',
                                                    'label' => 'ZIP Code'
                                                ]
                                            ]
                                        ],
                                        'col4' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.county' => [
                                                    'type' => 'text',
                                                    'style' => 'vertical',
                                                    'size' => 'small',
                                                    'label' => 'County'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'prop_title' => [
                                    'type' => 'section',
                                    'title' => 'Property Details',
                                    'underline' => true
                                ],
                                'row5' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'col1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.beds' => [
                                                    'type' => 'number',
                                                    'style' => 'vertical',
                                                    'label' => 'Bedrooms',
                                                    'validate' => [
                                                        'step' => 1
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.baths' => [
                                                    'type' => 'number',
                                                    'style' => 'vertical',
                                                    'label' => 'Bathrooms',
                                                    'validate' => [
                                                        'step' => 0.5
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col3' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.sqft' => [
                                                    'type' => 'number',
                                                    'style' => 'vertical',
                                                    'label' => 'Square Footage'
                                                ]
                                            ]
                                        ],
                                        'col4' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.lot' => [
                                                    'type' => 'float',
                                                    'style' => 'vertical',
                                                    'label' => 'Lot Size',
                                                    'placeholder' => 'In Acres'
                                                ]
                                            ]
                                        ],
                                        'col5' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.yearbuilt' => [
                                                    'type' => 'number',
                                                    'style' => 'vertical',
                                                    'label' => 'Year Built',
                                                    'placeholder' => 'Year Built'
                                                ]
                                            ]
                                        ],
                                        'col6' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.pets' => [
                                                    'type' => 'selectize',
                                                    'style' => 'vertical',
                                                    'label' => 'Pets Allowed',
                                                    'selectize' => [
                                                        'options' => [
                                                            0 => [
                                                                'text' => 'Dogs',
                                                                'value' => 'Dogs'
                                                            ],
                                                            1 => [
                                                                'text' => 'Cats',
                                                                'value' => 'Cats'
                                                            ],
                                                            2 => [
                                                                'text' => 'Other',
                                                                'value' => 'Other Pets'
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.content' => [
                                    'type' => 'markdown',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ]
                                ],
                                'header.features' => [
                                    'type' => 'array',
                                    'label' => 'Property Features'
                                ],
                                'header.media_order' => [
                                    'type' => 'pagemedia',
                                    'label' => 'PLUGIN_ADMIN.PAGE_MEDIA'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
