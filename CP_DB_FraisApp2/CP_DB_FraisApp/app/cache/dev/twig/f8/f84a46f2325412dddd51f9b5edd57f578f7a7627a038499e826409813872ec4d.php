<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cde4c332c891fcb400e0fb997c31029f3b8f2f701938b2427920038cae8579e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_740debaacec93f3c1b77141d59767ab2f895eaf52227363978bc4dbad915613f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740debaacec93f3c1b77141d59767ab2f895eaf52227363978bc4dbad915613f->enter($__internal_740debaacec93f3c1b77141d59767ab2f895eaf52227363978bc4dbad915613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_740debaacec93f3c1b77141d59767ab2f895eaf52227363978bc4dbad915613f->leave($__internal_740debaacec93f3c1b77141d59767ab2f895eaf52227363978bc4dbad915613f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_171be2ad87d09914d8d3ee3ed50cb441ce6ca473d35329a11de5c89045485109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171be2ad87d09914d8d3ee3ed50cb441ce6ca473d35329a11de5c89045485109->enter($__internal_171be2ad87d09914d8d3ee3ed50cb441ce6ca473d35329a11de5c89045485109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_171be2ad87d09914d8d3ee3ed50cb441ce6ca473d35329a11de5c89045485109->leave($__internal_171be2ad87d09914d8d3ee3ed50cb441ce6ca473d35329a11de5c89045485109_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c98b7aeed64338f3d2a49a3bf6ac8280b1561e5217a26de010a6d7cf20e40df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98b7aeed64338f3d2a49a3bf6ac8280b1561e5217a26de010a6d7cf20e40df3->enter($__internal_c98b7aeed64338f3d2a49a3bf6ac8280b1561e5217a26de010a6d7cf20e40df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c98b7aeed64338f3d2a49a3bf6ac8280b1561e5217a26de010a6d7cf20e40df3->leave($__internal_c98b7aeed64338f3d2a49a3bf6ac8280b1561e5217a26de010a6d7cf20e40df3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1343ff88271006aca5ced0e8fce9275f901a7534c0bffec41862e335ab8cd38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1343ff88271006aca5ced0e8fce9275f901a7534c0bffec41862e335ab8cd38->enter($__internal_e1343ff88271006aca5ced0e8fce9275f901a7534c0bffec41862e335ab8cd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e1343ff88271006aca5ced0e8fce9275f901a7534c0bffec41862e335ab8cd38->leave($__internal_e1343ff88271006aca5ced0e8fce9275f901a7534c0bffec41862e335ab8cd38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
";
    }
}
