<?php

/* SimpleThingsEntityAuditBundle::layout.html.twig */
class __TwigTemplate_69fa34dc37c7ec4f745647631879936ed6a6a89826a8d15bde5b85e1dc812299 extends Twig_Template
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
        $__internal_3e8ac056bb3692fc316bf8b37a1f30e666a3edd0ace86697e226a58cf4dc9488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8ac056bb3692fc316bf8b37a1f30e666a3edd0ace86697e226a58cf4dc9488->enter($__internal_3e8ac056bb3692fc316bf8b37a1f30e666a3edd0ace86697e226a58cf4dc9488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle::layout.html.twig"));

        $__internal_2f3d6c20bd3bbd5e0ccb718599374978e65d0909dacbfc67d08e93be6516d0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3d6c20bd3bbd5e0ccb718599374978e65d0909dacbfc67d08e93be6516d0f9->enter($__internal_2f3d6c20bd3bbd5e0ccb718599374978e65d0909dacbfc67d08e93be6516d0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle::layout.html.twig"));

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
        
        $__internal_3e8ac056bb3692fc316bf8b37a1f30e666a3edd0ace86697e226a58cf4dc9488->leave($__internal_3e8ac056bb3692fc316bf8b37a1f30e666a3edd0ace86697e226a58cf4dc9488_prof);

        
        $__internal_2f3d6c20bd3bbd5e0ccb718599374978e65d0909dacbfc67d08e93be6516d0f9->leave($__internal_2f3d6c20bd3bbd5e0ccb718599374978e65d0909dacbfc67d08e93be6516d0f9_prof);

    }

    // line 8
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_383cb2d99218fc9adfc1652add03f06b80765a3dfc71bc1c5f1d281c994b3aa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383cb2d99218fc9adfc1652add03f06b80765a3dfc71bc1c5f1d281c994b3aa7->enter($__internal_383cb2d99218fc9adfc1652add03f06b80765a3dfc71bc1c5f1d281c994b3aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        $__internal_88f840c0d88063399dcd991768fae3dc40dd46c2b91fcce56ea6bdea7b464787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f840c0d88063399dcd991768fae3dc40dd46c2b91fcce56ea6bdea7b464787->enter($__internal_88f840c0d88063399dcd991768fae3dc40dd46c2b91fcce56ea6bdea7b464787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        echo "";
        
        $__internal_88f840c0d88063399dcd991768fae3dc40dd46c2b91fcce56ea6bdea7b464787->leave($__internal_88f840c0d88063399dcd991768fae3dc40dd46c2b91fcce56ea6bdea7b464787_prof);

        
        $__internal_383cb2d99218fc9adfc1652add03f06b80765a3dfc71bc1c5f1d281c994b3aa7->leave($__internal_383cb2d99218fc9adfc1652add03f06b80765a3dfc71bc1c5f1d281c994b3aa7_prof);

    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  37 => 9,  35 => 8,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% block simplethings_entityaudit_content '' %}
        </div>
    </body>
</html>", "SimpleThingsEntityAuditBundle::layout.html.twig", "K:\\Npointern\\vendor\\simplethings\\entity-audit-bundle\\src\\SimpleThings\\EntityAudit/Resources/views/layout.html.twig");
    }
}
