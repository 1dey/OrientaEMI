<?php
// configs
include_once 'requires.php';
?>
<html>
<?php
// templates
include 'header_template.php';
?>
<body class="hold-transition skin-yellow sidebar-mini">
    <!-- content -->
    <div class="wrapper">
        <?php include 'navbar_header_template.php'?>
        <?php include 'navbar_template.php' ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                <small><h4>OrientaEMI Ayuda</h4></small>
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
              <i class="fa fa-user bg-aqua"></i>

              <div class="timeline-item">
               <h3 class="timeline-header"><a href="#">Manual de usuario</a></h3>

                <div class="timeline-body">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://onedrive.live.com/embed?cid=F4806BB4061355E7&resid=F4806BB4061355E7%21243&authkey=AF_2CgTp_e7qc_c&em=2" width="400" height="200" frameborder="0" scrolling="no"></iframe>
                  </div>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
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
