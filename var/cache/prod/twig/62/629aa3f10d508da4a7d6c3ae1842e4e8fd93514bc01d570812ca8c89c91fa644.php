<?php

/* :email:password_reset.txt.twig */
class __TwigTemplate_4203af5e0d8e75595587ffa69c12b462c95a4526d00363049e6eb035b3d8815b extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login.password_reset_mail.intro");
        echo "
";
        // line 4
        echo ($context["password_reset_confirm_link"] ?? null);
        echo "

";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login.password_reset_mail.info");
        echo "
";
        // line 7
        echo ($context["password_reset_link"] ?? null);
        echo "

";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mails.signature");
    }

    public function getTemplateName()
    {
        return ":email:password_reset.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  37 => 7,  33 => 6,  28 => 4,  24 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":email:password_reset.txt.twig", "K:\\Npointern\\app/Resources\\views/email/password_reset.txt.twig");
    }
}
