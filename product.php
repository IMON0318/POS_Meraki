

<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/header.php';?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

<?php include 'includes/nav.php'; ?>
<?php include 'includes/sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">SALES</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


            

       <!-- Main content -->
    <section class="content">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success card-outline">
             
              <div class="card-body pad table-responsive">
               <table>
              <tr>

                   <td>
                      <a href="sale.php" class="btn btn-block bg-dark"><h4>Product</h4></a>
                    </td>
                     <td>
                      <a href="sale.php" class="btn btn-block bg-orange">Add Product List</a>
                    </td>
                    <td>
                    <a href="#" class="btn btn-block bg-success">Save</a>
                    </td>
                    <td>
                    <a href="#" class="btn btn-block bg-success">Delete</a>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.card -->


<!-- CONTENT para sa inputs -->
                <div class="modal-body">
                  <form  method="POST">
                    <div class="row">
                      <div class="col-sm-4">

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label bg-olive">Brand:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Brand">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Item Description :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Packing Type">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Packing Type:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Packing Type">
                    </div>
                  </div>

                 
            
                </div>

            <div class="col-sm-4">
              <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label bg-olive">OUM :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="OUM">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Expiration Date:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Expiration date">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Unit Price:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Unit Price">
                    </div>
                  </div>

                  
                </div><!-- end of col-sm-4 -->


          
             </div>
              

             
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="bg-success disabled">Brand</th>
                    <th class="bg-success disabled">Item Description</th>
                    <th class="bg-success disabled">Packing Type</th>
                    <th class="bg-success disabled">UOM</th>
                    <th class="bg-success disabled">Expiration Date</th>
                    <th class="bg-success disabled">Unit Price</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                  </tr>
                  <tr>
                  <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                  </tr>
                  <tr>
                  <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   
                  </tr>
                  <tr>
                  <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   
                  </tr>
                  <tr>
                  <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



            </form>



            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->



       

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /. row -->
      </div><!-- /.container-fluid -->
   </section>
    <!-- /.content -->




    














  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <?php include 'includes/footer.php';?>
</div>
<!-- ./wrapper -->

<?php include 'includes/script.php';?>
</body>
</html>
