@extends('layouts.backend')
@section('title',$module)
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @include('backend.includes.pageheading')
        <div class="col-lg-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="card-title"> {{$module}}
                        <a href="{{route($base_route . 'create')}}" class="btn btn-info">Create</a>
                    </h3>
                    <div class="card-body">
                        @include('backend.includes.flash')

                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th>ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Total Semester</th>
                                <th>Created By</th>
                                <th>Updated By</th>
                                <th>Created At</th>
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
                                    {{--                            <td>{{DB::table('users')->where('id', $d->created_by)->value('name')}}</td>--}}
                                    <td>{{$record->No_of_semester}}</td>
                                    <td>
                                        {{$record->createdBy->name}}
                                    </td>
                                    {{--                            <td>{{DB::table('users')->where('id', $d->updated_by)->value('name')}}</td>--}}
                                    <td>
                                        @if(!empty($record->updated_by))
                                            {{$record->updatedBy->name}}
                                        @endif
                                    </td>
                                    {{--                            <td>{{$d->created_at}}</td>--}}
                                    <td>{{$record->created_at}}</td>
                                    <th>
                                        <form action="{{route($base_route.'restore',$record->id)}}" method="post" style="display:inline-block">
                                            @csrf
                                            <input type="submit" class="btn btn-primary" value="Restore">
                                        </form>
                                        <form action="{{route($base_route . 'force_delete',$record->id)}}" method="post" style="display:inline-block">
                                            @method("delete")
                                            @csrf
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>

                                    </th>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection

