<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="apple-touch-icon" href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/favicon/apple-touch-icon-152x152.png">
        <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- BEGIN: VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/flag-icon/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/quill/quill.snow.css">
        <link rel="stylesheet" href="../../../app-assets/vendors/select2/select2.min.css" type="text/css">
        <link rel="stylesheet" href="../../../app-assets/vendors/select2/select2-materialize.css" type="text/css">
        <!-- END: VENDOR CSS-->
        <!-- BEGIN: Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-gradient-menu-template/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-gradient-menu-template/style.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-sidebar.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-todo.min.css">
        <!-- END: Page Level CSS-->
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
        <!-- END: Custom CSS-->
        <!-- Styles -->


    </head>
{{--    <body>--}}
{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    Laravel--}}
{{--                </div>--}}

{{--                <div class="links">--}}
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://vapor.laravel.com">Vapor</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-gradient-menu preload-transitions 2-columns  app-page " data-open="click" data-menu="vertical-gradient-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
                <div class="nav-wrapper">

                    <ul class="navbar-list right">
                        <li class="dropdown-language"><a class="waves-effect waves-block waves-light translation-button" href="app-todo.html#" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>
                        <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                        <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
                        <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
                        <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
                        <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="app-todo.html#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
                    </ul>
                    <!-- translation-button-->
                    <ul class="dropdown-content" id="translation-dropdown">
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="app-todo.html#!" data-language="en"><i class="flag-icon flag-icon-gb"></i> English</a></li>
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="app-todo.html#!" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a></li>
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="app-todo.html#!" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="app-todo.html#!" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a></li>
                    </ul>
                    <!-- notifications-dropdown-->
                    <ul class="dropdown-content" id="notifications-dropdown">
                        <li>
                            <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                        </li>
                        <li class="divider"></li>
                        <li><a class="black-text" href="app-todo.html#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                        </li>
                        <li><a class="black-text" href="app-todo.html#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                        </li>
                        <li><a class="black-text" href="app-todo.html#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                        </li>
                        <li><a class="black-text" href="app-todo.html#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                        </li>
                        <li><a class="black-text" href="app-todo.html#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                        </li>
                    </ul>
                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li><a class="grey-text text-darken-1" href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
                        <li><a class="grey-text text-darken-1" href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/app-chat.html"><i class="material-icons">chat_bubble_outline</i> Chat</a></li>
                        <li><a class="grey-text text-darken-1" href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-faq.html"><i class="material-icons">help_outline</i> Help</a></li>
                        <li class="divider"></li>
                        <li><a class="grey-text text-darken-1" href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/user-lock-screen.html"><i class="material-icons">lock_outline</i> Lock</a></li>
                        <li><a class="grey-text text-darken-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="material-icons">keyboard_tab</i> Logout</a></li>
                    </ul>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <nav class="display-none search-sm">
                    <div class="nav-wrapper">
                        <form id="navbarForm">
                            <div class="input-field search-input-sm">
                                <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                                <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                                <ul class="search-list collection search-list-sm display-none"></ul>
                            </div>
                        </form>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
        <li class="auto-suggestion-title"><a class="collection-item" href="app-todo.html#">
                <h6 class="search-title">FILES</h6></a></li>
        <li class="auto-suggestion"><a class="collection-item" href="app-todo.html#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../../../app-assets/images/icon/pdf-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
                    </div>
                    <div class="status"><small class="grey-text">17kb</small></div>
                </div></a></li>
        <li class="auto-suggestion"><a class="collection-item" href="app-todo.html#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../../../app-assets/images/icon/doc-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
                    </div>
                    <div class="status"><small class="grey-text">550kb</small></div>
                </div></a></li>
        <li class="auto-suggestion"><a class="collection-item" href="app-todo.html#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../../../app-assets/images/icon/xls-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
                    </div>
                    <div class="status"><small class="grey-text">20kb</small></div>
                </div></a></li>
        <li class="auto-suggestion"><a class="collection-item" href="app-todo.html#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../../../app-assets/images/icon/jpg-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
                    </div>
                    <div class="status"><small class="grey-text">37kb</small></div>
                </div></a></li>
        <li class="auto-suggestion-title"><a class="collection-item" href="app-todo.html#">
                <h6 class="search-title">MEMBERS</h6></a></li>
        <li class="auto-suggestion"><a class="collection-item" href="app-todo.html#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-7.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
                    </div>
                </div></a></li>
        <li class="auto-suggestion"><a class="collection-item" href="app-todo.html#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-8.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
                    </div>
                </div></a></li>
        <li class="auto-suggestion"><a class="collection-item" href="app-todo.html#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-10.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
                    </div>
                </div></a></li>
        <li class="auto-suggestion"><a class="collection-item" href="app-todo.html#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-12.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
                    </div>
                </div></a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
        <li class="auto-suggestion-title"><a class="collection-item" href="app-todo.html#">
                <h6 class="search-title">PAGES</h6></a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
        <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="app-todo.html#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
    </ul>



    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark gradient-45deg-deep-purple-blue sidenav-gradient sidenav-active-rounded">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/index.html"><img class="hide-on-med-and-down " src="../../../app-assets/images/logo/materialize-logo.png" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="../../../app-assets/images/logo/materialize-logo-color.png" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="app-todo.html#"><i class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge pill orange float-right mr-10">3</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/dashboard-modern.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Modern</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/dashboard-ecommerce.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/dashboard-analytics.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Analytics</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="Templates">Templates</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Vertical</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern Menu">Modern Menu</span></a>
                                    </li>
                                    <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-menu-nav-dark-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Navbar Dark">Navbar Dark</span></a>
                                    </li>
                                    <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Gradient Menu">Gradient Menu</span></a>
                                    </li>
                                    <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-dark-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Dark Menu">Dark Menu</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Horizontal">Horizontal</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/horizontal-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Horizontal Menu">Horizontal Menu</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Applications</a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/app-email.html"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="Mail">Mail</span><span class="badge new badge pill pink accent-2 float-right mr-2">5</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/app-chat.html"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="Chat">Chat</span></a>
            </li>
            <li class="active bold"><a class="waves-effect waves-cyan active " href="app-todo.html"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">ToDo</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/app-kanban.html"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Kanban">Kanban</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/app-file-manager.html"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="File Manager">File manager</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/app-contacts.html"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Contacts">Contacts</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/app-calendar.html"><i class="material-icons">today</i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/app-invoice-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">Invoice List</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/app-invoice-view.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice View">Invoice View</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/app-invoice-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Edit">Invoice Edit</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/app-invoice-add.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Add">Invoice Add</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="eCommerce">eCommerce</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/eCommerce-products-page.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Products Page">Products Page</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/eCommerce-pricing.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pricing">Pricing</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Pages </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/user-profile-page.html"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">User Profile</span></a>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="Pages">Pages</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-contact.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Contact</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-blog-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Blog">Blog</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-search.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Search">Search</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-knowledge.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Knowledge">Knowledge</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-timeline.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Timeline">Timeline</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-faq.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="FAQs">FAQs</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-account-settings.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Account Settings">Account Settings</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-blank.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Blank">Page Blank</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-collapse.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Collapse">Page Collapse</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">crop_original</i><span class="menu-title" data-i18n="Medias">Medias</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/media-gallery-page.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Gallery Page">Gallery Page</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/media-hover-effects.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Media Hover Effects">Media Hover Effects</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">face</i><span class="menu-title" data-i18n="User">User</span><span class="badge badge pill purple float-right mr-10">3</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-users-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="List">List</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-users-view.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="View">View</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-users-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Edit">Edit</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">lock_open</i><span class="menu-title" data-i18n="Authentication">Authentication</span><span class="badge badge pill purple float-right mr-10">10</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/user-login.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Login">Login</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/user-register.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Register">Register</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/user-forgot-password.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Forgot Password">Forgot Password</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/user-lock-screen.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Lock Screen">Lock Screen</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">filter_tilt_shift</i><span class="menu-title" data-i18n="Misc">Misc</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-404.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="404">404</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-maintenance.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Maintenanace">Page Maintenanace</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/page-500.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="500">500</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">User Interface </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">cast</i><span class="menu-title" data-i18n="Cards">Cards</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/cards-basic.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards">Cards</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/cards-advance.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Advance">Cards Advance</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/cards-extended.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Extended">Cards Extended</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">invert_colors</i><span class="menu-title" data-i18n="CSS">CSS</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/css-typography.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Typograpy">Typograpy</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/css-color.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Color">Color</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/css-grid.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Grid">Grid</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/css-helpers.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Helpers">Helpers</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/css-media.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Media">Media</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/css-pulse.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pulse">Pulse</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/css-sass.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sass">Sass</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/css-shadow.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Shadow">Shadow</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/css-animations.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Animations">Animations</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/css-transitions.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Transitions">Transitions</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Basic UI">Basic UI</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Buttons">Buttons</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/ui-basic-buttons.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/ui-extended-buttons.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Extended">Extended</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/ui-icons.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Icons">Icons</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/ui-alerts.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Alerts">Alerts</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/ui-badges.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Badges">Badges</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/ui-breadcrumbs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/ui-chips.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Chips">Chips</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/ui-collections.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Collections">Collections</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/ui-navbar.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Navbar">Navbar</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/ui-pagination.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pagination">Pagination</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/ui-preloader.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Preloader">Preloader</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_brightness</i><span class="menu-title" data-i18n="Advanced UI">Advanced UI</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/advance-ui-carousel.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Carousel">Carousel</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/advance-ui-collapsibles.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Collapsibles">Collapsibles</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/advance-ui-toasts.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Toasts">Toasts</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/advance-ui-tooltip.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Tooltip">Tooltip</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/advance-ui-dropdown.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Dropdown">Dropdown</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/advance-ui-feature-discovery.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Discovery">Discovery</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/advance-ui-media.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Media">Media</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/advance-ui-modals.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modals">Modals</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/advance-ui-scrollspy.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Scrollspy">Scrollspy</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/advance-ui-tabs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Tabs">Tabs</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/advance-ui-waves.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Waves">Waves</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add_to_queue</i><span class="menu-title" data-i18n="Extra Components">Extra Components</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/extra-components-range-slider.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Range Slider">Range Slider</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/extra-components-sweetalert.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sweetalert">Sweetalert</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/extra-components-nestable.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Nestable">Nestable</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/extra-components-treeview.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Treeview">Treeview</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/extra-components-ratings.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Ratings">Ratings</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/extra-components-tour.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Tour">Tour</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/extra-components-i18n.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="i18n">i18n</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/extra-components-highlight.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Highlight">Highlight</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Tables &amp; Forms </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/table-basic.html"><i class="material-icons">border_all</i><span class="menu-title" data-i18n="Basic Tables">Basic Tables</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/table-data-table.html"><i class="material-icons">grid_on</i><span class="menu-title" data-i18n="Data Tables">Data Tables</span></a>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">chrome_reader_mode</i><span class="menu-title" data-i18n="Forms">Forms</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/form-elements.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Elements">Form Elements</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/form-select2.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Select2">Form Select2</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/form-validation.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Validation">Form Validation</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/form-masks.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Masks">Form Masks</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/form-editor.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Editor">Form Editor</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/form-file-uploads.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="File Uploads">File Uploads</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/form-layouts.html"><i class="material-icons">image_aspect_ratio</i><span class="menu-title" data-i18n="Form Layouts">Form Layouts</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/form-wizard.html"><i class="material-icons">settings_ethernet</i><span class="menu-title" data-i18n="Form Wizard">Form Wizard</span></a>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Charts</a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="Chart">Chart</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/charts-chartjs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="ChartJS">ChartJS</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/charts-chartist.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Chartist">Chartist</span></a>
                        </li>
                        <li><a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/charts-sparklines.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sparkline Charts">Sparkline Charts</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Misc </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Menu levels">Menu levels</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level">Second level</span></a>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level child">Second level child</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Third level">Third level</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/documentation/index.html" target="_blank"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.ticksy.com/" target="_blank"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="Support">Support</span></a>
            </li>
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="app-todo.html#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <!-- Sidebar Area Starts -->
                    <div class="todo-overlay"></div>
                    <div class="sidebar-left sidebar-fixed">
                        <div class="sidebar">
                            <div class="sidebar-content">
                                <div class="sidebar-header">
                                    <div class="sidebar-details">
                                        <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">check_box</i> To-Do</h5>
                                        <div class="row valign-wrapper mt-10 pt-2 animate fadeLeft">
                                            <div class="col s3 media-image">
                                                <img src="../../../app-assets/images/user/2.jpg" alt="" class="circle z-depth-2 responsive-img">
                                                <!-- notice the "circle" class -->
                                            </div>
                                            <div class="col s9">
                                                <p class="m-0 subtitle font-weight-700">Lawrence Collins</p>
                                                <p class="m-0 text-muted">lawrence.collins@xyz.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="sidebar-list" class="sidebar-menu list-group position-relative  animate fadeLeft">
                                    <div class="sidebar-list-padding app-sidebar sidenav" id="todo-sidenav">
                                        <ul class="todo-list display-grid">
                                            <li class="active"><a href="app-todo.html#!" class="text-sub"><i class="material-icons mr-2"> mail_outline </i> All</a>
                                            </li>
                                            <li class="sidebar-title">Filters</li>
                                            <li><a href="app-todo.html#!" class="text-sub"><i class="material-icons mr-2"> star_border </i> Starred</a></li>
                                            <li><a href="app-todo.html#!" class="text-sub"><i class="material-icons mr-2"> info_outline </i> Priority</a></li>
                                            <li><a href="app-todo.html#!" class="text-sub"><i class="material-icons mr-2"> watch_later </i> Scheduled</a></li>
                                            <li><a href="app-todo.html#!" class="text-sub"><i class="material-icons mr-2"> date_range </i> Today</a></li>
                                            <li><a href="app-todo.html#!" class="text-sub"><i class="material-icons mr-2"> check </i> Done</a></li>
                                            <li><a href="app-todo.html#!" class="text-sub"><i class="material-icons mr-2"> delete </i> Delete</a></li>
                                            <li class="sidebar-title">Department</li>
                                            <li><a href="app-todo.html#!" class="text-sub"><i class="purple-text material-icons small-icons mr-2">
                                                        fiber_manual_record </i> API</a></li>
                                            <li><a href="app-todo.html#!" class="text-sub"><i class="amber-text material-icons small-icons mr-2">
                                                        fiber_manual_record </i> Paypal</a></li>
                                            <li><a href="app-todo.html#!" class="text-sub"><i class="light-green-text material-icons small-icons mr-2">
                                                        fiber_manual_record </i> Invoice</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="app-todo.html#" data-target="todo-sidenav" class="sidenav-trigger hide-on-large-only"><i
                                        class="material-icons">menu</i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Area Ends -->

                    <!-- Content Area Starts -->
                    <div class="app-todo">
                        <div class="content-area content-right">
                            <div class="app-wrapper">
                                <div class="app-search">
                                    <i class="material-icons mr-2 search-icon">search</i>
                                    <input type="text" placeholder="Search Contact" class="app-filter" id="todo_filter">
                                </div>
                                <div class="card card card-default scrollspy border-radius-6 fixed-width">
                                    <div class="card-content p-0 pb-1">
                                        <div class="todo-header">
{{--                                            <div class="header-checkbox">--}}
{{--                                                <label>--}}
{{--                                                    <input type="checkbox" onClick="toggle(this)" />--}}
{{--                                                    <span></span>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
                                            <div class="list-content"></div>
                                            <div class="todo-action">
                                                <span class="delete-tasks"><i class="material-icons grey-text mr-1">delete</i></span>
                                                <span class="sort-task"><i class="material-icons grey-text">sort</i></span>
                                                <div class="select-action">
                                                    <!-- Dropdown Trigger -->
                                                    <a class='dropdown-trigger grey-text' href='app-todo.html#' data-target='dropdown1'>
                                                        <i class="material-icons">more_vert</i>
                                                    </a>
                                                    <!-- Dropdown Structure -->
                                                    <ul id='dropdown1' class='dropdown-content'>
                                                        <li><a href="app-todo.html#!">All</a></li>
                                                        <li><a href="app-todo.html#!">Read</a></li>
                                                        <li><a href="app-todo.html#!">Unread</a></li>
                                                        <li><a href="app-todo.html#!">Starred</a></li>
                                                        <li><a href="app-todo.html#!">Unstarred</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="collection todo-collection">
                                            <li class="collection-item todo-items">
{{--                                                <div class="todo-move">--}}
{{--                                                    <i class="material-icons icon-move">more_vert</i>--}}
{{--                                                </div>--}}
{{--                                                <div class="list-left">--}}
{{--                                                    <label>--}}
{{--                                                        <input type="checkbox" name="foo" />--}}
{{--                                                        <span></span>--}}
{{--                                                    </label>--}}
{{--                                                    <i class="material-icons favorite">star_border</i>--}}
{{--                                                </div>--}}
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="list-title">Contrary to popular belief</div>
                                                        <span class="badge grey lighten-2"><i class="purple-text material-icons small-icons mr-2">
                      fiber_manual_record </i>API</span>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour, or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of Lorem Ipsum</div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 23 Apr </div>
                                                    <div class="delete-task"><i class="material-icons">delete</i></div>
                                                </div>
                                            </li>
                                            <li class="collection-item todo-items">
                                                <div class="todo-move">
                                                    <i class="material-icons icon-move">more_vert</i>
                                                </div>
                                                <div class="list-left">
                                                    <label>
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                    <i class="material-icons favorite">star_border</i>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="list-title">Cupcake tootsie roll icing biscuit</div>
                                                        <span class="badge grey lighten-2"><i class="amber-text material-icons small-icons mr-2">
                      fiber_manual_record </i>Paypal</span>
                                                    </div>
                                                    <div class="list-desc">Chocolate cake biscuit candy canes carrot cake. Bear claw wafer jujubes bear
                                                        claw candy biscuit. Jelly-o pudding topping. Muffin soufflé cotton candy topping candy muffin
                                                        biscuit. Lemon drops lemon drops powder gingerbread pastry cake.</div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 23 Apr </div>
                                                    <div class="delete-task"><i class="material-icons">delete</i></div>
                                                </div>
                                            </li>
                                            <li class="collection-item todo-items">
                                                <div class="todo-move">
                                                    <i class="material-icons icon-move">more_vert</i>
                                                </div>
                                                <div class="list-left">
                                                    <label>
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                    <i class="material-icons favorite">star_border</i>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="list-title">Apple pie cake biscuit bonbon</div>
                                                        <span class="badge grey lighten-2"><i class="purple-text material-icons small-icons mr-2">
                      fiber_manual_record </i>API</span>
                                                    </div>
                                                    <div class="list-desc">Pudding ice cream macaroon caramels oat cake gummies jelly-o wafer macaroon.
                                                        Gingerbread cheesecake pudding donut halvah pastry cheesecake. Tootsie roll lemon drops brownie ice
                                                        cream jelly jelly fruitcake. Muffin tiramisu cake ice cream.</div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 23 Apr </div>
                                                    <div class="delete-task"><i class="material-icons">delete</i></div>
                                                </div>
                                            </li>
                                            <li class="collection-item todo-items">
                                                <div class="todo-move">
                                                    <i class="material-icons icon-move">more_vert</i>
                                                </div>
                                                <div class="list-left">
                                                    <label>
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                    <i class="material-icons favorite">star_border</i>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="list-title">Cupcake danish icing cupcake cupcake</div>
                                                        <span class="badge grey lighten-2"><i class="light-green-text material-icons small-icons mr-2">
                      fiber_manual_record </i>Invoice</span>
                                                    </div>
                                                    <div class="list-desc">Pie soufflé gummies danish cake pudding tart lollipop. Donut apple pie marzipan.
                                                        Cupcake pastry gingerbread chocolate cake ice cream icing muffin. Lemon drops cotton candy liquorice
                                                        candy icing ice cream bear claw. Candy gummies gummies macaroon jujubes biscuit lemon drops.</div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 23 Apr </div>
                                                    <div class="delete-task"><i class="material-icons">delete</i></div>
                                                </div>
                                            </li>
                                            <li class="collection-item todo-items">
                                                <div class="todo-move">
                                                    <i class="material-icons icon-move">more_vert</i>
                                                </div>
                                                <div class="list-left">
                                                    <label>
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                    <i class="material-icons favorite">star_border</i>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="list-title">Cake macaroon topping jelly</div>
                                                        <span class="badge grey lighten-2"><i class="amber-text material-icons small-icons mr-2">
                      fiber_manual_record </i>Paypal</span>
                                                    </div>
                                                    <div class="list-desc">Apple pie icing powder cheesecake sweet roll halvah pudding sugar plum toffee.
                                                        Cotton candy tart apple pie.Tart bonbon halvah cake. Carrot cake sugar plum tootsie roll macaroon
                                                        jujubes.</div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 23 Apr </div>
                                                    <div class="delete-task"><i class="material-icons">delete</i></div>
                                                </div>
                                            </li>
                                            <li class="collection-item todo-items">
                                                <div class="todo-move">
                                                    <i class="material-icons icon-move">more_vert</i>
                                                </div>
                                                <div class="list-left">
                                                    <label>
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                    <i class="material-icons favorite">star_border</i>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="list-title">Wafer chocolate cake tiramisu</div>
                                                        <span class="badge grey lighten-2"><i class="amber-text material-icons small-icons mr-2">
                      fiber_manual_record </i>Paypal</span>
                                                    </div>
                                                    <div class="list-desc">Candy sesame snaps tiramisu bear claw ice cream chocolate fruitcake powder
                                                        biscuit. Pudding oat cake cotton candy. Candy canes sweet fruitcake. Macaroon pie bear claw sweet oat
                                                        cake candy.Marzipan soufflé sugar plum caramels oat cake cake.</div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 23 Apr </div>
                                                    <div class="delete-task"><i class="material-icons">delete</i></div>
                                                </div>
                                            </li>
                                            <li class="collection-item todo-items">
                                                <div class="todo-move">
                                                    <i class="material-icons icon-move">more_vert</i>
                                                </div>
                                                <div class="list-left">
                                                    <label>
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                    <i class="material-icons favorite">star_border</i>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="list-title">Chocolate cake donut jujubes</div>
                                                        <span class="badge grey lighten-2"><i class="purple-text material-icons small-icons mr-2">
                      fiber_manual_record </i>API</span>
                                                    </div>
                                                    <div class="list-desc">Bear claw macaroon cheesecake cotton candy bear claw sweet roll sweet roll sugar
                                                        plum. Oat cake sweet jelly beans cheesecake soufflé sweet macaroon. Pudding gingerbread bear claw
                                                        chupa chups lollipop carrot cake. Cotton candy icing sweet roll.</div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 23 Apr </div>
                                                    <div class="delete-task"><i class="material-icons">delete</i></div>
                                                </div>
                                            </li>
                                            <li class="collection-item todo-items">
                                                <div class="todo-move">
                                                    <i class="material-icons icon-move">more_vert</i>
                                                </div>
                                                <div class="list-left">
                                                    <label>
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                    <i class="material-icons favorite">star_border</i>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="list-title">Contrary to popular belief</div>
                                                        <span class="badge grey lighten-2"><i class="light-green-text material-icons small-icons mr-2">
                      fiber_manual_record </i>Invoice</span>
                                                    </div>
                                                    <div class="list-desc">Marzipan icing liquorice tiramisu bonbon sweet roll toffee sweet cupcake. Candy
                                                        canes candy canes pudding pie tiramisu tiramisu powder macaroon. Cotton candy candy powder cheesecake
                                                        dessert. Sweet halvah marshmallow croissant tootsie roll. Marzipan pudding apple pie caramels sweet
                                                        roll.</div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 23 Apr </div>
                                                    <div class="delete-task"><i class="material-icons">delete</i></div>
                                                </div>
                                            </li>
                                            <li class="collection-item todo-items">
                                                <div class="todo-move">
                                                    <i class="material-icons icon-move">more_vert</i>
                                                </div>
                                                <div class="list-left">
                                                    <label>
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                    <i class="material-icons favorite">star_border</i>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="list-title">Candy pudding apple pie</div>
                                                        <span class="badge grey lighten-2"><i class="light-green-text material-icons small-icons mr-2">
                      fiber_manual_record </i>Invoice</span>
                                                    </div>
                                                    <div class="list-desc">Cupcake bear claw pudding. Liquorice cake jujubes candy canes topping pudding.
                                                        Oat cake liquorice jujubes donut. Powder tiramisu pudding bear claw caramels sweet roll jelly-o.
                                                        Candy canes gummies muffin wafer oat cake chupa chups. Jujubes tootsie roll pie.</div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 23 Apr </div>
                                                    <div class="delete-task"><i class="material-icons">delete</i></div>
                                                </div>
                                            </li>
                                            <li class="collection-item todo-items">
                                                <div class="todo-move">
                                                    <i class="material-icons icon-move">more_vert</i>
                                                </div>
                                                <div class="list-left">
                                                    <label>
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                    <i class="material-icons favorite">star_border</i>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="list-title">Powder lollipop lollipop pie tiramisu</div>
                                                        <span class="badge grey lighten-2"><i class="purple-text material-icons small-icons mr-2">
                      fiber_manual_record </i>API</span>
                                                    </div>
                                                    <div class="list-desc">Wafer donut candy. Gummies tootsie roll marshmallow. Sweet roll tootsie roll
                                                        tart. Chocolate bar marzipan gummies jelly dessert macaroon lollipop topping gingerbread. Donut sugar
                                                        plum halvah gummies muffin pudding.</div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 23 Apr </div>
                                                    <div class="delete-task"><i class="material-icons">delete</i></div>
                                                </div>
                                            </li>
                                            <li class="collection-item todo-items">
                                                <div class="todo-move">
                                                    <i class="material-icons icon-move">more_vert</i>
                                                </div>
                                                <div class="list-left">
                                                    <label>
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                    <i class="material-icons favorite">star_border</i>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="list-title">Oat cake tootsie roll powder</div>
                                                        <span class="badge grey lighten-2"><i class="light-green-text material-icons small-icons mr-2">
                      fiber_manual_record </i>Invoice</span>
                                                    </div>
                                                    <div class="list-desc">Topping jelly-o muffin pie. Apple pie dessert oat cake liquorice marshmallow
                                                        danish gummies tart. Fruitcake toffee tiramisu. Candy canes candy canes biscuit gummies jujubes
                                                        soufflé caramels. Lollipop bonbon danish gingerbread sesame snaps dragée.</div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 23 Apr </div>
                                                    <div class="delete-task"><i class="material-icons">delete</i></div>
                                                </div>
                                            </li>
                                            <li class="collection-item todo-items">
                                                <div class="todo-move">
                                                    <i class="material-icons icon-move">more_vert</i>
                                                </div>
                                                <div class="list-left">
                                                    <label>
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                    <i class="material-icons favorite">star_border</i>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="list-title">Caramels pudding chupa chups </div>
                                                        <span class="badge grey lighten-2"><i class="amber-text material-icons small-icons mr-2">
                      fiber_manual_record </i>Paypal</span>
                                                    </div>
                                                    <div class="list-desc"> Cotton candy cheesecake sweet roll. Gummi bears tiramisu jelly powder. Dessert
                                                        pie apple pie chocolate bar carrot cake donut chupa chups. Cookie marzipan sweet roll chocolate
                                                        topping candy canes. Carrot cake croissant jujubes chupa chups cupcake apple pie caramels cake icing.
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 23 Apr </div>
                                                    <div class="delete-task"><i class="material-icons">delete</i></div>
                                                </div>
                                            </li>
                                            <li class="collection-item no-data-found">
                                                <h6 class="center-align font-weight-500">No Results Found</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Area Ends -->

                    <!-- Add new todo popup -->
                    <div style="bottom: 54px; right: 19px;" class="fixed-action-btn direction-top">
                        <a class="btn-floating btn-large primary-text gradient-shadow todo-sidebar-trigger">
                            <i class="material-icons">note_add</i>
                        </a>
                    </div>
                    <!-- Add new todo popup Ends-->

                    <!-- todo compose sidebar -->
                    <div class="todo-compose-sidebar">
                        <div class="card quill-wrapper">
                            <div class="card-content pt-0">
                                <div class="card-header display-flex pb-2">
                                    <h3 class="card-title todo-title-label">NEW TASK</h3>
                                    <button class="btn todo-complete hide">Marks Complete</button>
                                    <div class="close close-icon">
                                        <i class="material-icons">close</i>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <!-- form start -->
                                <form class="edit-todo-item mt-10 mb-10">
                                    <div class="input-field">
                                        <textarea class="edit-todo-item-title materialize-textarea" id="edit-item-form"></textarea>
                                        <label for="edit-item-form">Write a Task Name</label>
                                    </div>
                                    <div class="input-field">
                                        <div class="display-flex">
                                            <div class="assignto display-flex">
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/avatar/avatar-10.png" class="responsive-img circle z-depth-2"
                                                         width="50" alt="">
                                                </div>
                                                <select>
                                                    <option value="" disabled selected>Unassigned</option>
                                                    <optgroup label="Backend">
                                                        <option value="1">David Smith</option>
                                                        <option value="2">John Doe</option>
                                                        <option value="3">James Smith</option>
                                                    </optgroup>
                                                    <optgroup label="Frontend">
                                                        <option value="1">Maria Rodrigue</option>
                                                        <option value="2">Marry Smith</option>
                                                        <option value="3">James Jackson</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="assignDate display-flex">
                                                <div class="date-icon circle">
                                                    <i class="material-icons">date_range</i>
                                                </div>
                                                <input type="text" class="assign-date datepicker" placeholder="Pick A date" value="14/11/2019">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider"></div>

                                    <!-- Compose mail Quill editor -->
                                    <div class="input-field">
                                        <div class="snow-container mt-7">
                                            <div class="compose-editor"></div>
                                            <div class="compose-quill-toolbar">
              <span class="ql-formats mr-0">
                <button class="ql-bold"></button>
                <button class="ql-italic"></button>
                <button class="ql-underline"></button>
                <button class="ql-link"></button>
                <button class="ql-image"></button>
              </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-field display-flex align-items-center">
                                        <i class="material-icons mr-5">label_outline</i>
                                        <select class="browser-default select-tags" multiple disabled="disabled">
                                            <option value="API">API</option>
                                            <option value="Paypal">Paypal</option>
                                            <option value="Invoice">Invoice</option>
                                        </select>
                                        <i class="material-icons ml-5 tags-toggler cursor-pointer">add_circle_outline</i>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="display-flex align-items-center mt-5">
                                        <div class="avatar mr-5">
                                            <img src="../../../app-assets/images/avatar/avatar-2.png" width="40" class="circle responsive-img" alt="">
                                        </div>
                                        <span class="mr-5">Charlie created this task</span>
                                        <small>13 days ago</small>
                                    </div>
                                    <div class="input-field">
                                        <div class="snow-container mt-7">
                                            <div class="comment-editor"></div>
                                            <div class="comment-quill-toolbar">
              <span class="ql-formats mr-0">
                <button class="ql-bold"></button>
                <button class="ql-italic"></button>
                <button class="ql-underline"></button>
                <button class="ql-link"></button>
                <button class="ql-image"></button>
              </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="card-action pl-0 pr-0 right-align">
                                    <button class="btn-small waves-effect waves-light add-todo">
                                        <span>Add Task</span>
                                    </button>
                                    <button class="btn-small waves-effect waves-light update-todo display-none">
                                        <span>Save Changes</span>
                                    </button>
                                </div>
                                <!-- form start end-->
                            </div>
                        </div>
                    </div><!-- START RIGHT SIDEBAR NAV -->
                    <aside id="right-sidebar-nav">
                        <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
                            <div class="row">
                                <div class="slide-out-right-title">
                                    <div class="col s12 border-bottom-1 pb-0 pt-1">
                                        <div class="row">
                                            <div class="col s2 pr-0 center">
                                                <i class="material-icons vertical-text-middle"><a href="app-todo.html#" class="sidenav-close">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a href="app-todo.html#messages" class="active">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="app-todo.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="app-todo.html#activity">
                                                            <span>Activity</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-out-right-body row pl-3">
                                    <div id="messages" class="col s12 pb-0">
                                        <div class="collection border-none mb-0">
                                            <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                                            <ul class="collection right-sidebar-chat p-0 mb-0">
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Elizabeth Elliott</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.00 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Mary Adams</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-2.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-3.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.00 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-4.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">June Lane</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-5.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Edward Fletcher</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.15 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-6.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Crystal Bates</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">8.00 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Nathan Watts</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.53 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-8.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Willard Wood</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.20 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Ronnie Ellis</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.20 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-9.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Daniel Russell</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">12.00 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-10.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Sarah Graves</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">11.14 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-11.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Andrew Hoffman</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">7.30 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                        src="../../../app-assets/images/avatar/avatar-12.png" alt="avatar" />
                  <i></i>
                </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Camila Lynch</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">2.00 PM</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="settings" class="col s12">
                                        <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Show Task statistics</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Show your emails</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Email Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>System Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Error Reporting</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Applications Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Backup Servers</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Audit Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="activity" class="col s12">
                                        <div class="activity">
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">Today</div>
                                                    <h6 class="timeline-title">Homepage mockup design</h6>
                                                    <p class="timeline-text">Melissa liked your activity.</p>
                                                    <div class="timeline-content orange-text">Important</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan active">
                                                    <div class="timeline-time">10 min</div>
                                                    <h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content green-text">Resolved</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-red active">
                                                    <div class="timeline-time">30 mins</div>
                                                    <h6 class="timeline-title">12 new users registered</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25"
                                                             class="mr-1">Registration.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-indigo active">
                                                    <div class="timeline-time">2 Hrs</div>
                                                    <h6 class="timeline-title">Tina is attending your activity</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25"
                                                             class="mr-1">Activity.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-orange">
                                                    <div class="timeline-time">5 hrs</div>
                                                    <h6 class="timeline-title">Josh is now following you</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content red-text">Pending</div>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">Just now</div>
                                                    <h6 class="timeline-title">New order received urgent</h6>
                                                    <p class="timeline-text">Melissa liked your activity.</p>
                                                    <div class="timeline-content orange-text">Important</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan active">
                                                    <div class="timeline-time">05 min</div>
                                                    <h6 class="timeline-title">System shutdown.</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content blue-text">Urgent</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-red">
                                                    <div class="timeline-time">20 mins</div>
                                                    <h6 class="timeline-title">Database overloaded 89%</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25"
                                                             class="mr-1">Database-log.doc
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">10 min</div>
                                                    <h6 class="timeline-title">System error</h6>
                                                    <p class="timeline-text">Melissa liked your activity.</p>
                                                    <div class="timeline-content red-text">Error</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan">
                                                    <div class="timeline-time">1 min</div>
                                                    <h6 class="timeline-title">Production server down.</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content blue-text">Urgent</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide Out Chat -->
                        <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
                            <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                                <a href="app-todo.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
                            </li>
                            <li class="chat-body">
                                <ul class="collection">
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
                                                                   alt="avatar" />
          </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">hello!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">How can we help? We're here for you!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
                                                                   alt="avatar" />
          </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I am looking for the best admin template.?</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>8:20 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
                                                                   alt="avatar" />
          </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! very nice</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
                                                                   alt="avatar" />
          </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">How can I purchase it?</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>9:00 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">From ThemeForest.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Only $24</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
                                                                   alt="avatar" />
          </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
                                                                   alt="avatar" />
          </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I will purchase it for sure.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Great, Feel free to get in touch on</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">https://pixinvent.ticksy.com/</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="center-align chat-footer">
                                <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
                                    <div class="input-field">
                                        <input id="icon_prefix" type="text" class="search" />
                                        <label for="icon_prefix">Type here..</label>
                                        <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </aside>
                    <!-- END RIGHT SIDEBAR NAV -->
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->

    <!-- Theme Customizer -->

    <a
        href="app-todo.html#"
        data-target="theme-cutomizer-out"
        class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"
    ><i class="material-icons">settings</i></a
    >

    <div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
        <div class="col s12">
            <a class="sidenav-close" href="app-todo.html#!"><i class="material-icons">close</i></a>
            <h5 class="theme-cutomizer-title">Theme Customizer</h5>
            <p class="medium-small">Customize & Preview in Real Time</p>
            <div class="menu-options">
                <h6 class="mt-6">Menu Options</h6>
                <hr class="customize-devider" />
                <div class="menu-options-form row">
                    <div class="input-field col s12 menu-color mb-0">
                        <p class="mt-0">Menu Color</p>
                        <div class="gradient-color center-align">
                            <span class="menu-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                            <span
                                class="menu-color-option gradient-45deg-purple-deep-orange"
                                data-color="gradient-45deg-purple-deep-orange"
                            ></span>
                            <span
                                class="menu-color-option gradient-45deg-light-blue-cyan"
                                data-color="gradient-45deg-light-blue-cyan"
                            ></span>
                            <span
                                class="menu-color-option gradient-45deg-purple-amber"
                                data-color="gradient-45deg-purple-amber"
                            ></span>
                            <span
                                class="menu-color-option gradient-45deg-purple-deep-purple"
                                data-color="gradient-45deg-purple-deep-purple"
                            ></span>
                            <span
                                class="menu-color-option gradient-45deg-deep-orange-orange"
                                data-color="gradient-45deg-deep-orange-orange"
                            ></span>
                            <span class="menu-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                            <span
                                class="menu-color-option gradient-45deg-indigo-light-blue"
                                data-color="gradient-45deg-indigo-light-blue"
                            ></span>
                            <span class="menu-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                        </div>
                        <div class="solid-color center-align">
                            <span class="menu-color-option red" data-color="red"></span>
                            <span class="menu-color-option purple" data-color="purple"></span>
                            <span class="menu-color-option pink" data-color="pink"></span>
                            <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                            <span class="menu-color-option cyan" data-color="cyan"></span>
                            <span class="menu-color-option teal" data-color="teal"></span>
                            <span class="menu-color-option light-blue" data-color="light-blue"></span>
                            <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                            <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
                        </div>
                    </div>
                    <div class="input-field col s12 menu-bg-color mb-0">
                        <p class="mt-0">Menu Background Color</p>
                        <div class="gradient-color center-align">
                  <span
                      class="menu-bg-color-option gradient-45deg-indigo-blue"
                      data-color="gradient-45deg-indigo-blue"
                  ></span>
                            <span
                                class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                                data-color="gradient-45deg-purple-deep-orange"
                            ></span>
                            <span
                                class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                                data-color="gradient-45deg-light-blue-cyan"
                            ></span>
                            <span
                                class="menu-bg-color-option gradient-45deg-purple-amber"
                                data-color="gradient-45deg-purple-amber"
                            ></span>
                            <span
                                class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                                data-color="gradient-45deg-purple-deep-purple"
                            ></span>
                            <span
                                class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                                data-color="gradient-45deg-deep-orange-orange"
                            ></span>
                            <span class="menu-bg-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                            <span
                                class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                                data-color="gradient-45deg-indigo-light-blue"
                            ></span>
                            <span class="menu-bg-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                        </div>
                        <div class="solid-color center-align">
                            <span class="menu-bg-color-option red" data-color="red"></span>
                            <span class="menu-bg-color-option purple" data-color="purple"></span>
                            <span class="menu-bg-color-option pink" data-color="pink"></span>
                            <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                            <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                            <span class="menu-bg-color-option teal" data-color="teal"></span>
                            <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                            <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                            <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Menu Dark
                            <label class="float-right"
                            ><input class="menu-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                                ></label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Menu Collapsed
                            <label class="float-right"
                            ><input class="menu-collapsed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                                ></label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            <p class="mt-0">Menu Selection</p>
                            <label>
                                <input
                                    class="menu-selection-radio with-gap"
                                    value="sidenav-active-square"
                                    name="menu-selection"
                                    type="radio"
                                />
                                <span>Square</span>
                            </label>
                            <label>
                                <input
                                    class="menu-selection-radio with-gap"
                                    value="sidenav-active-rounded"
                                    name="menu-selection"
                                    type="radio"
                                />
                                <span>Rounded</span>
                            </label>
                            <label>
                                <input class="menu-selection-radio with-gap" value="" name="menu-selection" type="radio" />
                                <span>Normal</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-6">Navbar Options</h6>
            <hr class="customize-devider" />
            <div class="navbar-options row">
                <div class="input-field col s12 navbar-color mb-0">
                    <p class="mt-0">Navbar Color</p>
                    <div class="gradient-color center-align">
                        <span class="navbar-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                        <span
                            class="navbar-color-option gradient-45deg-purple-deep-orange"
                            data-color="gradient-45deg-purple-deep-orange"
                        ></span>
                        <span
                            class="navbar-color-option gradient-45deg-light-blue-cyan"
                            data-color="gradient-45deg-light-blue-cyan"
                        ></span>
                        <span class="navbar-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
                        <span
                            class="navbar-color-option gradient-45deg-purple-deep-purple"
                            data-color="gradient-45deg-purple-deep-purple"
                        ></span>
                        <span
                            class="navbar-color-option gradient-45deg-deep-orange-orange"
                            data-color="gradient-45deg-deep-orange-orange"
                        ></span>
                        <span class="navbar-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                        <span
                            class="navbar-color-option gradient-45deg-indigo-light-blue"
                            data-color="gradient-45deg-indigo-light-blue"
                        ></span>
                        <span class="navbar-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                    </div>
                    <div class="solid-color center-align">
                        <span class="navbar-color-option red" data-color="red"></span>
                        <span class="navbar-color-option purple" data-color="purple"></span>
                        <span class="navbar-color-option pink" data-color="pink"></span>
                        <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
                        <span class="navbar-color-option cyan" data-color="cyan"></span>
                        <span class="navbar-color-option teal" data-color="teal"></span>
                        <span class="navbar-color-option light-blue" data-color="light-blue"></span>
                        <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
                        <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Navbar Dark
                        <label class="float-right"
                        ><input class="navbar-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                            ></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Navbar Fixed
                        <label class="float-right"
                        ><input class="navbar-fixed-checkbox" type="checkbox" checked/> <span class="lever ml-0"></span
                            ></label>
                    </div>
                </div>
            </div>
            <h6 class="mt-6">Footer Options</h6>
            <hr class="customize-devider" />
            <div class="navbar-options row">
                <div class="input-field col s12">
                    <div class="switch">
                        Footer Dark
                        <label class="float-right"
                        ><input class="footer-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                            ></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Footer Fixed
                        <label class="float-right"
                        ><input class="footer-fixed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                            ></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Theme Customizer -->

    <a
        href="https://1.envato.market/materialize_admin"
        target="_blank"
        class="btn btn-buy-now gradient-45deg-indigo-purple gradient-shadow white-text tooltipped buy-now-animated tada"
        data-position="left"
        data-tooltip="Buy Now!"
    ><i class="material-icons">add_shopping_cart</i></a
    >

    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
        <div class="footer-copyright">
            <div class="container"><span>&copy; 2020          <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a></span></div>
        </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/sortable/jquery-sortable-min.js"></script>
    <script src="../../../app-assets/vendors/quill/quill.min.js"></script>
    <script src="../../../app-assets/vendors/select2/select2.full.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.min.js"></script>
    <script src="../../../app-assets/js/search.min.js"></script>
    <script src="../../../app-assets/js/custom/custom-script.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/app-todo.min.js"></script>
    <!-- END PAGE LEVEL JS-->
    </body>

</html>
