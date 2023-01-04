<!-- Configuration of database -->

<?php 

define('DB_SERVER', 'localhost:3308');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'book_ims');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn == false) {
        ?>
            <script>
                alert("Connection Unsuccessfull ! ! !");
            </script>
        <?php
}

?>