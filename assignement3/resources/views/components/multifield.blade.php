<form action="{{ $action }}" method="{{ $method }}">
    @csrf
    @foreach($fields as $field)
        @switch($field['type'])
            @case('text')
                <div class="form-group">
                    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
                    <input type="text" class="form-control @error($field['name']) is-invalid @enderror" name="{{ $field['name'] }}" id="{{ $field['name'] }}" value="{{ old($field['name']) }}">
                    @error($field['name'])
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                @break

            @case('select')
                <div class="form-group">
                    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
                    <select class="form-control @error($field['name']) is-invalid @enderror" name="{{ $field['name'] }}" id="{{ $field['name'] }}">
                        @foreach($field['options'] as $value => $label)
                            <option value="{{ $value }}" {{ old($field['name']) == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @error($field['name'])
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                @break

            @case('checkbox')
                <div class="form-check">
                    <input type="checkbox" class="form-check-input @error($field['name']) is-invalid @enderror" name="{{ $field['name'] }}" id="{{ $field['name'] }}" {{ old($field['name']) ? 'checked' : '' }}>
                    <label class="form-check-label" for="{{ $field['name'] }}">{{ $field['label'] }}</label>
                    @error($field['name'])
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                @break

            @default
                <div class="form-group">
                    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
                    <input type="{{ $field['type'] }}" class="form-control @error($field['name']) is-invalid @enderror" name="{{ $field['name'] }}" id="{{ $field['name'] }}" value="{{ old($field['name']) }}">
                    @error($field['name'])
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
        @endswitch
    @endforeach

    <button type="submit" class="btn btn-primary my-3">Submit</button>
</form>
