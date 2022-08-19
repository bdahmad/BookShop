<?php
include "../init.php";
if (isset($_POST['admin'])) {
    header("location:admin.php");
}
if (isset($_POST['users'])) {
    header("location:users.php");
}
if (isset($_POST['approved'])) {
    header("location:approved.php");
}
if (isset($_POST['pending'])) {
    header("location:pending.php");
}

if(isset($_POST['review'])){
  header("location:review.php");
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

<div class="container text-success">
    <?php 
        if(!empty($_SESSION['pending_user'])){
            echo $_SESSION['pending_user'];
            $_SESSION['pending_user'] = "";
        }
        if(!empty($_SESSION['delete_user'])){
          echo $_SESSION['delete_user'];
          $_SESSION['delete_user'] = "";
      }
    ?>
</div>
    <!-- View Pending Events -->
<div class="container-fluid">
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
          
            <th class="col-1 border"></th>
            <th class="col-1 border">OID</th>
            <th class="col-1 border">BID</th>
            <th class="col-1 border">Book Name</th>
            <th class="col-1 border">Order Date</th>
            <th class="col-1 border">QTY</th>
            <th class="col-1 border">Price</th>
            <th class="col-1 border">Name</th>
            <th class="col-1 border">Email</th>
            <th class="col-1 border">Mobile</th>
            <th class="col-1 border">Address</th>
            <th class="col-1 border">Approval</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = $source->Query("SELECT * FROM `order` where status='Pending'");
            $details = $source->FetchAll();
            $numrow = $source->CountRows();
            if($numrow>0){
              foreach($details as $row):
                
            if($row->status=='Pending'){
              $app = "<a href='delete.php?deletePenOid=".$row->oid."' class='btn btn-outline-danger mt-2'> Delete</a>";
              $approval_text="class = text-warning";
            }elseif($row->status=='Canceled'){
                $approval_text="class = text-danger";
            }else{
              $app = "";
              $approval_text="class = text-success text-uppercase";
            }

              echo "
                  <tr class='col-1 border-left border-right border-bottom'>
                  <td class='col-1 border-left border-right'> <img class='rounded m-1' style='height:60px;' src='../assets/bookimg/" . $row->image . "' alt='Sample'></td>
                  <td class='col-1 border-right'>" . $row->oid . "</td>
                  <td class='col-1 border-right'>" . $row->bid . "</td>
                  <td class='col-1 border-right'>" . $row->bname . "</td>
                  <td class='col-1 border-right'>" . $row->date . "</td>
                  <td class='col-1 border-right'>" . $row->qty . "</td>
                  <td class='col-1 border-right'>" . $row->price . "</td>
                  <td class='col-1 border-right'>" . $row->name . "</td>
                  <td class='col-1 border-right'>" . $row->email . "</td>
                  <td class='col-1 border-right'>" . $row->phone . "</td>
                  <td class='col-1 border-right'>" . $row->address . "</td>
                <td><a href='approvedsql.php?approval=".$row->oid."' class='btn btn-outline-success mt-2'> Approve</a>".$app." </td>
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