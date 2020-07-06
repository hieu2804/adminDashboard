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
    <link href="icon_fonts_assets/foundation-icon-font/foundation-icons.css" rel="stylesheet">
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
                    Foundation Icons
                  </h5>
                  <div class="form-desc">
                    Powered by Foundation Icons set, for more info <a href="http://zurb.com/playground/foundation-icon-fonts-3">click here</a>
                  </div>
                  <ul class="demo-icons-list">
                    <li>
                      <a href="#"><i class="fi-address-book"></i><span>fi-address-book</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-alert"></i><span>fi-alert</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-align-center"></i><span>fi-align-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-align-justify"></i><span>fi-align-justify</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-align-left"></i><span>fi-align-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-align-right"></i><span>fi-align-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-anchor"></i><span>fi-anchor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-annotate"></i><span>fi-annotate</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-archive"></i><span>fi-archive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-arrow-down"></i><span>fi-arrow-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-arrow-left"></i><span>fi-arrow-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-arrow-right"></i><span>fi-arrow-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-arrow-up"></i><span>fi-arrow-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-arrows-compress"></i><span>fi-arrows-compress</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-arrows-expand"></i><span>fi-arrows-expand</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-arrows-in"></i><span>fi-arrows-in</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-arrows-out"></i><span>fi-arrows-out</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-asl"></i><span>fi-asl</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-asterisk"></i><span>fi-asterisk</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-at-sign"></i><span>fi-at-sign</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-background-color"></i><span>fi-background-color</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-battery-empty"></i><span>fi-battery-empty</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-battery-full"></i><span>fi-battery-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-battery-half"></i><span>fi-battery-half</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-bitcoin-circle"></i><span>fi-bitcoin-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-bitcoin"></i><span>fi-bitcoin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-blind"></i><span>fi-blind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-bluetooth"></i><span>fi-bluetooth</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-bold"></i><span>fi-bold</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-book-bookmark"></i><span>fi-book-bookmark</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-book"></i><span>fi-book</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-bookmark"></i><span>fi-bookmark</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-braille"></i><span>fi-braille</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-burst-new"></i><span>fi-burst-new</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-burst-sale"></i><span>fi-burst-sale</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-burst"></i><span>fi-burst</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-calendar"></i><span>fi-calendar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-camera"></i><span>fi-camera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-check"></i><span>fi-check</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-checkbox"></i><span>fi-checkbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-clipboard-notes"></i><span>fi-clipboard-notes</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-clipboard-pencil"></i><span>fi-clipboard-pencil</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-clipboard"></i><span>fi-clipboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-clock"></i><span>fi-clock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-closed-caption"></i><span>fi-closed-caption</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-cloud"></i><span>fi-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-comment-minus"></i><span>fi-comment-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-comment-quotes"></i><span>fi-comment-quotes</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-comment-video"></i><span>fi-comment-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-comment"></i><span>fi-comment</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-comments"></i><span>fi-comments</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-compass"></i><span>fi-compass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-contrast"></i><span>fi-contrast</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-credit-card"></i><span>fi-credit-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-crop"></i><span>fi-crop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-crown"></i><span>fi-crown</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-css3"></i><span>fi-css3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-database"></i><span>fi-database</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-die-five"></i><span>fi-die-five</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-die-four"></i><span>fi-die-four</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-die-one"></i><span>fi-die-one</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-die-six"></i><span>fi-die-six</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-die-three"></i><span>fi-die-three</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-die-two"></i><span>fi-die-two</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-dislike"></i><span>fi-dislike</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-dollar-bill"></i><span>fi-dollar-bill</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-dollar"></i><span>fi-dollar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-download"></i><span>fi-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-eject"></i><span>fi-eject</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-elevator"></i><span>fi-elevator</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-euro"></i><span>fi-euro</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-eye"></i><span>fi-eye</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-fast-forward"></i><span>fi-fast-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-female-symbol"></i><span>fi-female-symbol</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-female"></i><span>fi-female</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-filter"></i><span>fi-filter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-first-aid"></i><span>fi-first-aid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-flag"></i><span>fi-flag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-folder-add"></i><span>fi-folder-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-folder-lock"></i><span>fi-folder-lock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-folder"></i><span>fi-folder</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-foot"></i><span>fi-foot</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-foundation"></i><span>fi-foundation</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-graph-bar"></i><span>fi-graph-bar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-graph-horizontal"></i><span>fi-graph-horizontal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-graph-pie"></i><span>fi-graph-pie</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-graph-trend"></i><span>fi-graph-trend</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-guide-dog"></i><span>fi-guide-dog</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-hearing-aid"></i><span>fi-hearing-aid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-heart"></i><span>fi-heart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-home"></i><span>fi-home</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-html5"></i><span>fi-html5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-indent-less"></i><span>fi-indent-less</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-indent-more"></i><span>fi-indent-more</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-info"></i><span>fi-info</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-italic"></i><span>fi-italic</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-key"></i><span>fi-key</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-laptop"></i><span>fi-laptop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-layout"></i><span>fi-layout</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-lightbulb"></i><span>fi-lightbulb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-like"></i><span>fi-like</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-link"></i><span>fi-link</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-list-bullet"></i><span>fi-list-bullet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-list-number"></i><span>fi-list-number</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-list-thumbnails"></i><span>fi-list-thumbnails</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-list"></i><span>fi-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-lock"></i><span>fi-lock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-loop"></i><span>fi-loop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-magnifying-glass"></i><span>fi-magnifying-glass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-mail"></i><span>fi-mail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-male-female"></i><span>fi-male-female</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-male-symbol"></i><span>fi-male-symbol</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-male"></i><span>fi-male</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-map"></i><span>fi-map</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-marker"></i><span>fi-marker</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-megaphone"></i><span>fi-megaphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-microphone"></i><span>fi-microphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-minus-circle"></i><span>fi-minus-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-minus"></i><span>fi-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-mobile-signal"></i><span>fi-mobile-signal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-mobile"></i><span>fi-mobile</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-monitor"></i><span>fi-monitor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-mountains"></i><span>fi-mountains</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-music"></i><span>fi-music</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-next"></i><span>fi-next</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-no-dogs"></i><span>fi-no-dogs</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-no-smoking"></i><span>fi-no-smoking</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-add"></i><span>fi-page-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-copy"></i><span>fi-page-copy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-csv"></i><span>fi-page-csv</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-delete"></i><span>fi-page-delete</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-doc"></i><span>fi-page-doc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-edit"></i><span>fi-page-edit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-export-csv"></i><span>fi-page-export-csv</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-export-doc"></i><span>fi-page-export-doc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-export-pdf"></i><span>fi-page-export-pdf</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-export"></i><span>fi-page-export</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-filled"></i><span>fi-page-filled</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-multiple"></i><span>fi-page-multiple</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-pdf"></i><span>fi-page-pdf</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-remove"></i><span>fi-page-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page-search"></i><span>fi-page-search</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-page"></i><span>fi-page</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-paint-bucket"></i><span>fi-paint-bucket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-paperclip"></i><span>fi-paperclip</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-pause"></i><span>fi-pause</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-paw"></i><span>fi-paw</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-paypal"></i><span>fi-paypal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-pencil"></i><span>fi-pencil</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-photo"></i><span>fi-photo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-play-circle"></i><span>fi-play-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-play-video"></i><span>fi-play-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-play"></i><span>fi-play</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-plus"></i><span>fi-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-pound"></i><span>fi-pound</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-power"></i><span>fi-power</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-previous"></i><span>fi-previous</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-price-tag"></i><span>fi-price-tag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-pricetag-multiple"></i><span>fi-pricetag-multiple</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-print"></i><span>fi-print</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-prohibited"></i><span>fi-prohibited</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-projection-screen"></i><span>fi-projection-screen</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-puzzle"></i><span>fi-puzzle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-quote"></i><span>fi-quote</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-record"></i><span>fi-record</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-refresh"></i><span>fi-refresh</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-results-demographics"></i><span>fi-results-demographics</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-results"></i><span>fi-results</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-rewind-ten"></i><span>fi-rewind-ten</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-rewind"></i><span>fi-rewind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-rss"></i><span>fi-rss</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-safety-cone"></i><span>fi-safety-cone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-save"></i><span>fi-save</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-share"></i><span>fi-share</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-sheriff-badge"></i><span>fi-sheriff-badge</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-shield"></i><span>fi-shield</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-shopping-bag"></i><span>fi-shopping-bag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-shopping-cart"></i><span>fi-shopping-cart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-shuffle"></i><span>fi-shuffle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-skull"></i><span>fi-skull</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-500px"></i><span>fi-social-500px</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-adobe"></i><span>fi-social-adobe</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-amazon"></i><span>fi-social-amazon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-android"></i><span>fi-social-android</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-apple"></i><span>fi-social-apple</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-behance"></i><span>fi-social-behance</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-bing"></i><span>fi-social-bing</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-blogger"></i><span>fi-social-blogger</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-delicious"></i><span>fi-social-delicious</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-designer-news"></i><span>fi-social-designer-news</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-deviant-art"></i><span>fi-social-deviant-art</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-digg"></i><span>fi-social-digg</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-dribbble"></i><span>fi-social-dribbble</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-drive"></i><span>fi-social-drive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-dropbox"></i><span>fi-social-dropbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-evernote"></i><span>fi-social-evernote</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-facebook"></i><span>fi-social-facebook</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-flickr"></i><span>fi-social-flickr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-forrst"></i><span>fi-social-forrst</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-foursquare"></i><span>fi-social-foursquare</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-game-center"></i><span>fi-social-game-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-github"></i><span>fi-social-github</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-google-plus"></i><span>fi-social-google-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-hacker-news"></i><span>fi-social-hacker-news</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-hi5"></i><span>fi-social-hi5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-instagram"></i><span>fi-social-instagram</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-joomla"></i><span>fi-social-joomla</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-lastfm"></i><span>fi-social-lastfm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-linkedin"></i><span>fi-social-linkedin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-medium"></i><span>fi-social-medium</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-myspace"></i><span>fi-social-myspace</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-orkut"></i><span>fi-social-orkut</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-path"></i><span>fi-social-path</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-picasa"></i><span>fi-social-picasa</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-pinterest"></i><span>fi-social-pinterest</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-rdio"></i><span>fi-social-rdio</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-reddit"></i><span>fi-social-reddit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-skillshare"></i><span>fi-social-skillshare</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-skype"></i><span>fi-social-skype</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-smashing-mag"></i><span>fi-social-smashing-mag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-snapchat"></i><span>fi-social-snapchat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-spotify"></i><span>fi-social-spotify</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-squidoo"></i><span>fi-social-squidoo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-stack-overflow"></i><span>fi-social-stack-overflow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-steam"></i><span>fi-social-steam</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-stumbleupon"></i><span>fi-social-stumbleupon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-treehouse"></i><span>fi-social-treehouse</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-tumblr"></i><span>fi-social-tumblr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-twitter"></i><span>fi-social-twitter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-vimeo"></i><span>fi-social-vimeo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-windows"></i><span>fi-social-windows</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-xbox"></i><span>fi-social-xbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-yahoo"></i><span>fi-social-yahoo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-yelp"></i><span>fi-social-yelp</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-youtube"></i><span>fi-social-youtube</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-zerply"></i><span>fi-social-zerply</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-social-zurb"></i><span>fi-social-zurb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-sound"></i><span>fi-sound</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-star"></i><span>fi-star</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-stop"></i><span>fi-stop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-strikethrough"></i><span>fi-strikethrough</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-subscript"></i><span>fi-subscript</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-superscript"></i><span>fi-superscript</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-tablet-landscape"></i><span>fi-tablet-landscape</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-tablet-portrait"></i><span>fi-tablet-portrait</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-target-two"></i><span>fi-target-two</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-target"></i><span>fi-target</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-telephone-accessible"></i><span>fi-telephone-accessible</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-telephone"></i><span>fi-telephone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-text-color"></i><span>fi-text-color</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-thumbnails"></i><span>fi-thumbnails</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-ticket"></i><span>fi-ticket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-torso-business"></i><span>fi-torso-business</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-torso-female"></i><span>fi-torso-female</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-torso"></i><span>fi-torso</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-torsos-all-female"></i><span>fi-torsos-all-female</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-torsos-all"></i><span>fi-torsos-all</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-torsos-female-male"></i><span>fi-torsos-female-male</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-torsos-male-female"></i><span>fi-torsos-male-female</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-torsos"></i><span>fi-torsos</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-trash"></i><span>fi-trash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-trees"></i><span>fi-trees</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-trophy"></i><span>fi-trophy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-underline"></i><span>fi-underline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-universal-access"></i><span>fi-universal-access</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-unlink"></i><span>fi-unlink</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-unlock"></i><span>fi-unlock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-upload-cloud"></i><span>fi-upload-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-upload"></i><span>fi-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-usb"></i><span>fi-usb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-video"></i><span>fi-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-volume-none"></i><span>fi-volume-none</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-volume-strike"></i><span>fi-volume-strike</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-volume"></i><span>fi-volume</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-web"></i><span>fi-web</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-wheelchair"></i><span>fi-wheelchair</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-widget"></i><span>fi-widget</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-wrench"></i><span>fi-wrench</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-x-circle"></i><span>fi-x-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-x"></i><span>fi-x</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-yen"></i><span>fi-yen</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-zoom-in"></i><span>fi-zoom-in</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fi-zoom-out"></i><span>fi-zoom-out</span></a>
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
