	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 menu-left" style="border:1px solid red">
			<ul class="list-group">
			<h4 class="list-group-item menuh3">Category</h4>
			@foreach($category as $cate )
				  <li class="list-group-item"><a href="{{$cate['id']}}">{{$cate['category_name']}}</a>
					<ul>
				@foreach($cate->category_types as $c)
					<li class="list-group-item child" ><a href="category_type/{{$c['id']}}/{{str_slug($c['name'],'-')}}.html">{{$c['name']}}</a></li>
				@endforeach	
					</ul>

				  </li>
		
			@endforeach
				  
			</ul>
		</div>