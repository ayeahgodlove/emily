{{-- title --}}
<div class="form-group">
    <label for="title">title</label>
    @error('title')
        <small class="text-danger d-block">{{ $message }}</small>
    @enderror
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
        value="{{ old('title') ?? ($lesson->title ?? '') }}" autocomplete="title">
</div>


@if (isset($lesson->url) && !empty($lesson->url))
    <div class="my-4">
        <p>lesson video preview</p>
        <video src="{{ asset($lesson->video) }} controls"></video>
    </div>
@endif

{{-- image --}}
<div class="form-group">
    <label for="url">Upload video</label>
    @error('url')
        <small class="text-danger d-block">{{ $message }}</small>
    @enderror
    <input type="file" class="form-control @error('url') is-invalid @enderror" name="url" id="url"
        value="{{ old('url') ?? ($lesson->url ?? '') }}" autocomplete="url">
</div>

<input type="hidden" name="course_id" value="{{ request()->query('course') }}">
