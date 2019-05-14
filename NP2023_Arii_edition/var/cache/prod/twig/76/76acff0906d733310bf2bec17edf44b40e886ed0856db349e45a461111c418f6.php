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

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_742783b6ad61e27f3c96a656eec2d024772797c92712575cf2d037acf089f471 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style_plus' => [$this, 'block_style_plus'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "AriiUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("AriiUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_style_plus($context, array $blocks = [])
    {
        // line 5
        echo "<link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap-theme.min.css\">
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "<style>
div#objToAttach {
\twidth: 100%;
\theight: 100%;
\toverflow: auto;
}

.dhx_dataview {
\toverflow-y: auto !important;
}
.dhx_dataview_default_item,
.dhx_dataview_default_item_selected {
\tposition: relative;
\tborder-width: 0px !important;
\tbackground: none !important;
\tcursor: default;
}
.dhx_dataview div.dhxdataview_placeholder:first-child {
\tmargin-top: 2px;
}
.menu_item {
\tposition: relative;
\theight: 60px;
\tbackground-color: #f5f5f5;
\tmargin: 3px 2px 0px 5px;
\tborder-bottom: 1px dotted #ccc;
\tbackground-repeat: no-repeat;
\tbackground-position: 18px 4px;
\tcolor: #333333;  
        width: 100%
}
.menu_item:hover {
\tbackground-color: #f0f0f0;
\tborder-color: #bbb;
}
.dhx_dataview_default_item_selected .menu_item {
\tbackground-color: #B6BADF;
\tborder-color: #aaa;
\tcolor: #2e2e2e;
}
.menu_item.inbox {
\tbackground-image: url(../icons/folder-downloads.png);
}
.menu_item.fav {
\tbackground-image: url(../icons/folder-favorites.png);
}
.menu_item.drafts {
\tbackground-image: url(../icons/folder-txt.png);
}
.menu_item.outbox {
\tbackground-image: url(../icons/folder-activities.png);
}
.menu_item.sent {
\tbackground-image: url(../icons/mail-folder-sent.png);
}
.menu_item.trash {
\tbackground-image: url(../icons/user-trash.png);
}
.menu_item.contacts {
\tbackground-image: url(../icons/folder-image-people.png);
}
.menu_item_text {
\tposition: relative;
\tmargin-left: 12px;
\theight: 60px;
\tline-height: 56px;
\tfont-family: \"Open Sans\", sans-serif, Arial;
\tfont-weight: 400;
\tfont-size: 16px;
\tcolor: inherit;
}
label { display: block; width: 200px; }
.dhxtree_dhx_terrace .standartTreeRow {
      font-size: 14px !important;
      }
.dhxtree_dhx_terrace .standartTreeRow_lor {
      font-size: 14px !important;
      }
