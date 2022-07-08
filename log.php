<?php
include('login.php'); // Memasuk-kan skrip Login 
 
if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>Halaman Login</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href=""/>
<style type="text/css">
.login-from {
    margin-top: 80px;
    border: 3px solid #ddd;
    border-radius: 3px;
    background-color: #3968bf;
    color: white;
}
body{
        background:url(bg1.jpg);
    background-size: cover;
}
.login-from h4 {
    font-size: 26px;
    margin-bottom: 20px;
    margin-top: 20px;
}
.navbar{
    background-color: #061568;
}
        .navbar{
            background-color:#061568;
        }
        .container-fluid .satu{
            background-color: #061568;
        }
        .navbar a{
            color: white;
        }
.login2 {
    background-color: #e58f20;
    padding-top: 10px;
}

</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid satu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand" href="log.php">
                    </i><span class="light">Applikasi pos kasir abdijaya  </span>
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <button type="button" class="btn btn-info btn-lg"><a href="Register">register</a></button>    
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <br/>
<div class="container-fluid dua">
    <div class="row">
        <div class="col-md-offset-4 col-md-4 login-from">
            <h4 class="login2"><em class="glyphicon glyphicon-log-in"></em>&nbsp;Login</h4>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>
                <div class="text-center">
                    <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Login">
                </div>
            </form>    
        </div>
    </div>
</div> <!-- End container -->
 
    <!-- Script js -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- End Script -->
</body>
</html>