@extends('home_layout')
@section('content')
        <div class="col-md-8 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{$main_category->name}}</h4>
                <p class="card-description"></p>
                <ul class="list-arrow">
                  @foreach ($sub_categories as $sub_category)
                    <li><a href="/sub_category/{{$sub_category->id}}">{{$sub_category->name}}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
    </div>
@endsection