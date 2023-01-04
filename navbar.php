<!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container container-fluid">
                <a class="navbar-brand logo" href="/book-ims-php/index.php">bookstore.com</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/book-ims-php/index.php">Home</a>
                        </li>

                        <?php if(isset($_SESSION['username'])): ?>
                            <p class="mt-2 mx-3" style="font-style:italic; border-bottom: solid 2px #333; font-weight:bold;">Welcome <?php echo $_SESSION['username'] ?> !</p>
                            <li class="nav-item">
                                <a class="nav-link" href="/book-ims-php/logout.php">Logout</a>
                            </li>
                        <?php else: ?>
                            
                             <li class="nav-item">
                                <a class="nav-link" href="/book-ims-php/register.php">Register</a>
                            </li>
                            <li class="nav-item">
                                <a   a class="nav-link" href="/book-ims-php/login.php">Login</a>
                            </li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
            </div>
        </nav>