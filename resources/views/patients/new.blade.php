<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="w-full h-full p-4 m-8 overflow-y-auto">


        <form id="add-form" action="{{ url('/patients/add').'/'.Auth::user()->id }}" method="Post"  >
            @csrf
            @method('POST')


                <div class="flex items-center mb-5">
                    <label for="name" class="inline-block mr-6 text-left
                                 font-bold text-gray-600 w-1/6">Όνομα: </label>
                    <input type="text" id="fname" name="fname" placeholder="FirstName"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                </div>

                <div class="flex items-center mb-5">
                    <label for="name" class="inline-block mr-6 text-left
                                 font-bold text-gray-600 w-1/6">Επίθετο: </label>
                    <input type="text" id="lname" name="lname" placeholder="LastName"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                </div>
                <div class="flex items-center mb-5">
                    <label for="name" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Αρ. Ταυτότητας: </label>
                    <input type="text" id="identification" name="identification" placeholder="Αρ. Ταυτότητας"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                </div>

                <div class="flex items-center mb-5">
                    <label for="email" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Φύλο: </label>

                    <select name="sex" id="sex"  class="border-0 p-2 text-black cursor-pointer drop-shadow-lg w-52 duration-300 ">
                        >
                        <option value="Male">Άνδρας</option>
                        <option value="Female">Γυναίκα</option>
                        <option value="Other">Άλλο</option>
                    </select>


                </div>

                <div class="flex items-center mb-5">
                    <label for="name" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Ημ. Γέννησης: </label>

                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input datepicker id="dateofbirth" name="dateofbirth" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ημ. Γέννησης:">
                    </div>

                </div>

                <div class="flex items-center mb-5">
                    <label for="name" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Email: </label>
                    <input type="text" id="email" name="email" placeholder="Email"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                </div>


                <div class="flex items-center mb-5">
                    <label for="name" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Τηλέφωνο 1: </label>
                    <input type="text" id="phone_1" name="phone_1" placeholder="Phone_1"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                </div>

                <div class="flex items-center mb-5">
                    <label for="name" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Τηλέφωνο 2: </label>
                    <input type="text" id="phone_2" name="phone_2" placeholder="Phone_2"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    ">
                </div>




                <div class="flex items-center mb-5">
                    <label for="name" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Σημειώσεις</label>
                    <textarea  id="notes" name="notes" placeholder="Notes"
                               class="flex-1 py-2 border border-gray-400 focus:border-blue-400 text-gray-600 placeholder-gray-400 outline-none"
                               value=""  rows="4" cols="50"></textarea>
                </div>

            <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">


                <div class="flex items-center mb-5 w-full">
                    <div class="flex items-center mb-5 w-2/6">
                        <label for="email" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Διεύθυνση: </label>
                        <input type="text" id="address" name="address" placeholder="Address"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                    </div>

                    <div class="flex items-center mb-5 w-2/6">
                    </div>

                    <div class="flex items-center mb-5 w-2/6 float-right">
                        <label for="town" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Πόλη/Χωριό: </label>
                        <input type="text" id="town" name="town" placeholder="Address"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                    </div>
                </div>

                <div class="flex items-center mb-5 w-full">
                    <div class="flex items-center mb-5 w-2/6">
                        <label for="postal" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Τ.Κ: </label>
                        <input type="text" id="postal" name="postal" placeholder="Address"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                    </div>

                </div>
                <br><br>
                <div class="inline-flex items-center justify-center w-full">
                    <b class="text-center">Στοιχεία Πλησιέστερου Συγγενή</b>
                </div>
                <br><br><br>

                <div class="flex items-center mb-5 w-full">
                    <div class="flex items-center mb-5 w-2/6">
                        <label for="email" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Πλήρες Όνομα: </label>
                        <input type="text" id="relative_name" name="relative_name" placeholder="Πλήρες Όνομα"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                    </div>

                </div>

                <div class="flex items-center mb-5 w-full">
                    <div class="flex items-center mb-5 w-2/6 float-right">
                        <label for="town" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Συγγένεια: </label>
                        <input type="text" id="relativity" name="relativity" placeholder="Συγγένεια"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                    </div>
                    <div class="flex items-center mb-5 w-2/6">
                    </div>


                </div>
                <div class="flex items-center mb-5 w-full">
                    <div class="flex items-center mb-5 w-2/6 float-right">
                        <label for="town" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Τηλέφωνο: </label>
                        <input type="text" id="relative_phone" name="relative_phone" placeholder="Τηλέφωνο"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                    </div>
                </div>





            <button type="submit" class="text-green-500 border border-green-500 hover:bg-green-500 hover:text-white active:bg-green-600 font-bold uppercase px-8 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 float-right">Save</button>
        </form>


    </div>

</x-app-layout>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script>
    $("li:not(#new_client_menu)").removeClass("bg-gray-100 border-double border-4 border-green-500 text-gray-700");
    $("#new_client_menu").addClass("bg-gray-100 border-double border-4 border-green-500 text-blue-500");
    $("#add-button").hover(function(){
        //Check if all inputs are field in the form
        var inputs = document.querySelectorAll('#add-form input');
        var i =0;
        for (const input of inputs)
            if (input.value !== '')
                i++
        if (i < 6) // it is 6 because we have 2 hidden fields and our 4
        {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'You have to add value to all input fields!'
            })
            return false;
        }
        //Add value ton hidden input to get it to db (avatar input text)
        var avatar_val = $("#image").val().replace("C:\\fakepath\\", "");
        $("#avatar").val(avatar_val)

    });
    $("#add_new").click(function(){
        $("#add-form").toggle(1000);
    });
</script>
