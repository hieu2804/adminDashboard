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
    <link href="icon_fonts_assets/themefy/themify-icons.css" rel="stylesheet">
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
                    Themify Icons
                  </h5>
                  <div class="form-desc">
                    Powered by Themify Icons set, for more info <a href="https://themify.me/themify-icons">click here</a>
                  </div>
                  <ul class="demo-icons-list">
                    <li>
                      <a href="#"><i class="ti-wand"></i><span>ti-wand</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-volume"></i><span>ti-volume</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-user"></i><span>ti-user</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-unlock"></i><span>ti-unlock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-unlink"></i><span>ti-unlink</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-trash"></i><span>ti-trash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-thought"></i><span>ti-thought</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-target"></i><span>ti-target</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-tag"></i><span>ti-tag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-tablet"></i><span>ti-tablet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-star"></i><span>ti-star</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-spray"></i><span>ti-spray</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-signal"></i><span>ti-signal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-shopping-cart"></i><span>ti-shopping-cart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-shopping-cart-full"></i><span>ti-shopping-cart-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-settings"></i><span>ti-settings</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-search"></i><span>ti-search</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-zoom-in"></i><span>ti-zoom-in</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-zoom-out"></i><span>ti-zoom-out</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-cut"></i><span>ti-cut</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-ruler"></i><span>ti-ruler</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-ruler-pencil"></i><span>ti-ruler-pencil</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-ruler-alt"></i><span>ti-ruler-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-bookmark"></i><span>ti-bookmark</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-bookmark-alt"></i><span>ti-bookmark-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-reload"></i><span>ti-reload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-plus"></i><span>ti-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-pin"></i><span>ti-pin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-pencil"></i><span>ti-pencil</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-pencil-alt"></i><span>ti-pencil-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-paint-roller"></i><span>ti-paint-roller</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-paint-bucket"></i><span>ti-paint-bucket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-na"></i><span>ti-na</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-mobile"></i><span>ti-mobile</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-minus"></i><span>ti-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-medall"></i><span>ti-medall</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-medall-alt"></i><span>ti-medall-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-marker"></i><span>ti-marker</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-marker-alt"></i><span>ti-marker-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrow-up"></i><span>ti-arrow-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrow-right"></i><span>ti-arrow-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrow-left"></i><span>ti-arrow-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrow-down"></i><span>ti-arrow-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-lock"></i><span>ti-lock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-location-arrow"></i><span>ti-location-arrow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-link"></i><span>ti-link</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout"></i><span>ti-layout</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layers"></i><span>ti-layers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layers-alt"></i><span>ti-layers-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-key"></i><span>ti-key</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-import"></i><span>ti-import</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-image"></i><span>ti-image</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-heart"></i><span>ti-heart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-heart-broken"></i><span>ti-heart-broken</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-hand-stop"></i><span>ti-hand-stop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-hand-open"></i><span>ti-hand-open</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-hand-drag"></i><span>ti-hand-drag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-folder"></i><span>ti-folder</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-flag"></i><span>ti-flag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-flag-alt"></i><span>ti-flag-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-flag-alt-2"></i><span>ti-flag-alt-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-eye"></i><span>ti-eye</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-export"></i><span>ti-export</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-exchange-vertical"></i><span>ti-exchange-vertical</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-desktop"></i><span>ti-desktop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-cup"></i><span>ti-cup</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-crown"></i><span>ti-crown</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-comments"></i><span>ti-comments</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-comment"></i><span>ti-comment</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-comment-alt"></i><span>ti-comment-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-close"></i><span>ti-close</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-clip"></i><span>ti-clip</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-angle-up"></i><span>ti-angle-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-angle-right"></i><span>ti-angle-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-angle-left"></i><span>ti-angle-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-angle-down"></i><span>ti-angle-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-check"></i><span>ti-check</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-check-box"></i><span>ti-check-box</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-camera"></i><span>ti-camera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-announcement"></i><span>ti-announcement</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-brush"></i><span>ti-brush</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-briefcase"></i><span>ti-briefcase</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-bolt"></i><span>ti-bolt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-bolt-alt"></i><span>ti-bolt-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-blackboard"></i><span>ti-blackboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-bag"></i><span>ti-bag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-move"></i><span>ti-move</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrows-vertical"></i><span>ti-arrows-vertical</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrows-horizontal"></i><span>ti-arrows-horizontal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-fullscreen"></i><span>ti-fullscreen</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrow-top-right"></i><span>ti-arrow-top-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrow-top-left"></i><span>ti-arrow-top-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrow-circle-up"></i><span>ti-arrow-circle-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrow-circle-right"></i><span>ti-arrow-circle-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrow-circle-left"></i><span>ti-arrow-circle-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrow-circle-down"></i><span>ti-arrow-circle-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-angle-double-up"></i><span>ti-angle-double-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-angle-double-right"></i><span>ti-angle-double-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-angle-double-left"></i><span>ti-angle-double-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-angle-double-down"></i><span>ti-angle-double-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-zip"></i><span>ti-zip</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-world"></i><span>ti-world</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-wheelchair"></i><span>ti-wheelchair</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-view-list"></i><span>ti-view-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-view-list-alt"></i><span>ti-view-list-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-view-grid"></i><span>ti-view-grid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-uppercase"></i><span>ti-uppercase</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-upload"></i><span>ti-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-underline"></i><span>ti-underline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-truck"></i><span>ti-truck</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-timer"></i><span>ti-timer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-ticket"></i><span>ti-ticket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-thumb-up"></i><span>ti-thumb-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-thumb-down"></i><span>ti-thumb-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-text"></i><span>ti-text</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-stats-up"></i><span>ti-stats-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-stats-down"></i><span>ti-stats-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-split-v"></i><span>ti-split-v</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-split-h"></i><span>ti-split-h</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-smallcap"></i><span>ti-smallcap</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-shine"></i><span>ti-shine</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-shift-right"></i><span>ti-shift-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-shift-left"></i><span>ti-shift-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-shield"></i><span>ti-shield</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-notepad"></i><span>ti-notepad</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-server"></i><span>ti-server</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-quote-right"></i><span>ti-quote-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-quote-left"></i><span>ti-quote-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-pulse"></i><span>ti-pulse</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-printer"></i><span>ti-printer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-power-off"></i><span>ti-power-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-plug"></i><span>ti-plug</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-pie-chart"></i><span>ti-pie-chart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-paragraph"></i><span>ti-paragraph</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-panel"></i><span>ti-panel</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-package"></i><span>ti-package</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-music"></i><span>ti-music</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-music-alt"></i><span>ti-music-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-mouse"></i><span>ti-mouse</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-mouse-alt"></i><span>ti-mouse-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-money"></i><span>ti-money</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-microphone"></i><span>ti-microphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-menu"></i><span>ti-menu</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-menu-alt"></i><span>ti-menu-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-map"></i><span>ti-map</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-map-alt"></i><span>ti-map-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-loop"></i><span>ti-loop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-location-pin"></i><span>ti-location-pin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-list"></i><span>ti-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-light-bulb"></i><span>ti-light-bulb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-Italic"></i><span>ti-Italic</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-info"></i><span>ti-info</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-infinite"></i><span>ti-infinite</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-id-badge"></i><span>ti-id-badge</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-hummer"></i><span>ti-hummer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-home"></i><span>ti-home</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-help"></i><span>ti-help</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-headphone"></i><span>ti-headphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-harddrives"></i><span>ti-harddrives</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-harddrive"></i><span>ti-harddrive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-gift"></i><span>ti-gift</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-game"></i><span>ti-game</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-filter"></i><span>ti-filter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-files"></i><span>ti-files</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-file"></i><span>ti-file</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-eraser"></i><span>ti-eraser</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-envelope"></i><span>ti-envelope</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-download"></i><span>ti-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-direction"></i><span>ti-direction</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-direction-alt"></i><span>ti-direction-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-dashboard"></i><span>ti-dashboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-control-stop"></i><span>ti-control-stop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-control-shuffle"></i><span>ti-control-shuffle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-control-play"></i><span>ti-control-play</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-control-pause"></i><span>ti-control-pause</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-control-forward"></i><span>ti-control-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-control-backward"></i><span>ti-control-backward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-cloud"></i><span>ti-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-cloud-up"></i><span>ti-cloud-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-cloud-down"></i><span>ti-cloud-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-clipboard"></i><span>ti-clipboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-car"></i><span>ti-car</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-calendar"></i><span>ti-calendar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-book"></i><span>ti-book</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-bell"></i><span>ti-bell</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-basketball"></i><span>ti-basketball</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-bar-chart"></i><span>ti-bar-chart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-bar-chart-alt"></i><span>ti-bar-chart-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-back-right"></i><span>ti-back-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-back-left"></i><span>ti-back-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-arrows-corner"></i><span>ti-arrows-corner</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-archive"></i><span>ti-archive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-anchor"></i><span>ti-anchor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-align-right"></i><span>ti-align-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-align-left"></i><span>ti-align-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-align-justify"></i><span>ti-align-justify</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-align-center"></i><span>ti-align-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-alert"></i><span>ti-alert</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-alarm-clock"></i><span>ti-alarm-clock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-agenda"></i><span>ti-agenda</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-write"></i><span>ti-write</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-window"></i><span>ti-window</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-widgetized"></i><span>ti-widgetized</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-widget"></i><span>ti-widget</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-widget-alt"></i><span>ti-widget-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-wallet"></i><span>ti-wallet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-video-clapper"></i><span>ti-video-clapper</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-video-camera"></i><span>ti-video-camera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-vector"></i><span>ti-vector</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-themify-logo"></i><span>ti-themify-logo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-themify-favicon"></i><span>ti-themify-favicon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-themify-favicon-alt"></i><span>ti-themify-favicon-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-support"></i><span>ti-support</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-stamp"></i><span>ti-stamp</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-split-v-alt"></i><span>ti-split-v-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-slice"></i><span>ti-slice</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-shortcode"></i><span>ti-shortcode</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-shift-right-alt"></i><span>ti-shift-right-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-shift-left-alt"></i><span>ti-shift-left-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-ruler-alt-2"></i><span>ti-ruler-alt-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-receipt"></i><span>ti-receipt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-pin2"></i><span>ti-pin2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-pin-alt"></i><span>ti-pin-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-pencil-alt2"></i><span>ti-pencil-alt2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-palette"></i><span>ti-palette</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-more"></i><span>ti-more</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-more-alt"></i><span>ti-more-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-microphone-alt"></i><span>ti-microphone-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-magnet"></i><span>ti-magnet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-line-double"></i><span>ti-line-double</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-line-dotted"></i><span>ti-line-dotted</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-line-dashed"></i><span>ti-line-dashed</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-width-full"></i><span>ti-layout-width-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-width-default"></i><span>ti-layout-width-default</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-width-default-alt"></i><span>ti-layout-width-default-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-tab"></i><span>ti-layout-tab</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-tab-window"></i><span>ti-layout-tab-window</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-tab-v"></i><span>ti-layout-tab-v</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-tab-min"></i><span>ti-layout-tab-min</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-slider"></i><span>ti-layout-slider</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-slider-alt"></i><span>ti-layout-slider-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-sidebar-right"></i><span>ti-layout-sidebar-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-sidebar-none"></i><span>ti-layout-sidebar-none</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-sidebar-left"></i><span>ti-layout-sidebar-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-placeholder"></i><span>ti-layout-placeholder</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-menu"></i><span>ti-layout-menu</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-menu-v"></i><span>ti-layout-menu-v</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-menu-separated"></i><span>ti-layout-menu-separated</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-menu-full"></i><span>ti-layout-menu-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-media-right-alt"></i><span>ti-layout-media-right-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-media-right"></i><span>ti-layout-media-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-media-overlay"></i><span>ti-layout-media-overlay</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-media-overlay-alt"></i><span>ti-layout-media-overlay-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-media-overlay-alt-2"></i><span>ti-layout-media-overlay-alt-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-media-left-alt"></i><span>ti-layout-media-left-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-media-left"></i><span>ti-layout-media-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-media-center-alt"></i><span>ti-layout-media-center-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-media-center"></i><span>ti-layout-media-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-list-thumb"></i><span>ti-layout-list-thumb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-list-thumb-alt"></i><span>ti-layout-list-thumb-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-list-post"></i><span>ti-layout-list-post</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-list-large-image"></i><span>ti-layout-list-large-image</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-line-solid"></i><span>ti-layout-line-solid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-grid4"></i><span>ti-layout-grid4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-grid3"></i><span>ti-layout-grid3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-grid2"></i><span>ti-layout-grid2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-grid2-thumb"></i><span>ti-layout-grid2-thumb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-cta-right"></i><span>ti-layout-cta-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-cta-left"></i><span>ti-layout-cta-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-cta-center"></i><span>ti-layout-cta-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-cta-btn-right"></i><span>ti-layout-cta-btn-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-cta-btn-left"></i><span>ti-layout-cta-btn-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-column4"></i><span>ti-layout-column4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-column3"></i><span>ti-layout-column3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-column2"></i><span>ti-layout-column2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-accordion-separated"></i><span>ti-layout-accordion-separated</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-accordion-merged"></i><span>ti-layout-accordion-merged</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-accordion-list"></i><span>ti-layout-accordion-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-ink-pen"></i><span>ti-ink-pen</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-info-alt"></i><span>ti-info-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-help-alt"></i><span>ti-help-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-headphone-alt"></i><span>ti-headphone-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-hand-point-up"></i><span>ti-hand-point-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-hand-point-right"></i><span>ti-hand-point-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-hand-point-left"></i><span>ti-hand-point-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-hand-point-down"></i><span>ti-hand-point-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-gallery"></i><span>ti-gallery</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-face-smile"></i><span>ti-face-smile</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-face-sad"></i><span>ti-face-sad</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-credit-card"></i><span>ti-credit-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-control-skip-forward"></i><span>ti-control-skip-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-control-skip-backward"></i><span>ti-control-skip-backward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-control-record"></i><span>ti-control-record</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-control-eject"></i><span>ti-control-eject</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-comments-smiley"></i><span>ti-comments-smiley</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-brush-alt"></i><span>ti-brush-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-youtube"></i><span>ti-youtube</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-vimeo"></i><span>ti-vimeo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-twitter"></i><span>ti-twitter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-time"></i><span>ti-time</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-tumblr"></i><span>ti-tumblr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-skype"></i><span>ti-skype</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-share"></i><span>ti-share</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-share-alt"></i><span>ti-share-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-rocket"></i><span>ti-rocket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-pinterest"></i><span>ti-pinterest</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-new-window"></i><span>ti-new-window</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-microsoft"></i><span>ti-microsoft</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-list-ol"></i><span>ti-list-ol</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-linkedin"></i><span>ti-linkedin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-sidebar-2"></i><span>ti-layout-sidebar-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-grid4-alt"></i><span>ti-layout-grid4-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-grid3-alt"></i><span>ti-layout-grid3-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-grid2-alt"></i><span>ti-layout-grid2-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-column4-alt"></i><span>ti-layout-column4-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-column3-alt"></i><span>ti-layout-column3-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-layout-column2-alt"></i><span>ti-layout-column2-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-instagram"></i><span>ti-instagram</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-google"></i><span>ti-google</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-github"></i><span>ti-github</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-flickr"></i><span>ti-flickr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-facebook"></i><span>ti-facebook</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-dropbox"></i><span>ti-dropbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-dribbble"></i><span>ti-dribbble</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-apple"></i><span>ti-apple</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-android"></i><span>ti-android</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-save"></i><span>ti-save</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-save-alt"></i><span>ti-save-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-yahoo"></i><span>ti-yahoo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-wordpress"></i><span>ti-wordpress</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-vimeo-alt"></i><span>ti-vimeo-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-twitter-alt"></i><span>ti-twitter-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-tumblr-alt"></i><span>ti-tumblr-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-trello"></i><span>ti-trello</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-stack-overflow"></i><span>ti-stack-overflow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-soundcloud"></i><span>ti-soundcloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-sharethis"></i><span>ti-sharethis</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-sharethis-alt"></i><span>ti-sharethis-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-reddit"></i><span>ti-reddit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-pinterest-alt"></i><span>ti-pinterest-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-microsoft-alt"></i><span>ti-microsoft-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-linux"></i><span>ti-linux</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-jsfiddle"></i><span>ti-jsfiddle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-joomla"></i><span>ti-joomla</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-html5"></i><span>ti-html5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-flickr-alt"></i><span>ti-flickr-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-email"></i><span>ti-email</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-drupal"></i><span>ti-drupal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-dropbox-alt"></i><span>ti-dropbox-alt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-css3"></i><span>ti-css3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-rss"></i><span>ti-rss</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="ti-rss-alt"></i><span>ti-rss-alt</span></a>
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
