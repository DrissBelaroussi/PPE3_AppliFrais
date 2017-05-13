<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_88c14375ca33d61850a2b2571145c567c1247880a29c35cbabf8dcdb70d80939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a9e538f051013750bb01c0f3e858700c5f0c510aaf03b7993d69df71a0f06a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9e538f051013750bb01c0f3e858700c5f0c510aaf03b7993d69df71a0f06a4->enter($__internal_4a9e538f051013750bb01c0f3e858700c5f0c510aaf03b7993d69df71a0f06a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a9e538f051013750bb01c0f3e858700c5f0c510aaf03b7993d69df71a0f06a4->leave($__internal_4a9e538f051013750bb01c0f3e858700c5f0c510aaf03b7993d69df71a0f06a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24efa84c691c75621f7750670216f2156834f93c632dbab6dc43cbc56b0ff7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24efa84c691c75621f7750670216f2156834f93c632dbab6dc43cbc56b0ff7a1->enter($__internal_24efa84c691c75621f7750670216f2156834f93c632dbab6dc43cbc56b0ff7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_24efa84c691c75621f7750670216f2156834f93c632dbab6dc43cbc56b0ff7a1->leave($__internal_24efa84c691c75621f7750670216f2156834f93c632dbab6dc43cbc56b0ff7a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_04da7447e1653e03b9912810f69a7b7f780af805d8a7524df4676961eee4d65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04da7447e1653e03b9912810f69a7b7f780af805d8a7524df4676961eee4d65e->enter($__internal_04da7447e1653e03b9912810f69a7b7f780af805d8a7524df4676961eee4d65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_04da7447e1653e03b9912810f69a7b7f780af805d8a7524df4676961eee4d65e->leave($__internal_04da7447e1653e03b9912810f69a7b7f780af805d8a7524df4676961eee4d65e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_68bcc03a8d9e04b7c3ec2aebb322d8e06a7f859d30f85c3933d447d8fd8d01a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68bcc03a8d9e04b7c3ec2aebb322d8e06a7f859d30f85c3933d447d8fd8d01a1->enter($__internal_68bcc03a8d9e04b7c3ec2aebb322d8e06a7f859d30f85c3933d447d8fd8d01a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_68bcc03a8d9e04b7c3ec2aebb322d8e06a7f859d30f85c3933d447d8fd8d01a1->leave($__internal_68bcc03a8d9e04b7c3ec2aebb322d8e06a7f859d30f85c3933d447d8fd8d01a1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b374c3245d1b3da7c1731be9f97cce6457d7aa449496fa02c6598d64e0dcf446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b374c3245d1b3da7c1731be9f97cce6457d7aa449496fa02c6598d64e0dcf446->enter($__internal_b374c3245d1b3da7c1731be9f97cce6457d7aa449496fa02c6598d64e0dcf446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b374c3245d1b3da7c1731be9f97cce6457d7aa449496fa02c6598d64e0dcf446->leave($__internal_b374c3245d1b3da7c1731be9f97cce6457d7aa449496fa02c6598d64e0dcf446_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
";
    }
}
