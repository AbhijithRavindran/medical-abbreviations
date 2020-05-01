@extends('home_layout')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-lg-3 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Sub-Categories</h4>
                <p class="card-description"></p>
                <ul class="list-arrow">
                  @foreach ($sub_categories as $sub_category)
                    <li><a href="/sub_category/{{$sub_category->id}}">{{$sub_category->name}}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
    </div>
@endsection