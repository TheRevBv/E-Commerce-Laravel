<li class="list-group-item">
    <div class="row">
        <div class="col-2">
            <img src="{{ $item->imagen }}" alt="" class="img-fluid">
        </div>
        <div class="col-4">
            <h4>{{ $item->nombre }}</h4>
            <p>{{ $item->descripcion }}</p>
        </div>
        <div class="col-2">
            <h4>${{ $item->precio }}</h4>
        </div>
        <div class="col-2">
            <h4>{{ $item->cantidad }}</h4>
        </div>
        <div class="col-2">
            <h4>${{ $item->precio * $item->cantidad }}</h4>
        </div>
    </div>
</li>
