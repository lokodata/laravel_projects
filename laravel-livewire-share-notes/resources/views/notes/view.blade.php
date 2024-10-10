<x-guest-layout>
    <div class="flex justify-between">
        <h1 class="text-2xl font-semibold leading-tight text-gray-800">
            {{ $note->title }}
        </h1>
    </div>

    <p class="mt-4 text-xs">{{$note->body}}</p>

    <div class="flex items-center justify-between mt-12 space-x-2">
        <h3 class="text-sm">Sent from: {{ $user->name }}</h3>
        <livewire:heartreact :note="$note"/>
    </div>
</x-guest-layout>
