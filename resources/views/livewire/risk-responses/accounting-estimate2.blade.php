{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
  <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-900">Accounting Estimate</h1>
        <p class="mt-2 text-xl text-gray-700">Detail Account</p>
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

    <div class="mt-8 px-4 sm:px-6 lg:px-8 mb-4 mr-250">
        <table class="w-full border border-gray-300 divide-y divide-gray-300">
            <tbody class="divide-y divide-gray-200">
            <tr>
                <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Client Name</td>
                <td class="min-w-50 px-4 py-2  text-sm text-gray-700 border-r border-gray-300 bg-gray-50"></td>
            </tr>
            <tr>
                <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">TB Period</td>
                <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 bg-gray-50"></td>
            </tr>
            <tr>
                <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Sub Account</td>
                <td class="min-w-50 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 bg-gray-50"></td>
            </tr>
            </tbody>
        </table>
    </div>



    <div class="max-w-400 max-h- px-4 py-5 sm:p-6 overflow-x-auto">
     <table class="min-w-full border border-gray-300">
      <thead class="bg-gray-50 border border-gray-300">
        <tr>
          <th class="text-left min-w-70 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">Use of Expert</th>
          <th class="text-left min-w-70 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">Methods Use </th>
          <th class="text-left min-w-70 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">Basic Assumption</th>
          <th class="text-left min-w-70 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">Relevant Control</th>
          <th class="text-left min-w-70 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">Fair Value Measurement Level</th>
          <th class="text-left min-w-100 px-4 py-2 text-sm font-semibold text-gray-900 border-r border-gray-300">Notes</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
         <tr class="h-24 odd:bg-white even:bg-gray-50">
          <td class="p-0 text-sm text-gray-700 border-r border-gray-300">
                <textarea
                placeholder="(if any) describe the expert's background..."
                class="w-full min-h-38 px-4 py-20 border-0 focus:outline-none focus:ring-0
                        break-words whitespace-pre-wrap resize-y"
                ></textarea>
          </td>
          <td class="p-0 text-sm text-gray-700 border-r border-gray-300">
                <textarea
                placeholder="describe the metod used.."
                class="w-full min-h-38 px-4 py-20 border-0 focus:outline-none focus:ring-0
                        break-words whitespace-pre-wrap resize-y"
                ></textarea>
          </td>
          <td class="p-0 text-sm text-blue-700 border-r border-gray-300">
                <textarea
                placeholder="describe the basic assumptions used.."
                class="w-full min-h-38 px-4 py-20 border-0 focus:outline-none focus:ring-0
                        break-words whitespace-pre-wrap resize-y"
                ></textarea>
          </td>
          <td class="p-0 text-sm text-gray-700 border-r border-gray-300">
                <textarea
                placeholder="any relevant control over accounting estimate..."
                class="w-full min-h-38 px-4 py-20 border-0 focus:outline-none focus:ring-0
                        break-words whitespace-pre-wrap resize-y"
                ></textarea>
          </td>
          <td class="p-0 text-sm text-gray-700 border-r border-gray-300">
               <select class="w-full text-sm text-gray-700 text-center">
                    <option>--select--</option>
                    <option>Level 1</option>
                    <option>Level 2</option>
                    <option>Level 3</option>
               </select>
          </td>
          <td class="p-0 text-sm text-gray-700 border-r border-gray-300">
                <textarea
                placeholder="input text"
                class="w-full min-h-38 px-4 py-20 border-0 focus:outline-none focus:ring-0
                        break-words whitespace-pre-wrap resize-y"
                ></textarea>
          </td>
        </tr>

      </tbody>
    </table>

    </div>
    {{-- main content here --}}

</div>



    </div>


</div>
