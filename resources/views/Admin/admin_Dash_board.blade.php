@extends('layouts.admin')
@section('title')
    Dashboard
@endsection
@section('content')


    <div class="content">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">User Statistics</h5>

                <h6 class="card-title"> <i class="fa fa-users" aria-hidden="true"></i> No of users &nbsp;{{$users->count()}}</h6>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="barChartSimpleGradientsNumbers"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Stock Statistics</h5>
                <h6 class="card-title"><i class="fa fa-store    "></i> No of product in stock &nbsp;{{$products->count()}}</h6>

              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="barChartSimpleGradientsNumbers"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>





    </section>

    <script>
        document.getElementById("date").innerHTML = Date();
        </script>
@endsection
