@extends('admin.layouts.app')
@section('title', 'Application')
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
                            <div class="card-header bg-light mb-1">
                                Applications
                            </div>
                            <div class="card-body">
                               <div class="">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>CR Number</th>
                                                <th>Application ID</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($applications as $application)
                                                @php
                                                    $user = DB::table('users')->where('id', $application->user_id)->first();
                                                @endphp
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
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
                                                                <div class="font-weight-bolder">{{ $application->first_name }} {{ $application->middle_name }} {{ $application->last_name }}</div>
                                                                <div class="font-small-2 text-muted">{{ $application->email }}</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                    <td>CR{{ $user->ref_no }}</td>
                                                    <td>{{ $application->application_id }}</td>
                                                    {{-- <td>{{ $application->mobile_number }}</td> --}}
                                                    <td>{{ date('d M Y, h:i A', strtotime($application->created_at)) }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bolder mr-1">{{ $application->status }}</span>
                                                            @if ($application->status == "Completed")
                                                                <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                                            @else
                                                                <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a class="btn btn-light btn-sm rounded"  data-toggle="modal" data-target="#UpdateStatus{{ $application->id }}" title="Status" href="javascript::"><i data-feather="activity"></i></a>
                                                            <a class="btn btn-light btn-sm rounded" title="View" href="{{ url('/admin/application/view/'.$application->application_id) }}"><i data-feather="eye"></i></a>
                                                            <a class="btn btn-light btn-sm rounded" title="Edit" href="{{ url('/admin/application/edit/'.$application->application_id."?tab=Personal") }}"><i data-feather="edit"></i></a>
                                                            <a onclick="return confirm('Are yousure to delete ?')" class="btn btn-light btn-sm rounded" title="Delete" href="{{ url('/admin/application/delete/'.$application->id) }}"><i data-feather="trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Modal -->
                                                <div class="modal fade" id="UpdateStatus{{ $application->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" id="form-submit" action="{{ url('/admin/application/status/'.$application->id) }}">
                                                                    @csrf
                                                                    
                                                                   
                                                                        
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label">Application Status <span class="text-danger">*</span></label>
                                                                        <select class="form-control w-100" name="status">
                                                                            <option value="Started"
                                                                            @if ($application->status === "Started")
                                                                                selected 
                                                                            @endif
                                                                            >Started</option>
                                                                            <option value="Documents"
                                                                            @if ($application->status === "Documents")
                                                                                selected 
                                                                            @endif
                                                                            >Documents</option>
                                                                            <option value="Payment"
                                                                            @if ($application->status === "Payment")
                                                                                selected 
                                                                            @endif
                                                                            >Payment</option>
                                                                            <option value="In Process"
                                                                            @if ($application->status === "In Process")
                                                                                selected 
                                                                            @endif
                                                                            >In Process</option>
                                                                            <option value="Completed"
                                                                            @if ($application->status === "Completed")
                                                                                selected 
                                                                            @endif
                                                                            >Completed</option>
                                                                            
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label">Employment Verication <span class="text-danger">*</span></label>
                                                                        <select class="form-control w-100" name="employment_verication">
                                                                            <option value="Pending"
                                                                            @if ($application->employment_verication == "Pending")
                                                                                selected 
                                                                            @endif
                                                                            >Pending</option>
                                                                            <option value="In Process"
                                                                            @if ($application->employment_verication == "In Process")
                                                                                selected 
                                                                            @endif
                                                                            >In Process</option>
                                                                            <option value="Awaiting"
                                                                            @if ($application->employment_verication == "Awaiting")
                                                                                selected 
                                                                            @endif
                                                                            >Awaiting</option>
                                                                            <option value="Completed"
                                                                            @if ($application->employment_verication == "Completed")
                                                                                selected 
                                                                            @endif
                                                                            >Completed</option>
                                                                            
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label">User Can Update Application ? <span class="text-danger">*</span></label>
                                                                        <select class="form-control w-100" name="isSubmited">
                                                                            <option value="Yes"
                                                                            @if ($application->isSubmited == "Yes")
                                                                                selected 
                                                                            @endif
                                                                            >No</option>
                                                                            <option value="No"
                                                                            @if ($application->isSubmited == "No")
                                                                                selected 
                                                                            @endif
                                                                            >Yes</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-12 my-2">
                                                                        <button type="submit" class="btn btn-primary w-100">Update Status</button>
                                                                    </div>

                                                                    
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <tr>
                                                    <td colspan="7">No applicaiton found...</td>
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
