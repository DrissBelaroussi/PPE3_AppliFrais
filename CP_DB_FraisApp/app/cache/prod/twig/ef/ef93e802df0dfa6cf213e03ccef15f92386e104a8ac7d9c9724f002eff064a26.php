<?php

/* FraisBundle:Comptable:DetailFrais.html.twig */
class __TwigTemplate_4bd47e34de377ad1b70d090797c3d3a35c3ae5cf79413584eb484edb260c4dd2 extends Twig_Template
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
Détail frais ! <3

<html>
    <head>
        ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 8
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
        echo " 
    </head>
    ";
        // line 11
        echo twig_include($this->env, $context, "FraisBundle:Template:VisiteurConnectedMenu.html.twig");
        echo "

    <div class=\"container\">
        ";
        // line 19
        echo "        <h3>
            Informations de la fiche de frais en cours
            <h3>
                <table  class=\"table-bordered\" >

                    ";
        // line 24
        if (array_key_exists("fiche", $context)) {
            // line 25
            echo "                        ";
            // line 26
            echo "                        
                         <tr>
                            <th>Identifiant</th>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "id", array()), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            
                        <tr>
                            <th>Nom </th>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "id", array()), "nom", array()), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <th>Prénom </th>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "id", array()), "prenom", array()), "html", null, true);
            echo "</td>
                        </tr>

                        <tr>     
                            <th>Mois </th>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "mois", array()), "html", null, true);
            echo "</td>
                        <tr>
                        <tr>     
                            <th>Année </th>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "annee", array()), "html", null, true);
            echo "</td>
                        <tr>
                            <th>Etat </th>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "idEtat", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        </tr>

                        <tr>
                            <th>Date de modif </th>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "datemodif", array()), "d/m/Y"), "html", null, true);
            echo "</td>

                        </tr>

                         ";
        }
        // line 61
        echo "                    </table>
                    <br>

                    <h3>
                        Frais Forfaitisés
                        <h3>
                            <table  class=\"table-bordered\" >

                                <thead>
                                <th> Libellé</th>
                                <th> Montant</th>
                                <th> Quantité </th>
                                <th> Total </th>

                                </thead>
                                ";
        // line 76
        $context["total"] = 0;
        // line 77
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute((isset($context["fraisForfait"]) ? $context["fraisForfait"] : null), "nbFraisForfait", array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 78
            echo "                                    <tr>
                                        <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisForfait"]) ? $context["fraisForfait"] : null), $context["i"], array(), "array"), "libelle", array(), "array"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisForfait"]) ? $context["fraisForfait"] : null), $context["i"], array(), "array"), "montant", array(), "array"), "html", null, true);
            echo " €</td>
                                        <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisForfait"]) ? $context["fraisForfait"] : null), $context["i"], array(), "array"), "quantite", array(), "array"), "html", null, true);
            echo "</td>
                                        <td> ";
            // line 82
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["fraisForfait"]) ? $context["fraisForfait"] : null), $context["i"], array(), "array"), "quantite", array(), "array") * $this->getAttribute($this->getAttribute((isset($context["fraisForfait"]) ? $context["fraisForfait"] : null), $context["i"], array(), "array"), "montant", array(), "array")), "html", null, true);
            echo " € </td>
                                        ";
            // line 83
            $context["total"] = (($this->getAttribute($this->getAttribute((isset($context["fraisForfait"]) ? $context["fraisForfait"] : null), $context["i"], array(), "array"), "quantite", array(), "array") * $this->getAttribute($this->getAttribute((isset($context["fraisForfait"]) ? $context["fraisForfait"] : null), $context["i"], array(), "array"), "montant", array(), "array")) + (isset($context["total"]) ? $context["total"] : null));
            echo "         
                                    </tr>          
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "      
                           


                            </div>

                        </table>

                        <h5>  Les frais forfaitisés s'élèvent à :  ";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo " € <h5>

                                
                                <h3>
                        Frais Forfaitisés
                        <h3>
                            <table  class=\"table-bordered\" >

                                <thead>
                                <th> Libellé</th>
                                <th> Montant</th>                              
                                <th> Date </th>

                                </thead>
                                ";
        // line 107
        $context["total"] = 0;
        // line 108
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute((isset($context["fraisHorsForfait"]) ? $context["fraisHorsForfait"] : null), "nbFraisHorsForfait", array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 109
            echo "                                    <tr>
                                        <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisHorsForfait"]) ? $context["fraisHorsForfait"] : null), $context["i"], array(), "array"), "libelle", array(), "array"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisHorsForfait"]) ? $context["fraisHorsForfait"] : null), $context["i"], array(), "array"), "montant", array(), "array"), "html", null, true);
            echo " €</td>
                                        <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisHorsForfait"]) ? $context["fraisHorsForfait"] : null), $context["i"], array(), "array"), "date", array(), "array"), "d/m/Y"), "html", null, true);
            echo "</td>
                                        
                                        ";
            // line 114
            $context["total"] = ($this->getAttribute($this->getAttribute((isset($context["fraisHorsForfait"]) ? $context["fraisHorsForfait"] : null), $context["i"], array(), "array"), "montant", array(), "array") + (isset($context["total"]) ? $context["total"] : null));
            echo "         
                                    </tr>          
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "      
                                
                            </div>

                        </table>

                        <h5>  Les frais non forfaitisés s'élèvent à :  ";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo " € <h5>";
    }

    public function getTemplateName()
    {
        return "FraisBundle:Comptable:DetailFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 122,  246 => 116,  237 => 114,  232 => 112,  228 => 111,  224 => 110,  221 => 109,  216 => 108,  214 => 107,  197 => 93,  187 => 85,  178 => 83,  174 => 82,  170 => 81,  166 => 80,  162 => 79,  159 => 78,  154 => 77,  152 => 76,  135 => 61,  127 => 56,  119 => 51,  113 => 48,  106 => 44,  98 => 39,  91 => 35,  82 => 29,  77 => 26,  75 => 25,  73 => 24,  66 => 19,  60 => 11,  56 => 9,  30 => 8,  26 => 7,  19 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}

Détail frais ! <3

<html>
    <head>
        {% stylesheets '@FraisBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %} 
    </head>
    {{ include(\"FraisBundle:Template:VisiteurConnectedMenu.html.twig\") }}

    <div class=\"container\">
        {#{% if lesFiches is defined%}
            {% for fiche in lesFiches %}
                {{ fiche.nbJustificatifs }}
            {% endfor %}
        {%endif%}#}
        <h3>
            Informations de la fiche de frais en cours
            <h3>
                <table  class=\"table-bordered\" >

                    {% if fiche is defined%}
                        {# {% for fiche in ficheFrais %}#}
                        
                         <tr>
                            <th>Identifiant</th>
                            <td>{{ fiche.id }}</td>
                        </tr>
                        <tr>
                            
                        <tr>
                            <th>Nom </th>
                            <td>{{ fiche.id.nom }}</td>
                        </tr>
                        <tr>
                            <th>Prénom </th>
                            <td>{{ fiche.id.prenom }}</td>
                        </tr>

                        <tr>     
                            <th>Mois </th>
                            <td>{{ fiche.mois }}</td>
                        <tr>
                        <tr>     
                            <th>Année </th>
                            <td>{{ fiche.annee }}</td>
                        <tr>
                            <th>Etat </th>
                            <td>{{ fiche.idEtat.libelle }}</td>
                        </tr>

                        <tr>
                            <th>Date de modif </th>
                            <td>{{ fiche.datemodif | date('d/m/Y')}}</td>

                        </tr>

                         {%endif%}
                    </table>
                    <br>

                    <h3>
                        Frais Forfaitisés
                        <h3>
                            <table  class=\"table-bordered\" >

                                <thead>
                                <th> Libellé</th>
                                <th> Montant</th>
                                <th> Quantité </th>
                                <th> Total </th>

                                </thead>
                                {% set total = 0 %}
                                {% for i in 0..fraisForfait[\"nbFraisForfait\"] %}
                                    <tr>
                                        <td>{{fraisForfait[i][\"libelle\"]}}</td>
                                        <td>{{fraisForfait[i][\"montant\"]}} €</td>
                                        <td>{{fraisForfait[i][\"quantite\"]}}</td>
                                        <td> {{ fraisForfait[i][\"quantite\"] * fraisForfait[i][\"montant\"] }} € </td>
                                        {% set total = fraisForfait[i][\"quantite\"] * fraisForfait[i][\"montant\"] + total %}         
                                    </tr>          
                                {%endfor%}      
                           


                            </div>

                        </table>

                        <h5>  Les frais forfaitisés s'élèvent à :  {{total}} € <h5>

                                
                                <h3>
                        Frais Forfaitisés
                        <h3>
                            <table  class=\"table-bordered\" >

                                <thead>
                                <th> Libellé</th>
                                <th> Montant</th>                              
                                <th> Date </th>

                                </thead>
                                {% set total = 0 %}
                                {% for i in 0..fraisHorsForfait[\"nbFraisHorsForfait\"] %}
                                    <tr>
                                        <td>{{fraisHorsForfait[i][\"libelle\"]}}</td>
                                        <td>{{fraisHorsForfait[i][\"montant\"]}} €</td>
                                        <td>{{fraisHorsForfait[i][\"date\"] | date('d/m/Y') }}</td>
                                        
                                        {% set total = fraisHorsForfait[i][\"montant\"] + total %}         
                                    </tr>          
                                {%endfor%}      
                                
                            </div>

                        </table>

                        <h5>  Les frais non forfaitisés s'élèvent à :  {{total}} € <h5>";
    }
}
