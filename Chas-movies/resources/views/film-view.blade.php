<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chas movies</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
    
                        
                        <form method="get" action="{{ route('watchlist', $user_id) }}" class="flex absolute ml-60 mt-56 w-36 h-12 bg-amber-300 rounded-lg text-black">
                        <button class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300">
                                <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg>
                            <span class="ml-2 text-sm font-medium">Watchlist</span>
                        </button type="submit">
                        </form>
    
    
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
    
                    @if (Auth::user()->role == 1 || Auth::user()->role == 0)
                    <div class="text-center">
                    <form method="POST" action="{{ route('logout') }}" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300">
                      @csrf
                      <button type="submit">Log out
                      </button>
                    </form>
                    </div>
                    @endif
                    @endif
                </div>
    
    
        </nav>

        <div class="container m-auto mt-6 mb-6 w-9/12 bg-gray-700 rounded-lg flex" id="background1">
            <div class="overflow-hidden rounded-lg shadow-lg text-gray-200">
                <h2 class="text-gray-200 text-3xl md:text-5xl sm:text-4xl text-center my-6">{{ $films->title }}</h2>
                <div class="flex justify-center">
                    <img class="mb-10 ml-6 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3" src="{{ $films->imgurl }}" alt="Placeholder">
                    <p class="mx-6 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <button class="flex absolute mr-28 mt-56 w-36 h-12 bg-amber-300 rounded-lg text-black" onclick="trailer()">
                    <img src="https://cdn-icons-png.flaticon.com/512/3024/3024584.png" alt="Play button" class="w-12 p-1">
                    <span class="m-auto ml-1">
                    Play trailer
                    </span></button>
                    
                    @if(session('status'))
                        {{ session('status') }}
                    @endif
            
                    @if (Auth::user()->role == 1 OR Auth::user()->role == 0)
                    <form method="post" action="{{ route('add-watchlist')}}" class="flex absolute ml-60 mt-56 w-36 h-12 bg-amber-300 rounded-lg text-black">
                    <input type="hidden" name="filmId" value="{{$id}}"/>
                    <button>
                        @csrf
                        <span class="m-auto ml-1">
                            Add to
                        </span>
                        <svg class="md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                        </svg>
                    </button>
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
        </div>




         <!--comment start -->
  
      <div style="text-align: center; padding-bottom: 30px;">
        <h1 style=" color:aliceblue;  font-size: 30px; text-align: center; padding-top: 20px; padding-bottom: 20px;"  >Comments</h1>
        @if (Auth()->check())
                @if (Auth::user()->role == 1 OR Auth::user()->role == 0)
        <form action="{{url('add_comment')}}" method="POST" >
            @csrf
            <textarea style="height: 150px; width: 600px; border-radius:20px; padding-bottom:30px; " placeholder="Comment something here" name="comment"></textarea>
            <br>
          <input  style="background-color:#FFD700;  width: 150px; font-size: 20px; border-radius:20px;" type="submit"  value="Comment">
        </form>
        @endif
        @endif   
    </div>

                
       <div class="overflow-hidden rounded-lg shadow-lg text-gray-200" style="padding-left: 30%;">
        <h1 style="font-size: 20px; padding-bottom: 20px;" class="text-white" >All Comments</h1>
       
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
        <a href="javascript::void(0);" onclick="reply(this)"data-Commentid="{{$comment->name}}">Reply</a>
       </div>
        </div>
       
@endforeach 
      
<footer>


</footer>
 


       
     




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


        <script type="text/javascript">
         function reply(caller)
         {
          
            $('.replyDiv').insertAfter($(caller));
            $('.replyDiv').show();
        }       
        
        </script>
        <script src="/js/jquery-3.4.1.min.js"> </script>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>


        
            
</body>
 </html>
