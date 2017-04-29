<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d811ebe2b9f88ee2c9fdae4a33865b8ae8164c718fd530a7d975b16be8ab3257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4e820650525aa22caca548917c2e7071974f372d52652f189a4da3681dc7f979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e820650525aa22caca548917c2e7071974f372d52652f189a4da3681dc7f979->enter($__internal_4e820650525aa22caca548917c2e7071974f372d52652f189a4da3681dc7f979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e820650525aa22caca548917c2e7071974f372d52652f189a4da3681dc7f979->leave($__internal_4e820650525aa22caca548917c2e7071974f372d52652f189a4da3681dc7f979_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c203b20d7cbf3fdbc814d26d16dbbb4e8b4a7137df697cd8a523fef88e5fa57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c203b20d7cbf3fdbc814d26d16dbbb4e8b4a7137df697cd8a523fef88e5fa57->enter($__internal_7c203b20d7cbf3fdbc814d26d16dbbb4e8b4a7137df697cd8a523fef88e5fa57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7c203b20d7cbf3fdbc814d26d16dbbb4e8b4a7137df697cd8a523fef88e5fa57->leave($__internal_7c203b20d7cbf3fdbc814d26d16dbbb4e8b4a7137df697cd8a523fef88e5fa57_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_72bdbdd70dea607b5497d9559e27822008886fa1dd3610052009467866ba763e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72bdbdd70dea607b5497d9559e27822008886fa1dd3610052009467866ba763e->enter($__internal_72bdbdd70dea607b5497d9559e27822008886fa1dd3610052009467866ba763e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_72bdbdd70dea607b5497d9559e27822008886fa1dd3610052009467866ba763e->leave($__internal_72bdbdd70dea607b5497d9559e27822008886fa1dd3610052009467866ba763e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
