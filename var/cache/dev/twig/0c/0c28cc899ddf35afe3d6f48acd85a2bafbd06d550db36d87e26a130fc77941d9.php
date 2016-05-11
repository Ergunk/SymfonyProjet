<?php

/* CoreBundle:Default:index.html.twig */
class __TwigTemplate_b6960d5608aba5aefe74cea5964a582fc8772b86c3ef4568d1878b7b93bfb38e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CoreBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38ae35114b72a34a534dcb03e5c2dfbcdb045108c1ed6aa7b9f9cc5b9e785d60 = $this->env->getExtension("native_profiler");
        $__internal_38ae35114b72a34a534dcb03e5c2dfbcdb045108c1ed6aa7b9f9cc5b9e785d60->enter($__internal_38ae35114b72a34a534dcb03e5c2dfbcdb045108c1ed6aa7b9f9cc5b9e785d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38ae35114b72a34a534dcb03e5c2dfbcdb045108c1ed6aa7b9f9cc5b9e785d60->leave($__internal_38ae35114b72a34a534dcb03e5c2dfbcdb045108c1ed6aa7b9f9cc5b9e785d60_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1941d0838bd93b6dfd833050778f05544f26e9aa8b939da5ea3dcf576af43440 = $this->env->getExtension("native_profiler");
        $__internal_1941d0838bd93b6dfd833050778f05544f26e9aa8b939da5ea3dcf576af43440->enter($__internal_1941d0838bd93b6dfd833050778f05544f26e9aa8b939da5ea3dcf576af43440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_1941d0838bd93b6dfd833050778f05544f26e9aa8b939da5ea3dcf576af43440->leave($__internal_1941d0838bd93b6dfd833050778f05544f26e9aa8b939da5ea3dcf576af43440_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3db6a1eaa095b67cf307709c9976ae36a0fe1cf7f0da66125b772c5a86d3cce9 = $this->env->getExtension("native_profiler");
        $__internal_3db6a1eaa095b67cf307709c9976ae36a0fe1cf7f0da66125b772c5a86d3cce9->enter($__internal_3db6a1eaa095b67cf307709c9976ae36a0fe1cf7f0da66125b772c5a86d3cce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <p class=\"well\">Core</p>

";
        
        $__internal_3db6a1eaa095b67cf307709c9976ae36a0fe1cf7f0da66125b772c5a86d3cce9->leave($__internal_3db6a1eaa095b67cf307709c9976ae36a0fe1cf7f0da66125b772c5a86d3cce9_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  48 => 7,  35 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*   <p class="well">Core</p>*/
/* */
/* {% endblock %}*/
/* */
