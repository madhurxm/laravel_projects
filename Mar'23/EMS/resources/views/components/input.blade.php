<div class="mb-3 form-group">
    <label for="" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="name" class="form-control" 
    {{-- value="{{ old('name') }}" --}}
    >
    <span class="text-danger">
        {{ $demo }}
        {{-- @error('name')
            {{ $message }}
        @enderror --}}
    </span>
</div>
