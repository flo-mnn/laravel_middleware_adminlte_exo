@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Apply any bg-* class to to the info-box to color it -->
<div class="info-box bg-red">
    <span class="info-box-icon"><i class="fas fa-anchor"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">Likes</span>
      <span class="info-box-number">41,410</span>
      <!-- The progress section is optional -->
      <div class="progress">
        <div class="progress-bar" style="width: 70%"></div>
      </div>
      <span class="progress-description">
        70% Increase in 30 Days
      </span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
        </div>
    </div>
@stop
