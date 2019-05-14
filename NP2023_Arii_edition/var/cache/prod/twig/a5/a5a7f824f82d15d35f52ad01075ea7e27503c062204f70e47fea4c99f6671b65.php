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

/* AriiCoreBundle::doc.html.twig */
class __TwigTemplate_0dcd56900be7211c079ee9c312810db38fd286732ad1bafbc0bbd8e3e0371a72 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'dhtmlx' => [$this, 'block_dhtmlx'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "AriiCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("AriiCoreBundle::base.html.twig", "AriiCoreBundle::doc.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_dhtmlx($context, array $blocks = [])
    {
        // line 3
        echo "<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
<!-- Latest compiled and minified JavaScript -->
<!-- <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> -->
";
    }

    public function getTemplateName()
    {
        return "AriiCoreBundle::doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  55 => 6,  50 => 4,  47 => 3,  44 => 2,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiCoreBundle::doc.html.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\CoreBundle/Resources/views/doc.html.twig");
    }
}
