

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
                      <a href="#" class="btn btn-block btn-dark"><h4>Purchase</h4></a>
                    </td>
                    <td>
                      <a href="purchase.php" class="btn btn-block bg-success">New Transaction</a>
                    </td>
                    <td>
                    <a href="summary purchase.php" class="btn btn-block bg-orange">Summary Report</a>
                    </td>
                    
                  </tr> 

                </table>
              </div>
              <!-- /.card -->


<!-- CONTENT para sa inputs -->


<div class="card-body pad table-responsive">
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-1 col-form-label bg-olive">From :</label>
                    <div class="col-sm-2">
                      <input type="date" class="form-control" id="inputEmail3" placeholder="Date">
                    </div>
                  
                    <label for="inputEmail3" class="col-sm-1 col-form-label bg-olive">To :</label>
                    <div class="col-sm-2">
                      <input type="date" class="form-control" id="inputEmail3" placeholder="Date">
                    </div>
                  </div>
</div>
              
              

                 
             
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="bg-success disabled">DATE</th>
                    <th class="bg-success disabled">SI/DR</th>
                    <th class="bg-success disabled">CLIENT NAME</th>
                    <th class="bg-success disabled">QTY</th>
                    <th class="bg-success disabled">OUM</th>
                    <th class="bg-success disabled">ITEM DESCRIPTION</th>
                    <th class="bg-success disabled">P.O.#</th>
                    <th class="bg-success disabled">PRICE</th>
                    <th class="bg-success disabled">TOTAL AMOUNT</th>
                    <th class="bg-success disabled">TERMS</th>
                    <th class="bg-success disabled">DATE PAID</th>
                    <th class="bg-success disabled">CR/PR/AR</th>
                    <th class="bg-success disabled">MOP</th>
                    <th class="bg-success disabled">CHEQUE /REF NO.</th>
                    <th class="bg-success disabled">REMARKS</th>
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
                    <td></td>
                    <td></td>
                    <td></td>
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
                    <td></td>
                    <td></td>
                    <td></td>
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
                    <td></td>
                    <td></td>
                    <td></td>
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
                    <td></td>
                    <td></td>
                    <td></td>
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
                    <td></td>
                    <td></td>
                    <td></td>
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



            <div class="modal-footer left-content">
                   
                   <button type="button" class="btn btn-success btn-md" data-dismiss="modal">Print</button>
                   <button type="button" class="btn btn-success btn-md" data-dismiss="modal">Delete</button>
                   

               </div>

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
