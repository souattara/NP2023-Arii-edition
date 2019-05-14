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

/* AriiGraphvizBundle:Default:ribbon.json.twig */
class __TwigTemplate_e1775e07b9589fb169b9ffaabd1174985d55033b2b9bcc468baca89a7918400d extends \Twig\Template
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
      {   \"type\":\"block\", 
          text:\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("module.GVZ"), "html", null, true);
        echo "\", 
          \"text_pos\": \"top\", 
          \"list\":
          [
            {   \"type\": \"button\", 
                 text:\"\", 
                 \"isbig\": true, 
                 \"img\": \"48/gvz.png\"
            }
/*            {   \"type\": \"Select\", 
                 text:\"\", 
                 \"img\": \"jobscheduler.png\",
                 items:
                 [ 
                    { id:\"audit\", text: \"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Audit"), "html", null, true);
        echo "\", img: \"audit.png\" }
                 ]
             }
*/         ]
      },
      {   \"type\":\"block\", 
          text:\"JobScheduler\", 
          \"text_pos\": \"bottom\", 
          \"list\":
          [
            { \"type\": \"button\", id:\"live\", text: \"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Live"), "html", null, true);
        echo "\", img: \"live.png\" },
            { \"type\": \"button\", id:\"_all\", text: \"'";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "'\", img: \"all.png\"  },
            { \"type\": \"buttonSelect\", id:\"remote\", text: \"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remote"), "html", null, true);
        echo "\", img: \"remote.png\",
              items: [ ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Schedulers"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["scheduler"]) {
            echo "{ id: \"remote_";
            echo twig_escape_filter($this->env, $context["scheduler"], "html", null, true);
            echo "\", text: \"";
            echo twig_escape_filter($this->env, $context["scheduler"], "html", null, true);
            echo "\" }";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scheduler'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo " 
                    ]
            }
         ]
      }
   ]
}
";
    }

    public function getTemplateName()
    {
        return "AriiGraphvizBundle:Default:ribbon.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  83 => 32,  79 => 31,  75 => 30,  71 => 29,  58 => 19,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiGraphvizBundle:Default:ribbon.json.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\GraphvizBundle/Resources/views/Default/ribbon.json.twig");
    }
}
