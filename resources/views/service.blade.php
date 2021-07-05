@extends('layout.app')

@section('title','Service')

@section('content')

<div class="container-fluid bg-dark">
    <div class="row p-5">
         <div class="col-md-12 text-center ">
            <h4 class='text-white'>My Services</h4>
         </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 p-2">
            <div class="card" style="width:100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>
    
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row">

    <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                </div>    
                <div class="mb-3">
                    <label for="mobile" class="form-label">Your Mobile</label>
                    <input type="text" class="form-control" id="mobile" aria-describedby="emailHelp">
                </div> 
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div> 
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <input type="text" class="form-control" id="message" aria-describedby="emailHelp">
                </div> 
                
                <button type="submit" class="btn btn-primary">Send Now</button>
            </form>
        </div>


        <div class="col-md-6">
            <h5>Address</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed doloribus esse impedit aperiam atque obcaecati laborum natus sunt asperiores porro veritatis mollitia nobis, qui, alias possimus accusamus cupiditate aliquam vero.</p>
            <p>01685960000</p>
            <p>example@gmail.com</p>
        </div>
        
    </div>
</div>



@endsection