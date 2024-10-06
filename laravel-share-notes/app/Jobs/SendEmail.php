<?php

namespace App\Jobs;

use App\Models\Note;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Note $note)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $noteUrl = config('app.url') . '/notes/' .  $this->note->id;

        $emailContent = "Hello, you've received a new note. You can view it at {$noteUrl}";

        // Check Mailable for Mail

        Mail::raw($emailContent, function ($message) {
            $message->from('sendnotes@gmail.com', 'SendNotes')->to($this->note->recipient)->subject('You have a new note from' . $this->note->user->name);
        });
    }
}
