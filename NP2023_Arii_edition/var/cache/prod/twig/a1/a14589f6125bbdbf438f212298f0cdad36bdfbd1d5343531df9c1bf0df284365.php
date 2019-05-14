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

/* AriiCoreBundle:Templates:bootstrap.html.twig */
class __TwigTemplate_37b8b72db98a6c5cca0127ea7f213c425aa8e9651ff16d2723476f743c4b04da extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "AriiCoreBundle::doc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("AriiCoreBundle::doc.html.twig", "AriiCoreBundle:Templates:bootstrap.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
<!-- Latest compiled and minified JavaScript -->
<!-- <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> -->
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        // line 12
        echo "<body>
<div class=\"container-fluid\">
";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["doc"] ?? null), "content", []);
        echo "
</div>    
</body>
";
    }

    public function getTemplateName()
    {
        return "AriiCoreBundle:Templates:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  70 => 12,  67 => 11,  61 => 9,  56 => 7,  51 => 5,  48 => 4,  45 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiCoreBundle:Templates:bootstrap.html.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\CoreBundle/Resources/views/Templates/bootstrap.html.twig");
    }
}
