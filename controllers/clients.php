<?php
class clientsController {
    public function index()
    {

    }

    public function register() 
    {
        require_once('views/templates/header.php');
        require_once('views/clients/register.php');
        require_once('views/templates/footer.php');
    }

    public function registerView(){
        $client = array(
            'name' => $_POST['name'],
            'gender' => $_POST['gender'],
            $languages = $_POST['languages'],
            'typeOfDeveloper' => $_POST['typeOfDeveloper'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'description' => $_POST['description']
        );
        require_once('views/templates/header.php');
        require_once('views/clients/registerView.php');
        require_once('views/templates/footer.php');

    }
}

?>