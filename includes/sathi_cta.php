<style>
    /* Section ka main container */
    .saccha-sathi-section {
        padding: 10px 15px;
        width: 100%;
        display: block;
    }

    .saccha-sathi-banner {
        max-width: 1140px;
        margin: 0 auto;
        background: linear-gradient(135deg, #2bb3a3 0%, #1d8e81 100%);
        border-radius: 15px;
        padding: 40px 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #ffffff;
        box-shadow: 0 10px 30px rgba(43, 179, 163, 0.3);
        font-family: Arial, sans-serif;
    }

    .banner-text h3 {
        font-size: 18px;
        font-weight: normal;
        margin: 0 0 10px 0;
        opacity: 0.9;
    }

    .banner-text h2 {
        font-size: 36px;
        font-weight: bold;
        margin: 0;
    }

    .banner-btn a {
        background-color: #ffffff;
        color: #2bb3a3;
        padding: 15px 35px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
        display: inline-block;
        transition: 0.3s all ease;
        border: 2px solid white;
    }

    .banner-btn a:hover {
        background-color: transparent;
        color: #ffffff;
        transform: scale(1.05);
    }

    /* Mobile ke liye design adjust karein */
    @media (max-width: 768px) {
        .saccha-sathi-banner {
            flex-direction: column;
            text-align: center;
            padding: 30px;
            gap: 25px;
        }
        .banner-text h2 {
            font-size: 28px;
        }
    }
</style>
<hr>
<h4 style ="text-align: center;">CanWinn Foundation Membership Benefits..?</h4>
<div class="saccha-sathi-section">
    <div class="saccha-sathi-banner">
        <div class="banner-text">
            <h3>Want to join as volunteer ??</h3>
            <h2>Become A Saccha Sathi</h2>
        </div>
        <div class="banner-btn">
            <a href="<?php echo BASE_URL; ?>pages/members.php">Join Now</a>
        </div>
    </div>
</div>