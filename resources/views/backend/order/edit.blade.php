<div class="modal-body" >

@foreach ($orderEdit as $item)

<form role="form" id="productUpdateForm" action="/backend/productUpdate" method="POST">
    <div class="form-group">
        <label for="productid">系統編號:{{$item->orderid}}</label>
        <input type="hidden" name="orderid" value="{{$item->orderid}}">
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="receivename">訂購人名稱</label>
          <input type="text" class="form-control" id="receivename" name="receivename" placeholder="訂購人名稱"
          value="{{$item->receivename}}" > 
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="receiveaddr">訂購人地址</label>
          <input type="text" class="form-control" id="receiveaddr" name="receiveaddr" placeholder="訂購人名稱"
          value="{{$item->receiveaddr}}" > 
        </div>
      </div>
    </div>
  
</form>

@endforeach
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" id="productUpdate">更新</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
</div>
<script>
    $(function () {
        $("#productUpdateForm").on("submit" , function(e){
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
        $("#productUpdate").on("click" , function(){
            $("#productUpdateForm").submit();
        });
    });
</script>