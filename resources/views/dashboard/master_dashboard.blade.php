@extends('master')

@section('content_master')

<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('dashboard.navbar_top')
            @include('dashboard.sidebar')
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('title_content_dashboard', 'Laravel 5 SB Admin 2')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @yield('content_dashboard')

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

</div>


@endsection

@section('script_master')

    @yield('script_dashboard')

@endsection


