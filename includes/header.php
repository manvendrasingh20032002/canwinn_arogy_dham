<?php 
// session_start must be at the very top
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// config/app.php ko load karne ke liye
include_once(__DIR__ . '/../config/app.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canwinn Arogya Dham</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css?v=1.1">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/responsive.css?v=1.1">
    <style>
        /* Force AOS visibility if JS fails or loading is slow */
        [data-aos] { opacity: 1 !important; transform: none !important; }
        
        .navbar-nav .nav-link {
            padding: 0.5rem 0.7rem !important;
            font-size: 0.95rem !important;
            font-weight: 700 !important;
            color: #222 !important;
            text-transform: capitalize;
            white-space: nowrap !important;
        }
        .navbar-nav .nav-link:hover {
            color: #2bb3a3 !important;
        }
        .btn-gradient, .btn-success {
            padding: 0.5rem 1.2rem !important;
            font-size: 0.9rem !important;
            font-weight: 700 !important;
            white-space: nowrap !important;
        }
        @media (max-width: 1400px) {
            .navbar-nav .nav-link { font-size: 0.82rem !important; padding: 0.5rem 0.3rem !important; }
            .btn-gradient, .btn-success { padding: 0.4rem 0.8rem !important; font-size: 0.8rem !important; }
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>
<body>
<?php include_once(__DIR__ . '/navbar.php'); ?>




 <!-------------- Dr. Details Section -------------------->
<style>
    .dr-slider-section { background: #f9f9f9; padding: 60px 0; }
    .myDrSwiper { padding: 20px 10px; }
    
    /* Card design setup */
    .dr-card {
        border-radius: 15px;
        background: #fff;
        transition: 0.3s;
        height: 100%;
        margin-bottom: 10px;
    }
    .dr-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .dr-img-container {
        width: 120px;
        height: 120px;
        margin: 0 auto;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid #f0f0f0;
    }
    .dr-img-container img { width: 100%; height: 100%; object-fit: cover; }
    
    /* Navigation Arrows ko color dene ke liye */
    .swiper-button-next, .swiper-button-prev { color: #0d6efd; }
</style>

<!----------------- Gallery ------------->
<style>
    .gallery-section { padding: 10px 0; background: #fff; overflow: hidden; }

    /* Auto-scroll ko smooth aur linear banane ke liye */
    .gallerySwiper .swiper-wrapper {
        transition-timing-function: linear !important;
    }

    .gallery-card {
        height: 250px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0,0,0,0.05);
        background: #f8f9fa;
    }

    .gallery-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
</style>