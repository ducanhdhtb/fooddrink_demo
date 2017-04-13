@extends('admin.layout.master')
@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('flash'))
                            <marquee class="alert alert-danger">
                                {{session('flash')}}
                            </marquee>
                        @endif


                        @if(count($errors)>0)
                            @foreach($errors->all() as $err)
                            <marquee class="alert alert-danger">
                                {{$err}}
                            </marquee>                           
                            @endforeach
                        @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Image product</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Is_trending</th>
                                <th>Summary</th>
                                <th>Description</th>
                                <th>Category type</th>
                                <th>Create_at</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $product)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $product->id }}</td>
                                <td><img width="40px" height="40px" src="upload/products/{{$product->image}}" alt=""></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ number_format($product->price) . "USD" }}</td>
                                <td>@if($product->is_trending ==1)
                                 {{"Feature"}}
                                @else
                                 {{"Normal"}}
                                 @endif
                                 </td>
                                <td>{{ $product->summary }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->category_type->name }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/delete/{{ $product->id }}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                         @endforeach   
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection