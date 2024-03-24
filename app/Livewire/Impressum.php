<?php

namespace App\Livewire;

use App\Models\QuibblerPost;
use Livewire\Component;

class Impressum extends Component {
    public $post;

    public function mount() {
        $this->post = QuibblerPost::where('url', 'impressum')->first();
    }

    public function render() {
        return view('livewire.impressum');
    }
}
