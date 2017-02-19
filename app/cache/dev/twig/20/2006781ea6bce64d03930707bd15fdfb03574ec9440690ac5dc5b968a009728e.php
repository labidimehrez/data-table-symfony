<?php

/* WaldoDatatableBundle:Snippet:individualSearchField.js.twig */
class __TwigTemplate_80a65b972f7b99a027d57b73727e8f927057813d4ab345053eb6b09e2544390a extends Twig_Template
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
        $__internal_9064039897608e1fe85ad3ddde7ec779a481b3b3d2b113f6aada1cbdf7aa57ab = $this->env->getExtension("native_profiler");
        $__internal_9064039897608e1fe85ad3ddde7ec779a481b3b3d2b113f6aada1cbdf7aa57ab->enter($__internal_9064039897608e1fe85ad3ddde7ec779a481b3b3d2b113f6aada1cbdf7aa57ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Snippet:individualSearchField.js.twig"));

        // line 1
        echo "\$('#";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "').one('draw.dt', function() {

var delay = (function(){
    var timer = 0;
    return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
    };
})();

\$('#";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "').DataTable().columns().every(function() {

    \$(this.footer()).find('input[type=\"text\"][searchable=\"true\"]').each(function() {
        var me = this;
        \$(this).on('keyup change', function() {

            column = \$('#";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "').DataTable().columns(me.getAttribute('index'));

            if ( column.search() !== me.value ) {
                delay(function(){
                    column.search( me.value ).draw();
                    }, 400);
            }
        });
    });
});

});
";
        
        $__internal_9064039897608e1fe85ad3ddde7ec779a481b3b3d2b113f6aada1cbdf7aa57ab->leave($__internal_9064039897608e1fe85ad3ddde7ec779a481b3b3d2b113f6aada1cbdf7aa57ab_prof);

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
        return array (  45 => 17,  36 => 11,  22 => 1,);
    }
}
/* $('#{{ id }}').one('draw.dt', function() {*/
/* */
/* var delay = (function(){*/
/*     var timer = 0;*/
/*     return function(callback, ms){*/
/*         clearTimeout (timer);*/
/*         timer = setTimeout(callback, ms);*/
/*     };*/
/* })();*/
/* */
/* $('#{{ id }}').DataTable().columns().every(function() {*/
/* */
/*     $(this.footer()).find('input[type="text"][searchable="true"]').each(function() {*/
/*         var me = this;*/
/*         $(this).on('keyup change', function() {*/
/* */
/*             column = $('#{{ id }}').DataTable().columns(me.getAttribute('index'));*/
/* */
/*             if ( column.search() !== me.value ) {*/
/*                 delay(function(){*/
/*                     column.search( me.value ).draw();*/
/*                     }, 400);*/
/*             }*/
/*         });*/
/*     });*/
/* });*/
/* */
/* });*/
/* */
