@extends('layouts.main')

@section('title', '{{$comic["title"]}}')




@section('content')
    <div class="single-comic">
        <section id="jumbotron"></section>
        <div class="blue-band">
            <div class='figure'>
                <div class="type">{{$comic["type"]}}</div>
                <img src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}">
                <div class="view-gallery">view gallery</div>
            </div>
        </div>
        <div class="main-content">
            <div class="comic-description">
                <div class="left-side">

                    <h2>{{ $comic["title"] }}</h2>
                    <div class="availability">
                        <div class="status">
                            <p>Us price {{ $comic["price"] }}</p>
                            <p>Available</p>
                        </div>
                        <div class="check">
                            <p>Check Availability &downarrow;</p>
                        </div>
                    </div>
                    <p>{{ $comic["description"] }}</p>

                </div>
                <div class="right-side">
                    <h3>advertisement</h3>
                    <img src="{{ asset('images/adv.jpg') }}" alt="">

                </div>
            </div>

            <div class="comic-spec">
                <div class="left-side">
                    <h2>Talent</h2>
                    <div class="artist">
                        <h5>Art by:</h5>
                        <p>
                            @foreach ($comic["artists"] as $artist)

                                <a href="#">{{ $artist }}</a>,

                            @endforeach
                        </p>
                    </div>
                    <div class="writers">
                        <h5>Written by:</h5>
                        <p>
                            @foreach ($comic["writers"] as $writer)

                                <a href="#">{{ $writer }}</a>,

                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="right-side">
                    <h2>Specs</h2>
                    <div class="series">
                        <h5>Series:</h5>
                        <p><a href="#">{{ $comic["series"] }}</a></p>
                    </div>
                    <div class="price">

                        <h5>U.S. Price:</h5>
                        <p>{{ $comic["price"] }}</p>

                    </div>
                    <div class="sale">
                        <h5>On Sale Date:</h5>
                        <p>{{ $comic["sale_date"] }}</p>
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
