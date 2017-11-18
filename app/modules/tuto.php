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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Areas</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Descripción</th></tr>
                </thead>
                <tbody>           
                
                  <tr role="row" class="odd">
                  <td >Gecko</td>
                  <td>Firefox 1.0</td>
                  </tr>
                  <tr role="row" class="even">
                  <td >Gecko</td>
                  <td>Firefox 1.5</td>
                  </tr>
                </tbody>
              </table></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         <!-- /.box -->
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