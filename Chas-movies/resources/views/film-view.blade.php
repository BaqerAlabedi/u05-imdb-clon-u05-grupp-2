<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chas movies</title>
    <script defer src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bg-gray-800">
    <div class="max-md:w-full max-md:m-0">
        @extends('sidenav')
        @section('content')
        <div class="container m-auto mt-6 mb-6 w-9/12 bg-gray-700 rounded-lg flex max-lg:w-full max-lg:h-full max-lg:block max-lg:m-1" id="background1">
            <div class="overflow-hidden rounded-lg shadow-lg text-gray-200">
                <h2 class="text-gray-200 text-3xl md:text-5xl sm:text-4xl text-center my-6">{{ $films->title }}</h2>
                <div class="flex justify-center mb-10 max-md:block">
                    <img class="mb-10 ml-6 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 max-md:block" src="{{ $films->imgurl }}" alt="Placeholder">
                    <p class="mx-6 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <button data-modal-target="trailerModal" data-modal-toggle="trailerModal" class="flex absolute mr-28 mt-56 w-36 h-12 bg-amber-300 rounded-lg text-black" type="button">
                        <img src="https://cdn-icons-png.flaticon.com/512/3024/3024584.png" alt="Play button" class="w-12 p-1">
                        <span class="m-auto ml-1">
                            Play trailer
                        </span>
                    </button>
                    <div onclick="reload()" id="trailerModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div>
                            <div class="relative bg-gray-700 rounded-lg shadow dark:bg-gray-700">
                                <div class="pl-2.5 pb-3 pt-1 w-fit h-fit">
                                    <button onClick="reload()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1 float-right items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="trailerModal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <iframe class="pt-4" width="966" height="543" src="https://www.youtube.com/embed/zSWdZVtXT7E" title="Interstellar - Trailer - Official Warner Bros. UK" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(session('status'))
                    {{ session('status') }}
                    @endif
                    @if (Auth()->check())
                    @if (Auth::user()->role == 1 OR Auth::user()->role == 0)
                    <form method="post" action="{{ route('add-watchlist')}}" class="flex absolute ml-60 mt-56 w-36 h-12 bg-amber-300 rounded-lg text-black">
                        <input type="hidden" name="filmId" value="{{$id}}" />
                        <button>
                            @csrf
                            <svg class="inline-flex w-9 ml-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                            </svg>
                            <span class="inline-flex ml-1">
                                Add to
                            </span>
                        </button>
                    </form>
                    @endif
                    @endif
                </div>
                <div class="pl-8 w-48 flex flex-wrap">
                    <h3 class="font-bold text-xl">Genre:&nbsp;</h3>
                            <p class="text-xl"> {{ $films->genre}}</p>
                            <h3 class="font-bold text-xl">Director:&nbsp;</h3>
                            <p class="text-xl">{{ $films->director}}</p>
                            <h3 class="font-bold text-xl">Cast:&nbsp;</h3>
                            <p class="text-xl">{{ $films->maincast}}</p>
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
                        </div>
                        <div class="block mx-6">
                            <img class="w-44 h-auto m-auto my-6 rounded-lg" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="Placeholder">
                            <p class="text-center mb-6">Actor Name</p>
                        </div>
                        <div class="block mx-6">
                            <img class="w-44 h-auto m-auto my-6 rounded-lg" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="Placeholder">
                            <p class="text-center mb-6">Actor Name</p>
                        </div>
                        <div class="block mx-6">
                            <img class="w-44 h-auto m-auto my-6 rounded-lg" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="Placeholder">
                            <p class="text-center mb-6">Actor Name</p>
                        </div>
                        <div class="block mx-6">
                            <img class="w-44 h-auto m-auto my-6 rounded-lg" src="https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="Placeholder">
                            <p class="text-center mb-6">Actor Name</p>
                        </div>
                        <div class="block mx-6">
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
    </div>




    <!--comment start -->

    <div style="text-align: center; padding-bottom: 30px;">
        <h1 style=" color:aliceblue;  font-size: 30px; text-align: center; padding-top: 20px; padding-bottom: 20px;">Comments</h1>
        @if (Auth()->check())
        @if (Auth::user()->role == 1 OR Auth::user()->role == 0)
        <form action="{{ route('add-comment', ['id' => $films->id]) }}" method="POST">
            @csrf
            <textarea style="height: 150px; width: 600px; border-radius:20px; padding-bottom:30px; " placeholder="Comment something here" name="comment"></textarea>
            <br>
            <input style="background-color:#FFD700;  width: 150px; font-size: 20px; border-radius:20px;" type="submit" value="Comment">
        </form>
        @endif
        @endif
    </div>


    <div class="overflow-hidden rounded-lg shadow-lg text-gray-200" style="padding-left: 30%;">
        <h1 style="font-size: 20px; padding-bottom: 20px;" class="text-white">All Comments</h1>

        @foreach ($comments as $comment)

        <div class="bg-gray-900 rounded-2xl w-1/2 relative my-5">
            <div class="p-5">
            <b class="my-3">{{$comment->name}}</b>
                <p class="my-3">{{$comment->comment}}</p>
                @if (Auth()->check())
                @if (Auth::user()->role == 0)
                <form method="POST" action="{{ route('comment.delete', $comment->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="w-1/10 inline-block text-sm font-medium text-gray-900 bg-gray-900 hover:bg-gray-800 absolute top-0 right-0 px-2 py-2 rounded-lg scale-200 lg:scale-90 sm:scale-60" type="submit">❌</button>
                </form>
                @endif
                @endif
                <a href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->name}}">Reply</a>
            </div>
        </div>

        @endforeach

        <footer>


        </footer>

        <script type="text/javascript">
            function reply(caller) {
                $('.replyDiv').insertAfter($(caller));
                $('.replyDiv').show();
            }
            function reload() { //  Temporär lösning!
                document.querySelector("#trailerModal");
                location.reload();
            }
        </script>
        <script src="/js/jquery-3.4.1.min.js"> </script>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>



        @endsection
</body>

</html>