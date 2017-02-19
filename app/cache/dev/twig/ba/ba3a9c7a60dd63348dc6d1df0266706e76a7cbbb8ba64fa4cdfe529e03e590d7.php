<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7fdec208de87079c210e0a582776da7facebe4506345b62ce22204b161033c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a247ae74ab8f827437ed08d0c66988819221fc87d68c244c43d2e9f71592e7b2 = $this->env->getExtension("native_profiler");
        $__internal_a247ae74ab8f827437ed08d0c66988819221fc87d68c244c43d2e9f71592e7b2->enter($__internal_a247ae74ab8f827437ed08d0c66988819221fc87d68c244c43d2e9f71592e7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a247ae74ab8f827437ed08d0c66988819221fc87d68c244c43d2e9f71592e7b2->leave($__internal_a247ae74ab8f827437ed08d0c66988819221fc87d68c244c43d2e9f71592e7b2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07b69945b4a22f7ace4d2fbb8cf98224688bcaf232f86c13da72dd87ae9d4546 = $this->env->getExtension("native_profiler");
        $__internal_07b69945b4a22f7ace4d2fbb8cf98224688bcaf232f86c13da72dd87ae9d4546->enter($__internal_07b69945b4a22f7ace4d2fbb8cf98224688bcaf232f86c13da72dd87ae9d4546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_07b69945b4a22f7ace4d2fbb8cf98224688bcaf232f86c13da72dd87ae9d4546->leave($__internal_07b69945b4a22f7ace4d2fbb8cf98224688bcaf232f86c13da72dd87ae9d4546_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f92993b83cf714c0dd967ba7ebcbe3af2d1434bd607637397cb5eeebc15d34aa = $this->env->getExtension("native_profiler");
        $__internal_f92993b83cf714c0dd967ba7ebcbe3af2d1434bd607637397cb5eeebc15d34aa->enter($__internal_f92993b83cf714c0dd967ba7ebcbe3af2d1434bd607637397cb5eeebc15d34aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f92993b83cf714c0dd967ba7ebcbe3af2d1434bd607637397cb5eeebc15d34aa->leave($__internal_f92993b83cf714c0dd967ba7ebcbe3af2d1434bd607637397cb5eeebc15d34aa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3458057c5585bbda09dba3b94bf12af8897165d88197813de3b09be1ddc75fa = $this->env->getExtension("native_profiler");
        $__internal_b3458057c5585bbda09dba3b94bf12af8897165d88197813de3b09be1ddc75fa->enter($__internal_b3458057c5585bbda09dba3b94bf12af8897165d88197813de3b09be1ddc75fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b3458057c5585bbda09dba3b94bf12af8897165d88197813de3b09be1ddc75fa->leave($__internal_b3458057c5585bbda09dba3b94bf12af8897165d88197813de3b09be1ddc75fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
