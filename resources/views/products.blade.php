
@extends('layouts.footer')

@extends('layouts.app')




@section('content')

    <div class="container-xl">
        
        <div class="slider container-fluid" style="max-width: 100%;">
        <div class="container chewy-carousel" >
         <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
           
           <div class="carousel-inner">
             <div class="carousel-item active">
               <div class="overlay"></div>
               <img src="https://cms-www.chewy.com/contentAsset/image/d39f7bda-7874-4ef4-adc5-2e7459f7565a/fileAsset/byInode/1/filter/Resize,Jpeg/jpeg_q/100/resize_w/1440/resize_h/296/2022-Vibeful-HP-Hero-LARGE.jpg" alt="">
               
             </div>
             <div class="carousel-item">
             <img src="https://cms-www.chewy.com/contentAsset/image/05b81d57-4a5f-4407-994e-add04d15f239/fileAsset/byInode/1/filter/Resize,Jpeg/jpeg_q/100/resize_w/1440/resize_h/296/2023-01_NewPet-Multi-HP-Hero-LARGE.jpg" alt="">
              
             </div>
             <div class="carousel-item">
                <img src="https://cms-www.chewy.com/contentAsset/image/dfa0c8fa-b212-4a95-a326-69755ca7cd12/fileAsset/byInode/1/filter/Resize,Jpeg/jpeg_q/100/resize_w/1440/resize_h/296/2022-06-JFFD-Variety-HP-Hero-LARGE-1440.jpg" alt="">
             </div>
             <div class="carousel-item">
                <img src="https://cms-www.chewy.com/contentAsset/image/654ccc5f-1088-49eb-8cc2-cba19fcbe994/fileAsset/byInode/1/filter/Resize,Jpeg/jpeg_q/100/resize_w/1440/resize_h/296/pharmacy-refresh-large.jpg" alt="">
             </div>
             <div class="carousel-item">
                <img src="https://cms-www.chewy.com/contentAsset/image/05b81d57-4a5f-4407-994e-add04d15f239/fileAsset/byInode/1/filter/Resize,Jpeg/jpeg_q/100/resize_w/1440/resize_h/296/2023-01_NewPet-Multi-HP-Hero-LARGE.jpg" alt="">
               <div class="carousel-caption d-none d-md-block">
              
               </div>
             </div>
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
           </button>
         </div>
       </div></div>
        <div class="row productss">
            
            @foreach($purrfect_products as $purrfect_product)
            <div class="col-lg-3 col-md-6 col-sm-12 " style="margin-top: 10px" >
               <div class="img_thumbnail productlist">
                    <div class="img-product-container">
                    <img src="{{asset('img')}}/{{$purrfect_product->product_img}}" alt="img-fluid">

                    </div>
                    <div class="caption">
                        <h4>{{$purrfect_product->product_name}}</h4>
                 

                        <div class="product-price">
                        <p><strong>{{$purrfect_product->product_price}}</strong></p>
                        </div>
                    </div>
                        <div class="product-button">
                        <p class="btn-holder"><a href="{{route('add_to_cart', $purrfect_product->id )}}" class="btn btn-block text-center" role="button">Add to Cart</a></p>
                        </div>

                        
                    
                </div>
           
               </div>
            @endforeach
        </div>
    </div>
@endsection
