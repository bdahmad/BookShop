<?php
include "../init.php";
if (isset($_POST['login'])) {

    $data = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'email_error' => '',
        'password_error' => ''
    ];

    if (empty($data['email'])) {
        $data['email_error'] = "Please check your email and password";
    }
    if (empty($data['password'])) {
        $data['password_error'] = "Please check your email and password";
    }
    // submitting form 
    if(empty($data['email_error']) && empty($data['password_error'])){
        if($source->Query("SELECT * FROM admin where email = ?",[$data['email']])){
            if($source->CountRows()>0){
                $row = $source->SingleRow();
                $email = $row->email;
                $db_password = $row->password;
                $superadmin = $row->superadmin;
                if(password_verify($data['password'],$db_password)){
                    
                    $_SESSION['email'] = $email;
                    $_SESSION['admin_log']=$superadmin;
                    header("location:admin.php");
                }else{
                    $data['password_error'] = "Please check your email and password";
                }
            }else{
                $data['email_error'] = "Please check your email and password";
            }
        }
    }
}
?>


<html>

<head>
    <title>Home</title>
    <meta name="viewpost" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/home.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>
    <?php 
    if(!empty($_SESSION['admin_log'])){
        header("location:admin.php");
    }
    
    ?>
<!-- navbar -->
    <div class="container-fluid sticky-top">
        <div class="row bg-light">
            <h1 class="text-info display-3 col-6 text-center m-auto">ADMIN PANEL</h1>
        </div>
    </div>
<!-- success or error message -->
    <div class="text-danger w-100">
        <?php
        if (!empty($data['email_error']) || !empty($data['password_error'])) {
            echo "Please check your email and password";
        }
        
        ?>
    </div>
<!-- add admin -->
    <div class="container mt-3 w-100">
        <form method="POST">
            <input type="email" class=" form-control w-25 m-auto" name="email" placeholder="Email"><p></p>
            

            <input type="password" class="form-control w-25 m-auto" name="password" placeholder="Password"><p></p>

            <a href="#" style="margin-left: 575px;">Forgot password?</a>

            <input type="submit" class="form-control w-25 m-auto  btn btn-block btn-outline-info" name="login" value="Login">
        </form>
    </div>

    <!-- show admins -->
</body>

</html>