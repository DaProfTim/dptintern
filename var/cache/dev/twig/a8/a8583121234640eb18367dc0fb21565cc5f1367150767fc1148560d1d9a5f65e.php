<?php

/* @NpoaSecurity/common/template_dashboard.html.twig */
class __TwigTemplate_c5b5dcbc48d4f428bd0078bdf744308f74752a421b2187c71abf9c6bffa58a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@NpoaSecurity/common/template.html.twig", "@NpoaSecurity/common/template_dashboard.html.twig", 1);
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
        $__internal_d3637ea1dea633bd95caf1588c207aae472fb2ec6493fdadc61c1ff014785ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3637ea1dea633bd95caf1588c207aae472fb2ec6493fdadc61c1ff014785ca6->enter($__internal_d3637ea1dea633bd95caf1588c207aae472fb2ec6493fdadc61c1ff014785ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NpoaSecurity/common/template_dashboard.html.twig"));

        $__internal_bf6f508c42046b1f059b7d4a12a4055450af7fcf3c6e1ac50928c1a68408d03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6f508c42046b1f059b7d4a12a4055450af7fcf3c6e1ac50928c1a68408d03b->enter($__internal_bf6f508c42046b1f059b7d4a12a4055450af7fcf3c6e1ac50928c1a68408d03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NpoaSecurity/common/template_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3637ea1dea633bd95caf1588c207aae472fb2ec6493fdadc61c1ff014785ca6->leave($__internal_d3637ea1dea633bd95caf1588c207aae472fb2ec6493fdadc61c1ff014785ca6_prof);

        
        $__internal_bf6f508c42046b1f059b7d4a12a4055450af7fcf3c6e1ac50928c1a68408d03b->leave($__internal_bf6f508c42046b1f059b7d4a12a4055450af7fcf3c6e1ac50928c1a68408d03b_prof);

    }

    // line 3
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_aeeeb3d8b16d926a288b3ed118ba09d29902e072955315482c8e3c36bbb36a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeeeb3d8b16d926a288b3ed118ba09d29902e072955315482c8e3c36bbb36a62->enter($__internal_aeeeb3d8b16d926a288b3ed118ba09d29902e072955315482c8e3c36bbb36a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_4d4394623ba0a95dc6831193ed39233535323bb9573999a65752cf8635d3781a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4394623ba0a95dc6831193ed39233535323bb9573999a65752cf8635d3781a->enter($__internal_4d4394623ba0a95dc6831193ed39233535323bb9573999a65752cf8635d3781a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
    <style type=\"text/css\">
        html { height: inherit; }
    </style>
";
        
        $__internal_4d4394623ba0a95dc6831193ed39233535323bb9573999a65752cf8635d3781a->leave($__internal_4d4394623ba0a95dc6831193ed39233535323bb9573999a65752cf8635d3781a_prof);

        
        $__internal_aeeeb3d8b16d926a288b3ed118ba09d29902e072955315482c8e3c36bbb36a62->leave($__internal_aeeeb3d8b16d926a288b3ed118ba09d29902e072955315482c8e3c36bbb36a62_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fbce228ad3ef4f2ff54af09ff1a8ee1b2c8ee832b66a59aa20fdf20fc36d0ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fbce228ad3ef4f2ff54af09ff1a8ee1b2c8ee832b66a59aa20fdf20fc36d0ad->enter($__internal_2fbce228ad3ef4f2ff54af09ff1a8ee1b2c8ee832b66a59aa20fdf20fc36d0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64687eaacc1d8bff58c482133e8d7c4efe7a254445c32e38b4226219ac12c90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64687eaacc1d8bff58c482133e8d7c4efe7a254445c32e38b4226219ac12c90d->enter($__internal_64687eaacc1d8bff58c482133e8d7c4efe7a254445c32e38b4226219ac12c90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo ((((is_string($__internal_7869ba246d19a37a2b2266bf6392f8476fc6c4fb1ca546d0c1b38177193c47e8 = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a3fd5a25f27bface349e1bd0efd177ceb4d70f96e3c1fe9ac84a7195b2dd27cc = "npoa_security_ctrlactpermission_") && ('' === $__internal_a3fd5a25f27bface349e1bd0efd177ceb4d70f96e3c1fe9ac84a7195b2dd27cc || 0 === strpos($__internal_7869ba246d19a37a2b2266bf6392f8476fc6c4fb1ca546d0c1b38177193c47e8, $__internal_a3fd5a25f27bface349e1bd0efd177ceb4d70f96e3c1fe9ac84a7195b2dd27cc))) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "npoa_security_index"))) ? ("active") : (""));
        echo "\"><a
                            href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("npoa_security_ctrlactpermission_index");
        echo "\">Controller-Action-Berechtigungen</a></li>
                <li class=\"";
        // line 26
        echo (((is_string($__internal_9b038f3067de1010c41db25bedb02aabe495c9ac33ea874fdd6d432bdba5f3f4 = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_263694732dd99370fe6f42f8832ad86457c21adb7d20ae0d84587c9e7d5522cd = "npoa_security_entitypermission_") && ('' === $__internal_263694732dd99370fe6f42f8832ad86457c21adb7d20ae0d84587c9e7d5522cd || 0 === strpos($__internal_9b038f3067de1010c41db25bedb02aabe495c9ac33ea874fdd6d432bdba5f3f4, $__internal_263694732dd99370fe6f42f8832ad86457c21adb7d20ae0d84587c9e7d5522cd)))) ? ("active") : (""));
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
        
        $__internal_64687eaacc1d8bff58c482133e8d7c4efe7a254445c32e38b4226219ac12c90d->leave($__internal_64687eaacc1d8bff58c482133e8d7c4efe7a254445c32e38b4226219ac12c90d_prof);

        
        $__internal_2fbce228ad3ef4f2ff54af09ff1a8ee1b2c8ee832b66a59aa20fdf20fc36d0ad->leave($__internal_2fbce228ad3ef4f2ff54af09ff1a8ee1b2c8ee832b66a59aa20fdf20fc36d0ad_prof);

    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        $__internal_bb031e308c6648154e66f56de1515a732aa185365bcf35b9be0ea77f5dfa4e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb031e308c6648154e66f56de1515a732aa185365bcf35b9be0ea77f5dfa4e65->enter($__internal_bb031e308c6648154e66f56de1515a732aa185365bcf35b9be0ea77f5dfa4e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6efcbf5ea585896cd89da2e0a4e3f2bba6e2e180383161634639dce16315b5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efcbf5ea585896cd89da2e0a4e3f2bba6e2e180383161634639dce16315b5b6->enter($__internal_6efcbf5ea585896cd89da2e0a4e3f2bba6e2e180383161634639dce16315b5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6efcbf5ea585896cd89da2e0a4e3f2bba6e2e180383161634639dce16315b5b6->leave($__internal_6efcbf5ea585896cd89da2e0a4e3f2bba6e2e180383161634639dce16315b5b6_prof);

        
        $__internal_bb031e308c6648154e66f56de1515a732aa185365bcf35b9be0ea77f5dfa4e65->leave($__internal_bb031e308c6648154e66f56de1515a732aa185365bcf35b9be0ea77f5dfa4e65_prof);

    }

    public function getTemplateName()
    {
        return "@NpoaSecurity/common/template_dashboard.html.twig";
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

{% endblock %}", "@NpoaSecurity/common/template_dashboard.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\common\\template_dashboard.html.twig");
    }
}
