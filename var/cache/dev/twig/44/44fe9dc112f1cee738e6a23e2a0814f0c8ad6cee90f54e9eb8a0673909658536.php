<?php

/* ::base.html.twig */
class __TwigTemplate_2f7c2e2f9a7c18cba13c5277031cfeed919b3e4489979c80486dd3a5c08f92c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd88c98406ea629922b3e5674c0627207b75b19b8a11a7e2cf79c42e68284ecf = $this->env->getExtension("native_profiler");
        $__internal_bd88c98406ea629922b3e5674c0627207b75b19b8a11a7e2cf79c42e68284ecf->enter($__internal_bd88c98406ea629922b3e5674c0627207b75b19b8a11a7e2cf79c42e68284ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_bd88c98406ea629922b3e5674c0627207b75b19b8a11a7e2cf79c42e68284ecf->leave($__internal_bd88c98406ea629922b3e5674c0627207b75b19b8a11a7e2cf79c42e68284ecf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0702f9b772ef497f9975862f992881b04582075bb969830fb84076f985ddae67 = $this->env->getExtension("native_profiler");
        $__internal_0702f9b772ef497f9975862f992881b04582075bb969830fb84076f985ddae67->enter($__internal_0702f9b772ef497f9975862f992881b04582075bb969830fb84076f985ddae67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0702f9b772ef497f9975862f992881b04582075bb969830fb84076f985ddae67->leave($__internal_0702f9b772ef497f9975862f992881b04582075bb969830fb84076f985ddae67_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_675c352b68ebfc3c9bb74af634f6986ad1455b0dbc1bd50cecc3d6a26cf14c99 = $this->env->getExtension("native_profiler");
        $__internal_675c352b68ebfc3c9bb74af634f6986ad1455b0dbc1bd50cecc3d6a26cf14c99->enter($__internal_675c352b68ebfc3c9bb74af634f6986ad1455b0dbc1bd50cecc3d6a26cf14c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t\t";
        
        $__internal_675c352b68ebfc3c9bb74af634f6986ad1455b0dbc1bd50cecc3d6a26cf14c99->leave($__internal_675c352b68ebfc3c9bb74af634f6986ad1455b0dbc1bd50cecc3d6a26cf14c99_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_46c62c8f97108e86c447c087b77acb843f7a4b130dd5845d00aa94bf792cddfc = $this->env->getExtension("native_profiler");
        $__internal_46c62c8f97108e86c447c087b77acb843f7a4b130dd5845d00aa94bf792cddfc->enter($__internal_46c62c8f97108e86c447c087b77acb843f7a4b130dd5845d00aa94bf792cddfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46c62c8f97108e86c447c087b77acb843f7a4b130dd5845d00aa94bf792cddfc->leave($__internal_46c62c8f97108e86c447c087b77acb843f7a4b130dd5845d00aa94bf792cddfc_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b183c77e65a15541698b8572e605851a1bbb7d0987da78cb398ed30ffd1ab40 = $this->env->getExtension("native_profiler");
        $__internal_1b183c77e65a15541698b8572e605851a1bbb7d0987da78cb398ed30ffd1ab40->enter($__internal_1b183c77e65a15541698b8572e605851a1bbb7d0987da78cb398ed30ffd1ab40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1b183c77e65a15541698b8572e605851a1bbb7d0987da78cb398ed30ffd1ab40->leave($__internal_1b183c77e65a15541698b8572e605851a1bbb7d0987da78cb398ed30ffd1ab40_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 13,  85 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 14,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* 		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/* 		{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
