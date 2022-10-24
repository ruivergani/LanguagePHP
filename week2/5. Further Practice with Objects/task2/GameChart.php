<?php

require_once './Game.php';

class GameChart{

    private array $games = [];

    public function getTop5Games(): array{
        return [
            $this->games[0] ?? null,
            $this->games[1] ?? null,
            $this->games[2] ?? null,
            $this->games[3] ?? null,
            $this->games[4] ?? null
        ];
    }

    public function getGames(): array{
        return $this->games;
    }

    public function addGame(Game $game): void{
        $this->games[] = $game;

//      $this->games = \nspl\a\sorted($this->games, true, \nspl\op\methodCaller('getSales'));

        usort($this->games, function ($a, $b)
        {
            if ($a->getSales() == $b->getSales()) return 0;
            return ($a->getSales() > $b->getSales()) ? -1 : 1;
        });
    }

    public function addDummyGames(): void{
        $games = [
            new Game('That Football Game 2015', 'EAR Games', 175000),
            new Game('Falling Out 4', 'Whiskas', 121500),
            new Game('Plumber Racing', 'Nentindos', 86020),
            new Game('Engaged of Duty – Switchboard Ops', 'Inactivevision', 62465),
            new Game('Grand Bus Ride Manual', 'Classical Musicians', 48126)
        ];

        $this->games = $games;
    }
}