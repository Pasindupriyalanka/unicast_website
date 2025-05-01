<!-- Navigation bar start -->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark shadow" style="background-color: rgba(0,0,0,0.7);">
    <div class="container">
        <a href="index.php" class="navbar-brand d-flex align-items-center" style="font-family: 'Delius Swash Caps'; font-size: 1.5rem;">
            <img src="images\logo1.jpg" alt="Planet Shopify Logo" style="height: 50px; width: auto; margin-right: 8px;">
            UniCart Online Store
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu dropdown-menu-right bg-dark border-0 shadow">
                        <a href="products.php#watch" class="dropdown-item text-light">Watches</a>
                        <a href="products.php#shirt" class="dropdown-item text-light">T-Shirts</a>
                        <a href="products.php#shoes" class="dropdown-item text-light">Shoes</a>
                        <a href="products.php#headphones" class="dropdown-item text-light">Headphones/Speakers</a>
                    </div>
                </li>
                <li class="nav-item"><a href="index.php" class="nav-link">Offers</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                <?php if (isset($_SESSION['email'])) { ?>
                <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                <?php } ?>
            </ul>

            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['email'])) { ?>
                <li class="nav-item"><a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tooltip" title="<?php echo $_SESSION['email'] ?>">
                        <i class="fa fa-user-circle"></i>
                    </a>
                </li>
                <?php } else { ?>
                <li class="nav-item"><a href="#signup" class="nav-link" data-toggle="modal"><i class="fa fa-user"></i> Sign Up</a></li>
                <li class="nav-item"><a href="#login" class="nav-link" data-toggle="modal"><i class="fa fa-sign-in-alt"></i> Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- Navigation bar end -->

<!-- Login Modal -->
<div class="modal fade" id="login" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 rounded-lg shadow">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="login_script.php" method="post">
                    <div class="form-group">
                        <label for="lemail">Email address:</label>
                        <input type="email" class="form-control" name="lemail" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="lpassword" placeholder="Password" required>
                    </div>
                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <div class="text-center mt-2">
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">New user? <a href="#signup" data-toggle="modal" data-dismiss="modal">Sign Up</a></p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Login Modal End -->

<!-- Signup Modal Start -->
<div class="modal fade" id="signup" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 rounded-lg shadow">
            <div class="modal-header">
                <h5 class="modal-title">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="signup_script.php" method="post">
                    <div class="form-group">
                        <label for="eMail">Email address:</label>
                        <input type="email" class="form-control" name="eMail" placeholder="Enter email" required>
                        <?php if(isset($_GET['error'])) echo "<span class='text-danger'>".$_GET['error']."</span>"; ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" name="firstName" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" name="lastName" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="terms" required>
                        <label for="terms" class="form-check-label">I agree to the terms and conditions</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">Already registered? <a href="#login" data-toggle="modal" data-dismiss="modal">Login</a></p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Signup Modal End -->
