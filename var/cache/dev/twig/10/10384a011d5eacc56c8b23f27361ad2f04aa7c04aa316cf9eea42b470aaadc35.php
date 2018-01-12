<?php

/* @SimpleThingsEntityAudit/Audit/view_entity.html.twig */
class __TwigTemplate_37d9ac35a07946db35b4bfd903e42633e278a422112118cb0e0ca95321193cb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "@SimpleThingsEntityAudit/Audit/view_entity.html.twig", 1);
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
        $__internal_3ba2e06370d053881e59d5fdb265dcf3210e0371d4d6de3764c8de910399fb20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba2e06370d053881e59d5fdb265dcf3210e0371d4d6de3764c8de910399fb20->enter($__internal_3ba2e06370d053881e59d5fdb265dcf3210e0371d4d6de3764c8de910399fb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleThingsEntityAudit/Audit/view_entity.html.twig"));

        $__internal_34db6554c239a042e5e7641d2c6f8fca6052bd5b115025bc8cd85c6d9fcce75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34db6554c239a042e5e7641d2c6f8fca6052bd5b115025bc8cd85c6d9fcce75b->enter($__internal_34db6554c239a042e5e7641d2c6f8fca6052bd5b115025bc8cd85c6d9fcce75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleThingsEntityAudit/Audit/view_entity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ba2e06370d053881e59d5fdb265dcf3210e0371d4d6de3764c8de910399fb20->leave($__internal_3ba2e06370d053881e59d5fdb265dcf3210e0371d4d6de3764c8de910399fb20_prof);

        
        $__internal_34db6554c239a042e5e7641d2c6f8fca6052bd5b115025bc8cd85c6d9fcce75b->leave($__internal_34db6554c239a042e5e7641d2c6f8fca6052bd5b115025bc8cd85c6d9fcce75b_prof);

    }

    // line 3
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_b1844e4c76bebf88bc816bda1efd337b535b44585d9ce25b6003fc940517d408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1844e4c76bebf88bc816bda1efd337b535b44585d9ce25b6003fc940517d408->enter($__internal_b1844e4c76bebf88bc816bda1efd337b535b44585d9ce25b6003fc940517d408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        $__internal_5f08366f8cfb89ad7b13d2cda8a3ef5287349b06edb82a14f0d0fb2b79dd2621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f08366f8cfb89ad7b13d2cda8a3ef5287349b06edb82a14f0d0fb2b79dd2621->enter($__internal_5f08366f8cfb89ad7b13d2cda8a3ef5287349b06edb82a14f0d0fb2b79dd2621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        // line 4
        echo "<h1>Change history for ";
        echo twig_escape_filter($this->env, (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new Twig_Error_Runtime('Variable "className" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo " with identifiers of ";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1>

<p><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("simple_things_entity_audit_home");
        echo "\">Home</a></p>

<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("simple_things_entity_audit_compare", array("className" => (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new Twig_Error_Runtime('Variable "className" does not exist.', 8, $this->getSourceContext()); })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 8, $this->getSourceContext()); })()))), "html", null, true);
        echo "\" method=\"get\">
<table>
    <thead>
    <tr>
        <th colspan=\"3\">&nbsp;</th>
        <th colspan=\"2\">Compare</th>
    </tr>
    <tr>
        <th>Revision</th>
        <th>Date</th>
        <th>User</th>
        <th>Old</th>
        <th>New</th>
    </tr>
    </thead>
    <tbody>

";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) || array_key_exists("revisions", $context) ? $context["revisions"] : (function () { throw new Twig_Error_Runtime('Variable "revisions" does not exist.', 25, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 26
            echo "    <tr>
        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("simple_things_entity_audit_viewentity_detail", array("rev" => twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "rev", array()), "className" => (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new Twig_Error_Runtime('Variable "className" does not exist.', 27, $this->getSourceContext()); })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 27, $this->getSourceContext()); })()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "rev", array()), "html", null, true);
            echo "</a></td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "timestamp", array()), "r"), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "username", array()), "Anonymous")) : ("Anonymous")), "html", null, true);
            echo "</td>

        <td><input type=\"radio\" name=\"oldRev\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "rev", array()), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) == 2)) {
                echo " checked=\"checked\"";
            }
            echo " /></td>
        <td><input type=\"radio\" name=\"newRev\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "rev", array()), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " /></td>
    </tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>

    <input type=\"submit\" value=\"Compare Revisions\" />
</form>

";
        
        $__internal_5f08366f8cfb89ad7b13d2cda8a3ef5287349b06edb82a14f0d0fb2b79dd2621->leave($__internal_5f08366f8cfb89ad7b13d2cda8a3ef5287349b06edb82a14f0d0fb2b79dd2621_prof);

        
        $__internal_b1844e4c76bebf88bc816bda1efd337b535b44585d9ce25b6003fc940517d408->leave($__internal_b1844e4c76bebf88bc816bda1efd337b535b44585d9ce25b6003fc940517d408_prof);

    }

    public function getTemplateName()
    {
        return "@SimpleThingsEntityAudit/Audit/view_entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 35,  125 => 32,  117 => 31,  112 => 29,  108 => 28,  102 => 27,  99 => 26,  82 => 25,  62 => 8,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SimpleThingsEntityAuditBundle::layout.html.twig\" %}

{% block simplethings_entityaudit_content %}
<h1>Change history for {{ className }} with identifiers of {{ id }}</h1>

<p><a href=\"{{ path('simple_things_entity_audit_home') }}\">Home</a></p>

<form action=\"{{ path('simple_things_entity_audit_compare', { 'className': className, 'id': id }) }}\" method=\"get\">
<table>
    <thead>
    <tr>
        <th colspan=\"3\">&nbsp;</th>
        <th colspan=\"2\">Compare</th>
    </tr>
    <tr>
        <th>Revision</th>
        <th>Date</th>
        <th>User</th>
        <th>Old</th>
        <th>New</th>
    </tr>
    </thead>
    <tbody>

{% for revision in revisions %}
    <tr>
        <td><a href=\"{{ path('simple_things_entity_audit_viewentity_detail', { 'rev': revision.rev, 'className': className, 'id': id })}}\">{{ revision.rev }}</a></td>
        <td>{{ revision.timestamp | date('r') }}</td>
        <td>{{ revision.username|default('Anonymous') }}</td>

        <td><input type=\"radio\" name=\"oldRev\" value=\"{{ revision.rev }}\"{% if loop.index == 2 %} checked=\"checked\"{% endif %} /></td>
        <td><input type=\"radio\" name=\"newRev\" value=\"{{ revision.rev }}\"{% if loop.index == 1 %} checked=\"checked\"{% endif %} /></td>
    </tr>
{% endfor %}
    </tbody>
</table>

    <input type=\"submit\" value=\"Compare Revisions\" />
</form>

{% endblock simplethings_entityaudit_content %}", "@SimpleThingsEntityAudit/Audit/view_entity.html.twig", "K:\\Npointern\\vendor\\simplethings\\entity-audit-bundle\\src\\SimpleThings\\EntityAudit\\Resources\\views\\Audit\\view_entity.html.twig");
    }
}
