<?php

use flexice\html\builder\Compiler;
use flexice\html\builder\Components\Div;
use flexice\html\builder\Components\Hr;

require_once "../vendor/autoload.php";

$Compiler = new Compiler(
    new Div(
        new Div()
    )
);

$Compiler->compile($Compiler->Component);

print $Compiler->html;