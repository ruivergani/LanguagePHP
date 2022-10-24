<?php

class Game
{
    public string $title;
    public string $publisher;
    public int $sales;

    // GET
    public function getTitle(): string{
        return $this->title;
    }
    public function getPublisher(): string{
        return $this->publisher;
    }
    public function getSales(): int{
        return $this->sales;
    }
    // SET
    public function setTitle(string $title): void{
        $this->title = $title;
    }

    public function setPublisher(string $publisher): void{
        $this->publisher = $publisher;
    }

    public function setSales(int $sales): void{
        $this->sales = $sales;
    }

    // Functions
    public static function sort_by_sales(Game $g1, Game $g2): int{
        return $g1->sales - $g2->sales;
    }

    public static function compare(Game $g1, Game $g2): int{
        $sales = $g1->sales - $g2->sales;
        if ($sales == 0) {
            return strcmp($g1->title, $g2->title);
        }
        return $sales;
    }
}