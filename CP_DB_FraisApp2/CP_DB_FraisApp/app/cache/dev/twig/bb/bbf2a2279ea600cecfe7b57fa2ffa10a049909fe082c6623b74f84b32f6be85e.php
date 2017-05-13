<?php

/* FraisBundle:Comptable:DetailFicheModif.html.twig */
class __TwigTemplate_78f076b240e4c45d05155f4ab87c530943e8239c70dc5add4db4e851edfc78f8 extends Twig_Template
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
        $__internal_20809e435f662f70a8d9b2ea7db27f49a8d43e95ce44a64eb1d14c6942df4eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20809e435f662f70a8d9b2ea7db27f49a8d43e95ce44a64eb1d14c6942df4eda->enter($__internal_20809e435f662f70a8d9b2ea7db27f49a8d43e95ce44a64eb1d14c6942df4eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Comptable:DetailFicheModif.html.twig"));

        // line 2
        echo "
<html>
    <head>
        ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 6
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
        echo " 
    </head>
    ";
        // line 9
        echo twig_include($this->env, $context, "FraisBundle:Template:VisiteurConnectedMenu.html.twig");
        echo "

    <div class=\"container\">
        ";
        // line 17
        echo "        <h3>
            Informations de la fiche de frais en cours
            <h3>
                <table  class=\"table-bordered\" >

                    ";
        // line 22
        if (array_key_exists("fiche", $context)) {
            // line 23
            echo "                        ";
            // line 24
            echo "
                        <tr>
                            <th>Identifiant</th>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array()), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>

                        <tr>
                            <th>Nom </th>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "idvisiteur", array()), "nom", array()), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <th>Prénom </th>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "idvisiteur", array()), "prenom", array()), "html", null, true);
            echo "</td>
                        </tr>

                        <tr>     
                            <th>Date </th>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <tr>

                            <th>Etat </th>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "idEtat", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        </tr>

                        <tr>
                            <th>Date de modif </th>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "datemodif", array()), "d/m/Y"), "html", null, true);
            echo "</td>

                        </tr>

                    ";
        }
        // line 56
        echo "                </table>
                <br>

                ";
        // line 59
        if (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "idEtat", array()) == "CL")) {
            echo "                                    

                    <form action=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("misePaiement");
            echo "\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-lg btn-inverse\"  value=\"Mise en paiement\" />
                        <input type=\"hidden\" name=\"idFiche\"  value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array()), "html", null, true);
            echo "\"/>  
                    </form>
                ";
        }
        // line 66
        echo "

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
        // line 81
        $context["total"] = 0;
        // line 82
        echo "                            ";
        if (array_key_exists("fraisForfait", $context)) {
            // line 83
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fraisForfait"]) ? $context["fraisForfait"] : $this->getContext($context, "fraisForfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unFraisForfait"]) {
                // line 84
                echo "                                    <tr>
                                        <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unFraisForfait"], "idFraisforfait", array()), "libelle", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unFraisForfait"], "idFraisforfait", array()), "montant", array()), "html", null, true);
                echo " €</td>
                                        <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFraisForfait"], "quantite", array()), "html", null, true);
                echo "</td>
                                        <td> ";
                // line 88
                echo twig_escape_filter($this->env, ($this->getAttribute($context["unFraisForfait"], "quantite", array()) * $this->getAttribute($this->getAttribute($context["unFraisForfait"], "idFraisforfait", array()), "montant", array())), "html", null, true);
                echo " € </td>
                                        ";
                // line 89
                $context["total"] = (($this->getAttribute($context["unFraisForfait"], "quantite", array()) * $this->getAttribute($this->getAttribute($context["unFraisForfait"], "idFraisforfait", array()), "montant", array())) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                echo "         
                                    </tr>          
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFraisForfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                            ";
        }
        // line 93
        echo "




                            </div>

                        </table>


                        <h5>  Les frais forfaitisés s'élèvent à :  ";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " € <h5>


                                <h3>
                                    Frais Non Forfaitisés
                                    <h3>
                                        <table  class=\"table-bordered\" >

                                            <thead>
                                            <th> Libellé</th>
                                            <th> Montant</th>                              
                                            <th> Date </th>

                                            </thead>


                                            ";
        // line 119
        $context["total"] = 0;
        // line 120
        echo "                                            ";
        if (array_key_exists("fraisHorsForfait", $context)) {
            // line 121
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fraisHorsForfait"]) ? $context["fraisHorsForfait"] : $this->getContext($context, "fraisHorsForfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unFraisHorsForfait"]) {
                // line 122
                echo "                                                    <tr>
                                                        <td>";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFraisHorsForfait"], "libelle", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFraisHorsForfait"], "montant", array()), "html", null, true);
                echo " €</td>
                                                        <td>";
                // line 125
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFraisHorsForfait"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>

                                                        ";
                // line 127
                $context["total"] = ($this->getAttribute($context["unFraisHorsForfait"], "montant", array()) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                echo "         
                                                    </tr>          
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFraisHorsForfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "   

                                            ";
        }
        // line 132
        echo "
                                            </div>

                                        </table>

                                        <h5>  Les frais non forfaitisés s'élèvent à :  ";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " € <h5>

