@extends('layouts.main')

@section('title', 'Comics')




@section('content')
    <div class="comic-section">
        <section id="jumbotron"></section>
        <section id="main-content">
            <div class="label">
                <h4>current series</h4>
            </div>
            <div class="container d-flex flex-column">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6">
                    @foreach ( $comic_list as $comic)
                        <div class="comic-cover col">
                            <a href="{{url("/comics/$loop->index")}}">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">

                                <p>{{ $comic['title'] }}</p>

                            </a>

                        </div>
                    @endforeach
                </div>
                <button class="text-center align-self-center">Load more</button>
            </div>


        </section>
        <section id="buy-content">
            <div class="container">
                <div class="row row-cols-5 d-flex justify-content-center align-item-center">
                    <div class="col d-flex p-5 justify-content-center align-item-center gap-1">
                        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                        <span class="align-self-center">DIGITAL COMICS</span>
                    </div>
                    <div class="col d-flex p-5 justify-content-center align-item-center gap-1">
                        <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                        <span class="align-self-center">DC MERCHANDISE</span>
                    </div>
                    <div class="col d-flex p-5 justify-content-center align-item-center gap-1">
                        <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                        <span class="align-self-center">SUBSCRIPTION</span>
                    </div>
                    <div class="col d-flex p-5 justify-content-center align-item-center gap-1">
                        <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                        <span class="align-self-center">COMIC SHOP LOCATOR</span>
                    </div>
                    <div class="col d-flex p-5 justify-content-center align-item-center gap-1">
                        <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                        <span class="align-self-center">DC POWER VISA</span>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
