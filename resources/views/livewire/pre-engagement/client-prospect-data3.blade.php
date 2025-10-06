{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold text-gray-900">Client Prospect Data</h1>
        <p class="mt-2 text-sm text-gray-700">Personel Allocation</p>
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
    <!-- Card w/ margin top -->
    <div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
    <div class="px-4 py-5 sm:p-6">
     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <div class="flex items-center justify-between pb-4">
    <div class="text-base font-semibold text-blue-700">
    Personnel Selection
    </div>
    <button
    class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-600 text-white hover:bg-blue-700 focus:outline-none"
    title="Add Shareholder"
  >
    <!-- Ikon Plus -->
        <svg xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
        </button>
        </div>
     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Assignment Role</td>
            <td class="px-4 py-2 text-sm text-gray-700">
                <div class="flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-left">
                    <option>Signing Partner</option>
                    <option>Partner Incharge</option>
                    <option>EQCR</option>
                    <option>Manager</option>
                    <option>Assistant Manager</option>
                    <option>Team Leader</option>
                    <option>Team Member</option>
                </select>
                </div>
            </td>
          </tr>
          <tr>
            <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Personnel Name</td>
            <td class="px-4 py-2 text-sm text-gray-700">
                <div class="flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-left">
                    <option>Aryo Wibisono</option>
                    <option>Bambang Karunawan</option>
                    <option>Dody Masykur</option>
                    <option>Hertanto</option>
                    <option>Restiawan Adimuryanto</option>
                    <option>Retno Satyarini</option>
                    <option>Sagita Fajarahayu</option>
                    <option>Arif Wijaksono</option>
                    <option>Febriansyah</option>
                    <option>Indra Soetedjo</option>
                    <option>Khalifatullah Algiphari</option>
                    <option>Sandy Herdiansyah</option>
                    <option>Wulan Daryoco Betris</option>
                </select>
                </div>
            </td>
          </tr>
          <tr>
            <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Start Period</td>
            <td class="px-5 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="DD/MM/YYYY">
            </td>
          </tr>
          <tr>
            <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">End Period</td>
            <td class="px-5 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="DD/MM/YYYY">
            </td>
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
    <!-- Card w/ margin top -->
    <div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
    <div class="px-4 py-5 sm:p-6">
     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <div class="flex items-center justify-between pb-4">
    <div class="text-base font-semibold text-blue-700">
    EQCR Assessment
    </div>
    <a class="text-blue-600" href="{{route ('livewire.pre-engagement.client-prospect-data4') }}"> see detail </a>
     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Score Result</td>
            <td class="min-w-50 px-4 py-2  text-sm text-blue-600 border-r border-gray-300 bg-gray-300"></td>
          </tr>
           <tr>
            <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Recomendation</td>
            <td class="min-w-50 px-4 py-2 text-sm text-blue-600 border-r border-gray-300 bg-gray-300"></td>
          </tr>
        </tbody>
    </table>
    </div>
    </div>
    </div>

   {{-- Body --}}
    <!-- Margin Body -->
    <div class="mt-4 sm:mt-0 sm:ml-8">
    {{-- Content --}}
    <!-- Card w/ margin top -->
    <div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
    <div class="px-4 py-5 sm:p-6">
     <table class="w-full table-fixed border border-gray-300">
        <div class="flex items-center justify-between pb-4">
         <div class="text-base font-semibold text-blue-700">
            Team Assignment
            </div>
            <thead class="bg-gray-50 border border-gray-300">
                <tr>
                <th scope="col"
                    class="w-12 px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                    No
                </th>
                <th scope="col"
                    class="w-2/12 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Personnel Name
                </th>
                <th scope="col"
                    class="w-2/12 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Level of Education
                </th>
                <th scope="col"
                    class="w-2/12 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Certification
                </th>
                <th scope="col"
                    class="w-2/12 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Position
                </th>
                <th scope="col"
                    class="w-2/12 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Role
                </th>
                <th scope="col"
                    class="w-2/12 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Working Hours
                </th>
                <th scope="col"
                    class="w-2/12 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Man Hour
                </th>
                <th scope="col"
                    class="w-2/12 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Action
                </th>
                </tr>
            </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">1</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">2</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">3</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">4</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">5</td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300"></td>
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
    <!-- Card w/ margin top -->
    <div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
    <div class="mr-200 px-4 py- sm:p-6">
     <table class="w-full table-fixed border border-gray-300">
        <div class="flex items-center justify-between pb-4">
            <thead class="bg-gray-50 border border-gray-300">
                <tr>
                <th scope="col"
                    class="w-30 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Total Man Per Hour
                </th>
                <th scope="col"
                    class="w-60 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Rp.xxx.xxx.xxx
                </th>
            </thead>
        </div>
     </table>
    </div>
    </div>


    <div class="mt-4 flex justify-end px-6 py-2">
    <a href="{{ route('livewire.pre-engagement.client-prospect-data5') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
      Form Work Hour Allocation
    </a>
  </div>

</div>
</div>
</div>
