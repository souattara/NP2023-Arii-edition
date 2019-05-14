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

/* AriiGraphvizBundle::layout.html.twig */
class __TwigTemplate_d2e75837804fad11a674f8cc6043e07476639319df819aab1f84f4b6495372fa extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'dhtmlx' => [$this, 'block_dhtmlx'],
            'dhtmlx_plus' => [$this, 'block_dhtmlx_plus'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "AriiCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("AriiCoreBundle::base.html.twig", "AriiGraphvizBundle::layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_dhtmlx($context, array $blocks = [])
    {
        // line 3
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dhtmlx/skins/terrace/dhtmlx.css"), "html", null, true);
        echo "\" />
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dhtmlx/codebase/dhtmlx.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 6
    public function block_dhtmlx_plus($context, array $blocks = [])
    {
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "AriiGraphvizBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  66 => 8,  61 => 6,  55 => 4,  50 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiGraphvizBundle::layout.html.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\GraphvizBundle/Resources/views/layout.html.twig");
    }
}
