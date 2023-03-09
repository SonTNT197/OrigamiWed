@extends('admin.layouts.index')

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
            <div class="col-lg-12" style="padding-bottom:120px">
                <form method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="form-group col-lg-6">
                        <label for="">Name Origami</label><input type="text" name="name_origami" class="form-control" value="{{old('name_origami')}}">
                        @error('name_origami')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">Category</label>
                        <select class="form-control" name="category">
                            <option value="">Please Choose Category</option>
                            @foreach($category as $cat)
                            <option {{ old('category') == $cat->id_category ? "selected" : "" }} value="{{ $cat->id_category }}">{{ $cat->name_category}}</option>
                            @endforeach

                        </select>
                        @error('category')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">Level</label>
                        <select class="form-control" name="level">
                            <option value="">Please Choose Level</option>
                            @foreach($level as $lev)
                            <option {{ old('level') == $lev->id_level ? "selected" : "" }} value="{{ $lev->id_level }}">{{ $lev->name_level}}</option>
                            @endforeach
                        </select>
                        @error('level')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">proImg</label><input type="file" name="img_origami" value="{{old('img_origami')}}">
                        @error('img_origami')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <table class="table table-bordered table-hover col-lg-12">
                        <thead>
                            <tr align="center">
                                <th>Name Step</th>
                                <th>Image</th>
                                <th>Describle</th>
                            </tr>
                        </thead>
                        <tbody class="body">
                            <tr class="odd gradeX step" align="center">
                                <td><input type="text" name="name_step" id="nameStep" class="form-control">
                                    <span style="color:red" class="errorName"></span>
                                </td>
                                <span style="color:red" class="errorName"></span>
                                <td><input type="file" name="img_step" id="imgStep" accept=".jpg,.png">
                                    <span style="color:red" class="errorImg" ></span>
                                </td>

                                <td><textarea class="form-control" rows="3" id="describle" name="deseribe"></textarea>
                                    <span style="color:red" class="errorText"></span>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button class="btn btn-default addstep">Add more step</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop
@section('script')
<script>
    var addStep = document.querySelector('.addstep')
    var node = document.querySelector('.body')
    var form = document.getElementById('form');
    addStep.onclick = function(e) {
        e.preventDefault();
        var step = document.createElement('tr');
        step.innerHTML = `<td><input type="text" name="name_step" id="nameStep"class="form-control" >
        <span style="color:red" class="errorName"></span>
        </td>
                                <td><input type="file" name="img_step" id="imgStep">
                                <span style="color:red" class="errorImg"></span>
                                </td>
                                <td><textarea class="form-control" rows="3" id="describle" name="deseribe"></textarea>
                                <span style="color:red" class="errorText"></span>
                                </td>`
        node.appendChild(step);
        nameStep = node.querySelectorAll('#nameStep')
        imgStep = node.querySelectorAll('#imgStep');
        describle = node.querySelectorAll('#describle');
        for (let i = 0; i < nameStep.length; i++) {
            nameStep[i].setAttribute('name', `name_step[${i+1}]`);
            imgStep[i].setAttribute('name', `img_step[${i+1}]`);
            describle[i].setAttribute('name', `describle[${i+1}]`);
        }
    }

    form.onsubmit = function(e) {
        e.preventDefault();
        nameStep = node.querySelectorAll('#nameStep')
        imgStep = node.querySelectorAll('#imgStep');
        describle = node.querySelectorAll('#describle');
        errorName = node.querySelectorAll('.errorName');
        errorImg = node.querySelectorAll('.errorImg');
        errorDescrible = node.querySelectorAll('.errorText');
        var isValidate=true;
        for (let i = 0; i < nameStep.length; i++) {
            console.log(nameStep[i])
            console.log(describle[i])

            if (nameStep[i].value === '') {
                errorName[i].innerText = 'Name Step must be not null'
                isValidate=false;

            } else {
                errorName[i].innerText = ''
            }
            if (describle[i].value === '') {
                errorDescrible[i].innerText = 'Describle must be not null'
                isValidate=false;
            } else {
                errorDescrible[i].innerText = ''
            }

            if (imgStep[i].value === '') {
                errorImg[i].innerText = 'Image must be not null'
                isValidate=false;
            } else if(imgStep[i].value.lastIndexOf(".jpg")==-1 && imgStep[i].value.lastIndexOf(".png")==-1){
                errorImg[i].innerText = 'You can upload only PNG and JPG extention files'
                isValidate=false;
            }
            else {
                errorImg[i].innerText = ''
            }
        }
        if(isValidate){
            form.submit();
        }
    }
</script>
@stop