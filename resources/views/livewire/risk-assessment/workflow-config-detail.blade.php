{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold text-gray-900">Trial Balance Mapping</h1>
        <p class="mt-2 text-sm text-gray-700">Inhouse Balance</p>
      </div>
        <div class="px-5 py-1 italic text-blue-900">
            status
        </div>

        <!-- Dropdown -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
        <el-dropdown class="inline-block">
          <button
            class="inline-flex items-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 hover:bg-gray-50">
            Action
            <svg viewBox="0 0 20 20" fill="currentColor" class="-mr-1 size-5 text-gray-400">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" />
            </svg>
          </button>
          <el-menu anchor="bottom end" popover
            class="w-56 origin-top-right rounded-md bg-white shadow-lg outline-1 outline-black/5 transition data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
            <div class="py-1">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Save</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Validated</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Reviewed</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Approved</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">QC Passed</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Revised</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Reverse</a>
            </div>
          </el-menu>
        </el-dropdown>
    </div>
   </div>
   {{-- End Header --}}

    {{-- Body --}}
    <!-- Margin Body -->
    <div class="mt-4 sm:mt-6 sm:ml-2 mr-100">
        {{-- Content --}}
        <div class="px-4 py-5 sm:p-6 ml-4">
            <table class="w-full border border-gray-300 border-collapse">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="w-20 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300">
                            Client Name
                        </th>
                        <th scope="col"
                            class="w-50 px-4 py-2 text-left text-sm font-normal text-gray-900 border border-gray-300">
                            PT Example 1
                        </th>
                    </tr>
                    <tr>
                        <th scope="col"
                            class="w-20 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300">
                            Audit Period
                        </th>
                        <th scope="col"
                            class="w-50 px-4 py-2 text-left text-sm font-normal text-gray-900 border border-gray-300">
                            DD/MM/YYYY
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    {{-- End Body --}}

    {{-- Body --}}
    <!-- Margin Body -->
    <div class="mt-4 sm:mt-0 sm:ml-2">
        {{-- Content --}}
        <div class="px-4 py-5 sm:p-6 ml-4">
            <table class="w-full border border-gray-300 border-collapse">
                <thead class="bg-gray-100">
                    <tr>
                        <th scope="col"
                            class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300">
                            Sub Modul
                        </th>
                        <th scope="col"
                            class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-white">
                            Meliana Fitriani-Team Member
                        </th>
                        <th scope="col"
                            class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-white">
                            Nanda Wijaya-Team Member
                        </th>
                        <th scope="col"
                            class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-white">
                            Akmal Akrivlafina-Team Leader
                        </th>
                        <th scope="col"
                            class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-white">
                            Arif Wijaksono-Manager
                        </th>
                        <th scope="col"
                            class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-white">
                            Aryo Wibisono-Partner
                        </th>
                        <th scope="col"
                            class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-white">
                            Hertanto-Signing Partner
                        </th>
                        <th scope="col"
                            class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-white">
                            Bambang Karunawan-QC Partner
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Client Configuration</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Materiality</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Analytical Procedures</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Inherent Risk</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Control Risk</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">RoMM</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Audit Strategy Memorandum</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Lead & Sublead</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Subsequent Event</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Related Party Transaction</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Accounting Estimate</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Management Expert</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Auditor's Expert</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">List Adjusment</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Trial Balance</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Summary Unajusted Difference</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">QC Review</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">IAR Review</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-4 py-2 text-left text-sm text-gray-700 border-r border-gray-300">Final Review</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">
                            <div class="flex justify-center items-center">
                                <select class="w-full text-sm text-gray-700 text-center">
                                    <option></option>
                                    <option>Preparer</option>
                                    <option>Validator</option>
                                    <option>Reviewer</option>
                                    <option>Approver</option>
                                    <option>QC Reviewer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
    </div>
    {{-- End Body --}}



</div>
