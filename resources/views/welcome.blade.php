<x-guest-layout>
  <div
       class="my-12 flex flex-grow flex-col items-center rounded-lg bg-[url('../images/hero-image.webp')] py-6 md:mx-12 lg:mx-20">
    <header class="flex max-w-md flex-col items-center justify-center">
      <h2 class="text-center text-2xl font-semibold text-white">
        Butuan City Transportation and Traffic Management Department - CTTMD
      </h2>
      <p class="text-center text-gray-300">
        &quot;Hapsay na Dalan, Luwas nga Dakbayan&quot;
      </p>
      <img src="{{ Vite::asset('resources/images/cttmd-logo.webp') }}"
           alt=""
           class="mt-4 h-48 w-auto" />
      <a href="{{ route('login') }}"
         class="mt-4 inline-flex w-full max-w-xs items-center justify-center rounded-lg bg-white px-4 py-2 text-center text-sm font-bold uppercase tracking-widest text-gray-800 shadow-md">
        Login
      </a>
    </header>
  </div>
</x-guest-layout>
