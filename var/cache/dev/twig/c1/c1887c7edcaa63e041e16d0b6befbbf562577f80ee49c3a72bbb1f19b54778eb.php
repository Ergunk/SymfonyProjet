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
        $__internal_e7993b38df4241e588db0db70ab431417818a991e1768b3f91743b16b7083090 = $this->env->getExtension("native_profiler");
        $__internal_e7993b38df4241e588db0db70ab431417818a991e1768b3f91743b16b7083090->enter($__internal_e7993b38df4241e588db0db70ab431417818a991e1768b3f91743b16b7083090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e7993b38df4241e588db0db70ab431417818a991e1768b3f91743b16b7083090->leave($__internal_e7993b38df4241e588db0db70ab431417818a991e1768b3f91743b16b7083090_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d384ca957b0d3d4668cc40cd60d9c89695af8a409491b25ce598d7c73fdab208 = $this->env->getExtension("native_profiler");
        $__internal_d384ca957b0d3d4668cc40cd60d9c89695af8a409491b25ce598d7c73fdab208->enter($__internal_d384ca957b0d3d4668cc40cd60d9c89695af8a409491b25ce598d7c73fdab208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d384ca957b0d3d4668cc40cd60d9c89695af8a409491b25ce598d7c73fdab208->leave($__internal_d384ca957b0d3d4668cc40cd60d9c89695af8a409491b25ce598d7c73fdab208_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c39c573eeb5cbbe9bd050c274b5c195b48c078e1a8da14f712b6d60970c2f06 = $this->env->getExtension("native_profiler");
        $__internal_4c39c573eeb5cbbe9bd050c274b5c195b48c078e1a8da14f712b6d60970c2f06->enter($__internal_4c39c573eeb5cbbe9bd050c274b5c195b48c078e1a8da14f712b6d60970c2f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t\t";
        
        $__internal_4c39c573eeb5cbbe9bd050c274b5c195b48c078e1a8da14f712b6d60970c2f06->leave($__internal_4c39c573eeb5cbbe9bd050c274b5c195b48c078e1a8da14f712b6d60970c2f06_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_449b5e2e788ca76f8e3e2ac2a4b0d3d8a02bd4e1bf6bd9085961817ecc8fb67a = $this->env->getExtension("native_profiler");
        $__internal_449b5e2e788ca76f8e3e2ac2a4b0d3d8a02bd4e1bf6bd9085961817ecc8fb67a->enter($__internal_449b5e2e788ca76f8e3e2ac2a4b0d3d8a02bd4e1bf6bd9085961817ecc8fb67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_449b5e2e788ca76f8e3e2ac2a4b0d3d8a02bd4e1bf6bd9085961817ecc8fb67a->leave($__internal_449b5e2e788ca76f8e3e2ac2a4b0d3d8a02bd4e1bf6bd9085961817ecc8fb67a_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7803ccfc6dacfc775fc4307cca2c64843ea2c920c6bd286413cc25401d87d69 = $this->env->getExtension("native_profiler");
        $__internal_e7803ccfc6dacfc775fc4307cca2c64843ea2c920c6bd286413cc25401d87d69->enter($__internal_e7803ccfc6dacfc775fc4307cca2c64843ea2c920c6bd286413cc25401d87d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e7803ccfc6dacfc775fc4307cca2c64843ea2c920c6bd286413cc25401d87d69->leave($__internal_e7803ccfc6dacfc775fc4307cca2c64843ea2c920c6bd286413cc25401d87d69_prof);

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
