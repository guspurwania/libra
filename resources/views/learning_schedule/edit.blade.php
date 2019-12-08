@extends('layouts.backend')

@section('content-header')
<div class="section-header">
  <h1>Edit Schedule</h1>
  <div class="section-header-breadcrumb">
      <div class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></div>
      <div class="breadcrumb-item">Edit Schedule</div>
  </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
            {!! Form::model($learning_schedule, ['url' => route('learning_schedule.update', $learning_schedule->id), 'method' => 'put', 'class'=>'form-group', 'files'=>true]) !!}
              @include('learning_schedule._form')
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection

