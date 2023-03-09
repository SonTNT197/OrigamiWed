@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name Origami</label><input type="text" name="name_origami" class="form-control" value="{{$product->name_origami}}">
                        @error('name_origami')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Imgage</label>
                        <p><img src="{{asset($product->img_origami)}}" alt="" width="100px"></p>
                        <input type="file" name="img_origami" value="{{$product->img_origami}}">
                        @error('img_origami')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select class="form-control" name="category">
                            @foreach($category as $cat)
                            <option @if( $cat->id_category==$product->category) {{"selected"}} @endif
                                value="{{$cat->id_category}}">{{$cat->name_category}}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Level</label>
                        <select class="form-control" name="level">
                            @foreach($level as $lev)
                            <option @if( $lev->id_level==$product->level) {{"selected"}} @endif
                                value="{{$lev->id_level}}">{{$lev->name_level}}</option>
                            @endforeach
                        </select>
                        @error('level')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>

                    <table class="table table-bordered table-hover col-lg-12">
                        <thead>
                            <tr align="center">
                                <th></th>
                                <th>Name Step</th>
                                <th>Image</th>
                                <th>Describle</th>
                            </tr>
                        </thead>
                        <tbody class="body">
                            @if(!empty($step))
                            @foreach ($step as $i=>$st)
                            <tr class="odd gradeX step" align="center">
                                <td><input type="hidden" name="id_step[{{$i+1}}]" id="idStep" class="form-control" value="{{$st->id_step}}"></td>
                                <td><input type="text" name="name_step[{{$i+1}}]" id="nameStep" class="form-control" value="{{$st->name_step}}"></td>
                                <td>
                                <p><img src="{{asset($st->img_step)}}" alt="" width="100px"></p>
                                <input type="file" name="img_step[{{$i+1}}]" id="imgStep"></td>
                                <td><textarea class="form-control" rows="3" id="describle" name="deseribe[{{$i+1}}]">{{$st->deseribe}}</textarea></td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-success mt-2">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@stop