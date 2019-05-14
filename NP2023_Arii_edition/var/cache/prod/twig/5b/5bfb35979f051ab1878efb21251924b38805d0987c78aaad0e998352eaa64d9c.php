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

/* AriiJOCBundle:Orders:grid_menu.xml.twig */
class __TwigTemplate_749e3fc30c086b7c69759c9bf07656a8d85182434c28672252a5e43bc3b8b850 extends \Twig\Template
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
        echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
<menu>
    <item id=\"menu_order\" text=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order"), "html", null, true);
        echo "\"  img=\"order.png\">
<!--        <item id=\"start_task\" text=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start task"), "html", null, true);
        echo "\" img=\"add.png\"></item>
        <item id=\"kill_task\"     text=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Kill task"), "html", null, true);
        echo "\" img=\"kill.png\"></item>
        <item id=\"delete_task\"     text=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete task"), "html", null, true);
        echo "\" img=\"delete.png\"></item>
        <item id=\"stop_job\"     text=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stop job"), "html", null, true);
        echo "\" img=\"stop.png\"></item>
        <item id=\"unstop_job\"     text=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unstop job"), "html", null, true);
        echo "\" img=\"unstop.png\"></item>
-->
<!--        <item id=\"show_why\"   text=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Diagnostic"), "html", null, true);
        echo "\" img=\"why.png\"></item>
-->     <item id=\"order_view\"   text=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View"), "html", null, true);
        echo "\" img=\"view.png\"></item>
        <item id=\"order_history\"   text=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("History"), "html", null, true);
        echo "\" img=\"history.png\"></item>
<!--        <item id=\"purge_job\"     text=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Purge task"), "html", null, true);
        echo "\" img=\"database_delete.png\"></item>    
-->
    </item>
    <item id=\"doc\"   text=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Documentation"), "html", null, true);
        echo "\" img=\"doc.png\"></item>    
</menu>
";
    }

    public function getTemplateName()
    {
        return "AriiJOCBundle:Orders:grid_menu.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiJOCBundle:Orders:grid_menu.xml.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\JOCBundle/Resources/views/Orders/grid_menu.xml.twig");
    }
}
