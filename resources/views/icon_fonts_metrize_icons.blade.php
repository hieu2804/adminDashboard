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
    <link href="icon_fonts_assets/metrize-icons/style.css" rel="stylesheet">
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
                    Metrize Icons
                  </h5>
                  <div class="form-desc">
                    Powered by Metrize Icons set, for more info <a href="http://www.alessioatzeni.com/metrize-icons/">click here</a>
                  </div>
                  <ul class="demo-icons-list">
                    <li>
                      <a href="#"><i class="icon-yen"></i><span>icon-yen</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-world"></i><span>icon-world</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-wireframe-globe"></i><span>icon-wireframe-globe</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-wind"></i><span>icon-wind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-wifi"></i><span>icon-wifi</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-waves"></i><span>icon-waves</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-viewport"></i><span>icon-viewport</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-viewport-video"></i><span>icon-viewport-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-user"></i><span>icon-user</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-user-remove"></i><span>icon-user-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-user-ban"></i><span>icon-user-ban</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-user-add"></i><span>icon-user-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-upload"></i><span>icon-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-upload-selection"></i><span>icon-upload-selection</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-upload-selection-circle"></i><span>icon-upload-selection-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-underline"></i><span>icon-underline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-triple-points"></i><span>icon-triple-points</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-top-bottom"></i><span>icon-top-bottom</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-three-points"></i><span>icon-three-points</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-three-points-top"></i><span>icon-three-points-top</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-three-points-bottom"></i><span>icon-three-points-bottom</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-width"></i><span>icon-text-width</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-size-upper"></i><span>icon-text-size-upper</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-size-reduce"></i><span>icon-text-size-reduce</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-paragraph"></i><span>icon-text-paragraph</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-normal"></i><span>icon-text-normal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-justify-right"></i><span>icon-text-justify-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-justify-left"></i><span>icon-text-justify-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-justify-center"></i><span>icon-text-justify-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-height"></i><span>icon-text-height</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-center"></i><span>icon-text-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-bold"></i><span>icon-text-bold</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-align-right"></i><span>icon-text-align-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-text-align-left"></i><span>icon-text-align-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-telephone"></i><span>icon-telephone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-sunshine"></i><span>icon-sunshine</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-sun"></i><span>icon-sun</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-stop"></i><span>icon-stop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-star"></i><span>icon-star</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-speed"></i><span>icon-speed</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-sound-on"></i><span>icon-sound-on</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-sound-off"></i><span>icon-sound-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-sos"></i><span>icon-sos</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-zerply"></i><span>icon-social-zerply</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-youtube"></i><span>icon-social-youtube</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-yelp"></i><span>icon-social-yelp</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-yahoo"></i><span>icon-social-yahoo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-wordpress"></i><span>icon-social-wordpress</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-virb"></i><span>icon-social-virb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-vimeo"></i><span>icon-social-vimeo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-viddler"></i><span>icon-social-viddler</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-twitter"></i><span>icon-social-twitter</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-tumblr"></i><span>icon-social-tumblr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-stumbleupon"></i><span>icon-social-stumbleupon</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-soundcloud"></i><span>icon-social-soundcloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-skype"></i><span>icon-social-skype</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-sharethis"></i><span>icon-social-sharethis</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-quora"></i><span>icon-social-quora</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-pinterest"></i><span>icon-social-pinterest</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-photobucket"></i><span>icon-social-photobucket</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-paypal"></i><span>icon-social-paypal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-myspace"></i><span>icon-social-myspace</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-linkedin"></i><span>icon-social-linkedin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-last-fm"></i><span>icon-social-last-fm</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-grooveshark"></i><span>icon-social-grooveshark</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-google-plus"></i><span>icon-social-google-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-github"></i><span>icon-social-github</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-forrst"></i><span>icon-social-forrst</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-flickr"></i><span>icon-social-flickr</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-facebook"></i><span>icon-social-facebook</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-evernote"></i><span>icon-social-evernote</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-envato"></i><span>icon-social-envato</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-email"></i><span>icon-social-email</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-dribbble"></i><span>icon-social-dribbble</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-digg"></i><span>icon-social-digg</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-deviantart"></i><span>icon-social-deviantart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-blogger"></i><span>icon-social-blogger</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-behance"></i><span>icon-social-behance</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-bebo"></i><span>icon-social-bebo</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-addthis"></i><span>icon-social-addthis</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-social-500px"></i><span>icon-social-500px</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-snow"></i><span>icon-snow</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-sliders"></i><span>icon-sliders</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-sliders-vertical"></i><span>icon-sliders-vertical</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-sign-male"></i><span>icon-sign-male</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-sign-female"></i><span>icon-sign-female</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-shield"></i><span>icon-shield</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-settings"></i><span>icon-settings</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-setting"></i><span>icon-setting</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-select-square"></i><span>icon-select-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-select-circle"></i><span>icon-select-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-search"></i><span>icon-search</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-scale"></i><span>icon-scale</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-rules"></i><span>icon-rules</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-rss"></i><span>icon-rss</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-retweet"></i><span>icon-retweet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-report-comment"></i><span>icon-report-comment</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-refresh"></i><span>icon-refresh</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-rec"></i><span>icon-rec</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-random"></i><span>icon-random</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-quote"></i><span>icon-quote</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-question"></i><span>icon-question</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-previous-fast-step"></i><span>icon-previous-fast-step</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-prev-step"></i><span>icon-prev-step</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-pounds"></i><span>icon-pounds</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-podcast"></i><span>icon-podcast</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-plus"></i><span>icon-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-play"></i><span>icon-play</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-pin"></i><span>icon-pin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-pin-map"></i><span>icon-pin-map</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-pig-money"></i><span>icon-pig-money</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-pause"></i><span>icon-pause</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-paperclip"></i><span>icon-paperclip</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-paperclip-oblique"></i><span>icon-paperclip-oblique</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-options-settings"></i><span>icon-options-settings</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-officine"></i><span>icon-officine</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-officine-2"></i><span>icon-officine-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-off"></i><span>icon-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-number-zero"></i><span>icon-number-zero</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-number-two"></i><span>icon-number-two</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-number-three"></i><span>icon-number-three</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-number-six"></i><span>icon-number-six</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-number-seven"></i><span>icon-number-seven</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-number-one"></i><span>icon-number-one</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-number-nine"></i><span>icon-number-nine</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-number-four"></i><span>icon-number-four</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-number-five"></i><span>icon-number-five</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-number-eight"></i><span>icon-number-eight</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-next-step"></i><span>icon-next-step</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-next-fast-step"></i><span>icon-next-fast-step</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-music"></i><span>icon-music</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-multi-borders"></i><span>icon-multi-borders</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-minus"></i><span>icon-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-marker"></i><span>icon-marker</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-marker-points"></i><span>icon-marker-points</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-marker-minus"></i><span>icon-marker-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-marker-add"></i><span>icon-marker-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-map"></i><span>icon-map</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-male-symbol"></i><span>icon-male-symbol</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-mailbox"></i><span>icon-mailbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-mail"></i><span>icon-mail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-magnet"></i><span>icon-magnet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-magic-wand"></i><span>icon-magic-wand</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-login-lock-refresh"></i><span>icon-login-lock-refresh</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-locked"></i><span>icon-locked</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-location"></i><span>icon-location</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-location-maps"></i><span>icon-location-maps</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-list-square"></i><span>icon-list-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-list-circle"></i><span>icon-list-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-link-url"></i><span>icon-link-url</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-line-through"></i><span>icon-line-through</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-limit-directions"></i><span>icon-limit-directions</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-like-upload"></i><span>icon-like-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-like-remove"></i><span>icon-like-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-like-download"></i><span>icon-like-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-like-close"></i><span>icon-like-close</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-like-ban"></i><span>icon-like-ban</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-like-add"></i><span>icon-like-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-left-right"></i><span>icon-left-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-leaf"></i><span>icon-leaf</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-layers"></i><span>icon-layers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-landscape"></i><span>icon-landscape</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-key"></i><span>icon-key</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-italic"></i><span>icon-italic</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-info"></i><span>icon-info</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-idea"></i><span>icon-idea</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-home-wifi"></i><span>icon-home-wifi</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-heart"></i><span>icon-heart</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-hdd"></i><span>icon-hdd</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-hdd-raid"></i><span>icon-hdd-raid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-hdd-net"></i><span>icon-hdd-net</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-grids"></i><span>icon-grids</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-grid-big"></i><span>icon-grid-big</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-graphs"></i><span>icon-graphs</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-forward"></i><span>icon-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-fire"></i><span>icon-fire</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-female-symbol"></i><span>icon-female-symbol</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-eye"></i><span>icon-eye</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-eye-disabled"></i><span>icon-eye-disabled</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-expand"></i><span>icon-expand</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-expand-vertical"></i><span>icon-expand-vertical</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-expand-horizontal"></i><span>icon-expand-horizontal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-expand-directions"></i><span>icon-expand-directions</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-exclamation"></i><span>icon-exclamation</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-euro"></i><span>icon-euro</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-email-upload"></i><span>icon-email-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-email-spam"></i><span>icon-email-spam</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-email-remove"></i><span>icon-email-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-email-luminosity"></i><span>icon-email-luminosity</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-email-download"></i><span>icon-email-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-email-close"></i><span>icon-email-close</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-email-add"></i><span>icon-email-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-eject"></i><span>icon-eject</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-drops"></i><span>icon-drops</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-drop"></i><span>icon-drop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-download"></i><span>icon-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-download-selection"></i><span>icon-download-selection</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-download-selection-circle"></i><span>icon-download-selection-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-double-diamonds"></i><span>icon-double-diamonds</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-dot-square"></i><span>icon-dot-square</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-dot-line"></i><span>icon-dot-line</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-dot-circle"></i><span>icon-dot-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-dollar"></i><span>icon-dollar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-documents"></i><span>icon-documents</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-document"></i><span>icon-document</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-document-fill"></i><span>icon-document-fill</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-directions"></i><span>icon-directions</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-cross"></i><span>icon-cross</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-credit-card"></i><span>icon-credit-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-copy-paste-document"></i><span>icon-copy-paste-document</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-copy-document"></i><span>icon-copy-document</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-contract-vertical"></i><span>icon-contract-vertical</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-contract-horizontal"></i><span>icon-contract-horizontal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-contract-directions"></i><span>icon-contract-directions</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-compass"></i><span>icon-compass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-compass-2"></i><span>icon-compass-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-comments"></i><span>icon-comments</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-comment"></i><span>icon-comment</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-coins"></i><span>icon-coins</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-cloud"></i><span>icon-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-cloud-upload"></i><span>icon-cloud-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-cloud-remove"></i><span>icon-cloud-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-cloud-download"></i><span>icon-cloud-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-cloud-add"></i><span>icon-cloud-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-clock"></i><span>icon-clock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-circles"></i><span>icon-circles</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-check"></i><span>icon-check</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-chat"></i><span>icon-chat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-chart-down"></i><span>icon-chart-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-cd-dvd-rom"></i><span>icon-cd-dvd-rom</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-camera"></i><span>icon-camera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-button-question"></i><span>icon-button-question</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-button-minus"></i><span>icon-button-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-button-exclamation"></i><span>icon-button-exclamation</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-button-email"></i><span>icon-button-email</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-button-close"></i><span>icon-button-close</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-button-check"></i><span>icon-button-check</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-button-add"></i><span>icon-button-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-brush"></i><span>icon-brush</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-browser-sizes"></i><span>icon-browser-sizes</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-box-remove"></i><span>icon-box-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-box-close"></i><span>icon-box-close</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-box-blank"></i><span>icon-box-blank</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-box-add"></i><span>icon-box-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-bolt"></i><span>icon-bolt</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-block-menu"></i><span>icon-block-menu</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-blank"></i><span>icon-blank</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-bezier"></i><span>icon-bezier</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-bars"></i><span>icon-bars</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-ban-circle"></i><span>icon-ban-circle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-bag"></i><span>icon-bag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-backward"></i><span>icon-backward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-axis-rules"></i><span>icon-axis-rules</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-atom"></i><span>icon-atom</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-up"></i><span>icon-arrow-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-up-thin"></i><span>icon-arrow-up-thin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-up-light"></i><span>icon-arrow-up-light</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-up-bold"></i><span>icon-arrow-up-bold</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-up-bold-round"></i><span>icon-arrow-up-bold-round</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-up-big"></i><span>icon-arrow-up-big</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-right"></i><span>icon-arrow-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-right-thin"></i><span>icon-arrow-right-thin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-right-light"></i><span>icon-arrow-right-light</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-right-bold"></i><span>icon-arrow-right-bold</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-right-bold-round"></i><span>icon-arrow-right-bold-round</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-right-big"></i><span>icon-arrow-right-big</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-oblique-expand"></i><span>icon-arrow-oblique-expand</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-oblique-expand-directions"></i><span>icon-arrow-oblique-expand-directions</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-oblique-contract"></i><span>icon-arrow-oblique-contract</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-oblique-contract-directions"></i><span>icon-arrow-oblique-contract-directions</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-multi-line-up"></i><span>icon-arrow-multi-line-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-multi-line-right"></i><span>icon-arrow-multi-line-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-multi-line-left"></i><span>icon-arrow-multi-line-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-multi-line-down"></i><span>icon-arrow-multi-line-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-left"></i><span>icon-arrow-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-left-thin"></i><span>icon-arrow-left-thin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-left-light"></i><span>icon-arrow-left-light</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-left-bold"></i><span>icon-arrow-left-bold</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-left-bold-round"></i><span>icon-arrow-left-bold-round</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-left-big"></i><span>icon-arrow-left-big</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-fill-up"></i><span>icon-arrow-fill-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-fill-right"></i><span>icon-arrow-fill-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-fill-left"></i><span>icon-arrow-fill-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-fill-down"></i><span>icon-arrow-fill-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-down"></i><span>icon-arrow-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-down-thin"></i><span>icon-arrow-down-thin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-down-light"></i><span>icon-arrow-down-light</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-down-bold"></i><span>icon-arrow-down-bold</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-down-bold-round"></i><span>icon-arrow-down-bold-round</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-down-big"></i><span>icon-arrow-down-big</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-cycling"></i><span>icon-arrow-cycling</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-cycle"></i><span>icon-arrow-cycle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-curve-right"></i><span>icon-arrow-curve-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-curve-recycle"></i><span>icon-arrow-curve-recycle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-curve-left"></i><span>icon-arrow-curve-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-animal-footprint"></i><span>icon-animal-footprint</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-alarm-clock"></i><span>icon-alarm-clock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-air-plane"></i><span>icon-air-plane</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-adjust"></i><span>icon-adjust</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-cube"></i><span>icon-cube</span></a>
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
