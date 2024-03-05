@extends('user.layouts.app')
@section('title', 'Documents')
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
                            <div class="card-header bg-light mb-1">Documents</div>
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
                                            @if($document)
                                                @php
                                                    $user = DB::table('users')->where('id', $document->user_id)->first();
                                                    $application = DB::table('applications')->where('id', $document->application_id)->first();
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
                                                                <div class="font-weight-bolder">{{ $user->name }} </div>
                                                                <div class="font-small-2 text-muted">{{ $user->email }}</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                    <td>CR{{ auth::user()->ref_no }}</td>
                                                    <td>{{ $application->application_id }}</td>
                                                    {{-- <td>{{ $document->mobile_number }}</td> --}}
                                                    <td>{{ date('d M Y, h:i A', strtotime($document->created_at)) }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bolder mr-1">{{ $document->status }}</span>
                                                            @if ($document->status == "Completed")
                                                                <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                                            @else
                                                                <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            @if ($document->status == "Completed")
                                                                <a class="btn btn-light btn-sm rounded" title="View" href="{{ url('/user/document/view/'.$document->id) }}"><i data-feather="eye"></i></a>
                                                            @endif
                                                            @if ($document->status == "Requested")
                                                                <a class="btn btn-light btn-sm rounded" title="Upload" href="{{ url('/user/document/upload/'.$document->id) }}"><i data-feather="upload"></i></a>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td colspan="7">No document found...</td>
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
