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

/* AriiCoreBundle:Default:menu.xml.twig */
class __TwigTemplate_4a80e10a661f3d6a8aa4a817eaeb8dd1940a959074eb0fb316597a1966c049e9 extends \Twig\Template
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
<menu>
";
        // line 3
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY"))) {
            echo "                
\t<item id=\"menu\" img=\"house.png\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["MENU"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 6
                echo "                <item id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "mod", []), "html", null, true);
                echo "\" text=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["menu"], "title", [])), "html", null, true);
                echo "\" img=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "mod", []), "html", null, true);
                echo ".png\">
                <href><![CDATA[";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "url", []), "html", null, true);
                echo "]]></href>
                </item>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t</item>
";
        } else {
            // line 12
            echo "\t<item id=\"login\" img=\"lock.png\"/>
";
        }
        // line 14
        echo "\t<item id=\"help\" img=\"help.png\">
            <item id=\"sos\" img=\"sosp.gif\" text=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact"), "html", null, true);
        echo "\">
                <href><![CDATA[http://sos-paris.com]]></href>
            </item>
            <item type=\"separator\"/>        
            <item id=\"gitio\" img=\"world.png\" text=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Web site"), "html", null, true);
        echo "\">
                <href><![CDATA[http://ariiportal.github.io/";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BUNDLE"] ?? null), "mod", []), "html", null, true);
        echo "Bundle/]]></href>
            </item>
            <item id=\"bug\" img=\"bug.png\" text=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Issue"), "html", null, true);
        echo "\">
                <href><![CDATA[https://github.com/AriiPortal/";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BUNDLE"] ?? null), "mod", []), "html", null, true);
        echo "Bundle/issues]]></href>
            </item>
            <item id=\"github\" img=\"github.png\" text=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Code"), "html", null, true);
        echo "\">
                <href><![CDATA[https://github.com/AriiPortal/";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BUNDLE"] ?? null), "mod", []), "html", null, true);
        echo "Bundle]]></href>
            </item>
            <item id=\"readme\" img=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BUNDLE"] ?? null), "img", []), "html", null, true);
        echo ".png\" text=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("About..."), "html", null, true);
        echo "\">
                <href><![CDATA[";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BUNDLE"] ?? null), "url", []), "html", null, true);
        echo "]]></href>
            </item>
        </item>        
";
        // line 32
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "                
\t<item type=\"separator\"/>
";
            // line 34
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OPERATOR")) {
                // line 35
                echo "\t<item id=\"topdis\" text=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "username", []), "html", null, true);
                echo "\" img=\"role_operator.png\">
";
            }
            // line 37
            echo "        <item id=\"my_account\" text=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My account"), "html", null, true);
            echo "\"  img=\"profile.png\">
        <href><![CDATA[";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("arii_my_account");
            echo "]]></href>
        </item>
        <item id=\"logout\" text=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "\"  img=\"logout.png\">
        <href><![CDATA[";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "]]></href>
        </item>
";
            // line 43
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OPERATOR")) {
                // line 44
                echo "        </item>
";
            } else {
                // line 46
                echo "\t<item id=\"topdis\" text=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "username", []), "html", null, true);
                echo "\" img=\"role_operator.png\"/>        
";
            }
        }
        // line 49
        echo "<!--
    <item id=\"tz\" img=\"world.png\">
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TZ"] ?? null));
        foreach ($context['_seq'] as $context["continent"] => $context["country"]) {
            // line 52
            echo "               <item id=\"";
            echo twig_escape_filter($this->env, $context["continent"], "html", null, true);
            echo "\" text=\"";
            echo twig_escape_filter($this->env, $context["continent"], "html", null, true);
            echo "\" >
                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["country"]);
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 54
                echo "                    <item id=\"";
                echo twig_escape_filter($this->env, $context["continent"], "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "\" text=\"";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "               </item>    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['continent'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </item>
-->
    <item id=\"lang\" img=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "locale", []), "html", null, true);
        echo ".png\">
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["LANG"] ?? null));
        foreach ($context['_seq'] as $context["lang"] => $context["info"]) {
            // line 62
            echo "               <item id=\"";
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\" text=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "string", []), "html", null, true);
            echo "\" img=\"";
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo ".png\">
                <href>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "url", []), "html", null, true);
            echo "</href>
               </item>    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['lang'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    </item>


</menu>";
    }

    public function getTemplateName()
    {
        return "AriiCoreBundle:Default:menu.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 66,  228 => 63,  219 => 62,  215 => 61,  211 => 60,  207 => 58,  200 => 56,  187 => 54,  183 => 53,  176 => 52,  172 => 51,  168 => 49,  161 => 46,  157 => 44,  155 => 43,  150 => 41,  146 => 40,  141 => 38,  136 => 37,  130 => 35,  128 => 34,  123 => 32,  117 => 29,  111 => 28,  106 => 26,  102 => 25,  97 => 23,  93 => 22,  88 => 20,  84 => 19,  77 => 15,  74 => 14,  70 => 12,  66 => 10,  57 => 7,  48 => 6,  44 => 5,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiCoreBundle:Default:menu.xml.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\CoreBundle/Resources/views/Default/menu.xml.twig");
    }
}
