@extends('master')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-3">
			<form>
					<h2 style="color:pink">Login checkery</h2>
		        <div class="form-group">
		            <label>Email</label>
		            <input type="email" class="form-control" placeholder="Email">
		        </div>
		        <div class="form-group">
		            <label>Mật Khẩu</label>
		            <input type="password" class="form-control" placeholder="Password">
		        </div>
		        <div class="checkbox">
		            <label><input type="checkbox"> Ghi Nhớ</label>
		        </div>
        <button type="submit" class="btn btn-primary">Đăng Nhập</button>
        <button type="submit" class="btn btn-danger">Sign in with Facebook</button>
        <button type="submit" class="btn btn-success">Sign in with google</button>
    </form>
		</div>
	</div>
</div>
 
@endsection('content')