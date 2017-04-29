<?php

/* FraisBundle:Visiteur:ficheFrais.html.twig */
class __TwigTemplate_4ea4e7695bc26ce9fa91ad73febb735f60ce57f20a0c3b5187e718b14d92dbb9 extends Twig_Template
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
        $__internal_21d165423c4287d5ab3ed9faf6c271750c5701a44d98e0ec9be70fd56311e8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d165423c4287d5ab3ed9faf6c271750c5701a44d98e0ec9be70fd56311e8d4->enter($__internal_21d165423c4287d5ab3ed9faf6c271750c5701a44d98e0ec9be70fd56311e8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Visiteur:ficheFrais.html.twig"));

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
        // line 6
        echo " 
    </head>
    ";
        // line 8
        echo twig_include($this->env, $context, "FraisBundle:Template:VisiteurConnectedMenu.html.twig");
        echo "

    <body>
        <div class=\"container\">          
            <h3>
                Informations de la fiche de frais en cours
            </h3>
                    ";
        // line 15
        if (array_key_exists("ficheFrais", $context)) {
            // line 16
            echo "                        <table  class=\"table-bordered\" >
                          <tr>
                                <th>Identifiant </th>
                                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "id", array()), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>     
                                <th>Date </th>
                                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <tr>
                                <th>Etat </th>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "idEtat", array()), "id", array()), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <th>Date de modif </th>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "datemodif", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            </tr>

                        </table>
                    ";
        }
        // line 36
        echo "       
                    <br>
                    
                     
                    <h3>
                        Frais Forfaitisés
                    </h3>
                      ";
        // line 43
        $context["total"] = 0;
        // line 44
        echo "                      
                            ";
        // line 45
        if (array_key_exists("fraisF", $context)) {
            // line 46
            echo "                                <table  class=\"table-bordered\" >

                                    <thead>
                                    <th> Libellé</th>
                                    <th> Montant</th>
                                    <th> Quantité </th>
                                    <th> Total </th>

                                    </thead>
                                  
                                    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fraisF"]) ? $context["fraisF"] : $this->getContext($context, "fraisF")));
            foreach ($context['_seq'] as $context["_key"] => $context["unFraisF"]) {
                // line 57
                echo "                                        <tr>
                                            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unFraisF"], "idFraisforfait", array()), "libelle", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unFraisF"], "idFraisforfait", array()), "montant", array()), "html", null, true);
                echo " €</td>
                                            
                                            <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFraisF"], "quantite", array()), "html", null, true);
                echo "</td>
                                            <td> ";
                // line 62
                echo twig_escape_filter($this->env, ($this->getAttribute($context["unFraisF"], "quantite", array()) * $this->getAttribute($this->getAttribute($context["unFraisF"], "idFraisforfait", array()), "montant", array())), "html", null, true);
                echo " € </td>
                                            ";
                // line 63
                $context["total"] = (($this->getAttribute($context["unFraisF"], "quantite", array()) * $this->getAttribute($this->getAttribute($context["unFraisF"], "idFraisforfait", array()), "montant", array())) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                echo "       
                                        </tr>          
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFraisF'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "     
                                </table>
                            ";
        }
        // line 68
        echo "
                            <h5>  Vos frais forfaitisés s'élèvent à :  ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " € <h5>

                                    ";
        // line 71
        if (array_key_exists("fraisHF", $context)) {
            // line 72
            echo "                                        ";
            $context["totalHF"] = 0;
            // line 73
            echo "                                        <h3>Frais Hors Forfait</h3>                   
                                        <table  class=\"table-bordered\" >
                                            <thead class=\"thead-inverse\">
                                            <th> Libellé</th>
                                            <th> Date  </th>        
                                            <th> Montant </th>                                     


                                            </thead>
                                            ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fraisHF"]) ? $context["fraisHF"] : $this->getContext($context, "fraisHF")));
            foreach ($context['_seq'] as $context["_key"] => $context["unFraisHF"]) {
                // line 83
                echo "                                                <tr>
                                                    <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFraisHF"], "libelle", array()), "html", null, true);
                echo " </td> 
                                                    <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFraisHF"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFraisHF"], "montant", array()), "html", null, true);
                echo " € </td>                          

                                                    ";
                // line 88
                $context["totalHF"] = ($this->getAttribute($context["unFraisHF"], "montant", array()) + (isset($context["totalHF"]) ? $context["totalHF"] : $this->getContext($context, "totalHF")));
                echo "   


                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFraisHF'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo " 
                                        </table>
                                        <h5>  Vos frais hors forfait s'élèvent à :  ";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["totalHF"]) ? $context["totalHF"] : $this->getContext($context, "totalHF")), "html", null, true);
            echo " € <h5>

                                            ";
        }
        // line 97
        echo "                                                                                       
                                             </div>

                                            <form action=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_connexionV");
        echo "\" method=\"post\">
                                                <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
                                            </form>

                                            </body>

                                            </html>
