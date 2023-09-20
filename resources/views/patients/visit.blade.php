<x-app-layout>
  <style>
      .form-matrix-values .form-checkbox, .form-matrix-values .form-radio {
          height: 20px;
          width: 20px;
          clip: auto;
          cursor: pointer;
      }

       .form-radio {
           height: 20px;
           width: 20px;
          overflow: hidden;
          clip: rect(1px,1px,1px,1px);
      }

      .form-matrix-table {
          width: 100%;
          border-spacing: 0;
          text-align: left
      }

      .form-matrix-headers {
          position: relative;
          font-size: .75em;
          font-weight: 500;
          padding: 12px
      }

      .form-matrix-headers.form-matrix-column-headers {
          text-align: center;
          border-top: 1px solid #c3cad8
      }

      .form-matrix-values {
          text-align: center;
          padding: 0;
          position: relative
      }

      .JotFormBuilder #stage .form-matrix-values {
          pointer-events: none
      }

      .form-matrix-headers,.form-matrix-values {
          border-left: 1px solid;
          border-bottom: 1px solid
      }

      .form-matrix-column-headers:last-child {
          border-radius: 0 4px 0 0
      }

      .isSelected .form-matrix-column-headers:nth-last-of-type(2) {
          border-right: 1px solid #c3cad8;
          border-radius: 0 4px 0 0
      }

      .form-matrix-value-tr:nth-child(2) .form-matrix-row-headers {
          border-top: 1px solid #c3cad8;
          border-radius: 4px 0 0 0
      }

      .form-matrix-column_0 {
          border-radius: 4px 0 0
      }

      .form-matrix-column_0:last-child {
          border-radius: 4px 4px 0 0
      }

      .form-matrix-table td:last-child,.form-matrix-table th:last-child {
          border-right: 1px solid
      }

      .form-matrix-table tr:last-child td,.form-matrix-table tr:last-child th {
          border-bottom: 1px solid
      }

      .form-matrix-table tr:last-child .form-matrix-row-headers {
          border-radius: 0 0 0 4px
      }

      .form-matrix-table tr:last-child td:last-of-type,.form-matrix-table tr:last-child td:last-of-type .form-dropdown,.form-matrix-table tr:last-child td:last-of-type .form-textbox {
          border-radius: 0 0 4px
      }

      .form-matrix-table tr:not([role=group])+tr[role=group] th {
          border-top: 1px solid
      }

      .form-matrix-table tr:not([role=group])+tr[role=group] .form-matrix-row-headers {
          border-radius: 4px 0 0
      }

      .form-matrix-table tr:not([role=group])+tr[role=group]:last-child .form-matrix-row-headers {
          border-radius: 4px 0 0 4px
      }

      @media (-ms-high-contrast:none),screen and (-ms-high-contrast:active) {
          .form-matrix-values .form-checkbox,.form-matrix-values .form-radio {
              left: calc(50% - 10px);
              top: auto
          }
      }

      [data-input-type=areaCode] {
          -ms-flex: 1 1 30%;
          flex: 1 1 30%
      }

      [data-input-type=phone] {
          -ms-flex: 1 1 70%;
          flex: 1 1 70%
      }

      li[data-type=control_phone] .form-sub-label-container input {
          width: 100%
      }

      li[data-type=control_phone] div.extended [data-input-type=countryCode],li[data-type=control_phone] div.extended [data-input-type=countryCode]+[data-input-type=areaCode] {
          -ms-flex: 1 1 20%;
          flex: 1 1 20%
      }

      li[data-type=control_phone] div.extended [data-input-type=phone] {
          -ms-flex: 1 1 35%;
          flex: 1 1 35%
      }
      .form-matrix-value-tr:nth-child(2) .form-matrix-row-headers {
          border-top: 1px solid #c3cad8;
          border-radius: 4px 0 0 0
      }

      .form-matrix-column_0 {
          border-radius: 4px 0 0
      }

      .form-matrix-column_0:last-child {
          border-radius: 4px 4px 0 0
      }

      .form-matrix-table td:last-child,.form-matrix-table th:last-child {
          border-right: 1px solid
      }

      .form-matrix-table tr:last-child td,.form-matrix-table tr:last-child th {
          border-bottom: 1px solid
      }

      .form-matrix-table tr:last-child .form-matrix-row-headers {
          border-radius: 0 0 0 4px
      }

      .form-matrix-table tr:last-child td:last-of-type,.form-matrix-table tr:last-child td:last-of-type .form-dropdown,.form-matrix-table tr:last-child td:last-of-type .form-textbox {
          border-radius: 0 0 4px
      }

      .form-matrix-table tr:not([role=group])+tr[role=group] th {
          border-top: 1px solid
      }

      .form-matrix-table tr:not([role=group])+tr[role=group] .form-matrix-row-headers {
          border-radius: 4px 0 0
      }

      .form-matrix-table tr:not([role=group])+tr[role=group]:last-child .form-matrix-row-headers {
          border-radius: 4px 0 0 4px
      }

      @media (-ms-high-contrast:none),screen and (-ms-high-contrast:active) {
          .form-matrix-values .form-checkbox,.form-matrix-values .form-radio {
              left: calc(50% - 10px);
              top: auto
          }
      }
      .form-matrix-column-headers, .form-matrix-table td, .form-matrix-table td:last-child, .form-matrix-table th, .form-matrix-table th:last-child, .form-matrix-table tr:last-child td, .form-matrix-table tr:last-child th, .form-matrix-table tr:not([role=group])+tr[role=group] th {
          border-color: #c3cad8;
      }
      .form-matrix-column-headers, .form-matrix-row-headers {
          background-color: #e5eaf4;
      }
      .form-matrix-headers, .form-matrix-values {
          border-left: 1px solid;
          border-bottom: 1px solid;
      }
      .form-radio:checked+span label:before {
          border-color: #2e69ff
      }

      .form-radio:checked+span div:after,.form-radio:checked+span label:after {
          background-color: #2e69ff
      }

      .form-checkbox:checked+label:after,.form-radio:checked+label:after {
          opacity: 1;
          transform: scale(1)
      }

      .form-radio:checked+label:before,.form-radio:checked+span:before {
          border-color: #2e69ff
      }
      .form-matrix-column_0 {
          border-radius: 4px 0 0;
      }
  </style>
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
            Client:  {{ $patient->fname }} {{ $patient->lname }} ID: ({{ $patient->id }})
        </h2>




        <div class="pull-right">

        </div>
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <div class="min-h-screen ">

                            <div class="bg-white p-1 w-full">
                                @if($visits ==0)
                                    <form id="store_visit" class="w-full" action="{{ url('patients/store_visit').'/'.Auth::user()->id }}" method="Post" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                    <b>Ερωτηματολόγιο αρχικής συνάντησης</b>
                                <p class="pt-5">Σκοπός αυτού του ερωτηματολογίου είναι να σας επιτρέψει να καταγράψετε βασικά στοιχεία για εσάς και τους λόγους που σας φέρνουν στο Κέντρο.
                                    Σας παρακαλούμε συμπληρώστε το ερωτηματολόγιο με ειλικρίνεια. Όλες οι πληροφορίες είναι <b><u>ΕΜΠΙΣΤΕΥΤΙΚΕΣ</u></b> και προστατεύονται από το απόρρητο του Κέντρου.
                                </p>
                                    <div class="flex items-center mb-5 w-full pt-5">
                                        <div class="flex items-center mb-5 w-2/6 float-right">
                                            <label for="name" class="inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Ημερομηνία</label>
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                            </div>
                                            <input datepicker datepicker-format="dd/mm/yyyy" id="date" name="date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ημερομηνία" value="">
                                        </div>
                                    </div>


                                        <div class="flex items-center mb-5 ">
                                            <label for="email" class="inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Κλάδος και Έτος Φοίτησης (αν ισχύει): </label>
                                            <input type="text" id="study_year" name="study_year" placeholder="Κλάδος και Έτος Φοίτησης"
                                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                                   >
                                        </div>


                                        <div class="flex items-center mb-5 ">
                                            <label for="town" class="inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Εργάζεστε κάπου: </label>
                                            <input type="text" id="job" name="job" placeholder="Εργάζεστε κάπου"
                                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                                  >
                                        </div>

                                    <div class="flex items-center mb-5 ">
                                        <label for="town" class="inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Πώς αισθάνεστε για τον κλάδο σπουδών/εργασία σας; </label>
                                        <textarea id="job_feel" name="job_feel"  rows="4" cols="50" class="flex-1 py-2 border border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                        ></textarea>

                                    </div>

                                    <div class="flex items-center mb-5 ">
                                        <p class="pr-3 inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Έχετε προηγούμενη εμπειρία με ψυχολόγο;</p>

                                         <input type="radio" id="psyc_yes" class="form-radio " name="psyc" value="Yes">
                                         <label for="psyc_yes" class="pr-5">Yes</label><br>
                                         <input type="radio" id="psyc_no" class="form-radio" name="psyc" value="No">
                                         <label for="psyc_no" >No</label><br>

                                    </div>
                                    <div class="flex items-center mb-5 hidden" id="psyc_rest">
                                        <label for="psyc_when" class="inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Πότε: </label>
                                        <input type="date" id="psyc_when" name="psyc_when" placeholder="Πότε"
                                               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                               value="">
                                        <label for="psyc_where" class="inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Που: </label>
                                        <input type="text" id="psyc_where" name="psyc_where" placeholder="Πότε"
                                               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                               value=""><br><br>

                                        <label for="town" class="inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Πως θα περιγράφατε την εμπειρία σας; </label>
                                        <textarea id="psyc_exp" name="psyc_exp"  rows="4" cols="50" class="flex-1 py-2 border border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                        ></textarea>


                                    </div>

                                    <div class="flex items-center mb-5 ">
                                        <p class="pr-3 inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Σας παρέπεμψε κάποιος σε μας;</p>

                                        <input type="radio" id="reference_yes" class="form-radio " name="psyc_reference" value="Yes">
                                        <label for="reference_yes" class="pr-5 ">Yes</label><br>
                                        <input type="radio" id="reference_no" class="form-radio" name="psyc_reference" value="No">
                                        <label for="reference_no" >No</label><br>

                                    </div>
                                    <div class="flex items-center mb-5 hidden" id="reference_rest">
                                        <label for="reference_who" class="inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Ποιος: </label>
                                        <input type="text" id="reference_who" name="reference_who" placeholder="Ποιος"
                                               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                               value=""><br><br>



                                    </div>

                                    <div class="flex items-center mb-5 ">
                                        <label for="psyc_visit_why" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-3/12">Σας παρακαλώ περιγράψτε περιληπτικά τους λόγους της επίσκεψης σας και τι θα θέλατε να κερδίσετε μέσω αυτής της εμπειρίας:  </label>
                                        <textarea id="psyc_visit_why" name="psyc_visit_why"  rows="4" cols="50" class="flex-1 py-2 border border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                        ></textarea>
                                    </div>
                                    <div class="flex items-center mb-5 ">
                                        <label for="psyc_travma" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-3/12">Βιώσατε κάποιο δύσκολο, πιεστικό ή τραυματικό γεγονός που πιστεύετε ακόμα σας ενοχλεί;         </label>
                                        <textarea id="psyc_travma" name="psyc_travma"  rows="4" cols="50" class="flex-1 py-2 border border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                        ></textarea>

                                    </div>


                                    <div class="flex items-center mb-5 ">
                                        <p class="pr-3 inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Έχετε κάποιο τακτικό ιατρό που σας παρακολουθεί;</p>

                                        <input type="radio" id="doctor_yes" class="form-radio " name="doctor_reference" value="Yes">
                                        <label for="doctor_yes" class="pr-5 ">Yes</label><br>
                                        <input type="radio" id="doctor_no" class="form-radio" name="doctor_reference" value="No">
                                        <label for="doctor_no" >No</label><br>

                                    </div>
                                    <div class="flex items-center mb-5 hidden" id="doctor_rest">
                                        <label for="reference_who" class="inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Όνομα: </label>
                                        <input type="text" id="doctor_who" name="reference_who" placeholder="Όνομα"
                                               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                              ><br><br>

                                    </div>

                                    <div class="flex items-center mb-5 ">
                                        <label for="medical_prob" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-3/12">Έχετε ή θεωρείτε ότι έχετε οποιοδήποτε σοβαρό ιατρικό πρόβλημα (π.χ. Άσθμα, διαβήτη, κλπ.):</label>
                                        <textarea id="medical_prob" name="medical_prob"  rows="4" cols="50" class="flex-1 py-2 border border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                        ></textarea>

                                    </div>

                                    <div class="flex items-center mb-5 ">
                                        <p class="pr-3 inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Παίρνετε οποιαδήποτε φάρμακα; </p>

                                        <input type="radio" id="meds_yes" class="form-radio " name="meds_reference" value="Yes">
                                        <label for="meds_yes" class="pr-5 ">Yes</label><br>
                                        <input type="radio" id="meds_no" class="form-radio" name="meds_reference" value="No">
                                        <label for="meds_no" >No</label><br>

                                    </div>
                                    <div class="flex items-center mb-5 hidden" id="meds_rest">
                                        <label for="meds_what" class="inline-block mr-6 text-right pr-8
                                 font-bold text-gray-600">Γράψτε τα φάρμακα που παίρνετε: </label>
                                        <input type="text" id="meds_what" name="meds_what" placeholder="Όνομα"
                                               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                               ><br><br>

                                    </div>

                                    <div class="flex items-center mb-5 ">
                                        <label for="alcohol" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-3/12">Σας παρακαλώ περιγράψτε τη χρήση αλκοόλ και/ή  άλλων ουσιών (Συχνότητα, ποσότητα, με ποιους, κλπ)</label>
                                        <textarea id="alcohol" name="alcohol"  rows="4" cols="50" class="flex-1 py-2 border border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                        ></textarea>

                                    </div>

                                    <div class="flex items-center mb-5 ">
                                        <label for="psyc_history_prob" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-3/12">Υπάρχει στην οικογένεια ιστορικό συναισθηματικών / ψυχολογικών προβλημάτων ή προβλημάτων με αλκοόλ και ναρκωτικά: </label>
                                        <textarea id="psyc_history_prob" name="psyc_history_prob"  rows="4" cols="50" class="flex-1 py-2 border border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                        ></textarea>

                                    </div>

                                    <div class="flex items-center mb-5 ">
                                        <label for="hospital" class="inline-block mr-6 text-left pr-8
                                 font-bold text-gray-600 w-3/12">Σας παρακαλώ ενημερώστε μας για οποιαδήποτε νοσοκομειακή περίθαλψη είχατε (Ημερ. και λόγοι)    </label>
                                        <textarea id="hospital" name="hospital"  rows="4" cols="50" class="flex-1 py-2 border border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                        ></textarea>

                                    </div>



                                    <table summary="" aria-labelledby="label_3" cellpadding="4" cellspacing="0" class="form-matrix-table" data-component="matrix">
                                        <tbody><tr class="form-matrix-tr form-matrix-header-tr">
                                            <th class="form-matrix-th" style="border:none">&nbsp;</th>
                                            <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0"><label id="label_3_col_0">Καθόλου </label></th>
                                            <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_1"><label id="label_3_col_1">Λίγο</label></th>
                                            <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_2"><label id="label_3_col_2">Μέτρια</label></th>
                                            <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_3"><label id="label_3_col_3">Αρκετά</label></th>
                                            <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_4"><label id="label_3_col_4">Υπερολικά</label></th>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_0">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_0">1. Επάγγελμα</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_0_0" class="form-radio" name="q3_overallSatisfaction[0]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_0" aria-label="Cells Radio Button"><label for="input_3_0_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_0_1" class="form-radio" name="q3_overallSatisfaction[0]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_0" aria-label="Cells Radio Button"><label for="input_3_0_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_0_2" class="form-radio" name="q3_overallSatisfaction[0]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_0" aria-label="Cells Radio Button"><label for="input_3_0_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_0_3" class="form-radio" name="q3_overallSatisfaction[0]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_0" aria-label="Cells Radio Button"><label for="input_3_0_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_0_4" class="form-radio" name="q3_overallSatisfaction[0]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_0" aria-label="Cells Radio Button"><label for="input_3_0_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_1">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_1">2. Ώθηση για τη ζωή</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_1_0" class="form-radio" name="q3_overallSatisfaction[1]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_1" aria-label="Cells Radio Button"><label for="input_3_1_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_1_1" class="form-radio" name="q3_overallSatisfaction[1]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_1" aria-label="Cells Radio Button"><label for="input_3_1_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_1_2" class="form-radio" name="q3_overallSatisfaction[1]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_1" aria-label="Cells Radio Button"><label for="input_3_1_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_1_3" class="form-radio" name="q3_overallSatisfaction[1]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_1" aria-label="Cells Radio Button"><label for="input_3_1_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_1_4" class="form-radio" name="q3_overallSatisfaction[1]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_1" aria-label="Cells Radio Button"><label for="input_3_1_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_2">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_2">3. Εργασιακά προβλήματα</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_2_0" class="form-radio" name="q3_overallSatisfaction[2]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_2" aria-label="Cells Radio Button"><label for="input_3_2_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_2_1" class="form-radio" name="q3_overallSatisfaction[2]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_2" aria-label="Cells Radio Button"><label for="input_3_2_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_2_2" class="form-radio" name="q3_overallSatisfaction[2]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_2" aria-label="Cells Radio Button"><label for="input_3_2_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_2_3" class="form-radio" name="q3_overallSatisfaction[2]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_2" aria-label="Cells Radio Button"><label for="input_3_2_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_2_4" class="form-radio" name="q3_overallSatisfaction[2]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_2" aria-label="Cells Radio Button"><label for="input_3_2_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_3">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_3">4. Ερωτική σχέση</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_3_0" class="form-radio" name="q3_overallSatisfaction[3]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_3" aria-label="Cells Radio Button"><label for="input_3_3_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_3_1" class="form-radio" name="q3_overallSatisfaction[3]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_3" aria-label="Cells Radio Button"><label for="input_3_3_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_3_2" class="form-radio" name="q3_overallSatisfaction[3]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_3" aria-label="Cells Radio Button"><label for="input_3_3_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_3_3" class="form-radio" name="q3_overallSatisfaction[3]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_3" aria-label="Cells Radio Button"><label for="input_3_3_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_3_4" class="form-radio" name="q3_overallSatisfaction[3]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_3" aria-label="Cells Radio Button"><label for="input_3_3_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_4">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_4">5. Σχέση με γονείς/οικογένεια</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_4_0" class="form-radio" name="q3_overallSatisfaction[4]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_4" aria-label="Cells Radio Button"><label for="input_3_4_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_4_1" class="form-radio" name="q3_overallSatisfaction[4]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_4" aria-label="Cells Radio Button"><label for="input_3_4_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_4_2" class="form-radio" name="q3_overallSatisfaction[4]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_4" aria-label="Cells Radio Button"><label for="input_3_4_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_4_3" class="form-radio" name="q3_overallSatisfaction[4]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_4" aria-label="Cells Radio Button"><label for="input_3_4_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_4_4" class="form-radio" name="q3_overallSatisfaction[4]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_4" aria-label="Cells Radio Button"><label for="input_3_4_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_5">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_5">6. Νιώθεις εξαρτώμενος/η από άλλους</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_5_0" class="form-radio" name="q3_overallSatisfaction[5]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_5" aria-label="Cells Radio Button"><label for="input_3_5_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_5_1" class="form-radio" name="q3_overallSatisfaction[5]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_5" aria-label="Cells Radio Button"><label for="input_3_5_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_5_2" class="form-radio" name="q3_overallSatisfaction[5]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_5" aria-label="Cells Radio Button"><label for="input_3_5_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_5_3" class="form-radio" name="q3_overallSatisfaction[5]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_5" aria-label="Cells Radio Button"><label for="input_3_5_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_5_4" class="form-radio" name="q3_overallSatisfaction[5]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_5" aria-label="Cells Radio Button"><label for="input_3_5_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_6">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_6">7. Δυσκολίες με διεκδίκηση άποψης</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_6_0" class="form-radio" name="q3_overallSatisfaction[6]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_6" aria-label="Cells Radio Button"><label for="input_3_6_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_6_1" class="form-radio" name="q3_overallSatisfaction[6]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_6" aria-label="Cells Radio Button"><label for="input_3_6_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_6_2" class="form-radio" name="q3_overallSatisfaction[6]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_6" aria-label="Cells Radio Button"><label for="input_3_6_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_6_3" class="form-radio" name="q3_overallSatisfaction[6]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_6" aria-label="Cells Radio Button"><label for="input_3_6_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_6_4" class="form-radio" name="q3_overallSatisfaction[6]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_6" aria-label="Cells Radio Button"><label for="input_3_6_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_7">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_7">8. Δυσκολίες με έκφραση συναισθημάτων</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_7_0" class="form-radio" name="q3_overallSatisfaction[7]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_7" aria-label="Cells Radio Button"><label for="input_3_7_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_7_1" class="form-radio" name="q3_overallSatisfaction[7]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_7" aria-label="Cells Radio Button"><label for="input_3_7_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_7_2" class="form-radio" name="q3_overallSatisfaction[7]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_7" aria-label="Cells Radio Button"><label for="input_3_7_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_7_3" class="form-radio" name="q3_overallSatisfaction[7]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_7" aria-label="Cells Radio Button"><label for="input_3_7_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_7_4" class="form-radio" name="q3_overallSatisfaction[7]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_7" aria-label="Cells Radio Button"><label for="input_3_7_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_8">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_8">9. Γνωριμίες με άλλους</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_8_0" class="form-radio" name="q3_overallSatisfaction[8]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_8" aria-label="Cells Radio Button"><label for="input_3_8_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_8_1" class="form-radio" name="q3_overallSatisfaction[8]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_8" aria-label="Cells Radio Button"><label for="input_3_8_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_8_2" class="form-radio" name="q3_overallSatisfaction[8]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_8" aria-label="Cells Radio Button"><label for="input_3_8_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_8_3" class="form-radio" name="q3_overallSatisfaction[8]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_8" aria-label="Cells Radio Button"><label for="input_3_8_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_8_4" class="form-radio" name="q3_overallSatisfaction[8]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_8" aria-label="Cells Radio Button"><label for="input_3_8_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_9">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_9">10. Προβλήματα με κοινωνικές επαφές</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_9_0" class="form-radio" name="q3_overallSatisfaction[9]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_9" aria-label="Cells Radio Button"><label for="input_3_9_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_9_1" class="form-radio" name="q3_overallSatisfaction[9]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_9" aria-label="Cells Radio Button"><label for="input_3_9_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_9_2" class="form-radio" name="q3_overallSatisfaction[9]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_9" aria-label="Cells Radio Button"><label for="input_3_9_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_9_3" class="form-radio" name="q3_overallSatisfaction[9]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_9" aria-label="Cells Radio Button"><label for="input_3_9_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_9_4" class="form-radio" name="q3_overallSatisfaction[9]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_9" aria-label="Cells Radio Button"><label for="input_3_9_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_10">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_10">11. Νιώθεις απομόνωση/μοναξιά</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_10_0" class="form-radio" name="q3_overallSatisfaction[10]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_10" aria-label="Cells Radio Button"><label for="input_3_10_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_10_1" class="form-radio" name="q3_overallSatisfaction[10]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_10" aria-label="Cells Radio Button"><label for="input_3_10_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_10_2" class="form-radio" name="q3_overallSatisfaction[10]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_10" aria-label="Cells Radio Button"><label for="input_3_10_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_10_3" class="form-radio" name="q3_overallSatisfaction[10]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_10" aria-label="Cells Radio Button"><label for="input_3_10_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_10_4" class="form-radio" name="q3_overallSatisfaction[10]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_10" aria-label="Cells Radio Button"><label for="input_3_10_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_11">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_11">12. Φόβος για στενές σχέσεις</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_11_0" class="form-radio" name="q3_overallSatisfaction[11]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_11" aria-label="Cells Radio Button"><label for="input_3_11_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_11_1" class="form-radio" name="q3_overallSatisfaction[11]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_11" aria-label="Cells Radio Button"><label for="input_3_11_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_11_2" class="form-radio" name="q3_overallSatisfaction[11]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_11" aria-label="Cells Radio Button"><label for="input_3_11_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_11_3" class="form-radio" name="q3_overallSatisfaction[11]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_11" aria-label="Cells Radio Button"><label for="input_3_11_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_11_4" class="form-radio" name="q3_overallSatisfaction[11]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_11" aria-label="Cells Radio Button"><label for="input_3_11_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_12">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_12">13. Προβλήματα με θυμό</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_12_0" class="form-radio" name="q3_overallSatisfaction[12]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_12" aria-label="Cells Radio Button"><label for="input_3_12_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_12_1" class="form-radio" name="q3_overallSatisfaction[12]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_12" aria-label="Cells Radio Button"><label for="input_3_12_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_12_2" class="form-radio" name="q3_overallSatisfaction[12]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_12" aria-label="Cells Radio Button"><label for="input_3_12_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_12_3" class="form-radio" name="q3_overallSatisfaction[12]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_12" aria-label="Cells Radio Button"><label for="input_3_12_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_12_4" class="form-radio" name="q3_overallSatisfaction[12]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_12" aria-label="Cells Radio Button"><label for="input_3_12_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_13">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_13">14. Προβλήματα με ζήλια</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_13_0" class="form-radio" name="q3_overallSatisfaction[13]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_13" aria-label="Cells Radio Button"><label for="input_3_13_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_13_1" class="form-radio" name="q3_overallSatisfaction[13]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_13" aria-label="Cells Radio Button"><label for="input_3_13_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_13_2" class="form-radio" name="q3_overallSatisfaction[13]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_13" aria-label="Cells Radio Button"><label for="input_3_13_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_13_3" class="form-radio" name="q3_overallSatisfaction[13]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_13" aria-label="Cells Radio Button"><label for="input_3_13_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_13_4" class="form-radio" name="q3_overallSatisfaction[13]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_13" aria-label="Cells Radio Button"><label for="input_3_13_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_14">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_14">15. Σκέψεις ανθρωποκτονίας</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_14_0" class="form-radio" name="q3_overallSatisfaction[14]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_14" aria-label="Cells Radio Button"><label for="input_3_14_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_14_1" class="form-radio" name="q3_overallSatisfaction[14]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_14" aria-label="Cells Radio Button"><label for="input_3_14_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_14_2" class="form-radio" name="q3_overallSatisfaction[14]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_14" aria-label="Cells Radio Button"><label for="input_3_14_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_14_3" class="form-radio" name="q3_overallSatisfaction[14]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_14" aria-label="Cells Radio Button"><label for="input_3_14_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_14_4" class="form-radio" name="q3_overallSatisfaction[14]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_14" aria-label="Cells Radio Button"><label for="input_3_14_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_15">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_15">16. Πρόσφατος χωρισμός</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_15_0" class="form-radio" name="q3_overallSatisfaction[15]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_15" aria-label="Cells Radio Button"><label for="input_3_15_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_15_1" class="form-radio" name="q3_overallSatisfaction[15]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_15" aria-label="Cells Radio Button"><label for="input_3_15_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_15_2" class="form-radio" name="q3_overallSatisfaction[15]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_15" aria-label="Cells Radio Button"><label for="input_3_15_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_15_3" class="form-radio" name="q3_overallSatisfaction[15]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_15" aria-label="Cells Radio Button"><label for="input_3_15_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_15_4" class="form-radio" name="q3_overallSatisfaction[15]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_15" aria-label="Cells Radio Button"><label for="input_3_15_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_16">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_16">17. Θλίψη για πρόσφατο θάνατο</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_16_0" class="form-radio" name="q3_overallSatisfaction[16]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_16" aria-label="Cells Radio Button"><label for="input_3_16_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_16_1" class="form-radio" name="q3_overallSatisfaction[16]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_16" aria-label="Cells Radio Button"><label for="input_3_16_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_16_2" class="form-radio" name="q3_overallSatisfaction[16]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_16" aria-label="Cells Radio Button"><label for="input_3_16_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_16_3" class="form-radio" name="q3_overallSatisfaction[16]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_16" aria-label="Cells Radio Button"><label for="input_3_16_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_16_4" class="form-radio" name="q3_overallSatisfaction[16]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_16" aria-label="Cells Radio Button"><label for="input_3_16_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_17">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_17">18. Σωματική ή σεξουαλική κακοποίηση</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_17_0" class="form-radio" name="q3_overallSatisfaction[17]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_17" aria-label="Cells Radio Button"><label for="input_3_17_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_17_1" class="form-radio" name="q3_overallSatisfaction[17]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_17" aria-label="Cells Radio Button"><label for="input_3_17_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_17_2" class="form-radio" name="q3_overallSatisfaction[17]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_17" aria-label="Cells Radio Button"><label for="input_3_17_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_17_3" class="form-radio" name="q3_overallSatisfaction[17]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_17" aria-label="Cells Radio Button"><label for="input_3_17_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_17_4" class="form-radio" name="q3_overallSatisfaction[17]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_17" aria-label="Cells Radio Button"><label for="input_3_17_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_18">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_18">19. Εγκυμοσύνη (εσένα ή άλλου)</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_18_0" class="form-radio" name="q3_overallSatisfaction[18]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_18" aria-label="Cells Radio Button"><label for="input_3_18_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_18_1" class="form-radio" name="q3_overallSatisfaction[18]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_18" aria-label="Cells Radio Button"><label for="input_3_18_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_18_2" class="form-radio" name="q3_overallSatisfaction[18]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_18" aria-label="Cells Radio Button"><label for="input_3_18_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_18_3" class="form-radio" name="q3_overallSatisfaction[18]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_18" aria-label="Cells Radio Button"><label for="input_3_18_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_18_4" class="form-radio" name="q3_overallSatisfaction[18]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_18" aria-label="Cells Radio Button"><label for="input_3_18_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_19">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_19">20. Σεξ ή σεξουαλικότητα</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_19_0" class="form-radio" name="q3_overallSatisfaction[19]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_19" aria-label="Cells Radio Button"><label for="input_3_19_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_19_1" class="form-radio" name="q3_overallSatisfaction[19]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_19" aria-label="Cells Radio Button"><label for="input_3_19_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_19_2" class="form-radio" name="q3_overallSatisfaction[19]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_19" aria-label="Cells Radio Button"><label for="input_3_19_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_19_3" class="form-radio" name="q3_overallSatisfaction[19]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_19" aria-label="Cells Radio Button"><label for="input_3_19_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_19_4" class="form-radio" name="q3_overallSatisfaction[19]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_19" aria-label="Cells Radio Button"><label for="input_3_19_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_20">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_20">21. Σεξουαλικές προτιμήσεις</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_20_0" class="form-radio" name="q3_overallSatisfaction[20]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_20" aria-label="Cells Radio Button"><label for="input_3_20_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_20_1" class="form-radio" name="q3_overallSatisfaction[20]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_20" aria-label="Cells Radio Button"><label for="input_3_20_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_20_2" class="form-radio" name="q3_overallSatisfaction[20]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_20" aria-label="Cells Radio Button"><label for="input_3_20_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_20_3" class="form-radio" name="q3_overallSatisfaction[20]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_20" aria-label="Cells Radio Button"><label for="input_3_20_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_20_4" class="form-radio" name="q3_overallSatisfaction[20]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_20" aria-label="Cells Radio Button"><label for="input_3_20_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_21">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_21">22. Νιώθω συναισθηματικό μούδιασμα</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_21_0" class="form-radio" name="q3_overallSatisfaction[21]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_21" aria-label="Cells Radio Button"><label for="input_3_21_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_21_1" class="form-radio" name="q3_overallSatisfaction[21]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_21" aria-label="Cells Radio Button"><label for="input_3_21_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_21_2" class="form-radio" name="q3_overallSatisfaction[21]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_21" aria-label="Cells Radio Button"><label for="input_3_21_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_21_3" class="form-radio" name="q3_overallSatisfaction[21]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_21" aria-label="Cells Radio Button"><label for="input_3_21_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_21_4" class="form-radio" name="q3_overallSatisfaction[21]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_21" aria-label="Cells Radio Button"><label for="input_3_21_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_22">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_22">23. Σύγχυση στα πιστεύω/αξίες</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_22_0" class="form-radio" name="q3_overallSatisfaction[22]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_22" aria-label="Cells Radio Button"><label for="input_3_22_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_22_1" class="form-radio" name="q3_overallSatisfaction[22]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_22" aria-label="Cells Radio Button"><label for="input_3_22_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_22_2" class="form-radio" name="q3_overallSatisfaction[22]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_22" aria-label="Cells Radio Button"><label for="input_3_22_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_22_3" class="form-radio" name="q3_overallSatisfaction[22]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_22" aria-label="Cells Radio Button"><label for="input_3_22_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_22_4" class="form-radio" name="q3_overallSatisfaction[22]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_22" aria-label="Cells Radio Button"><label for="input_3_22_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_23">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_23">24. Δύσκολα παίρνω αποφάσεις</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_23_0" class="form-radio" name="q3_overallSatisfaction[23]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_23" aria-label="Cells Radio Button"><label for="input_3_23_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_23_1" class="form-radio" name="q3_overallSatisfaction[23]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_23" aria-label="Cells Radio Button"><label for="input_3_23_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_23_2" class="form-radio" name="q3_overallSatisfaction[23]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_23" aria-label="Cells Radio Button"><label for="input_3_23_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_23_3" class="form-radio" name="q3_overallSatisfaction[23]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_23" aria-label="Cells Radio Button"><label for="input_3_23_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_23_4" class="form-radio" name="q3_overallSatisfaction[23]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_23" aria-label="Cells Radio Button"><label for="input_3_23_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_24">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_24">25. Δεν μ’ αρέσει ο εαυτός μου</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_24_0" class="form-radio" name="q3_overallSatisfaction[24]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_24" aria-label="Cells Radio Button"><label for="input_3_24_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_24_1" class="form-radio" name="q3_overallSatisfaction[24]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_24" aria-label="Cells Radio Button"><label for="input_3_24_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_24_2" class="form-radio" name="q3_overallSatisfaction[24]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_24" aria-label="Cells Radio Button"><label for="input_3_24_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_24_3" class="form-radio" name="q3_overallSatisfaction[24]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_24" aria-label="Cells Radio Button"><label for="input_3_24_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_24_4" class="form-radio" name="q3_overallSatisfaction[24]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_24" aria-label="Cells Radio Button"><label for="input_3_24_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_25">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_25">26. Προσωπική ταυτότητα</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_25_0" class="form-radio" name="q3_overallSatisfaction[25]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_25" aria-label="Cells Radio Button"><label for="input_3_25_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_25_1" class="form-radio" name="q3_overallSatisfaction[25]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_25" aria-label="Cells Radio Button"><label for="input_3_25_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_25_2" class="form-radio" name="q3_overallSatisfaction[25]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_25" aria-label="Cells Radio Button"><label for="input_3_25_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_25_3" class="form-radio" name="q3_overallSatisfaction[25]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_25" aria-label="Cells Radio Button"><label for="input_3_25_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_25_4" class="form-radio" name="q3_overallSatisfaction[25]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_25" aria-label="Cells Radio Button"><label for="input_3_25_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_26">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_26">27. Εξωτερική εμφάνιση</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_26_0" class="form-radio" name="q3_overallSatisfaction[26]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_26" aria-label="Cells Radio Button"><label for="input_3_26_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_26_1" class="form-radio" name="q3_overallSatisfaction[26]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_26" aria-label="Cells Radio Button"><label for="input_3_26_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_26_2" class="form-radio" name="q3_overallSatisfaction[26]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_26" aria-label="Cells Radio Button"><label for="input_3_26_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_26_3" class="form-radio" name="q3_overallSatisfaction[26]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_26" aria-label="Cells Radio Button"><label for="input_3_26_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_26_4" class="form-radio" name="q3_overallSatisfaction[26]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_26" aria-label="Cells Radio Button"><label for="input_3_26_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_27">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_27">28. Άγχος/Ανησυχία</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_27_0" class="form-radio" name="q3_overallSatisfaction[27]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_27" aria-label="Cells Radio Button"><label for="input_3_27_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_27_1" class="form-radio" name="q3_overallSatisfaction[27]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_27" aria-label="Cells Radio Button"><label for="input_3_27_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_27_2" class="form-radio" name="q3_overallSatisfaction[27]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_27" aria-label="Cells Radio Button"><label for="input_3_27_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_27_3" class="form-radio" name="q3_overallSatisfaction[27]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_27" aria-label="Cells Radio Button"><label for="input_3_27_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_27_4" class="form-radio" name="q3_overallSatisfaction[27]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_27" aria-label="Cells Radio Button"><label for="input_3_27_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_28">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_28">29. Ένταση/Πίεση</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_28_0" class="form-radio" name="q3_overallSatisfaction[28]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_28" aria-label="Cells Radio Button"><label for="input_3_28_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_28_1" class="form-radio" name="q3_overallSatisfaction[28]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_28" aria-label="Cells Radio Button"><label for="input_3_28_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_28_2" class="form-radio" name="q3_overallSatisfaction[28]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_28" aria-label="Cells Radio Button"><label for="input_3_28_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_28_3" class="form-radio" name="q3_overallSatisfaction[28]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_28" aria-label="Cells Radio Button"><label for="input_3_28_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_28_4" class="form-radio" name="q3_overallSatisfaction[28]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_28" aria-label="Cells Radio Button"><label for="input_3_28_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_29">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_29">30. Φοβίες</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_29_0" class="form-radio" name="q3_overallSatisfaction[29]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_29" aria-label="Cells Radio Button"><label for="input_3_29_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_29_1" class="form-radio" name="q3_overallSatisfaction[29]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_29" aria-label="Cells Radio Button"><label for="input_3_29_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_29_2" class="form-radio" name="q3_overallSatisfaction[29]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_29" aria-label="Cells Radio Button"><label for="input_3_29_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_29_3" class="form-radio" name="q3_overallSatisfaction[29]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_29" aria-label="Cells Radio Button"><label for="input_3_29_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_29_4" class="form-radio" name="q3_overallSatisfaction[29]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_29" aria-label="Cells Radio Button"><label for="input_3_29_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_30">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_30">31. Δυστυχία</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_30_0" class="form-radio" name="q3_overallSatisfaction[30]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_30" aria-label="Cells Radio Button"><label for="input_3_30_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_30_1" class="form-radio" name="q3_overallSatisfaction[30]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_30" aria-label="Cells Radio Button"><label for="input_3_30_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_30_2" class="form-radio" name="q3_overallSatisfaction[30]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_30" aria-label="Cells Radio Button"><label for="input_3_30_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_30_3" class="form-radio" name="q3_overallSatisfaction[30]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_30" aria-label="Cells Radio Button"><label for="input_3_30_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_30_4" class="form-radio" name="q3_overallSatisfaction[30]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_30" aria-label="Cells Radio Button"><label for="input_3_30_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_31">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_31">32. Κατάθλιψη</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_31_0" class="form-radio" name="q3_overallSatisfaction[31]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_31" aria-label="Cells Radio Button"><label for="input_3_31_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_31_1" class="form-radio" name="q3_overallSatisfaction[31]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_31" aria-label="Cells Radio Button"><label for="input_3_31_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_31_2" class="form-radio" name="q3_overallSatisfaction[31]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_31" aria-label="Cells Radio Button"><label for="input_3_31_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_31_3" class="form-radio" name="q3_overallSatisfaction[31]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_31" aria-label="Cells Radio Button"><label for="input_3_31_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_31_4" class="form-radio" name="q3_overallSatisfaction[31]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_31" aria-label="Cells Radio Button"><label for="input_3_31_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_32">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_32">33. Αισθήματα κατωτερότητας</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_32_0" class="form-radio" name="q3_overallSatisfaction[32]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_32" aria-label="Cells Radio Button"><label for="input_3_32_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_32_1" class="form-radio" name="q3_overallSatisfaction[32]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_32" aria-label="Cells Radio Button"><label for="input_3_32_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_32_2" class="form-radio" name="q3_overallSatisfaction[32]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_32" aria-label="Cells Radio Button"><label for="input_3_32_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_32_3" class="form-radio" name="q3_overallSatisfaction[32]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_32" aria-label="Cells Radio Button"><label for="input_3_32_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_32_4" class="form-radio" name="q3_overallSatisfaction[32]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_32" aria-label="Cells Radio Button"><label for="input_3_32_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_33">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_33">34. Αισθήματα Τύψεων/Ενοχών</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_33_0" class="form-radio" name="q3_overallSatisfaction[33]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_33" aria-label="Cells Radio Button"><label for="input_3_33_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_33_1" class="form-radio" name="q3_overallSatisfaction[33]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_33" aria-label="Cells Radio Button"><label for="input_3_33_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_33_2" class="form-radio" name="q3_overallSatisfaction[33]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_33" aria-label="Cells Radio Button"><label for="input_3_33_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_33_3" class="form-radio" name="q3_overallSatisfaction[33]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_33" aria-label="Cells Radio Button"><label for="input_3_33_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_33_4" class="form-radio" name="q3_overallSatisfaction[33]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_33" aria-label="Cells Radio Button"><label for="input_3_33_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_34">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_34">35. Προβλήματα με Αλκοόλ</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_34_0" class="form-radio" name="q3_overallSatisfaction[34]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_34" aria-label="Cells Radio Button"><label for="input_3_34_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_34_1" class="form-radio" name="q3_overallSatisfaction[34]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_34" aria-label="Cells Radio Button"><label for="input_3_34_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_34_2" class="form-radio" name="q3_overallSatisfaction[34]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_34" aria-label="Cells Radio Button"><label for="input_3_34_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_34_3" class="form-radio" name="q3_overallSatisfaction[34]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_34" aria-label="Cells Radio Button"><label for="input_3_34_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_34_4" class="form-radio" name="q3_overallSatisfaction[34]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_34" aria-label="Cells Radio Button"><label for="input_3_34_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_35">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_35">36. Προβλήματα με Ναρκωτικά</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_35_0" class="form-radio" name="q3_overallSatisfaction[35]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_35" aria-label="Cells Radio Button"><label for="input_3_35_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_35_1" class="form-radio" name="q3_overallSatisfaction[35]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_35" aria-label="Cells Radio Button"><label for="input_3_35_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_35_2" class="form-radio" name="q3_overallSatisfaction[35]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_35" aria-label="Cells Radio Button"><label for="input_3_35_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_35_3" class="form-radio" name="q3_overallSatisfaction[35]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_35" aria-label="Cells Radio Button"><label for="input_3_35_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_35_4" class="form-radio" name="q3_overallSatisfaction[35]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_35" aria-label="Cells Radio Button"><label for="input_3_35_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_36">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_36">37. Προβλήματα με Διατροφή</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_36_0" class="form-radio" name="q3_overallSatisfaction[36]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_36" aria-label="Cells Radio Button"><label for="input_3_36_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_36_1" class="form-radio" name="q3_overallSatisfaction[36]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_36" aria-label="Cells Radio Button"><label for="input_3_36_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_36_2" class="form-radio" name="q3_overallSatisfaction[36]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_36" aria-label="Cells Radio Button"><label for="input_3_36_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_36_3" class="form-radio" name="q3_overallSatisfaction[36]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_36" aria-label="Cells Radio Button"><label for="input_3_36_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_36_4" class="form-radio" name="q3_overallSatisfaction[36]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_36" aria-label="Cells Radio Button"><label for="input_3_36_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_37">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_37">38. Προβλήματα με Βάρος</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_37_0" class="form-radio" name="q3_overallSatisfaction[37]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_37" aria-label="Cells Radio Button"><label for="input_3_37_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_37_1" class="form-radio" name="q3_overallSatisfaction[37]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_37" aria-label="Cells Radio Button"><label for="input_3_37_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_37_2" class="form-radio" name="q3_overallSatisfaction[37]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_37" aria-label="Cells Radio Button"><label for="input_3_37_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_37_3" class="form-radio" name="q3_overallSatisfaction[37]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_37" aria-label="Cells Radio Button"><label for="input_3_37_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_37_4" class="form-radio" name="q3_overallSatisfaction[37]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_37" aria-label="Cells Radio Button"><label for="input_3_37_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_38">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_38">39. Προβλήματα με Ύπνο</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_38_0" class="form-radio" name="q3_overallSatisfaction[38]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_38" aria-label="Cells Radio Button"><label for="input_3_38_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_38_1" class="form-radio" name="q3_overallSatisfaction[38]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_38" aria-label="Cells Radio Button"><label for="input_3_38_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_38_2" class="form-radio" name="q3_overallSatisfaction[38]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_38" aria-label="Cells Radio Button"><label for="input_3_38_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_38_3" class="form-radio" name="q3_overallSatisfaction[38]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_38" aria-label="Cells Radio Button"><label for="input_3_38_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_38_4" class="form-radio" name="q3_overallSatisfaction[38]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_38" aria-label="Cells Radio Button"><label for="input_3_38_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_39">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_39">40. Προβλήματα Υγείας</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_39_0" class="form-radio" name="q3_overallSatisfaction[39]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_39" aria-label="Cells Radio Button"><label for="input_3_39_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_39_1" class="form-radio" name="q3_overallSatisfaction[39]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_39" aria-label="Cells Radio Button"><label for="input_3_39_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_39_2" class="form-radio" name="q3_overallSatisfaction[39]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_39" aria-label="Cells Radio Button"><label for="input_3_39_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_39_3" class="form-radio" name="q3_overallSatisfaction[39]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_39" aria-label="Cells Radio Button"><label for="input_3_39_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_39_4" class="form-radio" name="q3_overallSatisfaction[39]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_39" aria-label="Cells Radio Button"><label for="input_3_39_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_40">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_40">41. Σωματική Αναπηρία</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_40_0" class="form-radio" name="q3_overallSatisfaction[40]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_40" aria-label="Cells Radio Button"><label for="input_3_40_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_40_1" class="form-radio" name="q3_overallSatisfaction[40]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_40" aria-label="Cells Radio Button"><label for="input_3_40_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_40_2" class="form-radio" name="q3_overallSatisfaction[40]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_40" aria-label="Cells Radio Button"><label for="input_3_40_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_40_3" class="form-radio" name="q3_overallSatisfaction[40]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_40" aria-label="Cells Radio Button"><label for="input_3_40_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_40_4" class="form-radio" name="q3_overallSatisfaction[40]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_40" aria-label="Cells Radio Button"><label for="input_3_40_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_41">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_41">42. Χρόνια προβλήματα</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_41_0" class="form-radio" name="q3_overallSatisfaction[41]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_41" aria-label="Cells Radio Button"><label for="input_3_41_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_41_1" class="form-radio" name="q3_overallSatisfaction[41]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_41" aria-label="Cells Radio Button"><label for="input_3_41_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_41_2" class="form-radio" name="q3_overallSatisfaction[41]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_41" aria-label="Cells Radio Button"><label for="input_3_41_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_41_3" class="form-radio" name="q3_overallSatisfaction[41]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_41" aria-label="Cells Radio Button"><label for="input_3_41_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_41_4" class="form-radio" name="q3_overallSatisfaction[41]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_41" aria-label="Cells Radio Button"><label for="input_3_41_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_42">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_42">43. Οικονομικά προβλήματα</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_42_0" class="form-radio" name="q3_overallSatisfaction[42]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_42" aria-label="Cells Radio Button"><label for="input_3_42_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_42_1" class="form-radio" name="q3_overallSatisfaction[42]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_42" aria-label="Cells Radio Button"><label for="input_3_42_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_42_2" class="form-radio" name="q3_overallSatisfaction[42]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_42" aria-label="Cells Radio Button"><label for="input_3_42_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_42_3" class="form-radio" name="q3_overallSatisfaction[42]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_42" aria-label="Cells Radio Button"><label for="input_3_42_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_42_4" class="form-radio" name="q3_overallSatisfaction[42]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_42" aria-label="Cells Radio Button"><label for="input_3_42_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_43">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_43">44. Νομικά προβλήματα</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_43_0" class="form-radio" name="q3_overallSatisfaction[43]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_43" aria-label="Cells Radio Button"><label for="input_3_43_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_43_1" class="form-radio" name="q3_overallSatisfaction[43]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_43" aria-label="Cells Radio Button"><label for="input_3_43_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_43_2" class="form-radio" name="q3_overallSatisfaction[43]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_43" aria-label="Cells Radio Button"><label for="input_3_43_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_43_3" class="form-radio" name="q3_overallSatisfaction[43]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_43" aria-label="Cells Radio Button"><label for="input_3_43_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_43_4" class="form-radio" name="q3_overallSatisfaction[43]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_43" aria-label="Cells Radio Button"><label for="input_3_43_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_44">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_44">45. Άλλα προβλήματα</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_44_0" class="form-radio" name="q3_overallSatisfaction[44]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_44" aria-label="Cells Radio Button"><label for="input_3_44_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_44_1" class="form-radio" name="q3_overallSatisfaction[44]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_44" aria-label="Cells Radio Button"><label for="input_3_44_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_44_2" class="form-radio" name="q3_overallSatisfaction[44]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_44" aria-label="Cells Radio Button"><label for="input_3_44_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_44_3" class="form-radio" name="q3_overallSatisfaction[44]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_44" aria-label="Cells Radio Button"><label for="input_3_44_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_44_4" class="form-radio" name="q3_overallSatisfaction[44]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_44" aria-label="Cells Radio Button"><label for="input_3_44_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_45">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_45">46. Σκέψεις αυτοκτονίας</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_45_0" class="form-radio" name="q3_overallSatisfaction[45]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_45" aria-label="Cells Radio Button"><label for="input_3_45_0" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_45_1" class="form-radio" name="q3_overallSatisfaction[45]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_45" aria-label="Cells Radio Button"><label for="input_3_45_1" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_45_2" class="form-radio" name="q3_overallSatisfaction[45]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_45" aria-label="Cells Radio Button"><label for="input_3_45_2" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_45_3" class="form-radio" name="q3_overallSatisfaction[45]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_45" aria-label="Cells Radio Button"><label for="input_3_45_3" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_45_4" class="form-radio" name="q3_overallSatisfaction[45]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_45" aria-label="Cells Radio Button"><label for="input_3_45_4" class="matrix-choice-label matrix-radio-label" aria-hidden="true"></label></td>
                                        </tr>

                                        </tbody>
                                        @php
                                            $current_visit = $visits+1;
                                        @endphp
                                    </table>
                                        <input id="patientid" name="patientid" value="{{$patient->id}}" class="hidden">
                                        <input id="visit" name="visit" value="{{$current_visit}}" class="hidden">
                                        <textarea id="comment" name="comment" class="hidden"></textarea>
                                        <button type="submit" id="save-visit_1" class="text-blue-500 border border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-8 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"> Save</button>

                                    </form>
                                @else
                                    @php
                                        $current_visit = $visits+1;
                                    @endphp
                                Visit Number : {{$current_visit}}
                                    <form id="store_visit" class="w-full" action="{{ url('patients/store_visit').'/'.Auth::user()->id }}" method="Post" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                    <table summary="" aria-labelledby="label_3" cellpadding="4" cellspacing="0" class="form-matrix-table" data-component="matrix">
                                        <tbody><tr class="form-matrix-tr form-matrix-header-tr">
                                            <th class="form-matrix-th" style="border:none">&nbsp;</th>
                                            <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0"><label id="label_3_col_0">Καθόλου </label></th>
                                            <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_1"><label id="label_3_col_1">Λίγο</label></th>
                                            <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_2"><label id="label_3_col_2">Μέτρια</label></th>
                                            <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_3"><label id="label_3_col_3">Αρκετά</label></th>
                                            <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_4"><label id="label_3_col_4">Υπερολικά</label></th>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_0">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_0">1. Υποφέρετε από πονοκεφάλους;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_0_0" class="form-radio" name="q3_overallSatisfaction[0]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_0" aria-label="Cells Radio Button"><label for="input_3_0_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_0_1" class="form-radio" name="q3_overallSatisfaction[0]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_0" aria-label="Cells Radio Button"><label for="input_3_0_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_0_2" class="form-radio" name="q3_overallSatisfaction[0]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_0" aria-label="Cells Radio Button"><label for="input_3_0_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_0_3" class="form-radio" name="q3_overallSatisfaction[0]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_0" aria-label="Cells Radio Button"><label for="input_3_0_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_0_4" class="form-radio" name="q3_overallSatisfaction[0]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_0" aria-label="Cells Radio Button"><label for="input_3_0_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_1">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_1">2. Νοιώθετε νευρικότητα ή εσωτερική τρεµούλα;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_1_0" class="form-radio" name="q3_overallSatisfaction[1]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_1" aria-label="Cells Radio Button"><label for="input_3_1_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_1_1" class="form-radio" name="q3_overallSatisfaction[1]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_1" aria-label="Cells Radio Button"><label for="input_3_1_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_1_2" class="form-radio" name="q3_overallSatisfaction[1]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_1" aria-label="Cells Radio Button"><label for="input_3_1_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_1_3" class="form-radio" name="q3_overallSatisfaction[1]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_1" aria-label="Cells Radio Button"><label for="input_3_1_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_1_4" class="form-radio" name="q3_overallSatisfaction[1]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_1" aria-label="Cells Radio Button"><label for="input_3_1_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_2">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_2">3. Έχετε επαναλαµβανόµενες δυσάρεστες σκέψεις που δεν<span style="display: inline !important;"> φεύγουν από το µυαλό σας; </span></label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_2_0" class="form-radio" name="q3_overallSatisfaction[2]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_2" aria-label="Cells Radio Button"><label for="input_3_2_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_2_1" class="form-radio" name="q3_overallSatisfaction[2]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_2" aria-label="Cells Radio Button"><label for="input_3_2_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_2_2" class="form-radio" name="q3_overallSatisfaction[2]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_2" aria-label="Cells Radio Button"><label for="input_3_2_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_2_3" class="form-radio" name="q3_overallSatisfaction[2]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_2" aria-label="Cells Radio Button"><label for="input_3_2_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_2_4" class="form-radio" name="q3_overallSatisfaction[2]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_2" aria-label="Cells Radio Button"><label for="input_3_2_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_3">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_3">4. Έχετε τάση για λιποθυµία ή ζαλάδα;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_3_0" class="form-radio" name="q3_overallSatisfaction[3]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_3" aria-label="Cells Radio Button"><label for="input_3_3_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_3_1" class="form-radio" name="q3_overallSatisfaction[3]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_3" aria-label="Cells Radio Button"><label for="input_3_3_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_3_2" class="form-radio" name="q3_overallSatisfaction[3]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_3" aria-label="Cells Radio Button"><label for="input_3_3_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_3_3" class="form-radio" name="q3_overallSatisfaction[3]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_3" aria-label="Cells Radio Button"><label for="input_3_3_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_3_4" class="form-radio" name="q3_overallSatisfaction[3]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_3" aria-label="Cells Radio Button"><label for="input_3_3_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_4">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_4">5. Έχετε χάσει το σεξουαλικό σας ενδιαφέρον ή ευχαρίστηση;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_4_0" class="form-radio" name="q3_overallSatisfaction[4]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_4" aria-label="Cells Radio Button"><label for="input_3_4_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_4_1" class="form-radio" name="q3_overallSatisfaction[4]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_4" aria-label="Cells Radio Button"><label for="input_3_4_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_4_2" class="form-radio" name="q3_overallSatisfaction[4]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_4" aria-label="Cells Radio Button"><label for="input_3_4_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_4_3" class="form-radio" name="q3_overallSatisfaction[4]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_4" aria-label="Cells Radio Button"><label for="input_3_4_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_4_4" class="form-radio" name="q3_overallSatisfaction[4]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_4" aria-label="Cells Radio Button"><label for="input_3_4_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_5">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_5">6. Έχετε διάθεση να κατακρίνετε τους άλλους;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_5_0" class="form-radio" name="q3_overallSatisfaction[5]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_5" aria-label="Cells Radio Button"><label for="input_3_5_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_5_1" class="form-radio" name="q3_overallSatisfaction[5]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_5" aria-label="Cells Radio Button"><label for="input_3_5_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_5_2" class="form-radio" name="q3_overallSatisfaction[5]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_5" aria-label="Cells Radio Button"><label for="input_3_5_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_5_3" class="form-radio" name="q3_overallSatisfaction[5]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_5" aria-label="Cells Radio Button"><label for="input_3_5_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_5_4" class="form-radio" name="q3_overallSatisfaction[5]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_5" aria-label="Cells Radio Button"><label for="input_3_5_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_6">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_6">7. Νοµίζετε ότι κάποιος άλλος ελέγχει τη σκέψη σας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_6_0" class="form-radio" name="q3_overallSatisfaction[6]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_6" aria-label="Cells Radio Button"><label for="input_3_6_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_6_1" class="form-radio" name="q3_overallSatisfaction[6]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_6" aria-label="Cells Radio Button"><label for="input_3_6_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_6_2" class="form-radio" name="q3_overallSatisfaction[6]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_6" aria-label="Cells Radio Button"><label for="input_3_6_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_6_3" class="form-radio" name="q3_overallSatisfaction[6]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_6" aria-label="Cells Radio Button"><label for="input_3_6_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_6_4" class="form-radio" name="q3_overallSatisfaction[6]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_6" aria-label="Cells Radio Button"><label for="input_3_6_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_7">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_7">8. Αισθάνεσθε ότι οι άλλοι φταίνε για τα προβλήµατά σας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_7_0" class="form-radio" name="q3_overallSatisfaction[7]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_7" aria-label="Cells Radio Button"><label for="input_3_7_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_7_1" class="form-radio" name="q3_overallSatisfaction[7]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_7" aria-label="Cells Radio Button"><label for="input_3_7_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_7_2" class="form-radio" name="q3_overallSatisfaction[7]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_7" aria-label="Cells Radio Button"><label for="input_3_7_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_7_3" class="form-radio" name="q3_overallSatisfaction[7]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_7" aria-label="Cells Radio Button"><label for="input_3_7_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_7_4" class="form-radio" name="q3_overallSatisfaction[7]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_7" aria-label="Cells Radio Button"><label for="input_3_7_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_8">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_8">9. ∆υσκολεύεσθε να θυµάσθε διάφορα πράγµατα;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_8_0" class="form-radio" name="q3_overallSatisfaction[8]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_8" aria-label="Cells Radio Button"><label for="input_3_8_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_8_1" class="form-radio" name="q3_overallSatisfaction[8]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_8" aria-label="Cells Radio Button"><label for="input_3_8_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_8_2" class="form-radio" name="q3_overallSatisfaction[8]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_8" aria-label="Cells Radio Button"><label for="input_3_8_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_8_3" class="form-radio" name="q3_overallSatisfaction[8]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_8" aria-label="Cells Radio Button"><label for="input_3_8_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_8_4" class="form-radio" name="q3_overallSatisfaction[8]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_8" aria-label="Cells Radio Button"><label for="input_3_8_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_9">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_9">10. Ανησυχείτε για το ότι είσθε απεριποίητος ή ατηµέλητος;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_9_0" class="form-radio" name="q3_overallSatisfaction[9]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_9" aria-label="Cells Radio Button"><label for="input_3_9_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_9_1" class="form-radio" name="q3_overallSatisfaction[9]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_9" aria-label="Cells Radio Button"><label for="input_3_9_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_9_2" class="form-radio" name="q3_overallSatisfaction[9]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_9" aria-label="Cells Radio Button"><label for="input_3_9_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_9_3" class="form-radio" name="q3_overallSatisfaction[9]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_9" aria-label="Cells Radio Button"><label for="input_3_9_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_9_4" class="form-radio" name="q3_overallSatisfaction[9]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_9" aria-label="Cells Radio Button"><label for="input_3_9_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_10">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_10">11. Αισθάνεσθε ότι νευριάζετε ή ερεθίζεσθε εύκολα;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_10_0" class="form-radio" name="q3_overallSatisfaction[10]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_10" aria-label="Cells Radio Button"><label for="input_3_10_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_10_1" class="form-radio" name="q3_overallSatisfaction[10]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_10" aria-label="Cells Radio Button"><label for="input_3_10_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_10_2" class="form-radio" name="q3_overallSatisfaction[10]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_10" aria-label="Cells Radio Button"><label for="input_3_10_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_10_3" class="form-radio" name="q3_overallSatisfaction[10]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_10" aria-label="Cells Radio Button"><label for="input_3_10_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_10_4" class="form-radio" name="q3_overallSatisfaction[10]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_10" aria-label="Cells Radio Button"><label for="input_3_10_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_11">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_11">12. Νοιώθετε πόνους στην καρδιά ή στον θώρακα;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_11_0" class="form-radio" name="q3_overallSatisfaction[11]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_11" aria-label="Cells Radio Button"><label for="input_3_11_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_11_1" class="form-radio" name="q3_overallSatisfaction[11]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_11" aria-label="Cells Radio Button"><label for="input_3_11_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_11_2" class="form-radio" name="q3_overallSatisfaction[11]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_11" aria-label="Cells Radio Button"><label for="input_3_11_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_11_3" class="form-radio" name="q3_overallSatisfaction[11]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_11" aria-label="Cells Radio Button"><label for="input_3_11_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_11_4" class="form-radio" name="q3_overallSatisfaction[11]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_11" aria-label="Cells Radio Button"><label for="input_3_11_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_12">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_12">13. Αισθάνεσθε φόβο όταν βρίσκεσθε σε ανοιχτούς χώρους ή <span style="display: inline !important;"> στους δρόµους;</span></label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_12_0" class="form-radio" name="q3_overallSatisfaction[12]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_12" aria-label="Cells Radio Button"><label for="input_3_12_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_12_1" class="form-radio" name="q3_overallSatisfaction[12]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_12" aria-label="Cells Radio Button"><label for="input_3_12_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_12_2" class="form-radio" name="q3_overallSatisfaction[12]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_12" aria-label="Cells Radio Button"><label for="input_3_12_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_12_3" class="form-radio" name="q3_overallSatisfaction[12]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_12" aria-label="Cells Radio Button"><label for="input_3_12_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_12_4" class="form-radio" name="q3_overallSatisfaction[12]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_12" aria-label="Cells Radio Button"><label for="input_3_12_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_13">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_13"> 14. Αισθάνεσθε υποτονικός, αδρανής, αποδυναµωµένος;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_13_0" class="form-radio" name="q3_overallSatisfaction[13]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_13" aria-label="Cells Radio Button"><label for="input_3_13_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_13_1" class="form-radio" name="q3_overallSatisfaction[13]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_13" aria-label="Cells Radio Button"><label for="input_3_13_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_13_2" class="form-radio" name="q3_overallSatisfaction[13]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_13" aria-label="Cells Radio Button"><label for="input_3_13_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_13_3" class="form-radio" name="q3_overallSatisfaction[13]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_13" aria-label="Cells Radio Button"><label for="input_3_13_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_13_4" class="form-radio" name="q3_overallSatisfaction[13]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_13" aria-label="Cells Radio Button"><label for="input_3_13_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_14">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_14">15. Έχετε σκέψεις αυτοκτονίας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_14_0" class="form-radio" name="q3_overallSatisfaction[14]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_14" aria-label="Cells Radio Button"><label for="input_3_14_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_14_1" class="form-radio" name="q3_overallSatisfaction[14]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_14" aria-label="Cells Radio Button"><label for="input_3_14_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_14_2" class="form-radio" name="q3_overallSatisfaction[14]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_14" aria-label="Cells Radio Button"><label for="input_3_14_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_14_3" class="form-radio" name="q3_overallSatisfaction[14]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_14" aria-label="Cells Radio Button"><label for="input_3_14_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_14_4" class="form-radio" name="q3_overallSatisfaction[14]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_14" aria-label="Cells Radio Button"><label for="input_3_14_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_15">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_15">16. Ακούτε φωνές που οι άλλοι άνθρωποι δεν ακούν;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_15_0" class="form-radio" name="q3_overallSatisfaction[15]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_15" aria-label="Cells Radio Button"><label for="input_3_15_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_15_1" class="form-radio" name="q3_overallSatisfaction[15]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_15" aria-label="Cells Radio Button"><label for="input_3_15_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_15_2" class="form-radio" name="q3_overallSatisfaction[15]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_15" aria-label="Cells Radio Button"><label for="input_3_15_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_15_3" class="form-radio" name="q3_overallSatisfaction[15]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_15" aria-label="Cells Radio Button"><label for="input_3_15_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_15_4" class="form-radio" name="q3_overallSatisfaction[15]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_15" aria-label="Cells Radio Button"><label for="input_3_15_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_16">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_16">17. Τρέµετε;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_16_0" class="form-radio" name="q3_overallSatisfaction[16]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_16" aria-label="Cells Radio Button"><label for="input_3_16_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_16_1" class="form-radio" name="q3_overallSatisfaction[16]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_16" aria-label="Cells Radio Button"><label for="input_3_16_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_16_2" class="form-radio" name="q3_overallSatisfaction[16]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_16" aria-label="Cells Radio Button"><label for="input_3_16_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_16_3" class="form-radio" name="q3_overallSatisfaction[16]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_16" aria-label="Cells Radio Button"><label for="input_3_16_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_16_4" class="form-radio" name="q3_overallSatisfaction[16]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_16" aria-label="Cells Radio Button"><label for="input_3_16_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_17">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_17">18. Αισθάνεσθε ότι δεν µπορείτε να εµπιστευτείτε τους </label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_17_0" class="form-radio" name="q3_overallSatisfaction[17]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_17" aria-label="Cells Radio Button"><label for="input_3_17_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_17_1" class="form-radio" name="q3_overallSatisfaction[17]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_17" aria-label="Cells Radio Button"><label for="input_3_17_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_17_2" class="form-radio" name="q3_overallSatisfaction[17]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_17" aria-label="Cells Radio Button"><label for="input_3_17_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_17_3" class="form-radio" name="q3_overallSatisfaction[17]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_17" aria-label="Cells Radio Button"><label for="input_3_17_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_17_4" class="form-radio" name="q3_overallSatisfaction[17]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_17" aria-label="Cells Radio Button"><label for="input_3_17_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_18">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_18"> περισσότερους ανθρώπους; </label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_18_0" class="form-radio" name="q3_overallSatisfaction[18]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_18" aria-label="Cells Radio Button"><label for="input_3_18_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_18_1" class="form-radio" name="q3_overallSatisfaction[18]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_18" aria-label="Cells Radio Button"><label for="input_3_18_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_18_2" class="form-radio" name="q3_overallSatisfaction[18]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_18" aria-label="Cells Radio Button"><label for="input_3_18_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_18_3" class="form-radio" name="q3_overallSatisfaction[18]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_18" aria-label="Cells Radio Button"><label for="input_3_18_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_18_4" class="form-radio" name="q3_overallSatisfaction[18]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_18" aria-label="Cells Radio Button"><label for="input_3_18_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_19">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_19">19. Έχετε ανορεξία</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_19_0" class="form-radio" name="q3_overallSatisfaction[19]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_19" aria-label="Cells Radio Button"><label for="input_3_19_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_19_1" class="form-radio" name="q3_overallSatisfaction[19]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_19" aria-label="Cells Radio Button"><label for="input_3_19_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_19_2" class="form-radio" name="q3_overallSatisfaction[19]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_19" aria-label="Cells Radio Button"><label for="input_3_19_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_19_3" class="form-radio" name="q3_overallSatisfaction[19]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_19" aria-label="Cells Radio Button"><label for="input_3_19_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_19_4" class="form-radio" name="q3_overallSatisfaction[19]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_19" aria-label="Cells Radio Button"><label for="input_3_19_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_20">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_20">20. Κλαίτε εύκολα;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_20_0" class="form-radio" name="q3_overallSatisfaction[20]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_20" aria-label="Cells Radio Button"><label for="input_3_20_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_20_1" class="form-radio" name="q3_overallSatisfaction[20]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_20" aria-label="Cells Radio Button"><label for="input_3_20_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_20_2" class="form-radio" name="q3_overallSatisfaction[20]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_20" aria-label="Cells Radio Button"><label for="input_3_20_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_20_3" class="form-radio" name="q3_overallSatisfaction[20]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_20" aria-label="Cells Radio Button"><label for="input_3_20_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_20_4" class="form-radio" name="q3_overallSatisfaction[20]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_20" aria-label="Cells Radio Button"><label for="input_3_20_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_21">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_21">21. Αισθάνεσθε ντροπαλός ή όχι άνετα µε το άλλο φύλο;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_21_0" class="form-radio" name="q3_overallSatisfaction[21]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_21" aria-label="Cells Radio Button"><label for="input_3_21_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_21_1" class="form-radio" name="q3_overallSatisfaction[21]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_21" aria-label="Cells Radio Button"><label for="input_3_21_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_21_2" class="form-radio" name="q3_overallSatisfaction[21]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_21" aria-label="Cells Radio Button"><label for="input_3_21_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_21_3" class="form-radio" name="q3_overallSatisfaction[21]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_21" aria-label="Cells Radio Button"><label for="input_3_21_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_21_4" class="form-radio" name="q3_overallSatisfaction[21]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_21" aria-label="Cells Radio Button"><label for="input_3_21_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_22">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_22">22. Νοιώθετε ότι έχετε µπλεχτεί ή παγιδευτεί;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_22_0" class="form-radio" name="q3_overallSatisfaction[22]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_22" aria-label="Cells Radio Button"><label for="input_3_22_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_22_1" class="form-radio" name="q3_overallSatisfaction[22]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_22" aria-label="Cells Radio Button"><label for="input_3_22_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_22_2" class="form-radio" name="q3_overallSatisfaction[22]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_22" aria-label="Cells Radio Button"><label for="input_3_22_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_22_3" class="form-radio" name="q3_overallSatisfaction[22]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_22" aria-label="Cells Radio Button"><label for="input_3_22_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_22_4" class="form-radio" name="q3_overallSatisfaction[22]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_22" aria-label="Cells Radio Button"><label for="input_3_22_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_23">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_23">23. Ξαφνικά φοβάσθε χωρίς κανένα λόγο;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_23_0" class="form-radio" name="q3_overallSatisfaction[23]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_23" aria-label="Cells Radio Button"><label for="input_3_23_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_23_1" class="form-radio" name="q3_overallSatisfaction[23]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_23" aria-label="Cells Radio Button"><label for="input_3_23_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_23_2" class="form-radio" name="q3_overallSatisfaction[23]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_23" aria-label="Cells Radio Button"><label for="input_3_23_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_23_3" class="form-radio" name="q3_overallSatisfaction[23]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_23" aria-label="Cells Radio Button"><label for="input_3_23_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_23_4" class="form-radio" name="q3_overallSatisfaction[23]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_23" aria-label="Cells Radio Button"><label for="input_3_23_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_24">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_24">24. Έχετε εκρήξεις οργής που δεν µπορείτε να ελέγξετε;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_24_0" class="form-radio" name="q3_overallSatisfaction[24]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_24" aria-label="Cells Radio Button"><label for="input_3_24_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_24_1" class="form-radio" name="q3_overallSatisfaction[24]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_24" aria-label="Cells Radio Button"><label for="input_3_24_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_24_2" class="form-radio" name="q3_overallSatisfaction[24]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_24" aria-label="Cells Radio Button"><label for="input_3_24_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_24_3" class="form-radio" name="q3_overallSatisfaction[24]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_24" aria-label="Cells Radio Button"><label for="input_3_24_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_24_4" class="form-radio" name="q3_overallSatisfaction[24]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_24" aria-label="Cells Radio Button"><label for="input_3_24_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_25">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_25">25. Φοβάσθε να βγείτε µόνος από το σπίτι σας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_25_0" class="form-radio" name="q3_overallSatisfaction[25]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_25" aria-label="Cells Radio Button"><label for="input_3_25_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_25_1" class="form-radio" name="q3_overallSatisfaction[25]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_25" aria-label="Cells Radio Button"><label for="input_3_25_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_25_2" class="form-radio" name="q3_overallSatisfaction[25]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_25" aria-label="Cells Radio Button"><label for="input_3_25_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_25_3" class="form-radio" name="q3_overallSatisfaction[25]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_25" aria-label="Cells Radio Button"><label for="input_3_25_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_25_4" class="form-radio" name="q3_overallSatisfaction[25]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_25" aria-label="Cells Radio Button"><label for="input_3_25_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_26">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_26">26. Κατηγορείτε τον εαυτό σας για διάφορα πράγµατα;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_26_0" class="form-radio" name="q3_overallSatisfaction[26]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_26" aria-label="Cells Radio Button"><label for="input_3_26_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_26_1" class="form-radio" name="q3_overallSatisfaction[26]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_26" aria-label="Cells Radio Button"><label for="input_3_26_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_26_2" class="form-radio" name="q3_overallSatisfaction[26]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_26" aria-label="Cells Radio Button"><label for="input_3_26_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_26_3" class="form-radio" name="q3_overallSatisfaction[26]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_26" aria-label="Cells Radio Button"><label for="input_3_26_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_26_4" class="form-radio" name="q3_overallSatisfaction[26]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_26" aria-label="Cells Radio Button"><label for="input_3_26_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_27">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_27">27. Έχετε πόνους στη µέση;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_27_0" class="form-radio" name="q3_overallSatisfaction[27]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_27" aria-label="Cells Radio Button"><label for="input_3_27_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_27_1" class="form-radio" name="q3_overallSatisfaction[27]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_27" aria-label="Cells Radio Button"><label for="input_3_27_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_27_2" class="form-radio" name="q3_overallSatisfaction[27]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_27" aria-label="Cells Radio Button"><label for="input_3_27_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_27_3" class="form-radio" name="q3_overallSatisfaction[27]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_27" aria-label="Cells Radio Button"><label for="input_3_27_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_27_4" class="form-radio" name="q3_overallSatisfaction[27]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_27" aria-label="Cells Radio Button"><label for="input_3_27_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_28">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_28">28. Αισθάνεσθε ότι εµποδίζεσθε να κάνετε αυτά που θέλετε;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_28_0" class="form-radio" name="q3_overallSatisfaction[28]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_28" aria-label="Cells Radio Button"><label for="input_3_28_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_28_1" class="form-radio" name="q3_overallSatisfaction[28]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_28" aria-label="Cells Radio Button"><label for="input_3_28_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_28_2" class="form-radio" name="q3_overallSatisfaction[28]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_28" aria-label="Cells Radio Button"><label for="input_3_28_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_28_3" class="form-radio" name="q3_overallSatisfaction[28]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_28" aria-label="Cells Radio Button"><label for="input_3_28_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_28_4" class="form-radio" name="q3_overallSatisfaction[28]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_28" aria-label="Cells Radio Button"><label for="input_3_28_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_29">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_29">29. Αισθάνεσθε µοναξιά;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_29_0" class="form-radio" name="q3_overallSatisfaction[29]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_29" aria-label="Cells Radio Button"><label for="input_3_29_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_29_1" class="form-radio" name="q3_overallSatisfaction[29]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_29" aria-label="Cells Radio Button"><label for="input_3_29_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_29_2" class="form-radio" name="q3_overallSatisfaction[29]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_29" aria-label="Cells Radio Button"><label for="input_3_29_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_29_3" class="form-radio" name="q3_overallSatisfaction[29]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_29" aria-label="Cells Radio Button"><label for="input_3_29_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_29_4" class="form-radio" name="q3_overallSatisfaction[29]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_29" aria-label="Cells Radio Button"><label for="input_3_29_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_30">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_30">30. Αισθάνεσθε κακοκεφιά;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_30_0" class="form-radio" name="q3_overallSatisfaction[30]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_30" aria-label="Cells Radio Button"><label for="input_3_30_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_30_1" class="form-radio" name="q3_overallSatisfaction[30]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_30" aria-label="Cells Radio Button"><label for="input_3_30_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_30_2" class="form-radio" name="q3_overallSatisfaction[30]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_30" aria-label="Cells Radio Button"><label for="input_3_30_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_30_3" class="form-radio" name="q3_overallSatisfaction[30]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_30" aria-label="Cells Radio Button"><label for="input_3_30_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_30_4" class="form-radio" name="q3_overallSatisfaction[30]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_30" aria-label="Cells Radio Button"><label for="input_3_30_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_31">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_31">31. Ανησυχείτε υπερβολικά για διάφορες καταστάσεις;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_31_0" class="form-radio" name="q3_overallSatisfaction[31]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_31" aria-label="Cells Radio Button"><label for="input_3_31_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_31_1" class="form-radio" name="q3_overallSatisfaction[31]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_31" aria-label="Cells Radio Button"><label for="input_3_31_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_31_2" class="form-radio" name="q3_overallSatisfaction[31]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_31" aria-label="Cells Radio Button"><label for="input_3_31_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_31_3" class="form-radio" name="q3_overallSatisfaction[31]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_31" aria-label="Cells Radio Button"><label for="input_3_31_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_31_4" class="form-radio" name="q3_overallSatisfaction[31]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_31" aria-label="Cells Radio Button"><label for="input_3_31_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_32">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_32">32. ∆εν βρίσκετε ενδιαφέρον σε τίποτα;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_32_0" class="form-radio" name="q3_overallSatisfaction[32]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_32" aria-label="Cells Radio Button"><label for="input_3_32_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_32_1" class="form-radio" name="q3_overallSatisfaction[32]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_32" aria-label="Cells Radio Button"><label for="input_3_32_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_32_2" class="form-radio" name="q3_overallSatisfaction[32]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_32" aria-label="Cells Radio Button"><label for="input_3_32_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_32_3" class="form-radio" name="q3_overallSatisfaction[32]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_32" aria-label="Cells Radio Button"><label for="input_3_32_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_32_4" class="form-radio" name="q3_overallSatisfaction[32]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_32" aria-label="Cells Radio Button"><label for="input_3_32_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_33">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_33">33. Νοιώθετε φοβισµένος;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_33_0" class="form-radio" name="q3_overallSatisfaction[33]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_33" aria-label="Cells Radio Button"><label for="input_3_33_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_33_1" class="form-radio" name="q3_overallSatisfaction[33]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_33" aria-label="Cells Radio Button"><label for="input_3_33_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_33_2" class="form-radio" name="q3_overallSatisfaction[33]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_33" aria-label="Cells Radio Button"><label for="input_3_33_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_33_3" class="form-radio" name="q3_overallSatisfaction[33]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_33" aria-label="Cells Radio Button"><label for="input_3_33_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_33_4" class="form-radio" name="q3_overallSatisfaction[33]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_33" aria-label="Cells Radio Button"><label for="input_3_33_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_34">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_34">34. Τα αισθήµατά σας εύκολα πληγώνονται;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_34_0" class="form-radio" name="q3_overallSatisfaction[34]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_34" aria-label="Cells Radio Button"><label for="input_3_34_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_34_1" class="form-radio" name="q3_overallSatisfaction[34]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_34" aria-label="Cells Radio Button"><label for="input_3_34_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_34_2" class="form-radio" name="q3_overallSatisfaction[34]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_34" aria-label="Cells Radio Button"><label for="input_3_34_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_34_3" class="form-radio" name="q3_overallSatisfaction[34]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_34" aria-label="Cells Radio Button"><label for="input_3_34_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_34_4" class="form-radio" name="q3_overallSatisfaction[34]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_34" aria-label="Cells Radio Button"><label for="input_3_34_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_35">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_35">35. Οι άλλοι γνωρίζουν τις προσωπικές σας σκέψεις;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_35_0" class="form-radio" name="q3_overallSatisfaction[35]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_35" aria-label="Cells Radio Button"><label for="input_3_35_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_35_1" class="form-radio" name="q3_overallSatisfaction[35]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_35" aria-label="Cells Radio Button"><label for="input_3_35_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_35_2" class="form-radio" name="q3_overallSatisfaction[35]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_35" aria-label="Cells Radio Button"><label for="input_3_35_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_35_3" class="form-radio" name="q3_overallSatisfaction[35]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_35" aria-label="Cells Radio Button"><label for="input_3_35_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_35_4" class="form-radio" name="q3_overallSatisfaction[35]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_35" aria-label="Cells Radio Button"><label for="input_3_35_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_36">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_36">36. Αισθάνεσθε ότι οι άλλοι δεν σας καταλαβαίνουν και δεν <span style="display: inline !important;"> σας συµπονούν; </span></label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_36_0" class="form-radio" name="q3_overallSatisfaction[36]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_36" aria-label="Cells Radio Button"><label for="input_3_36_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_36_1" class="form-radio" name="q3_overallSatisfaction[36]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_36" aria-label="Cells Radio Button"><label for="input_3_36_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_36_2" class="form-radio" name="q3_overallSatisfaction[36]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_36" aria-label="Cells Radio Button"><label for="input_3_36_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_36_3" class="form-radio" name="q3_overallSatisfaction[36]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_36" aria-label="Cells Radio Button"><label for="input_3_36_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_36_4" class="form-radio" name="q3_overallSatisfaction[36]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_36" aria-label="Cells Radio Button"><label for="input_3_36_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_37">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_37">37. Αισθάνεσθε ότι οι άλλοι είναι εχθρικοί ή σας αντιπαθούν;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_37_0" class="form-radio" name="q3_overallSatisfaction[37]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_37" aria-label="Cells Radio Button"><label for="input_3_37_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_37_1" class="form-radio" name="q3_overallSatisfaction[37]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_37" aria-label="Cells Radio Button"><label for="input_3_37_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_37_2" class="form-radio" name="q3_overallSatisfaction[37]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_37" aria-label="Cells Radio Button"><label for="input_3_37_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_37_3" class="form-radio" name="q3_overallSatisfaction[37]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_37" aria-label="Cells Radio Button"><label for="input_3_37_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_37_4" class="form-radio" name="q3_overallSatisfaction[37]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_37" aria-label="Cells Radio Button"><label for="input_3_37_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_38">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_38">38. Πρέπει να ενεργείτε πολύ αργά ώστε να είσθε σίγουρος <span style="display: inline !important;"> ότι δεν έχετε κάνει λάθος; </span></label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_38_0" class="form-radio" name="q3_overallSatisfaction[38]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_38" aria-label="Cells Radio Button"><label for="input_3_38_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_38_1" class="form-radio" name="q3_overallSatisfaction[38]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_38" aria-label="Cells Radio Button"><label for="input_3_38_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_38_2" class="form-radio" name="q3_overallSatisfaction[38]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_38" aria-label="Cells Radio Button"><label for="input_3_38_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_38_3" class="form-radio" name="q3_overallSatisfaction[38]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_38" aria-label="Cells Radio Button"><label for="input_3_38_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_38_4" class="form-radio" name="q3_overallSatisfaction[38]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_38" aria-label="Cells Radio Button"><label for="input_3_38_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_39">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_39">39. Νοιώθετε καρδιακούς παλµούς ή ταχυπαλµία;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_39_0" class="form-radio" name="q3_overallSatisfaction[39]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_39" aria-label="Cells Radio Button"><label for="input_3_39_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_39_1" class="form-radio" name="q3_overallSatisfaction[39]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_39" aria-label="Cells Radio Button"><label for="input_3_39_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_39_2" class="form-radio" name="q3_overallSatisfaction[39]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_39" aria-label="Cells Radio Button"><label for="input_3_39_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_39_3" class="form-radio" name="q3_overallSatisfaction[39]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_39" aria-label="Cells Radio Button"><label for="input_3_39_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_39_4" class="form-radio" name="q3_overallSatisfaction[39]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_39" aria-label="Cells Radio Button"><label for="input_3_39_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_40">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_40">40. Έχετε ναυτία ή στοµαχικές διαταραχές;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_40_0" class="form-radio" name="q3_overallSatisfaction[40]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_40" aria-label="Cells Radio Button"><label for="input_3_40_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_40_1" class="form-radio" name="q3_overallSatisfaction[40]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_40" aria-label="Cells Radio Button"><label for="input_3_40_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_40_2" class="form-radio" name="q3_overallSatisfaction[40]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_40" aria-label="Cells Radio Button"><label for="input_3_40_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_40_3" class="form-radio" name="q3_overallSatisfaction[40]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_40" aria-label="Cells Radio Button"><label for="input_3_40_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_40_4" class="form-radio" name="q3_overallSatisfaction[40]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_40" aria-label="Cells Radio Button"><label for="input_3_40_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_41">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_41">41. Αισθάνεσθε κατώτερος από τους άλλους;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_41_0" class="form-radio" name="q3_overallSatisfaction[41]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_41" aria-label="Cells Radio Button"><label for="input_3_41_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_41_1" class="form-radio" name="q3_overallSatisfaction[41]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_41" aria-label="Cells Radio Button"><label for="input_3_41_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_41_2" class="form-radio" name="q3_overallSatisfaction[41]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_41" aria-label="Cells Radio Button"><label for="input_3_41_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_41_3" class="form-radio" name="q3_overallSatisfaction[41]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_41" aria-label="Cells Radio Button"><label for="input_3_41_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_41_4" class="form-radio" name="q3_overallSatisfaction[41]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_41" aria-label="Cells Radio Button"><label for="input_3_41_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_42">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_42">42. Νοιώθετε πόνους στους µύς; </label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_42_0" class="form-radio" name="q3_overallSatisfaction[42]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_42" aria-label="Cells Radio Button"><label for="input_3_42_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_42_1" class="form-radio" name="q3_overallSatisfaction[42]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_42" aria-label="Cells Radio Button"><label for="input_3_42_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_42_2" class="form-radio" name="q3_overallSatisfaction[42]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_42" aria-label="Cells Radio Button"><label for="input_3_42_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_42_3" class="form-radio" name="q3_overallSatisfaction[42]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_42" aria-label="Cells Radio Button"><label for="input_3_42_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_42_4" class="form-radio" name="q3_overallSatisfaction[42]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_42" aria-label="Cells Radio Button"><label for="input_3_42_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_43">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_43">43. Αισθάνεσθε ότι σας παρακολουθούν ή ότι µιλούν για σας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_43_0" class="form-radio" name="q3_overallSatisfaction[43]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_43" aria-label="Cells Radio Button"><label for="input_3_43_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_43_1" class="form-radio" name="q3_overallSatisfaction[43]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_43" aria-label="Cells Radio Button"><label for="input_3_43_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_43_2" class="form-radio" name="q3_overallSatisfaction[43]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_43" aria-label="Cells Radio Button"><label for="input_3_43_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_43_3" class="form-radio" name="q3_overallSatisfaction[43]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_43" aria-label="Cells Radio Button"><label for="input_3_43_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_43_4" class="form-radio" name="q3_overallSatisfaction[43]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_43" aria-label="Cells Radio Button"><label for="input_3_43_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_44">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_44">44. Υποφέρετε από αϋπνία;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_44_0" class="form-radio" name="q3_overallSatisfaction[44]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_44" aria-label="Cells Radio Button"><label for="input_3_44_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_44_1" class="form-radio" name="q3_overallSatisfaction[44]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_44" aria-label="Cells Radio Button"><label for="input_3_44_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_44_2" class="form-radio" name="q3_overallSatisfaction[44]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_44" aria-label="Cells Radio Button"><label for="input_3_44_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_44_3" class="form-radio" name="q3_overallSatisfaction[44]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_44" aria-label="Cells Radio Button"><label for="input_3_44_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_44_4" class="form-radio" name="q3_overallSatisfaction[44]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_44" aria-label="Cells Radio Button"><label for="input_3_44_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_45">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_45">45. Πρέπει να ελέγχετε ξανά και ξανά ότι κάνετε;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_45_0" class="form-radio" name="q3_overallSatisfaction[45]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_45" aria-label="Cells Radio Button"><label for="input_3_45_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_45_1" class="form-radio" name="q3_overallSatisfaction[45]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_45" aria-label="Cells Radio Button"><label for="input_3_45_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_45_2" class="form-radio" name="q3_overallSatisfaction[45]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_45" aria-label="Cells Radio Button"><label for="input_3_45_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_45_3" class="form-radio" name="q3_overallSatisfaction[45]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_45" aria-label="Cells Radio Button"><label for="input_3_45_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_45_4" class="form-radio" name="q3_overallSatisfaction[45]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_45" aria-label="Cells Radio Button"><label for="input_3_45_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_46">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_46">46. ∆υσκολεύεσθε να παίρνετε αποφάσεις;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_46_0" class="form-radio" name="q3_overallSatisfaction[46]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_46" aria-label="Cells Radio Button"><label for="input_3_46_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_46_1" class="form-radio" name="q3_overallSatisfaction[46]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_46" aria-label="Cells Radio Button"><label for="input_3_46_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_46_2" class="form-radio" name="q3_overallSatisfaction[46]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_46" aria-label="Cells Radio Button"><label for="input_3_46_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_46_3" class="form-radio" name="q3_overallSatisfaction[46]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_46" aria-label="Cells Radio Button"><label for="input_3_46_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_46_4" class="form-radio" name="q3_overallSatisfaction[46]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_46" aria-label="Cells Radio Button"><label for="input_3_46_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_47">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_47">47. Φοβάσθε να ταξιδεύετε µε λεωφορείο ή τραίνο;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_47_0" class="form-radio" name="q3_overallSatisfaction[47]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_47" aria-label="Cells Radio Button"><label for="input_3_47_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_47_1" class="form-radio" name="q3_overallSatisfaction[47]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_47" aria-label="Cells Radio Button"><label for="input_3_47_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_47_2" class="form-radio" name="q3_overallSatisfaction[47]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_47" aria-label="Cells Radio Button"><label for="input_3_47_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_47_3" class="form-radio" name="q3_overallSatisfaction[47]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_47" aria-label="Cells Radio Button"><label for="input_3_47_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_47_4" class="form-radio" name="q3_overallSatisfaction[47]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_47" aria-label="Cells Radio Button"><label for="input_3_47_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_48">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_48">48. Έχετε δύσπνοια;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_48_0" class="form-radio" name="q3_overallSatisfaction[48]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_48" aria-label="Cells Radio Button"><label for="input_3_48_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_48_1" class="form-radio" name="q3_overallSatisfaction[48]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_48" aria-label="Cells Radio Button"><label for="input_3_48_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_48_2" class="form-radio" name="q3_overallSatisfaction[48]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_48" aria-label="Cells Radio Button"><label for="input_3_48_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_48_3" class="form-radio" name="q3_overallSatisfaction[48]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_48" aria-label="Cells Radio Button"><label for="input_3_48_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_48_4" class="form-radio" name="q3_overallSatisfaction[48]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_48" aria-label="Cells Radio Button"><label for="input_3_48_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_49">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_49">49. Αισθάνεσθε ζέστη ή κρύο;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_49_0" class="form-radio" name="q3_overallSatisfaction[49]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_49" aria-label="Cells Radio Button"><label for="input_3_49_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_49_1" class="form-radio" name="q3_overallSatisfaction[49]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_49" aria-label="Cells Radio Button"><label for="input_3_49_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_49_2" class="form-radio" name="q3_overallSatisfaction[49]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_49" aria-label="Cells Radio Button"><label for="input_3_49_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_49_3" class="form-radio" name="q3_overallSatisfaction[49]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_49" aria-label="Cells Radio Button"><label for="input_3_49_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_49_4" class="form-radio" name="q3_overallSatisfaction[49]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_49" aria-label="Cells Radio Button"><label for="input_3_49_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_50">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_50">50. Νοιώθετε ότι πρέπει να αποφεύγετε µερικά πράγµατα, µέρη <span style="display: inline !important;"> ή ασχολίες γιατί σας φοβίζουν; </span></label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_50_0" class="form-radio" name="q3_overallSatisfaction[50]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_50" aria-label="Cells Radio Button"><label for="input_3_50_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_50_1" class="form-radio" name="q3_overallSatisfaction[50]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_50" aria-label="Cells Radio Button"><label for="input_3_50_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_50_2" class="form-radio" name="q3_overallSatisfaction[50]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_50" aria-label="Cells Radio Button"><label for="input_3_50_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_50_3" class="form-radio" name="q3_overallSatisfaction[50]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_50" aria-label="Cells Radio Button"><label for="input_3_50_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_50_4" class="form-radio" name="q3_overallSatisfaction[50]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_50" aria-label="Cells Radio Button"><label for="input_3_50_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_51">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_51">51. Νοιώθετε να αδειάζει το µυαλό σας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_51_0" class="form-radio" name="q3_overallSatisfaction[51]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_51" aria-label="Cells Radio Button"><label for="input_3_51_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_51_1" class="form-radio" name="q3_overallSatisfaction[51]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_51" aria-label="Cells Radio Button"><label for="input_3_51_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_51_2" class="form-radio" name="q3_overallSatisfaction[51]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_51" aria-label="Cells Radio Button"><label for="input_3_51_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_51_3" class="form-radio" name="q3_overallSatisfaction[51]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_51" aria-label="Cells Radio Button"><label for="input_3_51_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_51_4" class="form-radio" name="q3_overallSatisfaction[51]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_51" aria-label="Cells Radio Button"><label for="input_3_51_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_52">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_52">52. Αισθάνεσθε µούδιασµα ή ελαφρό πόνο σε τµήµατα του <span style="display: inline !important;"> σώµατός σας; </span><br> </label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_52_0" class="form-radio" name="q3_overallSatisfaction[52]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_52" aria-label="Cells Radio Button"><label for="input_3_52_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_52_1" class="form-radio" name="q3_overallSatisfaction[52]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_52" aria-label="Cells Radio Button"><label for="input_3_52_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_52_2" class="form-radio" name="q3_overallSatisfaction[52]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_52" aria-label="Cells Radio Button"><label for="input_3_52_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_52_3" class="form-radio" name="q3_overallSatisfaction[52]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_52" aria-label="Cells Radio Button"><label for="input_3_52_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_52_4" class="form-radio" name="q3_overallSatisfaction[52]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_52" aria-label="Cells Radio Button"><label for="input_3_52_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_53">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_53">53. Έχετε ένα κόµπο στο λαιµό;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_53_0" class="form-radio" name="q3_overallSatisfaction[53]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_53" aria-label="Cells Radio Button"><label for="input_3_53_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_53_1" class="form-radio" name="q3_overallSatisfaction[53]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_53" aria-label="Cells Radio Button"><label for="input_3_53_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_53_2" class="form-radio" name="q3_overallSatisfaction[53]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_53" aria-label="Cells Radio Button"><label for="input_3_53_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_53_3" class="form-radio" name="q3_overallSatisfaction[53]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_53" aria-label="Cells Radio Button"><label for="input_3_53_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_53_4" class="form-radio" name="q3_overallSatisfaction[53]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_53" aria-label="Cells Radio Button"><label for="input_3_53_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_54">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_54">54. Πιστεύετε ότι δεν έχετε ελπίδες για το µέλλον;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_54_0" class="form-radio" name="q3_overallSatisfaction[54]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_54" aria-label="Cells Radio Button"><label for="input_3_54_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_54_1" class="form-radio" name="q3_overallSatisfaction[54]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_54" aria-label="Cells Radio Button"><label for="input_3_54_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_54_2" class="form-radio" name="q3_overallSatisfaction[54]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_54" aria-label="Cells Radio Button"><label for="input_3_54_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_54_3" class="form-radio" name="q3_overallSatisfaction[54]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_54" aria-label="Cells Radio Button"><label for="input_3_54_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_54_4" class="form-radio" name="q3_overallSatisfaction[54]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_54" aria-label="Cells Radio Button"><label for="input_3_54_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_55">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_55">55. ∆υσκολεύεσθε να συγκεντρωθείτε;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_55_0" class="form-radio" name="q3_overallSatisfaction[55]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_55" aria-label="Cells Radio Button"><label for="input_3_55_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_55_1" class="form-radio" name="q3_overallSatisfaction[55]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_55" aria-label="Cells Radio Button"><label for="input_3_55_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_55_2" class="form-radio" name="q3_overallSatisfaction[55]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_55" aria-label="Cells Radio Button"><label for="input_3_55_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_55_3" class="form-radio" name="q3_overallSatisfaction[55]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_55" aria-label="Cells Radio Button"><label for="input_3_55_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_55_4" class="form-radio" name="q3_overallSatisfaction[55]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_55" aria-label="Cells Radio Button"><label for="input_3_55_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_56">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_56">56. Αισθάνεσθε αδυναµία σε τµήµατα του σώµατός σας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_56_0" class="form-radio" name="q3_overallSatisfaction[56]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_56" aria-label="Cells Radio Button"><label for="input_3_56_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_56_1" class="form-radio" name="q3_overallSatisfaction[56]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_56" aria-label="Cells Radio Button"><label for="input_3_56_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_56_2" class="form-radio" name="q3_overallSatisfaction[56]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_56" aria-label="Cells Radio Button"><label for="input_3_56_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_56_3" class="form-radio" name="q3_overallSatisfaction[56]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_56" aria-label="Cells Radio Button"><label for="input_3_56_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_56_4" class="form-radio" name="q3_overallSatisfaction[56]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_56" aria-label="Cells Radio Button"><label for="input_3_56_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_57">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_57">57. Αισθάνεσθε τεντωµένα τα νεύρα σας ή γεµάτος αγωνία;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_57_0" class="form-radio" name="q3_overallSatisfaction[57]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_57" aria-label="Cells Radio Button"><label for="input_3_57_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_57_1" class="form-radio" name="q3_overallSatisfaction[57]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_57" aria-label="Cells Radio Button"><label for="input_3_57_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_57_2" class="form-radio" name="q3_overallSatisfaction[57]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_57" aria-label="Cells Radio Button"><label for="input_3_57_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_57_3" class="form-radio" name="q3_overallSatisfaction[57]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_57" aria-label="Cells Radio Button"><label for="input_3_57_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_57_4" class="form-radio" name="q3_overallSatisfaction[57]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_57" aria-label="Cells Radio Button"><label for="input_3_57_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_58">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_58">58. Νοιώθετε βάρος στα χέρια ή στα πόδια σας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_58_0" class="form-radio" name="q3_overallSatisfaction[58]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_58" aria-label="Cells Radio Button"><label for="input_3_58_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_58_1" class="form-radio" name="q3_overallSatisfaction[58]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_58" aria-label="Cells Radio Button"><label for="input_3_58_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_58_2" class="form-radio" name="q3_overallSatisfaction[58]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_58" aria-label="Cells Radio Button"><label for="input_3_58_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_58_3" class="form-radio" name="q3_overallSatisfaction[58]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_58" aria-label="Cells Radio Button"><label for="input_3_58_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_58_4" class="form-radio" name="q3_overallSatisfaction[58]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_58" aria-label="Cells Radio Button"><label for="input_3_58_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_59">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_59">59. Έχετε σκέψεις θανάτου ή ότι πεθαίνετε;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_59_0" class="form-radio" name="q3_overallSatisfaction[59]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_59" aria-label="Cells Radio Button"><label for="input_3_59_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_59_1" class="form-radio" name="q3_overallSatisfaction[59]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_59" aria-label="Cells Radio Button"><label for="input_3_59_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_59_2" class="form-radio" name="q3_overallSatisfaction[59]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_59" aria-label="Cells Radio Button"><label for="input_3_59_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_59_3" class="form-radio" name="q3_overallSatisfaction[59]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_59" aria-label="Cells Radio Button"><label for="input_3_59_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_59_4" class="form-radio" name="q3_overallSatisfaction[59]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_59" aria-label="Cells Radio Button"><label for="input_3_59_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_60">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_60">60. Τρώτε παραπάνω από το κανονικό;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_60_0" class="form-radio" name="q3_overallSatisfaction[60]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_60" aria-label="Cells Radio Button"><label for="input_3_60_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_60_1" class="form-radio" name="q3_overallSatisfaction[60]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_60" aria-label="Cells Radio Button"><label for="input_3_60_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_60_2" class="form-radio" name="q3_overallSatisfaction[60]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_60" aria-label="Cells Radio Button"><label for="input_3_60_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_60_3" class="form-radio" name="q3_overallSatisfaction[60]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_60" aria-label="Cells Radio Button"><label for="input_3_60_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_60_4" class="form-radio" name="q3_overallSatisfaction[60]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_60" aria-label="Cells Radio Button"><label for="input_3_60_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_61">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_61">61. ∆εν αισθάνεσθε άνετα όταν σας κοιτάνε ή µιλούν για σας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_61_0" class="form-radio" name="q3_overallSatisfaction[61]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_61" aria-label="Cells Radio Button"><label for="input_3_61_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_61_1" class="form-radio" name="q3_overallSatisfaction[61]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_61" aria-label="Cells Radio Button"><label for="input_3_61_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_61_2" class="form-radio" name="q3_overallSatisfaction[61]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_61" aria-label="Cells Radio Button"><label for="input_3_61_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_61_3" class="form-radio" name="q3_overallSatisfaction[61]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_61" aria-label="Cells Radio Button"><label for="input_3_61_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_61_4" class="form-radio" name="q3_overallSatisfaction[61]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_61" aria-label="Cells Radio Button"><label for="input_3_61_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_62">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_62">62. Έχετε σκέψεις που δεν είναι δικές σας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_62_0" class="form-radio" name="q3_overallSatisfaction[62]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_62" aria-label="Cells Radio Button"><label for="input_3_62_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_62_1" class="form-radio" name="q3_overallSatisfaction[62]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_62" aria-label="Cells Radio Button"><label for="input_3_62_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_62_2" class="form-radio" name="q3_overallSatisfaction[62]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_62" aria-label="Cells Radio Button"><label for="input_3_62_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_62_3" class="form-radio" name="q3_overallSatisfaction[62]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_62" aria-label="Cells Radio Button"><label for="input_3_62_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_62_4" class="form-radio" name="q3_overallSatisfaction[62]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_62" aria-label="Cells Radio Button"><label for="input_3_62_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_63">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_63">63. Έχετε παρορµήσεις να χτυπήσετε, να τραυµατίσετε ή <span style="display: inline !important;">να βλάψετε κάποιον; </span></label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_63_0" class="form-radio" name="q3_overallSatisfaction[63]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_63" aria-label="Cells Radio Button"><label for="input_3_63_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_63_1" class="form-radio" name="q3_overallSatisfaction[63]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_63" aria-label="Cells Radio Button"><label for="input_3_63_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_63_2" class="form-radio" name="q3_overallSatisfaction[63]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_63" aria-label="Cells Radio Button"><label for="input_3_63_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_63_3" class="form-radio" name="q3_overallSatisfaction[63]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_63" aria-label="Cells Radio Button"><label for="input_3_63_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_63_4" class="form-radio" name="q3_overallSatisfaction[63]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_63" aria-label="Cells Radio Button"><label for="input_3_63_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_64">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_64">64. Ξυπνάτε πολύ νωρίς το πρωί;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_64_0" class="form-radio" name="q3_overallSatisfaction[64]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_64" aria-label="Cells Radio Button"><label for="input_3_64_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_64_1" class="form-radio" name="q3_overallSatisfaction[64]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_64" aria-label="Cells Radio Button"><label for="input_3_64_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_64_2" class="form-radio" name="q3_overallSatisfaction[64]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_64" aria-label="Cells Radio Button"><label for="input_3_64_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_64_3" class="form-radio" name="q3_overallSatisfaction[64]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_64" aria-label="Cells Radio Button"><label for="input_3_64_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_64_4" class="form-radio" name="q3_overallSatisfaction[64]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_64" aria-label="Cells Radio Button"><label for="input_3_64_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_65">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_65">65. Πρέπει να επαναλαµβάνετε τις ίδιες πράξεις (ν’ αγγίζετε, <span style="display: inline !important;"> να µετράτε, να πλένετε κάτι);</span></label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_65_0" class="form-radio" name="q3_overallSatisfaction[65]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_65" aria-label="Cells Radio Button"><label for="input_3_65_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_65_1" class="form-radio" name="q3_overallSatisfaction[65]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_65" aria-label="Cells Radio Button"><label for="input_3_65_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_65_2" class="form-radio" name="q3_overallSatisfaction[65]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_65" aria-label="Cells Radio Button"><label for="input_3_65_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_65_3" class="form-radio" name="q3_overallSatisfaction[65]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_65" aria-label="Cells Radio Button"><label for="input_3_65_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_65_4" class="form-radio" name="q3_overallSatisfaction[65]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_65" aria-label="Cells Radio Button"><label for="input_3_65_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_66">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_66">66. Κοιµάσθε ανήσυχα ή µε διακοπές;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_66_0" class="form-radio" name="q3_overallSatisfaction[66]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_66" aria-label="Cells Radio Button"><label for="input_3_66_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_66_1" class="form-radio" name="q3_overallSatisfaction[66]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_66" aria-label="Cells Radio Button"><label for="input_3_66_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_66_2" class="form-radio" name="q3_overallSatisfaction[66]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_66" aria-label="Cells Radio Button"><label for="input_3_66_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_66_3" class="form-radio" name="q3_overallSatisfaction[66]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_66" aria-label="Cells Radio Button"><label for="input_3_66_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_66_4" class="form-radio" name="q3_overallSatisfaction[66]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_66" aria-label="Cells Radio Button"><label for="input_3_66_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_67">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_67">67. Σας έρχεται να σπάσετε πράγµατα ή να καταστρέψετε <span style="display: inline !important;"> πράγµατα; </span></label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_67_0" class="form-radio" name="q3_overallSatisfaction[67]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_67" aria-label="Cells Radio Button"><label for="input_3_67_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_67_1" class="form-radio" name="q3_overallSatisfaction[67]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_67" aria-label="Cells Radio Button"><label for="input_3_67_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_67_2" class="form-radio" name="q3_overallSatisfaction[67]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_67" aria-label="Cells Radio Button"><label for="input_3_67_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_67_3" class="form-radio" name="q3_overallSatisfaction[67]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_67" aria-label="Cells Radio Button"><label for="input_3_67_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_67_4" class="form-radio" name="q3_overallSatisfaction[67]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_67" aria-label="Cells Radio Button"><label for="input_3_67_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_68">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_68">68. Έχετε ιδέες και απόψεις που οι άλλοι δεν συµµερίζονται;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_68_0" class="form-radio" name="q3_overallSatisfaction[68]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_68" aria-label="Cells Radio Button"><label for="input_3_68_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_68_1" class="form-radio" name="q3_overallSatisfaction[68]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_68" aria-label="Cells Radio Button"><label for="input_3_68_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_68_2" class="form-radio" name="q3_overallSatisfaction[68]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_68" aria-label="Cells Radio Button"><label for="input_3_68_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_68_3" class="form-radio" name="q3_overallSatisfaction[68]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_68" aria-label="Cells Radio Button"><label for="input_3_68_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_68_4" class="form-radio" name="q3_overallSatisfaction[68]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_68" aria-label="Cells Radio Button"><label for="input_3_68_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_69">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_69">69. Νοιώθετε πολύ συνεσταλµένος όταν βρίσκεσθε µε άλλους; </label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_69_0" class="form-radio" name="q3_overallSatisfaction[69]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_69" aria-label="Cells Radio Button"><label for="input_3_69_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_69_1" class="form-radio" name="q3_overallSatisfaction[69]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_69" aria-label="Cells Radio Button"><label for="input_3_69_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_69_2" class="form-radio" name="q3_overallSatisfaction[69]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_69" aria-label="Cells Radio Button"><label for="input_3_69_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_69_3" class="form-radio" name="q3_overallSatisfaction[69]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_69" aria-label="Cells Radio Button"><label for="input_3_69_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_69_4" class="form-radio" name="q3_overallSatisfaction[69]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_69" aria-label="Cells Radio Button"><label for="input_3_69_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_70">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_70">70. ∆εν αισθάνεσθε άνετα µέσα στο πλήθος (στα καταστήµατα <span style="display: inline !important;"> ή στον κινηµατογράφο);</span><br> </label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_70_0" class="form-radio" name="q3_overallSatisfaction[70]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_70" aria-label="Cells Radio Button"><label for="input_3_70_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_70_1" class="form-radio" name="q3_overallSatisfaction[70]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_70" aria-label="Cells Radio Button"><label for="input_3_70_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_70_2" class="form-radio" name="q3_overallSatisfaction[70]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_70" aria-label="Cells Radio Button"><label for="input_3_70_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_70_3" class="form-radio" name="q3_overallSatisfaction[70]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_70" aria-label="Cells Radio Button"><label for="input_3_70_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_70_4" class="form-radio" name="q3_overallSatisfaction[70]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_70" aria-label="Cells Radio Button"><label for="input_3_70_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_71">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_71">71. Νοιώθετε ότι και για το παραµικρό πράγµα πρέπει <span style="display: inline !important;"> να κάνετε προσπάθεια; </span></label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_71_0" class="form-radio" name="q3_overallSatisfaction[71]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_71" aria-label="Cells Radio Button"><label for="input_3_71_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_71_1" class="form-radio" name="q3_overallSatisfaction[71]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_71" aria-label="Cells Radio Button"><label for="input_3_71_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_71_2" class="form-radio" name="q3_overallSatisfaction[71]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_71" aria-label="Cells Radio Button"><label for="input_3_71_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_71_3" class="form-radio" name="q3_overallSatisfaction[71]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_71" aria-label="Cells Radio Button"><label for="input_3_71_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_71_4" class="form-radio" name="q3_overallSatisfaction[71]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_71" aria-label="Cells Radio Button"><label for="input_3_71_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_72">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_72">72. Έχετε περιόδους µε τρόµο ή πανικό;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_72_0" class="form-radio" name="q3_overallSatisfaction[72]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_72" aria-label="Cells Radio Button"><label for="input_3_72_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_72_1" class="form-radio" name="q3_overallSatisfaction[72]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_72" aria-label="Cells Radio Button"><label for="input_3_72_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_72_2" class="form-radio" name="q3_overallSatisfaction[72]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_72" aria-label="Cells Radio Button"><label for="input_3_72_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_72_3" class="form-radio" name="q3_overallSatisfaction[72]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_72" aria-label="Cells Radio Button"><label for="input_3_72_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_72_4" class="form-radio" name="q3_overallSatisfaction[72]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_72" aria-label="Cells Radio Button"><label for="input_3_72_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_73">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_73">73. ∆εν αισθάνεσθε άνετα όταν τρώτε ή πίνετε δηµόσια;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_73_0" class="form-radio" name="q3_overallSatisfaction[73]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_73" aria-label="Cells Radio Button"><label for="input_3_73_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_73_1" class="form-radio" name="q3_overallSatisfaction[73]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_73" aria-label="Cells Radio Button"><label for="input_3_73_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_73_2" class="form-radio" name="q3_overallSatisfaction[73]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_73" aria-label="Cells Radio Button"><label for="input_3_73_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_73_3" class="form-radio" name="q3_overallSatisfaction[73]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_73" aria-label="Cells Radio Button"><label for="input_3_73_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_73_4" class="form-radio" name="q3_overallSatisfaction[73]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_73" aria-label="Cells Radio Button"><label for="input_3_73_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_74">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_74">74. Τσακώνεσθε συχνά;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_74_0" class="form-radio" name="q3_overallSatisfaction[74]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_74" aria-label="Cells Radio Button"><label for="input_3_74_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_74_1" class="form-radio" name="q3_overallSatisfaction[74]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_74" aria-label="Cells Radio Button"><label for="input_3_74_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_74_2" class="form-radio" name="q3_overallSatisfaction[74]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_74" aria-label="Cells Radio Button"><label for="input_3_74_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_74_3" class="form-radio" name="q3_overallSatisfaction[74]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_74" aria-label="Cells Radio Button"><label for="input_3_74_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_74_4" class="form-radio" name="q3_overallSatisfaction[74]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_74" aria-label="Cells Radio Button"><label for="input_3_74_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_75">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_75">75. Αισθάνεσθε νευρικότητα όταν µένετε µόνος;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_75_0" class="form-radio" name="q3_overallSatisfaction[75]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_75" aria-label="Cells Radio Button"><label for="input_3_75_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_75_1" class="form-radio" name="q3_overallSatisfaction[75]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_75" aria-label="Cells Radio Button"><label for="input_3_75_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_75_2" class="form-radio" name="q3_overallSatisfaction[75]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_75" aria-label="Cells Radio Button"><label for="input_3_75_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_75_3" class="form-radio" name="q3_overallSatisfaction[75]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_75" aria-label="Cells Radio Button"><label for="input_3_75_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_75_4" class="form-radio" name="q3_overallSatisfaction[75]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_75" aria-label="Cells Radio Button"><label for="input_3_75_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_76">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_76">76. Νοιώθετε ότι οι άλλοι δεν εκτιµούν όσο πρέπει αυτά <span style="display: inline !important;"> που κάνετε; </span><br> </label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_76_0" class="form-radio" name="q3_overallSatisfaction[76]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_76" aria-label="Cells Radio Button"><label for="input_3_76_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_76_1" class="form-radio" name="q3_overallSatisfaction[76]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_76" aria-label="Cells Radio Button"><label for="input_3_76_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_76_2" class="form-radio" name="q3_overallSatisfaction[76]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_76" aria-label="Cells Radio Button"><label for="input_3_76_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_76_3" class="form-radio" name="q3_overallSatisfaction[76]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_76" aria-label="Cells Radio Button"><label for="input_3_76_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_76_4" class="form-radio" name="q3_overallSatisfaction[76]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_76" aria-label="Cells Radio Button"><label for="input_3_76_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_77">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_77">77. Αισθάνεσθε µοναξιά ακόµα και όταν βρίσκεσθε µε κόσµο;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_77_0" class="form-radio" name="q3_overallSatisfaction[77]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_77" aria-label="Cells Radio Button"><label for="input_3_77_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_77_1" class="form-radio" name="q3_overallSatisfaction[77]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_77" aria-label="Cells Radio Button"><label for="input_3_77_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_77_2" class="form-radio" name="q3_overallSatisfaction[77]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_77" aria-label="Cells Radio Button"><label for="input_3_77_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_77_3" class="form-radio" name="q3_overallSatisfaction[77]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_77" aria-label="Cells Radio Button"><label for="input_3_77_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_77_4" class="form-radio" name="q3_overallSatisfaction[77]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_77" aria-label="Cells Radio Button"><label for="input_3_77_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_78">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_78">78. Είσθε τόσο ανήσυχος ώστε δεν µπορείτε να µείνετε σε <span style="display: inline !important;"> µία θέση; </span></label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_78_0" class="form-radio" name="q3_overallSatisfaction[78]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_78" aria-label="Cells Radio Button"><label for="input_3_78_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_78_1" class="form-radio" name="q3_overallSatisfaction[78]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_78" aria-label="Cells Radio Button"><label for="input_3_78_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_78_2" class="form-radio" name="q3_overallSatisfaction[78]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_78" aria-label="Cells Radio Button"><label for="input_3_78_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_78_3" class="form-radio" name="q3_overallSatisfaction[78]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_78" aria-label="Cells Radio Button"><label for="input_3_78_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_78_4" class="form-radio" name="q3_overallSatisfaction[78]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_78" aria-label="Cells Radio Button"><label for="input_3_78_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_79">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_79">79. Αισθάνεσθε ότι δεν αξίζετε;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_79_0" class="form-radio" name="q3_overallSatisfaction[79]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_79" aria-label="Cells Radio Button"><label for="input_3_79_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_79_1" class="form-radio" name="q3_overallSatisfaction[79]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_79" aria-label="Cells Radio Button"><label for="input_3_79_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_79_2" class="form-radio" name="q3_overallSatisfaction[79]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_79" aria-label="Cells Radio Button"><label for="input_3_79_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_79_3" class="form-radio" name="q3_overallSatisfaction[79]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_79" aria-label="Cells Radio Button"><label for="input_3_79_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_79_4" class="form-radio" name="q3_overallSatisfaction[79]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_79" aria-label="Cells Radio Button"><label for="input_3_79_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_80">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_80">80. Έχετε το προαίσθηµα ότι κάτι κακό θα σας συµβεί;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_80_0" class="form-radio" name="q3_overallSatisfaction[80]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_80" aria-label="Cells Radio Button"><label for="input_3_80_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_80_1" class="form-radio" name="q3_overallSatisfaction[80]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_80" aria-label="Cells Radio Button"><label for="input_3_80_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_80_2" class="form-radio" name="q3_overallSatisfaction[80]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_80" aria-label="Cells Radio Button"><label for="input_3_80_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_80_3" class="form-radio" name="q3_overallSatisfaction[80]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_80" aria-label="Cells Radio Button"><label for="input_3_80_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_80_4" class="form-radio" name="q3_overallSatisfaction[80]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_80" aria-label="Cells Radio Button"><label for="input_3_80_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_81">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_81">81. Φωνάζετε ή πετάτε πράγµατα;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_81_0" class="form-radio" name="q3_overallSatisfaction[81]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_81" aria-label="Cells Radio Button"><label for="input_3_81_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_81_1" class="form-radio" name="q3_overallSatisfaction[81]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_81" aria-label="Cells Radio Button"><label for="input_3_81_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_81_2" class="form-radio" name="q3_overallSatisfaction[81]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_81" aria-label="Cells Radio Button"><label for="input_3_81_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_81_3" class="form-radio" name="q3_overallSatisfaction[81]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_81" aria-label="Cells Radio Button"><label for="input_3_81_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_81_4" class="form-radio" name="q3_overallSatisfaction[81]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_81" aria-label="Cells Radio Button"><label for="input_3_81_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_82">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_82">82. Φοβάσθε ότι θα λιποθυµήσετε όταν είσθε σε πολύ κόσµο;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_82_0" class="form-radio" name="q3_overallSatisfaction[82]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_82" aria-label="Cells Radio Button"><label for="input_3_82_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_82_1" class="form-radio" name="q3_overallSatisfaction[82]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_82" aria-label="Cells Radio Button"><label for="input_3_82_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_82_2" class="form-radio" name="q3_overallSatisfaction[82]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_82" aria-label="Cells Radio Button"><label for="input_3_82_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_82_3" class="form-radio" name="q3_overallSatisfaction[82]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_82" aria-label="Cells Radio Button"><label for="input_3_82_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_82_4" class="form-radio" name="q3_overallSatisfaction[82]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_82" aria-label="Cells Radio Button"><label for="input_3_82_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_83">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_83">83. Αισθάνεσθε ότι οι άλλοι θα σας εκµεταλλευτούν αν τους <span style="display: inline !important;">το επιτρέψετε; </span></label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_83_0" class="form-radio" name="q3_overallSatisfaction[83]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_83" aria-label="Cells Radio Button"><label for="input_3_83_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_83_1" class="form-radio" name="q3_overallSatisfaction[83]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_83" aria-label="Cells Radio Button"><label for="input_3_83_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_83_2" class="form-radio" name="q3_overallSatisfaction[83]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_83" aria-label="Cells Radio Button"><label for="input_3_83_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_83_3" class="form-radio" name="q3_overallSatisfaction[83]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_83" aria-label="Cells Radio Button"><label for="input_3_83_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_83_4" class="form-radio" name="q3_overallSatisfaction[83]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_83" aria-label="Cells Radio Button"><label for="input_3_83_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_84">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_84">84. Έχετε σκέψεις για σεξουαλικά θέµατα που σας <span style="display: inline !important;"> ενοχλούν πολύ; </span></label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_84_0" class="form-radio" name="q3_overallSatisfaction[84]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_84" aria-label="Cells Radio Button"><label for="input_3_84_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_84_1" class="form-radio" name="q3_overallSatisfaction[84]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_84" aria-label="Cells Radio Button"><label for="input_3_84_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_84_2" class="form-radio" name="q3_overallSatisfaction[84]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_84" aria-label="Cells Radio Button"><label for="input_3_84_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_84_3" class="form-radio" name="q3_overallSatisfaction[84]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_84" aria-label="Cells Radio Button"><label for="input_3_84_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_84_4" class="form-radio" name="q3_overallSatisfaction[84]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_84" aria-label="Cells Radio Button"><label for="input_3_84_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_85">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_85">85. Νοµίζετε ότι θα έπρεπε να τιµωρηθείτε για τις αµαρτίες σας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_85_0" class="form-radio" name="q3_overallSatisfaction[85]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_85" aria-label="Cells Radio Button"><label for="input_3_85_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_85_1" class="form-radio" name="q3_overallSatisfaction[85]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_85" aria-label="Cells Radio Button"><label for="input_3_85_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_85_2" class="form-radio" name="q3_overallSatisfaction[85]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_85" aria-label="Cells Radio Button"><label for="input_3_85_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_85_3" class="form-radio" name="q3_overallSatisfaction[85]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_85" aria-label="Cells Radio Button"><label for="input_3_85_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_85_4" class="form-radio" name="q3_overallSatisfaction[85]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_85" aria-label="Cells Radio Button"><label for="input_3_85_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_86">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_86">86. Έχετε σκέψεις ή φαντασίες που σας τροµάζουν;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_86_0" class="form-radio" name="q3_overallSatisfaction[86]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_86" aria-label="Cells Radio Button"><label for="input_3_86_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_86_1" class="form-radio" name="q3_overallSatisfaction[86]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_86" aria-label="Cells Radio Button"><label for="input_3_86_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_86_2" class="form-radio" name="q3_overallSatisfaction[86]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_86" aria-label="Cells Radio Button"><label for="input_3_86_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_86_3" class="form-radio" name="q3_overallSatisfaction[86]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_86" aria-label="Cells Radio Button"><label for="input_3_86_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_86_4" class="form-radio" name="q3_overallSatisfaction[86]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_86" aria-label="Cells Radio Button"><label for="input_3_86_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_87">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_87">87. Νοµίζετε ότι έχετε κάποιο σοβαρό ελάττωµα στο σώµα σας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_87_0" class="form-radio" name="q3_overallSatisfaction[87]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_87" aria-label="Cells Radio Button"><label for="input_3_87_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_87_1" class="form-radio" name="q3_overallSatisfaction[87]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_87" aria-label="Cells Radio Button"><label for="input_3_87_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_87_2" class="form-radio" name="q3_overallSatisfaction[87]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_87" aria-label="Cells Radio Button"><label for="input_3_87_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_87_3" class="form-radio" name="q3_overallSatisfaction[87]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_87" aria-label="Cells Radio Button"><label for="input_3_87_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_87_4" class="form-radio" name="q3_overallSatisfaction[87]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_87" aria-label="Cells Radio Button"><label for="input_3_87_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_88">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_88">88. ∆εν αισθάνεσθε ποτέ κοντά σε άλλο πρόσωπο;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_88_0" class="form-radio" name="q3_overallSatisfaction[88]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_88" aria-label="Cells Radio Button"><label for="input_3_88_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_88_1" class="form-radio" name="q3_overallSatisfaction[88]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_88" aria-label="Cells Radio Button"><label for="input_3_88_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_88_2" class="form-radio" name="q3_overallSatisfaction[88]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_88" aria-label="Cells Radio Button"><label for="input_3_88_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_88_3" class="form-radio" name="q3_overallSatisfaction[88]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_88" aria-label="Cells Radio Button"><label for="input_3_88_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_88_4" class="form-radio" name="q3_overallSatisfaction[88]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_88" aria-label="Cells Radio Button"><label for="input_3_88_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_89">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_89">89. Νοιώθετε ενοχές;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_89_0" class="form-radio" name="q3_overallSatisfaction[89]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_89" aria-label="Cells Radio Button"><label for="input_3_89_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_89_1" class="form-radio" name="q3_overallSatisfaction[89]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_89" aria-label="Cells Radio Button"><label for="input_3_89_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_89_2" class="form-radio" name="q3_overallSatisfaction[89]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_89" aria-label="Cells Radio Button"><label for="input_3_89_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_89_3" class="form-radio" name="q3_overallSatisfaction[89]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_89" aria-label="Cells Radio Button"><label for="input_3_89_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_89_4" class="form-radio" name="q3_overallSatisfaction[89]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_89" aria-label="Cells Radio Button"><label for="input_3_89_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_3 label_3_row_90">
                                            <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_3_row_90">90. Νοµίζετε ότι κάτι δεν λειτουργεί καλά στο µυαλό σας;</label></th>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_90_0" class="form-radio" name="q3_overallSatisfaction[90]" value="Καθόλου   " aria-labelledby="label_3_col_0 label_3_row_90" aria-label="Cells Radio Button"><label for="input_3_90_0" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_90_1" class="form-radio" name="q3_overallSatisfaction[90]" value="Λίγο" aria-labelledby="label_3_col_1 label_3_row_90" aria-label="Cells Radio Button"><label for="input_3_90_1" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_90_2" class="form-radio" name="q3_overallSatisfaction[90]" value="Μέτρια" aria-labelledby="label_3_col_2 label_3_row_90" aria-label="Cells Radio Button"><label for="input_3_90_2" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_90_3" class="form-radio" name="q3_overallSatisfaction[90]" value="Αρκετά" aria-labelledby="label_3_col_3 label_3_row_90" aria-label="Cells Radio Button"><label for="input_3_90_3" class="matrix-choice-label matrix-radio-label"></label></td>
                                            <td class="form-matrix-values"><input type="radio" id="input_3_90_4" class="form-radio" name="q3_overallSatisfaction[90]" value="Υπερολικά" aria-labelledby="label_3_col_4 label_3_row_90" aria-label="Cells Radio Button"><label for="input_3_90_4" class="matrix-choice-label matrix-radio-label"></label></td>
                                        </tr>
                                        </tbody></table>

                                    <input id="patientid" name="patientid" value="{{$patient->id}}" class="hidden">
                                    <input id="visit" name="visit" value="{{$current_visit}}" class="hidden">
                                    <textarea id="comment" name="comment" class="hidden"></textarea>

                                    <button type="submit" id="save-visit" class="text-blue-500 border border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-8 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"> Save</button>
                                    </form>
                                @endif

                            </div>





                        </div>

                    </div>
                </div>







            </div>
        </div>
    </div>
    <script>
