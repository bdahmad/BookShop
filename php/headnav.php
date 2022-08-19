


<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="index.php" class="nav-item nav-link active" style="color: white;">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown" style="color: #61F1FF;">Category</a>
                        <div class="dropdown-menu">
                            <form action="product-list.php" method="POST">
                                <input type="submit" class="dropdown-item" value="Comics" name="comics">
                                <input type="submit" class="dropdown-item" value="Computers & Tech" name="computer">
                                <input type="submit" class="dropdown-item" value="Entertainment" name="entertainment">
                                <input type="submit" class="dropdown-item" value="Health & Fitness" name="health">
                                <input type="submit" class="dropdown-item" value="History" name="history">
                                <input type="submit" class="dropdown-item" value="Horror" name="horror">
                                <input type="submit" class="dropdown-item" value="Literature & Fiction" name="literature">
                                <input type="submit" class="dropdown-item" value="Mysteries" name="mysteries">
                                <input type="submit" class="dropdown-item" value="Religion" name="religion">
                                <input type="submit" class="dropdown-item" value="Science & Math" name="science">
                            </form>
                        </div>
                    </div>
                    <a href="product-list.php" class="nav-item nav-link">Books</a>

                </div>
                <?php

                if (empty($_SESSION['login_success'])) {
                    echo "
                            <div class='navbar-nav ml-auto'>
                                            <div class='nav-item dropdown'>
                                                <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>User Account</a>
                                                <div class='dropdown-menu'>
                                                    <a href='login.php?log_id=login' class='dropdown-item'>Login</a>
                                                    <a href='login.php?log_id=signup' class='dropdown-item'>Register</a>
                                                </div>
                                            </div>
                                        </div>
                            ";
                } else {
                    echo "
                            <div class='navbar-nav ml-auto'>
                                            <div class='nav-item dropdown'>
                                                <a href='#' class='nav-link text-white dropdown-toggle' data-toggle='dropdown'>" . $_SESSION['login_success'] . "</a>
                                                <div class='dropdown-menu'>
                                                    <a href='my-account.php' class='dropdown-item'>My Account</a>
                                                    <a href='cart.php' class='dropdown-item'>Cart</a>
                                                    <a href='order.php' class='dropdown-item'>Order</a>
                                                    <a href='logout.php' class='dropdown-item'>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                            ";
                }
                ?>

            </div>
        </nav>
    </div>
</div>

<!-- Bottom Bar Start -->
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.php">
                        <h1>BOOKSHOP</h1>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="search">
                    <form method='GET' action="product-list.php">
                        <input type="text" placeholder="Search" name="bookName" class="col-5">
                        <input type="submit" name="search" value="Search" class="btn btn-outline-none">
                    </form>
                </div>

            </div>
            <div class="col-md-3">
                <div class="user">
                <?php if(!empty($_SESSION['logId'])){
                    echo "<a href='cart.php' class='btn cart'>
                    <i class='fa fa-shopping-cart'></i>
                    <span>(";
                            $countCart = new cart();
                            if (!empty($_SESSION['logId'])) {
                                echo $countCart->onCart($_SESSION['logId']);
                            } else {
                                echo '0';
                            } echo ")</span>
                    </a>";
                } ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bottom Bar End -->