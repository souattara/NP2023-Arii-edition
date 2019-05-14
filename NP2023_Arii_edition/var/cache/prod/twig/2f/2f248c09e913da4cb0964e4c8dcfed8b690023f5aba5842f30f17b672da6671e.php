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

/* AriiCoreBundle::layout.html.twig */
class __TwigTemplate_74d2494e79dfc1f45b9ecbd121a552866110d18c49562d34212fb950fb0074db extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AriiCoreBundle::base.html.twig", "AriiCoreBundle::layout.html.twig", 1);
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
    public function block_script($context, array $blocks = [])
    {
        // line 11
        echo "<script>
function StateRibbon (itemid,state) {
    switch(itemid) {
        default:
            alert(itemid);
    }
}

function ClickRibbon (itemid,state) {
    switch(itemid) {
        case 'home':
            window.location = \"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_Home_index");
        echo "\";
            break;
        case 'profile':
            window.location = \"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_my_account");
        echo "\";
            break;
        case 'filter':
            window.location = \"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_filters");
        echo "\";
            break;
        case 'audit':
            window.location = \"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_Home_audit");
        echo "\";
            break;
        case 'errors':
            window.location = \"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_Home_errors");
        echo "\";
            break;
        case 'docs':
            window.location = \"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_docs");
        echo "\";
            break;
        case 'my_account':
            break;
        default:
            alert(itemid);
    }
}
</script>
";
    }

    public function getTemplateName()
    {
        return "AriiCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  111 => 34,  105 => 31,  99 => 28,  93 => 25,  87 => 22,  74 => 11,  71 => 10,  66 => 8,  61 => 6,  55 => 4,  50 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiCoreBundle::layout.html.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\CoreBundle/Resources/views/layout.html.twig");
    }
}
