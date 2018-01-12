<?php

/* @NpoaSecurity/ctrlactpermission/index.html.twig */
class __TwigTemplate_f0f55c657ec1019f95aab7d39968ec38db330cd8f0c95b7ee3234ad146d47c44 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["controllers"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
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
                $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
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
        return array (  177 => 59,  171 => 58,  164 => 56,  152 => 50,  151 => 49,  145 => 48,  141 => 47,  135 => 43,  131 => 42,  127 => 41,  120 => 40,  116 => 39,  113 => 38,  102 => 35,  99 => 34,  95 => 33,  86 => 29,  82 => 28,  76 => 25,  68 => 21,  64 => 20,  59 => 17,  50 => 15,  46 => 14,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NpoaSecurity/ctrlactpermission/index.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\ctrlactpermission\\index.html.twig");
    }
}
