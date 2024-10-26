<x-app-layout>
  <div class="py-6">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div
           class="relative flex min-h-[calc(100vh-112px)] flex-col items-center justify-center bg-white px-6 py-4 shadow-md sm:rounded-lg">

        <div class="z-10 mt-6 grid max-w-md gap-4 md:grid-cols-2 md:gap-6">
          <h2 class="col-span-2 text-center text-3xl font-bold uppercase leading-tight text-gray-800">
            Ticket Form
          </h2>

          <a href="{{ route('tickets.create') }}"
             class="col-span-2 inline-flex items-center justify-center rounded-md border border-transparent bg-white px-4 py-3 text-center text-sm font-semibold uppercase tracking-widest text-gray-700 drop-shadow transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 md:col-span-1">
            Input Ticket Form Details
          </a>

          <a href="#"
             class="col-span-2 inline-flex items-center justify-center rounded-md border border-transparent bg-white px-4 py-3 text-center text-sm font-semibold uppercase tracking-widest text-gray-700 drop-shadow transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-span-1">
            Search Ticket Number
          </a>
        </div>

        <div
             class="absolute inset-0 z-0 m-auto h-96 w-auto bg-[url('../images/cttmd-logo.webp')] bg-contain bg-center bg-no-repeat opacity-40">
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
