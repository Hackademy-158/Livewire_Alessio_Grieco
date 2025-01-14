@if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
    <div class="container col-12 col-md-6 my-3">
    <div class="card">
        <div class="card-body align-items-center">
            <form class="card-body" wire:submit="store">
                <div class="mb-3">
                    <label for="title" class="form-label">Article Title</label>
                    <input type="text" class="form-control" id="title" wire:model.live.debounce.2000ms="title">
                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Article Subtitle</label>
                    <input type="text" class="form-control" id="subtitle" wire:model.live.debounce.2000ms="subtitle">
                    @error('subtitle') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea class="form-control" id="body" wire:model.live.debounce.2000ms="body"></textarea>
                    @error('body') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create Article</button>
            </form>
        </div>
    </div>
    <div class="container col-md-12 my-3">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Article Preview</h5>
            </div>
            <div class="card-body">
                @if($title || $subtitle || $body)
                    <article class="preview-content">
                        @if($title)
                            <h1 class="display-4 mb-3">{{ $title }}</h1>
                        @endif
                        @if($subtitle)
                            <h2 class="h4 text-muted mb-4">{{ $subtitle }}</h2>
                        @endif

                        @if($body)
                            <div class="lead preview-body">
                                {{ $body }}
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Read more!</button>
                    </article>
                @else
                    <div class="text-center text-muted py-5">
                        <i class="fas fa-pen mb-3"></i>
                        <p>Start typing to see the preview</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
