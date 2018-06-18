<div class="col-lg-12 mt-3">
    <div  id="contact-information" class="card">
        <div class="card-body">
                <h4 class="font-weight-bold text-info">Contact Information  <a id="ci_editBtn" href="#" class="float-right d-none"><i class="fas fa-edit"></i></a></h4>
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="email">E-mail</label>
                                <input type="email" value="{{ isset($contact) ? $contact->email : '' }}" name="email" class="form-control" disabled>
                            </div>
                            <div class="col-lg-4">
                                <label for="mobile_num">Mobile Number</label>
                                <input type="text" value="{{ isset($contact) ? $contact->mobile_no : '' }}" name="mobile_no" class="form-control" disabled>
                            </div>
                            <div class="col-lg-4">
                                <label for="telephone_num">Telephone Number</label>
                                <input type="text" value="{{ isset($contact) ? $contact->telephon_no : '' }}" name="telephone_no" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <label for="web_address">Web Address</label>
                                <input type="text" value="{{ isset($contact) ? $contact->web_address : '' }}" name="web_address" class="form-control" disabled>
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