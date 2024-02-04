<?php 

include ('conn.php');

$data = $conn->query("SELECT * FROM client_supplier_tbl WHERE role = 2");
$uom = $conn->query("SELECT * FROM uom_data");
$terms = $conn->query("SELECT * FROM terms_data");



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
                      <a href="#" class="btn btn-block bg-dark"><h4>PURCHASE</h4></a>
                    </td>
                    <td>
                      <a href="purchase.php" class="btn btn-block bg-orange">New Transaction</a>
                    </td>
                    <td>
                    <a href="summary purchase.php" class="btn btn-block bg-success">Summary Report</a>
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
                    <label for="inputEmail3" class="col-sm-4 col-form-label bg-olive">Date :</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" id="inputEmail3" placeholder="Datex" value="<?php echo date('Y-d-m'); ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">SI/DR :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="SI/DR">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="clients" class="col-sm-4 col-form-label bg-olive">Client Name:</label>
                    <div class="col-sm-6">
                      <!-- <input type="text" class="form-control" id="inputEmail3" placeholder="Client Name"> -->
                      <select name="clients" id="clients" class="form-control" required>
                      <?php
                        if ($data->num_rows > 0) {
                            echo '<option value="">Select Client</option>';
                            while ($row = $data->fetch_assoc()) {
                                echo '<option value="' . $row['Id_client_sup'] . '">' . $row['name'] . '</option>';
                            }
                        } else {
                            echo '<option value="">No Clients Found</option>';
                        }
                        ?>
                    </select>

                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label bg-olive">Qty:</label>
                    <div class="col-sm-6">
                      <input type="number" class="qty form-control" id="qty" placeholder="Qty" oninput="calculate()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">UOM:</label>
                    <div class="col-sm-6">
                    <div class="form-input">
                    <select name="uom_selct" id="uom_select" class="form-control" required>
                    <?php
                        if ($uom->num_rows > 0) {
                            echo '<option value="">Select Client</option>';
                            while ($row = $uom->fetch_assoc()) {
                                echo '<option value="' . $row['uom_id'] . '">' . $row['uom_name'] . '</option>';
                            }
                        } else {
                            echo '<option value="">No Clients Found</option>';
                        }
                      ?>
                      <option value="others">others</option>
                     </select>
                  </div>
                    </div>
                  </div>


                  <!-- Modal for UOM -->
                <div class="modal fade" id="uommodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add UOM</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="">
                          <input name="uom_id" id="uom_id" class="form-control" id="recipient-name" hidden>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">UOM Name</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                 
            
                </div>

            <div class="col-sm-4">
              <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label bg-olive">Description :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Item Description">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">P.O.# :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="P.O.#">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Price:</label>
                    <div class="col-sm-6">
                      <input type="number" class="price form-control" id="price" placeholder="Price" oninput="calculate()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive" >Total Amount:</label>
                    <div class="col-sm-6">
                      <input type="text" class="total form-control" id="total" placeholder="₱" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Terms:</label>
                    <div class="col-sm-6">
                    <div class="form-input">
                    <select name="terms_select" id="terms_select" class="form-control" required>
                    <?php
                        if ($terms->num_rows > 0) {
                            echo '<option value="">Select Client</option>';
                            while ($row = $terms->fetch_assoc()) {
                                echo '<option value="' . $row['terms_id'] . '">' . $row['terms_name'] . '</option>';
                            }
                        } else {
                            echo '<option value="">No Clients Found</option>';
                        }
                      ?>
                      <option value="others">others</option>
                     </select>
                  </div>
                    </div>
                  </div>
                </div><!-- end of col-sm-4 -->
                
                <!-- Modal for terms -->
                <div class="modal fade" id="termsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Terms</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <input name="terms_id" id="terms_id" class="form-control" id="recipient-name" hidden>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Terms Name</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                


            <div class="col-sm-4">

              <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Date Paid :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Date Paid">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label bg-olive">CR/PR/AR :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="CR/PR/AR">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">MOP:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="MOP">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label  bg-olive">Cheque/Ref. No.:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Cheque/ Ref. No.">
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
                    <th class="bg-success disabled">COST</th>
                    <th class="bg-success disabled">PROFIT</th>
                    <th class="bg-success disabled">TOTAL PROFIT</th>
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

<script>
  function calculate() {
    var qty =parseFloat(document.getElementById("qty").value);
    var price =parseFloat(document.getElementById("price").value);

    var result = "₱" + qty * price;

    document.getElementById('total').value = result;

  }

  
</script>

<script>
  document.getElementById('terms_select').addEventListener('change', function() {
    var selectedOption = this.value;
    if (selectedOption === 'others') {
      $('#termsmodal').modal('show');
    }
  });

  document.getElementById('uom_select').addEventListener('change', function() {
    var selectedOption = this.value;
    if (selectedOption === 'others') {
      $('#uommodal').modal('show');
    }
  });

  
</script>


<?php include 'includes/script.php';?>


</body>
</html>
