<?php

/* FraisBundle:Comptable:SuivrePaiements.html.twig */
class __TwigTemplate_fb794fc87359c9d9487d33dc4fe15dc42af9102638a4185a4eaae2a5c35a4852 extends Twig_Template
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
        echo "
<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
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
        // line 8
        echo " 
    </head>


    <body>
        <table  class=\"table-bordered\" >



            ";
        // line 17
        if (array_key_exists("ficheVA", $context)) {
            // line 18
            echo "
                <tr>
                    <th>Identifiant </th>
                    <th>Nom </th>
                    <th>Prénom </th>                    
                    <th>Mois </th>
                    <th>Année </th>                    
                    <th>Etat </th>
                    <th>Date du modif </th>
                </tr>

                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ficheVA"]) ? $context["ficheVA"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
                // line 30
                echo "

                    <tr>     

                        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "id", array()), "nom", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "id", array()), "prenom", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "mois", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "annee", array()), "html", null, true);
                echo "</td>                       
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "idEtat", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "datemodif", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>
                            <form action=\"";
                // line 42
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailFiche");
                echo "\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Détail\" />   
                                <input type=\"hidden\" name=\"idVisiteur\"  value=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
                echo "\"/>
                                <input type=\"hidden\" name=\"mois\"  value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "mois", array()), "html", null, true);
                echo "\"/>
                                <input type=\"hidden\" name=\"annee\"  value=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "annee", array()), "html", null, true);
                echo "\"/>   
                            </form>
                        </td>

                    </tr>



                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            ";
        }
        // line 56
        echo "
        </table>

        <form action=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_connexionC");
        echo "\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
        </form>


    </body>

    suivre paiements ";
    }

    public function getTemplateName()
    {
        return "FraisBundle:Comptable:SuivrePaiements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 59,  151 => 56,  148 => 55,  133 => 46,  129 => 45,  125 => 44,  120 => 42,  115 => 40,  111 => 39,  107 => 38,  103 => 37,  99 => 36,  95 => 35,  91 => 34,  85 => 30,  81 => 29,  68 => 18,  66 => 17,  55 => 8,  29 => 7,  25 => 6,  19 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}

<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        {% stylesheets '@FraisBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %} 
    </head>


    <body>
        <table  class=\"table-bordered\" >



            {% if ficheVA is defined%}

                <tr>
                    <th>Identifiant </th>
                    <th>Nom </th>
                    <th>Prénom </th>                    
                    <th>Mois </th>
                    <th>Année </th>                    
                    <th>Etat </th>
                    <th>Date du modif </th>
                </tr>

                {% for fiche in ficheVA %}


                    <tr>     

                        <td>{{ fiche.id }}</td>
                        <td>{{ fiche.id.nom }}</td>
                        <td>{{ fiche.id.prenom }}</td>
                        <td>{{ fiche.mois }}</td>
                        <td>{{ fiche.annee }}</td>                       
                        <td>{{ fiche.idEtat}}</td>
                        <td>{{ fiche.datemodif | date('d/m/Y')}}</td>
                        <td>
                            <form action=\"{{ path('detailFiche') }}\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Détail\" />   
                                <input type=\"hidden\" name=\"idVisiteur\"  value=\"{{ fiche.id }}\"/>
                                <input type=\"hidden\" name=\"mois\"  value=\"{{ fiche.mois }}\"/>
                                <input type=\"hidden\" name=\"annee\"  value=\"{{ fiche.annee }}\"/>   
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

    suivre paiements ";
    }
}
