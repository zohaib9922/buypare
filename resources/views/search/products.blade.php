@extends('layouts.master')
@section('title') Products @endsection
@section('content')
<div class="products">	 
    <div class="container">
        <div class="container">
            <div class="row">
                <h2 class="listing-title">Products</h2>
                <div class="bread-crumbs">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								{{-- <div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Nike </a></li>
											<li><a href="">Under Armour </a></li>
											<li><a href="">Adidas </a></li>
											<li><a href="">Puma</a></li>
											<li><a href="">ASICS </a></li>
										</ul>
									</div>
								</div> --}}
							</div>
							<div class="panel panel-default">
								{{-- <div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Fendi</a></li>
											<li><a href="">Guess</a></li>
											<li><a href="">Valentino</a></li>
											<li><a href="">Dior</a></li>
											<li><a href="">Versace</a></li>
											<li><a href="">Armani</a></li>
											<li><a href="">Prada</a></li>
											<li><a href="">Dolce and Gabbana</a></li>
											<li><a href="">Chanel</a></li>
											<li><a href="">Gucci</a></li>
										</ul>
									</div>
								</div> --}}
							</div>
							
							<div class="panel panel-default">
								{{-- <div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="/women/products">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Fendi</a></li>
											<li><a href="">Guess</a></li>
											<li><a href="">Valentino</a></li>
											<li><a href="">Dior</a></li>
											<li><a href="">Versace</a></li>
										</ul>
									</div>
								</div> --}}
							</div>
                            @foreach ($catData as $category)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="/{{ $category }}/products">{{ $category }}</a></h4>
                                </div>
                            </div>        
                        @endforeach
						</div><!--/category-productsr-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right"></span>All</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Samsung</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Xiamoi</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Apple</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="slidecontainer mt-n1">
                            <form action="search-by-price" method="Post" enctype="multipart/form-data">
                                @csrf
                                <h2>Price</h2>
                                <input type="range" id="myRange" name="range" min="1" max="100" value="50">
                                <input type="hidden" value="" name="price" id="price">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Low</p>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <p>High</p>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" name="Apply" value="Apply"  class="btn col-md-12 btn-primary">    
                                    </div>
                                </div>
                            </form>
                        </div>
						
						
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
                <div class="wrap-flex products-container col-sm-9">
                    <div class="wrapper">
                        {{-- <ul id="results"><!-- Products all appear here part of the ul li --></ul> --}}
                        @foreach ($products as $product) 
                            @php
                                $title = $product->Field1;
                            @endphp
                            
                            <div class="col-md-3 lazy product-colum col-sm-6">
                                <div class="product-grid3">
                                    <div class="product-image3">
                                        <a href="/product-detail/{{ $title }}">
                                            <img class="pic-1" src="{{ $product->Image_URL }}">
                                            <img class="pic-2" src="{{ $product->Image_URL }}">
                                        </a>
                                        <ul class="social">
                                            <li><a href="/product-detail/'.$title.'"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">New</span>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="/product-detail/'.$title.'"><b> {{ $title }}</b></a></h3>
                                        @if(!empty($product->Field6))
                                            <span style="display:block; margin-bottom:10px;" class="specifications-1"> {{ $product->Field6 }}</span>
                                        @endif
                                        @if(!empty($product->Category))
                                            <span style="display:block; margin-bottom:10px;" class="specifications-1">Category: {{ $product->Category }}</span>
                                        @endif
                                        <div class="location-span">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i><span class="location">{{ $product->Text1 }}</span>
                                            <span class="company-icon"><img src="/images/Lazada-icon.svg"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                        
                        <div style="justify-content: center;" class="wrap-flex products-container col-sm-9">
                            <div class="wrapper">
        
                                <div class="row" id="data_temp"></div>
                                <div class="ajax-load text-center" style="display:none">
                                <i class="mdi mdi-48px mdi-spin mdi-loading"></i> Loading ...
                                </div>
                                <div class="no-data text-center mb-4" style="display:none">
                                <b>No data - last page</b>
                                </div>
                                    
                                <div style="width: 100%" class="full-page-loading"><div class="auto-load text-center">
                                    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                                        <path fill="#000"
                                            d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                            <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                                from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                                        </path>
                                    </svg>
                                </div></div>
                             </div>
                     </div>
                     
            </div>
        </div>
    </div>


    
        
        <div class="clearfix"> </div>
        <!-- recommendations -->
        <div class="recommend">
            <h3 class="w3ls-title">Our Recommendations </h3> 
            <script>
                $(document).ready(function() { 
                    $("#owl-demo6").owlCarousel({
                 
                      autoPlay: 3000, //Set AutoPlay to 3 seconds
                 
                      items :4,
                      itemsDesktop : [640,5],
                      itemsDesktopSmall : [414,4],
                      navigation : true
                 
                    });
                    
                }); 
            </script>
            <div id="owl-demo6" class="owl-carousel">
                <div class="item">
                    <div class="glry-w3agile-grids agileits">
                        <div class="new-tag"><h6>20% <br> Off</h6></div>
                        <a href="products1.html"><img src="images/f2.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products1.html">Women Sandal</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$20</h5>
                            <form action="#" method="">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Women Sandal" /> 
                                <input type="hidden" name="amount" value="20.00" /> 
                                <button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
                            </form>
                        </div>        
                    </div> 
                </div>
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <a href="products.html"><img src="images/e4.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products.html">Digital Camera</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$80</h5>
                            <form action="#" method="">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Digital Camera"/> 
                                <input type="hidden" name="amount" value="100.00" /> 
                                <button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
                            </form>
                        </div>         
                    </div>  
                </div>  
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <div class="new-tag"><h6>New</h6></div>
                        <a href="products4.html"><img src="images/s1.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products4.html">Roller Skates</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$180</h5>
                            <form action="#" method="">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Roller Skates"/> 
                                <input type="hidden" name="amount" value="180.00" /> 
                                <button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
                            </form>
                        </div>         
                    </div>  
                </div>
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <a href="products1.html"><img src="images/f1.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products1.html">T Shirt</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$10</h5>
                            <form action="#" method="">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="T Shirt" /> 
                                <input type="hidden" name="amount" value="10.00" /> 
                                <button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
                            </form>
                        </div>        
                    </div>    
                </div>
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <div class="new-tag"><h6>New</h6></div>
                        <a href="products6.html"><img src="images/p1.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products6.html">Coffee Mug</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$14</h5>
                            <form action="#" method="">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Coffee Mug" /> 
                                <input type="hidden" name="amount" value="14.00" /> 
                                <button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
                            </form>
                        </div>         
                    </div>  
                </div>
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <div class="new-tag"><h6>20% <br> Off</h6></div>
                        <a href="products6.html"><img src="images/p2.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">              
                            <h4><a href="products6.html">Teddy bear</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$20</h5>
                            <form action="#" method="">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Teddy bear" /> 
                                <input type="hidden" name="amount" value="20.00" /> 
                                <button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
                            </form>
                        </div>        
                    </div> 
                </div>
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <a href="products4.html"><img src="images/s2.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products4.html">Football</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$70</h5>
                            <form action="#" method="">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Football"/> 
                                <input type="hidden" name="amount" value="70.00"/>
                                <button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
                            </form>
                        </div>        
                    </div> 
                </div> 
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <div class="new-tag"><h6>Sale</h6></div>
                        <a href="products3.html"><img src="images/h1.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products3.html">Wall Clock</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$80</h5>
                            <form action="#" method="">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Wall Clock" /> 
                                <input type="hidden" name="amount" value="80.00" /> 
                                <button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
                            </form>
                        </div>         
                    </div>  
                </div> 
            </div>    
        </div>
        <!-- //recommendations -->
    </div>
</div>



@endsection
@section('jsContent')
<script src="/js/prettyphoto.js" type="text/javascript"></script>
<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("price");
    
    
    output.innerHTML = slider.val(); // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
    slider.oninput = function() {
        $("#price").val(output);
    }
</script>

@endsection