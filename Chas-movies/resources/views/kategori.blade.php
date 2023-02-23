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
        <div class="h-screen flex flex-col items-center w-40 overflow-hidden text-gray-400 bg-gray-800">
            <a class="flex items-center w-full px-3 mt-3" href="#">
                <img class="h-9" src="https://chasacademy.se/wp-content/uploads/2020/12/ca-emblem-white.svg" alt="">
                <span class="ml-2 text-sm font-bold">Chas Movies</span>
            </a>
            <div class="w-full px-2">
                <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <svg class="w-5 h-5 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Search</span>
                    </a>
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" fill="white"></path>
                        </svg>
                        <span class="ml-2 text-sm font-medium">Movie</span>
                    </a>

                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <svg class="w-5 h-5" style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" fill="white"></path>
                        </svg>
                        <span class="ml-2 text-sm font-medium">TV-show</span>
                    </a>
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <span class="text-l w-5 h-5 stroke-current">🔥</span>
                        <span class="ml-2 text-sm font-medium">Trending</span>
                    </a>
                </div>
                <div class="flex flex-col items-center w-full mt-2 border-t border-gray-700">
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Watchlist</span>
                    </a>
                    <a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <svg class="w-5 h-5 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Help Center</span>
                    </a>
                </div>
            </div>
            <a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="#">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 text-sm font-medium">Login</span>
            </a>
        </div>


    </nav>



 <!-- Category Start -->

    <section class="text-gray-400 bg-gray-900 body-font px-2 py-2 flex-col pl-80 pr-100">
  <div class="container mx-auto flex py-2 px-5 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text3xl text-3xl mb-4 font-medium text-white">Viking wolf
      </h1>
      <p class="mb-8 leading-relaxed">Thale (17) has just moved with her parents to a small town after her mother has a new job in the local police. After a student is killed brutally at a party Thale attends, she becomes a key witness. Was the killer an animal? A wolf?</p>
      <div class="flex  justify-center ">
        <button class="ml-3 inline-flex  px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400  hover:bg-yellow-300">Horror</button>
        <button class="ml-4 inline-flex px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400  hover:bg-yellow-300">Thriller</button>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center  mr-4 rounded-xl block h-80" alt="hero" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2023/02/viking-wolf-poster.jpeg?q=50&fit=contain&w=1140&h=&dpr=1.5">
    </div>
  </div>
</section>
  <!-- Category L -->
<section class="px-6 py-8 flex-col pl-80 pr-100">
      
        <header class="  mx-auto mt-10 ">
        <section class="flex flex-wrap justify-between  mx-auto mt-10 ">
<div class="w-full sm:w-1/2 md:w-1/6 p-4 ">
        <select class=  " flex-1 mt-4 mr-4 appearance-none border-none bg-transparent py-2 pl-3 pr-9  font-semibold  px-4 text-1.5xl font-medium text-white  hover:text-yellow-300">
                        <option value="category" >MOVIES </option>
                        <option value="personal">Movies </option>
                        <option value="business">Premieres </option>
                    </select>

                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path>
                            <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
            </div>

             <!--  Movies -->
             <div class="w-full sm:w-1/2 md:w-1/6 p-4 ">
        <select class="   mt-4 mr-4 appearance-none border-none bg-transparent py-2 pl-3 pr-9  font-semibold  px-4 text-1.5xl font-medium text-white  hover:text-yellow-300">
                     <option value="category" >SERIES</option>
                     <option value="action">Series</option>
                     <option value="anime">Episodes</option>
                    
                 </select>

                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div>

                <!--  Category -->
                <div class="w-full sm:w-1/2 md:w-1/6 p-4 ">
        <select class="   mt-4 mr-4 appearance-none border-none bg-transparent py-2 pl-3 pr-9  font-semibold  px-4 text-1.5xl font-medium text-white  hover:text-yellow-300">
                        <option value="category">GENRE</option>
                        <option value="action">Action</option>
                        <option value="anime">Anime</option>
                        <option value="adventure">Adventure</option>
                        <option value="family">Family</option>
                        <option value="history">History</option>
                        <option value="comedy">Comedy</option>
                        <option value="romantic">Romantic</option>
                        <option value="mystery">Mystery</option>
                        <option value="crime">Crime</option>
                        <option value="documentary">Documentary</option>
                        <option value="romantic">Romantic </option>
                        <option value="sci-fi">Sci-fi</option>
                    </select>

                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/6 p-4  ">
        <select class= " mt-4 mr-4 appearance-none border-none bg-transparent py-2 pl-3 pr-9  font-semibold  px-4 text-1.5xl font-medium text-white  hover:text-yellow-300">
                        <option value="category" disabled selected>YEAR
                        </option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option> 
                        <option value="2020">2020</option> 
                        <option value="2019">2019</option> 
                        <option value="2018">2018</option> 
                        <option value="2017">2017</option> 
                        <option value="2016">2016</option> 
                     </select>

                     <svg class="transform -rotate-90 absolute pointer-events-none " style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div>

                <!-- Top -->
                <div class="w-full sm:w-1/2 md:w-1/6 p-4 ">
        <select class="  mt-4 mr-4 appearance-none border-none bg-transparent py-2 pl-3 pr-9  font-semibold  px-4 text-1.5xl font-medium text-white  hover:text-yellow-300">
                        </option>
                        <option value="2023">A-Z</option>
                        <option value="2022">A</option>
                        <option value="2021">B</option> 
                        <option value="2020">c</option> 
                        <option value="2019">D</option> 
                     </select>

                     <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div>
               
                <!-- Year -->
               
                
             </section>
            </header> 
  
           
           
            <!-- List movies -->

    <div class=" py-8 pb-5 lg:grid lg:grid-cols-3  ">
    <article
    class="  border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    
                    <div class="py-6 px-5">
                           
                        <div class="hover:scale-105 transition-all duration-400 mt-8 flex flex-col justify-between">
                             <div class="space-x-2">
                             <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200">
                               <img alt="Placeholder" class="block h-auto w-full " src="https://m.media-amazon.com/images/M/MV5BOWQzMDc5OTMtMjFiMy00M2I3LWIyZWMtODM4NTRhMGI2ZTRkXkEyXkFqcGdeQXVyNDAxNzcyNw@@._V1_FMjpg_UX1000_.jpg">
                             </a>
                             <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg">
                                   <a class="no-underline hover:underline text-gray-200" href="#">
                                      Troll
                                   </a>
                                </h1>
                                <div class="flex items-center text-sm">
                              <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                              <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            
                                <p class="ml-2 text-sm font-bold text-white-900 text-white">5.00</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                               <a href="#" class="text-sm font-medium text-white-900 underline hover:no-underline text-white">89 reviews</a>
                               </div>
                           </header>
                         </article>
                         </div>   
                        </div>
                    </div>
                </article>

     
                <article
                    class="border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    
                    <div class="py-6 px-5">
                           
                        <div class="hover:scale-105 transition-all duration-400 mt-8 flex flex-col justify-between">
                             <div class="space-x-2">
                             <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200">
                               <img alt="Placeholder" class="block h-auto w-full" src="https://resizing.flixster.com/sIIIT-HMVARKZnPDufuE5g9VasE=/ems.cHJkLWVtcy1hc3NldHMvdHZzZWFzb24vODg2NDIxYjAtMWM0My00OTFkLWJmNTQtODZmY2QzYjkyMTkzLmpwZw==">
                             </a>
                             <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg">
                                   <a class="no-underline hover:underline text-gray-200" href="#">
                                      You
                                   </a>
                                </h1>
                                <div class="flex items-center text-sm">
                              <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                              <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                              <p class="ml-2 text-sm font-bold text-white-900 text-white">6.5</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                               <a href="#" class="text-sm font-medium text-white-900 underline hover:no-underline text-white">73 reviews</a>
                               </div>
                           </header>
                         </article>
                         </div>   
                        </div>
                    </div>
                </article>


                <article
                class="border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    
                    <div class="py-6 px-5">
                           
                        <div class="hover:scale-105 transition-all duration-400 mt-8 flex flex-col justify-between">
                             <div class="space-x-2">
                             <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200">
                               <img alt="Placeholder" class="block h-auto w-full" src="https://m.media-amazon.com/images/M/MV5BYWQ2NzQ1NjktMzNkNS00MGY1LTgwMmMtYTllYTI5YzNmMmE0XkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_.jpg">
                             </a>
                             <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg">
                                   <a class="no-underline hover:underline text-gray-200" href="#">
                                   No Time to Die
                                   </a>
                                </h1>
                                <div class="flex items-center text-sm">
                              <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <p class="ml-2 text-sm font-bold text-white-900 text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                               <a href="#" class="text-sm font-medium text-white-900 underline hover:no-underline text-white">56 reviews</a>
                               </div>
                           </header>
                         </article>
                         </div>   
                            </div>
                          </div>
                     </article>
                 </div>


            <!-- List movies -->                 
            <div class="  mb-5 lg:grid lg:grid-cols-3  ">
               <article 
               class="border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    
                    <div class="py-6 px-5">
                           
                        <div class="hover:scale-105 transition-all duration-400 mt-8 flex flex-col justify-between">
                      <div class="space-x-2">
                         <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200">
                             <img alt="Placeholder" class="block h-auto w-full" src="https://m.media-amazon.com/images/M/MV5BMjExMTEzODkyN15BMl5BanBnXkFtZTcwNTU4NTc4OQ@@._V1_.jpg">
                             <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg">
                                   <a class="no-underline hover:underline text-gray-200" href="#">
                                   12 Years a Slave
                                   </a>
                                </h1>
                                <div class="flex items-center text-sm">
                              <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <p class="ml-2 text-sm font-bold text-white-900 text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                               <a href="#" class="text-sm font-medium text-white-900 underline hover:no-underline text-white">73 reviews</a>
                               </div>
                           </header>
                          </article>
                         </div>   
                        </div>
                    </div>
                </article>

     
                <article
                    class="border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    
                    <div class="py-6 px-5">
                           
                        <div class="hover:scale-105 transition-all duration-400 mt-8 flex flex-col justify-between">
                             <div class="space-x-2">
                             <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200">
                               <img alt="Placeholder" class="block h-auto w-full" src="https://m.media-amazon.com/images/M/MV5BNTFkZjdjN2QtOGE5MS00ZTgzLTgxZjAtYzkyZWQ5MjEzYmZjXkEyXkFqcGdeQXVyMTM0NTUzNDIy._V1_.jpg">
                             </a>
                             <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg">
                                   <a class="no-underline hover:underline text-gray-200" href="#">
                                      Venom
                                   </a>
                                </h1>
                                <div class="flex items-center text-sm">
                              <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                              <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                              <p class="ml-2 text-sm font-bold text-white-900 text-white">7.00</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                               <a href="#" class="text-sm font-medium text-white-900 underline hover:no-underline text-white">98 reviews</a>
                               </div>
                           </header>
                         </article>
                         </div>   
                        </div>
                    </div>
                </article>


                <article
                     class="border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    
                    <div class="py-6 px-5">
                           
                        <div class="hover:scale-105 transition-all duration-400 mt-8 flex flex-col justify-between">
                             <div class="space-x-2">
                             <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200">
                               <img alt="Placeholder" class="block h-auto w-full" src="https://m.media-amazon.com/images/M/MV5BZDc4MzVkNzYtZTRiZC00ODYwLWJjZmMtMDIyNjQ1M2M1OGM2XkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_FMjpg_UX1000_.jpg">
                             </a>
                             <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg">
                                   <a class="no-underline hover:underline text-gray-200" href="#">
                                      Planet
                                   </a>
                                </h1>
                                <div class="flex items-center text-sm">
                              <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                              <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                              <p class="ml-2 text-sm font-bold text-white-900 text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                               <a href="#" class="text-sm font-medium text-white-900 underline hover:no-underline text-white">58 reviews</a>
                               </div>
                           </header>
                         </article>
                         </div>   
                            </div>
                          </div>
                     </article>
                 </div>




                  <!-- Footer -->   

