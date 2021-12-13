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
            <h1 class="m-0">製品管理</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">首頁</a></li>
              <li class="breadcrumb-item active">製品管理</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">製品列表</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-block btn-success col-2"
                data-toggle="modal" data-target="#modal-productCreate"
                data-target-id="0">新增</button>
                <br>
                <div class="table-responsive">
                  <table id="productTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>製品編號</th>
                      <th>名稱</th>
                      <th>類別</th>
                      <th>狀態</th>
                      <th>管理功能</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($productList as $item)
                      <tr>
                        <td><a href="">{{$item->productno}}</a></td>
                        <td>{{$item->pname}}</td>
                        <td>{{$item->category}}</td>
                        <td>
                        @if ($item->status == 0)
                        <p class="text-success">上架銷售中</p>
                        @elseif ($item->status == 1)
                        <p class="text-danger">缺貨中 </p>
                        @endif
                        </td>
                        <td>
                          <div class="row">
                              <div class="col-md-4">
                                  <button type="button" 
                                    class="btn btn-block bg-gradient-primary btn-sm" 
                                    data-toggle="modal" data-target="#modal-productEdit"
                                    data-target-id="{{$item->productid}}">詳情</button>
                              </div>
                              <div class="col-md-4">
                                  <button type="button" class="btn btn-block bg-gradient-danger btn-sm">刪除</button>
                              </div>
                            </div>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>

                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="modal-productEdit">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">製品詳情</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="modal-body-productEdit">

          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" id="modal-productCreate">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">製品詳情</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="modal-body-productCreate">

          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('pageScript')
<script>
  $(function () {
    $('#productTable').DataTable({
      "stateSave": true,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });

    $('#modal-productEdit').on("show.bs.modal" , function(e){
      var id = $(e.relatedTarget).data('target-id');
      $.get('/backend/productEdit/' + id , function(data){
        $('#modal-body-productEdit').html(data);
      });
    });

    $('#modal-productCreate').on("show.bs.modal" , function(e){
      var id = $(e.relatedTarget).data('target-id');
      $.get('/backend/productCreate' , function(data){
        $('#modal-body-productCreate').html(data);
      });
    });
  });

  
</script>
@endsection