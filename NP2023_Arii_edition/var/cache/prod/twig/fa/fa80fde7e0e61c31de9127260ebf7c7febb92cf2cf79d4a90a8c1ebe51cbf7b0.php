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

/* AriiJOCBundle:Orders:form.json.twig */
class __TwigTemplate_bef6ed78ad91c4a708d26cd740052ab18c3814df84234bbc10f2d1d91ab7368f extends \Twig\Template
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
        echo "[
    {type:\"settings\",
        position: \"label-left\", 
        labelAlign:\"right\", 
        labelWidth:\"60\",
        inputWidth:\"200\" },
    {   type:\"input\",    
            name: \"FOLDER\", 
            label:\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Folder"), "html", null, true);
        echo "\"
    },
    {   type:\"input\",    
            name: \"NAME\", 
            label:\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "\"
    },
    {   type:\"input\",    
            name: \"CHAIN\", 
            label:\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chain"), "html", null, true);
        echo "\"
    },
    {   type:\"input\",    
            name: \"TITLE\", 
            label:\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
        echo "\",
            rows: 2
    },
    {type:\"newcolumn\"},  
    {type:\"input\",    name: \"START_TIME\", label:\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Begin"), "html", null, true);
        echo "\", inputWidth:\"150\"},
    {type:\"input\",    name: \"SETBACK\", label:\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Setback"), "html", null, true);
        echo "\", inputWidth:\"150\"},
    {type:\"input\",    name: \"END_TIME\", label:\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("End"), "html", null, true);
        echo "\", inputWidth:\"150\"}, 
    {   type:\"input\",    
            name: \"STATE_TEXT\", 
            label:\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Output"), "html", null, true);
        echo "\", inputWidth:\"150\"
    },
    {type:\"newcolumn\"},  
    {type:\"input\",    name: \"PRIORITY\", label:\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        echo "\", inputWidth:\"150\"},
    {type:\"input\",    name: \"SETBACK_COUNT\", label:\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Count"), "html", null, true);
        echo "\", inputWidth:\"150\"},
    {type:\"input\",    name: \"NEXT_START_TIME\", label:\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next"), "html", null, true);
        echo "\", inputWidth:\"150\"},
    {type:\"input\",    name: \"IN_PROCESS_SINCE\", label:\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Since"), "html", null, true);
        echo "\", inputWidth:\"150\"},
    {type:\"checkbox\",    name: \"ON_BLACKLIST\", label:\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Black list"), "html", null, true);
        echo "\", inputWidth:\"150\"}, 
/*    {type:\"input\",    name: \"TOUCHED\", label:\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Touched"), "html", null, true);
        echo "\", inputWidth:\"150\"}, */
    {type:\"hidden\",    name: \"SUSPENDED\" },
    {type:\"hidden\",    name: \"SPOOLER_ID\" },
    {type:\"hidden\",    name: \"ID\" }
]
";
    }

    public function getTemplateName()
    {
        return "AriiJOCBundle:Orders:form.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  87 => 30,  81 => 27,  77 => 26,  73 => 25,  66 => 21,  59 => 17,  52 => 13,  45 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiJOCBundle:Orders:form.json.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\JOCBundle/Resources/views/Orders/form.json.twig");
    }
}
