@extends('master')
@section('content')
<div class="row">
	<div class="container">
		<div class="text-center">
				<div class="example">
<div class="container">
    <div class="row">
    <h2>Register for customer</h2>
        <form action="#" method="post">
       			 <input type="hidden" name="_token" value="{{csrf_token()}}">
		      <table class="table-condensed">
		      	<tr>
		      		<td><label>Full name</label></td>
		      		<td><input type="email" class="form-control" placeholder="Your name"></td>
		      	</tr>
		      	<tr>
		      		<td>Email</td>
		      		<td><input type="email" class="form-control" placeholder="Your email"></td>
		      	</tr>
		      	<tr>
		      		<td><label>Password</label></td>
		      		 <td><input type="password" class="form-control" placeholder="Password"></td>
		      	</tr>
		      	<tr>
		      		<td> <label>Repeat password</label></td>
		      		<td><input type="password" class="form-control" placeholder="Password"></td>
		      	</tr>
		      	<tr>
		      		<td> <label>Avartar</label></td>
		      		<td><input type="file" class="form-control" placeholder="Email" name="file"></td>
		      	</tr>
		      	<tr>
		      		<td>Yourself</td>
		      		<td><textarea class="form-control" rows="5" id="comment"></textarea></td>
		      	</tr>
		      	<tr>
		      		<td>Date of birth</td>
		      		<td><input type="text" id="datepicker" class="form-control"></td>
		      	</tr>
		      	<tr>
		      		<td>Role</td>
		      		<td>
					<input type="radio" name="role" value="1">Admin
		      		<input type="radio" name="role" value="0" checked="checked">customer</td>
		      	</tr>
		      	<tr>
		      		<td colspan="1" style="padding-left:30px"><input type="submit" class="btn btn-primary" />
		      		<input type="reset" class="btn btn-danger" /></td>
		      	</tr>

		     	
		      </table>
		  </form>
    </div>
</div>
     
</div>
		</div>
	</div>
</div>

@endsection