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

if (isset($_POST['review'])) {
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
    if (empty($data['email_error']) && empty($data['password_error'])) {

        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        if ($source->Query(
            "INSERT INTO admin (email,password) VALUES (?,?)",
            [$data['email'], $password]
        )) {
            $admin_create = "Admin account created successfully";
        }
    } else {
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


    <!-- show Reviews -->
    <div class="container-fluid">
        <div class="row">
            <div class="container col-5">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="col-1">Book ID</th>
                            <th class="col-2">Book Name</th>
                            <th class="col-1">Positive Sentiment</th>
                            <th class="col-1">Total Sentiment</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $query = $source->Query("SELECT * FROM review order by bid ASC");
                        $details = $source->FetchAll();
                        $numrow = $source->CountRows();
                        $match = [];
                        $sentiment = '';

                        if ($numrow > 0) {
                            foreach ($details as $row1) :
                                $query = $source->Query("SELECT count(sentiment) as sentiment from review where bid=$row1->bid and sentiment = 'positive'");
                                $detail = $source->SingleRow();
                                $pd = new productdetail();
                                
                                foreach ($detail as $row) :

                                    $pd->productDetails($row1->bid);
                                    if (!in_array($row1->bid, $match)) {
                                        $query = $source->Query("SELECT count(bid = $row1->bid) as totalBid FROM review where bid=$row1->bid");
                                        $detail01 = $source->FetchAll();
                                        foreach ($detail01 as $row001) :
                                        echo "
                                            <tr>
                                                <td class='col-1'>" . $row1->bid . "</td>
                                                <td class='col-3'>" . $pd->getName() . "</td>
                                                <td class='col-1'>" . $detail->sentiment . "</td>
                                                <td class='col-1'>" . $row001->totalBid . "</td>
                                            </tr>";
                                        $match[] = $row1->bid;
                                        endforeach;
                                    }
                                endforeach;
                            endforeach;
                        }
                        ?>
                    </tbody>
                </table>
            </div>



            <div class="container col-7">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="col-1">Book ID</th>
                            <th class="col-1">User Name</th>
                            <th class="col-1">Rating</th>
                            <th class="col-3">Comment</th>
                            <th class="col-1">Sentiment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = $source->Query("SELECT * FROM review order by bid ASC");
                        $details = $source->FetchAll();
                        $numrow = $source->CountRows();
                        $match = [];
                        $sentiment = '';

                        if ($numrow > 0) {
                            foreach ($details as $row1) :


                                echo "
                                    <tr>
                                        <td class='col-1'>" . $row1->bid . "</td>
                                        <td class='col-1'>" . $row1->name . "</td>
                                        <td class='col-1'>" . $row1->score . "</td>
                                        <td class='col-3'>" . $row1->comment . "</td>
                                        <td class='col-3'>" . $row1->sentiment . "</td>
                                    </tr>";


                            endforeach;
                        }
                        ?>
                    </tbody>
                </table>
            </div>






        </div>
    </div>


    <!-- <td>" . $row1->semtiment . "</td> -->
</body>

</html>