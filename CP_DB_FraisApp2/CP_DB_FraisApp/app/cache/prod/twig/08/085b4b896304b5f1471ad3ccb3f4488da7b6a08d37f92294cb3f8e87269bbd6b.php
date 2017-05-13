<?php

/* FraisBundle:Default:accueil.html.twig */
class __TwigTemplate_afcbdac47eeda5fc0f69a3385a19af1ff2ae6fb721bcefe64802586decf6379a extends Twig_Template
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
        <meta charset=\"utf-8\">
        <title> AppliFrais </title>
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
        // line 9
        echo "    </head>
    ";
        // line 10
        echo twig_include($this->env, $context, "FraisBundle:Template:Menu.html.twig");
        echo "

        <div class=\"jumbotron text-center\" style=\"margin : 5px \">
            <h1>AppliFrais</h1>          
            <p> Selectionnez votre profil </p>
        </div>
        <div>
            <table class=\"noBordure\">
                <tr>
                    <td class=\"tdHome\">
                        <form  action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_connexionV");
        echo "\" method=\"post\">
                            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Visiteur\" />
                        </form>
                    </td>                   
                    <td class=\"tdHome\">
                        <form  action=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_connexionC");
        echo "\" method=\"post\">
                            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Comptable\" />
                        </form>
                    </td>
                </tr>
            </table> 


        </div>

    </body>
    <footer>
        <br>    
        <p> developped by Charlotte Picois & Driss Belaroussi. </p>
    </footer>
</html>

</p>
</body>
</html> ";
    }

    public function getTemplateName()
    {
        return "FraisBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  72 => 20,  59 => 10,  56 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title> AppliFrais </title>
        {% stylesheets '@FraisBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %}
    </head>
    {{ include(\"FraisBundle:Template:Menu.html.twig\") }}

        <div class=\"jumbotron text-center\" style=\"margin : 5px \">
            <h1>AppliFrais</h1>          
            <p> Selectionnez votre profil </p>
        </div>
        <div>
            <table class=\"noBordure\">
                <tr>
                    <td class=\"tdHome\">
                        <form  action=\"{{ path('frais_connexionV') }}\" method=\"post\">
                            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Visiteur\" />
                        </form>
                    </td>                   
                    <td class=\"tdHome\">
                        <form  action=\"{{ path('frais_connexionC') }}\" method=\"post\">
                            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Comptable\" />
                        </form>
                    </td>
                </tr>
            </table> 


        </div>

    </body>
    <footer>
        <br>    
        <p> developped by Charlotte Picois & Driss Belaroussi. </p>
    </footer>
</html>

</p>
</body>
</html> ";
    }
}
