<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2b3f16036e.js" crossorigin="anonymous"></script>
    <link href="/TMTManga/assets/css/Truyentranh_Tieuthuyet.css" rel="stylesheet">
    <title>MT Manga | Truyện tranh</title>
</head>

<body>
    <header>
        <img src="/TMTManga/assets/image/image/mtlogo7.png" class="img-logo">
        <div class="div-namepage">MT Manga</div>
        <div class="menu-bar">
            <a href="index.php" class="menu-bar-btn">Trang chủ</a>
            <a href="?controller=truyen&action=Truyentranh" class="menu-bar-btn"> Truyện tranh</a>
            <a href="?controller=truyen&action=Tieuthuyet" class="menu-bar-btn">Tiểu thuyết</a>
        </div>
        <div class="search-bar">
            <input type="text" class="search-btn-input">
            <button class="search-btn"><i class="fas fa-search"></i></button>
        </div>
        <div class="account-bar">
            <a href="" class="menu-bar-btn">Đăng nhập</a>
        </div>
    </header>
    <main>
        <div class="main-menu-title">Truyện tranh</div>
        <div class="main-menu">
            <a href="?controller=truyen&action=Truyentranh" class="main-menu-btn">Top hot nhất</a>
            <a href="?controller=truyen&action=Truyentranh" class="main-menu-btn">Mới nhất</a>
            <a href="#" class="main-menu-btn">Đã full</a>
            <?php if (count($listTheLoai) > 4) {
                for ($i = 0; $i < 4; $i++) { $theloai=$listTheLoai[$i]; ?>
                    <a href="?controller=truyen&action=Truyentranh&idTheLoai=<?php echo htmlspecialchars($theloai->idTheLoai)?>" class="main-menu-btn"><?php echo htmlspecialchars($theloai->tenTheLoai)?></a>
            <?php } }else{
                for($i=0;$i<count($listTheLoai);$i++){?>
                    <a href="?controller=truyen&action=Truyentranh&idTheLoai=<?php echo htmlspecialchars($theloai->idTheLoai)?>" class="main-menu-btn"><?php echo htmlspecialchars($theloai->tenTheLoai)?></a>
                <?php } }?>
            <div class="main-menu-theloai">
                <div class="main-menu-theloai-title">Thêm <i class="fas fa-chevron-circle-right"></i></div>
                <div class="main-menu-theloai-content">
                    <?php if(count($listTheLoai)>4){
                        for($i=4;$i<count($listTheLoai);$i++){
                            $theloai=$listTheLoai[$i];?>
                            <a href="?controller=truyen&action=Truyentranh&idTheLoai=<?php echo htmlspecialchars($theloai->idTheLoai) ?>" class="main-menu-theloai-btn"><?php echo htmlspecialchars($theloai->tenTheLoai) ?></a>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
        <div class="main-dstruyen">
            <?php if(count($listTruyenTranh)>15){
                for($i=0;$i<15;$i++){
                    $truyen=$listTruyenTranh[$i]; ?>
                    <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=<?php echo htmlspecialchars($truyen->idTruyen)?>">
                        <img src="<?php echo htmlspecialchars($truyen->anhBia) ?>">
                        <div class="main-dstruyen-tentruyen-ten"><?php echo htmlspecialchars($truyen->tenTruyen) ?></div>
                        <span class="main-dstruyen-tentruyen-span"><?php echo htmlspecialchars($truyen->tenTruyen) ?></span>
                        <div class="main-dstruyen-truyen-like">
                            <i class="fas fa-thumbs-up"></i><?php echo htmlspecialchars($truyen->luotLike)?>
                        </div>
                    </a>             
            <?php }}else {
                for($i=0;$i<count($listTruyenTranh);$i++){
                    $truyen=$listTruyenTranh[$i]; ?>
                    <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=<?php echo htmlspecialchars($truyen->idTruyen)?>">
                        <img src="<?php echo htmlspecialchars($truyen->anhBia) ?>">
                        <div class="main-dstruyen-tentruyen-ten"><?php echo htmlspecialchars($truyen->tenTruyen) ?></div>
                        <span class="main-dstruyen-tentruyen-span"><?php echo htmlspecialchars($truyen->tenTruyen) ?></span>
                        <div class="main-dstruyen-truyen-like">
                            <i class="fas fa-thumbs-up"></i><?php echo htmlspecialchars($truyen->luotLike)?>
                        </div>
                    </a>   
            <?php }} ?>
        </div>
        <div class="chuyentrang-container">
            <button class="chuyentrang-btn hover" id="trangtruoc-btn">Trang trước</button>
            <button class="chuyentrang-btn hover"id="trangsau-btn">Trang sau</button>
        </div>
    </main>
    <footer>
        <div class="footer-lienhe">
            <a href="#" class="footer-lienhe-btn">
                <i class="fab fa-facebook"></i>
                <span class="footer-lienhe-btn-tooltip">Facebook</span>
            </a>
            <a href="#" class="footer-lienhe-btn">
                <i class="fab fa-instagram"></i>
                <span class="footer-lienhe-btn-tooltip">Instagram</span>
            </a>
            <a href="#" class="footer-lienhe-btn">
                <i class="fab fa-twitter"></i>
                <span class="footer-lienhe-btn-tooltip">Twitter</span>
            </a>
            <a href="#" class="footer-lienhe-btn">
                <i class="fab fa-youtube"></i>
                <span class="footer-lienhe-btn-tooltip">Youtube</span>
            </a>
        </div>
        <div class="footer-menu">
            <a href="#" class="footer-menu-btn">Liên hệ</a>
            <a href="#" class="footer-menu-btn">Giới thiệu</a>
            <a href="#" class="footer-menu-btn">Trợ giúp</a>
            <a href="#" class="footer-menu-btn-special">Chính sách và quyền riêng tư</a>
        </div>
        <div class="footer-banquyen">
            © 2020 Bản quyền thuộc về Team TMT - MT Manga
        </div>
    </footer>
    <script>
        var truyen = [];
        var tranghientai = 1;
        const trangtruoc_btn = document.querySelector('#trangtruoc-btn');
        const trangsau_btn = document.querySelector('#trangsau-btn');
        if (trangtruoc_btn.classList.contains('hover')) {
            trangtruoc_btn.classList.remove('hover');
        }
        trangtruoc_btn.disabled = true;
        <?php for ($i = 0; $i < count($listTruyenTranh); $i++) {
            $tt = $listTruyenTranh[$i]; ?>
            truyen[<?php echo ($i) ?>] = {
                idTruyen: <?php echo ($tt->idTruyen) ?>,
                tenTruyen: '<?php echo ($tt->tenTruyen) ?>',
                moTa: '<?php echo ($tt->moTa) ?>',
                soChuong: <?php echo ($tt->soChuong) ?>,
                luotLike: <?php echo ($tt->luotLike) ?>,
                anhBia: '<?php echo ($tt->anhBia) ?>',
                tinhTrang: '<?php echo ($tt->tinhTrang) ?>',
                idTacgia: <?php echo ($tt->idTacGia) ?>,
                loaiTruyen: <?php echo ($tt->loaiTruyen) ?>,
                ngayDang: '<?php echo ($tt->ngayDang) ?>'
            };
        <?php } ?>
        console.log(truyen.length);
        if (truyen.length < 15) {
            if (trangsau_btn.classList.contains('hover')) {
                trangsau_btn.classList.remove('hover');
            }
            trangsau_btn.disabled = true;
        }
        var main_dstruyen = document.querySelector(".main-dstruyen");
        var sotrang = 1;
        if (truyen.length % 15 == 0) {
            sotrang = truyen.length / 15;
            console.log('so trang' + sotrang);
        } else {
            sotrang = parseInt(truyen.length / 15) + 1;
            console.log('so trang' + sotrang);
        }
        trangsau_btn.addEventListener('click', function() {
            if (trangtruoc_btn.classList.contains("hover") == false) {
                trangtruoc_btn.classList.add("hover");
            }
            trangtruoc_btn.disabled = false;
            main_dstruyen.innerHTML = ``;
            var min = tranghientai * 15;
            var max = (tranghientai + 1) * 15;
            if (tranghientai < sotrang - 1) {
                if (max < truyen.length) {
                    for (let i = min; i < max; i++) {
                        main_dstruyen.innerHTML += `
                    <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=${truyen[i].idTruyen}">
                        <img src="${truyen[i].anhBia}">
                        <div class="main-dstruyen-tentruyen">
                            <div class="main-dstruyen-tentruyen-ten">${truyen[i].tenTruyen}</div>            
                            <span class="main-dstruyen-tentruyen-span">${truyen[i].tenTruyen}</span>     
                        </div> 
                        <div class="main-dstruyen-truyen-like">
                            <i class="fas fa-thumbs-up"></i>${truyen[i].luotLike}
                        </div>
                    </a>
                    `
                    }
                    tranghientai++;
                    console.log('trang hien tai: ' + tranghientai);
                }
            } else if (tranghientai == sotrang - 1) {
                for (let i = min; i < truyen.length; i++) {
                    main_dstruyen.innerHTML += `
                    <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=${truyen[i].idTruyen}">
                        <img src="${truyen[i].anhBia}">
                        <div class="main-dstruyen-tentruyen">
                            <div class="main-dstruyen-tentruyen-ten">${truyen[i].tenTruyen}</div>            
                            <span class="main-dstruyen-tentruyen-span">${truyen[i].tenTruyen}</span>     
                        </div> 
                        <div class="main-dstruyen-truyen-like">
                            <i class="fas fa-thumbs-up"></i>${truyen[i].luotLike}
                        </div>
                    </a>
                    `
                }
                tranghientai++;
                console.log('trang hien tai: ' + tranghientai);
                if (trangsau_btn.classList.contains('hover')) {
                    trangsau_btn.classList.remove('hover');
                }
                trangsau_btn.disabled = true;
            }
        })
        trangtruoc_btn.addEventListener('click', function() {
            if (trangsau_btn.classList.contains("hover") == false) {
                trangsau_btn.classList.add("hover");
            }
            main_dstruyen.innerHTML = ``;
            trangsau_btn.disabled = false;
            tranghientai--;
            console.log('trang hien tai: ' + tranghientai);
            var min = (tranghientai - 1) * 15;
            var max = tranghientai * 15;
            if (tranghientai > 1) {
                for (let i = min; i < max; i++) {
                    main_dstruyen.innerHTML += `
                    <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=${truyen[i].idTruyen}">
                        <img src="${truyen[i].anhBia}">
                        <div class="main-dstruyen-tentruyen">
                            <div class="main-dstruyen-tentruyen-ten">${truyen[i].tenTruyen}</div>            
                            <span class="main-dstruyen-tentruyen-span">${truyen[i].tenTruyen}</span>     
                        </div> 
                        <div class="main-dstruyen-truyen-like">
                            <i class="fas fa-thumbs-up"></i>${truyen[i].luotLike}
                        </div>
                    </a>`
                }
            } else if (tranghientai == 1) {
                for (let i = 0; i < max; i++) {
                    var loaiTruyen;
                    main_dstruyen.innerHTML += `
                    <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=${truyen[i].idTruyen}">
                        <img src="${truyen[i].anhBia}">
                        <div class="main-dstruyen-tentruyen">
                            <div class="main-dstruyen-tentruyen-ten">${truyen[i].tenTruyen}</div>            
                            <span class="main-dstruyen-tentruyen-span">${truyen[i].tenTruyen}</span>     
                        </div> 
                        <div class="main-dstruyen-truyen-like">
                            <i class="fas fa-thumbs-up"></i>${truyen[i].luotLike}
                        </div>
                    </a>`
                }
                if (trangtruoc_btn.classList.contains("hover") == true) {
                    trangtruoc_btn.classList.remove("hover");
                }
                trangtruoc_btn.disabled = true;
            }

        })
    </script>
</body>

</html>