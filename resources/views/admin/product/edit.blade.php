@extends('layout.master', [
    'page_title' => 'Sửa thông tin sản phẩm | Seafashion Admin Page',
    'current_menu' => 'product_manager',
    'current_sub_menu' => 'edit',
])
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">edit</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">SỬA SẢN PHẨM</h4>
                    @if ($errors->any())
                        <div class="alert alert-rose">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/admin/product/{{$obj->id}}" class="form-horizontal">
                        @method('PUT')
                        {{csrf_field()}}
                        <div class="row">
                            <label class="col-sm-2 label-on-left">CategoryId</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating is-empty{{$errors->has('categoryId')?' has-error':''}}">
                                    <label class="control-label"></label>
                                    <input type="text" name="categoryId" class="form-control{{$errors->has('categoryId')?' error':''}}" value="{{$obj->categoryId}}">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">CollectionId</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating is-empty{{$errors->has('collectionId')?' has-error':''}}">
                                    <label class="control-label"></label>
                                    <input type="text" name="collectionId" class="form-control{{$errors->has('collectionId')?' error':''}}" value="{{$obj->collectionId}}">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Tên</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating is-empty{{$errors->has('name')?' has-error':''}}">
                                    <label class="control-label"></label>
                                    <input type="text" name="name" class="form-control{{$errors->has('name')?' error':''}}"value="{{$obj->name}}">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Ảnh</label>
                            <div class="col-sm-8">
                                <div class="form-group label-floating is-empty{{$errors->has('images')?' has-error':''}}">
                                    <label class="control-label"></label>
                                    <input type="text" name="images" class="form-control{{$errors->has('images')?' error':''}}" value="{{$obj->images}}">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Giá</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating is-empty{{$errors->has('price')?' has-error':''}}">
                                    <label class="control-label"></label>
                                    <input type="text" name="price" class="form-control{{$errors->has('price')?' error':''}}" value="{{$obj->price}}">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Khuyến mãi</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating is-empty{{$errors->has('discount')?' has-error':''}}">
                                    <label class="control-label"></label>
                                    <input type="text" name="discount" class="form-control{{$errors->has('discount')?' error':''}}" value="{{$obj->discount}}">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Mô tả</label>
                            <div class="col-sm-8">
                                <div class="form-group label-floating is-empty{{$errors->has('description')?' has-error':''}}">
                                    <label class="control-label"></label>
                                    <input type="text" name="description" class="form-control{{$errors->has('description')?' error':''}}" value="{{$obj->description}}">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Chi tiết</label>
                            <div class="col-sm-8">
                                <div class="form-group label-floating is-empty{{$errors->has('detail')?' has-error':''}}">
                                    <label class="control-label"></label>
                                    <input type="text" name="detail" class="form-control{{$errors->has('detail')?' error':''}}" value="{{$obj->detail}}">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Màu</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating is-empty{{$errors->has('colors')?' has-error':''}}">
                                    <label class="control-label"></label>
                                    <input type="text" name="colors" class="form-control{{$errors->has('colors')?' error':''}}" value="{{$obj->colors}}">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Cỡ</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating is-empty{{$errors->has('sizes')?' has-error':''}}">
                                    <label class="control-label"></label>
                                    <input type="text" name="sizes" class="form-control{{$errors->has('sizes')?' error':''}}" value="{{$obj->sizes}}">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" value="Submit" class="btn btn-fill btn-success">Lưu
                                    <div class="ripple-container"></div>
                                </button>
                                <button type="reset" value="Reset" class="btn btn-fill btn-rose">Làm lại
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection