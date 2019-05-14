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

/* AriiCoreBundle:Default:index.html.twig */
class __TwigTemplate_810f864cf5ce3b9edd1c35ce726cc15e641d5b9ddd2d827db4d40427b6a7c04b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "AriiCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("AriiCoreBundle::layout.html.twig", "AriiCoreBundle:Default:index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "<style>
.dhx_dataview_bundle1_item, .dhx_dataview_bundle1_item_selected{
        background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/ariicore/images/cover/bg_1.gif"), "html", null, true);
        echo ");height:136px;width:577px;cursor:default;background-repeat : no-repeat;
}
.dhx_dataview_bundle2_item, .dhx_dataview_bundle2_item_selected{
        background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/ariicore/images/cover/bg_2.gif"), "html", null, true);
        echo ");height:136px;width:288px;cursor:default;float:left;background-repeat : no-repeat;
}
.dhx_dataview_bundle3_item, .dhx_dataview_bundle3_item_selected{
        background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/ariicore/images/cover/bg_3.gif"), "html", null, true);
        echo ");height:136px;width:141px;cursor:default;float:left;background-repeat : no-repeat;
}

.dhx_dataview_bundle1_item_selected, .dhx_dataview_bundle2_item_selected, .dhx_dataview_bundle3_item_selected{
        background-position: 0px -136px;
}

.bundle1 .bundle_img, .bundle2 .bundle_img, .bundle3 .bundle_img{
        margin:5px 0px 0px 0px;height:128px;width:128px;
}
.bundle1 .body, .bundle2 .body{
        float:left;margin-left:20px;
}
.bundle1 .nm, .bundle2 .nm, .bundle3 .nm{
        font-family:Arial;
        font-size:1.5em;
        font-weight:normal;
        padding:20px 0 5px;
line-height:28px;
}

.bundle1 .desc{
        font-family: Arial;
        font-size:1em;
        line-height: 18px;
}
.bundle1 .summary {
        font-family: Arial;
        font-size:1em;
        line-height: 18px;
}
.bundle1 .role, .bundle2 .role, .bundle3 .role{
/*      background-image:url(./images/role.png);
        background-repeat : no-repeat;
*/      padding:1px 0px 0px 12px;
        font-weight:normal;
        font-family:Georgia;
        font-size:22px;
        color:#a9a9a9;
        height:33px;width:58px;
line-height:26px;
}
.dhx_strong {
        font-family:Arial;
        font-size:1.4em;
        vertical-align: top;
        margin-left: 50px;
        margin-top: 1px;
        line-height: 30px;
        font-weight: normal;
}
</style>
<textarea id=\"type_bundle1\" style=\"display:none;\">
<div class=\"bundle1\">
\t<div class=\"bundle_img\" style=\"float:left;{common.image()}\"></div>
\t<div class=\"body\" style=\"width:350px;\">
\t\t<div class=\"nm\">{obj.name}</div>
\t\t<div class=\"desc\">{obj.desc}</div>
\t</div>
<!--\t<div class=\"role\" style=\"float:left;margin-top:55px;\">{obj.role}</div>
-->
</div>
</textarea>
<textarea id=\"type_bundle2\" style=\"display:none;\">
<div class=\"bundle2\">
\t<div class=\"bundle_img\" style=\"float:left;{common.image()}\"></div>
\t<div class=\"body\" style=\"height:70px;width:100px;\">
\t\t<div class=\"nm\">{obj.name}</div>
\t\t<div class=\"desc\">{obj.summary}</div>
        </div>
