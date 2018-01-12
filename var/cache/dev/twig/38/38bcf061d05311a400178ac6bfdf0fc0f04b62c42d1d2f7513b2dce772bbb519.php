<?php

/* index/index.html.twig */
class __TwigTemplate_ac050b770c44ef71b5b0e8a8ce1e42eb0408092aafe14cdb505c5f1ce2c37182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'scripts' => array($this, 'block_scripts'),
            'extjs_config' => array($this, 'block_extjs_config'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a59e9cd9ca547abcc7d7b24d26ba8bc4a3a78114534085af5c09fe1ee92d7e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59e9cd9ca547abcc7d7b24d26ba8bc4a3a78114534085af5c09fe1ee92d7e6b->enter($__internal_a59e9cd9ca547abcc7d7b24d26ba8bc4a3a78114534085af5c09fe1ee92d7e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_8b9947e258a6c6e8da244647100c567cb3b1b7521819b0351f330e76a66f5217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9947e258a6c6e8da244647100c567cb3b1b7521819b0351f330e76a66f5217->enter($__internal_8b9947e258a6c6e8da244647100c567cb3b1b7521819b0351f330e76a66f5217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
";
        // line 2
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "environment", array()) == "dev")) {
            // line 3
            echo "    <html lang=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
            echo "\">
";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 4
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "environment", array()) == "prod")) {
            // line 5
            echo "    <html lang=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
            echo "\">
";
        }
        // line 7
        echo "<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=10, user-scalable=yes\">
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('scripts', $context, $blocks);
        // line 46
        echo "</head>
<body>

";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        echo $this->env->getExtension('Npoa\SecurityBundle\Services\TwigExtension')->getExtJsSecurityConfig($this->env);
        echo "

";
        // line 58
        echo $this->env->getExtension('Npoa\SecurityBundle\Services\TwigExtension')->getSecurityConfigNotifier($this->env);
        echo "

