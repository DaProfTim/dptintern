<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_1d6d974920125c646739282d3d1cb2a3997379e34a82c043317648bd10c7273c extends Twig_Template
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
        $__internal_a2cecad616a79d1bfd0decac059fb36ed7cd3531d33df88c61e185e6aa9d9f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2cecad616a79d1bfd0decac059fb36ed7cd3531d33df88c61e185e6aa9d9f6c->enter($__internal_a2cecad616a79d1bfd0decac059fb36ed7cd3531d33df88c61e185e6aa9d9f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $__internal_b1e6703b2b2ac727d3239ee0b82afabdefabc4f2dff7db5288b2da5cc2d25827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e6703b2b2ac727d3239ee0b82afabdefabc4f2dff7db5288b2da5cc2d25827->enter($__internal_b1e6703b2b2ac727d3239ee0b82afabdefabc4f2dff7db5288b2da5cc2d25827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

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
        
        $__internal_a2cecad616a79d1bfd0decac059fb36ed7cd3531d33df88c61e185e6aa9d9f6c->leave($__internal_a2cecad616a79d1bfd0decac059fb36ed7cd3531d33df88c61e185e6aa9d9f6c_prof);

        
        $__internal_b1e6703b2b2ac727d3239ee0b82afabdefabc4f2dff7db5288b2da5cc2d25827->leave($__internal_b1e6703b2b2ac727d3239ee0b82afabdefabc4f2dff7db5288b2da5cc2d25827_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6900a85535cc08d9ecd3fcf0bf0c5a2c6cfe7239401244719390e7b9a2594969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6900a85535cc08d9ecd3fcf0bf0c5a2c6cfe7239401244719390e7b9a2594969->enter($__internal_6900a85535cc08d9ecd3fcf0bf0c5a2c6cfe7239401244719390e7b9a2594969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a2991f6a9889e1dcf4d6599f1c9e7711f0eb0ca040a3ad016ae039941e26678e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2991f6a9889e1dcf4d6599f1c9e7711f0eb0ca040a3ad016ae039941e26678e->enter($__internal_a2991f6a9889e1dcf4d6599f1c9e7711f0eb0ca040a3ad016ae039941e26678e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/errorpage.css"), "html", null, true);
        echo "\" />
         ";
        
        $__internal_a2991f6a9889e1dcf4d6599f1c9e7711f0eb0ca040a3ad016ae039941e26678e->leave($__internal_a2991f6a9889e1dcf4d6599f1c9e7711f0eb0ca040a3ad016ae039941e26678e_prof);

        
        $__internal_6900a85535cc08d9ecd3fcf0bf0c5a2c6cfe7239401244719390e7b9a2594969->leave($__internal_6900a85535cc08d9ecd3fcf0bf0c5a2c6cfe7239401244719390e7b9a2594969_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_acfa949be9c68b384a85ad8e07a5922cce502870ff65c79354f65d832243c07a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfa949be9c68b384a85ad8e07a5922cce502870ff65c79354f65d832243c07a->enter($__internal_acfa949be9c68b384a85ad8e07a5922cce502870ff65c79354f65d832243c07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a5f42b84803c4f349ca76061eb87e47c80280844cac2e48331bea066230a232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5f42b84803c4f349ca76061eb87e47c80280844cac2e48331bea066230a232->enter($__internal_1a5f42b84803c4f349ca76061eb87e47c80280844cac2e48331bea066230a232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
            <div id=\"wrapper\">
                <div id=\"wrapper_inner\">
                    <div id=\"content\">
                        <h1>Serverfehler</h1>

                        <p class=\"error\">
                            Auf dem Server ist ein Fehler aufgetreten. Bitte versuchen Sie es in einigen Minuten eventuell noch einmal.
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Klicken Sie hier, um zurück zur Startseite zu gelangen</a>.
                        </p>
                    </div>
                </div>
            </div>

        ";
        
        $__internal_1a5f42b84803c4f349ca76061eb87e47c80280844cac2e48331bea066230a232->leave($__internal_1a5f42b84803c4f349ca76061eb87e47c80280844cac2e48331bea066230a232_prof);

        
        $__internal_acfa949be9c68b384a85ad8e07a5922cce502870ff65c79354f65d832243c07a->leave($__internal_acfa949be9c68b384a85ad8e07a5922cce502870ff65c79354f65d832243c07a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
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
                        <h1>Serverfehler</h1>

                        <p class=\"error\">
                            Auf dem Server ist ein Fehler aufgetreten. Bitte versuchen Sie es in einigen Minuten eventuell noch einmal.
                            <a href=\"{{ path('index') }}\">Klicken Sie hier, um zurück zur Startseite zu gelangen</a>.
                        </p>
                    </div>
                </div>
            </div>

        {% endblock %}
    </body>
</html>", "TwigBundle:Exception:error500.html.twig", "K:\\Npointern\\app/Resources/TwigBundle/views/Exception/error500.html.twig");
    }
}
