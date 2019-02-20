<?php $this->load->view('includes/header_view', $stylesheets); ?>

<header class="header">
    <a href="index.html" class="logo">
        <img src="<?php echo base_url('lib'); ?>/img/logo.png" alt="Logo">
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <div class="responsive_nav"></div>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages pull-right">
                        <li class="dropdown-title">4 New Messages</li>
                        <li class="unread message">
                            <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                <img src="<?php echo base_url('lib'); ?>/img/authors/avatar.jpg" class="img-responsive message-image" alt="icon" />
                                <div class="message-body">
                                    <strong>Riot Zeast</strong>
                                    <br>Hello, You there?
                                    <br>
                                    <small>8 minutes ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="unread message">
                            <a href="javascript:;" class="message">
                                <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                <img src="<?php echo base_url('lib'); ?>/img/authors/avatar1.jpg" class="img-responsive message-image" alt="icon" />
                                <div class="message-body">
                                    <strong>John Kerry</strong>
                                    <br>Can we Meet ?
                                    <br>
                                    <small>45 minutes ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="unread message">
                            <a href="javascript:;" class="message">
                                <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                    <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                </i>
                                <img src="<?php echo base_url('lib'); ?>/img/authors/avatar5.jpg" class="img-responsive message-image" alt="icon" />
                                <div class="message-body">
                                    <strong>Jenny Kerry</strong>
                                    <br>Dont forgot to call...
                                    <br>
                                    <small>An hour ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="unread message">
                            <a href="javascript:;" class="message">
                                <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                    <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                </i>
                                <img src="<?php echo base_url('lib'); ?>/img/authors/avatar4.jpg" class="img-responsive message-image" alt="icon" />
                                <div class="message-body">
                                    <strong>Ronny</strong>
                                    <br>Hey! sup Dude?
                                    <br>
                                    <small>3 Hours ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="footer">
                            <a href="#">View all</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                        <span class="label label-warning">7</span>
                    </a>
                    <ul class=" notifications dropdown-menu">
                        <li class="dropdown-title">You have 7 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <i class="livicon danger" data-n="timer" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">after a long time</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        Just Now
                                    </small>
                                </li>
                                <li>
                                    <i class="livicon success" data-n="gift" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">Jef's Birthday today</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        Few seconds ago
                                    </small>
                                </li>
                                <li>
                                    <i class="livicon warning" data-n="dashboard" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">out of space</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        8 minutes ago
                                    </small>
                                </li>
                                <li>
                                    <i class="livicon bg-aqua" data-n="hand-right" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">New friend request</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        An hour ago
                                    </small>
                                </li>
                                <li>
                                    <i class="livicon danger" data-n="shopping-cart-in" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">On sale 2 products</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        3 Hours ago
                                    </small>
                                </li>
                                <li>
                                    <i class="livicon success" data-n="image" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">Lee Shared your photo</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        Yesterday
                                    </small>
                                </li>
                                <li>
                                    <i class="livicon warning" data-n="thumbs-up" data-s="20" data-c="white" data-hc="white"></i>
                                    <a href="#">David liked your photo</a>
                                    <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        2 July 2014
                                    </small>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url('lib'); ?>/img/authors/avatar3.jpg" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                        <div class="riot">
                            <div>
                                Riot
                                <span>
                                    <i class="caret"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="<?php echo base_url('lib'); ?>/img/authors/avatar3.jpg" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
                            <p class="topprofiletext">Riot Zeast</p>
                        </li>
                        <!-- Menu Body -->
                        <li>
                            <a href="view_user.html">
                                <i class="livicon" data-name="user" data-s="18"></i> My Profile
                            </a>
                        </li>
                        <li role="presentation"></li>
                        <li>
                            <a href="adduser.html">
                                <i class="livicon" data-name="gears" data-s="18"></i> Account Settings
                            </a>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="lockscreen.html">
                                    <i class="livicon" data-name="lock" data-s="18"></i> Lock
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="login.html">
                                    <i class="livicon" data-name="sign-out" data-s="18"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar ">
            <div class="page-sidebar  sidebar-nav">
                <div class="nav_icons">
                    <ul class="sidebar_threeicons">
                        <li>
                            <a href="advanced_tables.html">
                                <i class="livicon" data-name="table" title="Advanced tables" data-c="#418BCA" data-hc="#418BCA" data-size="25" data-loop="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="tasks.html">
                                <i class="livicon" data-c="#EF6F6C" title="Tasks" data-hc="#EF6F6C" data-name="list-ul" data-size="25" data-loop="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="gallery.html">
                                <i class="livicon" data-name="image" title="Gallery" data-c="#F89A14" data-hc="#F89A14" data-size="25" data-loop="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="users_list.html">
                                <i class="livicon" data-name="users" title="Users List" data-size="25" data-c="#01bc8c" data-hc="#01bc8c" data-loop="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <!-- BEGIN SIDEBAR MENU -->
                <ul id="menu" class="page-sidebar-menu">
                    <li class="active">
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                            <span class="title">Builders</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="form_builder.html">
                                    <i class="fa fa-angle-double-right"></i> Form Builder
                                </a>
                            </li>
                            <li>
                                <a href="form_builder2.html">
                                    <i class="fa fa-angle-double-right"></i> Form Builder 2
                                </a>
                            </li>
                            <li>
                                <a href="buttonbuilder.html">
                                    <i class="fa fa-angle-double-right"></i> Button Builder
                                </a>
                            </li>
                            <li>
                                <a href="page_builder.html">
                                    <i class="fa fa-angle-double-right"></i> Page Builder
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                            <span class="title">Forms</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="form_examples.html">
                                    <i class="fa fa-angle-double-right"></i> Form Examples
                                </a>
                            </li>
                            <li>
                                <a href="form_editor.html">
                                    <i class="fa fa-angle-double-right"></i> Form Editors
                                </a>
                            </li>
                            <li>
                                <a href="form_editor2.html">
                                    <i class="fa fa-angle-double-right"></i> Form Editors2
                                </a>
                            </li>
                            <li>
                                <a href="form_validation.html">
                                    <i class="fa fa-angle-double-right"></i> Form Validation
                                </a>
                            </li>
                            <li>
                                <a href="formelements.html">
                                    <i class="fa fa-angle-double-right"></i> Form Elements
                                </a>
                            </li>
                            <li>
                                <a href="dropdowns.html">
                                    <i class="fa fa-angle-double-right"></i> Drop Downs
                                </a>
                            </li>
                            <li>
                                <a href="radio_check.html">
                                    <i class="fa fa-angle-double-right"></i> Radio and Checkbox
                                </a>
                            </li>
                            <li>
                                <a href="ratings.html">
                                    <i class="fa fa-angle-double-right"></i> Ratings
                                </a>
                            </li>
                            <li>
                                <a href="form_layouts.html">
                                    <i class="fa fa-angle-double-right"></i> Form Layouts
                                </a>
                            </li>
                            <li>
                                <a href="formwizard.html">
                                    <i class="fa fa-angle-double-right"></i> Form Wizards
                                </a>
                            </li>
                            <li>
                                <a href="accordionformwizard.html">
                                    <i class="fa fa-angle-double-right"></i> Accordion Wizards
                                </a>
                            </li>
                            <li>
                                <a href="datepicker.html">
                                    <i class="fa fa-angle-double-right"></i> Date Pickers
                                </a>
                            </li>
                            <li>
                                <a href="advanced_datepickers.html">
                                    <i class="fa fa-angle-double-right"></i> Advanced Date Pickers
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="brush" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
                            <span class="title">UI Features</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="animatedicons.html">
                                    <i class="fa fa-angle-double-right"></i> Animated Icons
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <i class="fa fa-angle-double-right"></i> Buttons
                                </a>
                            </li>
                            <li>
                                <a href="advanced_buttons.html">
                                    <i class="fa fa-angle-double-right"></i> Advanced Buttons
                                </a>
                            </li>
                            <li>
                                <a href="tabs_accordions.html">
                                    <i class="fa fa-angle-double-right"></i> Tabs and Accordions
                                </a>
                            </li>
                            <li>
                                <a href="panels.html">
                                    <i class="fa fa-angle-double-right"></i> Panels
                                </a>
                            </li>
                            <li>
                                <a href="icon.html">
                                    <i class="fa fa-angle-double-right"></i> Font Icons
                                </a>
                            </li>
                            <li>
                                <a href="color.html">
                                    <i class="fa fa-angle-double-right"></i> Color Picker Slider
                                </a>
                            </li>
                            <li>
                                <a href="grid.html">
                                    <i class="fa fa-angle-double-right"></i> Grid Layout
                                </a>
                            </li>
                            <li>
                                <a href="carousel.html">
                                    <i class="fa fa-angle-double-right"></i> Carousel
                                </a>
                            </li>
                            <li>                                     <a href="advanced_modals.html">                                         <i class="fa fa-angle-double-right"></i> Advanced Modals                                     </a>                                 </li>                                 <li>                                     <a href="tagsinput.html"> <i class="fa fa-angle-double-right"></i> Tags Input </a>                                 </li>                                 <li>                                     <a href="nestable_list.html">                                         <i class="fa fa-angle-double-right"></i> Nestable List                                     </a>                                 </li>
                            <li>
                                <a href="sortable_list.html">
                                    <i class="fa fa-angle-double-right"></i> Sortable List
                                </a>
                            </li>
                            <li>
                                <a href="treeview_jstree.html">
                                    <i class="fa fa-angle-double-right"></i> Treeview and jsTree
                                </a>
                            </li>
                            <li>
                                <a href="toastr_notification.html">
                                    <i class="fa fa-angle-double-right"></i> Toastr Notifications
                                </a>
                            </li>
                            <li>
                                <a href="sweetalert.html">
                                    <i class="fa fa-angle-double-right"></i> Sweet Alert
                                </a>
                            </li>
                            <li>
                                <a href="notifications.html">
                                    <i class="fa fa-angle-double-right"></i> Notifications
                                </a>
                            </li>
                            <li>
                                <a href="session_timeout.html">
                                    <i class="fa fa-angle-double-right"></i> Session Timeout
                                </a>
                            </li>
                            <li>
                                <a href="portlet_draggable.html">
                                    <i class="fa fa-angle-double-right"></i> Draggable Portlets
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="lab" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18" data-loop="true"></i>
                            <span class="title">UI Components</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="general.html">
                                    <i class="fa fa-angle-double-right"></i> General Components
                                </a>
                            </li>
                            <li>
                                <a href="pickers.html">
                                    <i class="fa fa-angle-double-right"></i> Pickers
                                </a>
                            </li>
                            <li>
                                <a href="x-editable.html">
                                    <i class="fa fa-angle-double-right"></i> X-editable
                                </a>
                            </li>
                            <li>
                                <a href="timeline.html">
                                    <i class="fa fa-angle-double-right"></i> Timeline
                                </a>
                            </li>
                            <li>
                                <a href="transitions.html">
                                    <i class="fa fa-angle-double-right"></i> Transitions
                                </a>
                            </li>
                            <li>
                                <a href="sliders.html">
                                    <i class="fa fa-angle-double-right"></i> Sliders
                                </a>
                            </li>
                            <li>
                                <a href="knob.html">
                                    <i class="fa fa-angle-double-right"></i> Circles Sliders
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="table" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
                            <span class="title">Data Tables</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="simple_table.html">
                                    <i class="fa fa-angle-double-right"></i> Simple tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables.html">
                                    <i class="fa fa-angle-double-right"></i> Advanced Data Tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables2.html">
                                    <i class="fa fa-angle-double-right"></i> Advanced Data Tables2
                                </a>
                            </li>
                            <li>
                                <a href="editable_table.html"> <i class="fa fa-angle-double-right"></i> Editable Data Tables </a>
                            </li>
                            <li>
                                <a href="responsive_tables.html"> <i class="fa fa-angle-double-right"></i> Responsive Data Tables </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                            <span class="title">Charts</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="charts.html">
                                    <i class="fa fa-angle-double-right"></i> Flot Charts
                                </a>
                            </li>
                            <li>
                                <a href="piecharts.html">
                                    <i class="fa fa-angle-double-right"></i> Pie Charts
                                </a>
                            </li>
                            <li>
                                <a href="charts_animation.html">
                                    <i class="fa fa-angle-double-right"></i> Animated Charts
                                </a>
                            </li>
                            <li>
                                <a href="jscharts.html">
                                    <i class="fa fa-angle-double-right"></i> JS Charts
                                </a>
                            </li>
                            <li>
                                <a href="sparklinecharts.html">
                                    <i class="fa fa-angle-double-right"></i> Sparkline Charts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="calendar" data-size="18" data-loop="true"></i>
                            <span class="badge badge-danger">7</span> Calendar
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="mail" data-size="18" data-c="#5bc0de" data-hc="#5bc0de" data-loop="true"></i>
                            <span class="title">Email</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="Inbox.html">
                                    <i class="fa fa-angle-double-right"></i> Inbox
                                </a>
                            </li>
                            <li>
                                <a href="compose.html">
                                    <i class="fa fa-angle-double-right"></i> Compose
                                </a>
                            </li>
                            <li>
                                <a href="view_mail.html">
                                    <i class="fa fa-angle-double-right"></i> Single Mail
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="tasks.html">
                            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list-ul" data-size="18" data-loop="true"></i>
                            <span class="badge badge-danger">10</span> Tasks
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="image" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
                            <span class="title">Gallery</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="gallery.html">
                                    <i class="fa fa-angle-double-right"></i> Gallery
                                </a>
                            </li>
                            <li>
                                <a href="masonry_gallery.html">
                                    <i class="fa fa-angle-double-right"></i> Masonry Gallery
                                </a>
                            </li>
                            <li>
                                <a href="dropzone.html">
                                    <i class="fa fa-angle-double-right"></i> Dropzone
                                </a>
                            </li>
                            <li>
                                <a href="imagecropping.html">
                                    <i class="fa fa-angle-double-right"></i> Image Cropping
                                </a>
                            </li>
                            <li>
                                <a href="multiple_upload.html">
                                    <i class="fa fa-angle-double-right"></i> Multiple File Upload
                                </a>
                            </li>
                            <li>
                                <a href="imgmagnifier.html">
                                    <i class="fa fa-angle-double-right"></i> Image Magnifier
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="users" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                            <span class="title">Users</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="users_list.html">
                                    <i class="fa fa-angle-double-right"></i> Users List
                                </a>
                            </li>
                            <li>
                                <a href="adduser.html">
                                    <i class="fa fa-angle-double-right"></i> Add New User
                                </a>
                            </li>
                            <li>
                                <a href="view_user.html">
                                    <i class="fa fa-angle-double-right"></i> View Profile
                                </a>
                            </li>
                            <li>
                                <a href="deleted_users.html">
                                    <i class="fa fa-angle-double-right"></i> Deleted Users
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="map" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                            <span class="title">Maps</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="googlemaps.html">
                                    <i class="fa fa-angle-double-right"></i> Google Maps
                                </a>
                            </li>
                            <li>
                                <a href="vectormaps.html">
                                    <i class="fa fa-angle-double-right"></i> Vector Maps
                                </a>
                            </li>
                            <li>
                                <a href="advancedmaps.html">
                                    <i class="fa fa-angle-double-right"></i> Advanced Maps
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="comment" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
                            <span class="title">Blog</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="blog_list.html"> <i class="fa fa-angle-double-right"></i> Blog Category List </a>
                            </li>
                            <li>
                                <a href="blog_list2.html"> <i class="fa fa-angle-double-right"></i> Blog List </a>
                            </li>
                            <li>
                                <a href="add_newblog.html"> <i class="fa fa-angle-double-right"></i> Add New Blog </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="move" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18" data-loop="true"></i>
                            <span class="title">News</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="news.html">
                                    <i class="fa fa-angle-double-right"></i> News
                                </a>
                            </li>
                            <li>
                                <a href="news_details.html">
                                    <i class="fa fa-angle-double-right"></i> News Details
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="flag" data-c="#418bca" data-hc="#418bca" data-size="18" data-loop="true"></i>
                            <span class="title">Pages</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="lockscreen.html">
                                    <i class="fa fa-angle-double-right"></i> Lockscreen
                                </a>
                            </li>
                            <li>
                                <a href="invoice.html">
                                    <i class="fa fa-angle-double-right"></i> Invoice
                                </a>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="fa fa-angle-double-right"></i> Login
                                </a>
                            </li>
                            <li>
                                <a href="login2.html">
                                    <i class="fa fa-angle-double-right"></i> Login 2
                                </a>
                            </li>
                            <li>
                                <a href="login.html#toregister">
                                    <i class="fa fa-angle-double-right"></i> Register
                                </a>
                            </li>
                            <li>
                                <a href="register2.html">
                                    <i class="fa fa-angle-double-right"></i> Register 2
                                </a>
                            </li>
                            <li>
                                <a href="404.html">
                                    <i class="fa fa-angle-double-right"></i> 404 Error
                                </a>
                            </li>
                            <li>
                                <a href="500.html">
                                    <i class="fa fa-angle-double-right"></i> 500 Error
                                </a>
                            </li>
                            <li>
                                <a href="blank.html">
                                    <i class="fa fa-angle-double-right"></i> Blank Page
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <div class="alert alert-success alert-dismissable margin5">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Success:</strong> You have successfully logged in.
        </div>
        <!-- Main content -->
        <section class="content-header">
            <h1>Welcome to Dashboard</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <a href="#">
                        <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i> Dashboard
                    </a>
                </li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
                    <!-- Trans label pie charts strats here-->
                    <div class="lightbluebg no-radius">
                        <div class="panel-body squarebox square_boxs">
                            <div class="col-xs-12 pull-left nopadmar">
                                <div class="row">
                                    <div class="square_box col-xs-7 text-right">
                                        <span>Views Today</span>
                                        <div class="number" id="myTargetElement1"></div>
                                    </div>
                                    <i class="livicon  pull-right" data-name="eye-open" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <small class="stat-label">Last Week</small>
                                        <h4 id="myTargetElement1.1"></h4>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <small class="stat-label">Last Month</small>
                                        <h4 id="myTargetElement1.2"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
                    <!-- Trans label pie charts strats here-->
                    <div class="redbg no-radius">
                        <div class="panel-body squarebox square_boxs">
                            <div class="col-xs-12 pull-left nopadmar">
                                <div class="row">
                                    <div class="square_box col-xs-7 pull-left">
                                        <span>Today's Sales</span>
                                        <div class="number" id="myTargetElement2"></div>
                                    </div>
                                    <i class="livicon pull-right" data-name="piggybank" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <small class="stat-label">Last Week</small>
                                        <h4 id="myTargetElement2.1"></h4>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <small class="stat-label">Last Month</small>
                                        <h4 id="myTargetElement2.2"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                    <!-- Trans label pie charts strats here-->
                    <div class="goldbg no-radius">
                        <div class="panel-body squarebox square_boxs">
                            <div class="col-xs-12 pull-left nopadmar">
                                <div class="row">
                                    <div class="square_box col-xs-7 pull-left">
                                        <span>Subscribers</span>
                                        <div class="number" id="myTargetElement3"></div>
                                    </div>
                                    <i class="livicon pull-right" data-name="archive-add" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <small class="stat-label">Last Week</small>
                                        <h4 id="myTargetElement3.1"></h4>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <small class="stat-label">Last Month</small>
                                        <h4 id="myTargetElement3.2"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                    <!-- Trans label pie charts strats here-->
                    <div class="palebluecolorbg no-radius">
                        <div class="panel-body squarebox square_boxs">
                            <div class="col-xs-12 pull-left nopadmar">
                                <div class="row">
                                    <div class="square_box col-xs-7 pull-left">
                                        <span>Registered Users</span>
                                        <div class="number" id="myTargetElement4"></div>
                                    </div>
                                    <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <small class="stat-label">Last Week</small>
                                        <h4 id="myTargetElement4.1"></h4>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <small class="stat-label">Last Month</small>
                                        <h4 id="myTargetElement4.2"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
            <div class="row ">
                <div class="col-md-8 col-sm-6">
                    <div class="panel panel-border">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="dashboard" data-size="20" data-loop="true" data-c="#F89A14" data-hc="#F89A14"></i> Realtime Server Load
                                <small>- Load on the Server</small>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div id="realtimechart" style="height:350px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel blue_gradiant_bg">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Server Stats
                                <small class="white-text">- Monthly Report</small>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="sparkline-chart">
                                        <div class="number" id="sparkline_bar"></div>
                                        <h3 class="title">Network</h3>
                                    </div>
                                </div>
                                <div class="margin-bottom-10 visible-sm"></div>
                                <div class="margin-bottom-10 visible-sm"></div>
                                <div class="col-sm-6">
                                    <div class="sparkline-chart">
                                        <div class="number" id="sparkline_line"></div>
                                        <h3 class="title">Load Rate</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN Percentage monitor -->
                    <div class="panel green_gradiante_bg ">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="spinner-six" data-size="16" data-loop="false" data-c="#fff" data-hc="white"></i> Result vs Target
                            </h3>
                        </div>
                        <div class="panel-body nopadmar">
                            <div class="row">
                                <div class="col-sm-6 text-center">
                                    <h4 class="small-heading">Sales</h4>
                                    <span class="chart cir chart-widget-pie widget-easy-pie-1" data-percent="45">
                            <span class="percent">45</span>
                                    </span>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-6 text-center">
                                    <h4 class="small-heading">Reach</h4>
                                    <span class="chart cir chart-widget-pie widget-easy-pie-3" data-percent="25">
                            <span class="percent">25</span>
                                    </span>
                                </div>
                                <!-- /.col-sm-4 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- END BEGIN Percentage monitor-->
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="panel panel-success panel-border">
                        <div class="panel-heading  border-light">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Calendar
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div id='external-events'></div>
                            <div id="calendar"></div>
                            <div class="box-footer pad-5">
                                <a href="#" class="btn btn-success btn-block createevent_btn" data-toggle="modal" data-target="#myModal">Create event
                                </a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">
                                                <i class="fa fa-plus" style="margin-top: 8px;"></i> Create Event
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-group">
                                                <input type="text" id="new-event" class="form-control" placeholder="Event">
                                                <div class="input-group-btn">
                                                    <button type="button" id="color-chooser-btn" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                        Type
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" id="color-chooser">
                                                        <li>
                                                            <a class="palette-primary" href="#">Primary</a>
                                                        </li>
                                                        <li>
                                                            <a class="palette-success" href="#">Success</a>
                                                        </li>
                                                        <li>
                                                            <a class="palette-info" href="#">Info</a>
                                                        </li>
                                                        <li>
                                                            <a class="palette-warning" href="#">warning</a>
                                                        </li>
                                                        <li>
                                                            <a class="palette-danger" href="#">Danger</a>
                                                        </li>
                                                        <li>
                                                            <a class="palette-default" href="#">Default</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">
                                                Close
                                                <i class="fa fa-times" style="margin-top: 4px;"></i>
                                            </button>
                                            <button type="button" class="btn btn-success pull-left" id="add-new-event" data-dismiss="modal">
                                                <i class="fa fa-plus" style="margin-top: 5px;"></i> Add
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- To do list -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="panel panel-primary todolist">
                        <div class="panel-heading border-light">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="medal" data-size="18" data-color="white" data-hc="white" data-l="true"></i> Tasks
                            </h4>
                        </div>
                        <div class="panel-body nopadmar">
                            <form class="row list_of_items">
                                <div class="todolist_list showactions">
                                    <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck checkbox-custom">
                                            <input type="checkbox" class="striked large" />
                                        </div>
                                        <div class="todotext todoitem">Meeting with CEO</div>
                                        <span class="label label-default">2016-07-27</span>
                                    </div>
                                    <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                        <a href="#" class="todoedit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <span class="striks">|</span>
                                        <a href="#" class="tododelete redcolor">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck">
                                            <input type="checkbox" class="striked" />
                                        </div>
                                        <div class="todotext todoitem">Team Out</div>
                                        <span class="label label-default">2016-07-27</span>
                                    </div>
                                    <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                        <a href="#" class="todoedit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <span class="striks">|</span>
                                        <a href="#" class="tododelete redcolor">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck">
                                            <input type="checkbox" class="striked" />
                                        </div>
                                        <div class="todotext todoitem">Review On Sales</div>
                                        <span class="label label-default">2016-07-27</span>
                                    </div>
                                    <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                        <a href="#" class="todoedit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <span class="striks">|</span>
                                        <a href="#" class="tododelete redcolor">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck">
                                            <input type="checkbox" class="striked" />
                                        </div>
                                        <div class="todotext todoitem">Meeting with Client</div>
                                        <span class="label label-default">2016-07-27</span>
                                    </div>
                                    <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                        <a href="#" class="todoedit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <span class="striks">|</span>
                                        <a href="#" class="tododelete redcolor">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck">
                                            <input type="checkbox" class="striked" />
                                        </div>
                                        <div class="todotext todoitem">Analysis on Views</div>
                                        <span class="label label-default">2016-07-27</span>
                                    </div>
                                    <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                        <a href="#" class="todoedit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <span class="striks">|</span>
                                        <a href="#" class="tododelete redcolor">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck">
                                            <input type="checkbox" class="striked" />
                                        </div>
                                        <div class="todotext todoitem">Seminar on Market</div>
                                        <span class="label label-default">2016-07-27</span>
                                    </div>
                                    <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                        <a href="#" class="todoedit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <span class="striks">|</span>
                                        <a href="#" class="tododelete redcolor">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck">
                                            <input type="checkbox" class="striked" />
                                        </div>
                                        <div class="todotext todoitem">Business Review</div>
                                        <span class="label label-default">2016-07-27</span>
                                    </div>
                                    <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                        <a href="#" class="todoedit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <span class="striks">|</span>
                                        <a href="#" class="tododelete redcolor">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck">
                                            <input type="checkbox" class="striked" />
                                        </div>
                                        <div class="todotext todoitem">Purchase Equipment</div>
                                        <span class="label label-default">2016-07-27</span>
                                    </div>
                                    <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                        <a href="#" class="todoedit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <span class="striks">|</span>
                                        <a href="#" class="tododelete redcolor">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck">
                                            <input type="checkbox" class="striked" />
                                        </div>
                                        <div class="todotext todoitem">Meeting with CEO</div>
                                        <span class="label label-default">2016-07-27</span>
                                    </div>
                                    <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                        <a href="#" class="todoedit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <span class="striks">|</span>
                                        <a href="#" class="tododelete redcolor">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck">
                                            <input type="checkbox" class="striked" />
                                        </div>
                                        <div class="todotext todoitem">Takeover Leads</div>
                                        <span class="label label-default">2016-07-27</span>
                                    </div>
                                    <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                        <a href="#" class="todoedit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <span class="striks">|</span>
                                        <a href="#" class="tododelete redcolor">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <div class="todolist_list adds">
                                <form role="form" id="main_input_box" class="form-inline">
                                    <div class="form-group">
                                        <label class="sr-only" for="custom_textbox">Add Task</label>
                                        <input id="custom_textbox" name="Item" type="text" required placeholder="Add list item here" class="form-control" />
                                    </div>
                                    <div class="form-group is-empty date_pick">
                                        <label class="sr-only" for="task_deadline">Datepicker</label>
                                        <input class="form-control datepicker" placeholder='Dead line' id="task_deadline" data-date-format="YYYY/MM/DD" required="required" name="task_deadline" type="text">
                                    </div>
                                    <input type="submit" value="Add Task" class="btn btn-primary add_button" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row ">
                <div class="col-md-4 col-sm-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading border-light">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="mail" data-size="18" data-color="white" data-hc="white" data-l="true"></i> Quick Mail
                            </h4>
                        </div>
                        <div class="panel-body no-padding">
                            <div class="compose row">
                                <label class="col-md-3 hidden-xs">To:</label>
                                <input type="text" class="col-md-9 col-xs-9" placeholder="name@email.com " tabindex="1" />
                                <div class="clear"></div>
                                <label class="col-md-3 hidden-xs">Subject:</label>
                                <input type="text" class="col-md-9 col-xs-9" tabindex="1" placeholder="Subject" />
                                <div class="clear"></div>
                                <div class='box-body'>
                                    <form>
                                        <textarea class="textarea textarea_home resize_vertical" placeholder="Write mail content here"></textarea>
                                    </form>
                                </div>
                                <br />
                                <div class="pull-right">
                                    <a href="#" class="btn btn-danger">Send</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="panel panel-border">
                        <div class="panel-heading">
                            <h4 class="panel-title pull-left visitor">
                                <i class="livicon" data-name="map" data-size="16" data-loop="true" data-c="#515763" data-hc="#515763"></i> Visitors Map
                            </h4>
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <i class="livicon" data-name="settings" data-size="16" data-loop="true" data-c="#515763" data-hc="#515763"></i>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a class="panel-collapse collapses" href="#">
                                            <i class="fa fa-angle-up"></i>
                                            <span>Collapse</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="panel-refresh" href="#">
                                            <i class="fa fa-refresh"></i>
                                            <span>Refresh</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="panel-config" href="#panel-config" data-toggle="modal">
                                            <i class="fa fa-wrench"></i>
                                            <span>Configurations</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="panel-expand" href="#">
                                            <i class="fa fa-expand"></i>
                                            <span>Fullscreen</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body nopadmar">
                            <div id="world-map-markers" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
    <!-- right-side -->
</div>
<?php

$this->load->view('includes/footer_view', $javascripts);
?>