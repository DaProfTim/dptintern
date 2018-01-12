<?php

/* @NpoaSecurity/common/template_dashboard.html.twig */
class __TwigTemplate_f616cb9c8f1bf7436bac31dcbb19ed0db6a506cc9582d951423212ed2b002b07 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_scripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
    <style type=\"text/css\">
        html { height: inherit; }
    </style>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
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
        echo ((((is_string($__internal_5a4fab1cb082ffcdfd0f605c7f90ab3bc55e7ce8084848ed01a2e939291f0f4c = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_09ed912a00c9737df0ef02cf6a34122a685169d1b473e9d88ca3caf96dd06106 = "npoa_security_ctrlactpermission_") && ('' === $__internal_09ed912a00c9737df0ef02cf6a34122a685169d1b473e9d88ca3caf96dd06106 || 0 === strpos($__internal_5a4fab1cb082ffcdfd0f605c7f90ab3bc55e7ce8084848ed01a2e939291f0f4c, $__internal_09ed912a00c9737df0ef02cf6a34122a685169d1b473e9d88ca3caf96dd06106))) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "npoa_security_index"))) ? ("active") : (""));
        echo "\"><a
                            href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("npoa_security_ctrlactpermission_index");
        echo "\">Controller-Action-Berechtigungen</a></li>
                <li class=\"";
        // line 26
        echo (((is_string($__internal_78e138df2c88f828c10704ba0da7dffa46240db76f44d08b8a99e94b253f96cb = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_cad9916207edd4a816a470d2fa30c183e5624c91fb861c1623232396de8108e1 = "npoa_security_entitypermission_") && ('' === $__internal_cad9916207edd4a816a470d2fa30c183e5624c91fb861c1623232396de8108e1 || 0 === strpos($__internal_78e138df2c88f828c10704ba0da7dffa46240db76f44d08b8a99e94b253f96cb, $__internal_cad9916207edd4a816a470d2fa30c183e5624c91fb861c1623232396de8108e1)))) ? ("active") : (""));
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
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
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
        return array (  98 => 38,  92 => 39,  90 => 38,  80 => 31,  73 => 27,  69 => 26,  65 => 25,  61 => 24,  46 => 11,  43 => 10,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NpoaSecurity/common/template_dashboard.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\common\\template_dashboard.html.twig");
    }
}
