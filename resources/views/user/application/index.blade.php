@extends('user.layouts.app')
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
                                Application
                                @if (!$application)
                                    <a class="btn btn-primary float-right btn-sm" href="{{ url('/user/application/create') }}"><i data-feather="plus"></i>&nbsp;Create</a>
                                @endif
                            </div>
                            <div class="card-body">
                               <div class="">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>CR Number</th>
                                                <th>Application ID</th>
                                                <th>Phone</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($application)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded mr-1">
                                                                <div class="avatar-content">
                                                                    @if (!empty(auth::user()->image))
                                                                        <img width="40" class="rounded" src="{{ asset('/backend/user/profile/'.auth::user()->image) }}" />
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
                                                    
                                                    <td>CR{{ auth::user()->ref_no }}</td>
                                                    <td>{{ $application->application_id }}</td>
                                                    <td>{{ $application->mobile_number }}</td>
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
                                                            <a class="btn btn-light btn-sm rounded"  data-toggle="tooltip" data-placement="top" title="View" href="{{ url('/user/application/view/'.$application->application_id) }}"><i data-feather="eye"></i></a>
                                                            @if ($application->isSubmited == "No")
                                                                <a class="btn btn-light btn-sm rounded"  data-toggle="tooltip" data-placement="top" title="Edit" href="{{ url('/user/application/edit/'.$application->application_id."?tab=Personal") }}"><i data-feather="edit"></i></a>
                                                            @endif
                                                            {{-- <a onclick="return confirm('Are yousure to delete ?')" class="btn btn-light btn-sm rounded"  data-toggle="tooltip" data-placement="top" title="Delete" href="{{ url('/user/application/delete/'.$application->id) }}"><i data-feather="trash"></i></a> --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @else
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
