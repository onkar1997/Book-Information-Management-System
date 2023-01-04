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

        <title>Register</title>

    </head>
    <body>
        <?php 
            include 'config.php';

            error_reporting(0);

            if(isset($_POST['submit'])) {
                $username = POST['username'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = md5($_POST['password']);
                $confirm_password = md5($_POST['confirm_password']);

                // Checking duplicate email
                $email_query = "select * from users where email='$email'";

                $equery = mysqli_query($conn, $email_query);

                $email_count = mysqli_num_rows($equery);


                if($email_count > 0) {
                    ?>
                        <script>
                            alert("Email Already Exist ! ! !");
                        </script>
                    <?php
                } else {
                    if($password === $confirm_password) {
                        $insert_query = "insert into users(username, email, phone, password, confirm_password) values('$username','$email','$phone','$password','$confirm_password')";

                        $iquery = mysqli_query($conn, $insert_query);

                        if($iquery) {
                            echo "<script>alert('User Registered Successfully . . .')</script>";
                            header('location:login.php');
                        } else {
                            echo "<script>alert('Oops ! Something went wrong. User Not Registered ! ! !')</script>";
                        }
                    } else {
                        echo "<script>alert('Passwords are not matching ! ! !')</script>";
                    }
                }
            }

        ?>


        <!-- Navbar -->
        <?php 
            include 'navbar.php';
        ?>
        
        <!-- Login Form -->
        <div class="container form-container mt-5">
            <h2 class="text-center pb-3">Register</h2>
            <hr>
            <form class="row g-3 needs-validation" method="POST">
                <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="col-12">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" required>
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" required>
                </div>
                <div class="col-12">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="<?php echo $confirm_password; ?>" required>
                </div>
                <div class="col-12 d-grid gap-2 mt-4">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </div>
                <p>Already have an account ? <a href="/book-ims-php/login.php">Login here</a></p>
            </form>
        </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>