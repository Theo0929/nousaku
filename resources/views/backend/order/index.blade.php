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
                      <th>訂購人</th>
                      <th>狀態</th>
                      <th>訂單金額</th>
                      <th>下單日期</th>
                      <th>管理功能</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($orderList as $oitem)
                      <tr>
                        <td><a href="">{{$oitem->orderid}}</a></td>
                        <td>{{$oitem->receivename}}</td>
                        <td>
                        @if ($oitem->status == 0)
                          <span class="badge badge-success">處理中</span>
                        @elseif($oitem->status == 1)
                          <span class="badge badge-primary">未出貨</span>
                        @elseif($oitem->status == 2)
                          <span class="badge badge-info">已出貨</span>  
                        @elseif($oitem->status == 3)
                          <span class="badge badge-danger">已取消</span>   
                        @endif
                        </span></td>
                        <td>{{$oitem->totalprice}}</td>
                        <td>{{$oitem->updatedate}}</td>
                        <td>
                          <div class="row">
                              <div class="col-md-4">
                                  <button type="button" class="btn btn-block bg-gradient-primary btn-sm" 
                                  data-toggle="modal" data-target="#modal-orderEdit"
                                  data-target-id="{{$oitem->orderid}}">詳情</button>
                              </div>
                              <div class="col-md-4">
                                  <button type="button" class="btn btn-block bg-gradient-danger btn-sm">取消</button>
                              </div>
                            </div>
                        </td>
                      </tr>
                      @endforeach
                    
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

  <div class="modal fade" id="modal-orderEdit">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">訂單詳情</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="modal-body-orderEdit">

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

@endsection

@section('pageScript')
<script>
  $(function () {
    $('#ordersTable').DataTable({
      "stateSave": true,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });

    $('#modal-orderEdit').on("show.bs.modal" , function(e){
      var id = $(e.relatedTarget).data('target-id');
      $.get('/backend/orderEdit/' + id , function(data){
        $('#modal-body-orderEdit').html(data);
      });
    });

  });

  
</script>
@endsection