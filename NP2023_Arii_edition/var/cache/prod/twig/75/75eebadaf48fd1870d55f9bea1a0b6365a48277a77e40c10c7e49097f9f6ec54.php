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

/* AriiCoreBundle::base.html.twig */
class __TwigTemplate_273ccf06f084fcdd2c231f5fb0a08c736b10c8cc6ec4557ca38c95425052b3e7 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style_plus' => [$this, 'block_style_plus'],
            'dhtmlx' => [$this, 'block_dhtmlx'],
            'dhtmlx_plus' => [$this, 'block_dhtmlx_plus'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        ";
        // line 8
        $this->displayBlock('style_plus', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('dhtmlx', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('dhtmlx_plus', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style>
            html, body {
                width: 100%;      /*provides the correct work of a full-screen layout*/ 
                height: 100%;     /*provides the correct work of a full-screen layout*/
//                overflow: hidden; /*hides the default body's space*/
                margin: 0px;      /*hides the body's scrolls*/
            }
        </style>
        ";
        // line 20
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('script', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        echo "Ari'i";
    }

    // line 8
    public function block_style_plus($context, array $blocks = [])
    {
    }

    // line 9
    public function block_dhtmlx($context, array $blocks = [])
    {
    }

    // line 10
    public function block_dhtmlx_plus($context, array $blocks = [])
    {
    }

    // line 20
    public function block_head($context, array $blocks = [])
    {
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
    }

    // line 24
    public function block_script($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "AriiCoreBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 24,  118 => 23,  113 => 20,  108 => 10,  103 => 9,  98 => 8,  92 => 6,  86 => 25,  83 => 24,  81 => 23,  77 => 21,  75 => 20,  62 => 11,  59 => 10,  56 => 9,  54 => 8,  49 => 6,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiCoreBundle::base.html.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\CoreBundle/Resources/views/base.html.twig");
    }
}
