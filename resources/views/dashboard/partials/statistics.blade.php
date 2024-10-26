<section>
  <h2 class="text-lg font-medium leading-tight text-gray-900">Dashboard</h2>

  <div class="mt-4 grid gap-4 md:grid-cols-4">
    <x-statistic-card title="Total Violations"
                      value="0">
      <x-slot:icon>
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24"
             height="24"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round"
             class="shrink-0">
          <circle cx="12"
                  cy="12"
                  r="10" />
          <line x1="12"
                x2="12"
                y1="8"
                y2="12" />
          <line x1="12"
                x2="12.01"
                y1="16"
                y2="16" />
        </svg>
      </x-slot:icon>
    </x-statistic-card>

    <x-statistic-card title="Pending"
                      value="0">
      <x-slot:icon>
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24"
             height="24"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round"
             class="shrink-0">
          <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
          <circle cx="12"
                  cy="7"
                  r="4" />
        </svg>
      </x-slot:icon>
    </x-statistic-card>

    <x-statistic-card title="Validated"
                      value="0">
      <x-slot:icon>
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24"
             height="24"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round"
             class="shrink-0">
          <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
          <circle cx="12"
                  cy="7"
                  r="4" />
        </svg>
      </x-slot:icon>
    </x-statistic-card>

    <x-statistic-card title="Complete"
                      value="0">
      <x-slot:icon>
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24"
             height="24"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round"
             class="shrink-0">
          <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
          <circle cx="12"
                  cy="7"
                  r="4" />
        </svg>
      </x-slot:icon>
    </x-statistic-card>
  </div>
</section>
