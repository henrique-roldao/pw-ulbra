<?php 

if(!isset($_GET['controller'])) {
    require_once("controllers/site.php");
    $site = new siteControler();
    $site -> home();
} else {
    switch($_REQUEST['controller']) {
        case 'site':
            require_once("controllers/site.php");
            $site = new siteControler();
            if(!isset($_GET['acao'])){
                $site -> home();
            }else {
                switch ($_REQUEST['acao']) {
                    case 'home':
                        $site -> home();
                    break;
                    case 'produtos':
                        $site -> produtos();
                    break;
                    case 'contato':
                        $site -> contato();
                    break;
                }
            }
        break;
    }
}
?>
