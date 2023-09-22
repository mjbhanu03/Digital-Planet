
  <style>
    html,
    body {
      position: relative;
    }

    body {
 
      color: #000;
      margin: 0;
      padding: 0;
    }

    swiper-container {
      width: 100%;
      height: 100%;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
     
    }
  </style>

  <swiper-container class="mySwiper " pagination="true" pagination-clickable="true" navigation="true" space-between="30"
    centered-slides="true" autoplay-delay="3500" autoplay-disable-on-interaction="false">
    <swiper-slide><img src="./images/offer 1.jpg"  class="w-full h-[260px]"> </swiper-slide>
    <swiper-slide><img src="./images/offer 2.jpg"  class="w-full h-[260px]"></swiper-slide>
    <swiper-slide><img src="./images/offer 3.jpeg" class="w-full h-[260px]" ></swiper-slide>
    <swiper-slide><img src="./images/offer 4.jpeg" class="w-full h-[260px]" ></swiper-slide>
  </swiper-container>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>