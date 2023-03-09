@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add
                    <small>Admin</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label><input type="text" name="name" class="form-control" value="{{old('name')}}">
                        @error('name')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label><input type="text" name="email" class="form-control" value="{{old('email')}}">
                        @error('email')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label><input type="password" name="password" class="form-control" value="">
                        @error('password')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label><input type="password" name="password_confirmation" class="form-control" value="">
                        @error('password_confirmation')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Authority</label>
                        <select name="authority" class="form-control" value="{{old('authority')}}">
                            <option value="">Please choose authority</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        @error('authority')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop
