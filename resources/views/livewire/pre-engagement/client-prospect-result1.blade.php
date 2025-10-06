{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold text-gray-900">Client Prospect Result Detail</h1>
        <p class="mt-2 text-sm text-gray-700">Client Name</p>
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
    <div class="mr-200 mt-4 sm:mt-8 sm:ml-8">
    {{-- Content --}}
        <table class="mr-50 w-full border border-gray-300 divide-y divide-gray-300">
            <thead class="border border-gray-300">
            <tr>
                <th scope="col"
                    class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Client Risk
                </th>
                 <th scope="col"
                    class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    H/L
                </th>
            </tr>
            </thead>
        </table>
    </div>
    {{-- EndBody & Content --}}

    {{-- Body --}}
    <div class="mr-200 mt-4 sm:mt-4 sm:ml-8">
    {{-- Content --}}
    <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead>
        <tr>
            <th class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300">
            Total Man Per Hour
            </th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
            Rpxxx.xxx.xxx
            </th>
        </tr>
        <tr>
            <th class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300">
            Total Cost Allocation
            </th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
            Rpxxx.xxx.xxx
            </th>
        </tr>
        <tr>
            <th class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">
            Based Price
            </th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">
            Rpxxx.xxx.xxx
            </th>
        </tr>
        </thead>
    </table>
    </div>
    {{-- EndBody & Content --}}

     {{-- Body --}}
    <div class="mr-200 mt-4 sm:mt-4 sm:ml-8">
    {{-- Content --}}
    <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead>
        <tr>
            <th class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300">
            Office Overhead
            </th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                xx %
            </th>
        </tr>
        <tr>
            <th class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">
            Overhead Cost
            </th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">
            Rpxxx.xxx.xxx
            </th>
        </tr>
        </thead>
    </table>
    </div>
    {{-- EndBody & Content --}}

    {{-- Body --}}
    <div class="mr-200 mt-4 sm:mt-4 sm:ml-8">
    {{-- Content --}}
    <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead>
        <tr>
            <th class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300">
            Margin Percentage
            </th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
            </th>
        </tr>
        <tr>
            <th class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">
            Margin Price
            </th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">
            Rpxxx.xxx.xxx
            </th>
        </tr>
        </thead>
    </table>
    </div>
    {{-- EndBody & Content --}}

    {{-- Body --}}
    <div class="mr-200 mt-4 sm:mt-4 sm:ml-8">
    {{-- Content --}}
    <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead>
        <tr>
            <th class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300">
            VAT
            </th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                <div class="flex justify-center items-center">
                    <select class="w-full text-sm text-gray-700 text-center">
                        <option>Include</option>
                        <option>Exclude</option>
                    </select>
                </div>
            </th>
        </tr>
        <tr>
            <th class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">
            VAT Amount
            </th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">
            Rpxxx.xxx.xxx
            </th>
        </tr>
        </thead>
    </table>
    </div>
    {{-- EndBody & Content --}}

    {{-- Body --}}
    <div class="mr-200 mt-4 sm:mt-4 sm:ml-8">
    {{-- Content --}}
    <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead>
        <tr>
            <th class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">
            Income Tax
            </th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">
            Rpxxx.xxx.xxx
            </th>
        </tr>
        </thead>
    </table>
    </div>
    {{-- EndBody & Content --}}

    {{-- Body --}}
    <div class="mr-200 mt-4 sm:mt-4 sm:ml-8">
    {{-- Content --}}
    <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead>
        <tr>
            <th class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300 bg-yellow-400">
            Audit Fee
            </th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-yellow-400">
            Rpxxx.xxx.xxx
            </th>
        </tr>
        <tr>
            <th class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border border-gray-300">
            Estimated Client Price
            </th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
            Rpxxx.xxx.xxx
            </th>
        </tr>
        </thead>
    </table>
    </div>
    {{-- EndBody & Content --}}

    {{-- Body --}}
    <div class="mt-4 sm:mt-10 sm:ml-8">
    <h1>Negotiation Log</h1>
    {{-- Content --}}
    <table class="mt-4 w-full border border-gray-300 divide-y divide-gray-300">
        <thead>
        <tr>
            <th class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">Date</th>
            <th class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">Time</th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">Client PIC</th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">Firm PIC</th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">Negotiation Fee</th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">Status</th>
            <th class="w-50 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-gray-100">Negotiation Media</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>Closed</option>
                            <option>Negotiable</option>
                        </select>
                    </div>
                </td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
            </tr>
            <tr>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>Closed</option>
                            <option>Negotiable</option>
                        </select>
                    </div>
                </td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
            </tr>
            <tr>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>Closed</option>
                            <option>Negotiable</option>
                        </select>
                    </div>
                </td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
            </tr>
            <tr>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>Closed</option>
                            <option>Negotiable</option>
                        </select>
                    </div>
                </td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
            </tr>
            <tr>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300">
                    <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>Closed</option>
                            <option>Negotiable</option>
                        </select>
                    </div>
                </td>
                <td class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300"></td>
            </tr>
        </tbody>
    </table>
    </div>
    {{-- EndBody & Content --}}

    {{-- Body --}}
    <div class="mt-4 sm:mt-10 sm:ml-8">
    {{-- Content --}}
    <table class="mb-10 mt-4 w-full border border-gray-300 divide-y divide-gray-300">
        <thead>
        <tr>
            <th class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 bg-yellow-400">Negotiation Result</th>
            <th class="w-40 px-4 py-2 text-center text-sm font-semibold text-gray-900 border border-gray-300 ">
               <div class="flex justify-center items-center">
                        <select class="w-full text-sm text-gray-700 text-center">
                            <option>Accept</option>
                            <option>Reject</option>
                        </select>
                    </div>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
             <td class="px-4 py-20 text-center text-sm font-semibold text-gray-900 border border-gray-300" colspan="2"> Notes</td>
        <tr>
    </table>
</div>



