@extends('layouts.backend')

@section('content')
<div class="row">
  <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="button pb-3">
                  <a class="btn btn-primary" href="{{route('learning_schedule.create')}}">Add New Schedule</a>
                </div>
                <div class="table-responsive">
                  {!! $html->table(['class'=>'table table-hover', 'style'=>'width:100%']) !!}
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection

@section('js')
    {!! $html->scripts() !!}
    @include('components/_script_adjust-table')
@endsection