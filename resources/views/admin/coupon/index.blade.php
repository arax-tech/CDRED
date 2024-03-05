@extends('admin.layouts.app')
@section('title', 'Coupons')
@php
    $coupon_code = strtoupper(substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 15));
    // dd($coupon_code);
@endphp
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
                            <div class="card-header bg-light mb-1">Coupons
                                <button  data-toggle="modal" data-target="#CreateCoupon" class="btn btn-primary float-right btn-sm"><i data-feather="plus"></i>&nbsp;Create</button>

                                <!-- Modal -->
                                <div class="modal fade" id="CreateCoupon" >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Create Coupon</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="{{ url('/admin/coupon/store') }}">
                                                    @csrf
                                                    
                                                  
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label class="form-label">Coupon Code</label>
                                                            <input class="form-control" type="text" name="code" value="{{ $coupon_code }}" required>
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
                                                <th>S#</th>
                                                <th>Code</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($coupons as $coupon)
                                                <tr>
                                                    <td>#{{ $coupon->id }}</td>
                                                    <td>{{ $coupon->code }}</td>
                                                    <td>{{ $coupon->amount }}</td>
                                                    <td>
                                                        @if ($coupon->status == "NotUsed")
                                                            <span class="badge badge-success">Not Used</span>
                                                        @else
                                                            <span class="badge badge-danger">Used</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button data-toggle="modal" data-target="#UpdateCoupon{{ $coupon->id }}" class="btn btn-light btn-sm rounded"><i data-feather="edit"></i></button>
                                                            <a onclick="return confirm('Are you sure to delete ?')" class="btn btn-light btn-sm rounded"  data-toggle="tooltip" data-placement="top" title="Delete" href="{{ url('/admin/coupon/delete/'.$coupon->id) }}"><i data-feather="trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="UpdateCoupon{{ $coupon->id }}" >
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Update Payment</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{ url('/admin/coupon/update/'.$coupon->id) }}">
                                                                    @csrf
                                                                    
                                                                    <div class="row">
                                                                        <div class="form-group col-md-12">
                                                                            <label class="form-label">Coupon Code</label>
                                                                            <input class="form-control" type="text" name="code" value="{{ $coupon->code }}" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-12">
                                                                            <label class="form-label">Amount</label>
                                                                            <input class="form-control" type="number" name="amount" value="{{ $coupon->amount }}" required>
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
                                                <td colspan="5">No coupons found...</td>
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
