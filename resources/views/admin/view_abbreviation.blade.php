@extends('admin.admin_layout')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">AABREVIATION ID# {{$abbreviation->id}}</h4>
        <p class="card-description">
            Update or delete the abbreviation here.
        </p>
    <form class="forms-sample" action="/admin/update_abbreviation/{{$abbreviation->id}}" method="POST" >
        @csrf
        @method('PATCH')
          <div class="form-group">
            <label for="exampleInputName1">Abbreviation</label>
          <input type="text" required value="{{$abbreviation->abbreviation}}"  name="abbreviation" class="form-control" id="exampleInputName1" placeholder="abbreviation..">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Description</label>
            <input type="text" required value="{{$abbreviation->description}}" name="description" class="form-control" id="exampleInputName1" placeholder="description..">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Sub-Category</label>
              <select class="form-control" id="exampleSelectGender" name="sub_category_id">
                @foreach ($sub_categories as $category)
                    @if (($category->id)==($sub_category->id))
                        <option selected value="{{$category->id}}">{{$category->name}}</option>
                    @else
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                @endforeach
              </select>
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Definition</label>
            <textarea required class="form-control" name="definition" id="exampleTextarea1" rows="4">{{$abbreviation->definition}}</textarea>
          </div>
          <button type="submit" class="btn btn-warning mr-2">Update</button>
          <a href="/admin/delete_abbreviation/{{$abbreviation->id}}" class="btn btn-danger mr-2">Delete</a>
          <a href="/admin/abbreviations" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection