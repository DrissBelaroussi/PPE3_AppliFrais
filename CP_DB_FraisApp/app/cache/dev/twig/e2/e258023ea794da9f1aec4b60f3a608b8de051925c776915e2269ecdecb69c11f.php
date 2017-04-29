<?php

/* FraisBundle:Template:VisiteurConnectedMenu.html.twig */
class __TwigTemplate_f8da8d9efd7522b1baaff47621a5105e003ec5d0348120b2e08dca2a0492d479 extends Twig_Template
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
        $__internal_2243217e839c2cb9a975c318efebf27502eaf2af39a3a12c1234c5bb4da121af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2243217e839c2cb9a975c318efebf27502eaf2af39a3a12c1234c5bb4da121af->enter($__internal_2243217e839c2cb9a975c318efebf27502eaf2af39a3a12c1234c5bb4da121af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Template:VisiteurConnectedMenu.html.twig"));

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
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_connexionV");
        echo "\">Home</a>
               
            </div>
            <ul class=\"nav navbar-nav navbar-right\">
                
                
                    

                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Déconnexion</a></li>
            </ul>

        </div>

    </nav>
";
        
        $__internal_2243217e839c2cb9a975c318efebf27502eaf2af39a3a12c1234c5bb4da121af->leave($__internal_2243217e839c2cb9a975c318efebf27502eaf2af39a3a12c1234c5bb4da121af_prof);

    }

    public function getTemplateName()
    {
        return "FraisBundle:Template:VisiteurConnectedMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 23,  37 => 15,  22 => 2,);
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
                <a class=\"navbar-brand\" href=\"{{ path('frais_connexionV') }}\">Home</a>
               
            </div>
            <ul class=\"nav navbar-nav navbar-right\">
                
                
                    

                <li><a href=\"{{ path('deconnexion') }}\"><span class=\"glyphicon glyphicon-log-in\"></span> Déconnexion</a></li>
            </ul>

        </div>

    </nav>
";
    }
}
