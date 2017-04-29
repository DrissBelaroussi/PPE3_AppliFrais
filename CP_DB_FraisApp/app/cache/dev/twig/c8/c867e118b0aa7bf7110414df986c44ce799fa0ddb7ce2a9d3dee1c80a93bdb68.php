<?php

/* FraisBundle:Visiteur:renseignerFiche.html.twig */
class __TwigTemplate_0385f9dde1efa9feb23396e599cff537a605f1a948b5cd6a8d86d69665e2e6a9 extends Twig_Template
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
        $__internal_057d552bd85ad0810870f4e0b2fd830d4f6e3597c26c2fbfae703435e7e70a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057d552bd85ad0810870f4e0b2fd830d4f6e3597c26c2fbfae703435e7e70a16->enter($__internal_057d552bd85ad0810870f4e0b2fd830d4f6e3597c26c2fbfae703435e7e70a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Visiteur:renseignerFiche.html.twig"));

        // line 1
        echo "<html>
    <head>
        ";
        // line 3
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 4
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
        // line 6
        echo "    </head>

    <body>

        ";
        // line 10
        echo twig_include($this->env, $context, "FraisBundle:Template:VisiteurConnectedMenu.html.twig");
        echo "

        <div class=\"formRenseigner\">
            ";
        // line 13
        if (array_key_exists("form", $context)) {
            // line 14
            echo "                <h3> Frais forfaitisés</h3>
                ";
            // line 15
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
            ";
        }
        // line 17
        echo "        </div>



       


";
        
        $__internal_057d552bd85ad0810870f4e0b2fd830d4f6e3597c26c2fbfae703435e7e70a16->leave($__internal_057d552bd85ad0810870f4e0b2fd830d4f6e3597c26c2fbfae703435e7e70a16_prof);

    }

    public function getTemplateName()
    {
        return "FraisBundle:Visiteur:renseignerFiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  73 => 15,  70 => 14,  68 => 13,  62 => 10,  56 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<html>
    <head>
        {% stylesheets '@FraisBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %}
    </head>

    <body>

        {{ include(\"FraisBundle:Template:VisiteurConnectedMenu.html.twig\") }}

        <div class=\"formRenseigner\">
            {% if form is defined %}
                <h3> Frais forfaitisés</h3>
                {{form(form)}}
            {% endif %}
        </div>



       


";
    }
}
