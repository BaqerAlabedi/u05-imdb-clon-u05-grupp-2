<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  @vite('resources/css/app.css')
</head>

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
  <div class="flex items-center justify-center h-screen" style="margin-left: 100px;">
    <div class="w-400 mx-auto bg-gray-500 py-40 px-17 md:px-12 lg:px-14 rounded-lg shadow-lg">
      <div class="flex flex-col items-center justify-between">
        <div class="flex-shrink-0 mb-6">
          <img src="https://via.placeholder.com/150" alt="User Profile Image" class="w-32 h-32 rounded-full shadow-lg">
        </div>
        <div class="flex-1 ml-4 text-center md:text-left">
          <h2 class="text-lg font-medium mb-2 text-white">Username</h2>
          <p class="text-gray-300">Member since January 1, 2021</p>
        </div>
      </div>
      <div class="mt-6 grid gap-6 max-w-lg mx-auto lg:grid-cols-3">
        <div class="bg-gray-800 hover:bg-gray-700 rounded-lg p-6 text-center">
          <p class="text-gray-300">Followers</p>
          <p class="text-white font-medium">1,234</p>
        </div>
        <div class="bg-gray-800 hover:bg-gray-700 rounded-lg p-6 text-center">
          <p class="text-gray-300">Following</p>
          <p class="text-white font-medium">567</p>
        </div>
        <div class="bg-gray-800 hover:bg-gray-700 rounded-lg p-6 text-center">
          <p class="text-gray-300">Likes</p>
          <p class="text-white font-medium">8,901</p>
        </div>
      </div>
      <div class="flex items-center justify-center mt-6">
        <button class="bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-full shadow-lg">
          Edit Profile
        </button>
      </div>
    </div>
  </div>



</body>

</html>