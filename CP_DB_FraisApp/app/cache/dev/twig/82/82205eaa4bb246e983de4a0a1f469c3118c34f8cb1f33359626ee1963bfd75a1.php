<?php

/* FraisBundle:Comptable:AccueilC.html.twig */
class __TwigTemplate_92b8dcd72ca9a76a48c02e5f171f792491eba85ae338341e2cab33f6213e3a30 extends Twig_Template
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
        $__internal_9d73d936d06a7e3746b48242e5a0140c4ad16a985f4fb460ca55a9a3a9cac86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d73d936d06a7e3746b48242e5a0140c4ad16a985f4fb460ca55a9a3a9cac86b->enter($__internal_9d73d936d06a7e3746b48242e5a0140c4ad16a985f4fb460ca55a9a3a9cac86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Comptable:AccueilC.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 13
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
        // line 14
        echo " 
    </head>
    <body>

        ";
        // line 18
        if (array_key_exists("comptable", $context)) {
            // line 19
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comptable"]) ? $context["comptable"] : $this->getContext($context, "comptable")), "id", array()), "html", null, true);
            echo "
            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comptable"]) ? $context["comptable"] : $this->getContext($context, "comptable")), "nom", array()), "html", null, true);
            echo "
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comptable"]) ? $context["comptable"] : $this->getContext($context, "comptable")), "prenom", array()), "html", null, true);
            echo "</br>
        ";
        }
        // line 23
        echo "


        <form action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suivreFiche");
        echo "\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Suivre Paiements\" />
        </form>
        <form action=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validerFiche");
        echo "\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Valider Fiche\" />
        </form>

        
    </body>






";
        
        $__internal_9d73d936d06a7e3746b48242e5a0140c4ad16a985f4fb460ca55a9a3a9cac86b->leave($__internal_9d73d936d06a7e3746b48242e5a0140c4ad16a985f4fb460ca55a9a3a9cac86b_prof);

    }

    public function getTemplateName()
    {
        return "FraisBundle:Comptable:AccueilC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  88 => 26,  83 => 23,  78 => 21,  74 => 20,  69 => 19,  67 => 18,  61 => 14,  35 => 13,  31 => 12,  25 => 8,  22 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}

{#{% for unComptable in data %}
    {{unComptable['id']}}
    {{unComptable['nom']}}
    {{unComptable['prenom']}}</br>
{%endfor %}#}

<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        {% stylesheets '@FraisBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %} 
    </head>
    <body>

        {%if comptable is defined %}
            {{comptable.id}}
            {{comptable.nom}}
            {{comptable.prenom}}</br>
        {% endif %}



        <form action=\"{{ path('suivreFiche') }}\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Suivre Paiements\" />
        </form>
        <form action=\"{{ path('validerFiche') }}\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Valider Fiche\" />
        </form>

        
    </body>






";
    }
}
