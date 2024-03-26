<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
 
 <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
       <a href="{{url("/admin/dashboard")}}" class="flex items-center mb-5">
          <img src="{{asset('/assets/logo/logomark.png')}}" class="h-6 me-3 sm:h-7" alt="Logo Kopsyah IWM GR" />
          <span class="self-center text-xl font-semibold whitespace-nowrap">Dasbor Admin</span>
       </a>
       <ul class="space-y-2 font-medium">
          <li>
             <a href="{{url('/admin/dashboard')}}" class="{{ $active === 'Beranda' ? 'flex items-center p-2 text-gray-50 rounded-lg bg-primary-900 group' : 'flex items-center p-2 text-gray-500 rounded-lg transition duration-200 hover:bg-primary-900 hover:text-gray-50 group'}}">
                <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                   <path d="M21.7189 11.2929L19.7165 9.29286L12.7079 2.29279C12.5201 2.10532 12.2655 2 12 2C11.7345 2 11.4799 2.10532 11.2921 2.29279L4.28352 9.29286L2.28106 11.2929C2.09867 11.4815 1.99776 11.7341 2.00004 11.9963C2.00232 12.2585 2.10762 12.5093 2.29325 12.6947C2.47889 12.8801 2.73001 12.9853 2.99253 12.9876C3.25505 12.9899 3.50796 12.8891 3.6968 12.7069L3.99016 12.4139V20C3.99016 20.5304 4.20113 21.0391 4.57666 21.4142C4.9522 21.7893 5.46153 22 5.99262 22H8.99631C9.26185 22 9.51652 21.8946 9.70429 21.7071C9.89205 21.5196 9.99754 21.2652 9.99754 21V16.9999C9.99754 16.7347 10.103 16.4804 10.2908 16.2928C10.4786 16.1053 10.7332 15.9999 10.9988 15.9999H13.0012C13.2668 15.9999 13.5214 16.1053 13.7092 16.2928C13.897 16.4804 14.0025 16.7347 14.0025 16.9999V21C14.0025 21.2652 14.1079 21.5196 14.2957 21.7071C14.4835 21.8946 14.7381 22 15.0037 22H18.0074C18.5385 22 19.0478 21.7893 19.4233 21.4142C19.7989 21.0391 20.0098 20.5304 20.0098 20V12.4139L20.3032 12.7069C20.492 12.8891 20.7449 12.9899 21.0075 12.9876C21.27 12.9853 21.5211 12.8801 21.7067 12.6947C21.8924 12.5093 21.9977 12.2585 22 11.9963C22.0022 11.7341 21.9013 11.4815 21.7189 11.2929Z"/>
                </svg>
                <span class="ms-3">Beranda</span>
             </a>
          </li>
          <li>
             <button type="button" class="{{ $active === 'Produk' ? 'flex items-center p-2 text-gray-50 rounded-lg bg-primary-900 group w-full' : 'flex items-center w-full p-2 text-gray-500 rounded-lg transition duration-200 hover:bg-primary-900 hover:text-gray-50 group'}}" aria-controls="sidebar-dropdown" data-collapse-toggle="sidebar-dropdown">
                <svg class="flex-shrink-0 w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                   <path d="M18.8419 13.9985C19.0708 13.9986 19.2935 13.9277 19.4762 13.7967C19.659 13.6657 19.7918 13.4817 19.8545 13.2726L21.9597 6.27346C22.0043 6.12466 22.012 5.96806 21.9821 5.81596C21.9522 5.66387 21.8856 5.52045 21.7874 5.39697C21.6893 5.2735 21.5623 5.17335 21.4165 5.1044C21.2707 5.03545 21.11 4.99958 20.9471 4.99962H7.02098L6.39467 2.74491C6.3354 2.53141 6.2034 2.34256 6.01927 2.20781C5.83514 2.07306 5.60923 1.99999 5.37679 2H3.05262C2.77345 2 2.50571 2.10534 2.3083 2.29286C2.1109 2.48037 2 2.73469 2 2.99987C2 3.26506 2.1109 3.51938 2.3083 3.70689C2.50571 3.89441 2.77345 3.99975 3.05262 3.99975H4.56628L5.19785 6.25447V6.26447V6.27346L7.30308 13.2726L8.08833 16.2582C7.56848 16.4772 7.12052 16.8254 6.79175 17.2661C6.46297 17.7069 6.26559 18.2237 6.22044 18.7622C6.17529 19.3007 6.28404 19.8407 6.53523 20.3253C6.78641 20.81 7.17069 21.2211 7.6475 21.5155C8.12431 21.8099 8.67595 21.9764 9.24417 21.9977C9.81239 22.0189 10.3761 21.894 10.8758 21.6362C11.3755 21.3783 11.7926 20.997 12.0831 20.5327C12.3736 20.0683 12.5266 19.538 12.5262 18.9979C12.5227 18.6565 12.4572 18.3182 12.3325 17.998H14.8251C14.7004 18.3182 14.6349 18.6565 14.6314 18.9979C14.6314 19.5911 14.8166 20.1711 15.1636 20.6644C15.5106 21.1577 16.0038 21.5421 16.5808 21.7692C17.1578 21.9962 17.7928 22.0556 18.4053 21.9399C19.0179 21.8241 19.5806 21.5384 20.0222 21.1189C20.4638 20.6994 20.7646 20.1649 20.8864 19.5831C21.0083 19.0012 20.9457 18.3981 20.7067 17.85C20.4677 17.3019 20.063 16.8334 19.5437 16.5038C19.0243 16.1742 18.4138 15.9982 17.7892 15.9982H10.1894L9.66305 13.9985H18.8419ZM10.4209 18.9979C10.4209 19.1956 10.3592 19.3889 10.2435 19.5534C10.1279 19.7178 9.96348 19.846 9.77114 19.9216C9.57879 19.9973 9.36715 20.0171 9.16296 19.9785C8.95877 19.94 8.77121 19.8447 8.624 19.7049C8.47679 19.5651 8.37654 19.3869 8.33593 19.1929C8.29531 18.999 8.31615 18.7979 8.39583 18.6152C8.4755 18.4325 8.61041 18.2764 8.78351 18.1665C8.95662 18.0566 9.16013 17.998 9.36832 17.998C9.64749 17.998 9.91522 18.1033 10.1126 18.2909C10.31 18.4784 10.4209 18.7327 10.4209 18.9979ZM17.7892 19.9977C17.5811 19.9977 17.3775 19.9391 17.2044 19.8292C17.0313 19.7194 16.8964 19.5632 16.8168 19.3805C16.7371 19.1978 16.7162 18.9968 16.7569 18.8028C16.7975 18.6088 16.8977 18.4307 17.0449 18.2909C17.1921 18.151 17.3797 18.0558 17.5839 18.0172C17.7881 17.9786 17.9997 17.9984 18.1921 18.0741C18.3844 18.1498 18.5488 18.2779 18.6645 18.4424C18.7801 18.6068 18.8419 18.8001 18.8419 18.9979C18.8419 19.2631 18.731 19.5174 18.5336 19.7049C18.3362 19.8924 18.0684 19.9977 17.7892 19.9977Z"/>
                </svg>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Produk</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
          </button>
          <ul id="sidebar-dropdown" class="hidden py-2 space-y-2">
                <li>
                   <a href="{{url('/admin/dashboard/produk')}}" class="flex items-center p-2 text-gray-500 rounded-lg transition duration-200 hover:bg-primary-900 hover:text-gray-50 group pl-11">Sembako</a>
                </li>
                <li>
                   <a href="{{url('/admin/dashboard/produk')}}" class="flex items-center p-2 text-gray-500 rounded-lg transition duration-200 hover:bg-primary-900 hover:text-gray-50 group pl-11">Alat Mandi</a>
                </li>
                <li>
                   <a href="{{url('/admin/dashboard/produk')}}" class="flex items-center p-2 text-gray-500 rounded-lg transition duration-200 hover:bg-primary-900 hover:text-gray-50 group pl-11">Kebersihan</a>
                </li>
                <li>
                   <a href="{{url('/admin/dashboard/produk')}}" class="flex items-center p-2 text-gray-500 rounded-lg transition duration-200 hover:bg-primary-900 hover:text-gray-50 group pl-11">Kesehatan</a>
                </li>
          </ul>
          </li>
          <li>
             <a href="#" class="{{ $active === 'Testimoni' ? 'flex items-center p-2 text-gray-50 rounded-lg bg-primary-900 group' : 'flex items-center p-2 text-gray-500 rounded-lg transition duration-200 hover:bg-primary-900 hover:text-gray-50 group'}}">
                <svg class="flex-shrink-0 w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                   <path d="M18.977 3.783C18.9276 3.56077 18.8039 3.36205 18.6262 3.21968C18.4486 3.07731 18.2277 2.99981 18 3H6C5.77234 2.99981 5.55144 3.07731 5.37379 3.21968C5.19615 3.36205 5.0724 3.56077 5.023 3.783L3.2 12H7.439C8.0217 12.0003 8.59162 12.1708 9.07874 12.4906C9.56586 12.8104 9.94897 13.2655 10.181 13.8C10.3329 14.1567 10.5863 14.4609 10.9097 14.6747C11.2331 14.8886 11.6123 15.0026 12 15.0026C12.3877 15.0026 12.7669 14.8886 13.0903 14.6747C13.4137 14.4609 13.6671 14.1567 13.819 13.8C14.051 13.2655 14.4341 12.8104 14.9213 12.4906C15.4084 12.1708 15.9783 12.0003 16.561 12H20.8L18.977 3.783ZM9 5H15C15.2652 5 15.5196 5.10536 15.7071 5.29289C15.8946 5.48043 16 5.73478 16 6C16 6.26522 15.8946 6.51957 15.7071 6.70711C15.5196 6.89464 15.2652 7 15 7H9C8.73478 7 8.48043 6.89464 8.29289 6.70711C8.10536 6.51957 8 6.26522 8 6C8 5.73478 8.10536 5.48043 8.29289 5.29289C8.48043 5.10536 8.73478 5 9 5ZM16 10H8C7.73478 10 7.48043 9.89464 7.29289 9.70711C7.10536 9.51957 7 9.26522 7 9C7 8.73478 7.10536 8.48043 7.29289 8.29289C7.48043 8.10536 7.73478 8 8 8H16C16.2652 8 16.5196 8.10536 16.7071 8.29289C16.8946 8.48043 17 8.73478 17 9C17 9.26522 16.8946 9.51957 16.7071 9.70711C16.5196 9.89464 16.2652 10 16 10Z"/>
                   <path d="M4 21H20C20.2652 21 20.5196 20.8946 20.7071 20.7071C20.8946 20.5196 21 20.2652 21 20V14H16.561C16.3676 14.0005 16.1786 14.0576 16.0173 14.1642C15.8559 14.2708 15.7293 14.4223 15.653 14.6C15.3454 15.3136 14.8355 15.9214 14.1863 16.3485C13.5371 16.7756 12.7771 17.0032 12 17.0032C11.2229 17.0032 10.4629 16.7756 9.8137 16.3485C9.16452 15.9214 8.65463 15.3136 8.347 14.6C8.2707 14.4223 8.14408 14.2708 7.98274 14.1642C7.82139 14.0576 7.63238 14.0005 7.439 14H3V20C3 20.2652 3.10536 20.5196 3.29289 20.7071C3.48043 20.8946 3.73478 21 4 21Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Testimoni</span>
             </a>
          </li>
          <li>
             <a href="#" class="{{ $active === 'Struktur' ? 'flex items-center p-2 text-gray-50 rounded-lg bg-primary-900 group' : 'flex items-center p-2 text-gray-500 rounded-lg transition duration-200 hover:bg-primary-900 hover:text-gray-50 group'}}">
                <svg class="flex-shrink-0 w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                   <path d="M3.57474 7.96623L11.5131 11.996C11.6645 12.0722 11.8326 12.112 12.0032 12.112C12.1738 12.112 12.3418 12.0722 12.4932 11.996L20.4316 7.96623C20.6028 7.87932 20.7462 7.7486 20.8463 7.58825C20.9464 7.4279 20.9993 7.24403 20.9993 7.05659C20.9993 6.86915 20.9464 6.68528 20.8463 6.52493C20.7462 6.36458 20.6028 6.23386 20.4316 6.14695L12.4932 2.11721C12.3417 2.04022 12.1732 2 12.0021 2C11.8311 2 11.6625 2.04022 11.511 2.11721L3.57262 6.14695C3.40141 6.23386 3.258 6.36458 3.15793 6.52493C3.05786 6.68528 3.00496 6.86915 3.00496 7.05659C3.00496 7.24403 3.05786 7.4279 3.15793 7.58825C3.258 7.7486 3.40141 7.87932 3.57262 7.96623H3.57474Z"/>
                   <path d="M19.9416 10.1664C19.6608 10.1664 19.3916 10.2746 19.1931 10.4671C18.9946 10.6597 18.8831 10.9208 18.8831 11.1931V11.3789L12.0032 14.8697L5.12325 11.3789V11.1931C5.12325 10.9208 5.01173 10.6597 4.81323 10.4671C4.61474 10.2746 4.34552 10.1664 4.0648 10.1664C3.78408 10.1664 3.51486 10.2746 3.31636 10.4671C3.11786 10.6597 3.00635 10.9208 3.00635 11.1931V12.0001C3.00632 12.1875 3.05917 12.3713 3.15917 12.5317C3.25918 12.692 3.40253 12.8228 3.57368 12.9097L11.5121 16.9395C11.6636 17.0164 11.8321 17.0567 12.0032 17.0567C12.1742 17.0567 12.3428 17.0164 12.4943 16.9395L20.4327 12.9097C20.6038 12.8228 20.7472 12.692 20.8472 12.5317C20.9472 12.3713 21 12.1875 21 12.0001V11.1931C21 10.9208 20.8885 10.6597 20.69 10.4671C20.4915 10.2746 20.2223 10.1664 19.9416 10.1664Z"/>
                   <path d="M19.9352 15.1099C19.6545 15.1099 19.3853 15.2181 19.1868 15.4106C18.9883 15.6032 18.8768 15.8643 18.8768 16.1366V16.3224L11.9968 19.8131L5.1169 16.3224V16.1366C5.1169 15.8643 5.00539 15.6032 4.80689 15.4106C4.60839 15.2181 4.33917 15.1099 4.05845 15.1099C3.77773 15.1099 3.50851 15.2181 3.31001 15.4106C3.11152 15.6032 3 15.8643 3 16.1366V16.9446C2.99997 17.132 3.05282 17.3158 3.15283 17.4762C3.25283 17.6365 3.39618 17.7673 3.56733 17.8542L11.5057 21.884C11.6575 21.9602 11.8259 22 11.9968 22C12.1677 22 12.3362 21.9602 12.4879 21.884L20.4263 17.8542C20.5975 17.7673 20.7408 17.6365 20.8408 17.4762C20.9408 17.3158 20.9937 17.132 20.9937 16.9446V16.1366C20.9937 15.8643 20.8821 15.6032 20.6836 15.4106C20.4851 15.2181 20.2159 15.1099 19.9352 15.1099Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Struktur</span>
             </a>
          </li>
          <hr>
          <li>
             <a href="#" class="{{ $active === 'Logout' ? 'flex items-center p-2 text-gray-50 rounded-lg bg-primary-900 group' : 'flex items-center p-2 text-gray-500 rounded-lg transition duration-200 hover:bg-primary-900 hover:text-gray-50 group'}}">
                <svg class="flex-shrink-0 w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                   <path d="M8.5 11.4737C10.9853 11.4737 13 9.35293 13 6.73684C13 4.12076 10.9853 2 8.5 2C6.01472 2 4 4.12076 4 6.73684C4 9.35293 6.01472 11.4737 8.5 11.4737Z"/>
                   <path d="M10 12.5263H7C5.67441 12.528 4.40356 13.083 3.46622 14.0697C2.52888 15.0564 2.00159 16.3941 2 17.7895V20.9474C2 21.2265 2.10536 21.4943 2.29289 21.6917C2.48043 21.8891 2.73478 22 3 22H14C14.2652 22 14.5196 21.8891 14.7071 21.6917C14.8946 21.4943 15 21.2265 15 20.9474V17.7895C14.9984 16.3941 14.4711 15.0564 13.5338 14.0697C12.5964 13.083 11.3256 12.528 10 12.5263Z"/>
                   <path d="M21 11.4737H15C14.7348 11.4737 14.4804 11.3628 14.2929 11.1654C14.1054 10.968 14 10.7002 14 10.4211C14 10.1419 14.1054 9.87414 14.2929 9.67673C14.4804 9.47932 14.7348 9.36842 15 9.36842H21C21.2652 9.36842 21.5196 9.47932 21.7071 9.67673C21.8946 9.87414 22 10.1419 22 10.4211C22 10.7002 21.8946 10.968 21.7071 11.1654C21.5196 11.3628 21.2652 11.4737 21 11.4737Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Keluar Akun</span>
             </a>
          </li>
       </ul>
    </div>
 </aside>