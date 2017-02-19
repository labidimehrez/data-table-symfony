<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e44d0f0df31cc515e13c6699cdc99734ad8a64abd24295ffb33d08d6fc9cc2ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e461af84947231e8e78e13c4e575d4bed219f6fb7bd89d31973820bea76d30a1 = $this->env->getExtension("native_profiler");
        $__internal_e461af84947231e8e78e13c4e575d4bed219f6fb7bd89d31973820bea76d30a1->enter($__internal_e461af84947231e8e78e13c4e575d4bed219f6fb7bd89d31973820bea76d30a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e461af84947231e8e78e13c4e575d4bed219f6fb7bd89d31973820bea76d30a1->leave($__internal_e461af84947231e8e78e13c4e575d4bed219f6fb7bd89d31973820bea76d30a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_667e22b2717d24bff4cdcf0d269ff6682780047a38658c602c1ee869fd164ac1 = $this->env->getExtension("native_profiler");
        $__internal_667e22b2717d24bff4cdcf0d269ff6682780047a38658c602c1ee869fd164ac1->enter($__internal_667e22b2717d24bff4cdcf0d269ff6682780047a38658c602c1ee869fd164ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_667e22b2717d24bff4cdcf0d269ff6682780047a38658c602c1ee869fd164ac1->leave($__internal_667e22b2717d24bff4cdcf0d269ff6682780047a38658c602c1ee869fd164ac1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc0126b4c27ae0d31d28b8cf5fe18191618dcbb6a8599b9b15a3005f3551ebee = $this->env->getExtension("native_profiler");
        $__internal_dc0126b4c27ae0d31d28b8cf5fe18191618dcbb6a8599b9b15a3005f3551ebee->enter($__internal_dc0126b4c27ae0d31d28b8cf5fe18191618dcbb6a8599b9b15a3005f3551ebee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dc0126b4c27ae0d31d28b8cf5fe18191618dcbb6a8599b9b15a3005f3551ebee->leave($__internal_dc0126b4c27ae0d31d28b8cf5fe18191618dcbb6a8599b9b15a3005f3551ebee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b855ccd41492467513decab462465b3e72e78ecb832625b19b23b2610a7f9651 = $this->env->getExtension("native_profiler");
        $__internal_b855ccd41492467513decab462465b3e72e78ecb832625b19b23b2610a7f9651->enter($__internal_b855ccd41492467513decab462465b3e72e78ecb832625b19b23b2610a7f9651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b855ccd41492467513decab462465b3e72e78ecb832625b19b23b2610a7f9651->leave($__internal_b855ccd41492467513decab462465b3e72e78ecb832625b19b23b2610a7f9651_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
