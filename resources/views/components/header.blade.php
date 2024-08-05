
<header>
    @php
        $menuItems = [
            ['lable'=>'Home', 'path'=>'/'],
            ['lable'=>'Product', 'path'=>'/product'],
            ['lable'=>'Profile', 'path'=>'/profile'],
        ];
    @endphp
    <nav class="bg-white  px-4 lg:px-6 pb-2.5  fxed top-0 border-b-[1.5px] border-black h-[61px] overflow-hidden">
        <div class="flex lg:justify-evenly justify-between items-center mx-auto max-w-screen-xl min-w-[340px] gap-2">
            <a href="#" class="flex items-center gap-2">
                <svg
                width="30"
                height="56"
                viewBox="0 0 50 56"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M23.2732 0.2528C20.8078 1.18964 2.12023 12.2346 1.08477 13.3686C0 14.552 0 14.7493 0 27.7665C0 39.6496 0.0986153 41.1289 0.83823 42.0164C2.12023 43.5449 23.2239 55.4774 24.6538 55.5267C25.9358 55.576 46.1027 44.3832 48.2229 42.4602C49.3077 41.474 49.3077 41.3261 49.3077 27.8158C49.3077 14.3055 49.3077 14.1576 48.2229 13.1714C46.6451 11.7415 27.1192 0.450027 25.64 0.104874C24.9497 -0.0923538 23.9142 0.00625992 23.2732 0.2528ZM20.2161 21.8989C20.2161 22.4906 18.9835 23.8219 17.0111 25.3997C15.2361 26.7803 13.8061 27.9637 13.8061 28.0623C13.8061 28.1116 15.2361 29.0978 16.9618 30.2319C18.6876 31.3659 20.2655 32.6479 20.4134 33.0917C20.8078 34.0286 19.871 35.2119 18.8355 35.2119C17.8001 35.2119 9.0233 29.3936 8.67815 28.5061C8.333 27.6186 9.36846 26.5338 14.3485 22.885C17.6521 20.4196 18.4904 20.0252 19.2793 20.4196C19.7724 20.7155 20.2161 21.3565 20.2161 21.8989ZM25.6893 27.6679C23.4211 34.9161 23.0267 35.7543 22.1391 34.8668C21.7447 34.4723 22.1391 32.6479 23.6677 27.9637C26.2317 20.321 26.5275 19.6307 27.2671 20.3703C27.6123 20.7155 27.1685 22.7864 25.6893 27.6679ZM36.0932 23.2302C40.6788 26.2379 41.3198 27.0269 40.3337 28.1609C39.1503 29.5909 31.6555 35.2119 30.9159 35.2119C29.9298 35.2119 28.9436 33.8806 29.2394 33.0424C29.3874 32.6479 30.9652 31.218 32.7403 29.8867L35.9946 27.4706L32.5431 25.1532C30.6201 23.9205 29.0915 22.7371 29.0915 22.5892C29.0915 21.7509 30.2256 20.4196 30.9159 20.4196C31.3597 20.4196 33.6771 21.7016 36.0932 23.2302Z"
                  fill="black"
                ></path>
              </svg>
                <span class="self-center text-xl font-semibold whitespace-nowrap ">DevUI</span>
            </a>
            <div class=" md:flex pl-4 pr-3 py-2 rounded-md border border-black hidden overflow-hidden  font-[sans-serif]" id="search-input">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px"
                  class="fill-gray-600 mr-3 rotate-90">
                  <path
                    d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                  </path>
                </svg>
                <input type="text" placeholder="Search " class="w-full outline-none bg-transparent text-gray-600 text-sm" />
                <span id="close-icon" class="md:hidden cursor-pointer font-thin">x</span>
            </div>
            
               
            <div class="flex gap-3 items-center lg:order-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="20px"
                    class="fill-gray-600 mr-3 rotate-90 md:hidden"
                    id="search-icon">
                    <path
                    d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                    </path>
                </svg>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-800 rounded-lg lg:hidden hover:bg-gray-100  dark:text-gray-800 dark:hover:bg-gray-100 " aria-controls="mobile-menu-2" aria-expanded="false" id="openMenue">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between gap-4 items-center w-full lg:flex lg:w-auto lg:order-1">
                
                <ul class="flex font-medium flex-row lg:space-x-8 lg:mt-0">
                    
                    @foreach ($menuItems as $item )
                    <li>
                        <a href={{$item['path']}} class="block py-2 pr-4 pl-3 text-black rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 " aria-current="page">{{$item['lable']}}</a>
                    </li>
                    @endforeach
                    <li class="flex justify-center items-center">
                        <a href='/cart' class=" py-2 pr-4 pl-3 text-black  rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 " aria-current="page">
                            <svg 
                            class="w-5"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                        </a>
                    </li>
                </ul>
                @if (!Auth::check())
                <a href="{{route('login')}}" class=" font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 border-[1px] border-black text-white bg-black ">Log in</a>
                @endif
                @if (Auth::user()->role == 'Student')
                <a href="#" class=" font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 border-[1px] border-black text-white bg-black ">Verify as a student</a>
                @endif
                @if (Auth::user()->role == 'Teacher')
                <a href="#" class=" font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 border-[1px] border-black text-white bg-black ">Verify as a teacher</a>
                @endif

                
            </div>
        </div>
    </nav>
    <div id="mobile-menu" class="hidden lg:hidden fixed top-[60px] left-0 right-0 w-full  z-50 py-2 bg-black/[0.8] min-w-[412px]">
        <div class=" gap-4 w-full flex justify-center items-center lg:w-auto lg:order-1">
                
            <ul class="flex font-medium flex-row lg:space-x-8 lg:mt-0">
                
                @foreach ($menuItems as $item )
                <li>
                    <a href={{$item['path']}} class="block py-2 pr-4 pl-3 text-gray-200 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 " aria-current="page">{{$item['lable']}}</a>
                </li>
                @endforeach
                <li class="flex justify-center items-center">
                    <a href='/cart' class=" py-2 pr-4 pl-3 text-gray-200  rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 " aria-current="page">
                        <svg 
                        class="w-5"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                    </a>
                </li>
            </ul>
            @if (!Auth::check())
            <a href="{{route('login')}}" class=" font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 border-[1px] border-gray-200 text-black/[0.8] bg-gray-200 ">Log in</a>
            @endif
            
        </div>
    </div>
   
    <script>
        document.getElementById('openMenue').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
        document.getElementById('search-icon').addEventListener('click', () => {
            document.getElementById('search-input').classList.remove('hidden');
            document.getElementById('search-input').classList.add('flex');
            document.getElementById('close-icon').classList.remove('block');
            document.getElementById('search-icon').classList.add('hidden');
        });
        document.getElementById('close-icon').addEventListener('click', () => {
            document.getElementById('search-input').classList.remove('flex');
            document.getElementById('search-input').classList.add('hidden');
            document.getElementById('search-icon').classList.remove('hidden');
            document.getElementById('close-icon').classList.add('block');
        });
    </script>
    
</header>