<?php
require_once "manager.php";
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid mx-5">
    <a class="navbar-brand" href="/index.php">
      <img src="img/logo.png" alt="Logo" width="130" class="d-inline-block align-text-top">
   </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <form class="form-inline my-2 my-lg-0">
      <?php
      if(isset($_SESSION["email"]))
      {
        if($authority == "Admin")
        {
          ?>
          
          <div class="d-flex flex-row-reverse mx-2">
           <div class="nav-item dropdown mx-2">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin Panel
            </a>
            <ul class="dropdown-menu">
              <li>
              <a class="dropdown-item" href="blog/addblog.php">Add Text</a>
            </li>
        </ul>
        </div>

        <script>
          const dropdownToggle = document.querySelector('.nav-link.dropdown-toggle');
const dropdownMenu = document.querySelector('.dropdown-menu');

dropdownToggle.addEventListener('click', () => {
  dropdownMenu.classList.toggle('show'); // Toggle the 'show' class to control visibility
});
        </script>

          <?php
        }
        ?>
        <div class="mx-2">
        <a class="nav-link" href="/profile.php">Profile</a>
        </div>
        <div class="mx-2">
        <a class="nav-link" href="/logout.php">Logout</a>
        </div>
      </div>
        <?php
      }
      else
      {
        ?>
      <div class="d-flex flex-row-reverse mx-2">
        <div class="mx-2">
          <button class="btn btn-primary">
        <a class="nav-link mx-2" href="/login.php">Login</a>
        </button>
        </div>
        <div class="mx-2">
        <button class="btn btn-outline-primary">
        <a class="nav-link" href="/register.php">Register</a>
        </button>
      </div>
      </div>
        <?php
      }
      ?>
    </form>
  </div>
</nav>