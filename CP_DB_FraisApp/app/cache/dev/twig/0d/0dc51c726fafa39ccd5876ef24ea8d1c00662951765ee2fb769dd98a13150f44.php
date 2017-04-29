<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_980393e4322ce38190bc6346d0dcb1e7b18d6865ff0d4cafecc2950205a1c024 extends Twig_Template
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
        $__internal_26293413fe7caacdc6cff0c96c6852b0fc8ac878cf92a83b6a53d00c04bb375e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26293413fe7caacdc6cff0c96c6852b0fc8ac878cf92a83b6a53d00c04bb375e->enter($__internal_26293413fe7caacdc6cff0c96c6852b0fc8ac878cf92a83b6a53d00c04bb375e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_26293413fe7caacdc6cff0c96c6852b0fc8ac878cf92a83b6a53d00c04bb375e->leave($__internal_26293413fe7caacdc6cff0c96c6852b0fc8ac878cf92a83b6a53d00c04bb375e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include 'TwigBundle:Exception:error.xml.twig' %}
";
    }
}
