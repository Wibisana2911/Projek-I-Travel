<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I-Travel</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
<<<<<<< HEAD

    <!-- Shortcut Web Icon -->
    <link rel="shortcut icon" href="/img/logo2.png">


</head>
<!--Header-->
<body class="font-mono leading-normal tracking-normal text-white bg-gray-200 dark:bg-gray-900 gradient" style="font-family: 'Source Sans Pro', sans-serif;">
=======
    
    <!-- Shortcut Web Icon -->
    <link rel="shortcut icon" href="/img/logo2.png">
    
		
</head>  
<!--Header-->
<body class="font-mono leading-normal tracking-normal text-white bg-gray-200 gradient" style="font-family: 'Source Sans Pro', sans-serif;">
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1

    <!--Nav-->
    <nav id="header" class="fixed top-0 z-30 w-full text-white ">
      <div class="container flex flex-wrap items-center justify-between w-full py-2 mx-auto mt-0">
        <div class="flex items-center pl-4">
<<<<<<< HEAD
          <a class="font-mono text-2xl text-black dark:text-white no-underline toggleColour hover:no-underline lg:text-4xl" href="#">
=======
          <a class="font-mono text-2xl text-black no-underline toggleColour hover:no-underline lg:text-4xl" href="#">
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
            <!--Icon from: http://www.potlabicons.com/ -->
            <svg class="inline h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
              <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
              <path
                class="plane-take-off"
                d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
              />
            </svg>
<<<<<<< HEAD
            I-TRAVEL
=======
            I-TRAVEL 
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
          </a>
        </div>
        <div class="block pr-4 lg:hidden">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 transition duration-300 ease-in-out transform hover:text-gray-900 focus:outline-none focus:shadow-outline hover:scale-105">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>MENU</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="z-20 flex-grow hidden w-full p-4 mt-2 text-black bg-white lg:flex lg:items-center lg:w-auto lg:mt-0 lg:bg-transparent lg:p-0" id="nav-content">
          <ul class="items-center justify-end flex-1 list-reset lg:flex">
            <li class="mr-3">
<<<<<<< HEAD
              <a class="inline-block px-4 py-2 font-bold text-black  dark:text-white no-underline hover:rounded-full hover:bg-teal-400 hover:text-xl hover:font-semibold" href="/">HOME</a>
            </li>
            <li class="mr-3">
              <a class="inline-block px-4 py-2 text-black dark:text-white no-underline hover:rounded-full hover:bg-teal-400 hover:text-xl hover:font-semibold" href="/wisata">WISATA</a>
            </li>
            <li class="mr-3">
              <a href="/ticketpage" class="inline-block px-4 py-2 text-black dark:text-white no-underline hover:rounded-full hover:bg-teal-400 hover:text-xl hover:font-semibold" href="/ticketpage">TIKET</a>
=======
              <a class="inline-block px-4 py-2 font-bold text-black no-underline hover:rounded-full hover:bg-teal-400 hover:text-xl hover:font-semibold" href="/">HOME</a>
            </li>
            <li class="mr-3">
              <a class="inline-block px-4 py-2 text-black no-underline hover:rounded-full hover:bg-teal-400 hover:text-xl hover:font-semibold" href="/wisata">WISATA</a>
            </li>
            <li class="mr-3">
              <a href="/ticketpage" class="inline-block px-4 py-2 text-black no-underline hover:rounded-full hover:bg-teal-400 hover:text-xl hover:font-semibold" href="/ticketpage">TIKET</a>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
            </li>
          </ul>

          @if (Route::has('login'))
                <div class="px-4 py-2 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105 hover:bg-teal-400">
                    @auth
                    <!-- <button id="navAction" class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105"> -->
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">    {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-bla">LOG IN</a>

                        @if (Route::has('register'))
                        <!-- <button id="navAction" class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105"> -->
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">REGISTER</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
      </div>
      <hr class="py-0 my-0 border-b border-gray-100 opacity-25" />
    </nav>

  <main>
    <!-- Container for demo purpose -->
<div class="container px-6 mx-auto my-24">

<!-- Section: Design Block -->
<section class="mb-32 text-gray-800">
  <style>
    .map-container-2 {
      height: 540px;
    }
  </style>
<<<<<<< HEAD
  <div class="block bg-white dark:bg-gray-700 rounded-lg shadow-lg">
