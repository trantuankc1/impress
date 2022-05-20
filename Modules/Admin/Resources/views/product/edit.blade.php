<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Mới Sản Phẩm </title>
    @include('admin::layouts.css')
</head>
<body>
<form>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên Sản Phẩm</label>
            <input type="name_product" class="form-control" id="exampleInputEmail1" placeholder="tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Giá Sản Phẩm</label>
            <input type="text" class="form-control" name="price" id="exampleInputPassword1" placeholder="giá sản phẩm">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Ảnh Sản Phẩm</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Chọn File</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mô Tả Sản Phẩm</label>
            <textarea type="description_product" class="form-control" id="exampleInputEmail1" placeholder="mô tả sản phẩm">
            </textarea>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@include('admin::layouts.script')
</body>
</html>
