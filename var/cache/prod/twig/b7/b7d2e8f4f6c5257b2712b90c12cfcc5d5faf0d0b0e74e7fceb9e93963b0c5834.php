<?php

/* @NpoaSecurity/confignotifier/confignotifier.html.twig */
class __TwigTemplate_09c0c54c14933337821b73d01326c2a74a71c6b4ca5310cbc6b48c2c62374f50 extends Twig_Template
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
        echo twig_escape_filter($this->env, ($context["routeConfigImport"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["routeConfigIgnore"] ?? null), "html", null, true);
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
        return array (  68 => 45,  39 => 19,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NpoaSecurity/confignotifier/confignotifier.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\confignotifier\\confignotifier.html.twig");
    }
}
