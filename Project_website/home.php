<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="Bankuan" content="width=device-width, initial-scale=1">
    <!-- Css -->
    <?php include("Layouts/css.php") ?>
</head>

<body>
    <!-- Header -->
    <?php include("Layouts/header.php") ?>
    <!-- Carousel -->
    <div id="maincarousel" class="carousel slide pt-4 " data-bs-ride="true" style="position: relative;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="asset/panithan.png" class="d-block m-auto" alt="panithan" style="width: 90%;">
            </div>
            <div class="carousel-item">
                <img src="asset/nogiftpolicy.png" class="d-block w-50 m-auto" alt="nogiftpolicy">
            </div>
            <div class="carousel-item">
                <img src="asset/tax_rate.png" class="d-block w-50 m-auto" alt="tax_rate">
            </div>
            <div class="carousel-item">
                <img src="asset/EIT67.jpg" class="d-block m-auto" alt="EIT67" style="width: 25%;">
            </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#maincarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#maincarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Content -->
    <div class="content pt-4">
        <div class="container-fluid bg-white shadow-lg mb-5 bg-body-tertiary">
            <div class="row pt-3">
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <h1><strong>องค์การบริหารส่วนตำบลบ้านควน ยินดีต้อนรับ</strong></h1>
                    </blockquote>
                    <figcaption class="blockquote-footer fs-3 pt-1">
                        วิสัยทัศน์การพัฒนาท้องถิ่น
                    </figcaption>
                    <cite title="Source Title fw-light">"บ้านควนน่าอยู่ มุ่งสู่การพัฒนาอย่างเป็นระบบ สืบสานวิถีวัฒนธรรม เพื่อประชาชนอยู่ดีมีสุข"</cite>
                </figure>
            </div>



        </div>
    </div>
    <!-- Footer -->
    <?php include("Layouts/footer.php") ?>
    <!-- Script -->
    <?php include("Layouts/script.php") ?>
</body>

</html>