<?php

/* FraisBundle:Default:accueil.html.twig */
class __TwigTemplate_c41be97804582174d5c130e2be462b36fb9dff497fc7b4048d0c5b2e155e6799 extends Twig_Template
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
        $__internal_3c67ea5b2c0ae7a41c5dc6a976b09b24adeea5a28071da7c35786b61203fd1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c67ea5b2c0ae7a41c5dc6a976b09b24adeea5a28071da7c35786b61203fd1e9->enter($__internal_3c67ea5b2c0ae7a41c5dc6a976b09b24adeea5a28071da7c35786b61203fd1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Default:accueil.html.twig"));

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
        
        $__internal_3c67ea5b2c0ae7a41c5dc6a976b09b24adeea5a28071da7c35786b61203fd1e9->leave($__internal_3c67ea5b2c0ae7a41c5dc6a976b09b24adeea5a28071da7c35786b61203fd1e9_prof);

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
        return array (  83 => 25,  75 => 20,  62 => 10,  59 => 9,  33 => 7,  29 => 6,  22 => 1,);
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
