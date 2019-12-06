<?php


namespace flexice\html\builder\Components;


class Hr extends Component
{
    public $meta = [
        "html" => "5",
        "useCss?" => false,
        "author" => "FlexICE",
        "website" => "https://www.w3schools.com/tags/tag_hr.asp",
        "docs" => "https://www.w3schools.com/tags/tag_hr.asp"
    ];

    public const TAG = "hr";

    public $segregate = true;
}