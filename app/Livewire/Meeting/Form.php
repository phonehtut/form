<?php

namespace App\Livewire\Meeting;

use App\Models\MeetingForm;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

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
