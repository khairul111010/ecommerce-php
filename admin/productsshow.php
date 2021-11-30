<!DOCTYPE html>
<html>
<?php

include("adminpartials/sessions.php");
include("adminpartials/head.php");
?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php
include("adminpartials/header.php");
include("adminpartials/aside.php");
?>
    <!-- Left side column. contains the logo and sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      <!-- form -->

      <?php
                include('../partials/connect.php');
                $sql = "SELECT * from products";
                $resutls = $connect->query($sql);
                while($final = $resutls->fetch_assoc()){?>
                <a href="proshow.php?pro_id=<?php echo $final['id']?>">
                    <h3><?php echo $final['id'] ?>: <?php echo $final['name']?></h3>
                    <hr><br></a>

                    <?php }
                
                
                ?>





    </div>
    <!-- /.content-wrapper -->
    <?php
  
  include("adminpartials/footer.php");
  ?>
</body>

</html>