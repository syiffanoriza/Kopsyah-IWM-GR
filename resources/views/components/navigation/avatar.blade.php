<!-- TOMBOL DROPDOWN -->
<button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" data-dropdown-trigger="hover" class="flex items-center text-sm font-medium text-gray-900 rounded-full transition duration-200 group hover:text-primary-600 md:me-0 " type="button">
    <span class="sr-only">Open user menu</span>
    <svg class="w-2.5 h-2.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg>
    <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full">
        <span class="font-semibold">{{$letters}}</span>
    </div>
</button>
    
    <!-- KONTEN DROPDOWN -->
    <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
          <div class="font-semibold cursor-default">{{$username}}</div>
          <div class="truncate cursor-default text-primary-900">{{Auth::user()->user_id}}</div>
        </div>
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
          <li>
            <a href="{{route('user.dashboard')}}" class="block px-4 py-2 hover:bg-primary-900 hover:text-gray-50">Dashboard</a>
          </li>
          <li>
            <a href="{{route('user.pengaturan')}}" class="block px-4 py-2 hover:bg-primary-900 hover:text-gray-50">Pengaturan</a>
          </li>
        </ul>
        <div class="py-2">
            <button onclick="document.getElementById('logout-form').submit();" type="button" class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-red-600 hover:text-gray-50">Sign out</button>

            <form action="{{ route('logout') }}" id="logout-form" method="POST">
                @csrf
            </form>
        </div>
    </div>
    