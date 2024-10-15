@extends('admin/layouts/app')
@section('page_header', 'Dashboard')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Charts</h1>
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myAreaChart" width="490" height="160" style="display: block; width: 490px; height: 160px;" class="chartjs-render-monitor"></canvas>
                    </div>
                    <hr>
                    Styling for the area chart can be found in the
                    <code>/js/demo/chart-area-demo.js</code> file.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection