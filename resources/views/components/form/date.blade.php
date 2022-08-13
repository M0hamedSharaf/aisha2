<div class="row form-group">
    <div class="col col-md-12">
        <div class="input-group-addon text-primary">{{ $label }}</div>
        <div class="input-group">
            <input type="date" id="{{ $id }}" name="{{ $name }}" class="form-control"
                value="{{ $value }}">
               
        </div>
        @error($name)
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
</div>
