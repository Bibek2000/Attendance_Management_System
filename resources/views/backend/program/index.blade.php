
@extends('layouts.backend')
@section('title',$module)
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @include('backend.includes.pageheading')
        <!-- Content Row -->


        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Batch
                            <h3 class="card-title">
                                <a href="{{route($base_route . 'create')}}" class="btn btn-info">Create</a>
                                <a href="{{route($base_route . 'trash')}}" class="btn btn-info">Trash</a>
                            </h3></h6>
                        <div class="card-body">
                            @include('backend.includes.flash')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body table-border-style">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>No_of_semester</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($data['records'] as $record)
                                                    <tr>
                                                        <td>{{$loop->index+1}}</td>



                                                        <td>{{$record->title}}</td>
                                                        <td>
                                                            @include('backend.includes.status',['status'=>$record->status])
                                                        </td>
                                                        <td>{{$record->No_of_semester}}</td>
                                                        <td>
                                                            <a href="{{route($base_route.'show',$record->id)}}" class="btn btn-primary">ViewDetails</a>
                                                            <a href="{{route($base_route.'edit',$record->id)}}"class="btn btn-warning">Edit</a>
                                                            <form action="{{route($base_route.'destroy',$record->id)}}" method="post" style="display:inline-block">
                                                                @method("delete")
                                                                @csrf
                                                                <input type="submit" class="btn btn-danger" value="Delete">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>




            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
