<?php

declare(strict_types=1);

namespace Gotenberg;

use JsonSerializable;

class DownloadFrom implements JsonSerializable
{
    public string $url;
    /** @var array<string,string> $extraHttpHeaders */
    public ?array $extraHttpHeaders;

    public function __construct(string $url, ?array $extraHttpHeaders = null)
    {
        $this->url = $url;
        $this->extraHttpHeaders = $extraHttpHeaders;
    }

    /** @return array<string,string|array<string,string>> */
    public function jsonSerialize(): array
    {
        $serialized = [
            'url' => $this->url,
        ];

        if (! empty($this->extraHttpHeaders)) {
            $serialized['extraHttpHeaders'] = $this->extraHttpHeaders;
        }

        return $serialized;
    }
}
