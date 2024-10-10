<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\Note;

new #[Layout('layouts.app')] class extends Component {
    public Note $note;

    public $noteTitle;
    public $noteBody;
    public $noteRecipient;
    public $noteSendDate;
    public $noteIsPublished;

    public function mount(Note $note)
    {
        $this->authorize('update', $note);
        $this->fill($note);
        $this->noteTitle = $note->title;
        $this->noteBody = $note->body;
        $this->noteRecipient = $note->recipient;
        $this->noteSendDate = $note->send_date;
        $this->noteIsPublished = $note->is_published;
    }

    public function saveNote()
    {
        $this->validate([
            'noteTitle' => 'required|string|min:5',
            'noteBody' => 'required|string|min:10',
            'noteRecipient' => 'required|email',
            'noteSendDate' => 'required|date',
        ]);


        $this->authorize('update', $this->note);
        $this->note->update([
            'title' => $this->noteTitle,
            'body' => $this->noteBody,
            'recipient' => $this->noteRecipient,
            'send_date' => $this->noteSendDate,
            'is_published' => $this->noteIsPublished,
        ]);

        $this->dispatch('note-saved');

    }

}; ?>


<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
        {{ __('Edit Note') }}
    </h2>
</x-slot>


<div class="py-12">
    <div class="max-w-2xl mx-auto text-gray-900 sm:px-6 lg:px-8 dark:text-gray-100">

        <x-action-message on="note-saved" redirectUrl="{{ route('notes.index') }}" class="px-4 py-2 mb-4 text-sm font-bold text-white bg-green-500">Note updated successfully</x-action-message>

        <form wire:submit="saveNote" class="space-y-4">
            <x-input wire:model='noteTitle' label='Note Title' placeholder="Important! Great Day Ahead"></x-input>
            <x-textarea wire:model='noteBody' label='Your Note' placeholder="News has come that a great day is coming!"></x-textarea>
            <x-input icon="user" wire:model='noteRecipient' type="email" label="Recipient" placeholder="yourfriend@email.com"></x-input>
            <x-input icon="calendar" wire:model='noteSendDate' type="date" label="Send Date"></x-input>
            <x-checkbox label="Note Published" wire:model='noteIsPublished'></x-checkbox>

            <div class="flex justify-between pt-4 item-center">
                <x-button type='submit' primary spinner="saveNote">Save Note</x-button>

                <x-button icon="arrow-left" flat secondary href="{{ route('notes.index') }}">Cancel</x-button>
            </div>
        </form>
    </div>
</div>

