<?php

class Comment {

    private $comment;

    // Constructor
    public function __construct(string $comment){
        $this->update($comment); // call function update
    }

    // Verify if exists HTML code
    private function has_no_html($message){
        return $message === strip_tags($message);
    }

    // Check if contains HTML code or not
    public function update(string $comment){
        if ($this->has_no_html($comment)) {
            $this->comment = $comment; // put into variable comment the parameter from constructor
        } else {
            throw new Exception("Contains HTML Content");
        }
    }

    // Return the comment
    public function message(){
        return $this->comment;
    }
}