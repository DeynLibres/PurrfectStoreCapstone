@extends('layouts.footer')
@extends('layouts.app')

@section('content')
<div class="container-x">
    <h1>CREATE ITEM</h1>   
    <label class="form-label" for="customFile">Add Photo</label>
<input type="file" class="form-control" id="customFile" />

<label for="fname">Product Name</label>
 <input type="text" id="fname" name="firstname" placeholder="John M. Doe">

 <label for="fname">Product Price</label>
 <input type="number" id="fname" name="firstname" placeholder="0000">



</div>


@endsection