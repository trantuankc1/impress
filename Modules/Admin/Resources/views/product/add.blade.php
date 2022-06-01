@extends('admin::layouts.master')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản Lý</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Đăng Xuất</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body ">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                            <input type="text" name='name' class="form-control" id="exampleInputEmail1"
                                   placeholder="tên sản phẩm" value="{{ old('name') }}">
                            @error('name')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Giá Sản Phẩm</label>
                            <input type="text" class="form-control" name="price" id="exampleInputPassword1"
                                   placeholder="giá sản phẩm" value="{{ old('price')}}">
                            @error('price')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thông Tin</label>
                            <input type="text" name="content" class="form-control" id="exampleInputEmail1"
                                   placeholder="Thông tin  sản phẩm" value="{{ old('content')}}">
                            @error('content')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô Tả Sản Phẩm</label>
                            <textarea type="text" name="description" class="form-control" id="exampleInputEmail1"
                                      placeholder="mô tả sản phẩm" value="{{ old('description') }}">
                              </textarea>
                            @error('description')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select name="category[]" class="select2 custom-select">
                                @foreach($category as $row)
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Ảnh Sản Phẩm</label>
                            <div class="input-group">
                                <input type="file" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Thêm Mới</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
        </section>

    </div>

@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2({
                multiple: "multiple",
            });
        });
    </script>
@endsection
