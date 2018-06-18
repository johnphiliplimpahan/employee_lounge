<div class="col-lg-12">
    <div id="personal-information" class="card">
        <div class="card-body">
            <h4 class="font-weight-bold text-info">Personal Information <a id="pi_editBtn" href="#" class="float-right d-none"><i class="fas fa-edit"></i></a></h4>
            <div class="container">
                <form> <!--THE START OF FORM -->
                <input type="hidden" name="personalInfo_id" value="{{ $personal->personalInfo_id }}">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" name="firstname" value="{{ $personal->firstname }}" required disabled>
                        </div>
                        <div class="col-lg-4">
                            <label for="middlename">Middle Name</label>
                            <input type="text" class="form-control" name="middlename" value="{{ $personal->middlename }}" required disabled>
                        </div>
                        <div class="col-lg-4">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" name="lastname" value="{{ $personal->lastname }}" required disabled>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <label for="gender">Gender</label>
                            <select class="form-control" disabled name="gender">
                                @if(isset($personal->gender))
                                    <option value="{{ $personal->gender }}" selected>{{ $personal->gender }}</option>
                                @endif
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="dob">Date of Birth</label>
                            <input type="text" value="{{ isset($personal->dob) ? $personal->dob : '' }}" name="dob" class="form-control" required disabled>
                        </div>
                    </div>
                </form> <!--THE END OF FORM -->
            </div>
        </div>
    </div>
    <div class="card-footer bg-warning d-none">
        <div class="row">
            <div class="col" align="center">
                <button type="submit" class="btn btn-danger">Save</button>
                <button type="button" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </div>
</div>