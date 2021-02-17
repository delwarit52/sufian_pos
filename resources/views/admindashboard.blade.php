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
                    <div class="col-lg-9">
                        <div class="p-20">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-lg-4 control-label">With all options</label>
                                    <div class="col-lg-8">
                                        <div id="reportrange" class="pull-right form-control">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div><!-- end col -->

                </div><!-- end row -->
            </div>
        </div><!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection

@section('section_script')
    
    <script>
        //Date range picker
            $('.input-daterange-datepicker').daterangepicker({
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-secondary',
                cancelClass: 'btn-primary'
            });
            $('.input-daterange-timepicker').daterangepicker({
                timePicker: true,
                format: 'MM/DD/YYYY h:mm A',
                timePickerIncrement: 30,
                timePicker12Hour: true,
                timePickerSeconds: false,
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-secondary',
                cancelClass: 'btn-primary'
            });
            $('.input-limit-datepicker').daterangepicker({
                format: 'MM/DD/YYYY',
                minDate: '06/01/2016',
                maxDate: '06/30/2016',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-secondary',
                cancelClass: 'btn-primary',
                dateLimit: {
                    days: 6
                }
            });

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2016',
                maxDate: '12/31/2016',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-success',
                cancelClass: 'btn-secondary',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

    </script>
    
@endsection