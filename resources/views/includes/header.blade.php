<nav class="navbar navbar-default fullwidth transparent">
    <div class="container">
        <div class="navbar-header">
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{asset('img/assets/Logo-white.png')}}" class="logo-light pt10" alt="logo-white" width="85"><img src="{{asset('img/assets/logo-dark.png')}}" class="logo-dark" alt="#"></a>
            </div>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <div class="container">
                <ul class="nav navbar-nav menu-right">
                    <li><a href="{{route('home')}}">Acceuil</a></li>
                    <li><a href="{{route('about')}}">A propos</a></li>
                    <li class="dropdown">
                        <a href="{{route('service')}}">Services<i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Categorie 1</a></li>
                            <li><a href="#">Categorie 2</a></li>
                            <li><a href="#">Categorie 3</a></li>
                            <li><a href="#">Categorie 4</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li class="nav-separator"></li>
                    @if(Auth::user())
                    <li><a href="#">{{auth()->user()->name}}</a></li>
                    <li class="nav-separator"></li>
                    <li>

                        <form  method="POST" action="{{ route('logout') }}" class="nav-a">
                            @csrf
                            <a href="{{route('logout')}}"
                               onclick="event.preventDefault();
                                    this.closest('form').submit();">Se déconnecter</a>
                        </form>
                    </li>
                    <li class="nav-separator"></li>
                    @else
                        <li><a href="{{route('login')}}">Se connecter</a></li>
                        <li class="nav-separator"></li>
                        <li><a href="{{route('register')}}">S'inscrire</a></li>
                        <li class="nav-separator"></li>
                    @endif
                    <li class="nav-icon"><a class="popup-with-zoom-anim search" href="#search-modal"><i class="flaticon-search"></i> <span class="hidden-md">Recherche</span></a></li>
                    <li id="search-modal" class="zoom-anim-dialog mfp-hide"><form><input type="text" id="search-modal-input" placeholder=" Start typing to search..." autocomplete="off"></form></li>
                    <li class="nav-icon dropdown nav-shop-cart">
                        <a class="dropdown-toggle"><i class="flaticon-shop"></i><span class="label-items-in-cart">2</span><span class="hidden-md">Panier</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                        <span class="nav-cart-item">
                                            <img src="img/shop/5.jpg" alt="#">
                                            <span class="nav-cart-item-info">
                                                <span>Sparrow Ankle Pants</span>
                                                <span class="bold">$49.95</span>
                                            </span>
                                            <button class="nav-cart-remove"><i class="ion-close"></i></button>
                                        </span>
                                <span class="nav-cart-item">
                                            <img src="img/shop/3.jpg" alt="#">
                                            <span class="nav-cart-item-info">
                                                <span>Jacquelyn Sleeve Top</span>
                                                <span class="bold">$89.95</span>
                                            </span>
                                            <button class="nav-cart-remove"><i class="ion-close"></i></button>
                                        </span>
                                <span class="nav-cart-total">
                                            <span class="bold white">Totale:<span class="nav-cart-amount">$139.99</span></span>
                                            <a href="shop-cart.html" class="btn btn-xs btn-nav-cart">Consulter le panier</a>
                                            <a href="shop-cart.html" class="btn btn-xs btn-primary btn-nav-checkout">Paiement</a>
                                        </span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
