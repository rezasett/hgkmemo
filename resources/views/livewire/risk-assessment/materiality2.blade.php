
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="w-[95%] mx-auto p-4">
  <!-- Indikasi Risiko Klien -->

  <!-- Optional: Show current selected value (High / Low) -->

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold text-gray-900">Materiality</h1>
        <p class="mt-2 text-sm text-gray-700">Calculation Detail</p>
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

    {{-- End Header --}}

    {{-- id --}}
<div class="mt-8 mb-4 text-base font-semibold text-gray-900 mr-170">
<table class="w-full border border-gray-300 divide-y divide-gray-300 mb-6">
  <tbody class="divide-y divide-gray-200">
    <tr>
      <td class="w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Client Name</td>
      <td class="w-50 px-4 py-2 text-sm text-black bg-gray-50">PT Example 1</td>
    </tr>
    <tr>
      <td class="w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Audit Period</td>
      <td class="w-50 px-4 py-2 text-sm text-black bg-gray-50">DD/MM/YYYY</td>
    </tr>

  </tbody>
</table>
</div>

{{-- id end --}}


    <!-- Heading dengan jarak ke tabel -->
<div class="mt-8 mb-4 text-base font-semibold text-gray-900 mr-170">

      <!-- Benchmark Information -->
<table class="w-full border border-gray-300 divide-y divide-gray-300 mb-6">
  <thead class="bg-gray-50">
    <tr>
      <th scope="col"
          class="px-4 py-2 text-mid text-sm font-semibold text-gray-900 border-r border-gray-300">
        Benchmark Information
      </th>
      <th scope="col"
          class="px-20 py-4 text-mid text-sm font-semibold text-gray-900">
        Value
        <div class="flex justify-center">
  <tbody class="divide-y divide-gray-200">
    <tr>
      <td class="w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total Asset</td>
      <td class="w-50 px-4 py-2 text-sm text-black bg-gray-50"></td>
    </tr>
    <tr>
      <td class="w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total Liability</td>
      <td class="w-50 px-4 py-2 text-sm text-black bg-gray-50"></td>
    </tr>
    <tr>
      <td class="w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total Equity</td>
      <td class="w-50 px-4 py-2 text-sm text-black bg-gray-50"></td>
    </tr>
    <tr>
      <td class="w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total Revenue</td>
      <td class="w-50 px-4 py-2 text-sm text-black bg-gray-50"></td>
    </tr>
    <tr>
      <td class="w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total Expenses</td>
      <td class="w-50 px-4 py-2 text-sm text-black bg-gray-50"></td>
    </tr>
    <tr>
      <td class="w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total EBT</td>
      <td class="w-50 px-4 py-2 text-sm text-black bg-gray-50"></td>
    </tr>
  </tbody>
</table>
</div>


{{-- benchmark selection --}}
<div class="mb-4 text-base font-semibold text-gray-900 mr-170">
<table class="w-full border border-gray-300 divide-y divide-gray-300 mb-6">
  <tbody class="divide-y divide-gray-200">
    <tr>
      <td class="w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Benchmark Selection</td>
      <td class="w-50 px-4 py-2 text-sm text-black bg-gray-50">
        <select class="w-full text-sm text-gray-700 text-center">
            <option>--select--</option>
            <option>Total Assets</option>
            <option>Total Liabilities</option>
            <option>Total Equity</option>
            <option>Total Revenue</option>
            <option>Total Expenses</option>
        </select>
      </td>
    </tr>
    <tr>
      <td class="w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Benchmark Value</td>
      <td class="w-50 px-4 py-2 text-sm text-black bg-gray-50"></td>
    </tr>

  </tbody>
</table>
</div>

{{-- selection end --}}


<!-- Margin OM -->
<div class="mt-12 w-full border border-gray-300 divide-y divide-gray-300 mb-6">
  <div class="grid grid-cols-3">
    <!-- Kolom Kiri (2/3) -->
    <div class="w-200 col-span-2 border-r border-gray-300">
      <!-- Header Margin OM -->
      <div class="flex items-center border-b border-gray-300">
        <div class="w-1/3 px-3 py-2 text-sm font-semibold text-gray-800 border-r bg-yellow-400 border-gray-300">
          Margin OM
        </div>
        <div class="w-2/3 flex items-end justify-end px-3 py-2 text-sm text-gray-700">
          <span class="ml-1">%</span>
        </div>
      </div>

      <!-- OM Value -->
      <div class="flex items-center border-b border-gray-300">
        <div class="w-1/3 px-3 py-2 text-sm text-700 border-r border-gray-300">
          OM Value
        </div>
        <div class="w-2/3 px-3 py-2 text-sm text-gray-800"></div>
      </div>

      <!-- Margin Reference Title -->
      <div class="px-3 py-2 text-center font-medium text-gray-700 bg-gray-200 border-b border-gray-300">
        Margin Reference
      </div>

      <!-- Reference Rows -->
      <div class="divide-y divide-gray-300">
        <div class="flex justify-between px-3 py-2 text-sm text-gray-700">
          <span>Revenue</span>
          <span>8% - 12%</span>
        </div>
        <div class="flex justify-between px-3 py-2 text-sm text-gray-700">
          <span>Earning Before Taxes</span>
          <span>3% - 5%</span>
        </div>
        <div class="flex justify-between px-3 py-2 text-sm text-gray-700">
          <span>Total Assets</span>
          <span>1% - 2%</span>
        </div>
        <div class="flex justify-between px-3 py-2 text-sm text-gray-700">
          <span>Total Equity</span>
          <span>1% - 3%</span>
        </div>
      </div>
    </div>

    <!-- Kolom Kanan (1/3) -->
    <div class="col-span-1 p-3">
      <label class="block text-sm font-medium text-gray-700 mb-2">Decision Notes:</label>
      <textarea wire:model="decision_om" rows="9"
                class="w-full border border-gray-300 rounded p-2 text-sm"></textarea>
    </div>
  </div>
