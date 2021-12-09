<div class="modal-body" >
    
@foreach ($pBrandEdit as $item)

<form role="form" id="pBrandUpdateForm" action="/backend/brandUpdate" method="POST">
    <div class="form-group">
        <label for="pbid">系統編號:{{$item->pbid}}</label>
        <input type="hidden" name="pbid" value="{{$item->pbid}}">
    </div>
    <div class="form-group">
      <label for="pname">品牌名稱</label>
      <input type="text" class="form-control" id="pbname" name="pbname" placeholder="品牌名稱"
      value="{{$item->pbname}}"
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
    <button type="button" class="btn btn-primary" id="pBrandUpdate">更新</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
</div>
<script>
    $(function () {
        $("#pBrandUpdateForm").on("submit" , function(e){
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
        $("#pBrandUpdate").on("click" , function(){
            $("#pBrandUpdateForm").submit();
        });
    });
</script>