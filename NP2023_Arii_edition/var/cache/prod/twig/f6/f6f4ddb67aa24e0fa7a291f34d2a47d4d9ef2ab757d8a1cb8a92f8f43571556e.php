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

/* AriiJOCBundle:Default:ribbon.json.twig */
class __TwigTemplate_40d4262d0fed5746c52693c0ae7006f21c7fd8ea60163cdf7cea7c43f1ac33ee extends \Twig\Template
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
   items:
   [
      {   type: \"block\", 
          text:  \"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("module.JOC"), "html", null, true);
        echo "\", 
          text_pos: \"top\", 
          list:
          [
             {   type: \"buttonSelect\", 
                 text: \"\", 
                 isbig: true, 
                 img: \"48/joc.png\",
                 id: \"b1\",
                 items:
                 [ 
                    { id:\"menu_order\", text: \"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders"), "html", null, true);
        echo "\", img: \"order.png\" },
                    { id:\"menu_job\", text: \"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Jobs"), "html", null, true);
        echo "\", img: \"standalone.png\" },
                    { id:\"menu_schedule\", text: \"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Schedules"), "html", null, true);
        echo "\", img: \"schedule.png\" },
                    { id:\"menu_lock\", text: \"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Locks"), "html", null, true);
        echo "\", img: \"lock.png\" },
/*                    {   type: \"buttonSelect\", 
                        text: \"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Jobs"), "html", null, true);
        echo "\", 
                        img:  \"job.png\", 
                        items:
                        [ 
                            { id:\"menu_ordered_job\", text: \"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ordered jobs"), "html", null, true);
        echo "\", img: \"ordered.png\" },
                            { id:\"menu_job\", text: \"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Standalone jobs"), "html", null, true);
        echo "\", img: \"standalone.png\" }
                        ]
                    },
                    {   type: \"buttonSelect\", 
                        text: \"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Network"), "html", null, true);
        echo "\", 
                        img:  \"network.png\", 
                        items:
                        [ 
                           { id:\"menu_spooler\", text: \"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Spoolers"), "html", null, true);
        echo "\", img: \"spooler.png\" },
                           { id:\"menu_pc\", text: \"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agents"), "html", null, true);
        echo "\", img: \"agent.png\" },
                           { id:\"menu_connect\", text: \"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Connections"), "html", null, true);
        echo "\", img: \"connect.png\" }
                        ]
                    }
*/                ]
              }
          ]
      },      
     {   \"type\":\"block\", 
          \"id\": \"current_filter\",
          ";
        // line 45
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", []), "get", [0 => "user_filter"], "method")) > 0)) {
            // line 46
            echo "          ";
            $context["filter"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", []), "get", [0 => "user_filter"], "method");
            // line 47
            echo "          text:\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "name", []), "html", null, true);
            echo "\",
          ";
        } else {
            // line 49
            echo "          text:\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter"), "html", null, true);
            echo "\", 
          ";
        }
        // line 51
        echo "          \"text_pos\": \"bottom\", 
          \"list\":
          [
             {   \"type\": \"buttonSelect\", 
                 text:\"\",
                 \"id\": \"Filters\",
                 \"isbig\": true, 
                 \"img\": \"48/search.png\", 
                 items:
                 [ 
     ";
        // line 61
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", []), "get", [0 => "UserFilters"], "method")) > 0)) {
            // line 62
            echo "    ";
            $context["filter"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", []), "get", [0 => "user_filter"], "method");
            echo "     
       ";
            // line 63
            $context["filters"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", []), "get", [0 => "UserFilters"], "method");
            echo "     
        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filters"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["filter"]) {
                // line 65
                echo "            { id:\"filter_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "id", []), "html", null, true);
                echo "\", text: \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", []), "html", null, true);
                echo "\" },
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "    ";
        }
        // line 68
        echo "                  ]
              },
              {id:\"filter_edit\",\"type\":\"button\",text:\"\",\"img\":\"edit.png\",\"tooltip\": \"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit filter"), "html", null, true);
        echo "\" },
              {id:\"filter_all\",\"type\":\"button\",text:\"\",\"img\":\"zoom_out.png\"},
          ]
      },
      {   \"type\":\"block\", 
          text:\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Monitor"), "html", null, true);
        echo "\", 
          \"text_pos\": \"bottom\", 
          \"list\":
          [

              {   id : \"group_2\", 
                  type : \"group\", 
                  list : 
                  [   {id:\"chained\",\"type\":\"buttonTwoState\",text:\"\",\"img\":\"ordered.png\" },
                      {id:\"only_warning\",\"type\":\"buttonTwoState\",text:\"\",\"img\":\"warning.png\"/* , state: true*/ }
                  ]
              },
              {   id: \"refresh\", 
                  \"type\":\"buttonSelect\", 
                  text:\"--:--:--\", 
                  \"img\": \"refresh.png\",
                  \"items\": 
                  [ 
                     { id: \"5\", text: \"5 ";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("seconds"), "html", null, true);
        echo "\" },
                     { id: \"30\", text: \"30 ";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("seconds"), "html", null, true);
        echo "\" },
                     { id: \"60\", text: \"1 ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("minute"), "html", null, true);
        echo "\" },
                     { id: \"300\", text: \"5 ";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("minutes"), "html", null, true);
        echo "\" },
                     { id: \"1800\", text: \"15 ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("minutes"), "html", null, true);
        echo "\" },
                     { id: \"3600\", text: \"1 ";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hour"), "html", null, true);
        echo "\" }
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
        return "AriiJOCBundle:Default:ribbon.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 98,  224 => 97,  220 => 96,  216 => 95,  212 => 94,  208 => 93,  187 => 75,  179 => 70,  175 => 68,  172 => 67,  161 => 65,  157 => 64,  153 => 63,  148 => 62,  146 => 61,  134 => 51,  128 => 49,  122 => 47,  119 => 46,  117 => 45,  105 => 36,  101 => 35,  97 => 34,  90 => 30,  83 => 26,  79 => 25,  72 => 21,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiJOCBundle:Default:ribbon.json.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\JOCBundle/Resources/views/Default/ribbon.json.twig");
    }
}
