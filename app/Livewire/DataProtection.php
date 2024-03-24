<?php

namespace App\Livewire;

use App\Models\QuibblerPost;
use Livewire\Component;

class DataProtection extends Component {
    public $post;
    public $title;

    public function mount() {
        $this->post = QuibblerPost::where('url', 'data-protection')->first();

        $this->title = $this->post->title;
    }

    public function render() {
        return view('livewire.data-protection');
    }
}
