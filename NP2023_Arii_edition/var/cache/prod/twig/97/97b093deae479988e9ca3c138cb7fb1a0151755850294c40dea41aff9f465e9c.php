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

/* AriiUserBundle::layout.html.twig */
class __TwigTemplate_561500b38cd84cad5a95f637e5249b3c4e91c0604b3d8b0c579feab1a204c1b3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'dhtmlx' => [$this, 'block_dhtmlx'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "AriiCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("AriiCoreBundle::base.html.twig", "AriiUserBundle::layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_dhtmlx($context, array $blocks = [])
    {
        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dhtmlx/skins/terrace/dhtmlx.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dhtmlx/codebase/dhtmlx.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
    }

    // line 8
    public function block_script($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "AriiUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  60 => 6,  54 => 4,  49 => 3,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiUserBundle::layout.html.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\UserBundle/Resources/views/layout.html.twig");
    }
}
