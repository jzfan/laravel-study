<div class="showcase">
    <div class="container card-black">
        <div class="row">
            <div class="col-md-8 col-sm-8 card-big">
                @include('front.partials.card', ['article' => $tops[0]])
            </div>
            <div class="col-sm-4 card-right">
                @include('front.partials.card', ['article' => $tops[1]])
            </div>
            <div class="col-sm-4 card-right">
                @include('front.partials.card', ['article' => $tops[2]])
            </div>
        </div>
        <div class="row">
            
            @foreach (array_slice($tops->all(), 3) as $top)
            <div class="col-md-4 col-sm-6">
                @include('front.partials.card', ['article' => $top])
            </div>
            @endforeach
        </div>
    </div>
</div>