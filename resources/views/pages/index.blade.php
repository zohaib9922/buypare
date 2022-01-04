@extends('layouts.master')
@section('title') Home @endsection
@section('content')

<div class="banner">
    <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
        <!-- Wrapper-for-Slides -->
        <div class="carousel-inner" role="listbox">  
            <div class="item active"><!-- First-Slide -->
                <img src="images/5.jpg" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <h3 data-animation="animated flipInX">Flat <span>50%</span> Discount</h3>
                    <h4 data-animation="animated flipInX">Hot Offer Today Only</h4>
                </div>
            </div>  
            <div class="item"> <!-- Second-Slide -->
                <img src="images/8.jpg" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <h3 data-animation="animated fadeInDown">Our Latest Fashion Editorials</h3>
                    <h4 data-animation="animated fadeInUp">cupidatat non proident</h4>
                </div>
            </div> 
            <div class="item"><!-- Third-Slide -->
                <img src="images/3.jpg" alt="" class="img-responsive"/>
                <div class="carousel-caption kb_caption kb_caption_center">
                    <h3 data-animation="animated fadeInLeft">End Of Season Sale</h3>
                    <h4 data-animation="animated flipInX">cupidatat non proident</h4>
                </div>
            </div> 
        </div> 
        <!-- Left-Button -->
        <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
            <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> 
        <!-- Right-Button -->
        <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
            <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> 
    </div>
    <script src="js/custom.js"></script>
</div>

<!-- //banner -->  
<!-- welcome -->
<div class="welcome"> 
   
    <div class="container"> 
        <div class="welcome-info">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class=" nav-tabs" role="tablist">
                    <li><a href="/Audio/products" >
                        <img src="/images/headphones.png"> 
                        <h5>Audio</h5>
                    </a></li>
                    <li><a href="/Outerwear/products" >
                        <img src="/images/outerwear.png"> 
                        <h5>Outerwear</h5>
                    </a></li>
                    <li><a href="/Mobiles&Tablets/products">
                        <img src="/images/mobile.png"> 
                        <h5>Mobiles & Tablets</h5>
                    </a></li>
                    <li><a href="/Women's Apparel/products">
                        <img src="/images/woman.png"> 
                        <h5>Women's Apparel</h5>
                    </a></li>


                </ul>
                <div class="clearfix"> </div>
            </div>  
        </div>  	
    </div>  	
</div> 
<!-- //welcome -->
<!-- add-products -->
<div class="add-products"> 
    <div class="container">  
        <div class="add-products-row">
            <div class="w3ls-add-grids">
                <a href="/products"> 
                    <h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
                    <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                </a>
            </div>
            <div class="w3ls-add-grids w3ls-add-grids-mdl">
                <a href="/products"> 
                    <h4>SUNDAY SPECIAL DISCOUNT FLAT <span>40%</span> OFF</h4>
                    <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                </a>
            </div>
            <div class="w3ls-add-grids w3ls-add-grids-mdl1">
                <a href="/products"> 
                    <h4>LATEST DESIGNS FOR YOU <span> Hurry !</span></h4>
                    <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                </a>
            </div>
            <div class="clerfix"> </div>
        </div>  	
    </div>  	
</div>
<!-- //add-products -->

<!-- deals -->
<div class="deals"> 
    <div class="container"> 
        <h3 class="w3ls-title">DEALS OF THE DAY </h3>
        <div class="deals-row">
            @foreach ($catData as $Data)
                <div class="col-md-3 focus-grid"> 
                    <a href="{{ $Data }}/products" class="wthree-btn"> 
                        <div class="focus-image"><i class="fa fa-mobile"></i></div>
                        <h4 class="clrchg">{{ $Data }}</h4> 
                    </a>
                </div>    
            @endforeach
            
            {{-- <div class="col-md-3 focus-grid"> 
                <a href="/products" class="wthree-btn wthree1"> 
                    <div class="focus-image"><i class="fa fa-laptop"></i></div>
                    <h4 class="clrchg"> Electronics & Appliances</h4> 
                </a>
            </div> 
            <div class="col-md-3 focus-grid"> 
                <a href="/products" class="wthree-btn wthree2"> 
                    <div class="focus-image"><i class="fa fa-wheelchair"></i></div>
                    <h4 class="clrchg">Furnitures</h4>
                </a>
            </div> 
            <div class="col-md-3 focus-grid"> 
                <a href="/products" class="wthree-btn wthree3"> 
                    <div class="focus-image"><i class="fa fa-home"></i></div>
                    <h4 class="clrchg">Home Decor</h4>
                </a>
            </div> 
            <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
                <a href="/products" class="wthree-btn wthree3"> 
                    <div class="focus-image"><i class="fa fa-book"></i></div>
                    <h4 class="clrchg">Books & Music</h4> 
                </a>
            </div>
            <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
                <a href="/products" class="wthree-btn wthree4"> 
                    <div class="focus-image"><i class="fa fa-asterisk"></i></div>
                    <h4 class="clrchg">Fashion</h4>
                </a>
            </div>
            <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
                <a href="/products" class="wthree-btn wthree2"> 
                    <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                    <h4 class="clrchg">Kids</h4>
                </a>
            </div> 
            <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
                <a href="/products" class="wthree-btn wthree"> 
                    <div class="focus-image"><i class="fa fa-shopping-basket"></i></div>
                    <h4 class="clrchg">Groceries</h4>
                </a>
            </div> 
            <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
                <a href="/products" class="wthree-btn wthree5"> 
                    <div class="focus-image"><i class="fa fa-medkit"></i></div>
                    <h4 class="clrchg">Health</h4> 
                </a>
            </div> 
            <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
                <a href="/products" class="wthree-btn wthree1"> 
                    <div class="focus-image"><i class="fa fa-car"></i></div>
                    <h4 class="clrchg">Automotive</h4> 
                </a>
            </div>
            <div class="col-md-3 focus-grid"> 
                <a href="/products" class="wthree-btn wthree2"> 
                    <div class="focus-image"><i class="fa fa-cutlery"></i></div>
                    <h4 class="clrchg">Food</h4> 
                </a>
            </div>
            <div class="col-md-3 focus-grid"> 
                <a href="/products" class="wthree-btn wthree5"> 
                    <div class="focus-image"><i class="fa fa-futbol-o"></i></div>
                    <h4 class="clrchg">Sports</h4> 
                </a>
            </div> 
            <div class="col-md-3 focus-grid"> 
                <a href="/products" class="wthree-btn wthree3"> 
                    <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                    <h4 class="clrchg">Games & Toys</h4> 
                </a>
            </div> 
            <div class="col-md-3 focus-grid"> 
                <a href="/products" class="wthree-btn "> 
                    <div class="focus-image"><i class="fa fa-gift"></i></div>
                    <h4 class="clrchg">Gifts</h4> 
                </a>
            </div>  --}}
            <div class="clearfix"> </div>
        </div>  	
    </div>  	
</div> 
@endsection

