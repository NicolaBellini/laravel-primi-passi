
@include('layouts.head')
@include('layouts.header')


<div class="jumbotron jumbotron-fluid bg-dark text-white">
    <div class="container">
        <h1 class="display-4">Nicola Bellini</h1>
        <p class="lead">Prima esercitazione con Laravel</p>
        <hr class="my-4">

        <a class="btn btn-primary btn-lg mb-2 " href="{{ route('about') }}" role="button">Scopri di più</a>
    </div>
</div>


<div class="gallery">
    <!-- Immagine 1 -->
    <div class="item">
        <img src="image1.jpg" alt="Immagine 1">
    </div>
    <!-- Immagine 2 -->
    <div class="item">
        <img src="image2.jpg" alt="Immagine 2">
    </div>
    <!-- Aggiungi altre immagini qui -->
    <!-- Immagine 20 -->
    <div class="item">
        <img src="image20.jpg" alt="Immagine 20">
    </div>
</div>



@include('layouts.footer')
