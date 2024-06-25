@extends('backend.base');
@section('title')
    Profile Updates
@endsection

@section('main')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="{{ route('user_profile')}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="father" class="control-label mb-1">Name</label>
                            <input id="cc-pament" name="name" id="name" value="{{ $user->name }}" type="text" class="form-control"
                                aria-required="true" aria-invalid="false">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="father" class="control-label mb-1">Email</label>
                            <input id="cc-pament" name="email" id="email" value="{{ $user->email }}" type="email" class="form-control"
                                aria-required="true" aria-invalid="false">
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group mb-1">
                            <input id="cc-pament" name="profile_photo_path" id="profile_photo_path" type="file" class=""
                                aria-required="true" aria-invalid="false">
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
@endsection
