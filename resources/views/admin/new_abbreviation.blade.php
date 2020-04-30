@extends('admin.admin_layout')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">ADD NEW AABREVIATION</h4>
        <p class="card-description">
            Create new abbreviations for specific sub-categories. Main category will automatically be assigned.
        </p>
        <form class="forms-sample" action="/admin/abbreviation/create" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Abbreviation</label>
            <input type="text" name="abbreviation" class="form-control" id="exampleInputName1" placeholder="abbreviation..">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputName1" placeholder="description..">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Sub-Category</label>
              <select class="form-control" id="exampleSelectGender" name="sub_category_id">
                @foreach($sub_categories as $sub_category)
                  <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                @endforeach
              </select>
            </div>
          <div class="form-group">
            <label for="exampleTextarea1">Definition</label>
            <textarea name="definition" class="form-control" id="exampleTextarea1" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="/admin/abbreviations" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection