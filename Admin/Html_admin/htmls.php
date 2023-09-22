<?php
session_start();
global $icon, $home,$login_path,$logout_path,$logo ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Planet</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href=<?php echo $icon?>>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./style.css">
    
</head>
<body class="p-0 px-0 sm:px-4 sm:p-0 md:px-6 md:p-1 xl:px-10 xl:p-0" >
    <nav class=" bg-white flex w-full px-2 pb-2">
        <!--  Main Nav Div-->
        <div class=" flex w-full">

            <!--Logo Div  -->
                <div class="flex w-max  items-center">
                  <a href=<?php echo $home?> ><img src=<?php echo $logo?> class="h-9.5 w-12"></a>  
                </div>
            <!--Logo Div  -->

            <div class="w-full flex items-center justify-center ">
                    <p class="text-xl font-bold">Admin Page</p>
            </div>


            </div>
            <!-- Nav Middle Div -->

            <!-- Nav End Div -->
            <div class="flex justify-end items-center w-max">
                <?php
                
                if(isset($_SESSION['check'])){
                    echo "<a href='".$logout_path."' class='text-white bg-slate-800 p-1 px-5 rounded-lg hover:text-purple-300'>Logout</a>";
                }
                else{
                    echo " <a href='".$login_path."' class='text-white bg-slate-800 p-1 px-5 rounded-lg hover:text-purple-300'>Login</a>";
                }
                ?>
                
            </div>
            <!-- Nav End Div -->

        <!--  Main Nav Div-->
        </div>
    </nav>
    <hr >
   