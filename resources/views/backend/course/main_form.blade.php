<div class="form-group">
    {!!Form::label('program_id','Program')!!}
    {!!Form::select ('program_id',$data['programs'],null,['class'=> 'form-control'])!!}
    @include('backend.includes.single_field_error',['field'=>'program_id'])
</div>

<div class="form-group">
    {!!Form::label('No_of_semester','Semester')!!}
    {!! Form::selectRange('No_of_semester', 1, 8, null,['class'=> 'form-control']) !!}
    @include('backend.includes.single_field_error',['field'=>'No_of_semesters'])
</div>

<div class="form-group">
    {!!Form::label('course_code','Course Code')!!}
    {!!Form::text ('course_code',null,['class'=> 'form-control','placeholder'=>'Enter your email'])!!}
    @include('backend.includes.single_field_error',['field'=>'course_code'])
</div>

<div class="form-group">
    {!!Form::label('name','Course Name')!!}
    {!!Form::text('name',null,['class'=> 'form-control'])!!}
    @include('backend.includes.single_field_error',['field'=>'Name'])
</div>

<div class="form-group">
    {!!Form::label('status','Status')!!} <br>
    <input type="radio" name="status" value="1"> Enable<br>
    <input type="radio" name="status" value="2" checked> Disable<br>
</div>

<div class="card-footer">
    {!!Form::submit($button .' '.$module,['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear '.''.$module,['class'=>'btn btn-danger'])!!} <br>
</div>
