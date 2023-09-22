<?php

$login_path = "./Frontend/login.php";
$logout_path = "./Backend/destroy.php";
$logo = "./images/mj.png";
$icon = "./images/download.png";
$home = "index.php";
$about_page = "./Frontend/aboutus.php";
$contactpage = "./Frontend/contactus.php";
$termscondition = "./Frontend/termsandconditions.php";
include('./html/htmls.php');


?>

<!-- Main Div -->
<div class="w-full p-4">
    <!-- First Content Div -->
    <div class="grid  w-full space-y-5 p-1">

        <div class="w-full flex bg-slate-100  h-[420px]">
            <!-- Left Content Div -->
            <div class="w-full ">
                <img src="./images/Apple-iPhone-12-PNG-Transparent.png" class="w-fit h-[400px]">
            </div>
            <!-- Left Content Div -->

            <!-- Right Content Div -->
            <div class="flex flex-col justify-center items-center w-full space-y-9 ">
                <p class="font-bold text-xl">iPhone 12 Pro Max</p>
                <p class="text-sm">
                    The iPhone 12 Pro Max is Apple's flagship device, offering a powerful and feature-packed
                    mobile experience. With its large 6.7-inch Super Retina XDR display, A14 Bionic chip, and
                    impressive camera system, the 12 Pro Max delivers stunning performance and exceptional
                    photography capabilities. It's designed to provide users with a premium and immersive
                    smartphone experience, making it an ideal choice for those seeking top-of-the-line technology.
                </p>
                <a href="./Frontend/products.php" class="bg-slate-800 p-2 text-white  rounded-3xl px-10"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;&nbsp; Learn More </a>
            </div>
            <!-- Right Content Div -->
        </div>

        <div class="w-full flex  h-[420px]">

            <!-- Left Content Div -->
            <div class="flex flex-col justify-center items-center w-full space-y-9">
                <p class="font-bold text-xl">Bluetooth Earphones</p>
                <p class="text-sm">
                    Discover the AirPods Pro - Apple's game-changing wireless earbuds that redefine audio
                    excellence. Enjoy active noise cancellation for pure immersion, find your perfect fit
                    with customizable ear tips, and control your music effortlessly with intuitive touch
                    controls. Elevate your listening experience with AirPods Pro.

                </p>
                <a href="./Frontend/products.php" class="bg-slate-800 p-2 text-white  rounded-3xl px-10">Learn More &nbsp;&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <!-- Left Content Div -->

            <!-- Right Content Div -->
            <div class="w-full ">
                <img src="https://www.pngmart.com/files/13/Airpods-PNG-Background-Image.png" class="h-fit w-fit" alt="">
            </div>
            <!-- Right Content Div -->
        </div>

        <div class="w-full flex bg-slate-100 h-[420px] justify-center items-center">

            <!-- Left Content Div -->
            <div class="w-full ">
                <img class="h-fit w-fit" src="https://www.pngmart.com/files/7/Black-Bluetooth-Speaker-PNG-Photo.png" alt="">
            </div>
            <!-- Left Content Div -->

            <!-- Right Content Div -->
            <div class="flex flex-col justify-center items-center w-full space-y-9 ">
                <p class="font-bold text-xl">Wireless Speakers</p>
                <p class="text-sm">
                    Introducing Bluetooth Speakers - The Sound Revolution in Your Hands!

                    Take your music to new heights with our cutting-edge Bluetooth speakers. Experience
                    immersive sound quality, seamless wireless connectivity, and unmatched portability.
                    Whether you're exploring the great outdoors or simply relaxing at home, our speakers
                    ensure a powerful and dynamic audio experience. Unleash the freedom of wireless sound
                    and make every moment unforgettable with our Bluetooth speakers. Elevate your sound game today!
                </p>
                <a href="./Frontend/products.php" class="bg-slate-800 p-2 text-white rounded-3xl px-10"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;&nbsp; Learn More </a>
            </div>

            <!-- Right Content Div -->
        </div>

    </div>
    <!-- First Content Div -->
</div>
<!-- Main Div -->

<?php
include('./Backend/slider.php');
include('./Backend/categories.php');
include('./Backend/scrollcont.php');
include('./Backend/specialpro.php');
include('./Backend/ourprofessional.php');
include('./html/htmle.php');
?>