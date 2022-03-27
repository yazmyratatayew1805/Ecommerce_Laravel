@extends('auth.layouts.master')

@isset($propertyOption)
    @section('title', 'Mazmunyň görnüşini üýtgetmek ' . $propertyOption->name)
@else
    @section('title', 'Mazmunyň görnüşini goşmak')
@endisset

@section('content')
    <div style="margin-top: 10%; color: #2c2172;" class="col-md-12">
        @isset($propertyOption)
            <h1>Mazmunyň görnüşini üýtgetmek<b>{{ $propertyOption->name }}</b></h1>
                @else
                    <h1>Mazmunyň görnüşini goşmak</h1>
                @endisset

                <form method="POST" enctype="multipart/form-data"
                      @isset($propertyOption)
                      action="{{ route('property-options.update', [$property, $propertyOption]) }}"
                      @else
                      action="{{ route('property-options.store', $property) }}"
                    @endisset
                >
                    <div>
                        @isset($propertyOption)
                            @method('PUT')
                        @endisset
                        @csrf
                            <div>
                                <h2>Mazmun {{ $property->name }}</h2>
                            </div>
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">Mazmunyň görnüşiň ady(RU):: </label>
                            <div class="col-sm-6">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="name" id="name"
                                       value="@isset($propertyOption){{ $propertyOption->name }}@endisset">
                            </div>
                        </div>

                            <br>
                            <div class="input-group row">
                                <label for="name" class="col-sm-2 col-form-label">Mazmunyň görnüşiň ady(TM): </label>
                                <div class="col-sm-6">
                                    @error('name_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="name_en" id="name_en"
                                           value="@isset($propertyOption){{ $propertyOption->name_en }}@endisset">
                                </div>
                            </div>

                            <button class="btn btn-success">Ýatda sakla</button>
                    </div>
                </form>
    </div>
@endsection

