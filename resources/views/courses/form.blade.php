{{-- title --}}
<div class="form-group">
    <label for="title">title</label>
    @error('title')
        <small class="text-danger d-block">{{ $message }}</small>
    @enderror
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
        value="{{ old('title') ?? ($course->title ?? '') }}" autocomplete="title">
</div>


@if (isset($course->image) && !empty($course->image))
    <div class="my-4">
        <p>course Image preview</p>
        <img src="{{ asset($course->image) }}" class="img-fluid" alt="course image preview" style="height: 300px">
    </div>
@endif

{{-- image --}}
<div class="form-group">
    <label for="image">Cover image</label>
    @error('image')
        <small class="text-danger d-block">{{ $message }}</small>
    @enderror
    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
        value="{{ old('image') ?? ($course->image ?? '') }}" autocomplete="image">
</div>


{{-- description --}}
<div class="form-group">
    <label for="description">Description</label>
    @error('description')
        <small class="text-danger d-block">{{ $message }}</small>
    @enderror
    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
        autocomplete="description">{{ old('description') ?? ($course->description ?? '') }}</textarea>
</div>

{{-- difficulty --}}
<div class="form-group">
    <label for="level">Course level</label>
    @error('level')
        <small class="text-danger d-block">{{ $message }}</small>
    @enderror
    <select name="level" id="level" class="form-control @error('level') is-invalid @enderror">
        <option value="">-- select difficulty --</option>
        <option value="beginner">Beginner</option>
        <option value="intermediate">Intermediate</option>
        <option value="advanced">Advanced</option>
    </select>
</div>