$("#save-visit").mouseenter(function(){
    jsonObj = [];
    $('[id^=input_3_]:checked').each(function() {

        var id = $(this).attr("id");

        item = {}
        item ["id"] = id;

        jsonObj.push(item);
    });
    if(jsonObj.length<91){
        Swal.fire({
            icon: 'error',
            title: 'Παρακαλώ',
            text: "Απαντήστε σε όλες τις ερωτήσεις, πολλαπλής επιλογής.",
            allowOutsideClick:false
        })
    }else{
        jsonString = JSON.stringify(jsonObj);
        jsonDecode = JSON.parse(jsonString);
        $("#comment").val(jsonString);

    }


    // console.log(jsonString);

    // var arr= new Array();
    // $.each( jsonDecode, function(i, obj) {
    //     arr.push( obj.id )
    // });
    // console.log(arr)


});



$("#save-visit_1").mouseenter(function(){
    jsonObj = [];
    $('[id^=input_3_]:checked').each(function() {

        var id = $(this).attr("id");

        item = {}
        item ["id"] = id;

        jsonObj.push(item);
    });
    if(jsonObj.length<46){
        Swal.fire({
            icon: 'error',
            title: 'Παρακαλώ',
            text: "Απαντήστε σε όλες τις ερωτήσεις, πολλαπλής επιλογής.",
            allowOutsideClick:false
        })
    }else{
        jsonString = JSON.stringify(jsonObj);
        jsonDecode = JSON.parse(jsonString);
        $("#comment").val(jsonString);

    }


    // console.log(jsonString);

    // var arr= new Array();
    // $.each( jsonDecode, function(i, obj) {
    //     arr.push( obj.id )
    // });
    // console.log(arr)


});

var d = new Date();

var month = d.getMonth()+1;
var day = d.getDate();

var output = (day<10 ? '0' : '') + day  + '/' +  (month<10 ? '0' : '') + month + '/' + d.getFullYear() ;


$("#date").val(output)

$("#psyc_yes").click(function () {
    $("#psyc_rest").show()
})

$("#psyc_no").click(function () {
    $("#psyc_rest").hide()
})

$("#reference_yes").click(function () {
    $("#reference_rest").show()
})

$("#reference_no").click(function () {
    $("#reference_rest").hide()
})

$("#doctor_yes").click(function () {
    $("#doctor_rest").show()
})

$("#doctor_no").click(function () {
    $("#doctor_rest").hide()
})

$("#meds_yes").click(function () {
    $("#meds_rest").show()
})

$("#meds_no").click(function () {
    $("#meds_rest").hide()
})
    </script>
</x-app-layout>

