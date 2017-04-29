<?php

/* FraisBundle:Template:Menu.html.twig */
class __TwigTemplate_89040494f9b3201331475d458f8047d94030e517e9e5d6b759b4d14d1ff4e241 extends Twig_Template
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
        $__internal_ebab5959b1af9d0455583cfe41d575fce942bda57709b39d5a8af9aa8bda4e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebab5959b1af9d0455583cfe41d575fce942bda57709b39d5a8af9aa8bda4e24->enter($__internal_ebab5959b1af9d0455583cfe41d575fce942bda57709b39d5a8af9aa8bda4e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Template:Menu.html.twig"));

        // line 2
        echo "

<body>
        
            <nav class=\"navbar navbar-inverse\" style=\"margin : 5px \">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_homepage");
        echo "\">Home</a>
                    </div>
        

 </nav>";
        
        $__internal_ebab5959b1af9d0455583cfe41d575fce942bda57709b39d5a8af9aa8bda4e24->leave($__internal_ebab5959b1af9d0455583cfe41d575fce942bda57709b39d5a8af9aa8bda4e24_prof);

    }

    public function getTemplateName()
    {
        return "FraisBundle:Template:Menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  22 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}


<body>
        
            <nav class=\"navbar navbar-inverse\" style=\"margin : 5px \">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"{{ path('frais_homepage') }}\">Home</a>
                    </div>
        

 </nav>";
    }
}