=======
  <div class="block bg-white rounded-lg shadow-lg">
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
    <div class="flex flex-wrap items-center">
      <div class="block w-full grow-0 shrink-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
        <div class="w-full map-container-2">
          <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" class="top-0 left-0 w-full h-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="w-full grow-0 shrink-0 basis-auto lg:w-6/12 xl:w-8/12">
        <div class="flex flex-wrap pt-12 lg:pt-0">
          <div class="w-full px-3 mb-12 grow-0 shrink-0 basis-auto md:w-6/12 lg:w-full xl:w-6/12 md:px-6 xl:px-12">
            <div class="flex items-start">
              <div class="shrink-0">
                <div class="flex items-center justify-center p-4 bg-blue-600 rounded-md shadow-md w-14 h-14">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headset" class="w-5 text-white"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor"
                      d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z">
                    </path>
                  </svg>
                </div>
              </div>
              <div class="ml-6 grow">
<<<<<<< HEAD
                <p class="mb-1 font-bold dark:text-white">Technical support</p>
                <p class="text-gray-500 dark:text-gray-200">support@example.com</p>
                <p class="text-gray-500 dark:text-gray-200">+1 234-567-89</p>
=======
                <p class="mb-1 font-bold">Technical support</p>
                <p class="text-gray-500">support@example.com</p>
                <p class="text-gray-500">+1 234-567-89</p>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
              </div>
            </div>
          </div>
          <div class="w-full px-3 mb-12 grow-0 shrink-0 basis-auto md:w-6/12 lg:w-full xl:w-6/12 md:px-6 xl:px-12">
            <div class="flex items-start">
              <div class="shrink-0">
                <div class="flex items-center justify-center p-4 bg-blue-600 rounded-md shadow-md w-14 h-14">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign"
                    class="w-3 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512">
                    <path fill="currentColor"
                      d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                    </path>
                  </svg>
                </div>
              </div>
              <div class="ml-6 grow">
<<<<<<< HEAD
                <p class="mb-1 font-bold dark:text-white">Sales questions</p>
                <p class="text-gray-500 dark:text-gray-200">sales@example.com</p>
                <p class="text-gray-500 dark:text-gray-200">+1 234-567-89</p>
=======
                <p class="mb-1 font-bold">Sales questions</p>
                <p class="text-gray-500">sales@example.com</p>
                <p class="text-gray-500">+1 234-567-89</p>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
              </div>
            </div>
          </div>
          <div class="w-full px-3 mb-12 grow-0 shrink-0 basis-auto md:w-6/12 lg:w-full xl:w-6/12 md:px-6 xl:px-12">
            <div class="flex align-start">
              <div class="shrink-0">
                <div class="flex items-center justify-center p-4 bg-blue-600 rounded-md shadow-md w-14 h-14">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="newspaper"
                    class="w-5 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="currentColor"
                      d="M552 64H88c-13.255 0-24 10.745-24 24v8H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h472c26.51 0 48-21.49 48-48V88c0-13.255-10.745-24-24-24zM56 400a8 8 0 0 1-8-8V144h16v248a8 8 0 0 1-8 8zm236-16H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm-208-96H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm0-96H140c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h360c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12z">
                    </path>
                  </svg>
                </div>
              </div>
              <div class="ml-6 grow">
<<<<<<< HEAD
                <p class="mb-1 font-bold dark:text-white">Press</p>
                <p class="text-gray-500 dark:text-gray-200">press@example.com</p>
                <p class="text-gray-500 dark:text-gray-200">+1 234-567-89</p>
=======
                <p class="mb-1 font-bold">Press</p>
                <p class="text-gray-500">press@example.com</p>
                <p class="text-gray-500">+1 234-567-89</p>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
              </div>
            </div>
          </div>
          <div class="w-full px-3 mb-12 lg:mb-0 grow-0 shrink-0 basis-auto md:w-6/12 lg:w-full xl:w-6/12 md:px-6 xl:px-12">
            <div class="flex align-start">
              <div class="shrink-0">
                <div class="flex items-center justify-center p-4 bg-blue-600 rounded-md shadow-md w-14 h-14">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" class="w-5 text-white"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor"
                      d="M511.988 288.9c-.478 17.43-15.217 31.1-32.653 31.1H424v16c0 21.864-4.882 42.584-13.6 61.145l60.228 60.228c12.496 12.497 12.496 32.758 0 45.255-12.498 12.497-32.759 12.496-45.256 0l-54.736-54.736C345.886 467.965 314.351 480 280 480V236c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v244c-34.351 0-65.886-12.035-90.636-32.108l-54.736 54.736c-12.498 12.497-32.759 12.496-45.256 0-12.496-12.497-12.496-32.758 0-45.255l60.228-60.228C92.882 378.584 88 357.864 88 336v-16H32.666C15.23 320 .491 306.33.013 288.9-.484 270.816 14.028 256 32 256h56v-58.745l-46.628-46.628c-12.496-12.497-12.496-32.758 0-45.255 12.498-12.497 32.758-12.497 45.256 0L141.255 160h229.489l54.627-54.627c12.498-12.497 32.758-12.497 45.256 0 12.496 12.497 12.496 32.758 0 45.255L424 197.255V256h56c17.972 0 32.484 14.816 31.988 32.9zM257 0c-61.856 0-112 50.144-112 112h224C369 50.144 318.856 0 257 0z">
                    </path>
                  </svg>
                </div>
              </div>
              <div class="ml-6 grow">
