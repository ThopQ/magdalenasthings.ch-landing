<?php

namespace App\Livewire;

use App\Models\NewsletterSubscription;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Welcome extends Component {
    #[Validate('required|email:rfc|unique:newsletter_subscriptions,email')]
    public string $email = '';

    public function save() {
        $this->validate();

        NewsletterSubscription::create($this->only('email'));

        $this->reset();

        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }

    public function render() {
        return view('livewire.welcome');
    }
}
