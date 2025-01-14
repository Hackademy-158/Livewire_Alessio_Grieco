<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Articles</h1>
            </div>
        </div>
    </div>

    @if(count($articles) > 0)
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    @foreach ($articles as $article)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>
                                <div class="mt-3">
                                    <a href="{{ route('article.show', $article) }}" class="btn btn-primary">Read more</a>
                                    <a href="{{ route('article.edit', $article) }}" class="btn btn-warning">Edit</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="text-center text-muted py-5">
                        <i class="fas fa-newspaper fa-3x mb-3"></i>
                        <h3 class="mt-3">Nothing to see here</h3>
                        <p class="lead">No articles have been created yet.</p>
                        <a href="{{ route('article.create') }}" class="btn btn-primary mt-3">Create your first article</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-layout>
