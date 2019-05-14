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

/* AriiJOCBundle:Orders:grid_toolbar.xml.twig */
class __TwigTemplate_53a95a838c940665ee089f21c7c58ba1bd2daf656a8bcadc667e0bb0773bd321 extends \Twig\Template
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
    <item type=\"buttonSelect\" title=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort"), "html", null, true);
        echo "\" img=\"sort.png\">
        <item type=\"button\" text=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Spooler"), "html", null, true);
        echo "\" id=\"sort_spooler\" img=\"spooler.png\"/>
        <item type=\"button\" text=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chain"), "html", null, true);
        echo "\" id=\"sort_chain\" img=\"job_chain.png\"/>
<!--        <item type=\"button\" text=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start time"), "html", null, true);
        echo "\" id=\"sort_time\" img=\"time.png\"/>
-->        <item type=\"button\" text=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last executions"), "html", null, true);
        echo "\" id=\"sort_last\" img=\"last.png\"/>        
    </item> 
    <item id=\"seps\" type=\"separator\"/>
    <item type=\"buttonTwoState\"  title=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show spooler"), "html", null, true);
        echo "\" id=\"show_spooler\" img=\"spooler.png\"/>       
    <item type=\"buttonTwoState\"  title=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show message"), "html", null, true);
        echo "\" id=\"comment\" img=\"comment.png\"/>       
    <item type=\"buttonTwoState\" title=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show times"), "html", null, true);
        echo "\" id=\"show_time\" img=\"show_time.png\"/>
    <item type=\"buttonTwoState\"  title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show information"), "html", null, true);
        echo "\" id=\"show_info\" img=\"information.png\"/>       
    <item id=\"sepl\" type=\"separator\"/>
    <item type=\"button\" title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Printer format"), "html", null, true);
        echo "\" id=\"print\" img=\"printer.png\"/>
<!--    <item type=\"button\" title=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Excel output"), "html", null, true);
        echo "\" id=\"xls\" img=\"xls.png\"/>
-->    <item type=\"button\" title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rss Feed"), "html", null, true);
        echo "\" id=\"rss\" img=\"feed.png\"/>
    <item id=\"sepr\" type=\"separator\"/>
    <item type=\"button\" title=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Refresh data"), "html", null, true);
        echo "\" id=\"refresh\" img=\"refresh.png\"/>
</toolbar>";
    }

    public function getTemplateName()
    {
        return "AriiJOCBundle:Orders:grid_toolbar.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  85 => 16,  81 => 15,  77 => 14,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiJOCBundle:Orders:grid_toolbar.xml.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\JOCBundle/Resources/views/Orders/grid_toolbar.xml.twig");
    }
}
