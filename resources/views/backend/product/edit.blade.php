<div class="modal-body" >
    
@foreach ($productEdit as $item)

<form role="form" id="productUpdateForm" action="/backend/productUpdate" method="POST">
    <div class="form-group">
        <label for="productid">系統編號:{{$item->productid}}</label>
        <input type="hidden" name="productid" value="{{$item->productid}}">
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="productno">製品編號</label>
          <input type="text" class="form-control" id="productno" name="productno" placeholder="製品編號"
          value="{{$item->productno}}"
          > 
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="brand">品牌</label>
          <input type="text" class="form-control" id="brand" name="brand" placeholder="品牌"
          value="{{$item->brand}}"
          >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="category">類別</label>
          <input type="text" class="form-control" id="category" name="category" placeholder="類別"
          value="{{$item->category}}"
          >
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="price">價格</label>
          <input type="text" class="form-control" id="price" name="price" placeholder="價格"
          value="{{$item->price}}"
          >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="size">尺寸</label>
          <input type="text" class="form-control" id="size" name="size" placeholder="尺寸"
          value="{{$item->size}}"
          >
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="pattern">花紋</label>
          <input type="text" class="form-control" id="pattern" name="pattern" placeholder="花紋"
          value="{{$item->pattern}}"
          >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="capacity">容量</label>
          <input type="text" class="form-control" id="capacity" name="capacity" placeholder="容量"
          value="{{$item->capacity}}"
          >
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="weight">重量</label>
          <input type="text" class="form-control" id="weight" name="weight" placeholder="重量"
          value="{{$item->weight}}"
          >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="material">材質</label>
          <input type="text" class="form-control" id="material" name="material" placeholder="材質"
          value="{{$item->material}}"
          >
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="origin">產地</label>
          <input type="text" class="form-control" id="origin" name="origin" placeholder="產地"
          value="{{$item->origin}}"
          >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="designer">設計師</label>
          <input type="text" class="form-control" id="designer" name="designer" placeholder="設計師"
          value="{{$item->designer}}"
          >
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="status">狀態</label>
          <input type="text" class="form-control" id="status" name="status" placeholder="狀態"
          value="{{$item->status}}"
          >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="pgroup">群組</label>
          <input type="text" class="form-control" id="pgroup" name="pgroup" placeholder="群組"
          value="{{$item->pgroup}}"
          >
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="mark">註記</label>
          <input type="text" class="form-control" id="mark" name="mark" placeholder="註記"
          value="{{$item->mark}}"
          >
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="pname">製品名稱</label>
      <input type="text" class="form-control" id="pname" name="pname" placeholder="製品名稱"
      value="{{$item->pname}}"
      >
    </div>
    <div class="form-group">
      <label for="description">製品說明</label>
      <textarea class="form-control" rows="3" id="description" name="description" placeholder="製品說明">{{$item->description}}</textarea>
    </div>
    <div class="form-group">
      <label for="remark">備註</label>
      <textarea class="form-control" rows="3" id="remark" name="remark" placeholder="備註">{{$item->remark}}</textarea>
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