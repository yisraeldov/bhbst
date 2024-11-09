<?PHP

namespace Bhbsd;

function makeReorderAction(ParagraphReorderer $reorderer)
{
    return  function ($params) use ($reorderer) {
        $post = $params['post'] ?? [];
        $data = $post['data'] ?? null;
        echo $reorderer->reorder($data);
    };
}


return [
    null => function () {
        require "index.phtml";
    },
    'task1' => makeReorderAction(new ParagraphReordererByLen()),
    'task2' => makeReorderAction(new ParagraphReordererCustomAlapha())
];

