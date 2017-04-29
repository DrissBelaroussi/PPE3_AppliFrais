<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_678f54126de4c78e4d6702d2c47c3d69beddb2e894930305fd140b9a080421d8 extends Twig_Template
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
        $__internal_18a8a49c1560097d8bf0126ed7d3a954eee1d241e15ec58d12bee0f61ccaad08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a8a49c1560097d8bf0126ed7d3a954eee1d241e15ec58d12bee0f61ccaad08->enter($__internal_18a8a49c1560097d8bf0126ed7d3a954eee1d241e15ec58d12bee0f61ccaad08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_18a8a49c1560097d8bf0126ed7d3a954eee1d241e15ec58d12bee0f61ccaad08->leave($__internal_18a8a49c1560097d8bf0126ed7d3a954eee1d241e15ec58d12bee0f61ccaad08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}
";
    }
}
