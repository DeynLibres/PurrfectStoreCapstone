@extends('layouts.footer')
@extends('layouts.app')


@section('content')
<div class="container-xl">
    <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%;">Product</th>   
                    <th style="width:10%;">Price</th>   
                    <th style="width:8%;">Quantity</th>  
                    <th style="width:22%;" class="text-center">Subtotal</th>  
                    <th style="width:10%;"></th>  
                </tr>
            </thead>   

            <tbody>
                @php $total = 0 @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    @php
                        $total += $details['product_price'] * $details ['quantity']
                    @endphp

                    <tr data-id="{{$id}}">
                        <td data-th = "Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{asset('img')}}/{{$details['product_img']}}" width="100" height="120" alt="">  </div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{$details['product_name']}}</h4>
                                </div>
                         
                            </div>

                        </td>

                        <td data-th="Price">${{$details['product_price']}}

                        </td>
                        <td data-th="Quantity">
                            <input type="number" value="{{$details['quantity']}}" class="form-control quantity cart_update" min="1">

                        </td>
                            <td data-th="Subtotal" class="text-center">${{$details['product_price'] * $details['quantity']}}

                            </td>
                            <td class="action" data-th="">
                                    <button class="btn btn-danger btn-sm cart_remove"><i class="fa-solid fa-trash"> Delete</i></button>
                            </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                <tfoot class="">

                        <tr>   
                            <td colspan="5" class="text-right"><h3><strong>Total ${{$total}}</strong></h3> </td>
                        </tr>

                        <tr>
                            <td colspan="5" class="text-right" style="">
                                <a href="{{url('/')}}" class="btn btn-danger"> <i class="fa-solid fa-arrow-left"></i>Continue Shopping</a>

                                <button class="btn btn-sucess"> <i class="fa-solid fa-money-bill"></i>Check Out</button>

                            </td>
                        </tr>
                </tfoot>
        </table>

        </div>

    @section('scripts')

        <script type= "text/javascript">

        $(".cart_remove").click(function(e){
            e.preventDefault();

            var ele =$(this);

            if(confirm("Do you really want to remove?")){
                $.ajax({
                    url:'{{route('remove_from_cart')}}',
                    method: "DELETE",
                    data:{
                        _token:'{{csrf_token()}}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response{
                        window.location.reload();
                    })
                })
            }
        });

        </script>
    @endsection





@endsection


