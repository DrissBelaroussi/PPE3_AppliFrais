<?php

/* FraisBundle:Visiteur:ConnexionV.html.twig */
class __TwigTemplate_cbb32e59928b21b2fe576f52e5974ebe37e939584f52240ddecab2118b193678 extends Twig_Template
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
        $__internal_c4eb088f1db32e847e1e191df887ac970179bf758c3944f9424b92aeda0190cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4eb088f1db32e847e1e191df887ac970179bf758c3944f9424b92aeda0190cb->enter($__internal_c4eb088f1db32e847e1e191df887ac970179bf758c3944f9424b92aeda0190cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Visiteur:ConnexionV.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>AppliFrais</title>
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
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo " 
        </div>
        <div class=\"connexionV\">
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
        
        $__internal_c4eb088f1db32e847e1e191df887ac970179bf758c3944f9424b92aeda0190cb->leave($__internal_c4eb088f1db32e847e1e191df887ac970179bf758c3944f9424b92aeda0190cb_prof);

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
        return array (  84 => 24,  77 => 20,  71 => 17,  63 => 12,  58 => 9,  32 => 7,  28 => 6,  22 => 2,);
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
