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
            <h1 class="m-0">品牌管理</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">首頁</a></li>
              <li class="breadcrumb-item active">品牌管理</li>
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
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">品牌列表</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <div class="table-responsive">
                  <table id="pBrandTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>系統編號</th>
                      <th>名稱</th>
                      <th>狀態</th>
                      <th>管理功能</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pBrandList as $item)
                      <tr>
                        <td><a href="">{{$item->pbid}}</a></td>
                        <td>{{$item->pbname}}</td>
                        <td>
                        @if ($item->status == 0)
                        <p class="text-success">啟用</p>
                        @elseif ($item->status == 1)
                        <p class="text-danger">停用</p>
                        @endif
                        </td>
                        <td>
                          <div class="row">
                              <div class="col-md-4">
                                  <button type="button" 
                                    class="btn btn-block bg-gradient-primary btn-sm" 
                                    data-toggle="modal" data-target="#modal-pBrandEdit"
                                    data-target-id="{{$item->pbid}}">詳情</button>
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
                <button type="button" class="btn btn-block btn-primary btn-lg col-4">新增</button>
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

    <div class="modal fade" id="modal-pBrandEdit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">品牌詳情</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="modal-body-pBrandEdit">

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
    $('#pBrandTable').DataTable({
      "stateSave": true,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });

    $('#modal-pBrandEdit').on("show.bs.modal" , function(e){
      var id = $(e.relatedTarget).data('target-id');
      $.get('/backend/brandEdit/' + id , function(data){
        $('#modal-body-pBrandEdit').html(data);
      });
    });
  });

  
</script>
@endsection