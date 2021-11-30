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
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <form role="form" action='proupdatehandler.php' method='POST' enctype='multipart/form-data'>
    <?php 
    $newid = $_GET['up_id'];
    include('../partials/connect.php');
    $sql = "SELECT * from products WHERE id='$newid'";
    $results = $connect->query($sql);
    $final = $results->fetch_assoc();
    ?>
      <h1>Products</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter product name" value="<?php echo $final['name']?>" name="name">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter Price" value="<?php echo $final['price']?>" name="price">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" name="file" value="<?php echo $final['picture']?>">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" row="10" placeholder="Enter description" value="<?php echo $final['description']?>" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" value="<?php echo $final['category']?>" name="category">
                      <?php
                      $cat = 'SELECT * from categories';
                      $result = mysqli_query($connect,$cat);
                      while($row=mysqli_fetch_assoc($result)){
                        echo "<option value=".$row['id'].">".$row['name']."</option>";
                      }
                      ?>
                    </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <input type="hidden" name="form_id" value="<?php echo $final['id']?>"  >
                <button type="submit" class="btn btn-primary" name="update">Update</button>
              </div>
            </form>
            </div>
            </div>
            <div class="col-sm-3"></div>
    </div>
    <!-- /.content-wrapper -->
    <?php
  
  include("adminpartials/footer.php");
  ?>
</body>

</html>


