@props(['title', 'value'])

<div class="flex flex-col justify-between rounded-md bg-gray-200 px-4 pb-2 pt-3 shadow-sm">
  {{ $icon }}

  <dl class="mt-6 flex items-center justify-between">
    <dt class="text-sm font-medium">{{ $title }}</dt>
    <dd class="text-lg">{{ $value }}</dd>
  </dl>
</div>
