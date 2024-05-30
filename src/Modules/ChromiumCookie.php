<?php

declare(strict_types=1);

namespace Gotenberg\Modules;

use JsonSerializable;

class ChromiumCookie implements JsonSerializable
{
    public string $name;
    public string $value;
    public string $domain;
    public ?string $path = null;
    public ?bool $secure = null;
    public ?bool $httpOnly = null;
    public ?string $sameSite = null;

    public function __construct(
        string $name,
        string $value,
        string $domain,
        ?string $path = null,
        ?bool $secure = null,
        ?bool $httpOnly = null,
        ?string $sameSite = null
    ) {
        $this->name = $name;
        $this->value = $value;
        $this->domain = $domain;
        $this->path = $path;
        $this->secure = $secure;
        $this->httpOnly = $httpOnly;
        $this->sameSite = $sameSite;
    }

    /** @return array<string, string|bool> */
    public function jsonSerialize(): array
    {
        $serialized = [
            'name' => $this->name,
            'value' => $this->value,
            'domain' => $this->domain,
        ];

        if ($this->path !== null) {
            $serialized['path'] = $this->path;
        }

        if ($this->secure !== null) {
            $serialized['secure'] = $this->secure;
        }

        if ($this->httpOnly !== null) {
            $serialized['httpOnly'] = $this->httpOnly;
        }

        if ($this->sameSite !== null) {
            $serialized['sameSite'] = $this->sameSite;
        }

        return $serialized;
    }
}
