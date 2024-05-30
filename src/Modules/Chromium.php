<?php

declare(strict_types=1);

namespace Gotenberg\Modules;

class Chromium
{
    public string $baseUrl;

    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function pdf(): ChromiumPdf
    {
        return new ChromiumPdf($this->baseUrl);
    }

    public function screenshot(): ChromiumScreenshot
    {
        return new ChromiumScreenshot($this->baseUrl);
    }
}
