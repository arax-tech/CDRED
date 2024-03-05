@extends('user.layouts.app')
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
                            <div class="card-header bg-light mb-1">Welcome {{ auth::user()->name }}</div>
                            <div class="card-body">
                               <div class="row mb-5">
                                   @if ($payment)
                                       <div class="col-md-3">
                                           <a target="_blank" href="{{ $payment->payment_link }}" class="btn w-100 btn-outline-primary"><img src="{{ asset('/backend/icon/pay-now.png') }}" width="24px"> Pay Now</a>
                                       </div>
                                   @endif
                                   <div class="col-md-3">
                                       <button type="button" class="btn w-100 btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                                       <img src="{{ asset('/backend/icon/pay-now.png') }}" width="24px"> Pay by Voucher
                                       </button>

                                       <!-- Modal -->
                                       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                           <div class="modal-dialog">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <h5 class="modal-title" id="exampleModalLabel">Make Application fee $185</h5>
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                       </button>
                                                   </div>
                                                   <div class="modal-body">
                                                       <form method="post" id="form-submit" action="{{ url('/user/payment/coupon/pay') }}">
                                                           @csrf
                                                           
                                                         
                                                           <div class="row">
                                                               <div class="form-group col-md-12">
                                                                   <label class="form-label">Voucher Code</label>
                                                                   <input class="form-control" type="text" name="code" required>
                                                               </div>
                                                           </div>

                                                           <div class="row">
                                                               <div class="form-group col-md-12">
                                                                   <button class="btn btn-primary w-100" type="submit">Pay Now</button>
                                                               </div>
                                                           </div>

                                                       </form>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>


                                   <div class="col-md-3">
                                        <form action="{{ url('/user/payment/request') }}">
                                            <button type="submit" data-toggle="modal" data-target="#Loading" class="btn w-100 btn-outline-primary"><img src="{{ asset('/backend/icon/pay-now.png') }}" width="24px"> Request For Payment</button>
                                        </form>
                                   </div>
                               </div>
                               <div class="">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Application ID</th>
                                                <th>Amount</th>
                                                <th>Link</th>
                                                <th>Payment Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($payment)
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
                                                </tr>
                                            @else
                                            <tr>
                                                <td colspan="5">No payment found...</td>
                                            </tr>
                                            @endif
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
