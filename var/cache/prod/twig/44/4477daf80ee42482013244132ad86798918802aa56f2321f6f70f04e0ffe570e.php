<?php

/* @NpoaSecurity/entitypermission/index.html.twig */
class __TwigTemplate_0a09363360261d5ef8d2041c732855b16beb87809a55ee698f37a3fd9fda8411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@NpoaSecurity/common/template_dashboard.html.twig", "@NpoaSecurity/entitypermission/index.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("npoa_security_entitypermission_update");
        echo "\" id=\"form\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        foreach ($context['_seq'] as $context["entityName"] => $context["fields"]) {
            // line 11
            echo "                            <table class=\"table table-hover td-vertical-align-center children-collapsed sm-margin\">
                                <thead>
                                    <tr class=\"";
            // line 13
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], $context["entityName"], array(), "array"), "lowestMask", array()) == 0)) ? (" danger") : (""));
            echo "\">
                                        <th>
                                            <h4>
                                                <a data-toggle=\"collapse\" onclick=\"handleToggle(this); return false;\"
                                                   data-target=\".detail";
            // line 17
            echo twig_escape_filter($this->env, twig_replace_filter($context["entityName"], array(":" => "", "\\" => "")), "html", null, true);
            echo "\" href=\"#\" style=\"margin-right: 5px;\">
                                                    <i class=\"fa fa-chevron-circle-down\" aria-hidden=\"true\"></i></a>
                                                <a data-toggle=\"collapse\" onclick=\"handleToggle(this); return false;\"
                                                   data-target=\".detail";
            // line 20
            echo twig_escape_filter($this->env, twig_replace_filter($context["entityName"], array(":" => "", "\\" => "")), "html", null, true);
            echo "\" href=\"#\">
                                                    <span>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], $context["entityName"], array(), "array"), "entityShort", array()), "html", null, true);
            echo "</span><span
                                                            class=\"namespace-entity\">(";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], $context["entityName"], array(), "array"), "entityNamespace", array()), "html", null, true);
            echo ")</span>
                                                </a>
                                            </h4>
                                        </th>
                                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 27
                echo "                                            <th class=\"text-center\" style=\"width: 140px;\"><span class=\"collapse out detail";
                echo twig_escape_filter($this->env, twig_replace_filter($context["entityName"], array(":" => "", "\\" => "")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "</span></th>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["fields"]);
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 33
                echo "                                        <tr class=\"collapse out ";
                echo (((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "permissions", array())) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "highestMask", array()) == 0))) ? (" danger") : (""));
                echo " detail";
                echo twig_escape_filter($this->env, twig_replace_filter($context["entityName"], array(":" => "", "\\" => "")), "html", null, true);
                echo "
                                                        ";
                // line 34
                echo ((($context["entityName"] == twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "field", array()))) ? ("entity") : ("field"));
                echo "\" data-entity=\"";
                echo twig_escape_filter($this->env, twig_replace_filter($context["entityName"], array(":" => "", "\\" => "")), "html", null, true);
                echo "\">
                                            ";
                // line 35
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "field", array()) == $context["entityName"])) {
                    // line 36
                    echo "                                                <td style=\"vertical-align: middle; font-weight: bold;\"><span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "entityShort", array()), "html", null, true);
                    echo "</span><span
                                                            class=\"namespace-entity\">(";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "entityNamespace", array()), "html", null, true);
                    echo ")</span><a href=\"#\" onclick=\"toggleLock(this);return false;\"
                                                                 style=\"margin-left: 10px;\"><i class=\"fa fa-unlock fa-lg\" aria-hidden=\"true\" data-placement=\"bottom\"
                                                                   title=\"Wenn das Schloss geschlossen ist, werden beim Ziehen/Setzen des Entity-Reglers
                                                                   automatisch auch die Regler der untergeordneten Felder synchron mitbewegt.\" data-toggle=\"tooltip\"></i></a>
                                            ";
                } else {
                    // line 42
                    echo "                                                <td style=\"vertical-align: middle; padding-left: 40px;\">
                                                    ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "field", array()), "html", null, true);
                    echo "
                                            ";
                }
                // line 45
                echo "                                                    <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["entityName"], "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "field", array()), "html", null, true);
                echo "]\" id=\"";
                echo twig_escape_filter($this->env, twig_replace_filter($context["entityName"], array(":" => "", "\\" => "")), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "field", array()), array(":" => "", "\\" => "")), "html", null, true);
                echo "\" class=\"all-roles\" />
                                                </td>
                                            ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
                foreach ($context['_seq'] as $context["roleName"] => $context["role"]) {
                    // line 48
                    echo "                                                <td style=\"width: 140px;\" class=\"text-center\">
                                                    <div class=\"form-group\" style=\"margin: 0; padding: 0\">
                                                        <input type=\"hidden\" id=\"";
                    // line 50
                    echo twig_escape_filter($this->env, twig_replace_filter($context["entityName"], array(":" => "", "\\" => "")), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "field", array()), array(":" => "", "\\" => "")), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $context["roleName"], "html", null, true);
                    echo "\"
                                                               value=\"";
                    // line 51
                    echo twig_escape_filter($this->env, ((( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "permissions", array())) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "permissions", array(), "any", false, true), $context["roleName"], array(), "array", true, true))) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 52
