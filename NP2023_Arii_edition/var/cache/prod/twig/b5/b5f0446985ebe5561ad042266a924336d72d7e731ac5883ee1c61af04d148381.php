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

/* AriiJOCBundle::layout.html.twig */
class __TwigTemplate_48ee57c161ba1ee27109ac1211f6de5bdcfa961de2e7309918c1e17838090b5e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'dhtmlx' => [$this, 'block_dhtmlx'],
            'dhtmlx_plus' => [$this, 'block_dhtmlx_plus'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "AriiCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("AriiCoreBundle::base.html.twig", "AriiJOCBundle::layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_dhtmlx($context, array $blocks = [])
    {
        // line 3
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dhtmlx/skins/terrace/dhtmlx.css"), "html", null, true);
        echo "\" />
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dhtmlx/codebase/dhtmlx.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dhtmlx_scheduler/codebase/dhtmlxscheduler.css"), "html", null, true);
        echo "\" />
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dhtmlx_scheduler/codebase/dhtmlxscheduler.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dhtmlx_scheduler/codebase/ext/dhtmlxscheduler_agenda_view.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 9
    public function block_dhtmlx_plus($context, array $blocks = [])
    {
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
    }

    // line 13
    public function block_script($context, array $blocks = [])
    {
        // line 14
        echo "<script>
function StateRibbon (itemid,state) {
    switch(itemid) {
         case 'chained':
            chained = (state?1:0);
            globalLayout.progressOn();
            break;
         case 'only_warning':
            only_warning = (state?1:0);
            globalLayout.progressOn();
            break;
        default:
            alert(itemid);
    }
    GlobalRefresh();    
}

function ClickRibbon (itemid,state) {
    switch(itemid) {
         case 'chained':
            chained = state;
            break;
         case 'stopped':
            stopped = state;
            break;
    case '-1': case '-2': case '-3': case '-4': case '-5': case '-6':
    case '-7': case '-14': case '-21': 
    case '-30': case '-60': case '-90': case '-120':
    case '-365':
        dhx4.ajax.get( \"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_session_update");
        echo "?ref_past=\"+itemid, function() {
            var currentTime = new Date();
            var newTime = new Date();
            newTime.setDate(currentTime.getDate() + Number(itemid) );
            var day = newTime.getDate();
            var month = newTime.getMonth()+1;
            var year = newTime.getFullYear();
            if (day < 10){
            day = \"0\" + day;
            }
            if (month < 10){
            month = \"0\" + month;
            }
            myRibbon.setItemText( \"ref_past\", year + \"-\" + month + \"-\" +  day );
            globalLayout.progressOn();
            GlobalRefresh();    
        });
        break;
     case '5':
    case '30':
    case '60':
    case '300':
    case '900':
    case '1800':
    case '3600':
        update = itemid;
        dhx4.ajax.get( \"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_session_update");
        echo "?refresh=\"+itemid);
        globalLayout.progressOn();
        GlobalRefresh();
        break;
    case 'menu_job':
        window.location = \"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JOC_jobs");
        echo "\";
        break;
    case 'menu_order':
        window.location = \"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JOC_orders");
        echo "\";
        break;
    case 'menu_schedule':
        window.location = \"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JOC_schedules");
        echo "\";
        break;
    case 'menu_lock':
        window.location = \"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JOC_locks");
        echo "\";
        break;
    case 'menu_spooler':
        window.location = \"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JOC_spoolers");
        echo "\";
        break;
    case 'menu_pc':
        window.location = \"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JOC_process_classes");
        echo "\";
        break;
    case 'menu_connect':
        window.location = \"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JOC_connections");
        echo "\";
        break;
    default:
        alert(itemid);
    }
}

function Chain(id,command,message,chain)
{
    dhtmlx.message({
        type: \"Notice\",
        text: message
    });
    dhtmlxAjax.get(\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JOC_command");
        echo "?command=\"+command+\"&id=\"+id+\"&chain=\"+chain,function(loader){
        dhtmlx.message({
        type: \"Notice\",
        expire: 10000,
        width: \"500px\",
        text: loader.xmlDoc.responseText
        });
        GridRefresh();
    });
}

function Node(id,nid,command,message,chain)
{
    dhtmlx.message({
        type: \"Notice\",
        text: message
    });
    alert(\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_XML_Command");
        echo "?command=\"+command+\"&node_id=\"+nid+\"&id=\"+id);
    dhtmlxAjax.get(\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_XML_Command");
        echo "?command=\"+command+\"&node_id=\"+nid+\"&id=\"+id+\"&chain=\"+chain,function(loader){
        dhtmlx.message({
        type: \"Notice\",
        expire: 10000,
        width: \"500px\",
        text: loader.xmlDoc.responseText
        });
        GridRefresh();
    });
}

var dhxCalendar;
var msg;

function ShowWhy( id ) { 
    largeur = 900;
    msg = dhxWins.createWindow( \"msgwin\" ,  (document.getElementById(\"wrapper\").offsetWidth-largeur)/2, 50, largeur, 550 );
    msg.setText(\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Diagnostic"), "html", null, true);
        echo " \");

    winLayout = msg.attachLayout(\"1C\");
    winLayout.cells(\"a\").hideHeader();
    winLayout.cells(\"a\").progressOn();
    
    toolbar = winLayout.cells(\"a\").attachToolbar();
    toolbar.setIconsPath(\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/toolbar/"), "html", null, true);
        echo "\");
    toolbar.loadStruct(\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JID_toolbar_job_why");
        echo "\");
    toolbar.attachEvent(\"onClick\",function(buttonId){
        switch (buttonId) {
            case \"cancel\":
                msg.close();
                break;
            default:
                alert(buttonId);
        }
        return true;
    });

    var dhxgrid = winLayout.cells(\"a\").attachGrid();
    dhxgrid.setHeader(\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value"), "html", null, true);
        echo "\");
    dhxgrid.setColTypes(\"tree,ro\");
    dhxgrid.enableTreeGridLines(true);
    dhxgrid.setInitWidths(\"400,*\");
    dhxgrid.init();
    dhxgrid.load(\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_XML_Command");
        echo "?command=why_job&job_id=\"+id, function () {
        winLayout.cells(\"a\").progressOff();    
    });
}
</script>
";
    }

    public function getTemplateName()
    {
        return "AriiJOCBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 166,  280 => 161,  264 => 148,  260 => 147,  250 => 140,  230 => 123,  226 => 122,  206 => 105,  190 => 92,  184 => 89,  178 => 86,  172 => 83,  166 => 80,  160 => 77,  154 => 74,  146 => 69,  117 => 43,  86 => 14,  83 => 13,  78 => 11,  73 => 9,  67 => 7,  63 => 6,  59 => 5,  55 => 4,  50 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiJOCBundle::layout.html.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\JOCBundle/Resources/views/layout.html.twig");
    }
}
