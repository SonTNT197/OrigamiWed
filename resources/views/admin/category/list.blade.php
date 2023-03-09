@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Name</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty($category))
                @foreach ($category as $i=>$cat)
                <tr class="odd gradeX" align="center">
                    <td>{{$cat->name_category}}</td>
                    <td><img src="{{asset($cat->img_category)}}" alt="" width="100px"></td>
                    <td>
                        <a href="{{url('admin/category/edit',$cat->id_category)}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('admin/category/delete',$cat->id_category)}}" class="btn btn-danger">Delete</a>
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
