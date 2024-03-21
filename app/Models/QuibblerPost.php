<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class QuibblerPost extends Model {
    use \Sushi\Sushi;

    public function getRows() {
        $storage = Storage::build([
            'driver' => 'local',
            'root' => storage_path('app/quibblers'),
            'throw' => false,
        ]);

        return collect($storage->allFiles())
            ->map(function ($file) use ($storage) {
                $document = YamlFrontMatter::parse($storage->get($file));

                return [
                    'title' => $document->title ?? 'No Title',
                    'date' => $document->date ?? 'No Date',
                    'path' => $file,
                    'url' => substr($file, -3) === '.md' ? substr($file, 0, -3) : $file,
                    'description' => $document->description ?? 'No Description',
                    'body' => $document->body(),
                ];
            })
            ->toArray();
    }

    protected function sushiShouldCache() {
        return false;
    }

    public function getRouteKeyName(): string {
        return 'url';
    }
}
