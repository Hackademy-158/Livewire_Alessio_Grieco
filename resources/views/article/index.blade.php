<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Articles</h1>
            </div>
        </div>
    </div>
<div class="container py-5">
        <div class="row">
            <div class="col-12">
                @foreach($articles as $article)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>
                            <a href="{{ route('article.show', $article->body) }}" class="btn btn-primary">Read more</a>
                            <a href="{{ route('article.edit', $article) }}" class="btn btn-warning">Edit</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>