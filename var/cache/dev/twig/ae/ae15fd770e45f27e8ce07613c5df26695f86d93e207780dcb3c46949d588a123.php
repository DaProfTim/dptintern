<?php

/* SimpleThingsEntityAuditBundle:Audit:view_revision.html.twig */
class __TwigTemplate_e0367171211f32cb6fbf9b0a154c578574b8719551c996554bb0d1e804e6d43e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "SimpleThingsEntityAuditBundle:Audit:view_revision.html.twig", 1);
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
        $__internal_7c728afc71533c21190bf87dc33b6613525f6979e66601f34d98d8ce20e4c4d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c728afc71533c21190bf87dc33b6613525f6979e66601f34d98d8ce20e4c4d0->enter($__internal_7c728afc71533c21190bf87dc33b6613525f6979e66601f34d98d8ce20e4c4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:view_revision.html.twig"));

        $__internal_2d4c08199adfe2b173e9fc990b09c0144f76efba54a2d23c052200afc6247a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4c08199adfe2b173e9fc990b09c0144f76efba54a2d23c052200afc6247a66->enter($__internal_2d4c08199adfe2b173e9fc990b09c0144f76efba54a2d23c052200afc6247a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:view_revision.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c728afc71533c21190bf87dc33b6613525f6979e66601f34d98d8ce20e4c4d0->leave($__internal_7c728afc71533c21190bf87dc33b6613525f6979e66601f34d98d8ce20e4c4d0_prof);

        
        $__internal_2d4c08199adfe2b173e9fc990b09c0144f76efba54a2d23c052200afc6247a66->leave($__internal_2d4c08199adfe2b173e9fc990b09c0144f76efba54a2d23c052200afc6247a66_prof);

    }

    // line 3
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_17debd97e7d0989fd283a98b3659bc9f7bf4e32a5ac2f417d70dedeba5b4037a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17debd97e7d0989fd283a98b3659bc9f7bf4e32a5ac2f417d70dedeba5b4037a->enter($__internal_17debd97e7d0989fd283a98b3659bc9f7bf4e32a5ac2f417d70dedeba5b4037a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        $__internal_7ab699ea3635e82fd66722ab7c413a859498ff9d927ed9527c2ef8c5849329fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab699ea3635e82fd66722ab7c413a859498ff9d927ed9527c2ef8c5849329fd->enter($__internal_7ab699ea3635e82fd66722ab7c413a859498ff9d927ed9527c2ef8c5849329fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        // line 4
        echo "<h1>Entities changed in revision ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["revision"]) || array_key_exists("revision", $context) ? $context["revision"] : (function () { throw new Twig_Error_Runtime('Variable "revision" does not exist.', 4, $this->getSourceContext()); })()), "rev", array()), "html", null, true);
        echo "</h1>

<p><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("simple_things_entity_audit_home");
        echo "\">Home</a></p>

<table>
    <thead><tr>
        <th>Class Name</th>
        <th>Identifiers</th>
        <th>Revision Type</th>
    </tr></thead>
    <tbody>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["changedEntities"]) || array_key_exists("changedEntities", $context) ? $context["changedEntities"] : (function () { throw new Twig_Error_Runtime('Variable "changedEntities" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
            // line 16
            echo "    <tr>
        <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("simple_things_entity_audit_viewentity_detail", array("rev" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["revision"]) || array_key_exists("revision", $context) ? $context["revision"] : (function () { throw new Twig_Error_Runtime('Variable "revision" does not exist.', 17, $this->getSourceContext()); })()), "rev", array()), "className" => twig_get_attribute($this->env, $this->getSourceContext(), $context["changedEntity"], "className", array()), "id" => twig_join_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["changedEntity"], "id", array()), ","))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["changedEntity"], "className", array()), "html", null, true);
            echo "</a></td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["changedEntity"], "id", array()), ", "), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["changedEntity"], "revisionType", array()), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </tbody>
</table>

";
        
        $__internal_7ab699ea3635e82fd66722ab7c413a859498ff9d927ed9527c2ef8c5849329fd->leave($__internal_7ab699ea3635e82fd66722ab7c413a859498ff9d927ed9527c2ef8c5849329fd_prof);

        
        $__internal_17debd97e7d0989fd283a98b3659bc9f7bf4e32a5ac2f417d70dedeba5b4037a->leave($__internal_17debd97e7d0989fd283a98b3659bc9f7bf4e32a5ac2f417d70dedeba5b4037a_prof);

    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle:Audit:view_revision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  84 => 19,  80 => 18,  74 => 17,  71 => 16,  67 => 15,  55 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SimpleThingsEntityAuditBundle::layout.html.twig\" %}

{% block simplethings_entityaudit_content %}
<h1>Entities changed in revision {{ revision.rev }}</h1>

<p><a href=\"{{ path('simple_things_entity_audit_home') }}\">Home</a></p>

<table>
    <thead><tr>
        <th>Class Name</th>
        <th>Identifiers</th>
        <th>Revision Type</th>
    </tr></thead>
    <tbody>
{% for changedEntity in changedEntities %}
    <tr>
        <td><a href=\"{{ path('simple_things_entity_audit_viewentity_detail', { 'rev': revision.rev, 'className': changedEntity.className, 'id': changedEntity.id | join(',') }) }}\">{{ changedEntity.className }}</a></td>
        <td>{{ changedEntity.id | join(', ') }}</td>
        <td>{{ changedEntity.revisionType }}</td>
    </tr>
{% endfor %}
    </tbody>
</table>

{% endblock simplethings_entityaudit_content %}", "SimpleThingsEntityAuditBundle:Audit:view_revision.html.twig", "K:\\Npointern\\vendor\\simplethings\\entity-audit-bundle\\src\\SimpleThings\\EntityAudit/Resources/views/Audit/view_revision.html.twig");
    }
}
