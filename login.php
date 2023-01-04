<?php 
    session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Tags and Links -->
        <?php 
            include 'links.php';
        ?>

        <style>
            body {
                background-color: #cdf;
            }

            .navbar-brand {
                font-size: 2em;
                font-weight: bold;
            }
        </style>

        <title>Login</title>
    </head>
    <body>
        <?php 
            include 'config.php';

            error_reporting(0);

            if(isset($_POST['submit'])) {
                $email = $_POST['email'];
                $password = md5($_POST['password']);

                $email_query = "select * from users where email='$email' and password='$password'";
                $equery = mysqli_query($conn, $email_query);

                $email_count = mysqli_num_rows($equery);

                if($email_count) {
                    $email_pass = mysqli_fetch_assoc($equery);

                    $_SESSION['username'] = $email_pass['username'];

                    header('location:index.php');
                } else {
                    echo "<script>alert('Login Unsuccessfull. Please enter values correctly.')</script>";
                }
            } 
        ?>

        <!-- Navbar -->
        <?php 
            include 'navbar.php';
        ?>
        
        <!-- Login Form -->
        <div class="container form-container login-form">
            <h2 class="text-center pb-3">Login</h2>
            <hr>
            <form class="row g-3 needs-validation" method="POST">
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
                
                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                </div>
                
                <div class="col-12 d-grid gap-2 mt-5">
                    <button class="btn btn-primary" type="submit" name="submit">Login</button>
                </div>
                <p>Don't have an account ? <a href="/book-ims-php/register.php">Register here</a></p>
            </form>
        </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>