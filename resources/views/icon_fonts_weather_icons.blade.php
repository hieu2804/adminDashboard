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
    <link href="icon_fonts_assets/weather-icons/css/weather-icons.min.css" rel="stylesheet">
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
                    Weather Icons
                  </h5>
                  <div class="form-desc">
                    Powered by Weather Icons set, for more info <a href="https://github.com/erikflowers/weather-icons">click here</a>
                  </div>
                  <ul class="demo-icons-list">
                    <li>
                      <a href="#"><i class="wi wi-day-sunny"></i><span>wi wi-day-sunny</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-cloudy"></i><span>wi wi-day-cloudy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-cloudy-gusts"></i><span>wi wi-day-cloudy-gusts</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-cloudy-windy"></i><span>wi wi-day-cloudy-windy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-fog"></i><span>wi wi-day-fog</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-hail"></i><span>wi wi-day-hail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-haze"></i><span>wi wi-day-haze</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-lightning"></i><span>wi wi-day-lightning</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-rain"></i><span>wi wi-day-rain</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-rain-mix"></i><span>wi wi-day-rain-mix</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-rain-wind"></i><span>wi wi-day-rain-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-showers"></i><span>wi wi-day-showers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-sleet"></i><span>wi wi-day-sleet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-sleet-storm"></i><span>wi wi-day-sleet-storm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-snow"></i><span>wi wi-day-snow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-snow-thunderstorm"></i><span>wi wi-day-snow-thunderstorm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-snow-wind"></i><span>wi wi-day-snow-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-sprinkle"></i><span>wi wi-day-sprinkle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-storm-showers"></i><span>wi wi-day-storm-showers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-sunny-overcast"></i><span>wi wi-day-sunny-overcast</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-thunderstorm"></i><span>wi wi-day-thunderstorm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-windy"></i><span>wi wi-day-windy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-solar-eclipse"></i><span>wi wi-solar-eclipse</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-hot"></i><span>wi wi-hot</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-cloudy-high"></i><span>wi wi-day-cloudy-high</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-day-light-wind"></i><span>wi wi-day-light-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-clear"></i><span>wi wi-night-clear</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-cloudy"></i><span>wi wi-night-alt-cloudy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-cloudy-gusts"></i><span>wi wi-night-alt-cloudy-gusts</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-cloudy-windy"></i><span>wi wi-night-alt-cloudy-windy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-hail"></i><span>wi wi-night-alt-hail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-lightning"></i><span>wi wi-night-alt-lightning</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-rain"></i><span>wi wi-night-alt-rain</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-rain-mix"></i><span>wi wi-night-alt-rain-mix</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-rain-wind"></i><span>wi wi-night-alt-rain-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-showers"></i><span>wi wi-night-alt-showers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-sleet"></i><span>wi wi-night-alt-sleet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-sleet-storm"></i><span>wi wi-night-alt-sleet-storm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-snow"></i><span>wi wi-night-alt-snow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-snow-thunderstorm"></i><span>wi wi-night-alt-snow-thunderstorm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-snow-wind"></i><span>wi wi-night-alt-snow-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-sprinkle"></i><span>wi wi-night-alt-sprinkle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-storm-showers"></i><span>wi wi-night-alt-storm-showers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-thunderstorm"></i><span>wi wi-night-alt-thunderstorm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-cloudy"></i><span>wi wi-night-cloudy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-cloudy-gusts"></i><span>wi wi-night-cloudy-gusts</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-cloudy-windy"></i><span>wi wi-night-cloudy-windy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-fog"></i><span>wi wi-night-fog</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-hail"></i><span>wi wi-night-hail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-lightning"></i><span>wi wi-night-lightning</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-partly-cloudy"></i><span>wi wi-night-partly-cloudy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-rain"></i><span>wi wi-night-rain</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-rain-mix"></i><span>wi wi-night-rain-mix</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-rain-wind"></i><span>wi wi-night-rain-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-showers"></i><span>wi wi-night-showers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-sleet"></i><span>wi wi-night-sleet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-sleet-storm"></i><span>wi wi-night-sleet-storm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-snow"></i><span>wi wi-night-snow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-snow-thunderstorm"></i><span>wi wi-night-snow-thunderstorm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-snow-wind"></i><span>wi wi-night-snow-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-sprinkle"></i><span>wi wi-night-sprinkle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-storm-showers"></i><span>wi wi-night-storm-showers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-thunderstorm"></i><span>wi wi-night-thunderstorm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-lunar-eclipse"></i><span>wi wi-lunar-eclipse</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-stars"></i><span>wi wi-stars</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-storm-showers"></i><span>wi wi-storm-showers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-thunderstorm"></i><span>wi wi-thunderstorm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-cloudy-high"></i><span>wi wi-night-alt-cloudy-high</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-cloudy-high"></i><span>wi wi-night-cloudy-high</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-night-alt-partly-cloudy"></i><span>wi wi-night-alt-partly-cloudy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-cloud"></i><span>wi wi-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-cloudy"></i><span>wi wi-cloudy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-cloudy-gusts"></i><span>wi wi-cloudy-gusts</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-cloudy-windy"></i><span>wi wi-cloudy-windy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-fog"></i><span>wi wi-fog</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-hail"></i><span>wi wi-hail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-rain"></i><span>wi wi-rain</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-rain-mix"></i><span>wi wi-rain-mix</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-rain-wind"></i><span>wi wi-rain-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-showers"></i><span>wi wi-showers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-sleet"></i><span>wi wi-sleet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-snow"></i><span>wi wi-snow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-sprinkle"></i><span>wi wi-sprinkle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-storm-showers"></i><span>wi wi-storm-showers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-thunderstorm"></i><span>wi wi-thunderstorm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-snow-wind"></i><span>wi wi-snow-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-snow"></i><span>wi wi-snow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-smog"></i><span>wi wi-smog</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-smoke"></i><span>wi wi-smoke</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-lightning"></i><span>wi wi-lightning</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-raindrops"></i><span>wi wi-raindrops</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-raindrop"></i><span>wi wi-raindrop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-dust"></i><span>wi wi-dust</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-snowflake-cold"></i><span>wi wi-snowflake-cold</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-windy"></i><span>wi wi-windy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-strong-wind"></i><span>wi wi-strong-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-sandstorm"></i><span>wi wi-sandstorm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-earthquake"></i><span>wi wi-earthquake</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-fire"></i><span>wi wi-fire</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-flood"></i><span>wi wi-flood</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-meteor"></i><span>wi wi-meteor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-tsunami"></i><span>wi wi-tsunami</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-volcano"></i><span>wi wi-volcano</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-hurricane"></i><span>wi wi-hurricane</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-tornado"></i><span>wi wi-tornado</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-small-craft-advisory"></i><span>wi wi-small-craft-advisory</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-gale-warning"></i><span>wi wi-gale-warning</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-storm-warning"></i><span>wi wi-storm-warning</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-hurricane-warning"></i><span>wi wi-hurricane-warning</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-direction"></i><span>wi wi-wind-direction</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-alien"></i><span>wi wi-alien</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-celsius"></i><span>wi wi-celsius</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-fahrenheit"></i><span>wi wi-fahrenheit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-degrees"></i><span>wi wi-degrees</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-thermometer"></i><span>wi wi-thermometer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-thermometer-exterior"></i><span>wi wi-thermometer-exterior</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-thermometer-internal"></i><span>wi wi-thermometer-internal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-cloud-down"></i><span>wi wi-cloud-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-cloud-up"></i><span>wi wi-cloud-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-cloud-refresh"></i><span>wi wi-cloud-refresh</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-horizon"></i><span>wi wi-horizon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-horizon-alt"></i><span>wi wi-horizon-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-sunrise"></i><span>wi wi-sunrise</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-sunset"></i><span>wi wi-sunset</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moonrise"></i><span>wi wi-moonrise</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moonset"></i><span>wi wi-moonset</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-refresh"></i><span>wi wi-refresh</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-refresh-alt"></i><span>wi wi-refresh-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-umbrella"></i><span>wi wi-umbrella</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-barometer"></i><span>wi wi-barometer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-humidity"></i><span>wi wi-humidity</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-na"></i><span>wi wi-na</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-train"></i><span>wi wi-train</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-new"></i><span>wi wi-moon-new</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waxing-crescent-1"></i><span>wi wi-moon-waxing-crescent-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waxing-crescent-2"></i><span>wi wi-moon-waxing-crescent-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waxing-crescent-3"></i><span>wi wi-moon-waxing-crescent-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waxing-crescent-4"></i><span>wi wi-moon-waxing-crescent-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waxing-crescent-5"></i><span>wi wi-moon-waxing-crescent-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waxing-crescent-6"></i><span>wi wi-moon-waxing-crescent-6</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-first-quarter"></i><span>wi wi-moon-first-quarter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waxing-gibbous-1"></i><span>wi wi-moon-waxing-gibbous-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waxing-gibbous-2"></i><span>wi wi-moon-waxing-gibbous-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waxing-gibbous-3"></i><span>wi wi-moon-waxing-gibbous-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waxing-gibbous-4"></i><span>wi wi-moon-waxing-gibbous-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waxing-gibbous-5"></i><span>wi wi-moon-waxing-gibbous-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waxing-gibbous-6"></i><span>wi wi-moon-waxing-gibbous-6</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-full"></i><span>wi wi-moon-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waning-gibbous-1"></i><span>wi wi-moon-waning-gibbous-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waning-gibbous-2"></i><span>wi wi-moon-waning-gibbous-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waning-gibbous-3"></i><span>wi wi-moon-waning-gibbous-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waning-gibbous-4"></i><span>wi wi-moon-waning-gibbous-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waning-gibbous-5"></i><span>wi wi-moon-waning-gibbous-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waning-gibbous-6"></i><span>wi wi-moon-waning-gibbous-6</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-third-quarter"></i><span>wi wi-moon-third-quarter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waning-crescent-1"></i><span>wi wi-moon-waning-crescent-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waning-crescent-2"></i><span>wi wi-moon-waning-crescent-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waning-crescent-3"></i><span>wi wi-moon-waning-crescent-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waning-crescent-4"></i><span>wi wi-moon-waning-crescent-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waning-crescent-5"></i><span>wi wi-moon-waning-crescent-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-waning-crescent-6"></i><span>wi wi-moon-waning-crescent-6</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-new"></i><span>wi wi-moon-alt-new</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waxing-crescent-1"></i><span>wi wi-moon-alt-waxing-crescent-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waxing-crescent-2"></i><span>wi wi-moon-alt-waxing-crescent-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waxing-crescent-3"></i><span>wi wi-moon-alt-waxing-crescent-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waxing-crescent-4"></i><span>wi wi-moon-alt-waxing-crescent-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waxing-crescent-5"></i><span>wi wi-moon-alt-waxing-crescent-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waxing-crescent-6"></i><span>wi wi-moon-alt-waxing-crescent-6</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-first-quarter"></i><span>wi wi-moon-alt-first-quarter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waxing-gibbous-1"></i><span>wi wi-moon-alt-waxing-gibbous-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waxing-gibbous-2"></i><span>wi wi-moon-alt-waxing-gibbous-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waxing-gibbous-3"></i><span>wi wi-moon-alt-waxing-gibbous-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waxing-gibbous-4"></i><span>wi wi-moon-alt-waxing-gibbous-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waxing-gibbous-5"></i><span>wi wi-moon-alt-waxing-gibbous-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waxing-gibbous-6"></i><span>wi wi-moon-alt-waxing-gibbous-6</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-full"></i><span>wi wi-moon-alt-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waning-gibbous-1"></i><span>wi wi-moon-alt-waning-gibbous-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waning-gibbous-2"></i><span>wi wi-moon-alt-waning-gibbous-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waning-gibbous-3"></i><span>wi wi-moon-alt-waning-gibbous-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waning-gibbous-4"></i><span>wi wi-moon-alt-waning-gibbous-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waning-gibbous-5"></i><span>wi wi-moon-alt-waning-gibbous-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waning-gibbous-6"></i><span>wi wi-moon-alt-waning-gibbous-6</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-third-quarter"></i><span>wi wi-moon-alt-third-quarter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waning-crescent-1"></i><span>wi wi-moon-alt-waning-crescent-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waning-crescent-2"></i><span>wi wi-moon-alt-waning-crescent-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waning-crescent-3"></i><span>wi wi-moon-alt-waning-crescent-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waning-crescent-4"></i><span>wi wi-moon-alt-waning-crescent-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waning-crescent-5"></i><span>wi wi-moon-alt-waning-crescent-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-alt-waning-crescent-6"></i><span>wi wi-moon-alt-waning-crescent-6</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-0"></i><span>wi wi-moon-0</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-1"></i><span>wi wi-moon-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-2"></i><span>wi wi-moon-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-3"></i><span>wi wi-moon-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-4"></i><span>wi wi-moon-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-5"></i><span>wi wi-moon-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-6"></i><span>wi wi-moon-6</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-7"></i><span>wi wi-moon-7</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-8"></i><span>wi wi-moon-8</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-9"></i><span>wi wi-moon-9</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-10"></i><span>wi wi-moon-10</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-11"></i><span>wi wi-moon-11</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-12"></i><span>wi wi-moon-12</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-13"></i><span>wi wi-moon-13</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-14"></i><span>wi wi-moon-14</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-15"></i><span>wi wi-moon-15</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-16"></i><span>wi wi-moon-16</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-17"></i><span>wi wi-moon-17</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-18"></i><span>wi wi-moon-18</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-19"></i><span>wi wi-moon-19</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-20"></i><span>wi wi-moon-20</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-21"></i><span>wi wi-moon-21</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-22"></i><span>wi wi-moon-22</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-23"></i><span>wi wi-moon-23</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-24"></i><span>wi wi-moon-24</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-25"></i><span>wi wi-moon-25</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-26"></i><span>wi wi-moon-26</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-moon-27"></i><span>wi wi-moon-27</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-time-1"></i><span>wi wi-time-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-time-2"></i><span>wi wi-time-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-time-3"></i><span>wi wi-time-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-time-4"></i><span>wi wi-time-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-time-5"></i><span>wi wi-time-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-time-6"></i><span>wi wi-time-6</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-time-7"></i><span>wi wi-time-7</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-time-8"></i><span>wi wi-time-8</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-time-9"></i><span>wi wi-time-9</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-time-10"></i><span>wi wi-time-10</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-time-11"></i><span>wi wi-time-11</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-time-12"></i><span>wi wi-time-12</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-direction-up"></i><span>wi wi-direction-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-direction-up-right"></i><span>wi wi-direction-up-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-direction-right"></i><span>wi wi-direction-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-direction-down-right"></i><span>wi wi-direction-down-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-direction-down"></i><span>wi wi-direction-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-direction-down-left"></i><span>wi wi-direction-down-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-direction-left"></i><span>wi wi-direction-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-direction-up-left"></i><span>wi wi-direction-up-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-0"></i><span>wi wi-wind-beaufort-0</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-1"></i><span>wi wi-wind-beaufort-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-2"></i><span>wi wi-wind-beaufort-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-3"></i><span>wi wi-wind-beaufort-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-4"></i><span>wi wi-wind-beaufort-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-5"></i><span>wi wi-wind-beaufort-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-6"></i><span>wi wi-wind-beaufort-6</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-7"></i><span>wi wi-wind-beaufort-7</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-8"></i><span>wi wi-wind-beaufort-8</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-9"></i><span>wi wi-wind-beaufort-9</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-10"></i><span>wi wi-wind-beaufort-10</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-11"></i><span>wi wi-wind-beaufort-11</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wind-beaufort-12"></i><span>wi wi-wind-beaufort-12</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-0"></i><span>wi wi-yahoo-0</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-1"></i><span>wi wi-yahoo-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-2"></i><span>wi wi-yahoo-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-3"></i><span>wi wi-yahoo-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-4"></i><span>wi wi-yahoo-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-5"></i><span>wi wi-yahoo-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-6"></i><span>wi wi-yahoo-6</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-7"></i><span>wi wi-yahoo-7</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-8"></i><span>wi wi-yahoo-8</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-9"></i><span>wi wi-yahoo-9</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-10"></i><span>wi wi-yahoo-10</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-11"></i><span>wi wi-yahoo-11</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-12"></i><span>wi wi-yahoo-12</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-13"></i><span>wi wi-yahoo-13</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-14"></i><span>wi wi-yahoo-14</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-15"></i><span>wi wi-yahoo-15</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-16"></i><span>wi wi-yahoo-16</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-17"></i><span>wi wi-yahoo-17</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-18"></i><span>wi wi-yahoo-18</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-19"></i><span>wi wi-yahoo-19</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-20"></i><span>wi wi-yahoo-20</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-21"></i><span>wi wi-yahoo-21</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-22"></i><span>wi wi-yahoo-22</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-23"></i><span>wi wi-yahoo-23</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-24"></i><span>wi wi-yahoo-24</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-25"></i><span>wi wi-yahoo-25</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-26"></i><span>wi wi-yahoo-26</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-27"></i><span>wi wi-yahoo-27</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-28"></i><span>wi wi-yahoo-28</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-29"></i><span>wi wi-yahoo-29</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-30"></i><span>wi wi-yahoo-30</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-31"></i><span>wi wi-yahoo-31</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-32"></i><span>wi wi-yahoo-32</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-33"></i><span>wi wi-yahoo-33</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-34"></i><span>wi wi-yahoo-34</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-35"></i><span>wi wi-yahoo-35</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-36"></i><span>wi wi-yahoo-36</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-37"></i><span>wi wi-yahoo-37</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-38"></i><span>wi wi-yahoo-38</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-39"></i><span>wi wi-yahoo-39</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-40"></i><span>wi wi-yahoo-40</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-41"></i><span>wi wi-yahoo-41</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-42"></i><span>wi wi-yahoo-42</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-43"></i><span>wi wi-yahoo-43</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-44"></i><span>wi wi-yahoo-44</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-45"></i><span>wi wi-yahoo-45</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-46"></i><span>wi wi-yahoo-46</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-47"></i><span>wi wi-yahoo-47</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-yahoo-3200"></i><span>wi wi-yahoo-3200</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-clear-day"></i><span>wi wi-forecast-io-clear-day</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-clear-night"></i><span>wi wi-forecast-io-clear-night</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-rain"></i><span>wi wi-forecast-io-rain</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-snow"></i><span>wi wi-forecast-io-snow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-sleet"></i><span>wi wi-forecast-io-sleet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-wind"></i><span>wi wi-forecast-io-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-fog"></i><span>wi wi-forecast-io-fog</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-cloudy"></i><span>wi wi-forecast-io-cloudy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-partly-cloudy-day"></i><span>wi wi-forecast-io-partly-cloudy-day</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-partly-cloudy-night"></i><span>wi wi-forecast-io-partly-cloudy-night</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-hail"></i><span>wi wi-forecast-io-hail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-thunderstorm"></i><span>wi wi-forecast-io-thunderstorm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-forecast-io-tornado"></i><span>wi wi-forecast-io-tornado</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-0"></i><span>wi wi-wmo4680-0</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-00"></i><span>wi wi-wmo4680-00</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-1"></i><span>wi wi-wmo4680-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-01"></i><span>wi wi-wmo4680-01</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-2"></i><span>wi wi-wmo4680-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-02"></i><span>wi wi-wmo4680-02</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-3"></i><span>wi wi-wmo4680-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-03"></i><span>wi wi-wmo4680-03</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-4"></i><span>wi wi-wmo4680-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-04"></i><span>wi wi-wmo4680-04</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-5"></i><span>wi wi-wmo4680-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-05"></i><span>wi wi-wmo4680-05</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-10"></i><span>wi wi-wmo4680-10</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-11"></i><span>wi wi-wmo4680-11</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-12"></i><span>wi wi-wmo4680-12</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-18"></i><span>wi wi-wmo4680-18</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-20"></i><span>wi wi-wmo4680-20</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-21"></i><span>wi wi-wmo4680-21</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-22"></i><span>wi wi-wmo4680-22</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-23"></i><span>wi wi-wmo4680-23</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-24"></i><span>wi wi-wmo4680-24</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-25"></i><span>wi wi-wmo4680-25</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-26"></i><span>wi wi-wmo4680-26</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-27"></i><span>wi wi-wmo4680-27</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-28"></i><span>wi wi-wmo4680-28</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-29"></i><span>wi wi-wmo4680-29</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-30"></i><span>wi wi-wmo4680-30</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-31"></i><span>wi wi-wmo4680-31</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-32"></i><span>wi wi-wmo4680-32</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-33"></i><span>wi wi-wmo4680-33</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-34"></i><span>wi wi-wmo4680-34</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-35"></i><span>wi wi-wmo4680-35</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-40"></i><span>wi wi-wmo4680-40</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-41"></i><span>wi wi-wmo4680-41</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-42"></i><span>wi wi-wmo4680-42</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-43"></i><span>wi wi-wmo4680-43</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-44"></i><span>wi wi-wmo4680-44</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-45"></i><span>wi wi-wmo4680-45</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-46"></i><span>wi wi-wmo4680-46</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-47"></i><span>wi wi-wmo4680-47</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-48"></i><span>wi wi-wmo4680-48</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-50"></i><span>wi wi-wmo4680-50</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-51"></i><span>wi wi-wmo4680-51</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-52"></i><span>wi wi-wmo4680-52</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-53"></i><span>wi wi-wmo4680-53</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-54"></i><span>wi wi-wmo4680-54</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-55"></i><span>wi wi-wmo4680-55</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-56"></i><span>wi wi-wmo4680-56</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-57"></i><span>wi wi-wmo4680-57</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-58"></i><span>wi wi-wmo4680-58</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-60"></i><span>wi wi-wmo4680-60</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-61"></i><span>wi wi-wmo4680-61</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-62"></i><span>wi wi-wmo4680-62</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-63"></i><span>wi wi-wmo4680-63</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-64"></i><span>wi wi-wmo4680-64</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-65"></i><span>wi wi-wmo4680-65</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-66"></i><span>wi wi-wmo4680-66</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-67"></i><span>wi wi-wmo4680-67</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-68"></i><span>wi wi-wmo4680-68</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-70"></i><span>wi wi-wmo4680-70</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-71"></i><span>wi wi-wmo4680-71</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-72"></i><span>wi wi-wmo4680-72</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-73"></i><span>wi wi-wmo4680-73</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-74"></i><span>wi wi-wmo4680-74</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-75"></i><span>wi wi-wmo4680-75</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-76"></i><span>wi wi-wmo4680-76</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-77"></i><span>wi wi-wmo4680-77</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-78"></i><span>wi wi-wmo4680-78</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-80"></i><span>wi wi-wmo4680-80</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-81"></i><span>wi wi-wmo4680-81</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-82"></i><span>wi wi-wmo4680-82</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-83"></i><span>wi wi-wmo4680-83</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-84"></i><span>wi wi-wmo4680-84</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-85"></i><span>wi wi-wmo4680-85</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-86"></i><span>wi wi-wmo4680-86</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-87"></i><span>wi wi-wmo4680-87</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-89"></i><span>wi wi-wmo4680-89</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-90"></i><span>wi wi-wmo4680-90</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-91"></i><span>wi wi-wmo4680-91</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-92"></i><span>wi wi-wmo4680-92</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-93"></i><span>wi wi-wmo4680-93</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-94"></i><span>wi wi-wmo4680-94</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-95"></i><span>wi wi-wmo4680-95</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-96"></i><span>wi wi-wmo4680-96</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wmo4680-99"></i><span>wi wi-wmo4680-99</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-200"></i><span>wi wi-owm-200</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-201"></i><span>wi wi-owm-201</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-202"></i><span>wi wi-owm-202</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-210"></i><span>wi wi-owm-210</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-211"></i><span>wi wi-owm-211</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-212"></i><span>wi wi-owm-212</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-221"></i><span>wi wi-owm-221</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-230"></i><span>wi wi-owm-230</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-231"></i><span>wi wi-owm-231</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-232"></i><span>wi wi-owm-232</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-300"></i><span>wi wi-owm-300</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-301"></i><span>wi wi-owm-301</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-302"></i><span>wi wi-owm-302</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-310"></i><span>wi wi-owm-310</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-311"></i><span>wi wi-owm-311</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-312"></i><span>wi wi-owm-312</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-313"></i><span>wi wi-owm-313</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-314"></i><span>wi wi-owm-314</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-321"></i><span>wi wi-owm-321</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-500"></i><span>wi wi-owm-500</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-501"></i><span>wi wi-owm-501</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-502"></i><span>wi wi-owm-502</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-503"></i><span>wi wi-owm-503</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-504"></i><span>wi wi-owm-504</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-511"></i><span>wi wi-owm-511</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-520"></i><span>wi wi-owm-520</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-521"></i><span>wi wi-owm-521</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-522"></i><span>wi wi-owm-522</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-531"></i><span>wi wi-owm-531</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-600"></i><span>wi wi-owm-600</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-601"></i><span>wi wi-owm-601</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-602"></i><span>wi wi-owm-602</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-611"></i><span>wi wi-owm-611</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-612"></i><span>wi wi-owm-612</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-615"></i><span>wi wi-owm-615</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-616"></i><span>wi wi-owm-616</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-620"></i><span>wi wi-owm-620</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-621"></i><span>wi wi-owm-621</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-622"></i><span>wi wi-owm-622</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-701"></i><span>wi wi-owm-701</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-711"></i><span>wi wi-owm-711</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-721"></i><span>wi wi-owm-721</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-731"></i><span>wi wi-owm-731</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-741"></i><span>wi wi-owm-741</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-761"></i><span>wi wi-owm-761</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-762"></i><span>wi wi-owm-762</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-771"></i><span>wi wi-owm-771</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-781"></i><span>wi wi-owm-781</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-800"></i><span>wi wi-owm-800</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-801"></i><span>wi wi-owm-801</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-802"></i><span>wi wi-owm-802</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-803"></i><span>wi wi-owm-803</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-804"></i><span>wi wi-owm-804</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-900"></i><span>wi wi-owm-900</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-901"></i><span>wi wi-owm-901</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-902"></i><span>wi wi-owm-902</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-903"></i><span>wi wi-owm-903</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-904"></i><span>wi wi-owm-904</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-905"></i><span>wi wi-owm-905</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-906"></i><span>wi wi-owm-906</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-957"></i><span>wi wi-owm-957</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-200"></i><span>wi wi-owm-day-200</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-201"></i><span>wi wi-owm-day-201</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-202"></i><span>wi wi-owm-day-202</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-210"></i><span>wi wi-owm-day-210</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-211"></i><span>wi wi-owm-day-211</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-212"></i><span>wi wi-owm-day-212</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-221"></i><span>wi wi-owm-day-221</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-230"></i><span>wi wi-owm-day-230</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-231"></i><span>wi wi-owm-day-231</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-232"></i><span>wi wi-owm-day-232</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-300"></i><span>wi wi-owm-day-300</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-301"></i><span>wi wi-owm-day-301</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-302"></i><span>wi wi-owm-day-302</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-310"></i><span>wi wi-owm-day-310</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-311"></i><span>wi wi-owm-day-311</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-312"></i><span>wi wi-owm-day-312</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-313"></i><span>wi wi-owm-day-313</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-314"></i><span>wi wi-owm-day-314</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-321"></i><span>wi wi-owm-day-321</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-500"></i><span>wi wi-owm-day-500</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-501"></i><span>wi wi-owm-day-501</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-502"></i><span>wi wi-owm-day-502</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-503"></i><span>wi wi-owm-day-503</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-504"></i><span>wi wi-owm-day-504</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-511"></i><span>wi wi-owm-day-511</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-520"></i><span>wi wi-owm-day-520</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-521"></i><span>wi wi-owm-day-521</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-522"></i><span>wi wi-owm-day-522</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-531"></i><span>wi wi-owm-day-531</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-600"></i><span>wi wi-owm-day-600</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-601"></i><span>wi wi-owm-day-601</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-602"></i><span>wi wi-owm-day-602</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-611"></i><span>wi wi-owm-day-611</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-612"></i><span>wi wi-owm-day-612</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-615"></i><span>wi wi-owm-day-615</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-616"></i><span>wi wi-owm-day-616</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-620"></i><span>wi wi-owm-day-620</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-621"></i><span>wi wi-owm-day-621</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-622"></i><span>wi wi-owm-day-622</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-701"></i><span>wi wi-owm-day-701</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-711"></i><span>wi wi-owm-day-711</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-721"></i><span>wi wi-owm-day-721</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-731"></i><span>wi wi-owm-day-731</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-741"></i><span>wi wi-owm-day-741</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-761"></i><span>wi wi-owm-day-761</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-762"></i><span>wi wi-owm-day-762</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-781"></i><span>wi wi-owm-day-781</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-800"></i><span>wi wi-owm-day-800</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-801"></i><span>wi wi-owm-day-801</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-802"></i><span>wi wi-owm-day-802</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-803"></i><span>wi wi-owm-day-803</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-804"></i><span>wi wi-owm-day-804</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-900"></i><span>wi wi-owm-day-900</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-902"></i><span>wi wi-owm-day-902</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-903"></i><span>wi wi-owm-day-903</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-904"></i><span>wi wi-owm-day-904</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-906"></i><span>wi wi-owm-day-906</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-day-957"></i><span>wi wi-owm-day-957</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-200"></i><span>wi wi-owm-night-200</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-201"></i><span>wi wi-owm-night-201</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-202"></i><span>wi wi-owm-night-202</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-210"></i><span>wi wi-owm-night-210</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-211"></i><span>wi wi-owm-night-211</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-212"></i><span>wi wi-owm-night-212</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-221"></i><span>wi wi-owm-night-221</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-230"></i><span>wi wi-owm-night-230</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-231"></i><span>wi wi-owm-night-231</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-232"></i><span>wi wi-owm-night-232</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-300"></i><span>wi wi-owm-night-300</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-301"></i><span>wi wi-owm-night-301</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-302"></i><span>wi wi-owm-night-302</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-310"></i><span>wi wi-owm-night-310</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-311"></i><span>wi wi-owm-night-311</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-312"></i><span>wi wi-owm-night-312</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-313"></i><span>wi wi-owm-night-313</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-314"></i><span>wi wi-owm-night-314</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-321"></i><span>wi wi-owm-night-321</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-500"></i><span>wi wi-owm-night-500</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-501"></i><span>wi wi-owm-night-501</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-502"></i><span>wi wi-owm-night-502</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-503"></i><span>wi wi-owm-night-503</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-504"></i><span>wi wi-owm-night-504</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-511"></i><span>wi wi-owm-night-511</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-520"></i><span>wi wi-owm-night-520</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-521"></i><span>wi wi-owm-night-521</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-522"></i><span>wi wi-owm-night-522</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-531"></i><span>wi wi-owm-night-531</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-600"></i><span>wi wi-owm-night-600</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-601"></i><span>wi wi-owm-night-601</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-602"></i><span>wi wi-owm-night-602</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-611"></i><span>wi wi-owm-night-611</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-612"></i><span>wi wi-owm-night-612</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-615"></i><span>wi wi-owm-night-615</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-616"></i><span>wi wi-owm-night-616</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-620"></i><span>wi wi-owm-night-620</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-621"></i><span>wi wi-owm-night-621</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-622"></i><span>wi wi-owm-night-622</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-701"></i><span>wi wi-owm-night-701</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-711"></i><span>wi wi-owm-night-711</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-721"></i><span>wi wi-owm-night-721</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-731"></i><span>wi wi-owm-night-731</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-741"></i><span>wi wi-owm-night-741</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-761"></i><span>wi wi-owm-night-761</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-762"></i><span>wi wi-owm-night-762</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-781"></i><span>wi wi-owm-night-781</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-800"></i><span>wi wi-owm-night-800</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-801"></i><span>wi wi-owm-night-801</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-802"></i><span>wi wi-owm-night-802</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-803"></i><span>wi wi-owm-night-803</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-804"></i><span>wi wi-owm-night-804</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-900"></i><span>wi wi-owm-night-900</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-902"></i><span>wi wi-owm-night-902</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-903"></i><span>wi wi-owm-night-903</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-904"></i><span>wi wi-owm-night-904</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-906"></i><span>wi wi-owm-night-906</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-owm-night-957"></i><span>wi wi-owm-night-957</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-chanceflurries"></i><span>wi wi-wu-chanceflurries</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-chancerain"></i><span>wi wi-wu-chancerain</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-chancesleat"></i><span>wi wi-wu-chancesleat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-chancesnow"></i><span>wi wi-wu-chancesnow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-chancetstorms"></i><span>wi wi-wu-chancetstorms</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-clear"></i><span>wi wi-wu-clear</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-cloudy"></i><span>wi wi-wu-cloudy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-flurries"></i><span>wi wi-wu-flurries</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-hazy"></i><span>wi wi-wu-hazy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-mostlycloudy"></i><span>wi wi-wu-mostlycloudy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-mostlysunny"></i><span>wi wi-wu-mostlysunny</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-partlycloudy"></i><span>wi wi-wu-partlycloudy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-partlysunny"></i><span>wi wi-wu-partlysunny</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-rain"></i><span>wi wi-wu-rain</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-sleat"></i><span>wi wi-wu-sleat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-snow"></i><span>wi wi-wu-snow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-sunny"></i><span>wi wi-wu-sunny</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-tstorms"></i><span>wi wi-wu-tstorms</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="wi wi-wu-unknown"></i><span>wi wi-wu-unknown</span></a>
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
