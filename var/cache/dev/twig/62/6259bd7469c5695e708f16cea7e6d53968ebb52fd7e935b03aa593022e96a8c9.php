<?php

/* NpoaSecurityBundle:ctrlactpermission:index.html.twig */
class __TwigTemplate_7b9361958e632a5184200749456aa0fec2c83cdd0553dde7647e0a2ba394174e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@NpoaSecurity/common/template_dashboard.html.twig", "NpoaSecurityBundle:ctrlactpermission:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@NpoaSecurity/common/template_dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7686be3392d0079f27f73db5274962b64dda454682036781a8bc4e7bafc3772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7686be3392d0079f27f73db5274962b64dda454682036781a8bc4e7bafc3772->enter($__internal_b7686be3392d0079f27f73db5274962b64dda454682036781a8bc4e7bafc3772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NpoaSecurityBundle:ctrlactpermission:index.html.twig"));

        $__internal_c14ab40f4eb9a8665ef17c9622ec24a622877d4a2fb14999f97a66a3db950387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14ab40f4eb9a8665ef17c9622ec24a622877d4a2fb14999f97a66a3db950387->enter($__internal_c14ab40f4eb9a8665ef17c9622ec24a622877d4a2fb14999f97a66a3db950387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NpoaSecurityBundle:ctrlactpermission:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7686be3392d0079f27f73db5274962b64dda454682036781a8bc4e7bafc3772->leave($__internal_b7686be3392d0079f27f73db5274962b64dda454682036781a8bc4e7bafc3772_prof);

        
        $__internal_c14ab40f4eb9a8665ef17c9622ec24a622877d4a2fb14999f97a66a3db950387->leave($__internal_c14ab40f4eb9a8665ef17c9622ec24a622877d4a2fb14999f97a66a3db950387_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f3bc435206bb3a22c0216702735de1d39f1be185490c47f2f3940ac18792757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3bc435206bb3a22c0216702735de1d39f1be185490c47f2f3940ac18792757->enter($__internal_8f3bc435206bb3a22c0216702735de1d39f1be185490c47f2f3940ac18792757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3a875c3ec9c3a52f7390ddc39b2883cff41d85c219bac4c26e50b3c11be839be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a875c3ec9c3a52f7390ddc39b2883cff41d85c219bac4c26e50b3c11be839be->enter($__internal_3a875c3ec9c3a52f7390ddc39b2883cff41d85c219bac4c26e50b3c11be839be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <form method=\"post\" action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("npoa_security_ctrlactpermission_update");
        echo "\" id=\"form\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <table class=\"table table-hover td-vertical-align-center\">
                            <thead>
                                <tr>
                                    <th>Controller/Action</th>
                                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new Twig_Error_Runtime('Variable "roles" does not exist.', 14, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 15
            echo "                                        <th>";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "</th>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["controllers"]) || array_key_exists("controllers", $context) ? $context["controllers"] : (function () { throw new Twig_Error_Runtime('Variable "controllers" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["controllerName"] => $context["routes"]) {
            // line 21
            echo "                                    <tr class=\"";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["routes"], 0, array(), "array"), "controllerNumEmptyActions", array()) > 0)) ? (" danger") : (""));
            echo "\">
                                        <td>
                                            <h4>
                                                <a data-toggle=\"collapse\" onclick=\"handleToggle(this); return false;\"
                                                   data-target=\".detail";
            // line 25
            echo twig_escape_filter($this->env, twig_replace_filter($context["controllerName"], array("." => "", ":" => "", "\\" => "")), "html", null, true);
            echo "\" href=\"#\">
                                                    <i class=\"fa fa-chevron-circle-down\" aria-hidden=\"true\"></i></a>
                                                <a data-toggle=\"collapse\" onclick=\"handleToggle(this); return false;\"
                                                   data-target=\".detail";
            // line 28
            echo twig_escape_filter($this->env, twig_replace_filter($context["controllerName"], array("." => "", ":" => "", "\\" => "")), "html", null, true);
            echo "\" href=\"#\">
                                                    <span>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["routes"], 0, array()), "controllerShort", array()), "html", null, true);
            echo "</span><span class=\"namespace-entity\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["routes"], 0, array()), "namespace", array()), "html", null, true);
            echo ")</span>
                                                </a>
                                            </h4>
                                        </td>
                                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new Twig_Error_Runtime('Variable "roles" does not exist.', 33, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 34
                echo "                                            <td style=\"width: 140px; font-weight: bold;\" class=\"text-center\">
                                                <span class=\"collapse out detail";
                // line 35
                echo twig_escape_filter($this->env, twig_replace_filter($context["controllerName"], array("." => "", ":" => "", "\\" => "")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "</span>
                                            </td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                    </tr>
                                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["routes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
                // line 40
                echo "                                            <tr class=\"collapse out ";
                echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["route"], "permissions", array()))) ? (" danger") : (""));
                echo " detail";
                echo twig_escape_filter($this->env, twig_replace_filter($context["controllerName"], array("." => "", ":" => "", "\\" => "")), "html", null, true);
                echo "\">
                                                <td style=\"vertical-align: middle;\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["route"], "action", array()), "html", null, true);
                echo "</td>
                                                ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new Twig_Error_Runtime('Variable "roles" does not exist.', 42, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["roleName"] => $context["role"]) {
                    // line 43
                    echo "                                                    <td style=\"width: 140px;\" class=\"text-center\">
                                                        <div class=\"form-group\" style=\"margin: 0; padding: 0\">
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"hidden\" name=\"";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["route"], "actionAbsolute", array()), "html", null, true);
                    echo "[NONE]\" value=\"on\" />
                                                                    <input type=\"checkbox\" name=\"";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["route"], "actionAbsolute", array()), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, $context["roleName"], "html", null, true);
                    echo "]\"
                                                                            ";
                    // line 49
                    echo ((( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["route"], "permissions", array())) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 50
$context["route"], "permissions", array(), "any", false, true), $context["roleName"], array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
                    echo ">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['roleName'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['controllerName'], $context['routes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script language=\"javascript\">
        function handleToggle(el) {
            var tr = \$(el).closest('table');
            var iEl = \$(el).parent().find('i');
            iEl.toggleClass('fa-chevron-circle-down');
            iEl.toggleClass('fa-chevron-circle-up');
            tr.toggleClass('children-collapsed')
        }
    </script>

";
        
        $__internal_3a875c3ec9c3a52f7390ddc39b2883cff41d85c219bac4c26e50b3c11be839be->leave($__internal_3a875c3ec9c3a52f7390ddc39b2883cff41d85c219bac4c26e50b3c11be839be_prof);

        
        $__internal_8f3bc435206bb3a22c0216702735de1d39f1be185490c47f2f3940ac18792757->leave($__internal_8f3bc435206bb3a22c0216702735de1d39f1be185490c47f2f3940ac18792757_prof);

    }

    public function getTemplateName()
    {
        return "NpoaSecurityBundle:ctrlactpermission:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 59,  189 => 58,  182 => 56,  170 => 50,  169 => 49,  163 => 48,  159 => 47,  153 => 43,  149 => 42,  145 => 41,  138 => 40,  134 => 39,  131 => 38,  120 => 35,  117 => 34,  113 => 33,  104 => 29,  100 => 28,  94 => 25,  86 => 21,  82 => 20,  77 => 17,  68 => 15,  64 => 14,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@NpoaSecurity/common/template_dashboard.html.twig\" %}

{% block content %}

    <form method=\"post\" action=\"{{ path('npoa_security_ctrlactpermission_update') }}\" id=\"form\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <table class=\"table table-hover td-vertical-align-center\">
                            <thead>
                                <tr>
                                    <th>Controller/Action</th>
                                    {% for role in roles %}
                                        <th>{{ role }}</th>
                                    {% endfor %}
                                </tr>
                            </thead>
                            <tbody>
                                {% for controllerName, routes in controllers %}
                                    <tr class=\"{{ routes[0].controllerNumEmptyActions > 0 ? ' danger' }}\">
                                        <td>
                                            <h4>
                                                <a data-toggle=\"collapse\" onclick=\"handleToggle(this); return false;\"
                                                   data-target=\".detail{{ controllerName|replace({'.':'',':':'','\\\\':''}) }}\" href=\"#\">
                                                    <i class=\"fa fa-chevron-circle-down\" aria-hidden=\"true\"></i></a>
                                                <a data-toggle=\"collapse\" onclick=\"handleToggle(this); return false;\"
                                                   data-target=\".detail{{ controllerName|replace({'.':'',':':'','\\\\':''}) }}\" href=\"#\">
                                                    <span>{{ routes.0.controllerShort }}</span><span class=\"namespace-entity\">({{ routes.0.namespace }})</span>
                                                </a>
                                            </h4>
                                        </td>
                                        {% for role in roles %}
                                            <td style=\"width: 140px; font-weight: bold;\" class=\"text-center\">
                                                <span class=\"collapse out detail{{ controllerName|replace({'.':'',':':'','\\\\':''}) }}\">{{ role }}</span>
                                            </td>
                                        {% endfor %}
                                    </tr>
                                        {% for route in routes %}
                                            <tr class=\"collapse out {{ route.permissions is empty ? ' danger' }} detail{{ controllerName|replace({'.':'',':':'','\\\\':''}) }}\">
                                                <td style=\"vertical-align: middle;\">{{ route.action }}</td>
                                                {% for roleName,role in roles %}
                                                    <td style=\"width: 140px;\" class=\"text-center\">
                                                        <div class=\"form-group\" style=\"margin: 0; padding: 0\">
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"hidden\" name=\"{{ route.actionAbsolute }}[NONE]\" value=\"on\" />
                                                                    <input type=\"checkbox\" name=\"{{ route.actionAbsolute }}[{{ roleName }}]\"
                                                                            {{ route.permissions is not empty
                                                                                and route.permissions[roleName] is defined ? 'checked=\"checked\"' }}>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                {% endfor %}
                                            </tr>
                                        {% endfor %}
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script language=\"javascript\">
        function handleToggle(el) {
            var tr = \$(el).closest('table');
            var iEl = \$(el).parent().find('i');
            iEl.toggleClass('fa-chevron-circle-down');
            iEl.toggleClass('fa-chevron-circle-up');
            tr.toggleClass('children-collapsed')
        }
    </script>

{% endblock %}", "NpoaSecurityBundle:ctrlactpermission:index.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle/Resources/views/ctrlactpermission/index.html.twig");
    }
}
