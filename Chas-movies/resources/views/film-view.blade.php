<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900">
    <!-- Component Start -->
    <nav class="flex items-start justify-start bg-gray-900 fixed">
        <div class="h-screen flex flex-col items-center md:w-40 lg:w-40 sm:w-40 w-28 overflow-hidden text-gray-400 bg-gray-800">
            <a class="flex items-center w-full px-3 mt-3" href="{{ url('/') }}">
                <img class="h-9" src="https://chasacademy.se/wp-content/uploads/2020/12/ca-emblem-white.svg" alt="">
                <span class="ml-2 text-sm font-bold">Chas Movies</span>
            </a>
            <div class="w-full px-2">
                <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/movie') }}">
                        <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" fill="white"></path>
                        </svg>
                        <span class="ml-2 text-sm font-medium">Movie</span>
                    </a>

                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/show') }}">
                        <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" fill="white"></path>
                        </svg>
                        <span class="ml-2 text-sm font-medium">TV-show</span>
                    </a>
                    <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                        <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/kategori') }}">
                            <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" fill="white"></path>
                            </svg>
                            <span class="ml-2 text-sm font-medium">Categories</span>
                        </a>
                        <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/trending') }}">
                            <span class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible">🔥</span>
                            <span class="ml-2 text-sm font-medium">Trending</span>
                        </a>
                    </div>
                    <div class="flex flex-col items-center w-full mt-2 border-t border-gray-700">
                        <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/watchlist') }}">
                            <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                            <span class="ml-2 text-sm font-medium">Watchlist</span>
                        </a>
                        <a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/helpcenter') }}">
                            <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <span class="ml-2 text-sm font-medium">Help Center</span>
                        </a>
                    </div>
                </div>
                @if (Auth()->check())
                @if (Auth::user()->role == 0)
                <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                    <H2>Welcome</H2>{{ Auth::user()->name }}
                    <button data-modal-target="authentication-modal-2" data-modal-toggle="authentication-modal-2" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300" type="button">
                        Add Movie
                    </button>
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300" type="button">
                        Add Show
                    </button>

                </div>
                <a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="{{ url('/user') }}">
                    <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="ml-2 text-sm font-medium">Profile</span>
                </a>
                @endif

                @if (Auth::user()->role == 1)
                <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                    <H2>Welcome</H2>{{ Auth::user()->name }}
                    <a href="{{ url('/watchlist')}}"><button class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300" type="button">
                            My Watchlists
                        </button></a>


                </div>
                <a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="{{ url('/user') }}">
                    <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="ml-2 text-sm font-medium">Profile</span>
                </a>
                @endif
                @endif
            </div>


    </nav>

    <div id="background">
            <header class="text-gray-700 bg-gray-900 body-font">
                <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">

                    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                        <a class="flex items-center h-12 rounded hover:bg-gray-700 mr-5 text-gray-200 hover:text-gray-300" href="http://127.0.0.1:8000/discover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill inline w-5 h-5" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z" />
                            </svg>
                            <span class="ml-2 text-l font-medium">Discover</span>
                        </a>
                        <a class="flex items-center h-12 rounded hover:bg-gray-700 mr-5 text-gray-200 hover:text-gray-300" href="http://127.0.0.1:8000/discover/trending">
                            <span class="text-xl w-5 h-5 mb-3 mr-1 stroke-current">🔥</span>
                            <span class="ml-1 text-l font-medium">Trending</span>
                        </a>
                    </nav>
                    <a href="http://127.0.0.1:8000/login">
                        <button class="inline-flex items-center bg-yellow-400 text-gray-900 font-bold border-0 py-1 px-3 focus:outline-none hover:bg-yellow-300 rounded text-base ml-5 mt-4 md:mt-0">Login
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </header>
        </div>

        <div class="container m-auto mt-6 mb-6 w-9/12 bg-gray-700 rounded-lg flex" id="background1">
            <div class="overflow-hidden rounded-lg shadow-lg text-gray-200">
                <h2 class="text-gray-200 text-3xl md:text-5xl sm:text-4xl text-center my-6">Interstellar</h2>
                <div class="flex justify-center">
                    <img class="mb-10 ml-6 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="Placeholder">
                    <p class="mx-6 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


    <!-- Modal toggle -->
<button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="flex absolute mr-28 mt-56 w-36 h-12 bg-amber-300 rounded-lg text-black" type="button">
<img src="https://cdn-icons-png.flaticon.com/512/3024/3024584.png" alt="Play button" class="w-12 p-1">
    <span class="m-auto ml-1">
        Play trailer
    </span>
</button>
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div>
        <!-- Modal content -->
        <div class="relative bg-gray-700 rounded-lg shadow dark:bg-gray-700">
            <!-- Modal body -->
            <div class="pl-2.5 pb-3 pt-1 w-fit h-fit">
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1 float-right items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <iframe class="pt-4" width="966" height="543"
                    src="https://www.youtube.com/embed/zSWdZVtXT7E" title="Interstellar - Trailer - Official Warner Bros. UK"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
            <!-- Modal footer -->
        </div>
    </div>
</div>


                </div>
            
                <div id="carouselExampleControls" class="flex pb-6 carousel slide relative" data-bs-ride="carousel">
                    <div class="flex carousel-inner relative w-full overflow-hidden">
                        <button type="button" class="relative flex pl-6 cursor-pointer group focus:outline-none items-center">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-900 group-hover:bg-gray-900 group-hover:bg-gray-900/60 group-focus:ring-4 group-focus:ring-white group-focus:ring-gray-900/70 group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <div class="block mx-6">
                            <img class="w-44 h-auto m-auto my-6 rounded-lg" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="Placeholder">
                            <p class="text-center mb-6">Actor Name</p>
                        </div><div class="block mx-6">
                            <img class="w-44 h-auto m-auto my-6 rounded-lg" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="Placeholder">
                            <p class="text-center mb-6">Actor Name</p>
                        </div><div class="block mx-6">
                            <img class="w-44 h-auto m-auto my-6 rounded-lg" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="Placeholder">
                            <p class="text-center mb-6">Actor Name</p>
                        </div><div class="block mx-6">
                            <img class="w-44 h-auto m-auto my-6 rounded-lg" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="Placeholder">
                            <p class="text-center mb-6">Actor Name</p>
                        </div><div class="block mx-6">
                            <img class="w-44 h-auto m-auto my-6 rounded-lg" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="Placeholder">
                            <p class="text-center mb-6">Actor Name</p>
                        </div><div class="block mx-6">
                            <img class="w-44 h-auto m-auto my-6 rounded-lg" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="Placeholder">
                            <p class="text-center mb-6">Actor Name</p>
                        </div>
                        <button type="button" class="relative flex items-center justify-center pr-6 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-900 group-hover:bg-gray-900 group-hover:bg-gray-900/60 group-focus:ring-4 group-focus:ring-white group-focus:ring-gray-900/70 group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- /////////////////////////////////////////////// -->




        <!-- /////////////////////////////////////////////// -->



    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
</body>

</html>