<?php 

include ('conn.php');

$data = $conn->query("SELECT * FROM client_supplier_tbl WHERE role = 1");
$uom = $conn->query("SELECT * FROM uom_data");
$terms = $conn->query("SELECT * FROM terms_data");

$purchase_data = $conn->query("SELECT 
purchase.terms_id,
terms_data.terms_name,
purchase.uom_id,
uom_data.uom_name,
purchase.Id_client_sup,
client_supplier_tbl.client_sup_name,
purchase.*
FROM 
purchase
INNER JOIN 
terms_data ON purchase.terms_id = terms_data.terms_id
INNER JOIN 
uom_data ON purchase.uom_id = uom_data.uom_id
INNER JOIN
client_supplier_tbl on purchase.Id_client_sup = client_supplier_tbl.Id_client_sup;
");
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


<!-- start form -->

<form action="insert_terms_uom.php" method="post">

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
                      <button type="submit" name="new_transac" id="new_transac" class="btn btn-block bg-orange">New Transaction</button>
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
                    <div class="row">
                      <div class="col-sm-4">

                  <div class="form-group row">
                    <label for="date" class="col-sm-4 col-form-label bg-olive">Date :</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" name="date_include" id="date_include" placeholder="Date" value="<?php echo date('Y-d-m'); ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="invoice" class="col-sm-4 col-form-label  bg-olive">SI/DR :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="invoice" id="invoice" placeholder="SI/DR" value="<?php $invoice_id = rand(0,10); $invoice = date('y').date('m').str_pad($invoice_id,3,'0',STR_PAD_LEFT).date('d'); echo $invoice; ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="clients" class="col-sm-4 col-form-label bg-olive">Supplier Name:</label>
                    <div class="col-sm-6">
                      <!-- <input type="text" class="form-control" id="inputEmail3" placeholder="Client Name"> -->
                      <select name="suppliers" id="suppliers" class="form-control">
                      <?php
                        if ($data->num_rows > 0) {
                            echo '<option value="">Select Supplier</option>';
                            while ($row = $data->fetch_assoc()) {
                                echo '<option value="' . $row['Id_client_sup'] . '">' . $row['client_sup_name'] . '</option>';
                            }
                        } else {
                            echo '<option value="">No Clients Found</option>';
                        }
                        ?>
                    </select>

                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="qty" class="col-sm-4 col-form-label bg-olive">Qty:</label>
                    <div class="col-sm-6">
                      <input type="number" step=".01" class="qty form-control" name="qty" id="qty" placeholder="Qty" oninput="calculate()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="uom_select" class="col-sm-4 col-form-label  bg-olive">UOM:</label>
                    <div class="col-sm-6">
                    <div class="form-input">
                    <select name="uom_select" id="uom_select" class="form-control">
                    <?php
                        if ($uom->num_rows > 0) {
                            echo '<option value="">Select UOM</option>';
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
              <form action="insert_terms_uom.php" method="post">
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
                  
                        <div class="form-group">
                          <label for="uom_name" class="col-form-label">UOM Name</label>
                          <input type="text" name="uom_name"  class="form-control" id="uom_name">
                        </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="add_uom" name="add_uom" class="btn btn-primary">Save changes</button>
                      </div>
                </form>
                    </div>
                  </div>
                </div>
                </div>

              

            <div class="col-sm-4">
              <div class="form-group row">
                    <label for="desc" class="col-sm-4 col-form-label bg-olive">Description :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="desc" id="desc" placeholder="Item Description">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="p_o" class="col-sm-4 col-form-label  bg-olive">P.O.# :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="p_o" id="p_o" placeholder="P.O.#">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="price" class="col-sm-4 col-form-label  bg-olive">Price:</label>
                    <div class="col-sm-6">
                      <input type="number" step=".01" class="price form-control" name="price" id="price" placeholder="Price" oninput="calculate()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="total_amount" class="col-sm-4 col-form-label  bg-olive" >Total Amount:</label>
                    <div class="col-sm-6">
                      <input type="text" step=".01" class="total form-control" name="total_amount" id="total_amount" placeholder="₱">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="terms" class="col-sm-4 col-form-label  bg-olive">Terms:</label>
                    <div class="col-sm-6">
                    <div class="form-input">
                    <select name="terms_select" id="terms_select" class="form-control">
                    <?php
                        if ($terms->num_rows > 0) {
                            echo '<option value="">Select Terms</option>';
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
          <form action="insert_terms_uom.php" method="post">
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
                        <div class="form-group">
                          <label for="terms-name" class="col-form-label">Terms Name</label>
                          <input type="text" class="form-control" name="terms_name" id="terms_name">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="add_terms" id="add_terms" class="btn btn-primary" value="add_terms">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>  


            <div class="col-sm-4">

              <div class="form-group row">
                    <label for="date_paid" class="col-sm-4 col-form-label  bg-olive">Date Paid :</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" name="date_paid" id="date_paid" placeholder="Date Paid">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="CR" class="col-sm-4 col-form-label bg-olive">CR/PR/AR :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="CR" id="CR" placeholder="CR/PR/AR">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="mop" class="col-sm-4 col-form-label  bg-olive">MOP:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="mop" id="mop" placeholder="MOP">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ref_no" class="col-sm-4 col-form-label  bg-olive">Cheque/Ref. No.:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="ref_no" id="ref_no" placeholder="Cheque/ Ref. No.">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="remarks" class="col-sm-4 col-form-label  bg-olive">Remarks:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Remarks">
                    </div>
                  </div>

                   
                </div>

             </div>
              
             <!--end form -->
</form>
             
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
                    <th class="bg-success disabled">REFERENCE N0.</th>
                    <th class="bg-success disabled">REMARKS</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php foreach ($purchase_data as $row): ?>
                  <tr>
                  <td><?php echo $row['date']; ?></td>
                  <td><?php echo $row['invoice']; ?></td>
                  <td><?php echo $row['client_sup_name']; ?></td>
                  <td><?php echo $row['quantity']; ?></td>
                  <td><?php echo $row['uom_name']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td><?php echo $row['po_num']; ?></td>
                  <td><?php echo $row['price']; ?></td>
                  <td><?php echo $row['total_amount']; ?></td>
                  <td><?php echo $row['terms_name']; ?></td>
                  <td><?php echo $row['date_paid']; ?></td>
                  <td><?php echo $row['CR']; ?></td>
                  <td><?php echo $row['mop']; ?></td>
                  <td><?php echo $row['reference_no']; ?></td>
                  <td><?php echo $row['remarks']; ?></td>
                  </tr>
                  <?php endforeach; ?>
                  
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
  <?php if(isset($_GET['success'])) {  ?>
    Swal.fire({
      title: "Success",
      text: "<?= htmlspecialchars($_GET['success']) ?>",
      icon: "success"
    }).then(function() {
      // Remove the 'success' parameter from the URL
      var urlWithoutSuccess = window.location.href.split('?')[0];
      history.replaceState({}, document.title, urlWithoutSuccess);
    });
  <?php } ?>
</script>

<script>

  function calculate() {
    var qty =parseFloat(document.getElementById("qty").value);
    var price =parseFloat(document.getElementById("price").value);

    var result = qty * price;

    document.getElementById('total_amount').value = result;

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
