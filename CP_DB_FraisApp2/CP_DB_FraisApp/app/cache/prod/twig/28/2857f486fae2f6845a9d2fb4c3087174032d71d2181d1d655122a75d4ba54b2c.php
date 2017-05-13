<?php

/* FraisBundle:Visiteur:ConnexionV.html.twig */
class __TwigTemplate_78750a235774d54fcb7293037efb8e4e481636bd36784305e971fc1c43859d73 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>AppliFrais</title>
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
    <body>
       
        ";
        // line 12
        echo twig_include($this->env, $context, "FraisBundle:Template:Menu.html.twig");
        echo "
        
        <h1> Connexion Visiteur </h1>
        <p>
        <div class=\"message\">
            ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo " 
        </div>
        <div class=\"connexionV\">
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
        </div> 


        <form action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_homepage");
        echo "\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-default\" value=\"Retour\" style=\"margin:20px\"/>   
        </form>
    </p>

</body>
</html> 
";
    }

    public function getTemplateName()
    {
        return "FraisBundle:Visiteur:ConnexionV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  74 => 20,  68 => 17,  60 => 12,  55 => 9,  29 => 7,  25 => 6,  19 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}
<!DOCTYPE html>
<html>
    <head>
        <title>AppliFrais</title>
        {% stylesheets '@FraisBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %}
    </head>
    <body>
       
        {{ include(\"FraisBundle:Template:Menu.html.twig\") }}
        
        <h1> Connexion Visiteur </h1>
        <p>
        <div class=\"message\">
            {{ message }} 
        </div>
        <div class=\"connexionV\">
            {{ form(form) }}
        </div> 


        <form action=\"{{ path('frais_homepage') }}\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-default\" value=\"Retour\" style=\"margin:20px\"/>   
        </form>
    </p>

</body>
</html> 
";
    }
}
