

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
         <div class="box box-primary">
           <div class="box-body box-profile">
             <form method="post" action="#">
              <div class="form-group has-feedback">
                 <input type="text" name="name1" class="form-control" required="yes">
                 <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
               </div>
               <div class="col-xs-4">
                <input type="submit" name="submit"  class="form-control">
               </div>
               <!-- /.col -->
             </div>
           </form>
         </div>
       </div>
     </div>
   </section>
   <script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
   <!-- Bootstrap 3.3.6 -->
   <script src="bootstrap/js/bootstrap.min.js"></script>
   <!-- iCheck -->
   <script src="plugins/iCheck/icheck.min.js"></script>

   </body>
   </html>
