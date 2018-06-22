<div class="col-lg-12 mt-3">
    <div id="work-information" class="card">
        <div class="card-body">
                <h4 class="font-weight-bold text-info mt-5 mb-3">Work Information <a id="wi_editBtn" href="#" class="float-right d-none"><i class="fas fa-edit"></i></a></h4>
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="company">Company</label>
                                <input type="text" value="{{ $work->company }}" class="form-control" autocomplete="off" disabled>
                            </div>
                            <div class="col-lg-4">
                                <label for="department">Department</label>
                                <input type="text" value="{{ $work->department }}" class="form-control" autocomplete="off" disabled>
                            </div>
                            <div class="col-lg-4">
                                <label for="occupation">Occupation</label>
                                <input type="text" value="{{ $work->occupation }}" class="form-control" autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <label for="hire_date">Hire Date</label>
                                <input type="text" value="{{ $work->hireDate }}" class="form-control" autocomplete="off" disabled>
                            </div>
                        </div>
                    </form>
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