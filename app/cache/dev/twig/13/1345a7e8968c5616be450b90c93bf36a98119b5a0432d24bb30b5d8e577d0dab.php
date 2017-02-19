<?php

/* WaldoDatatableBundle:Renderers:_default.html.twig */
class __TwigTemplate_69c670809daba4bf69335041b5a4c83b2362793eb4b2cefb69bf05e4adca2387 extends Twig_Template
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
        $__internal_6b79e1d81a9964c88f8aa97ee6a320c3abf2df073a3db633189b6fa6ae23cebd = $this->env->getExtension("native_profiler");
        $__internal_6b79e1d81a9964c88f8aa97ee6a320c3abf2df073a3db633189b6fa6ae23cebd->enter($__internal_6b79e1d81a9964c88f8aa97ee6a320c3abf2df073a3db633189b6fa6ae23cebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Renderers:_default.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["dt_item"]) ? $context["dt_item"] : $this->getContext($context, "dt_item")), "html", null, true);
        echo "
";
        
        $__internal_6b79e1d81a9964c88f8aa97ee6a320c3abf2df073a3db633189b6fa6ae23cebd->leave($__internal_6b79e1d81a9964c88f8aa97ee6a320c3abf2df073a3db633189b6fa6ae23cebd_prof);

    }

    public function getTemplateName()
    {
        return "WaldoDatatableBundle:Renderers:_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{dt_item}}*/
/* */
