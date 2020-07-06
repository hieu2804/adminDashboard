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
    <link href="icon_fonts_assets/entypo/style.css" rel="stylesheet">
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
                    Entypo Icons
                  </h5>
                  <div class="form-desc">
                    Powered by Entypo Icons set, for more info <a href="http://www.entypo.com/">click here</a>
                  </div>
                  <ul class="demo-icons-list">
                    <li>
                      <a href="#"><i class="entypo-icon-add-to-list"></i><span>entypo-icon-add-to-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-classic-computer"></i><span>entypo-icon-classic-computer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-controller-fast-backward"></i><span>entypo-icon-controller-fast-backward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-creative-commons-attribution"></i><span>entypo-icon-creative-commons-attribution</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-creative-commons-noderivs"></i><span>entypo-icon-creative-commons-noderivs</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-creative-commons-noncommercial-eu"></i><span>entypo-icon-creative-commons-noncommercial-eu</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-creative-commons-noncommercial-us"></i><span>entypo-icon-creative-commons-noncommercial-us</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-creative-commons-public-domain"></i><span>entypo-icon-creative-commons-public-domain</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-creative-commons-remix"></i><span>entypo-icon-creative-commons-remix</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-creative-commons-share"></i><span>entypo-icon-creative-commons-share</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-creative-commons-sharealike"></i><span>entypo-icon-creative-commons-sharealike</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-creative-commons"></i><span>entypo-icon-creative-commons</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-document-landscape"></i><span>entypo-icon-document-landscape</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-remove-user"></i><span>entypo-icon-remove-user</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-warning"></i><span>entypo-icon-warning</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-bold-down"></i><span>entypo-icon-arrow-bold-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-bold-left"></i><span>entypo-icon-arrow-bold-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-bold-right"></i><span>entypo-icon-arrow-bold-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-bold-up"></i><span>entypo-icon-arrow-bold-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-down"></i><span>entypo-icon-arrow-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-left"></i><span>entypo-icon-arrow-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-long-down"></i><span>entypo-icon-arrow-long-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-long-left"></i><span>entypo-icon-arrow-long-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-long-right"></i><span>entypo-icon-arrow-long-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-long-up"></i><span>entypo-icon-arrow-long-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-right"></i><span>entypo-icon-arrow-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-up"></i><span>entypo-icon-arrow-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-with-circle-down"></i><span>entypo-icon-arrow-with-circle-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-with-circle-left"></i><span>entypo-icon-arrow-with-circle-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-with-circle-right"></i><span>entypo-icon-arrow-with-circle-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-arrow-with-circle-up"></i><span>entypo-icon-arrow-with-circle-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-bookmark"></i><span>entypo-icon-bookmark</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-bookmarks"></i><span>entypo-icon-bookmarks</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-down"></i><span>entypo-icon-chevron-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-left"></i><span>entypo-icon-chevron-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-right"></i><span>entypo-icon-chevron-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-small-down"></i><span>entypo-icon-chevron-small-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-small-left"></i><span>entypo-icon-chevron-small-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-small-right"></i><span>entypo-icon-chevron-small-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-small-up"></i><span>entypo-icon-chevron-small-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-thin-down"></i><span>entypo-icon-chevron-thin-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-thin-left"></i><span>entypo-icon-chevron-thin-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-thin-right"></i><span>entypo-icon-chevron-thin-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-thin-up"></i><span>entypo-icon-chevron-thin-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-up"></i><span>entypo-icon-chevron-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-with-circle-down"></i><span>entypo-icon-chevron-with-circle-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-with-circle-left"></i><span>entypo-icon-chevron-with-circle-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-with-circle-right"></i><span>entypo-icon-chevron-with-circle-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chevron-with-circle-up"></i><span>entypo-icon-chevron-with-circle-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-cloud"></i><span>entypo-icon-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-controller-fast-forward"></i><span>entypo-icon-controller-fast-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-controller-jump-to-start"></i><span>entypo-icon-controller-jump-to-start</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-controller-next"></i><span>entypo-icon-controller-next</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-controller-paus"></i><span>entypo-icon-controller-paus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-controller-play"></i><span>entypo-icon-controller-play</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-controller-record"></i><span>entypo-icon-controller-record</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-controller-stop"></i><span>entypo-icon-controller-stop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-controller-volume"></i><span>entypo-icon-controller-volume</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-dot-single"></i><span>entypo-icon-dot-single</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-dots-three-horizontal"></i><span>entypo-icon-dots-three-horizontal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-dots-three-vertical"></i><span>entypo-icon-dots-three-vertical</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-dots-two-horizontal"></i><span>entypo-icon-dots-two-horizontal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-dots-two-vertical"></i><span>entypo-icon-dots-two-vertical</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-download"></i><span>entypo-icon-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-emoji-flirt"></i><span>entypo-icon-emoji-flirt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-flow-branch"></i><span>entypo-icon-flow-branch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-flow-cascade"></i><span>entypo-icon-flow-cascade</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-flow-line"></i><span>entypo-icon-flow-line</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-flow-parallel"></i><span>entypo-icon-flow-parallel</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-flow-tree"></i><span>entypo-icon-flow-tree</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-install"></i><span>entypo-icon-install</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-layers"></i><span>entypo-icon-layers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-open-book"></i><span>entypo-icon-open-book</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-resize-100"></i><span>entypo-icon-resize-100</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-resize-full-screen"></i><span>entypo-icon-resize-full-screen</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-save"></i><span>entypo-icon-save</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-select-arrows"></i><span>entypo-icon-select-arrows</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-sound-mute"></i><span>entypo-icon-sound-mute</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-sound"></i><span>entypo-icon-sound</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-trash"></i><span>entypo-icon-trash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-triangle-down"></i><span>entypo-icon-triangle-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-triangle-left"></i><span>entypo-icon-triangle-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-triangle-right"></i><span>entypo-icon-triangle-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-triangle-up"></i><span>entypo-icon-triangle-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-uninstall"></i><span>entypo-icon-uninstall</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-upload-to-cloud"></i><span>entypo-icon-upload-to-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-upload"></i><span>entypo-icon-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-add-user"></i><span>entypo-icon-add-user</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-address"></i><span>entypo-icon-address</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-adjust"></i><span>entypo-icon-adjust</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-air"></i><span>entypo-icon-air</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-aircraft-landing"></i><span>entypo-icon-aircraft-landing</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-aircraft-take-off"></i><span>entypo-icon-aircraft-take-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-aircraft"></i><span>entypo-icon-aircraft</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-align-bottom"></i><span>entypo-icon-align-bottom</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-align-horizontal-middle"></i><span>entypo-icon-align-horizontal-middle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-align-left"></i><span>entypo-icon-align-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-align-right"></i><span>entypo-icon-align-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-align-top"></i><span>entypo-icon-align-top</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-align-vertical-middle"></i><span>entypo-icon-align-vertical-middle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-archive"></i><span>entypo-icon-archive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-area-graph"></i><span>entypo-icon-area-graph</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-attachment"></i><span>entypo-icon-attachment</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-awareness-ribbon"></i><span>entypo-icon-awareness-ribbon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-back-in-time"></i><span>entypo-icon-back-in-time</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-back"></i><span>entypo-icon-back</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-bar-graph"></i><span>entypo-icon-bar-graph</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-battery"></i><span>entypo-icon-battery</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-beamed-note"></i><span>entypo-icon-beamed-note</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-bell"></i><span>entypo-icon-bell</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-blackboard"></i><span>entypo-icon-blackboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-block"></i><span>entypo-icon-block</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-book"></i><span>entypo-icon-book</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-bowl"></i><span>entypo-icon-bowl</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-box"></i><span>entypo-icon-box</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-briefcase"></i><span>entypo-icon-briefcase</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-browser"></i><span>entypo-icon-browser</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-brush"></i><span>entypo-icon-brush</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-bucket"></i><span>entypo-icon-bucket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-cake"></i><span>entypo-icon-cake</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-calculator"></i><span>entypo-icon-calculator</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-calendar"></i><span>entypo-icon-calendar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-camera"></i><span>entypo-icon-camera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-ccw"></i><span>entypo-icon-ccw</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-chat"></i><span>entypo-icon-chat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-check"></i><span>entypo-icon-check</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-circle-with-cross"></i><span>entypo-icon-circle-with-cross</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-circle-with-minus"></i><span>entypo-icon-circle-with-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-circle-with-plus"></i><span>entypo-icon-circle-with-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-circle"></i><span>entypo-icon-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-circular-graph"></i><span>entypo-icon-circular-graph</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-clapperboard"></i><span>entypo-icon-clapperboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-clipboard"></i><span>entypo-icon-clipboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-clock"></i><span>entypo-icon-clock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-code"></i><span>entypo-icon-code</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-cog"></i><span>entypo-icon-cog</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-colours"></i><span>entypo-icon-colours</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-compass"></i><span>entypo-icon-compass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-copy"></i><span>entypo-icon-copy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-credit-card"></i><span>entypo-icon-credit-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-credit"></i><span>entypo-icon-credit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-cross"></i><span>entypo-icon-cross</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-cup"></i><span>entypo-icon-cup</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-cw"></i><span>entypo-icon-cw</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-cycle"></i><span>entypo-icon-cycle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-database"></i><span>entypo-icon-database</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-dial-pad"></i><span>entypo-icon-dial-pad</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-direction"></i><span>entypo-icon-direction</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-document"></i><span>entypo-icon-document</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-documents"></i><span>entypo-icon-documents</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-drink"></i><span>entypo-icon-drink</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-drive"></i><span>entypo-icon-drive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-drop"></i><span>entypo-icon-drop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-edit"></i><span>entypo-icon-edit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-email"></i><span>entypo-icon-email</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-emoji-happy"></i><span>entypo-icon-emoji-happy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-emoji-neutral"></i><span>entypo-icon-emoji-neutral</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-emoji-sad"></i><span>entypo-icon-emoji-sad</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-erase"></i><span>entypo-icon-erase</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-eraser"></i><span>entypo-icon-eraser</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-export"></i><span>entypo-icon-export</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-eye"></i><span>entypo-icon-eye</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-feather"></i><span>entypo-icon-feather</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-flag"></i><span>entypo-icon-flag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-flash"></i><span>entypo-icon-flash</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-flashlight"></i><span>entypo-icon-flashlight</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-flat-brush"></i><span>entypo-icon-flat-brush</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-folder-images"></i><span>entypo-icon-folder-images</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-folder-music"></i><span>entypo-icon-folder-music</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-folder-video"></i><span>entypo-icon-folder-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-folder"></i><span>entypo-icon-folder</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-forward"></i><span>entypo-icon-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-funnel"></i><span>entypo-icon-funnel</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-game-controller"></i><span>entypo-icon-game-controller</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-gauge"></i><span>entypo-icon-gauge</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-globe"></i><span>entypo-icon-globe</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-graduation-cap"></i><span>entypo-icon-graduation-cap</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-grid"></i><span>entypo-icon-grid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-hair-cross"></i><span>entypo-icon-hair-cross</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-hand"></i><span>entypo-icon-hand</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-heart-outlined"></i><span>entypo-icon-heart-outlined</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-heart"></i><span>entypo-icon-heart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-help-with-circle"></i><span>entypo-icon-help-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-help"></i><span>entypo-icon-help</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-home"></i><span>entypo-icon-home</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-hour-glass"></i><span>entypo-icon-hour-glass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-image-inverted"></i><span>entypo-icon-image-inverted</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-image"></i><span>entypo-icon-image</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-images"></i><span>entypo-icon-images</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-inbox"></i><span>entypo-icon-inbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-infinity"></i><span>entypo-icon-infinity</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-info-with-circle"></i><span>entypo-icon-info-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-info"></i><span>entypo-icon-info</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-key"></i><span>entypo-icon-key</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-keyboard"></i><span>entypo-icon-keyboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-lab-flask"></i><span>entypo-icon-lab-flask</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-landline"></i><span>entypo-icon-landline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-language"></i><span>entypo-icon-language</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-laptop"></i><span>entypo-icon-laptop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-leaf"></i><span>entypo-icon-leaf</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-level-down"></i><span>entypo-icon-level-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-level-up"></i><span>entypo-icon-level-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-lifebuoy"></i><span>entypo-icon-lifebuoy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-light-bulb"></i><span>entypo-icon-light-bulb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-light-down"></i><span>entypo-icon-light-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-light-up"></i><span>entypo-icon-light-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-line-graph"></i><span>entypo-icon-line-graph</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-link"></i><span>entypo-icon-link</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-list"></i><span>entypo-icon-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-location-pin"></i><span>entypo-icon-location-pin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-location"></i><span>entypo-icon-location</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-lock-open"></i><span>entypo-icon-lock-open</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-lock"></i><span>entypo-icon-lock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-log-out"></i><span>entypo-icon-log-out</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-login"></i><span>entypo-icon-login</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-loop"></i><span>entypo-icon-loop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-magnet"></i><span>entypo-icon-magnet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-magnifying-glass"></i><span>entypo-icon-magnifying-glass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-mail"></i><span>entypo-icon-mail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-man"></i><span>entypo-icon-man</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-map"></i><span>entypo-icon-map</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-mask"></i><span>entypo-icon-mask</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-medal"></i><span>entypo-icon-medal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-megaphone"></i><span>entypo-icon-megaphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-menu"></i><span>entypo-icon-menu</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-message"></i><span>entypo-icon-message</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-mic"></i><span>entypo-icon-mic</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-minus"></i><span>entypo-icon-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-mobile"></i><span>entypo-icon-mobile</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-modern-mic"></i><span>entypo-icon-modern-mic</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-moon"></i><span>entypo-icon-moon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-mouse"></i><span>entypo-icon-mouse</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-music"></i><span>entypo-icon-music</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-network"></i><span>entypo-icon-network</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-new-message"></i><span>entypo-icon-new-message</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-new"></i><span>entypo-icon-new</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-news"></i><span>entypo-icon-news</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-note"></i><span>entypo-icon-note</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-notification"></i><span>entypo-icon-notification</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-old-mobile"></i><span>entypo-icon-old-mobile</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-old-phone"></i><span>entypo-icon-old-phone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-palette"></i><span>entypo-icon-palette</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-paper-plane"></i><span>entypo-icon-paper-plane</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-pencil"></i><span>entypo-icon-pencil</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-phone"></i><span>entypo-icon-phone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-pie-chart"></i><span>entypo-icon-pie-chart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-pin"></i><span>entypo-icon-pin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-plus"></i><span>entypo-icon-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-popup"></i><span>entypo-icon-popup</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-power-plug"></i><span>entypo-icon-power-plug</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-price-ribbon"></i><span>entypo-icon-price-ribbon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-price-tag"></i><span>entypo-icon-price-tag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-print"></i><span>entypo-icon-print</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-progress-empty"></i><span>entypo-icon-progress-empty</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-progress-full"></i><span>entypo-icon-progress-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-progress-one"></i><span>entypo-icon-progress-one</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-progress-two"></i><span>entypo-icon-progress-two</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-publish"></i><span>entypo-icon-publish</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-quote"></i><span>entypo-icon-quote</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-radio"></i><span>entypo-icon-radio</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-reply-all"></i><span>entypo-icon-reply-all</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-reply"></i><span>entypo-icon-reply</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-retweet"></i><span>entypo-icon-retweet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-rocket"></i><span>entypo-icon-rocket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-round-brush"></i><span>entypo-icon-round-brush</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-rss"></i><span>entypo-icon-rss</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-ruler"></i><span>entypo-icon-ruler</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-scissors"></i><span>entypo-icon-scissors</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-share-alternitive"></i><span>entypo-icon-share-alternitive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-share"></i><span>entypo-icon-share</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-shareable"></i><span>entypo-icon-shareable</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-shield"></i><span>entypo-icon-shield</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-shop"></i><span>entypo-icon-shop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-shopping-bag"></i><span>entypo-icon-shopping-bag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-shopping-basket"></i><span>entypo-icon-shopping-basket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-shopping-cart"></i><span>entypo-icon-shopping-cart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-shuffle"></i><span>entypo-icon-shuffle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-signal"></i><span>entypo-icon-signal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-sound-mix"></i><span>entypo-icon-sound-mix</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-sports-club"></i><span>entypo-icon-sports-club</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-spreadsheet"></i><span>entypo-icon-spreadsheet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-squared-cross"></i><span>entypo-icon-squared-cross</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-squared-minus"></i><span>entypo-icon-squared-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-squared-plus"></i><span>entypo-icon-squared-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-star-outlined"></i><span>entypo-icon-star-outlined</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-star"></i><span>entypo-icon-star</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-stopwatch"></i><span>entypo-icon-stopwatch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-suitcase"></i><span>entypo-icon-suitcase</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-swap"></i><span>entypo-icon-swap</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-sweden"></i><span>entypo-icon-sweden</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-switch"></i><span>entypo-icon-switch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-tablet"></i><span>entypo-icon-tablet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-tag"></i><span>entypo-icon-tag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-text-document-inverted"></i><span>entypo-icon-text-document-inverted</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-text-document"></i><span>entypo-icon-text-document</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-text"></i><span>entypo-icon-text</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-thermometer"></i><span>entypo-icon-thermometer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-thumbs-down"></i><span>entypo-icon-thumbs-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-thumbs-up"></i><span>entypo-icon-thumbs-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-thunder-cloud"></i><span>entypo-icon-thunder-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-ticket"></i><span>entypo-icon-ticket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-time-slot"></i><span>entypo-icon-time-slot</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-tools"></i><span>entypo-icon-tools</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-traffic-cone"></i><span>entypo-icon-traffic-cone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-tree"></i><span>entypo-icon-tree</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-trophy"></i><span>entypo-icon-trophy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-tv"></i><span>entypo-icon-tv</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-typing"></i><span>entypo-icon-typing</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-unread"></i><span>entypo-icon-unread</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-untag"></i><span>entypo-icon-untag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-user"></i><span>entypo-icon-user</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-users"></i><span>entypo-icon-users</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-v-card"></i><span>entypo-icon-v-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-video"></i><span>entypo-icon-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-vinyl"></i><span>entypo-icon-vinyl</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-voicemail"></i><span>entypo-icon-voicemail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-wallet"></i><span>entypo-icon-wallet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-water"></i><span>entypo-icon-water</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-500px-with-circle"></i><span>entypo-icon-500px-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-500px"></i><span>entypo-icon-500px</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-basecamp"></i><span>entypo-icon-basecamp</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-behance"></i><span>entypo-icon-behance</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-creative-cloud"></i><span>entypo-icon-creative-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-dropbox"></i><span>entypo-icon-dropbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-evernote"></i><span>entypo-icon-evernote</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-flattr"></i><span>entypo-icon-flattr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-foursquare"></i><span>entypo-icon-foursquare</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-google-drive"></i><span>entypo-icon-google-drive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-google-hangouts"></i><span>entypo-icon-google-hangouts</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-grooveshark"></i><span>entypo-icon-grooveshark</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-icloud"></i><span>entypo-icon-icloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-mixi"></i><span>entypo-icon-mixi</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-onedrive"></i><span>entypo-icon-onedrive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-paypal"></i><span>entypo-icon-paypal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-picasa"></i><span>entypo-icon-picasa</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-qq"></i><span>entypo-icon-qq</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-rdio-with-circle"></i><span>entypo-icon-rdio-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-renren"></i><span>entypo-icon-renren</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-scribd"></i><span>entypo-icon-scribd</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-sina-weibo"></i><span>entypo-icon-sina-weibo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-skype-with-circle"></i><span>entypo-icon-skype-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-skype"></i><span>entypo-icon-skype</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-slideshare"></i><span>entypo-icon-slideshare</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-smashing"></i><span>entypo-icon-smashing</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-soundcloud"></i><span>entypo-icon-soundcloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-spotify-with-circle"></i><span>entypo-icon-spotify-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-spotify"></i><span>entypo-icon-spotify</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-swarm"></i><span>entypo-icon-swarm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-vine-with-circle"></i><span>entypo-icon-vine-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-vine"></i><span>entypo-icon-vine</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-vk-alternitive"></i><span>entypo-icon-vk-alternitive</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-vk-with-circle"></i><span>entypo-icon-vk-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-vk"></i><span>entypo-icon-vk</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-xing-with-circle"></i><span>entypo-icon-xing-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-xing"></i><span>entypo-icon-xing</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-yelp"></i><span>entypo-icon-yelp</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-dribbble-with-circle"></i><span>entypo-icon-dribbble-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-dribbble"></i><span>entypo-icon-dribbble</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-facebook-with-circle"></i><span>entypo-icon-facebook-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-facebook"></i><span>entypo-icon-facebook</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-flickr-with-circle"></i><span>entypo-icon-flickr-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-flickr"></i><span>entypo-icon-flickr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-github-with-circle"></i><span>entypo-icon-github-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-github"></i><span>entypo-icon-github</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-google-with-circle"></i><span>entypo-icon-google-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-google"></i><span>entypo-icon-google</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-instagram-with-circle"></i><span>entypo-icon-instagram-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-instagram"></i><span>entypo-icon-instagram</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-lastfm-with-circle"></i><span>entypo-icon-lastfm-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-lastfm"></i><span>entypo-icon-lastfm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-linkedin-with-circle"></i><span>entypo-icon-linkedin-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-linkedin"></i><span>entypo-icon-linkedin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-pinterest-with-circle"></i><span>entypo-icon-pinterest-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-pinterest"></i><span>entypo-icon-pinterest</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-rdio"></i><span>entypo-icon-rdio</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-stumbleupon-with-circle"></i><span>entypo-icon-stumbleupon-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-stumbleupon"></i><span>entypo-icon-stumbleupon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-tumblr-with-circle"></i><span>entypo-icon-tumblr-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-tumblr"></i><span>entypo-icon-tumblr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-twitter-with-circle"></i><span>entypo-icon-twitter-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-twitter"></i><span>entypo-icon-twitter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-vimeo-with-circle"></i><span>entypo-icon-vimeo-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-vimeo"></i><span>entypo-icon-vimeo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-youtube-with-circle"></i><span>entypo-icon-youtube-with-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="entypo-icon-youtube"></i><span>entypo-icon-youtube</span></a>
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
