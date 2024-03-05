@extends('admin.layouts.app')
@section('title', 'Payment')

@section('css')

@endsection
@section('content')


<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header bg-light mb-1">Payments
                                <button  data-toggle="modal" data-target="#CreatePayment" class="btn btn-primary float-right btn-sm"><i data-feather="plus"></i>&nbsp;Create</button>

                                <!-- Modal -->
                                <div class="modal fade" id="CreatePayment" >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Create Payment</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="{{ url('/admin/payment/store') }}">
                                                    @csrf
                                                    
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label class="form-label">Select User</label>
                                                            <select class="select2 w-100" name="user_id">
                                                                @foreach ($users as $key => $user)
                                                                    <option value="{{ $user->id }}"
                                                                        @if ($key === 0)
                                                                            selected 
                                                                        @endif
                                                                    >{{ $user->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label class="form-label">Amount</label>
                                                            <input class="form-control" type="number" name="amount" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label class="form-label">Payment Link</label>
                                                            <input class="form-control" type="text" name="payment_link" required>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label class="form-label">Select Status</label>
                                                            <select class="form-control w-100" name="status">
                                                                <option value="Paid">Paid</option>
                                                                <option value="UnPaid" selected>UnPaid</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <button class="btn btn-primary w-100" type="submit">Create</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="card-body">
                               <div class="">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Application ID</th>
                                                <th>Amount</th>
                                                <th>Link</th>
                                                <th>Payment Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($payments as $payment)
                                                <tr>
                                                    @php
                                                        error_reporting(0);
                                                        $user = DB::table('users')->where('id', $payment->user_id)->first();
                                                        $application = DB::table('applications')->where('user_id', $payment->user_id)->first();
                                                    @endphp
                                                    <td>
                                                        <div class="d-flex align-items-start">
                                                            <div class="avatar rounded mr-1">
                                                                <div class="avatar-content">
                                                                    @if (!empty($user->image))
                                                                        <img width="40" class="rounded" src="{{ asset('/backend/user/profile/'.$user->image) }}" />
                                                                    @else
                                                                        <img width="40" class="rounded" src="{{ asset('placeholder.jpg') }}" />
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">{{ $user->name }}</div>
                                                                <div class="font-small-2 text-muted">{{ $user->email }}</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>#{{ $application->application_id }}</td>
                                                    <td>{{ $payment->amount }}</td>
                                                    <td><a href="">{{ $payment->payment_link }}</a></td>
                                                    <td>
                                                        @if ($payment->status == "Paid")
                                                            <span class="badge badge-success">Paid</span>
                                                        @else
                                                            <span class="badge badge-danger">UnPaid</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button data-toggle="modal" data-target="#CreatePayment{{ $payment->id }}" class="btn btn-light btn-sm rounded"><i data-feather="edit"></i></button>
                                                            <a onclick="return confirm('Are you sure to delete ?')" class="btn btn-light btn-sm rounded"  data-toggle="tooltip" data-placement="top" title="Delete" href="{{ url('/admin/payment/delete/'.$payment->id) }}"><i data-feather="trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="CreatePayment{{ $payment->id }}" >
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Update Payment</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{ url('/admin/payment/update/'.$payment->id) }}">
                                                                    @csrf
                                                                    
                                                                    <div class="row">
                                                                        <div class="form-group col-md-12">
                                                                            <label class="form-label">Select User</label>
                                                                            <select class="form-control w-100" name="user_id">
                                                                                @foreach ($users as $key => $user)
                                                                                    <option value="{{ $user->id }}"
                                                                                        @if ($payment->user_id == $user->id)
                                                                                            selected 
                                                                                        @endif
                                                                                    >{{ $user->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-12">
                                                                            <label class="form-label">Amount</label>
                                                                            <input class="form-control" type="number" name="amount" value="{{ $payment->amount }}" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-12">
                                                                            <label class="form-label">Payment Link</label>
                                                                            <input class="form-control" type="text" name="payment_link" value="{{ $payment->payment_link }}" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-12">
                                                                            <label class="form-label">Select Status</label>
                                                                            <select class="form-control w-100" name="status">
                                                                                <option value="Paid"
                                                                                @if ($payment->status == "Paid")
                                                                                    selected 
                                                                                @endif
                                                                                >Paid</option>
                                                                                <option value="UnPaid"
                                                                                @if ($payment->status == "UnPaid")
                                                                                    selected 
                                                                                @endif
                                                                                >UnPaid</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="form-group col-md-12">
                                                                            {{-- <input type="submit" value="Update"> --}}
                                                                            <button class="btn btn-primary w-100" type="submit">Update</button>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <td colspan="6">No payments found...</td>
                                            @endforelse
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
@endsection
