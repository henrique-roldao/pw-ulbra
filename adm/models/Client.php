<?php

require_once('bd/ConnectClass.php');

class Client
{
    private static $conn;

    function __construct()
    {
        self::$conn = (new Connection())->create();
    }

    public function  index()
    {
        try {
            $sql = "SELECT * FROM clients";
            
            $stmt = self::$conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $err) {
            return ['error' => $err];
            return array('error' => false, 'message' => 'Ocorreu um erro ao listar o cliente.');
        }
    }

    public function create(array $data)
    {
        try {
            $sql = "INSERT INTO `clients` (`id`, `name`, `gender`, `languages`, `typeOfDeveloper`, `email`, `password`, `description`)
                VALUES (NULL, ?, ?, ?, ?, ?, ?, ?);";
            $stmt = self::$conn->prepare($sql);
            $stmt->bindParam(1, $data['name']);
            $stmt->bindParam(2, $data['gender']);
            $stmt->bindParam(3, $data['languages']);
            $stmt->bindParam(4, $data['typeOfDeveloper']);
            $stmt->bindParam(5, $data['email']);
            $stmt->bindParam(6, $data['password']);
            $stmt->bindParam(7, $data['description']);
            if ($stmt->execute()) {
                return array('error' => true, 'message' => 'Cliente Cadastrado com sucesso.');
            } else {
                return array('error' => false, 'message' => 'Ocorreu um erro ao Cadastrar o cliente.');
            }
        } catch (PDOException $err) {
            echo 'Error <code>' . $err->getMessage() . "</code>";
            return array('error' => false, 'message' => 'Ocorreu um erro ao Cadastrar o cliente.');
        }
    }
}