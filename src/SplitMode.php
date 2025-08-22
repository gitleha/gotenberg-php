<?php

declare(strict_types=1);

namespace Gotenberg;

class SplitMode
{
    public string $mode;
    public string $span;
    public bool $unify;

    public function __construct(
        string $mode,
        string $span,
        bool $unify
    ) {
    }

    public static function intervals(int $span): self
    {
        return new self(
            'intervals',
            $span . '',
            false,
        );
    }

    public static function pages(string $span, bool $unify = false): self
    {
        return new self(
            'pages',
            $span,
            $unify,
        );
    }
}
