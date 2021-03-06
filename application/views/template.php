
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>AKSI | <?php echo $title; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url('assets/styles/font-awesome-4.3.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons 
    <link href="<?php echo base_url('assets/'); ?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="<?php echo base_url('assets/dist/css/skins/skin-green.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Datatables -->
    <link href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Magnific Popup -->
    <link href="<?php echo base_url('assets/plugins/magnific-popup/magnific-popup.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Notyfy -->
    <link href="<?php echo base_url('assets/plugins/notyfy/jquery.notyfy.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/plugins/notyfy/themes/default.css'); ?>" rel="stylesheet" type="text/css">
    <!--Datepicker-->
    <link href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Tumbas -->
    <link href="<?php echo base_url('assets/styles/tumbas.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/plugins/magnific-popup/magnific-popup-anim.css'); ?>" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <!-- SLim Scroll -->
    <script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js'); ?>" type="text/javascript"></script>
    <!-- Magnific -->
    <script src="<?php echo base_url('assets/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>" type="text/javascript"></script>
    <!-- Notyfy -->
    <script src="<?php echo base_url('assets/plugins/notyfy/jquery.notyfy.js'); ?>" type="text/javascript"></script>
    <!--Datepicker-->
    <script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/datepicker/locales/bootstrap-datepicker.id.js'); ?>" type="text/javascript"></script>
    <!-- JQuery Validation -->
    <script src="<?php echo base_url('assets/plugins/jquery-validation-1.13.1/jquery.validate.min.js'); ?>" type="text/javascript"></script>
    <!-- Input Mask -->
    <script src="<?php echo base_url('assets/plugins/jquery.inputmask-3.x/inputmask/inputmask.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery.inputmask-3.x/inputmask/jquery.inputmask.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery.inputmask-3.x/inputmask/inputmask.numeric.extensions.min.js'); ?>" type="text/javascript"></script>
    <!-- Number Format -->
    <script src="<?php echo base_url('assets/scripts/number_format.js'); ?>" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>" type="text/javascript"></script>
    <!-- Tumbas App -->
    <script src="<?php echo base_url('assets/scripts/tumbas.js'); ?>" type="text/javascript"></script>

  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="skin-green sidebar-mini sidebar-collapse">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b><i class="fa fa-desktop"></i></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b><i class="fa fa-desktop"></i> AKSI </b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <span style="font-size: 18px; color: white; line-height: 50px; text-spacing: trim-start;">
            Aplikasi Koperasi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-calendar"></i> <?php echo sql_to_human(date('Y-m-d')); ?>
          </span>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!--
              <!-- Messages: style can be found in dropdown.less-->
              <!--              <li class="dropdown messages-menu">
                               Menu toggle button 
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                   inner menu: contains the messages 
                                  <ul class="menu">
                                    <li> start message 
                                      <a href="#">
                                        <div class="pull-left">
                                           User Image 
                                          <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image"/>
                                        </div>
                                         Message title and timestamp 
                                        <h4>
                                          Support Team
                                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                         The message 
                                        <p>Why not buy a new awesome theme?</p>
                                      </a>
                                    </li> end message 
                                  </ul> /.menu 
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                              </ul>
                            </li> /.messages-menu 
              
                             Notifications Menu 
                            <li class="dropdown notifications-menu">
                               Menu toggle button 
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                   Inner Menu: contains the notifications 
                                  <ul class="menu">
                                    <li> start notification 
                                      <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                      </a>
                                    </li> end notification 
                                  </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                              </ul>
                            </li>
                             Tasks Menu 
                            <li class="dropdown tasks-menu">
                               Menu Toggle Button 
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                   Inner menu: contains the tasks 
                                  <ul class="menu">
                                    <li> Task item 
                                      <a href="#">
                                         Task title and progress text 
                                        <h3>
                                          Design some buttons
                                          <small class="pull-right">20%</small>
                                        </h3>
                                         The progress bar 
                                        <div class="progress xs">
                                           Change the css width attribute to simulate progress 
                                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">20% Complete</span>
                                          </div>
                                        </div>
                                      </a>
                                    </li> end task item 
                                  </ul>
                                </li>
                                <li class="footer">
                                  <a href="#">View all tasks</a>
                                </li>
                              </ul>
                            </li>-->
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo $this->session->userdata('full_name'); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $this->session->userdata('full_name'); ?> - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url('logout'); ?>" class="btn btn-default"><i class="fa fa-sign-out"></i> Keluar</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!--              <li>
                              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>-->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <!--          <div class="user-panel">
                      <div class="pull-left image">
                        <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image" />
                      </div>
                      <div class="pull-left info">
                        <p>Alexander Pierce</p>
                         Status 
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                      </div>
                    </div>
          
                     search form (Optional) 
                    <form action="#" method="get" class="sidebar-form">
                      <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                        <span class="input-group-btn">
                          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                      </div>
                    </form>-->
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <!--<ul class="sidebar-menu">-->
          <?php
//          echo $menu;
//
          $id = '';
          echo "<ul class='sidebar-menu'>";
          foreach ($menu as $item) {
            $active = '';
//              die($segment);
            $menu_url = base_url($item['menu_url']);
            if ($item['parent_id'] == 0) {
              if ($segment1 == $item['menu_url']) $active = 'active';
              echo "<li class='treeview {$active}'>
              <a href='{$menu_url}'>
                <i class='fa {$item['menu_icon']}'></i> <span>{$item['menu_name']}</span> <i class='fa fa-angle-left pull-right'></i>
              </a>";
              $id = $item['menu_id'];
              foreach ($menu as $value) {
                if ($value['parent_id'] == $id) {
                  sub($menu, $id, $segment1, $segment2);
                  break;
                };
              }
              echo "</li>";
            }
          }
          echo "</ul>";

//          }

          function sub($items, $id, $segment1, $segment2) {
            echo "<ul class='treeview-menu'>";
            foreach ($items as $item) {
              if ($item['parent_id'] == $id) {
                $active = '';
                if ("{$segment1}/{$segment2}" == $item['menu_url']) $active = 'class="active"';
                $menu_url = base_url($item['menu_url']);
                echo "<li {$active}>
              <a href='{$menu_url}'>
                <i class='fa {$item['menu_icon']}'></i>{$item['menu_name']}
              </a>";
                foreach ($items as $value) {
                  if ($value['parent_id'] == $item['menu_id']) {
                    sub($items, $item['menu_id'], $segment1, $segment2);
                    break;
                  }
                }
                echo "</li>";
              }
            }
            echo "</ul>";
          }

//          function display_children($parent, $level) {
//            $result = mysql_query("SELECT a.id, a.title, a.link, Deriv1.Count FROM `menu` a  LEFT OUTER JOIN (SELECT parent, COUNT(*) AS Count FROM `menu` GROUP BY parent) Deriv1 ON a.id = Deriv1.parent WHERE a.parent=" . $parent);
//            echo "<ul>";
//            while ($row = mysql_fetch_array($result)) {
//              if ($row['Count'] > 0) {
//                echo "<li><a href='" . $row['link'] . "'>" . $row['title'] . "</a>";
//                display_children($row['id'], $level + 1);
//                echo "</li>";
//              } elseif ($row['Count'] == 0) {
//                echo "<li><a href='" . $row['link'] . "'>" . $row['title'] . "</a></li>";
//              }
//              
//                else;
//            }
//            echo "</ul>";
//          }
//
//          display_children(0, 1);
          ?>
          <!--            <li class="header">HEADER</li>
                       Optionally, you can add icons to the links 
                      <li class=""><a href="#"><i class='fa fa-link'></i> <span>Link</span></a></li>
                      <li><a href="#"><i class='fa fa-link'></i> Another Link</a></li>
                      <li class="treeview active">
                        <a href="#"><i class='fa fa-link'></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                          <li class="active"><a href="#">Link in level 2</a></li>
                          <li><a href="#">Link in level 2</a></li>
                        </ul>
                      </li>-->
          <!--</ul>--> 
          <!--          /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="overflow-y: auto; height: 200px">

        <!-- Content Header (Page header) -->
<!--        <section class="content-header">
          <h1>
<?php echo $page_header; ?>
            <small><?php echo $page_header_desc; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>-->

        <!-- Main content -->
        <section class="content">
          <?php
          $data_loading_text = '';
          $this->load->view($content);
          ?>
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <!--<footer class="main-footer text-right">-->
      <!-- Default to the left -->
      <!--        .:: iCos | Copyleft &copy; 2015 |<a href="http://www.gincusoft.com">  Gincusoft</a> ::.
            </footer>-->

      <!-- Control Sidebar -->      
      <aside class="control-sidebar control-sidebar-dark">                
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class='control-sidebar-menu'>
              <li>
                <a href='javascript::;'>
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>              
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3> 
            <ul class='control-sidebar-menu'>
              <li>
                <a href='javascript::;'>               
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>                                    
                </a>
              </li>                         
            </ul><!-- /.control-sidebar-menu -->         

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">            
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
    <script>
      $(document).ready(function() {
        $('.table tbody, .table tfoot').on('click', 'tr', function() {
          $(this).siblings().css('background-color', '');
          $(this).css('background-color', '#f5f5f5');
        });

<?php if ($this->session->flashdata('first_login')) { ?>
          showSplashScreen('<?php echo base_url('setting/main/splash_screen'); ?>');
          setTimeout(function() {
            closeModal()
          }, 5000)
<?php } ?>

      });
    </script>
  </body>
</html>