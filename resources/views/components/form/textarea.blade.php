<div class="row form-group">
    <div class="col col-md-12" style="text-align: right">
        <label class="text-primary">{{ $label }}</label>
        <br>
        <div class="input-group">
            <textarea class="form-control" name="{{ $name }}" id="{{ $name }}" cols="30" rows="10">
                {{ $value }}
            </textarea>
        </div>
        @error($name)
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
</div>
