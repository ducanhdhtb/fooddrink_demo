 
@extends('admin.layout.master')
@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
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
                        <form action="{{route('add_product_post')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             <div class="form-group">
                                <label for="">Category</label>
                                <select name="txtCateType" class="form-control" id="category">
                                @foreach($category as $cate)
                                    <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                                @endforeach
                                </select>
                            </div>

                                                         <div class="form-group">
                                <label for="">Category type</label>
                                <select name="txtCateType" class="form-control" id="category_type">
                                @foreach($category_type as $cate_type)
                                    <option value="{{$cate_type->id}}">{{$cate_type->name}}</option>
                                @endforeach
                                </select>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $('#category').change(function(){
                                        var category_id=$(this).val();
                        
                                      $.get("admin/ajax/category/"+category_id,function(data)
                                      {
                                            $("#category_type").html(data);
                                      });
                                    });
                                });
                            </script>

                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="txtPrice" placeholder="Please Enter Price..." />
                            </div>
                            <div class="form-group">
                                <label>Summary</label>
                                <textarea class="form-control" rows="3" name="txtSummary"></textarea>
                            </div>
                           
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="txtImage">
                            </div>
                            
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control" rows="3" name="txtDescription"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Product Status</label>
                                <label class="radio-inline">
                                    <input name="txtTrending" value="0" checked="" type="radio">Normal
                                </label>
                                <label class="radio-inline">
                                    <input name="txtTrending" value="1" type="radio">Feature
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success">Product Add</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection