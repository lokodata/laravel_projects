@props(['on', 'redirectUrl' => ''])

<div x-data="{ shown: false, timeout: null }"
     x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false; timeout = setTimeout(() => {
    shown = false; if ('{{ $redirectUrl }}') { window.location.href = '{{ $redirectUrl }}';  } }, 1000) }, 1000); })"
     x-show.transition.out.opacity.duration.1500ms="shown"
     x-transition:leave.opacity.duration.1500ms
     style="display: none;"
    {{ $attributes->merge(['class' => 'text-sm text-gray-600 dark:text-gray-400']) }}>
    {{ $slot->isEmpty() ? 'Saved.' : $slot }}
</div>


{{-- @props(['on', 'redirectUrl' => ''])

<div x-data="{ shown: false, timeout: null }" x-init="@this.on('{{ $on }}', () => {
                clearTimeout(timeout);
                shown = true;
                timeout = setTimeout(() => {
                    shown = false;
                    if ('{{ $redirectUrl }}') {
                        window.location.href = '{{ $redirectUrl }}'; // Redirect if URL is not empty
                    }
                }, 2000);
            })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms style="display: none;" {{
    $attributes->merge(['class' => 'text-sm text-gray-600 dark:text-gray-400']) }}>
    {{ $slot->isEmpty() ? 'Saved.' : $slot }}
</div> --}}
