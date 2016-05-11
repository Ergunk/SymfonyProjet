<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9f353a8ed76566ec8fd7cf492262634d295d42c53c0a7fdb4ef301e000f3cbf5 extends Twig_Template
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
        $__internal_57b3b9bd1bf1e14cd717800967c3b6ab8325be1be409c2c9426c8727905fbe38 = $this->env->getExtension("native_profiler");
        $__internal_57b3b9bd1bf1e14cd717800967c3b6ab8325be1be409c2c9426c8727905fbe38->enter($__internal_57b3b9bd1bf1e14cd717800967c3b6ab8325be1be409c2c9426c8727905fbe38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57b3b9bd1bf1e14cd717800967c3b6ab8325be1be409c2c9426c8727905fbe38->leave($__internal_57b3b9bd1bf1e14cd717800967c3b6ab8325be1be409c2c9426c8727905fbe38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e7067796c2b2e3c87dfb5dc31e6b6afe21041d7ef3512d115c6d9e97c6e46a9 = $this->env->getExtension("native_profiler");
        $__internal_4e7067796c2b2e3c87dfb5dc31e6b6afe21041d7ef3512d115c6d9e97c6e46a9->enter($__internal_4e7067796c2b2e3c87dfb5dc31e6b6afe21041d7ef3512d115c6d9e97c6e46a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e7067796c2b2e3c87dfb5dc31e6b6afe21041d7ef3512d115c6d9e97c6e46a9->leave($__internal_4e7067796c2b2e3c87dfb5dc31e6b6afe21041d7ef3512d115c6d9e97c6e46a9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54f262757963b9a2c3be54ecde7ca157b80645742152ef64e1e83396d4a9ce45 = $this->env->getExtension("native_profiler");
        $__internal_54f262757963b9a2c3be54ecde7ca157b80645742152ef64e1e83396d4a9ce45->enter($__internal_54f262757963b9a2c3be54ecde7ca157b80645742152ef64e1e83396d4a9ce45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_54f262757963b9a2c3be54ecde7ca157b80645742152ef64e1e83396d4a9ce45->leave($__internal_54f262757963b9a2c3be54ecde7ca157b80645742152ef64e1e83396d4a9ce45_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_80072dd4baaeb12def44572821ae6bbe6d8c31cb9a61cd87e746ec2ff703ce3c = $this->env->getExtension("native_profiler");
        $__internal_80072dd4baaeb12def44572821ae6bbe6d8c31cb9a61cd87e746ec2ff703ce3c->enter($__internal_80072dd4baaeb12def44572821ae6bbe6d8c31cb9a61cd87e746ec2ff703ce3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_80072dd4baaeb12def44572821ae6bbe6d8c31cb9a61cd87e746ec2ff703ce3c->leave($__internal_80072dd4baaeb12def44572821ae6bbe6d8c31cb9a61cd87e746ec2ff703ce3c_prof);

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
