<?php
namespace App\View\Components;
use Illuminate\View\Component;
class Button extends Component
{
    public function __construct() { }

    public function text() {
        return $this->attributes['text'] ?? '';
    }

    public function render() {
        return view('components.button');
    }
}
