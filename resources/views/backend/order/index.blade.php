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
            <h1 class="m-0">訂單管理</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">首頁</a></li>
              <li class="breadcrumb-item active">訂單管理</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-10">
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">最新訂單</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table id="ordersTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>訂單編號</th>
                      <th>內容</th>
                      <th>狀態</th>
                      <th>管理功能</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="">OR9842</a></td>
                      <td>TAMA</td>
                      <td><span class="badge badge-success">已出貨</span></td>
                      <td>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm">詳情</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-success btn-sm">完成</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-danger btn-sm">取消</button>
                            </div>
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="">OR1848</a></td>
                      <td>櫻色富士山風情杯</td>
                      <td><span class="badge badge-warning">待出貨</span></td>
                      <td>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm">詳情</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-success btn-sm">完成</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-danger btn-sm">取消</button>
                            </div>
                          </div>
                       </td>
                    </tr>
                    <tr>
                      <td><a href="">OR7429</a></td>
                      <td>KAGO</td>
                      <td><span class="badge badge-danger">已送達</span></td>
                      <td>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm">詳情</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-success btn-sm">完成</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-danger btn-sm">取消</button>
                            </div>
                          </div>
                       </td>
                    </tr>
                    <tr>
                      <td><a href="">OR7429</a></td>
                      <td>貝爾·斯利姆</td>
                      <td><span class="badge badge-info">處理中</span></td>
                      <td>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm">詳情</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-success btn-sm">完成</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-danger btn-sm">取消</button>
                            </div>
                          </div>
                       </td>
                    </tr>
                    <tr>
                      <td><a href="">OR1848</a></td>
                      <td>黃銅花型底座</td>
                      <td><span class="badge badge-warning">未付款</span></td>
                      <td>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm">詳情</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-success btn-sm">完成</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-danger btn-sm">取消</button>
                            </div>
                          </div>
                       </td>
                    </tr>
                    <tr>
                      <td><a href="">OR7429</a></td>
                      <td>啤酒杯</td>
                      <td><span class="badge badge-danger">已送達</span></td>
                      <td>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm">詳情</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-success btn-sm">完成</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-danger btn-sm">取消</button>
                            </div>
                          </div>
                       </td>
                    </tr>
                    <tr>
                      <td><a href="">OR9842</a></td>
                      <td>花連指手套</td>
                      <td><span class="badge badge-success">出貨中</span></td>
                      <td>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm">詳情</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-success btn-sm">完成</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-danger btn-sm">取消</button>
                            </div>
                          </div>
                       </td>
                    </tr>
                    </tbody>
                  </table>

                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->

              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection