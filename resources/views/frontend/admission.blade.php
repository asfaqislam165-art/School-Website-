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
     /* Responsive adjustments without animations */
     body {
       overflow-x: hidden;
     }
     .nav-responsive {
       display: flex;
       flex-wrap: wrap;
       justify-content: center;
       gap: 10px;
       padding: 8px;
     }
     @media (max-width: 640px) {
       .admission {
         font-size: 1.8rem !important;
         text-align: center;
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
   
    
   


     

   
   <div class="mt-10 text-center">
    <h3 class="admission text-3xl font-bold p-2">Admission Infomation</h3>
   </div>





     <div class="bg-red-800 text-white text-left mb-10 mt-10 p-6 sm:p-12 lg:p-18 rounded-lg max-w-7xl mx-auto">
1.       <h3>Collect Application Form
</h3><br>
Collect the admission form from the school office <br><br>
<h3>2. Fill Out the Form </h3><br>
Provide the student's name, date of birth, parent's information, address, and previous academic details.<br><br>
<h3>3. Submit Required Documents <br></h3><br>
Submit the completed application form along with the birth certificate, recent photographs, and previous academic records. <br><br>
<h3>4. Attend Admission Test</h3> <br>
Students may need to participate in an admission test or interview, depending on their class and the school's admission policy. <br><br>
<h3>5. Confirm Admission</h3> <br>
After selection, pay the required admission fees and complete the enrollment process to secure your child's place. <br><br>
<h3>6. Admission Fees</h3><br>
Display admission fees, monthly tuition fees, examination fees, and other applicable charges for parents. <br><br>
<h3>7. Important Dates</h3><br>
Check application deadlines, admission test dates, result publication dates, and enrollment schedules. <br><br>
<h3>8. Need Help with Admission?</h3><br>
Our admission team is ready to help parents with application procedures, required documents, and enrollment inquiries.
     </div>


  


  
  


     
   
    




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