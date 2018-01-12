<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_48745e9eed53ffcb63b62b145706ff0ac49a9467f6e947accfaa7e4095a11698 extends Twig_Template
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
        $__internal_3bb8c6cbad14255dc9469d1312f81e9ee7ff4ce9da0a0bb2ec4bf261cecad48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb8c6cbad14255dc9469d1312f81e9ee7ff4ce9da0a0bb2ec4bf261cecad48b->enter($__internal_3bb8c6cbad14255dc9469d1312f81e9ee7ff4ce9da0a0bb2ec4bf261cecad48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $__internal_669839ce71e4c42b44b638f790e5c44b7f9df2adabf65149175b877e7e55760b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669839ce71e4c42b44b638f790e5c44b7f9df2adabf65149175b877e7e55760b->enter($__internal_669839ce71e4c42b44b638f790e5c44b7f9df2adabf65149175b877e7e55760b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

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
        
        $__internal_3bb8c6cbad14255dc9469d1312f81e9ee7ff4ce9da0a0bb2ec4bf261cecad48b->leave($__internal_3bb8c6cbad14255dc9469d1312f81e9ee7ff4ce9da0a0bb2ec4bf261cecad48b_prof);

        
        $__internal_669839ce71e4c42b44b638f790e5c44b7f9df2adabf65149175b877e7e55760b->leave($__internal_669839ce71e4c42b44b638f790e5c44b7f9df2adabf65149175b877e7e55760b_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9024b2f69c1c43bc0ffee972802e3db2f99b73786b646e9454f943be38992d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9024b2f69c1c43bc0ffee972802e3db2f99b73786b646e9454f943be38992d6->enter($__internal_e9024b2f69c1c43bc0ffee972802e3db2f99b73786b646e9454f943be38992d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e6306fd027bd5eb06427526b41c4d6f08548d71cb86811fa30b635e45823e17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6306fd027bd5eb06427526b41c4d6f08548d71cb86811fa30b635e45823e17e->enter($__internal_e6306fd027bd5eb06427526b41c4d6f08548d71cb86811fa30b635e45823e17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/errorpage.css"), "html", null, true);
        echo "\" />
         ";
        
        $__internal_e6306fd027bd5eb06427526b41c4d6f08548d71cb86811fa30b635e45823e17e->leave($__internal_e6306fd027bd5eb06427526b41c4d6f08548d71cb86811fa30b635e45823e17e_prof);

        
        $__internal_e9024b2f69c1c43bc0ffee972802e3db2f99b73786b646e9454f943be38992d6->leave($__internal_e9024b2f69c1c43bc0ffee972802e3db2f99b73786b646e9454f943be38992d6_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bcff9eab94e16855d2aa0a07494e2efde7242cb8f612fd9d6a8f763ec73363f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bcff9eab94e16855d2aa0a07494e2efde7242cb8f612fd9d6a8f763ec73363f->enter($__internal_8bcff9eab94e16855d2aa0a07494e2efde7242cb8f612fd9d6a8f763ec73363f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_045d6e59580060c0c5d6893c340297aa1999aa2c52b45f5221aea84a04c0b989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045d6e59580060c0c5d6893c340297aa1999aa2c52b45f5221aea84a04c0b989->enter($__internal_045d6e59580060c0c5d6893c340297aa1999aa2c52b45f5221aea84a04c0b989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
            <div id=\"wrapper\">
                <div id=\"wrapper_inner\">
                    <div id=\"content\">
                        <h1>Zugriff verweigert</h1>

                        <p class=\"error\">
                            Sie haben keinen Zugriff auf diese Seite.
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Klicken Sie hier, um zurück zur Startseite zu gelangen</a>.
                        </p>
                    </div>
                </div>
            </div>

        ";
        
        $__internal_045d6e59580060c0c5d6893c340297aa1999aa2c52b45f5221aea84a04c0b989->leave($__internal_045d6e59580060c0c5d6893c340297aa1999aa2c52b45f5221aea84a04c0b989_prof);

        
        $__internal_8bcff9eab94e16855d2aa0a07494e2efde7242cb8f612fd9d6a8f763ec73363f->leave($__internal_8bcff9eab94e16855d2aa0a07494e2efde7242cb8f612fd9d6a8f763ec73363f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
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
                        <h1>Zugriff verweigert</h1>

                        <p class=\"error\">
                            Sie haben keinen Zugriff auf diese Seite.
                            <a href=\"{{ path('index') }}\">Klicken Sie hier, um zurück zur Startseite zu gelangen</a>.
                        </p>
                    </div>
                </div>
            </div>

        {% endblock %}
    </body>
</html>", "TwigBundle:Exception:error403.html.twig", "K:\\Npointern\\app/Resources/TwigBundle/views/Exception/error403.html.twig");
    }
}
