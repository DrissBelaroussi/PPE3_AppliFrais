<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2d3e73f4154451fc148df1f8ecedc1a7256f66ecc3aed33e7e7d1b54019c7d61 extends Twig_Template
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
        $__internal_33a9510f454b71062079083b23374e370f86ac5fdcbebb03b8ff6b987115e3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a9510f454b71062079083b23374e370f86ac5fdcbebb03b8ff6b987115e3f3->enter($__internal_33a9510f454b71062079083b23374e370f86ac5fdcbebb03b8ff6b987115e3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_33a9510f454b71062079083b23374e370f86ac5fdcbebb03b8ff6b987115e3f3->leave($__internal_33a9510f454b71062079083b23374e370f86ac5fdcbebb03b8ff6b987115e3f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
