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
    <link href="icon_fonts_assets/feather/style.css" rel="stylesheet">
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
                    Feather Icons
                  </h5>
                  <div class="form-desc">
                    Simply beautiful open source icons, for more info <a href="https://feathericons.com/">click here</a>
                  </div>
                  <ul class="demo-icons-list">
                    <li>
                      <a href="#"><i class="icon-feather-activity"></i><span>icon-feather-activity</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-airplay"></i><span>icon-feather-airplay</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-alert-circle"></i><span>icon-feather-alert-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-alert-octagon"></i><span>icon-feather-alert-octagon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-alert-triangle"></i><span>icon-feather-alert-triangle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-align-center"></i><span>icon-feather-align-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-align-justify"></i><span>icon-feather-align-justify</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-align-left"></i><span>icon-feather-align-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-align-right"></i><span>icon-feather-align-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-anchor"></i><span>icon-feather-anchor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-aperture"></i><span>icon-feather-aperture</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-arrow-down"></i><span>icon-feather-arrow-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-arrow-down-circle"></i><span>icon-feather-arrow-down-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-arrow-down-left"></i><span>icon-feather-arrow-down-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-arrow-down-right"></i><span>icon-feather-arrow-down-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-arrow-left"></i><span>icon-feather-arrow-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-arrow-left-circle"></i><span>icon-feather-arrow-left-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-arrow-right"></i><span>icon-feather-arrow-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-arrow-right-circle"></i><span>icon-feather-arrow-right-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-arrow-up"></i><span>icon-feather-arrow-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-arrow-up-circle"></i><span>icon-feather-arrow-up-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-arrow-up-left"></i><span>icon-feather-arrow-up-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-arrow-up-right"></i><span>icon-feather-arrow-up-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-at-sign"></i><span>icon-feather-at-sign</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-award"></i><span>icon-feather-award</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-bar-chart"></i><span>icon-feather-bar-chart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-bar-chart-2"></i><span>icon-feather-bar-chart-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-battery"></i><span>icon-feather-battery</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-battery-charging"></i><span>icon-feather-battery-charging</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-bell"></i><span>icon-feather-bell</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-bell-off"></i><span>icon-feather-bell-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-bluetooth"></i><span>icon-feather-bluetooth</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-bold"></i><span>icon-feather-bold</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-book"></i><span>icon-feather-book</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-book-open"></i><span>icon-feather-book-open</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-bookmark"></i><span>icon-feather-bookmark</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-box"></i><span>icon-feather-box</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-briefcase"></i><span>icon-feather-briefcase</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-calendar"></i><span>icon-feather-calendar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-camera"></i><span>icon-feather-camera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-camera-off"></i><span>icon-feather-camera-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-cast"></i><span>icon-feather-cast</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-check"></i><span>icon-feather-check</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-check-circle"></i><span>icon-feather-check-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-check-square"></i><span>icon-feather-check-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-chevron-down"></i><span>icon-feather-chevron-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-chevron-left"></i><span>icon-feather-chevron-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-chevron-right"></i><span>icon-feather-chevron-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-chevron-up"></i><span>icon-feather-chevron-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-chevrons-down"></i><span>icon-feather-chevrons-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-chevrons-left"></i><span>icon-feather-chevrons-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-chevrons-right"></i><span>icon-feather-chevrons-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-chevrons-up"></i><span>icon-feather-chevrons-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-chrome"></i><span>icon-feather-chrome</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-circle"></i><span>icon-feather-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-clipboard"></i><span>icon-feather-clipboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-clock"></i><span>icon-feather-clock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-cloud"></i><span>icon-feather-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-cloud-drizzle"></i><span>icon-feather-cloud-drizzle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-cloud-lightning"></i><span>icon-feather-cloud-lightning</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-cloud-off"></i><span>icon-feather-cloud-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-cloud-rain"></i><span>icon-feather-cloud-rain</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-cloud-snow"></i><span>icon-feather-cloud-snow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-code"></i><span>icon-feather-code</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-codepen"></i><span>icon-feather-codepen</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-command"></i><span>icon-feather-command</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-compass"></i><span>icon-feather-compass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-copy"></i><span>icon-feather-copy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-corner-down-left"></i><span>icon-feather-corner-down-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-corner-down-right"></i><span>icon-feather-corner-down-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-corner-left-down"></i><span>icon-feather-corner-left-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-corner-left-up"></i><span>icon-feather-corner-left-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-corner-right-down"></i><span>icon-feather-corner-right-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-corner-right-up"></i><span>icon-feather-corner-right-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-corner-up-left"></i><span>icon-feather-corner-up-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-corner-up-right"></i><span>icon-feather-corner-up-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-cpu"></i><span>icon-feather-cpu</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-credit-card"></i><span>icon-feather-credit-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-crop"></i><span>icon-feather-crop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-crosshair"></i><span>icon-feather-crosshair</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-database"></i><span>icon-feather-database</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-delete"></i><span>icon-feather-delete</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-disc"></i><span>icon-feather-disc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-dollar-sign"></i><span>icon-feather-dollar-sign</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-download"></i><span>icon-feather-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-download-cloud"></i><span>icon-feather-download-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-droplet"></i><span>icon-feather-droplet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-edit"></i><span>icon-feather-edit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-edit-2"></i><span>icon-feather-edit-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-edit-3"></i><span>icon-feather-edit-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-external-link"></i><span>icon-feather-external-link</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-eye"></i><span>icon-feather-eye</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-eye-off"></i><span>icon-feather-eye-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-facebook"></i><span>icon-feather-facebook</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-fast-forward"></i><span>icon-feather-fast-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-feather"></i><span>icon-feather-feather</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-file"></i><span>icon-feather-file</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-file-minus"></i><span>icon-feather-file-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-file-plus"></i><span>icon-feather-file-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-file-text"></i><span>icon-feather-file-text</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-film"></i><span>icon-feather-film</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-filter"></i><span>icon-feather-filter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-flag"></i><span>icon-feather-flag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-folder"></i><span>icon-feather-folder</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-folder-minus"></i><span>icon-feather-folder-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-folder-plus"></i><span>icon-feather-folder-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-git-branch"></i><span>icon-feather-git-branch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-git-commit"></i><span>icon-feather-git-commit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-git-merge"></i><span>icon-feather-git-merge</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-git-pull-request"></i><span>icon-feather-git-pull-request</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-github"></i><span>icon-feather-github</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-gitlab"></i><span>icon-feather-gitlab</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-globe"></i><span>icon-feather-globe</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-grid"></i><span>icon-feather-grid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-hard-drive"></i><span>icon-feather-hard-drive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-hash"></i><span>icon-feather-hash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-headphones"></i><span>icon-feather-headphones</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-heart"></i><span>icon-feather-heart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-help-circle"></i><span>icon-feather-help-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-home"></i><span>icon-feather-home</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-image"></i><span>icon-feather-image</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-inbox"></i><span>icon-feather-inbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-info"></i><span>icon-feather-info</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-instagram"></i><span>icon-feather-instagram</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-italic"></i><span>icon-feather-italic</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-layers"></i><span>icon-feather-layers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-layout"></i><span>icon-feather-layout</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-life-buoy"></i><span>icon-feather-life-buoy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-link"></i><span>icon-feather-link</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-link-2"></i><span>icon-feather-link-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-linkedin"></i><span>icon-feather-linkedin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-list"></i><span>icon-feather-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-loader"></i><span>icon-feather-loader</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-lock"></i><span>icon-feather-lock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-log-in"></i><span>icon-feather-log-in</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-log-out"></i><span>icon-feather-log-out</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-mail"></i><span>icon-feather-mail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-map"></i><span>icon-feather-map</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-map-pin"></i><span>icon-feather-map-pin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-maximize"></i><span>icon-feather-maximize</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-maximize-2"></i><span>icon-feather-maximize-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-menu"></i><span>icon-feather-menu</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-message-circle"></i><span>icon-feather-message-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-message-square"></i><span>icon-feather-message-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-mic"></i><span>icon-feather-mic</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-mic-off"></i><span>icon-feather-mic-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-minimize"></i><span>icon-feather-minimize</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-minimize-2"></i><span>icon-feather-minimize-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-minus"></i><span>icon-feather-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-minus-circle"></i><span>icon-feather-minus-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-minus-square"></i><span>icon-feather-minus-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-monitor"></i><span>icon-feather-monitor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-moon"></i><span>icon-feather-moon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-more-horizontal"></i><span>icon-feather-more-horizontal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-more-vertical"></i><span>icon-feather-more-vertical</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-move"></i><span>icon-feather-move</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-music"></i><span>icon-feather-music</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-navigation"></i><span>icon-feather-navigation</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-navigation-2"></i><span>icon-feather-navigation-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-octagon"></i><span>icon-feather-octagon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-package"></i><span>icon-feather-package</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-paperclip"></i><span>icon-feather-paperclip</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-pause"></i><span>icon-feather-pause</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-pause-circle"></i><span>icon-feather-pause-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-percent"></i><span>icon-feather-percent</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-phone"></i><span>icon-feather-phone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-phone-call"></i><span>icon-feather-phone-call</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-phone-forwarded"></i><span>icon-feather-phone-forwarded</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-phone-incoming"></i><span>icon-feather-phone-incoming</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-phone-missed"></i><span>icon-feather-phone-missed</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-phone-off"></i><span>icon-feather-phone-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-phone-outgoing"></i><span>icon-feather-phone-outgoing</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-pie-chart"></i><span>icon-feather-pie-chart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-play"></i><span>icon-feather-play</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-play-circle"></i><span>icon-feather-play-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-plus"></i><span>icon-feather-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-plus-circle"></i><span>icon-feather-plus-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-plus-square"></i><span>icon-feather-plus-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-pocket"></i><span>icon-feather-pocket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-power"></i><span>icon-feather-power</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-printer"></i><span>icon-feather-printer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-radio"></i><span>icon-feather-radio</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-refresh-ccw"></i><span>icon-feather-refresh-ccw</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-refresh-cw"></i><span>icon-feather-refresh-cw</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-repeat"></i><span>icon-feather-repeat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-rewind"></i><span>icon-feather-rewind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-rotate-ccw"></i><span>icon-feather-rotate-ccw</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-rotate-cw"></i><span>icon-feather-rotate-cw</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-rss"></i><span>icon-feather-rss</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-save"></i><span>icon-feather-save</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-scissors"></i><span>icon-feather-scissors</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-search"></i><span>icon-feather-search</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-send"></i><span>icon-feather-send</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-server"></i><span>icon-feather-server</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-settings"></i><span>icon-feather-settings</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-share"></i><span>icon-feather-share</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-share-2"></i><span>icon-feather-share-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-shield"></i><span>icon-feather-shield</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-shield-off"></i><span>icon-feather-shield-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-shopping-bag"></i><span>icon-feather-shopping-bag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-shopping-cart"></i><span>icon-feather-shopping-cart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-shuffle"></i><span>icon-feather-shuffle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-sidebar"></i><span>icon-feather-sidebar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-skip-back"></i><span>icon-feather-skip-back</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-skip-forward"></i><span>icon-feather-skip-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-slack"></i><span>icon-feather-slack</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-slash"></i><span>icon-feather-slash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-sliders"></i><span>icon-feather-sliders</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-smartphone"></i><span>icon-feather-smartphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-speaker"></i><span>icon-feather-speaker</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-square"></i><span>icon-feather-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-star"></i><span>icon-feather-star</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-stop-circle"></i><span>icon-feather-stop-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-sun"></i><span>icon-feather-sun</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-sunrise"></i><span>icon-feather-sunrise</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-sunset"></i><span>icon-feather-sunset</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-tablet"></i><span>icon-feather-tablet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-tag"></i><span>icon-feather-tag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-target"></i><span>icon-feather-target</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-terminal"></i><span>icon-feather-terminal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-thermometer"></i><span>icon-feather-thermometer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-thumbs-down"></i><span>icon-feather-thumbs-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-thumbs-up"></i><span>icon-feather-thumbs-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-toggle-left"></i><span>icon-feather-toggle-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-toggle-right"></i><span>icon-feather-toggle-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-trash"></i><span>icon-feather-trash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-trash-2"></i><span>icon-feather-trash-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-trending-down"></i><span>icon-feather-trending-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-trending-up"></i><span>icon-feather-trending-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-triangle"></i><span>icon-feather-triangle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-truck"></i><span>icon-feather-truck</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-tv"></i><span>icon-feather-tv</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-twitter"></i><span>icon-feather-twitter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-type"></i><span>icon-feather-type</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-umbrella"></i><span>icon-feather-umbrella</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-underline"></i><span>icon-feather-underline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-unlock"></i><span>icon-feather-unlock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-upload"></i><span>icon-feather-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-upload-cloud"></i><span>icon-feather-upload-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-user"></i><span>icon-feather-user</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-user-check"></i><span>icon-feather-user-check</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-user-minus"></i><span>icon-feather-user-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-user-plus"></i><span>icon-feather-user-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-user-x"></i><span>icon-feather-user-x</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-users"></i><span>icon-feather-users</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-video"></i><span>icon-feather-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-video-off"></i><span>icon-feather-video-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-voicemail"></i><span>icon-feather-voicemail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-volume"></i><span>icon-feather-volume</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-volume-1"></i><span>icon-feather-volume-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-volume-2"></i><span>icon-feather-volume-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-volume-x"></i><span>icon-feather-volume-x</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-watch"></i><span>icon-feather-watch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-wifi"></i><span>icon-feather-wifi</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-wifi-off"></i><span>icon-feather-wifi-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-wind"></i><span>icon-feather-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-x"></i><span>icon-feather-x</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-x-circle"></i><span>icon-feather-x-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-x-square"></i><span>icon-feather-x-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-zap"></i><span>icon-feather-zap</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-zap-off"></i><span>icon-feather-zap-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-zoom-in"></i><span>icon-feather-zoom-in</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-feather-zoom-out"></i><span>icon-feather-zoom-out</span></a>
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
