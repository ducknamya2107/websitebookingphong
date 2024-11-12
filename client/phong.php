<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách phòng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .header-banner {
            position: relative;
            overflow: hidden;
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        .banner img {
            width: 100%;
            height: 450px; /* Tăng chiều cao cho banner */
            object-fit: cover; /* Đảm bảo ảnh không bị méo */
        }

      
        .product-items img {
            width: 100%;
            height: 200px; /* Tăng chiều cao cho hình ảnh sản phẩm */
            object-fit: cover; /* Đảm bảo ảnh không bị méo */
            border-radius: 8px;
        }

    </style>
</head>

<body>

<header>
    <section class="header-banner">
        <div class="banner">
            <img src="../img/modern-interior-design-grey-living-room2.webp" alt="Modern Interior Design Grey Living Room">
        </div>
        <div class="section-text">
            <h3>WOODEN</h3>
            <h4>LEIBAL PLAIN SOFA</h4>
            <p>A good-looking and comfortable sofa</p>
        </div>
        <div class="section-shop-now">
            <a href="#">SHOP NOW</a>
        </div>
    </section>
</header>

<main>
    <section class="container section-main">
        <h3 class="text-center">WE LOVE TREND</h3>
        <div class="p-line"></div>

        <section class="section-product-portfolio d-flex justify-content-center flex-wrap mb-4">
            <?php foreach ($danhMucPhong as $loaiPhong): ?>
                <?php extract($loaiPhong); ?>
                <?php $linkLoaiPhong = "index.php?act=phong&id_loaiphong=" . $id_loaiphong; ?>
                <div class="product-portfolio" style="margin-bottom: 10px;">
                    <a href="<?= $linkLoaiPhong ?>"><?= $ten_loaiphong ?></a>
                </div>
            <?php endforeach; ?>
        </section>
    </section>

    <section class="product-lists container">
        <div class="row">
            <?php foreach ($listLoaiPhong as $room): ?>
                <?php 
                    extract($room); 
                    $image = $imgPath . $img;
                    $linksp = "index.php?act=phongct&idphong=" . $id_phong; 
                ?>
                <div class="product-items col-md-3">
                    <a href="<?= $linksp ?>"><img src="<?= $image ?>" alt="Product Image"></a>
                    <div class="rating">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <span class="star">&#9733;</span>
                        <?php endfor; ?>
                    </div>
                    <p class="product-text"><a href="<?= $linksp ?>"><?= $name ?></a></p>
                    <p class="product-price"><a href="<?= $linksp ?>">$ <?= $price ?></a></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="promotional-banner text-center">
        <!-- <img src="../img/psg1.png" alt="Promotional Banner" width="100%"> -->
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
