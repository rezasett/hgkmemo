{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-2xl font-bold text-gray-900">Lead & Sub Lead</h1>
        <p class="mt-2 text-sm text-gray-700">Lead Schedule</p>
      </div>
        {{-- <div class="px-5 py-1 italic text-blue-900">
            status
        </div> --}}

        <!-- Dropdown -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
        {{-- <el-dropdown class="inline-block">
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
        </el-dropdown> --}}
    </div>
   </div>
    {{-- End Header --}}

    {{-- main content here --}}

    <div class="mt-8 px-4 py-5 sm:p-6 mr-250">
        <table class="w-full border border-gray-300 divide-y divide-gray-300">
            <thead class="border-b border-gray-300">
                <tr>
                    <th scope="col" class="w-50 text-left px-4 py-2 text-sm font-semibold text-gray-900 border border-gray-300">
                        Client Name
                    </th>
                    <th scope="col" class="w-50 text-left px-4 py-2 text-sm font-normal text-gray-900 border border-gray-300">
                        PT Example 1
                    </th>
                </tr>
                <tr>
                    <th scope="col" class="w-50 text-left px-4 py-2 text-sm font-semibold text-gray-900 border border-gray-300">
                        Audit Period
                    </th>
                    <th scope="col" class="w-50 text-left px-4 py-2 text-sm font-normal text-gray-900 border border-gray-300">
                        DD/MM/YYYY
                    </th>
                </tr>
            </thead>
        </table>
    </div>


    <div class="mt-2 px-4 py-5 sm:p-6">
     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <table class="min-w-full border border-gray-300">
        <thead class="bg-gray-50 border-b border-gray-300">
            <tr>
            <th scope="col"
                class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Lead Account
            </th>
            <th scope="col"
                class="w-50 text-center px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                Balance
            </th>
            <th scope="col"
                class="w-30 text-center px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                Materiality Scoping
            </th>
            <th scope="col"
                class="w-30 text-center px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">
                RoMM
            </th>
            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold border-r text-gray-900">
                Analytical Review Procedure
            </th>
            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold border-r text-gray-900">
                Confidence Factor
            </th>
            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold border-r text-gray-900">
                Sample size
            </th>

            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold border-r text-gray-900">
                Status
            </th>

            <th scope="col"
                class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900">
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
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">
                <a href="{{ route('livewire.risk-responses.ls1a') }}" class="text-blue-500 hover:text-blue-700">view</a>
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
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">
                <a href="{{ route('livewire.risk-responses.ls1a') }}" class="text-blue-500 hover:text-blue-700">view</a>
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
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">
                <a href="{{ route('livewire.risk-responses.ls1a') }}" class="text-blue-500 hover:text-blue-700">view</a>
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
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">
                <a href="{{ route('livewire.risk-responses.ls1a') }}" class="text-blue-500 hover:text-blue-700">view</a>
            </td>
          </tr>
        </tbody>
    </table>
    </div>
    {{-- main content here --}}
    </div>
</div>
