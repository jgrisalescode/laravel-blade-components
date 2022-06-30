<x-layouts.app>
    <x-modal
        title="Deactivate Account?"
        submit-label="Deactivate"
        {{-- type="warning" --}}
    >
        <x-slot name="trigger">
            <button @click="on = true">Show Modal</button>
        </x-slot>
            Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.
    </x-modal>
    <x-modal
        title="Suscribe"
    >
        <x-slot name="trigger">
            <button @click="on = true">Click me</button>
        </x-slot>
            Lorem ipsum.
    </x-modal>
</x-layouts.app>