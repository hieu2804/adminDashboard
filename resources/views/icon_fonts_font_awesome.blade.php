<!DOCTYPE html>
<html>
  <head>
    <title>Admin Dashboard HTML Template</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="css/main.css?version=4.5.0" rel="stylesheet">
    <link href="icon_fonts_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body class="menu-position-side menu-side-left full-screen">
    <div class="all-wrapper solid-bg-all">
      <div class="search-with-suggestions-w">
        <div class="search-with-suggestions-modal">
          <div class="element-search">
            <input class="search-suggest-input" placeholder="Start typing to search..." type="text">
              <div class="close-search-suggestions">
                <i class="os-icon os-icon-x"></i>
              </div>
            </input>
          </div>
          <div class="search-suggestions-group">
            <div class="ssg-header">
              <div class="ssg-icon">
                <div class="os-icon os-icon-box"></div>
              </div>
              <div class="ssg-name">
                Projects
              </div>
              <div class="ssg-info">
                24 Total
              </div>
            </div>
            <div class="ssg-content">
              <div class="ssg-items ssg-items-boxed">
                <a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(img/company6.png)"></div>
                  <div class="item-name">
                    Integ<span>ration</span> with API
                  </div>
                </a><a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(img/company7.png)"></div>
                  <div class="item-name">
                    Deve<span>lopm</span>ent Project
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="search-suggestions-group">
            <div class="ssg-header">
              <div class="ssg-icon">
                <div class="os-icon os-icon-users"></div>
              </div>
              <div class="ssg-name">
                Customers
              </div>
              <div class="ssg-info">
                12 Total
              </div>
            </div>
            <div class="ssg-content">
              <div class="ssg-items ssg-items-list">
                <a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(img/avatar1.jpg)"></div>
                  <div class="item-name">
                    John Ma<span>yer</span>s
                  </div>
                </a><a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(img/avatar2.jpg)"></div>
                  <div class="item-name">
                    Th<span>omas</span> Mullier
                  </div>
                </a><a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(img/avatar3.jpg)"></div>
                  <div class="item-name">
                    Kim C<span>olli</span>ns
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="search-suggestions-group">
            <div class="ssg-header">
              <div class="ssg-icon">
                <div class="os-icon os-icon-folder"></div>
              </div>
              <div class="ssg-name">
                Files
              </div>
              <div class="ssg-info">
                17 Total
              </div>
            </div>
            <div class="ssg-content">
              <div class="ssg-items ssg-items-blocks">
                <a class="ssg-item" href="#">
                  <div class="item-icon">
                    <i class="os-icon os-icon-file-text"></i>
                  </div>
                  <div class="item-name">
                    Work<span>Not</span>e.txt
                  </div>
                </a><a class="ssg-item" href="#">
                  <div class="item-icon">
                    <i class="os-icon os-icon-film"></i>
                  </div>
                  <div class="item-name">
                    V<span>ideo</span>.avi
                  </div>
                </a><a class="ssg-item" href="#">
                  <div class="item-icon">
                    <i class="os-icon os-icon-database"></i>
                  </div>
                  <div class="item-name">
                    User<span>Tabl</span>e.sql
                  </div>
                </a><a class="ssg-item" href="#">
                  <div class="item-icon">
                    <i class="os-icon os-icon-image"></i>
                  </div>
                  <div class="item-name">
                    wed<span>din</span>g.jpg
                  </div>
                </a>
              </div>
              <div class="ssg-nothing-found">
                <div class="icon-w">
                  <i class="os-icon os-icon-eye-off"></i>
                </div>
                <span>No files were found. Try changing your query...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="layout-w">
        <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
          <div class="mm-logo-buttons-w">
            <a class="mm-logo" href="index.html"><img src="img/logo.png"><span>Clean Admin</span></a>
            <div class="mm-buttons">
              <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
              </div>
              <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
              </div>
            </div>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="avatar-w">
                <img alt="" src="img/avatar1.jpg">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  Maria Gomez
                </div>
                <div class="logged-user-role">
                  Administrator
                </div>
              </div>
            </div>
            <!--------------------
            START - Mobile Menu List
            -------------------->
            <ul class="main-menu">
              <li class="has-sub-menu">
                <a href="index.html">
                  <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                  </div>
                  <span>Dashboard</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="index.html">Dashboard 1</a>
                  </li>
                  <li>
                    <a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">Hot</strong></a>
                  </li>
                  <li>
                    <a href="apps_support_dashboard.html">Dashboard 3</a>
                  </li>
                  <li>
                    <a href="apps_projects.html">Dashboard 4</a>
                  </li>
                  <li>
                    <a href="apps_bank.html">Dashboard 5</a>
                  </li>
                  <li>
                    <a href="layouts_menu_top_image.html">Dashboard 6</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="layouts_menu_top_image.html">
                  <div class="icon-w">
                    <div class="os-icon os-icon-layers"></div>
                  </div>
                  <span>Menu Styles</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="layouts_menu_side_full.html">Side Menu Light</a>
                  </li>
                  <li>
                    <a href="layouts_menu_side_full_dark.html">Side Menu Dark</a>
                  </li>
                  <li>
                    <a href="layouts_menu_side_transparent.html">Side Menu Transparent <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="apps_pipeline.html">Side &amp; Top Dark</a>
                  </li>
                  <li>
                    <a href="apps_projects.html">Side &amp; Top</a>
                  </li>
                  <li>
                    <a href="layouts_menu_side_mini.html">Mini Side Menu</a>
                  </li>
                  <li>
                    <a href="layouts_menu_side_mini_dark.html">Mini Menu Dark</a>
                  </li>
                  <li>
                    <a href="layouts_menu_side_compact.html">Compact Side Menu</a>
                  </li>
                  <li>
                    <a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a>
                  </li>
                  <li>
                    <a href="layouts_menu_right.html">Right Menu</a>
                  </li>
                  <li>
                    <a href="layouts_menu_top.html">Top Menu Light</a>
                  </li>
                  <li>
                    <a href="layouts_menu_top_dark.html">Top Menu Dark</a>
                  </li>
                  <li>
                    <a href="layouts_menu_top_image.html">Top Menu Image <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="layouts_menu_sub_style_flyout.html">Sub Menu Flyout</a>
                  </li>
                  <li>
                    <a href="layouts_menu_sub_style_flyout_dark.html">Sub Flyout Dark</a>
                  </li>
                  <li>
                    <a href="layouts_menu_sub_style_flyout_bright.html">Sub Flyout Bright</a>
                  </li>
                  <li>
                    <a href="layouts_menu_side_compact_click.html">Menu Inside Click</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="apps_bank.html">
                  <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                  </div>
                  <span>Applications</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="apps_email.html">Email Application</a>
                  </li>
                  <li>
                    <a href="apps_support_dashboard.html">Support Dashboard</a>
                  </li>
                  <li>
                    <a href="apps_support_index.html">Tickets Index</a>
                  </li>
                  <li>
                    <a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="apps_projects.html">Projects List</a>
                  </li>
                  <li>
                    <a href="apps_bank.html">Banking <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="apps_full_chat.html">Chat Application</a>
                  </li>
                  <li>
                    <a href="apps_todo.html">To Do Application <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="misc_chat.html">Popup Chat</a>
                  </li>
                  <li>
                    <a href="apps_pipeline.html">CRM Pipeline</a>
                  </li>
                  <li>
                    <a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="misc_calendar.html">Calendar</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-file-text"></div>
                  </div>
                  <span>Pages</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="misc_invoice.html">Invoice</a>
                  </li>
                  <li>
                    <a href="ecommerce_order_info.html">Order Info <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="misc_charts.html">Charts</a>
                  </li>
                  <li>
                    <a href="auth_login.html">Login</a>
                  </li>
                  <li>
                    <a href="auth_register.html">Register</a>
                  </li>
                  <li>
                    <a href="auth_lock.html">Lock Screen</a>
                  </li>
                  <li>
                    <a href="misc_pricing_plans.html">Pricing Plans</a>
                  </li>
                  <li>
                    <a href="misc_error_404.html">Error 404</a>
                  </li>
                  <li>
                    <a href="misc_error_500.html">Error 500</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-life-buoy"></div>
                  </div>
                  <span>UI Kit</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="uikit_modals.html">Modals <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="uikit_alerts.html">Alerts</a>
                  </li>
                  <li>
                    <a href="uikit_grid.html">Grid</a>
                  </li>
                  <li>
                    <a href="uikit_progress.html">Progress</a>
                  </li>
                  <li>
                    <a href="uikit_popovers.html">Popover</a>
                  </li>
                  <li>
                    <a href="uikit_tooltips.html">Tooltips</a>
                  </li>
                  <li>
                    <a href="uikit_buttons.html">Buttons</a>
                  </li>
                  <li>
                    <a href="uikit_dropdowns.html">Dropdowns</a>
                  </li>
                  <li>
                    <a href="uikit_typography.html">Typography</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-mail"></div>
                  </div>
                  <span>Emails</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="emails_welcome.html">Welcome Email</a>
                  </li>
                  <li>
                    <a href="emails_order.html">Order Confirmation</a>
                  </li>
                  <li>
                    <a href="emails_payment_due.html">Payment Due</a>
                  </li>
                  <li>
                    <a href="emails_forgot.html">Forgot Password</a>
                  </li>
                  <li>
                    <a href="emails_activate.html">Activate Account</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-users"></div>
                  </div>
                  <span>Users</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="users_profile_big.html">Big Profile</a>
                  </li>
                  <li>
                    <a href="users_profile_small.html">Compact Profile</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-edit-32"></div>
                  </div>
                  <span>Forms</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="forms_regular.html">Regular Forms</a>
                  </li>
                  <li>
                    <a href="forms_validation.html">Form Validation</a>
                  </li>
                  <li>
                    <a href="forms_wizard.html">Form Wizard</a>
                  </li>
                  <li>
                    <a href="forms_uploads.html">File Uploads</a>
                  </li>
                  <li>
                    <a href="forms_wisiwig.html">Wisiwig Editor</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-grid"></div>
                  </div>
                  <span>Tables</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="tables_regular.html">Regular Tables</a>
                  </li>
                  <li>
                    <a href="tables_datatables.html">Data Tables</a>
                  </li>
                  <li>
                    <a href="tables_editable.html">Editable Tables</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-zap"></div>
                  </div>
                  <span>Icons</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_feather.html">Feather Icons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_themefy.html">Themefy Icons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_picons_thin.html">Picons Thin</a>
                  </li>
                  <li>
                    <a href="icon_fonts_dripicons.html">Dripicons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_eightyshades.html">Eightyshades</a>
                  </li>
                  <li>
                    <a href="icon_fonts_entypo.html">Entypo</a>
                  </li>
                  <li>
                    <a href="icon_fonts_font_awesome.html">Font Awesome</a>
                  </li>
                  <li>
                    <a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a>
                  </li>
                  <li>
                    <a href="icon_fonts_metrize_icons.html">Metrize Icons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_picons_social.html">Picons Social</a>
                  </li>
                  <li>
                    <a href="icon_fonts_batch_icons.html">Batch Icons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_dashicons.html">Dashicons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_typicons.html">Typicons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_weather_icons.html">Weather Icons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_light_admin.html">Light Admin</a>
                  </li>
                </ul>
              </li>
            </ul>
            <!--------------------
            END - Mobile Menu List
            -------------------->
            <div class="mobile-menu-magic">
              <h4>
                Light Admin
              </h4>
              <p>
                Clean Bootstrap 4 Template
              </p>
              <div class="btn-w">
                <a class="btn btn-white btn-rounded" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin" target="_blank">Purchase Now</a>
              </div>
            </div>
          </div>
        </div>
        <!--------------------
        END - Mobile Menu
        --------------------><!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
          <div class="logo-w">
            <a class="logo" href="index.html">
              <div class="logo-element"></div>
              <div class="logo-label">
                Clean Admin
              </div>
            </a>
          </div>
          <div class="logged-user-w avatar-inline">
            <div class="logged-user-i">
              <div class="avatar-w">
                <img alt="" src="img/avatar1.jpg">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  Maria Gomez
                </div>
                <div class="logged-user-role">
                  Administrator
                </div>
              </div>
              <div class="logged-user-toggler-arrow">
                <div class="os-icon os-icon-chevron-down"></div>
              </div>
              <div class="logged-user-menu color-style-bright">
                <div class="logged-user-avatar-info">
                  <div class="avatar-w">
                    <img alt="" src="img/avatar1.jpg">
                  </div>
                  <div class="logged-user-info-w">
                    <div class="logged-user-name">
                      Maria Gomez
                    </div>
                    <div class="logged-user-role">
                      Administrator
                    </div>
                  </div>
                </div>
                <div class="bg-icon">
                  <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                  <li>
                    <a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a>
                  </li>
                  <li>
                    <a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                  </li>
                  <li>
                    <a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
                  </li>
                  <li>
                    <a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
                  </li>
                  <li>
                    <a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="menu-actions">
            <!--------------------
            START - Messages Link in secondary top menu
            -------------------->
            <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right">
              <i class="os-icon os-icon-mail-14"></i>
              <div class="new-messages-count">
                12
              </div>
              <div class="os-dropdown light message-list">
                <ul>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar1.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          John Mayers
                        </h6>
                        <h6 class="message-title">
                          Account Update
                        </h6>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar2.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          Phil Jones
                        </h6>
                        <h6 class="message-title">
                          Secutiry Updates
                        </h6>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar3.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          Bekky Simpson
                        </h6>
                        <h6 class="message-title">
                          Vacation Rentals
                        </h6>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar4.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          Alice Priskon
                        </h6>
                        <h6 class="message-title">
                          Payment Confirmation
                        </h6>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!--------------------
            END - Messages Link in secondary top menu
            --------------------><!--------------------
            START - Settings Link in secondary top menu
            -------------------->
            <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-right">
              <i class="os-icon os-icon-ui-46"></i>
              <div class="os-dropdown">
                <div class="icon-w">
                  <i class="os-icon os-icon-ui-46"></i>
                </div>
                <ul>
                  <li>
                    <a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
                  </li>
                  <li>
                    <a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a>
                  </li>
                  <li>
                    <a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a>
                  </li>
                  <li>
                    <a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
                  </li>
                </ul>
              </div>
            </div>
            <!--------------------
            END - Settings Link in secondary top menu
            --------------------><!--------------------
            START - Messages Link in secondary top menu
            -------------------->
            <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right">
              <i class="os-icon os-icon-zap"></i>
              <div class="new-messages-count">
                4
              </div>
              <div class="os-dropdown light message-list">
                <div class="icon-w">
                  <i class="os-icon os-icon-zap"></i>
                </div>
                <ul>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar1.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          John Mayers
                        </h6>
                        <h6 class="message-title">
                          Account Update
                        </h6>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar2.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          Phil Jones
                        </h6>
                        <h6 class="message-title">
                          Secutiry Updates
                        </h6>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar3.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          Bekky Simpson
                        </h6>
                        <h6 class="message-title">
                          Vacation Rentals
                        </h6>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar4.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          Alice Priskon
                        </h6>
                        <h6 class="message-title">
                          Payment Confirmation
                        </h6>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!--------------------
            END - Messages Link in secondary top menu
            -------------------->
          </div>
          <div class="element-search autosuggest-search-activator">
            <input placeholder="Start typing to search..." type="text">
          </div>
          <h1 class="menu-page-header">
            Page Header
          </h1>
          <ul class="main-menu">
            <li class="sub-header">
              <span>Layouts</span>
            </li>
            <li class="selected has-sub-menu">
              <a href="index.html">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Dashboard</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Dashboard
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-layout"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="index.html">Dashboard 1</a>
                    </li>
                    <li>
                      <a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">Hot</strong></a>
                    </li>
                    <li>
                      <a href="apps_support_dashboard.html">Dashboard 3</a>
                    </li>
                    <li>
                      <a href="apps_projects.html">Dashboard 4</a>
                    </li>
                    <li>
                      <a href="apps_bank.html">Dashboard 5</a>
                    </li>
                    <li>
                      <a href="layouts_menu_top_image.html">Dashboard 6</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="layouts_menu_top_image.html">
                <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Menu Styles</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Menu Styles
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-layers"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="layouts_menu_side_full.html">Side Menu Light</a>
                    </li>
                    <li>
                      <a href="layouts_menu_side_full_dark.html">Side Menu Dark</a>
                    </li>
                    <li>
                      <a href="layouts_menu_side_transparent.html">Side Menu Transparent <strong class="badge badge-danger">New</strong></a>
                    </li>
                    <li>
                      <a href="apps_pipeline.html">Side &amp; Top Dark</a>
                    </li>
                    <li>
                      <a href="apps_projects.html">Side &amp; Top</a>
                    </li>
                    <li>
                      <a href="layouts_menu_side_mini.html">Mini Side Menu</a>
                    </li>
                    </ul><ul class="sub-menu">
                    <li>
                      <a href="layouts_menu_side_mini_dark.html">Mini Menu Dark</a>
                    </li>
                    <li>
                      <a href="layouts_menu_side_compact.html">Compact Side Menu</a>
                    </li>
                    <li>
                      <a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a>
                    </li>
                    <li>
                      <a href="layouts_menu_right.html">Right Menu</a>
                    </li>
                    <li>
                      <a href="layouts_menu_top.html">Top Menu Light</a>
                    </li>
                    <li>
                      <a href="layouts_menu_top_dark.html">Top Menu Dark</a>
                    </li>
                    </ul><ul class="sub-menu">
                    <li>
                      <a href="layouts_menu_top_image.html">Top Menu Image <strong class="badge badge-danger">New</strong></a>
                    </li>
                    <li>
                      <a href="layouts_menu_sub_style_flyout.html">Sub Menu Flyout</a>
                    </li>
                    <li>
                      <a href="layouts_menu_sub_style_flyout_dark.html">Sub Flyout Dark</a>
                    </li>
                    <li>
                      <a href="layouts_menu_sub_style_flyout_bright.html">Sub Flyout Bright</a>
                    </li>
                    <li>
                      <a href="layouts_menu_side_compact_click.html">Menu Inside Click</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="sub-header">
              <span>Options</span>
            </li>
            <li class=" has-sub-menu">
              <a href="apps_bank.html">
                <div class="icon-w">
                  <div class="os-icon os-icon-package"></div>
                </div>
                <span>Applications</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Applications
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-package"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="apps_email.html">Email Application</a>
                    </li>
                    <li>
                      <a href="apps_support_dashboard.html">Support Dashboard</a>
                    </li>
                    <li>
                      <a href="apps_support_index.html">Tickets Index</a>
                    </li>
                    <li>
                      <a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">New</strong></a>
                    </li>
                    <li>
                      <a href="apps_projects.html">Projects List</a>
                    </li>
                    <li>
                      <a href="apps_bank.html">Banking <strong class="badge badge-danger">New</strong></a>
                    </li>
                    </ul><ul class="sub-menu">
                    <li>
                      <a href="apps_full_chat.html">Chat Application</a>
                    </li>
                    <li>
                      <a href="apps_todo.html">To Do Application <strong class="badge badge-danger">New</strong></a>
                    </li>
                    <li>
                      <a href="misc_chat.html">Popup Chat</a>
                    </li>
                    <li>
                      <a href="apps_pipeline.html">CRM Pipeline</a>
                    </li>
                    <li>
                      <a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a>
                    </li>
                    <li>
                      <a href="misc_calendar.html">Calendar</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-file-text"></div>
                </div>
                <span>Pages</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Pages
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-file-text"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="misc_invoice.html">Invoice</a>
                    </li>
                    <li>
                      <a href="ecommerce_order_info.html">Order Info <strong class="badge badge-danger">New</strong></a>
                    </li>
                    <li>
                      <a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a>
                    </li>
                    <li>
                      <a href="misc_charts.html">Charts</a>
                    </li>
                    <li>
                      <a href="auth_login.html">Login</a>
                    </li>
                    </ul><ul class="sub-menu">
                    <li>
                      <a href="auth_register.html">Register</a>
                    </li>
                    <li>
                      <a href="auth_lock.html">Lock Screen</a>
                    </li>
                    <li>
                      <a href="misc_pricing_plans.html">Pricing Plans</a>
                    </li>
                    <li>
                      <a href="misc_error_404.html">Error 404</a>
                    </li>
                    <li>
                      <a href="misc_error_500.html">Error 500</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-life-buoy"></div>
                </div>
                <span>UI Kit</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  UI Kit
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-life-buoy"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="uikit_modals.html">Modals <strong class="badge badge-danger">New</strong></a>
                    </li>
                    <li>
                      <a href="uikit_alerts.html">Alerts</a>
                    </li>
                    <li>
                      <a href="uikit_grid.html">Grid</a>
                    </li>
                    <li>
                      <a href="uikit_progress.html">Progress</a>
                    </li>
                    <li>
                      <a href="uikit_popovers.html">Popover</a>
                    </li>
                    </ul><ul class="sub-menu">
                    <li>
                      <a href="uikit_tooltips.html">Tooltips</a>
                    </li>
                    <li>
                      <a href="uikit_buttons.html">Buttons</a>
                    </li>
                    <li>
                      <a href="uikit_dropdowns.html">Dropdowns</a>
                    </li>
                    <li>
                      <a href="uikit_typography.html">Typography</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="sub-header">
              <span>Elements</span>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-mail"></div>
                </div>
                <span>Emails</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Emails
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-mail"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="emails_welcome.html">Welcome Email</a>
                    </li>
                    <li>
                      <a href="emails_order.html">Order Confirmation</a>
                    </li>
                    <li>
                      <a href="emails_payment_due.html">Payment Due</a>
                    </li>
                    <li>
                      <a href="emails_forgot.html">Forgot Password</a>
                    </li>
                    <li>
                      <a href="emails_activate.html">Activate Account</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-users"></div>
                </div>
                <span>Users</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Users
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-users"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="users_profile_big.html">Big Profile</a>
                    </li>
                    <li>
                      <a href="users_profile_small.html">Compact Profile</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-edit-32"></div>
                </div>
                <span>Forms</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Forms
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-edit-32"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="forms_regular.html">Regular Forms</a>
                    </li>
                    <li>
                      <a href="forms_validation.html">Form Validation</a>
                    </li>
                    <li>
                      <a href="forms_wizard.html">Form Wizard</a>
                    </li>
                    <li>
                      <a href="forms_uploads.html">File Uploads</a>
                    </li>
                    <li>
                      <a href="forms_wisiwig.html">Wisiwig Editor</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-grid"></div>
                </div>
                <span>Tables</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Tables
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-grid"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="tables_regular.html">Regular Tables</a>
                    </li>
                    <li>
                      <a href="tables_datatables.html">Data Tables</a>
                    </li>
                    <li>
                      <a href="tables_editable.html">Editable Tables</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-zap"></div>
                </div>
                <span>Icons</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Icons
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-zap"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a>
                    </li>
                    <li>
                      <a href="icon_fonts_feather.html">Feather Icons</a>
                    </li>
                    <li>
                      <a href="icon_fonts_themefy.html">Themefy Icons</a>
                    </li>
                    <li>
                      <a href="icon_fonts_picons_thin.html">Picons Thin</a>
                    </li>
                    <li>
                      <a href="icon_fonts_dripicons.html">Dripicons</a>
                    </li>
                    <li>
                      <a href="icon_fonts_eightyshades.html">Eightyshades</a>
                    </li>
                    </ul><ul class="sub-menu">
                    <li>
                      <a href="icon_fonts_entypo.html">Entypo</a>
                    </li>
                    <li>
                      <a href="icon_fonts_font_awesome.html">Font Awesome</a>
                    </li>
                    <li>
                      <a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a>
                    </li>
                    <li>
                      <a href="icon_fonts_metrize_icons.html">Metrize Icons</a>
                    </li>
                    <li>
                      <a href="icon_fonts_picons_social.html">Picons Social</a>
                    </li>
                    <li>
                      <a href="icon_fonts_batch_icons.html">Batch Icons</a>
                    </li>
                    </ul><ul class="sub-menu">
                    <li>
                      <a href="icon_fonts_dashicons.html">Dashicons</a>
                    </li>
                    <li>
                      <a href="icon_fonts_typicons.html">Typicons</a>
                    </li>
                    <li>
                      <a href="icon_fonts_weather_icons.html">Weather Icons</a>
                    </li>
                    <li>
                      <a href="icon_fonts_light_admin.html">Light Admin</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
          <div class="side-menu-magic">
            <h4>
              Light Admin
            </h4>
            <p>
              Clean Bootstrap 4 Template
            </p>
            <div class="btn-w">
              <a class="btn btn-white btn-rounded" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin" target="_blank">Purchase Now</a>
            </div>
          </div>
        </div>
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
          <!--------------------
          START - Top Bar
          -------------------->
          <div class="top-bar color-scheme-transparent">
            <!--------------------
            START - Top Menu Controls
            -------------------->
            <div class="top-menu-controls">
              <div class="element-search autosuggest-search-activator">
                <input placeholder="Start typing to search..." type="text">
              </div>
              <!--------------------
              START - Messages Link in secondary top menu
              -------------------->
              <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left">
                <i class="os-icon os-icon-mail-14"></i>
                <div class="new-messages-count">
                  12
                </div>
                <div class="os-dropdown light message-list">
                  <ul>
                    <li>
                      <a href="#">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar1.jpg">
                        </div>
                        <div class="message-content">
                          <h6 class="message-from">
                            John Mayers
                          </h6>
                          <h6 class="message-title">
                            Account Update
                          </h6>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar2.jpg">
                        </div>
                        <div class="message-content">
                          <h6 class="message-from">
                            Phil Jones
                          </h6>
                          <h6 class="message-title">
                            Secutiry Updates
                          </h6>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar3.jpg">
                        </div>
                        <div class="message-content">
                          <h6 class="message-from">
                            Bekky Simpson
                          </h6>
                          <h6 class="message-title">
                            Vacation Rentals
                          </h6>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar4.jpg">
                        </div>
                        <div class="message-content">
                          <h6 class="message-from">
                            Alice Priskon
                          </h6>
                          <h6 class="message-title">
                            Payment Confirmation
                          </h6>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!--------------------
              END - Messages Link in secondary top menu
              --------------------><!--------------------
              START - Settings Link in secondary top menu
              -------------------->
              <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left">
                <i class="os-icon os-icon-ui-46"></i>
                <div class="os-dropdown">
                  <div class="icon-w">
                    <i class="os-icon os-icon-ui-46"></i>
                  </div>
                  <ul>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
                    </li>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a>
                    </li>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a>
                    </li>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <!--------------------
              END - Settings Link in secondary top menu
              --------------------><!--------------------
              START - User avatar and menu in secondary top menu
              -------------------->
              <div class="logged-user-w">
                <div class="logged-user-i">
                  <div class="avatar-w">
                    <img alt="" src="img/avatar1.jpg">
                  </div>
                  <div class="logged-user-menu color-style-bright">
                    <div class="logged-user-avatar-info">
                      <div class="avatar-w">
                        <img alt="" src="img/avatar1.jpg">
                      </div>
                      <div class="logged-user-info-w">
                        <div class="logged-user-name">
                          Maria Gomez
                        </div>
                        <div class="logged-user-role">
                          Administrator
                        </div>
                      </div>
                    </div>
                    <div class="bg-icon">
                      <i class="os-icon os-icon-wallet-loaded"></i>
                    </div>
                    <ul>
                      <li>
                        <a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a>
                      </li>
                      <li>
                        <a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                      </li>
                      <li>
                        <a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
                      </li>
                      <li>
                        <a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
                      </li>
                      <li>
                        <a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--------------------
              END - User avatar and menu in secondary top menu
              -------------------->
            </div>
            <!--------------------
            END - Top Menu Controls
            -------------------->
          </div>
          <!--------------------
          END - Top Bar
          --------------------><!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="index.html">Products</a>
            </li>
            <li class="breadcrumb-item">
              <span>Laptop with retina screen</span>
            </li>
          </ul>
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-i">
            <div class="content-box">
              <div class="element-wrapper">
                <div class="element-box">
                  <h5 class="form-header">
                    Font Awesome
                  </h5>
                  <div class="form-desc">
                    Powered by Font Awesome set, for more info <a href="https://github.com/FortAwesome/Font-Awesome">click here</a>
                  </div>
                  <ul class="demo-icons-list">
                    <li>
                      <a href="#"><i class="fa fa-glass"></i><span>fa fa-glass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-music"></i><span>fa fa-music</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-search"></i><span>fa fa-search</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-envelope-o"></i><span>fa fa-envelope-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-heart"></i><span>fa fa-heart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-star"></i><span>fa fa-star</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-star-o"></i><span>fa fa-star-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-user"></i><span>fa fa-user</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-film"></i><span>fa fa-film</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-th-large"></i><span>fa fa-th-large</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-th"></i><span>fa fa-th</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-th-list"></i><span>fa fa-th-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-check"></i><span>fa fa-check</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-times"></i><span>fa fa-times</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-search-plus"></i><span>fa fa-search-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-search-minus"></i><span>fa fa-search-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-power-off"></i><span>fa fa-power-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-signal"></i><span>fa fa-signal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cog"></i><span>fa fa-cog</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-trash-o"></i><span>fa fa-trash-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-home"></i><span>fa fa-home</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file-o"></i><span>fa fa-file-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-clock-o"></i><span>fa fa-clock-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-road"></i><span>fa fa-road</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-download"></i><span>fa fa-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrow-circle-o-down"></i><span>fa fa-arrow-circle-o-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrow-circle-o-up"></i><span>fa fa-arrow-circle-o-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-inbox"></i><span>fa fa-inbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-play-circle-o"></i><span>fa fa-play-circle-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-repeat"></i><span>fa fa-repeat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-refresh"></i><span>fa fa-refresh</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-list-alt"></i><span>fa fa-list-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-lock"></i><span>fa fa-lock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-flag"></i><span>fa fa-flag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-headphones"></i><span>fa fa-headphones</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-volume-off"></i><span>fa fa-volume-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-volume-down"></i><span>fa fa-volume-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-volume-up"></i><span>fa fa-volume-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-qrcode"></i><span>fa fa-qrcode</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-barcode"></i><span>fa fa-barcode</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-tag"></i><span>fa fa-tag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-tags"></i><span>fa fa-tags</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-book"></i><span>fa fa-book</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bookmark"></i><span>fa fa-bookmark</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-print"></i><span>fa fa-print</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-camera"></i><span>fa fa-camera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-font"></i><span>fa fa-font</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bold"></i><span>fa fa-bold</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-italic"></i><span>fa fa-italic</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-text-height"></i><span>fa fa-text-height</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-text-width"></i><span>fa fa-text-width</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-align-left"></i><span>fa fa-align-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-align-center"></i><span>fa fa-align-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-align-right"></i><span>fa fa-align-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-align-justify"></i><span>fa fa-align-justify</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-list"></i><span>fa fa-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-outdent"></i><span>fa fa-outdent</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-indent"></i><span>fa fa-indent</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-video-camera"></i><span>fa fa-video-camera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-picture-o"></i><span>fa fa-picture-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pencil"></i><span>fa fa-pencil</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-map-marker"></i><span>fa fa-map-marker</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-adjust"></i><span>fa fa-adjust</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-tint"></i><span>fa fa-tint</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pencil-square-o"></i><span>fa fa-pencil-square-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-share-square-o"></i><span>fa fa-share-square-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-check-square-o"></i><span>fa fa-check-square-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrows"></i><span>fa fa-arrows</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-step-backward"></i><span>fa fa-step-backward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-fast-backward"></i><span>fa fa-fast-backward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-backward"></i><span>fa fa-backward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-play"></i><span>fa fa-play</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pause"></i><span>fa fa-pause</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-stop"></i><span>fa fa-stop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-forward"></i><span>fa fa-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-fast-forward"></i><span>fa fa-fast-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-step-forward"></i><span>fa fa-step-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-eject"></i><span>fa fa-eject</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-chevron-left"></i><span>fa fa-chevron-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-chevron-right"></i><span>fa fa-chevron-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-plus-circle"></i><span>fa fa-plus-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-minus-circle"></i><span>fa fa-minus-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-times-circle"></i><span>fa fa-times-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-check-circle"></i><span>fa fa-check-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-question-circle"></i><span>fa fa-question-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-info-circle"></i><span>fa fa-info-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-crosshairs"></i><span>fa fa-crosshairs</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-times-circle-o"></i><span>fa fa-times-circle-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-check-circle-o"></i><span>fa fa-check-circle-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-ban"></i><span>fa fa-ban</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrow-left"></i><span>fa fa-arrow-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrow-right"></i><span>fa fa-arrow-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrow-up"></i><span>fa fa-arrow-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrow-down"></i><span>fa fa-arrow-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-share"></i><span>fa fa-share</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-expand"></i><span>fa fa-expand</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-compress"></i><span>fa fa-compress</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-plus"></i><span>fa fa-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-minus"></i><span>fa fa-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-asterisk"></i><span>fa fa-asterisk</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-exclamation-circle"></i><span>fa fa-exclamation-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-gift"></i><span>fa fa-gift</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-leaf"></i><span>fa fa-leaf</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-fire"></i><span>fa fa-fire</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-eye"></i><span>fa fa-eye</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-eye-slash"></i><span>fa fa-eye-slash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-exclamation-triangle"></i><span>fa fa-exclamation-triangle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-plane"></i><span>fa fa-plane</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-calendar"></i><span>fa fa-calendar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-random"></i><span>fa fa-random</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-comment"></i><span>fa fa-comment</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-magnet"></i><span>fa fa-magnet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-chevron-up"></i><span>fa fa-chevron-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-chevron-down"></i><span>fa fa-chevron-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-retweet"></i><span>fa fa-retweet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-shopping-cart"></i><span>fa fa-shopping-cart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-folder"></i><span>fa fa-folder</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-folder-open"></i><span>fa fa-folder-open</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrows-v"></i><span>fa fa-arrows-v</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrows-h"></i><span>fa fa-arrows-h</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bar-chart"></i><span>fa fa-bar-chart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter-square"></i><span>fa fa-twitter-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-facebook-square"></i><span>fa fa-facebook-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-camera-retro"></i><span>fa fa-camera-retro</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-key"></i><span>fa fa-key</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cogs"></i><span>fa fa-cogs</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-comments"></i><span>fa fa-comments</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i><span>fa fa-thumbs-o-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-thumbs-o-down"></i><span>fa fa-thumbs-o-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-star-half"></i><span>fa fa-star-half</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-heart-o"></i><span>fa fa-heart-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sign-out"></i><span>fa fa-sign-out</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin-square"></i><span>fa fa-linkedin-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-thumb-tack"></i><span>fa fa-thumb-tack</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-external-link"></i><span>fa fa-external-link</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sign-in"></i><span>fa fa-sign-in</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-trophy"></i><span>fa fa-trophy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-github-square"></i><span>fa fa-github-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-upload"></i><span>fa fa-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-lemon-o"></i><span>fa fa-lemon-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-phone"></i><span>fa fa-phone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-square-o"></i><span>fa fa-square-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bookmark-o"></i><span>fa fa-bookmark-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-phone-square"></i><span>fa fa-phone-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i><span>fa fa-twitter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i><span>fa fa-facebook</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-github"></i><span>fa fa-github</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-unlock"></i><span>fa fa-unlock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-credit-card"></i><span>fa fa-credit-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-rss"></i><span>fa fa-rss</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hdd-o"></i><span>fa fa-hdd-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bullhorn"></i><span>fa fa-bullhorn</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bell"></i><span>fa fa-bell</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-certificate"></i><span>fa fa-certificate</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hand-o-right"></i><span>fa fa-hand-o-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hand-o-left"></i><span>fa fa-hand-o-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hand-o-up"></i><span>fa fa-hand-o-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hand-o-down"></i><span>fa fa-hand-o-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrow-circle-left"></i><span>fa fa-arrow-circle-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrow-circle-right"></i><span>fa fa-arrow-circle-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrow-circle-up"></i><span>fa fa-arrow-circle-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrow-circle-down"></i><span>fa fa-arrow-circle-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-globe"></i><span>fa fa-globe</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-wrench"></i><span>fa fa-wrench</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-tasks"></i><span>fa fa-tasks</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-filter"></i><span>fa fa-filter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-briefcase"></i><span>fa fa-briefcase</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrows-alt"></i><span>fa fa-arrows-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-users"></i><span>fa fa-users</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-link"></i><span>fa fa-link</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cloud"></i><span>fa fa-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-flask"></i><span>fa fa-flask</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-scissors"></i><span>fa fa-scissors</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-files-o"></i><span>fa fa-files-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-paperclip"></i><span>fa fa-paperclip</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-floppy-o"></i><span>fa fa-floppy-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-square"></i><span>fa fa-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bars"></i><span>fa fa-bars</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-list-ul"></i><span>fa fa-list-ul</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-list-ol"></i><span>fa fa-list-ol</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-strikethrough"></i><span>fa fa-strikethrough</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-underline"></i><span>fa fa-underline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-table"></i><span>fa fa-table</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-magic"></i><span>fa fa-magic</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-truck"></i><span>fa fa-truck</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i><span>fa fa-pinterest</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest-square"></i><span>fa fa-pinterest-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google-plus-square"></i><span>fa fa-google-plus-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google-plus"></i><span>fa fa-google-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-money"></i><span>fa fa-money</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-down"></i><span>fa fa-caret-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-up"></i><span>fa fa-caret-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-left"></i><span>fa fa-caret-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-right"></i><span>fa fa-caret-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-columns"></i><span>fa fa-columns</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sort"></i><span>fa fa-sort</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sort-desc"></i><span>fa fa-sort-desc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sort-asc"></i><span>fa fa-sort-asc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-envelope"></i><span>fa fa-envelope</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i><span>fa fa-linkedin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-undo"></i><span>fa fa-undo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-gavel"></i><span>fa fa-gavel</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-tachometer"></i><span>fa fa-tachometer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-comment-o"></i><span>fa fa-comment-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-comments-o"></i><span>fa fa-comments-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bolt"></i><span>fa fa-bolt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sitemap"></i><span>fa fa-sitemap</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-umbrella"></i><span>fa fa-umbrella</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-clipboard"></i><span>fa fa-clipboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-lightbulb-o"></i><span>fa fa-lightbulb-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-exchange"></i><span>fa fa-exchange</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cloud-download"></i><span>fa fa-cloud-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cloud-upload"></i><span>fa fa-cloud-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-user-md"></i><span>fa fa-user-md</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-stethoscope"></i><span>fa fa-stethoscope</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-suitcase"></i><span>fa fa-suitcase</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bell-o"></i><span>fa fa-bell-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-coffee"></i><span>fa fa-coffee</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cutlery"></i><span>fa fa-cutlery</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file-text-o"></i><span>fa fa-file-text-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-building-o"></i><span>fa fa-building-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hospital-o"></i><span>fa fa-hospital-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-ambulance"></i><span>fa fa-ambulance</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-medkit"></i><span>fa fa-medkit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-fighter-jet"></i><span>fa fa-fighter-jet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-beer"></i><span>fa fa-beer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-h-square"></i><span>fa fa-h-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-plus-square"></i><span>fa fa-plus-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-angle-double-left"></i><span>fa fa-angle-double-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-angle-double-right"></i><span>fa fa-angle-double-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-angle-double-up"></i><span>fa fa-angle-double-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-angle-double-down"></i><span>fa fa-angle-double-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-angle-left"></i><span>fa fa-angle-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-angle-right"></i><span>fa fa-angle-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-angle-up"></i><span>fa fa-angle-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-angle-down"></i><span>fa fa-angle-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-desktop"></i><span>fa fa-desktop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-laptop"></i><span>fa fa-laptop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-tablet"></i><span>fa fa-tablet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-mobile"></i><span>fa fa-mobile</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i><span>fa fa-circle-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-quote-left"></i><span>fa fa-quote-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-quote-right"></i><span>fa fa-quote-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-spinner"></i><span>fa fa-spinner</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle"></i><span>fa fa-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-reply"></i><span>fa fa-reply</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-github-alt"></i><span>fa fa-github-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-folder-o"></i><span>fa fa-folder-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-folder-open-o"></i><span>fa fa-folder-open-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-smile-o"></i><span>fa fa-smile-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-frown-o"></i><span>fa fa-frown-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-meh-o"></i><span>fa fa-meh-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-gamepad"></i><span>fa fa-gamepad</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-keyboard-o"></i><span>fa fa-keyboard-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-flag-o"></i><span>fa fa-flag-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-flag-checkered"></i><span>fa fa-flag-checkered</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-terminal"></i><span>fa fa-terminal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-code"></i><span>fa fa-code</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-reply-all"></i><span>fa fa-reply-all</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-star-half-o"></i><span>fa fa-star-half-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-location-arrow"></i><span>fa fa-location-arrow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-crop"></i><span>fa fa-crop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-code-fork"></i><span>fa fa-code-fork</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-chain-broken"></i><span>fa fa-chain-broken</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-question"></i><span>fa fa-question</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-info"></i><span>fa fa-info</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-exclamation"></i><span>fa fa-exclamation</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-superscript"></i><span>fa fa-superscript</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-subscript"></i><span>fa fa-subscript</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-eraser"></i><span>fa fa-eraser</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-puzzle-piece"></i><span>fa fa-puzzle-piece</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-microphone"></i><span>fa fa-microphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-microphone-slash"></i><span>fa fa-microphone-slash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-shield"></i><span>fa fa-shield</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-calendar-o"></i><span>fa fa-calendar-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-fire-extinguisher"></i><span>fa fa-fire-extinguisher</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-rocket"></i><span>fa fa-rocket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-maxcdn"></i><span>fa fa-maxcdn</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-chevron-circle-left"></i><span>fa fa-chevron-circle-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-chevron-circle-right"></i><span>fa fa-chevron-circle-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-chevron-circle-up"></i><span>fa fa-chevron-circle-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-chevron-circle-down"></i><span>fa fa-chevron-circle-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-html5"></i><span>fa fa-html5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-css3"></i><span>fa fa-css3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-anchor"></i><span>fa fa-anchor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-unlock-alt"></i><span>fa fa-unlock-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bullseye"></i><span>fa fa-bullseye</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-ellipsis-h"></i><span>fa fa-ellipsis-h</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-ellipsis-v"></i><span>fa fa-ellipsis-v</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-rss-square"></i><span>fa fa-rss-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-play-circle"></i><span>fa fa-play-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-ticket"></i><span>fa fa-ticket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-minus-square"></i><span>fa fa-minus-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-minus-square-o"></i><span>fa fa-minus-square-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-level-up"></i><span>fa fa-level-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-level-down"></i><span>fa fa-level-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-check-square"></i><span>fa fa-check-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pencil-square"></i><span>fa fa-pencil-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-external-link-square"></i><span>fa fa-external-link-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-share-square"></i><span>fa fa-share-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-compass"></i><span>fa fa-compass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-square-o-down"></i><span>fa fa-caret-square-o-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-square-o-up"></i><span>fa fa-caret-square-o-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-square-o-right"></i><span>fa fa-caret-square-o-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-eur"></i><span>fa fa-eur</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-gbp"></i><span>fa fa-gbp</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-usd"></i><span>fa fa-usd</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-inr"></i><span>fa fa-inr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-jpy"></i><span>fa fa-jpy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-rub"></i><span>fa fa-rub</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-krw"></i><span>fa fa-krw</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-btc"></i><span>fa fa-btc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file"></i><span>fa fa-file</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file-text"></i><span>fa fa-file-text</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sort-alpha-asc"></i><span>fa fa-sort-alpha-asc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sort-alpha-desc"></i><span>fa fa-sort-alpha-desc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sort-amount-asc"></i><span>fa fa-sort-amount-asc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sort-amount-desc"></i><span>fa fa-sort-amount-desc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sort-numeric-asc"></i><span>fa fa-sort-numeric-asc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sort-numeric-desc"></i><span>fa fa-sort-numeric-desc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-thumbs-up"></i><span>fa fa-thumbs-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-thumbs-down"></i><span>fa fa-thumbs-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-youtube-square"></i><span>fa fa-youtube-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-youtube"></i><span>fa fa-youtube</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-xing"></i><span>fa fa-xing</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-xing-square"></i><span>fa fa-xing-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-youtube-play"></i><span>fa fa-youtube-play</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-dropbox"></i><span>fa fa-dropbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-stack-overflow"></i><span>fa fa-stack-overflow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i><span>fa fa-instagram</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-flickr"></i><span>fa fa-flickr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-adn"></i><span>fa fa-adn</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bitbucket"></i><span>fa fa-bitbucket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bitbucket-square"></i><span>fa fa-bitbucket-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-tumblr"></i><span>fa fa-tumblr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-tumblr-square"></i><span>fa fa-tumblr-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-long-arrow-down"></i><span>fa fa-long-arrow-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-long-arrow-up"></i><span>fa fa-long-arrow-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-long-arrow-left"></i><span>fa fa-long-arrow-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-long-arrow-right"></i><span>fa fa-long-arrow-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-apple"></i><span>fa fa-apple</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-windows"></i><span>fa fa-windows</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-android"></i><span>fa fa-android</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linux"></i><span>fa fa-linux</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-dribbble"></i><span>fa fa-dribbble</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-skype"></i><span>fa fa-skype</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-foursquare"></i><span>fa fa-foursquare</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-trello"></i><span>fa fa-trello</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-female"></i><span>fa fa-female</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-male"></i><span>fa fa-male</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-gratipay"></i><span>fa fa-gratipay</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sun-o"></i><span>fa fa-sun-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-moon-o"></i><span>fa fa-moon-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-archive"></i><span>fa fa-archive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bug"></i><span>fa fa-bug</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-vk"></i><span>fa fa-vk</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-weibo"></i><span>fa fa-weibo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-renren"></i><span>fa fa-renren</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pagelines"></i><span>fa fa-pagelines</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-stack-exchange"></i><span>fa fa-stack-exchange</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrow-circle-o-right"></i><span>fa fa-arrow-circle-o-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-arrow-circle-o-left"></i><span>fa fa-arrow-circle-o-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-square-o-left"></i><span>fa fa-caret-square-o-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-dot-circle-o"></i><span>fa fa-dot-circle-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-wheelchair"></i><span>fa fa-wheelchair</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-vimeo-square"></i><span>fa fa-vimeo-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-try"></i><span>fa fa-try</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-plus-square-o"></i><span>fa fa-plus-square-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-space-shuttle"></i><span>fa fa-space-shuttle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-slack"></i><span>fa fa-slack</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-envelope-square"></i><span>fa fa-envelope-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-wordpress"></i><span>fa fa-wordpress</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-openid"></i><span>fa fa-openid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-university"></i><span>fa fa-university</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-graduation-cap"></i><span>fa fa-graduation-cap</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-yahoo"></i><span>fa fa-yahoo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i><span>fa fa-google</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-reddit"></i><span>fa fa-reddit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-reddit-square"></i><span>fa fa-reddit-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-stumbleupon-circle"></i><span>fa fa-stumbleupon-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-stumbleupon"></i><span>fa fa-stumbleupon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-delicious"></i><span>fa fa-delicious</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-digg"></i><span>fa fa-digg</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pied-piper-pp"></i><span>fa fa-pied-piper-pp</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pied-piper-alt"></i><span>fa fa-pied-piper-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-drupal"></i><span>fa fa-drupal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-joomla"></i><span>fa fa-joomla</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-language"></i><span>fa fa-language</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-fax"></i><span>fa fa-fax</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-building"></i><span>fa fa-building</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-child"></i><span>fa fa-child</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-paw"></i><span>fa fa-paw</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-spoon"></i><span>fa fa-spoon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cube"></i><span>fa fa-cube</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cubes"></i><span>fa fa-cubes</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-behance"></i><span>fa fa-behance</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-behance-square"></i><span>fa fa-behance-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-steam"></i><span>fa fa-steam</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-steam-square"></i><span>fa fa-steam-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-recycle"></i><span>fa fa-recycle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-car"></i><span>fa fa-car</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-taxi"></i><span>fa fa-taxi</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-tree"></i><span>fa fa-tree</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-spotify"></i><span>fa fa-spotify</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-deviantart"></i><span>fa fa-deviantart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-soundcloud"></i><span>fa fa-soundcloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-database"></i><span>fa fa-database</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file-pdf-o"></i><span>fa fa-file-pdf-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file-word-o"></i><span>fa fa-file-word-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file-excel-o"></i><span>fa fa-file-excel-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file-powerpoint-o"></i><span>fa fa-file-powerpoint-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file-image-o"></i><span>fa fa-file-image-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file-archive-o"></i><span>fa fa-file-archive-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file-audio-o"></i><span>fa fa-file-audio-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file-video-o"></i><span>fa fa-file-video-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-file-code-o"></i><span>fa fa-file-code-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-vine"></i><span>fa fa-vine</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-codepen"></i><span>fa fa-codepen</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-jsfiddle"></i><span>fa fa-jsfiddle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-life-ring"></i><span>fa fa-life-ring</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o-notch"></i><span>fa fa-circle-o-notch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-rebel"></i><span>fa fa-rebel</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-empire"></i><span>fa fa-empire</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-git-square"></i><span>fa fa-git-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-git"></i><span>fa fa-git</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hacker-news"></i><span>fa fa-hacker-news</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-tencent-weibo"></i><span>fa fa-tencent-weibo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-qq"></i><span>fa fa-qq</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-weixin"></i><span>fa fa-weixin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-paper-plane"></i><span>fa fa-paper-plane</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-paper-plane-o"></i><span>fa fa-paper-plane-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-history"></i><span>fa fa-history</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-thin"></i><span>fa fa-circle-thin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-header"></i><span>fa fa-header</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-paragraph"></i><span>fa fa-paragraph</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sliders"></i><span>fa fa-sliders</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-share-alt"></i><span>fa fa-share-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-share-alt-square"></i><span>fa fa-share-alt-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bomb"></i><span>fa fa-bomb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-futbol-o"></i><span>fa fa-futbol-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-tty"></i><span>fa fa-tty</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-binoculars"></i><span>fa fa-binoculars</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-plug"></i><span>fa fa-plug</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-slideshare"></i><span>fa fa-slideshare</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitch"></i><span>fa fa-twitch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-yelp"></i><span>fa fa-yelp</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-newspaper-o"></i><span>fa fa-newspaper-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-wifi"></i><span>fa fa-wifi</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-calculator"></i><span>fa fa-calculator</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-paypal"></i><span>fa fa-paypal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google-wallet"></i><span>fa fa-google-wallet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cc-visa"></i><span>fa fa-cc-visa</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cc-mastercard"></i><span>fa fa-cc-mastercard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cc-discover"></i><span>fa fa-cc-discover</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cc-amex"></i><span>fa fa-cc-amex</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cc-paypal"></i><span>fa fa-cc-paypal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cc-stripe"></i><span>fa fa-cc-stripe</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bell-slash"></i><span>fa fa-bell-slash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bell-slash-o"></i><span>fa fa-bell-slash-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-trash"></i><span>fa fa-trash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-copyright"></i><span>fa fa-copyright</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-at"></i><span>fa fa-at</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-eyedropper"></i><span>fa fa-eyedropper</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-paint-brush"></i><span>fa fa-paint-brush</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-birthday-cake"></i><span>fa fa-birthday-cake</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-area-chart"></i><span>fa fa-area-chart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pie-chart"></i><span>fa fa-pie-chart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-line-chart"></i><span>fa fa-line-chart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-lastfm"></i><span>fa fa-lastfm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-lastfm-square"></i><span>fa fa-lastfm-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-toggle-off"></i><span>fa fa-toggle-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-toggle-on"></i><span>fa fa-toggle-on</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bicycle"></i><span>fa fa-bicycle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bus"></i><span>fa fa-bus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-ioxhost"></i><span>fa fa-ioxhost</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-angellist"></i><span>fa fa-angellist</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cc"></i><span>fa fa-cc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-ils"></i><span>fa fa-ils</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-meanpath"></i><span>fa fa-meanpath</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-buysellads"></i><span>fa fa-buysellads</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-connectdevelop"></i><span>fa fa-connectdevelop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-dashcube"></i><span>fa fa-dashcube</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-forumbee"></i><span>fa fa-forumbee</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-leanpub"></i><span>fa fa-leanpub</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sellsy"></i><span>fa fa-sellsy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-shirtsinbulk"></i><span>fa fa-shirtsinbulk</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-simplybuilt"></i><span>fa fa-simplybuilt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-skyatlas"></i><span>fa fa-skyatlas</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cart-plus"></i><span>fa fa-cart-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cart-arrow-down"></i><span>fa fa-cart-arrow-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-diamond"></i><span>fa fa-diamond</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-ship"></i><span>fa fa-ship</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-user-secret"></i><span>fa fa-user-secret</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-motorcycle"></i><span>fa fa-motorcycle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-street-view"></i><span>fa fa-street-view</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-heartbeat"></i><span>fa fa-heartbeat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-venus"></i><span>fa fa-venus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-mars"></i><span>fa fa-mars</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-mercury"></i><span>fa fa-mercury</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-transgender"></i><span>fa fa-transgender</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-transgender-alt"></i><span>fa fa-transgender-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-venus-double"></i><span>fa fa-venus-double</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-mars-double"></i><span>fa fa-mars-double</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-venus-mars"></i><span>fa fa-venus-mars</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-mars-stroke"></i><span>fa fa-mars-stroke</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-mars-stroke-v"></i><span>fa fa-mars-stroke-v</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-mars-stroke-h"></i><span>fa fa-mars-stroke-h</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-neuter"></i><span>fa fa-neuter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-genderless"></i><span>fa fa-genderless</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-facebook-official"></i><span>fa fa-facebook-official</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest-p"></i><span>fa fa-pinterest-p</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-whatsapp"></i><span>fa fa-whatsapp</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-server"></i><span>fa fa-server</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-user-plus"></i><span>fa fa-user-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-user-times"></i><span>fa fa-user-times</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bed"></i><span>fa fa-bed</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-viacoin"></i><span>fa fa-viacoin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-train"></i><span>fa fa-train</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-subway"></i><span>fa fa-subway</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-medium"></i><span>fa fa-medium</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-y-combinator"></i><span>fa fa-y-combinator</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-optin-monster"></i><span>fa fa-optin-monster</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-opencart"></i><span>fa fa-opencart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-expeditedssl"></i><span>fa fa-expeditedssl</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-battery-full"></i><span>fa fa-battery-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-battery-three-quarters"></i><span>fa fa-battery-three-quarters</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-battery-half"></i><span>fa fa-battery-half</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-battery-quarter"></i><span>fa fa-battery-quarter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-battery-empty"></i><span>fa fa-battery-empty</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-mouse-pointer"></i><span>fa fa-mouse-pointer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-i-cursor"></i><span>fa fa-i-cursor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-object-group"></i><span>fa fa-object-group</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-object-ungroup"></i><span>fa fa-object-ungroup</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sticky-note"></i><span>fa fa-sticky-note</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sticky-note-o"></i><span>fa fa-sticky-note-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cc-jcb"></i><span>fa fa-cc-jcb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-cc-diners-club"></i><span>fa fa-cc-diners-club</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-clone"></i><span>fa fa-clone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-balance-scale"></i><span>fa fa-balance-scale</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hourglass-o"></i><span>fa fa-hourglass-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hourglass-start"></i><span>fa fa-hourglass-start</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hourglass-half"></i><span>fa fa-hourglass-half</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hourglass-end"></i><span>fa fa-hourglass-end</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hourglass"></i><span>fa fa-hourglass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hand-rock-o"></i><span>fa fa-hand-rock-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hand-paper-o"></i><span>fa fa-hand-paper-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hand-scissors-o"></i><span>fa fa-hand-scissors-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hand-lizard-o"></i><span>fa fa-hand-lizard-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hand-spock-o"></i><span>fa fa-hand-spock-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hand-pointer-o"></i><span>fa fa-hand-pointer-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hand-peace-o"></i><span>fa fa-hand-peace-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-trademark"></i><span>fa fa-trademark</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-registered"></i><span>fa fa-registered</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-creative-commons"></i><span>fa fa-creative-commons</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-gg"></i><span>fa fa-gg</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-gg-circle"></i><span>fa fa-gg-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-tripadvisor"></i><span>fa fa-tripadvisor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-odnoklassniki"></i><span>fa fa-odnoklassniki</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-odnoklassniki-square"></i><span>fa fa-odnoklassniki-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-get-pocket"></i><span>fa fa-get-pocket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-wikipedia-w"></i><span>fa fa-wikipedia-w</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-safari"></i><span>fa fa-safari</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-chrome"></i><span>fa fa-chrome</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-firefox"></i><span>fa fa-firefox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-opera"></i><span>fa fa-opera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-internet-explorer"></i><span>fa fa-internet-explorer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-television"></i><span>fa fa-television</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-contao"></i><span>fa fa-contao</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-500px"></i><span>fa fa-500px</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-amazon"></i><span>fa fa-amazon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-calendar-plus-o"></i><span>fa fa-calendar-plus-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-calendar-minus-o"></i><span>fa fa-calendar-minus-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-calendar-times-o"></i><span>fa fa-calendar-times-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-calendar-check-o"></i><span>fa fa-calendar-check-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-industry"></i><span>fa fa-industry</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-map-pin"></i><span>fa fa-map-pin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-map-signs"></i><span>fa fa-map-signs</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-map-o"></i><span>fa fa-map-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-map"></i><span>fa fa-map</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-commenting"></i><span>fa fa-commenting</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-commenting-o"></i><span>fa fa-commenting-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-houzz"></i><span>fa fa-houzz</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-vimeo"></i><span>fa fa-vimeo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-black-tie"></i><span>fa fa-black-tie</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-fonticons"></i><span>fa fa-fonticons</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-reddit-alien"></i><span>fa fa-reddit-alien</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-edge"></i><span>fa fa-edge</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-credit-card-alt"></i><span>fa fa-credit-card-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-codiepie"></i><span>fa fa-codiepie</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-modx"></i><span>fa fa-modx</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-fort-awesome"></i><span>fa fa-fort-awesome</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-usb"></i><span>fa fa-usb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-product-hunt"></i><span>fa fa-product-hunt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-mixcloud"></i><span>fa fa-mixcloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-scribd"></i><span>fa fa-scribd</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pause-circle"></i><span>fa fa-pause-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pause-circle-o"></i><span>fa fa-pause-circle-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-stop-circle"></i><span>fa fa-stop-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-stop-circle-o"></i><span>fa fa-stop-circle-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-shopping-bag"></i><span>fa fa-shopping-bag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-shopping-basket"></i><span>fa fa-shopping-basket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-hashtag"></i><span>fa fa-hashtag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bluetooth"></i><span>fa fa-bluetooth</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bluetooth-b"></i><span>fa fa-bluetooth-b</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-percent"></i><span>fa fa-percent</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-gitlab"></i><span>fa fa-gitlab</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-wpbeginner"></i><span>fa fa-wpbeginner</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-wpforms"></i><span>fa fa-wpforms</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-envira"></i><span>fa fa-envira</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-universal-access"></i><span>fa fa-universal-access</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-wheelchair-alt"></i><span>fa fa-wheelchair-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-question-circle-o"></i><span>fa fa-question-circle-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-blind"></i><span>fa fa-blind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-audio-description"></i><span>fa fa-audio-description</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-volume-control-phone"></i><span>fa fa-volume-control-phone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-braille"></i><span>fa fa-braille</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-assistive-listening-systems"></i><span>fa fa-assistive-listening-systems</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-american-sign-language-interpreting"></i><span>fa fa-american-sign-language-interpreting</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-deaf"></i><span>fa fa-deaf</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-glide"></i><span>fa fa-glide</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-glide-g"></i><span>fa fa-glide-g</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-sign-language"></i><span>fa fa-sign-language</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-low-vision"></i><span>fa fa-low-vision</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-viadeo"></i><span>fa fa-viadeo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-viadeo-square"></i><span>fa fa-viadeo-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-snapchat"></i><span>fa fa-snapchat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-snapchat-ghost"></i><span>fa fa-snapchat-ghost</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-snapchat-square"></i><span>fa fa-snapchat-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pied-piper"></i><span>fa fa-pied-piper</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-first-order"></i><span>fa fa-first-order</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-yoast"></i><span>fa fa-yoast</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-themeisle"></i><span>fa fa-themeisle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google-plus-official"></i><span>fa fa-google-plus-official</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-font-awesome"></i><span>fa fa-font-awesome</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-handshake-o"></i><span>fa fa-handshake-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-envelope-open"></i><span>fa fa-envelope-open</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-envelope-open-o"></i><span>fa fa-envelope-open-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linode"></i><span>fa fa-linode</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-address-book"></i><span>fa fa-address-book</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-address-book-o"></i><span>fa fa-address-book-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-address-card"></i><span>fa fa-address-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-address-card-o"></i><span>fa fa-address-card-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-user-circle"></i><span>fa fa-user-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-user-circle-o"></i><span>fa fa-user-circle-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-user-o"></i><span>fa fa-user-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-id-badge"></i><span>fa fa-id-badge</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-id-card"></i><span>fa fa-id-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-id-card-o"></i><span>fa fa-id-card-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-quora"></i><span>fa fa-quora</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-free-code-camp"></i><span>fa fa-free-code-camp</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-telegram"></i><span>fa fa-telegram</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-thermometer-full"></i><span>fa fa-thermometer-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-thermometer-three-quarters"></i><span>fa fa-thermometer-three-quarters</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-thermometer-half"></i><span>fa fa-thermometer-half</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-thermometer-quarter"></i><span>fa fa-thermometer-quarter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-thermometer-empty"></i><span>fa fa-thermometer-empty</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-shower"></i><span>fa fa-shower</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bath"></i><span>fa fa-bath</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-podcast"></i><span>fa fa-podcast</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-window-maximize"></i><span>fa fa-window-maximize</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-window-minimize"></i><span>fa fa-window-minimize</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-window-restore"></i><span>fa fa-window-restore</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-window-close"></i><span>fa fa-window-close</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-window-close-o"></i><span>fa fa-window-close-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bandcamp"></i><span>fa fa-bandcamp</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-grav"></i><span>fa fa-grav</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-etsy"></i><span>fa fa-etsy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-imdb"></i><span>fa fa-imdb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-ravelry"></i><span>fa fa-ravelry</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-eercast"></i><span>fa fa-eercast</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-microchip"></i><span>fa fa-microchip</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-snowflake-o"></i><span>fa fa-snowflake-o</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-superpowers"></i><span>fa fa-superpowers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-wpexplorer"></i><span>fa fa-wpexplorer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-meetup"></i><span>fa fa-meetup</span></a>
                    </li>
                  </ul>
                </div>
              </div><!--------------------
              START - Color Scheme Toggler
              -------------------->
              <div class="floated-colors-btn second-floated-btn">
                <div class="os-toggler-w">
                  <div class="os-toggler-i">
                    <div class="os-toggler-pill"></div>
                  </div>
                </div>
                <span>Dark </span><span>Colors</span>
              </div>
              <!--------------------
              END - Color Scheme Toggler
              --------------------><!--------------------
              START - Demo Customizer
              -------------------->
              <div class="floated-customizer-btn third-floated-btn">
                <div class="icon-w">
                  <i class="os-icon os-icon-ui-46"></i>
                </div>
                <span>Customizer</span>
              </div>
              <div class="floated-customizer-panel">
                <div class="fcp-content">
                  <div class="close-customizer-btn">
                    <i class="os-icon os-icon-x"></i>
                  </div>
                  <div class="fcp-group">
                    <div class="fcp-group-header">
                      Menu Settings
                    </div>
                    <div class="fcp-group-contents">
                      <div class="fcp-field">
                        <label for="">Menu Position</label><select class="menu-position-selector">
                          <option value="left">
                            Left
                          </option>
                          <option value="right">
                            Right
                          </option>
                          <option value="top">
                            Top
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Menu Style</label><select class="menu-layout-selector">
                          <option value="compact">
                            Compact
                          </option>
                          <option value="full">
                            Full
                          </option>
                          <option value="mini">
                            Mini
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field with-image-selector-w">
                        <label for="">With Image</label><select class="with-image-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Menu Color</label>
                        <div class="fcp-colors menu-color-selector">
                          <div class="color-selector menu-color-selector color-bright selected"></div>
                          <div class="color-selector menu-color-selector color-dark"></div>
                          <div class="color-selector menu-color-selector color-light"></div>
                          <div class="color-selector menu-color-selector color-transparent"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fcp-group">
                    <div class="fcp-group-header">
                      Sub Menu
                    </div>
                    <div class="fcp-group-contents">
                      <div class="fcp-field">
                        <label for="">Sub Menu Style</label><select class="sub-menu-style-selector">
                          <option value="flyout">
                            Flyout
                          </option>
                          <option value="inside">
                            Inside/Click
                          </option>
                          <option value="over">
                            Over
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Sub Menu Color</label>
                        <div class="fcp-colors">
                          <div class="color-selector sub-menu-color-selector color-bright selected"></div>
                          <div class="color-selector sub-menu-color-selector color-dark"></div>
                          <div class="color-selector sub-menu-color-selector color-light"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fcp-group">
                    <div class="fcp-group-header">
                      Other Settings
                    </div>
                    <div class="fcp-group-contents">
                      <div class="fcp-field">
                        <label for="">Full Screen?</label><select class="full-screen-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Show Top Bar</label><select class="top-bar-visibility-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Above Menu?</label><select class="top-bar-above-menu-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Top Bar Color</label>
                        <div class="fcp-colors">
                          <div class="color-selector top-bar-color-selector color-bright selected"></div>
                          <div class="color-selector top-bar-color-selector color-dark"></div>
                          <div class="color-selector top-bar-color-selector color-light"></div>
                          <div class="color-selector top-bar-color-selector color-transparent"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--------------------
              END - Demo Customizer
              --------------------><!--------------------
              START - Chat Popup Box
              -------------------->
              <div class="floated-chat-btn">
                <i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span>
              </div>
              <div class="floated-chat-w">
                <div class="floated-chat-i">
                  <div class="chat-close">
                    <i class="os-icon os-icon-close"></i>
                  </div>
                  <div class="chat-head">
                    <div class="user-w with-status status-green">
                      <div class="user-avatar-w">
                        <div class="user-avatar">
                          <img alt="" src="img/avatar1.jpg">
                        </div>
                      </div>
                      <div class="user-name">
                        <h6 class="user-title">
                          John Mayers
                        </h6>
                        <div class="user-role">
                          Account Manager
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="chat-messages">
                    <div class="message">
                      <div class="message-content">
                        Hi, how can I help you?
                      </div>
                    </div>
                    <div class="date-break">
                      Mon 10:20am
                    </div>
                    <div class="message">
                      <div class="message-content">
                        Hi, my name is Mike, I will be happy to assist you
                      </div>
                    </div>
                    <div class="message self">
                      <div class="message-content">
                        Hi, I tried ordering this product and it keeps showing me error code.
                      </div>
                    </div>
                  </div>
                  <div class="chat-controls">
                    <input class="message-input" placeholder="Type your message here..." type="text">
                    <div class="chat-extra">
                      <a href="#"><span class="extra-tooltip">Attach Document</span><i class="os-icon os-icon-documents-07"></i></a><a href="#"><span class="extra-tooltip">Insert Photo</span><i class="os-icon os-icon-others-29"></i></a><a href="#"><span class="extra-tooltip">Upload Video</span><i class="os-icon os-icon-ui-51"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--------------------
              END - Chat Popup Box
              -------------------->
            </div>
          </div>
        </div>
      </div>
      <div class="display-type"></div>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="bower_components/ckeditor/ckeditor.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="bower_components/dropzone/dist/dropzone.js"></script>
    <script src="bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="bower_components/bootstrap/js/dist/util.js"></script>
    <script src="bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="bower_components/bootstrap/js/dist/button.js"></script>
    <script src="bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="js/demo_customizer.js?version=4.5.0"></script>
    <script src="js/main.js?version=4.5.0"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-XXXXXXXX-9', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
