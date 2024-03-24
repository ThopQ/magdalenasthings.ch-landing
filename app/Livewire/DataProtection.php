<?php

namespace App\Livewire;

use App\Models\QuibblerPost;
use Livewire\Component;

class DataProtection extends Component {
    public $post;

    public function mount() {
        $this->post = QuibblerPost::where('url', 'data-protection')->first();
    }

    public function render() {
        return view('livewire.data-protection');
    }
}
