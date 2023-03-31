@extends('layouts.footer')
@extends('layouts.app')


@section('content')
<div class="container-xl">
    <div class="row">
        <div class="col-75">
          <div class="container">
            <form action="/action_page.php">
      
              <div class="row">
                <div class="col-50">
                  <h3>Billing Address</h3>
                  <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" placeholder="john@example.com">
                  <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                  <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                  <label for="city"><i class="fa fa-institution"></i> City</label>
                  <input type="text" id="city" name="city" placeholder="New York">
                <div class="col-50">
                  <h3>Payment</h3>
                  <label for="fname">Accepted Cards</label>
                  <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <label for="cname">Name on Card</label>
                  <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                  <label for="ccnum">Credit card number</label>
                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                  <label for="expmonth">Exp Month</label>
                  <input type="text" id="expmonth" name="expmonth" placeholder="September">
      
                  <div class="row">
                    <div class="col-50">
                      <label for="expyear">Exp Year</label>
                      <input type="text" id="expyear" name="expyear" placeholder="2018">
                    </div>
                    <div class="col-50">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352">
                    </div>
                  </div>
                </div>
      
              </div>
              <label>
                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
              </label>
              <input type="submit" value="Continue to checkout" class="btn btn-info">
            </form>
          </div>
        </div>
        <br>
        <br>
        <br>
        <h4 style="font-size:2rem; font-weight:600;">Cart</h4>
        <div class="col-25 cartz">
          <div class="container">
           
            @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            <div class="row cart-detail">
                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                        <img src="{{asset('img')}}/{{$details['product_img']}}" alt="">
                    </div>
                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                        <p>{{$details['product_name']}}</p>
                        <span class="price text-info"> ${{$details['product_price']}}</span>    <span class="count"> Quantity:{{$details['quantity']}}</span>

                    </div>
                    
            </div>
            @endforeach

            @endif
            <div class="row total-header-section">
                @php $total = 0 @endphp
                @foreach((array) session('cart') as $id => $details)
                @php $total += $details['product_price'] * $details['quantity'] @endphp
                @endforeach
        </div>
        
          </div>
        </div>

        <div class="text-end mx-5">
            <p class="T">Total: <span class="text-info">${{$total}}</span></p>    
    </div>  
      </div>
</div>
</div>
@endsection