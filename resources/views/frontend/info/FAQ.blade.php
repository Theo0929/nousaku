@extends('frontend.layouts.master')

@section('headerColor') header_inside header_black @endsection
@section('inside-menuColor') text-black @endsection


@section('bodySections')
    
<section class="store-section01">
    <div class="container">
        <h2>FAQ</h2>
    </div>
    <div class="right-list">
        <ul class="nav">
            <li><a href="/news">最新消息</a></li>
            <li><a href="/FAQ">常見問題</a></li>
            <li><a href="/contact">聯絡我們</a></li>
            <li><a href="/store">實體店</a></li>
            <li><a class="search-btn" href=""></a></li>
        </ul>
    </div>
</section>
<section class="FAQ-section01">
    <div class="container-custom">
        <ul class="nav nav-tabs justify-content-center" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-toggle="tab" href="#tab01" role="tab" aria-controls="tab01" aria-selected="true">付款問題</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#tab02" role="tab" aria-controls="tab02" aria-selected="false">保養問題</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#tab03" role="tab" aria-controls="tab03" aria-selected="false">合作洽談</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="qa-tab">
                    <div class="qa-tab-btn" data-toggle="collapse" href="#qa-tab01" role="button" aria-expanded="false" aria-controls="tab01">
                        付款時會出現錯誤。
                        <div class="collapse qa-tab-inner show" id="qa-tab01">
                            <div class="qa-tab-item">
                                <p>
                                    如果 您使用的瀏覽器不是最新版本，可能會出現錯誤。請將您的瀏覽器更新至最新版本並重試，或更換您的瀏覽器或設備。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-tab-btn collapsed" data-toggle="collapse" href="#qa-tab02" role="button" aria-expanded="false" aria-controls="tab01">
                        我還沒有收到訂單確認郵件，我可以下訂單嗎？
                        <div class="collapse qa-tab-inner" id="qa-tab02">
                            <div class="qa-tab-item">
                                <p>
                                    yahoo! Mail 和gmail 等免費郵件，可能會自動分類到垃圾郵件文件夾或垃圾箱。如果您檢查一次後沒有找到該電子郵件，我們將再次發送，因此請通過電子郵件或電話與我們聯繫。<br><br>

                                    此外，使用docomo、au、SoftBank等移動運營商的地址時，可能會因安全設置等原因拒絕接收，並且可能無法正確發送電子郵件。請設置接收列表，以便您可以接收來自以下域的電子郵件，例如拒絕來自計算機的電子郵件（僅從手機/PHS 接收設置）。<br><br>

                                    接受域：<a href="">@ nousakuprestige.co.jp</a><br><br>

                                    · 設置方法因簽約運營商而異。詳情請參考各公司的幫助頁面支持。<br>
                                    · 郵件對策的垃圾接收列表/拒絕列表設置| 新聞| NTT DoCoMo<br>
                                    · 和接收列表設置| 垃圾郵件過濾功能| Au<br>
                                    · 和接收許可或拒絕設置| 手機<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-tab-btn collapsed" data-toggle="collapse" href="#qa-tab03" role="button" aria-expanded="false" aria-controls="tab01">
                        顯示為售罄，可以預約嗎？
                        <div class="collapse qa-tab-inner" id="qa-tab03">
                            <div class="qa-tab-item">
                                <p>
                                    我們會在產品準備好後儘快與您聯繫。首先，請通過電子郵件或電話與我們聯繫。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="qa-tab">
                    <div class="qa-tab-btn" data-toggle="collapse" href="#qa-tab01" role="button" aria-expanded="false" aria-controls="tab01">
                        付款時會出現錯誤。
                        <div class="collapse qa-tab-inner show" id="qa-tab01">
                            <div class="qa-tab-item">
                                <p>
                                    如果 您使用的瀏覽器不是最新版本，可能會出現錯誤。請將您的瀏覽器更新至最新版本並重試，或更換您的瀏覽器或設備。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-tab-btn collapsed" data-toggle="collapse" href="#qa-tab02" role="button" aria-expanded="false" aria-controls="tab01">
                        我還沒有收到訂單確認郵件，我可以下訂單嗎？
                        <div class="collapse qa-tab-inner" id="qa-tab02">
                            <div class="qa-tab-item">
                                <p>
                                    yahoo! Mail 和gmail 等免費郵件，可能會自動分類到垃圾郵件文件夾或垃圾箱。如果您檢查一次後沒有找到該電子郵件，我們將再次發送，因此請通過電子郵件或電話與我們聯繫。<br><br>

                                    此外，使用docomo、au、SoftBank等移動運營商的地址時，可能會因安全設置等原因拒絕接收，並且可能無法正確發送電子郵件。請設置接收列表，以便您可以接收來自以下域的電子郵件，例如拒絕來自計算機的電子郵件（僅從手機/PHS 接收設置）。<br><br>

                                    接受域：<a href="">@ nousakuprestige.co.jp</a><br><br>

                                    · 設置方法因簽約運營商而異。詳情請參考各公司的幫助頁面支持。<br>
                                    · 郵件對策的垃圾接收列表/拒絕列表設置| 新聞| NTT DoCoMo<br>
                                    · 和接收列表設置| 垃圾郵件過濾功能| Au<br>
                                    · 和接收許可或拒絕設置| 手機<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-tab-btn collapsed" data-toggle="collapse" href="#qa-tab03" role="button" aria-expanded="false" aria-controls="tab01">
                        顯示為售罄，可以預約嗎？
                        <div class="collapse qa-tab-inner" id="qa-tab03">
                            <div class="qa-tab-item">
                                <p>
                                    我們會在產品準備好後儘快與您聯繫。首先，請通過電子郵件或電話與我們聯繫。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="qa-tab">
                    <div class="qa-tab-btn" data-toggle="collapse" href="#qa-tab01" role="button" aria-expanded="false" aria-controls="tab01">
                        付款時會出現錯誤。
                        <div class="collapse qa-tab-inner show" id="qa-tab01">
                            <div class="qa-tab-item">
                                <p>
                                    如果 您使用的瀏覽器不是最新版本，可能會出現錯誤。請將您的瀏覽器更新至最新版本並重試，或更換您的瀏覽器或設備。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-tab-btn collapsed" data-toggle="collapse" href="#qa-tab02" role="button" aria-expanded="false" aria-controls="tab01">
                        我還沒有收到訂單確認郵件，我可以下訂單嗎？
                        <div class="collapse qa-tab-inner" id="qa-tab02">
                            <div class="qa-tab-item">
                                <p>
                                    yahoo! Mail 和gmail 等免費郵件，可能會自動分類到垃圾郵件文件夾或垃圾箱。如果您檢查一次後沒有找到該電子郵件，我們將再次發送，因此請通過電子郵件或電話與我們聯繫。<br><br>

                                    此外，使用docomo、au、SoftBank等移動運營商的地址時，可能會因安全設置等原因拒絕接收，並且可能無法正確發送電子郵件。請設置接收列表，以便您可以接收來自以下域的電子郵件，例如拒絕來自計算機的電子郵件（僅從手機/PHS 接收設置）。<br><br>

                                    接受域：<a href="">@ nousakuprestige.co.jp</a><br><br>

                                    · 設置方法因簽約運營商而異。詳情請參考各公司的幫助頁面支持。<br>
                                    · 郵件對策的垃圾接收列表/拒絕列表設置| 新聞| NTT DoCoMo<br>
                                    · 和接收列表設置| 垃圾郵件過濾功能| Au<br>
                                    · 和接收許可或拒絕設置| 手機<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-tab-btn collapsed" data-toggle="collapse" href="#qa-tab03" role="button" aria-expanded="false" aria-controls="tab01">
                        顯示為售罄，可以預約嗎？
                        <div class="collapse qa-tab-inner" id="qa-tab03">
                            <div class="qa-tab-item">
                                <p>
                                    我們會在產品準備好後儘快與您聯繫。首先，請通過電子郵件或電話與我們聯繫。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</section>

@endsection