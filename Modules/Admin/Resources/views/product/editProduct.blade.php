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
                <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                            <input type="text" name='name' class="form-control" id="exampleInputEmail1"
                                   placeholder="tên sản phẩm" value="{{ $product->name }}">
                            @error('name')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Giá Sản Phẩm</label>
                            <input type="text" class="form-control" name="price" id="exampleInputPassword1"
                                   placeholder="giá sản phẩm" value="{{ $product->price }}">
                            @error('price')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thông Tin</label>
                            <input type="text" name="content" class="form-control" id="exampleInputEmail1"
                                   placeholder="Thông tin sản phẩm" value="{{ $product->content }}">
                            @error('content')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô Tả Sản Phẩm</label>
                            <textarea type="text" name="description" class="form-control" id="exampleInputEmail1"
                                      placeholder="mô tả sản phẩm">{{ $product->description }}
                              </textarea>
                            @error('description')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Ảnh Sản Phẩm</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image" value="{{ $product->image }}">
                                    <label class="custom-file-label" for="exampleInputFile">Chọn File</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>

    </div>

@endsection
