<?php

/* @LiipFunctionalTest/layout.html.twig */
class __TwigTemplate_0c45f6c4e58a81f42f9f7d98a06a3f79ceacf782c8a21c0e2607de2d311acf82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e37340b8b8c04b2132789ce628c91ce0d228a82b9db701b9825501c04d34f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e37340b8b8c04b2132789ce628c91ce0d228a82b9db701b9825501c04d34f06->enter($__internal_0e37340b8b8c04b2132789ce628c91ce0d228a82b9db701b9825501c04d34f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LiipFunctionalTest/layout.html.twig"));

        $__internal_629429a82ad09bc24dd8ef3cb48fa7257df2f728debab6a96227c9782a813ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629429a82ad09bc24dd8ef3cb48fa7257df2f728debab6a96227c9782a813ef0->enter($__internal_629429a82ad09bc24dd8ef3cb48fa7257df2f728debab6a96227c9782a813ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LiipFunctionalTest/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        
        <title>LiipFunctionalTestBundle</title>
    </head>
    
    <body>
        <p id=\"user\">";
        // line 12
        if ((null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "user", array()))) {
            // line 13
            echo "Not logged in.";
        } else {
            // line 15
            echo "Logged in as ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo ".";
        }
        // line 17
        echo "</p>

        <h1>LiipFunctionalTestBundle</h1>
        
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 22
            echo "            <div class=\"flash-notice\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        
        <div id=\"content\">";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    </body>
</html>
";
        
        $__internal_0e37340b8b8c04b2132789ce628c91ce0d228a82b9db701b9825501c04d34f06->leave($__internal_0e37340b8b8c04b2132789ce628c91ce0d228a82b9db701b9825501c04d34f06_prof);

        
        $__internal_629429a82ad09bc24dd8ef3cb48fa7257df2f728debab6a96227c9782a813ef0->leave($__internal_629429a82ad09bc24dd8ef3cb48fa7257df2f728debab6a96227c9782a813ef0_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4109a30cbd37ba03e79ed2a05bbb378ef05621d4d55881ef9b03cc8b76cec548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4109a30cbd37ba03e79ed2a05bbb378ef05621d4d55881ef9b03cc8b76cec548->enter($__internal_4109a30cbd37ba03e79ed2a05bbb378ef05621d4d55881ef9b03cc8b76cec548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea5c59a71da031949077f4163d2f6abbb8f8e9be0596ffa228b50d38bfa5fc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5c59a71da031949077f4163d2f6abbb8f8e9be0596ffa228b50d38bfa5fc52->enter($__internal_ea5c59a71da031949077f4163d2f6abbb8f8e9be0596ffa228b50d38bfa5fc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ea5c59a71da031949077f4163d2f6abbb8f8e9be0596ffa228b50d38bfa5fc52->leave($__internal_ea5c59a71da031949077f4163d2f6abbb8f8e9be0596ffa228b50d38bfa5fc52_prof);

        
        $__internal_4109a30cbd37ba03e79ed2a05bbb378ef05621d4d55881ef9b03cc8b76cec548->leave($__internal_4109a30cbd37ba03e79ed2a05bbb378ef05621d4d55881ef9b03cc8b76cec548_prof);

    }

    public function getTemplateName()
    {
        return "@LiipFunctionalTest/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  70 => 26,  61 => 23,  58 => 22,  54 => 21,  48 => 17,  43 => 15,  40 => 13,  38 => 12,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        
        <title>LiipFunctionalTestBundle</title>
    </head>
    
    <body>
        <p id=\"user\">
            {%- if (app.user is null) -%}
                Not logged in.
            {%- else -%}
                Logged in as {{ app.user.username }}.
            {%- endif -%}
        </p>

        <h1>LiipFunctionalTestBundle</h1>
        
        {% for flash_message in app.session.flashbag.get('notice') %}
            <div class=\"flash-notice\">
                {{ flash_message }}
            </div>
        {% endfor %}
        
        <div id=\"content\">{% block body %}{% endblock %}</div>
    </body>
</html>
", "@LiipFunctionalTest/layout.html.twig", "K:\\Npointern\\vendor\\liip\\functional-test-bundle\\Resources\\views\\layout.html.twig");
    }
}