";
        
        $__internal_20809e435f662f70a8d9b2ea7db27f49a8d43e95ce44a64eb1d14c6942df4eda->leave($__internal_20809e435f662f70a8d9b2ea7db27f49a8d43e95ce44a64eb1d14c6942df4eda_prof);

    }

    public function getTemplateName()
    {
        return "FraisBundle:Comptable:DetailFicheModif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 137,  280 => 132,  275 => 129,  266 => 127,  261 => 125,  257 => 124,  253 => 123,  250 => 122,  245 => 121,  242 => 120,  240 => 119,  221 => 103,  209 => 93,  206 => 92,  197 => 89,  193 => 88,  189 => 87,  185 => 86,  181 => 85,  178 => 84,  173 => 83,  170 => 82,  168 => 81,  151 => 66,  145 => 63,  140 => 61,  135 => 59,  130 => 56,  122 => 51,  114 => 46,  107 => 42,  99 => 37,  92 => 33,  83 => 27,  78 => 24,  76 => 23,  74 => 22,  67 => 17,  61 => 9,  57 => 7,  31 => 6,  27 => 5,  22 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}

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
                            <td>{{ fiche.idvisiteur.nom }}</td>
                        </tr>
                        <tr>
                            <th>Prénom </th>
                            <td>{{ fiche.idvisiteur.prenom }}</td>
                        </tr>

                        <tr>     
                            <th>Date </th>
                            <td>{{ fiche.date | date('d/m/Y')}}</td>
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

                {% if fiche.idEtat == 'CL' %}                                    

                    <form action=\"{{ path('misePaiement') }}\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-lg btn-inverse\"  value=\"Mise en paiement\" />
                        <input type=\"hidden\" name=\"idFiche\"  value=\"{{ fiche.id }}\"/>  
                    </form>
                {% endif %}


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
                            {% if fraisForfait is defined%}
                                {% for unFraisForfait in fraisForfait  %}
                                    <tr>
                                        <td>{{unFraisForfait.idFraisforfait.libelle}}</td>
                                        <td>{{unFraisForfait.idFraisforfait.montant}} €</td>
                                        <td>{{unFraisForfait.quantite}}</td>
                                        <td> {{ (unFraisForfait.quantite) * (unFraisForfait.idFraisforfait.montant)}} € </td>
                                        {% set total = unFraisForfait.quantite * unFraisForfait.idFraisforfait.montant + total %}         
                                    </tr>          
                                {%endfor%}
                            {% endif %}





                            </div>

                        </table>


                        <h5>  Les frais forfaitisés s'élèvent à :  {{total}} € <h5>


                                <h3>
                                    Frais Non Forfaitisés
                                    <h3>
                                        <table  class=\"table-bordered\" >

                                            <thead>
                                            <th> Libellé</th>
                                            <th> Montant</th>                              
                                            <th> Date </th>

                                            </thead>


                                            {% set total = 0 %}
                                            {% if fraisHorsForfait is defined%}
                                                {% for unFraisHorsForfait  in fraisHorsForfait %}
                                                    <tr>
                                                        <td>{{unFraisHorsForfait.libelle}}</td>
                                                        <td>{{unFraisHorsForfait.montant}} €</td>
                                                        <td>{{unFraisHorsForfait.date | date('d/m/Y') }}</td>

                                                        {% set total = unFraisHorsForfait.montant + total %}         
                                                    </tr>          
                                                {%endfor%}   

                                            {% endif %}

                                            </div>

                                        </table>

                                        <h5>  Les frais non forfaitisés s'élèvent à :  {{total}} € <h5>

";
    }
}
