<?php

/* @NpoaSecurity/confignotifier/confignotifier.html.twig */
class __TwigTemplate_d19a1facd68268ebf72aab73f0d0c088e2f11f0383b73ce8a174c97e462fc05b extends Twig_Template
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
        $__internal_4d3d094bea0d11414bb1e0e2404f132be333d9732127e7f43746e5a3a6d0fa60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3d094bea0d11414bb1e0e2404f132be333d9732127e7f43746e5a3a6d0fa60->enter($__internal_4d3d094bea0d11414bb1e0e2404f132be333d9732127e7f43746e5a3a6d0fa60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NpoaSecurity/confignotifier/confignotifier.html.twig"));

        $__internal_0bc7e344d933ab5b9be73a55239ad5272bb981501af965738aec8822968e57e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc7e344d933ab5b9be73a55239ad5272bb981501af965738aec8822968e57e4->enter($__internal_0bc7e344d933ab5b9be73a55239ad5272bb981501af965738aec8822968e57e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NpoaSecurity/confignotifier/confignotifier.html.twig"));

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
        
        $__internal_4d3d094bea0d11414bb1e0e2404f132be333d9732127e7f43746e5a3a6d0fa60->leave($__internal_4d3d094bea0d11414bb1e0e2404f132be333d9732127e7f43746e5a3a6d0fa60_prof);

        
        $__internal_0bc7e344d933ab5b9be73a55239ad5272bb981501af965738aec8822968e57e4->leave($__internal_0bc7e344d933ab5b9be73a55239ad5272bb981501af965738aec8822968e57e4_prof);

    }

    public function getTemplateName()
    {
        return "@NpoaSecurity/confignotifier/confignotifier.html.twig";
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
</script>", "@NpoaSecurity/confignotifier/confignotifier.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\confignotifier\\confignotifier.html.twig");
    }
}
