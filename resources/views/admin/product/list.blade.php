@extends('admin.layouts.index')

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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Name</th>
                        <th>Image</th>
                        <th>Style</th>
                        <th>Level</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty($products))
                @foreach ($products as $i=>$pro)
                <tr class="odd gradeX" align="center">
                    <td>{{$pro->name_origami}}</td>
                    <td><img src="{{asset($pro->img_origami)}}" alt="" width="100px"></td>
                    @foreach ($category as $x=>$cat)
                    @if($pro->category==$cat->id_category)
                    <td>{{$cat->name_category}}</td>
                    @endif
                    @endforeach
                    @foreach ($level as $y=>$lev)
                    @if($pro->level==$lev->id_level)
                    <td>{{$lev->name_level}}</td>
                    @endif
                    @endforeach
                    
                    <td>
                        <a href="{{url('admin/product/edit',$pro->id_origami)}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('admin/product/delete',$pro->id_origami)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection
