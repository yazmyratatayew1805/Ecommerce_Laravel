<div class="col-sm-6 col-md-3">
    <div class="thumbnail">
        <div class="labels">
            @if($sku->product->isNew())
                <span class="badge badge-success">@lang('main.properties.new')</span>
            @endif

            @if($sku->product->isRecommend())
                <span class="badge badge-warning">@lang('main.properties.recommend')</span>
            @endif

            @if($sku->product->isHit())
                <span class="badge badge-danger">@lang('main.properties.hit')</span>
            @endif
        </div>

        <img style="height: 350px;" src="{{ url('storage/'.$sku->product->image) }}" alt="{{ $sku->product->__('name') }}">
        <div class="caption">
            <h3>{{  substr(strip_tags($sku->product->__('name')),0,20) }}  </h3>
            @isset($sku->product->properties)
                @foreach ($sku->propertyOptions as $propertyOption)
                    <h4>{{ $propertyOption->property->__('name') }}: {{ $propertyOption->__('name') }}</h4>
                @endforeach
            @endisset
            <p>
                {{ $sku->price }} {{ $currencySymbol->symbol }}</p>
            <p>
            <form action="{{ route('basket-add', $sku) }}" method="POST">
                @if($sku->isAvailable())
                    <button type="submit" class="btn btn-primary" role="button">@lang('main.add_to_basket')</button>
                @else
                    @lang('main.not_available')
                @endif
                <a href="{{ route('sku',
                    [isset($category) ? $category->code :
                    $sku->product->category->code, $sku->product->code, $sku->id]) }}"
                   class="btn btn-dark"
                   role="button">@lang('main.more')</a>
                @csrf
            </form>
            </p>

        </div>
    </div>
</div>
