<div class="form-group">
    {!!Form::label('title','Title')!!}
    {!!Form::text ('title',null,['class'=> 'form-control','placeholder'=>'Program Name'])!!}
    @error('title')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!!Form::label('status','Status')!!} <br>
    <input type="radio" name="status" value="1"> Enable<br>
    <input type="radio" name="status" value="2" checked> Disable<br>
</div>

<div class="form-group">
    {!!Form::label('No_of_semester','Total Semester')!!}
    {!!Form::number ('No_of_semester',null,['class'=> 'form-control','placeholder'=>'Total semester'])!!}
    @error('No_of_semester')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>


<div class="card-footer">
    {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear '.''.$module,['class'=>'btn btn-danger'])!!} <br>
</div>
