@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="col-lg-12" align="center">
            <div class="container-fluid mt-5">
                <img class="img-thumbnail" width="200" height="200" src="{{ asset('img/icons/sample.jpg') }}" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-info font-weight-bold d-none d-md-block">Profile</h5>
                        <div id="profile-information" class="list-group d-none d-md-block">
                            <a class="list-group-item list-group-item-action" href="#personal-information">Personal Information</a>
                            <a class="list-group-item list-group-item-action" href="#contact-information">Contact Information</a>
                            <a class="list-group-item list-group-item-action" href="#work-information">Work Information</a>
                            <a class="list-group-item list-group-item-action" href="#location-information">Location</a>
                        </div>
                        <div id="profile-information" class="dropdown d-md-none">
                            <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#personal-information">Personal Information</a>
                                <a class="dropdown-item" href="#contact-information">Contact Information</a>
                                <a class="dropdown-item" href="#work-information">Work Information</a>
                                <a class="dropdown-item" href="#location-information">Location</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-8">
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