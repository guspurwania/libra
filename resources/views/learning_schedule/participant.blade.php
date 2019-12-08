@extends('layouts.backend')

@section('content-header')
<div class="section-header">
  <h1>Participant</h1>
  <div class="section-header-breadcrumb">
      <div class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></div>
      <div class="breadcrumb-item">Participant</div>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
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