<?php

session_start();
if(isset($_SESSION['phone'])) {
    echo "<script> location.href='index.php'; </script>";
} 
include"connection.php";

$phone=$_POST['phone'];

 if(isset($_POST['login'])){
$sql ="SELECT * FROM User WHERE Phone='$phone'";
$result = $conn->query($sql);
if($result->num_rows >0) {
    $_SESSION['phone'] =$_POST["phone"];
    echo "<script> location.href='tafrih.php'; </script>";
}
else{
   
$message = "شماره شما در سیستم ثبت نشده است. لطفا با پشتیبانی تماس بگیرید";
echo "<script type='text/javascript'>alert('$message');</script>";
}
$conn->close();
 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>گوگولیای فاوا</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="../../dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="../../dist/css/custom-style.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>گوگولیای فاوا</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input name ="phone" type="tel" class="form-control" placeholder="شماره همراه">
          <div class="input-group-append">
            <span class="fa fa-phone input-group-text"></span>
          </div>
         
        </div>
          </div>
          <button name = "login" type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
                </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
