<?php

/* LiipFunctionalTestBundle:Default:user.html.twig */
class __TwigTemplate_ac8e93fb89de77b38f204e01fa7507df3d27497761a3d49e98288b674c97c322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LiipFunctionalTestBundle::layout.html.twig", "LiipFunctionalTestBundle:Default:user.html.twig", 1);
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
        $__internal_9749e3f571b27fff0f0b39a7a9c6cbaf6352bf63f32de15504eb992a366b24c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9749e3f571b27fff0f0b39a7a9c6cbaf6352bf63f32de15504eb992a366b24c2->enter($__internal_9749e3f571b27fff0f0b39a7a9c6cbaf6352bf63f32de15504eb992a366b24c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipFunctionalTestBundle:Default:user.html.twig"));

        $__internal_6f60771940829cc15c5dae51c57aba049b34dcda59f2619c3a043d915f44f0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f60771940829cc15c5dae51c57aba049b34dcda59f2619c3a043d915f44f0d5->enter($__internal_6f60771940829cc15c5dae51c57aba049b34dcda59f2619c3a043d915f44f0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipFunctionalTestBundle:Default:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9749e3f571b27fff0f0b39a7a9c6cbaf6352bf63f32de15504eb992a366b24c2->leave($__internal_9749e3f571b27fff0f0b39a7a9c6cbaf6352bf63f32de15504eb992a366b24c2_prof);

        
        $__internal_6f60771940829cc15c5dae51c57aba049b34dcda59f2619c3a043d915f44f0d5->leave($__internal_6f60771940829cc15c5dae51c57aba049b34dcda59f2619c3a043d915f44f0d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6e09a440e0da79931496d3103c85ceb71c5c1c70210d4c627d49b11667cdad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e09a440e0da79931496d3103c85ceb71c5c1c70210d4c627d49b11667cdad7->enter($__internal_e6e09a440e0da79931496d3103c85ceb71c5c1c70210d4c627d49b11667cdad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0acec42e464e5defdc166fd21b8f16204f80876253b174a22f6a946fc8fefcd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acec42e464e5defdc166fd21b8f16204f80876253b174a22f6a946fc8fefcd4->enter($__internal_0acec42e464e5defdc166fd21b8f16204f80876253b174a22f6a946fc8fefcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p>Name: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</p>
    <p>Email: ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0acec42e464e5defdc166fd21b8f16204f80876253b174a22f6a946fc8fefcd4->leave($__internal_0acec42e464e5defdc166fd21b8f16204f80876253b174a22f6a946fc8fefcd4_prof);

        
        $__internal_e6e09a440e0da79931496d3103c85ceb71c5c1c70210d4c627d49b11667cdad7->leave($__internal_e6e09a440e0da79931496d3103c85ceb71c5c1c70210d4c627d49b11667cdad7_prof);

    }

    public function getTemplateName()
    {
        return "LiipFunctionalTestBundle:Default:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'LiipFunctionalTestBundle::layout.html.twig' %}

{% block body %}
    <p>Name: {{ user.name }}</p>
    <p>Email: {{ user.email }}</p>
{% endblock %}
", "LiipFunctionalTestBundle:Default:user.html.twig", "K:\\Npointern\\vendor\\liip\\functional-test-bundle/Resources/views/Default/user.html.twig");
    }
}
