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
    <link href="icon_fonts_assets/batch-icons/style.css" rel="stylesheet">
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
                    Batch Icons
                  </h5>
                  <div class="form-desc">
                    Powered by Batch Icons set, for more info <a href="http://adamwhitcroft.com/batch/">click here</a>
                  </div>
                  <ul class="demo-icons-list">
                    <li>
                      <a href="#"><i class="batch-icon-add"></i><span>batch-icon-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-add"></i><span>batch-icon-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-address-book-2"></i><span>batch-icon-address-book-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-address-book"></i><span>batch-icon-address-book</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-alarm-clock"></i><span>batch-icon-alarm-clock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-align-bottom"></i><span>batch-icon-align-bottom</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-align-horizontal-centers"></i><span>batch-icon-align-horizontal-centers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-align-left-edges"></i><span>batch-icon-align-left-edges</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-align-right-edges"></i><span>batch-icon-align-right-edges</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-align-top"></i><span>batch-icon-align-top</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-align-vertical-centers"></i><span>batch-icon-align-vertical-centers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-anchor"></i><span>batch-icon-anchor</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-arrow-down"></i><span>batch-icon-arrow-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-arrow-left"></i><span>batch-icon-arrow-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-arrow-right"></i><span>batch-icon-arrow-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-arrow-up"></i><span>batch-icon-arrow-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-asterisk"></i><span>batch-icon-asterisk</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-attachment-2"></i><span>batch-icon-attachment-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-attachment"></i><span>batch-icon-attachment</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-audio-high"></i><span>batch-icon-audio-high</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-audio-low"></i><span>batch-icon-audio-low</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-audio-mid"></i><span>batch-icon-audio-mid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-audio-mute"></i><span>batch-icon-audio-mute</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-20-2"></i><span>batch-icon-battery-20-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-20"></i><span>batch-icon-battery-20</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-40-2"></i><span>batch-icon-battery-40-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-40"></i><span>batch-icon-battery-40</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-60-2"></i><span>batch-icon-battery-60-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-60"></i><span>batch-icon-battery-60</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-80-2"></i><span>batch-icon-battery-80-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-80"></i><span>batch-icon-battery-80</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-100-2"></i><span>batch-icon-battery-100-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-100"></i><span>batch-icon-battery-100</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-charge-2"></i><span>batch-icon-battery-charge-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-charge"></i><span>batch-icon-battery-charge</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-empty-2"></i><span>batch-icon-battery-empty-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-battery-empty"></i><span>batch-icon-battery-empty</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-bell-2"></i><span>batch-icon-bell-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-bell-mute-2"></i><span>batch-icon-bell-mute-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-bell-mute"></i><span>batch-icon-bell-mute</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-bell"></i><span>batch-icon-bell</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-bin-2"></i><span>batch-icon-bin-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-bin-3"></i><span>batch-icon-bin-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-bin"></i><span>batch-icon-bin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-book-2"></i><span>batch-icon-book-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-book-lines-2"></i><span>batch-icon-book-lines-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-book-lines"></i><span>batch-icon-book-lines</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-book"></i><span>batch-icon-book</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-brightness-high"></i><span>batch-icon-brightness-high</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-brightness-low"></i><span>batch-icon-brightness-low</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-2"></i><span>batch-icon-browser-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-close-2"></i><span>batch-icon-browser-close-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-close"></i><span>batch-icon-browser-close</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-download-2"></i><span>batch-icon-browser-download-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-download"></i><span>batch-icon-browser-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-minimize-2"></i><span>batch-icon-browser-minimize-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-minimize"></i><span>batch-icon-browser-minimize</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-new-window-2"></i><span>batch-icon-browser-new-window-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-new-window"></i><span>batch-icon-browser-new-window</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-upload-2"></i><span>batch-icon-browser-upload-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-upload"></i><span>batch-icon-browser-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-windows-2"></i><span>batch-icon-browser-windows-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser-windows"></i><span>batch-icon-browser-windows</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-browser"></i><span>batch-icon-browser</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-bulb-2"></i><span>batch-icon-bulb-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-bulb"></i><span>batch-icon-bulb</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-bullet"></i><span>batch-icon-bullet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-bullhorn-2"></i><span>batch-icon-bullhorn-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-bullhorn"></i><span>batch-icon-bullhorn</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-calendar"></i><span>batch-icon-calendar</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-camera-2"></i><span>batch-icon-camera-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-camera-3"></i><span>batch-icon-camera-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-camera"></i><span>batch-icon-camera</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-cassette"></i><span>batch-icon-cassette</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-clipboard-2"></i><span>batch-icon-clipboard-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-clipboard"></i><span>batch-icon-clipboard</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-clock"></i><span>batch-icon-clock</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-cloud-add-2"></i><span>batch-icon-cloud-add-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-cloud-add"></i><span>batch-icon-cloud-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-cloud-download"></i><span>batch-icon-cloud-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-cloud-remove-2"></i><span>batch-icon-cloud-remove-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-cloud-remove"></i><span>batch-icon-cloud-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-cloud-upload"></i><span>batch-icon-cloud-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-cloud"></i><span>batch-icon-cloud</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-cmd"></i><span>batch-icon-cmd</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-code"></i><span>batch-icon-code</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-commit"></i><span>batch-icon-commit</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-compass"></i><span>batch-icon-compass</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-compose-2"></i><span>batch-icon-compose-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-compose-3"></i><span>batch-icon-compose-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-compose-4"></i><span>batch-icon-compose-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-compose"></i><span>batch-icon-compose</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-contract-2"></i><span>batch-icon-contract-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-contract-3"></i><span>batch-icon-contract-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-contract"></i><span>batch-icon-contract</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-contrast"></i><span>batch-icon-contrast</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-converge"></i><span>batch-icon-converge</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-crate"></i><span>batch-icon-crate</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-credit-card-2"></i><span>batch-icon-credit-card-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-credit-card-3"></i><span>batch-icon-credit-card-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-credit-card-4"></i><span>batch-icon-credit-card-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-credit-card"></i><span>batch-icon-credit-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-crop"></i><span>batch-icon-crop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-cross"></i><span>batch-icon-cross</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-curlybrace-2"></i><span>batch-icon-curlybrace-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-curlybrace"></i><span>batch-icon-curlybrace</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-database-add"></i><span>batch-icon-database-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-database-remove"></i><span>batch-icon-database-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-database"></i><span>batch-icon-database</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-delete"></i><span>batch-icon-delete</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-distribute-bottom-edges"></i><span>batch-icon-distribute-bottom-edges</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-distribute-horizontal-centers"></i><span>batch-icon-distribute-horizontal-centers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-distribute-left-edges"></i><span>batch-icon-distribute-left-edges</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-distribute-right-edges"></i><span>batch-icon-distribute-right-edges</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-distribute-top-edges"></i><span>batch-icon-distribute-top-edges</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-distribute-vertical-centers"></i><span>batch-icon-distribute-vertical-centers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-document-add"></i><span>batch-icon-document-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-document-remove"></i><span>batch-icon-document-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-document"></i><span>batch-icon-document</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-droplet"></i><span>batch-icon-droplet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-ellipsis"></i><span>batch-icon-ellipsis</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-envelope"></i><span>batch-icon-envelope</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-exclude"></i><span>batch-icon-exclude</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-expand-2"></i><span>batch-icon-expand-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-expand-3"></i><span>batch-icon-expand-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-expand"></i><span>batch-icon-expand</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-eye-2"></i><span>batch-icon-eye-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-eye"></i><span>batch-icon-eye</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-fast-forward"></i><span>batch-icon-fast-forward</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-flag-2"></i><span>batch-icon-flag-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-flag"></i><span>batch-icon-flag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-flask-empty"></i><span>batch-icon-flask-empty</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-flask-full"></i><span>batch-icon-flask-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-floppy"></i><span>batch-icon-floppy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-flux"></i><span>batch-icon-flux</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-folder-2"></i><span>batch-icon-folder-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-folder-add-2"></i><span>batch-icon-folder-add-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-folder-add"></i><span>batch-icon-folder-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-folder-duplicate-2"></i><span>batch-icon-folder-duplicate-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-folder-duplicate"></i><span>batch-icon-folder-duplicate</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-folder-remove-2"></i><span>batch-icon-folder-remove-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-folder-remove"></i><span>batch-icon-folder-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-folder"></i><span>batch-icon-folder</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-fork"></i><span>batch-icon-fork</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-grid-2"></i><span>batch-icon-grid-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-grid"></i><span>batch-icon-grid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-headphones"></i><span>batch-icon-headphones</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-heart-empty"></i><span>batch-icon-heart-empty</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-heart-full"></i><span>batch-icon-heart-full</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-heart-half"></i><span>batch-icon-heart-half</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-home-2"></i><span>batch-icon-home-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-home-3"></i><span>batch-icon-home-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-home"></i><span>batch-icon-home</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-icon0"></i><span>batch-icon-icon0</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-image"></i><span>batch-icon-image</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-in"></i><span>batch-icon-in</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-inbox-2"></i><span>batch-icon-inbox-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-inbox"></i><span>batch-icon-inbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-infinity"></i><span>batch-icon-infinity</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-intersect"></i><span>batch-icon-intersect</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-key-2"></i><span>batch-icon-key-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-key"></i><span>batch-icon-key</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-keys"></i><span>batch-icon-keys</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-layout-column-center"></i><span>batch-icon-layout-column-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-layout-content-left-2"></i><span>batch-icon-layout-content-left-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-layout-content-left"></i><span>batch-icon-layout-content-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-layout-content-right-2"></i><span>batch-icon-layout-content-right-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-layout-content-right"></i><span>batch-icon-layout-content-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-layout-sidebar-left"></i><span>batch-icon-layout-sidebar-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-layout-sidebar-right"></i><span>batch-icon-layout-sidebar-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-link-2"></i><span>batch-icon-link-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-link"></i><span>batch-icon-link</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-list-2"></i><span>batch-icon-list-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-list"></i><span>batch-icon-list</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-locked"></i><span>batch-icon-locked</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-mail-2"></i><span>batch-icon-mail-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-mail-3"></i><span>batch-icon-mail-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-mail-4"></i><span>batch-icon-mail-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-mail-incoming"></i><span>batch-icon-mail-incoming</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-mail-outgoing"></i><span>batch-icon-mail-outgoing</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-mail"></i><span>batch-icon-mail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-map-2"></i><span>batch-icon-map-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-map"></i><span>batch-icon-map</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-marquee-download"></i><span>batch-icon-marquee-download</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-marquee-minus"></i><span>batch-icon-marquee-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-marquee-plus"></i><span>batch-icon-marquee-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-marquee-upload"></i><span>batch-icon-marquee-upload</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-marquee"></i><span>batch-icon-marquee</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-maximise"></i><span>batch-icon-maximise</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-menu-2"></i><span>batch-icon-menu-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-menu-pull-down"></i><span>batch-icon-menu-pull-down</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-menu-pull-up"></i><span>batch-icon-menu-pull-up</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-menu"></i><span>batch-icon-menu</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-microphone-2"></i><span>batch-icon-microphone-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-microphone"></i><span>batch-icon-microphone</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-minus"></i><span>batch-icon-minus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-mixer"></i><span>batch-icon-mixer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-newspaper-2"></i><span>batch-icon-newspaper-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-newspaper"></i><span>batch-icon-newspaper</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-next"></i><span>batch-icon-next</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-nib"></i><span>batch-icon-nib</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-nope"></i><span>batch-icon-nope</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-notes"></i><span>batch-icon-notes</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-options"></i><span>batch-icon-options</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-out"></i><span>batch-icon-out</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-outbox-2"></i><span>batch-icon-outbox-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-outbox"></i><span>batch-icon-outbox</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-outgoing-2"></i><span>batch-icon-outgoing-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-outgoing"></i><span>batch-icon-outgoing</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-paper-ripped"></i><span>batch-icon-paper-ripped</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-paper-roll-ripped"></i><span>batch-icon-paper-roll-ripped</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-paper-roll"></i><span>batch-icon-paper-roll</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-paragraph-center-2"></i><span>batch-icon-paragraph-center-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-paragraph-center"></i><span>batch-icon-paragraph-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-paragraph-justify-2"></i><span>batch-icon-paragraph-justify-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-paragraph-justify"></i><span>batch-icon-paragraph-justify</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-paragraph-left-2"></i><span>batch-icon-paragraph-left-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-paragraph-left"></i><span>batch-icon-paragraph-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-paragraph-right-2"></i><span>batch-icon-paragraph-right-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-paragraph-right"></i><span>batch-icon-paragraph-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-pause"></i><span>batch-icon-pause</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-pen"></i><span>batch-icon-pen</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-pencil"></i><span>batch-icon-pencil</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-pin-2"></i><span>batch-icon-pin-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-pin"></i><span>batch-icon-pin</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-play"></i><span>batch-icon-play</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-plus"></i><span>batch-icon-plus</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-podcast-2"></i><span>batch-icon-podcast-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-podcast"></i><span>batch-icon-podcast</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-polaroid-2"></i><span>batch-icon-polaroid-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-polaroid"></i><span>batch-icon-polaroid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-power"></i><span>batch-icon-power</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-previous"></i><span>batch-icon-previous</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-print"></i><span>batch-icon-print</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-pull"></i><span>batch-icon-pull</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-quill-2"></i><span>batch-icon-quill-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-quill"></i><span>batch-icon-quill</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-refresh"></i><span>batch-icon-refresh</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-reminder"></i><span>batch-icon-reminder</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-remove"></i><span>batch-icon-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-repeat-2"></i><span>batch-icon-repeat-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-repeat"></i><span>batch-icon-repeat</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-reply-all"></i><span>batch-icon-reply-all</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-reply"></i><span>batch-icon-reply</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-return"></i><span>batch-icon-return</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-revert"></i><span>batch-icon-revert</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-rewind"></i><span>batch-icon-rewind</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-rulers"></i><span>batch-icon-rulers</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-safe"></i><span>batch-icon-safe</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-search-2"></i><span>batch-icon-search-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-search"></i><span>batch-icon-search</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-section"></i><span>batch-icon-section</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-settings-2"></i><span>batch-icon-settings-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-settings-3"></i><span>batch-icon-settings-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-settings-4"></i><span>batch-icon-settings-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-settings"></i><span>batch-icon-settings</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-shred"></i><span>batch-icon-shred</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-shuffle"></i><span>batch-icon-shuffle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-sleep"></i><span>batch-icon-sleep</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-spam-2"></i><span>batch-icon-spam-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-spam"></i><span>batch-icon-spam</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-speech-bubble-center-2"></i><span>batch-icon-speech-bubble-center-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-speech-bubble-center-3"></i><span>batch-icon-speech-bubble-center-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-speech-bubble-center"></i><span>batch-icon-speech-bubble-center</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-speech-bubble-left-2"></i><span>batch-icon-speech-bubble-left-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-speech-bubble-left-3"></i><span>batch-icon-speech-bubble-left-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-speech-bubble-left-4"></i><span>batch-icon-speech-bubble-left-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-speech-bubble-left"></i><span>batch-icon-speech-bubble-left</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-speech-bubble-right-2"></i><span>batch-icon-speech-bubble-right-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-speech-bubble-right-3"></i><span>batch-icon-speech-bubble-right-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-speech-bubble-right-4"></i><span>batch-icon-speech-bubble-right-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-speech-bubble-right"></i><span>batch-icon-speech-bubble-right</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-spinner-2"></i><span>batch-icon-spinner-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-spinner-3"></i><span>batch-icon-spinner-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-spinner"></i><span>batch-icon-spinner</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-split-2"></i><span>batch-icon-split-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-split"></i><span>batch-icon-split</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-spool"></i><span>batch-icon-spool</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-square-brackets"></i><span>batch-icon-square-brackets</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-stamp-2"></i><span>batch-icon-stamp-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-stamp"></i><span>batch-icon-stamp</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-star-2"></i><span>batch-icon-star-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-star"></i><span>batch-icon-star</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-stiffy"></i><span>batch-icon-stiffy</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-stop"></i><span>batch-icon-stop</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-stopwatch"></i><span>batch-icon-stopwatch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-store-2"></i><span>batch-icon-store-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-store"></i><span>batch-icon-store</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-subtract"></i><span>batch-icon-subtract</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-support-2"></i><span>batch-icon-support-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-support-3"></i><span>batch-icon-support-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-support"></i><span>batch-icon-support</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-swap-2"></i><span>batch-icon-swap-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-swap"></i><span>batch-icon-swap</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-swatch"></i><span>batch-icon-swatch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-swatches"></i><span>batch-icon-swatches</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-switch-off"></i><span>batch-icon-switch-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-switch-on"></i><span>batch-icon-switch-on</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-tag-2"></i><span>batch-icon-tag-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-tag-3"></i><span>batch-icon-tag-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-tag-4"></i><span>batch-icon-tag-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-tag"></i><span>batch-icon-tag</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-terminal-2"></i><span>batch-icon-terminal-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-terminal-3"></i><span>batch-icon-terminal-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-terminal"></i><span>batch-icon-terminal</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-tick"></i><span>batch-icon-tick</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-tilde"></i><span>batch-icon-tilde</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-timeline"></i><span>batch-icon-timeline</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-toggle-off"></i><span>batch-icon-toggle-off</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-toggle-on"></i><span>batch-icon-toggle-on</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-transfer"></i><span>batch-icon-transfer</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-tray"></i><span>batch-icon-tray</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-unite"></i><span>batch-icon-unite</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-unlocked"></i><span>batch-icon-unlocked</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-unwatch"></i><span>batch-icon-unwatch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-user-2-add"></i><span>batch-icon-user-2-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-user-2-remove"></i><span>batch-icon-user-2-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-user-2"></i><span>batch-icon-user-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-user-3"></i><span>batch-icon-user-3</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-user-4-add"></i><span>batch-icon-user-4-add</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-user-4-remove"></i><span>batch-icon-user-4-remove</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-user-4"></i><span>batch-icon-user-4</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-user-card"></i><span>batch-icon-user-card</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-user"></i><span>batch-icon-user</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-users"></i><span>batch-icon-users</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-video-2"></i><span>batch-icon-video-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-video"></i><span>batch-icon-video</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-vinyl"></i><span>batch-icon-vinyl</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-voicemail"></i><span>batch-icon-voicemail</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-wallet-2"></i><span>batch-icon-wallet-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-wallet"></i><span>batch-icon-wallet</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-watch-2"></i><span>batch-icon-watch-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-watch"></i><span>batch-icon-watch</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-wave-2"></i><span>batch-icon-wave-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-wave"></i><span>batch-icon-wave</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-wifi-high"></i><span>batch-icon-wifi-high</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-wifi-low"></i><span>batch-icon-wifi-low</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-wifi-mid"></i><span>batch-icon-wifi-mid</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-wiggle"></i><span>batch-icon-wiggle</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-windows"></i><span>batch-icon-windows</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-zoom-in-2"></i><span>batch-icon-zoom-in-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-zoom-in"></i><span>batch-icon-zoom-in</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-zoom-out-2"></i><span>batch-icon-zoom-out-2</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="batch-icon-zoom-out"></i><span>batch-icon-zoom-out</span></a>
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
