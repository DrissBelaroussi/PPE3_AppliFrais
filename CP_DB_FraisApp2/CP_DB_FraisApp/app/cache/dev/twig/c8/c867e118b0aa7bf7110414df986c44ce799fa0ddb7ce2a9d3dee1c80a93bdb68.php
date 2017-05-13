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
        $__internal_8ff5bb3a3fee255c4e19cc33bd435ae82b00969c2c736c4fff217ead7d102e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff5bb3a3fee255c4e19cc33bd435ae82b00969c2c736c4fff217ead7d102e12->enter($__internal_8ff5bb3a3fee255c4e19cc33bd435ae82b00969c2c736c4fff217ead7d102e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Visiteur:renseignerFiche.html.twig"));

        // line 2
        echo "<html>
    <head>
        ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 5
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
        // line 7
        echo "    </head>

    <body>

        ";
        // line 11
        echo twig_include($this->env, $context, "FraisBundle:Template:VisiteurConnectedMenu.html.twig");
        echo "

        <div class=\"formRenseigner\">
            ";
        // line 14
        if (array_key_exists("form", $context)) {
            // line 15
            echo "                <h3> Frais forfaitisés</h3>
                ";
            // line 16
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
            ";
        }
        // line 18
        echo "        </div>

        <div class=\"formRenseigner\">

            <form action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("renseignerHome");
        echo "\" method=\"post\">
                <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
            </form>
        </div>

    </body> 








";
        
        $__internal_8ff5bb3a3fee255c4e19cc33bd435ae82b00969c2c736c4fff217ead7d102e12->leave($__internal_8ff5bb3a3fee255c4e19cc33bd435ae82b00969c2c736c4fff217ead7d102e12_prof);

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
        return array (  84 => 22,  78 => 18,  73 => 16,  70 => 15,  68 => 14,  62 => 11,  56 => 7,  30 => 5,  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{# Formulaire de renseignement de frais forfait et fiche frais #}
<html>
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

        <div class=\"formRenseigner\">

            <form action=\"{{ path('renseignerHome') }}\" method=\"post\">
                <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
            </form>
        </div>

    </body> 








";
    }
}
