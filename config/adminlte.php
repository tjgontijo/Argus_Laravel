<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'ARGUS',

    'title_prefix' => 'ARGUS - ',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<img src="/img/site/logo.png" alt="" width="150px">',

    'logo_mini' => '<img src="/img/site/logo_mini.png" alt="" width="27px">',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => true,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [        
        [
            'text'        => 'Meu Perfil',
            'url'         => 'admin/student_area',
            'icon'        => 'user',
            'label'       =>  null,
            'label_color' => 'success',            
        ],  
        [
            'text' => 'Cursos',
            'icon' => 'graduation-cap',
            'can'  => 'course-menu',
            'submenu' => [
                [
                    'text'        => 'Tipos de Curso',
                    'url'         => 'admin/course_type',
                    'icon'        => 'bars',
                    'label'       =>  null,
                    'label_color' => 'success',
                    'can'         => 'course_type-list',
                ],
                [
                    'text'        => 'Cursos',
                    'url'         => 'admin/course',
                    'icon'        => 'graduation-cap',
                    'label'       =>  null,
                    'label_color' => 'success',
                    'can'         => 'course-list',
                ],
                [
                    'text'        => 'Situação dos Cursos',
                    'url'         => 'admin/status_release',
                    'icon'        => 'check-square-o',
                    'label'       =>  null,
                    'label_color' => 'success',
                    'can'         => 'status_release-list',
                ],
                [
                    'text'        => 'Edições de Cursos',
                    'url'         => 'admin/course_release',
                    'icon'        => 'calendar',
                    'label'       =>  null,
                    'label_color' => 'success',
                    'can'         => 'course_release-list',
                ],
                [
                    'text'        => 'Matriculas',
                    'url'         => 'admin/enroll',
                    'icon'        => 'plus',
                    'label'       =>  null,
                    'label_color' => 'success',
                    
                ],
            ],
        ],  
        [
            'text' => 'Cadastro Base',
            'icon' => 'database',
            'can'  => 'base-menu',
            'submenu' => [
                [
                    'text'        => 'Regiões Administrativas',
                    'url'         => 'admin/ra',
                    'icon'        => 'location-arrow',
                    'label'       =>  null,
                    'label_color' => 'success',
                    'can'         => 'ra-list',
                ],           
                [
                    'text'        => 'Unidades/Batalhões',
                    'url'         => 'admin/unit',
                    'icon'        => 'bullseye',
                    'label'       =>  null,
                    'label_color' => 'success',
                    'can'         => 'unit-list',
                ],
                [
                    'text'        => 'Unidades de Ensino',
                    'url'         => 'admin/unitteach',
                    'icon'        => 'institution',
                    'label'       =>  null,
                    'label_color' => 'success',
                    'can'         => 'unit_teach-list',
                ],
            ],
        ],
        [
            'text' => 'Controle de Acesso',
            'icon' => 'lock',
            'can'  => 'permission-menu',
            'submenu' => [        
                [
                    'text'        => 'Permissões',
                    'url'         => 'admin/permissions',
                    'icon'        => 'lock',
                    'label'       =>  null,
                    'label_color' => 'success',
                    'can'         => 'permission-list',
                ],
                [
                    'text'        => 'Papeis',
                    'url'         => 'admin/roles',
                    'icon'        => 'gear',
                    'label'       =>  null,
                    'label_color' => 'success',
                    'can'         => 'role-list',
                ],
                [
                    'text'        => 'Usuários',
                    'url'         => 'admin/user',
                    'icon'        => 'group',
                    'label'       =>  null,
                    'label_color' => 'success',
                    'can'         => 'user-list',
                ],
            ],
        ],
        [
            'text' => 'Ferramentas',
            'icon' => 'gear',
            'submenu' => [
                [
                    'text'        => 'Logs',
                    'url'         => 'admin/log-viewer',
                    'icon'        => 'book',
                    'label'       =>  null,
                    'label_color' => 'success',
                    'can'         => 'log-show',
                ],
                [
                    'text'        => 'Suporte',
                    'url'         => 'https://suporte.iscp.edu.br',
                    'icon'        => 'support',
                    'label'       =>  null,
                    'label_color' => 'success',
                    
                ],
            ],
        ],
        [
            'text' => 'Secretaria',
            'icon' => 'institution',
            'can'  => 'request_secretary-menu',
            'submenu' => [
                [
                    'text'        => 'Solicitações',
                    'url'         => 'admin/request_secretaries',
                    'icon'        => 'book',
                    'label'       =>  null,                    
                    'can'         => 'request_secretary-list',
                ],              
            ],
        ],
        
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => false,
        'select2'    => false,
    ],
];
