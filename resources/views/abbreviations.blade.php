@extends('home_layout')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-lg-3 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">List with icon</h4>
                <p class="card-description">Add class <code>.list-arrow</code> to <code>&lt;ul&gt;</code></p>
                <ul class="list-arrow">
                  @foreach ($abbreviations as $abbreviation)
                    <li><a href="/abbreviation/{{ $abbreviation->id}}">{{ $abbreviation->abbreviation}}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
    </div>
@endsection