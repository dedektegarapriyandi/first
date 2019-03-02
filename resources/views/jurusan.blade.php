@extends ('layouts.app')

@section ('content')

{{-- jurusan --}}
<section id="jurusan">
    <div class="container">
        <div class="row mb-4">
            <h1 class="display-4 border-bottom border-danger mt-5">Jurusan</h1>
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

 {{-- footer --}}
    <footer class="bg-dark">
        <div class="container">
            <div class="row justify-content-center text-white pt-3">
                <p>Copyright</p>
            </div>
        </div>
    </footer>

@endsection