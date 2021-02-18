@extends('admin.layouts.app')
@section('section')
<div class="card-box">


    {{-- Data tables For Admin Start --}}
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <h1 class="m-t-0 header-title" style="font-size:40px; text-align:center; margin-bottom:50px !important;"><b>List Of Admin</b></h1>
                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="align-middle text-center">Sl. No</th>
                            <th class="align-middle text-center">User Id</th>
                            <th class="align-middle text-center">Package Name</th>
                            <th class="align-middle text-center">User Name</th>
                            <th class="align-middle text-center">User Email</th>
                            <th class="align-middle text-center">User Phone</th>
                            <th class="align-middle text-center">User NID</th>
                            <th class="align-middle text-center">PON MAC</th>
                            <th class="align-middle text-center">Route MAC ID </th>
                            <th class="align-middle text-center">User Address</th>
                            <th class="align-middle text-center">Status</th>
                            <th class="align-middle text-center">Alert</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customer_froms as $customer_from)
                            <tr>
                                <td class="align-middle text-center">{{ ++$loop->index }}</td>
                                <td class="align-middle text-center">{{ $customer_from->user_id }}</td>
                                <td class="align-middle text-center">
                                    {{ package($customer_from->package_id)->package_title }}
                                </td>
                                <td class="align-middle text-center">{{ $customer_from->name }}</td>
                                <td class="align-middle text-center">{{ $customer_from->email }}</td>
                                <td class="align-middle text-center">{{ $customer_from->phone }}</td>
                                <td class="align-middle text-center">{{ $customer_from->nid }}</td>
                                <td class="align-middle text-center">{{ $customer_from->ponmac }}</td>
                                <td class="align-middle text-center">{{ $customer_from->routeid }}</td>
                                <td class="align-middle text-center">{{ $customer_from->address }}</td>
                                <td class="align-middle text-center">
                                    {{-- <a class="btn btn-sm btn-primary" href="">Active</a> --}}
                                    @if ( $customer_from->status == 1)
                                        <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ActiveModel{{ $customer_from->id }}">Active</a>
                                    @elseif($customer_from->status == 3)
                                        <a class="btn btn-sm btn-primary" href="{{ route('customer.inactive',$customer_from->id) }}">Active</a>
                                    @else
                                        <a class="btn btn-sm btn-primary" href="{{ route('customer.active',$customer_from->id) }}" >Inactive</a>
                                    @endif

                                </td>
                                <td class="align-middle text-center">
                                    <a class="btn btn-sm btn-primary" href="">Aleart</a>
                                </td>
                                <td class="align-middle text-center">
                                    @if ( $customer_from->status == 1 || $customer_from->status == 3)
                                    <a class="btn btn-sm btn-primary" href="{{ route('customer.delete',$customer_from->id) }}">Delete</a>
                                    @endif
                                    
                                </td>
                            </tr>


                            <!-- Edit modal content -->
                                <div id="ActiveModel{{ $customer_from->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">User Registration</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('customer.register') }}" data-parsley-validate novalidate>
                                                    @csrf
                                                        <input type="hidden" name="id" value="{{ $customer_from->id }}">
                                                        <input type="hidden" name="name" value="{{ $customer_from->name }}">
                                                        <input type="hidden" name="phone" value="{{ $customer_from->phone }}">
                                                        <div class="form-group">
                                                            <label>User Id*</label>
                                                            <input type="text" name="user_id" parsley-trigger="change" required
                                                            placeholder="Enter User Id" class="form-control" value="">
                                                        </div>
                                                        @error('email')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="form-group">
                                                            <label>User password*</label>
                                                            <input type="password" name="password" parsley-trigger="change" required
                                                            placeholder="Enter User password" class="form-control" value="">
                                                        </div>
                                                        @error('password')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                            <!-- /.modal -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Data tables For Admin Start --}}

</div>
@endsection