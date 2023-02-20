<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chas movies</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/tailwindcss-jit-cdn"></script>

    <style>
        .video {
            margin: auto;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }
    </style>
</head>

<body class="bg-gray-800">
    <div id="body">
        <div id="background">
            <header class="text-gray-700 bg-gray-900 body-font">
                <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                    <a class="flex title-font font-medium items-center text-gray-200 mb-4 md:mb-0" href="https://mertjf.github.io/tailblocks/" target="_blank">
                        <img class="h-9" src="https://chasacademy.se/wp-content/uploads/2020/12/ca-emblem-white.svg" alt="">
                        <span class="ml-3 text-xl">Chas Movies</span>
                    </a>
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
                    <button class="flex absolute mr-28 mt-56 w-36 h-12 bg-amber-300 rounded-lg text-black" onclick="trailer()">
                    <img src="https://cdn-icons-png.flaticon.com/512/3024/3024584.png" alt="Play button" class="w-12 p-1">
                    <span class="m-auto ml-1">
                    Play trailer
                    </span></button>

                    @if (Auth::user()->role == 1)
                    <form method="post" action="{{ route('watchlist', $id) }}">                    <button type="submit" class="flex absolute ml-60 mt-56 w-36 h-12 bg-amber-300 rounded-lg text-black">
                    <svg class="md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                        </svg>
                    <span class="m-auto ml-1">
                    Add to
                    </span></button>
                    </form>
                    @endif

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
        <!-- <div id="close"> -->
        <div id="trailer">
            <!-- <span class="text-white hidden" id="close" onclick="closeVideo()">&#9587;</span> -->
            <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <!-- <div class="relative w-full h-full max-w-md md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Show</h3>
                    <form method="post" class="space-y-6" action="{{ route('add.show') }}">
                        @csrf
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Title" name="title" required="true">
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Genre" name="genre" required="true">
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="director" name="director" required="true">
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Main cast" name="maincast" required="true">
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Seasons" name="seasons" required="true">
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Episodes" name="episodes" required="true">
                        <input type="url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Image (URL)" name="imgurl" required="true">
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div> -->
    </div>

        </div>
        </div>

        <script>
            
            function background() {
                let background = document.getElementById("background").style.opacity = 0.2;
                let background1 = document.getElementById("background1").style.opacity = 0.2;
                document.getElementById("trailer").style.opacity = 1;

            }

            function closeVideo() {
            }

            function trailer() {
                let video = document.getElementById("trailer");
                video.innerHTML = `<div class="flex">
                                    <button class="text-white sticky float-right mt-0" onclick="closeVideo()">&#9587;</button>
                                    <iframe id="video" class="video" width="75%" height="80%"
                                    src="https://www.youtube.com/embed/zSWdZVtXT7E" title="Interstellar - Trailer - Official Warner Bros. UK"
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                                    </div>`;
                return true;

                background();

            }

        </script>
</body>
</html>