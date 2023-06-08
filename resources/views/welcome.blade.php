<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
<div id="tutto">
    <!-- header -->
    <header>
      <!-- navbar -->
      <nav class="container">
        <img src="./assets/img/dc-logo.png" alt="logo-small">
        <ul>
          <li class="elem.current ? 'active-nav' : '' " v-for="(elem, index) in contacts" :key="index">
            <a href="elem.url">{{ elem.nome }}</a>
          </li>
        </ul>
      </nav>
    </header>

    <!-- Main -->
    <main>
      <!-- content goes here -->
      <section id="content-goes-here">
        <div id="jumbotron"></div>
        <div class="container">
            <div id="contents">
                <a>CURRENT SERIES</a>
                <div id="container-series">
                    <div id="content" v-for="(elem, index) in series" :key="index">
                        <img :src="elem.thumb" alt="thumb">
                        <h3>{{ elem.series }}</h3>
                    </div>
                </div>
                <div id="load">
                    <a href="/">LOAD MORE</a>
                </div>
            </div>
        </div>
      </section>

      <!-- links bg-blue -->
      <section id="links-DC">
        <div class="container">
          <ul>
            <li>
              <img src="./assets/img/buy-comics-digital-comics.png" alt="">
              <a href="/">DIGITAL COMICS</a>
            </li>
            <li>
              <img src="./assets/img/buy-comics-merchandise.png" alt="">
              <a href="/">DC MERCHANDISE</a>
            </li>
            <li>
              <img src="./assets/img/buy-comics-subscriptions.png" alt="">
              <a href="/">SUBSCRUBTION</a>
            </li>
            <li>
              <img src="./assets/img/buy-comics-shop-locator.png" alt="">
              <a href="/">COMIC SHOP LOCATOR</a>
            </li>
            <li>
              <img src="./assets/img/buy-dc-power-visa.svg" alt="">
              <a href="/">DC POWER VISA</a>
            </li>
          </ul>
        </div>
      </section>
    </main>

    <!-- footer -->
    <footer>
      <!-- all links -->
      <section id="all-links">
        <div class="container">
          <div>
            <ul>
              <h2>DC COMICS</h2>
              <li>
                <a href="/">Characters</a>
              </li>
              <li>
                <a href="/">Comics</a>
              </li>
              <li>
                <a href="/">Movies</a>
              </li>
              <li>
                <a href="/">TV</a>
              </li>
              <li>
                <a href="/">Games</a>
              </li>
              <li>
                <a href="/">Videos</a>
              </li>
              <li>
                <a href="/">News</a>
              </li>

              <h2>SHOP</h2>
              <li>
                <a href="/">Shop DC</a>
              </li>
              <li>
                <a href="/">Shop DC Collectibles</a>
              </li>
            </ul>
            <ul>
              <h2>DC</h2>
              <li>
                <a href="/">Terms Of Use</a>
              </li>
              <li>
                <a href="/">Privacy policy (new)</a>
              </li>
              
            </ul>
            <ul>
              <h2>SITES</h2>
              <li>
                <a href="/">DC</a>
              </li>
              <li>
                <a href="/">MAD Magazine</a>
              </li>
              <li>
                <a href="/">DC Kids</a>
              </li>
              <li>
                <a href="/">DC Universe</a>
              </li>
              <li>
                <a href="/">DC Power Visa</a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- SIGN-UP -->
      <section id="sign-up">
        <div id="sign-up-c" class="container">
          <div>
            <button>SIGN-UP NOW!</button>
          </div>

          <div>
            <ul>
              <h2>FOLLOW US</h2>
              <li>
                <img src="./assets/img/footer-facebook.png" alt="">
              </li>
              <li>
                <img src="./assets/img/footer-twitter.png" alt="">
              </li>
              <li>
                <img src="./assets/img/footer-youtube.png" alt="">
              </li>
              <li>
                <img src="./assets/img/footer-pinterest.png" alt="">
              </li>
              <li>
                <img src="./assets/img/footer-periscope.png" alt="">
              </li>
            </ul>
          </div>
        </div>
      </section>
    </footer>
  </div>
</body>

</html>