<!DOCTYPE html>
<html lang="pt-br">
    <head>
    </head>
    <body>
<!-- header.php -->
<!--
    <?php session_start(); ?>
        <nav class="navbar">
          <span>Sistema de Agendamentos</span>
          <div>
            <?php if (isset($_SESSION['user'])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php"><button>Logout</button></a>
            <?php endif; ?>
          </div>
        </nav>
    -->

<nav class="navbar navbar-expand-lg navbar-bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="assets/img/bootstrap-logo.png" alt="Sistema-de-Agendamentos" width="30" height="24">
        </a>
        <a class="navbar-brand" href="#">Sistema de Agendamentos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown
        </a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
        </ul>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
</nav>

<script src="assets/js/scripts.js"></script>

</body>

</html>