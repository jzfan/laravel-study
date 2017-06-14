<div class="showcase">
<div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="card-image-box">
                    @include('front.partials.card-image', ['article' => $tops[0], 'title' => $tops[0]->category])
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-black">
                    @include('front.partials.card', ['article' => $tops[1], 'title' => $tops[1]->category])
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-black">
                    @include('front.partials.card', ['article' => $tops[2], 'title' => $tops[2]->category])
                </div>
            </div>
        </div>
        <div class="row">
            @foreach (array_slice($tops->all(), 3) as $top)
            <div class="col-md-4 col-sm-6">
                <div class="card-black">
                    @include('front.partials.card', ['article' => $top, 'title' => $top->category])
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>