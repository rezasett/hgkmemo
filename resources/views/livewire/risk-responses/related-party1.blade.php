{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
    <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
        <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
        <h1 class="text-2xl font-bold text-gray-900">Related Party Transaction</h1>
        <p class="mt-2 text-sm text-gray-700">Detail</p>
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

    <div class="mt-8 px-4 sm:px-6 lg:px-8 mb-4 mr-250">
        <table class="w-full border border-gray-300 divide-y divide-gray-300">
            <tbody class="divide-y divide-gray-200">
            <tr>
                <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Client Name</td>
                <td class="min-w-50 px-4 py-2  text-sm text-gray-700 border-r border-gray-300 bg-gray-50"></td>
            </tr>
            <tr>
                <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">TB Period</td>
                <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 bg-gray-50"></td>
            </tr>
            <tr>
                <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Cycle</td>
                <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 bg-gray-50"></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="px-4 sm:px-6 lg:px-8 mb-4 mr-100">
     <br>
        <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="min-w-30 px-4 py-4 text-sm text-gray-700 border-r border-gray-300 font-bold">Related Party Definition</td>
            <td class="min-w-50 px-4 py-4 text-sm text-gray-700 border-r border-gray-300 bg-white">
                <div class="flex justify-center items-center">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded w-40">Go to HGK Library</button>
                </div>
            </td>
            <td class="min-w-30 px-4 py-4 text-sm text-gray-700 border-r border-gray-300 font-bold">Accounting Policy</td>
            <td class="min-w-50 px-4 py-4 text-sm text-gray-700 border-r border-gray-300 bg-white">
                <div class="flex justify-center items-center">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded w-40">Upload File</button>
                </div>
            </td>
          </tr>
          <tr>
            <td class="min-w-30 px-4 py-4 text-sm text-gray-700 border-r border-gray-300 font-bold">Related Party Procedures</td>
            <td class="min-w-50 px-4 py-4 text-sm text-gray-700 border-r border-gray-300 bg-white">
                <div class="flex justify-center items-center">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded w-40">Go to HGK Library</button>
                </div>
            </td>
            <td class="min-w-30 px-4 py-4 text-sm text-gray-700 border-r border-gray-300 font-bold">Working Paper</td>
            <td class="min-w-50 px-4 py-4 text-sm text-gray-700 border-r border-gray-300 bg-white">
                <div class="flex justify-center items-center">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded w-40">Upload File</button>
                </div>
            </td>
          </tr>

        </tbody>
        </table>
    </div>

    <div class="ml-2 max-w-400 px-4 py-5 sm:p-6 overflow-x-scroll">
        <div class="flex items-center justify-between pb-4">
            <div class="text-base font-semibold text-gray-900 flex items-center">
                Add Row
                <!-- Add Button beside the text -->
                <button type="button" class="rounded-full bg-indigo-600 p-1 text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ml-2">
                    <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                    </svg>
                </button>
            </div>
        </div>
            <table class="min-w-full border border-gray-300">
            <thead class="bg-gray-50 border-b border-gray-300">
                <tr>
                <th scope="col"
                    class="text-center min-w-90 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    List Related Parties
                </th>
                <th scope="col"
                    class="text-center min-w-70 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Lead Account
                </th>
                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    COA
                </th>
                <th scope="col"
                    class="text-center min-w-70 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Sub Account
                </th>
                <th scope="col"
                    class="text-center min-w-70 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Related Parties Balance
                </th>
                <th scope="col"
                    class="text-center min-w-70 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Nature of Related Party Relationships
                </th>

                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Significant Contract Transaction
                </th>

                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Significant Contract Number
                </th>

                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Significant Contract Amount
                </th>

                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Agree to Listing
                </th>
                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Confirmation Procedures
                </th>
                <th scope="col"
                    class="text-center min-w-100 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Notes
                </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            <tr>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>--select--</option>
                            <option>--select--</option>
                            <option>--select--</option>
                        </select>
                    </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>--select--</option>
                            <option>--select--</option>
                            <option>--select--</option>
                        </select>
                    </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option></option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option></option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            </tr>

            {{-- bwh --}}
            <tr>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>--select--</option>
                            <option>--select--</option>
                            <option>--select--</option>
                        </select>
                    </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>--select--</option>
                            <option>--select--</option>
                            <option>--select--</option>
                        </select>
                    </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option></option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option></option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            </tr>

            <tr>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>--select--</option>
                            <option>--select--</option>
                            <option>--select--</option>
                        </select>
                    </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>--select--</option>
                            <option>--select--</option>
                            <option>--select--</option>
                        </select>
                    </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option></option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option></option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            </tr>

            <tr>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>--select--</option>
                            <option>--select--</option>
                            <option>--select--</option>
                        </select>
                    </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>--select--</option>
                            <option>--select--</option>
                            <option>--select--</option>
                        </select>
                    </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option></option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option></option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            </tr>
            {{-- bwh --}}
            </tbody>
        </table>

    </div>
    {{-- main content here --}}

</div>
