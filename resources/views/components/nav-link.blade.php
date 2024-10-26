@props(['text', 'active'])

@php
  $classes =
      $active ?? false
          ? 'inline-flex items-center gap-x-3.5 rounded-md bg-san-marino-500 px-4 py-2 text-sm text-white'
          : 'inline-flex items-center gap-x-3.5 rounded-md px-4 py-2 text-sm transition duration-150 ease-in-out hover:bg-san-marino-500 hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
  {{ $icon }}
  {{ $slot }}
</a>
