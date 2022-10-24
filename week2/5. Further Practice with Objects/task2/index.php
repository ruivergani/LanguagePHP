<?php
    session_start();
    require_once './GameChart.php';
    $chart = new GameChart();
    //$chart->addDummyGames();
    //
    //foreach ($chart->getGames() as $game)
    //{
    //    $stmt = $db->prepare('insert into game_sales (title, publisher, sales) VALUES (:title, :pub, :sales)');
    //    $stmt->bindValue(':title', $game->getTitle());
    //    $stmt->bindValue(':pub', $game->getPublisher());
    //    $stmt->bindValue(':sales', $game->sales);
    //
    //    $stmt->execute();
    //}

    $db = new PDO('mysql:host=localhost;dbname=object_practice', 'root', '') or die('Unable to connect to the database');
    $games = $db->query('select * from game_sales')->fetchAll(PDO::FETCH_CLASS, 'Game');
    //$top_5_games = $db->query('select * from game_sales order by sales limit 5')->fetchAll(PDO::FETCH_CLASS);
    usort($games, function (Game $a, Game $b) {
    //  $sales = $a->sales - $b->sales;
        return Game::compare($a, $b);
    });

?>

<table>
    <caption>Top 5 Games</caption>
    <thead>
    <tr>
        <th>Title</th>
        <th>Publisher</th>
        <th>Sales</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($top_5_games as $game): ?>
        <tr>
            <td><?= $game->title ?></td>
            <td><?= $game->publisher ?></td>
            <td><?= $game->sales ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<br>

<table>
    <caption>All Games</caption>
    <thead>
    <tr>
        <th>Title</th>
        <th>Publisher</th>
        <th>Sales</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($games as $game): ?>
        <tr>
            <form method="get">
                <input type="hidden" name="id" value="<?= $game->id ?>">
                <td><?= $game->title ?></td>
                <td><?= $game->publisher ?></td>
                <td><input type="number" name="sales" value="<?= $game->sales ?>" min="0"></td>
                <td><input type="submit" name="update" value="Update"> <input type="submit" name="delete" value="Delete"></td>
            </form>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php
    function destroy_session(): void{
        $_SESSION = [];

        if (ini_get('session.use_cookies')) {

            $params = session_get_cookie_params();
            setcookie(
                session_name(), '', 1,
                $params['path'], $params['domain'],
                $params['secure'], $params['httponly']
            );
        }

        session_destroy();
    }
    //destroy_session();
?>