<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="#">
        <div class="captions">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }}</p>
            <p>
                <a href="#" class="btn btn-primary" role="button">Basket</a>
                {{ $product->getCategory() }}
                <a href="#" class="btn btn-default" role="button">More</a>
            </p>
        </div>
    </div>
</div>