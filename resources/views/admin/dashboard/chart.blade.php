@extends('layout.master',['page_title'=>'Biểu đồ tổng doanh thu | Seafashion Admin Page',
'current_menu'=>'chart_manager',
    'current_sub_menu'=>'list_item'])
@section('content')
    {{--Line chart--}}
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">assignment</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">HIển thị doanh thu theo thời gian</h4>
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div id="reportrange" style="cursor: pointer; float: right;">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>
                <div class="clearfix"></div>
                <div id="linechart_material"></div>
            </div>
        </div>
    </div>

    {{--Pie chart--}}
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">assignment</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Hiển thị số lượng sản phẩm đã bán</h4>
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div id="reportrange" style="cursor: pointer; float: right;">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>
                <div class="clearfix"></div>
                <div id="piechart_material"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    {{--JS Pie Chart--}}
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart1);

        function drawChart1() {
            $.ajax({
                url: '/api-get-chart-pie-data',
                method: 'GET',
                success: function (resp) {
                    var data = new google.visualization.DataTable()
                    data.addColumn('string', 'Product Name');
                    data.addColumn('number', 'Quantity');
                    for (var i = 0; i < resp.length; i++) {
                        data.addRow([resp[i].category_name + '', Number(resp[i].number)]);
                    }
                    var options = {
                        title: 'Biểu đồ hiển thị sản phẩm'
                    };
                    //
                    var chart = new google.visualization.PieChart(document.getElementById('piechart_material'));

                    chart.draw(data, options);
                },
                error: function () {
                    swal('Có lỗi xảy ra', 'Không thể lấy dữ liệu từ api', 'error');
                }
            });
        }




        {{--</script>--}}
        {{--JS Line chart--}}
        // <
        // script
        // type = "text/javascript" >
            google.charts.load('current', {'packages': ['line']});
        google.charts.setOnLoadCallback(function () {
            $.ajax({
                url: '/api-get-chart-data?startDate=2018-08-10&endDate=2018-09-06',
                method: 'GET',
                success: function (resp) {
                    drawChart(resp);
                },
                error: function () {
                    swal('Có lỗi xảy ra', 'Không thể lấy dữ liệu từ api', 'error');
                }
            });
        });

        function drawChart(chart_data) {
            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Ngày');
            data.addColumn('number', 'Doanh thu');
            for (var i = 0; i < chart_data.length; i++) {
                data.addRow([new Date(chart_data[i].day), Number(chart_data[i].revenue)]);
            }
            var options = {
                chart: {
                    title: 'Biểu đồ doanh thu theo thời gian',
                    subtitle: 'tính theo đơn vị (vnd)'
                },
                height: 500,
                hAxis: {
                    format: 'dd-MM-yyyy'
                }
            };

            var chart = new google.charts.Line(document.getElementById('linechart_material'));

            chart.draw(data, google.charts.Line.convertOptions(options));
        }

        $(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('DD-MM-YYYY') + ' - ' + end.format('DD-MM-YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Hôm nay': [moment(), moment()],
                    'Hôm qua': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 ngày trước': [moment().subtract(6, 'days'), moment()],
                    '30 ngày trước': [moment().subtract(29, 'days'), moment()],
                    'Tháng này': [moment().startOf('month'), moment().endOf('month')],
                    'Tháng trước': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                locale: {
                    "format": "DD/MM/YYYY",
                    "separator": " - ",
                    "applyLabel": "Áp dụng",
                    "cancelLabel": "Hủy",
                    "fromLabel": "Từ",
                    "toLabel": "Đến",
                    "customRangeLabel": "Tùy chọn",
                    "daysOfWeek": [
                        "CN",
                        "T2",
                        "T3",
                        "T4",
                        "T5",
                        "T6",
                        "T7"
                    ],
                    "monthNames": [
                        "Tháng 1",
                        "Tháng 2",
                        "Tháng 3",
                        "Tháng 4",
                        "Tháng 5",
                        "Tháng 6",
                        "Tháng 7",
                        "Tháng 8",
                        "Tháng 9",
                        "Tháng 10",
                        "Tháng 11",
                        "Tháng 12"
                    ],
                    "firstDay": 1
                }
            }, cb);
            cb(start, end);
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                //do something, like clearing an input
                $('#reportrange').val('');
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                // console.log();
                // console.log(picker.endDate.format('YYYY-MM-DD'));
                var startDate = picker.startDate.format('YYYY-MM-DD');
                var endDate = picker.endDate.format('YYYY-MM-DD');
                $.ajax({
                    url: '/api-get-chart-data?startDate=' + startDate + '&endDate=' + endDate,
                    method: 'GET',
                    success: function (resp) {
                        if (resp.length == 0) {
                            swal('Không có dữ liệu', 'Vui lòng lựa chọn khoảng thời gian khác.', 'warning');
                            return;
                        }
                        ;
                        drawChart(resp);
                    },
                    error: function () {
                        swal('Có lỗi xảy ra', 'Không thể lấy dữ liệu từ api', 'error');
                    }
                });
            });
        });
    </script>
@endsection