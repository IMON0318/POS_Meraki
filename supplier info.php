<?php 

include ('conn.php');

$data = $conn->query("SELECT * FROM client_supplier_tbl WHERE role = 1");



?>

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
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


            
<form action="insert_users.php" method="POST">
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
                      <a href="#" class="btn btn-block bg-dark"><h4>Supplier Information</h4></a>
                    </td>
                     <td>
                      <button type="submit" name="add_user" class="btn btn-block bg-orange">Add Supplier</button>
                    </td>
                    <!-- <td>
                    <a href="#" class="btn btn-block bg-success">Save</a>
                    </td>
                    <td>
                    <a href="#" class="btn btn-block bg-success">Delete</a>
                    </td> -->
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
                    <label for="name" class="col-sm-4 col-form-label bg-olive">Company:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="name" id="name" placeholder="Company">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="address" class="col-sm-4 col-form-label  bg-olive">Address :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="contact_person" class="col-sm-4 col-form-label  bg-olive">Contact Person:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="contact_person" id="contact_person" placeholder="Contact Person">
                    </div>
                  </div>
                </div>

            <div class="col-sm-4">
              <div class="form-group row">
                    <label for="contact_no" class="col-sm-4 col-form-label bg-olive">Contact NO. :</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="contact_no" id="contact_no" placeholder="Contact Number">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label  bg-olive">Email:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tin_no" class="col-sm-4 col-form-label  bg-olive">T.I.N No.:</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="tin_no" id="tin_no" placeholder="T.I.N No." maxlength="19">
                    </div>
                  </div>
                      <input style="display: none;" type="number" class="form-control" id="role" name="role" value="1">
                </div><!-- end of col-sm-4 -->


          
             </div>
              

             
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="bg-success disabled">Company</th>
                    <th class="bg-success disabled">Address</th>
                    <th class="bg-success disabled">Contact Person</th>
                    <th class="bg-success disabled">Contact No.</th>
                    <th class="bg-success disabled">Email</th>
                    <th class="bg-success disabled">T.I.N No.</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $row): ?>
                  <tr>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['contact_person']; ?></td>
                  <td><?php echo $row['contact_no']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['tin_no']; ?></td>
                  </tr>
                  <?php endforeach; ?>
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

    </form>

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
