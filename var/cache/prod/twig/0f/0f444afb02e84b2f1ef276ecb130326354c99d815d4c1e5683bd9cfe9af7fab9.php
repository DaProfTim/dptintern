<?php

/* email/email_change.txt.twig */
class __TwigTemplate_a950d9655408d9cbaec30514844f3922178840918d95e17ed9c8fb0d347da42b extends Twig_Template
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
        return "email/email_change.txt.twig";
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
        return new Twig_Source("", "email/email_change.txt.twig", "K:\\Npointern\\app\\Resources\\views\\email\\email_change.txt.twig");
    }
}
