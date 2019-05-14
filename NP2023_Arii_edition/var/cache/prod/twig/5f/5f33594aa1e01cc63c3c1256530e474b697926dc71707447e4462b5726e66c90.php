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

/* AriiCoreBundle:Default:ribbon.json.twig */
class __TwigTemplate_3aae5d95f0ff15c173ce26573ed324d4fb3379dc63eafcff3c4939424bc77a79 extends \Twig\Template
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
                        img:    \"48/navigation.png\"
                    },
                    {   
                         type:   \"button\", 
                         id:     \"errors\",
                         text:   \"\", 
                         img:    \"error.png\"
                    },
                    {   
                         type:   \"button\", 
                         id:     \"audit\",
                         text:   \"\", 
                         img:    \"shield.png\"
                    }
/* 
                    ,
                    {   
                         type:   \"buttonSelect\", 
                         id:     \"screen\",
                         text:   \"\", 
                         img:    \"2.gif\",
                         items: [
                            {   id:  \"2\",
                                text: \"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        echo "\",
                                img: \"2.gif\"
                            },
                            {   id:  \"4\",
                                text: \"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Summary"), "html", null, true);
        echo "\",
                                img: \"4.gif\"
                            },
                            {   id:  \"8\",
                                text: \"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Only icons"), "html", null, true);
        echo "\",
                                img: \"8.gif\"
                            }
                         ]
                    }
*/
                ]
        },
        {   
            type:       \"block\", 
            text:       \"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My account"), "html", null, true);
        echo "\", 
            text_pos:   \"bottom\", 
            list:
                [
                   {   
                        type:   \"button\", 
                        id:     \"my_account\",
                        text:   \"\", 
                        isbig:  true, 
                        img:    \"48/me.png\"
                    },
                    {   
                         type:   \"button\", 
                         id:     \"profile\",
                         text:   \"\", 
                         img:    \"user_edit.png\"
                    },
                    {   
                         type:   \"button\", 
                         id:     \"filter\",
                         text:   \"\", 
                         img:    \"filter_add.png\"
                    }                         
                ]
        }
   ]
}
";
    }

    public function getTemplateName()
    {
        return "AriiCoreBundle:Default:ribbon.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 56,  91 => 46,  84 => 42,  77 => 38,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiCoreBundle:Default:ribbon.json.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\CoreBundle/Resources/views/Default/ribbon.json.twig");
    }
}
