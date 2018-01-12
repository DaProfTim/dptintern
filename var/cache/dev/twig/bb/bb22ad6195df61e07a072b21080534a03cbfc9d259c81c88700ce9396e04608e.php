<?php

/* NpoaSecurityBundle:confignotifier:confignotifier.html.twig */
class __TwigTemplate_f57107b2ae107ef8a5e9cc9c25619141216af3cb6c8a4ae459d8dc1987ef4efa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c422134d633ee88244c7c261dfa6d53c8789ab3d9e3c17fed8141aea723c999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c422134d633ee88244c7c261dfa6d53c8789ab3d9e3c17fed8141aea723c999->enter($__internal_4c422134d633ee88244c7c261dfa6d53c8789ab3d9e3c17fed8141aea723c999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NpoaSecurityBundle:confignotifier:confignotifier.html.twig"));

        $__internal_5178b213b4c9b36b587c58d672b0f15eee2af46730805862a020aec61bb0b5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5178b213b4c9b36b587c58d672b0f15eee2af46730805862a020aec61bb0b5ef->enter($__internal_5178b213b4c9b36b587c58d672b0f15eee2af46730805862a020aec61bb0b5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NpoaSecurityBundle:confignotifier:confignotifier.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    var notifierCheckTimer = setInterval(function() { if (typeof Ext.Msg != 'undefined') { showNotifierMsg(); } }, 1000);
    var showNotifierMsg = function() {
        clearInterval(notifierCheckTimer);
        Ext.Msg.show({
            title: 'NpoaSecurityConfig Änderung',
            message: 'Es wurde erkannt, dass die NpoaSecurityConfig im System nicht mit der Konfigurationsdatei übereinstimmt. ' +
            'Möchten Sie die Konfigurationsdatei jetzt importieren? Der Vorgang kann bis zu einer Minute dauern.<br><br>',
            buttonText: {
                yes: 'Ja',
                no: 'Nein, Änderung ignorieren',
                cancel: 'Nein'
            },
            buttons: Ext.Msg.YESNOCANCEL,
            fn: function (btnId) {
                if (btnId == 'yes') {
                    Ext.getBody().mask('Importiere, bitte warten...', 'loading');
                    Ext.Ajax.request({
                        url: '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["routeConfigImport"]) || array_key_exists("routeConfigImport", $context) ? $context["routeConfigImport"] : (function () { throw new Twig_Error_Runtime('Variable "routeConfigImport" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
        echo "',
                        success: function (response) {
                            Ext.getBody().unmask();
                            var responseJson = Ext.decode(response.responseText);
                            if (responseJson.success) {
                                Ext.Msg.show({
                                    title: 'Import erfolgreich',
                                    message: 'Die Konfigurationsdatei wurde erfolgreich importiert. Klicken Sie auf OK, um die Seite neuzuladen.',
                                    buttons: Ext.Msg.OK,
                                    fn: function (btn) {
                                        if (btn === 'ok') {
                                            location.reload();
                                        }
                                    }
                                });
                            } else {
                                Ext.msg.alert('Fehler', 'Es ist ein Fehler beim Import aufgetreten');
                            }
                        },
                        failure: function (response) {
                            Ext.getBody().unmask();
                            Ext.msg.alert('Fehler', 'Es ist ein Fehler beim Import aufgetreten');
                        }
                    });
                } else if (btnId == 'no') {
                    Ext.Ajax.request({
                        url: '";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["routeConfigIgnore"]) || array_key_exists("routeConfigIgnore", $context) ? $context["routeConfigIgnore"] : (function () { throw new Twig_Error_Runtime('Variable "routeConfigIgnore" does not exist.', 45, $this->getSourceContext()); })()), "html", null, true);
        echo "',
                        success: function (response) {
                            var responseJson = Ext.decode(response.responseText);
                            if (!responseJson.success) {
                                Ext.msg.alert('Fehler', 'Es ist ein Fehler beim Ignorieren aufgetreten');
                            }
                        },
                        failure: function (response) {
                            Ext.msg.alert('Fehler', 'Es ist ein Fehler beim Ignorieren aufgetreten');
                        }
                    });
                }
            }
        });
    };
</script>";
        
        $__internal_4c422134d633ee88244c7c261dfa6d53c8789ab3d9e3c17fed8141aea723c999->leave($__internal_4c422134d633ee88244c7c261dfa6d53c8789ab3d9e3c17fed8141aea723c999_prof);

        
        $__internal_5178b213b4c9b36b587c58d672b0f15eee2af46730805862a020aec61bb0b5ef->leave($__internal_5178b213b4c9b36b587c58d672b0f15eee2af46730805862a020aec61bb0b5ef_prof);

    }

    public function getTemplateName()
    {
        return "NpoaSecurityBundle:confignotifier:confignotifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 45,  45 => 19,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
    var notifierCheckTimer = setInterval(function() { if (typeof Ext.Msg != 'undefined') { showNotifierMsg(); } }, 1000);
    var showNotifierMsg = function() {
        clearInterval(notifierCheckTimer);
        Ext.Msg.show({
            title: 'NpoaSecurityConfig Änderung',
            message: 'Es wurde erkannt, dass die NpoaSecurityConfig im System nicht mit der Konfigurationsdatei übereinstimmt. ' +
            'Möchten Sie die Konfigurationsdatei jetzt importieren? Der Vorgang kann bis zu einer Minute dauern.<br><br>',
            buttonText: {
                yes: 'Ja',
                no: 'Nein, Änderung ignorieren',
                cancel: 'Nein'
            },
            buttons: Ext.Msg.YESNOCANCEL,
            fn: function (btnId) {
                if (btnId == 'yes') {
                    Ext.getBody().mask('Importiere, bitte warten...', 'loading');
                    Ext.Ajax.request({
                        url: '{{ routeConfigImport }}',
                        success: function (response) {
                            Ext.getBody().unmask();
                            var responseJson = Ext.decode(response.responseText);
                            if (responseJson.success) {
                                Ext.Msg.show({
                                    title: 'Import erfolgreich',
                                    message: 'Die Konfigurationsdatei wurde erfolgreich importiert. Klicken Sie auf OK, um die Seite neuzuladen.',
                                    buttons: Ext.Msg.OK,
                                    fn: function (btn) {
                                        if (btn === 'ok') {
                                            location.reload();
                                        }
                                    }
                                });
                            } else {
                                Ext.msg.alert('Fehler', 'Es ist ein Fehler beim Import aufgetreten');
                            }
                        },
                        failure: function (response) {
                            Ext.getBody().unmask();
                            Ext.msg.alert('Fehler', 'Es ist ein Fehler beim Import aufgetreten');
                        }
                    });
                } else if (btnId == 'no') {
                    Ext.Ajax.request({
                        url: '{{ routeConfigIgnore }}',
                        success: function (response) {
                            var responseJson = Ext.decode(response.responseText);
                            if (!responseJson.success) {
                                Ext.msg.alert('Fehler', 'Es ist ein Fehler beim Ignorieren aufgetreten');
                            }
                        },
                        failure: function (response) {
                            Ext.msg.alert('Fehler', 'Es ist ein Fehler beim Ignorieren aufgetreten');
                        }
                    });
                }
            }
        });
    };
</script>", "NpoaSecurityBundle:confignotifier:confignotifier.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle/Resources/views/confignotifier/confignotifier.html.twig");
    }
}
