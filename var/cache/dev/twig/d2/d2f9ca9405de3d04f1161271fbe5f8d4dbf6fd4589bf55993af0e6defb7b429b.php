<?php

/* @SimpleThingsEntityAudit/layout.html.twig */
class __TwigTemplate_4847491dc7c0fec2d38fec6e38ae012cdcf7a5297e09575bdf8d2189897ea115 extends Twig_Template
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
        $__internal_91bd6adead14dcfe35d12bc4a59d0c84281d4dcb5a53c8b398f40b4bd01b956d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91bd6adead14dcfe35d12bc4a59d0c84281d4dcb5a53c8b398f40b4bd01b956d->enter($__internal_91bd6adead14dcfe35d12bc4a59d0c84281d4dcb5a53c8b398f40b4bd01b956d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleThingsEntityAudit/layout.html.twig"));

        $__internal_dc2327199fec7dde72b77e14d0a5c9e9e18f3870e99c7bf24b4edf25a0c8c979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2327199fec7dde72b77e14d0a5c9e9e18f3870e99c7bf24b4edf25a0c8c979->enter($__internal_dc2327199fec7dde72b77e14d0a5c9e9e18f3870e99c7bf24b4edf25a0c8c979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleThingsEntityAudit/layout.html.twig"));

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
        
        $__internal_91bd6adead14dcfe35d12bc4a59d0c84281d4dcb5a53c8b398f40b4bd01b956d->leave($__internal_91bd6adead14dcfe35d12bc4a59d0c84281d4dcb5a53c8b398f40b4bd01b956d_prof);

        
        $__internal_dc2327199fec7dde72b77e14d0a5c9e9e18f3870e99c7bf24b4edf25a0c8c979->leave($__internal_dc2327199fec7dde72b77e14d0a5c9e9e18f3870e99c7bf24b4edf25a0c8c979_prof);

    }

    // line 8
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_cf72b70c3665d994b18d7f70bcfc5fe1f35500e248e02b92ef7fe2a3db902b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf72b70c3665d994b18d7f70bcfc5fe1f35500e248e02b92ef7fe2a3db902b74->enter($__internal_cf72b70c3665d994b18d7f70bcfc5fe1f35500e248e02b92ef7fe2a3db902b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        $__internal_af90f879254702dfd15f55a3546a73c6eadb6fa831186ff8c5e870ae42981f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af90f879254702dfd15f55a3546a73c6eadb6fa831186ff8c5e870ae42981f1d->enter($__internal_af90f879254702dfd15f55a3546a73c6eadb6fa831186ff8c5e870ae42981f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        echo "";
        
        $__internal_af90f879254702dfd15f55a3546a73c6eadb6fa831186ff8c5e870ae42981f1d->leave($__internal_af90f879254702dfd15f55a3546a73c6eadb6fa831186ff8c5e870ae42981f1d_prof);

        
        $__internal_cf72b70c3665d994b18d7f70bcfc5fe1f35500e248e02b92ef7fe2a3db902b74->leave($__internal_cf72b70c3665d994b18d7f70bcfc5fe1f35500e248e02b92ef7fe2a3db902b74_prof);

    }

    public function getTemplateName()
    {
        return "@SimpleThingsEntityAudit/layout.html.twig";
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
</html>", "@SimpleThingsEntityAudit/layout.html.twig", "K:\\Npointern\\vendor\\simplethings\\entity-audit-bundle\\src\\SimpleThings\\EntityAudit\\Resources\\views\\layout.html.twig");
    }
}
