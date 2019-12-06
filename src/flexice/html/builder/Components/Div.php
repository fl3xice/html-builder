<?php


namespace flexice\html\builder\Components;


class Div extends Component
{
    public $meta = [
        "html" => "5",
        "useCss?" => false,
        "author" => "FlexICE",
        "website" => "https://www.w3schools.com/tags/tag_div.asp",
        "docs" => "https://www.w3schools.com/tags/tag_div.asp"
    ];

    public const TAG = "div";

    /**
     * Component constructor.
     * @param bool $in
     * @param bool string $text
     * @param array $args
     * @param bool $styles
     */
    public function __construct($in=false, $text=false, $args = [],  $styles=false)
    {
        $this->args = $args;
        $this->in = $in;
        $this->styles = $styles;
        $this->meta["useCss?"] = $styles;
        $this->text = $text;
    }
}