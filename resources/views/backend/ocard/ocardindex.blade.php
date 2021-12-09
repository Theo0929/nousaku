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
            <h1 class="m-0">OCARD查詢</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">首頁</a></li>
              <li class="breadcrumb-item active">OCARD查詢</li>
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
                <h3 class="card-title">OCARD查詢</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                      <div class="col-4">
                        <form action="/backend/ocardtest" id="ocardTestForm">
                            <table>
                                <tr>
                                    <td>
                                        key :
                                    </td>
                                    <td>
                                        nousaku_web
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        secret :
                                    </td>
                                    <td>
                                        qts30krukw044cu3cwuegr2zaofaqhaf
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        uid:
                                    </td>
                                    <td>
                                        <input type="text" name="uid" id="uid" value="{{$result->data->uid}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        token:
                                    </td>
                                    <td>
                                        <input type="text" name="token" id="token" value="{{$result->data->token}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        會員手機:
                                    </td>
                                    <td>
                                        <input type="text" id="cell" name="cell" value="0988579007">
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <button type="button" id="ocardSubmit">OCARD查詢</button>
                            <button type="button" id="ocardTestSubmit">OCARD測試環境查詢</button>
                        </form>
                      </div>
                      <div class="col-8">
                      金鑰認證(OCARD測試環境)結果 :
                      <br>
                        {{var_dump($result)}}
                      </div>
                  </div>
                
                <br>
                查詢結果 :
                <br>
                <div id="result"> 

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

  </div>
  <!-- /.content-wrapper -->


@endsection

@section('pageScript')
<script>
  $(function () {

    $("#ocardTestSubmit").on('click' , function() {

        $("#ocardTestForm").submit();
    });
    $("#ocardTestForm").on("submit" , function(e){
        e.preventDefault();
        var postData = $(this).serializeArray();
        var formUrl = $(this).attr("action");
        $.ajaxSetup({
            headers : {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: formUrl,
            type: "POST",
            data: postData,
            success:function (data , textStatus , jqXHR) {
                $("#result").html(data);
            },
            error: function (jqXHR , status , error){
                alert(stauts + " : " + error);
            }
        });

    });

  });

  
</script>
@endsection