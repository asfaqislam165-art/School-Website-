<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bangladesh School</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
   <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
   <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
   @vite(['resources/css/app.css', 'resources/js/app.js'])

   <style>
     /* Mobile & Responsive Adjustments without changing core HTML structure */
     body {
       overflow-x: hidden;
     }

     /* Responsive Navigation Links */
     .nav-responsive {
       display: flex;
       flex-wrap: wrap;
       justify-content: center;
       gap: 10px;
       padding: 8px;
     }

     /* Responsive 3D Containers Wrapper */
     .hover-3d-container {
       display: flex;
       flex-wrap: wrap;
       justify-content: center;
       align-items: center;
       gap: 1.5rem;
       width: 100%;
       padding: 0 15px;
     }

     /* Mobile text and image adjustments */
     @media (max-width: 640px) {
       .title {
         font-size: 1.8rem !important;
       }
       .short {
         font-size: 1rem !important;
       }
     }
   </style>
</head>
<body>
  
    
    <h3 class="title text-center p-3 bg-red-800 text-white font-bold"><i class="fa-solid fa-school-flag"></i> Bangladesh High School </h3>
    
    <div class="d-flex align-items-center justify-content-center text-white bg-yellow-500">
  <nav class="nav nav-responsive">
  <a class="nav-link text-light" href="/"><i class="fa-regular fa-house"></i> Home</a>  
  {{-- //Grid + Speech of Chairman + Info of Result --}}
  
  

  <a class="nav-link text-light font-extrabold" href="/teachers">Teachers</a>
  <a class="nav-link text-light font-extrabold" href="/facilities">Facilities</a>
  <a class="nav-link text-light font-extrabold" href="/admission">Admission Info</a>
  <a class="nav-link text-light font-extrabold" href="/contact">Contact <i class="fa-solid fa-circle-arrow-right"></i></a>
  </nav>
  </div>
   
    
   


   <div>
    <div
  class="hero min-h-screen"
  style="background-image: url(https://images.unsplash.com/photo-1592066575517-58df903152f2?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D);"
>
  <div class="hero-overlay"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md px-4">
      <h1 class="mb-5 text-3xl sm:text-5xl font-bold title shadow-2 shadow-amber-300">Bangladesh High School</h1>
      <p class="mb-5 short shadow-4 shadow-amber-300 text-lg sm:text-xl">
        Our school is where our dreams take flight,<br>  
        Where knowledge shines and futures bright.
      </p>
      <a href="/admission">
      <button class="text-white p-3 rounded bg-yellow-500"><i class="fa-regular fa-newspaper"></i> Admission Info</button>
      </a>
    </div>
  </div>
</div>
   </div>
     

   









   <div class="bg-red-800 mb-10 mt-10 w-auto">
   <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
  <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
    <div class="flex items-start gap-4 rounded-lg border border-gray-200 p-6">
      

      <div>
        <h3 class="text-lg font-semibold text-white">🎓 Academic Excellence</h3>

        <p class="mt-2 text-pretty text-white">
         We provide quality education that inspires students to achieve academic success and reach their full potential.
        </p>
      </div>
    </div>

    <div class="flex items-start gap-4 rounded-lg border border-gray-200 p-6">
     

      <div>
        <h3 class="text-lg font-semibold text-white">👨‍🏫 Experienced Teachers</h3>

        <p class="mt-2 text-pretty text-white">
          Our dedicated and experienced teachers guide students with care, knowledge, and a passion for learning.
        </p>
      </div>
    </div>

    <div class="flex items-start gap-4 rounded-lg border border-gray-200 p-6">
     

      <div>
        <h3 class="text-lg font-semibold text-white">🏫 Modern Learning Environment</h3>

        <p class="mt-2 text-pretty text-white">
         We create a safe, friendly, and modern learning environment where every student can grow and succeed.
        </p>
      </div>
    </div>

    <div class="flex items-start gap-4 rounded-lg border border-gray-200 p-6">
      

      <div>
        <h3 class="text-lg font-semibold text-white">🌟 Student Development</h3>

        <p class="mt-2 text-pretty text-white">
         We focus on building students' confidence, creativity, leadership, and essential life skills for a brighter future.
        </p>
      </div>
    </div>
  </div>
</div>
   </div>


 
    <div class="mb-10 mt-10 hover-3d-container">
      <div class="hover-3d">
  <!-- content -->
  <figure class="w-60 rounded-2xl">
    <img class="w-full h-auto object-cover rounded-2xl" src="https://plus.unsplash.com/premium_photo-1690479510844-6385aa431b76?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D" />
  </figure>
  <!-- 8 empty divs needed for the 3D effect -->
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>



<div class="hover-3d">
  <!-- content -->
  <figure class="w-60 rounded-2xl">
    <img class="w-full h-auto object-cover rounded-2xl" src="https://plus.unsplash.com/premium_photo-1690479510451-d928ab95eb63?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D" />
  </figure>
  <!-- 8 empty divs needed for the 3D effect -->
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>



<div class="hover-3d">
  <!-- content -->
  <figure class="w-60 rounded-2xl">
    <img class="w-full h-auto object-cover rounded-2xl" src="https://plus.unsplash.com/premium_photo-1661661139398-9f360bea5b48?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D" />
  </figure>
  <!-- 8 empty divs needed for the 3D effect -->
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>





    </div>






     
    

    <div class="mt-10 mb-10">
      <section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2 dark:bg-gray-900">
  <div class="p-6 md:p-12 lg:px-16 lg:py-24">
    <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
      <h2 class="text-2xl font-bold text-gray-900 md:text-3xl dark:text-white speech">
        Chairman Speech 
      </h2>

      <p class="hidden text-black md:mt-4 md:block text-left dark:text-gray-200">
      

It is my great pleasure to welcome you to our school. As the Chairman of this institution, I feel proud to be a part of an educational community that is committed to academic excellence, moral values, and the overall development of every student. <br><br>

We believe that education is not only about achieving good grades but also about building character, developing creativity, and preparing students to face the challenges of the modern world. Our mission is to provide quality education in a friendly, safe, and supportive environment where every student feels valued and encouraged to achieve their full potential. <br><br>

Our school is dedicated to maintaining high educational standards through the combined efforts of our experienced teachers, hardworking staff, supportive parents, and enthusiastic students. We continuously strive to improve our teaching methods, introduce modern learning facilities, and create opportunities that help students develop their knowledge, skills, confidence, and leadership abilities. <br><br>

I strongly believe that teachers play a vital role in shaping the future of our nation. Therefore, we encourage our teachers to inspire students not only through academic lessons but also through honesty, discipline, kindness, and responsibility. We also believe that parents are our valuable partners in ensuring the success and well-being of our students. <br><br>

In today's rapidly changing world, our goal is to prepare students to become knowledgeable, responsible, and compassionate individuals who can contribute positively to society. We aim to nurture future leaders who will uphold strong values and work towards a better tomorrow. <br><br>

I sincerely thank our teachers, parents, students, and well-wishers for their continued trust, cooperation, and support. Together, we can build a brighter future through education, dedication, and teamwork. <br><br>

Let us work together to inspire young minds, build strong character, and create a better future for the next generation. <br><br>

With best wishes, <br><br>

Chairman <br><br>
School Management Committee
      </p>

      <div class="mt-4 md:mt-8">
        <a
          href="/admission"
          class="inline-block rounded-sm bg-yellow-500 px-12 py-3 text-sm font-medium text-white transition hover:bg-emerald-700 focus:ring-2 focus:ring-yellow-400 focus:outline-hidden"
        >
          <i class="fa-regular fa-newspaper"></i> Admission Info
        </a>
      </div>
    </div>
  </div>

  <img
    alt=""
    src="https://plus.unsplash.com/premium_photo-1681822627106-2616801638c3?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    class="h-56 w-full object-cover sm:h-full"
  />
</section>
    </div><br>


   


     


    
<h3 class="result text-center mb-4 px-3 font-bold text-xl sm:text-2xl">Result Info of 10 Years</h3>

<div class="my-5 d-flex justify-content-center mt-4 px-3">
    <ul class="list-group w-100 mx-auto" style="max-width: 400px;">

        <li class="list-group-item  text-center fw-bold bg-warning text-light">
            JSC Results
        </li>
        <li class="list-group-item">2020 (100 A+)  passing rates 99%</li>
        <li class="list-group-item">2021 (78 A+)   passing rates 99%</li>
        <li class="list-group-item">2022 (82 A+)   passing rates 99%</li>
        <li class="list-group-item">2023 (87 A+)   passing rates 99%</li>

        <li class="list-group-item  text-center fw-bold bg-warning text-light">
            SSC Results
        </li>
        <li class="list-group-item">2020 (100 A+)  passing rates 99%</li>
        <li class="list-group-item">2021 (78 A+)   passing rates 99%</li>
        <li class="list-group-item">2022 (82 A+)   passing rates 99%</li>
        <li class="list-group-item">2023 (87 A+)   passing rates 99%</li>

    </ul>
</div>
<br><br>





    <footer class="footer sm:footer-horizontal bg-red-800 text-white p-10 sm:p-20">
  <nav>
    <h6 class="footer-title text-white">Bangladesh High School</h6>
    <a class="link link-hover text-white"><i class="fa-solid fa-house-flood-water-circle-arrow-right"></i> Home</a>
    <a class="link link-hover text-white"><i class="fa-solid fa-people-group"></i> Teachers</a>
    <a class="link link-hover text-white"><i class="fa-solid fa-industry"></i> Facilities</a>
    <a class="link link-hover text-white"><i class="fa-brands fa-readme"></i> Admission</a>
    
  </nav>
  <nav>
    <h6 class="footer-title text-white">Social Media </h6>
    <a class="link link-hover text-white"><i class="fa-brands fa-facebook"></i> Facebook</a>
    <a class="link link-hover text-white"><i class="fa-brands fa-youtube"></i> Youtube</a>
    <a class="link link-hover text-white"><i class="fa-brands fa-square-whatsapp"></i> Whats App</a>
    <a class="link link-hover text-white"><i class="fa-solid fa-envelope"></i> bangladeshschool165@gmail.com</a>
  </nav>
  <nav>
    <h6 class="footer-title text-white">Legal</h6>
    <a class="link link-hover text-white">Terms of use</a>
    <a class="link link-hover text-white">Privacy policy</a>
    <a class="link link-hover text-white">Cookie policy</a>
  </nav>
</footer>

    <footer class="footer sm:footer-horizontal footer-center bg-red-800 text-white p-6 sm:p-8">
  <aside>
    <p class="text-base sm:text-xl">Copyright © Mahin IT Limited - All right reserved by Mahin IT Limited</p>
  </aside>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</body>
</html>