</div>

      <!-- Header Margin OM -->

<!-- Margin PM -->
<div class="mt-12 w-full border border-gray-300 divide-y divide-gray-300 mb-6">
  <div class="grid grid-cols-3">
    <!-- Kolom Kiri (2/3) -->
    <div class="w-200 col-span-2 border-r border-gray-300">
      <!-- Header Margin OM -->
      <div class="flex items-center border-b border-gray-300">
        <div class="w-1/3 px-3 py-2 text-sm font-semibold text-gray-800 border-r bg-yellow-400 border-gray-300">
          Margin PM
        </div>
        <div class="w-2/3 flex items-end justify-end px-3 py-2 text-sm text-gray-700 ">
          <span class="ml-1">%</span>
        </div>
      </div>

      <!-- OM Value -->
      <div class="flex items-center border-b border-gray-300">
        <div class="w-1/3 px-3 py-2 text-sm text-700 border-r border-gray-300">
          PM Value
        </div>
        <div class="w-2/3 px-3 py-2 text-sm text-gray-800"></div>
      </div>

      <!-- Margin Reference Title -->
      <div class="px-3 py-2 text-center font-medium text-gray-700 bg-gray-200 border-b border-gray-300">
        Margin Reference
      </div>

      <!-- Reference Rows -->
      <div class="divide-y divide-gray-300">
        <div class="flex justify-between px-3 py-2 text-sm text-gray-700">
          <span>High</span>
          <span>70%</span>
        </div>
        <div class="flex justify-between px-3 py-2 text-sm text-gray-700">
          <span>Low</span>
          <span>80%</span>
        </div>
      </div>
    </div>

    <!-- Kolom Kanan (1/3) -->
    <div class="col-span-1 p-3">
      <label class="block text-sm font-medium text-gray-700 mb-2">Decision Notes:</label>
      <textarea wire:model="decision_om" rows="8"
                class="w-full border border-gray-300 rounded p-2 text-sm"></textarea>
    </div>
  </div>
</div>

<div class="mt-12 w-full border border-gray-300 divide-y divide-gray-300 mb-6">
  <div class="grid grid-cols-3">
    <!-- Kolom Kiri (2/3) -->
    <div class="w-200 col-span-2 border-r border-gray-300">
      <!-- Header Margin OM -->
      <div class="flex items-center border-b border-gray-300">
        <div class="w-1/3 px-3 py-2 text-sm font-semibold text-gray-800 border-r bg-yellow-400 border-gray-300">
          Margin SUD
        </div>
        <div class="w-2/3 flex items-end justify-end px-3 py-2 text-sm text-gray-700 ">
          <span class="ml-1">%</span>
        </div>
      </div>

      <!-- OM Value -->
      <div class="flex items-center border-b border-gray-300">
        <div class="w-1/3 px-3 py-2 text-sm text-700 border-r border-gray-300">
          SUD Value
        </div>
        <div class="w-2/3 px-3 py-2 text-sm text-gray-800"></div>
      </div>

      <!-- Margin Reference Title -->
      <div class="px-3 py-2 text-center font-medium text-gray-700 bg-gray-200 border-b border-gray-300">
        Margin Reference
      </div>

      <!-- Reference Rows -->
      <div class="divide-y divide-gray-300">
        <div class="flex justify-between px-3 py-2 text-sm text-gray-700">
          <span>Margin Reference</span>
          <span>3%</span>
        </div>
      </div>
    </div>

    <!-- Kolom Kanan (1/3) -->
    <div class="col-span-1 p-3">
      <label class="block text-sm font-medium text-gray-700 mb-2">Decision Notes:</label>
      <textarea wire:model="decision_om" rows="6"
                class="w-full border border-gray-300 rounded p-2 text-sm"></textarea>
    </div>
  </div>







