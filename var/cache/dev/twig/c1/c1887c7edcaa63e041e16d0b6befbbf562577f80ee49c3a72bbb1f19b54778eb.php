<?php

/* base.html.twig */
class __TwigTemplate_596dd10809b211516ae6071c3f041e234dc0dca318acb3f78d034f5ad7b4d5af extends Twig_Template
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
        $__internal_cacb10626a4efcdfdf72304253c5740f8010438e4d202dbb27f7881a9211694b = $this->env->getExtension("native_profiler");
        $__internal_cacb10626a4efcdfdf72304253c5740f8010438e4d202dbb27f7881a9211694b->enter($__internal_cacb10626a4efcdfdf72304253c5740f8010438e4d202dbb27f7881a9211694b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cacb10626a4efcdfdf72304253c5740f8010438e4d202dbb27f7881a9211694b->leave($__internal_cacb10626a4efcdfdf72304253c5740f8010438e4d202dbb27f7881a9211694b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e937a4464ce3ff153f3e2661188d8b8469f5b67f590e345c08982575b129b59 = $this->env->getExtension("native_profiler");
        $__internal_1e937a4464ce3ff153f3e2661188d8b8469f5b67f590e345c08982575b129b59->enter($__internal_1e937a4464ce3ff153f3e2661188d8b8469f5b67f590e345c08982575b129b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1e937a4464ce3ff153f3e2661188d8b8469f5b67f590e345c08982575b129b59->leave($__internal_1e937a4464ce3ff153f3e2661188d8b8469f5b67f590e345c08982575b129b59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3c71b32f6aa348ca440f4ecbbbf1d1671c04e90858360f6ce76eb7bb5a679ee = $this->env->getExtension("native_profiler");
        $__internal_d3c71b32f6aa348ca440f4ecbbbf1d1671c04e90858360f6ce76eb7bb5a679ee->enter($__internal_d3c71b32f6aa348ca440f4ecbbbf1d1671c04e90858360f6ce76eb7bb5a679ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d3c71b32f6aa348ca440f4ecbbbf1d1671c04e90858360f6ce76eb7bb5a679ee->leave($__internal_d3c71b32f6aa348ca440f4ecbbbf1d1671c04e90858360f6ce76eb7bb5a679ee_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3aefd18023bca842dfa8feae879e07659bc34bd31fc23fc78cbb030c9a8685b9 = $this->env->getExtension("native_profiler");
        $__internal_3aefd18023bca842dfa8feae879e07659bc34bd31fc23fc78cbb030c9a8685b9->enter($__internal_3aefd18023bca842dfa8feae879e07659bc34bd31fc23fc78cbb030c9a8685b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3aefd18023bca842dfa8feae879e07659bc34bd31fc23fc78cbb030c9a8685b9->leave($__internal_3aefd18023bca842dfa8feae879e07659bc34bd31fc23fc78cbb030c9a8685b9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc37155cff9439a054423a81bb0ac20c7263352efa4c4916691b8bb229c07e26 = $this->env->getExtension("native_profiler");
        $__internal_dc37155cff9439a054423a81bb0ac20c7263352efa4c4916691b8bb229c07e26->enter($__internal_dc37155cff9439a054423a81bb0ac20c7263352efa4c4916691b8bb229c07e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dc37155cff9439a054423a81bb0ac20c7263352efa4c4916691b8bb229c07e26->leave($__internal_dc37155cff9439a054423a81bb0ac20c7263352efa4c4916691b8bb229c07e26_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
