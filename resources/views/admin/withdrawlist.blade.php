@extends('admin.layouts.app')
@section('section')
<div class="card-box">
    {{-- Data tables For Admin Start --}}
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <h1 class="m-t-0 header-title" style="font-size:40px; text-align:center; margin-bottom:50px !important;"><b>List Withdraw</b></h1>
                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="align-middle text-center">Name</th>
                            <th class="align-middle text-center">Email</th>
                            <th class="align-middle text-center">Phone</th>
                            <th class="align-middle text-center">User Type</th>
                            <th class="align-middle text-center">Profile Image</th>
                            <th class="align-middle text-center">Total Withdraw</th>
                            <th class="align-middle text-center">Profit Percentage</th>
                            @if (Auth::user()->type == 0)
                                <th class="align-middle text-center">Action</th>
                            @endif
                            
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($users)>0)
                            @foreach($users as $user)
                                @if ($user->id != Auth::id() && $user->type != 0)
                                    <tr>
                                        <td class="align-middle text-center">{{ $user->name }}</td>
                                        <td class="align-middle text-center">{{ $user->email }}</td>
                                        <td class="align-middle text-center">{{ $user->phone }}</td>
                                        <td class="align-middle text-center">
                                            @if ($user->type == 0)
                                                Super Admin
                                            @endif
                                            @if ($user->type == 1)
                                                Admin
                                            @endif
                                            
                                        </td>
                                        <td class="align-middle text-center">
                                            @if ($user->profile_photo_path == "")
                                                <span id="name_get{{$user->id}}" style="display: none;">{{ $user->name }}</span>
                                                <div id="profileImage{{$user->id}}" 
                                                    style="width: 100px; 
                                                    height: 100px; 
                                                    border-radius: 50%; 
                                                    background: #a09ea7;
                                                    font-size: 35px;
                                                    color: rgb(44, 41, 41);
                                                    text-align: center;
                                                    line-height: 100px;">
                                                </div>
                                                <script>
                                                    
                                                    var name_get = document.getElementById('name_get{{$user->id}}').innerHTML;
                                                    var intials = (name_get.charAt(0)).toUpperCase() + (name_get.charAt(1)).toUpperCase();
                                                    document.getElementById('profileImage{{$user->id}}').innerHTML=intials;                                                       
                                                </script>
                                            @else
                                                <img src="{{ asset('storage/'.$user->profile_photo_path) }}" alt="" class="" width="80px" height="80px" >
                                            @endif

                                            
                                            
                                            
                                        </td>
                                        <td class="align-middle text-center">
                                            @if (getAmount($user->id))
                                                {{ getAmount($user->id) }}
                                            @endif
                                        </td>
                                        <td class="align-middle text-center">{{ $user->profit_percentage }}</td>
                                        @if (Auth::user()->type == 0)
                                        <td class="align-middle text-center">
                                            {{-- <a href="{{ route('withdraw.delete',$user->id) }}" class="btn btn-danger btn-sm rounded-0" >
                                                <i class="far fa-trash-alt"></i>
                                            </a> --}}
                                            <button  class="btn btn-success btn-sm rounded-0 mb-1" data-toggle="modal" data-target="#addModal{{ $user->id }}">
                                                <i class="fas fa-plus"></i>
                                            </button>

                                            <!-- Edit Modal Start-->
                                            <div id="addModal{{ $user->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Edit {{ $user->name }}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form method="POST" action="{{ route('withdraw.amountadd', $user->id) }}"
                                                                data-parsley-validate novalidate enctype="multipart/form-data">
                                                                @csrf

                                                                {{-- <input type="text" value="{{ $user->id }}" name="id_to_edit"> --}}

                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="userName">Withdraw AMount*</label>
                                                                            <input type="number" name="amount" parsley-trigger="change" required
                                                                                   placeholder="Enter Amount" class="form-control" id="" >
                                                                            @error('amount')
                                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="container m-2" style="border: 1px solid red;">
                                                                    <h5 class="text-center text-danger">Give Your Password To Complete Oparetion</h5>
                                                                    <div class="form-group">
                                                                        <label for="pass1">Password*</label>
                                                                        <input id="pass1" name="password" type="password" placeholder="Password" required
                                                                            class="form-control" autocomplete="new-password">
                                                                        @error('password')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="passWord2">Confirm Password *</label>
                                                                        <input data-parsley-equalto="#pass1" name="password_confirmation" type="password" required
                                                                            placeholder="Confirm Password" class="form-control" id="passWord2" autocomplete="new-password">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group text-right m-b-0">
                                                                    <button type="reset" class="btn btn-secondary waves-effect waves-light m-l-5">
                                                                        Reset
                                                                    </button>
                                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                                        Submit
                                                                    </button>
                                                                </div>

                                                            </form>

                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                            <!-- Edit Modal End -->

                                            {{-- Show All Withdraw --}}
                                            <button  class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#showALlWithdraw{{ $user->id }}">
                                                <i class="fas fa-info-circle"></i>
                                            </button>

                                            <!-- Edit Modal Start-->
                                            <div id="showALlWithdraw{{ $user->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Edit {{ $user->name }}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card-box table-responsive">
                                                                <h1 class="m-t-0 header-title" style="font-size:40px; text-align:center; margin-bottom:50px !important;"><b>List Withdraw</b></h1>
                                                                <table id="amounttable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="align-middle text-center">sl</th>
                                                                            <th class="align-middle text-center">Amount</th>
                                                                            <th class="align-middle text-center">Date</th>
                                                                            @if (Auth::user()->type == 0)
                                                                                <th class="align-middle text-center">Action</th>
                                                                            @endif
                                                                            
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach (getAllWithdraw($user->id) as $withdraw)
                                                                        <tr>
                                                                            <td class="align-middle text-center">{{ ++$loop->index }}</td>
                                                                            <td class="align-middle text-center">{{ $withdraw->amount }}</td>
                                                                            <td class="align-middle text-center">{{ $withdraw->created_at }}</td>
                                                                            @if (Auth::user()->type == 0)
                                                                                <td class="align-middle text-center">
                                                                                    <a href="{{ route('withdraw.delete',$withdraw->id) }}" class="btn btn-danger btn-sm rounded-0" >
                                                                                        <i class="far fa-trash-alt"></i>
                                                                                    </a> 
                                                                                </td>
                                                                            @endif
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                            <!-- Edit Modal End -->
                                        </td>
                                        @endif
                                        
                                    </tr>
                                @endif
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Data tables For Admin Start --}}


</div>
@endsection