<?php

/* AppBundle:Module:_grid_entity.html.twig */
class __TwigTemplate_277a67ec6b7c4c1463b1c2ad671fbee9ede655f5775fea977f45b77cab4b26c5 extends Twig_Template
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
        $__internal_bd90ce10f172c252e132aee26c19c81d983d342f851edee3d6ec8b41f8e6eee3 = $this->env->getExtension("native_profiler");
        $__internal_bd90ce10f172c252e132aee26c19c81d983d342f851edee3d6ec8b41f8e6eee3->enter($__internal_bd90ce10f172c252e132aee26c19c81d983d342f851edee3d6ec8b41f8e6eee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Module:_grid_entity.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        
        $__internal_bd90ce10f172c252e132aee26c19c81d983d342f851edee3d6ec8b41f8e6eee3->leave($__internal_bd90ce10f172c252e132aee26c19c81d983d342f851edee3d6ec8b41f8e6eee3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Module:_grid_entity.html.twig";
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
/* {{ data|capitalize }}*/
