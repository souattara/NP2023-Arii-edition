<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* AriiJOCBundle:Orders:form_toolbar.xml.twig */
class __TwigTemplate_f27fb4f82197205547f2ef8fcfcee202e690495eda5ee3a9d421353bf63efe67 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<toolbar>    
    <item type=\"button\" id=\"start_order\" text=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start"), "html", null, true);
        echo "\" img=\"start_task.png\"/>
    <item id=\"date_select\" type=\"button\" img=\"date.png\" />
    <item id=\"ref_date\" type=\"buttonInput\" value=\"now\" width=\"140\" title=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("date.reference"), "html", null, true);
        echo "\"/>
    <item id=\"sep3\" type=\"separator\"/>
    <item type=\"button\" id=\"suspend_order\" text=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stop"), "html", null, true);
        echo "\" img=\"stop.png\"/>
    <item type=\"button\" id=\"resume_order\" text=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unstop"), "html", null, true);
        echo "\" img=\"unstop.png\"/>
</toolbar>";
    }

    public function getTemplateName()
    {
        return "AriiJOCBundle:Orders:form_toolbar.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  48 => 6,  43 => 4,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiJOCBundle:Orders:form_toolbar.xml.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\JOCBundle/Resources/views/Orders/form_toolbar.xml.twig");
    }
}
