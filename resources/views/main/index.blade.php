@extends('layouts.main')
@section('content')
    <script scr="{{asset('js/app.js')}}" defer></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Категории</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>


    <section class="content">
      <div class="container-fluid">

        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
                    <div id="app">
                    <filter-component></filter-component>
              </div>

            </div>
          </div>
        </div>


  </div>
  @endsection
