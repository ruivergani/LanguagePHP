<?php

class Message {

    private $name;
    private $message;
    private $id;
    private $created;

    // Function to check if is logged in
    public function checkLogin($name){
        if (isset($_SESSION['name'])) {
            $this->name = $_SESSION['name'];
        }
        else {
            throw new Exception('User not logged in');
        }
    }

    public function add($message){
        $name = '';
        $this->checkLogin($name);

        if ($name == strip_tags($name) && $message == strip_tags($message)) {
            $this->name = $name;
            $this->message = $message;
            $this->id = uniqid('msg');
            $this->created = date('Y-m-d H:i:s');
            $pdo = new PDO(
                'mysql:host=localhost;dbname=test',
                'test',
                'test'
            );
            $stmt = $pdo->prepare(
                'INSERT INTO `guestbook`' .
                ' (`id`, `name`, `message`, `created`)' .
                ' VALUES (:id, :name, :message, :created);');
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':message', $this->message);
            $stmt->bindParam(':created', $this->created);
            $stmt->execute();
            if ($stmt->rowCount() != 1) {
                throw new Exception('Message failed to save to the DataAccess');
            }
        }
        else {
            throw new Exception('Input cannot contain HTML type tags');
        }
    }

}