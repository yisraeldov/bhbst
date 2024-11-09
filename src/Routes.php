<?php

namespace Bhbsd;

use Closure;

class Routes
{
    /**
     * @return array<string,Closure>
     */
    public function getRoutes(): array
    {
        return [
            null => function () {
                require "index.phtml";
            },
            'task1' => $this->makeReorderAction(new ParagraphReordererByLen()),
            'task2' => $this->makeReorderAction(new ParagraphReordererCustomAlapha())
        ];
    }

    /**
     * @return Closure(array): void
     */
    private function makeReorderAction(ParagraphReorderer $reorderer): Closure
    {
        return  function ($params) use ($reorderer) {
            $post = $params['post'] ?? [];
            $data = $post['data'] ?? null;
            echo $reorderer->reorder($data);
        };
    }
}
