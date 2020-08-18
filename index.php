<!DOCTYPE html>
<html lang="en">

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
</head>

<body>
<?php 
            require_once('header.php');
                if(!isset($_GET['modulo'])) {
                    require_once('home.php');
                } else {
                    switch($_REQUEST['modulo']) {
                        case 'home':
                            require_once('home.php');
                        break;
                        case 'produtos':
                            require_once('produtos.php');
                        break;
                        case 'contato':
                            require_once('contato.php');
                        break;
                    }
                }
            require_once('footer.php');
        ?>
