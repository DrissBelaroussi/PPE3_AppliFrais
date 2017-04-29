<?php

/* FraisBundle:Visiteur:RenseignerFicheHF.html.twig */
class __TwigTemplate_0cd3f2e05bb3b3ccf35a96ff4af7c70ac24cb0d7cbdf977519e4da3a338fb7e3 extends Twig_Template
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
        <title>Bienvenue dans AppliFrais !</title>
        ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 6
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
        // line 7
        echo " 
    </head>
    <body>
        ";
        // line 10
        echo twig_include($this->env, $context, "FraisBundle:Template:VisiteurConnectedMenu.html.twig");
        echo "



        ";
        // line 14
        if (array_key_exists("form", $context)) {
            // line 15
            echo "            <h3> Frais non forfaitisés</h3>
            ";
            // line 16
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
            echo "
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        if (array_key_exists("alert", $context)) {
            // line 20
            echo "            <div class=\"alert alert-danger\">
                <strong>Attention !</strong> ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["alert"]) ? $context["alert"] : null), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 24
        echo "

        ";
        // line 26
        if (array_key_exists("fraisHF", $context)) {
            // line 27
            echo "            ";
            $context["totalHF"] = 0;
            // line 28
            echo "            <h3>Frais Hors Forfait</h3>                   
            <table  class=\"table-bordered\" >
                <thead class=\"thead-inverse\">
                <th> Libellé</th>
                <th> Date  </th>        
                <th> Montant </th>                                     


            </thead>
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), "nbFraisHorsForfait", array(), "array")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
                echo "                <tr>
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), $context["i"], array(), "array"), "libelle", array(), "array"), "html", null, true);
                echo " </td> 
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), $context["i"], array(), "array"), "date", array(), "array"), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), $context["i"], array(), "array"), "montant", array(), "array"), "html", null, true);
                echo " € </td> 
                    <td>
                        <form action=\"";
                // line 43
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerHF");
                echo "\" method=\"post\">
                            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Supprimer\" />   
                            <input type=\"hidden\" class=\"btn btn-lg btn-inverse\" name=\"idFraisHF\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), $context["i"], array(), "array"), "id", array(), "array"), "html", null, true);
                echo "\" />
                        </form>
                    </td>

                    ";
                // line 49
                $context["totalHF"] = ($this->getAttribute($this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), $context["i"], array(), "array"), "montant", array(), "array") + (isset($context["totalHF"]) ? $context["totalHF"] : null));
                echo "   


                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo " 
        </table>

        <h5>  Vos frais hors forfait s'élèvent à :  ";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["totalHF"]) ? $context["totalHF"] : null), "html", null, true);
            echo " € <h5>

            ";
        }
        // line 59
        echo "
            </body>

            <footer>
                <form action=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_connexionV");
        echo "\" method=\"post\">
                    <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
                </form>

            </footer>
            </html>

";
    }

    public function getTemplateName()
    {
        return "FraisBundle:Visiteur:RenseignerFicheHF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 63,  164 => 59,  158 => 56,  153 => 53,  142 => 49,  135 => 45,  130 => 43,  125 => 41,  121 => 40,  117 => 39,  114 => 38,  110 => 37,  99 => 28,  96 => 27,  94 => 26,  90 => 24,  84 => 21,  81 => 20,  79 => 19,  76 => 18,  71 => 16,  68 => 15,  66 => 14,  59 => 10,  54 => 7,  28 => 6,  24 => 5,  19 => 2,);
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
        {{ include(\"FraisBundle:Template:VisiteurConnectedMenu.html.twig\") }}



        {% if form is defined %}
            <h3> Frais non forfaitisés</h3>
            {{form(form)}}
        {% endif %}

        {% if alert is defined %}
            <div class=\"alert alert-danger\">
                <strong>Attention !</strong> {{alert}}
            </div>
        {% endif %}


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
                    <td>{{fraisHF[i][\"date\"] | date('d/m/Y')}}</td>
                    <td>{{fraisHF[i][\"montant\"]}} € </td> 
                    <td>
                        <form action=\"{{ path('supprimerHF') }}\" method=\"post\">
                            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Supprimer\" />   
                            <input type=\"hidden\" class=\"btn btn-lg btn-inverse\" name=\"idFraisHF\" value=\"{{fraisHF[i][\"id\"]}}\" />
                        </form>
                    </td>

                    {% set totalHF =  fraisHF[i][\"montant\"] + totalHF %}   


                </tr>
            {%endfor%} 
        </table>

        <h5>  Vos frais hors forfait s'élèvent à :  {{totalHF}} € <h5>

            {%endif%}

            </body>

            <footer>
                <form action=\"{{ path('frais_connexionV') }}\" method=\"post\">
                    <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
                </form>

            </footer>
            </html>

";
    }
}
