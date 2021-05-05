<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- /google font -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- /font awesome -->

    <link rel="stylesheet" href="css/style.css">
    <!-- vue cdn developers -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- /vue cdn developers -->

    <!-- axios cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <!-- /axios cdn -->

    <title>Dischi Musicali</title>
  </head>
  <body>

    <div id="app" class="container">
      <header>
        <img class="logo" src="img/download.png" alt="">
      </header>

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
