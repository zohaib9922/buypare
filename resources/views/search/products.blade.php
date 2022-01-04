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
                <div style="justify-content: center;" class="wrap-flex products-container col-sm-9">
                    {{-- @if ($count/2 == 0) --}}
                    <div class="wrapper">
                       @php
                          $data = $Lazaadaproducts->merge($products);
                          $shuffled = $data->shuffle();
                          
                       @endphp
                       @foreach ($shuffled as $product) 
                             <div class="col-md-3 lazy product-colum col-sm-6">
                                <div class="product-grid3">
                                   <div class="product-image3">
                                   @if(!empty($product->product_title))
                                      <a href="/product-detail/{{ $product->product_title }}">
                                   @else
                                      <a href="/product-detail/{{ $product->field_one }}">
                                   @endif
     
                                   @if(!empty($product->image_url1))
                                      <img class="pic-1" src="{{ $product->image_url1 }}">
                                   @else
                                   <img class="pic-1" src="{{ $product->image_url }}">
                                   @endif
     
                                   @if(!empty($product->image_url2 ))
                                      <img class="pic-2" src="{{ $product->image_url2 }}">
                                   @elseif(!empty($product->image_url))
                                      <img class="pic-2" src="{{ $product->image_url }}">
                                   @endif
     
                                   </a>
                                   <ul class="social">
                                      @if(!empty($product->product_title))
                                         <li><a href="/product-detail/{{ $product->product_title }}"><i class="fa fa-shopping-cart"></i></a></li>
                                      @else
                                         <li><a href="/product-detail/{{ $product->field_one }}"><i class="fa fa-shopping-cart"></i></a></li>
                                      @endif
                                   </ul>
                                   </div>
                                   <div class="product-content">
                                      @if(!empty($product->product_title))
                                         <h3 class="title"><a href="/product-detail/{{ $product->product_title }}"><b>{{ $product->product_title }}</b></a></h3>
                                      @else
                                         <h3 class="title"><a href="/product-detail/{{ $product->field_one }}"><b>{{ $product->field_one }}</b></a></h3> 
                                      @endif
     
                                      @if(!empty($product->Price))
                                         <span style="display:block; margin-bottom:10px;" class="specifications-1">{{ $product->price }}</span>
                                      @else
                                         <span style="display:block; margin-bottom:10px;" class="specifications-1">{{ $product->field_six }}</span>    
                                      @endif
     
                                      @if(!empty($product->category))
                                         <span style="display:block; margin-bottom:10px;" class="specifications-1">category: {{ $product->category }}</span>
                                      @else
                                         <span style="display:block; margin-bottom:10px;" class="specifications-1">category: {{ $product->category }}</span> 
                                      @endif
                                   <div class="location-span">
                                      @if(!empty($product->category))                                 
                                         <i class="fa fa-map-marker" aria-hidden="true"></i><span class="location">{{ $product->location }}</span>
                                      @else
                                         <i class="fa fa-map-marker" aria-hidden="true"></i><span class="location">{{ $product->prod_text }}</span>
                                      @endif
     
                                      @if($product->getTable() == 'lazada_products')
                                         <span class="company-icon"><img src="/images/Lazada-icon.svg"></span>
                                      @else
                                         <span class="company-icon"><img src="/images/shopee-icon.png"></span>
                                      @endif
                                   </div>
                                   </div>
                                </div>
                             </div>                  
                         @endforeach
                         {{-- @foreach ($products as $product)                    
                             <div class="col-md-3 lazy product-colum col-sm-6">
                                 <div class="product-grid3">
                                     <div class="product-image3">
                                     <a href="/product-detail/{{ $product->field_one }}">
                                     <img class="pic-1" src="{{ $product->Image_URL }}">
                                     <img class="pic-2" src="{{ $product->Image_URL }}">
                                     </a>
                                     <ul class="social">
                                         <li><a href="/product-detail/{{ $product->field_one }}"><i class="fa fa-shopping-cart"></i></a></li>
                                     </ul>
                                     </div>
                                     <div class="product-content">
                                     <h3 class="title"><a href="/product-detail/{{ $product->field_one }}"><b>{{ $product->field_one }}</b></a></h3>
                                     <span style="display:block; margin-bottom:10px;" class="specifications-1">{{ $product->Field6 }}</span>
                                     <span style="display:block; margin-bottom:10px;" class="specifications-1">category: {{ $product->category }}</span>
                                     <div class="location-span">
                                         <i class="fa fa-map-marker" aria-hidden="true"></i><span class="location">{{ $product->Text1 }}</span>
                                         <span class="company-icon"><img src="/images/shopee-icon.png"></span>
                                     </div>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                          --}}
                         
                    </div>
                     <div class="pagination">
                         {{ $products->links('pagination::bootstrap-4') }}
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