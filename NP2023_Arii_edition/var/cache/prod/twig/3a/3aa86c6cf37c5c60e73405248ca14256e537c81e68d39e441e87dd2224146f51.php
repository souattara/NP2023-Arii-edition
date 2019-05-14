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

/* AriiJOCBundle:Orders:index.html.twig */
class __TwigTemplate_bfa40bdb3542e473a349fb8f42162478b0f7f7990b44c393387f013eafcca940 extends \Twig\Template
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
        return "AriiJOCBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("AriiJOCBundle::layout.html.twig", "AriiJOCBundle:Orders:index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "<!--[if !IE]>end section<![endif]-->
<script language=\"javascript\">
var only_warning = 0; // que les problemes
var chained = 0;
var update=30;
var autorefresh;
var status;

dhtmlxEvent(window,\"load\",function(){ 
    
    menu = new dhtmlXMenuObject(null);
    menu.setIconsPath( \"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/wa/"), "html", null, true);
        echo "\" );
    menu.renderAsContextMenu();
    menu.loadStruct(\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JOC_orders_menu");
        echo "\");

    globalLayout = new dhtmlXLayoutObject(document.body,\"3L\");
    globalLayout.cells(\"a\").setWidth(315); 
    
    globalMenu = globalLayout.cells(\"a\").attachMenu();
    globalMenu.setIconsPath( \"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/ariicore/images/menu/"), "html", null, true);
        echo "\" );
    globalMenu.loadStruct(\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_menu");
        echo "?route=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), "html", null, true);
        echo "\");

    myRibbon = globalLayout.cells(\"a\").attachRibbon(); 
    myRibbon.setIconPath( \"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/ribbon/"), "html", null, true);
        echo "\" );
    myRibbon.loadStruct(\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("json_JOC_ribbon");
        echo "\");
    myRibbon.attachEvent(\"onStateChange\", StateRibbon );
    myRibbon.attachEvent(\"onClick\", ClickRibbon );

    myAccordion = globalLayout.cells(\"a\").attachAccordion();
    myAccordion.addItem(\"status\", \"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "\");
    myAccordion.addItem(\"folders\", \"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Folders"), "html", null, true);
        echo "\");

    myDonut =  myAccordion.cells('status').attachChart({
        view:\"donut\",
        container:\"pie_chart_container\",
        value:\"#JOBS#\",
        label:\"\",
        tooltip: \"#STATUS#\",
        color: \"#COLOR#\",
        border:false,
        pieInnerText: \"#JOBS#\",
        shadow: 0,
        legend:{
            width: 0,
            template: \"#STATUS#\",
            valign:\"top\",
            align:\"left\"
        }
    });
    myDonut.load( \"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JOC_orders_pie");
        echo "\" );
    myDonut.attachEvent(\"onItemClick\",function(id, value){
       status = id;
        myGrid.filterBy(5, status); 
    });

    var myGridToolbar = globalLayout.cells(\"b\").attachToolbar();
    myGridToolbar.setIconsPath(\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/toolbar/"), "html", null, true);
        echo "\");
    myGridToolbar.loadStruct(\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JOC_orders_toolbar");
        echo "\");

    myGridToolbar.attachEvent( \"onClick\", function(id, value) {
        switch (id) {
            case \"refresh\":
                globalLayout.cells(\"b\").progressOn();
                update = value;
   //             dhtmlxAjax.get(\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_global_toolbar_update");
        echo "?\"+id+\"=\"+value,function(loader){
                    GridRefresh();
   //             });
                break;
            default:
                alert(id);
        }
    });
    myGridToolbar.attachEvent(\"onStateChange\",function(id,state){
        switch (id) {
            case 'show_spooler':
                myGrid.setColumnHidden(0,!state);  
                break;
            case 'comment':
                myGrid.setColumnHidden(4,!state);  
                break;
            case 'show_time':
                myGrid.setColumnHidden(7,!state);  
                break;
            case 'show_info':
                myGrid.setColumnHidden(8,!state);  
                break;
            default:
                alert(id);
        }
    });
    globalLayout.cells(\"a\").hideHeader();
    globalLayout.cells(\"b\").hideHeader();
    globalLayout.cells(\"c\").setHeight(300);

    myGrid = globalLayout.cells(\"b\").attachGrid();
    myGrid.setImagePath( \"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/treegrid/"), "html", null, true);
        echo "\");
    myGrid.setHeader(\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Spooler"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chain"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("State"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Output"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start time"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next start"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
        echo "\");
    myGrid.attachHeader(\"#select_filter,#text_filter,#text_filter,#text_filter,#text_filter,#select_filter,#text_filter,#text_filter,#text_filter\");
    myGrid.setInitWidths(\"100,*,200,100,150,100,150,150,200\");
    myGrid.setColAlign(\"left,left,left,left,left,left,left,left,left\");
    myGrid.setColTypes(\"ro,ro,ro,ro,ro,ro,ro,ro,ro\");
    myGrid.enableContextMenu(menu);
    myGrid.enableAlterCss(\"\",\"\");
    myGrid.enableSmartRendering(true,50);
    myGrid.init();
    myGrid.loadXML( \"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JOC_orders_grid");
        echo "?chained=\"+chained+\"&only_warning=\"+only_warning );
    myGrid.setColumnHidden(0,true); 
    myGrid.setColumnHidden(4,true); 
    myGrid.setColumnHidden(7,true); 
    myGrid.setColumnHidden(8,true); 
    
    myTabbar = globalLayout.cells(\"c\").attachTabbar();
    myTabbar.addTab(\"order\",\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order"), "html", null, true);
        echo "\",\"120px\", null, true);
    myTabbar.addTab(\"execution\",\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Execution"), "html", null, true);
        echo "\",\"120px\");
    myTabbar.addTab(\"schema\",\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Schema"), "html", null, true);
        echo "\",\"120px\");
/*  myTabbar.addTab(\"spooler\",\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Spooler"), "html", null, true);
        echo "\",\"120px\");
    myTabbar.addTab(\"target\",\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Target"), "html", null, true);
        echo "\",\"120px\");
    myTabbar.addTab(\"locks\",\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Locks"), "html", null, true);
        echo "\",\"120px\");
    myTabbar.addTab(\"runtimes\",\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Run times"), "html", null, true);
        echo "\",\"100px\");
*/   
    myGrid.attachEvent(\"onRowDblClicked\", OrderDetail );

    myDetailLayout = myTabbar.cells(\"order\").attachLayout(\"2U\");
    myDetailLayout.cells(\"a\").hideHeader();
    myDetailLayout.cells(\"b\").hideHeader();
    myDetailLayout.cells(\"a\").setWidth(700);

    myForm = myDetailLayout.cells(\"a\").attachForm();
    myForm.loadStruct(\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("json_JOC_orders_form");
        echo "\");

    myDetailToolbar = myDetailLayout.cells(\"a\").attachToolbar();
    myDetailToolbar.setIconsPath(\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/toolbar/"), "html", null, true);
        echo "\");
    myDetailToolbar.loadStruct( \"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JOC_orders_form_toolbar");
        echo "\" , function(){
        GBCalendar = new dhtmlXCalendarObject(myDetailToolbar.getInput('ref_date'));
        GBCalendar.setDateFormat(\"%Y-%m-%d %H:%i:%s\");
        GBCalendar.setWeekStartDay(1);
    });
    
    var myParametersToolbar = myDetailLayout.cells(\"b\").attachToolbar();
    myParametersToolbar.setIconsPath(\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ariicore/images/toolbar/"), "html", null, true);
        echo "\");
    myParametersToolbar.loadStruct(\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JOC_job_params_toolbar");
        echo "\");

    myParameters = myDetailLayout.cells(\"b\").attachGrid();
    myParameters.selMultiRows = true;
    myParameters.setHeader(\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Parameter"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value"), "html", null, true);
        echo "\");
    myParameters.setColTypes(\"ed,ed\");
    myParameters.setInitWidths(\"200,*\");
    myParameters.init();
    
    myExecution = myTabbar.cells(\"execution\").attachForm();
    myExecution.loadStruct(\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("json_JOC_jobs_execution_form");
        echo "\");

    menu.attachEvent(\"onClick\", function(menuitemId,type) {
        var data = myGrid.contextID.split(\"_\");
        var rId = data[0];
        var cInd = data[1];
        switch (menuitemId) {
               case \"order_view\":
                    document.location.href = \"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JOC_order");
        echo "?id=\"+rId;
                break;
            break;
            default:
                alert(menuitemId);    
        }
        return true;
    });

    myTabbar.attachEvent(\"onContentLoaded\", function(tab){
        myTabbar.cells(\"schema\").progressOff();
    });
    autorefresh = setInterval( \"GridRefresh()\",update*1000);
    
    myDetailToolbar.attachEvent(\"onClick\",function(itemid){
        Text = '';
        var id = myForm.getItemValue('ID');
        switch(itemid) {
            case \"start_order\":
                Text = \"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start order"), "html", null, true);
        echo "\";
                break;
            case \"suspend_order\":
                Text = \"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suspend order"), "html", null, true);
        echo "\";
                break;
            case \"resume_order\":
                Text = \"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Resume order"), "html", null, true);
        echo "\";
                break;
            default:
                alert(itemid);
        }
        switch(itemid) {
            case \"start_order\":
            case \"suspend_order\":
            case \"resume_order\":
                var params = new Array();
                myParameters.forEachRow(function(id){
                    var param = myParameters.cells(id,0).getValue() + \"=\" + encodeURIComponent(myParameters.cells(id,1).getValue());
                    params.push(param);
                });
                var paramsStr = params.join(\",\");
                var start_time = '';
                start_time = myDetailToolbar.getValue(\"ref_date\");
                // alert(\"";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JOC_command");
        echo "?command=\"+itemid+\"&params=\"+encodeURIComponent(params)+\"&time=\"+start_time+\"&id=\"+id); 
                dhtmlx.message({
                type: \"Notice\",
                text: Text });
                globalLayout.cells(\"b\").progressOn();        
                dhx4.ajax.post(\"";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JOC_command");
        echo "\",\"command=\"+itemid+\"&params=\"+encodeURIComponent(params)+\"&time=\"+start_time+\"&id=\"+id,function(loader,response){
                    dhtmlx.message({
                    type: \"Notice\",
                    expire: 10000,
                    width: \"500px\",
                    text: loader.xmlDoc.responseText });
                    globalLayout.cells(\"b\").progressOff();        
                    globalLayout.cells(\"a\").progressOn();        
                    // internal refresh
                    spooler_id = myForm.getItemValue('SPOOLER_ID');
                    dhx4.ajax.post(\"";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("arii_JOC_sync");
        echo "\",\"id=\"+spooler_id,function(loader,response){
                        dhtmlx.message({
                        type: \"Notice\",
                        expire: 10000,
                        width: \"500px\",
                        text: loader.xmlDoc.responseText });                  
                        globalLayout.cells(\"a\").progressOff();        
                        GridRefresh();
                    });
                });
                break;
            default:
                alert(itemid);
                break;
        }
        return true;
    });
    
});

function OrderDetail(id) {
    clearInterval( autorefresh );
    myTabbar.cells(\"order\").progressOn();
    myTabbar.cells(\"execution\").progressOn();
    myTabbar.cells(\"schema\").progressOn();
    myForm.load(\"";
        // line 244
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JOC_order_form");
        echo "?id=\"+id, function () {
        myTabbar.cells(\"order\").progressOff();
        // mise a jour de la toolbar
        if (myForm.getItemValue(\"SUSPENDED\")>0) {
            myDetailToolbar.hideItem('suspend_order');
            myDetailToolbar.showItem('resume_order');
        }
        else {
            myDetailToolbar.showItem('suspend_order');
            myDetailToolbar.hideItem('resume_order');
        }
        
        myExecution.load(\"";
        // line 256
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JOC_order_form");
        echo "?id=\"+id, function () {
            myTabbar.cells(\"execution\").progressOff();
            myTabbar.cells(\"schema\").attachURL(\"";
        // line 258
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("svg_JOC_process_steps");
        echo "?id=\"+id);
            autorefresh = setInterval( \"GridRefresh()\",update*1000);
        });
    });
/*
    if (status== 'SUSPENDED') {
        myDetailToolbar.hideItem('suspend_order');
    }
    else if (status== 'CHAIN STOP.') {
        myChainToolbar.hideItem('stop_chain');
    }
    else {
        myChainToolbar.hideItem('unstop_chain');
        myDetailToolbar.hideItem('resume_order');
    }
    myParameters.loadXML(\"";
        // line 273
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JID_order_params");
        echo "?id=\"+id, function() {
        mySteps.clearAndLoad(\"";
        // line 274
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JID_order_steps");
        echo "?id=\"+id, function() {
            myLog.clearAndLoad(\"";
        // line 275
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JID_order_log");
        echo "?id=\"+id, function () {
                myHistory.clearAndLoad(\"";
        // line 276
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JID_order_history");
        echo "?id=\"+id, function() {                   
                    myChainDetail.cells(\"b\").attachURL(\"";
        // line 277
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("svg_JID_process_steps");
        echo "?id=\"+id);
                    globalLayout.cells(\"c\").progressOff(); 
                    autorefresh = setInterval( \"GridRefresh()\", update*1000 );
                });  
            });                           
        });
  });
*/
}

function GridRefresh() {
    clearInterval( autorefresh );
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    if (minutes < 10){
    minutes = \"0\" + minutes;
    }
    if (seconds < 10){
    seconds = \"0\" + seconds;
    }
    myRibbon.setItemText( \"refresh\", hours + \":\" + minutes + \":\" +  seconds );
    myGrid.loadXML( \"";
        // line 300
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JOC_orders_grid");
        echo "?chained=\"+chained+\"&only_warning=\"+only_warning, function () {
        myGrid.refreshFilters();
        myGrid.filterBy(5, status);        
        myGrid.filterByAll();
        globalLayout.cells(\"b\").progressOff();
        myDonut.load( \"";
        // line 305
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("xml_JOC_orders_pie");
        echo "?chained=\"+chained+\"&only_warning=\"+only_warning, function () {
            myDonut.refresh();
            globalLayout.progressOff();
            autorefresh = setInterval( \"GridRefresh()\", update*1000 );
        });        
    });
}

function GlobalRefresh() {
    GridRefresh();
}

function onShowMenu(rowId, celInd, grid) {
    // Cas du spooler
    if (grid.getUserData(rowId, \"type\" )=='spooler') {
        menu.setItemDisabled(\"start_task\");
        menu.setItemDisabled(\"show_history\");
        menu.setItemDisabled(\"stop\");
        menu.setItemDisabled(\"unstop\");
        menu.setItemDisabled(\"kill\");
        return true;
    }
        
    var status = grid.cells(rowId, 2 ).getValue();
    menu.showItem(\"start_task\");
    menu.showItem(\"stop\");
    menu.showItem(\"show_history\");
    menu.setItemDisabled(\"kill\");
    menu.setItemDisabled(\"unstop\");
    
    switch (status) {
    case 'SUCCESS':
        menu.setItemEnabled('show_history');
        menu.setItemEnabled('start_task');
        menu.setItemEnabled('stop');
        menu.setItemDisabled('kill');
        menu.setItemDisabled('unstop');
        break;
    case 'FAILURE':
        break;
    case 'RUNNING':
        // rien du tout, c'est instancie
        return false;
        break;
    case '':
        return false;
        break;
    case 'STOPPED':
        menu.setItemEnabled('show_history');
        menu.setItemEnabled('start_task');
        menu.setItemEnabled(\"unstop\");
        menu.setItemDisabled(\"stop\");
        break;
    default:
        // Cas de l'instance
        if (grid.getUserData(rowId, \"jobtype\" )=='instance') {
            // on ne demarre pas une tache RUNNING
            menu.setItemDisabled(\"start_task\");
            menu.setItemEnabled(\"kill\");
            // Un job running ne peut pas avoir d'historique
            menu.setItemDisabled(\"show_history\");
        }
        break;
    }
    // Un job ordonné ne peut être démarré 
    if (grid.getUserData(rowId, \"jobtype\" )=='ordered_job') {
        menu.setItemDisabled(\"start_task\");
    }
   
return true;
}
</script>

";
    }

    public function getTemplateName()
    {
        return "AriiJOCBundle:Orders:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 305,  497 => 300,  471 => 277,  467 => 276,  463 => 275,  459 => 274,  455 => 273,  437 => 258,  432 => 256,  417 => 244,  389 => 219,  376 => 209,  368 => 204,  348 => 187,  342 => 184,  336 => 181,  314 => 162,  303 => 154,  292 => 148,  285 => 144,  281 => 143,  271 => 136,  267 => 135,  261 => 132,  248 => 122,  244 => 121,  240 => 120,  236 => 119,  232 => 118,  228 => 117,  224 => 116,  214 => 109,  186 => 100,  182 => 99,  148 => 68,  138 => 61,  134 => 60,  124 => 53,  102 => 34,  98 => 33,  90 => 28,  86 => 27,  78 => 24,  74 => 23,  65 => 17,  60 => 15,  47 => 4,  44 => 3,  34 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "AriiJOCBundle:Orders:index.html.twig", "D:\\Apps\\Arii_NP2023\\Symfony\\src\\Arii\\JOCBundle/Resources/views/Orders/index.html.twig");
    }
}
