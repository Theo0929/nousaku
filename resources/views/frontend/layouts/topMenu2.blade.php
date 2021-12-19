<a href="#">製品<span>Precious</span></a>
<div class="sec-list" >
<ul class="mb-30">
    <h3>製品<span>Precious</span></h3>
    <li><a href="/productsAll">製品一覽</a></li>
    <li><a href="/productsNew">新製品</a></li>
</ul>
<ul class="mb-30">
    @foreach ($brandList as $item)
        <li><a href="/brand/{{$item->pbid}}">{{$item->pbname}}</a></li>
    @endforeach
</ul>
<ul class="mb-30">
    @foreach ($categoryList as $item)
    <li><a href="/productsAll/{{$item->pcid}}">{{$item->pcname}}</a></li>
    @endforeach

</ul>
</div>