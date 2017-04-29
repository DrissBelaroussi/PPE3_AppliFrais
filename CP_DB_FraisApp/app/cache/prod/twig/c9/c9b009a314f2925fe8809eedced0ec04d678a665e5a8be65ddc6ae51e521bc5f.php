<?php

/* FraisBundle:Visiteur:AccueilV.html.twig */
class __TwigTemplate_b0d06e05dfab52d007fbac98fa338c08872a35493cb3a1124073c955aa5d81b2 extends Twig_Template
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
<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 7
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "3584534_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3584534_part_1_bootstrap.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "3584534_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3584534_part_1_style_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "3584534"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3584534.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 8
        echo " 
    </head>
    <body>
        
       
        
        ";
        // line 14
        if (array_key_exists("visiteur", $context)) {
            // line 15
            echo "            ";
            echo twig_include($this->env, $context, "FraisBundle:Template:VisiteurConnectedMenu.html.twig");
            echo "
             <h1> 
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "nom", array()), "html", null, true);
            echo "
            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "prenom", array()), "html", null, true);
            echo "
            <h1>
            ";
        } else {
            // line 21
            echo "                 ";
            echo twig_include($this->env, $context, "FraisBundle:Template:Menu.html.twig");
            echo "
            ";
        }
        // line 23
        echo "            <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("renseignerHome");
        echo "\" method=\"post\">
                <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Renseigner Fiche Frais\" />
            </form>
            <form action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulter");
        echo "\" method=\"post\">
                <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Consulter Fiche Frais\" />
            </form>

            ";
        // line 31
        echo "        </body>
        <footer>
            ";
        // line 36
        echo "
        </footer>
    </html>

    
    <div class =\"formFiche\">
    ";
        // line 42
        if (array_key_exists("formFiche", $context)) {
            // line 43
            echo "        ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formFiche"]) ? $context["formFiche"] : null), 'form');
            echo "
    ";
        }
        // line 45
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "FraisBundle:Visiteur:AccueilV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  115 => 43,  113 => 42,  105 => 36,  101 => 31,  94 => 26,  87 => 23,  81 => 21,  75 => 18,  71 => 17,  65 => 15,  63 => 14,  55 => 8,  29 => 7,  25 => 6,  19 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}

<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        {% stylesheets '@FraisBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %} 
    </head>
    <body>
        
       
        
        {% if visiteur is defined%}
            {{ include(\"FraisBundle:Template:VisiteurConnectedMenu.html.twig\") }}
             <h1> 
            {{ visiteur.nom }}
            {{ visiteur.prenom }}
            <h1>
            {% else %}
                 {{ include(\"FraisBundle:Template:Menu.html.twig\") }}
            {%endif%}
            <form action=\"{{ path('renseignerHome') }}\" method=\"post\">
                <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Renseigner Fiche Frais\" />
            </form>
            <form action=\"{{ path('consulter') }}\" method=\"post\">
                <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Consulter Fiche Frais\" />
            </form>

            {#        {{session}}#}
        </body>
        <footer>
            {#<form action=\"{{ path('frais_homepage') }}\" method=\"post\">
                <input type=\"submit\" value=\"Retour Accueil\" />
            </form>#}

        </footer>
    </html>

    
    <div class =\"formFiche\">
    {% if formFiche is defined%}
        {{form(formFiche)}}
    {% endif %}
    </div>";
    }
}
