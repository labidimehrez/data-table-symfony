<?php

/* WaldoDatatableBundle:Main:datatableJs.html.twig */
class __TwigTemplate_b81393c94d168869aef9f30f2643d12838c1073f505aba7790d66c56fc239bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a4482be93ca9233b84f3c65268f2a7ff3e3d31ddd563f7fb48a5681358f28d5 = $this->env->getExtension("native_profiler");
        $__internal_3a4482be93ca9233b84f3c65268f2a7ff3e3d31ddd563f7fb48a5681358f28d5->enter($__internal_3a4482be93ca9233b84f3c65268f2a7ff3e3d31ddd563f7fb48a5681358f28d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Main:datatableJs.html.twig"));

        // line 1
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_3a4482be93ca9233b84f3c65268f2a7ff3e3d31ddd563f7fb48a5681358f28d5->leave($__internal_3a4482be93ca9233b84f3c65268f2a7ff3e3d31ddd563f7fb48a5681358f28d5_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_53f8cb245fab820cbd102bc8ef344bfe98ca5de8c30a354dc67a9e7b5908d8f8 = $this->env->getExtension("native_profiler");
        $__internal_53f8cb245fab820cbd102bc8ef344bfe98ca5de8c30a354dc67a9e7b5908d8f8->enter($__internal_53f8cb245fab820cbd102bc8ef344bfe98ca5de8c30a354dc67a9e7b5908d8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "<script type=\"text/javascript\">
\$(document).ready(function() {
    \$('#";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').DataTable({ ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["elementName"] => $context["element"]) {
            echo twig_escape_filter($this->env, $context["elementName"], "html", null, true);
            echo ":";
            echo $this->env->getExtension('DatatableBundle')->printDatatableOption($context["element"], $context["elementName"]);
            if (($this->getAttribute($context["loop"], "last", array()) != true)) {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['elementName'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " });
});
";
        // line 8
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 9
            $this->loadTemplate("WaldoDatatableBundle:Snippet:multipleRaw.js.twig", "WaldoDatatableBundle:Main:datatableJs.html.twig", 9)->display($context);
        }
        // line 11
        if ((((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")) == true) &&  !twig_test_empty((isset($context["searchFields"]) ? $context["searchFields"] : $this->getContext($context, "searchFields"))))) {
            // line 12
            $this->loadTemplate("WaldoDatatableBundle:Snippet:individualSearchField.js.twig", "WaldoDatatableBundle:Main:datatableJs.html.twig", 12)->display($context);
        }
        // line 14
        echo "</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_53f8cb245fab820cbd102bc8ef344bfe98ca5de8c30a354dc67a9e7b5908d8f8->leave($__internal_53f8cb245fab820cbd102bc8ef344bfe98ca5de8c30a354dc67a9e7b5908d8f8_prof);

    }

    public function getTemplateName()
    {
        return "WaldoDatatableBundle:Main:datatableJs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 14,  91 => 12,  89 => 11,  86 => 9,  84 => 8,  44 => 6,  40 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block main %}*/
/* */
/* {% spaceless %}*/
/* <script type="text/javascript">*/
/* $(document).ready(function() {*/
/*     $('#{{ id }}').DataTable({ {% for elementName, element in js %}{{ elementName }}:{{ element|printDatatableOption(elementName) }}{% if loop.last != true %},{%endif%}{% endfor %} });*/
/* });*/
/* {% if multiple %}*/
/* {% include "WaldoDatatableBundle:Snippet:multipleRaw.js.twig" %}*/
/* {% endif %}*/
/* {% if search == true and searchFields is not empty %}*/
/* {% include "WaldoDatatableBundle:Snippet:individualSearchField.js.twig" %}*/
/* {% endif %}*/
/* </script>*/
/* {% endspaceless %}*/
/* {% endblock  %}*/
/* */
