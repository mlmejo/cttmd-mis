<x-app-layout>
  @push('head')
    <!-- Leaflet -->
    <link rel="stylesheet"
          href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
  @endpush

  <div class="py-6">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="bg-white px-6 py-4 shadow-md sm:rounded-lg">
        @include('dashboard.partials.statistics')
      </div>

      <div class="mt-6 grid grid-rows-2 gap-6 lg:grid-cols-2">
        <div class="row-span-2 bg-white px-6 py-4 shadow-md sm:rounded-lg">
          @include('dashboard.partials.traffic-monitoring')
        </div>

        <div class="bg-white px-6 py-4 shadow-md sm:rounded-lg">
          @include('dashboard.partials.enforcers-performance')
        </div>

        <div class="bg-white px-6 py-4 shadow-md sm:rounded-lg">
          @include('dashboard.partials.prone-violation')
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
