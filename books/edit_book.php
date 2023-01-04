<?php 
    session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Tags and Links -->
        <?php 
            include '../links.php';
        ?>

        <title>Add Store</title>

        <style>
            body {
                background-color: #cdf;
            }

            .navbar-brand {
                font-size: 2em;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php 
            include '../config.php';
            error_reporting(0);

            if(isset($_POST['submit'])) {
                $user_id = $_SESSION['id'];
                $name = $_POST['name'];
                $owner_name = $_POST['owner_name'];
                $address = $_POST['address'];

                $insert_query = "insert into 'stores' (user_id, name, owner_name, address) values('$user_id', '$name', '$owner_name', '$address')";

                $iquery = mysqli_query($conn, $insert_query);

                if($iquery) {
                    ?>
                        <script>
                            alert("User Registered Successfully . . .");
                        </script>
                    <?php
                    header('location:login.php');
                } else {
                    ?>
                        <script>
                            alert("Oops ! Something went wrong. Please Check the details ! ! !");
                        </script>
                    <?php
                }
            }
        ?>

        <!-- Navbar -->
        <?php 
            include '../navbar.php';
        ?>
        
        <!-- Add Store Form -->
        <div class="container form-container mt-5">
            <a href="/book-ims-php/books/show_books.php" class="btn btn-secondary">Go Back</a>
            <h2 class="text-center pb-3">Edit Book</h2>
            <hr>
            <form class="row g-3 needs-validation" method="POST">
                <div class="col-12">
                    <label for="name" class="form-label">Store Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
                </div>
                <div class="col-12">
                    <label for="owner_name" class="form-label">Owner Name</label>
                    <input type="text" class="form-control" id="owner_name" name="owner_name" value="<?php echo $owner_name; ?>" required>
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <textarea  class="form-control" name="address" id="address" cols="30" rows="10" required><?php echo $address; ?></textarea>
                </div>
                <div class="col-12 d-grid gap-2 my-4">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>

        

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>