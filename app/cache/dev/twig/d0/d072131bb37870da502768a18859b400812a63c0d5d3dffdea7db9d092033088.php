<?php

/* WaldoDatatableBundle:Snippet:multipleRaw.js.twig */
class __TwigTemplate_3ad75111356facb060affd32eb09b6d0a7aa006d36d2ea07f4741506e3c26e3e extends Twig_Template
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
        $__internal_2a4845e5db43742e9580fd65117c3badacb4c01931474005d9d1d1c3e86fc284 = $this->env->getExtension("native_profiler");
        $__internal_2a4845e5db43742e9580fd65117c3badacb4c01931474005d9d1d1c3e86fc284->enter($__internal_2a4845e5db43742e9580fd65117c3badacb4c01931474005d9d1d1c3e86fc284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Snippet:multipleRaw.js.twig"));

        // line 1
        echo "\$('#";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "').one('draw.dt', function() {
var multiple_rawhtml = '<label class=\"dataTables_multiple\"><span style=\"margin:0 40px 0 0px;\">";
        // line 2
        echo $this->env->getExtension('translator')->getTranslator()->trans("datatable.common.execute", array(), "messages");
        echo "<select name=\"dataTables[select]\">";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["item"], "route", array())), "js", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "js", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select><button class=\"btn-datatable-multiple\" >";
        echo $this->env->getExtension('translator')->getTranslator()->trans("datatable.common.ok", array(), "messages");
        echo "</button><span></label>';
    if((el = \$('#";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "_wrapper div[id^=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "\"]')).length > 0 ) {
        \$(el[0]).prepend(multiple_rawhtml);
    }

    ";
        // line 7
        $context["chbox"] = ('' === $tmp = "input:checkbox[name=\"dataTables[actions][]\"]") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "    ";
        $context["chboxAll"] = ('' === $tmp = "input:checkbox[name=\"datatable_action_all\"]") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
    \$('#";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "_wrapper .btn-datatable-multiple:not(.search_init)').on('click', function(e) {

        if(\$('input:focus', \$('#";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "_wrapper')).length > 0){
            return false;
        }

        e.preventDefault();

        if(\$('";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["chbox"]) ? $context["chbox"] : $this->getContext($context, "chbox")), "js", null, true);
        echo ":checked').length > 0){
            if (!confirm('";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("datatable.common.are_you_sure", array(), "messages");
        echo "')) {
                return false;
            }

            var form = \$(this).parents('form:eq(0)');
            var action = \$('select[name=\"dataTables[select]\"]',\$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "_wrapper')).val();

            \$.ajax({
                type: \"POST\",
                url: action,
                data: form.serialize(),
                success: function(msg) {
                    \$('#";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "').trigger('dt.draw');
                }
            });
        } else {
            alert('";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("datatable.common.you_need_to_select_at_least_one_element", array(), "messages");
        echo "');
        }
    });

    \$('#";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "_wrapper').on('click', '";
        echo twig_escape_filter($this->env, (isset($context["chboxAll"]) ? $context["chboxAll"] : $this->getContext($context, "chboxAll")), "js", null, true);
        echo "', function() {
        if(\$(this).is(':checked')) {
            \$('";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["chbox"]) ? $context["chbox"] : $this->getContext($context, "chbox")), "js", null, true);
        echo "', \$('#";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "_wrapper')).attr(\"checked\",false).click();
        } else {
            \$('";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["chbox"]) ? $context["chbox"] : $this->getContext($context, "chbox")), "js", null, true);
        echo "', \$('#";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "_wrapper')).attr(\"checked\",true).click();
        }
    });

    \$('#";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "js", null, true);
        echo "_wrapper ";
        echo twig_escape_filter($this->env, (isset($context["chboxAll"]) ? $context["chboxAll"] : $this->getContext($context, "chboxAll")), "js", null, true);
        echo "').attr('checked', false);
});
";
        
        $__internal_2a4845e5db43742e9580fd65117c3badacb4c01931474005d9d1d1c3e86fc284->leave($__internal_2a4845e5db43742e9580fd65117c3badacb4c01931474005d9d1d1c3e86fc284_prof);

    }

    public function getTemplateName()
    {
        return "WaldoDatatableBundle:Snippet:multipleRaw.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 47,  127 => 43,  120 => 41,  113 => 39,  106 => 35,  99 => 31,  89 => 24,  81 => 19,  77 => 18,  68 => 12,  63 => 10,  60 => 9,  57 => 8,  55 => 7,  46 => 3,  27 => 2,  22 => 1,);
    }
}
/* $('#{{ id }}').one('draw.dt', function() {*/
/* var multiple_rawhtml = '<label class="dataTables_multiple"><span style="margin:0 40px 0 0px;">{% trans %}datatable.common.execute{% endtrans %}<select name="dataTables[select]">{% for key,item in multiple %}<option value="{{ path(item.route) }}">{{ item.title }}</option>{% endfor %}</select><button class="btn-datatable-multiple" >{% trans %}datatable.common.ok{% endtrans %}</button><span></label>';*/
/*     if((el = $('#{{ id }}_wrapper div[id^="{{ id }}"]')).length > 0 ) {*/
/*         $(el[0]).prepend(multiple_rawhtml);*/
/*     }*/
/* */
/*     {% set chbox %}input:checkbox[name="dataTables[actions][]"]{% endset %}*/
/*     {% set chboxAll %}input:checkbox[name="datatable_action_all"]{% endset %}*/
/* */
/*     $('#{{ id }}_wrapper .btn-datatable-multiple:not(.search_init)').on('click', function(e) {*/
/* */
/*         if($('input:focus', $('#{{ id }}_wrapper')).length > 0){*/
/*             return false;*/
/*         }*/
/* */
/*         e.preventDefault();*/
/* */
/*         if($('{{ chbox }}:checked').length > 0){*/
/*             if (!confirm('{% trans %}datatable.common.are_you_sure{% endtrans %}')) {*/
/*                 return false;*/
/*             }*/
/* */
/*             var form = $(this).parents('form:eq(0)');*/
/*             var action = $('select[name="dataTables[select]"]',$('#{{ id }}_wrapper')).val();*/
/* */
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: action,*/
/*                 data: form.serialize(),*/
/*                 success: function(msg) {*/
/*                     $('#{{ id }}').trigger('dt.draw');*/
/*                 }*/
/*             });*/
/*         } else {*/
/*             alert('{% trans %}datatable.common.you_need_to_select_at_least_one_element{% endtrans %}');*/
/*         }*/
/*     });*/
/* */
/*     $('#{{ id }}_wrapper').on('click', '{{ chboxAll }}', function() {*/
/*         if($(this).is(':checked')) {*/
/*             $('{{ chbox }}', $('#{{ id }}_wrapper')).attr("checked",false).click();*/
/*         } else {*/
/*             $('{{ chbox }}', $('#{{ id }}_wrapper')).attr("checked",true).click();*/
/*         }*/
/*     });*/
/* */
/*     $('#{{ id }}_wrapper {{ chboxAll }}').attr('checked', false);*/
/* });*/
/* */
