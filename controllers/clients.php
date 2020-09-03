<?php
require_once("models/Client.php");

class clientsController {
        private $clientdb;
    function __construct()

    {
        $this->clientdb = new Client();
    }

    public function register() 
    {
        require_once('views/templates/header.php');
        require_once('views/clients/register.php');
        require_once('views/templates/footer.php');
    }

    public function registerView(){

        $clients = $this->clientdb -> index();
        require_once('views/templates/header.php');
        require_once('views/clients/registerView.php');
        require_once('views/templates/footer.php');
    }

    public function registerAction() {
        if($_SERVER['REQUEST_METHOD']=='POST') 
        {
            $languages = implode(',', $_POST['languages']);
            $this->clientdb ->create(
                array(
                    'name' => $_POST['name'],
                    'gender' => $_POST['gender'],
                    'languages' => $languages,
                    'typeOfDeveloper' => $_POST['typeOfDeveloper'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                    'description' => $_POST['description']
                )
            );
        }
        header('Location: index.php?controller=site&action=home');
    }
}

?>