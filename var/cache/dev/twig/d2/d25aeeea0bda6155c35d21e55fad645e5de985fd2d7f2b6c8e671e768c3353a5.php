<?php

/* @NpoaSecurity/ctrlactpermission/index.html.twig */
class __TwigTemplate_20f6b45074576257ea3c70e8cca461701129be514b7cb51cc6c8e80c63bcac1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@NpoaSecurity/common/template_dashboard.html.twig", "@NpoaSecurity/ctrlactpermission/index.html.twig", 1);
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
        $__internal_a9e23d4c3fed8dfa9d65c2d27d010994ae15ed53e0150ccad8e047ed6304b5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e23d4c3fed8dfa9d65c2d27d010994ae15ed53e0150ccad8e047ed6304b5fb->enter($__internal_a9e23d4c3fed8dfa9d65c2d27d010994ae15ed53e0150ccad8e047ed6304b5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NpoaSecurity/ctrlactpermission/index.html.twig"));

        $__internal_e28c1f9715b93db03efd0ff0921895668058e13d0f8b44a1d93c222c33452a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28c1f9715b93db03efd0ff0921895668058e13d0f8b44a1d93c222c33452a36->enter($__internal_e28c1f9715b93db03efd0ff0921895668058e13d0f8b44a1d93c222c33452a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NpoaSecurity/ctrlactpermission/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9e23d4c3fed8dfa9d65c2d27d010994ae15ed53e0150ccad8e047ed6304b5fb->leave($__internal_a9e23d4c3fed8dfa9d65c2d27d010994ae15ed53e0150ccad8e047ed6304b5fb_prof);

        
        $__internal_e28c1f9715b93db03efd0ff0921895668058e13d0f8b44a1d93c222c33452a36->leave($__internal_e28c1f9715b93db03efd0ff0921895668058e13d0f8b44a1d93c222c33452a36_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed7209eac0d627f434e9bfc8e41e799560bff31fa89d41688805bb22fd301330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7209eac0d627f434e9bfc8e41e799560bff31fa89d41688805bb22fd301330->enter($__internal_ed7209eac0d627f434e9bfc8e41e799560bff31fa89d41688805bb22fd301330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8a48debc1382fb762b4b768068b893850be824a90dc2978faf9ef3ab8c1090c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a48debc1382fb762b4b768068b893850be824a90dc2978faf9ef3ab8c1090c2->enter($__internal_8a48debc1382fb762b4b768068b893850be824a90dc2978faf9ef3ab8c1090c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8a48debc1382fb762b4b768068b893850be824a90dc2978faf9ef3ab8c1090c2->leave($__internal_8a48debc1382fb762b4b768068b893850be824a90dc2978faf9ef3ab8c1090c2_prof);

        
        $__internal_ed7209eac0d627f434e9bfc8e41e799560bff31fa89d41688805bb22fd301330->leave($__internal_ed7209eac0d627f434e9bfc8e41e799560bff31fa89d41688805bb22fd301330_prof);

    }

    public function getTemplateName()
    {
        return "@NpoaSecurity/ctrlactpermission/index.html.twig";
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

{% endblock %}", "@NpoaSecurity/ctrlactpermission/index.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\ctrlactpermission\\index.html.twig");
    }
}
