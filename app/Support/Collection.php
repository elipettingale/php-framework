<?php

namespace App\Support;

class Collection
{
    protected $items;

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function all(): array
    {
        return $this->items;
    }

    public function push($item): void
    {
        $this->items[] = $item;
    }

    public function pull($key, $default = null)
    {
        if (\array_key_exists($key, $this->items)) {
            return $this->items[$key];
        }

        return $default;
    }

    public function shift()
    {
        return array_shift($this->items);
    }

    public function pop()
    {
        return array_pop($this->items);
    }
}
