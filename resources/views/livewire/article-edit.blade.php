<div>
    @if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
    <div class="container col-12 col-md-6 my-3">
    <div class="card">
        <div class="card-body align-items-center">
            <form class="card-body" wire:submit="edit">
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
                <button type="submit" class="btn btn-primary">Modify Article</button>
                <button type="submit" class="btn btn-primary" wire:click="destroy">Delete Article</button>
            </form>
        </div>
    </div>
</div>

</div>
