<!-- Main Content -->
<div class="flex-1 bg-white p-4 pl-0.5">
 <!-- Main Content -->
<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-2xl font-semibold text-gray-900">Accounting Estimate</h1>
      <p class="mt-2 text-xl text-gray-700">Detail</p>
    </div>
  </div>

{{-- End Header --}}

    {{-- Body --}}
    <div class="mt-8 flow-root mr-200">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 w-full"> <!-- Add w-full here -->
            <table class="max-w-full divide-y divide-gray-300 w-full align"> <!-- Add w-full here -->
            <thead>
                <tr>
                <th scope="col" class="w-20 py-2 pr-3 pl-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">Client Name</th>
                <th scope="col" class="w-50 text-left text-sm font-normal text-gray-900">PT Example</th>
                </tr>
                <tr>
                <th scope="col" class="w-20 py-2 pr-3 pl-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">Audit Period</th>
                <th scope="col" class="w-50 text-left text-sm font-normal text-gray-900">DD/MM/YYYY</th>
                </tr>
            </thead>
            </table>
        </div>
        </div>
    </div>
    {{-- End Body --}}

    {{-- Body --}}
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 w-full"> <!-- Add w-full here -->
            <table class=" w-full border border-gray-300 divide-y divide-gray-300">
                <thead class="bg-gray-50 border border-gray-300">
                    <tr>
                        <th scope="col" class="w-50 text-mid text-sm font-semibold text-center text-gray-900">Cycle</th>
                        <th scope="col" class="w-50 text-mid text-sm font-semibold text-center text-gray-900">COA</th>
                        <th scope="col" class="w-50 text-mid text-sm font-semibold text-center text-gray-900">Lead Account</th>
                        <th scope="col" class="w-50 text-mid text-sm font-semibold text-center text-gray-900">Sub Account</th>
                        <th scope="col" class="w-50 text-mid text-sm font-semibold text-center text-gray-900">Action</th>
                        <th scope="col" class="w-50 text-mid text-sm font-semibold text-center text-gray-900">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">Loan</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">1006-1</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-left">Pinjaman Yang Diberikan</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-left">Kredit Modal Kerja</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">
                            <a href="{{ route('livewire.risk-responses.accounting-estimate2') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                            </a>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">Y</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">Loan</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">1006-2</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-left">Pinjaman Yang Diberikan</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-left">Kredit Investasi</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">
                            <a href="{{ route('livewire.risk-responses.accounting-estimate2') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                            </a>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">N</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">Loan</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">1006-3</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-left">Pinjaman Yang Diberikan</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-left">Kredit Konsumtif</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">
                            <a href="{{ route('livewire.risk-responses.accounting-estimate2') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                            </a>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">N</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">Loan</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">4001-1</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-left">Pendapatan Bunga Kredit</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-left">Bunga Kredit Modal Kerja</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">
                            <a href="{{ route('livewire.risk-responses.accounting-estimate2') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                            </a>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">N</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">Loan</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">4001-2</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-left">Pendapatan Bunga Kredit</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-left">Bunga Kredit Investasi</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">
                            <a href="{{ route('livewire.risk-responses.accounting-estimate2') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                            </a>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">N</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">Loan</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">4001-3</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-left">Pendapatan Bunga Kredit</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-left">Bunga Kredit Konsumtif</td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">
                            <a href="{{ route('livewire.risk-responses.accounting-estimate2') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                            </a>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300 text-center">N</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    {{-- End Body --}}

  </div>
</div>

