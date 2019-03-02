@extends ('layouts.app')

@section ('content')

{{-- about --}}
<section id="about">
    <div class="container">
        <div class="row text-center justify-content-center">
            <h1 class="border-bottom border-danger display-4 mt-5">About</h1>
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
    <footer class="bg-dark fixed-bottom">
        <div class="container">
            <div class="row justify-content-center text-white pt-3">
                <p>Copyright</p>
            </div>
        </div>
    </footer>

@endsection