<?php

/* @NpoaSecurity/common/template.html.twig */
class __TwigTemplate_dd6ba182538247ba9e6695b1a6a39a8b1fc45677f7dc776d830c97de5d3dc7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de\" xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <title>NPOA Security</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('scripts', $context, $blocks);
        // line 30
        echo "</head>
<body>

";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
<script language=\"javascript\">
    \$(function () {
        \$.material.init();
    });
</script>

</body>
</html>
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/vendor/bootstrap/dist/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/vendor/font-awesome/css/font-awesome.min.css\" />
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/vendor/bootstrap-material-design/dist/css/bootstrap-material-design.min.css\" />
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/vendor/filament-tablesaw/dist/tablesaw.css\" />
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/css/default.css\" />
    ";
    }

    // line 18
    public function block_scripts($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c039e8b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl_jquery.min_1.js");
            // line 27
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c039e8b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl_bootstrap.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c039e8b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl_nouislider.min_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c039e8b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl_material.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c039e8b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl_tablesaw_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c039e8b_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl_tablesaw-init_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "c039e8b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "    ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@NpoaSecurity/common/template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 33,  124 => 29,  80 => 27,  75 => 19,  72 => 18,  63 => 11,  60 => 10,  47 => 34,  45 => 33,  40 => 30,  38 => 18,  35 => 17,  33 => 10,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NpoaSecurity/common/template.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\common\\template.html.twig");
    }
}
