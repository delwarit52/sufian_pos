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
                        <th class="align-middle text-center">User Address</th>
                        <th class="align-middle text-center">PON MAC</th>
                        <th class="align-middle text-center">Route MAC ID </th>
                        <th class="align-middle text-center">Status</th>
                        <th class="align-middle text-center">Alert</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($customer_froms as $customer_from)
                            <tr>
                                <td class="align-middle text-center">{{ ++$loop->index }}</td>
                                <td class="align-middle text-center">{{ $customer_from->package_id }}</td>
                                <td class="align-middle text-center">{{ $customer_from->name }}</td>
                                <td class="align-middle text-center">{{ $customer_from->email }}</td>
                                <td class="align-middle text-center">{{ $customer_from->phone }}</td>
                                <td class="align-middle text-center">{{ $customer_from->nid }}</td>
                                <td class="align-middle text-center">{{ $customer_from->nid }}</td>
                                <td class="align-middle text-center">{{ $customer_from->nid }}</td>
                                <td class="align-middle text-center">{{ $customer_from->ponmac }}</td>
                                <td class="align-middle text-center">{{ $customer_from->routeid }}</td>
                                <td class="align-middle text-center">{{ $customer_from->address }}</td>
                                <td class="align-middle text-center">
                                    <a class="btn btn-sm btn-primary" href="">Active</a>
                                </td>
                                <td class="align-middle text-center">
                                    <a class="btn btn-sm btn-primary" href="">Aleart</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Data tables For Admin Start --}}


</div>
@endsection