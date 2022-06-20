@extends('layouts.main')

@section('title', '{{$character->name}}')




@section('content')
    <div class="single-comic">
        <section id="jumbotron"></section>
        <div class="blue-band">
            <div class='figure'>
                
                <img src="{{ $character->img }}">
                <div class="view-gallery">view gallery</div>
            </div>
        </div>
        <div class="main-content">
            <div class="comic-description">
                <div class="left-side">

                    <h2>{{ $character->name }}</h2>
                    
                    <p>{{$character->description}}</p>
                </div>
                <div class="right-side">

                    <h3>advertisement</h3>
                    <img src="{{ asset('images/adv.jpg') }}" alt="">

                </div>
            </div>

            <div class="comic-spec">
                <div class="left-side">
                    <h2>Powers</h2>
                    <div class="artist">
                        <h5>Art by:</h5>
                        <p>
                            
                                <a href="#">{{ $character->powers }}</a>,

                        </p>
                    </div>
                    <div class="writers">
                        <h5>First apparance</h5>
                        <p>
                            
                                <a href="#">{{ $character->first_apparance }}</a>,

                           
                        </p>
                    </div>
                </div>
                
            </div>


        </div>

        <div class="shop_banner border border-3">
            <div class="container ">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-5 d-flex justify-content-center align-item-center ">
                    <div class="col d-flex p-2 justify-content-between align-item-center gap-4 text-secondary fw-bold border border-top-0 border-3">
                        <span class="align-self-center">DIGITAL COMICS</span>
                        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                    </div>
                    <div class="col d-flex p-2 justify-content-between align-item-center  gap-4 text-secondary fw-bold  border border-top-0 border-3">
                        <span class="align-self-center">DC MERCHANDISE</span>
                        <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                    </div>
                    <div class="col d-flex p-2 justify-content-between align-item-center gap-4  text-secondary fw-bold  border border-top-0 border-3">
                        <span class="align-self-center">SUBSCRIPTION</span>
                        <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                    </div>
                    <div class="col d-flex p-2 justify-content-between align-item-center gap-4  text-secondary fw-bold  border border-top-0 border-3">
                        <span class="align-self-center">COMIC SHOP LOCATOR</span>
                        <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                    </div>
                    <div class="col d-flex p-2 justify-content-between align-item-center gap-4  text-secondary fw-bold border border-top-0 border-3">
                        <span class="align-self-center">DC POWER VISA</span>
                        <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
