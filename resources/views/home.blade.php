@extends('layouts.main')

@section('container')
<h1>Dashboard Home</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Widget 1</h5>
            <p class="card-text">This is the content of widget 1.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Widget 2</h5>
            <p class="card-text">This is the content of widget 2.</p>
          </div>
        </div>
      </div>
    </div>
@endsection