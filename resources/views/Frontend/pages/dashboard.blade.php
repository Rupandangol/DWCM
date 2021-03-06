@extends('Frontend.index')

@section('frontendTitle')
    Trending

@endsection

@section('frontendContent')

    <div class="w3-display-container w3-container">
        <img src="{{URL::to('img/pubg.jpg')}}" alt="Jeans" style="width:100%">
        <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
            <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
            <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
            <h1 class="w3-hide-small">COLLECTION 2016</h1>
            <p><a style="text-decoration: none" href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
        </div>
    </div>

    <div class="w3-container w3-text-grey" id="jeans">
        <p>8 items</p>
    </div>

    <!-- Product grid -->
    <div class="w3-row w3-grayscale">
        <div class="w3-col l3 s6">
            <div class="w3-container">
                <img src="{{URL::to('img/asdf.jpeg')}}" style="width:100%">
                <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
            </div>
            <div class="w3-container">
                <img src="{{URL::to('img/asdf.jpeg')}}" style="width:100%">
                <p>Mega Ripped Jeans<br><b>$19.99</b></p>
            </div>
        </div>

        <div class="w3-col l3 s6">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="{{URL::to('img/asdf.jpeg')}}" style="width:100%">
                    <span class="w3-tag w3-display-topleft">New</span>
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Mega Ripped Jeans<br><b>$19.99</b></p>
            </div>
            <div class="w3-container">
                <img src="{{URL::to('img/asdf.jpeg')}}" style="width:100%">
                <p>Washed Skinny Jeans<br><b>$20.50</b></p>
            </div>
        </div>

        <div class="w3-col l3 s6">
            <div class="w3-container">
                <img src="{{URL::to('img/asdf.jpeg')}}" style="width:100%">
                <p>Washed Skinny Jeans<br><b>$20.50</b></p>
            </div>
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="{{URL::to('img/asdf.jpeg')}}" style="width:100%">
                    <span class="w3-tag w3-display-topleft">Sale</span>
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
            </div>
        </div>

        <div class="w3-col l3 s6">
            <div class="w3-container">
                <img src="{{URL::to('img/asdf.jpeg')}}" style="width:100%">
                <p>Vintage Skinny Jeans<br><b>$14.99</b></p>
            </div>
            <div class="w3-container">
                <img src="{{URL::to('img/asdf.jpeg')}}  " style="width:100%">
                <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
            </div>
        </div>
    </div>
@endsection
