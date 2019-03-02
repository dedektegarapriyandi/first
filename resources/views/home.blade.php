@extends ('layouts.app')

@section ('content')

{{-- jumbotron --}}
<div class="jumbotron jumbotron-fluid myjumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4 animated fadeInLeft">SMK Negeri 1 Kota</h1>
                <h2 class="display-4 animated fadeInUp">Bengkulu</h2>
                <hr class="my-4 animated fadeIn">
                <p class="lead animated fadeIn">Selamat datang di Website SMK Negeri 1 Kota Bengkulu.</p>
            </div>
            <div class="col-md-4">
                <div class="login-box animated fadeInUp">
                    <h1 class="my-4">Log In</h1>
                    <form>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" class="form-control" id="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                        <p class="float-right">belum punya akun ? <a href="" data-toggle="modal" data-target="#register">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- modal register --}}
<section id="register-box">
    <div class="modal fade" id="register" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="username" class="col-form-label">Username :</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email :</label>
                            <input class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password :</label>
                            <input class="form-control" id="password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- deskripsi --}}
<section id="panel">
    <div class="container">
        <div class="row justify-content-center text-center mb-3">
            <div class="col-md-10">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime atque cum ab minus, expedita
                    dignissimos numquam similique neque quae ipsa velit accusamus eligendi sunt quibusdam assumenda.</p>
            </div>
        </div>
        <div class="row justify-content-center text-center mb-4">
            <i class="fa fa-arrow-down fa-3x"></i>
        </div>

        {{-- panel --}}
        <div class="row justify-content-center text-center border shadow py-5 bg-light">
            <div class="col-md-3">
                <h2>Web developer</h2>
                <i class="fa fa-desktop fa-5x mb-3"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, mollitia placeat debitis
                    deserunt ullam exercitationem doloribus expedita!</p>
            </div>
            <div class="col-md-3">
                <h2>Multimedia</h2>
                <i class="fa fa-play fa-5x mb-3"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, mollitia placeat debitis
                    deserunt ullam exercitationem doloribus expedita!</p>
            </div>
            <div class="col-md-3">
                <h2>APP developer</h2>
                <i class="fa fa-mobile-alt fa-5x mb-3"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, mollitia placeat debitis
                    deserunt ullam exercitationem doloribus expedita!</p>
            </div>
        </div>
    </div>
</section>


{{-- news slider --}}
<section id="news">
    <div class="container">
        <div class="row mb-4 justify-content-center">
            <h1 class="display-4 border-bottom border-danger">News</h1>
        </div>
    </div>
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
    </div>
</section>


{{-- jurusan --}}
<section id="jurusan">
    <div class="container">
        <div class="row mb-4">
            <h1 class="display-4 border-bottom border-danger">Jurusan</h1>
        </div>

        <div class="row bg-light">
            <div class="col-md-8 pt-5">
                <h1>Teknik Komputer Dan Jaringan</h1>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut omnis culpa aspernatur autem enim
                    assumenda quidem recusandae cumque, ea doloribus.</h5>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/tkj.jpg') }}" class="img-thumbnail rounded">
            </div>
        </div>
        <hr class="mt-5">

        <div class="row mt-5 bg-light">
            <div class="col-md-4">
                <img src="{{ asset('img/rpl.jpg') }}" class="img-thumbnail rounded">
            </div>
            <div class="col-md-8 pt-5">
                <h1>Rekayasa Perangkat Lunak</h1>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut omnis culpa aspernatur autem enim
                    assumenda quidem recusandae cumque, ea doloribus.</h5>
            </div>
        </div>
        <hr class="mt-5">

        <div class="row mt-5 bg-light">
            <div class="col-md-8 pt-5">
                <h1>Multimedia</h1>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut omnis culpa aspernatur autem enim
                    assumenda quidem recusandae cumque, ea doloribus.</h5>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/multimedia.jpg') }}" class="img-thumbnail rounded">
            </div>
        </div>
        <hr class="mt-5">

        <div class="row mt-5 bg-light">
            <div class="col-md-4">
                <img src="{{ asset('img/akutansi.jpg') }}" class="img-thumbnail rounded">
            </div>
            <div class="col-md-8 pt-5">
                <h1>Akutansi</h1>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut omnis culpa aspernatur autem enim
                    assumenda quidem recusandae cumque, ea doloribus.</h5>
            </div>
        </div>
        <hr class="mt-5">
    </div>
</section>


{{-- about --}}
<section id="about">
    <div class="container">
        <div class="row text-center justify-content-center">
            <h1 class="border-bottom border-danger display-4">About</h1>
        </div>

        <div class="row justify-content-center text-justify mt-4">
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius laboriosam, provident consequuntur
                    earum aut est dolores sed nam incidunt illum qui sequi! Doloremque quos quaerat voluptates
                    repellendus veniam dignissimos laborum aliquid vel ipsum iusto asperiores dolores saepe alias
                    labore obcaecati molestias mollitia, totam error cum excepturi eius. Adipisci, mollitia eos?</p>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore illo totam officiis impedit
                    assumenda cum iste debitis illum sequi a voluptatum cumque perferendis expedita hic tempora commodi
                    quod repellendus doloremque ex ad adipisci optio ducimus, neque est. Aperiam repellat minima
                    dolorem temporibus vel libero itaque cupiditate, cum magni culpa necessitatibus.</p>
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
