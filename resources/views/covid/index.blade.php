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
      <h1>Philippines</h1>
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
                          <th>#</th>
                          <th>Date</th>
                          <th>Age</th>
                          <th>Gender</th>
                          <th>Nationality</th>
                          <th>Admitted to</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($cases as $case)
                          <tr class="border-bottom">
                            <td>{{ $case['case_no'] }}</td>
                            <td>{{ $case['date'] }}</td>
                            <td>{{ $case['age'] }}</td>
                            <td>{{ $case['gender'] }}</td>
                            <td>{{ $case['nationality'] }}</td>
                            <td>{{ $case['hospital_admitted_to'] }}</td>
                          </tr>
                          @empty
                          <tr>
                            <td>--</td>
                            <td>--</td>
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

@endsection
