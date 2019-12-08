@extends('layouts.backend')

@section('content')
<h1  align="center">Your Classes</h1>
<hr />
<div class="row">
  @if(!empty($learning_users))
    @foreach($learning_users as $learn)
      <div class="col-lg-3">
          <div class="card">
              <div class="card-header">
                <a href="{{ route('learning_schedule.show', $learn->learning_schedule->id) }}"><h3>{{ $learn->learning_schedule->subject }}</h3></a>
              </div>
              <div class="card-body">
                <center><img src="{{ url('storage/learn') }}/{{ $learn->learning_schedule->img }}" width="250"></center><br />
                <p>{{ $learn->learning_schedule->desc }}</p> <br />
                {{ $learn->learning_schedule->class_room }},  {{ ucfirst($learn->learning_schedule->schedule_day) }} {{ $learn->learning_schedule->schedule_time }} - {{ $learn->learning_schedule->schedule_time_end }}
              </div>
          </div>
      </div> 
    @endforeach 
  @else
    <div class="col-lg-12">
      <center><h3>Class Not Found!</h3></center>
    </div>
  @endif 
</div>

<hr />
<h1  align="center">All Classes</h1>
<hr />
<div class="row">
  @if(!empty($learning_schedules))
    @foreach($learning_schedules as $learn)
      <div class="col-lg-3">
          <div class="card">
              <div class="card-header">
                <a href="{{ route('learning_schedule.show', $learn->id) }}"><h3>{{ $learn->subject }}</h3></a>
              </div>
              <div class="card-body">
                <center><img src="{{ url('storage/learn') }}/{{ $learn->img }}" width="250"></center><br />
                <p>{{ $learn->desc }}</p> <br />
                {{ $learn->class_room }},  {{ ucfirst($learn->schedule_day) }} {{ $learn->schedule_time }} - {{ $learn->schedule_time_end }}
              </div>
          </div>
      </div> 
    @endforeach 
  @else
    <div class="col-lg-12">
      <center><h3>Class Not Found!</h3></center>
    </div>
  @endif 
</div>
@endsection
