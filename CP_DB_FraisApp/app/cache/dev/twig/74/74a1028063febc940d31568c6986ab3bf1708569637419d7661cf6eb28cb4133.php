<?php

/* FraisBundle:Visiteur:RenseignerFicheHF.html.twig */
class __TwigTemplate_91aa978cf7f6e5130c10fe960fed60319e143f1915d67ce40de0e12a097aeb99 extends Twig_Template
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
        $__internal_b3902c2805a00cb4fc4e012d6324d0e8285c858f57d86387b0abd8a8aa5feb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3902c2805a00cb4fc4e012d6324d0e8285c858f57d86387b0abd8a8aa5feb9d->enter($__internal_b3902c2805a00cb4fc4e012d6324d0e8285c858f57d86387b0abd8a8aa5feb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Visiteur:RenseignerFicheHF.html.twig"));

        // line 2
        echo "<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
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
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
        ";
        }
        // line 18
        echo " 

        ";
        // line 20
        if (array_key_exists("alert", $context)) {
            // line 21
            echo "            <div class=\"alert alert-danger\">
                <strong>Attention !</strong> ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 25
        echo "

        ";
        // line 27
        if (array_key_exists("fraisHF", $context)) {
            // line 28
            echo "            ";
            $context["totalHF"] = 0;
            // line 29
            echo "            <h3>Frais Hors Forfait</h3>                   
            <table  class=\"table-bordered\" >
                <thead class=\"thead-inverse\">
                <th> Libellé</th>
                <th> Date  </th>        
                <th> Montant </th>                                     


            </thead>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fraisHF"]) ? $context["fraisHF"] : $this->getContext($context, "fraisHF")));
            foreach ($context['_seq'] as $context["_key"] => $context["unFraisHF"]) {
                // line 39
                echo "                <tr>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFraisHF"], "libelle", array()), "html", null, true);
                echo " </td> 
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFraisHF"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFraisHF"], "montant", array()), "html", null, true);
                echo " € </td> 
                    <td>
                        <form action=\"";
                // line 44
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerHF");
                echo "\" method=\"post\">
                            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Supprimer\" />   
                            <input type=\"hidden\" class=\"btn btn-lg btn-inverse\" name=\"idFraisHF\" value=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFraisHF"], "id", array()), "html", null, true);
                echo "\" />
                        </form>
                    </td>

                    ";
                // line 50
                $context["totalHF"] = ($this->getAttribute($context["unFraisHF"], "montant", array()) + (isset($context["totalHF"]) ? $context["totalHF"] : $this->getContext($context, "totalHF")));
                echo "   


                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFraisHF'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo " 
        </table>

        <h5>  Vos frais hors forfait s'élèvent à :  ";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["totalHF"]) ? $context["totalHF"] : $this->getContext($context, "totalHF")), "html", null, true);
            echo " € <h5>

            ";
        }
        // line 60
        echo "
            </body>

            <footer>
                <form action=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_connexionV");
        echo "\" method=\"post\">
                    <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
                </form>

            </footer>
            </html>

";
        
        $__internal_b3902c2805a00cb4fc4e012d6324d0e8285c858f57d86387b0abd8a8aa5feb9d->leave($__internal_b3902c2805a00cb4fc4e012d6324d0e8285c858f57d86387b0abd8a8aa5feb9d_prof);

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
        return array (  174 => 64,  168 => 60,  162 => 57,  157 => 54,  146 => 50,  139 => 46,  134 => 44,  129 => 42,  125 => 41,  121 => 40,  118 => 39,  114 => 38,  103 => 29,  100 => 28,  98 => 27,  94 => 25,  88 => 22,  85 => 21,  83 => 20,  79 => 18,  74 => 16,  71 => 15,  69 => 14,  62 => 10,  57 => 7,  31 => 6,  27 => 5,  22 => 2,);
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
            {% for unFraisHF in fraisHF %}
                <tr>
                    <td>{{unFraisHF.libelle}} </td> 
                    <td>{{unFraisHF.date | date('d/m/Y')}}</td>
                    <td>{{unFraisHF.montant}} € </td> 
                    <td>
                        <form action=\"{{ path('supprimerHF') }}\" method=\"post\">
                            <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Supprimer\" />   
                            <input type=\"hidden\" class=\"btn btn-lg btn-inverse\" name=\"idFraisHF\" value=\"{{unFraisHF.id}}\" />
                        </form>
                    </td>

                    {% set totalHF =  unFraisHF.montant + totalHF %}   


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
