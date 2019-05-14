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

/* AriiCoreBundle:Default:toolbar.xml.twig */
class __TwigTemplate_339380f3b7133ed85b8bafde31baac21ea5c325139993d12313a2e538cf3d090 extends \Twig\Template
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
        <item type=\"buttonTwoState\" id=\"2\" img=\"2.gif\"/>
        <item type=\"buttonTwoState\" id=\"4\" img=\"4.gif\" selected=\"true\"/>
        <item type=\"buttonTwoState\" id=\"8\" img=\"8.gif\"/>
 </toolbar>";
    }

    public function getTemplateName()
    {
        return "AriiCoreBundle:Default:toolbar.xml.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiCoreBundle:Default:toolbar.xml.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\CoreBundle/Resources/views/Default/toolbar.xml.twig");
    }
}
