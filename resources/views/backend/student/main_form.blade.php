<div class="form-group">
    {!!Form::label('Name','Name')!!}
    {!!Form::text ('Name',null,['class'=> 'form-control','placeholder'=>'Enter your name'])!!}
    @include('backend.includes.single_field_error',['field'=>'Name'])
    <div>

<div class="form-group">
    {!!Form::label('email','Email')!!}
    {!!Form::email ('email',null,['class'=> 'form-control','placeholder'=>'Enter your email'])!!}
    @include('backend.includes.single_field_error',['field'=>'email'])
</div>

<div class="form-group">
    {!!Form::label('batch_id','Batch')!!}
    {!!Form::select('batch_id',$data['batches'],null,['class'=> 'form-control'])!!}
    @include('backend.includes.single_field_error',['field'=>'batch'])
</div>

<div class="form-group">
    {!!Form::label('program_id','Program')!!}
    {!!Form::select('program_id',$data['programs'],null,['class'=> 'form-control'])!!}
    @include('backend.includes.single_field_error',['field'=>'programs'])
</div>

<div class="form-group">
    {!!Form::label('Enroll_year','Enroll_year')!!}
    {!!Form::number ('Enroll_year',null,['class'=> 'form-control'])!!}
    @include('backend.includes.single_field_error',['field'=>'enroll_year'])
</div>

<div class="form-group">
    {!!Form::label('status','Status')!!} <br>
    <input type="radio" name="status" value="1"> Enable<br>
    <input type="radio" name="status" value="2" checked> Disable<br>
</div>

<div class="card-footer">
    {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!} <br>
</div>
