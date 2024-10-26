<x-guest-layout>
  <div class="m-0 my-12 grid flex-grow md:mx-12 md:grid-cols-2 lg:mx-20">
    <section class="flex flex-col items-center justify-center bg-white px-12 py-6 md:rounded-s-lg">
      <h1 class="text-center text-xl font-bold uppercase leading-tight text-san-marino-500">
        Admin Login
      </h1>

      <form action="{{ route('login') }}"
            method="post"
            class="mt-4 w-full max-w-md">
        @csrf

        <div>
          <x-input-label for="email">Email address</x-input-label>
          <x-text-input type="email"
                        id="email"
                        class="mt-1 block w-full"
                        name="email"
                        required
                        autofocus
                        autocomplete="username" />
        </div>

        <div class="mt-4">
          <x-input-label for="password">Password</x-input-label>
          <x-text-input type="password"
                        id="password"
                        class="mt-1 block w-full"
                        name="password"
                        required />
        </div>

        <x-primary-button class="mt-4 w-full justify-center">
          Login
        </x-primary-button>
      </form>
    </section>

    <div class="hidden rounded-e-lg bg-[url('../images/login-hero.png')] bg-cover bg-no-repeat md:block"></div>
  </div>
</x-guest-layout>
