<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Create a Note') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-2xl mx-auto text-gray-900 sm:px-6 lg:px-8 dark:text-gray-100">
            <livewire:notes.create-note />
        </div>
    </div>
</x-app-layout>
