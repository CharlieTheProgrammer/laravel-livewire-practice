<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $success_message;
    public $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submitForm()
    {
        $contact = $this->validate();

        $contact = [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message
        ];

        Mail::to('charlie@textSupport.com')->send(new ContactFormMailable($contact));
        sleep(5);

        $this->success_message = 'We received your message successfully and will get back to you shortly!';

        $this->resetForm();
    }

    // This is a Livewire hook that gets called when a property is updated
    public function updated($property_name)
    {
        $this->validateOnly($property_name);
    }

    protected function resetForm()
    {
        $this->name = "";
        $this->email = "";
        $this->phone = "";
        $this->message = "";
    }
}
