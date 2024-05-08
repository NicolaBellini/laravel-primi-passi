
@include('layouts.head')
@include('layouts.header')


<div class="jumbotron container  text-center">
    <h1 class="display-4 text-start m-5">About</h1>
    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus cupiditate, cumque accusantium incidunt aliquam minima culpa ipsam quod voluptates rerum, tempora veritatis beatae labore? Deleniti minus velit libero eum dignissimos facere nostrum debitis labore tempore nobis iste ad iure, dicta, neque ratione rem suscipit eveniet! Quam praesentium molestiae fugiat obcaecati.+</p>
    <hr class="my-4">
    <p>torna alla Home</p>
    <a class="btn btn-outline-dark  btn-lg mb-4 " href="{{ route('home') }}" role="button"><span><i class="fa-solid fa-sailboat"></i></span></a>
</div>

<div class="w-100">
    <div class="about_img">
        <img src="https://images.unsplash.com/photo-1536595977641-d9bb9df72c70?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGdyZXlzfGVufDB8fDB8fHww"  alt="Immagine grande">
    </div>
</div>

@include('layouts.footer')
