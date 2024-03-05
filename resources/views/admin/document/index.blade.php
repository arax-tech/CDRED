@extends('admin.layouts.app')
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
                            <div class="card-header bg-light mb-1">
                                Documents
                                <a class="btn btn-primary float-right btn-sm" href="{{ url('/admin/document/create') }}"><i data-feather="plus"></i>&nbsp;Create</a>
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
                                            @forelse ($documents as $document)
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
                                                    <td>CR{{ $user->ref_no }}</td>
                                                    
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
                                                            <a class="btn btn-light btn-sm rounded" title="View" href="{{ url('/admin/document/view/'.$document->id) }}"><i data-feather="eye"></i></a>
                                                            <a class="btn btn-light btn-sm rounded" title="Edit" href="{{ url('/admin/document/edit/'.$document->id) }}"><i data-feather="edit"></i></a>
                                                            <a onclick="return confirm('Are yousure to delete ?')" class="btn btn-light btn-sm rounded" title="Delete" href="{{ url('/admin/document/delete/'.$document->id) }}"><i data-feather="trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7">No documents found...</td>
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