</body>
</html>";
        
        $__internal_a59e9cd9ca547abcc7d7b24d26ba8bc4a3a78114534085af5c09fe1ee92d7e6b->leave($__internal_a59e9cd9ca547abcc7d7b24d26ba8bc4a3a78114534085af5c09fe1ee92d7e6b_prof);

        
        $__internal_8b9947e258a6c6e8da244647100c567cb3b1b7521819b0351f330e76a66f5217->leave($__internal_8b9947e258a6c6e8da244647100c567cb3b1b7521819b0351f330e76a66f5217_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_032c65a1341c6e0153cae752bf2ff6866076d763e2c8433d1c43aa0286e0d84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032c65a1341c6e0153cae752bf2ff6866076d763e2c8433d1c43aa0286e0d84e->enter($__internal_032c65a1341c6e0153cae752bf2ff6866076d763e2c8433d1c43aa0286e0d84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0272c82bddc878de4e4360f3157e5bd5b735a0e61cb798ff7eedbf2ccc0e75af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0272c82bddc878de4e4360f3157e5bd5b735a0e61cb798ff7eedbf2ccc0e75af->enter($__internal_0272c82bddc878de4e4360f3157e5bd5b735a0e61cb798ff7eedbf2ccc0e75af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        
        $__internal_0272c82bddc878de4e4360f3157e5bd5b735a0e61cb798ff7eedbf2ccc0e75af->leave($__internal_0272c82bddc878de4e4360f3157e5bd5b735a0e61cb798ff7eedbf2ccc0e75af_prof);

        
        $__internal_032c65a1341c6e0153cae752bf2ff6866076d763e2c8433d1c43aa0286e0d84e->leave($__internal_032c65a1341c6e0153cae752bf2ff6866076d763e2c8433d1c43aa0286e0d84e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6c70c63f2cecc47ab1d397b706fa859bfe58b46f6920a3930e247dbd3f91e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c70c63f2cecc47ab1d397b706fa859bfe58b46f6920a3930e247dbd3f91e74->enter($__internal_d6c70c63f2cecc47ab1d397b706fa859bfe58b46f6920a3930e247dbd3f91e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_07cf0a64bedf53edf4cb18b25b8dbc427dd36c8554d6ef9dbd9d80d20e9db793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cf0a64bedf53edf4cb18b25b8dbc427dd36c8554d6ef9dbd9d80d20e9db793->enter($__internal_07cf0a64bedf53edf4cb18b25b8dbc427dd36c8554d6ef9dbd9d80d20e9db793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2f0f7d2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f0f7d2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dist/app_app_1.css");
            // line 17
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "2f0f7d2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f0f7d2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dist/app.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "    ";
        
        $__internal_07cf0a64bedf53edf4cb18b25b8dbc427dd36c8554d6ef9dbd9d80d20e9db793->leave($__internal_07cf0a64bedf53edf4cb18b25b8dbc427dd36c8554d6ef9dbd9d80d20e9db793_prof);

        
        $__internal_d6c70c63f2cecc47ab1d397b706fa859bfe58b46f6920a3930e247dbd3f91e74->leave($__internal_d6c70c63f2cecc47ab1d397b706fa859bfe58b46f6920a3930e247dbd3f91e74_prof);

    }

    // line 21
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_f8109a44f3752a7ad7eb90a856f23cf07b477f6975cdd340299f3097a70aa8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8109a44f3752a7ad7eb90a856f23cf07b477f6975cdd340299f3097a70aa8e5->enter($__internal_f8109a44f3752a7ad7eb90a856f23cf07b477f6975cdd340299f3097a70aa8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_ac273ed42c62f9711eba05a9dae10131de820aa6f49e94b8e6770dfbdd849cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac273ed42c62f9711eba05a9dae10131de820aa6f49e94b8e6770dfbdd849cc9->enter($__internal_ac273ed42c62f9711eba05a9dae10131de820aa6f49e94b8e6770dfbdd849cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 22
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script type=\"text/javascript\">
            var Ext = Ext || {}; // Ext namespace won't be defined yet...

            // This function is called by the Microloader after it has performed basic
            // device detection. The results are provided in the \"tags\" object. You can
            // use these tags here or even add custom tags. These can be used by platform
            // filters in your manifest or by platformConfig expressions in your app.
            //
            Ext.beforeLoad = function (tags) {
                Ext.manifest = 'classic';
                Ext.manifest = '/ext-app/";
        // line 34
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->getSourceContext()); })()), "environment", array()) == "dev")) {
        } else {
            echo "build/production/NpoaApp/";
        }
        echo "' + Ext.manifest;
            };
        </script>
        ";
        // line 37
        $this->displayBlock('extjs_config', $context, $blocks);
        // line 40
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->getSourceContext()); })()), "environment", array()) == "dev")) {
            // line 41
            echo "            <script id=\"microloader\" data-app=\"606908e1-2218-4105-a24e-7ed5b71ade66\" type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ext-app/bootstrap.js"), "html", null, true);
            echo "\"></script>
        ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 42
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->getSourceContext()); })()), "environment", array()) == "prod")) {
            // line 43
            echo "            <script id=\"microloader\" data-app=\"606908e1-2218-4105-a24e-7ed5b71ade66\" type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ext-app/build/production/NpoaApp/microloader.js"), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 45
        echo "    ";
        
        $__internal_ac273ed42c62f9711eba05a9dae10131de820aa6f49e94b8e6770dfbdd849cc9->leave($__internal_ac273ed42c62f9711eba05a9dae10131de820aa6f49e94b8e6770dfbdd849cc9_prof);

        
        $__internal_f8109a44f3752a7ad7eb90a856f23cf07b477f6975cdd340299f3097a70aa8e5->leave($__internal_f8109a44f3752a7ad7eb90a856f23cf07b477f6975cdd340299f3097a70aa8e5_prof);

    }

    // line 37
    public function block_extjs_config($context, array $blocks = array())
    {
        $__internal_b5244ddbec572e476f1f7f0ef53efce661c0f3051b7df3e5b1f324410cd9851c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5244ddbec572e476f1f7f0ef53efce661c0f3051b7df3e5b1f324410cd9851c->enter($__internal_b5244ddbec572e476f1f7f0ef53efce661c0f3051b7df3e5b1f324410cd9851c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extjs_config"));

        $__internal_73869fd85cce7eb98b2e4b15d0af5f89c69f50e4dc7fa4b806351db2f1fffd54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73869fd85cce7eb98b2e4b15d0af5f89c69f50e4dc7fa4b806351db2f1fffd54->enter($__internal_73869fd85cce7eb98b2e4b15d0af5f89c69f50e4dc7fa4b806351db2f1fffd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extjs_config"));

        // line 38
        echo "            ";
        $this->loadTemplate("extjs/config.html.twig", "index/index.html.twig", 38)->display($context);
        // line 39
        echo "        ";
        
        $__internal_73869fd85cce7eb98b2e4b15d0af5f89c69f50e4dc7fa4b806351db2f1fffd54->leave($__internal_73869fd85cce7eb98b2e4b15d0af5f89c69f50e4dc7fa4b806351db2f1fffd54_prof);

        
        $__internal_b5244ddbec572e476f1f7f0ef53efce661c0f3051b7df3e5b1f324410cd9851c->leave($__internal_b5244ddbec572e476f1f7f0ef53efce661c0f3051b7df3e5b1f324410cd9851c_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_7698f70b99d163e23cffa16c751743aced53d002ca9a13843116d8c3cd7c2fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7698f70b99d163e23cffa16c751743aced53d002ca9a13843116d8c3cd7c2fa0->enter($__internal_7698f70b99d163e23cffa16c751743aced53d002ca9a13843116d8c3cd7c2fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_543ac4b01629d165121fbc75434b0528db3a393c55f4e47f0763b47c8433c324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543ac4b01629d165121fbc75434b0528db3a393c55f4e47f0763b47c8433c324->enter($__internal_543ac4b01629d165121fbc75434b0528db3a393c55f4e47f0763b47c8433c324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "    <div id=\"loadingAnimation\">
        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/npoa_logo.png"), "html", null, true);
        echo "\" />
        <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.please_wait"), "html", null, true);
        echo "</p>
    </div>
";
        
        $__internal_543ac4b01629d165121fbc75434b0528db3a393c55f4e47f0763b47c8433c324->leave($__internal_543ac4b01629d165121fbc75434b0528db3a393c55f4e47f0763b47c8433c324_prof);

        
        $__internal_7698f70b99d163e23cffa16c751743aced53d002ca9a13843116d8c3cd7c2fa0->leave($__internal_7698f70b99d163e23cffa16c751743aced53d002ca9a13843116d8c3cd7c2fa0_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 52,  251 => 51,  248 => 50,  239 => 49,  229 => 39,  226 => 38,  217 => 37,  207 => 45,  201 => 43,  199 => 42,  194 => 41,  191 => 40,  189 => 37,  180 => 34,  166 => 23,  161 => 22,  152 => 21,  142 => 19,  128 => 17,  123 => 15,  114 => 14,  96 => 12,  82 => 58,  77 => 56,  74 => 55,  72 => 49,  67 => 46,  65 => 21,  62 => 20,  60 => 14,  55 => 12,  48 => 7,  42 => 5,  40 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
{% if app.environment == 'dev' %}
    <html lang=\"{{ app.request.locale }}\">
{% elseif app.environment == 'prod' %}
    <html lang=\"{{ app.request.locale }}\">
{% endif %}
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=10, user-scalable=yes\">
    <title>{% block title %}{{ title | default(\"\") }}{% endblock %}</title>

    {% block stylesheets %}
        {% stylesheets output='css/dist/app.css'
            'css/app.css' filter='cssrewrite,scssphp' %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
        {% endstylesheets %}
    {% endblock %}

    {% block scripts %}
        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>
        <script type=\"text/javascript\">
            var Ext = Ext || {}; // Ext namespace won't be defined yet...

            // This function is called by the Microloader after it has performed basic
            // device detection. The results are provided in the \"tags\" object. You can
            // use these tags here or even add custom tags. These can be used by platform
            // filters in your manifest or by platformConfig expressions in your app.
            //
            Ext.beforeLoad = function (tags) {
                Ext.manifest = 'classic';
                Ext.manifest = '/ext-app/{% if app.environment == 'dev' %}{% else %}build/production/NpoaApp/{% endif %}' + Ext.manifest;
            };
        </script>
        {% block extjs_config %}
            {% include 'extjs/config.html.twig' %}
        {% endblock %}
        {% if app.environment == 'dev' %}
            <script id=\"microloader\" data-app=\"606908e1-2218-4105-a24e-7ed5b71ade66\" type=\"text/javascript\" src=\"{{ asset('ext-app/bootstrap.js') }}\"></script>
        {% elseif app.environment == 'prod' %}
            <script id=\"microloader\" data-app=\"606908e1-2218-4105-a24e-7ed5b71ade66\" type=\"text/javascript\" src=\"{{ asset('ext-app/build/production/NpoaApp/microloader.js') }}\"></script>
        {% endif %}
    {% endblock %}
</head>
<body>

{% block body %}
    <div id=\"loadingAnimation\">
        <img src=\"{{ asset('images/npoa_logo.png') }}\" />
        <p>{{ 'global.please_wait'|trans }}</p>
    </div>
{% endblock %}

{{ getExtJsSecurityConfig() }}

{{ getSecurityConfigNotifier() }}

</body>
</html>", "index/index.html.twig", "K:\\Npointern\\app\\Resources\\views\\index\\index.html.twig");
    }
}
