{{--<div class="card">--}}
    {{--<div class="card-body">--}}
        {{--<div class="float-left">--}}
            {{--<h2 class="card-title">Danh sách chung cư</h2>--}}
        {{--</div>--}}
        {{--<div class="clearfix"></div>--}}
        {{--<div class="card-body">--}}
            {{--@if($obj->count()>0)--}}
                {{--<table class="table table-striped">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th scope="col">ID</th>--}}
                        {{--<th scope="col">Customer_ID</th>--}}
                        {{--<th scope="col">Total_Price</th>--}}
                        {{--<th scope="col">Ship_Name</th>--}}
                        {{--<th scope="col">Ship_Address</th>--}}
                        {{--<th scope="col">Ship_Phone</th>--}}

                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--@foreach($obj as $item)--}}
                        {{--<tr>--}}
                            {{--<th scope="row">{{$item->id}}</th>--}}
                            {{--<th scope="row">{{$item->customer_id}}</th>--}}
                            {{--<th scope="row">{{$item->total_price}}</th>--}}
                            {{--<th scope="row">{{$item->ship_name}}</th>--}}
                            {{--<th scope="row">{{$item->ship_address}}</th>--}}
                            {{--<th scope="row">{{$item->ship_phone}}</th>--}}
                            {{--<td>--}}
                                {{--<div class="card" style="width: 90px;height: 70px;background-image: url('{{$item->image}}'); background-size: cover">--}}
                                {{--</div>--}}
                            {{--</td>--}}
                            {{--<td>{{$item->status}}</td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}
                    {{--</tbody>--}}
                {{--</table>--}}
                {{--<div class="row float-right">--}}
                    {{--{{$obj->links()}}--}}
                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}

{{--</div>--}}
