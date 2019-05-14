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

/* AriiGraphvizBundle:Default:toolbar.xml.twig */
class __TwigTemplate_95923ebfc5ac5aaafbb72d53b907df499a9657a11e1954ed6fd53ddaf01c31cf extends \Twig\Template
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
        echo "<?xml version=\"1.0\"?>
<toolbar>
    <item id=\"location\" type=\"buttonInput\" value=\"live\" width=\"340\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Path"), "html", null, true);
        echo "\"/>
    <item id=\"splines\" type=\"buttonSelect\" img=\"splines.png\" title=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lines"), "html", null, true);
        echo "\">
                <item type=\"button\" id=\"polyline\"  text=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Poly line"), "html", null, true);
        echo "\" select=\"true\" />
                <item type=\"button\" id=\"curved\"  text=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Curved"), "html", null, true);
        echo "\" />
                <item type=\"button\" id=\"line\"  text=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Line"), "html", null, true);
        echo "\" />
                <item type=\"button\" id=\"ortho\"  text=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ortho"), "html", null, true);
        echo "\" />
                <item type=\"button\" id=\"none\"  text=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("None"), "html", null, true);
        echo "\" />
    </item>
    <item id=\"sep1\" type=\"separator\"/>
    <item id=\"chains\" type=\"buttonTwoState\" value=\"yes\" img=\"job_chain.png\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Job chains"), "html", null, true);
        echo "\"/>
    <item id=\"jobs\" type=\"buttonTwoState\" value=\"yes\" img=\"job.png\" title=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Jobs"), "html", null, true);
        echo "\"/>
    <item id=\"config\" type=\"buttonTwoState\" value=\"yes\" img=\"config.png\" title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Config"), "html", null, true);
        echo "\"/>
    <item id=\"parameters\" type=\"buttonTwoState\" value=\"yes\" img=\"params.png\" title=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Parameters"), "html", null, true);
        echo "\"/>
    <item id=\"events\" type=\"buttonTwoState\" value=\"yes\" img=\"events.png\" title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events"), "html", null, true);
        echo "\"/>
    <item id=\"sep2\" type=\"separator\"/>
    <item id=\"picture\" type=\"buttonSelect\" img=\"photo.png\" title=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Picture"), "html", null, true);
        echo "\">
                <item type=\"button\" id=\"svg\"  text=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Vectoriel file (SVG)"), "html", null, true);
        echo "\" img=\"svg.png\" selected=\"true\" />
<!--                <item type=\"button\" id=\"pdf\"  text=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Portable document (PDF)"), "html", null, true);
        echo "\" img=\"pdf.png\"/>
-->                <item type=\"button\" id=\"png\"  text=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bitmap image (PNG)"), "html", null, true);
        echo "\" img=\"png.png\"/>
    </item>
 </toolbar>";
    }

    public function getTemplateName()
    {
        return "AriiGraphvizBundle:Default:toolbar.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  98 => 20,  94 => 19,  90 => 18,  85 => 16,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiGraphvizBundle:Default:toolbar.xml.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\GraphvizBundle/Resources/views/Default/toolbar.xml.twig");
    }
}
