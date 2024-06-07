<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand me-auto" href="#">Magetan</a>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Magetan Travel Guide</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mx-auto">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" aria-current="page" href="/views/wisata/index.php">Destinasi Wisata</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="/views/kuliner/index.php">Tempat Makan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="/views/penginapan/index.php">Penginapan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="/index.php">Beranda</a>
                </li>
              </ul>
            </div>
            
          </div>
          
          <ul class="navbar-nav justify-content-right pe-3">
          <?php if (isset($_SESSION['auth'])) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['auth_user']['name'] ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
                <?php
            } else {
            ?>
            <li class="mx-1">
            <a href="http://localhost:8000/login.php" class="login-button">Login</a>
            </li>
            <li class="nav-item">
              <a href="http://localhost:8000/register.php" class="login-button">Register</a>
            </li>

            <?php
        }

        ?>
          </ul>
          
            <!-- <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button> -->
        </div>
    </nav>