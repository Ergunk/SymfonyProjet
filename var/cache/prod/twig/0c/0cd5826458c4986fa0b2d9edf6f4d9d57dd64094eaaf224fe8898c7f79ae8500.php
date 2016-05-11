<?php

/* EKHomepageBundle:Homepage:index.html.twig */
class __TwigTemplate_573217d8ba4600a0e0bbb3ddd83fc1468416f5393985fab13da6670c70a22407 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>

<html>

  <head>

        <title>Bienvenue dans Symfony2 !</title>

  </head>

  <body>

    <h1>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["titre_page"]) ? $context["titre_page"] : null), "html", null, true);
        echo "</h1>




  </body>

</html>";
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
        return array (  33 => 13,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* */
/*   <head>*/
/* */
/*         <title>Bienvenue dans Symfony2 !</title>*/
/* */
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <h1>{{ titre_page }}</h1>*/
/* */
/* */
/* */
/* */
/*   </body>*/
/* */
/* </html>*/
