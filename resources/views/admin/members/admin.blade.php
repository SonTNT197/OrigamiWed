
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
                        <th>email</th>
                        <th>Updation time</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty($ads))
                @foreach ($ads as $i=>$ad)
                <tr class="odd gradeX" align="center">
                    <td>{{$ad->name}}</td>
                    <td>{{$ad->email}}</td>
                    <td>{{$ad->updated_at}}</td>
                    <td>
                        <a href="{{url('admin/ad/delete',$ad->id)}}" class="btn btn-danger">Delete</a>
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