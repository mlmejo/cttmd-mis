<x-app-layout>
  <div class="py-6">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="grid gap-4 md:grid-cols-3">
        <section class="flex flex-col justify-between bg-white p-4 shadow-md sm:rounded-lg">
          <h2 class="text-lg font-medium leading-tight text-gray-800">
            Total of Apprehending Officers Recorded
          </h2>

          <div class="flex items-center justify-end">
            1
          </div>
        </section>

        <div class="bg-white p-4 shadow-md sm:rounded-lg">
          <h2 class="text-lg font-medium leading-tight text-gray-800">
            Apprehending Officers' Performance
          </h2>
        </div>

        <div class="bg-white p-4 shadow-md sm:rounded-lg">
          <h2 class="text-lg font-medium leading-tight text-gray-800">
            Empty
          </h2>
        </div>
      </div>

      <div class="mt-4">
        <div class="bg-white p-4 shadow-md sm:rounded-lg">
          <div class="flex items-center justify-between">
            <h2 class="text-lg font-medium leading-tight text-gray-800">Apprehending Officers' Record</h2>
            <a href="#"
               class="inline-flex items-center gap-x-2 rounded-md border border-transparent bg-san-marino-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-san-marino-700 focus:bg-san-marino-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-san-marino-900">
              <svg xmlns="http://www.w3.org/2000/svg"
                   width="24"
                   height="24"
                   viewBox="0 0 24 24"
                   fill="none"
                   stroke="currentColor"
                   stroke-width="2"
                   stroke-linecap="round"
                   stroke-linejoin="round"
                   class="size-4 shrink-0">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                <circle cx="9"
                        cy="7"
                        r="4" />
                <line x1="19"
                      x2="19"
                      y1="8"
                      y2="14" />
                <line x1="22"
                      x2="16"
                      y1="11"
                      y2="11" />
              </svg>
              New Apprehending Officer
            </a>
          </div>

          <div class="mt-4 rounded-md border border-gray-300">
            <table class="min-w-full divide-y divide-gray-300">
              <thead>
                <tr class="divide-x divide-gray-300">
                  <th class="px-4 py-2 text-sm">ID No.</th>
                  <th class="px-4 py-2 text-sm">Full Name</th>
                  <th class="px-4 py-2 text-sm">Address</th>
                  <th class="px-4 py-2 text-sm">Contact Number</th>
                  <th class="px-4 py-2 text-sm">Agency</th>
                  <th class="px-4 py-2 text-sm">Number Apprehending</th>
                  <th class="px-4 py-2 text-sm">Performance</th>
                  <th class="px-4 py-2 text-sm">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($apprehendingOfficers as $apprehendingOfficer)
                @empty
                  <tr>
                    <td colspan="8"
                        class="px-4 py-2 text-center text-sm">
                      No data available.
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
