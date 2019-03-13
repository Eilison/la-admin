<?php

namespace Eilison\LaAdmin\Grid\Displayers;

class Link extends AbstractDisplayer
{
    public function display($href = '', $target = '_blank')
    {
        $href = $href ?: $this->value;

        return "<a href='$href' target='$target'>{$this->value}</a>";
    }
}
