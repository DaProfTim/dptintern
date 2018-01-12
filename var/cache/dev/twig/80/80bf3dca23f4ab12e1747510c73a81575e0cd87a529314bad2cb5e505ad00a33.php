<?php

/* @LiipFunctionalTest/Default/user.html.twig */
class __TwigTemplate_ae34ee5d748b3e9744fbe5640977025d20de65752c2267b7b7e0ae0a9973eca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LiipFunctionalTestBundle::layout.html.twig", "@LiipFunctionalTest/Default/user.html.twig", 1);
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
        $__internal_a319c3a1bb35081bd2be68cd2a9968a54554d805001ac1ca97723ca23cfaf84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a319c3a1bb35081bd2be68cd2a9968a54554d805001ac1ca97723ca23cfaf84e->enter($__internal_a319c3a1bb35081bd2be68cd2a9968a54554d805001ac1ca97723ca23cfaf84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LiipFunctionalTest/Default/user.html.twig"));

        $__internal_42e3d43c17454f54e675bec9f4a688626f9b7f680a2ee1ff7135396715dad4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e3d43c17454f54e675bec9f4a688626f9b7f680a2ee1ff7135396715dad4a8->enter($__internal_42e3d43c17454f54e675bec9f4a688626f9b7f680a2ee1ff7135396715dad4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LiipFunctionalTest/Default/user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a319c3a1bb35081bd2be68cd2a9968a54554d805001ac1ca97723ca23cfaf84e->leave($__internal_a319c3a1bb35081bd2be68cd2a9968a54554d805001ac1ca97723ca23cfaf84e_prof);

        
        $__internal_42e3d43c17454f54e675bec9f4a688626f9b7f680a2ee1ff7135396715dad4a8->leave($__internal_42e3d43c17454f54e675bec9f4a688626f9b7f680a2ee1ff7135396715dad4a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf0ae402b147ac512a5ea83fa6ad8232d486b69658660fd9f28222f4643bd1c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0ae402b147ac512a5ea83fa6ad8232d486b69658660fd9f28222f4643bd1c6->enter($__internal_bf0ae402b147ac512a5ea83fa6ad8232d486b69658660fd9f28222f4643bd1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2215d9f453bca59ab2530a244640d39687755adb766d45c9f5cb827e4a108559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2215d9f453bca59ab2530a244640d39687755adb766d45c9f5cb827e4a108559->enter($__internal_2215d9f453bca59ab2530a244640d39687755adb766d45c9f5cb827e4a108559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p>Name: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</p>
    <p>Email: ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2215d9f453bca59ab2530a244640d39687755adb766d45c9f5cb827e4a108559->leave($__internal_2215d9f453bca59ab2530a244640d39687755adb766d45c9f5cb827e4a108559_prof);

        
        $__internal_bf0ae402b147ac512a5ea83fa6ad8232d486b69658660fd9f28222f4643bd1c6->leave($__internal_bf0ae402b147ac512a5ea83fa6ad8232d486b69658660fd9f28222f4643bd1c6_prof);

    }

    public function getTemplateName()
    {
        return "@LiipFunctionalTest/Default/user.html.twig";
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
", "@LiipFunctionalTest/Default/user.html.twig", "K:\\Npointern\\vendor\\liip\\functional-test-bundle\\Resources\\views\\Default\\user.html.twig");
    }
}
