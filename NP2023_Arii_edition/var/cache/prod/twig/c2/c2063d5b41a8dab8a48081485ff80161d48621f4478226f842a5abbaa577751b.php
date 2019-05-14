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

/* AriiGraphvizBundle:Default:index.html.twig */
class __TwigTemplate_f66b912f36affaef1c6212d719b903653bc7bbfac3825eaef9f707a579a45721 extends \Twig\Template
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
        return "AriiGraphvizBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("AriiGraphvizBundle::layout.html.twig", "AriiGraphvizBundle:Default:index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "<script>
var toolbar;
var rankdir = 'TB';
var splines = 'polyline';
var graph_path= 'live';
var graph_file= '.*';
var graph_paths = '';
var show_params = 'n';
var show_events = 'n';
var show_jobs = 'n';
var show_chains = 'n';
var show_config = 'n';
var path= 'live';
var folder = '';

dhtmlxEvent(window,\"load\",function(){     
    
    globalLayout = new dhtmlXLayoutObject(document.body,\"3L\");
    globalLayout.cells(\"a\").setWidth(300);
    globalLayout.cells(\"a\").hideHeader();

    globalLayout.cells(\"c\").setText(\" ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File content"), "html", null, true);
        echo "\");
    globalLayout.cells(\"c\").collapse();
            
    globalMenu = globalLayout.cells(\"a\").attachMenu();
    globalMenu.setIconsPath( \"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/ariicore/images/menu/"), "html", null, true);
        echo "\" );
    globalMenu.loadStruct(\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_menu");
        echo "?route=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), "html", null, true);
        echo "\");

    myRibbon = globalLayout.cells(\"a\").attachRibbon(); 
    myRibbon.setIconPath( \"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/ribbon/"), "html", null, true);
        echo "\" );
    myRibbon.loadStruct(\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("json_GVZ_ribbon");
        echo "\");
    myRibbon.attachEvent(\"onStateChange\", StateRibbon );
    myRibbon.attachEvent(\"onClick\", ClickRibbon );

    myAccordion = globalLayout.cells(\"a\").attachAccordion();
    myAccordion.addItem(\"folders\", \"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Live"), "html", null, true);
        echo "\");
    myAccordion.addItem(\"legend\", \"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Legend"), "html", null, true);
        echo "\");

    myTree = myAccordion.cells(\"folders\").attachTree();
    myTree.setImagePath(\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/tree/"), "html", null, true);
        echo "\");
    myTree.enableSmartXMLParsing(true);
    myTree.attachEvent( \"onDblClick\", SendPath );
    myTree.load( '";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_GVZ_tree");
        echo "');

    myLegend = myAccordion.cells(\"legend\").attachGrid();
    myLegend.setImagePath( \"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/wa/"), "html", null, true);
        echo "\");
    myLegend.setHeader(\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ico."), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        echo "\");
    myLegend.setNoHeader(true);
    myLegend.setInitWidths(\"50,*\");
    myLegend.setColAlign(\"right,left\");
    myLegend.setColTypes(\"img,ro\");
    myLegend.init();
    myLegend.loadXML( \"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_GVZ_legend");
        echo "\");

    globalLayout.cells(\"b\").hideHeader();
    globalLayout.attachEvent(\"onContentLoaded\", function(win){
        globalLayout.cells(\"b\").progressOff();
    });

    globalLayout.cells(\"b\").attachURL('";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/ariicore/images/arii.jpg"), "html", null, true);
        echo "');

    myGridToolbar = globalLayout.cells(\"b\").attachToolbar();
    myGridToolbar.setIconsPath(\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/toolbar/"), "html", null, true);
        echo "\");
    myGridToolbar.loadStruct( \"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_GVZ_toolbar");
        echo "\");
    myGridToolbar.attachEvent(\"onClick\",function(id){
        switch (id) {
            case \"picture\":
            case \"spline\":
                break;
            case \"polyline\":
            case \"ortho\":
            case \"curved\":
            case \"line\":
            case \"none\":
                splines = id;
                DrawJobs();
            break;
            case \"svg\":
                window.open( GetUrl()+'&output='+id);
                break; 
            case \"png\":
                window.open( GetUrl()+'&output='+id);
                break; 
            case \"pdf\":
                window.open( GetUrl()+'&output='+id);
                break; 
            case \"splines\":
                break;
            default:
              //  alert(\"click \"+id);
        }
    });
    myGridToolbar.attachEvent(\"onStateChange\",function(id, state){
        switch (id) {
             case 'events':
                 show_events = state;
                 DrawJobs();
                 break;
             case 'parameters':
                 show_params = state;
                 DrawJobs();            
                 break;
             case 'jobs':
                 show_jobs = state;
                 DrawJobs();
                 break;
             case 'chains':
                 show_chains = state;
                 DrawJobs();
                 break;
             case 'config':
                 show_config = state;
                 DrawJobs();
                 break;
             default:
                 alert(id);
             break;
        }
    });
});

function DisplayFile(file) {
    globalLayout.cells(\"c\").expand();
    globalLayout.cells(\"c\").attachURL(\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("txt_GVZ_file");
        echo "?path=\"+encodeURIComponent(folder)+'/'+encodeURIComponent(graph_paths)+\"&file=\"+encodeURIComponent(file));
}
    
function SendPath(id) {
//    globalLayout.cells(\"b\").progressOn();
//    dhtmlxAjax.get( \"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_session_update");
        echo "?current_dir=\"+id, function () {
        folder = id;
        DrawJobs();
//        globalLayout.cells(\"b\").progressOff();
//    });
}

function DrawJobs() {
    url = GetUrl();
    globalLayout.cells(\"b\").progressOn();
    globalLayout.cells(\"b\").attachURL(url);
/*    globalLayout.cells(\"b\").attachURL(\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_GVZ_generate");
        echo "\",null,
    {   path: folder,
        splines: splines,
        paths: graph_paths,
        show_params: show_params,
        show_events: show_events,
        show_chains: show_chains,
        show_config: show_config
    }   );
*/}

function GetUrl() {
    var url = \"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_GVZ_generate");
        echo "\";
    url += \"?path=\"+encodeURIComponent(folder);
    url += \"&splines=\"+encodeURIComponent(splines);
    url += \"&paths=\"+encodeURIComponent(graph_paths);
    url += \"&show_params=\"+encodeURIComponent(show_params);
    url += \"&show_events=\"+encodeURIComponent(show_events);
    url += \"&show_chains=\"+encodeURIComponent(show_chains);
    url += \"&show_jobs=\"+encodeURIComponent(show_jobs);
    url += \"&show_config=\"+encodeURIComponent(show_config);
return url;
}

function ClickRibbon(id, value) {

    switch (id) {
        case 'live':
            globalLayout.cells(\"a\").progressOn();
            myTree.deleteChildItems(0);
            path = 'live';            
            myTree.load( '";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_GVZ_tree");
        echo "', function () {
                myAccordion.cells('folders').setText(path);
                globalLayout.cells(\"a\").progressOff();                
            });
            break;
        case '_all':
            path = 'remote/_all';
            globalLayout.cells(\"a\").progressOn();
            myTree.deleteChildItems(0);
            myTree.load( '";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_GVZ_tree");
        echo "?path='+path, function () {
                myAccordion.cells('folders').setText(path);
                globalLayout.cells(\"a\").progressOff();                
            });
            break;
        case 'map':
            window.location.href = \"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_GVZ_index");
        echo "\";
            break;
        case 'audit':
            window.location.href = \"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_GVZ_audit");
        echo "\";
            break;
        default:
            if (id.substr(0,7)=='remote_') {
                path = 'remote/'+id.substr(7);
                globalLayout.cells(\"a\").progressOn();
                myTree.deleteChildItems(0);
                myTree.load( '";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_GVZ_tree");
        echo "?path='+path, function () {
                    myAccordion.cells('folders').setText(path);
                    globalLayout.cells(\"a\").progressOff();                
                });
            }
            else {
                alert(\"click \"+id);
            }
    }
}

function StateRibbon(id, state) {
    switch (id) {
        default:
            alert(\"click \"+id);
    }
}
</script>
";
    }

    public function getTemplateName()
    {
        return "AriiGraphvizBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 199,  307 => 192,  301 => 189,  292 => 183,  280 => 174,  258 => 155,  243 => 143,  229 => 132,  221 => 127,  158 => 67,  154 => 66,  148 => 63,  138 => 56,  127 => 50,  123 => 49,  117 => 46,  111 => 43,  105 => 40,  101 => 39,  93 => 34,  89 => 33,  81 => 30,  77 => 29,  70 => 25,  47 => 4,  44 => 3,  34 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiGraphvizBundle:Default:index.html.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\GraphvizBundle/Resources/views/Default/index.html.twig");
    }
}
