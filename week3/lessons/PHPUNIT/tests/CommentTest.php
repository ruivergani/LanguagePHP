<?php

use PHPUnit\Framework\TestCase; //inherit all the public and protected methods and properties of that class

require_once __DIR__ . '/../Comment.php';

class CommentTest extends TestCase{
    // all functions should start with word test
    public function testAddComment(){
        $comment = new Comment("PHP is great!");
        // assertEqual(value you are expecting, actual value being tested)
        $this->assertEquals('PHP is great!', $comment->message());
    }
    // Task 1
    public function testUpdateComment(){
        $comment = new Comment("PHP is great!");
        $comment->update("PHP is not great!");
        $this->assertEquals('PHP is not great!', $comment->message());
    }
    // Task 2
    public function testException(){
        $comment = new Comment("<p>PHP is great!</p>");
        $this->exceptException(InvalidArgumentException::class);
    }
    // Task 3
    public function testGameClass(){

    }
}
