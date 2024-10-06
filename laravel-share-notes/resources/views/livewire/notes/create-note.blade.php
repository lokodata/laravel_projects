<?php

use Livewire\Volt\Component;

new class extends Component {
    public $noteTitle;
    public $noteBody;
    public $noteRecipient;
    public $noteSendDate;

    public function submit()
    {
        $validated = $this->validate([
            'noteTitle' => 'required|string|min:5',
            'noteBody' => 'required|string|min:10',
            'noteRecipient' => 'required|email',
            'noteSendDate' => 'required|date',
        ]);

        auth()->user()->notes()->create([
            'title' => $this->noteTitle,
            'body' => $this->noteBody,
            'recipient' => $this->noteRecipient,
            'send_date' => $this->noteSendDate,
            'is_published' => false,
        ]);

        redirect(route('notes.index'));
    }

}; ?>

<div>
    <div class="flex justify-end mb-2">
        <x-button icon="arrow-left" secondary href="{{ route('notes.index') }}">All Notes</x-button>
    </div>

    <form wire:submimt="submit" class="space-y-4">
        <x-input wire:model='noteTitle' label='Note Title' placeholder="Important! Great Day Ahead"></x-input>
        <x-textarea wire:model='noteBody' label='Your Note' placeholder="News has come that a great day is coming!"></x-textarea>
        <x-input icon="user" wire:model='noteRecipient' type="email" label="Recipient" placeholder="yourfriend@email.com"></x-input>
        <x-input icon="calendar" wire:model='noteSendDate' type="date" label="Send Date"></x-input>

        <div class="pt-4 ">
            <x-button wire:click='submit' primary right-icon="calendar" spinner>Schedule Note</x-button>
        </div>
    </form>
</div>
