<?php


namespace flexice\html\builder;


use flexice\html\builder\Components\Component;

class Compiler
{
    public $Component;

    public $html;

    /**
     * Compiler constructor.
     * @param Component $component
     */
    public function __construct(Component $component)
    {
        $this->Component = $component;
    }

    /**
     * @param Component $component
     */
    public function compile(Component $component)
    {
        $nowComponent = $component;

        if ($nowComponent->segregate === true)
        {
            $tagStart = "<".$nowComponent::TAG;
            if (!empty($nowComponent->args))
            {
                foreach ($nowComponent->args as $nameArg => $value)
                {
                    $tagStart .= " $nameArg=\"$value\"";
                }
                $tagStart .= "/>";
            } else {
                $tagStart .= "/>";
            }
            $this->html .= $tagStart;
            if ($nowComponent->in !== false)
            {
                /** @var Component $nowComponent */
                $this->compile($nowComponent->in);
            }
        } else {

            $tagStart = "<".$nowComponent::TAG;
            $tagEnd = "</".$nowComponent::TAG.">";

            if (!empty($nowComponent->args))
            {
                foreach ($nowComponent->args as $nameArg => $value)
                {
                    $tagStart .= " $nameArg=\"$value\"";
                }
                $tagStart .= ">";
            } else {
                $tagStart .= ">";
            }

            $this->html .= $tagStart;
            if ($nowComponent->in !== false)
            {
                /** @var Component $nowComponent */
                $this->compile($nowComponent->in);
            } elseif (is_string($nowComponent->text))
            {
                $this->html .= $nowComponent->text;
            }
            $this->html .= $tagEnd;
        }
    }

}