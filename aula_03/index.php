<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/produtos.css">
    <script src="https://kit.fontawesome.com/c53a01de21.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Dev.Up <i class="fas fa-level-up-alt"></i></h1>
    </header>
        <?php 
            require_once('header.php');
                if(!isset($_GET['modulo'])) {
                    require_once('home.php');
                } else {
                    switch($_REQUEST['modulo']) {
                        case 'home':
                            require_once('home.php');
                        break;
                        case 'sobre':
                            require_once('sobre.php');
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
</body>
</html>