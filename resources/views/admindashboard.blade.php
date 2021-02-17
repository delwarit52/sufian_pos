@extends('admin.layouts.app')

@section('section')
<div class="container-fluid">
    <div class="row bg-muted p-3 mb-3">
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Customer</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <i class="fas fa-user-tie" style="font-size: 50px"></i>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> {{ $customers }} </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Package</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <i class="fas fa-box" style="font-size: 50px"></i>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> {{ $packages }} </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Active Customer</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <i class="fas fa-user-tie" style="font-size: 50px"></i>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> {{ $active_customers }} </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Inactive Customer</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <i class="fas fa-user-tie" style="font-size: 50px"></i>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> {{ $inactive_customers }} </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Earn Amount</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <span style="font-size: 50px"> ৳ </span>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> 5000 </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Cost</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <span style="font-size: 50px"> ৳ </span>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> 5000 </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Profit</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <span style="font-size: 50px"> ৳ </span>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> 5000 </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row bg-muted p-3 mb-3">
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Customer</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <i class="fas fa-user-tie" style="font-size: 50px"></i>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> {{ $customers }} </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Package</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <i class="fas fa-box" style="font-size: 50px"></i>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> {{ $packages }} </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Active Customer</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <i class="fas fa-user-tie" style="font-size: 50px"></i>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> {{ $active_customers }} </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Inactive Customer</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <i class="fas fa-user-tie" style="font-size: 50px"></i>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> {{ $inactive_customers }} </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Earn Amount</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <span style="font-size: 50px"> ৳ </span>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> 5000 </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Cost</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <span style="font-size: 50px"> ৳ </span>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> 5000 </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-30">Total Profit</h4>
                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <span style="font-size: 50px"> ৳ </span>
                    </div>
                    <div class="widget-detail-1 text-center">
                        <h2 class="mb-0"> 5000 </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="p-20">
                            <form action="#" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <div class="input-daterange input-group" id="date-range">
                                            <input type="text" class="form-control" name="start" />
                                            <span class="input-group-addon bg-primary b-0 text-white">to</span>
                                            <input type="text" class="form-control" name="end" />
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit">submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row-->
            </div>
        </div><!-- end col -->
    </div>
    <!-- end row -->
</div> <!-- container -->
@endsection

@section('section_script')
     <script>
            // Date Picker
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            jQuery('#datepicker-inline').datepicker();
            jQuery('#datepicker-multiple-date').datepicker({
                format: "mm/dd/yyyy",
                clearBtn: true,
                multidate: true,
                multidateSeparator: ","
            });
            jQuery('#date-range').datepicker({
                toggleActive: true
            });
        </script>
@endsection