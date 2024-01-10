<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="./dist/css/style.css">

<div class="wrapper">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h1 style="margin-top: 20px;">MERAKI</h1>
    <!-- Icon -->
    <div class="">

      <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
      <?php
    // Display error message if set in the URL
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        echo "<p class='fadeIn' id='error-message' style='color: red;'>$error</p>";
        echo "<script>
                setTimeout(function() {
                    var errorMessage = document.getElementById('error-message');
                    if (errorMessage) {
                        errorMessage.style.display = 'none';
                        window.location.href = 'http://localhost/pos/index.php'; // Redirect after hiding the error
                    }
                }, 3000);
              </script>";
    }
    ?>
    </div>

    <!-- Login Form -->
    <form action="login.php" method="POST">
      <input type="text" id="username" class="" name="username" placeholder="username / email">
      <input type="password" id="password" class="" name="password" placeholder="password">
      <input type="submit" name="login" id="login" class="" value="Log In">
    </form>

  </div>
</div>