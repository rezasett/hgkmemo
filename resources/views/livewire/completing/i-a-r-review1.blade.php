{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
    <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
        <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
        <h1 class="text-2xl font-bold text-gray-900">Independence Auditor's Report Review</h1>
        <p class="mt-2 text-xl text-gray-700">Audit Opinion</p>
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
            </tbody>
        </table>
    </div>

    <div class="mt-12 px-4 sm:px-6 lg:px-8 mb-4 mr-150">
        <table class="mt-4 w-full border border-gray-300 divide-y divide-gray-300">
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="min-w-20 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold bg-yellow-400">Total PM</td>
                    <td class="min-w-40 px-4 py-2  text-sm text-gray-700 border-r border-gray-300 bg-gray-50"></td>
                </tr>
                <tr>
                    <td class="min-w-20 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold ">Total Mistatement</td>
                    <td class="min-w-40 px-4 py-2  text-sm text-gray-700 border-r border-gray-300 bg-gray-50"></td>
                </tr>
                <tr>
                    <td class="min-w-20 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Pervasive or Not Pervasive</td>
                    <td class="min-w-40 px-4 py-2  text-sm text-gray-700 border-r border-gray-300 bg-gray-50">
                        <select class="w-full text-sm text-gray-700 text-center">
                                <option>--select--</option>
                                <option>Pervasive</option>
                                <option>Not Pervasive</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="min-w-20 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Overall Data Received - HGKPortal</td>
                    <td class="min-w-40 px-4 py-2  text-sm text-gray-700 border-r border-gray-300 bg-gray-50 text-right">%</td>
                </tr>
                <tr>
                    <td class="min-w-20 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Audit Evidence</td>
                    <td class="min-w-40 px-4 py-2  text-sm text-gray-700 border-r border-gray-300 bg-gray-50">
                        <select class="w-full text-sm text-gray-700 text-center">
                                <option>--select--</option>
                                <option>Adequate</option>
                                <option>Inadequate</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="min-w-20 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Going Concern Issue</td>
                    <td class="min-w-40 px-4 py-2  text-sm text-gray-700 border-r border-gray-300 bg-gray-50">
                        <select class="w-full text-sm text-gray-700 text-center">
                                <option>--select--</option>
                                <option>Yes</option>
                                <option>No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="min-w-20 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold bg-yellow-400">Audit Opinion Matrix</td>
                    <td class="min-w-40 px-4 py-2  text-sm text-gray-700 border-r border-gray-300 bg-gray-200"></td>
                </tr>
                <tr>
                    <td class="min-w-20 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Audit Opinion Decision</td>
                    <td class="min-w-40 px-4 py-2  text-sm text-gray-700 border-r border-gray-300 bg-gray-50">
                        <select class="w-full text-sm text-gray-700 text-center">
                                <option>--select--</option>
                                <option>Unqualified</option>
                                <option>Qualified</option>
                                <option>Adverse</option>
                                <option>Disclaimer</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class=>
            <body class="bg-gray-100 text-gray-900">

            <div class="mt-8 max-w-6xl mx-auto p-4">
            <h1 class="text-xl font-bold mb-3">Audit Opinion Modification Matrix</h1>

            <!-- Responsive wrapper -->
            <div class="overflow-x-auto rounded-xl shadow bg-white">
            <table class="w-full border border-gray-300 text-sm">
                <thead class="bg-gray-200 text-gray-800">
                <tr class="divide-x divide-gray-300">
                    <th class="sticky top-0 z-10 px-4 py-3 text-left font-semibold w-1/3">
                    Nature of the matter causing modification of the opinion
                    </th>
                    <th colspan="2" class="sticky top-0 z-10 px-4 py-3 text-center font-semibold">
                    Auditor’s consideration of how pervasive the effect or possible effect is on the financial statements
                    </th>
                </tr>
                <tr class="divide-x divide-gray-300">
                    <th class="px-4 py-2 text-left bg-gray-50 font-semibold"> </th>
                    <th class="px-4 py-2 text-center bg-gray-50 font-semibold">Material but not pervasive</th>
                    <th class="px-4 py-2 text-center bg-gray-50 font-semibold">Material and pervasive</th>
                </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                <!-- Row 1 -->
                <tr class="divide-x divide-gray-200 hover:bg-gray-50">
                    <td class="px-4 py-3 font-medium">Financial statements contain a material misstatement</td>
                    <td class="px-4 py-3 text-center">Qualified opinion</td>
                    <td class="px-4 py-3 text-center">Adverse opinion</td>
                </tr>

                <!-- Row 2 -->
                <tr class="divide-x divide-gray-200 hover:bg-gray-50">
                    <td class="px-4 py-3 font-medium">Inability to obtain sufficient appropriate audit evidence</td>
                    <td class="px-4 py-3 text-center">Qualified opinion</td>
                    <td class="px-4 py-3 text-center">Disclaimer of opinion</td>
                </tr>
                </tbody>

                <!-- Optional footnote -->
                <tfoot class="bg-gray-50">
                <tr class="divide-x divide-gray-300">
                    <td colspan="3" class="px-4 py-3 text-xs text-gray-600">
                    Tip: Use this matrix with SA 700/705/570. “Pervasive” generally means effects that are not confined to specific elements,
                    or represent a substantial proportion of the financial statements, or are fundamental to users’ understanding.
                    </td>
                </tr>
                </tfoot>
            </table>

    </div>







    </div>
    {{-- main content here --}}

</div>
