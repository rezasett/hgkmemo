{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold text-gray-900">Client Prospect Data</h1>
        <p class="mt-2 text-sm text-gray-700">Personnel Allocation</p>
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
    <div class="mt-4 sm:mt-0 sm:ml-8">
    {{-- Content --}}
    <!-- Card dengan margin top -->
    <div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
      <div class="px-4 py-5 sm:p-6">
     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead class="bg-gray-50 border border-gray-300">
            <tr>
            <th scope="col"
                class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                Stage I: Client Acceptance
            </th>
            <th colspan="6" scope="col"
                class="w-150 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Working Hour
            </th>
        </tr>
            <th scope="col"
                class="w-140 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
            </th>
            <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
            </th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Risk analysis of engagement acceptance</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Letter of engagement</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Independent statement</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Communication with the engagement team</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
        </tbody>
    </table>
    </div>
    </div>
    </div>
  <!-- Margin Body End -->

  {{-- Body --}}
    <!-- Margin Body -->
    <div class="mt-4 sm:mt-0 sm:ml-8">
    {{-- Content --}}
    <!-- Card dengan margin top -->
    <div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
      <div class="px-4 py-5 sm:p-6">
     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead class="bg-gray-50 border border-gray-300">
            <tr>
            <th scope="col"
                class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                Stage II: Risk Assessment
            </th>
            <th colspan="6" scope="col"
                class="w-150 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Working Hour
            </th>
        </tr>
            <th scope="col"
                class="w-140 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
            </th>
            <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
            </th>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Consideration of initial materiality</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Analytical procedures</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Understanding the entity and its environment</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Development of inherent risk</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Control risk/monitoring</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Communication with TCWG and SPI</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
        </tbody>
    </table>
    </div>
    </div>
    </div>
  <!-- Margin Body End -->

  {{-- Body --}}
    <!-- Margin Body -->
    <div class="mt-4 sm:mt-0 sm:ml-8">
    {{-- Content --}}
    <!-- Card dengan margin top -->
    <div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
      <div class="px-4 py-5 sm:p-6">
     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead class="bg-gray-50 border border-gray-300">
            <tr>
            <th scope="col"
                class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                Stage III: Risk Responses
            </th>
            <th colspan="6" scope="col"
                class="w-150 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Working Hour
            </th>
        </tr>
            <th scope="col"
                class="w-140 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
            </th>
            <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
            </th>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Estimation of accounting procedure</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Assessment of related party transactions</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Substantive procedures</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Evaluation of audit work</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Management commitment and contingencies</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Going concern asessment</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Identification of material misstatements</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
        </tbody>
    </table>
    </div>
    </div>
    </div>
  <!-- Margin Body End -->

  {{-- Body --}}
    <!-- Margin Body -->
    <div class="mt-4 sm:mt-0 sm:ml-8">
    {{-- Content --}}
    <!-- Card dengan margin top -->
    <div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
      <div class="px-4 py-5 sm:p-6">
     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead class="bg-gray-50 border border-gray-300">
            <tr>
            <th scope="col"
                class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                Stage IV: Reporting
            </th>
            <th colspan="6" scope="col"
                class="w-150 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Working Hour
            </th>
        </tr>
            <th scope="col"
                class="w-140 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
            </th>
            <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
            </th>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Evaluation of final materiality</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Final analytical procedure</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Comunication with TCWG</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Review of financial statement procedures</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Evaluation of audit evidence</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Review IAR</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Final Memorandum</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
        </tbody>
    </table>
    </div>
    </div>
    </div>
  <!-- Margin Body End -->

  {{-- Body --}}
    <!-- Margin Body -->
    <div class="mt-4 sm:mt-0 sm:ml-8">
    {{-- Content --}}
    <!-- Card dengan margin top -->
    <div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
      <div class="px-4 py-5 sm:p-6">
     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead class="bg-gray-50 border border-gray-300">
            <tr>
            <th scope="col"
                class="w-120 px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                Personnel Budget
            <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
                <th scope="col"
                class="w-20 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                Name - Role
            </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Budgeted Working Hour</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>

          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Administration and Support</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Totak Working Hour</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Man per Hour</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total man per Hour</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center bg-gray-100"></td>
          </tr>
        </tbody>
    </table>
    </div>
    </div>
    </div>
  <!-- Margin Body End -->

