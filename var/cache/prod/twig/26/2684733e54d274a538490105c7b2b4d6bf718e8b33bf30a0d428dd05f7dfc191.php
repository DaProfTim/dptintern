<?php

/* :email:email_change.txt.twig */
class __TwigTemplate_c7fbdaa5b4fc45da9ede9012c37ec24c98a3f221f0922b78d43d56c13aae4f6c extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mails.default_greeting");
        echo ",

";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.email_change_mail.intro");
        echo "
";
        // line 4
        echo ($context["email_change_confirm_link"] ?? null);
        echo "

";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.email_change_mail.info");
        echo "

";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mails.signature");
    }

    public function getTemplateName()
    {
        return ":email:email_change.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  33 => 6,  28 => 4,  24 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":email:email_change.txt.twig", "K:\\Npointern\\app/Resources\\views/email/email_change.txt.twig");
    }
}
