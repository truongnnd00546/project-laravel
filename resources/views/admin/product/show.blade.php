@extends('layout.master',[
    'page_title'=>'Danh sách sản phẩm | Seafashion Admin Page',
    'current_menu'=>'product_manager',
    'current_sub_menu'=>'list_item'
])
@section('content')
    <style>
        .card-body{
            padding: 60px;
        }
        .card-body label{
            color: #32322C;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <div class="float-left">
                <h2 class="card-title">Thông tin chi tiết sản phẩm</h2>
            </div>
            <div class="clearfix"></div>
            <div class="card-body">
                <div class="row">
                    <label>Tên :</label>
                    {{$obj->name}}
                </div>
                <div class="row">
                    <label>Ảnh :</label>
                    <img src="{{$obj->images}}" alt="" class="img-thumbnail">
                </div>
                <div class="row">
                    <label>Giá :</label>
                    {{$obj->price}}
                </div>
                <div class="row">
                    <label>Khuyến mại :</label>
                    {{$obj->discount}}
                </div>
                <div class="row">
                    <label>Màu :</label>
                    {{$obj->colors}}
                </div>
                <div class="row">
                    <label>Cỡ :</label>
                    {{$obj->sizes}}
                </div>

                <div class="row mt-3" style="padding-top: 20px;">
                    <a href="/admin/product" class="btn btn-success mr-2">Về danh sách</a>
                    <a href="/admin/product/{{$obj->id}}/edit" class="btn btn-warning  mr-2">Sửa</a>
                    <a href="{{$obj->id}}" class="btn btn-danger btn-delete">Xóa</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.btn-delete').click(function () {
            var thisButton = $(this);
            swal({
                text: "Bạn có chắc muốn xoá danh mục này không?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Huỷ bỏ',
                buttonsStyling: false
            }).then(function() {
                var id = thisButton.attr('href');
                $.ajax({
                    'url': '/admin/product/' + id,
                    'method': 'DELETE',
                    'data':{
                        '_token':$('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        swal({
                            text: 'Danh mục đã bị xoá.',
                            type: 'success',
                            confirmButtonClass: "btn btn-success",
                            buttonsStyling: false
                        })
                        setTimeout(function () {
                            window.location.href=("http://127.0.0.1:8000/admin/product");
                        }, 2*1000);
                    },
                    error: function () {
                        swal({
                            text: 'Có lỗi xảy ra, vui lòng thử lại sau.',
                            type: 'warning',
                            confirmButtonClass: "btn btn-danger",
                            buttonsStyling: false
                        })
                    }
                });

            });
            return false;
        })
    </script>
@endsection