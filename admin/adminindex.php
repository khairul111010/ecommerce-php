<!DOCTYPE html>
<html>
<?php
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



      <form>
        <div class="container" style="margin-top: 20px;" action="producthandler.php" method="post"
          enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Product Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Product Name">
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input name="price" type="text" class="form-control" id="price" placeholder="Enter Price">
          </div>
          <div class="form-group">
          <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
          </div>
          <div class="form-group">
            <label for="description">Product Description</label>
            <textarea name="description" class="form-control" id="description" rows="3"
              placeholder="Enter Product Description"></textarea>
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" name="category">
              <option>Shirt</option>
              <option>Pants</option>
            </select>
          </div>
        </div>
        <button type="submit">Submit</button>
      </form>



    </div>
    <!-- /.content-wrapper -->
    <?php
  
  include("adminpartials/footer.php");
  ?>
</body>

</html>