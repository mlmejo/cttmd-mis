<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <meta name="csrf-token"
        content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect"
        href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @stack('head')
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-san-marino-600">
    <nav class="fixed top-0 w-full bg-white">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
          <div class="flex">
            <div class="flex shrink-0 items-center">
              <a href="{{ route('dashboard') }}">
                <img src="{{ Vite::asset('resources/images/cttmd-logo.webp') }}"
                     alt=""
                     class="block h-9 w-auto" />
              </a>
            </div>
          </div>

          <div class="ms-6 flex items-center">
            <button class="rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              <svg xmlns="http://www.w3.org/2000/svg"
                   width="24"
                   height="24"
                   viewBox="0 0 24 24"
                   fill="none"
                   stroke="currentColor"
                   stroke-width="2"
                   stroke-linecap="round"
                   stroke-linejoin="round"
                   class="size-4 shrink-0 text-gray-900">
                <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>

    <div class="flex">
      <aside class="fixed top-0 mt-16 hidden min-h-screen w-64 border-t border-gray-300 bg-white md:flex md:flex-col">
        <div class="flex items-center px-6 pt-6 leading-tight text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg"
               width="24"
               height="24"
               viewBox="0 0 24 24"
               fill="none"
               stroke="currentColor"
               stroke-width="2"
               stroke-linecap="round"
               stroke-linejoin="round"
               class="me-2.5 size-9 shrink-0">
            <circle cx="12"
                    cy="12"
                    r="10" />
            <circle cx="12"
                    cy="10"
                    r="3" />
            <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662" />
          </svg>
          <div class="flex flex-col">
            {{ Auth::user()->name }}
            <span class="text-xs text-gray-600">CTTMD Personnel</span>
          </div>
        </div>

        <div class="mt-6 grid gap-2 border-t border-gray-300 px-4 py-6">
          <x-nav-link href="{{ route('dashboard') }}"
                      :active="request()->routeIs('dashboard')">
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
                   class="size-4 shrink-0">
                <path d="m12 14 4-4" />
                <path d="M3.34 19a10 10 0 1 1 17.32 0" />
              </svg>
            </x-slot:icon>
            Dashboard
          </x-nav-link>

          <x-nav-link href="{{ route('tickets.index') }}"
                      :active="request()->routeIs('tickets.*')">
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
                   class="size-4 shrink-0">
                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                <circle cx="12"
                        cy="7"
                        r="4" />
              </svg>
            </x-slot:icon>
            Ticket Form
          </x-nav-link>

          <x-nav-link href="{{ route('apprehending-officers.index') }}"
                      :active="request()->routeIs('apprehending-officers.*')">
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
                   class="size-4 shrink-0">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                <circle cx="9"
                        cy="7"
                        r="4" />
                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              </svg>
            </x-slot:icon>
            Traffic Enforcer
          </x-nav-link>

          <x-nav-link href="#">
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
                   class="size-4 shrink-0">
                <path d="M3 3v16a2 2 0 0 0 2 2h16" />
                <path d="m19 9-5 5-4-4-3 3" />
              </svg>
            </x-slot:icon>
            Reports
          </x-nav-link>

          <x-nav-link href="#">
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
                   class="size-4 shrink-0">
                <path
                      d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                <circle cx="12"
                        cy="12"
                        r="3" />
              </svg>
            </x-slot:icon>
            Settings
          </x-nav-link>

          <form action="{{ route('logout') }}"
                method="post">
            @csrf
            <button type="submit"
                    class="inline-flex w-full items-center gap-x-3 rounded-md px-4 py-2 text-sm text-red-700 transition duration-150 ease-in-out hover:bg-red-500 hover:text-white">
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
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                <polyline points="16 17 21 12 16 7" />
                <line x1="21"
                      x2="9"
                      y1="12"
                      y2="12" />
              </svg>
              Logout
            </button>
          </form>
        </div>
      </aside>

      <main class="mt-16 w-full md:ms-64">
        {{ $slot }}
      </main>
    </div>
  </div>
</body>

</html>
