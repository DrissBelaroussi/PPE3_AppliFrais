<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a2639d4aeb9ab7fa0d77aff9a85918b171e29c12b77ab135dde8b8ee8f9e8071 extends Twig_Template
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
        $__internal_6426b9d5f5de92472ac536146d165a5a48f2d08d39eb0b7dd14a86799aebfc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6426b9d5f5de92472ac536146d165a5a48f2d08d39eb0b7dd14a86799aebfc4d->enter($__internal_6426b9d5f5de92472ac536146d165a5a48f2d08d39eb0b7dd14a86799aebfc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6426b9d5f5de92472ac536146d165a5a48f2d08d39eb0b7dd14a86799aebfc4d->leave($__internal_6426b9d5f5de92472ac536146d165a5a48f2d08d39eb0b7dd14a86799aebfc4d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
