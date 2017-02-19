<?php

/* AppBundle:Renderers:_actions.html.twig */
class __TwigTemplate_eaadba3fe5d2c8cc65adb11d521bc7d8aba9b8d436de1f15e4986b71d7a49981 extends Twig_Template
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
        $__internal_2ee44607606fc64aff36b7e400ce46e2608813168b60f52d7d6b7ab20c922332 = $this->env->getExtension("native_profiler");
        $__internal_2ee44607606fc64aff36b7e400ce46e2608813168b60f52d7d6b7ab20c922332->enter($__internal_2ee44607606fc64aff36b7e400ce46e2608813168b60f52d7d6b7ab20c922332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Renderers:_actions.html.twig"));

        // line 1
        echo "



<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("route_edit", array("id" => $this->getAttribute((isset($context["dt_obj"]) ? $context["dt_obj"] : $this->getContext($context, "dt_obj")), "id", array()))), "html", null, true);
        echo "\">
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dt_obj"]) ? $context["dt_obj"] : $this->getContext($context, "dt_obj")), "nom", array()), "html", null, true);
        echo "
</a>

<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("route_detail", array("id" => $this->getAttribute((isset($context["dt_obj"]) ? $context["dt_obj"] : $this->getContext($context, "dt_obj")), "id", array()))), "html", null, true);
        echo "\">
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dt_obj"]) ? $context["dt_obj"] : $this->getContext($context, "dt_obj")), "nom", array()), "html", null, true);
        echo "
</a>

";
        
        $__internal_2ee44607606fc64aff36b7e400ce46e2608813168b60f52d7d6b7ab20c922332->leave($__internal_2ee44607606fc64aff36b7e400ce46e2608813168b60f52d7d6b7ab20c922332_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Renderers:_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  38 => 9,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* */
/* */
/* */
/* */
/* <a href="{{ path('route_edit',{ 'id' : dt_obj.id }) }}">*/
/*     {{ dt_obj.nom }}*/
/* </a>*/
/* */
/* <a href="{{ path('route_detail',{ 'id' : dt_obj.id }) }}">*/
/*     {{ dt_obj.nom }}*/
/* </a>*/
/* */
/* */
