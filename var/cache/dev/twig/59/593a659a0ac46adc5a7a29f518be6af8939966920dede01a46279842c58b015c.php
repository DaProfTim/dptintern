<?php

/* SimpleThingsEntityAuditBundle:Audit:index.html.twig */
class __TwigTemplate_55ee21030ec886efc5d96b776889bda45e45e2ed4fef48957ef25b61b1fdb3e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "SimpleThingsEntityAuditBundle:Audit:index.html.twig", 1);
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
        $__internal_109a6e17dd7131d2338b8de5b3c6b6061fad722fcfd78dc9b908322dd0df1b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109a6e17dd7131d2338b8de5b3c6b6061fad722fcfd78dc9b908322dd0df1b92->enter($__internal_109a6e17dd7131d2338b8de5b3c6b6061fad722fcfd78dc9b908322dd0df1b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:index.html.twig"));

        $__internal_2a427f29e3193d55c7e3aceafb06096bef1a3d552e138f2b34a775925e0b433c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a427f29e3193d55c7e3aceafb06096bef1a3d552e138f2b34a775925e0b433c->enter($__internal_2a427f29e3193d55c7e3aceafb06096bef1a3d552e138f2b34a775925e0b433c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_109a6e17dd7131d2338b8de5b3c6b6061fad722fcfd78dc9b908322dd0df1b92->leave($__internal_109a6e17dd7131d2338b8de5b3c6b6061fad722fcfd78dc9b908322dd0df1b92_prof);

        
        $__internal_2a427f29e3193d55c7e3aceafb06096bef1a3d552e138f2b34a775925e0b433c->leave($__internal_2a427f29e3193d55c7e3aceafb06096bef1a3d552e138f2b34a775925e0b433c_prof);

    }

    // line 3
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_b3a4f0d7b0f5dbfbaa5158279992c7eb40642dd26f073faf1ae7d62f2182d697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a4f0d7b0f5dbfbaa5158279992c7eb40642dd26f073faf1ae7d62f2182d697->enter($__internal_b3a4f0d7b0f5dbfbaa5158279992c7eb40642dd26f073faf1ae7d62f2182d697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        $__internal_80370fbf8e114f11c907c3312cdae9cda471c427f1e0f5d4fb75cfe4ff1252d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80370fbf8e114f11c907c3312cdae9cda471c427f1e0f5d4fb75cfe4ff1252d0->enter($__internal_80370fbf8e114f11c907c3312cdae9cda471c427f1e0f5d4fb75cfe4ff1252d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

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
        
        $__internal_80370fbf8e114f11c907c3312cdae9cda471c427f1e0f5d4fb75cfe4ff1252d0->leave($__internal_80370fbf8e114f11c907c3312cdae9cda471c427f1e0f5d4fb75cfe4ff1252d0_prof);

        
        $__internal_b3a4f0d7b0f5dbfbaa5158279992c7eb40642dd26f073faf1ae7d62f2182d697->leave($__internal_b3a4f0d7b0f5dbfbaa5158279992c7eb40642dd26f073faf1ae7d62f2182d697_prof);

    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle:Audit:index.html.twig";
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
{% endblock simplethings_entityaudit_content %}", "SimpleThingsEntityAuditBundle:Audit:index.html.twig", "K:\\Npointern\\vendor\\simplethings\\entity-audit-bundle\\src\\SimpleThings\\EntityAudit/Resources/views/Audit/index.html.twig");
    }
}
