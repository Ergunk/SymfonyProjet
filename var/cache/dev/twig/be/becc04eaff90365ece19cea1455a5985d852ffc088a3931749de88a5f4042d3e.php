<?php

/* EKHomepageBundle:Homepage:index.html.twig */
class __TwigTemplate_e056988a4d99b3f9bf1e4667415ec525378511fba0fb0f615fa15faf306e5340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EKHomepageBundle:Homepage:index.html.twig", 1);
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
        $__internal_182c9a3059d107c22b649f0e94fb008a7d23af1f9d9094dc42d3496eb686df52 = $this->env->getExtension("native_profiler");
        $__internal_182c9a3059d107c22b649f0e94fb008a7d23af1f9d9094dc42d3496eb686df52->enter($__internal_182c9a3059d107c22b649f0e94fb008a7d23af1f9d9094dc42d3496eb686df52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EKHomepageBundle:Homepage:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_182c9a3059d107c22b649f0e94fb008a7d23af1f9d9094dc42d3496eb686df52->leave($__internal_182c9a3059d107c22b649f0e94fb008a7d23af1f9d9094dc42d3496eb686df52_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0167dddda5d1ee38ff786c4a0b61e2a1e9acdb6fe1df13b6ca8a7491671c17d7 = $this->env->getExtension("native_profiler");
        $__internal_0167dddda5d1ee38ff786c4a0b61e2a1e9acdb6fe1df13b6ca8a7491671c17d7->enter($__internal_0167dddda5d1ee38ff786c4a0b61e2a1e9acdb6fe1df13b6ca8a7491671c17d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_0167dddda5d1ee38ff786c4a0b61e2a1e9acdb6fe1df13b6ca8a7491671c17d7->leave($__internal_0167dddda5d1ee38ff786c4a0b61e2a1e9acdb6fe1df13b6ca8a7491671c17d7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d7c7f35575661aaff8c2c3177bd82410680c565b66b4d959739041458704c56 = $this->env->getExtension("native_profiler");
        $__internal_1d7c7f35575661aaff8c2c3177bd82410680c565b66b4d959739041458704c56->enter($__internal_1d7c7f35575661aaff8c2c3177bd82410680c565b66b4d959739041458704c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <p class=\"well\">TEST</p>

";
        
        $__internal_1d7c7f35575661aaff8c2c3177bd82410680c565b66b4d959739041458704c56->leave($__internal_1d7c7f35575661aaff8c2c3177bd82410680c565b66b4d959739041458704c56_prof);

    }

    public function getTemplateName()
    {
        return "EKHomepageBundle:Homepage:index.html.twig";
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
/*   <p class="well">TEST</p>*/
/* */
/* {% endblock %}*/