";
        
        $__internal_21d165423c4287d5ab3ed9faf6c271750c5701a44d98e0ec9be70fd56311e8d4->leave($__internal_21d165423c4287d5ab3ed9faf6c271750c5701a44d98e0ec9be70fd56311e8d4_prof);

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
        return array (  243 => 100,  238 => 97,  232 => 94,  228 => 92,  217 => 88,  212 => 86,  208 => 85,  204 => 84,  201 => 83,  197 => 82,  186 => 73,  183 => 72,  181 => 71,  176 => 69,  173 => 68,  168 => 65,  159 => 63,  155 => 62,  151 => 61,  146 => 59,  142 => 58,  139 => 57,  135 => 56,  123 => 46,  121 => 45,  118 => 44,  116 => 43,  107 => 36,  99 => 32,  91 => 27,  85 => 24,  77 => 19,  72 => 16,  70 => 15,  60 => 8,  56 => 6,  30 => 5,  26 => 4,  22 => 2,);
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

    <body>
        <div class=\"container\">          
            <h3>
                Informations de la fiche de frais en cours
            </h3>
                    {% if ficheFrais is defined%}
                        <table  class=\"table-bordered\" >
                          <tr>
                                <th>Identifiant </th>
                                <td>{{ ficheFrais.id }}</td>
                            </tr>

                            <tr>     
                                <th>Date </th>
                                <td>{{ ficheFrais.date| date('d/m/Y') }}</td>
                            <tr>
                                <th>Etat </th>
                                <td>{{ ficheFrais.idEtat.id }}</td>
                            </tr>

                            <tr>
                                <th>Date de modif </th>
                                <td>{{ ficheFrais.datemodif | date('d/m/Y')}}</td>
                            </tr>

                        </table>
                    {%endif%}       
                    <br>
                    
                     
                    <h3>
                        Frais Forfaitisés
                    </h3>
                      {% set total = 0 %}
                      
                            {% if fraisF is defined%}
                                <table  class=\"table-bordered\" >

                                    <thead>
                                    <th> Libellé</th>
                                    <th> Montant</th>
                                    <th> Quantité </th>
                                    <th> Total </th>

                                    </thead>
                                  
                                    {% for unFraisF in fraisF %}
                                        <tr>
                                            <td>{{unFraisF.idFraisforfait.libelle}}</td>
                                            <td>{{unFraisF.idFraisforfait.montant}} €</td>
                                            
                                            <td>{{unFraisF.quantite}}</td>
                                            <td> {{ unFraisF.quantite * unFraisF.idFraisforfait.montant }} € </td>
                                            {% set total = unFraisF.quantite * unFraisF.idFraisforfait.montant + total %}       
                                        </tr>          
                                    {%endfor%}     
                                </table>
                            {%endif%}

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
                                            {% for unFraisHF in fraisHF %}
                                                <tr>
                                                    <td>{{unFraisHF.libelle}} </td> 
                                                    <td>{{unFraisHF.date | date('d/m/Y')}}</td>
                                                    <td>{{unFraisHF.montant}} € </td>                          

                                                    {% set totalHF =  unFraisHF.montant + totalHF %}   


                                                </tr>
                                            {%endfor%} 
                                        </table>
                                        <h5>  Vos frais hors forfait s'élèvent à :  {{totalHF}} € <h5>

                                            {%endif%}
                                                                                       
                                             </div>

                                            <form action=\"{{ path('frais_connexionV') }}\" method=\"post\">
                                                <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
                                            </form>

                                            </body>

                                            </html>
";
    }
}
