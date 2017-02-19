<?php

/* WaldoDatatableBundle:Main:datatableHtml.html.twig */
class __TwigTemplate_29aa5549cbb60fa1f02376887ce17ad580c3536d643b77185fdfbace37e006dc extends Twig_Template
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
        $__internal_6d81fc0984fd2e3ff48e5b4e58bc9275e88b1912c0f429feb8b8308ed1f4f93f = $this->env->getExtension("native_profiler");
        $__internal_6d81fc0984fd2e3ff48e5b4e58bc9275e88b1912c0f429feb8b8308ed1f4f93f->enter($__internal_6d81fc0984fd2e3ff48e5b4e58bc9275e88b1912c0f429feb8b8308ed1f4f93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Main:datatableHtml.html.twig"));

        // line 1
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_6d81fc0984fd2e3ff48e5b4e58bc9275e88b1912c0f429feb8b8308ed1f4f93f->leave($__internal_6d81fc0984fd2e3ff48e5b4e58bc9275e88b1912c0f429feb8b8308ed1f4f93f_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_98b9b1732f471fd91bab0762885c5bcc73dfa96938b9a2f4ccd8d03ab295c166 = $this->env->getExtension("native_profiler");
        $__internal_98b9b1732f471fd91bab0762885c5bcc73dfa96938b9a2f4ccd8d03ab295c166->enter($__internal_98b9b1732f471fd91bab0762885c5bcc73dfa96938b9a2f4ccd8d03ab295c166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 2
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo "<form name=\"frm-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "    <table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "display table table-bordered")) : ("display table table-bordered")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        <thead>
            <tr>
            ";
        // line 6
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 7
            echo "                <th width=\"1%\" ><input type=\"checkbox\" name=\"datatable_action_all\" /></th>
            ";
        }
        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["label"] => $context["key"]) {
            // line 10
            echo "                ";
            if (($context["label"] != "_identifier_")) {
                // line 11
                echo "                    <th>";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</th>
                ";
            }
            // line 13
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </tr>
        </thead>
        ";
        // line 16
        if ((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search"))) {
            // line 17
            echo "        ";
            $context["i"] = 0;
            // line 18
            echo "        <tfoot>
            <tr>
                ";
            // line 20
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                // line 21
                echo "                <th> </th>
                ";
            }
            // line 23
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["label"] => $context["key"]) {
                // line 24
                echo "                    ";
                if (($context["label"] != "_identifier_")) {
                    // line 25
                    echo "                        ";
                    if ( !twig_test_empty((isset($context["searchFields"]) ? $context["searchFields"] : $this->getContext($context, "searchFields")))) {
                        // line 26
                        echo "                            ";
                        if (twig_in_filter((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), (isset($context["searchFields"]) ? $context["searchFields"] : $this->getContext($context, "searchFields")))) {
                            // line 27
                            echo "                            <td><input index=\"";
                            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                            echo "\" searchable=\"true\" type=\"text\" placeholder=\"";
                            echo $this->env->getExtension('translator')->getTranslator()->trans("datatable.common.search", array(), "messages");
                            echo "\" class=\"search_init\" /></td>
                            ";
                        } else {
                            // line 29
                            echo "                            <td> </td>
                            ";
                        }
                        // line 31
                        echo "                        ";
                    }
                    // line 32
                    echo "                    ";
                }
                // line 33
                echo "                    ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 34
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </tr>
        </tfoot>
        ";
        }
        // line 38
        echo "    </table>
";
        // line 39
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo "</form>";
        }
        
        $__internal_98b9b1732f471fd91bab0762885c5bcc73dfa96938b9a2f4ccd8d03ab295c166->leave($__internal_98b9b1732f471fd91bab0762885c5bcc73dfa96938b9a2f4ccd8d03ab295c166_prof);

    }

    public function getTemplateName()
    {
        return "WaldoDatatableBundle:Main:datatableHtml.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 39,  141 => 38,  136 => 35,  130 => 34,  127 => 33,  124 => 32,  121 => 31,  117 => 29,  109 => 27,  106 => 26,  103 => 25,  100 => 24,  95 => 23,  91 => 21,  89 => 20,  85 => 18,  82 => 17,  80 => 16,  76 => 14,  70 => 13,  64 => 11,  61 => 10,  56 => 9,  52 => 7,  50 => 6,  41 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block main %}*/
/* {% if multiple %}<form name="frm-{{ id }}">{% endif %}*/
/*     <table class="{{ class|default('display table table-bordered') }}" id="{{ id }}">*/
/*         <thead>*/
/*             <tr>*/
/*             {% if multiple %}*/
/*                 <th width="1%" ><input type="checkbox" name="datatable_action_all" /></th>*/
/*             {% endif %}*/
/*             {% for label,key in fields %}*/
/*                 {% if label != '_identifier_' %}*/
/*                     <th>{{ label }}</th>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             </tr>*/
/*         </thead>*/
/*         {% if search %}*/
/*         {% set i = 0 %}*/
/*         <tfoot>*/
/*             <tr>*/
/*                 {% if multiple %}*/
/*                 <th> </th>*/
/*                 {% endif %}*/
/*                 {% for label,key in fields %}*/
/*                     {% if label != '_identifier_' %}*/
/*                         {% if searchFields is not empty %}*/
/*                             {% if i in searchFields %}*/
/*                             <td><input index="{{ i }}" searchable="true" type="text" placeholder="{% trans %}datatable.common.search{% endtrans %}" class="search_init" /></td>*/
/*                             {% else %}*/
/*                             <td> </td>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                     {% set i = i+1 %}*/
/*                 {% endfor %}*/
/*             </tr>*/
/*         </tfoot>*/
/*         {% endif %}*/
/*     </table>*/
/* {% if multiple %}</form>{% endif %}*/
/* {% endblock  %}*/
/* */
