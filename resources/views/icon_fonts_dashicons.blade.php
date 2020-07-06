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
    <link href="icon_fonts_assets/dashicons/dashicons.css" rel="stylesheet">
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
                    Dashicons
                  </h5>
                  <div class="form-desc">
                    Powered by Dashicons set, for more info <a href="https://github.com/WordPress/dashicons">click here</a>
                  </div>
                  <ul class="demo-icons-list">
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-appearance"></i><span>dashicons dashicons-admin-appearance</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-collapse"></i><span>dashicons dashicons-admin-collapse</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-comments"></i><span>dashicons dashicons-admin-comments</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-customizer"></i><span>dashicons dashicons-admin-customizer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-generic"></i><span>dashicons dashicons-admin-generic</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-home"></i><span>dashicons dashicons-admin-home</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-links"></i><span>dashicons dashicons-admin-links</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-media"></i><span>dashicons dashicons-admin-media</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-multisite"></i><span>dashicons dashicons-admin-multisite</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-network"></i><span>dashicons dashicons-admin-network</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-page"></i><span>dashicons dashicons-admin-page</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-plugins"></i><span>dashicons dashicons-admin-plugins</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-post"></i><span>dashicons dashicons-admin-post</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-settings"></i><span>dashicons dashicons-admin-settings</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-site"></i><span>dashicons dashicons-admin-site</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-tools"></i><span>dashicons dashicons-admin-tools</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-admin-users"></i><span>dashicons dashicons-admin-users</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-album"></i><span>dashicons dashicons-album</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-align-center"></i><span>dashicons dashicons-align-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-align-full-width"></i><span>dashicons dashicons-align-full-width</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-align-left"></i><span>dashicons dashicons-align-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-align-none"></i><span>dashicons dashicons-align-none</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-align-right"></i><span>dashicons dashicons-align-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-analytics"></i><span>dashicons dashicons-analytics</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-archive"></i><span>dashicons dashicons-archive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-arrow-down-alt"></i><span>dashicons dashicons-arrow-down-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-arrow-down-alt2"></i><span>dashicons dashicons-arrow-down-alt2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-arrow-down"></i><span>dashicons dashicons-arrow-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-arrow-left-alt"></i><span>dashicons dashicons-arrow-left-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-arrow-left-alt2"></i><span>dashicons dashicons-arrow-left-alt2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-arrow-left"></i><span>dashicons dashicons-arrow-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-arrow-right-alt"></i><span>dashicons dashicons-arrow-right-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-arrow-right-alt2"></i><span>dashicons dashicons-arrow-right-alt2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-arrow-right"></i><span>dashicons dashicons-arrow-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-arrow-up-alt"></i><span>dashicons dashicons-arrow-up-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-arrow-up-alt2"></i><span>dashicons dashicons-arrow-up-alt2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-arrow-up"></i><span>dashicons dashicons-arrow-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-art"></i><span>dashicons dashicons-art</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-awards"></i><span>dashicons dashicons-awards</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-backup"></i><span>dashicons dashicons-backup</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-book-alt"></i><span>dashicons dashicons-book-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-book"></i><span>dashicons dashicons-book</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-building"></i><span>dashicons dashicons-building</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-businessman"></i><span>dashicons dashicons-businessman</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-button"></i><span>dashicons dashicons-button</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-calendar-alt"></i><span>dashicons dashicons-calendar-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-calendar"></i><span>dashicons dashicons-calendar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-camera"></i><span>dashicons dashicons-camera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-carrot"></i><span>dashicons dashicons-carrot</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-cart"></i><span>dashicons dashicons-cart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-category"></i><span>dashicons dashicons-category</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-chart-area"></i><span>dashicons dashicons-chart-area</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-chart-bar"></i><span>dashicons dashicons-chart-bar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-chart-line"></i><span>dashicons dashicons-chart-line</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-chart-pie"></i><span>dashicons dashicons-chart-pie</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-clipboard"></i><span>dashicons dashicons-clipboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-clock"></i><span>dashicons dashicons-clock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-cloud"></i><span>dashicons dashicons-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-controls-back"></i><span>dashicons dashicons-controls-back</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-controls-forward"></i><span>dashicons dashicons-controls-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-controls-pause"></i><span>dashicons dashicons-controls-pause</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-controls-play"></i><span>dashicons dashicons-controls-play</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-controls-repeat"></i><span>dashicons dashicons-controls-repeat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-controls-skipback"></i><span>dashicons dashicons-controls-skipback</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-controls-skipforward"></i><span>dashicons dashicons-controls-skipforward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-controls-volumeoff"></i><span>dashicons dashicons-controls-volumeoff</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-controls-volumeon"></i><span>dashicons dashicons-controls-volumeon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-dashboard"></i><span>dashicons dashicons-dashboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-desktop"></i><span>dashicons dashicons-desktop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-dismiss"></i><span>dashicons dashicons-dismiss</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-download"></i><span>dashicons dashicons-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-edit"></i><span>dashicons dashicons-edit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-aligncenter"></i><span>dashicons dashicons-editor-aligncenter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-alignleft"></i><span>dashicons dashicons-editor-alignleft</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-alignright"></i><span>dashicons dashicons-editor-alignright</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-bold"></i><span>dashicons dashicons-editor-bold</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-break"></i><span>dashicons dashicons-editor-break</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-code"></i><span>dashicons dashicons-editor-code</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-contract"></i><span>dashicons dashicons-editor-contract</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-customchar"></i><span>dashicons dashicons-editor-customchar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-expand"></i><span>dashicons dashicons-editor-expand</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-help"></i><span>dashicons dashicons-editor-help</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-indent"></i><span>dashicons dashicons-editor-indent</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-insertmore"></i><span>dashicons dashicons-editor-insertmore</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-italic"></i><span>dashicons dashicons-editor-italic</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-justify"></i><span>dashicons dashicons-editor-justify</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-kitchensink"></i><span>dashicons dashicons-editor-kitchensink</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-ol"></i><span>dashicons dashicons-editor-ol</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-outdent"></i><span>dashicons dashicons-editor-outdent</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-paragraph"></i><span>dashicons dashicons-editor-paragraph</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-paste-text"></i><span>dashicons dashicons-editor-paste-text</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-paste-word"></i><span>dashicons dashicons-editor-paste-word</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-quote"></i><span>dashicons dashicons-editor-quote</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-removeformatting"></i><span>dashicons dashicons-editor-removeformatting</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-rtl"></i><span>dashicons dashicons-editor-rtl</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-spellcheck"></i><span>dashicons dashicons-editor-spellcheck</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-strikethrough"></i><span>dashicons dashicons-editor-strikethrough</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-table"></i><span>dashicons dashicons-editor-table</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-textcolor"></i><span>dashicons dashicons-editor-textcolor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-ul"></i><span>dashicons dashicons-editor-ul</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-underline"></i><span>dashicons dashicons-editor-underline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-unlink"></i><span>dashicons dashicons-editor-unlink</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-editor-video"></i><span>dashicons dashicons-editor-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-email-alt"></i><span>dashicons dashicons-email-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-email-alt2"></i><span>dashicons dashicons-email-alt2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-email"></i><span>dashicons dashicons-email</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-exerpt-view"></i><span>dashicons dashicons-exerpt-view</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-external"></i><span>dashicons dashicons-external</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-facebook-alt"></i><span>dashicons dashicons-facebook-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-facebook"></i><span>dashicons dashicons-facebook</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-feedback"></i><span>dashicons dashicons-feedback</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-filter"></i><span>dashicons dashicons-filter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-flag"></i><span>dashicons dashicons-flag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-format-aside"></i><span>dashicons dashicons-format-aside</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-format-audio"></i><span>dashicons dashicons-format-audio</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-format-chat"></i><span>dashicons dashicons-format-chat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-format-gallery"></i><span>dashicons dashicons-format-gallery</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-format-image"></i><span>dashicons dashicons-format-image</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-format-quote"></i><span>dashicons dashicons-format-quote</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-format-status"></i><span>dashicons dashicons-format-status</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-format-video"></i><span>dashicons dashicons-format-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-forms"></i><span>dashicons dashicons-forms</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-googleplus"></i><span>dashicons dashicons-googleplus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-grid-view"></i><span>dashicons dashicons-grid-view</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-groups"></i><span>dashicons dashicons-groups</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-hammer"></i><span>dashicons dashicons-hammer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-heading"></i><span>dashicons dashicons-heading</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-heart"></i><span>dashicons dashicons-heart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-hidden"></i><span>dashicons dashicons-hidden</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-id-alt"></i><span>dashicons dashicons-id-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-id"></i><span>dashicons dashicons-id</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-image-crop"></i><span>dashicons dashicons-image-crop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-image-filter"></i><span>dashicons dashicons-image-filter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-image-flip-horizontal"></i><span>dashicons dashicons-image-flip-horizontal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-image-flip-vertical"></i><span>dashicons dashicons-image-flip-vertical</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-image-rotate-left"></i><span>dashicons dashicons-image-rotate-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-image-rotate-right"></i><span>dashicons dashicons-image-rotate-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-image-rotate"></i><span>dashicons dashicons-image-rotate</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-images-alt"></i><span>dashicons dashicons-images-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-images-alt2"></i><span>dashicons dashicons-images-alt2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-index-card"></i><span>dashicons dashicons-index-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-info"></i><span>dashicons dashicons-info</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-insert"></i><span>dashicons dashicons-insert</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-laptop"></i><span>dashicons dashicons-laptop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-layout"></i><span>dashicons dashicons-layout</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-leftright"></i><span>dashicons dashicons-leftright</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-lightbulb"></i><span>dashicons dashicons-lightbulb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-list-view"></i><span>dashicons dashicons-list-view</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-location-alt"></i><span>dashicons dashicons-location-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-location"></i><span>dashicons dashicons-location</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-lock"></i><span>dashicons dashicons-lock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-marker"></i><span>dashicons dashicons-marker</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-media-archive"></i><span>dashicons dashicons-media-archive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-media-audio"></i><span>dashicons dashicons-media-audio</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-media-code"></i><span>dashicons dashicons-media-code</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-media-default"></i><span>dashicons dashicons-media-default</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-media-document"></i><span>dashicons dashicons-media-document</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-media-interactive"></i><span>dashicons dashicons-media-interactive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-media-spreadsheet"></i><span>dashicons dashicons-media-spreadsheet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-media-text"></i><span>dashicons dashicons-media-text</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-media-video"></i><span>dashicons dashicons-media-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-megaphone"></i><span>dashicons dashicons-megaphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-menu-alt"></i><span>dashicons dashicons-menu-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-menu"></i><span>dashicons dashicons-menu</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-microphone"></i><span>dashicons dashicons-microphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-migrate"></i><span>dashicons dashicons-migrate</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-minus"></i><span>dashicons dashicons-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-money"></i><span>dashicons dashicons-money</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-move"></i><span>dashicons dashicons-move</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-nametag"></i><span>dashicons dashicons-nametag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-networking"></i><span>dashicons dashicons-networking</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-no-alt"></i><span>dashicons dashicons-no-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-no"></i><span>dashicons dashicons-no</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-palmtree"></i><span>dashicons dashicons-palmtree</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-paperclip"></i><span>dashicons dashicons-paperclip</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-performance"></i><span>dashicons dashicons-performance</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-phone"></i><span>dashicons dashicons-phone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-playlist-audio"></i><span>dashicons dashicons-playlist-audio</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-playlist-video"></i><span>dashicons dashicons-playlist-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-plus-alt"></i><span>dashicons dashicons-plus-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-plus-light"></i><span>dashicons dashicons-plus-light</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-plus"></i><span>dashicons dashicons-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-portfolio"></i><span>dashicons dashicons-portfolio</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-post-status"></i><span>dashicons dashicons-post-status</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-pressthis"></i><span>dashicons dashicons-pressthis</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-products"></i><span>dashicons dashicons-products</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-randomize"></i><span>dashicons dashicons-randomize</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-redo"></i><span>dashicons dashicons-redo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-rss"></i><span>dashicons dashicons-rss</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-saved"></i><span>dashicons dashicons-saved</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-schedule"></i><span>dashicons dashicons-schedule</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-screenoptions"></i><span>dashicons dashicons-screenoptions</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-search"></i><span>dashicons dashicons-search</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-share-alt"></i><span>dashicons dashicons-share-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-share-alt2"></i><span>dashicons dashicons-share-alt2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-share"></i><span>dashicons dashicons-share</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-shield-alt"></i><span>dashicons dashicons-shield-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-shield"></i><span>dashicons dashicons-shield</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-slides"></i><span>dashicons dashicons-slides</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-smartphone"></i><span>dashicons dashicons-smartphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-smiley"></i><span>dashicons dashicons-smiley</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-sort"></i><span>dashicons dashicons-sort</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-sos"></i><span>dashicons dashicons-sos</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-star-empty"></i><span>dashicons dashicons-star-empty</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-star-filled"></i><span>dashicons dashicons-star-filled</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-star-half"></i><span>dashicons dashicons-star-half</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-sticky"></i><span>dashicons dashicons-sticky</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-store"></i><span>dashicons dashicons-store</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-tablet"></i><span>dashicons dashicons-tablet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-tag"></i><span>dashicons dashicons-tag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-tagcloud"></i><span>dashicons dashicons-tagcloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-testimonial"></i><span>dashicons dashicons-testimonial</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-text"></i><span>dashicons dashicons-text</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-thumbs-down"></i><span>dashicons dashicons-thumbs-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-thumbs-up"></i><span>dashicons dashicons-thumbs-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-tickets-alt"></i><span>dashicons dashicons-tickets-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-tickets"></i><span>dashicons dashicons-tickets</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-translation"></i><span>dashicons dashicons-translation</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-trash"></i><span>dashicons dashicons-trash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-twitter"></i><span>dashicons dashicons-twitter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-undo"></i><span>dashicons dashicons-undo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-universal-access-alt"></i><span>dashicons dashicons-universal-access-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-universal-access"></i><span>dashicons dashicons-universal-access</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-unlock"></i><span>dashicons dashicons-unlock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-update"></i><span>dashicons dashicons-update</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-upload"></i><span>dashicons dashicons-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-vault"></i><span>dashicons dashicons-vault</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-video-alt"></i><span>dashicons dashicons-video-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-video-alt2"></i><span>dashicons dashicons-video-alt2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-video-alt3"></i><span>dashicons dashicons-video-alt3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-visibility"></i><span>dashicons dashicons-visibility</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-warning"></i><span>dashicons dashicons-warning</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-welcome-add-page"></i><span>dashicons dashicons-welcome-add-page</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-welcome-comments"></i><span>dashicons dashicons-welcome-comments</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-welcome-learn-more"></i><span>dashicons dashicons-welcome-learn-more</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-welcome-view-site"></i><span>dashicons dashicons-welcome-view-site</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-welcome-widgets-menus"></i><span>dashicons dashicons-welcome-widgets-menus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-welcome-write-blog"></i><span>dashicons dashicons-welcome-write-blog</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-wordpress-alt"></i><span>dashicons dashicons-wordpress-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-wordpress"></i><span>dashicons dashicons-wordpress</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dashicons dashicons-yes"></i><span>dashicons dashicons-yes</span></a>
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
