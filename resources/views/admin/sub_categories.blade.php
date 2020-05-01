@extends('admin.admin_layout')
@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="d-flex justify-content-between flex-wrap">
      <div class="d-flex align-items-end flex-wrap">
        <div class="mr-md-3 mr-xl-5">
          <h2>Sub-Categories</h2>
          <p class="mb-md-0">You can add sub-categories here.</p>
        </div>
      </div>
      {{-- <div class="d-flex justify-content-between align-items-end flex-wrap">
        <button class="btn btn-primary mt-2 mt-xl-0">Create Main Category</button>
      </div> --}}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">Add new Sub-category for <br><b>{{$main_category->name}}</b></h4>
        <p class="card-description">
          Add a new sub category here.
        </p>
        <form action="/admin/sub_categories/create/{{$main_category->id}}" method="POST"  class="forms-sample">
          @csrf
        <div class="form-group">
          <div class="input-group">
              <input type="text" name="name" class="form-control" placeholder="Sub - category name" aria-label="">
              <div class="input-group-append">
                <button class="btn btn-sm btn-success" type="submit">Add</button>
              </div>
            
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

<br>
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Sub Categories List for <b>{{$main_category->name}}</b></p>
        <div class="table-responsive">
          <table id="recent-purchases-listing" class="table">
            <thead>
              <tr>
                  <th>Name</th>
              </tr>
            </thead>
            <tbody>
              @foreach($sub_categories as $sub_category)
                <tr>
                    <td>{{$sub_category->name}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {!! $sub_categories->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection