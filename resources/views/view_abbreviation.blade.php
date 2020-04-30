@extends('home_layout')
@section('content')
<div class="row">
    <div class="col-md-6 offset-lg-3 grid-margin stretch-card text-center">
        <div class="card">
          <div class="card-body">
            <h2 >{{$abbreviation->abbreviation}}</h2>
            <p class="card-description">
                Description:&nbsp;{{$abbreviation->description}}
            </p>
            <p>
                {{$abbreviation->definition}}
            </p>
          </div>
        </div>
      </div>
</div>
@endsection