<?php

/* WaldoDatatableBundle:Snippet:individualSearchField.js.twig */
class __TwigTemplate_992f1af650a5af9c7559d5bda799ef5caa66f6a49ce8dec81608242c65b06561 extends Twig_Template
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
        $__internal_97a0bd498d175259b90657c803248779fc469d26832b430b36b642d62a1f49ba = $this->env->getExtension("native_profiler");
        $__internal_97a0bd498d175259b90657c803248779fc469d26832b430b36b642d62a1f49ba->enter($__internal_97a0bd498d175259b90657c803248779fc469d26832b430b36b642d62a1f49ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Snippet:individualSearchField.js.twig"));

        // line 1
        echo "\$('#";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "').one('draw.dt', function () {

    var delay = (function () {
        var timer = 0;
        return function (callback, ms) {
            clearTimeout(timer);
            timer = setTimeout(callback, ms);
        };
    })();

    \$('#";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "').DataTable().columns().every(function () {

        \$(this.footer()).find('input[type=\"text\"][searchable=\"true\"]').each(function () {
            var me = this;


            \$(this).bind('keypress', function(e) {//.on('keyup change', function () {
                if(e.keyCode==13) {
                    column = \$('#";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "').DataTable().columns(me.getAttribute('index'));
                    if (column.search() !== me.value) {
                        delay(function () {
                            column.search(me.value).draw();
                        }, 400);
                    }
                }

            });
        });
    });

});
";
        
        $__internal_97a0bd498d175259b90657c803248779fc469d26832b430b36b642d62a1f49ba->leave($__internal_97a0bd498d175259b90657c803248779fc469d26832b430b36b642d62a1f49ba_prof);

    }

    public function getTemplateName()
    {
        return "WaldoDatatableBundle:Snippet:individualSearchField.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 19,  36 => 11,  22 => 1,);
    }
}
/* $('#{{ id }}').one('draw.dt', function () {*/
/* */
/*     var delay = (function () {*/
/*         var timer = 0;*/
/*         return function (callback, ms) {*/
/*             clearTimeout(timer);*/
/*             timer = setTimeout(callback, ms);*/
/*         };*/
/*     })();*/
/* */
/*     $('#{{ id }}').DataTable().columns().every(function () {*/
/* */
/*         $(this.footer()).find('input[type="text"][searchable="true"]').each(function () {*/
/*             var me = this;*/
/* */
/* */
/*             $(this).bind('keypress', function(e) {//.on('keyup change', function () {*/
/*                 if(e.keyCode==13) {*/
/*                     column = $('#{{ id }}').DataTable().columns(me.getAttribute('index'));*/
/*                     if (column.search() !== me.value) {*/
/*                         delay(function () {*/
/*                             column.search(me.value).draw();*/
/*                         }, 400);*/
/*                     }*/
/*                 }*/
/* */
/*             });*/
/*         });*/
/*     });*/
/* */
/* });*/
/* */
