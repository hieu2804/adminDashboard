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
    <link href="icon_fonts_assets/typicons/typicons.css" rel="stylesheet">
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
                    Typicons
                  </h5>
                  <div class="form-desc">
                    Powered by Typicons set, for more info <a href="http://www.typicons.com/">click here</a>
                  </div>
                  <ul class="demo-icons-list">
                    <li>
                      <a href="#"><i class="typcn typcn-adjust-brightness"></i><span>typcn typcn-adjust-brightness</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-adjust-contrast"></i><span>typcn typcn-adjust-contrast</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-anchor-outline"></i><span>typcn typcn-anchor-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-anchor"></i><span>typcn typcn-anchor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-archive"></i><span>typcn typcn-archive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-back-outline"></i><span>typcn typcn-arrow-back-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-back"></i><span>typcn typcn-arrow-back</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-down-outline"></i><span>typcn typcn-arrow-down-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-down-thick"></i><span>typcn typcn-arrow-down-thick</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-down"></i><span>typcn typcn-arrow-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-forward-outline"></i><span>typcn typcn-arrow-forward-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-forward"></i><span>typcn typcn-arrow-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-left-outline"></i><span>typcn typcn-arrow-left-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-left-thick"></i><span>typcn typcn-arrow-left-thick</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-left"></i><span>typcn typcn-arrow-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-loop-outline"></i><span>typcn typcn-arrow-loop-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-loop"></i><span>typcn typcn-arrow-loop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-maximise-outline"></i><span>typcn typcn-arrow-maximise-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-maximise"></i><span>typcn typcn-arrow-maximise</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-minimise-outline"></i><span>typcn typcn-arrow-minimise-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-minimise"></i><span>typcn typcn-arrow-minimise</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-move-outline"></i><span>typcn typcn-arrow-move-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-move"></i><span>typcn typcn-arrow-move</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-repeat-outline"></i><span>typcn typcn-arrow-repeat-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-repeat"></i><span>typcn typcn-arrow-repeat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-right-outline"></i><span>typcn typcn-arrow-right-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-right-thick"></i><span>typcn typcn-arrow-right-thick</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-right"></i><span>typcn typcn-arrow-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-shuffle"></i><span>typcn typcn-arrow-shuffle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-sorted-down"></i><span>typcn typcn-arrow-sorted-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-sorted-up"></i><span>typcn typcn-arrow-sorted-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-sync-outline"></i><span>typcn typcn-arrow-sync-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-sync"></i><span>typcn typcn-arrow-sync</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-unsorted"></i><span>typcn typcn-arrow-unsorted</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-up-outline"></i><span>typcn typcn-arrow-up-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-up-thick"></i><span>typcn typcn-arrow-up-thick</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-arrow-up"></i><span>typcn typcn-arrow-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-at"></i><span>typcn typcn-at</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-attachment-outline"></i><span>typcn typcn-attachment-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-attachment"></i><span>typcn typcn-attachment</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-backspace-outline"></i><span>typcn typcn-backspace-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-backspace"></i><span>typcn typcn-backspace</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-battery-charge"></i><span>typcn typcn-battery-charge</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-battery-full"></i><span>typcn typcn-battery-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-battery-high"></i><span>typcn typcn-battery-high</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-battery-low"></i><span>typcn typcn-battery-low</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-battery-mid"></i><span>typcn typcn-battery-mid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-beaker"></i><span>typcn typcn-beaker</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-beer"></i><span>typcn typcn-beer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-bell"></i><span>typcn typcn-bell</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-book"></i><span>typcn typcn-book</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-bookmark"></i><span>typcn typcn-bookmark</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-briefcase"></i><span>typcn typcn-briefcase</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-brush"></i><span>typcn typcn-brush</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-business-card"></i><span>typcn typcn-business-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-calculator"></i><span>typcn typcn-calculator</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-calendar-outline"></i><span>typcn typcn-calendar-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-calendar"></i><span>typcn typcn-calendar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-camera-outline"></i><span>typcn typcn-camera-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-camera"></i><span>typcn typcn-camera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-cancel-outline"></i><span>typcn typcn-cancel-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-cancel"></i><span>typcn typcn-cancel</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-chart-area-outline"></i><span>typcn typcn-chart-area-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-chart-area"></i><span>typcn typcn-chart-area</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-chart-bar-outline"></i><span>typcn typcn-chart-bar-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-chart-bar"></i><span>typcn typcn-chart-bar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-chart-line-outline"></i><span>typcn typcn-chart-line-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-chart-line"></i><span>typcn typcn-chart-line</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-chart-pie-outline"></i><span>typcn typcn-chart-pie-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-chart-pie"></i><span>typcn typcn-chart-pie</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-chevron-left-outline"></i><span>typcn typcn-chevron-left-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-chevron-left"></i><span>typcn typcn-chevron-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-chevron-right-outline"></i><span>typcn typcn-chevron-right-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-chevron-right"></i><span>typcn typcn-chevron-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-clipboard"></i><span>typcn typcn-clipboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-cloud-storage"></i><span>typcn typcn-cloud-storage</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-cloud-storage-outline"></i><span>typcn typcn-cloud-storage-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-code-outline"></i><span>typcn typcn-code-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-code"></i><span>typcn typcn-code</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-coffee"></i><span>typcn typcn-coffee</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-cog-outline"></i><span>typcn typcn-cog-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-cog"></i><span>typcn typcn-cog</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-compass"></i><span>typcn typcn-compass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-contacts"></i><span>typcn typcn-contacts</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-credit-card"></i><span>typcn typcn-credit-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-css3"></i><span>typcn typcn-css3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-database"></i><span>typcn typcn-database</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-delete-outline"></i><span>typcn typcn-delete-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-delete"></i><span>typcn typcn-delete</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-device-desktop"></i><span>typcn typcn-device-desktop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-device-laptop"></i><span>typcn typcn-device-laptop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-device-phone"></i><span>typcn typcn-device-phone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-device-tablet"></i><span>typcn typcn-device-tablet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-directions"></i><span>typcn typcn-directions</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-divide-outline"></i><span>typcn typcn-divide-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-divide"></i><span>typcn typcn-divide</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-document-add"></i><span>typcn typcn-document-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-document-delete"></i><span>typcn typcn-document-delete</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-document-text"></i><span>typcn typcn-document-text</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-document"></i><span>typcn typcn-document</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-download-outline"></i><span>typcn typcn-download-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-download"></i><span>typcn typcn-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-dropbox"></i><span>typcn typcn-dropbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-edit"></i><span>typcn typcn-edit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-eject-outline"></i><span>typcn typcn-eject-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-eject"></i><span>typcn typcn-eject</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-equals-outline"></i><span>typcn typcn-equals-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-equals"></i><span>typcn typcn-equals</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-export-outline"></i><span>typcn typcn-export-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-export"></i><span>typcn typcn-export</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-eye-outline"></i><span>typcn typcn-eye-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-eye"></i><span>typcn typcn-eye</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-feather"></i><span>typcn typcn-feather</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-film"></i><span>typcn typcn-film</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-filter"></i><span>typcn typcn-filter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-flag-outline"></i><span>typcn typcn-flag-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-flag"></i><span>typcn typcn-flag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-flash-outline"></i><span>typcn typcn-flash-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-flash"></i><span>typcn typcn-flash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-flow-children"></i><span>typcn typcn-flow-children</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-flow-merge"></i><span>typcn typcn-flow-merge</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-flow-parallel"></i><span>typcn typcn-flow-parallel</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-flow-switch"></i><span>typcn typcn-flow-switch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-folder-add"></i><span>typcn typcn-folder-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-folder-delete"></i><span>typcn typcn-folder-delete</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-folder-open"></i><span>typcn typcn-folder-open</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-folder"></i><span>typcn typcn-folder</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-gift"></i><span>typcn typcn-gift</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-globe-outline"></i><span>typcn typcn-globe-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-globe"></i><span>typcn typcn-globe</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-group-outline"></i><span>typcn typcn-group-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-group"></i><span>typcn typcn-group</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-headphones"></i><span>typcn typcn-headphones</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-heart-full-outline"></i><span>typcn typcn-heart-full-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-heart-half-outline"></i><span>typcn typcn-heart-half-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-heart-outline"></i><span>typcn typcn-heart-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-heart"></i><span>typcn typcn-heart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-home-outline"></i><span>typcn typcn-home-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-home"></i><span>typcn typcn-home</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-html5"></i><span>typcn typcn-html5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-image-outline"></i><span>typcn typcn-image-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-image"></i><span>typcn typcn-image</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-infinity-outline"></i><span>typcn typcn-infinity-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-infinity"></i><span>typcn typcn-infinity</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-info-large-outline"></i><span>typcn typcn-info-large-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-info-large"></i><span>typcn typcn-info-large</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-info-outline"></i><span>typcn typcn-info-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-info"></i><span>typcn typcn-info</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-input-checked-outline"></i><span>typcn typcn-input-checked-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-input-checked"></i><span>typcn typcn-input-checked</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-key-outline"></i><span>typcn typcn-key-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-key"></i><span>typcn typcn-key</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-keyboard"></i><span>typcn typcn-keyboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-leaf"></i><span>typcn typcn-leaf</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-lightbulb"></i><span>typcn typcn-lightbulb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-link-outline"></i><span>typcn typcn-link-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-link"></i><span>typcn typcn-link</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-location-arrow-outline"></i><span>typcn typcn-location-arrow-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-location-arrow"></i><span>typcn typcn-location-arrow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-location-outline"></i><span>typcn typcn-location-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-location"></i><span>typcn typcn-location</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-lock-closed-outline"></i><span>typcn typcn-lock-closed-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-lock-closed"></i><span>typcn typcn-lock-closed</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-lock-open-outline"></i><span>typcn typcn-lock-open-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-lock-open"></i><span>typcn typcn-lock-open</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-mail"></i><span>typcn typcn-mail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-map"></i><span>typcn typcn-map</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-eject-outline"></i><span>typcn typcn-media-eject-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-eject"></i><span>typcn typcn-media-eject</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-fast-forward-outline"></i><span>typcn typcn-media-fast-forward-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-fast-forward"></i><span>typcn typcn-media-fast-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-pause-outline"></i><span>typcn typcn-media-pause-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-pause"></i><span>typcn typcn-media-pause</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-play-outline"></i><span>typcn typcn-media-play-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-play-reverse-outline"></i><span>typcn typcn-media-play-reverse-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-play-reverse"></i><span>typcn typcn-media-play-reverse</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-play"></i><span>typcn typcn-media-play</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-record-outline"></i><span>typcn typcn-media-record-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-record"></i><span>typcn typcn-media-record</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-rewind-outline"></i><span>typcn typcn-media-rewind-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-rewind"></i><span>typcn typcn-media-rewind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-stop-outline"></i><span>typcn typcn-media-stop-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-media-stop"></i><span>typcn typcn-media-stop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-message-typing"></i><span>typcn typcn-message-typing</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-message"></i><span>typcn typcn-message</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-messages"></i><span>typcn typcn-messages</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-microphone-outline"></i><span>typcn typcn-microphone-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-microphone"></i><span>typcn typcn-microphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-minus-outline"></i><span>typcn typcn-minus-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-minus"></i><span>typcn typcn-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-mortar-board"></i><span>typcn typcn-mortar-board</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-news"></i><span>typcn typcn-news</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-notes-outline"></i><span>typcn typcn-notes-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-notes"></i><span>typcn typcn-notes</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-pen"></i><span>typcn typcn-pen</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-pencil"></i><span>typcn typcn-pencil</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-phone-outline"></i><span>typcn typcn-phone-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-phone"></i><span>typcn typcn-phone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-pi-outline"></i><span>typcn typcn-pi-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-pi"></i><span>typcn typcn-pi</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-pin-outline"></i><span>typcn typcn-pin-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-pin"></i><span>typcn typcn-pin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-pipette"></i><span>typcn typcn-pipette</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-plane-outline"></i><span>typcn typcn-plane-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-plane"></i><span>typcn typcn-plane</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-plug"></i><span>typcn typcn-plug</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-plus-outline"></i><span>typcn typcn-plus-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-plus"></i><span>typcn typcn-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-point-of-interest-outline"></i><span>typcn typcn-point-of-interest-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-point-of-interest"></i><span>typcn typcn-point-of-interest</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-power-outline"></i><span>typcn typcn-power-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-power"></i><span>typcn typcn-power</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-printer"></i><span>typcn typcn-printer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-puzzle-outline"></i><span>typcn typcn-puzzle-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-puzzle"></i><span>typcn typcn-puzzle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-radar-outline"></i><span>typcn typcn-radar-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-radar"></i><span>typcn typcn-radar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-refresh-outline"></i><span>typcn typcn-refresh-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-refresh"></i><span>typcn typcn-refresh</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-rss-outline"></i><span>typcn typcn-rss-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-rss"></i><span>typcn typcn-rss</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-scissors-outline"></i><span>typcn typcn-scissors-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-scissors"></i><span>typcn typcn-scissors</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-shopping-bag"></i><span>typcn typcn-shopping-bag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-shopping-cart"></i><span>typcn typcn-shopping-cart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-at-circular"></i><span>typcn typcn-social-at-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-dribbble-circular"></i><span>typcn typcn-social-dribbble-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-dribbble"></i><span>typcn typcn-social-dribbble</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-facebook-circular"></i><span>typcn typcn-social-facebook-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-facebook"></i><span>typcn typcn-social-facebook</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-flickr-circular"></i><span>typcn typcn-social-flickr-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-flickr"></i><span>typcn typcn-social-flickr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-github-circular"></i><span>typcn typcn-social-github-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-github"></i><span>typcn typcn-social-github</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-google-plus-circular"></i><span>typcn typcn-social-google-plus-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-google-plus"></i><span>typcn typcn-social-google-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-instagram-circular"></i><span>typcn typcn-social-instagram-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-instagram"></i><span>typcn typcn-social-instagram</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-last-fm-circular"></i><span>typcn typcn-social-last-fm-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-last-fm"></i><span>typcn typcn-social-last-fm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-linkedin-circular"></i><span>typcn typcn-social-linkedin-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-linkedin"></i><span>typcn typcn-social-linkedin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-pinterest-circular"></i><span>typcn typcn-social-pinterest-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-pinterest"></i><span>typcn typcn-social-pinterest</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-skype-outline"></i><span>typcn typcn-social-skype-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-skype"></i><span>typcn typcn-social-skype</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-tumbler-circular"></i><span>typcn typcn-social-tumbler-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-tumbler"></i><span>typcn typcn-social-tumbler</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-twitter-circular"></i><span>typcn typcn-social-twitter-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-twitter"></i><span>typcn typcn-social-twitter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-vimeo-circular"></i><span>typcn typcn-social-vimeo-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-vimeo"></i><span>typcn typcn-social-vimeo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-youtube-circular"></i><span>typcn typcn-social-youtube-circular</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-social-youtube"></i><span>typcn typcn-social-youtube</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-sort-alphabetically-outline"></i><span>typcn typcn-sort-alphabetically-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-sort-alphabetically"></i><span>typcn typcn-sort-alphabetically</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-sort-numerically-outline"></i><span>typcn typcn-sort-numerically-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-sort-numerically"></i><span>typcn typcn-sort-numerically</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-spanner-outline"></i><span>typcn typcn-spanner-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-spanner"></i><span>typcn typcn-spanner</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-spiral"></i><span>typcn typcn-spiral</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-star-full-outline"></i><span>typcn typcn-star-full-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-star-half-outline"></i><span>typcn typcn-star-half-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-star-half"></i><span>typcn typcn-star-half</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-star-outline"></i><span>typcn typcn-star-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-star"></i><span>typcn typcn-star</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-starburst-outline"></i><span>typcn typcn-starburst-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-starburst"></i><span>typcn typcn-starburst</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-stopwatch"></i><span>typcn typcn-stopwatch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-support"></i><span>typcn typcn-support</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-tabs-outline"></i><span>typcn typcn-tabs-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-tag"></i><span>typcn typcn-tag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-tags"></i><span>typcn typcn-tags</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-th-large-outline"></i><span>typcn typcn-th-large-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-th-large"></i><span>typcn typcn-th-large</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-th-list-outline"></i><span>typcn typcn-th-list-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-th-list"></i><span>typcn typcn-th-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-th-menu-outline"></i><span>typcn typcn-th-menu-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-th-menu"></i><span>typcn typcn-th-menu</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-th-small-outline"></i><span>typcn typcn-th-small-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-th-small"></i><span>typcn typcn-th-small</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-thermometer"></i><span>typcn typcn-thermometer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-thumbs-down"></i><span>typcn typcn-thumbs-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-thumbs-ok"></i><span>typcn typcn-thumbs-ok</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-thumbs-up"></i><span>typcn typcn-thumbs-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-tick-outline"></i><span>typcn typcn-tick-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-tick"></i><span>typcn typcn-tick</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-ticket"></i><span>typcn typcn-ticket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-time"></i><span>typcn typcn-time</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-times-outline"></i><span>typcn typcn-times-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-times"></i><span>typcn typcn-times</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-trash"></i><span>typcn typcn-trash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-tree"></i><span>typcn typcn-tree</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-upload-outline"></i><span>typcn typcn-upload-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-upload"></i><span>typcn typcn-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-user-add-outline"></i><span>typcn typcn-user-add-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-user-add"></i><span>typcn typcn-user-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-user-delete-outline"></i><span>typcn typcn-user-delete-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-user-delete"></i><span>typcn typcn-user-delete</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-user-outline"></i><span>typcn typcn-user-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-user"></i><span>typcn typcn-user</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-vendor-android"></i><span>typcn typcn-vendor-android</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-vendor-apple"></i><span>typcn typcn-vendor-apple</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-vendor-microsoft"></i><span>typcn typcn-vendor-microsoft</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-video-outline"></i><span>typcn typcn-video-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-video"></i><span>typcn typcn-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-volume-down"></i><span>typcn typcn-volume-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-volume-mute"></i><span>typcn typcn-volume-mute</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-volume-up"></i><span>typcn typcn-volume-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-volume"></i><span>typcn typcn-volume</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-warning-outline"></i><span>typcn typcn-warning-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-warning"></i><span>typcn typcn-warning</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-watch"></i><span>typcn typcn-watch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-waves-outline"></i><span>typcn typcn-waves-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-waves"></i><span>typcn typcn-waves</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-weather-cloudy"></i><span>typcn typcn-weather-cloudy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-weather-downpour"></i><span>typcn typcn-weather-downpour</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-weather-night"></i><span>typcn typcn-weather-night</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-weather-partly-sunny"></i><span>typcn typcn-weather-partly-sunny</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-weather-shower"></i><span>typcn typcn-weather-shower</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-weather-snow"></i><span>typcn typcn-weather-snow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-weather-stormy"></i><span>typcn typcn-weather-stormy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-weather-sunny"></i><span>typcn typcn-weather-sunny</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-weather-windy-cloudy"></i><span>typcn typcn-weather-windy-cloudy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-weather-windy"></i><span>typcn typcn-weather-windy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-wi-fi-outline"></i><span>typcn typcn-wi-fi-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-wi-fi"></i><span>typcn typcn-wi-fi</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-wine"></i><span>typcn typcn-wine</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-world-outline"></i><span>typcn typcn-world-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-world"></i><span>typcn typcn-world</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-zoom-in-outline"></i><span>typcn typcn-zoom-in-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-zoom-in"></i><span>typcn typcn-zoom-in</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-zoom-out-outline"></i><span>typcn typcn-zoom-out-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-zoom-out"></i><span>typcn typcn-zoom-out</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-zoom-outline"></i><span>typcn typcn-zoom-outline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="typcn typcn-zoom"></i><span>typcn typcn-zoom</span></a>
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
