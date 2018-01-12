<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_b7887c52308473f79f0a69dd7ff785c300ee3cb0fdaa232e4b9655db74222136 extends Twig_Template
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
        $__internal_8d08604921bcbd202fce41100db9c8a7924c843af2f9f78666bf1137f1b8326f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d08604921bcbd202fce41100db9c8a7924c843af2f9f78666bf1137f1b8326f->enter($__internal_8d08604921bcbd202fce41100db9c8a7924c843af2f9f78666bf1137f1b8326f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_ef97283a5acf66cfdec0d1cda75042976695c8ca73a0dec6b1c183ba62bf8904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef97283a5acf66cfdec0d1cda75042976695c8ca73a0dec6b1c183ba62bf8904->enter($__internal_ef97283a5acf66cfdec0d1cda75042976695c8ca73a0dec6b1c183ba62bf8904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

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
        
        $__internal_8d08604921bcbd202fce41100db9c8a7924c843af2f9f78666bf1137f1b8326f->leave($__internal_8d08604921bcbd202fce41100db9c8a7924c843af2f9f78666bf1137f1b8326f_prof);

        
        $__internal_ef97283a5acf66cfdec0d1cda75042976695c8ca73a0dec6b1c183ba62bf8904->leave($__internal_ef97283a5acf66cfdec0d1cda75042976695c8ca73a0dec6b1c183ba62bf8904_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d1cccd3ad68ca7193c7d4e3f53e84445d6c13a527107e1ad4d346f3ec1aa38ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1cccd3ad68ca7193c7d4e3f53e84445d6c13a527107e1ad4d346f3ec1aa38ed->enter($__internal_d1cccd3ad68ca7193c7d4e3f53e84445d6c13a527107e1ad4d346f3ec1aa38ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b47f81dfa8a161046ad09d7339ae57a4208c67f614375cd9b6798d961c346e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47f81dfa8a161046ad09d7339ae57a4208c67f614375cd9b6798d961c346e30->enter($__internal_b47f81dfa8a161046ad09d7339ae57a4208c67f614375cd9b6798d961c346e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/errorpage.css"), "html", null, true);
        echo "\" />
         ";
        
        $__internal_b47f81dfa8a161046ad09d7339ae57a4208c67f614375cd9b6798d961c346e30->leave($__internal_b47f81dfa8a161046ad09d7339ae57a4208c67f614375cd9b6798d961c346e30_prof);

        
        $__internal_d1cccd3ad68ca7193c7d4e3f53e84445d6c13a527107e1ad4d346f3ec1aa38ed->leave($__internal_d1cccd3ad68ca7193c7d4e3f53e84445d6c13a527107e1ad4d346f3ec1aa38ed_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1165e140da945663ca39f2f5a4a8c3beed9a3b6547b5d315f3b1ba45e1e0f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1165e140da945663ca39f2f5a4a8c3beed9a3b6547b5d315f3b1ba45e1e0f62->enter($__internal_b1165e140da945663ca39f2f5a4a8c3beed9a3b6547b5d315f3b1ba45e1e0f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c177379440c03b1d6e8b27a9ec8e5715217da8fad01c62cb1a8a1cb2b2acbd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c177379440c03b1d6e8b27a9ec8e5715217da8fad01c62cb1a8a1cb2b2acbd4a->enter($__internal_c177379440c03b1d6e8b27a9ec8e5715217da8fad01c62cb1a8a1cb2b2acbd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
            <div id=\"wrapper\">
                <div id=\"wrapper_inner\">
                    <div id=\"content\">
                        <h1>Unbekannter Fehler</h1>

                        <p class=\"error\">
                            Ein unbekannter Fehler ist aufgetreten.
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Klicken Sie hier, um zurück zur Startseite zu gelangen</a>.
                        </p>
                    </div>
                </div>
            </div>

        ";
        
        $__internal_c177379440c03b1d6e8b27a9ec8e5715217da8fad01c62cb1a8a1cb2b2acbd4a->leave($__internal_c177379440c03b1d6e8b27a9ec8e5715217da8fad01c62cb1a8a1cb2b2acbd4a_prof);

        
        $__internal_b1165e140da945663ca39f2f5a4a8c3beed9a3b6547b5d315f3b1ba45e1e0f62->leave($__internal_b1165e140da945663ca39f2f5a4a8c3beed9a3b6547b5d315f3b1ba45e1e0f62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
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
                        <h1>Unbekannter Fehler</h1>

                        <p class=\"error\">
                            Ein unbekannter Fehler ist aufgetreten.
                            <a href=\"{{ path('index') }}\">Klicken Sie hier, um zurück zur Startseite zu gelangen</a>.
                        </p>
                    </div>
                </div>
            </div>

        {% endblock %}
    </body>
</html>", "TwigBundle:Exception:error.html.twig", "K:\\Npointern\\app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
