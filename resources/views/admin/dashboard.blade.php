@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Kategoriya 0</p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Material 0</p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">User 0</p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Today 0</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <a class="btn btn-block btn-default" href="#">Create kategoriya</a>
        <a class="list-group-item" href="#">
          <h4 class="list-group-item-heading">1 - Kategoriya</h4>
          <p class="list-group-item-text">
            Count material
          </p>
        </a>
      </div>
      <div class="col-sm-6">
        <a class="btn btn-block btn-default" href="#">Create material</a>
        <a class="list-group-item" href="#">
          <h4 class="list-group-item-heading">1 - Material</h4>
          <p class="list-group-item-text">
            Kategoriya
          </p>
        </a>
      </div>
    </div>
  </div>
@endsection
