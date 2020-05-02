@extends('home_layout')
@section('content')
        <div class="col-md-6 offset-lg-1 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
              <div class="card-body">
              <h4 class="card-title">Abbreviations</h4>
                <p class="card-description"></p>
                <form action="/filter" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlSelect3">Sort By </label>
                  <select name="category_id" class="form-control form-control-sm" id="exampleFormControlSelect3" required>
                    <option value="0">All</option>
                    @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                  <br>
                  <button type="submit" class="btn btn-primary mr-2">Sort</button>
                </div>
                
              </form>
                <ul class="list-arrow">
                  @foreach ($abbreviations as $abbreviation)
                    <li><a href="/abbreviation/{{ $abbreviation->id}}">{{ $abbreviation->abbreviation}}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
@endsection