$context["field"], "permissions", array()), $context["roleName"], array(), "array"), "mask", array())) : (0)), "html", null, true);
                    // line 53
                    echo "\" data-role=\"";
                    echo twig_escape_filter($this->env, $context["roleName"], "html", null, true);
                    echo "\" />
                                                        <div class=\"slider\" data-role=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $context["roleName"], "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, twig_replace_filter($context["entityName"], array(":" => "", "\\" => "")), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "field", array()), array(":" => "", "\\" => "")), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $context["roleName"], "html", null, true);
                    echo "_slider\"></div>
                                                        <div class=\"slider_legend\" id=\"";
                    // line 55
                    echo twig_escape_filter($this->env, twig_replace_filter($context["entityName"], array(":" => "", "\\" => "")), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "field", array()), array(":" => "", "\\" => "")), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $context["roleName"], "html", null, true);
                    echo "_legend\"></div>
                                                    </div>
                                                </td>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['roleName'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                                </tbody>
                            </table>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['entityName'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </div>
                </div>
            </div>
        </div>
    </form>

    <script language=\"javascript\">
        var sliderValToMaskValMap = { 0: 0, 1: 1, 2: 5 };
        var maskValToSliderValMap = { 0: 0, 1: 1, 5: 2 };

        function sliderValToMaskVal(val) {
            return sliderValToMaskValMap[val];
        }
        function maskValToSliderVal(val) {
            return maskValToSliderValMap[val];
        }

        function handleToggle(el) {
            var tr = \$(el).closest('table');
            var iEl = \$(el).parent().find('i');
            iEl.toggleClass('fa-chevron-circle-down');
            iEl.toggleClass('fa-chevron-circle-up');
            tr.toggleClass('children-collapsed')
        }

        function toggleLock(el) {
            var iEl = \$(el).find('i');
            iEl.toggleClass('fa-unlock');
            iEl.toggleClass('fa-lock');
        }

        function escapeJqId(myid) {
            return myid.replace( /(:|\\.|\\[|\\]|,)/g, \"\\\\\$1\" );
        }

        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip();

            \$(\".slider\").each(function (key, el) {
                var inputElId = el.id.replace(\"_slider\", \"\");
                var inputEl = \$('#' + inputElId);
                noUiSlider.create(el, {
                    start: 0,
                    range: {
                        min: [0, 1, 2],
                        max: 2
                    },
                    format: {
                        to: function (value) {
                            return parseInt(value);
                        },
                        from: function (value) {
                            return parseInt(value);
                        }
                    }
                });
                if (inputEl.length != 0) {
                    el.noUiSlider.set(maskValToSliderVal(inputEl.val()));
                    el.noUiSlider.on('update', function(values, handle) {
                        var sliderVal = parseInt(values[handle]);
                        var sliderEl = \$('#' + this.target.id);
                        var legendElId = inputElId + \"_legend\";
                        var legendEl = \$('#' + legendElId);
                        var tr = sliderEl.closest('tr');
                        var inputElAllRoles = \$('#' + inputElId.replace('_' + sliderEl.attr('data-role'), ''));
                        if (tr.hasClass('field')) {
                            var entityName = tr.attr('data-entity');
                            var entityVal = \$('#' + escapeJqId(tr.attr('data-entity') + '_' + tr.attr('data-entity') + '_' + sliderEl.attr('data-role') + '')).val();
                            if (sliderVal > maskValToSliderVal(entityVal)) {
                                sliderVal = maskValToSliderVal(entityVal);
                                this.set(sliderVal);
                            }
                            inputEl.val(sliderValToMaskVal(sliderVal));
                        } else {
                            inputEl.val(sliderValToMaskVal(sliderVal));
                            var hasLock = tr.find('td:first-of-type i').hasClass('fa-lock');
                            tr.closest('table').find('tr.field .slider[data-role=\"' + sliderEl.attr('data-role') + '\"]').each(function (key, el) {
                                var iinputElId = el.id.replace(\"_slider\", \"\");
                                var iinputEl = \$('#' + iinputElId);
                                if (el.noUiSlider && (hasLock || sliderVal <= maskValToSliderVal(iinputEl.val()))) {
                                    el.noUiSlider.set(sliderVal);
                                }
                            });
                        }
                        var roleVals = { };
                        tr.find('input').not('[class=\"all-roles\"]').each(function (key, el) {
                            var jEl = \$(el);
                            var elRole = jEl.attr('data-role');
                            roleVals[elRole] = jEl.val();
                        });
                        inputElAllRoles.val(JSON.stringify(roleVals));

                        if (legendEl.length != 0) {
                            var displayVal;
                            switch (sliderVal) {
                                case 0:
                                    displayVal = 'kein Zugriff';
                                    break;
                                case 1:
                                    displayVal = 'nur lesen';
                                    break;
                                case 2:
                                    displayVal = 'schreiben';
                                    break;
                                default:
                                    displayVal = 'unbekannt';
                            }
                            legendEl.html(displayVal);
                        }
                    });
                }
            });
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "@NpoaSecurity/entitypermission/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 64,  205 => 61,  198 => 59,  184 => 55,  174 => 54,  169 => 53,  167 => 52,  166 => 51,  158 => 50,  154 => 48,  150 => 47,  138 => 45,  133 => 43,  130 => 42,  122 => 37,  117 => 36,  115 => 35,  109 => 34,  102 => 33,  98 => 32,  93 => 29,  82 => 27,  78 => 26,  71 => 22,  67 => 21,  63 => 20,  57 => 17,  50 => 13,  46 => 11,  42 => 10,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NpoaSecurity/entitypermission/index.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\entitypermission\\index.html.twig");
    }
}
