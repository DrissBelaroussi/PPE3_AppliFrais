<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_73ab2bdfba4d40aa59362a23727238c9948ce3406819627be0ad09cb565ec86e extends Twig_Template
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
        $__internal_078bcd511e2d91f4113473b3d3fae33cfcc4cb9e36ac5d17182f641ce5beab42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078bcd511e2d91f4113473b3d3fae33cfcc4cb9e36ac5d17182f641ce5beab42->enter($__internal_078bcd511e2d91f4113473b3d3fae33cfcc4cb9e36ac5d17182f641ce5beab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_078bcd511e2d91f4113473b3d3fae33cfcc4cb9e36ac5d17182f641ce5beab42->leave($__internal_078bcd511e2d91f4113473b3d3fae33cfcc4cb9e36ac5d17182f641ce5beab42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
