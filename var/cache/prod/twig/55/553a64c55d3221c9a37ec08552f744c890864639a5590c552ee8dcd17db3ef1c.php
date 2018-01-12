<?php

/* @SimpleThingsEntityAudit/layout.html.twig */
class __TwigTemplate_26cbbb7b9c9e08b37c302e7ad2a54645f4e8b1293220147851fe9da35a4d18db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'simplethings_entityaudit_content' => array($this, 'block_simplethings_entityaudit_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('simplethings_entityaudit_content', $context, $blocks);
        // line 9
        echo "        </div>
    </body>
</html>";
    }

    // line 8
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "@SimpleThingsEntityAudit/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 9,  29 => 8,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SimpleThingsEntityAudit/layout.html.twig", "K:\\Npointern\\vendor\\simplethings\\entity-audit-bundle\\src\\SimpleThings\\EntityAudit\\Resources\\views\\layout.html.twig");
    }
}
