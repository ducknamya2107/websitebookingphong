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

        /* .section-text {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        } */

        /* .section-shop-now a {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        } */

        /* .section-shop-now a:hover {
            background-color: #0056b3;
        }

        .section-main {
            margin: 0 auto;
            padding: 30px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .p-line {
            border-top: 2px solid #007bff;
            width: 50px;
            margin: 10px auto;
        }

        .product-items {
            text-align: center;
            margin: 20px;
            transition: transform 0.3s;
        } */

        .product-items img {
            width: 100%;
            height: 200px; /* Tăng chiều cao cho hình ảnh sản phẩm */
            object-fit: cover; /* Đảm bảo ảnh không bị méo */
            border-radius: 8px;
        }


        /* .rating {
            margin: 5px 0;
        }

        .section-slider {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }

        .slider-left,
        .slider-right {
            background-color: #007bff;
            color: white;
            flex: 1;
            margin: 0 10px;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .slider-left button,
        .slider-right button {
            background-color: #fff;
            color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .slider-left button:hover,
        .slider-right button:hover {
            background-color: #e9ecef;
        } */
    </style>
</head>

<body>

<header>
    <section class="header-banner">
        <div class="banner">
            <img src="../img/modern-interior-design-grey-living-room2.webp" alt="Banner Image">
        </div>

        <div class="section-text">
            <h3>WOODEN</h3>
            <h4>LEIBAL PLAIN SOFA</h4>
            <p>A good looking and comfortable sofa</p>
        </div>
        <div class="section-shop-now">
            <a href="#">SHOP NOW</a>
        </div>
    </section>
</header>

<main>
    <section class="container section-main">
        <h3 class="text-center">Danh sách phòng</h3>
        <hr class="p-line">

        <div class="section-product-portfolio d-flex justify-content-center flex-wrap mb-4">
            <?php foreach ($danhMucPhong as $loaiPhong): 
                extract($loaiPhong);
                $linkLoaiPhong = "index.php?act=phong&id_loaiphong=".$id_loaiphong;
            ?>
                <div class="product-portfolio mx-2">
                    <a href="<?= $linkLoaiPhong ?>" class="btn btn-outline-primary"><?= $ten_loaiphong ?></a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row">
            <?php foreach ($rooms as $room): 
                extract($room);
                $image = $imgPath.$img;
                $linksp = "index.php?act=phongct&idphong=".$id_phong;
            ?>
                <div class="product-items col-md-3">
                    <a href="<?= $linksp ?>"><img src="<?= $image ?>" alt="Ảnh ghế"></a>
                    <div class="rating">
                        <?= str_repeat('<span class="star">&#9733;</span>', 5); ?>
                    </div>
                    <p class="product-text"><a href="<?= $linksp ?>"><?= $name ?></a></p>
                    <p class="product-price"><a href="<?= $linksp ?>">$ <?= $price ?></a></p>
                </div>
            <?php endforeach; ?>
        </div>

        <section class="section-slider d-flex">
            <div class="slider-left">
                <div class="slider-left-text">
                    <h3>New Arrivals</h3>
                    <p>Furniture Collection</p>
                    <button>Buy Now</button>
                </div>
            </div>
            <div class="slider-right">
                <div class="slider-right-text">
                    <h3>Elegant Designs</h3>
                    <p>Furniture Collection</p>
                    <button>Buy Now</button>
                </div>
            </div>
        </section>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
