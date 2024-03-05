@extends('user.layouts.app')
@section('title', 'Report')
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
                            <div class="card-header bg-light mb-1">Report</div>
                            <div class="card-body text-center">
                               <div class="">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S#</th>
                                                <th>Date</th>
                                                <th>PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($report)
                                                <tr>
                                                    <td>#{{ $report->id }}</td>
                                                    <td>{{ date('d M Y, h:i A', strtotime($report->created_at)) }}</td>
                                                    <td>
                                                        <a target="_blank" href="{{ asset('/backend/user/pdf/'.$report->pdf) }}" class="btn btn-outline-primary"><i data-feather="download"></i> Download</a>
                                                    </td>
                                                </tr>
                                            @else

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
