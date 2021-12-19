 <ul class="nav inside-menu-list justify-content-center">
    <li>
        <a href="/">能作<span>Nousaku</span></a>
        <ul class="nav inside-menu-list2 justify-content-center">
            <li><a href="/about1">百年傳承</a></li>
            <li><a href="/about2">鑄造技術</a></li>
            <li><a href="/about3">高岡</a></li>
        </ul>
    </li>
    <li>
        <a href="/products">製品<span>Precious</span></a>
        <div class="inside-menu-list3">
            <ul class="nav inside-menu-list3-1">
                <li><a href="/productsAll">製品一覽</a></li>
                <li><a href="/productsNew">新製品</a></li>
            </ul>
            <ul class="nav inside-menu-list3-2">
                @foreach ($brandList as $item)
                <li>
                    <a href="/brand/{{$item->pbid}}">{{$item->pbname}}</a>
                    <ul class="nav inside-menu-list3-2-1">
                        <li>
                            <h4>{{$item->pbname}}</h4>
                            <div class="img-wrap">
                                <div class="img-item">
                                    <img src="/nousaku_html/images/index/product/01.jpg" alt="">
                                </div>
                            </div>
                            <p>台灣設計師 x {{$item->pbname}}</p>
                        </li>
                    </ul>
                </li>
                @endforeach
            </ul>

                <ul class="nav inside-menu-list3-3">
                    @foreach ($categoryList as $item)
                    <li><a href="/productsAll/{{$item->pcid}}">{{$item->pcname}}</a></li>
                    @endforeach
                    </ul>
            </p>
        </div>
    </li>
    <li><a href="/gifts">禮贈<span>Gift</span></a></li>
    <li><a href="/specials">特輯<span>Special</span></a></li>
</ul>