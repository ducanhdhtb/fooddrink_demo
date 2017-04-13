@foreach($product as $prd)
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" >		
							<div class="thumbnail">
								<img src="upload/products/{{$prd['image']}}" alt="img1" class="img-circle">
								<div class="caption">
									<h3 style="text-align:center;color: blue">{{$prd['name']}}</h3>
									<p style="font-weight: bold;text-align:center">{{$prd['price']}}<p>
									<p style="color:green">
										{{$prd['summary']}}
									</p>
									<p>
										<a href="addcart/{{$prd['id']}}" class="btn btn-success">Add to cart</a>
										<a href="detail/{{$prd['id']}}" class="btn btn-danger">More details</a>
									</p>
								</div>
							</div>					
					</div>
@endforeach