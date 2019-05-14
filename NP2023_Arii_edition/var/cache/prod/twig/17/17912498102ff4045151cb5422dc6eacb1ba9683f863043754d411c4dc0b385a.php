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

/* AriiUserBundle:Security:ribbon.json.twig */
class __TwigTemplate_d04b8943a878b1e6fecc64d82c8d01c1b85f693de024ae69f126f3f51f439a76 extends \Twig\Template
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
        echo "{
   \"items\":
   [
        {   
            type:       \"block\", 
            text:       \"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home"), "html", null, true);
        echo "\", 
            text_pos:   \"top\", 
            list:
                [
                   {   
                        type:   \"button\", 
                        id:     \"home\",
                        text:   \"\", 
                        isbig:  true, 
                        img:    \"48/arii.png\"
                    },
                    {   
                         type:   \"buttonSelect\", 
                         id:     \"lang\",
                         text:   \"\", 
                         img:    \"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "locale", []), "html", null, true);
        echo ".png\",
                         items: [
";
        // line 23
        $context["routeParams"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "_route_params"], "method");
        echo "                         
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "fr", 1 => "en"]);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 25
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "locale", []) != $context["lang"])) {
                // line 26
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, ($context["routeParams"] ?? null), "_locale", [], "array", true, true)) {
                    // line 27
                    echo "    ";
                    $context["routeParams"] = twig_array_merge(($context["routeParams"] ?? null), ["_locale" => $context["lang"]]);
                    // line 28
                    echo "    ";
                }
                // line 29
                echo "            { id: \"";
                echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                echo "\", text: \"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("lang." . $context["lang"])), "html", null, true);
                echo "\", img: \"";
                echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                echo ".png\" },
        ";
            }
            // line 31
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                         ]
                    }
                ]
        }
   ]
}
";
    }

    public function getTemplateName()
    {
        return "AriiUserBundle:Security:ribbon.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  95 => 31,  85 => 29,  82 => 28,  79 => 27,  76 => 26,  73 => 25,  69 => 24,  65 => 23,  60 => 21,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiUserBundle:Security:ribbon.json.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\UserBundle/Resources/views/Security/ribbon.json.twig");
    }
}
