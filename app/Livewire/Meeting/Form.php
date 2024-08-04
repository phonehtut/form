<?php

namespace App\Livewire\Meeting;

use Log;
use Livewire\Component;
use App\Models\MeetingForm;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use App\Mail\MeetingFormSubmitted;
use Illuminate\Support\Facades\Mail;

class Form extends Component
{

    #[Title('Meeting Form')]

    #[Validate]
    public $name;

    #[Validate]
    public $telegram;

    #[Validate]
    public $email;

    #[Validate]
    public $phone;

    #[Validate]
    public $role;

    #[Validate]
    public function rules()
    {
        return [
            'name' => ['required','string'],
            'email' => ['required','email'],
            'phone' => ['required'],
            'telegram' => ['required', 'url'],
            'role'=> ['required'],
        ];
    }

    public function store()
    {
        $validated = $this->validate();
        MeetingForm::create($validated);

        try {
            Mail::to($validated['email'])->send(new MeetingFormSubmitted($validated));
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
        }


        $this->reset();

        return redirect()->route('home')->with('success','Survey Submit Successful');
    }


    public function render()
    {
        return view('livewire.meeting.form');
    }

    // 'name',
    // 'telegram',
    // 'email',
    // 'phone',
    // 'role'
}
