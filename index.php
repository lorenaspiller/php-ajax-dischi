<?php 
    include __DIR__ . '/database.php'; 
    include __DIR__ . '/partials/template/head.php'; 
?>

<body>

    <div class="container">
    <?php include __DIR__ . '/partials/template/header.php'; ?>

      <main>
        <div class="albums-row">
            <?php foreach($albums as $album): ?>
                <div class="album"  >
                    <img class="album__image" src="<?php echo $album['poster']; ?>" alt="<?php echo $album['title']; ?>">
                    <h3 class="album__title text-uppercase"><?php echo $album['title']; ?></h3>
                    <div class="album__genre"><?php echo $album['genre']; ?></div>
                    <div class="album__author"><?php echo $album['author']; ?></div>
                    <div class="album__year"><?php echo $album['year']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
      </main>
    </div>


  </body>
</html>

