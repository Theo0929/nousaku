

<div class="modal-body" >
    <form role="form" id="productCreateForm" action="/backend/productInsert" method="POST">
        <div class="form-group">
            <label for="productid">系統編號:</label>
            <input type="hidden" name="productid" value="0">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="productno">製品編號</label>
              <input type="text" class="form-control" id="productno" name="productno" placeholder="製品編號"
              value=""> 
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="brand">品牌</label>
              <select class="custom-select form-control-border" id="brand" name="brand">
                @foreach ($brandList as $brandItem)
                <option value='{{$brandItem->pbid}}'>{{$brandItem->pbname}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="category">類別</label>
              <select class="custom-select form-control-border" id="category" name="category">
                @foreach ($categoryList as $categoryItem)
                <option value='{{$categoryItem->pcid}}'>{{$categoryItem->pcname}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="price">價格</label>
              <input type="text" class="form-control" id="price" name="price" placeholder="價格"
              value=""
              >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="size">尺寸</label>
              <input type="text" class="form-control" id="size" name="size" placeholder="尺寸"
              value=""
              >
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="pattern">花紋</label>
              <input type="text" class="form-control" id="pattern" name="pattern" placeholder="花紋"
              value=""
              >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="capacity">容量</label>
              <input type="text" class="form-control" id="capacity" name="capacity" placeholder="容量"
              value=""
              >
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="weight">重量</label>
              <input type="text" class="form-control" id="weight" name="weight" placeholder="重量"
              value=""
              >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="material">材質</label>
              <input type="text" class="form-control" id="material" name="material" placeholder="材質"
              value=""
              >
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="origin">產地</label>
              <input type="text" class="form-control" id="origin" name="origin" placeholder="產地"
              value=""
              >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="designer">設計師</label>
              <input type="text" class="form-control" id="designer" name="designer" placeholder="設計師"
              value=""
              >
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="status">狀態</label>
              <select class="custom-select form-control-border" id="status" name="status">
                @foreach ($statusList as $sitem)
                <option value='{{$sitem[0]}}'>{{$sitem[1]}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="spec">規格</label>
              <input type="text" class="form-control" id="spec" name="spec" placeholder="規格"
              value="">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="color">顏色</label>
              <select class="custom-select form-control-border" id="color" name="color">
                @foreach ($colorList as $sitem)
                <option value='{{$sitem[0]}}'>{{$sitem[1]}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="pgroup">群組</label>
              <input type="text" class="form-control" id="pgroup" name="pgroup" placeholder="群組"
              value=""
              >
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="mark">註記</label>
              <input type="text" class="form-control" id="mark" name="mark" placeholder="註記"
              value=""
              >
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="pname">製品名稱</label>
          <input type="text" class="form-control" id="pname" name="pname" placeholder="製品名稱"
          value=""
          >
        </div>
        <div class="form-group">
          <label for="description">製品說明</label>
          <textarea class="form-control" rows="3" id="description" name="description" placeholder="製品說明"></textarea>
        </div>
        <div class="form-group">
          <label for="remark">備註</label>
          <textarea class="form-control" rows="3" id="remark" name="remark" placeholder="備註"></textarea>
        </div>
    </form>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-success" id="productCreate">新增</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
  </div>

  <script>
  $("#productCreateForm").on("submit" , function(e){
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
  $("#productCreate").on("click" , function(){
    $("#productCreateForm").submit();
  });

  </script>