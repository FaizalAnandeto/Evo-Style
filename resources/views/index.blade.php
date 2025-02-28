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
<body>
    <header>
        <nav class="flex justify-between w-full h-14 px-4 font-monserrat">
            <div class="flex">
                <div class="my-auto hidden">
                <i class="fa-solid fa-bars"></i>
                </div>
                <div class="flex my-auto w-full space-x-6">
                    <a class="no-underline text-black" href="#" id="home">Home</a>
                    <a class="no-underline text-black" href="#" id="about">About</a>
                    <a class="no-underline text-black" href="#" id="collect">Collection</a>
                </div>
            </div>
            <div class="my-auto font-monserrat font-bold text-2xl  ">
                <h1>Evo Style</h1>
            </div>
            <div class="flex my-auto">
                <div class="space-x-6">
                    <a class="no-underline text-black" href="#">My Account</a>
                    <a class="no-underline text-black" href="#">Cart</a>
                </div>
                <a href=""><img src="Asset/shopping-bag.png" class="w-7" ></a>
            </div>
        </nav>
        <!--script>
            document.getElementById('home').addEventListener('click', function(event) {
                event.preventDefault();
                const bottomSection = document.getElementById('clt');
                bottomSection.scrollIntoView({ behavior: 'smooth' });
            });
    
            document.getElementById('about').addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah link default
                const bottomSection = document.getElementById('abs');
                bottomSection.scrollIntoView({ behavior: 'smooth' });
            });
    
            document.getElementById('collect').addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah link default
                const bottomSection = document.getElementById('crtul');
                bottomSection.scrollIntoView({ behavior: 'smooth' });
            });
        </script-->
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
            <div class="flex md:flex-row flex-col px-4 items-center md:justify-center ">
                <div class="flex flex-col space-y-3 " id="abs">
                    <div class="max-h-60 max-w-161 font-monserrat border px-2 py-2 rounded-md h-auto">
                        <h2 class="font-bold text-xl md:text-2xl">About Us</h2>
                        <p class="text-justify pt-2 md:text-sm lg:text-base text-xs ">Kami adalah startup brand desain baju yang didirikan pada tahun 2024, dengan misi menghadirkan desain kekinian yang memadukan kreativitas dan inovasi dalam setiap desain. Berangkat dari semangat untuk mengekspresikan gaya hidup modern dan dinamis, kami percaya bahwa setiap pakaian harus mencerminkan kepribadian dan keunikan pemakainya.</p>
                    </div>
                    <div class="">
                        <img src="Asset/image.png" class="max-h-60 h-auto ">
                    </div>
                </div>
                
                <div class="flex truncate">
                    <img src="Asset/2.png" class=" ">
                    <img src="Asset/" class=" ">
                    <img src="Asset/" class=" ">
                    <img src="Asset/" class=" ">
                </div>
            </div>
            <div class="tk">
                <div class="crtul" id="crtul"><h1>Our Collection</h1></div>
                <div class="oc"> 
                    @foreach ($product as $row)
                    <div class="cr">
                        <img src="storage/{{ $row->picture }}" alt="">
                        <div class="crd">
                            <h3>{{ $row->product }}</h3>
                            <div class="bwh">
                                <h3>Rp.{{ $row->price }}</h3>
                                <a href="#" class="crb">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
        </Main>
        
    
        <Footer>
            <section class="footer">
                <div class="footer-content">
                    <img src="Asset/Screenshot_2024-09-19_072930-removebg-preview.png" alt="">
                    <p>Sebagai startup yang terus berkembang, kami selalu terbuka untuk kolaborasi dengan individu dan komunitas yang memiliki visi serupa.</p>
        
                    <div class="iconsig">
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                    </div>
                </div>
        
                <div class="footer-content">
                    <h4>Our Company</h4>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Collection</a></li>
                </div>
        
                <div class="footer-content">
                    <h4>Resources</h4>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Conditions</a></li>
                    <li><a href="#">Policy</a></li>
                </div>
        
                <div class="footer-content">
                    <h4>Contact Us</h4>
                    <li><a href="#">Evostyle@gmail.com</a></li>
                    <li><a href="#">+6282138448982</a></li>
                </div>
            </section>    
        </Footer>
        <!--script src="js\script.js"></script-->
</body>
</html>