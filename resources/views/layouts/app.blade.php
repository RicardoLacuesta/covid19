<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('css/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('css/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('css/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('css/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('css/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('css/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="{{ asset('css/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{ asset('css/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{ asset('css/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{ asset('css/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{ asset('css/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}} " rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- top navigation -->
          <div class="row border-bottom border-secondary">
            <div class="col-md-12 text-center bg-light py-1">
              <a href="/"><h1>Coronavirus Monitoring</h1></a>
            </div>
            <div class="clearfix"></div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="row text-center bg-light">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer class="row">
          <div class="col-md-12 text-right">
            Covid19 - Monitoring by <a href="">Corona</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('css/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('css/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('css/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('css/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('css/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('css/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset('css/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{ asset('css/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{ asset('css/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('css/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('css/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('css/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('css/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('css/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{ asset('css/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ asset('css/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ asset('css/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('css/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{ asset('css/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('css/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('css/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('css/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- Datatables -->
    <script src="{{ asset('css/vendors/datatables.net/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('css/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>
    <script src="{{ asset('css/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }} "></script>
    <script src="{{ asset('css/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }} "></script>
    <script src="{{ asset('css/vendors/datatables.net-buttons/js/buttons.flash.min.js') }} "></script>
    <script src="{{ asset('css/vendors/datatables.net-buttons/js/buttons.html5.min.js') }} "></script>
    <script src="{{ asset('css/vendors/datatables.net-buttons/js/buttons.print.min.js') }} "></script>
    <script src="{{ asset('css/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }} "></script>
    <script src="{{ asset('css/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }} "></script>
    <script src="{{ asset('css/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }} "></script>
    <script src="{{ asset('css/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }} "></script>
    <script src="{{ asset('css/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }} "></script>
    <script src="{{ asset('css/vendors/jszip/dist/jszip.min.js') }} "></script>
    <script src="{{ asset('css/vendors/pdfmake/build/pdfmake.min.js') }} "></script>
    <script src="{{ asset('css/vendors/pdfmake/build/vfs_fonts.js') }} "></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('css/build/js/custom.min.js')}}"></script>
    
    @yield('scripts')
  </body>
</html>
