<?php
// configs
include_once 'requires.php';
?>
<html>
<?php
// templates
include 'header_template.php';
?>
<body class="hold-transition skin-red sidebar-mini">
    <!-- content -->
    <div class="wrapper">
        <?php include 'navbar_header_template.php'?>
        <?php include 'navbar_template.php' ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                <small><h4>Ayuda</h4></small>
              </h1>
                <!--------------------------
                  | Your Page Content Here |
                  -------------------------->

<div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-video-camera bg-maroon"></i>

              <div class="timeline-item">
               <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

                <div class="timeline-body">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" frameborder="0" allowfullscreen=""></iframe>
                  </div>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
        </div>
        <!-- /.col -->
      </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include 'footer_template.php'?>
    </div>
</body>
<?php
// templates
include 'scripts_template.php';

?>
</html>