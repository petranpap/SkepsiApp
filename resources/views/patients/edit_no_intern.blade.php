<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="w-full h-full p-4 m-8 overflow-y-auto">
        @if(session()->has('status'))

            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-bold"> {{ session()->get('status') }} </p>
                        <p class="text-sm">Successfully.</p>
                    </div>
                </div>
            </div>
            <br>
            <br>
        @endif

        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style=" margin-bottom: 5px; ">
            @isset($patient->fname)
                Patient:  {{ $patient->fname }} {{ $patient->lname }} ID: ({{ $patient->id }})<br>

            @endisset



        </h2>




        <div class="pull-right">

        </div>
        <div class="max-w-full mx-auto p-0">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="pt-5 bg-white border-b border-gray-200">

                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <div class="min-h-screen ">

                            <div class="bg-white p-0 w-full">


                                <form id="update" class="w-full" action="{{ url('update-patient/'.$patient->id).'/'.Auth::user()->id }}" method="Post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    @if(Auth::user()->admin ==1)
                                        <div class="p-4 border border-indigo-400 w-1/4 mt-2 mb-4">
                                            <b>Change the Intern</b>
                                            <br>
                                            <label for="newintern" class="inline-block mr-2 text-left mt-8
                                 font-bold text-gray-600 ">New Intern: </label>

                                            <select name="newintern" id="newintern"  class="border-0 p-2 text-black cursor-pointer drop-shadow-lg w-52 duration-300 ">

                                                @foreach($interns as $intern)
                                                    <option value="{{$intern->id}}">{{$intern->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    @endif
                                    <div class="flex items-center mb-5">
                                        <label for="name" class="inline-block mr-6 text-left
                                 font-bold text-gray-600 w-1/6">Όνομα: </label>
                                        <input required type="text" id="name" name="fname" placeholder="FirstName"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               value="{{ $patient->fname }}">
                                    </div>

                                    <div class="flex items-center mb-5">
                                        <label for="name" class="inline-block mr-6 text-left
                                 font-bold text-gray-600 w-1/6">Επίθετο: </label>
                                        <input required type="text" id="name" name="lname" placeholder="LastName"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               value="{{ $patient->lname }}">
                                    </div>
                                    <div class="flex items-center mb-5">
                                        <label for="name" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Αρ. Ταυτότητας: </label>
                                        <input required type="text" id="identification" name="identification" placeholder="Αρ. Ταυτότητας"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               value="{{ $patient->identification }}">
                                    </div>

                                    <div class="flex items-center mb-5">
                                        <label for="email" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Φύλο: </label>

                                        <select name="sex" id="sex"  class="border-0 p-2 text-black cursor-pointer drop-shadow-lg w-52 duration-300 ">
                                            <option value="Male">Άνδρας</option>
                                            <option value="Female">Γυναίκα</option>
                                            <option value="Other">Άλλο</option>
                                        </select>


                                    </div>

                                    <div class="flex items-center mb-5">
                                        <label for="name" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Ημ. Γέννησης: </label>
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <input required datepicker id="dateofbirth" name="dateofbirth" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ημ. Γέννησης:" value="{{ $patient->dateofbirth }}">

                                    </div>

                                    <div class="flex items-center mb-5">
                                        <label for="name" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Email: </label>
                                        <input required type="text" id="email" name="email" placeholder="Email"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               value="{{ $patient->email }}">
                                    </div>


                                    <div class="flex items-center mb-5">
                                        <label for="name" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Τηλέφωνο 1: </label>
                                        <input required type="text" id="phone_1" name="phone_1" placeholder="Phone_1"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               value="{{ $patient->phone_1 }}">
                                    </div>

                                    <div class="flex items-center mb-5">
                                        <label for="name" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Τηλέφωνο 2: </label>
                                        <input required type="text" id="phone_2" name="phone_2" placeholder="Phone_2"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               value="{{ $patient->phone_2 }}">
                                    </div>




                                    <div class="flex items-center mb-5">
                                        <label for="name" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Σημειώσεις</label>
                                        <textarea  id="notes" name="notes" placeholder="Notes"
                                                   class="flex-1 py-2 border border-gray-400 focus:border-blue-400 text-gray-600 placeholder-gray-400 outline-none"
                                                   value=""  rows="4" cols="50">{{ $patient->notes }}</textarea>
                                    </div>
                                    <div class="inline-flex items-center justify-center w-full">
                                        <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
                                        <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-700 dark:text-gray-300" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/></svg>
                                        </div>
                                    </div>

                                    <div class="flex items-center mb-5 w-full">
                                        <div class="flex items-center mb-5 w-2/6">
                                            <label for="email" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Διεύθυνση: </label>
                                            <input required type="text" id="address" name="address" placeholder="Address"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   value="{{ $patient->address }}">
                                        </div>

                                        <div class="flex items-center mb-5 w-2/6">
                                        </div>

                                        <div class="flex items-center mb-5 w-2/6 float-right">
                                            <label for="town" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Πόλη/Χωριό: </label>
                                            <input required type="text" id="town" name="town" placeholder="Address"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   value="{{ $patient->town }}">
                                        </div>
                                    </div>

                                    <div class="flex items-center mb-5 w-full">
                                        <div class="flex items-center mb-5 w-2/6">
                                            <label for="postal" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Τ.Κ: </label>
                                            <input required type="text" id="postal" name="postal" placeholder="Address"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   value="{{ $patient->postal }}">
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
                                            <input required type="text" id="relative_name" name="relative_name" placeholder="Πλήρες Όνομα"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   value="{{ $patient->relative_name }}">
                                        </div>

                                    </div>

                                    <div class="flex items-center mb-5 w-full">
                                        <div class="flex items-center mb-5 w-2/6 float-right">
                                            <label for="town" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Συγγένεια: </label>
                                            <input required type="text" id="relativity" name="relativity" placeholder="Συγγένεια"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   value="{{ $patient->relativity }}">
                                        </div>
                                        <div class="flex items-center mb-5 w-2/6">
                                        </div>


                                    </div>
                                    <div class="flex items-center mb-5 w-full">
                                        <div class="flex items-center mb-5 w-2/6 float-right">
                                            <label for="town" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-1/6">Τηλέφωνο: </label>
                                            <input required type="text" id="relative_phone" name="relative_phone" placeholder="Τηλέφωνο"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   value="{{ $patient->relative_phone }}">
                                        </div>
                                    </div>






                                    <div class="text-left">
                                        <button type="submit" id="add-button" class="float-right text-green-500 border border-green-500 hover:bg-green-500 hover:text-white active:bg-green-600 font-bold uppercase px-8 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Update</button>
                                    </div>

                                </form>
                                <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400 " id='table_users'>
                                    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-black-700 dark:text-black-700">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            Visits
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Created on
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Updated By
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            View / Edit
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($visits as $visit)
                                        <tr class="bg-white border-b hover:bg-teal-100 hover:text-black dark:border-white-700 text-sm text-black">
                                            <td class="py-4 px-6"> {{ $visit->visit }} </td>
                                            <td class="py-4 px-6"> {{ $visit->created }}</td>
                                            <td class="py-4 px-6"> {{ $visit->name }}</td>
                                            <td>
                                                <a class="btn btn-primary" href="/view-visit/{{$visit->vid}}"><img src="/icons/view.png" width="50" class="mx-auto"></a>

                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                                <div class="text-left">
                                    <a href="/patient/visit/{{$patient->id }}">
                                        <button type="button" id="new-visit" class="text-blue-500 border border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-8 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"> Open New Visit</button>
                                    </a>
                                </div>
                            </div>





                        </div>

                    </div>
                    <div class="bg-white p-1 w-full" id="point_history">



                    </div>
                </div>



                <script>
                    $('#new-visit').mouseenter(function(){
                        $('#update input:not(:hidden),#sex').each(function() {
                            if(!$(this).val()){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Some fields are empty!',
                                    allowOutsideClick:false,
                                })

                            }
                        });
                    });

                    $('#receipt').keyup(function() {
                        $('#add_btn').show();
                        $('#zero_btn').show();
                        $('#newpts').show();
                        $("#final_receipt").val($('#receipt').val());
                    });

                    // Disable Negative Numbers

                    function edValueKeyPress()
                    {
                        var edValue = document.getElementById("receipt");
                        var s = edValue.value;
                        // console.log(s)
                        if (s.indexOf("-") >= 0){
                            Swal.fire('You can only add positive points');
                            var $myInput = $('#receipt');
                            $myInput.val($myInput.val().slice(0, -1));
                        }

                        if (s.indexOf(",") >= 0){
                            Swal.fire('You can only point (.)');
                            var $myInput = $('#receipt');
                            $myInput.val($myInput.val().slice(0, -1));
                        }

                    }

                    $('#zero_btn').click(function () {
                        $('#receipt').val('');
                        $('#new_points').val('');
                    })

                    $('#add_btn').click(function () {
                        $('#new_points').val(parseFloat($('#points').val()) + parseFloat($('#receipt').val()));
                        $("#comment").val('Added Points');
                        $("#symbol").val('+');
                    })



                    $('#deleteclientbtn').click(function () {
                        event.preventDefault();

                        Swal.fire({
                            title: 'Do you want to Delete the Client ?',
                            showDenyButton: true,
                            confirmButtonText: 'Yes',
                            denyButtonText: `No`,
                            allowOutsideClick:false,
                        }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed) {
                                Swal.fire('Saved!', '', 'success')
                                setTimeout(() => {
                                    $('#delete_client').submit()
                                }, 1500);
                            } else if (result.isDenied) {
                                Swal.fire('Changes are not saved', '', 'info')
                            }
                        })
                    })


                    $('#redeem_btn_500').click(function () {
                        event.preventDefault();

                        Swal.fire({
                            title: 'Do you want to redeem 500 points? (25% on all items)',
                            showDenyButton: true,
                            confirmButtonText: 'Yes',
                            denyButtonText: `No`,
                            allowOutsideClick:false,
                        }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed) {
                                Swal.fire('Saved!', '', 'success')
                                setTimeout(() => {
                                    $('#redeem_500').submit()
                                }, 1500);
                            } else if (result.isDenied) {
                                Swal.fire('Changes are not saved', '', 'info')
                            }
                        })
                    })

                    $('#redeem_btn_300').click(function () {
                        event.preventDefault();

                        Swal.fire({
                            title: 'Do you want to redeem 300 points? (15% on all items)',
                            showDenyButton: true,
                            confirmButtonText: 'Yes',
                            denyButtonText: `No`,
                            allowOutsideClick:false,
                        }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed) {
                                Swal.fire('Saved!', '', 'success')
                                setTimeout(() => {
                                    $('#redeem_300').submit()
                                }, 1500);
                            } else if (result.isDenied) {
                                Swal.fire('Changes are not saved', '', 'info')
                            }
                        })
                    })

                    $('#redeem_btn_50').click(function () {
                        event.preventDefault();

                        Swal.fire({
                            title: 'Do you want to redeem 50 points? (free coffee)',
                            showDenyButton: true,
                            confirmButtonText: 'Yes',
                            denyButtonText: `No`,
                            allowOutsideClick:false,
                        }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed) {
                                Swal.fire('Saved!', '', 'success')
                                setTimeout(() => {
                                    $('#redeem_50').submit()
                                }, 1500);
                            } else if (result.isDenied) {
                                Swal.fire('Changes are not saved', '', 'info')
                            }
                        })
                    })

                    $('.comments').each(function(i, obj) {
                        var j=i+1;
                        if(obj.innerHTML.indexOf(' Added Points') != -1){

                            $(".comments").eq(i).addClass("bg-green-400");

                        }else{
                            $(".comments").eq(i).addClass("bg-red-400");
                        }
                    });
                    $('#sex').val('{{$patient->sex}}');
                    $('#newintern').val('{{$patient->userid}}');
                </script>




            </div>
        </div>
    </div>
</x-app-layout>

