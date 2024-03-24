<div class="mx-auto max-w-prose rounded-2xl bg-white px-4 py-12 shadow-lg sm:px-8">
    <div class="mb-8 flex items-center justify-between">
        <a href="{{ route('welcome') }}" wire:navigate.hover class="text-secondary hover:underline">
            Zurück
        </a>

        <a href="{{ route('impressum') }}" wire:navigate.hover class="text-secondary hover:underline">
            Impressum
        </a>
    </div>


    <div class="prose prose-sm">
        @markdown($post['body'])
    </div>
</div>
