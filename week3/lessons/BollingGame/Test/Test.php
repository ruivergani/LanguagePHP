<?php


use PHPUnit\Framework\TestCase;

require_once(dirname(__FILE__) . '/../Game.php'); //assumed in rest of code
class Test extends TestCase{
    private $g;
    public function setUp(): void{
        $this->g = new Game();
    }
    public function testGutterGame()
    {
        $this->rollMany(20, 0);
        $this->assertEquals(0, $this->g->score());
    }
    private function rollMany($rolls, $pins)
    {
        for($i = 0; $i < $rolls; $i++)
            $this->g->roll($pins);
    }
    public function testAllOnes()
    {
        for($i = 0; $i < 20; $i++)
            $this->g->roll(1);
        $this->assertEquals(20, $this->g->score());
    }

}
