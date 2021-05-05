<?php include __DIR__ . '/partials/template/head.php'; ?>

<?php include __DIR__ . '/partials/template/header.php'; ?>






      <main>
        <div class="albums-row">
          <div class="album" v-for="album in albums">
            <img class="album__image" :src="album.poster" :alt="album.title">
            <h3 class="album__title text-uppercase">{{album.title}}</h3>
            <div class="album__genre">{{album.genre}}</div>
            <div class="album__author">{{album.author}}</div>
            <div class="album__year">{{album.year}}</div>
          </div>
        </div>
      </main>
    </div>


    <!-- javascript link -->
    <script src="js/script.js" charset="utf-8"></script>
    <!-- /javascript link -->

  </body>
</html>
