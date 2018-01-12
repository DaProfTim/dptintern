<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_19d0cb7ecd4904c15dbeb4b0a1ca32a368da9cb895c6422bf417a1cf9a5d1259 extends Twig_Template
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
        $__internal_dc30934c406a2bb997bc880fa1fd54c5de170c74167cb7aa46bb2a909f99b5f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc30934c406a2bb997bc880fa1fd54c5de170c74167cb7aa46bb2a909f99b5f7->enter($__internal_dc30934c406a2bb997bc880fa1fd54c5de170c74167cb7aa46bb2a909f99b5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_e7a66f031cebde31bf1b156c0ada1554843d27f12c2337510d39b347f350f7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a66f031cebde31bf1b156c0ada1554843d27f12c2337510d39b347f350f7e2->enter($__internal_e7a66f031cebde31bf1b156c0ada1554843d27f12c2337510d39b347f350f7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

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
        
        $__internal_dc30934c406a2bb997bc880fa1fd54c5de170c74167cb7aa46bb2a909f99b5f7->leave($__internal_dc30934c406a2bb997bc880fa1fd54c5de170c74167cb7aa46bb2a909f99b5f7_prof);

        
        $__internal_e7a66f031cebde31bf1b156c0ada1554843d27f12c2337510d39b347f350f7e2->leave($__internal_e7a66f031cebde31bf1b156c0ada1554843d27f12c2337510d39b347f350f7e2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41cace14e3ae8adcaeca07d4a6cfeff58ca5a8f58305ccf08bcf7af71e466035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cace14e3ae8adcaeca07d4a6cfeff58ca5a8f58305ccf08bcf7af71e466035->enter($__internal_41cace14e3ae8adcaeca07d4a6cfeff58ca5a8f58305ccf08bcf7af71e466035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_86f285e0fd7a301cf54fe12cb7a3a2463390079bf6b5b429e4799b79a4f84501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f285e0fd7a301cf54fe12cb7a3a2463390079bf6b5b429e4799b79a4f84501->enter($__internal_86f285e0fd7a301cf54fe12cb7a3a2463390079bf6b5b429e4799b79a4f84501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/errorpage.css"), "html", null, true);
        echo "\" />
         ";
        
        $__internal_86f285e0fd7a301cf54fe12cb7a3a2463390079bf6b5b429e4799b79a4f84501->leave($__internal_86f285e0fd7a301cf54fe12cb7a3a2463390079bf6b5b429e4799b79a4f84501_prof);

        
        $__internal_41cace14e3ae8adcaeca07d4a6cfeff58ca5a8f58305ccf08bcf7af71e466035->leave($__internal_41cace14e3ae8adcaeca07d4a6cfeff58ca5a8f58305ccf08bcf7af71e466035_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_36317e9797a3e831e7356eb0b166be5ca46d90bf1bca1130e8b6d2b9c50e074a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36317e9797a3e831e7356eb0b166be5ca46d90bf1bca1130e8b6d2b9c50e074a->enter($__internal_36317e9797a3e831e7356eb0b166be5ca46d90bf1bca1130e8b6d2b9c50e074a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_306ef27cb25cb8163b9e81337e840daab954a28a3906bc1ebc67df4a387ede15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306ef27cb25cb8163b9e81337e840daab954a28a3906bc1ebc67df4a387ede15->enter($__internal_306ef27cb25cb8163b9e81337e840daab954a28a3906bc1ebc67df4a387ede15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_306ef27cb25cb8163b9e81337e840daab954a28a3906bc1ebc67df4a387ede15->leave($__internal_306ef27cb25cb8163b9e81337e840daab954a28a3906bc1ebc67df4a387ede15_prof);

        
        $__internal_36317e9797a3e831e7356eb0b166be5ca46d90bf1bca1130e8b6d2b9c50e074a->leave($__internal_36317e9797a3e831e7356eb0b166be5ca46d90bf1bca1130e8b6d2b9c50e074a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
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
</html>", "@Twig/Exception/error.html.twig", "K:\\Npointern\\app\\Resources\\TwigBundle\\views\\Exception\\error.html.twig");
    }
}
