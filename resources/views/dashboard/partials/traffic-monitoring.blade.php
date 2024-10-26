<section>
  <h2 class="text-lg font-medium leading-tight text-gray-900">Traffic Monitoring</h2>

  <div id="map"
       class="mt-4 h-48 rounded-md">
  </div>
</section>

<script>
  let map = L.map('map').setView([8.9483324, 125.5369442], 13);

  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);
</script>
