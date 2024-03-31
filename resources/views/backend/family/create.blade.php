@extends('backend.base');
@section('title')
    Create Family Info
@endsection

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h3 class="title-1">Create Family Info</h3>
                <a href="{{ route('family_info') }}" class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-list"></i>View</a>
            </div>
        </div>
    </div>


    <div class="row m-t-30">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <form action="" method="post" novalidate="novalidate">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="father" class="control-label mb-1">Father Name</label>
                                    <input id="cc-pament" name="father" id="father" type="text" class="form-control"
                                        aria-required="true" placeholder="Enter Father Name" aria-invalid="false">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="father_nid" class="control-label mb-1">Fathe NID</label>
                                    <input id="cc-pament" name="father_nid" id="father_nid" type="text"
                                        class="form-control" aria-required="true" placeholder="Enter Father NID"
                                        aria-invalid="false">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mother" class="control-label mb-1">Mother Name</label>
                                    <input id="cc-pament" name="mother" id="mother" type="text" class="form-control"
                                        aria-required="true" placeholder="Enter Mother Name" aria-invalid="false">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mother_nid" class="control-label mb-1">Mother NID</label>
                                    <input id="cc-pament" name="mother_nid" id="mother_nid" type="text"
                                        class="form-control" aria-required="true" placeholder="Enter Mother NID"
                                        aria-invalid="false">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="father_image" class="control-label mb-1 ">Father Image</label>
                                    <input id="cc-pament" name="father_image" id="father_image" type="file"
                                        class="form-control dropify" aria-required="true" aria-invalid="false">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mother_image" class="control-label mb-1">Mother Image</label>
                                    <input id="cc-pament" name="mother_image" id="mother_image" type="file"
                                        class="form-control dropify" aria-required="true" aria-invalid="false">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group" style="margin-left: 25px;">
                                    <label for="father_nid" class="control-label mb-1"></label>
                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="1"
                                        class="form-check-input">Add Childrens
                                </div>
                            </div>
                        </div>

                        <div class="d-none" id="children-section">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name" class="control-label mb-1">Name</label>
                                        <input id="cc-pament" name="name" id="name" type="text"
                                            class="form-control" aria-required="true" placeholder="Enter Father Name"
                                            aria-invalid="false">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender" class="control-label mb-1">Gender</label>
                                        <input id="cc-pament" name="gender" id="gender" type="text"
                                            class="form-control" aria-required="true" placeholder="Enter gender Name"
                                            aria-invalid="false">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dob" class="control-label mb-1">DOB</label>
                                        <input id="cc-pament" name="dob" id="DOB" type="date"
                                            class="form-control" aria-required="true" placeholder="Enter DOB"
                                            aria-invalid="false">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="dob_certificate" class="control-label mb-1">Birth Certificate</label>
                                        <input id="cc-pament" name="dob_certificate" id="dob_certificate" type="file"
                                            class="" aria-required="true" aria-invalid="false">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="nid_doc" class="control-label mb-1">NID Doc</label>
                                        <input id="cc-pament" name="nid_doc" id="nid_doc" type="file"
                                            class="" aria-required="true" aria-invalid="false">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="button" id="add-child" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-sending">Save</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var checkbox = document.getElementById('checkbox1');
            var childrenSection = document.querySelector('#children-section');

            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    childrenSection.classList.remove('d-none');
                } else {
                    childrenSection.classList.add('d-none');
                }
            });
        });
    </script>
@endpush
