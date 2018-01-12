<?php

/* LiipFunctionalTestBundle::layout.html.twig */
class __TwigTemplate_4ba7d3a9298e9906a38cd4646224c301235e3184ecc67a5a3e750c3f1f9cb137 extends Twig_Template
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
        $__internal_6cc03d836cab3ee667de4e690675f956abd812c3884e473655f0e8e2186a512b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc03d836cab3ee667de4e690675f956abd812c3884e473655f0e8e2186a512b->enter($__internal_6cc03d836cab3ee667de4e690675f956abd812c3884e473655f0e8e2186a512b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipFunctionalTestBundle::layout.html.twig"));

        $__internal_eb15f755f343e8cc4ca36a07c09e08d041382e91b5f0cbc335a10e5bd82b481f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb15f755f343e8cc4ca36a07c09e08d041382e91b5f0cbc335a10e5bd82b481f->enter($__internal_eb15f755f343e8cc4ca36a07c09e08d041382e91b5f0cbc335a10e5bd82b481f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipFunctionalTestBundle::layout.html.twig"));

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
        
        $__internal_6cc03d836cab3ee667de4e690675f956abd812c3884e473655f0e8e2186a512b->leave($__internal_6cc03d836cab3ee667de4e690675f956abd812c3884e473655f0e8e2186a512b_prof);

        
        $__internal_eb15f755f343e8cc4ca36a07c09e08d041382e91b5f0cbc335a10e5bd82b481f->leave($__internal_eb15f755f343e8cc4ca36a07c09e08d041382e91b5f0cbc335a10e5bd82b481f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_18b98f9519fccc87532668d643c67f13afb85acd0bedaffade6b7b1aa07b9ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b98f9519fccc87532668d643c67f13afb85acd0bedaffade6b7b1aa07b9ca9->enter($__internal_18b98f9519fccc87532668d643c67f13afb85acd0bedaffade6b7b1aa07b9ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f7675cab7874c891a7c79ecb1e5cd486ce3ea0ae1407ce2338e0eb773993f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7675cab7874c891a7c79ecb1e5cd486ce3ea0ae1407ce2338e0eb773993f7b->enter($__internal_8f7675cab7874c891a7c79ecb1e5cd486ce3ea0ae1407ce2338e0eb773993f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f7675cab7874c891a7c79ecb1e5cd486ce3ea0ae1407ce2338e0eb773993f7b->leave($__internal_8f7675cab7874c891a7c79ecb1e5cd486ce3ea0ae1407ce2338e0eb773993f7b_prof);

        
        $__internal_18b98f9519fccc87532668d643c67f13afb85acd0bedaffade6b7b1aa07b9ca9->leave($__internal_18b98f9519fccc87532668d643c67f13afb85acd0bedaffade6b7b1aa07b9ca9_prof);

    }

    public function getTemplateName()
    {
        return "LiipFunctionalTestBundle::layout.html.twig";
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
", "LiipFunctionalTestBundle::layout.html.twig", "K:\\Npointern\\vendor\\liip\\functional-test-bundle/Resources/views/layout.html.twig");
    }
}
