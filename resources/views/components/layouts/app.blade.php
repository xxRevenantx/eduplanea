<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
          <livewire:docente.header />
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
