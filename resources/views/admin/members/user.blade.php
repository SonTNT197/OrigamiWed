@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Name</th>
                        <th>email</th>
                        <th>Verify email</th>
                        <th>Creation time</th>
                        <th>Updation time</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty($users))
                @foreach ($users as $i=>$u)
                <tr class="odd gradeX" align="center">
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->email_verified_at}}</td>
                    <td>{{$u->created_at}}</td>
                    <td>{{$u->updated_at}}</td>
                    <td>
                        <a href="{{url('admin/user/delete',$u->id)}}" class="btn btn-danger">Delete</a>
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
