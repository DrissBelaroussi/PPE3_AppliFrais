<?php

/* FraisBundle:Visiteur:RenseignerHome.html.twig */
class __TwigTemplate_f53b9282ac60ac340fc36698bf192c6fd2ef5a5b66af6e0486af0abc09ad09b0 extends Twig_Template
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
        $__internal_2aa83dd9ee9d8256780aaec6a6c8eda58f5cab014e25f10db4479f65cbc0792d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa83dd9ee9d8256780aaec6a6c8eda58f5cab014e25f10db4479f65cbc0792d->enter($__internal_2aa83dd9ee9d8256780aaec6a6c8eda58f5cab014e25f10db4479f65cbc0792d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Visiteur:RenseignerHome.html.twig"));

        // line 2
        echo "
<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 7
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "3584534_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_bootstrap.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "3584534_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_style_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "3584534"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 8
        echo " 
    </head>
    <body>
        ";
        // line 11
        echo twig_include($this->env, $context, "FraisBundle:Template:VisiteurConnectedMenu.html.twig");
        echo "

        <table class=\"tableRenseignerHome\">

            <tr>
                <td>
                    <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierFF");
        echo "\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Renseigner frais forfaitisés\" />
                    </form>
                </td>
                ";
        // line 21
        if (array_key_exists("fiche", $context)) {
            // line 22
            echo "                <td>
                    
                    <form action=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("renseignerHF");
            echo "\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Renseigner frais hors forfait\" />
                    </form>
                </td>
                ";
        }
        // line 29
        echo "            </tr>
            <tr>
            ";
        // line 36
        echo "            
               ";
        // line 42
        echo "            </tr>
        </table>


    </body>
    <footer>
        <form action=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_connexionV");
        echo "\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
        </form>

    </footer>
</html>


";
        
        $__internal_2aa83dd9ee9d8256780aaec6a6c8eda58f5cab014e25f10db4479f65cbc0792d->leave($__internal_2aa83dd9ee9d8256780aaec6a6c8eda58f5cab014e25f10db4479f65cbc0792d_prof);

    }

    public function getTemplateName()
    {
        return "FraisBundle:Visiteur:RenseignerHome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 48,  100 => 42,  97 => 36,  93 => 29,  85 => 24,  81 => 22,  79 => 21,  72 => 17,  63 => 11,  58 => 8,  32 => 7,  28 => 6,  22 => 2,);
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
        {{ include(\"FraisBundle:Template:VisiteurConnectedMenu.html.twig\") }}

        <table class=\"tableRenseignerHome\">

            <tr>
                <td>
                    <form action=\"{{ path('modifierFF') }}\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Renseigner frais forfaitisés\" />
                    </form>
                </td>
                {% if fiche is defined %}
                <td>
                    
                    <form action=\"{{ path('renseignerHF') }}\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Renseigner frais hors forfait\" />
                    </form>
                </td>
                {% endif %}
            </tr>
            <tr>
            {#<td>
                <form action=\"{{ path('modifierFF') }}\" method=\"post\">
                    <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Modifier frais forfaitisés\" />
                </form>
            </td>#}
            
               {# <td>
                    <form action=\"{{ path('modifierHF') }}\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Modifier  frais hors forfait\" />
                    </form>
                </td>#}
            </tr>
        </table>


    </body>
    <footer>
        <form action=\"{{ path('frais_connexionV') }}\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
        </form>

    </footer>
</html>


";
    }
}
