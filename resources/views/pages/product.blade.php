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
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 menu-left">
			<ul class="list-group">
			<h4 class="list-group-item menuh3">Category</h4>
				  <li class="list-group-item"><a href="">First item</a>
						<ul>
							<li class="list-group-item child" ><a href="">item 1</a></li>
							<li class="list-group-item child"><a href="">item 2</a></li>
						</ul>

				  </li>

				  <li class="list-group-item"><a href="">Second item</a></li>
				  <li class="list-group-item"><a href="">Third item</a></li>
			</ul>
		</div>
		<!-- End for menu-->

		<!-- Spend for content-->
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<div class="row">
				<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<h2>San pham moi nhat</h2>
				</div>
			</div><!--End row title -->
			<div class="row">
				<div class="container">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							  <label for="sel1">Category:</label>
							  <select class="form-control category" id="sel1">
							    <option>Food</option>
							    <option>Drink</option>
							  </select>
						</div>
					</div><!--End -->

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							  <label for="sel1">Category type:</label>
							  <select class="form-control category" id="sel1">
							    <option>Seafood 1</option>
							    <option>Seafood 2</option>
							    <option>Seafood 3</option>
							 
							  </select>
						</div>
					</div><!--End -->

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
			<div class="container">
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="addcart" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="addcart" class="btn btn-success">Add to cart</a>
									<a href="addcart" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="addcart" class="btn btn-success">Add to cart</a>
									<a href="addcart" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="addcart" class="btn btn-success">Add to cart</a>
									<a href="addcart" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->

			</div>
		</div><!--end 1 row -->
		
		<!--                            -->	
		<div class="row">
			<div class="container">
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->

			</div>
		</div><!--end 1 row -->
		<!--                            -->	
		<!-- Pagination -->
		<div class="row">
			<div class="container text-center">
				<ul class="pagination text-center">
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
			</ul>
			</div>
		</div>
			
		<!-- End Pagination -->
	
		</div>
		<!-- Spend for End content-->	
		</div>
</div>

<!-- row 2 -->
<div class="row main">
	<div class="container-fluid">		

		<!-- Spend for content-->
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-md-offset-2">
		<div class="row">
			<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h2>San pham noi bat</h2>
			</div>
					
			</div>
		</div>
	
		<div class="row">
			<div class="container">
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->

			</div>
		</div><!--end 1 row -->
		
		<!--                            -->	
		<div class="row">
			<div class="container">
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">		
						<div class="thumbnail">
							<img src="user/image_slide/1.jpg" alt="img1">
							<div class="caption">
								<h3>Title</h3>
								<p>
									Lorem ipsum dolor sit gamit alone ki ajono mo to
								</p>
								<p>
									<a href="#" class="btn btn-success">Add to cart</a>
									<a href="#" class="btn btn-danger">More details</a>
								</p>
							</div>
						</div>
					
				</div><!--end-->

			</div>
		</div><!--end 1 row -->
		<!--                            -->	
		<!-- Pagination -->
		<div class="row">
			<div class="container text-center">
				<ul class="pagination text-center">
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
			</ul>
			</div>
		</div>
			
		<!-- End Pagination -->
	
		</div>
		<!-- Spend for End content-->	
		</div>
</div>
@endsection('content')
