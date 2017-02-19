<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_372f64dc24d9e7216ad78fb797435590413c91ee766a00ae7f12af9e3ae14a48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ac914393f25975f33e00a96392df356a6e90dfab378e527689a7d2ef3807ab1 = $this->env->getExtension("native_profiler");
        $__internal_4ac914393f25975f33e00a96392df356a6e90dfab378e527689a7d2ef3807ab1->enter($__internal_4ac914393f25975f33e00a96392df356a6e90dfab378e527689a7d2ef3807ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\" src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
<link rel=\"stylesheet\"
      href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.20/daterangepicker.min.css\">
<link rel=\"stylesheet\"
      href=\"https://cdn.datatables.net/u/bs/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.12,b-1.2.1,b-colvis-1.2.1,b-flash-1.2.1,b-html5-1.2.1,b-print-1.2.1,r-2.1.0/datatables.min.css\">
<link rel=\"stylesheet\"
      href=\"https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css\"/>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/featherlight/1.4.1/featherlight.min.css\">
<link rel=\"stylesheet\"
      href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/7.1.0/css/bootstrap-slider.min.css\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\"/>


<script>
    \$(document).ready(function () {
        \$('input').attr(\"placeholder\", \"\");
        \$('input').addClass(\"form-control input-sm\");
        \$('input').css(\"max-width\", \"200px\");
    });
</script>
<style>
    div.dataTables_wrapper div.dataTables_filter input {
        height: 30px;
        padding: 5px 10px;
        margin-right: 10px;
        border-radius: 3px;
    }

    div.dataTables_paginate a {
        margin-left: 0;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        background: #fafafa;
        color: #666;
        position: relative;
    / / float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
        cursor: pointer;
    }

    a:hover {
        z-index: 3 !important;
        color: #fff !important;
        background-color: #337ab7 !important;
        border-color: #337ab7 !important;
    }

    a.active {
        z-index: 3 !important;
        color: #fff !important;
        background-color: #337ab7 !important;
        border-color: #337ab7 !important;
    }
</style>


";
        // line 68
        echo $this->env->getExtension('DatatableBundle')->datatable($this->env, array("js" => array("language" => array("url" => "../bundles/app/css/plugins/datatables/extensions/Language/fr.json"), "ajax" => $this->env->getExtension('routing')->getPath("datatable"), "columnDefs" => array(0 => array("width" => "15%", "targets" => 0)))));
        // line 79
        echo "




";
        
        $__internal_4ac914393f25975f33e00a96392df356a6e90dfab378e527689a7d2ef3807ab1->leave($__internal_4ac914393f25975f33e00a96392df356a6e90dfab378e527689a7d2ef3807ab1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 79,  94 => 68,  25 => 2,  22 => 1,);
    }
}
/* <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>*/
/* <script src="{{ asset('bundles/app/js/datatables.min.js') }}" type="text/javascript"></script>*/
/* */
/* */
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">*/
/* <link rel="stylesheet"*/
/*       href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.20/daterangepicker.min.css">*/
/* <link rel="stylesheet"*/
/*       href="https://cdn.datatables.net/u/bs/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.12,b-1.2.1,b-colvis-1.2.1,b-flash-1.2.1,b-html5-1.2.1,b-print-1.2.1,r-2.1.0/datatables.min.css">*/
/* <link rel="stylesheet"*/
/*       href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css"/>*/
/* <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/featherlight/1.4.1/featherlight.min.css">*/
/* <link rel="stylesheet"*/
/*       href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/7.1.0/css/bootstrap-slider.min.css">*/
/* <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"/>*/
/* */
/* */
/* <script>*/
/*     $(document).ready(function () {*/
/*         $('input').attr("placeholder", "");*/
/*         $('input').addClass("form-control input-sm");*/
/*         $('input').css("max-width", "200px");*/
/*     });*/
/* </script>*/
/* <style>*/
/*     div.dataTables_wrapper div.dataTables_filter input {*/
/*         height: 30px;*/
/*         padding: 5px 10px;*/
/*         margin-right: 10px;*/
/*         border-radius: 3px;*/
/*     }*/
/* */
/*     div.dataTables_paginate a {*/
/*         margin-left: 0;*/
/*         border-top-left-radius: 4px;*/
/*         border-bottom-left-radius: 4px;*/
/*         background: #fafafa;*/
/*         color: #666;*/
/*         position: relative;*/
/*     / / float: left;*/
/*         padding: 6px 12px;*/
/*         margin-left: -1px;*/
/*         line-height: 1.42857143;*/
/*         color: #337ab7;*/
/*         text-decoration: none;*/
/*         background-color: #fff;*/
/*         border: 1px solid #ddd;*/
/*         cursor: pointer;*/
/*     }*/
/* */
/*     a:hover {*/
/*         z-index: 3 !important;*/
/*         color: #fff !important;*/
/*         background-color: #337ab7 !important;*/
/*         border-color: #337ab7 !important;*/
/*     }*/
/* */
/*     a.active {*/
/*         z-index: 3 !important;*/
/*         color: #fff !important;*/
/*         background-color: #337ab7 !important;*/
/*         border-color: #337ab7 !important;*/
/*     }*/
/* </style>*/
/* */
/* */
/* {{ datatable({*/
/* */
/*     'js' : {*/
/*         language: {*/
/*             "url": "../bundles/app/css/plugins/datatables/extensions/Language/fr.json",*/
/*         },*/
/*         'ajax' : path('datatable'),*/
/*         'columnDefs': [*/
/*         { "width": "15%", "targets": 0 }*/
/*         ]*/
/*     }*/
/* }) }}*/
/* */
/* */
/* */
/* */
/* */
