<?php

/* index/index.html.twig */
class __TwigTemplate_cdab4b8830ecd119c19a75ef69f5d4c1772674d48e6442fcc9391481035bde87 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE HTML>
";
        // line 2
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "environment", array()) == "dev")) {
            // line 3
            echo "    <html lang=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "locale", array()), "html", null, true);
            echo "\">
";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 4
($context["app"] ?? null), "environment", array()) == "prod")) {
            // line 5
            echo "    <html lang=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "locale", array()), "html", null, true);
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
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter(($context["title"] ?? null), "")) : ("")), "html", null, true);
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2f0f7d2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f0f7d2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dist/app_app_1.css");
            // line 17
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "2f0f7d2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f0f7d2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dist/app.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "    ";
    }

    // line 21
    public function block_scripts($context, array $blocks = array())
    {
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
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "environment", array()) == "dev")) {
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
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "environment", array()) == "dev")) {
            // line 41
            echo "            <script id=\"microloader\" data-app=\"606908e1-2218-4105-a24e-7ed5b71ade66\" type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ext-app/bootstrap.js"), "html", null, true);
            echo "\"></script>
        ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 42
($context["app"] ?? null), "environment", array()) == "prod")) {
            // line 43
            echo "            <script id=\"microloader\" data-app=\"606908e1-2218-4105-a24e-7ed5b71ade66\" type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ext-app/build/production/NpoaApp/microloader.js"), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 45
        echo "    ";
    }

    // line 37
    public function block_extjs_config($context, array $blocks = array())
    {
        // line 38
        echo "            ";
        $this->loadTemplate("extjs/config.html.twig", "index/index.html.twig", 38)->display($context);
        // line 39
        echo "        ";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
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
        return array (  189 => 52,  185 => 51,  182 => 50,  179 => 49,  175 => 39,  172 => 38,  169 => 37,  165 => 45,  159 => 43,  157 => 42,  152 => 41,  149 => 40,  147 => 37,  138 => 34,  124 => 23,  119 => 22,  116 => 21,  112 => 19,  98 => 17,  93 => 15,  90 => 14,  84 => 12,  76 => 58,  71 => 56,  68 => 55,  66 => 49,  61 => 46,  59 => 21,  56 => 20,  54 => 14,  49 => 12,  42 => 7,  36 => 5,  34 => 4,  29 => 3,  27 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index/index.html.twig", "K:\\Npointern\\app\\Resources\\views\\index\\index.html.twig");
    }
}
