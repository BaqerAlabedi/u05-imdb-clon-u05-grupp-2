<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-800">
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

    <div class="container m-auto w-9/12">
        <div class="flex">
            <div class="overflow-hidden rounded-lg shadow-lg text-gray-200">
            <h1 class="">Interstellar</h1>
                <div class="md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <img class="rounded-lg" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="Placeholder">
                </div>
            </div>
        </div>
    </div>


</body>