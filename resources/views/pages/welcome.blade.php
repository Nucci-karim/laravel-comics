@extends('layouts.app')

@section('title-page')
 Laravel Comics | Home
@endsection

@section('content')
 <!-- content goes here -->
  <section id="content-goes-here">
    <div id="jumbotron"></div>        <div class="container">
        <div id="contents">
            <a>CURRENT SERIES</a>
            <div id="container-series">
              @foreach($series as $elem)
                <div id="content" v-for="(elem, index) in series">
                    <img src="{{ $elem['thumb'] }}" alt="thumb">
                    <h3>{{ $elem['series'] }}</h3>
                </div>
              @endforeach
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
@endsection