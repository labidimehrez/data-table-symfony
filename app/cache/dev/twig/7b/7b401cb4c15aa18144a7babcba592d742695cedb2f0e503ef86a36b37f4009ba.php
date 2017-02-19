<?php

/* WaldoDatatableBundle:Main:index.html.twig */
class __TwigTemplate_b9d26fba02ea88efa746919ae84adc822474e8e56e04d2689699398b8a874cf9 extends Twig_Template
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
        $__internal_28795e70c94644872ce3b2bcaff96b40e6ab366dc7f5e4ce4d1df10e130d8dd2 = $this->env->getExtension("native_profiler");
        $__internal_28795e70c94644872ce3b2bcaff96b40e6ab366dc7f5e4ce4d1df10e130d8dd2->enter($__internal_28795e70c94644872ce3b2bcaff96b40e6ab366dc7f5e4ce4d1df10e130d8dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Main:index.html.twig"));

        // line 1
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_28795e70c94644872ce3b2bcaff96b40e6ab366dc7f5e4ce4d1df10e130d8dd2->leave($__internal_28795e70c94644872ce3b2bcaff96b40e6ab366dc7f5e4ce4d1df10e130d8dd2_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_daf54118762f1e81064c25f150986400c101990811fa15cace1462381756fa6e = $this->env->getExtension("native_profiler");
        $__internal_daf54118762f1e81064c25f150986400c101990811fa15cace1462381756fa6e->enter($__internal_daf54118762f1e81064c25f150986400c101990811fa15cace1462381756fa6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 2
        echo "    ";
        $this->loadTemplate("WaldoDatatableBundle:Main:datatableHtml.html.twig", "WaldoDatatableBundle:Main:index.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        $this->loadTemplate("WaldoDatatableBundle:Main:datatableJs.html.twig", "WaldoDatatableBundle:Main:index.html.twig", 3)->display($context);
        
        $__internal_daf54118762f1e81064c25f150986400c101990811fa15cace1462381756fa6e->leave($__internal_daf54118762f1e81064c25f150986400c101990811fa15cace1462381756fa6e_prof);

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
