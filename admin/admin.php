<?php
include "../init.php";
if(isset($_POST['admin'])){
  header("location:admin.php");
}
if(isset($_POST['users'])){
  header("location:users.php");
}
if(isset($_POST['approved'])){
  header("location:approved.php");
}
if(isset($_POST['pending'])){
  header("location:pending.php");
}

if(isset($_POST['review'])){
  header("location:review.php");
}





if (isset($_POST['addadmin'])) {

  $data = [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'email_error' => '',
    'password_error' => ''
  ];

  if (empty($data['email'])) {
    $data['email_error'] = "Email is required";
  }
  if (empty($data['password'])) {
    $data['password_error'] = "Password is required";
  }
  // submitting form 
  if(empty($data['email_error']) && empty($data['password_error'])){
        
    $password = password_hash($data['password'],PASSWORD_DEFAULT);
    if($source->Query("INSERT INTO admin (email,password) VALUES (?,?)",
    [$data['email'],$password]
    )){
        $admin_create = "Admin account created successfully";
    }
}else{
    $error = "Something went wrong";
}
}
?>


<html>
<head>
  <title>Home</title>
  <meta name="viewpost" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>
<!-- navbar -->
  <div class="container-fluid sticky-top">
    <div class="row bg-light">
      <h1 class="text-info col-6 text-center m-auto">ADMIN PANEL</h1>
      <div class="col-6 text-center ml-auto mt-2">
        <form action="" method="POST">
          <input type="submit" value="Admins" name="admin" class="btn btn-outline-info mr-2" />

          <input type="submit" value="Users" name="users" class="btn btn-outline-info mr-2" />

          <input type="submit" value="Review" name="review" class="btn btn-outline-info mr-2" />

          <input type="submit" value="Approved" name="approved" class="btn btn-outline-info mr-2" />

          <input type="submit" value="Pending" name="pending" class="btn btn-outline-info mr-2" />
            

          <a href="logout.php" class="btn btn-outline-info mr-2">Logout</a>
        </form>
      </div>
    </div>
  </div>
<!-- success or error message -->
  <div class="container text-success m-auto">
        <?php
        if (!empty($admin_create)) {
            echo $admin_create;
            $admin_create = "";
        }
        ?>
    </div>
    <div class="text-danger m-auto">
        <?php
        if (!empty($error)) {
            echo $error;
            $error = "";
        }
        ?>
    </div>
<!-- add admin -->

<?php
  if(!empty($_SESSION['admin_log'])){
    if($_SESSION['admin_log']=='1'){
      echo "
      <div class='container mt-3 mb-3 w-100'>
    <form method='POST'>
      <input type='email' class='form-control w-25 ml-auto' name='email' placeholder='Email'>

      <input type='password' class='form-control w-25 mt-2 ml-auto' name='password' placeholder='Password'>

      <input type='submit' class='form-control w-25 mt-2 ml-auto btn btn-block btn-outline-info' name='addadmin' value='Add Admin'>
    </form>
  </div>
      
      ";
    }
  }
?>

<!-- show admins -->
<div class="container-fluid">
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th class="col-1">ID</th>
            <th class="col-1">Email</th>
            <th class="col-1">Password</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = $source->Query("SELECT * FROM admin");
            $details = $source->FetchAll();
            $numrow = $source->CountRows();
            
            if($numrow>0){
              foreach($details as $row):
             
                echo "
                <tr>
                <td>".$row->id."</td>
                <td>".$row->email."</td>
                <td>".$row->password."</td>
                </tr>";

              endforeach;
            }   
          ?>
        </tbody>
      </table>
    </div>
  </div>


</body>

</html>