<<<<<<< HEAD
                <p class="mb-1 font-bolddark:text-white">Bug report</p>
                <p class="text-gray-500 dark:text-gray-200">bugs@example.com</p>
                <p class="text-gray-500 dark:text-gray-200">+1 234-567-89</p>
=======
                <p class="mb-1 font-bold">Bug report</p>
                <p class="text-gray-500">bugs@example.com</p>
                <p class="text-gray-500">+1 234-567-89</p>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->
  </main>


  <!-- start footer -->
  <footer class="flex w-auto space-x-2 text-white bg-gray-900">
      <div class="w-1/3 h-full mt-10 ml-24 mr-32 item">
          <img src="/img/logo2.png" alt="logo I-Travel">
      </div>

      <div class="w-full h-full item ">
          <h5 class="mt-8 ml-24 mr-32 font-semibold tracking-wider text-gray-500 uppercase">Featured</h5>
          <ul class="mt-4 ml-24 mr-32">
              <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Wisata</a></li>
              <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Transportasi</a></li>
              <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Tiket</a></li>
          </ul>
      </div>

      <div class="w-full h-full mb-8 item ">
          <h5 class="mt-8 ml-8 mr-32 font-semibold tracking-wider text-gray-500 uppercase">Our Company</h5>
          <ul class="mt-4 ml-8 mr-32">
              <li>
              <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
                  <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      class="fill-current">
                      <path
                      d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z" />
                  </svg>
                  </span>
                  <span class="ml-3">
<<<<<<< HEAD
                  Jl. Udayana, Singaraja, Bali
=======
                  Jl. Udayana, Singaraja, Bali 
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
                  </span>
              </a>
              </li>
              <li class="mt-4">
              <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
              <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      class="fill-current">
                      <path
                      d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z" />
                      <path d="M13 7L11 7 11 13 17 13 17 11 13 11z" /></svg>
                  </span>
                  <span class="ml-3">
                  Mon - Fri : 8:00 - 16:00<br>
                  Sat - Sun : 8:00 - 13:00
                  </span>
              </a>
              </li>
              <li class="mt-4">
              <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
                  <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      class="fill-current">
                      <path
                      d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z" />
                  </svg>
                  </span>
                  <span class="ml-3">
                  021 0001 2345
                  </span>
              </a>
              </li>
              <li class="mt-4">
              <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
                  <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      class="fill-current">
                      <path
                      d="M20,4H4C2.896,4,2,4.896,2,6v12c0,1.104,0.896,2,2,2h16c1.104,0,2-0.896,2-2V6C22,4.896,21.104,4,20,4z M20,8.7l-8,5.334 L4,8.7V6.297l8,5.333l8-5.333V8.7z" />
                  </svg>
                  </span>
                  <span class="ml-3">
                  I-Travel@gmail.com
                  </span>
              </a>
              </li>
          </ul>
      </div>

      <div class="h-full item w-full96 ">
          <h5 class="mt-8 ml-24 mr-32 font-semibold tracking-wider text-gray-500 uppercase">Social Media</h5>
          <ul class="flex mt-4 ml-24 mr-32">
              <li>
              <a href="#" target="_blank" title="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                  <path
                      d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592	c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20	c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z" />
                  </svg>
              </a>
              </li>

              <li class="ml-6">
              <a href="#" target="_blank" title="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                  <path
                      d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z" />
                  </svg>
              </a>
              </li>

              <li class="ml-6">
              <a href="#" target="_blank" title="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                  <path
                      d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z" />
                  <circle cx="11.994" cy="11.979" r="3.003" /></svg>
              </a>
              </li>

              <li class="ml-6">
              <a href="#" target="_blank" title="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                  <path
                      d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404	c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814	c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763	C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z" />
                  </svg>
              </a>
              </li>
          </ul>

          <p class="mt-12 ml-24 mr-32 text-sm text-gray-400">2022 ?? I-Travel<br class="hidden lg:block">All Rights Reserved.
          </p>
      </div>
  </footer>
  <!-- end footer -->

<!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
  <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 450) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
  </script>
<<<<<<< HEAD

</body>
</html>
=======
        
</body>
</html>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
