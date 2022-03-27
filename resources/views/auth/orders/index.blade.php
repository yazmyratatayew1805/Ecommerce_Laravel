@extends('auth.layouts.master')

@section('title', 'Sargytlar')

@section('content')
   {{-- <div style="margin-top: 10%;" class="col-md-12">--}}
   <div style="display: inline;margin-top: 15%; " class="offset-7 col-xl-12 col-md-6">
        <h1 style="color: #2c2172;">Sargytlar</h1>
        <table class="table">
            <tbody>
            <tr style="color: #2c2172;">
                <th>
                    #
                </th>
                <th>
                    Ady
                </th>
                <th>
                    Telefon
                </th>
                <th>
                    Iberilen wagty
                </th>
                <th>
                    Jemi Bahasy
                </th>
                <th>
                    Sazlamalar
                </th>
            </tr>
            @foreach($orders as $order)
                <tr style="color: #2c2172;">
                    <td>{{ $order->id}}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                    <td>{{ $order->sum }} {{ $order->currency->symbol }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a style="background-color: #2c2172; color: white;" class="btn " type="button"
                               @admin
                               href="{{ route('orders.show', $order) }}"
                               @else
                               href="{{ route('person.orders.show', $order) }}"
                                @endadmin
                            >Giňişleýin</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $orders->links() }}
    </div>

    <div style="display: inline;margin-left: -95%; " class="col-xl-8">
        <img style="border-bottom-left-radius: 15%; border-bottom-right-radius: 20%; " src="{{asset('images/photos.jpg')}}">
    </div>
@endsection
