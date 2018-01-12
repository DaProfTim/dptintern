<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_47d11d002627be7649e75636338b144723c785fb04e201fea1cee72d0db0ba40 extends Twig_Template
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
        $__internal_7473dba65c4949b73468357e7723913df13643491541081a6e2105885b69228c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7473dba65c4949b73468357e7723913df13643491541081a6e2105885b69228c->enter($__internal_7473dba65c4949b73468357e7723913df13643491541081a6e2105885b69228c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $__internal_1a19fa2b7226639c12cdaef2b61391d828f7ea9763ce3ad0682b3d47e1b3b996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a19fa2b7226639c12cdaef2b61391d828f7ea9763ce3ad0682b3d47e1b3b996->enter($__internal_1a19fa2b7226639c12cdaef2b61391d828f7ea9763ce3ad0682b3d47e1b3b996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

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
        
        $__internal_7473dba65c4949b73468357e7723913df13643491541081a6e2105885b69228c->leave($__internal_7473dba65c4949b73468357e7723913df13643491541081a6e2105885b69228c_prof);

        
        $__internal_1a19fa2b7226639c12cdaef2b61391d828f7ea9763ce3ad0682b3d47e1b3b996->leave($__internal_1a19fa2b7226639c12cdaef2b61391d828f7ea9763ce3ad0682b3d47e1b3b996_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b19c1dce6d454809283844721cf8f6b5f8a0a4f17d9622e43c3c04a29379ec35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b19c1dce6d454809283844721cf8f6b5f8a0a4f17d9622e43c3c04a29379ec35->enter($__internal_b19c1dce6d454809283844721cf8f6b5f8a0a4f17d9622e43c3c04a29379ec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5582a63c355433cf8a1152155937d38b74bd3e25ebbdab58afe940c8039b8b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5582a63c355433cf8a1152155937d38b74bd3e25ebbdab58afe940c8039b8b67->enter($__internal_5582a63c355433cf8a1152155937d38b74bd3e25ebbdab58afe940c8039b8b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/errorpage.css"), "html", null, true);
        echo "\" />
         ";
        
        $__internal_5582a63c355433cf8a1152155937d38b74bd3e25ebbdab58afe940c8039b8b67->leave($__internal_5582a63c355433cf8a1152155937d38b74bd3e25ebbdab58afe940c8039b8b67_prof);

        
        $__internal_b19c1dce6d454809283844721cf8f6b5f8a0a4f17d9622e43c3c04a29379ec35->leave($__internal_b19c1dce6d454809283844721cf8f6b5f8a0a4f17d9622e43c3c04a29379ec35_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac5ed6a50bcd2029944180c00fc63b3ff0c823f503d683a3b39185afce2e597f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5ed6a50bcd2029944180c00fc63b3ff0c823f503d683a3b39185afce2e597f->enter($__internal_ac5ed6a50bcd2029944180c00fc63b3ff0c823f503d683a3b39185afce2e597f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_438b39dba83789553a85c02de642368037b729b940cae8ac8892badb2f77bf5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438b39dba83789553a85c02de642368037b729b940cae8ac8892badb2f77bf5a->enter($__internal_438b39dba83789553a85c02de642368037b729b940cae8ac8892badb2f77bf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
            <div id=\"wrapper\">
                <div id=\"wrapper_inner\">
                    <div id=\"content\">
                        <h1>Die Seite wurde nicht gefunden</h1>

                        <p class=\"error\">
                            Die angeforderte Seite konnte nicht gefunden werden.
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Klicken Sie hier, um zurück zur Startseite zu gelangen</a>.
                        </p>
                    </div>
                </div>
            </div>

        ";
        
        $__internal_438b39dba83789553a85c02de642368037b729b940cae8ac8892badb2f77bf5a->leave($__internal_438b39dba83789553a85c02de642368037b729b940cae8ac8892badb2f77bf5a_prof);

        
        $__internal_ac5ed6a50bcd2029944180c00fc63b3ff0c823f503d683a3b39185afce2e597f->leave($__internal_ac5ed6a50bcd2029944180c00fc63b3ff0c823f503d683a3b39185afce2e597f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
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
                        <h1>Die Seite wurde nicht gefunden</h1>

                        <p class=\"error\">
                            Die angeforderte Seite konnte nicht gefunden werden.
                            <a href=\"{{ path('index') }}\">Klicken Sie hier, um zurück zur Startseite zu gelangen</a>.
                        </p>
                    </div>
                </div>
            </div>

        {% endblock %}
    </body>
</html>", "TwigBundle:Exception:error404.html.twig", "K:\\Npointern\\app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
