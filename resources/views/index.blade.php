@extends('layouts.app')

@section('content')
            <div class="col-md-12">
              <div class="pt-5 mb-5">
                <h1>Philippines</h1>
                <img src="{{ asset('images/tn_rp-flag.gif') }}">
                <div class="col-md-12 mt-2">
                  <a href="{{ route('covid19.casesOutsidePH') }}">Cases Outside PH</a>
                </div>
              </div>
              <div class="mb-3">
                <h3>Total Cases:</h3>
                <a href="{{ route('covid19.index') }}"><h1>{{ number_format($total) }}</h1></a>
              </div>
              <div class="mb-3">
                <h3>Total Death:</h3>
                <h1>{{ number_format($death) }}</h1>
              </div>
              <div class="mb-3">
                <h3>Total Recovered:</h3>
                <h1>{{ number_format($recovered) }}</h1>
              </div>
              <div class="mb-3">
                <h3>Total Admitted:</h3>
                <h1>{{ number_format($admitted) }}</h1>
              </div>

              <!-- Graph 1 -->
              <div class="col-md-8 offset-md-2 col-sm-12 mb-3">
                <div class="x_title">
                  <h2>Top Covid19 Status</h2>
                  <div class="clearfix"></div>
                </div>

                <div class="col-md-12 col-sm-12 ">
                  <div>
                    <p>Admitted Status</p>
                    <div class="">
                      <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="{{ $admitted }}"aria-valuemax="{{ $total }}"></div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>Death Status</p>
                    <div class="">
                      <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="{{ $death }}"aria-valuemax="{{ $total }}"></div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>Recovered Status</p>
                    <div class="">
                      <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="{{ $recovered }}"aria-valuemax="{{ $total }}"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Graph 1 -->

              <!-- chart -->
              <canvas id="chart1" class="col-md-4 offset-md-4 col-sm-12 mb-3"></canvas>

              <canvas id="chart2" class="col-md-4 offset-md-4 col-sm-12 mb-3"></canvas>

              <!-- /chart -->

          </div>
            </div>
            <div class="clearfix"></div>
@endsection

@section('scripts')
  <script type="text/javascript">
      // chart 1
      var death = {!! ($death) !!};
      var recovered = {!! ($recovered) !!};
      var admitted = {!! ($admitted) !!};
      var ctx = document.getElementById("chart1").getContext('2d');
      var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
      labels: ["Death", "Recovered", "Admitted"],
      datasets: [{
      label: '# of Status',
      data: [death, recovered, admitted],
      backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(255, 206, 86, 0.2)'
      ],
      borderColor: [
      'rgba(255,99,132,1)',
      'rgba(54, 162, 235, 1)',
      'rgba(255, 206, 86, 1)'
      ],
      borderWidth: 1
      }]
      },
      options: {
      scales: {
      yAxes: [{
      ticks: {
      beginAtZero: true
      }
      }]
      }
      }
      });

      // chart 2
      //line.
      var January = {!! ($chart['January']) !!};
      var February = {!! ($chart['February']) !!};
      var March = {!! ($chart['March']) !!};
      var April = {!! ($chart['April']) !!};

      var ctxL = document.getElementById("chart2").getContext('2d');
      var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April'],
        datasets: [{
              label: "Cases",
              data: [January, February, March, April],
              backgroundColor: [
              '#e0abab',
              ],
              borderColor: [
              '#690000',
              ],
              borderWidth: 2
        }]
      },
      options: {
      responsive: true
      }
      });


    </script>
@endsection