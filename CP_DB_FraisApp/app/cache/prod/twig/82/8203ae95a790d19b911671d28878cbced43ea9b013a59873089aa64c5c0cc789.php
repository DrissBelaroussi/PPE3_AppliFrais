<?php

/* FraisBundle:Visiteur:ModifierFiche.html.twig */
class __TwigTemplate_94e0056c89c6aab81c1c17a93303d9ca0054cffaacea6dc35375416af5af4b47 extends Twig_Template
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
    
    ";
        // line 10
        echo twig_include($this->env, $context, "FraisBundle:Template:VisiteurConnectedMenu.html.twig");
        echo "
    <div class=\"container\">
         ";
        // line 17
        echo "             
         <table class=\"table table-striped\">
             
        ";
        // line 20
        if (array_key_exists("ficheFrais", $context)) {
            // line 21
            echo "            ";
            // line 22
            echo "            <tr>
                <th>Identifiant </th>
                 <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "idVisiteur", array(), "array"), "html", null, true);
            echo "</td>
            </tr>
                
            <tr>     
                 <th>Mois </th>
                 <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "mois", array(), "array"), "html", null, true);
            echo "</td>
            <tr>
                <th>Etat </th>
                 <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "idEtat", array(), "array"), "html", null, true);
            echo "</td>
            </tr>
            
            <tr>
                <th>Date du motif </th>
                 <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "dateModif", array(), "array"), "d/m/Y"), "html", null, true);
            echo "</td>
                 
            </tr>
            
            <tr>
                 ";
            // line 42
            if (array_key_exists("fraisHF", $context)) {
                // line 43
                echo "                 <th> Frais hors forfait</th>
                 

                    <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), "libelle", array(), "array"), "html", null, true);
                echo "</td>
            </tr>
           
            <tr>
                <th> Montant hors forfait </th>
                 <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), "montant", array(), "array"), "html", null, true);
                echo " € </td>
            </tr>
            
            <tr>
                 <th> date hors forfait </th>
                  <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fraisHF"]) ? $context["fraisHF"] : null), "date", array(), "array"), "d/m/Y"), "html", null, true);
                echo "</td>
                ";
            }
            // line 58
            echo "            </tr>
            
            <tr>
                 <th> Quantités</th>
                 <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "quantite", array(), "array"), "html", null, true);
            echo "</td>
            </tr>
            
            <tr>
                
  
                
                 <th> Frais forfait</th>
                 <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "libelle", array(), "array"), "html", null, true);
            echo "</td>
                

                
            </tr>
            <tr>
                
  
                
                 <th> Modifier la Fiche</th>
                 <td>
                      <form action=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierFiche");
            echo "\" method=\"post\">
                            <input type=\"submit\" class=\"btn btn-lg btn-pink\" value=\"Modifier\" />   
                            <input type=\"hidden\" name=\"idVisiteur\" class=\"btn btn-lg btn-pink\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "idVisiteur", array(), "array"), "html", null, true);
            echo "\"
                            <input type=\"hidden\" name=\"mois\" class=\"btn btn-lg btn-pink\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "mois", array(), "array"), "html", null, true);
            echo "\"
                            <input type=\"hidden\" name=\"annee\" class=\"btn btn-lg btn-pink\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : null), "annee", array(), "array"), "html", null, true);
            echo "\"/>   
                        </form>
                 </td>
                

                
            </tr>
            
            
         ";
        }
        // line 95
        echo "            
      
    </div>

</table>

</html>
";
    }

    public function getTemplateName()
    {
        return "FraisBundle:Visiteur:ModifierFiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 95,  179 => 85,  175 => 84,  171 => 83,  166 => 81,  152 => 70,  141 => 62,  135 => 58,  130 => 56,  122 => 51,  114 => 46,  109 => 43,  107 => 42,  99 => 37,  91 => 32,  85 => 29,  77 => 24,  73 => 22,  71 => 21,  69 => 20,  64 => 17,  59 => 10,  54 => 7,  28 => 6,  24 => 5,  19 => 2,);
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
             
         <table class=\"table table-striped\">
             
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
                <th>Date du motif </th>
                 <td>{{ ficheFrais[\"dateModif\"] | date('d/m/Y')}}</td>
                 
            </tr>
            
            <tr>
                 {% if fraisHF is defined%}
                 <th> Frais hors forfait</th>
                 

                    <td>{{fraisHF[\"libelle\"]}}</td>
            </tr>
           
            <tr>
                <th> Montant hors forfait </th>
                 <td>{{fraisHF[\"montant\"]}} € </td>
            </tr>
            
            <tr>
                 <th> date hors forfait </th>
                  <td>{{ fraisHF[\"date\"] | date('d/m/Y')}}</td>
                {%endif%}
            </tr>
            
            <tr>
                 <th> Quantités</th>
                 <td>{{ficheFrais[\"quantite\"]}}</td>
            </tr>
            
            <tr>
                
  
                
                 <th> Frais forfait</th>
                 <td>{{ficheFrais[\"libelle\"]}}</td>
                

                
            </tr>
            <tr>
                
  
                
                 <th> Modifier la Fiche</th>
                 <td>
                      <form action=\"{{ path('modifierFiche') }}\" method=\"post\">
                            <input type=\"submit\" class=\"btn btn-lg btn-pink\" value=\"Modifier\" />   
                            <input type=\"hidden\" name=\"idVisiteur\" class=\"btn btn-lg btn-pink\" value=\"{{ficheFrais[\"idVisiteur\"]}}\"
                            <input type=\"hidden\" name=\"mois\" class=\"btn btn-lg btn-pink\" value=\"{{ ficheFrais[\"mois\"] }}\"
                            <input type=\"hidden\" name=\"annee\" class=\"btn btn-lg btn-pink\" value=\"{{ ficheFrais[\"annee\"] }}\"/>   
                        </form>
                 </td>
                

                
            </tr>
            
            
         {%endif%}
            
      
    </div>

</table>

</html>
";
    }
}
