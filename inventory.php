

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
                      <a href="#" class="btn btn-block bg-dark"><h4>Inventory</h4></a>
                    </td>
                    <td>
                      <a href="inventory.php" class="btn btn-block bg-orange">New Transaction</a>
                    </td>
                    <td>
                    <a href="summary.php" class="btn btn-block bg-success">Summary Report</a>
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
                    <label for="inputEmail3" class="col-sm-4 col-form-label bg-olive">Item Code :</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" id="inputEmail3" placeholder="Item Code">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Brand:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Brand">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Item Description:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Item Description">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive"> Packing Type :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="PAcking Type">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">UOM:</label>
                    <div class="col-sm-6">
                    <div class="form-input">
                    <select name="purpose" class="form-control" required>
                      <option  value=""></option>
                        <option value="Seminar/ Meeting">Bot</option>
                        <option  value="">Box</option>
                        <option  value="">Bundle</option>
                        <option  value="">Case</option>
                        <option  value="">MB</option>
                        <option  value="">Pack</option>
                        <option  value="">PC's</option>
                        <option  value="">Roll</option>
                        <option  value="">Set</option>
                        <option  value="">Tray</option>
                        <option  value="">Tube</option>
                        <option  value="">Unit</option>
                        <option  value="">Vial</option>
                      
                     </select>
                  </div>
                    </div>
                  </div>
                 
            
                </div>

            <div class="col-sm-4">
              <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label bg-olive">Expiry Date:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Expiry Date">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive"> Lot#:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Lot#">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive"> Serial No. :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="PSerial No.">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Cost:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Cost">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Price:</label>
                    <div class="col-sm-6">
                    <div class="form-input">
                    <select name="purpose" class="form-control" required>
                      <option  value=""></option>
                        <option value="Seminar/ Meeting">Cash</option>
                        <option  value="">COD</option>
                        <option  value="">Gcash</option>
                        <option  value="">Bank Transfer</option>
                        <option  value="">7 Days</option>
                        <option  value="">30 Days</option>
                        <option  value="">60 Days</option>
    
                     </select>
                  </div>
                    </div>
                  </div>
                </div><!-- end of col-sm-4 -->


            <div class="col-sm-4">

              <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">In-Stock :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="In-Stocks">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label bg-olive">Out-Stocks :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Out-Stock">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Re-Order Level:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Re-Order Level">
                    </div>
                  </div>
                  

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Remarks:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Remarks">
                    </div>
                  </div>

                   
                </div>

             </div>
              

             
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="bg-success disabled">Item Code</th>
                    <th class="bg-success disabled">Brand</th>
                    <th class="bg-success disabled">Item Description</th>
                    <th class="bg-success disabled">Packing Type</th>
                    <th class="bg-success disabled">OUM</th>
                    <th class="bg-success disabled">Expiry Date</th>
                    <th class="bg-success disabled">Lot#</th>
                    <th class="bg-success disabled">Serial No.</th>
                    <th class="bg-success disabled">Cost</th>
                    <th class="bg-success disabled">Price</th>
                    <th class="bg-success disabled">In-Stocks</th>
                    <th class="bg-success disabled">Out-Stocks</th>
                    <th class="bg-success disabled">Re-Order Level</th>
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
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



            <div class="modal-footer">
                   <button type="button" class="btn btn-success btn-md" data-dismiss="modal">Save</button>
                   <button type="button" class="btn btn-success btn-md" data-dismiss="modal">Print</button>
                   <button type="button" class="btn btn-success btn-md">Delete</button>
                   
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label ">From :</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="inputEmail3" placeholder="Date">
                    </div>
                  
                    <label for="inputEmail3" class="col-sm-2 col-form-label ">To :</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="inputEmail3" placeholder="Date">
                    </div>

                    <label for="inputEmail3" class="col-sm-2 col-form-label bg-olive">search</label>
                  </div>
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
