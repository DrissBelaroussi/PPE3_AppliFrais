<?php

/* FraisBundle:Template:VisiteurConnectedMenu.html.twig */
class __TwigTemplate_c59d00e3f0b04d4010d1d4225164aa8cac148a0b43dd5f03fafea1b56c6d5671 extends Twig_Template
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
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Déconnexion</a></li>
            </ul>

        </div>

    </nav>
";
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
        return array (  42 => 20,  34 => 15,  19 => 2,);
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
