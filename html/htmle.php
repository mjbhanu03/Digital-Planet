<?php global $about_page,$contactpage,$termscondition;?>
<footer class="mt-auto  w-full flex items-end justify-items-end">
    <div class="grid grid-cols-2 bg-slate-800 w-full h-max text-white mt-3">
                 <div class="w-full">
                    <a href=<?php echo $about_page?> class="hover:text-blue-500 ">
                        About Us
                    </a>
                </div>
                
                <div class="w-full">
                    <a href="<?= $contactpage ?>" class="hover:text-blue-500 ">
                        Contact Us
                    </a>
                </div>
                <div class="w-full">
                    <a href="https://youtube.com/@mjsclub27?si=AjieqyXCUxDiodL0" class="hover:text-blue-500 ">
                        Youtube
                    </a>
                </div>
                <div class="w-full">
                    <a href="<?= $termscondition ?>" class="hover:text-blue-500 ">
                        Terms & Consitions 
                    </a>
                </div>
    </div>
</footer>

<script src="../javascript.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
  AOS.init({

      duration:1000,
      offset:100,
  }
  );
</script>
</body>
</html>