<?php

/* TwigBundle:Exception:error401.html.twig */
class __TwigTemplate_e0bb6fa71a12528bbd28dfc9da1935bd4785ce4696344d3727ce9bd4b1601b58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eeca054df3c86c3f2c747a5672402a9412106e4a3154ce4bdcee31a402e7e46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeca054df3c86c3f2c747a5672402a9412106e4a3154ce4bdcee31a402e7e46c->enter($__internal_eeca054df3c86c3f2c747a5672402a9412106e4a3154ce4bdcee31a402e7e46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error401.html.twig"));

        $__internal_32e5fe56ad988968cadf9b3deb9f6445277d3f86539931bc6693f330dfc69dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e5fe56ad988968cadf9b3deb9f6445277d3f86539931bc6693f330dfc69dd0->enter($__internal_32e5fe56ad988968cadf9b3deb9f6445277d3f86539931bc6693f330dfc69dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error401.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"de\">
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=10, user-scalable=yes\">
        <title>Da ist etwas schief gegangen!</title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "    </body>
</html>";
        
        $__internal_eeca054df3c86c3f2c747a5672402a9412106e4a3154ce4bdcee31a402e7e46c->leave($__internal_eeca054df3c86c3f2c747a5672402a9412106e4a3154ce4bdcee31a402e7e46c_prof);

        
        $__internal_32e5fe56ad988968cadf9b3deb9f6445277d3f86539931bc6693f330dfc69dd0->leave($__internal_32e5fe56ad988968cadf9b3deb9f6445277d3f86539931bc6693f330dfc69dd0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8886ed9505bb7e1d2e8046e844780a3391a8c47264350e384e8b2690e8912032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8886ed9505bb7e1d2e8046e844780a3391a8c47264350e384e8b2690e8912032->enter($__internal_8886ed9505bb7e1d2e8046e844780a3391a8c47264350e384e8b2690e8912032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6b3bff57bf0b70ff733b363456e12e204c30f30d0cdc0e59795cf6e37ec65cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3bff57bf0b70ff733b363456e12e204c30f30d0cdc0e59795cf6e37ec65cf8->enter($__internal_6b3bff57bf0b70ff733b363456e12e204c30f30d0cdc0e59795cf6e37ec65cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/errorpage.css"), "html", null, true);
        echo "\" />
         ";
        
        $__internal_6b3bff57bf0b70ff733b363456e12e204c30f30d0cdc0e59795cf6e37ec65cf8->leave($__internal_6b3bff57bf0b70ff733b363456e12e204c30f30d0cdc0e59795cf6e37ec65cf8_prof);

        
        $__internal_8886ed9505bb7e1d2e8046e844780a3391a8c47264350e384e8b2690e8912032->leave($__internal_8886ed9505bb7e1d2e8046e844780a3391a8c47264350e384e8b2690e8912032_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_2337b1457e7573d87f8d8687081c0f222c0a880e407d858c373f13ecca0722c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2337b1457e7573d87f8d8687081c0f222c0a880e407d858c373f13ecca0722c1->enter($__internal_2337b1457e7573d87f8d8687081c0f222c0a880e407d858c373f13ecca0722c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2fa174f1a67973e577d60b4ecbc8e8832e3e98ced4ae25c2173fa7b00e02cc76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa174f1a67973e577d60b4ecbc8e8832e3e98ced4ae25c2173fa7b00e02cc76->enter($__internal_2fa174f1a67973e577d60b4ecbc8e8832e3e98ced4ae25c2173fa7b00e02cc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
            <div id=\"wrapper\">
                <div id=\"wrapper_inner\">
                    <div id=\"content\">
                        <h1>Loginfehler</h1>

                        <p class=\"error\">
                            Sie müssen eingeloggt sein, um auf diese Seite zuzugreifen.
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Klicken Sie hier, um zurück zur Startseite zu gelangen</a>.
                        </p>
                    </div>
                </div>
            </div>

        ";
        
        $__internal_2fa174f1a67973e577d60b4ecbc8e8832e3e98ced4ae25c2173fa7b00e02cc76->leave($__internal_2fa174f1a67973e577d60b4ecbc8e8832e3e98ced4ae25c2173fa7b00e02cc76_prof);

        
        $__internal_2337b1457e7573d87f8d8687081c0f222c0a880e407d858c373f13ecca0722c1->leave($__internal_2337b1457e7573d87f8d8687081c0f222c0a880e407d858c373f13ecca0722c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error401.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  88 => 16,  79 => 15,  66 => 11,  57 => 10,  46 => 31,  44 => 15,  40 => 13,  38 => 10,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html lang=\"de\">
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=10, user-scalable=yes\">
        <title>Da ist etwas schief gegangen!</title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/errorpage.css') }}\" />
         {% endblock %}
    </head>
    <body>
        {% block body %}

            <div id=\"wrapper\">
                <div id=\"wrapper_inner\">
                    <div id=\"content\">
                        <h1>Loginfehler</h1>

                        <p class=\"error\">
                            Sie müssen eingeloggt sein, um auf diese Seite zuzugreifen.
                            <a href=\"{{ path('index') }}\">Klicken Sie hier, um zurück zur Startseite zu gelangen</a>.
                        </p>
                    </div>
                </div>
            </div>

        {% endblock %}
    </body>
</html>", "TwigBundle:Exception:error401.html.twig", "K:\\Npointern\\app/Resources/TwigBundle/views/Exception/error401.html.twig");
    }
}
