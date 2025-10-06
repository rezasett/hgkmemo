<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-900">Control Risk</h1>
        <p class="mt-2 text-xl text-gray-700">Cycle Level</p>
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

    {{-- main content here --}}

    <div class="mt-8 px-1 sm:px-6 lg:px-8 mr-250">
      <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="min-w-20 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Client Name</td>
            <td class="min-w-50 px-4 py-2  text-sm text-blue-600 border-r border-gray-300 bg-gray-50"></td>
          </tr>
          <tr>
            <td class="min-w-20 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">TB Periode</td>
            <td class="min-w-50 px-4 py-2 text-sm text-blue-600 border-r border-gray-300 bg-gray-50"></td>
          </tr>
        </tbody>
      </table>
      <div class="overflow-x-auto w-full mt-1">
        <!-- Scrollbar akan muncul di bawah table jika diperlukan -->
      </div>
    </div>
    <br>
     <div class="mt-8 px-4 sm:px-6 lg:px-8 mb-4">
     <div class="flex justify-start gap-4">
        <a href="{{ route('livewire.risk-assessment.control-risk2') }}" class="py-2 px-4 bg-blue-600 text-white rounded">Load Account View</a>
     </div>
    </div>

    <div class="px-4 py-5 sm:p-6">
  <!-- Wrapper dengan scroll horizontal -->
  <div class="overflow-x-auto">
    <table class="min-w-full border border-gray-300">
      <thead class="bg-gray-50 border border-gray-300">
        <tr>
          <th class="w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">Cycle</th>
          <th class="w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">Frequency</th>
          <th class="w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">Walkthrough Document</th>
          <th class="w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">Test of Control Document</th>
          <th class="w-50 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">Effectiveness</th>

        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        <tr>
          <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
          <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
            <select class="w-full text-sm text-gray-700 text-center">
                <option></option>
                <option>Daily</option>
                <option>Weekly</option>
                <option>Monthly</option>
                <option>Quarterly</option>
                <option>Annually</option>
            </select>
          </td>
          <td class="px-4 py-6 text-sm text-gray-700 border-r border-gray-300 align-middle">
            <div class="flex justify-center items-center gap-4 w-full h-full">
                <a href="#" class="py-2 px-4 bg-blue-600 text-white rounded">Upload File</a>
            </div>
          </td>
          <td class="px-4 py-6 text-sm text-gray-700 border-r border-gray-300 align-middle">
            <div class="flex justify-center items-center gap-4 w-full h-full">
                <a href="#" class="py-2 px-4 bg-blue-600 text-white rounded">Upload File</a>
            </div>
          </td>
          <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
            <select class="w-full text-sm text-gray-700 text-center">
                <option></option>
                <option>Effective</option>
                <option>Not Effective</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
          <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
            <select class="w-full text-sm text-gray-700 text-center">
                <option></option>
                <option>Daily</option>
                <option>Weekly</option>
                <option>Monthly</option>
                <option>Quarterly</option>
                <option>Annually</option>
            </select>
          </td>
          <td class="px-4 py-6 text-sm text-gray-700 border-r border-gray-300 align-middle">
            <div class="flex justify-center items-center gap-4 w-full h-full">
                <a href="#" class="py-2 px-4 bg-blue-600 text-white rounded">Upload File</a>
            </div>
          </td>
          <td class="px-4 py-6 text-sm text-gray-700 border-r border-gray-300 align-middle">
            <div class="flex justify-center items-center gap-4 w-full h-full">
                <a href="#" class="py-2 px-4 bg-blue-600 text-white rounded">Upload File</a>
            </div>
          </td>
          <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
            <select class="w-full text-sm text-gray-700 text-center">
                <option></option>
                <option>Effective</option>
                <option>Not Effective</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
          <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
            <select class="w-full text-sm text-gray-700 text-center">
                <option></option>
                <option>Daily</option>
                <option>Weekly</option>
                <option>Monthly</option>
                <option>Quarterly</option>
                <option>Annually</option>
            </select>
          </td>
          <td class="px-4 py-6 text-sm text-gray-700 border-r border-gray-300 align-middle">
            <div class="flex justify-center items-center gap-4 w-full h-full">
                <a href="#" class="py-2 px-4 bg-blue-600 text-white rounded">Upload File</a>
            </div>
          </td>
          <td class="px-4 py-6 text-sm text-gray-700 border-r border-gray-300 align-middle">
            <div class="flex justify-center items-center gap-4 w-full h-full">
                <a href="#" class="py-2 px-4 bg-blue-600 text-white rounded">Upload File</a>
            </div>
          </td>
          <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
            <select class="w-full text-sm text-gray-700 text-center">
                <option></option>
                <option>Effective</option>
                <option>Not Effective</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
          <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
            <select class="w-full text-sm text-gray-700 text-center">
                <option></option>
                <option>Daily</option>
                <option>Weekly</option>
                <option>Monthly</option>
                <option>Quarterly</option>
                <option>Annually</option>
            </select>
          </td>
          <td class="px-4 py-6 text-sm text-gray-700 border-r border-gray-300 align-middle">
            <div class="flex justify-center items-center gap-4 w-full h-full">
                <a href="#" class="py-2 px-4 bg-blue-600 text-white rounded">Upload File</a>
            </div>
          </td>
          <td class="px-4 py-6 text-sm text-gray-700 border-r border-gray-300 align-middle">
            <div class="flex justify-center items-center gap-4 w-full h-full">
                <a href="#" class="py-2 px-4 bg-blue-600 text-white rounded">Upload File</a>
            </div>
          </td>
          <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
            <select class="w-full text-sm text-gray-700 text-center">
                <option></option>
                <option>Effective</option>
                <option>Not Effective</option>
            </select>
          </td>
        </tr>


      </tbody>
    </table>
  </div>
</div>
