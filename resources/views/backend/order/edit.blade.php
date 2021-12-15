<div class="modal-body" >

@foreach ($orderEdit as $item)


    <div class="form-group">
        <label for="productid">系統編號:{{$item->orderid}}</label>
        <input type="hidden" name="orderid" value="{{$item->orderid}}">
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="receivename">訂購人名稱 : </label>
          <label for="receivename">{{$item->receivename}}</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="receivemail">email : </label>
          <label for="receivemail">{{$item->receivemail}}</label>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="receivephone">電話 : </label>
            <label for="receivephone">{{$item->receivephone}}</label>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="receiveaddr">訂購人地址 : </label>
            <label for="receiveaddr">{{$item->receiveaddr}}</label>
          </div>
        </div>
      </div><div class="row">
        <div class="col-6">
            <div class="form-group">
              <label for="invoicetitle">發票抬頭 : </label>
              <label for="invoicetitle">{{$item->invoicetitle}}</label>
            </div>
          </div>
        
        <div class="col-6">
          <div class="form-group">
            <label for="unitid">統一編號 : </label>
            <label for="unitid">{{$item->unitid}}</label>
          </div>
        </div>
      </div><div class="row">
        <div class="col-6">
            <div class="form-group">
              <label for="payway">付款方式 : </label>
              <label for="payway">
              @if ($item->payway == 1)
              信用卡
              @else
              其他
              @endif
              </label>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="checkprice">小計 : </label>
            <label for="checkprice">NT$ {{$item->checkprice}}</label>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="discountprice">優惠 : </label>
            <label for="discountprice">NT$ {{$item->discountprice}}</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="totalprice">訂單總額 : </label>
            <label for="totalprice">NT$ {{$item->totalprice}}</label>
          </div>
        </div>
        <div class="col-6">
          <form role="form" id="orderUpdateForm" action="/backend/orderUpdate" method="POST">
            <input type="hidden" name="orderid" id="orderid" value="{{$item->orderid}}">
            <div class="form-group">
              <label for="status">訂單狀態 : </label>
              <select class="custom-select form-control-border col-4" name="status" id="status">
                <option value="0" 
                @if ($item->status == 0)
                    selected
                @endif
                >處理中</option>
                <option value="1"
                @if ($item->status == 1)
                  selected
                @endif
                >未出貨</option>
                <option value="2"
                @if ($item->status == 2)
                  selected
                @endif
                >已出貨</option>
                <option value="3"
                @if ($item->status == 3)
                  selected
                @endif
                >取消訂單</option>
              </select>
              <button type="button" class="btn btn-primary" id="orderUpdate">更新訂單狀態</button>
            </div>
          </form>
        </div>
      </div>


@endforeach
<div class="card">
  <div class="card-header">
    <h3 class="card-title">訂購清單</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <thead>
        <tr>
          <th>商品編號</th>
          <th>Jan Code</th>
          <th>商品名稱</th>
          <th>小計</th>
          <th>訂製服務</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orderProduct as $opitem)
        <tr>
          <td>{{$opitem->productno}}</td>
          <td>{{$opitem->jancode}}</td>
          <td>{{$opitem->pname}} - {{$opitem->spec}}
            <br>
            @if ($opitem->extraservice1 == 0)
                無包裝
            @elseif($opitem->extraservice1 == 1)
                一般包裝 +0
            @elseif($opitem->extraservice1 == 2)
                特殊包裝 +150
            @endif
            /
            @if ($opitem->extraservice2 == "on")
              刻字服務 +350
            @else
              無刻字服務
            @endif
            /
            @if ($opitem->extraservice3 == "on")
                萬用小卡 +0
            @else
                無萬用小卡
            @endif
          </td>
          <td>NT$ {{$opitem->firstprice}}
          / 加購服務: NT$ {{$opitem->extraserviceprice}}</td>
          <td>
            <div class="row">
            <div class="col-4">
              <button type="button" class="btn btn-block bg-gradient-primary btn-sm" 
              data-toggle="modal" data-target="#modal-extraService1"
              data-target-pid="{{$opitem->productid}}"
              data-target-id="{{$opitem->orderid}}">包裝</button>
            </div>
            <div class="col-4">
              <button type="button" class="btn btn-block bg-gradient-success btn-sm" 
            data-toggle="modal" data-target="#modal-extraService2"
            data-target-pid="{{$opitem->productid}}"
            data-target-id="{{$opitem->orderid}}">刻字</button>
            </div>
            <div class="col-4">
              <button type="button" class="btn btn-block bg-gradient-info btn-sm" 
              data-toggle="modal" data-target="#modal-extraService3"
              data-target-pid="{{$opitem->productid}}"
              data-target-id="{{$opitem->orderid}}">小卡</button>
            </div>
          </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<div class="modal-footer">
    {{-- <button type="button" class="btn btn-primary" id="productUpdate">更新</button> --}}
    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button> 
</div>
<script>
    $(function(){
      $("#orderUpdateForm").on("submit" , function(e){
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
                  alert(data.msg);
                  location.reload();
              },
              error: function (jqXHR , status , error){
                  alert(stauts + " : " + error);
              }
          });

        });
        $("#orderUpdate").on("click" , function(){
            //alert('update');
            $("#orderUpdateForm").submit();
        });


    });
</script>