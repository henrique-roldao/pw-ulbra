<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dev.Up</title>
	<link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">
	<!-- Bulma Version 0.9.0-->
	<link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <script src="https://kit.fontawesome.com/c53a01de21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/contact.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/text-home.css">
    <link rel="stylesheet" href="./assets/css/admin.css">
    
</head>

<body>

<!-- START NAV -->
<nav class="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="./assets/img/logo.png" alt="Logo"> <strong>Dev.Up <i class="fas fa-level-up-alt"></i> | Área Administrativa</strong>
            </a>
            <span class="navbar-burger burger" data-target="navbarMenu">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
        <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" href="<?=base_url('admin')?>">Home</a>
                <a class="navbar-item" href="<?=base_url('admin/clients')?>">Listar Clientes</a>
                <a class="navbar-item" href="<?=base_url('admin/clients/insert')?>">Add Clientes</a>
                <a class="navbar-item" href="<?=base_url('admin/logout')?>">Logout</a>
            </div>
        </div>
    </div>
</nav>
<!-- END NAV -->