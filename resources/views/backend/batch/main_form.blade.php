<div class="form-group">
    {!!Form::label('year','Year')!!}
    {!!Form::number ('year',null,['class'=> 'form-control','placeholder'=>'Year'])!!}
    @include('backend.includes.single_field_error',['field'=>'year'])
</div>

<div class="form-group">
    {!!Form::label('status','Status')!!} <br>
    <input type="radio" name="status" value="1"> Enable<br>
    <input type="radio" name="status" value="2" checked> Disable<br>
</div>

<div class="card-footer">
    {!!Form::submit($button .''.'Batch',['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear'.''.'Batch',['class'=>'btn btn-danger'])!!} <br>
</div>
