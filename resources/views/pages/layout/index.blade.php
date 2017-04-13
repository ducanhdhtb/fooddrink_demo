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
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="border: 1px solid #CCC">
			<div class="row">
				<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<h2>Lastest Products</h2>
				</div>
			</div><!--End row title -->

			<div class="row">
				<div class="container">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							  <label for="sel1">Category:</label>
							  <select class="form-control category" id="category">

							  <option value="0" disabled="true" selected="true">Select Category</option> 
							  @foreach($category as $ct)
							    <option value="{{$ct['id']}}">{{ $ct['category_name'] }}</option>
							   @endforeach
							  </select>
						</div>
					</div><!--End -->

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							  <label for="sel1">Category type:</label>
							  <select class="form-control category" id="sub_category">
							
							  
							  </select>
						</div>
					</div><!--End -->
					
					<script>
						$(document).ready(function(){
							// Load auto
							$(window).on('load', function () {
								var category_id=$("#category").val();
								$.get("category/"+category_id,function(data){
									$("#sub_category").html(data);									
								});

      						 });
							// Bat su kien khi nguoi thay doi form select category
							$("#category").change(function(){
								var category_id=$(this).val();
								$.get("category/"+category_id,function(data){
									$("#sub_category").html(data);									
								});
							});

							// Bat su kien khi nguoi thay doi form select subcategory
							$("#sub_category").change(function(){
									// Load auto
							$(window).on('load', function () {
								var sub_category_id=$(this).val();
									$.get("product/"+sub_category_id,function(data){
									$("#noidunghienthi").html(data);		
								});

      						 });

								var sub_category_id=$(this).val();
								//alert(sub_category_id);
								$.get("product/"+sub_category_id,function(data){
									$("#noidunghienthi").html(data);		
								});
							});
							
						});
					</script>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							  <label for="sel1">Price:</label>
							  <select class="form-control category" id="sel1">
							    <option>10000$-200000$</option>
							    <option>20000$ -500000$</option>
							    <option>50000$-10000000$</option>
							 
							  </select>
						</div>
					</div><!--End -->


				</div>
			</div>
		</div>
	
		<div class="row">
		
				<div class="container"  id="noidunghienthi" >
				@foreach($product as $prd)		
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" >		
							<div class="thumbnail">
								<img src="upload/products/{{ $prd['image'] }}" alt="img1" class="img-circle">
								<div class="caption">
									<h3 style="text-align:center;color: blue">{{ $prd['name'] }}</h3>
									<p style="font-weight: bold;text-align:center">Price : {{$prd['price']}} USD</p>
									<p style="color:green">
										{{ $prd['summary'] }}
									</p>
									<p>
										<a href="addcart/{{$prd['id']}}" class="btn btn-success">Add to cart</a>
										<a href="detail/{{$prd['id']}}" class="btn btn-danger">More details</a>
									</p>
								</div>
							</div>					
					</div><!--end-->
				@endforeach
				</div>			
		</div><!--end 1 row -->
</div>
<div style="clear:both"></div>
<!-- row 2 -->
<div class="row main" style="border:1px solid green">
	<div class="container-fluid">		

		<!-- Spend for content-->
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-md-offset-2">
		<div class="row">
			<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h2>Hot products</h2>
			</div>
					
			</div>
		</div>
	
		<div class="row">
			<div class="container">
			@foreach($product_feature as $prd_feature)
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3 style="text-align:center;color:silver">{{ $prd_feature['name'] }}</h3>
								<p style="font-weight: bold;text-align:center">Price : {{$prd['price']}} USD</p>								
								<p>
									{{ $prd_feature['summary'] }}
								</p>
								<p>
									<a href="addcart/{{$prd_feature['id']}}" class="btn btn-success">Add to cart</a>
									<a href="detail/$prd_feature['id']" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
			@endforeach		
			</div>
		</div><!--end 1 row -->
		<!--                       -->	
	
		</div>
		<!-- Spend for End content-->	
		</div>
</div>
@endsection('content')
