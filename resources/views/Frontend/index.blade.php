@include('Frontend.header')


<!-- Sidebar/menu -->

<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
        <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
        <a style="text-decoration: none; color: black" href="{{url('/')}}"><h3 class="w3-wide"><b>DWP</b></h3></a>

    </div>
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
        @foreach($item as $value)
            <a style="text-decoration: none" href="{{url('page',['page'=>$value->name,'id'=>$value->id])}}" class="w3-bar-item w3-button">{{ucfirst($value->name)}}</a>
        @endforeach
    </div>

    <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
</nav>



<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide    -large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">DWP</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    <!-- Top header -->
    <header class="w3-container w3-xlarge">
        <p class="w3-left">@yield('frontendTitle')</p>
    </header>

@yield('frontendContent')

    <!-- Footer -->
    <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
        <div class="w3-row-padding">
            <div class="w3-col s4">
                <h4>Contact</h4>
                <p>Questions? Go ahead.</p>
                <form action="/action_page.php" target="_blank">
                    <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
                    <button type="submit" class="w3-button w3-block w3-black">Send</button>
                </form>
            </div>


            <div class="w3-col s4">
                <h4>About</h4>
                <p><a href="#">About us</a></p>
                <p><a href="#">We're hiring</a></p>
                <p><a href="#">Support</a></p>
                <p><a href="#">Find store</a></p>
                <p><a href="#">Shipment</a></p>
                <p><a href="#">Payment</a></p>
                <p><a href="#">Gift card</a></p>
                <p><a href="#">Return</a></p>
                <p><a href="#">Help</a></p>
            </div>

            <div class="w3-col s4 w3-justify">
                <h4>Store</h4>
                <p><i class="fa fa-fw fa-map-marker"></i> Company Name</p>
                <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
                <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
                <h4>We accept</h4>
                <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
                <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
                <br>
                <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
                <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
                <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
                <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
                <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
            </div>
        </div>
    </footer>

    <div class="w3-black w3-center w3-padding-24">Powered by Dynamic Web Page</div>

    <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
        <div class="w3-container w3-white w3-center">
            <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
            <h2 class="w3-wide">NEWSLETTER</h2>
            <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
            <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
            <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
        </div>
    </div>
</div>

@include('Frontend.footer')