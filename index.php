<?php 
    session_start();

    if(!isset($_SESSION['username'])) {
        header('location:login.php');
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Tags and Links -->
        <?php 
            include './links.php';
        ?>

        <title>Home</title>

        <style>
            body {
                background-color: #cdf;
            }

            .navbar-brand {
                font-size: 2em;
                font-weight: bold;
            }

            a {
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php 
            include 'navbar.php';
        ?>

        <!-- Show Store -->
        <div class="container">
            <h2 class="text-center text-dark mt-5">STORES</h2>

            <div class="card mt-3" style="width: 70rem;">
                <div class="card-body">
                    <a href="/book-ims-php/stores/add_store.php" class="btn btn-primary mb-2">Add Store</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Store</th>
                                <th scope="col">Address</th>
                                <th scope="col">Owner</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    //Connecct to database
                                    include 'config.php';

                                    $sql = "SELECT * FROM stores";
                                    $data = mysqli_query($conn,$sql);

                                    while($user = mysqli_fetch_array($data)) {
                                ?>
                                        <td> <?php echo $user['name']; ?> </td>
                                        <td> <?php echo $user['address']; ?> </td>
                                        <td> <?php echo $user['owner_name']; ?> </td>
                                        <td> 
                                            <button class="btn btn-primary btn-sm"> 
                                                <a href="edit.php?id=<?php echo $user['id']; ?>" class="text-white">Edit</a> 
                                            </button> 
                                            <button class="btn btn-danger btn-sm"> 
                                                <a href="delete.php?id=<?php echo $user['id']; ?>" class="text-white">Delete</a> 
                                            </button> </td>
                                        </td>
                                <?php 
                                    }
                                ?>
                                
                                <td>
                                    <a href="/book-ims-php/books/show_books.php" class="btn btn-success btn-sm">View Books</a>
                                </td>
                            </tr>
                        </tbody>    
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>