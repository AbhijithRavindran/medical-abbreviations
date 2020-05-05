@extends('home_layout')
@section('content')
<div class="col-lg-8 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Abbreviations</h4>
      <p class="card-description">
      </p>
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
      <div class="table-responsive">
        <table class="table" >
          <thead>
            <tr>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($abbreviations as $abbreviation)
            <tr >
              <td style="text-align: left !important; width:20%"><a href="/abbreviation/{{ $abbreviation->id}}">{{ $abbreviation->abbreviation}}</a></td>
              <td style="text-align: left !important; width:80%">{{$abbreviation->description}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection