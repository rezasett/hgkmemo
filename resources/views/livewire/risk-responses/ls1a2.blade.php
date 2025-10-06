{{-- Content Page --}}
<div class="flex-1 bg-white p-4 pl-0.5">

  <!-- Margin -->
    <div class="px-4 sm:px-6 lg:px-8">

    {{-- Header --}}
        <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
        <h1 class="text-2xl font-bold text-gray-900">Working Paper</h1>
        <p class="mt-2 text-sm text-gray-700"> </p>
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

    <div class="px-4 sm:px-6 lg:px-8 mb-4 mr-205">
     <br>
        <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Client Name</td>
            <td class="min-w-50 px-4 py-2  text-sm text-grey-700 border-r border-gray-300 bg-gray-50"></td>
          </tr>
           <tr>
            <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">TB Period</td>
            <td class="min-w-50 px-4 py-2 text-sm text-grey-700 border-r border-gray-300 bg-gray-50"></td>
          </tr>
           <tr>
            <td class="min-w-30 px-4 py-2 text-sm text-gray-700 border-r border-gray-300 font-bold">Lead Schedule</td>
            <td class="min-w-50 px-4 py-2 text-sm text-grey-700 border-r border-gray-300 bg-gray-50"></td>
          </tr>
        </tbody>
        </table>
    </div>


    <div class="px-4 py-5 sm:p-6">
     <table class="w-full table-fixed border border-gray-300">
        <div class="flex items-center justify-between pb-4">

      {{-- tombol add --}}
    <a href="#"
    class="rounded-full bg-blue-700 p-2 text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
    <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
    </svg>
    </a>

            <thead class="bg-gray-50 border border-gray-300">
                <tr>
                <th scope="col"
                    class="w-12 px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                   File
                </th>

                <th scope="col"
                    class="w-2/12 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Action
                </th>
                <th scope="col"
                    class="w-2/12 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Preparer Notes
                </th>
                <th scope="col"
                    class="w-2/12 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r border-gray-300">
                    Reviewer Notes
                </th>
                </tr>
            </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
              <div>
              <table class="min-w-full border border-gray-500">
                <thead>
                  <tr>
                    <th class="border border-gray-500 "></th>
                    <th class="border border-gray-500"></th>
                  </tr>
                </thead>
                <tbody class="p-4">
                  <tr>
                    <td class="border border-gray-500 p-2">Upload Date</td>
                    <td class="border border-gray-500 p-2">23/09/2025</td>
                  </tr>
                  <tr>
                    <td class="border border-gray-500 p-2">COA Refer</td>
                    <td class="border border-gray-500 p-2">
                      <div class="relative inline-block w-full">
                        <select class="block w-full px-2 py-1 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                          <option value="">COA list</option>
                          <option value="">test 1</option>
                          <option value="">test 2</option>

                        </select>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border border-gray-500 p-2">Acc. Name</td>
                    <td class="border border-gray-500 p-2">{auto}</td>
                  </tr>
                  <tr>
                    <td class="border border-gray-500 p-2">Index WP</td>
                    <td class="border border-gray-500 p-2">{auto}</td>
                  </tr>
                  <tr>
                    <td class="border border-gray-500 p-2">Status</td>
                    <td class="border border-gray-500 p-2">
                      <div class="relative inline-block w-full">
                        <select class="block w-full px-2 py-1 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                          <option value="">Pilih Status</option>
                          <option value="approved">Approved</option>
                          <option value="revised">Revised</option>
                        </select>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              </div>
            </td>
            <td class="text-sm text-gray-700 border-r border-gray-300 text-center">
                <div class="space-y-2 flex flex-col justify-center items-center">
                    <div>
                        <input type="file" class="border border-gray-300 rounded-md p-2 w-48" />
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 text-white py-2 px-auto rounded-md mb-2 w-40">Upload</button>
                    </div>
                    <div>
                        <button class="bg-blue-500 text-white py-2 px-auto rounded-md mb-2 w-40">Drop</button>
                    </div>
                    <div>
                        <button class="bg-blue-500 text-white py-2 px-auto rounded-md mb-2 w-40">Log</button>
                    </div>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
            <div>


              <div class="mb-2">
                <ul>
                  <li> <a href="#"> Comment 1 | 22/09/2025 10:00 </a></li>
                  <li> <a href="#"> Comment 2 | 24/09/2025 10:00 </a></li>
                  <li> <a href="#"> Comment 3 | 26/09/2025 10:00 </a></li>
                  <li> <a href="#"> Comment 4 | 28/09/2025 10:00 </a></li>
                </ul>
              </div>
               <div class="mb-2 w-full">
                <a href="" class="bg-blue-500 text-white py-2 px-4 px-auto rounded-md mb-2 w-full ">+ Add Comment</a>
              </div>
            </div>

            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
             <div>


              <div class="mb-2">
                <ul>
                  <li> <a href="#"> Comment 1 | 22/09/2025 10:00 </a></li>
                  <li> <a href="#"> Comment 2 | 24/09/2025 10:00 </a></li>
                  <li> <a href="#"> Comment 3 | 26/09/2025 10:00 </a></li>
                  <li> <a href="#"> Comment 4 | 28/09/2025 10:00 </a></li>
                </ul>

              </div>
              <div class="mb-2 w-full">
                <a href="" class="bg-blue-500 text-white py-2 px-4 px-auto rounded-md mb-2 w-full ">+ Add Comment</a>
              </div>
            </div>
          </td>

          </tr>

        </tbody>
    </table>
    </div>

</div>
