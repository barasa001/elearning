@extends('layouts.errors')

@section('errors-content')
<!-- Content area -->
<div class="content d-flex justify-content-center align-items-center">

    <!-- Container -->
    <div class="flex-fill">

        <!-- Error title -->
        <div class="text-center mb-3">
            <h1 class="error-title">404</h1>
            <h5>PAGE NOT FOUND.</h5>
        </div>
        <!-- /error title -->


        <!-- Error content -->
        <div class="row">
            <div class="col-xl-4 offset-xl-4 col-md-8 offset-md-2">

                <!-- Buttons -->
                <div class="d-flex justify-content-center">
                    <div class="col-sm-6">
                        <a href="/dashboard" class="btn btn-primary btn-block"><i class="icon-home4 mr-2"></i> Dashboard</a>
                    </div>
                </div>
                <!-- /buttons -->

            </div>
        </div>
        <!-- /error wrapper -->

    </div>
    <!-- /container -->

</div>
<!-- /content area -->
    
@endsection