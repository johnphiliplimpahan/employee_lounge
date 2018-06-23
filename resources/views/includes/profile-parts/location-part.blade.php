<div class="col-lg-12 mt-3 mb-3">
    <div id="location-information" class="card">
        <div class="card-body">
            <h4 class="font-weight-bold text-info mt-5 mb-3">Location <a id="li_editBtn" href="#" class="float-right d-none"><i class="fas fa-edit"></i></a></h4>
            <div class="container">
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="address">Current Address</label>
                            <textarea class="form-control" name="address" rows="3" autocomplete="off" disabled>{{ $location->address }}</textarea>
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