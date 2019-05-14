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

/* AriiJOCBundle:Jobs:form_execution.json.twig */
class __TwigTemplate_960a4e66fdb468a0f17ea298f3cc10f501c942ddbd33fc40ffe8e80f0d32104d extends \Twig\Template
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
        labelWidth:\"80\",
        inputWidth:\"300\" },
    {   type:\"input\",    
            name: \"START_TIME\", 
            label:\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start"), "html", null, true);
        echo "\"
    },
    {   type:\"input\",    
            name: \"END_TIME\", 
            label:\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("End"), "html", null, true);
        echo "\"
    },
    {   type:\"input\",    
            name: \"ERROR_TEXT\", 
            label:\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error"), "html", null, true);
        echo "\",
            rows: 2
    },
    {type:\"newcolumn\"},  
    {type:\"input\",    name: \"CAUSE\", label:\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cause"), "html", null, true);
        echo "\", inputWidth:\"150\"},
    {type:\"input\",    name: \"EXIT_CODE\", label:\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Exit"), "html", null, true);
        echo "\", inputWidth:\"150\"},
    {type:\"input\",    name: \"PID\", label:\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PID"), "html", null, true);
        echo "\", inputWidth:\"150\"},    
    {type:\"input\",    name: \"HSTORY_ID\", label:\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("History"), "html", null, true);
        echo "\", inputWidth:\"150\"},    
    {type:\"hidden\",    name: \"ID\" }
]
";
    }

    public function getTemplateName()
    {
        return "AriiJOCBundle:Jobs:form_execution.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  74 => 23,  70 => 22,  66 => 21,  59 => 17,  52 => 13,  45 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiJOCBundle:Jobs:form_execution.json.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\JOCBundle/Resources/views/Jobs/form_execution.json.twig");
    }
}
