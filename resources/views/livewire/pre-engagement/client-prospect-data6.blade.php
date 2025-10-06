{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold text-gray-900">Client Prospect Data</h1>
        <p class="mt-2 text-sm text-gray-700">Cost Allocation</p>
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
    <div class="mt-4 sm:mt-0 sm:ml-2">
    {{-- Content --}}
    <div class="px-4 py-5 sm:p-6 ml-4">
     <table class=" w-full border border-gray-300 divide-y divide-gray-300">
        <thead class="bg-gray-50 border border-gray-300">
        <tr>
            <th scope="col"
                class="w-10 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                No
            </th>
            <th scope="col"
                class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Personnel Name
            </th>
            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Area
            </th>
            <th scope="col"
                class="w-10 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Q
            </th>
            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Accomodation Rate
            </th>
            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Accomodation Total
            </th>
            <th scope="col"
                class="w-10 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Q
            </th>
            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Transport Rate
            </th>
            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Transport Total
            </th>
             <th scope="col"
                class="w-10 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Q
            </th>
            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Perdiem Rate
            </th>
            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Perdiem Total
            </th>
            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Other Cost
        </th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <tr>
                <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">1</td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">sample</td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                   <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>WIB</option>
                            <option>WITA</option>
                            <option>WIT</option>
                            <option>Trip.A</option>
                            <option>Trip.B</option>
                            <option>Trip.C</option>
                            <option>Trip.D</option>
                        </select>
                    </div>
                </td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
                <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            </tr>
            <tr>
                <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">2</td>
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
            </tr>
            <tr>
                <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">3</td>
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
            </tr>
            <tr>
                <td class="px-4 py-2 text-center text-sm text-gray-700 border-r border-gray-300">4</td>
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
            </tr>
        </tbody>
     </table>
    </div>

    {{-- Body --}}
    <!-- Margin Body -->
    <div class="mr-200 mt-4 sm:mt-0 sm:ml-2">
    {{-- Content --}}
    <div class="px-4 py-5 sm:p-6 ml-2">
    <table class=" w-full border border-gray-300 divide-y divide-gray-300">
        <thead class="bg-gray-50 border border-gray-300">
        <tr>
            <th scope="col"
                class="w-30 px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                Total Cost Allocation
            </th>
            <th scope="col"
                class="w-70 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
            </th>


