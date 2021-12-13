<div class="modal-body" >

<form role="form" id="pCategoryCreateForm" action="/backend/categoryInsert" method="POST">
    <div class="form-group">
        <label for="pcid">系統編號:</label>
        <input type="hidden" name="pcid" value="">
    </div>
    <div class="form-group">
      <label for="pcname">類別名稱</label>
      <input type="text" class="form-control" id="pcname" name="pcname" placeholder="品牌名稱"
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
    <button type="button" class="btn btn-success" id="pCategoryCreate">新增</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
</div>
<script>
    $(function () {
        $("#pCategoryCreateForm").on("submit" , function(e){
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
        $("#pCategoryCreate").on("click" , function(){
            $("#pCategoryCreateForm").submit();
        });
    });
</script>