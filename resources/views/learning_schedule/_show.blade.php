<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Code</label>
    <div class="col-sm-12 col-md-6">
        {!! Form::text('code', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
        {!! $errors->first('code', '<p class="text-danger">:message</p>') !!}
    </div>
</div>
<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subject</label>
    <div class="col-sm-12 col-md-6">
        {!! Form::text('subject', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
        {!! $errors->first('subject', '<p class="text-danger">:message</p>') !!}
    </div>
</div>
<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
    <div class="col-sm-12 col-md-6">
        {!! Form::textarea('desc', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
        {!! $errors->first('desc', '<p class="text-danger">:message</p>') !!}
    </div>
</div>
<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Schedule Day</label>
    <div class="col-sm-12 col-md-6">
        {!! Form::select('schedule_day', [
            'sunday' => 'Sunday', 
            'monday' => 'Monday',
            'tuesday' => 'Tuesday',
            'wednesday' => 'Wednesday',
            'thursday' => 'Thursday',
            'friday' => 'Friday',
            'saturday' => 'Saturday'
        ], null, ['class'=>'form-control', 'readonly'=>'readonly', 'disabled'=>'disabled']) !!}
    </div>
</div>
<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Start At</label>
    <div class="col-sm-12 col-md-6">
        {!! Form::time('schedule_time', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
        {!! $errors->first('schedule_time', '<p class="text-danger">:message</p>') !!}
    </div>
</div>
<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">End At</label>
    <div class="col-sm-12 col-md-6">
        {!! Form::time('schedule_time_end', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
        {!! $errors->first('schedule_time_end', '<p class="text-danger">:message</p>') !!}
    </div>
</div>
<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Enrollment Key</label>
    <div class="col-sm-12 col-md-6">
        {!! Form::text('enrollment_key', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
        {!! $errors->first('enrollment_key', '<p class="text-danger">:message</p>') !!}
    </div>
</div>
<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Class Room</label>
    <div class="col-sm-12 col-md-6">
        {!! Form::text('class_room', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
        {!! $errors->first('class_room', '<p class="text-danger">:message</p>') !!}
    </div>
</div>
@if(empty($check_user))
<hr />
<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Enrollment Key</label>
    <div class="col-sm-12 col-md-6">
        {!! Form::text('enrollment_key', '', ['id'=>'enrollment_key','class'=>'form-control']) !!}
        {!! $errors->first('enrollment_key', '<p class="text-danger">:message</p>') !!}
    </div>
</div>
<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
    <div class="col-sm-12 col-md-7">
        <button type="button" class="btn btn-primary btn-lg" onclick="return enroll({{ $learning_schedule->id }}, $('#enrollment_key').val());">Enroll</button>
    </div>
</div>
@endif