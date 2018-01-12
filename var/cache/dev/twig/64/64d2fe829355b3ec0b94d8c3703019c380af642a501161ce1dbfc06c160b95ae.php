<?php

/* @NpoaSecurity/common/template.html.twig */
class __TwigTemplate_529fe645eaead59e6836d4e330bc06c07a1b0f2e9a41804cab0a74473b1544b7 extends Twig_Template
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
        $__internal_b9c14c21c201d1bff60e6a2aa808c01400f272dc06e2c313b1c5b442112360d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c14c21c201d1bff60e6a2aa808c01400f272dc06e2c313b1c5b442112360d4->enter($__internal_b9c14c21c201d1bff60e6a2aa808c01400f272dc06e2c313b1c5b442112360d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NpoaSecurity/common/template.html.twig"));

        $__internal_286b4cb98156204f075314d83bd539f11312a7685ea18651a736273ef8eb5003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286b4cb98156204f075314d83bd539f11312a7685ea18651a736273ef8eb5003->enter($__internal_286b4cb98156204f075314d83bd539f11312a7685ea18651a736273ef8eb5003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NpoaSecurity/common/template.html.twig"));

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
        
        $__internal_b9c14c21c201d1bff60e6a2aa808c01400f272dc06e2c313b1c5b442112360d4->leave($__internal_b9c14c21c201d1bff60e6a2aa808c01400f272dc06e2c313b1c5b442112360d4_prof);

        
        $__internal_286b4cb98156204f075314d83bd539f11312a7685ea18651a736273ef8eb5003->leave($__internal_286b4cb98156204f075314d83bd539f11312a7685ea18651a736273ef8eb5003_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a05334f74a57cc0029f7df52dfc05c983a0df55b861f7f04a996375000d6ca96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05334f74a57cc0029f7df52dfc05c983a0df55b861f7f04a996375000d6ca96->enter($__internal_a05334f74a57cc0029f7df52dfc05c983a0df55b861f7f04a996375000d6ca96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a28eaf8bcf0c8f29cb16e332ce6c9123463a0e3f1a3aa0963be60a1a014a3e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28eaf8bcf0c8f29cb16e332ce6c9123463a0e3f1a3aa0963be60a1a014a3e3f->enter($__internal_a28eaf8bcf0c8f29cb16e332ce6c9123463a0e3f1a3aa0963be60a1a014a3e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/vendor/bootstrap/dist/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/vendor/font-awesome/css/font-awesome.min.css\" />
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/vendor/bootstrap-material-design/dist/css/bootstrap-material-design.min.css\" />
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/vendor/filament-tablesaw/dist/tablesaw.css\" />
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/css/default.css\" />
    ";
        
        $__internal_a28eaf8bcf0c8f29cb16e332ce6c9123463a0e3f1a3aa0963be60a1a014a3e3f->leave($__internal_a28eaf8bcf0c8f29cb16e332ce6c9123463a0e3f1a3aa0963be60a1a014a3e3f_prof);

        
        $__internal_a05334f74a57cc0029f7df52dfc05c983a0df55b861f7f04a996375000d6ca96->leave($__internal_a05334f74a57cc0029f7df52dfc05c983a0df55b861f7f04a996375000d6ca96_prof);

    }

    // line 18
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_1022231489be8601895a7faf974313968743c87ea83f117ebad51454e78641b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1022231489be8601895a7faf974313968743c87ea83f117ebad51454e78641b6->enter($__internal_1022231489be8601895a7faf974313968743c87ea83f117ebad51454e78641b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_176f2276d3faa98333d640dbbafd57509fa99da3c0778407eb6d772e6e415ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176f2276d3faa98333d640dbbafd57509fa99da3c0778407eb6d772e6e415ecb->enter($__internal_176f2276d3faa98333d640dbbafd57509fa99da3c0778407eb6d772e6e415ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 19
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c039e8b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl_jquery.min_1.js");
            // line 27
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "c039e8b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl_bootstrap.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "c039e8b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl_nouislider.min_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "c039e8b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl_material.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "c039e8b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl_tablesaw_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "c039e8b_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl_tablesaw-init_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "c039e8b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c039e8b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npoasecurity/js/npo_acl.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "    ";
        
        $__internal_176f2276d3faa98333d640dbbafd57509fa99da3c0778407eb6d772e6e415ecb->leave($__internal_176f2276d3faa98333d640dbbafd57509fa99da3c0778407eb6d772e6e415ecb_prof);

        
        $__internal_1022231489be8601895a7faf974313968743c87ea83f117ebad51454e78641b6->leave($__internal_1022231489be8601895a7faf974313968743c87ea83f117ebad51454e78641b6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9467e7f24d6004be38b7eea705abae94dd270d4700cee00eb6db57db19eee0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9467e7f24d6004be38b7eea705abae94dd270d4700cee00eb6db57db19eee0ae->enter($__internal_9467e7f24d6004be38b7eea705abae94dd270d4700cee00eb6db57db19eee0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7ec6797bf82ec365f0b7a49789345356f2c9543de6037dc066c2aa27a62400b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ec6797bf82ec365f0b7a49789345356f2c9543de6037dc066c2aa27a62400b->enter($__internal_b7ec6797bf82ec365f0b7a49789345356f2c9543de6037dc066c2aa27a62400b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b7ec6797bf82ec365f0b7a49789345356f2c9543de6037dc066c2aa27a62400b->leave($__internal_b7ec6797bf82ec365f0b7a49789345356f2c9543de6037dc066c2aa27a62400b_prof);

        
        $__internal_9467e7f24d6004be38b7eea705abae94dd270d4700cee00eb6db57db19eee0ae->leave($__internal_9467e7f24d6004be38b7eea705abae94dd270d4700cee00eb6db57db19eee0ae_prof);

    }

    public function getTemplateName()
    {
        return "@NpoaSecurity/common/template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  164 => 33,  154 => 29,  110 => 27,  105 => 19,  96 => 18,  81 => 11,  72 => 10,  53 => 34,  51 => 33,  46 => 30,  44 => 18,  41 => 17,  39 => 10,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"de\" xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <title>NPOA Security</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/vendor/bootstrap/dist/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/vendor/font-awesome/css/font-awesome.min.css\" />
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/vendor/bootstrap-material-design/dist/css/bootstrap-material-design.min.css\" />
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/vendor/filament-tablesaw/dist/tablesaw.css\" />
        <link rel=\"stylesheet\" href=\"/bundles/npoasecurity/css/default.css\" />
    {% endblock %}

    {% block scripts %}
        {% javascripts
        '@NpoaSecurityBundle/Resources/public/vendor/jquery/dist/jquery.min.js'
        '@NpoaSecurityBundle/Resources/public/vendor/bootstrap/dist/js/bootstrap.min.js'
        '@NpoaSecurityBundle/Resources/public/vendor/nouislider/distribute/nouislider.min.js'
        '@NpoaSecurityBundle/Resources/public/vendor/bootstrap-material-design/dist/js/material.min.js'
        '@NpoaSecurityBundle/Resources/public/vendor/filament-tablesaw/dist/tablesaw.js'
        '@NpoaSecurityBundle/Resources/public/vendor/filament-tablesaw/dist/tablesaw-init.js'
        filter=\"jsqueeze\" output='bundles/npoasecurity/js/npo_acl.js' %}
        <script src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
    {% endblock %}
</head>
<body>

{% block body %}{% endblock %}

<script language=\"javascript\">
    \$(function () {
        \$.material.init();
    });
</script>

</body>
</html>
", "@NpoaSecurity/common/template.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\common\\template.html.twig");
    }
}
