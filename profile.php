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
      $query=mysqli_query($conn,"select emailid,status,dis_status from restaurants where emailid='$user2'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query))
      {
        if($row['status'] == 0 && $row['dis_status'] == 0){
          include("inc/sidebar_admin.php");
        }
        else if($row['status'] == 1 && $row['dis_status'] == 0){
          include("inc/sidebar.php");
        }else{
          // echo "<script type='text/javascript'>alert('unable to load sidebar at this moment');</script>";
          header('location:404.html');
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
      User Profile
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

      <li class="active">User profile</li>
    </ol>
  </section>
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="dist/img/user2-160x160.jpg" alt="User profile picture">
<?php
$query2=mysqli_query($conn,"select * from restaurants where emailid='$user2'");
while($row=mysqli_fetch_array($query2))
{
?>


            <h3 class="profile-username text-center"><?php $rest= $row['rest_name']; echo $rest; ?> <a href="edit1.php?id=1"><i class="fa fa-fw fa-edit"></i></a></h3>


            <p class="text-muted text-center"><?php $phn=$row['phoneno']; echo $phn; ?> <a href="edit1.php?id=2"><i class="fa fa-fw fa-edit"></i></a></p>


            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Emailid</b> <a class="pull-right"><?php $email=$row['emailid']; echo $email;?></a>

              </li>
              <li class="list-group-item">
                <b>Phone</b> <a class="pull-right"><?php $phn=$row['phoneno']; echo $phn; ?></a>

              </li>
              <li class="list-group-item">
                <b>address</b> <a class="pull-right"><?php $add=$row['address']; echo $add; ?><a href="edit1.php?id=5"><i class="fa fa-fw fa-edit"></i></a></a>

              </li>
            </ul>



            <!-- <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a> -->
          </div>
          <!-- /.box-body -->
        </div>
      </div>



      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <h1> QRCODE </h1>
            <?php
            function printQRCode($url, $size = 200) {
              return '<img src="http://chart.apis.google.com/chart?chs=' . $size . 'x' . $size . '&cht=qr&chl=' . urlencode($url) . '" />';
            }
          //  $data=$row['rest_name'].$row['phone'].$row['address'];
            //echo "helloworld";
            $data= $rest."\n".$phn."\n".$email."\n".$add;
            //echo $data;
            echo printQRCode($data);
            ?>
            <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
          </div>
          <!-- /.box-body -->
        </div>
      </div>
<?php } ?>



  <!-- /.content -->
</div>

  <!-- /.row -->
</section>





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
