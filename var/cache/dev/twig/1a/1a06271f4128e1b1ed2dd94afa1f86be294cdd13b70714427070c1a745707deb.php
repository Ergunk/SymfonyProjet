<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5aa196d4f983f2d4d64ad6d5506f8b1e3db230ada7f1f1510aad610f20e80de8 extends Twig_Template
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
        $__internal_a6cf6baf1ad5100e1bbe5627aeff757a854f20ddb0709dd40c7c76219836d2e2 = $this->env->getExtension("native_profiler");
        $__internal_a6cf6baf1ad5100e1bbe5627aeff757a854f20ddb0709dd40c7c76219836d2e2->enter($__internal_a6cf6baf1ad5100e1bbe5627aeff757a854f20ddb0709dd40c7c76219836d2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6cf6baf1ad5100e1bbe5627aeff757a854f20ddb0709dd40c7c76219836d2e2->leave($__internal_a6cf6baf1ad5100e1bbe5627aeff757a854f20ddb0709dd40c7c76219836d2e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_853f7091abc4d4d196f0fd50f918265b96d406390a2d8fc7f8cd07a9ac22cd78 = $this->env->getExtension("native_profiler");
        $__internal_853f7091abc4d4d196f0fd50f918265b96d406390a2d8fc7f8cd07a9ac22cd78->enter($__internal_853f7091abc4d4d196f0fd50f918265b96d406390a2d8fc7f8cd07a9ac22cd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_853f7091abc4d4d196f0fd50f918265b96d406390a2d8fc7f8cd07a9ac22cd78->leave($__internal_853f7091abc4d4d196f0fd50f918265b96d406390a2d8fc7f8cd07a9ac22cd78_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff219f57a1dbe038f5d53b6ed3353c69fd1974f74453137c940bcc21e27519c3 = $this->env->getExtension("native_profiler");
        $__internal_ff219f57a1dbe038f5d53b6ed3353c69fd1974f74453137c940bcc21e27519c3->enter($__internal_ff219f57a1dbe038f5d53b6ed3353c69fd1974f74453137c940bcc21e27519c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff219f57a1dbe038f5d53b6ed3353c69fd1974f74453137c940bcc21e27519c3->leave($__internal_ff219f57a1dbe038f5d53b6ed3353c69fd1974f74453137c940bcc21e27519c3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6e433a08411e9888c2b3cb12d5a38fd4ec148aaa0024aae06141d05bbfe3415 = $this->env->getExtension("native_profiler");
        $__internal_b6e433a08411e9888c2b3cb12d5a38fd4ec148aaa0024aae06141d05bbfe3415->enter($__internal_b6e433a08411e9888c2b3cb12d5a38fd4ec148aaa0024aae06141d05bbfe3415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b6e433a08411e9888c2b3cb12d5a38fd4ec148aaa0024aae06141d05bbfe3415->leave($__internal_b6e433a08411e9888c2b3cb12d5a38fd4ec148aaa0024aae06141d05bbfe3415_prof);

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
