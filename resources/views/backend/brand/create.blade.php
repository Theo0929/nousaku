<div class="modal-body" >
    


<form role="form" id="pBrandCreateForm" action="/backend/brandInsert" method="POST">
    <div class="form-group">
        <label for="pbid">系統編號:</label>
        <input type="hidden" name="pbid" value="">
    </div>
    <div class="form-group">
      <label for="pname">品牌名稱</label>
      <input type="text" class="form-control" id="pbname" name="pbname" placeholder="品牌名稱"
      value=""
      >
    </div>
    <div class="form-group">
      <label for="status">狀態</label>
      <select class="custom-select form-control-border" id="status" name="status">
        @foreach ($statusList as $sitem)
        <option value='{{$sitem[0]}}'>{{$sitem[1]}}</option>
        @endforeach
      </select>
    </div>
</form>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-success" id="pBrandCreate">新增</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
</div>
<script>
    $(function () {
        $("#pBrandCreateForm").on("submit" , function(e){
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
        $("#pBrandCreate").on("click" , function(){
            $("#pBrandCreateForm").submit();
        });
    });
</script>