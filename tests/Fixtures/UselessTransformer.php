<?php

namespace Phiki\Tests\Fixtures;

use Phiki\Phast\Element;
use Phiki\Phast\Root;
use Phiki\Token\HighlightedToken;
use Phiki\Transformers\AbstractTransformer;
use Phiki\Transformers\Meta;

class UselessTransformer extends AbstractTransformer
{
    public $preprocessed = false;

    public $tokens = false;

    public $highlighted = false;

    public $root = false;

    public $pre = false;

    public $code = false;

    public $line = false;

    public $token = false;

    public $postprocessed = false;

    public function preprocess(string $code): string
    {
        $this->preprocessed = true;

        return $code;
    }

    public function tokens(array $tokens): array
    {
        $this->tokens = true;

        return $tokens;
    }

    public function highlighted(array $tokens): array
    {
        $this->highlighted = true;

        return $tokens;
    }

    public function root(Root $root): Root
    {
        $this->root = true;

        return $root;
    }

    public function pre(Element $pre): Element
    {
        $this->pre = true;

        return $pre;
    }

    public function code(Element $code): Element
    {
        $this->code = true;

        return $code;
    }

    public function line(Element $span, array $line, int $index): Element
    {
        $this->line = true;

        return $span;
    }

    public function token(Element $span, HighlightedToken $token, int $index, int $line): Element
    {
        $this->token = true;

        return $span;
    }

    public function postprocess(string $html): string
    {
        $this->postprocessed = true;

        return $html;
    }

    public function meta(): Meta
    {
        return $this->meta;
    }
}
