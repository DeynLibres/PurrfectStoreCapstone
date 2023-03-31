@extends('layouts.footer')
@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row">


            @foreach ($purrfect_products as $purrfect_product)
            <div class="col-xs-18 col-sm-6 col-md-3" style="margin-top: 10px" >
               <div class="img_thumbnail productlist">
                    <img src="{{asset('img')}}/{{$purrfect_product->product_img}}" alt="img-fluid">
                    <div class="caption">
                        <h4>{{$purrfect_product->product_name}}</h4></div>
                        <p><strong>{{$purrfect_product->product_price}}</strong></p>
                        <p class="btn-holder"><a href="{{route('add_to_cart', $purrfect_product->id )}}" class="btn btn-block text-center" role="button">Add to Cart</a></p>
                    </div>
           
               </div>
            @endforeach
        </div>
    </div>
@endsection
