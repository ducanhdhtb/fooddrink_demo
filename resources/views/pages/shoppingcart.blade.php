@extends('master')
@section('content')
<div class="container">
  <div class="row">
    <div class="text-center">
        <table class="table" border="1px">
              <thead>
                <tr style="background: silver">
                  <th>Product name</th>
                  <th width="40px">Price</th>
                  <th>Image</th>
                  <th>quantity</th>
                  <th>total</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
             
              @foreach($content as $item)
                <tr class="danger">
                  <td></td>
                  <td>{!! $item->price !!}</td>
                  <td><img width="40px" src="upload/products/{!! $item->options->img !!}" alt=""></td>
                  <td><input class="form-controll" type="text" value="1"></td>
                  <td>600000US</td>
                  <td><a href="#">Update</a></td>
                  <td><a href="#">Delete</a></td>
                </tr>      
                @endforeach
                <tr>
                <td></td>
                  <td colspan="6">
                  <input type="submit" class="btn btn-primary" value="Add to card" />
                  <input type="reset" class="btn btn-danger" value="Continue to cart"  />
                  </td>
              </tr>
              <h2></h2>
    </tbody>
  </table>
    </div>
  </div>
</div>
	
@endsection

