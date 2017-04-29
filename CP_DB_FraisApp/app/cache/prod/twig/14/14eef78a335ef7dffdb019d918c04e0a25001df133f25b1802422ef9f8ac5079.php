<?php

/* FraisBundle:Visiteur:RenseignerHome.html.twig */
class __TwigTemplate_298a44a5aab3cd48982ca7614edba6985043cd74cb88783e238b0e0d799bae7e extends Twig_Template
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
                <td>
                    <form action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("renseignerHF");
        echo "\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Renseigner frais hors forfait\" />
                    </form>
                </td>
            </tr>
            <tr>
            ";
        // line 33
        echo "            
               ";
        // line 39
        echo "            </tr>
        </table>


    </body>
    <footer>
        <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_connexionV");
        echo "\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
        </form>

    </footer>
</html>


";
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
        return array (  97 => 45,  89 => 39,  86 => 33,  77 => 22,  69 => 17,  60 => 11,  55 => 8,  29 => 7,  25 => 6,  19 => 2,);
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
                <td>
                    <form action=\"{{ path('renseignerHF') }}\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Renseigner frais hors forfait\" />
                    </form>
                </td>
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
