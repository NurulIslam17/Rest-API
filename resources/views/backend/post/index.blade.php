@extends('backend.base');
@section('title')
    Post
@endsection

@section('main')
    <div class="row">
        <a href="{{ route('post.create')}}" class="btn btn-success border-t-green-500"><i class="fas fa-plus"></i>Add New</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3 jq-table w-100" id="example">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset($post->photo) }}" alt="" srcset="" style="height: 50px;width:50px;">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->desc }}</td>
                                <td>
                                    @if ($post->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-warning">Inactive</span>
                                    @endif
                                </td>
                                <td>{{ date('d M Y', strtotime($post->created_at)) }}</td>
                                <td class="process">
                                    <a href="#" class="btn btn-info">Status</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
