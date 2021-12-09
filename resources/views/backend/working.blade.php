@extends('backend.layouts.master')

@section('metaDataCSRF')
    <meta name="csrf-token" content="{{ csrf_token()}}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">網站施工中</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">首頁</a></li>
            <li class="breadcrumb-item active">網站施工中</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
              <h2>能作<strong>Nausaku</strong></h2>
              <p class="lead mb-5">網站施工中<br>
                歡迎聯絡我們
              </p>
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
              <label for="inputName">姓名</label>
              <input type="text" id="inputName" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputEmail">E-Mail</label>
              <input type="email" id="inputEmail" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputSubject">主旨</label>
              <input type="text" id="inputSubject" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputMessage">訊息</label>
              <textarea id="inputMessage" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="發送訊息">
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->



</div>
<!-- /.content-wrapper -->


@endsection
