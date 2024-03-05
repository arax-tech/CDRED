@extends('admin.layouts.app')
@section('title', 'Profile')

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
                    <div class="col-md-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header bg-light mb-1">Profile Picture</div>
                            <div class="card-body text-center">
                                @if (!empty(auth::user()->image))
                                    <img class="w-75 rounded-circle mb-2" src="{{ asset('/backend/user/profile/'.auth::user()->image) }}" />
                                @else
                                    <img class="w-75 rounded-circle mb-2" src="{{ asset('placeholder.jpg') }}" />
                                @endif



                                <!-- Profile picture help block-->
                                <div class="small font-italic font-bolder">{{ auth::user()->name }}</div>
                                <div class="small font-italic text-muted">{{ auth::user()->email }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header bg-light mb-1">Update Profile</div>
                            <div class="card-body">
                                <form id="form-submit" method="post" action="{{ url(strtolower(auth::user()->role).'/profile') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gx-3 mb-1">
                                        <div class="col-md-6">
                                            <label class="small">Name</label>
                                            <input class="form-control" type="text" name="name" value="{{ auth::user()->name }}" required />
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <label class="small">Email</label>
                                            <input class="form-control" type="email" name="email" value="{{ auth::user()->email }}" required />
                                        </div>
                                    </div>


                                    <div class="row gx-3 mb-1">
                                        <div class="col-md-4">
                                            <label class="small">Phone</label>
                                            <input class="form-control" type="text" name="phone" value="{{ auth::user()->phone }}" />
                                        </div>    
                                        <div class="col-md-8">
                                            <label class="small">Address</label>
                                            <input class="form-control" type="text" name="address" value="{{ auth::user()->address }}" />
                                        </div>                                       
                                    </div>
                                    <div class="row gx-3 mb-1">
                                        <div class="col-md-12">
                                            <label class="small">Profile Image</label>
                                            <input class="form-control" type="file" name="profile" />
                                        </div>

                                       
                                    </div>
                                   
                                    <button class="btn btn-primary w-100 mt-1" type="submit">Update Profile</button>
                                </form>
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
