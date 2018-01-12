<?php

/* NpoaSecurityBundle:common:template_dashboard.html.twig */
class __TwigTemplate_5c6b8998f37c88481ede3a93ea62922e0d5ff77062c23850ea7a7f93fbf37199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@NpoaSecurity/common/template.html.twig", "NpoaSecurityBundle:common:template_dashboard.html.twig", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@NpoaSecurity/common/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_848398b40d410d94468978ac1cbeebd8b6751898f61df2bb2ea42e3e9aa36ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848398b40d410d94468978ac1cbeebd8b6751898f61df2bb2ea42e3e9aa36ef7->enter($__internal_848398b40d410d94468978ac1cbeebd8b6751898f61df2bb2ea42e3e9aa36ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NpoaSecurityBundle:common:template_dashboard.html.twig"));

        $__internal_6d1f548f015545c922ae72e08f1f6d182f3c5164741aabeaca1d38e253f1dff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1f548f015545c922ae72e08f1f6d182f3c5164741aabeaca1d38e253f1dff2->enter($__internal_6d1f548f015545c922ae72e08f1f6d182f3c5164741aabeaca1d38e253f1dff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NpoaSecurityBundle:common:template_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848398b40d410d94468978ac1cbeebd8b6751898f61df2bb2ea42e3e9aa36ef7->leave($__internal_848398b40d410d94468978ac1cbeebd8b6751898f61df2bb2ea42e3e9aa36ef7_prof);

        
        $__internal_6d1f548f015545c922ae72e08f1f6d182f3c5164741aabeaca1d38e253f1dff2->leave($__internal_6d1f548f015545c922ae72e08f1f6d182f3c5164741aabeaca1d38e253f1dff2_prof);

    }

    // line 3
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_0d4589cc1a602d12ecec0702f54c6cae853d88c8676fa716c0addc174164390c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4589cc1a602d12ecec0702f54c6cae853d88c8676fa716c0addc174164390c->enter($__internal_0d4589cc1a602d12ecec0702f54c6cae853d88c8676fa716c0addc174164390c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_639ec17f28804f30204c55eacbec152111d6317cf96991c608b62cf45cda7553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639ec17f28804f30204c55eacbec152111d6317cf96991c608b62cf45cda7553->enter($__internal_639ec17f28804f30204c55eacbec152111d6317cf96991c608b62cf45cda7553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
    <style type=\"text/css\">
        html { height: inherit; }
    </style>
";
        
        $__internal_639ec17f28804f30204c55eacbec152111d6317cf96991c608b62cf45cda7553->leave($__internal_639ec17f28804f30204c55eacbec152111d6317cf96991c608b62cf45cda7553_prof);

        
        $__internal_0d4589cc1a602d12ecec0702f54c6cae853d88c8676fa716c0addc174164390c->leave($__internal_0d4589cc1a602d12ecec0702f54c6cae853d88c8676fa716c0addc174164390c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_634acc3518926c89864c31cb7f32882d53556be424b72556372faa5c14c0e4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634acc3518926c89864c31cb7f32882d53556be424b72556372faa5c14c0e4bb->enter($__internal_634acc3518926c89864c31cb7f32882d53556be424b72556372faa5c14c0e4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a2f585b0eb1f09d43ca339e31c63a257fc8738d5f2a7175e69efc1d54aa864b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2f585b0eb1f09d43ca339e31c63a257fc8738d5f2a7175e69efc1d54aa864b->enter($__internal_0a2f585b0eb1f09d43ca339e31c63a257fc8738d5f2a7175e69efc1d54aa864b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<div class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-default-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"javascript:void(0)\"><img src=\"/bundles/npoasecurity/img/npoa_logo_white_sm.png\" alt=\"NPOA\" /> <span>Security</span></a>
        </div>
        <div class=\"navbar-collapse collapse navbar-default-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"";
        // line 24
        echo ((((is_string($__internal_830ed2ae7afbd56ed294ec36c63a30aed77923f2d7c69bca2b4fa21e518c8292 = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_249c0d6e682d19b4112518315c0f600af879f97b1c074010109b675da0f56bb6 = "npoa_security_ctrlactpermission_") && ('' === $__internal_249c0d6e682d19b4112518315c0f600af879f97b1c074010109b675da0f56bb6 || 0 === strpos($__internal_830ed2ae7afbd56ed294ec36c63a30aed77923f2d7c69bca2b4fa21e518c8292, $__internal_249c0d6e682d19b4112518315c0f600af879f97b1c074010109b675da0f56bb6))) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "npoa_security_index"))) ? ("active") : (""));
        echo "\"><a
                            href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("npoa_security_ctrlactpermission_index");
        echo "\">Controller-Action-Berechtigungen</a></li>
                <li class=\"";
        // line 26
        echo (((is_string($__internal_630428ec8b0d2114e9ce4e1c5e6825691bca9f69ea69fa45ffa75bd2e393d946 = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e56daa5e2e1677ad5c34d85c016b2491fe6c2c767795024b2d43a8e095b52c91 = "npoa_security_entitypermission_") && ('' === $__internal_e56daa5e2e1677ad5c34d85c016b2491fe6c2c767795024b2d43a8e095b52c91 || 0 === strpos($__internal_630428ec8b0d2114e9ce4e1c5e6825691bca9f69ea69fa45ffa75bd2e393d946, $__internal_e56daa5e2e1677ad5c34d85c016b2491fe6c2c767795024b2d43a8e095b52c91)))) ? ("active") : (""));
        echo "\"><a
                            href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("npoa_security_entitypermission_index");
        echo "\">Entity-Berechtigungen</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\" onclick=\"\$('#form').submit();return false;\"><i class=\"fa fa-floppy-o fa-lg\" aria-hidden=\"true\"></i> Speichern</a></li>
                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("npoa_security_auth_logout");
        echo "\"><i class=\"fa fa-sign-out fa-lg\" aria-hidden=\"true\"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>

<div class=\"container-fluid\">
    ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "</div>

";
        
        $__internal_0a2f585b0eb1f09d43ca339e31c63a257fc8738d5f2a7175e69efc1d54aa864b->leave($__internal_0a2f585b0eb1f09d43ca339e31c63a257fc8738d5f2a7175e69efc1d54aa864b_prof);

        
        $__internal_634acc3518926c89864c31cb7f32882d53556be424b72556372faa5c14c0e4bb->leave($__internal_634acc3518926c89864c31cb7f32882d53556be424b72556372faa5c14c0e4bb_prof);

    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        $__internal_e166640b42c3499bde822ec986a6fdba96bf49dadc84a324120708189978bbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e166640b42c3499bde822ec986a6fdba96bf49dadc84a324120708189978bbdf->enter($__internal_e166640b42c3499bde822ec986a6fdba96bf49dadc84a324120708189978bbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_192e7b2198b072bca2cee5f5be0ed785171ce1f61a37c42539f9914396af7470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192e7b2198b072bca2cee5f5be0ed785171ce1f61a37c42539f9914396af7470->enter($__internal_192e7b2198b072bca2cee5f5be0ed785171ce1f61a37c42539f9914396af7470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_192e7b2198b072bca2cee5f5be0ed785171ce1f61a37c42539f9914396af7470->leave($__internal_192e7b2198b072bca2cee5f5be0ed785171ce1f61a37c42539f9914396af7470_prof);

        
        $__internal_e166640b42c3499bde822ec986a6fdba96bf49dadc84a324120708189978bbdf->leave($__internal_e166640b42c3499bde822ec986a6fdba96bf49dadc84a324120708189978bbdf_prof);

    }

    public function getTemplateName()
    {
        return "NpoaSecurityBundle:common:template_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 38,  122 => 39,  120 => 38,  110 => 31,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  76 => 11,  67 => 10,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@NpoaSecurity/common/template.html.twig\" %}

{% block scripts %}
    {{ parent() }}
    <style type=\"text/css\">
        html { height: inherit; }
    </style>
{% endblock %}

{% block body %}

<div class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-default-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"javascript:void(0)\"><img src=\"/bundles/npoasecurity/img/npoa_logo_white_sm.png\" alt=\"NPOA\" /> <span>Security</span></a>
        </div>
        <div class=\"navbar-collapse collapse navbar-default-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"{{ (app.request.attributes.get('_route') starts with 'npoa_security_ctrlactpermission_' or app.request.attributes.get('_route') == 'npoa_security_index') ? 'active' : ''}}\"><a
                            href=\"{{ path('npoa_security_ctrlactpermission_index') }}\">Controller-Action-Berechtigungen</a></li>
                <li class=\"{{ (app.request.attributes.get('_route') starts with 'npoa_security_entitypermission_') ? 'active' : ''}}\"><a
                            href=\"{{ path('npoa_security_entitypermission_index') }}\">Entity-Berechtigungen</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\" onclick=\"\$('#form').submit();return false;\"><i class=\"fa fa-floppy-o fa-lg\" aria-hidden=\"true\"></i> Speichern</a></li>
                <li><a href=\"{{ path('npoa_security_auth_logout') }}\"><i class=\"fa fa-sign-out fa-lg\" aria-hidden=\"true\"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>

<div class=\"container-fluid\">
    {% block content %}{% endblock %}
</div>

{% endblock %}", "NpoaSecurityBundle:common:template_dashboard.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle/Resources/views/common/template_dashboard.html.twig");
    }
}
