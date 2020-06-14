@extends('include.app')
@section('title', 'DataBank')
@section('content')
    <div class="container py5">
        <div class="ht-tm-cat">
            <div class="ht-tm-codeblock">
                <h2>Dashboard</h2>
                <hr>
                <div class="col-xs-12 col-md-6 float-right">
                    <div id="itemchart"></div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <table class="table table-hover table-striped ht-tm-element border">
                        <thead class="thead-dark">
                            <tr>
                                <th>Item Name</th>
                                <th>Item Active</th>
                                <th>Item Inactive</th>
                                <th>Item Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>SHELL</th>
                                <th>{{ $data['shell_count_active'] }}</th>
                                <th>{{ $data['shell_count_inactive'] }}</th>
                                <th>{{ $data['shell_count'] }}</th>
                            </tr>
                            <tr>
                                <th>VPS</th>
                                <th>{{ $data['vps_count_active'] }}</th>
                                <th>{{ $data['vps_count_inactive'] }}</th>
                                <th>{{ $data['vps_count'] }}</th>
                            </tr>
                            <tr>
                                <th>CPANEL</th>
                                <th>{{ $data['cpanel_count_active'] }}</th>
                                <th>{{ $data['cpanel_count_inactive'] }}</th>
                                <th>{{ $data['cpanel_count'] }}</th>
                            </tr>
                            <tr>
                                <th>WEBSITE</th>
                                <th>{{ $data['website_count_active'] }}</th>
                                <th>{{ $data['website_count_inactive'] }}</th>
                                <th>{{ $data['website_count'] }}</th>
                            </tr>
                            <tr>
                                <th>MAIL</th>
                                <th>{{ $data['mail_count_active'] }}</th>
                                <th>{{ $data['mail_count_inactive'] }}</th>
                                <th>{{ $data['mail_count'] }}</th>
                            </tr>
                            <tr>
                                <th>DATABASE</th>
                                <th>{{ $data['database_count_active'] }}</th>
                                <th>{{ $data['database_count_inactive'] }}</th>
                                <th>{{ $data['database_count'] }}</th>
                            </tr>
                            <tr>
                                <th>SQL INJECTION</th>
                                <th>{{ $data['sql_injection_count_active'] }}</th>
                                <th>{{ $data['sql_injection_count_inactive'] }}</th>
                                <th>{{ $data['sql_injection_count'] }}</th>
                            </tr>
                            <tr>
                                <th>XSS</th>
                                <th>{{ $data['xss_count_active'] }}</th>
                                <th>{{ $data['xss_count_inactive'] }}</th>
                                <th>{{ $data['xss_count'] }}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        Highcharts.theme = {
            chart: {
                backgroundColor: {
                    linearGradient: {
                        x1: '#11111d',
                    },
                    stops: [
                        [0, '#11111d'],
                    ]
                },
            },
            title: {
                style: {
                    color: '#ffffff',
                    font: 'bold 16px "Trebuchet MS", Verdana, sans-serif',
                }
            },
        };
        Highcharts.setOptions(Highcharts.theme);
        Highcharts.chart('itemchart', {
            chart: {
                plotBackgroundColor: '#0c0d16',
                type: 'pie'
            },
            title: {
                text: 'List Item Available'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        color: '#fff', 
                        backgroundColor: 'transparent',
                    }
                }
            },
            series: [{
                name: 'Count',
                colorByPoint: true,
                data: [{
                    name: 'Shell',
                    y: {{ $data['shell_count'] }}
                }, {
                    name: 'cPanel',
                    y: {{ $data['cpanel_count'] }},
                }, {
                    name: 'VPS',
                    y: {{ $data['vps_count'] }}
                },
                {
                    name: 'WEBSITE',
                    y: {{ $data['website_count'] }}
                },
                {
                    name: ' MAIL',
                    y: {{ $data['mail_count'] }}
                },
                {
                    name: 'DATABASE',
                    y: {{ $data['database_count'] }}
                },
                {
                    name: 'SQL INJECTION',
                    y: {{ $data['sql_injection_count'] }}
                },
                {
                    name: 'XSS',
                    y: {{ $data['xss_count'] }}
                }]
            }]
        });
        </script>
@endsection