{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold text-gray-900">Cycle Setting</h1>
        <p class="mt-2 text-sm text-gray-700"></p>
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

    <div class="mt-4 px-4 sm:px-6 lg:px-8 mb-4 mr-250">
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

{{-- Body --}}
    <!-- Margin Body -->
    <div class="mt-4 sm:mt-0 sm:ml-8">
    {{-- Content --}}
    <!-- Card w/ margin top -->
    <div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
    <div class="px-4 py-5 sm:p-6">
     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <div class="flex items-center justify-between pb-4">
    <div class="text-base font-semibold text-blue-700">
    Cycle Setting
    </div>
    <button
    class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-600 text-white hover:bg-blue-700 focus:outline-none"
    title="Add Cycle"
  >
    <!-- Ikon Plus -->
        <svg xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
        </button>
        </div>
     <table class="w-full border border-gray-300 border-collapse">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="w-10 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                        No
                    </th>
                    <th scope="col"
                        class="w-150 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                        Cycle Name
                    </th>
                    <th scope="col"
                        class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300 text-center">1</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">Loan</td>
                    <td class="px-4 py-2 text-sm text-blue-700 border border-gray-300 text-center">remove</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300 text-center">2</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">Funding</td>
                    <td class="px-4 py-2 text-sm text-blue-700 border border-gray-300 text-center">remove</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300 text-center">3</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">Investment</td>
                    <td class="px-4 py-2 text-sm text-blue-700 border border-gray-300 text-center">remove</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300 text-center">4</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">Fixed Assets</td>
                    <td class="px-4 py-2 text-sm text-blue-700 border border-gray-300 text-center">remove</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300 text-center">5</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">Payroll</td>
                    <td class="px-4 py-2 text-sm text-blue-700 border border-gray-300 text-center">remove</td>
                </tr>

            </tbody>
        </table>
    </div>
    </div>
    </div>
    <!-- Margin Body End -->

</div>
