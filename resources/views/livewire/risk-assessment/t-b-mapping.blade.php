{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold text-gray-900">Trial Balance Mapping</h1>
        <p class="mt-2 text-sm text-gray-700">Inhouse Balance</p>
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
    <div class="mt-4 sm:mt-0 sm:ml-2 mr-300">
    {{-- Content --}}
    <div class="px-4 py-5 sm:p-6 ml-4">
        <table class="w-full border border-gray-300 border-collapse">
            <thead>
                <tr>
                    <th scope="col"
                        class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-50">
                        Client Name
                    </th>
                    <th scope="col"
                        class="w-50 px-4 py-2 text-center text-sm font-normal text-gray-900 border border-gray-300">
                        PT Example 1
                    </th>
                </tr>
                <tr>
                    <th scope="col"
                        class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-50">
                        As of Period
                    </th>
                    <th scope="col"
                        class="w-50 px-4 py-2 text-center text-sm font-normal text-gray-900 border border-gray-300">
                        DD/MM/YYYY
                    </th>
                </tr>
                <tr>
                    <th scope="col"
                        class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-50">
                        Audit Period
                    </th>
                    <th scope="col"
                        class="w-50 px-4 py-2 text-center text-sm font-normal text-gray-900 border border-gray-300">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>--select--</option>
                            <option>Interim</option>
                            <option>Year End</option>
                        </select>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    </div>

   {{-- Body --}}
<!-- Margin Body -->
<div class="mt-4 sm:mt-0 sm:ml-2">
    {{-- Content --}}
    <div class="px-4 py-5 sm:p-6 ml-4">

        <!-- Header dengan tombol upload -->
        <div class="flex justify-between items-center mb-2">
            <h2 class="text-lg font-semibold text-gray-800">Trial Balance Configuration</h2>
            <button
                class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded shadow">
                Upload Data
            </button>
        </div>

        <table class="w-full border border-gray-300 border-collapse">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                        COA
                    </th>
                    <th scope="col"
                        class="w-100 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                        Account Name
                    </th>
                    <th scope="col"
                        class="w-80 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                        Balance
                    </th>
                    <th scope="col"
                        class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                        Component
                    </th>
                    <th scope="col"
                        class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                        Cycle
                    </th>
                    <th scope="col"
                        class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                        Lead Account
                    </th>
                    <th scope="col"
                        class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                        Account Ref.
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="px-4 py-2 text-center text-sm text-gray-700 border border-gray-300">1006-1</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">Kredit Modal Kerja</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300"></td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <div class="flex justify-center items-center">
                            <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Assets</option>
                                <option>Liabilities</option>
                                <option>Equity</option>
                                <option>Revenue</option>
                                <option>Expenses</option>
                            </select>
                        </div>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <div class="flex justify-center items-center">
                            <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Loan</option>
                                <option>Funding</option>
                                <option>Investment</option>
                                <option>Assets</option>
                                <option>Revenue</option>
                            </select>
                        </div>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300 text-center">Pinjaman Yang Diberikan</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Kredit Yang Diberikan</option>
                                <option>Investasi</option>
                                <option>DPK</option>
                                <option>Aset Tetap</option>
                                <option>CKKE</option>
                            </select>
                    </td>
                </tr>

                 <tr>
                    <td class="px-4 py-2 text-center text-sm text-gray-700 border border-gray-300">1006-2</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">Kredit Investasi</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300"></td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <div class="flex justify-center items-center">
                            <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Assets</option>
                                <option>Liabilities</option>
                                <option>Equity</option>
                                <option>Revenue</option>
                                <option>Expenses</option>
                            </select>
                        </div>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <div class="flex justify-center items-center">
                            <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Loan</option>
                                <option>Funding</option>
                                <option>Investment</option>
                                <option>Assets</option>
                                <option>Revenue</option>
                            </select>
                        </div>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300 text-center">Pinjaman Yang Diberikan</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Kredit Yang Diberikan</option>
                                <option>Investasi</option>
                                <option>DPK</option>
                                <option>Aset Tetap</option>
                                <option>CKKE</option>
                            </select>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-2 text-center text-sm text-gray-700 border border-gray-300">1006-3</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">Kredit Konsumsi</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300"></td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <div class="flex justify-center items-center">
                            <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Assets</option>
                                <option>Liabilities</option>
                                <option>Equity</option>
                                <option>Revenue</option>
                                <option>Expenses</option>
                            </select>
                        </div>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <div class="flex justify-center items-center">
                            <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Loan</option>
                                <option>Funding</option>
                                <option>Investment</option>
                                <option>Assets</option>
                                <option>Revenue</option>
                            </select>
                        </div>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300 text-center">Pinjaman Yang Diberikan</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Kredit Yang Diberikan</option>
                                <option>Investasi</option>
                                <option>DPK</option>
                                <option>Aset Tetap</option>
                                <option>CKKE</option>
                            </select>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-2 text-center text-sm text-gray-700 border border-gray-300">4001-1</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">Bunga KMK</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300"></td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <div class="flex justify-center items-center">
                            <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Assets</option>
                                <option>Liabilities</option>
                                <option>Equity</option>
                                <option>Revenue</option>
                                <option>Expenses</option>
                            </select>
                        </div>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <div class="flex justify-center items-center">
                            <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Loan</option>
                                <option>Funding</option>
                                <option>Investment</option>
                                <option>Assets</option>
                                <option>Revenue</option>
                            </select>
                        </div>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300 text-center">Pendapatan Bunga</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Kredit Yang Diberikan</option>
                                <option>Investasi</option>
                                <option>DPK</option>
                                <option>Aset Tetap</option>
                                <option>CKKE</option>
                            </select>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-2 text-center text-sm text-gray-700 border border-gray-300">4001-2</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">Bunga KI</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300"></td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <div class="flex justify-center items-center">
                            <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Assets</option>
                                <option>Liabilities</option>
                                <option>Equity</option>
                                <option>Revenue</option>
                                <option>Expenses</option>
                            </select>
                        </div>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <div class="flex justify-center items-center">
                            <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Loan</option>
                                <option>Funding</option>
                                <option>Investment</option>
                                <option>Assets</option>
                                <option>Revenue</option>
                            </select>
                        </div>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300 text-center">Pendapatan Bunga</td>
                    <td class="px-4 py-2 text-sm text-gray-700 border border-gray-300">
                        <select class="w-full text-sm text-gray-700 text-center border-gray-300 rounded">
                                <option>Kredit Yang Diberikan</option>
                                <option>Investasi</option>
                                <option>DPK</option>
                                <option>Aset Tetap</option>
                                <option>CKKE</option>
                            </select>
                    </td>
                </tr>

                <!-- Baris berikutnya tinggal copy -->
            </tbody>
        </table>
    </div>
</div>

</div>

