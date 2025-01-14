<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleEdit extends Component
{

    public $title, $subtitle, $body;
    public $article;

    public function mount()
    {
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
    }

    public function edit()
    {
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);
        session()->flash('message', 'Article updated successfully');
    }

    public function destroy()
    {
        $this->article->delete();
        session()->flash('message', 'Article deleted successfully');
        return redirect()->route('article.index');
    }

    public function render()
    {
        return view('livewire.article-edit');
    }
}
