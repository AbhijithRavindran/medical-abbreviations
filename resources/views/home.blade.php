@extends('home_layout')
@section('content')
<div class="col-md-5 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="">Introduction</h3>
        <p class="card-description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley not only five centuries,
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-3 grid-margin grid-margin-md-0 stretch-card">
    <div class="card">
      <div class="card-body">
      <h4 class="card-title"></h4>
        {{-- <p class="card-description">Add class <code>.list-star</code> to <code>&lt;ul&gt;</code></p> --}}
        <ul class="list-star">
          @foreach ($categories as $category)
            <li><a href="/category/{{$category->id}}">{{$category->name}}</a></li>  
          @endforeach
        </ul>
      </div>
    </div>
</div>

@endsection