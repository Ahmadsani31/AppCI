<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title><?= $title; ?></title>
    <link rel="apple-touch-icon" sizes="60x60" href="../../assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../../assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="../../assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../../assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/datatables/datatables.css">
</head>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <?= $this->include('admin/layout/navbar') ?>
    <!-- navbar-fixed-top-->


    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
        <!-- main menu header-->
        <div class="main-menu-header">
            <input type="text" placeholder="Search" class="menu-search form-control round" />
        </div>
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="main-menu-content">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                <li class=" nav-item"><a href="/admin/dashboard"><i class="icon-home3"></i><span class="menu-title">Dashboard</span></a>
                </li>
                </li>
                <li class=" nav-item"><a href="/admin/view"><i class="icon-copy"></i><span class="menu-title">Biodata</span></a>
                </li>
                <li class=" nav-item"><a href="/datatable/index"><i class="icon-copy"></i><span class="menu-title">All Data</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Page layouts</span></a>
                    <ul class="menu-content">
                        <li><a href="layout-1-column.html" data-i18n="nav.page_layouts.1_column" class="menu-item">1 column</a>
                        </li>
                        <li><a href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns" class="menu-item">2 columns</a>
                        </li>
                        <li><a href="layout-boxed.html" data-i18n="nav.page_layouts.boxed_layout" class="menu-item">Boxed layout</a>
                        </li>
                        <li><a href="layout-static.html" data-i18n="nav.page_layouts.static_layout" class="menu-item">Static layout</a>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a href="layout-light.html" data-i18n="nav.page_layouts.light_layout" class="menu-item">Light layout</a>
                        </li>
                        <li><a href="layout-dark.html" data-i18n="nav.page_layouts.dark_layout" class="menu-item">Dark layout</a>
                        </li>
                        <li><a href="layout-semi-dark.html" data-i18n="nav.page_layouts.semi_dark_layout" class="menu-item">Semi dark layout</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="/datatable/index"><i class="icon-copy"></i><span data-i18n="nav.changelog.main" class="menu-title">Changelog</span><span class="tag tag tag-pill tag-danger float-xs-right">1.0</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">Pages</span></a>
                    <ul class="menu-content">
                        <li><a href="invoice-template.html" data-i18n="nav.invoice.invoice_template" class="menu-item">Invoice Template</a>
                        </li>
                        <li><a href="gallery-grid.html" data-i18n="nav.gallery_pages.gallery_grid" class="menu-item">Gallery Grid</a>
                        </li>
                        <li><a href="search-page.html" data-i18n="nav.search_pages.search_page" class="menu-item">Search Page</a>
                        </li>
                        <li><a href="search-website.html" data-i18n="nav.search_pages.search_website" class="menu-item">Search Website</a>
                        </li>
                        <li><a href="login-simple.html" data-i18n="nav.login_register_pages.login_simple" class="menu-item">Login Simple</a>
                        </li>
                        <li><a href="register-simple.html" data-i18n="nav.login_register_pages.register_simple" class="menu-item">Register Simple</a>
                        </li>
                        <li><a href="unlock-user.html" data-i18n="nav.login_register_pages.unlock_user" class="menu-item">Unlock User</a>
                        </li>
                        <li><a href="recover-password.html" data-i18n="nav.login_register_pages.recover_password" class="menu-item">Recover Password</a>
                        </li>
                        <li><a href="#" data-i18n="nav.error_pages.main" class="menu-item">Error</a>
                            <ul class="menu-content">
                                <li><a href="error-400.html" data-i18n="nav.error_pages.error_400" class="menu-item">Error 400</a>
                                </li>
                                <li><a href="error-401.html" data-i18n="nav.error_pages.error_401" class="menu-item">Error 401</a>
                                </li>
                                <li><a href="error-403.html" data-i18n="nav.error_pages.error_403" class="menu-item">Error 403</a>
                                </li>
                                <li><a href="error-404.html" data-i18n="nav.error_pages.error_404" class="menu-item">Error 404</a>
                                </li>
                                <li><a href="error-500.html" data-i18n="nav.error_pages.error_500" class="menu-item">Error 500</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="coming-soon-flat.html" data-i18n="nav.other_pages.coming_soon.coming_soon_flat" class="menu-item">Coming Soon</a>
                        </li>
                        <li><a href="under-maintenance.html" data-i18n="nav.other_pages.under_maintenance" class="menu-item">Maintenance</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- /main menu content-->
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <?= $this->renderSection('content'); ?>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <?= $this->include('admin/layout/footer') ?>


    <!-- BEGIN VENDOR JS-->
    <script src="../../assets/datatables/jQuery-3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="../../assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <script src="../../assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../assets/js/core/app.js" type="text/javascript"></script>
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

    <script src="../../assets/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../../assets/datatables/datatables.js" type="text/javascript"></script>
    <!-- Bootstrap 4.5 CDN  -->
    <!-- DataTable CDN js -->
    <script src="../../assets/js/scripts/modal/components-modal.js" type="text/javascript"></script>

</body>

<script>
    $(document).ready(function() {
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            order: [], //init datatable not ordering
            ajax: {
                "url": "<?= base_url() . '/datatable/getdatabio'; ?>",
                "type": "POST"
            },

            columnDefs: [{
                    targets: [],
                    orderable: false
                }, //first column is not orderable.
            ]
        });
    });


    $(document).ready(function() {
        $('#tableData').DataTable({
            processing: true,
            serverSide: true,
            order: [], //init datatable not ordering
            ajax: {
                "url": "<?= base_url() . '/datatable/getdata'; ?>",
                "type": "POST"
            },

            columnDefs: [{
                    targets: [],
                    orderable: false
                }, //first column is not orderable.
            ]
        });
    });

    $(document).on('click', '.btn_view', function() {
        $('#modalView').modal('show');
    });


    function edit_modal() {

        $('#modalView').modal('show');
        //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    $(document).on('click', '.btn_view', function() {
        alert("button is clicked");
    });

    $('.btn_view').on('click', function() {
        $('#onshow').on('show.bs.modal', function() {
            alert('onShow event fired.');
        });
    });
</script>

</html>