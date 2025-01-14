<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Validate;

class ArticleCreate extends Component
{
#[Validate('required|min:3|string')]
    public $title;
#[Validate('required|min:3|string')]
    public $subtitle;
#[Validate('required|min:3|string')]
    public $body;   

// protected $rules = [
//     'title' => 'required|min:3|string',
//     'subtitle' => 'required|min:3|string',
//     'body' => 'required|min:3|string'
// ];

public function store()
{
    $this->validate();

    Article::create([
        'title' => $this->title,
        'subtitle' => $this->subtitle,
        'body' => $this->body
    ]);

    session()->flash('message', 'Article created successfully');
    $this->title = '';
    $this->subtitle = '';
    $this->body = '';
}

    public function render()
    {
        return view('livewire.article-create');
    }

}
