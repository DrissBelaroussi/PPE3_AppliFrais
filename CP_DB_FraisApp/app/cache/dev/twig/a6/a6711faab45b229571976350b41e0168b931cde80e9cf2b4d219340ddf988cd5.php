<?php

/* FraisBundle:Visiteur:AccueilV.html.twig */
class __TwigTemplate_a94c4c6607aef216729ed59b455757ff781d7d6afc111ba827a1c5bd187d9015 extends Twig_Template
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
        $__internal_65e208228dbe882e745f717427abf99790051a65432df0ca6b6e0f9560d979c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e208228dbe882e745f717427abf99790051a65432df0ca6b6e0f9560d979c2->enter($__internal_65e208228dbe882e745f717427abf99790051a65432df0ca6b6e0f9560d979c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Visiteur:AccueilV.html.twig"));

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
        // line 13
        if (array_key_exists("visiteur", $context)) {
            // line 14
            echo "            ";
            echo twig_include($this->env, $context, "FraisBundle:Template:VisiteurConnectedMenu.html.twig");
            echo "
            <h1> 
                ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "nom", array()), "html", null, true);
            echo "
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "prenom", array()), "html", null, true);
            echo "
            </h1>
        ";
        } else {
            // line 20
            echo "            ";
            echo twig_include($this->env, $context, "FraisBundle:Template:Menu.html.twig");
            echo "
        ";
        }
        // line 22
        echo "


        <form action=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("renseignerHome");
        echo "\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Renseigner Fiche Frais\" />
        </form>
        <form action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulter");
        echo "\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Consulter Fiche Frais\" />
        </form>
            
       ";
        // line 33
        echo "            ";
        // line 36
        echo "            ";
        if (array_key_exists("formFiche", $context)) {
            echo "        

                ";
            // line 38
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formFiche"]) ? $context["formFiche"] : $this->getContext($context, "formFiche")), 'form_start');
            echo "

                <table style=\"\">
                    <tr>
                        <td style=\"width:100%\">";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFiche"]) ? $context["formFiche"] : $this->getContext($context, "formFiche")), "date", array()), 'label');
            echo "</td>
                    </tr>
                    <tr>
                          <td>  ";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formFiche"]) ? $context["formFiche"] : $this->getContext($context, "formFiche")), "date", array()), "day", array()), 'widget', array("attr" => array("style" => "display:none")));
            echo "
                            ";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFiche"]) ? $context["formFiche"] : $this->getContext($context, "formFiche")), "date", array()), 'widget');
            echo " </td>
                         <td>   ";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFiche"]) ? $context["formFiche"] : $this->getContext($context, "formFiche")), "date", array()), 'errors');
            echo "</td>

                    </tr>
                    <tr>
                        <td>";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFiche"]) ? $context["formFiche"] : $this->getContext($context, "formFiche")), "Valider", array()), 'row');
            echo "</td>

                    </tr>


                </table>

                ";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formFiche"]) ? $context["formFiche"] : $this->getContext($context, "formFiche")), 'rest');
            echo "
                ";
            // line 59
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formFiche"]) ? $context["formFiche"] : $this->getContext($context, "formFiche")), 'form_end');
            echo "

            ";
        }
        // line 62
        echo "


            ";
        // line 65
        if (array_key_exists("noFiche", $context)) {
            // line 66
            echo "                <div class=\"alert alert-default\">
                    <strong> Oups !</strong> ";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["noFiche"]) ? $context["noFiche"] : $this->getContext($context, "noFiche")), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 70
        echo "       ";
        // line 71
        echo "    </body>
</html>
";
        
        $__internal_65e208228dbe882e745f717427abf99790051a65432df0ca6b6e0f9560d979c2->leave($__internal_65e208228dbe882e745f717427abf99790051a65432df0ca6b6e0f9560d979c2_prof);

    }

    public function getTemplateName()
    {
        return "FraisBundle:Visiteur:AccueilV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 71,  179 => 70,  173 => 67,  170 => 66,  168 => 65,  163 => 62,  157 => 59,  153 => 58,  143 => 51,  136 => 47,  132 => 46,  128 => 45,  122 => 42,  115 => 38,  109 => 36,  107 => 33,  100 => 28,  94 => 25,  89 => 22,  83 => 20,  77 => 17,  73 => 16,  67 => 14,  65 => 13,  58 => 8,  32 => 7,  28 => 6,  22 => 2,);
    }

    public function getSource()
    {
        return "{# Represente la page d'accueil #}

<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        {% stylesheets '@FraisBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %} 
    </head>
    <body>


        {% if visiteur is defined%}
            {{ include(\"FraisBundle:Template:VisiteurConnectedMenu.html.twig\") }}
            <h1> 
                {{ visiteur.nom }}
                {{ visiteur.prenom }}
            </h1>
        {% else %}
            {{ include(\"FraisBundle:Template:Menu.html.twig\") }}
        {%endif%}



        <form action=\"{{ path('renseignerHome') }}\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Renseigner Fiche Frais\" />
        </form>
        <form action=\"{{ path('consulter') }}\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Consulter Fiche Frais\" />
        </form>
            
       {# <div class =\"formFiche\">#}
            {# {% if formFiche is defined%}
                 {{form(formFiche)}}
             {% endif %}#}
            {% if formFiche is defined %}        

                {{form_start(formFiche)}}

                <table style=\"\">
                    <tr>
                        <td style=\"width:100%\">{{form_label(formFiche.date)}}</td>
                    </tr>
                    <tr>
                          <td>  {{form_widget(formFiche.date.day,{'attr': { 'style': 'display:none' } } )}}
                            {{form_widget(formFiche.date) }} </td>
                         <td>   {{form_errors(formFiche.date)}}</td>

                    </tr>
                    <tr>
                        <td>{{form_row(formFiche.Valider)}}</td>

                    </tr>


                </table>

                {{ form_rest(formFiche) }}
                {{form_end(formFiche)}}

            {%endif%}



            {% if noFiche is defined %}
                <div class=\"alert alert-default\">
                    <strong> Oups !</strong> {{noFiche}}
                </div>
            {% endif %}
       {# </div>#}
    </body>
</html>
";
    }
}
