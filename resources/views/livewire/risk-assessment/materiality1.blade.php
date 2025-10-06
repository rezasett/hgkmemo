
 <div class="p-6 bg-white shadow-md rounded-lg w-full">
  <!-- Header -->
  <div>
    <h2 class="text-lg font-semibold text-gray-900">Nama Klien</h2>
  </div>

  <!-- Informasi Klien -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="space-y-3">
      <div class="flex justify-between">
        <label class="text-sm text-gray-700">Total Asset</label>
        <input type="number" wire:model="total_asset" class="w-40 px-1 py-1 border rounded-md text-sm" placeholder="autogenerate">
        <a href="#" class="text-blue-500 text-sm">edit</a>
      </div>
      <div class="flex justify-between">
        <label class="text-sm text-gray-700">Total Liability</label>
        <input type="number" wire:model="total_liability" class="w-40 px-1 py-1 border rounded-md text-sm" placeholder="autogenerate">
        <a href="#" class="text-blue-500 text-sm">edit</a>
      </div>
      <div class="flex justify-between">
        <label class="text-sm text-gray-700">Total Equity</label>
        <input type="number" wire:model="total_equity" class="w-40 px-1 py-1 border rounded-md text-sm" placeholder="autogenerate">
        <a href="#" class="text-blue-500 text-sm">edit</a>
    
      </div>
      <div class="flex justify-between">
        <label class="text-sm text-gray-700">Total Revenue</label>
        <input type="number" wire:model="total_revenue" class="w-40 px-1 py-1 border rounded-md text-sm" placeholder="autogenerate">
        <a href="#" class="text-blue-500 text-sm">edit</a>
      </div>
      <div class="flex justify-between">
        <label class="text-sm text-gray-700">Total Expenses</label>
        <input type="number" wire:model="total_expenses" class="w-40 px-1 py-1 border rounded-md text-sm" placeholder="autogenerate">
        <a href="#" class="text-blue-500 text-sm">edit</a>
      </div>
      <div class="flex justify-between">
        <label class="text-sm text-gray-700">Total EBT</label>
        <input type="number" wire:model="total_ebt" class="w-40 px-1 py-1 border rounded-md text-sm" placeholder="formula">
        <a href="#" class="text-blue-500 text-sm">edit</a>
      </div>
    </div>
     <div class="flex flex-col items-start justify-between space-y-3">
      <label class="text-sm text-gray-700">Benchmark Selected</label>

    <!-- Benchmark -->
      <select wire:model="benchmark" class="px-2 py-1 border rounded-md text-sm">
      </select>
      <div class="mt-4">
        <span class="text-sm font-medium text-gray-700">Benchmark Value</span>
        <div class="mt-1 px-3 py-1 border rounded-md bg-gray-50 text-sm text-gray-700">
          {{ $benchmark_value ?? '-' }}
        </div>
      </div>
      <div class="mt-6">
        <span class="block text-xs text-gray-500">Indikasi Risiko Klien</span>
        <div class="flex items-center gap-2 mt-1">
          <span class="px-3 py-1 rounded bg-red-500 text-white text-sm font-semibold">High</span>
          <span class="px-3 py-1 rounded bg-blue-500 text-white text-sm font-semibold">Low</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Section Margin -->
  <div class="space-y-6">

    <!-- Margin OM -->
    <div class="border rounded-lg p-4">
      <h3 class="font-semibold text-gray-700">Margin OM</h3>
      <div class="flex items-center space-x-3 mt-2">
        <input type="text" wire:model="margin_om" class="w-20 px-2 py-1 border rounded-md text-sm"> %
        <div class="flex-1 h-2 bg-gray-200 rounded">
          <div class="h-2 bg-green-500 rounded" style="width: {{ $margin_om ?? 0 }}%"></div>
        </div>
      </div>
      <div class="mt-3 text-xs text-gray-600">
        <p>Revenue: 0% - 10%</p>
        <p>Earning Before Taxes: 0% - 10%</p>
        <p>Total Assets: 0% - 2%</p>
        <p>Total Equity: 0% - 2%</p>
      </div>
      <textarea wire:model="decision_om" class="mt-3 w-full border rounded-md px-2 py-1 text-sm" placeholder="Decision Notes..."></textarea>
    </div>

    <!-- Margin PM -->
    <div class="border rounded-lg p-4">
      <h3 class="font-semibold text-gray-700">Margin PM</h3>
      <div class="flex items-center space-x-3 mt-2">
        <input type="text" wire:model="margin_pm" class="w-10 px-2 py-1 border rounded-md text-sm"> %
        <div class="flex-1 h-2 bg-gray-200 rounded">
          <div class="h-2 bg-green-500 rounded" style="width: {{ $margin_pm ?? 0 }}%"></div>
        </div>
      </div>
      <div class="mt-3 text-xs text-gray-600">
        <p>High: 100%</p>
        <p>Low: 80%</p>
      </div>
      <textarea wire:model="decision_pm" class="mt-3 w-full border rounded-md px-2 py-1 text-sm" placeholder="Decision Notes..."></textarea>
    </div>

    <!-- Margin SUD -->
    <div class="border rounded-lg p-4">
      <h3 class="font-semibold text-gray-700">Margin SUD</h3>
      <div class="flex items-center space-x-3 mt-2">
        <input type="text" wire:model="margin_sud" class="w-20 px-2 py-1 border rounded-md text-sm"> %
        <div class="flex-1 h-2 bg-gray-200 rounded">
          <div class="h-2 bg-green-500 rounded" style="width: {{ $margin_sud ?? 0 }}%"></div>
        </div>
      </div>
      <div class="mt-3 text-xs text-gray-600">
        <p>Reference: 0%</p>
      </div>
      <textarea wire:model="decision_sud" class="mt-3 w-full border rounded-md px-2 py-1 text-sm" placeholder="Decision Notes..."></textarea>
    </div>

  </div>
</div>
