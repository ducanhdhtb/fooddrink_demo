@extends('master')
@section('slide')
<div class="row">
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Start for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="user/image_slide/1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="user/image_slide/1.jpg"" alt="Chania">
    </div>

    <div class="item">
      <img src="user/image_slide/1.jpg"" alt="Flower">
    </div>

    <div class="item">
      <img src="user/image_slide/1.jpg"" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection
@section('content')
	<div class="row main">
	<div class="container-fluid">
		<!-- Spend for menu-->
	@include('pages.layout.menu')
		<!-- End for menu-->

		<!-- Spend for content-->
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<div class="row">
				<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<h2>Optional</h2>
				</div>
			</div><!--End row title -->
							<div class="container">
				<div class="row">
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						 <li><a href="#">{{ $category_type_name->category->category_name }}</a></li>
						<li class="active">{{ $category_type_name['name'] }}</li>
					</ol> 
				</div>
			</div>
		</div><!--end 1 row -->
		
		<!--                            -->	
		<div class="row">
			<div class="container">
				@foreach($product as $prd)	
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">	
			
						<div class="thumbnail">
							<img src="upload/products/{{ $prd['image'] }} " alt="img1" class="img-responsive">
							<div class="caption">
									<h3>{{ $prd['name'] }}</h3>
									<p>
										{{ $prd['summary'] }}
									</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
			
				</div><!--end-->
				
					@endforeach		
			</div>
		
		</div><!--end 1 row -->
		<!--                            -->	
		<!-- Pagination -->
		<div class="row">
			<div class="container text-center pagination">
				{{ $product->links() }}
			</div>
		</div>
			
		<!-- End Pagination -->
	
		</div>
		<!-- Spend for End content-->	
		</div>
</div>


@endsection('content')
