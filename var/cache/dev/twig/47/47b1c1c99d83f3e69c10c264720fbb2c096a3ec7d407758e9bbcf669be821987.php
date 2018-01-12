<?php

/* :index:index.html.twig */
class __TwigTemplate_482f2f39db6dbf551389273fc212c6907d403e9cf4dda1ea40a177ba297ee4fb extends Twig_Template
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
        $__internal_4a81f610150f1abc2468a322cfb5fdddf184e979da8a6b972aa20075ebc1d1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a81f610150f1abc2468a322cfb5fdddf184e979da8a6b972aa20075ebc1d1c9->enter($__internal_4a81f610150f1abc2468a322cfb5fdddf184e979da8a6b972aa20075ebc1d1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:index.html.twig"));

        $__internal_b51df24b780a4a9f69ba807c82f540f0c8d1f929e79076b90312bbde2f54a144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51df24b780a4a9f69ba807c82f540f0c8d1f929e79076b90312bbde2f54a144->enter($__internal_b51df24b780a4a9f69ba807c82f540f0c8d1f929e79076b90312bbde2f54a144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:index.html.twig"));

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
        
        $__internal_4a81f610150f1abc2468a322cfb5fdddf184e979da8a6b972aa20075ebc1d1c9->leave($__internal_4a81f610150f1abc2468a322cfb5fdddf184e979da8a6b972aa20075ebc1d1c9_prof);

        
        $__internal_b51df24b780a4a9f69ba807c82f540f0c8d1f929e79076b90312bbde2f54a144->leave($__internal_b51df24b780a4a9f69ba807c82f540f0c8d1f929e79076b90312bbde2f54a144_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bdd471e2753edc11b4246d75385861cd8fa6271423adb5177b9dd193dc6b0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdd471e2753edc11b4246d75385861cd8fa6271423adb5177b9dd193dc6b0d8->enter($__internal_3bdd471e2753edc11b4246d75385861cd8fa6271423adb5177b9dd193dc6b0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0c4e519470d359cec7e8b7df11bb200498819ecc296c295bb7d494a044ac410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c4e519470d359cec7e8b7df11bb200498819ecc296c295bb7d494a044ac410->enter($__internal_f0c4e519470d359cec7e8b7df11bb200498819ecc296c295bb7d494a044ac410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        
        $__internal_f0c4e519470d359cec7e8b7df11bb200498819ecc296c295bb7d494a044ac410->leave($__internal_f0c4e519470d359cec7e8b7df11bb200498819ecc296c295bb7d494a044ac410_prof);

        
        $__internal_3bdd471e2753edc11b4246d75385861cd8fa6271423adb5177b9dd193dc6b0d8->leave($__internal_3bdd471e2753edc11b4246d75385861cd8fa6271423adb5177b9dd193dc6b0d8_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1825c706ce1097e3b5859a7e68eabf35bf81c14e0315a17b9082f2d880d65da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1825c706ce1097e3b5859a7e68eabf35bf81c14e0315a17b9082f2d880d65da5->enter($__internal_1825c706ce1097e3b5859a7e68eabf35bf81c14e0315a17b9082f2d880d65da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bd8c71c299f2f102f137aa5be7e9a3209fc11078842fea6f91c4e3ec7a975c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8c71c299f2f102f137aa5be7e9a3209fc11078842fea6f91c4e3ec7a975c17->enter($__internal_bd8c71c299f2f102f137aa5be7e9a3209fc11078842fea6f91c4e3ec7a975c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bd8c71c299f2f102f137aa5be7e9a3209fc11078842fea6f91c4e3ec7a975c17->leave($__internal_bd8c71c299f2f102f137aa5be7e9a3209fc11078842fea6f91c4e3ec7a975c17_prof);

        
        $__internal_1825c706ce1097e3b5859a7e68eabf35bf81c14e0315a17b9082f2d880d65da5->leave($__internal_1825c706ce1097e3b5859a7e68eabf35bf81c14e0315a17b9082f2d880d65da5_prof);

    }

    // line 21
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_28bf67fedb800b7fb87df55e028bd7b7c4db61f572c268323c7c348a2036c14a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28bf67fedb800b7fb87df55e028bd7b7c4db61f572c268323c7c348a2036c14a->enter($__internal_28bf67fedb800b7fb87df55e028bd7b7c4db61f572c268323c7c348a2036c14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_77a972662117c4ad830cc63487c498f457c0cf2b22d54ec0b98557787ece4aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a972662117c4ad830cc63487c498f457c0cf2b22d54ec0b98557787ece4aa9->enter($__internal_77a972662117c4ad830cc63487c498f457c0cf2b22d54ec0b98557787ece4aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

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
        
        $__internal_77a972662117c4ad830cc63487c498f457c0cf2b22d54ec0b98557787ece4aa9->leave($__internal_77a972662117c4ad830cc63487c498f457c0cf2b22d54ec0b98557787ece4aa9_prof);

        
        $__internal_28bf67fedb800b7fb87df55e028bd7b7c4db61f572c268323c7c348a2036c14a->leave($__internal_28bf67fedb800b7fb87df55e028bd7b7c4db61f572c268323c7c348a2036c14a_prof);

    }

    // line 37
    public function block_extjs_config($context, array $blocks = array())
    {
        $__internal_81015ef8f445b4f83809e2bd20f4738b54c3a565ff022350f75ea27e7f9771fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81015ef8f445b4f83809e2bd20f4738b54c3a565ff022350f75ea27e7f9771fd->enter($__internal_81015ef8f445b4f83809e2bd20f4738b54c3a565ff022350f75ea27e7f9771fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extjs_config"));

        $__internal_69ed11bf707041ba80bf070d4bceb88e244edc99fd338d3bacf73c84d0aa16ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ed11bf707041ba80bf070d4bceb88e244edc99fd338d3bacf73c84d0aa16ad->enter($__internal_69ed11bf707041ba80bf070d4bceb88e244edc99fd338d3bacf73c84d0aa16ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extjs_config"));

        // line 38
        echo "            ";
        $this->loadTemplate("extjs/config.html.twig", ":index:index.html.twig", 38)->display($context);
        // line 39
        echo "        ";
        
        $__internal_69ed11bf707041ba80bf070d4bceb88e244edc99fd338d3bacf73c84d0aa16ad->leave($__internal_69ed11bf707041ba80bf070d4bceb88e244edc99fd338d3bacf73c84d0aa16ad_prof);

        
        $__internal_81015ef8f445b4f83809e2bd20f4738b54c3a565ff022350f75ea27e7f9771fd->leave($__internal_81015ef8f445b4f83809e2bd20f4738b54c3a565ff022350f75ea27e7f9771fd_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b95dd7201ecf4e5567421bbd0260d755b1e6f388d987b290cc3566cda975f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b95dd7201ecf4e5567421bbd0260d755b1e6f388d987b290cc3566cda975f0d->enter($__internal_0b95dd7201ecf4e5567421bbd0260d755b1e6f388d987b290cc3566cda975f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f17490c78167ee8cea98b194174480fe4ca1d8902d0e10ac1cf0ce9572664c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f17490c78167ee8cea98b194174480fe4ca1d8902d0e10ac1cf0ce9572664c5->enter($__internal_0f17490c78167ee8cea98b194174480fe4ca1d8902d0e10ac1cf0ce9572664c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "    <div id=\"loadingAnimation\">
        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo_kitaplus.png"), "html", null, true);
        echo "\" />
        <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.please_wait"), "html", null, true);
        echo "</p>
    </div>
";
        
        $__internal_0f17490c78167ee8cea98b194174480fe4ca1d8902d0e10ac1cf0ce9572664c5->leave($__internal_0f17490c78167ee8cea98b194174480fe4ca1d8902d0e10ac1cf0ce9572664c5_prof);

        
        $__internal_0b95dd7201ecf4e5567421bbd0260d755b1e6f388d987b290cc3566cda975f0d->leave($__internal_0b95dd7201ecf4e5567421bbd0260d755b1e6f388d987b290cc3566cda975f0d_prof);

    }

    public function getTemplateName()
    {
        return ":index:index.html.twig";
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
        <img src=\"{{ asset('images/logo_kitaplus.png') }}\" />
        <p>{{ 'global.please_wait'|trans }}</p>
    </div>
{% endblock %}

{{ getExtJsSecurityConfig() }}

{{ getSecurityConfigNotifier() }}

</body>
</html>", ":index:index.html.twig", "K:\\Npointern\\app/Resources\\views/index/index.html.twig");
    }
}
