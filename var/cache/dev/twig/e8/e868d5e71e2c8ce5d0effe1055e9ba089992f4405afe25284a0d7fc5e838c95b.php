<?php

/* LiipFunctionalTestBundle:Default:form.html.twig */
class __TwigTemplate_9cb01fa6d93fb5c55be5a4de03069688c5082b5d5f979754bcccefcf0f754375 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LiipFunctionalTestBundle::layout.html.twig", "LiipFunctionalTestBundle:Default:form.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LiipFunctionalTestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ec6c6acd2f2c21c090cda8a278d24d7144356ae6c06fb988e51d2c83a4b3c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec6c6acd2f2c21c090cda8a278d24d7144356ae6c06fb988e51d2c83a4b3c63->enter($__internal_4ec6c6acd2f2c21c090cda8a278d24d7144356ae6c06fb988e51d2c83a4b3c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipFunctionalTestBundle:Default:form.html.twig"));

        $__internal_dbce8517e76419be63f880cb10c29f5d8c890a24ebc5168a6eb157d21149bc92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbce8517e76419be63f880cb10c29f5d8c890a24ebc5168a6eb157d21149bc92->enter($__internal_dbce8517e76419be63f880cb10c29f5d8c890a24ebc5168a6eb157d21149bc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipFunctionalTestBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ec6c6acd2f2c21c090cda8a278d24d7144356ae6c06fb988e51d2c83a4b3c63->leave($__internal_4ec6c6acd2f2c21c090cda8a278d24d7144356ae6c06fb988e51d2c83a4b3c63_prof);

        
        $__internal_dbce8517e76419be63f880cb10c29f5d8c890a24ebc5168a6eb157d21149bc92->leave($__internal_dbce8517e76419be63f880cb10c29f5d8c890a24ebc5168a6eb157d21149bc92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e23f9badce6b5c29f5e5df0203541bd1572735afb0347cd709a1b93bff4ddd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e23f9badce6b5c29f5e5df0203541bd1572735afb0347cd709a1b93bff4ddd8->enter($__internal_6e23f9badce6b5c29f5e5df0203541bd1572735afb0347cd709a1b93bff4ddd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1660ea5476dee67d24a838273341dff673ce8c56fcb3bd0a8cf745691dc9243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1660ea5476dee67d24a838273341dff673ce8c56fcb3bd0a8cf745691dc9243->enter($__internal_c1660ea5476dee67d24a838273341dff673ce8c56fcb3bd0a8cf745691dc9243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form');
        echo "
";
        
        $__internal_c1660ea5476dee67d24a838273341dff673ce8c56fcb3bd0a8cf745691dc9243->leave($__internal_c1660ea5476dee67d24a838273341dff673ce8c56fcb3bd0a8cf745691dc9243_prof);

        
        $__internal_6e23f9badce6b5c29f5e5df0203541bd1572735afb0347cd709a1b93bff4ddd8->leave($__internal_6e23f9badce6b5c29f5e5df0203541bd1572735afb0347cd709a1b93bff4ddd8_prof);

    }

    public function getTemplateName()
    {
        return "LiipFunctionalTestBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'LiipFunctionalTestBundle::layout.html.twig' %}

{% block body %}
    {{ form(form) }}
{% endblock %}
", "LiipFunctionalTestBundle:Default:form.html.twig", "K:\\Npointern\\vendor\\liip\\functional-test-bundle/Resources/views/Default/form.html.twig");
    }
}
