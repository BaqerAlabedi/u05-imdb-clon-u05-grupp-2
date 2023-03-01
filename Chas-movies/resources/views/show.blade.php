<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-gray-900">
    @extends('sidenav')
    @section('content')
    <div class="pl-32 sm:pl-34 md:pl-40 lg:pl-40">
        <div class="flex flex-wrap -w-1/4 -md:w-1/2 md:justify-start lg:justify-start">
            @foreach ($shows as $show)
            <!-- Column -->
            <div class="my-1 px-1 md:w-1/2 sm:w-1/3 md:w-1/3 lg:my-4 lg:w-1/6">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200 relative">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="{{ $show->imgurl }}">
                    </a>
                    @if (Auth()->check())
                    @if (Auth::user()->role == 0 OR Auth::user()->role == 1)
                    <button class="text-gray-900 bg-yellow-400 hover:bg-yellow-300 w-1/10 inline-block text-sm font-medium text-white-200 bg-gray-800 hover:bg-gray-700 absolute bottom-16 right-0 px-2 py-2 rounded-lg" type="button">
                        Add to <svg class="md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 inline" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                    </button>
                    @if (Auth::user()->role == 0)
                    <form method="GET" action="{{ route('edit.show', $show->id) }}">
                        @csrf
                        <button class="w-1/10 inline-block w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300 absolute top-45 right-5 bottom-2 px-2 py-2 rounded-lg scale-200 lg:scale-90 sm:scale-60" type="submit">update</button>
                    </form>
                    <form method="POST" action="{{ route('show.delete', $show->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="w-1/10 inline-block text-sm font-medium text-gray-900 bg-gray-800 hover:bg-gray-700 absolute top-0 right-0 px-2 py-2 rounded-lg scale-200 lg:scale-90 sm:scale-60" type="submit">❌</button>
                    </form>
                    @endif
                    @endif
                    @endif

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-gray-200" href="#">
                                {{ $show->title }}
                            </a>
                        </h1>
                    </header>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->
            @endforeach


            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 sm:w-1/3 md:w-1/3 lg:my-4 lg:w-1/6">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-gray-200" href="#">
                                Interstellar
                            </a>
                        </h1>
                    </header>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 sm:w-1/3 md:w-1/3 lg:my-4 lg:w-1/6">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-gray-200" href="#">
                                Interstellar
                            </a>
                        </h1>
                    </header>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 sm:w-1/3 md:w-1/3 lg:my-4 lg:w-1/6">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-gray-200" href="#">
                                Interstellar
                            </a>
                        </h1>
                    </header>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 sm:w-1/3 md:w-1/3 lg:my-4 lg:w-1/6">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-gray-200" href="#">
                                Interstellar
                            </a>
                        </h1>
                    </header>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->

        </div>
    </div>
    @if (Auth()->check())
    @if (Auth::user()->role == 0)
    <div id="authentication-modal-2" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal-2">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add movie</h3>
                    <form method="post" class="space-y-6" action="{{ route('add.movie') }}">
                        @csrf
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Title" name="title" required="true">
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Genre" name="genre" required="true">
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="director" name="director" required="true">
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Main cast" name="maincast" required="true">
                        <input type="url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Image (URL)" name="imgurl" required="true">
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
        </div>
    </div>
    @endif
    @endif
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @endsection
</body>

</html>