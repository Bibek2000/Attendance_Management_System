@extends('layouts.backend')
@section('title',$module)
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @include('backend.includes.pageheading')
        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{$module}} Details
                            <h3 class="card-title">
                                <a href="{{route($base_route.'index')}}" class="btn btn-info">List</a>
                            </h3></h6>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>


                                <tr>
                                    <th>Year</th>
                                    <td>{{$data['record']->title}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data['record']->status}}</td>
                                </tr>
                                <tr>
                                    <th>Total Semester</th>
                                    <td>{{$data['record']->No_of_semester}}</td>
                                </tr>
                                <tr>
                                    <th>Created By</th>
                                    <td>{{$data['record']->createdBy->name}}</td>
                                </tr>

                                <tr>
                                    <th>Updated By</th>
                                    <td>
                                        @if(!empty($data['record']->updated_by))
                                            {{$data['record']->updated_by}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{$data['record']->created_at}}</td>

                                </tr>

                                </thead>

                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
