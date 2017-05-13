<?php

/* FraisBundle:Visiteur:ficheFrais.html.twig */
class __TwigTemplate_7371ef82f4027eefa25dbb8a07e8f3219aaa70e553c83c4fc4bab2ae43086418 extends Twig_Template
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
        echo "<html>
    <head>
        ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 5
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
        // line 6
        echo " 
    </head>
    ";
        // line 8
        echo twig_include($this->env, $context, "FraisBundle:Template:VisiteurConnectedMenu.html.twig");
        echo "

    <div class=\"container\">
        ";
        // line 16
        echo "        <h3>
            Informations de la fiche de frais en cours
            <h3>
                <table  class=\"table-bordered\" >

                    ";
        // line 21
        if (array_key_exists("ficheFrais", $context)) {
            // line 22
            echo "                        ";
            // line 23
            echo "                        <tr>
                            <th>Identifiant </th>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "idVisiteur", array(), "array"), "html", null, true);
            echo "</td>
                        </tr>

                        <tr>     
                            <th>Mois </th>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "mois", array(), "array"), "html", null, true);
            echo "</td>
                        <tr>
                            <th>Etat </th>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "idEtat", array(), "array"), "html", null, true);
            echo "</td>
                        </tr>

                        <tr>
                            <th>Date de modif </th>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "dateModif", array(), "array"), "d/m/Y"), "html", null, true);
            echo "</td>

                        </tr>


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
                                ";
            // line 58
            $context["total"] = 0;
            // line 59
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "nbFraisForfait", array(), "array")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 60
                echo "                                    <tr>
                                        <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), $context["i"], array(), "array"), "libelle", array(), "array"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), $context["i"], array(), "array"), "montant", array(), "array"), "html", null, true);
                echo " €</td>
                                        <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), $context["i"], array(), "array"), "quantite", array(), "array"), "html", null, true);
                echo "</td>
                                        <td> ";
                // line 64
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), $context["i"], array(), "array"), "quantite", array(), "array") * $this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), $context["i"], array(), "array"), "montant", array(), "array")), "html", null, true);
                echo " € </td>
                                        ";
                // line 65
                $context["total"] = (($this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), $context["i"], array(), "array"), "quantite", array(), "array") * $this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), $context["i"], array(), "array"), "montant", array(), "array")) + (isset($context["total"]) ? $context["total"] : null));
                echo "         
                                    </tr>          
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "      
                            ";
        }
        // line 69
        echo "

                            </div>

                        </table>

                        <h5>  Vos frais forfaitisés s'élèvent à :  ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo " € <h5>

                                ";
        // line 77
        if (array_key_exists("fraisHF", $context)) {
            // line 78
            echo "                                    ";
            $context["totalHF"] = 0;
            // line 79
            echo "                                    <h3>Frais Hors Forfait</h3>                   
                                    <table  class=\"table-bordered\" >
                                        <thead class=\"thead-inverse\">
                                        <th> Libellé</th>
                                        <th> Date  </th>        
                                        <th> Montant </th>                                     


                                        </thead>
                                        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), "nbFraisHorsForfait", array(), "array")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 89
                echo "                                            <tr>
                                                <td>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), $context["i"], array(), "array"), "libelle", array(), "array"), "html", null, true);
                echo " </td> 
                                                <td>";
                // line 91
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), $context["i"], array(), "array"), "date", array(), "array"), "d/m/Y"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), $context["i"], array(), "array"), "montant", array(), "array"), "html", null, true);
                echo " € </td>                          

                                                ";
                // line 94
                $context["totalHF"] = ($this->getAttribute($this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), $context["i"], array(), "array"), "montant", array(), "array") + (isset($context["totalHF"]) ? $context["totalHF"] : null));
                echo "   


                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo " 
                                    </table>
                                    <h5>  Vos frais hors forfait s'élèvent à :  ";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["totalHF"]) ? $context["totalHF"] : null), "html", null, true);
            echo " € <h5>

                                        ";
        }
        // line 103
        echo "
                                        <form action=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_connexionV");
        echo "\" method=\"post\">
                                            <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
                                        </form>

                                        </html>
";
    }

    public function getTemplateName()
    {
        return "FraisBundle:Visiteur:ficheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 104,  232 => 103,  226 => 100,  222 => 98,  211 => 94,  206 => 92,  202 => 91,  198 => 90,  195 => 89,  191 => 88,  180 => 79,  177 => 78,  175 => 77,  170 => 75,  162 => 69,  158 => 67,  149 => 65,  145 => 64,  141 => 63,  137 => 62,  133 => 61,  130 => 60,  125 => 59,  123 => 58,  100 => 38,  92 => 33,  86 => 30,  78 => 25,  74 => 23,  72 => 22,  70 => 21,  63 => 16,  57 => 8,  53 => 6,  27 => 5,  23 => 4,  19 => 2,);
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

                    {% if ficheFrais is defined%}
                        {# {% for fiche in ficheFrais %}#}
                        <tr>
                            <th>Identifiant </th>
                            <td>{{ ficheFrais[\"idVisiteur\"] }}</td>
                        </tr>

                        <tr>     
                            <th>Mois </th>
                            <td>{{ ficheFrais[\"mois\"] }}</td>
                        <tr>
                            <th>Etat </th>
                            <td>{{ ficheFrais[\"idEtat\"] }}</td>
                        </tr>

                        <tr>
                            <th>Date de modif </th>
                            <td>{{ ficheFrais[\"dateModif\"] | date('d/m/Y')}}</td>

                        </tr>


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
                                {% for i in 0..ficheFrais[\"nbFraisForfait\"] %}
                                    <tr>
                                        <td>{{ficheFrais[i][\"libelle\"]}}</td>
                                        <td>{{ficheFrais[i][\"montant\"]}} €</td>
                                        <td>{{ficheFrais[i][\"quantite\"]}}</td>
                                        <td> {{ ficheFrais[i][\"quantite\"] * ficheFrais[i][\"montant\"] }} € </td>
                                        {% set total = ficheFrais[i][\"quantite\"] * ficheFrais[i][\"montant\"] + total %}         
                                    </tr>          
                                {%endfor%}      
                            {%endif%}


                            </div>

                        </table>

                        <h5>  Vos frais forfaitisés s'élèvent à :  {{total}} € <h5>

                                {% if fraisHF is defined%}
                                    {% set totalHF = 0 %}
                                    <h3>Frais Hors Forfait</h3>                   
                                    <table  class=\"table-bordered\" >
                                        <thead class=\"thead-inverse\">
                                        <th> Libellé</th>
                                        <th> Date  </th>        
                                        <th> Montant </th>                                     


                                        </thead>
                                        {% for i in 0..fraisHF[\"nbFraisHorsForfait\"] %}
                                            <tr>
                                                <td>{{fraisHF[i][\"libelle\"]}} </td> 
                                                <td>{{ fraisHF[i][\"date\"] | date('d/m/Y')}}</td>
                                                <td>{{fraisHF[i][\"montant\"]}} € </td>                          

                                                {% set totalHF =  fraisHF[i][\"montant\"] + totalHF %}   


                                            </tr>
                                        {%endfor%} 
                                    </table>
                                    <h5>  Vos frais hors forfait s'élèvent à :  {{totalHF}} € <h5>

                                        {%endif%}

                                        <form action=\"{{ path('frais_connexionV') }}\" method=\"post\">
                                            <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
                                        </form>

                                        </html>
";
    }
}
