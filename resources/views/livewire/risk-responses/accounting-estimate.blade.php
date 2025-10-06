<!-- Main Content -->
<div class="flex-1 bg-white p-4 pl-0.5">
 <!-- Main Content -->
<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-2xl font-semibold text-gray-900">Accounting Estimate</h1>
      <p class="text-xl mt-2 text-gray-700">Dashboard</p>
    </div>
  </div>

  {{-- Body --}}
  <div class="mt-8 flow-root">
    <div class="mx-4 my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 w-full"> <!-- Add w-full here -->
        <table class="max-w-full divide-y divide-gray-300 w-full align"> <!-- Add w-full here -->
          <thead>
            <tr>
              <th scope="col" class="py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">No</th>
              <th scope="col" class="min-w-xs text-left text-sm font-semibold text-gray-900">Client Name</th>
              <th scope="col" class="min-w-50 text-mid text-sm font-semibold text-gray-900">Audit Period</th>
              <th scope="col" class="min-w-30 text-mid text-sm font-semibold text-gray-900">Role</th>
              <th scope="col" class="min-w-50 text-mid text-sm font-semibold text-gray-900">Cycle</th>
              <th scope="col" class="min-w-20 text-mid text-sm font-semibold text-gray-900">Action</th>
              <th scope="col" class="min-w-30 text-mid text-sm font-semibold text-gray-900">Status</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr>
              <td class="py-4 pr-4 pl-4 text-sm font-medium whitespace-nowrap text-gray-500 sm:pl-0">1</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">PT Example 1</td>
              <td class="px-3 py-4 text-center text-sm whitespace-nowrap text-gray-500">DD/MM/YYYY</td>
              <td class="px-3 py-4 text-center text-sm whitespace-nowrap text-gray-500">Team Member</td>
              <td class="px-3 py-4 text-center text-sm whitespace-nowrap text-gray-500">Loan</td>
              <td class="text-center">
                <a href="{{ route('livewire.risk-responses.accounting-estimate1') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                </a>
            </td>
            </tr>
            <tr>
              <td class="py-4 pr-4 pl-4 text-sm font-medium whitespace-nowrap text-gray-500 sm:pl-0">2</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">PT Example 2</td>
              <td class="px-3 py-4 text-center text-sm whitespace-nowrap text-gray-500">DD/MM/YYYY</td>
              <td class="px-3 py-4 text-center text-sm whitespace-nowrap text-gray-500">Team Member</td>
              <td class="px-3 py-4 text-center text-sm whitespace-nowrap text-gray-500">Revenue</td>
              <td class="text-center">
                <a href="{{ route('livewire.risk-responses.accounting-estimate1') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                </a>
            </td>
            </tr>
            <tr>
              <td class="py-4 pr-4 pl-4 text-sm font-medium whitespace-nowrap text-gray-500 sm:pl-0">3</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">PT Example 3</td>
              <td class="px-3 py-4 text-center text-sm whitespace-nowrap text-gray-500">DD/MM/YYYY</td>
              <td class="px-3 py-4 text-center text-sm whitespace-nowrap text-gray-500">Team Member</td>
              <td class="px-3 py-4 text-center text-sm whitespace-nowrap text-gray-500">Fixed Assets</td>
              <td class="text-center">
                <a href="{{ route('livewire.risk-responses.accounting-estimate1') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                </a>
            </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  {{-- Body End --}}


</div>
</div>

