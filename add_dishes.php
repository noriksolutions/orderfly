<script type="text/javascript">
function validate(evt){
     evt.value = evt.value.replace(/[^0-9]/g,"");
}

</script>



<?php include "connection.php";
date_default_timezone_set('Asia/Kolkata');$date2=date('Y-m-d');
session_start();
$user2=$_SESSION['username'];
if($user2 == '')
{
  header('location:404.html');
}
else {

 ?>
<?php include("inc/header.php");?>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user2; ?></p>
<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <?php
      $query=mysqli_query($conn,"select emailid,status from user where emailid='$user2'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query))
      {
        if($row['status'] == 0){
          include("inc/sidebar_admin.php");
        }
        else if($row['status'] == 1){
          include("inc/sidebar.php");
        }else{
          echo "<script type='text/javascript'>alert('unable to load sidebar at this moment');</script>";
        }
      }
        ?>
  </section>
  <!-- /.sidebar -->
</aside>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Dishes
      <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

      <li class="active">Add Dishes</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Dishes</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form role="form" method="post" action="dishes_code.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Dish name</label>
                  <input type="text" class="form-control" name="dishname" id="exampleInputEmail1" placeholder="Dish Name" required="yes">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Dish Price</label>
                  <input type="number" class="form-control" onkeypress="validate(event)" name="price" id="exampleInputEmail1" placeholder="Price" required="yes">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea name="description" style="width: 1599px; height: 196px;" id="exampleInputEmail1" placeholder="Description" required="yes"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" name="image1" id="exampleInputFile">

                                 </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Dishes</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>sno</tsh>
                <th>Dishes Names</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>QR Code</th>
              </tr>
              </thead>
              <tbody>

          <?php include "functions.php"; ?>

              </tbody>
              <tfoot>
              <tr>
                <th>sno</tsh>
                <th>Dishes Names</th>
                <th>Price</th>
                <th>Description</th>
                <th>image</th>
                <th>QR Code</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

  <!-- /.row -->





<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->




<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php } ?>
<?php include('inc/footer.php'); ?>
