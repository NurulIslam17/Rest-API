@extends('backend.base');
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css"
        integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('title')
    Create
@endsection

@section('main')
    <div class="row">
        <a href="{{ route('post.index') }}" class="btn btn-success border-t-green-500"><i class="fas fa-list"></i>Posts</a>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="father" class="control-label mb-1">Title <span
                                    class="text-danger">*</span></label>
                            <input id="cc-pament" name="title" id="title" value="{{ old('title') }}" type="text"
                                class="form-control @error('title') is-invalid @enderror" aria-required="true"
                                aria-invalid="false">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group mb-1">
                            <label for="father" class="control-label mb-1">Image</label>
                            <input id="cc-pament" class="dropify" name="image" id="image" type="file"
                                class="" aria-required="true" aria-invalid="false">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="father" class="control-label mb-1">Description <span class="text-danger">*</span> </label>
                            <textarea name="desc" class="form-control  @error('desc') is-invalid @enderror" id="summernote" cols="30"
                                rows="10"></textarea>
                        </div>
                        @error('desc')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-sending">Create</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
