<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/icons/skepsi-icon.png">

    <title>Skepsi Patients App</title>
    <script src="https://cdn.tailwindcss.com/"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>

</head>

<body>
<nav class="fixed z-30 w-full bg-gradient-to-r from-white to-lime-800 " >
    <div class="px-6 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button class="p-2 text-gray-600 rounded cursor-pointer lg:hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <a href="#" class="flex items-center text-xl font-bold">
                    <span class="text-blue-800"> <img src="/icons/SKEPSI.png" class="w-1/4"></span>
                </a>

            </div>
            <div class="flex items-center  mt-1 lg:w-64">
                <div class="hidden mr-6 lg:block">

                </div>
                <div>

                </div>

                <div class="relative mt-1 lg:w-64">
                    <span class="mx-1 text-white"><b><i>Hello</i></b> {{ Auth::user()->name }} @if(Auth::user()->admin==1)<br>(Admin) @endif</span>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="pt-12 lg:flex">
    <div class="flex flex-col w-full px-1 py-8 overflow-y-auto border-b lg:border-r lg:h-screen lg:w-64">


        <div class="flex flex-col justify-between mt-6">
            <aside>
                <ul>

                    <li>
                        <a class="flex items-center px-4 py-2 text-gray-700 rounded-md hover:bg-gray-200" id="clients_menu" href="/patients">
                            <img src="/icons/patients.png" width="35">

                            <span class="mx-4 font-medium">All Patients</span>
                        </a>
                    </li>


                    <li>
                        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" id="new_client_menu" href="/patients/new">
                            <img src="/icons/medical-history.png" width="35">

                            <span class="mx-4 font-medium">Add New Patient</span>
                        </a>
                    </li>


                    @if (Auth::user()->admin == 1)

                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" id="no_intern_patients" href="/no_intern_patients">
                                <img src="/icons/users-avatar.png" width="35">

                                <span class="mx-4 font-medium">Patients Without Intern</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" id="new_intern_menu" href="/register">
                                <img src="/icons/newuser.png" width="35">

                                <span class="mx-4 font-medium">Add New Intern</span>
                            </a>
                        </li>

                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" id="all_interns_menu" href="/interns">
                                <img src="/icons/interns.png" width="35">

                                <span class="mx-4 font-medium">All Interns</span>
                            </a>
                        </li>

                    @endif

                    <li>
<br>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" class="bg-red-600 text-white">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();" class="text-white hover:bg-red-400 hover:text-gray-700">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </li>
                </ul>

            </aside>

        </div>
    </div>
    <div class="w-full h-full p-4 m-8 overflow-y-auto ">
        <div class="flex bo items-center justify-center ">
                    {{ $slot }}
        </div>
    </div>
</div>
</body>
</body>

</html>
