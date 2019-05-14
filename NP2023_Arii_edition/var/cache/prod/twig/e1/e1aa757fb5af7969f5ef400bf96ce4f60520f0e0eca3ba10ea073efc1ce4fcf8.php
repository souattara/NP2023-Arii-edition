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

/* AriiGraphvizBundle:Default:legend.xml.twig */
class __TwigTemplate_97c128f7139f6c7ff6fb4e95a77bd8680d1462e64402698f565bf2b97cd5b01e extends \Twig\Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<rows>
    <row><cell>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/wa/order.png"), "html", null, true);
        echo "</cell><cell>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order"), "html", null, true);
        echo "</cell></row>
    <row><cell>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/wa/job_chain.png"), "html", null, true);
        echo "</cell><cell>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Job chain"), "html", null, true);
        echo "</cell></row>
    <row><cell>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/wa/ordered_job.png"), "html", null, true);
        echo "</cell><cell>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ordered job"), "html", null, true);
        echo "</cell></row>
    <row><cell>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/wa/standalone_job.png"), "html", null, true);
        echo "</cell><cell>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Standalone job"), "html", null, true);
        echo "</cell></row>
    <row><cell>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/wa/schedule.png"), "html", null, true);
        echo "</cell><cell>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Schedule"), "html", null, true);
        echo "</cell></row>
    <row><cell>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/wa/calendar.png"), "html", null, true);
        echo "</cell><cell>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Calendar"), "html", null, true);
        echo "</cell></row>
    <row><cell>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/wa/config.png"), "html", null, true);
        echo "</cell><cell>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Config file"), "html", null, true);
        echo "</cell></row>
    <row><cell>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/wa/params.png"), "html", null, true);
        echo "</cell><cell>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Parameters file"), "html", null, true);
        echo "</cell></row>
    <row><cell>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/wa/events.png"), "html", null, true);
        echo "</cell><cell>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events"), "html", null, true);
        echo "</cell></row>
</rows>";
    }

    public function getTemplateName()
    {
        return "AriiGraphvizBundle:Default:legend.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 11,  81 => 10,  75 => 9,  69 => 8,  63 => 7,  57 => 6,  51 => 5,  45 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiGraphvizBundle:Default:legend.xml.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\GraphvizBundle/Resources/views/Default/legend.xml.twig");
    }
}
