
@include('layouts.head')
@include('layouts.header')


<div class="jumbotron jumbotron-fluid my_jumbo">
    <div class="container">
        <h1 class="display-4">Nicola Bellini</h1>
        <p class="lead">Prima esercitazione con Laravel</p>
        <hr class="my-4">

        <a class="btn btn-outline-light  btn-lg mb-2 " href="{{ route('about') }}" role="button">Scopri di più</a>
    </div>
</div>


<div class="gallery">

    <div class="item a">
        <img src="https://picsum.photos/seed/picsum/200/300" alt="Immagine 1">
    </div>

    <div class="item b">
        <img src="https://picsum.photos/200/300?grayscale" alt="Immagine 2">
    </div>
     <div class="item a">
        <img src="https://picsum.photos/201/300?grayscale" alt="Immagine 2">
    </div>
      <div class="item b">
        <img src="https://picsum.photos/202/300?grayscale" alt="Immagine 2">
    </div>
      <div class="item a">
        <img src="https://picsum.photos/203/300?grayscale" alt="Immagine 2">
    </div>
      <div class="item b">
        <img src="https://picsum.photos/204/300?grayscale" alt="Immagine 2">
    </div>
      <div class="item a">
        <img src="https://picsum.photos/205/300?grayscale" alt="Immagine 2">
    </div>
      <div class="item b">
        <img src="https://picsum.photos/206/300?grayscale" alt="Immagine 2">
    </div>
      <div class="item a">
        <img src="https://picsum.photos/207/300?grayscale" alt="Immagine 2">
    </div>
      <div class="item b">
        <img src="https://picsum.photos/208/300?grayscale" alt="Immagine 2">
    </div>
      <div class="item a">
        <img src="https://picsum.photos/209/300?grayscale" alt="Immagine 2">
    </div>
      <div class="item b">
        <img src="https://picsum.photos/210/300?grayscale" alt="Immagine 2">
    </div>

</div>



@include('layouts.footer')
