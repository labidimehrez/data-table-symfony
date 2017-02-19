<?php

/* WaldoDatatableBundle:Main:index.html.twig */
class __TwigTemplate_0d6dbc24939af3369c86c21340f20ff23faecf2bfe2b3952129efebce52b0268 extends Twig_Template
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
        $__internal_76dc750995669eb352013e115d02338d246f9b70eaa51c8d2d3bf5bb70a48485 = $this->env->getExtension("native_profiler");
        $__internal_76dc750995669eb352013e115d02338d246f9b70eaa51c8d2d3bf5bb70a48485->enter($__internal_76dc750995669eb352013e115d02338d246f9b70eaa51c8d2d3bf5bb70a48485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Main:index.html.twig"));

        // line 1
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_76dc750995669eb352013e115d02338d246f9b70eaa51c8d2d3bf5bb70a48485->leave($__internal_76dc750995669eb352013e115d02338d246f9b70eaa51c8d2d3bf5bb70a48485_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_5daebbe26c9d6069df31d7cd82154d11a8014fa64df991e3b0d19814e76d8c3b = $this->env->getExtension("native_profiler");
        $__internal_5daebbe26c9d6069df31d7cd82154d11a8014fa64df991e3b0d19814e76d8c3b->enter($__internal_5daebbe26c9d6069df31d7cd82154d11a8014fa64df991e3b0d19814e76d8c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 2
        echo "    ";
        $this->loadTemplate("WaldoDatatableBundle:Main:datatableHtml.html.twig", "WaldoDatatableBundle:Main:index.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        $this->loadTemplate("WaldoDatatableBundle:Main:datatableJs.html.twig", "WaldoDatatableBundle:Main:index.html.twig", 3)->display($context);
        
        $__internal_5daebbe26c9d6069df31d7cd82154d11a8014fa64df991e3b0d19814e76d8c3b->leave($__internal_5daebbe26c9d6069df31d7cd82154d11a8014fa64df991e3b0d19814e76d8c3b_prof);

    }

    public function getTemplateName()
    {
        return "WaldoDatatableBundle:Main:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block main %}*/
/*     {% include "WaldoDatatableBundle:Main:datatableHtml.html.twig" %}*/
/*     {% include "WaldoDatatableBundle:Main:datatableJs.html.twig" %}*/
/* {% endblock  %}*/
/* */
