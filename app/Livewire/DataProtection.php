<?php

namespace App\Livewire;

use App\Models\QuibblerPost;
use Livewire\Component;

class DataProtection extends Component {
    public string $title;
    public QuibblerPost $post;

    public function mount() {
        $this->title = $this->post->title;
        $this->post = QuibblerPost::where('url', 'data-protection')->first();
    }

    public function render() {
        return view('livewire.data-protection');
    }
}
