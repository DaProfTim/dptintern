<?php

/* @SimpleThingsEntityAudit/Audit/index.html.twig */
class __TwigTemplate_de03098954848ea9b573a85c0466fb7fae5d735c37d84e38bd85a7cf07873b10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "@SimpleThingsEntityAudit/Audit/index.html.twig", 1);
        $this->blocks = array(
            'simplethings_entityaudit_content' => array($this, 'block_simplethings_entityaudit_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SimpleThingsEntityAuditBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8c3af537d8176ca04363a4c6015d25a1e5871d1653e25770a664a4ebd3e5da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c3af537d8176ca04363a4c6015d25a1e5871d1653e25770a664a4ebd3e5da7->enter($__internal_b8c3af537d8176ca04363a4c6015d25a1e5871d1653e25770a664a4ebd3e5da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleThingsEntityAudit/Audit/index.html.twig"));

        $__internal_d39823fba474834593ad3ff71fd1e51d3d3d5694aa5658624299c44f7583c4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39823fba474834593ad3ff71fd1e51d3d3d5694aa5658624299c44f7583c4f0->enter($__internal_d39823fba474834593ad3ff71fd1e51d3d3d5694aa5658624299c44f7583c4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleThingsEntityAudit/Audit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8c3af537d8176ca04363a4c6015d25a1e5871d1653e25770a664a4ebd3e5da7->leave($__internal_b8c3af537d8176ca04363a4c6015d25a1e5871d1653e25770a664a4ebd3e5da7_prof);

        
        $__internal_d39823fba474834593ad3ff71fd1e51d3d3d5694aa5658624299c44f7583c4f0->leave($__internal_d39823fba474834593ad3ff71fd1e51d3d3d5694aa5658624299c44f7583c4f0_prof);

    }

    // line 3
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_01c66ea7e080a6933dc5c6c8efb9c5d275121acf404b15f2f0c341783195a89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c66ea7e080a6933dc5c6c8efb9c5d275121acf404b15f2f0c341783195a89e->enter($__internal_01c66ea7e080a6933dc5c6c8efb9c5d275121acf404b15f2f0c341783195a89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        $__internal_83982c6951b90faf92e5770f6d3ff87dd8d45132763238c8f2ea11f82c09a715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83982c6951b90faf92e5770f6d3ff87dd8d45132763238c8f2ea11f82c09a715->enter($__internal_83982c6951b90faf92e5770f6d3ff87dd8d45132763238c8f2ea11f82c09a715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        // line 4
        echo "<h1>Revisions</h1>

<ul>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) || array_key_exists("revisions", $context) ? $context["revisions"] : (function () { throw new Twig_Error_Runtime('Variable "revisions" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 8
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("simple_things_entity_audit_viewrevision", array("rev" => twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "rev", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "timestamp", array()), "r"), "html", null, true);
            echo " -- ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "username", array()), "Anonymous")) : ("Anonymous")), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        
        $__internal_83982c6951b90faf92e5770f6d3ff87dd8d45132763238c8f2ea11f82c09a715->leave($__internal_83982c6951b90faf92e5770f6d3ff87dd8d45132763238c8f2ea11f82c09a715_prof);

        
        $__internal_01c66ea7e080a6933dc5c6c8efb9c5d275121acf404b15f2f0c341783195a89e->leave($__internal_01c66ea7e080a6933dc5c6c8efb9c5d275121acf404b15f2f0c341783195a89e_prof);

    }

    public function getTemplateName()
    {
        return "@SimpleThingsEntityAudit/Audit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SimpleThingsEntityAuditBundle::layout.html.twig\" %}

{% block simplethings_entityaudit_content %}
<h1>Revisions</h1>

<ul>
{% for revision in revisions %}
    <li><a href=\"{{ path('simple_things_entity_audit_viewrevision', { 'rev': revision.rev }) }}\">{{ revision.timestamp|date('r') }} -- {{ revision.username|default('Anonymous') }}</a></li>
{% endfor %}
</ul>
{% endblock simplethings_entityaudit_content %}", "@SimpleThingsEntityAudit/Audit/index.html.twig", "K:\\Npointern\\vendor\\simplethings\\entity-audit-bundle\\src\\SimpleThings\\EntityAudit\\Resources\\views\\Audit\\index.html.twig");
    }
}
