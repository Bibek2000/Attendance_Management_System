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
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="card-body">
                                        {!!Form::model($data['record'], ['route' => [$base_route.'update',$data['record']->id],'method'=>'post'])!!}
                                        {!! Form::hidden('_method','PUT') !!}
                                        @include($base_view .'main_form',['button'=>'Update '])
                                        {{Form::close()}}
                                        <!-- /.card-footer-->
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
@endsection

