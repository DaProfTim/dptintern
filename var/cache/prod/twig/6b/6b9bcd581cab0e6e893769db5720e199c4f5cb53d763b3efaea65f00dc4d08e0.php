<?php

/* NpoaSecurityBundle:common:template_dashboard.html.twig */
class __TwigTemplate_0c8a50d564bf0412af7a78cc357b18a0d46debb5ab4c7dfc8712ea175a93bdf8 extends Twig_Template
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
        echo ((((is_string($__internal_76c0f5656cd90c11600654ea2d416f09852e56f3c25e6d906017a0b44a1221db = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d89087e547908218ad863d4d97348c0fd7fa4db416ba9c0f73464929d23e1cc9 = "npoa_security_ctrlactpermission_") && ('' === $__internal_d89087e547908218ad863d4d97348c0fd7fa4db416ba9c0f73464929d23e1cc9 || 0 === strpos($__internal_76c0f5656cd90c11600654ea2d416f09852e56f3c25e6d906017a0b44a1221db, $__internal_d89087e547908218ad863d4d97348c0fd7fa4db416ba9c0f73464929d23e1cc9))) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "npoa_security_index"))) ? ("active") : (""));
        echo "\"><a
                            href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("npoa_security_ctrlactpermission_index");
        echo "\">Controller-Action-Berechtigungen</a></li>
                <li class=\"";
        // line 26
        echo (((is_string($__internal_fc1bbe04f5a7acc36bbbcc0d1dac7cc26a107faad3eb970ac5d5056fedf7f700 = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_1868f3ffa613b9aade5eea4a55f2ed81276f9347fc719c8ef3b0de65de9dd109 = "npoa_security_entitypermission_") && ('' === $__internal_1868f3ffa613b9aade5eea4a55f2ed81276f9347fc719c8ef3b0de65de9dd109 || 0 === strpos($__internal_fc1bbe04f5a7acc36bbbcc0d1dac7cc26a107faad3eb970ac5d5056fedf7f700, $__internal_1868f3ffa613b9aade5eea4a55f2ed81276f9347fc719c8ef3b0de65de9dd109)))) ? ("active") : (""));
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
        return "NpoaSecurityBundle:common:template_dashboard.html.twig";
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
        return new Twig_Source("", "NpoaSecurityBundle:common:template_dashboard.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle/Resources/views/common/template_dashboard.html.twig");
    }
}
