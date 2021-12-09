<div class="modal-body" >
    
@foreach ($pCategoryEdit as $item)

<form role="form" id="pCategoryUpdateForm" action="/backend/categoryUpdate" method="POST">
    <div class="form-group">
        <label for="pcid">系統編號:{{$item->pcid}}</label>
        <input type="hidden" name="pcid" value="{{$item->pcid}}">
    </div>
    <div class="form-group">
      <label for="pcname">類別名稱</label>
      <input type="text" class="form-control" id="pcname" name="pcname" placeholder="品牌名稱"
      value="{{$item->pcname}}"
      >
    </div>
    <div class="form-group">
      <label for="status">狀態</label>
      <input type="text" class="form-control" id="status" name="status" placeholder="狀態"
      value="{{$item->status}}">
    </div>
</form>

@endforeach
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" id="pCategoryUpdate">更新</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
</div>
<script>
    $(function () {
        $("#pCategoryUpdateForm").on("submit" , function(e){
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
        $("#pCategoryUpdate").on("click" , function(){
            $("#pCategoryUpdateForm").submit();
        });
    });
</script>