<!--\t<div class=\"role\" style=\"float:left;margin:5px 0px 0px 20px;\">{obj.role}</div>
-->
</div>
</textarea>
<textarea id=\"type_bundle3\" style=\"display:none;\">
<div class=\"bundle3\">
\t<div class=\"bundle_img\" style=\"margin:5px 0px 0px 10px;{common.image()}\"></div>
<!--\t<div class=\"role\" style=\"margin:5px 0px 0px 40px;\">{obj.role}</div>
-->
</div>
</textarea>
<script type=\"text/javascript\">
dhtmlxEvent(window,\"load\",function() { 
    globalLayout = new dhtmlXLayoutObject(document.body,\"2U\");  
    globalLayout.cells(\"a\").hideHeader();

    globalMenu = globalLayout.cells(\"a\").attachMenu();
    globalMenu.setIconsPath( \"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/ariicore/images/menu/"), "html", null, true);
        echo "\" );
    globalMenu.loadStruct(\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_menu");
        echo "?route=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), "html", null, true);
        echo "\");    

    myRibbon = globalLayout.cells(\"a\").attachRibbon(); 
    myRibbon.setIconPath( \"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/ribbon/"), "html", null, true);
        echo "\" );
    myRibbon.loadStruct(\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("json_Home_ribbon");
        echo "\");
    myRibbon.attachEvent(\"onStateChange\", StateRibbon );
    myRibbon.attachEvent(\"onClick\", ClickRibbon );

    globalLayout.cells(\"a\").setWidth(360);
    globalLayout.cells(\"b\").hideHeader();

    myDocs = globalLayout.cells(\"a\").attachAccordion();
    myDocs.addItem( \"Home\", \"";
        // line 112
        echo "Ari'i";
        echo "\", true);

    myTabbar = globalLayout.cells(\"b\").attachTabbar();
    myTabbar.addTab(\"portal\",\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Portal"), "html", null, true);
        echo "\",\"100px\", null, true);
    myTabbar.addTab(\"bundles\",\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bundles"), "html", null, true);
        echo "\",\"100px\");

    myTabbar.cells(\"portal\").attachURL(\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("html_Core_readme");
        echo "\");

    myTree = myDocs.cells(\"Home\").attachTree();
    myTree.setImagesPath(\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/tree/"), "html", null, true);
        echo "\");
    myTree.load(\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_docs_tree");
        echo "?route=arii_Core_index\");
    myTree.attachEvent(\"onClick\",function(id){
        myTabbar.cells(\"portal\").attachURL(\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("html_doc_view");
        echo "?doc=\"+id);
    })    
    
    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Modules"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["info"]) {
            // line 128
            echo "        myDocs.addItem( \"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "name", []), "html", null, true);
            echo "\" );
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "        
    myToolbar = myTabbar.cells(\"bundles\").attachToolbar();

    myToolbar.setIconsPath(\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/cover/"), "html", null, true);
        echo "\");
    myToolbar.loadStruct(\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_toolbar");
        echo "\");
    myToolbar.attachEvent( \"onStateChange\", function(id, value) {
        switch (id) {
            case \"2\":
                dhxView.define(\"type\",\"bundle1\");
                myToolbar.setItemState(4,false)
                myToolbar.setItemState(8,false)
                break;
            case \"4\":
                dhxView.define(\"type\",\"bundle2\");
                myToolbar.setItemState(2,false)
                myToolbar.setItemState(8,false)
                break;
            case \"8\":
                dhxView.define(\"type\",\"bundle3\");
                myToolbar.setItemState(2,false)
                myToolbar.setItemState(4,false)
                break;
            break;
            default:
                alert(id);
        }
    });
 
    dhtmlx.Type.add(dhtmlXDataView,{
    name:\"bundle1\",
    css: \"bundle1\",
    template:\"html->type_bundle1\",
            width: 577,
            height: 137,
            margin: 2,
            image:getImageStyle
    });
   dhtmlx.Type.add(dhtmlXDataView,{
            name:\"bundle2\",
            css: \"bundle2\",
            template:\"html->type_bundle2\",
            width: 288,
            height: 137,
            margin: 2,
            image:getImageStyle
    });
    dhtmlx.Type.add(dhtmlXDataView,{
            name:\"bundle3\",
            css: \"bundle3\",
            template:\"html->type_bundle3\",
            width: 141,
            height: 137,
            margin: 2,
            image:getImageStyle
    });
    dhxView = myTabbar.cells(\"bundles\").attachDataView(
            { type:\"bundle2\",
    drag: true, 
    select:true });
    dhxView.load(\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_modules");
        echo "?\"+(new Date()).valueOf(),
    function () {},\"xml\");
    
    dhxView.attachEvent(\"onSelectChange\", function(sid) {
        var d = dhxView.get(sid);
\twindow.location.href = d.url;
    });
    
    ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Modules"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["info"]) {
            // line 198
            echo "        myTree";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo " = myDocs.cells(\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\").attachTree();
        myTree";
            // line 199
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo ".setImagesPath(\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/tree/"), "html", null, true);
            echo "\");
        myTree";
            // line 200
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo ".load(\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_docs_tree");
            echo "?route=arii_";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "_index\");
        myTree";
            // line 201
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo ".attachEvent(\"onClick\",function(id){
            myTabbar.cells(\"portal\").attachURL(\"";
            // line 202
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("html_doc_view");
            echo "?doc=\"+id);
        })    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "});
function getImageStyle(obj){
    if(window._isIE){
        return \"background-image: none;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/cover/"), "html", null, true);
        echo "\"+obj.img+\"',sizingMethod='crop');\";
    }
    else{
        return \"background-image:url(";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/cover/"), "html", null, true);
        echo "\"+obj.img+\");\";\t
    }
}\t
</script>
</body>
";
    }

    public function getTemplateName()
    {
        return "AriiCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 211,  352 => 208,  347 => 205,  338 => 202,  334 => 201,  326 => 200,  320 => 199,  313 => 198,  309 => 197,  298 => 189,  240 => 134,  236 => 133,  231 => 130,  220 => 128,  216 => 127,  210 => 124,  205 => 122,  201 => 121,  195 => 118,  190 => 116,  186 => 115,  180 => 112,  169 => 104,  165 => 103,  157 => 100,  153 => 99,  63 => 12,  57 => 9,  51 => 6,  47 => 4,  44 => 3,  34 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiCoreBundle:Default:index.html.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\CoreBundle/Resources/views/Default/index.html.twig");
    }
}
