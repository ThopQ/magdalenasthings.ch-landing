<div class="mx-auto max-w-prose rounded-2xl bg-white px-8 py-12 shadow-lg">
    <div class="mb-8 flex justify-between">
        <a href="{{ route('welcome') }}" wire:navigate.hover class="text-secondary hover:underline">
            Zurück
        </a>

        <a href="{{ route('data-protection') }}" wire:navigate.hover class="text-secondary hover:underline">
            Datenschutzerklärung
        </a>
    </div>


    <div class="prose">
        @markdown($post['body'])
    </div>
</div>
