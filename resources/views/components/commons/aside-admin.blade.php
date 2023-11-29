 <!-- Header -->
 <div class="fixed bg-gray-500 dark:bg-gray-800 w-full flex items-center justify-between h-14 text-white z-10">
   <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-blue-800 dark:bg-gray-800 border-none ">
     <span class="hidden md:block">{{Auth::user()->nickname}}</span>
   </div>
   <div class="flex justify-between items-center h-14 bg-blue-800 dark:bg-gray-800 header-right">
     <ul class="flex items-center">
       <li>
         <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
       </li>
       <li>
        <form method="POST" action="{{ route('logout') }}" >
          @csrf
          <button type="submit" class="flex items-center mr-4 hover:text-blue-100">
            <span class="inline-flex mr-1">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
            </span>
            Salir
          </button>
        </form>
         
       </li>
     </ul>
   </div>
 </div>
 <!-- ./Header -->

 <!-- Sidebar -->
 <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
   <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
     <ul class="flex flex-col py-4 space-y-1">
       <li class="px-5 hidden md:block">
         <div class="flex flex-row items-center h-8">
           <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
         </div>
       </li>
       <li>
          <x-commons.link-aside text="Home"
          href="{{ route('home.admin') }}" :active="request()->routeIs('home.admin')">
            <x-slot name="icon">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            </x-slot> 
          </x-commons.link-aside>
       </li>
       <li>
          <x-commons.link-aside text="Webs"
          href="{{ route('webs.admin') }}" :active="request()->routeIs('webs.admin')">
            <x-slot name="icon">
              <svg class="w-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 002.25 2.25h13.5A2.25 2.25 0 0021 18V8.25m-18 0V6a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6zM7.5 6h.008v.008H7.5V6zm2.25 0h.008v.008H9.75V6z"></path>
              </svg>
            </x-slot> 
          </x-commons.link-aside>
       </li>
       <li>
          <x-commons.link-aside text="Tags"
          href="{{ route('tags.admin') }}" :active="request()->routeIs('tags.admin')">
            <x-slot name="icon">
              <svg class="w-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"></path>
              </svg>
            </x-slot> 
          </x-commons.link-aside>
       </li>
       <li>
          <x-commons.link-aside text="Feedbacks"
          href="{{ route('feedbacks.admin') }}" :active="request()->routeIs('feedbacks.admin')">
            <x-slot name="icon">
              <svg class="w-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
              </svg>
            </x-slot> 
          </x-commons.link-aside>
       </li>
       <li class="px-5 hidden md:block">
         <div class="flex flex-row items-center mt-5 h-8">
           <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
         </div>
       </li>
       <li>
         <a href="{{route('profile', Auth::user()->nickname)}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
           <span class="inline-flex justify-center items-center ml-4">
             <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
           </span>
           <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
         </a>
       </li>
       <li>
         <a href="{{route('profile.show')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
           <span class="inline-flex justify-center items-center ml-4">
             <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
             </svg>
           </span>
           <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
         </a>
       </li>
     </ul>
     <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Repositi @2023</p>
   </div>
 </div>
 <!-- ./Sidebar -->