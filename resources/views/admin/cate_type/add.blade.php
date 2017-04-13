   @extends('admin.layout.master')
   @section('content')
   <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category_type
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('cate_type_add_post')}}" method="post">
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
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             <div class="form-group">
                                <label for="">Category</label>
                                <select name="txtCateName" class="form-control">
                                @foreach($category as $cate)
                                    <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category_type name</label>
                                <input class="form-control" name="txtCateType" placeholder="Please Enter Category Name" />
                            </div>
                            
                        
                            <button type="submit" class="btn btn-success">Category Add</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection