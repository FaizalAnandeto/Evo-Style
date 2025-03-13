<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+25&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="htpps://fonts.googleapis.com">
    <link rel="preconnect" href="htpps://fonts.gstatic.com" crossorigin>
    <link href="htpps://fonts.googleapis.com/css2? family=Work+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style type="text/tailwindcss">
        @theme {
            --animate-jln: jln 5s linear infinite;
            @keyframes jln {
                0%{
                    transform: translateX(0);
                }
                100%{
                    transform: translateX(-100%);
                }
            }

            --font-monserrat: "Montserrat", serif;
            --font-jersey: "Jersey 25", serif;
        }
      </style>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Evo Style</title>
</head>
<style>
    #wrp{
        display: grid;
        grid-template-columns: repeat(4, 100%);
        animation: slider 40s ease-in-out infinite alternate;
    }
    @keyframes slider {
                0%{transform: translateX(0%);}
                10%{transform: translateX(-100%);}
                20%{transform: translateX(-100%);}
                30%{transform: translateX(-200%);}
                40%{transform: translateX(-200%);}
                50%{transform: translateX(-200%);}
                60%{transform: translateX(-300%);}
                70%{transform: translateX(-300%);}
                80%{transform: translateX(-300%);}
                90%{transform: translateX(0%);}
                100%{transform: translateX(0%);}
            }
</style>
<body>
    <header>
        <nav class="flex justify-between w-full h-14 px-6 font-monserrat">
            <div class="my-auto font-monserrat font-semibold text-lg md:text-2xl">
                <h1>Evo Style</h1>
            </div>

            <div class="flex">
                <div class="my-auto hidden">
                <i class="fa-solid fa-bars"></i>
                </div>

                <div class="flex my-auto w-full space-x-3 md:space-x-6 text-sm md:text-lg">
                    <a class="no-underline text-black" href="#" id="home">Home</a>
                    <a class="no-underline text-black" href="#aboutus" id="about">About</a>
                    <a class="no-underline text-black" href="#crtul" id="collect">Collection</a>
                </div>
            </div>
        </nav>
    </header>
    <Main>
            <div class="flex justify-center" id="clt">
                <img src="Asset/Virtualthreads 1.png" class="w-full   px-4" alt="Collection" id="image1">
            </div>
    
            <div id="txtjln" class="flex truncate py-10 ">
                <div id="txt" class="flex bg-gray-800 space-x-5 w-full md:py-3 animate-jln">
                <h2 class="my-auto font-jersey text-white text-6xl max-w-none ">elevating your style</h2>
                <img class="md:w-20 max-w-none " src="Asset/alert-triangle.png" alt="">
                <h2 class="my-auto font-jersey text-white text-6xl max-w-none ">elevating your style</h2>
                <img class="md:w-20 max-w-none " src="Asset/alert-triangle.png" alt="">
                <h2 class="my-auto font-jersey text-white text-6xl max-w-none ">elevating your style</h2>
                <img class="md:w-20 max-w-none " src="Asset/alert-triangle.png" alt="">
                <h2 class="my-auto font-jersey text-white text-6xl max-w-none ">elevating your style</h2>
                <img class="md:w-20 max-w-none " src="Asset/alert-triangle.png" alt="">
                <h2 class="my-auto font-jersey text-white text-6xl max-w-none ">elevating your style</h2>
                <img class="md:w-20 max-w-none " src="Asset/alert-triangle.png" alt="">
                <h2 class="my-auto font-jersey text-white text-6xl max-w-none ">elevating your style</h2>
                <img class="md:w-20 max-w-none " src="Asset/alert-triangle.png" alt="">
                </div>
                <script src="js\txtjln.js"></script>
            </div>
            <div class="flex md:flex-row flex-col px-4 items-center md:justify-center gap-7" data-aos="fade-up" data-aos-duration="2000">
                <div class="flex flex-col space-y-3 " id="abs">
                    <div class="max-h-60 max-w-161 font-monserrat border px-2 py-2 rounded-md h-auto">
                        <h2 class="font-bold text-xl md:text-2xl" id="aboutus">About Us</h2>
                        <p class="text-justify pt-2 md:text-sm lg:text-base text-xs ">Kami adalah startup brand desain baju yang didirikan pada tahun 2024, dengan misi menghadirkan desain kekinian yang memadukan kreativitas dan inovasi dalam setiap desain. Berangkat dari semangat untuk mengekspresikan gaya hidup modern dan dinamis, kami percaya bahwa setiap pakaian harus mencerminkan kepribadian dan keunikan pemakainya.</p>
                    </div>
                    <div class="">
                        <img src="Asset/image.png" class="max-h-60 h-auto ">
                    </div>
                </div>
                
               <div class="relative">
                    <div class="shadow-2xl h-96 w-xs sm:w-lg md:w-sm lg:w-lg xl:w-xl overflow-hidden">
                        <div class="w-full h-full" id="wrp">
                            <div id="slider-img-1" class="bg-[url(/Asset/61.png)] bg-cover bg-center"></div>
                            <div id="slider-img-2" class="bg-[url(/Asset/20.png)] bg-cover bg-center"></div>
                            <div id="slider-img-3" class="bg-[url(/Asset/26.png)] bg-cover bg-center"></div>
                            <div id="slider-img-4" class="bg-[url(/Asset/29.png)] bg-cover bg-center"></div>
                        </div>
                    </div>
                    <div class="flex justify-center pt-4 gap-2">
                        <a href="#slider-img-1" class="w-3 h-3 rounded-xl inline-block hover:bg-black bg-slate-300"></a>
                        <a href="#slider-img-2" class="w-3 h-3 rounded-xl inline-block hover:bg-black bg-slate-300"></a>
                        <a href="#slider-img-3" class="w-3 h-3 rounded-xl inline-block hover:bg-black bg-slate-300"></a>
                        <a href="#slider-img-4" class="w-3 h-3 rounded-xl inline-block hover:bg-black bg-slate-300"></a>
                    </div>
               </div>
            </div>
            <div class="flex flex-col justify-center py-10 px-4" data-aos="fade-up" data-aos-duration="2000">
                <div class="font-monserrat text-3xl font-bold mx-auto pb-10" id="crtul"><h1>Our Collection</h1></div>
                <div class="flex flex-row flex-wrap box-border justify-center gap-4 "> 
                    @foreach ($product as $row)
                    <div class="w-sm rounded-md font-monserrat border p-3">
                        <img class="w-full h-auto" src="storage/{{ $row->picture }}" alt="">
                        <div class="flex flex-col">
                            <h3 class="text-lg pb-3">{{ $row->product }}</h3>
                            <div class="flex justify-between">
                                <h3 class="">Rp.{{ $row->price }}</h3>
                                <a href=" https://wa.me/6282138448982" class="font-medium border rounded-sm w-36 text-center text-lg">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </Main>
        
        <hr>
        
    <Footer class="py-10 px-20">
            <hr>
                <div class="flex flex-col md:flex-row justify-between py-4 font-monserrat">
                    <div class="max-w-80 space-y-2" data-aos="fade-right" data-aos-duration="2000">
                        <h1 class="font-semibold text-lg">EvoStyle</h1>
                        <p class="text-justify">Sebagai startup yang terus berkembang, kami selalu terbuka untuk kolaborasi dengan individu dan komunitas yang memiliki visi serupa.</p>
                    </div>
            
                    <div class="text-center space-y-2" data-aos="fade-left" data-aos-duration="2000">
                        <h4 class="text-lg">Our Company</h4>
                        <ul class="list-none space-y-2">
                            <li><a href="#">Home</a></li>
                            <li><a href="#aboutus">About Us</a></li>
                            <li><a href="#crtul">Collection</a></li>
                        </ul>
                    </div>
            
                    <div class="text-center space-y-2" data-aos="fade-left" data-aos-duration="2000">
                        <h4 class="text-lg">Resources</h4>
                        <ul class="list-none space-y-2">
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Conditions</a></li>
                            <li><a href="#">Policy</a></li>
                        </ul>
                    </div>
            
                    <div class="text-center space-y-2" data-aos="fade-left" data-aos-duration="2000">
                        <h4 class="text-lg">Contact Us</h4>
                        <ul class="list-none space-y-2">
                            <li><a href="#">Evostyle@gmail.com</a></li>
                            <li><a href="#">+6282138448982</a></li>
                        </ul>
                    </div>
                </div>    
            <hr>    
    </Footer>
        <script>
            AOS.init();
        </script>
</body>
</html>