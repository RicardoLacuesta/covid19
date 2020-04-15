@extends('layouts.app')

@section('content')
<style type="text/css">
  div.dataTables_wrapper div.dataTables_filter {
    text-align: center;
  }
  .btn-group, .btn-group-vertical{
    display: none;
  }
</style>
<div class="col-md-12">
  <div class="page-title mb-5">
    <div class="text-center">
      <h1>Outside Philippines</h1>
      <img src="{{ asset('images/tn_rp-flag.gif') }}">
    </div>
  </div>
  <div class="clearfix"></div>

  <div class="row mt-5">
    <div class="col-md-8 col-sm-8 offset-md-2">
      <div class="x_panel">
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Country Territory</th>
                          <th>Confirmed</th>
                          <th>Recovered</th>
                          <th>Died</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($cases as $case)
                          <tr class="border-bottom">
                            <td>{{ $case['country_territory_place'] }}</td>
                            <td>{{ $case['confirmed'] }}</td>
                            <td>{{ $case['recovered'] }}</td>
                            <td>{{ $case['died'] }}</td>
                          </tr>
                          @empty
                          <tr>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                          </tr>
                          @endforelse
                      </tbody>
                      <tfoot>
                          <tr>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                          </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Graph 1 -->

  @forelse($cases as $case)
  <div class="col-md-8 offset-md-2 col-sm-12 mb-3">
    <div class="x_title">
      <h2>{{ $case['country_territory_place'] }}</h2>
      <div class="clearfix"></div>
    </div>

    <div class="col-md-12 col-sm-12 ">
      <div>
        <p>Died Status</p>
        <div class="">
          <div class="progress progress_sm">
            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="{{ $case['died'] }}"aria-valuemax="{{ $case['confirmed'] }}"></div>
          </div>
        </div>
      </div>
      <div>
        <p>Recovered Status</p>
        <div class="">
          <div class="progress progress_sm">
            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="{{ $case['recovered'] }}"aria-valuemax="{{ $case['confirmed'] }}"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @empty
  @endforelse
  <!-- /Graph 1 -->
@endsection
