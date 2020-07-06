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
    <link href="icon_fonts_assets/dripicons/webfont.css" rel="stylesheet">
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
                    Dripicons
                  </h5>
                  <div class="form-desc">
                    Powered by Dripicons set, for more info <a href="https://github.com/amitjakhu/dripicons">click here</a>
                  </div>
                  <ul class="demo-icons-list">
                    <li>
                      <a href="#"><i class="dripicons-alarm"></i><span>dripicons-alarm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-align-center"></i><span>dripicons-align-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-align-justify"></i><span>dripicons-align-justify</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-align-left"></i><span>dripicons-align-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-align-right"></i><span>dripicons-align-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-anchor"></i><span>dripicons-anchor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-archive"></i><span>dripicons-archive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-arrow-down"></i><span>dripicons-arrow-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-arrow-left"></i><span>dripicons-arrow-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-arrow-right"></i><span>dripicons-arrow-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-arrow-thin-down"></i><span>dripicons-arrow-thin-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-arrow-thin-left"></i><span>dripicons-arrow-thin-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-arrow-thin-right"></i><span>dripicons-arrow-thin-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-arrow-thin-up"></i><span>dripicons-arrow-thin-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-arrow-up"></i><span>dripicons-arrow-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-article"></i><span>dripicons-article</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-backspace"></i><span>dripicons-backspace</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-basket"></i><span>dripicons-basket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-basketball"></i><span>dripicons-basketball</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-battery-empty"></i><span>dripicons-battery-empty</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-battery-full"></i><span>dripicons-battery-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-battery-low"></i><span>dripicons-battery-low</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-battery-medium"></i><span>dripicons-battery-medium</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-bell"></i><span>dripicons-bell</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-blog"></i><span>dripicons-blog</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-bluetooth"></i><span>dripicons-bluetooth</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-bold"></i><span>dripicons-bold</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-bookmark"></i><span>dripicons-bookmark</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-bookmarks"></i><span>dripicons-bookmarks</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-box"></i><span>dripicons-box</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-briefcase"></i><span>dripicons-briefcase</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-brightness-low"></i><span>dripicons-brightness-low</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-brightness-max"></i><span>dripicons-brightness-max</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-brightness-medium"></i><span>dripicons-brightness-medium</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-broadcast"></i><span>dripicons-broadcast</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-browser"></i><span>dripicons-browser</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-browser-upload"></i><span>dripicons-browser-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-brush"></i><span>dripicons-brush</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-calendar"></i><span>dripicons-calendar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-camcorder"></i><span>dripicons-camcorder</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-camera"></i><span>dripicons-camera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-card"></i><span>dripicons-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-cart"></i><span>dripicons-cart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-checklist"></i><span>dripicons-checklist</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-checkmark"></i><span>dripicons-checkmark</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-chevron-down"></i><span>dripicons-chevron-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-chevron-left"></i><span>dripicons-chevron-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-chevron-right"></i><span>dripicons-chevron-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-chevron-up"></i><span>dripicons-chevron-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-clipboard"></i><span>dripicons-clipboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-clock"></i><span>dripicons-clock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-clockwise"></i><span>dripicons-clockwise</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-cloud"></i><span>dripicons-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-cloud-download"></i><span>dripicons-cloud-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-cloud-upload"></i><span>dripicons-cloud-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-code"></i><span>dripicons-code</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-contract"></i><span>dripicons-contract</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-contract-2"></i><span>dripicons-contract-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-conversation"></i><span>dripicons-conversation</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-copy"></i><span>dripicons-copy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-crop"></i><span>dripicons-crop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-cross"></i><span>dripicons-cross</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-crosshair"></i><span>dripicons-crosshair</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-cutlery"></i><span>dripicons-cutlery</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-device-desktop"></i><span>dripicons-device-desktop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-device-mobile"></i><span>dripicons-device-mobile</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-device-tablet"></i><span>dripicons-device-tablet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-direction"></i><span>dripicons-direction</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-disc"></i><span>dripicons-disc</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-document"></i><span>dripicons-document</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-document-delete"></i><span>dripicons-document-delete</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-document-edit"></i><span>dripicons-document-edit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-document-new"></i><span>dripicons-document-new</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-document-remove"></i><span>dripicons-document-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-dot"></i><span>dripicons-dot</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-dots-2"></i><span>dripicons-dots-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-dots-3"></i><span>dripicons-dots-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-download"></i><span>dripicons-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-duplicate"></i><span>dripicons-duplicate</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-enter"></i><span>dripicons-enter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-exit"></i><span>dripicons-exit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-expand"></i><span>dripicons-expand</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-expand-2"></i><span>dripicons-expand-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-experiment"></i><span>dripicons-experiment</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-export"></i><span>dripicons-export</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-feed"></i><span>dripicons-feed</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-flag"></i><span>dripicons-flag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-flashlight"></i><span>dripicons-flashlight</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-folder"></i><span>dripicons-folder</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-folder-open"></i><span>dripicons-folder-open</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-forward"></i><span>dripicons-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-gaming"></i><span>dripicons-gaming</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-gear"></i><span>dripicons-gear</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-graduation"></i><span>dripicons-graduation</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-graph-bar"></i><span>dripicons-graph-bar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-graph-line"></i><span>dripicons-graph-line</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-graph-pie"></i><span>dripicons-graph-pie</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-headset"></i><span>dripicons-headset</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-heart"></i><span>dripicons-heart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-help"></i><span>dripicons-help</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-home"></i><span>dripicons-home</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-hourglass"></i><span>dripicons-hourglass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-inbox"></i><span>dripicons-inbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-information"></i><span>dripicons-information</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-italic"></i><span>dripicons-italic</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-jewel"></i><span>dripicons-jewel</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-lifting"></i><span>dripicons-lifting</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-lightbulb"></i><span>dripicons-lightbulb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-link"></i><span>dripicons-link</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-link-broken"></i><span>dripicons-link-broken</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-list"></i><span>dripicons-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-loading"></i><span>dripicons-loading</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-location"></i><span>dripicons-location</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-lock"></i><span>dripicons-lock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-lock-open"></i><span>dripicons-lock-open</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-mail"></i><span>dripicons-mail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-map"></i><span>dripicons-map</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-media-loop"></i><span>dripicons-media-loop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-media-next"></i><span>dripicons-media-next</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-media-pause"></i><span>dripicons-media-pause</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-media-play"></i><span>dripicons-media-play</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-media-previous"></i><span>dripicons-media-previous</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-media-record"></i><span>dripicons-media-record</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-media-shuffle"></i><span>dripicons-media-shuffle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-media-stop"></i><span>dripicons-media-stop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-medical"></i><span>dripicons-medical</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-menu"></i><span>dripicons-menu</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-message"></i><span>dripicons-message</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-meter"></i><span>dripicons-meter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-microphone"></i><span>dripicons-microphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-minus"></i><span>dripicons-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-monitor"></i><span>dripicons-monitor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-move"></i><span>dripicons-move</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-music"></i><span>dripicons-music</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-network-1"></i><span>dripicons-network-1</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-network-2"></i><span>dripicons-network-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-network-3"></i><span>dripicons-network-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-network-4"></i><span>dripicons-network-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-network-5"></i><span>dripicons-network-5</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-pamphlet"></i><span>dripicons-pamphlet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-paperclip"></i><span>dripicons-paperclip</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-pencil"></i><span>dripicons-pencil</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-phone"></i><span>dripicons-phone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-photo"></i><span>dripicons-photo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-photo-group"></i><span>dripicons-photo-group</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-pill"></i><span>dripicons-pill</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-pin"></i><span>dripicons-pin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-plus"></i><span>dripicons-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-power"></i><span>dripicons-power</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-preview"></i><span>dripicons-preview</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-print"></i><span>dripicons-print</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-pulse"></i><span>dripicons-pulse</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-question"></i><span>dripicons-question</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-reply"></i><span>dripicons-reply</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-reply-all"></i><span>dripicons-reply-all</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-return"></i><span>dripicons-return</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-retweet"></i><span>dripicons-retweet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-rocket"></i><span>dripicons-rocket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-scale"></i><span>dripicons-scale</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-search"></i><span>dripicons-search</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-shopping-bag"></i><span>dripicons-shopping-bag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-skip"></i><span>dripicons-skip</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-stack"></i><span>dripicons-stack</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-star"></i><span>dripicons-star</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-stopwatch"></i><span>dripicons-stopwatch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-store"></i><span>dripicons-store</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-suitcase"></i><span>dripicons-suitcase</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-swap"></i><span>dripicons-swap</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-tag"></i><span>dripicons-tag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-tag-delete"></i><span>dripicons-tag-delete</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-tags"></i><span>dripicons-tags</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-thumbs-down"></i><span>dripicons-thumbs-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-thumbs-up"></i><span>dripicons-thumbs-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-ticket"></i><span>dripicons-ticket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-time-reverse"></i><span>dripicons-time-reverse</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-to-do"></i><span>dripicons-to-do</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-toggles"></i><span>dripicons-toggles</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-trash"></i><span>dripicons-trash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-trophy"></i><span>dripicons-trophy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-upload"></i><span>dripicons-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-user"></i><span>dripicons-user</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-user-group"></i><span>dripicons-user-group</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-user-id"></i><span>dripicons-user-id</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-vibrate"></i><span>dripicons-vibrate</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-view-apps"></i><span>dripicons-view-apps</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-view-list"></i><span>dripicons-view-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-view-list-large"></i><span>dripicons-view-list-large</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-view-thumb"></i><span>dripicons-view-thumb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-volume-full"></i><span>dripicons-volume-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-volume-low"></i><span>dripicons-volume-low</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-volume-medium"></i><span>dripicons-volume-medium</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-volume-off"></i><span>dripicons-volume-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-wallet"></i><span>dripicons-wallet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-warning"></i><span>dripicons-warning</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-web"></i><span>dripicons-web</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-weight"></i><span>dripicons-weight</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-wifi"></i><span>dripicons-wifi</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-wrong"></i><span>dripicons-wrong</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-zoom-in"></i><span>dripicons-zoom-in</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="dripicons-zoom-out"></i><span>dripicons-zoom-out</span></a>
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
