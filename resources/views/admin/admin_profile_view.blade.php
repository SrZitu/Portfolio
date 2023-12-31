@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            {{-- start of a single col --}}
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mt-4 mt-md-0"><br><br>
                        <center>
                            <img class="rounded-circle avatar-xl"
                                src="{{ !empty($adminData->profile_image) ? url('upload/admin_images/' . $adminData->profile_image) : url('upload/noimage.jpg') }}">

                        </center>
                        <div class="card-body">
                            <h4 class="card-title">Name: {{ $adminData->name }}</h4>
                            <hr>
                            <h4 class="card-title">User Email: {{ $adminData->email }}</h4>
                            <hr>
                            <h4 class="card-title">User Name: {{ $adminData->username }}</h4>
                            <hr>
                            <a href="{{ route('admin.edit') }}"
                                class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end of a single col --}}
        </div>
    </div>
@endsection
