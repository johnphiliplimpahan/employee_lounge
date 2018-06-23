@extends('layouts.dashboard')


@section('content')
    <div class="container">
        <div class="col-lg-12" align="center">
            <div class="container-fluid mt-5">
                <div id="profile_pic" class="card bg-dark text-white col-lg-3 p-0">
                    <img width="250" height="250" class="card-img" src="/storage/profile-images/{{ isset($profile->profile_image) ? $profile->profile_image : 'placeholder_image.png' }}" alt="Card image">
                    <div id="profile_overlay" class="card-img-overlay">
                        <form method="POST" action="/profile-image" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                <h5 class="mt-5">Update Profile Picture</h5>
                                <input type="file" accept=".png,.jpg" class="btn btn-secondary btn-sm btn-block" name="profile_image" id="">
                            </div>
                            <div id="profile_image_actions" class="row mt-5 d-none">
                                <div class="col">
                                    <button type="submit" class="btn btn-success btn-sm btn-block">Save</button>
                                </div>
                                <div class="col">
                                    <button type="reset" class="btn btn-danger btn-sm btn-block">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 position-relative">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="card d-none d-md-block">
                    <div class="card-body">
                        <h5 class="card-title text-info font-weight-bold d-none d-md-block">Profile</h5>
                        <div id="profile-information" class="list-group d-none d-md-block">
                            <a class="list-group-item list-group-item-action" href="#personal-information">Personal Information</a>
                            <a class="list-group-item list-group-item-action" href="#contact-information">Contact Information</a>
                            <a class="list-group-item list-group-item-action" href="#work-information">Work Information</a>
                            <a class="list-group-item list-group-item-action" href="#location-information">Location</a>
                        </div>
                    </div>
                </div>
                <div class="card d-md-none">
                    <div id="profile-information" class="dropdown">
                        <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </button>
                        <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#personal-information">Personal Information</a>
                            <a class="dropdown-item" href="#contact-information">Contact Information</a>
                            <a class="dropdown-item" href="#work-information">Work Information</a>
                            <a class="dropdown-item" href="#location-information">Location</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-8 float-right">
                <div data-spy="scroll" data-target="#profile-information" data-offset="0" class="scrollspy-example">
                    @include('includes.profile-parts.personal-part')
                    @include('includes.profile-parts.contact-part')
                    @include('includes.profile-parts.work-part')
                    @include('includes.profile-parts.location-part')
                </div>
            </div>
        </div>
    </div>
@endsection