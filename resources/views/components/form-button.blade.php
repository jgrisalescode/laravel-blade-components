<x-form action="{{ $action }}" method="{{ $method }}">
    <button type="submit" {{ $attributes }}>
            {{ $slot }}
    </button>
</x-form>