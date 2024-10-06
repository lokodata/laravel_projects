<?php

use Livewire\Volt\Component;
use App\Models\Note;

new class extends Component {

    public function delete($noteId)
    {
        $note = Note::where('id', $noteId)->first();
        // $note = Auth::user()->notes()->where('id', $noteId)->first();
        $this->Auth::routes('delete', $note);
        $note->delete();
    }

    // get notes
    public function with(): array
    {
        return [
            'notes' => Auth::user()
                ->notes()
                ->orderBy('send_date', 'asc')
                ->get(),
        ];
    }
}; ?>

<div>
    <div class="space-y-2">

        @if ($notes->isEmpty())
            <div class="text-center">
                <p class="text-xl font-bold"> No notes yet.</p>
                <p class="text-sm">Let's create your frist note to send.</p>
                <x-button primary icon-right="plus" class="mt-6" href="{{ route('notes.create') }}" wire:navigate>Create note</x-button>
            </div>

        @else
            <x-button primary icon-right="plus" class="mb-4" href="{{ route('notes.create') }}" wire:navigate>Create note</x-button>

            <div class="grid grid-cols-2 gap-4 mt-12">
                @foreach ($notes as $note)
                <x-card wire:key='{{ $note->id }}'>

                    <div class="flex items-center justify-between">
                        <div>
                            <a href="#" class="text-xl font-bold hover:underline hover:text-lime-500">{{$note->title}}</a>

                            <p class="mt-1 text-xs">
                                {{ Str::limit($note->body, 70) }}
                            </p>
                        </div>
                        <div class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($note->send_date)->format('M-d-Y') }} </div>
                    </div>

                    <div class="flex items-end justify-between mt-4 space-x-l">
                        <p class="text-xs">Receipient: <span class="font-semibold">{{$note->recipient }}</span></p>
                        <div>
                            <x-button rounded icon="eye" flat secondary></x-button>
                            <x-button rounded icon="trash" flat secondary interaction="negative" wire:click="delete('{{$note->id}}')"></x-button>
                        </div>
                    </div>

                </x-card>
                @endforeach
            </div>
        @endif
    </div>
</div>
