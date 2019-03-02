@extends ('layouts.app')

@section ('content')

{{-- news slider --}}
<section id="news">
    {{-- sliders --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                {{-- news sliders --}}
                <div class="jumbotron jumbotron-fluid slide1">
                    <div class="container">
                        <h1 class="display-4">Gebyar SKM N 1</h1>
                        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error aperiam
                            repellat modi totam culpa! Beatae fuga ratione ab repudiandae optio.</p>
                        <hr class="py-1">
                        <a href="" class="btn btn-primary">Read More ></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                {{-- news sliders --}}
                <div class="jumbotron jumbotron-fluid slide2">
                    <div class="container">
                        <h1 class="display-4">Juara 1 Volyball Putra</h1>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi similique ex
                            libero corrupti facilis incidunt quas quod quis, perferendis minima!</p>
                        <hr class="py-1">
                        <a href="" class="btn btn-primary">Read More ></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                {{-- news sliders --}}
                <div class="jumbotron jumbotron-fluid slide3">
                    <div class="container">
                        <h1 class="display-4">Persami SMK Negeri 1</h1>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat tempora
                            aliquam distinctio sed illum earum cupiditate rem molestiae animi excepturi?</p>
                        <hr class="py-1">
                        <a href="" class="btn btn-primary">Read More ></a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- sliders --}}

    {{-- news 2 --}}
    <div class="container">
        <div class="row justify-content-center mb-5">
            <i class="fa fa-arrow-down fa-3x"></i>
        </div>

        <div class="row border py-4 px-3 bg-light shadow">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/slide1.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Berita</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/slide2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Berita</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/slide1.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Berita Lagi</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

         <div class="row border py-4 px-3 bg-light shadow">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/slide1.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Berita</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/slide2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Berita</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/slide1.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Berita Lagi</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

         <div class="row border py-4 px-3 bg-light shadow">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/slide1.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Berita</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/slide2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Berita</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/slide1.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Berita Lagi</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 {{-- footer --}}
    <footer class="bg-dark">
        <div class="container">
            <div class="row justify-content-center text-white pt-3">
                <p>Copyright</p>
            </div>
        </div>
    </footer>
@endsection