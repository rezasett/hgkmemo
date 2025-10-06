{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-900">Subsequent Event</h1>
        <p class="mt-2 text-xl text-gray-700">Detail Account</p>
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
                <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Sub Account</td>
                <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 bg-gray-50"></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="px-4 sm:px-6 lg:px-8 mb-4 mr-250">
     <br>
        <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">WP index</td>
            <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 bg-white"></td>
          </tr>
          <tr>
            <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Adjusted Event</td>
            <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 bg-white">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>--select--</option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </td>
          </tr>
           <tr>
            <td class="min-w-30 px-4 py-12 text-sm text-gray-700 border-r border-gray-300 font-bold">Description</td>
            <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 bg-white"></td>
          </tr>
           <tr>
            <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Adjustments</td>
            <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 bg-white text-center">
                <div class="flex justify-center">
                    <a href="#" class="py-2 px-4 bg-blue-600 text-white rounded">Input Adjustment</a>
                </div>
            </td>
          </tr>
            <tr>
            <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Index Adj</td>
            <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 bg-white"></td>
            </tr>
            <tr>
            <td colspan="2" class="mt-2 min-w-50 px-4 py-4 text-sm text-gray-700 border-r border-gray-300 font-bold">
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
            </td>

            </tr>
        </tbody>
        </table>
    </div>


    <div class="max-w-400 px-4 py-5 sm:p-6 overflow-x-scroll">
     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <div class="flex items-center justify-between pb-4">
            <div class="text-base font-semibold text-gray-900">
            List Subsequent Event
            </div>
        </div>
            <table class="min-w-full border border-gray-300">
            <thead class="bg-gray-50 border-b border-gray-300">
                <tr>
                <th scope="col"
                    class="text-center min-w-40 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Index Adj
                </th>
                <th scope="col"
                    class="text-center min-w-40 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    COA
                </th>
                <th scope="col"
                    class="text-center min-w-80 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Account Name
                </th>
                <th scope="col"
                    class="text-center min-w-80 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Description
                </th>
                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    TB Inhouse
                </th>
                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    D
                </th>

                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    C
                </th>

                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Audited
                </th>

                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    WP Index
                </th>

                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Preparer
                </th>
                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Adj. Date
                </th>
                <th scope="col"
                    class="text-center min-w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Action
                </th>

                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            <tr>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class=" w-full">
                            <select class="block w-full px-2 py-1 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Pilih Status</option>
                            <option value="approved">Approved</option>
                            <option value="revised">Revised</option>
                            </select>
                    </div>
                </td>
            </tr>

            {{-- bwh --}}
            <tr>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="relative inline-block w-full">
                            <select class="block w-full px-2 py-1 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Pilih Status</option>
                            <option value="approved">Approved</option>
                            <option value="revised">Revised</option>
                            </select>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="relative inline-block w-full">
                            <select class="block w-full px-2 py-1 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Pilih Status</option>
                            <option value="approved">Approved</option>
                            <option value="revised">Revised</option>
                            </select>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                    <div class="relative inline-block w-full">
                            <select class="block w-full px-2 py-1 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Pilih Status</option>
                            <option value="approved">Approved</option>
                            <option value="revised">Revised</option>
                            </select>
                    </div>
                </td>
            </tr>
            {{-- bwh --}}
            </tbody>
        </table>

    </div>
    {{-- main content here --}}

</div>



    </div>


</div>
