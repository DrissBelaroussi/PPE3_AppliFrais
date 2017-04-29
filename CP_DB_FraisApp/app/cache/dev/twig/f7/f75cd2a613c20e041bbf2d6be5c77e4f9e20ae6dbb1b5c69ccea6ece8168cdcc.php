<?php

/* FraisBundle:Comptable:ConnexionC.html.twig */
class __TwigTemplate_3cca13505780b31671d071f9e7a25a8c7deec3c7e10a3b7e4f1a44d67ffe49e7 extends Twig_Template
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
        $__internal_77970ac461ea90fe7ba2b5052d60571acd928933aa83b9d5d1e5c4d81f80e055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77970ac461ea90fe7ba2b5052d60571acd928933aa83b9d5d1e5c4d81f80e055->enter($__internal_77970ac461ea90fe7ba2b5052d60571acd928933aa83b9d5d1e5c4d81f80e055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Comptable:ConnexionC.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 8
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
        echo " 
    </head>
    <body>
   <div class=\"message\">
       ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo " 
   </div> 
  <div class=\"connexionC\">
        ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
   </div>
   
   
  <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_homepage");
        echo "\" method=\"post\">
    <input type=\"submit\" value=\"Retour\" />
    
</p>
</body>
</html> 


";
        
        $__internal_77970ac461ea90fe7ba2b5052d60571acd928933aa83b9d5d1e5c4d81f80e055->leave($__internal_77970ac461ea90fe7ba2b5052d60571acd928933aa83b9d5d1e5c4d81f80e055_prof);

    }

    public function getTemplateName()
    {
        return "FraisBundle:Comptable:ConnexionC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  71 => 16,  65 => 13,  59 => 9,  33 => 8,  29 => 7,  22 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}

<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        {% stylesheets '@FraisBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %} 
    </head>
    <body>
   <div class=\"message\">
       {{ message }} 
   </div> 
  <div class=\"connexionC\">
        {{ form(form) }}
   </div>
   
   
  <form action=\"{{ path('frais_homepage') }}\" method=\"post\">
    <input type=\"submit\" value=\"Retour\" />
    
</p>
</body>
</html> 


";
    }
}
