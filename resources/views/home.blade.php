@extends('layout.app')

@section('title','Home')

@section("content")

<div class="container-fluid parallax mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 topDiv text-center">
            <h1 class=''>Software Engineer </h1>
            <h3 class=''> Mobile & Web</h3>
            <button class="btn btn-primary">Learn More</button>
        </div>

    </div>
</div>

<div class="container mt-5 mb-5 text-center">
    <h2 clsss=''>  My Services<br><br></h2>
    <div class="row">
    <div class="col-md-4 p-2">
            <div class="card" style="width:100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5 text-center">
    <h2 clsss=''> Recent Project<br><br></h2>
    <div class="row">
    <div class="col-md-4 p-2">
            <div class="card" style="width:100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Recent Project</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Recent Project</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Recent Project</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5 text-center ">
<h2 clsss=''> Contact With Me<br><br></h2>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d775.6690825557496!2d91.79314995507853!3d22.364019012167986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDIxJzM4LjAiTiA5McKwNDcnMzIuMyJF!5e0!3m2!1sen!2sbd!4v1625176511322!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

@endsection

