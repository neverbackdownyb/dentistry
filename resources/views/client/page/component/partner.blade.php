<?php
$arrayPartner = [
    [
        'url' => 'https://gominhlong.com/',
        'name' => 'Chỉnh nha niềng răng',
        'image' => 'https://nhakhoathanhtam.com/wp-content/uploads/2020/07/Nieng-rang-PNG.png'
    ],
    [
        'url' => 'https://www.ancuong.com',
        'name' => 'Cấy ghép Implant',
        'image' => "https://nhakhoathanhtam.com/wp-content/uploads/2020/07/Implant-PNG-min-1.png"
    ],
    [
        'url' => 'http://khahanvlg.com/',
        'name' => "Thẩm mỹ răng sứ",
        'image' => "https://nhakhoathanhtam.com/wp-content/uploads/2020/07/BOC-RANG-SU-PNG-min-1.png"
    ],
    [
        'url' => 'https://aicahpl.com',
        'name' => "Phủ sứ Veneer",
        'image' => "https://nhakhoathanhtam.com/wp-content/uploads/2020/07/Dan-mat-su-PNG-min-min-1.png"
    ],
    [
        'url' => 'https://www.blum.com/vn',
        'name' => 'Tẩy trắng răng Plasma',
        'image' => "https://nhakhoathanhtam.com/wp-content/uploads/2020/07/Tay-trang-rang-PNG.png"
    ],
    [
        'url' => 'http://cariny.com/home/ ',
        'name' => "Hàm tháo lắp",
        'image' => "https://nhakhoathanhtam.com/wp-content/uploads/2020/07/Rang-gia-thao-lap-PNG-min-1.png"
    ], [
        'url' => 'http://cariny.com/home/ ',
        'name' => "Nha khoa tổng quát",
        'image' => "https://nhakhoathanhtam.com/wp-content/uploads/2020/07/Nha-khoa-TONG-QUAT-PNG-min-1.png"
    ],
];
?>
<div class="section pt-5 pb-4 focus-bgw">
    <div class="">
        <div class="noo-section-title mb-3">
            <h3><span>DỊCH VỤ UY TÍN TẠI </span></h3>
            <h2 style="color: #429045">NHA KHOA THANH TÂM</h2>
        </div>
        <div class="service">
            @foreach($arrayPartner as $item)
                <div class="partner-item col-md-2 col-xs-6">
                    <a href="{{$item['url']}}">
                        <img class="img-partner" src="{{$item['image']}}"/>
                        <div class="name">{{$item['name']}}</div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="clearfix"></div>
    </div>
</div>

