<?php

namespace App\Livewire;

use App\Models\QuibblerPost;
use Livewire\Component;

class Impressum extends Component {
    public $title;
    public $post;

    public function mount() {
        $this->post = QuibblerPost::where('url', 'impressum')->first();

        $this->title = $this->post->title;
    }

    public function render() {
        return view('livewire.impressum');
    }
}