<div class=" flex justify-center "> 
    
<!-- Previous Button -->
<a href="#" class="inline-flex items-center px-4 py-2 mr-3 text-sm text-sm font-medium text-gray-900 bg-yellow-400 rounded-lg hover:bg-yellow-300">
  <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
  Previous
</a>
<a href="#" class="inline-flex items-center px-4 py-2 mr-3 text-sm text-sm font-medium text-gray-900 bg-yellow-400 rounded-lg hover:bg-yellow-300">
  Next
  <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</a>

   
 </div>                         

<footer class=" rounded-xl text-center py-10 px-5 mt-16">
    <h1 class="mb-4 text-xl font-extrabold text-white-900 text-white md:text-2xl lg:text-x"><span class="text-transparent bg-clip-text bg-yellow-400 rounded-full hover:bg-yellow-300">Chas-movies</span> The best quality </h1>
        <p class="text-lg font-normal text-gray-500 lg:text-x dark:text-gray-400">Here at Chas-movies we focus on good quality, with different languages and free for the public.</p>
          <div class="mt-10">
            <div class=" relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                <form method="POST" action="#" class="lg:flex text-sm">
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <input id="email" type="text" placeholder="Your email address"class="lg:bg-transparent border-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                    </div>
                    <button type="submit" class=" transition-colors duration-300 bg-yellow-400 hover:bg-yellow-300 mt-4 lg:mt-0 lg:ml-3 rounded-full  font-medium text-gray-900 bg uppercase py-3 px-8"
                       >Subscribe
                     </button>
                </form>
            </div>
          </div>
       
      <div class=" mr-10 pt-5 md:flex md:justify-between">
         <div class=" md:mb-0">
             <a href="https://flowbite.com/" class="flex items-center">
                <img src="https://chasacademy.se/wp-content/uploads/2020/12/ca-emblem-white.svg" class="h-9 mr-3 bg-black" alt="Chas-movies Logo" />
                <span class="self-center text-1xl font-semibold whitespace-nowrap text-white">Chas-movies</span>
             </a>
         </div>
       
    <div class=" grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
       <div>
          <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
            <ul class="text-gray-600 dark:text-gray-400">
                <li class="mb-4">
                  <a href="https://flowbite.com/" class="hover:underline">Chas-movies</a>
                </li>
                <li>
                   <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                </li>
             </ul>
        </div>
        <div>
           <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
              <ul class="text-gray-600 dark:text-gray-400">
                <li class="mb-4">
                  <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                </li>
                <li>
                   <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                </li>
              </ul>
         </div>
      <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                     <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
   
   
    <hr class="my-1 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
       <div class="sm:flex sm:items-center sm:justify-between">
           <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Chas-movies</a>. All Rights Reserved.
           </span>
          <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
             <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Facebook page</span>
             </a>
             <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Instagram page</span>
             </a>
             <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                <span class="sr-only">Twitter page</span>
             </a>
             <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                <span class="sr-only">GitHub account</span>
             </a>
             <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Dribbbel account</span>
             </a>
           </div>
         </div>
      </footer>
    </section>
  </body>
</html>