<?php
$games = $featuredGames ?? [];
$total = $total ?? 0;
?>

    <h1>GameCatalog</h1>
    <p class="sub">Home — featuring <?= count($games) ?> games.</p>

    <section class="card">
        <div class="meta">
            <span class="badge">Total: <?= (int)$total ?></span>
            <span class="badge">Featured: <?= count($games) ?></span>
        </div>
    </section>

<a href="/random" class="badge">🎲 Random Game</a>

<?php foreach ($games as $game): ?>
    <article class="card">
        <h2 class="card__title"><?= $game['title'] ?></h2>

        <div class="meta">
            <span class="badge"><?= $game['platform'] ?></span>
            <span class="badge"><?= $game['genre'] ?></span>
            <span class="badge"><?= (int)$game['releaseYear'] ?></span>
            <span class="badge"><?= (int)$game['rating'] ?>/10</span>
        </div> <br>
       <button class="badge" type="button"><a class="nav__link" href="/games/<?= $game['id'] ?>">Naviguer vers le détail</a></button>
    </article>
<?php endforeach; ?>