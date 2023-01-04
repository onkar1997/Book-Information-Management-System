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

        <title>Home</title>

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
        <!-- Navbar -->
        <?php 
            include '../navbar.php';
        ?>
        
        

        <div class="container">
            <a href="/book-ims-php/index.php" class="btn btn-secondary mt-5">Go Back</a>
            <h2 class="text-center text-dark">BOOKS</h2>

            <div class="card mt-3" style="width: 70rem;">
                <div class="card-body">
                    <a href="/book-ims-php/books/add_book.php" class="btn btn-primary mb-2">Add Book</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Book</th>
                                <th scope="col">Author</th>
                                <th scope="col">Publisher</th>
                                <th scope="col">No. Of Copies</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Srimad Bhagavadgita - As It Is</td>
                                <td>A.C. Bhaktivedanta Swami Srila Prabhupada</td>
                                <td>Bhaktivedanta Book Trust</td>
                                <td>108</td>
                                <td>
                                    <a href="/book-ims-php/books/edit_book.php" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/book-ims-php/books/delete_book.php" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        </tbody>    
                    </table>

                    <div class="container text-center">
                        <a href="/book-ims-php/index.php" class="btn btn-secondary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>