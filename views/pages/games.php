<?php
$games ??= [];
?>

<h1>Top Rating Games</h1>


<?php foreach ($games as $game) : ?>
    <article class="card">
        <h2 class="card__title"><?= $game['title'] ?></h2>

        <div class="meta">
            <span class="badge"><?= $game['platform'] ?></span>
            <span class="badge"><?= $game['genre'] ?></span>
            <span class="badge"><?= (int)$game['releaseYear'] ?></span>
            <span class="badge"><?= (int)$game['rating'] ?>/10</span>
        </div><br>
        <button class="badge" type="button"><a class="nav__link" href="/game/<?= (int)$game['id'] ?>">Naviguer vers le détail</a></button>
    </article>
<?php endforeach; ?>

