
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
                        </h6>
                    <div class="card-body">
                        {!!Form::open(['route' => [$base_route.'store'],'method'=>'post'])!!}
                        @include($base_view .'main_form',['button'=>'Save'])
                        {{Form::close()}}
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