</style>
<script type=\"text/javascript\">
dhtmlxEvent(window,\"load\",function() { 
    globalLayout = new dhtmlXLayoutObject(document.body,\"3J\");  
    globalLayout.cells(\"a\").hideHeader();
    globalLayout.cells(\"a\").setWidth(360);
    globalLayout.cells(\"b\").hideHeader();
    globalLayout.cells(\"c\").setText(\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Login", [], "FOSUserBundle"), "html", null, true);
        echo "\");
";
        // line 95
        if (($context["error"] ?? null)) {
            // line 96
            echo "    globalLayout.cells(\"c\").setHeight(350);    
";
        } else {
            // line 98
            echo "    globalLayout.cells(\"c\").setHeight(265);    
";
        }
        // line 100
        echo "/*    
    globalToolbar = globalLayout.cells(\"a\").attachToolbar();
    globalToolbar.setIconsPath( \"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/ariicore/images/menu/"), "html", null, true);
        echo "\" );
    globalToolbar.loadStruct(\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_User_toolbar");
        echo "?route=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), "html", null, true);
        echo "\");
*/
    myRibbon = globalLayout.cells(\"a\").attachRibbon(); 
    myRibbon.setIconPath( \"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/ribbon/"), "html", null, true);
        echo "\" );
    myRibbon.loadStruct(\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("json_User_ribbon");
        echo "\");

    myDocs = globalLayout.cells(\"a\").attachAccordion();
    myDocs.addItem( \"Home\", \"";
        // line 110
        echo "Ari'i";
        echo "\", true);

    globalLayout.cells(\"b\").attachURL(\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("html_Core_readme");
        echo "\");

    myTree = myDocs.cells(\"Home\").attachTree();
    myTree.setImagesPath(\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/tree/"), "html", null, true);
        echo "\");
    myTree.load(\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_docs_tree");
        echo "?route=arii_Core_index\");
    myTree.setItemStyle(0,\"font-size: 16px !important\")
    myTree.attachEvent(\"onClick\",function(id){
        globalLayout.cells(\"b\").attachURL(\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("html_doc_view");
        echo "?doc=\"+id);
    })

//    globalLayout.cells(\"b\").attachObject(\"objToAttach\");  
    
//    myPop = new dhtmlXPopup();
//    myForm = myPop.attachObject(formToAttach);

    globalLayout.cells(\"c\").attachObject(formToAttach);

    myRibbon.attachEvent(\"onClick\", function(id) {
        switch(id) {
            case 'fr':
                ";
        // line 132
        $context["routeParams"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "_route_params"], "method");
        // line 133
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["routeParams"] ?? null), "_locale", [], "array", true, true)) {
            // line 134
            echo "                ";
            $context["routeParams"] = twig_array_merge(($context["routeParams"] ?? null), ["_locale" => "fr"]);
            // line 135
            echo "                ";
        }
        echo "                
                window.location = \"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "_route"], "method"), ($context["routeParams"] ?? null)), "html", null, true);
        echo "\";            
                break;
            case 'en':
                ";
        // line 139
        $context["routeParams"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "_route_params"], "method");
        // line 140
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["routeParams"] ?? null), "_locale", [], "array", true, true)) {
            // line 141
            echo "                ";
            $context["routeParams"] = twig_array_merge(($context["routeParams"] ?? null), ["_locale" => "en"]);
            // line 142
            echo "                ";
        }
        echo "                
                window.location = \"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "_route"], "method"), ($context["routeParams"] ?? null)), "html", null, true);
        echo "\";            
                break;
            default:
                alert(id);
        }
    });
});

</script>
<div id=\"formToAttach\" style=\"margin: 10px;\"/>
";
        // line 153
        if (($context["error"] ?? null)) {
            // line 154
            echo "<div id=\"ObjError\" class=\"container-fluid\">
<div class=\"alert alert-danger\" role=\"alert\">
  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
  <span class=\"sr-only\">Error:</span>
";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "message", []), [], "FOSUserBundle"), "html", null, true);
            echo "
</div>
</div>
";
        }
        // line 162
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_user_security_check");
        echo "\" method=\"post\">
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 163
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />
  <div class=\"form-group\">
    <label for=\"username\">";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" class=\"form-control\"  id=\"username\" name=\"_username\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"operator\"/>
  </div>
  <div class=\"form-group\">
    <label for=\"password\">";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\"/>
  </div>
  <div class=\"checkbox\">
    <label for=\"remember_me\">
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked/>
    ";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
    </label>
  </div>
  <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
</form>
</div>
<div id=\"objToAttach\" style=\"align:center; vertical-align: center; font-family: Tahoma; font-size: 10px; height: 100%; overflow: auto; display: none;\">
    <center>
            <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/ariicore/images/arii.jpg"), "html", null, true);
        echo "\"/>
    </center>
</div>
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 183,  316 => 178,  310 => 175,  301 => 169,  295 => 166,  291 => 165,  286 => 163,  281 => 162,  274 => 158,  268 => 154,  266 => 153,  253 => 143,  248 => 142,  245 => 141,  242 => 140,  240 => 139,  234 => 136,  229 => 135,  226 => 134,  223 => 133,  221 => 132,  205 => 119,  199 => 116,  195 => 115,  189 => 112,  184 => 110,  178 => 107,  174 => 106,  166 => 103,  162 => 102,  158 => 100,  154 => 98,  150 => 96,  148 => 95,  144 => 94,  57 => 9,  54 => 8,  48 => 5,  45 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Security/login.html.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
