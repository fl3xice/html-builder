<?php


namespace flexice\html\builder\Components;


class Component
{
    public $meta = [
        "html" => "5",
        "useCss?" => false,
        "author" => "Author",
        "website" => "https://example.com",
        "docs" => "https://example.com"
    ];

    public $segregate = false;

    public const TAG = "tag";

    public $args = [];
    public $in = false;
    public $styles = false;
    public $text = false;

    /**
     * Component constructor.
     * @param bool $in
     * @param array $args
     * @param bool $styles
     */
    public function __construct($in=false, $args = [],  $styles=false)
    {
        $this->args = $args;
        $this->in = $in;
        $this->styles = $styles;
        $this->meta["useCss?"] = $styles;
    }
}