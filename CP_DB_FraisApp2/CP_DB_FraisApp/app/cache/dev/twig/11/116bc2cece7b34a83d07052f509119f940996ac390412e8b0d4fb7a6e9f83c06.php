<?php

/* FraisBundle:Comptable:ValiderFiche.html.twig */
class __TwigTemplate_b0bc9ab6ce052f92ffc35e4cfae6c34b562495aa2b42cd54639fbe37fd0c2d82 extends Twig_Template
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
        $__internal_6f2cf39e14f12b3c65c8a5fdc0aa8360d2228840a0981ec0078737b303035dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2cf39e14f12b3c65c8a5fdc0aa8360d2228840a0981ec0078737b303035dfa->enter($__internal_6f2cf39e14f12b3c65c8a5fdc0aa8360d2228840a0981ec0078737b303035dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Comptable:ValiderFiche.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 9
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
        // line 10
        echo " 
    </head>


    <body>
        
        ";
        // line 16
        if (array_key_exists("form", $context)) {
            // line 17
            echo "            ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
         ";
        }
        // line 19
        echo "         
         
         ";
        // line 21
        if (array_key_exists("message", $context)) {
            // line 22
            echo "            <div class=\"alert alert-default\">
                <strong>Oops !</strong> ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 26
        echo "        <table  class=\"table-bordered\" >



            ";
        // line 30
        if (array_key_exists("ficheVA", $context)) {
            // line 31
            echo "
                <tr>
                    <th>Identifiant </th>
                    <th>Nom </th>
                    <th>Prénom </th>                    
                    <th>Date </th>                                     
                    <th>Etat </th>
                    <th>Date du modif </th>
                </tr>

                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ficheVA"]) ? $context["ficheVA"] : $this->getContext($context, "ficheVA")));
            foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
                // line 42
                echo "

                    <tr>     

                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "idvisiteur", array()), "nom", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "idvisiteur", array()), "prenom", array()), "html", null, true);
                echo "</td> 
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "idEtat", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "datemodif", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>
                            <form action=\"";
                // line 53
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailFicheModif");
                echo "\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Détail\" />   
                                <input type=\"hidden\" name=\"idFiche\"  value=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
                echo "\"/>                              
                            </form>
                        </td>

                    </tr>



                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            ";
        }
        // line 65
        echo "
        </table>

        <form action=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_connexionC");
        echo "\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
        </form>


    </body>
";
        
        $__internal_6f2cf39e14f12b3c65c8a5fdc0aa8360d2228840a0981ec0078737b303035dfa->leave($__internal_6f2cf39e14f12b3c65c8a5fdc0aa8360d2228840a0981ec0078737b303035dfa_prof);

    }

    public function getTemplateName()
    {
        return "FraisBundle:Comptable:ValiderFiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 68,  170 => 65,  167 => 64,  152 => 55,  147 => 53,  142 => 51,  138 => 50,  134 => 49,  130 => 48,  126 => 47,  122 => 46,  116 => 42,  112 => 41,  100 => 31,  98 => 30,  92 => 26,  86 => 23,  83 => 22,  81 => 21,  77 => 19,  71 => 17,  69 => 16,  61 => 10,  35 => 9,  31 => 8,  25 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}

{# empty Twig template #}

<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        {% stylesheets '@FraisBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %} 
    </head>


    <body>
        
        {%if form is defined %}
            {{form(form)}}
         {% endif%}
         
         
         {% if message is defined %}
            <div class=\"alert alert-default\">
                <strong>Oops !</strong> {{message}}
            </div>
        {% endif %}
        <table  class=\"table-bordered\" >



            {% if ficheVA is defined%}

                <tr>
                    <th>Identifiant </th>
                    <th>Nom </th>
                    <th>Prénom </th>                    
                    <th>Date </th>                                     
                    <th>Etat </th>
                    <th>Date du modif </th>
                </tr>

                {% for fiche in ficheVA %}


                    <tr>     

                        <td>{{ fiche.id }}</td>
                        <td>{{ fiche.idvisiteur.nom }}</td>
                        <td>{{ fiche.idvisiteur.prenom }}</td> 
                        <td>{{ fiche.date | date('d/m/Y')}}</td>
                        <td>{{ fiche.idEtat}}</td>
                        <td>{{ fiche.datemodif | date('d/m/Y')}}</td>
                        <td>
                            <form action=\"{{ path('detailFicheModif') }}\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Détail\" />   
                                <input type=\"hidden\" name=\"idFiche\"  value=\"{{ fiche.id }}\"/>                              
                            </form>
                        </td>

                    </tr>



                {% endfor %}
            {% endif %}

        </table>

        <form action=\"{{ path('frais_connexionC') }}\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
        </form>


    </body>
";
    }
}
