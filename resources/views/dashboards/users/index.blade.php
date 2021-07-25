@extends('dashboards\users\layouts\users-dash-layout')
@section('title','Dashboard')
@section('bodys','DASHBOARD')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ Auth::user()->name}} Dashboard's</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content pb-3">
    Content goes here
</section>

@endsection
