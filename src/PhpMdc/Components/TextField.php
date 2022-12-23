<?php
namespace PhpMdc\Components;

use Illuminate\Support\HtmlString;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;
use PhpMdc\Helper;

class TextField extends Component
{
    public ?string $label;
    public ?string $value;
    public ?string $name;

    public function __construct(
        ?string $label = null,
        ?string $value = null,
        ?string $name = null
    )
    {
        $this->label = $label;
        $this->value = $value;
        $this->name = $name;
    }

    public function validateComponent(HtmlString $slot)
    {
        if (!$this->label && $slot->isEmpty()) {
            throw new \Exception('Please fill the "label" attribute or the component slot', 1);
        }
    }

    public function render()
    {
        return 'mdcv::text-field';
    }
}