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
                <h6 class="element-header">
                  Editable Tables
                </h6>
                <div class="element-box">
                  <h5 class="form-header">
                    Powered by Editable-Table
                  </h5>
                  <div class="form-desc">
                    This tiny (3KB, < 120 lines) jQuery plugin turns any table into an editable spreadsheet. Here are the key features: No magic - works on a normal HTML table (so you can plug it in into any web table, and apply any JS function to calculate values) and many more.<a href="https://mindmup.github.io/editable-table/" target="_blank">Learn More about it</a>
                  </div>
                  <table id="editableTable" class="table table-editable table-striped table-lightfont"><thead><tr><th>Name</th><th>Position</th><th>Office</th><th>Age</th><th>Start date</th><th>Salary</th></tr></thead><tbody><tr><td>Tiger Nixon</td><td>System Architect</td><td>Edinburgh</td><td>61</td><td>2011/04/25</td><td>$320,800</td></tr><tr><td>Garrett Winters</td><td>Accountant</td><td>Tokyo</td><td>63</td><td>2011/07/25</td><td>$170,750</td></tr><tr><td>Ashton Cox</td><td>Junior Technical Author</td><td>San Francisco</td><td>66</td><td>2009/01/12</td><td>$86,000</td></tr><tr><td>Cedric Kelly</td><td>Senior Javascript Developer</td><td>Edinburgh</td><td>22</td><td>2012/03/29</td><td>$433,060</td></tr><tr><td>Airi Satou</td><td>Accountant</td><td>Tokyo</td><td>33</td><td>2008/11/28</td><td>$162,700</td></tr><tr><td>Brielle Williamson</td><td>Integration Specialist</td><td>New York</td><td>61</td><td>2012/12/02</td><td>$372,000</td></tr><tr><td>Herrod Chandler</td><td>Sales Assistant</td><td>San Francisco</td><td>59</td><td>2012/08/06</td><td>$137,500</td></tr><tr><td>Rhona Davidson</td><td>Integration Specialist</td><td>Tokyo</td><td>55</td><td>2010/10/14</td><td>$327,900</td></tr><tr><td>Colleen Hurst</td><td>Javascript Developer</td><td>San Francisco</td><td>39</td><td>2009/09/15</td><td>$205,500</td></tr><tr><td>Sonya Frost</td><td>Software Engineer</td><td>Edinburgh</td><td>23</td><td>2008/12/13</td><td>$103,600</td></tr><tr><td>Jena Gaines</td><td>Office Manager</td><td>London</td><td>30</td><td>2008/12/19</td><td>$90,560</td></tr><tr><td>Quinn Flynn</td><td>Support Lead</td><td>Edinburgh</td><td>22</td><td>2013/03/03</td><td>$342,000</td></tr><tr><td>Charde Marshall</td><td>Regional Director</td><td>San Francisco</td><td>36</td><td>2008/10/16</td><td>$470,600</td></tr><tr><td>Haley Kennedy</td><td>Senior Marketing Designer</td><td>London</td><td>43</td><td>2012/12/18</td><td>$313,500</td></tr><tr><td>Tatyana Fitzpatrick</td><td>Regional Director</td><td>London</td><td>19</td><td>2010/03/17</td><td>$385,750</td></tr><tr><td>Michael Silva</td><td>Marketing Designer</td><td>London</td><td>66</td><td>2012/11/27</td><td>$198,500</td></tr><tr><td>Paul Byrd</td><td>Chief Financial Officer (CFO)</td><td>New York</td><td>64</td><td>2010/06/09</td><td>$725,000</td></tr><tr><td>Gloria Little</td><td>Systems Administrator</td><td>New York</td><td>59</td><td>2009/04/10</td><td>$237,500</td></tr><tr><td>Bradley Greer</td><td>Software Engineer</td><td>London</td><td>41</td><td>2012/10/13</td><td>$132,000</td></tr><tr><td>Dai Rios</td><td>Personnel Lead</td><td>Edinburgh</td><td>35</td><td>2012/09/26</td><td>$217,500</td></tr></tbody></table>
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
