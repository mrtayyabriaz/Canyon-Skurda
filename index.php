<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kotor Canyoning</title>
  <link href="./output.css" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
</head>

<body>
  <div class="bg-gray-100">









    <nav class="text-gray-800 bg-gray-50 fixed top-0 left-0  w-full z-30">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button type="button"
              class="relative inline-flex items-center justify-center rounded-sm p-1 text-gray-800 hover:outline outline-gray-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
              onclick="toggleMobileMenu()" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Icon when menu is closed.Menu open: "hidden", Menu closed: "block"-->
              <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>

              <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex  items-center">
              <img class="h-14 py-1 w-auto z-40" style="height: 3.5rem" src="KC-LOGO.png" alt="kotor Canyoning logo">
              <!-- kotor Canyoning -->
            </div>
            <div class="hidden sm:ml-6 sm:block">
              <div class="flex space-x-4 items-center justify-center h-full">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#about"
                  class="px-3 py-2 text-sm font-medium text-gray-800 hover:border-green-700 border-b-2 border-transparent"
                  aria-current="page">About</a>
                <a href="#Drenovstica_Canyon"
                  class="px-3 py-2 text-sm font-medium text-gray-800 hover:border-green-700 border-b-2 border-transparent">Drenovstica
                  Canyon</a>
                <a href="#Canyon_Skurda"
                  class="px-3 py-2 text-sm font-medium text-gray-800 hover:border-green-700 border-b-2 border-transparent">Canyon
                  Skurda</a>
                <a href="#contact_form"
                  class="px-3 py-2 text-sm font-medium text-gray-800 hover:border-green-700 border-b-2 border-transparent">CONTACT
                  US</a>
              </div>
            </div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <a href="#contact_form">
              <button type="button"
                class="relative rounded-full bg-green-700 transition-all hover:bg-green-800 px-2.5 py-1.5 text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-green-800">
                Book Now
              </button>
            </a>
          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="hidden sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
          <a href="#about"
            class="block px-3 py-2 w-full text-sm font-medium text-gray-800 hover:border-green-700 border-l-2 border-transparent"
            aria-current="page">About</a>
          <a href="#Drenovstica_Canyon"
            class="block px-3 py-2 w-full text-sm font-medium text-gray-800 hover:border-green-700 border-l-2 border-transparent">Drenovstica
            Canyon</a>
          <a href="#Canyon_Skurda"
            class="block px-3 py-2 w-full text-sm font-medium text-gray-800 hover:border-green-700 border-l-2 border-transparent">
            Canyon Skurda</a>
          <a href="#contact_form"
            class="block px-3 py-2 w-full text-sm font-medium text-gray-800 hover:border-green-700 border-l-2 border-transparent">Contact</a>
        </div>
      </div>
    </nav>






















































    <div class="bg-white items-center justify-start min-h-screen flex p-5 relative">
      <div class="max-h-screen">
        <img src="assets/images/product2-1.jpg" alt="Canyoning in Montenegro"
          class="absolute top-0 left-0 w-full h-full object-cover ">
      </div>
      <div class="w-full bg-gray-50 bg-opacity-80 rounded-lg border max-w-md p-8 z-10">
        <p class="text-2xl font-bold text-gray-900 mb-3">Canyoning in Montenegro</p>
        <p class="text-gray-700 mb-4">Would you like to experience Montenegro, get to know its most beautiful, hidden
          and unexplored corners, and have fun along the way? Then canyoning in Montenegro is the activity that you need
          to experience.</p>
        <a href="#contact_form">
          <button type="submit"
            class="inline-flex border border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 justify-center rounded-md py-2 px-4 bg-green-700 hover:bg-green-800 transition-all text-sm font-medium text-white shadow-sm">Start
            Adventure</button>
        </a>
      </div>
    </div>










    <div class="container mx-auto px-4 py-8">
      <h1 class="text-center text-3xl font-semibold mb-8">OUR CANYONING TOURS</h1>
      <div class="grid grid-cols-1 sm:grid-cols-2  gap-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img class="w-full h-60 object-cover" src="assets/images/product1-1.jpg" alt="Canyoning Sušec">
          <div class="p-6">
            <h2 class="text-lg font-semibold mb-2">Drenovstica Canyon Tour</h2>
            <p class="text-gray-700 mb-4">A nice and easy canyoning adventure suitable for families and beginners.</p>
            <a href="#Drenovstica_Canyon" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">READ
              MORE</a>
          </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img class="w-full h-60 object-cover" src="assets/images/product1-2.jpg" alt="Canyoning Fratarica">
          <div class="p-6">
            <h2 class="text-lg font-semibold mb-2">Canyon Skurda Tour</h2>
            <p class="text-gray-700 mb-4">A thrilling canyoning experience perfect for all adventure enthusiasts.</p>
            <a href="#Canyon_Skurda" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">READ MORE</a>
          </div>
        </div>
      </div>
    </div>














    <!-- Main Content -->
    <main class="container mx-auto p-6 space-y-12">



      <section id="about" class="px-5 pt-24">
        <h1 class="text-3xl font-bold mb-3">About Us</h1>
        <p class="text-xl">
          The activity is led by professional licensed guides with over 15 years of experience, who opened and explored
          lots of new canyons in the region.
        </p>
      </section>


      <!-- Drenovstica Canyon Tour -->
      <section class="pt-24" id="Drenovstica_Canyon">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <div class="relative">
            <img src="assets/images/product1-1.jpg" alt="Drenovstica Canyon"
              class="w-full h-64 object-cover object-center">
            <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center">
              <h2 class="text-3xl font-bold text-white">Drenovstica Canyon Tour</h2>
            </div>
          </div>
          <div class="p-6">
            <p class="mb-4">
              Get ready for an adventure of a lifetime with our Drenovstica canyon tour, located just 10 min from Budva.
              It is no wonder why this is our most requested canyon tour, available almost year round. Perfect for group
              of friends, families and team building, as well as those looking for half day program (3hrs).
            </p>
            <p class="mb-4">
              Learn the basics of canyoning that are acceptable to all, and experience the thrill of jumping up to 7m
              (not
              obligatory)
              into deep pools in an idyllic location surrounded by mountains. You'll do a few of those jumps and 3
              abseils
              up to 12m
              making it an unforgettable experience.
            </p>

            <h3 class="text-2xl font-semibold mb-3 mt-10">Provided for you...</h3>
            <ul class="list-none list-inside mb-4 space-y-3">
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-shield">
                  <path
                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                </svg>
                <span>Canyoning equipment (helmet, neoprene suit, neoprene shoes, climbing harness)</span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-user-round-check">
                  <path d="M2 21a8 8 0 0 1 13.292-6" />
                  <circle cx="10" cy="8" r="5" />
                  <path d="m16 19 2 2 4-4" />
                </svg>
                <span>Professional, experienced, licensed guides</span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-camera">
                  <path
                    d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z" />
                  <circle cx="12" cy="13" r="3" />
                </svg>
                <span>Free photography as a sign of gratitude at the end of each trip</span>
              </li>
            </ul>







            <h3 class="text-2xl font-semibold mb-3 mt-10">Requirements</h3>
            <ul class="list-none list-inside mb-4 space-y-3">
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-waves">
                  <path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1" />
                  <path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1" />
                  <path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1" />
                </svg>
                <span>Participants must be able to swim</span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-heart-pulse">
                  <path
                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                  <path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27" />
                </svg>
                <span>Participants with any health issues or recent injuries must consult with us before attending the
                  canyoning tour</span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-user-x">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <line x1="17" x2="22" y1="8" y2="13" />
                  <line x1="22" x2="17" y1="8" y2="13" />
                </svg>
                <span>The tour is not suitable for pregnant women</span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-ruler">
                  <path
                    d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z" />
                  <path d="m14.5 12.5 2-2" />
                  <path d="m11.5 9.5 2-2" />
                  <path d="m8.5 6.5 2-2" />
                  <path d="m17.5 15.5 2-2" />
                </svg>
                <span>Weight limit — 115kg</span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-dumbbell">
                  <path d="M14.4 14.4 9.6 9.6" />
                  <path
                    d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z" />
                  <path d="m21.5 21.5-1.4-1.4" />
                  <path d="M3.9 3.9 2.5 2.5" />
                  <path
                    d="M6.404 12.768a2 2 0 1 1-2.829-2.829l1.768-1.767a2 2 0 1 1-2.828-2.829l2.828-2.828a2 2 0 1 1 2.829 2.828l1.767-1.768a2 2 0 1 1 2.829 2.829z" />
                </svg>
                <span>A basic level of physical fitness is required</span>
              </li>
            </ul>






















            <div class="grid grid-cols-2 gap-4">

              <a href="assets/images/product2-1.jpg" data-fancybox="product2" data-caption="Caption #1">
                <img src="assets/images/product2-1.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product2-2.jpg" data-fancybox="product2" data-caption="Caption #1">
                <img src="assets/images/product2-2.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product2-3.jpg" data-fancybox="product2" data-caption="Caption #2">
                <img src="assets/images/product2-3.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product2-4.jpg" data-fancybox="product2" data-caption="Caption #2">
                <img src="assets/images/product2-4.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product2-5.jpg" data-fancybox="product2" data-caption="Caption #2">
                <img src="assets/images/product2-5.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product2-6.jpg" data-fancybox="product2" data-caption="Caption #2">
                <img src="assets/images/product2-6.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product2-7.jpg" data-fancybox="product2" data-caption="Caption #2">
                <img src="assets/images/product2-7.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product2-8.jpg" data-fancybox="product2" data-caption="Caption #2">
                <img src="assets/images/product2-8.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>

            </div>
            <a href="#contact_form" class="w-full flex justify-center py-3">
              <button
                class="mx-auto w-full rounded-full bg-green-700 hover:bg-gray-50 border-2 border-transparent hover:border-green-700 hover:text-green-700 transition-all my-3 py-1.5 px-3 font-semibold text-white text-sm sm:text-lg flex items-center justify-center group">
                <div class="min-w-max">Book Now</div>
                <div class="group-hover:border-green-700 border-b-2 border-dashed w-1/4 mx-5"></div> Price: €70
              </button>
            </a>
            <a target="_blank"
              href="https://www.tripadvisor.co.uk/AttractionProductReview-g304074-d28000336-Canyoning_Budva_Drenovstica-Budva_Budva_Municipality.html"
              class="w-full flex justify-center py-1">
              <button
                class="mx-auto w-full rounded-full bg-gray-50 border-2  border-green-700 text-green-700 transition-all my-2 py-1.5 px-3 font-semibold text-lg flex flex-row justify-center gap-2">
                <svg width="30px" height="30px" viewBox="0 -96 512.2 512.2" id="Layer_2"
                  xmlns="http://www.w3.org/2000/svg">
                  <style>
                    .st0 {
                      fill: #08808a
                    }
                  </style>
                  <path class="st0"
                    d="M128.2 127.9C92.7 127.9 64 156.6 64 192c0 35.4 28.7 64.1 64.1 64.1 35.4 0 64.1-28.7 64.1-64.1.1-35.4-28.6-64.1-64-64.1zm0 110c-25.3 0-45.9-20.5-45.9-45.9s20.5-45.9 45.9-45.9S174 166.7 174 192s-20.5 45.9-45.8 45.9z" />
                  <circle class="st0" cx="128.4" cy="191.9" r="31.9" />
                  <path class="st0"
                    d="M384.2 127.9c-35.4 0-64.1 28.7-64.1 64.1 0 35.4 28.7 64.1 64.1 64.1 35.4 0 64.1-28.7 64.1-64.1 0-35.4-28.7-64.1-64.1-64.1zm0 110c-25.3 0-45.9-20.5-45.9-45.9s20.5-45.9 45.9-45.9S430 166.7 430 192s-20.5 45.9-45.8 45.9z" />
                  <circle class="st0" cx="384.4" cy="191.9" r="31.9" />
                  <path class="st0"
                    d="M474.4 101.2l37.7-37.4h-76.4C392.9 29 321.8 0 255.9 0c-66 0-136.5 29-179.3 63.8H0l37.7 37.4C14.4 124.4 0 156.5 0 192c0 70.8 57.4 128.2 128.2 128.2 32.5 0 62.2-12.1 84.8-32.1l43.4 31.9 42.9-31.2-.5-1.2c22.7 20.2 52.5 32.5 85.3 32.5 70.8 0 128.2-57.4 128.2-128.2-.1-35.4-14.6-67.5-37.9-90.7zM368 64.8c-60.7 7.6-108.3 57.6-111.9 119.5-3.7-62-51.4-112.1-112.3-119.5 30.6-22 69.6-32.8 112.1-32.8S337.4 42.8 368 64.8zM128.2 288.2C75 288.2 32 245.1 32 192s43.1-96.2 96.2-96.2 96.2 43.1 96.2 96.2c-.1 53.1-43.1 96.2-96.2 96.2zm256 0c-53.1 0-96.2-43.1-96.2-96.2s43.1-96.2 96.2-96.2 96.2 43.1 96.2 96.2c-.1 53.1-43.1 96.2-96.2 96.2z" />
                </svg>
                Learn More on TripAdvisor
              </button>
            </a>
          </div>
        </div>
      </section>

      <!-- Canyon Skurda Tour -->
      <section class="pt-24" id="Canyon_Skurda">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <div class="relative">
            <img src="assets/images/product2-1.jpg" alt="Canyon Skurda" class="w-full h-64 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-80 flex items-center justify-center">
              <h2 class="text-3xl font-bold text-white">Canyon Skurda Tour</h2>
            </div>
          </div>
          <div class="p-6">
            <p class="mb-4">
              Canyon Skurda is a technical canyon and ideal for those who like abseiling (rappelling), since it does not
              have any jumps or slides.
              Skurda is a periodical canyon and dries out in the summer, but despite that it is one of the best-shaped
              canyons in Montenegro.
            </p>
            <ul class="list-none list-inside mb-4 space-y-3">
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-chart-no-axes-gantt">
                  <path d="M8 6h10" />
                  <path d="M6 12h9" />
                  <path d="M11 18h7" />
                </svg>
                <span>No of waterfalls: <span class="font-semibold text-lg">8 </span> </span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-land-plot">
                  <path d="m12 8 6-3-6-3v10" />
                  <path d="m8 11.99-5.5 3.14a1 1 0 0 0 0 1.74l8.5 4.86a2 2 0 0 0 2 0l8.5-4.86a1 1 0 0 0 0-1.74L16 12" />
                  <path d="m6.49 12.85 11.02 6.3" />
                  <path d="M17.51 12.85 6.5 19.15" />
                </svg>
                <span> Highest waterfall: <span class="font-semibold text-lg">25m </span> </span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-timer-reset">
                  <path d="M10 2h4" />
                  <path d="M12 14v-4" />
                  <path d="M4 13a8 8 0 0 1 8-7 8 8 0 1 1-5.3 14L4 17.6" />
                  <path d="M9 17H4v5" />
                </svg>
                <span>Duration: <span class="font-semibold text-lg">2-3hrs </span> </span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-clock-9">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 7.5 12" />
                </svg>
                <span>Approach time: <span class="font-semibold text-lg">45min </span> </span>
              </li>
            </ul>

            <p class="mb-4">
              Canyon Skurda, located approximately 45min hike from Kotor, is the perfect choice for everyone who desires
              to do canyoning.
              Including your 45 min walk along the hiking path to the entry point, the canyoning will last 2 hours. In
              total, you would
              spend 3 hours on your adventure. Along the way, you will also have the perfect view of the bay of Kotor.
              When we finish
              with the canyon, it is a 5min walk back to the car.
            </p>

            <h3 class="text-2xl font-semibold mb-3 mt-10">Additional Information</h3>

            <ul class="list-none list-inside mb-4 space-y-3">
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-users">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
                <span>Minimum number of participants:<span class="font-semibold text-lg"> 2 </span> </span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-users">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
                <span> Maximum number of participants per guide:<span class="font-semibold text-lg"> 8</span> </span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-user-check">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <polyline points="16 11 18 13 22 9" />
                </svg>
                <span>Suitable for children above the age:<span class="font-semibold text-lg"> 12 years </span> </span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-gauge">
                  <path d="m12 14 4-4" />
                  <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                </svg>
                <span>Level: <span class="font-semibold text-lg"> Moderate</span> </span>
              </li>
            </ul>

            <h3 class="text-2xl font-semibold mb-3 mt-10">What do I need?</h3>
            <ul class="list-none list-inside mb-4 space-y-3">
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-shirt">
                  <path
                    d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z" />
                </svg>
                <span>Bathing suit</span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-tornado">
                  <path d="M21 4H3" />
                  <path d="M18 8H6" />
                  <path d="M19 12H9" />
                  <path d="M16 16h-6" />
                  <path d="M11 20H9" />
                </svg>
                <span>Towel</span>
              </li>
              <li class="flex flex-row gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-repeat-2">
                  <path d="m2 9 3-3 3 3" />
                  <path d="M13 18H7a2 2 0 0 1-2-2V6" />
                  <path d="m22 15-3 3-3-3" />
                  <path d="M11 6h6a2 2 0 0 1 2 2v10" />
                </svg>
                <span>Dry underwear to change</span>
              </li>
            </ul>



















            <div class="grid grid-cols-2 gap-4">
              <a href="assets/images/product1-1.jpg" data-fancybox="product1" data-caption="Caption #1">
                <img src="assets/images/product1-1.jpg" class="w-full h-64 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product1-2.jpg" data-fancybox="product1" data-caption="Caption #1">
                <img src="assets/images/product1-2.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product1-3.jpg" data-fancybox="product1" data-caption="Caption #2">
                <img src="assets/images/product1-3.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product1-4.jpg" data-fancybox="product1" data-caption="Caption #2">
                <img src="assets/images/product1-4.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product1-5.jpg" data-fancybox="product1" data-caption="Caption #2">
                <img src="assets/images/product1-5.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product1-6.jpg" data-fancybox="product1" data-caption="Caption #2">
                <img src="assets/images/product1-6.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>
              <a href="assets/images/product1-7.jpg" data-fancybox="product1" data-caption="Caption #2">
                <img src="assets/images/product1-7.jpg" class="w-full h-60 object-cover rounded-lg" />
              </a>

            </div>
            <a href="#contact_form" class="w-full flex justify-center py-3">
              <button
                class="mx-auto w-full rounded-full bg-green-700 hover:bg-gray-50 border-2 border-transparent hover:border-green-700 hover:text-green-700 transition-all my-3 py-1.5 px-3 font-semibold text-white text-sm sm:text-lg flex items-center justify-center group">
                Book Now<div class="group-hover:border-green-700 border-b-2 border-dashed w-1/4 mx-5"></div> Price: €90
              </button>
            </a>
          </div>
        </div>
      </section>
    </main>


























    <div class="isolate container px-5  mx-auto my-10" id="contact_form">
      <div class="bg-white py-24 sm:py-32 px-5 shadow-md rounded-lg">
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact Us</h2>
          <!-- <p class="mt-2 text-lg leading-8 text-gray-600">Aute magna irure deserunt veniam aliqua magna enim voluptate. -->
          </p>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="mx-auto mt-10 max-w-xl">
          <div class="grid grid-cols-1 gap-x-8 gap-y-3 sm:grid-cols-2">
            <div class="sm:col-span-2">
              <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Name</label>
              <div class="mt-1.5">
                <input type="text" name="name" id="name" autocomplete="name" placeholder="Name" required
                  class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
              <div class="mt-1.5">
                <input type="email" name="email" id="email" autocomplete="email" placeholder="Email" required
                  class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Contact
                Number</label>
              <div class="mt-1.5">
                <input type="tel" name="phone" id="phone" autocomplete="tel" placeholder="number" required
                  class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
              <div class="mt-1.5">
                <textarea name="message" id="message" rows="4" placeholder="want to say something...." required
                  class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
              </div>
            </div>
          </div>
          <div class="mt-10">
            <button type="submit"
              class="block w-full rounded-md bg-green-700 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Book
              Now</button>
          </div>
        </form>
      </div>
    </div>



















    <!-- Footer -->
    <footer class="bg-green-500/10 border-t border-green-600/60 text-black p-4 text-center">
      <p>&copy; 2024 Canyon Adventure Tours. All rights reserved.</p>
    </footer>



  </div>





  <script src="script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

  <script>
    Fancybox.bind()
  </script>



  <?php
  //================== save contact information ( START ) =======================
  if (array_key_exists('name', $_POST) && array_key_exists('email', $_POST) && array_key_exists('phone', $_POST) && array_key_exists('message', $_POST)) {
    $name = $email = $phone = $message = '';


    function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $phone = test_input($_POST["phone"]);
      $message = test_input($_POST["message"]);

      include 'dbconnect.php';



      //================== Send Mail ( START ) ========================
      $to = 'info@kotorcanyoning.com';
      $subject = "New Contact Message - kotor Canyoning";
      $body = '    
      <!DOCTYPE html>
      <html lang="en">
      
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Mail - kotor Canyoning</title>
      </head>
      
      <body>
        <div style="background-color: #dcdcdc;padding: 20px;font-family: sans-serif;">
          <div style="background-color: white;border-radius: 7px;padding-left: 10%;">
            
            <div style="font-family: sans-serif;width: 100%;">
            <p style="width: 100%;color: black;">
            Hi,<span style="font-size:1.6rem;">' . $name . '</span> Just Sent a message</p>
            </div>
            <div style="font-weight:bold;width: 100%;">
              E-Mail: ' . $email . ' <br>
              Contact Number: ' . $phone . ' <br>
              Message: <br><p style="color: black;background-color: white;padding: 5px;margin-top: 10px;margin-bottom: 10px;">
                ' . $message . '
              </p>
            </div>
          </div>
        </div>
      </html>
      ';
      $headers = "From: kotor Canyoning <contact@kotorcanyoning.com>\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type:text/html;cherset=UTF-8\r\n";
      if (mail($to, $subject, $body, $headers)) {
        $MessageSent = 'Message Received';
      } else {
        $MessageSent = 'Thank you for your message';
        echo "Mail Sending Error";
      }
      //================== Send Mail  ( END )  ========================
  


      $query = "INSERT INTO `contacts` (`Name`, `Email`, `Phone`, `Message`) VALUES ('$name', '$email','$phone', '$message')";

      if (mysqli_query($link, $query)) {
        echo ' <section
      class="flex flex-col justify-center px-10 py-9 text-base bg-white rounded-lg border border-solid shadow-xl shadow-gray-400 border-zinc-200 max-w-[465px] fixed bottom-2 left-2 z-20">
      <h2 class="self-center text-xl font-semibold text-center text-black">' . $MessageSent . '!</h2>
      <p class="mt-2 leading-6 text-center text-zinc-600 text-opacity-60">We have received your message and will get back to you shortly. Have a great day!
      <button type="button" onclick="this.parentNode.parentNode.remove()"
        class="w-full px-5 py-3.5 mt-4 font-bold whitespace-nowrap bg-green-700 rounded-lg text-neutral-100">Okay</button>
    </section>';
      }

    }
  }
  //================== save contact information  ( END )  =======================
  ?>


  <!-- <section
    class="flex flex-col justify-center px-10 py-9 text-base bg-white rounded-lg border border-solid shadow-xl shadow-gray-400 border-zinc-200 max-w-[465px] fixed bottom-2 left-2 z-20">
    <h2 class="self-center text-xl font-semibold text-center text-black">Thank you for your message!</h2>
    <p class="mt-2 leading-6 text-center text-zinc-600 text-opacity-60">We have received your message and will get back
      to you shortly. Have a great day!
      <button type="button" onclick="this.parentNode.parentNode.remove()"
        class="w-full px-5 py-3.5 mt-4 font-bold whitespace-nowrap bg-[#ff6846] rounded-lg text-neutral-100">Okay</button>
  </section> -->

</body>

</html>