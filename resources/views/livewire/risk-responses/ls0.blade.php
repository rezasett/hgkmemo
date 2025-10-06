<!-- Main Content -->
{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-900">Lead & Sublead</h1>
        <p class="text-xl mt-2 text-gray-700">Dashboard</p>
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

   <div class="mt-12 px-4 sm:px-6 lg:px-8 mb-4">
        <table class="max-w-full divide-y divide-gray-300 w-full align"> <!-- Add w-full here -->
          <thead>
            <tr>
              <th scope="col" class="py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">No</th>
              <th scope="col" class="min-w-xs text-left text-sm font-semibold text-gray-900">Client Name</th>

              <th scope="col" class="px-3 py-3.5 text-mid text-sm font-semibold text-gray-900">Start</th>
              <th scope="col" class="px-3 py-3.5 text-mid text-sm font-semibold text-gray-900">End</th>

              <th scope="col" class="px-3 py-3.5 text-mid text-sm font-semibold text-gray-900">Status</th>
              <th scope="col" class="min-w-20 text-mid text-sm font-semibold text-gray-900">Action</th>
              <th scope="col" class="relative py-3.5 pr-4 pl-3 sm:pr-0">
              </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr>
              <td class="py-4 pr-4 pl-4 text-sm font-medium whitespace-nowrap text-gray-500 sm:pl-0">1</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">PT Example 1</td>

             <td class="text-center px-3 py-4 text-sm whitespace-nowrap text-gray-500">DD/MM/YYYY</td>
             <td class="text-center px-3 py-4 text-sm whitespace-nowrap text-gray-500">DD/MM/YYYY</td>

             <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500"></td>
             <td class="text-center">
                <a href="{{ route('livewire.risk-responses.ls1') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                </a>
            </td>
            </tr>
            <tr>
              <td class="py-4 pr-4 pl-4 text-sm font-medium whitespace-nowrap text-gray-500 sm:pl-0">2</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">PT Example 2</td>

             <td class="text-center px-3 py-4 text-sm whitespace-nowrap text-gray-500">DD/MM/YYYY</td>
             <td class="text-center px-3 py-4 text-sm whitespace-nowrap text-gray-500">DD/MM/YYYY</td>

             <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500"></td>
             <td class="text-center">
                <a href="{{ route('livewire.risk-responses.ls1') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                </a>
            </td>
            </tr>
            <tr>
              <td class="py-4 pr-4 pl-4 text-sm font-medium whitespace-nowrap text-gray-500 sm:pl-0">3</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">PT Example 3</td>

             <td class="text-center px-3 py-4 text-sm whitespace-nowrap text-gray-500">DD/MM/YYYY</td>
             <td class="text-center px-3 py-4 text-sm whitespace-nowrap text-gray-500">DD/MM/YYYY</td>

             <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500"></td>
             <td class="text-center">
                <a href="{{ route('livewire.risk-responses.ls1') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                </a>
            </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
