<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_940634ceebf861194c3d1800554c7b5f404922982a26e0ddbfb387f6a976984f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95101b83c9391d6a240d8b8f7d90983b0b025909c0d90e1c93112ab0afc453e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95101b83c9391d6a240d8b8f7d90983b0b025909c0d90e1c93112ab0afc453e3->enter($__internal_95101b83c9391d6a240d8b8f7d90983b0b025909c0d90e1c93112ab0afc453e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_95101b83c9391d6a240d8b8f7d90983b0b025909c0d90e1c93112ab0afc453e3->leave($__internal_95101b83c9391d6a240d8b8f7d90983b0b025909c0d90e1c93112ab0afc453e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bf4e4f6656d2127418cf6e28ca7aa0f267d9fe9a7037b4c78ad779db367f221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf4e4f6656d2127418cf6e28ca7aa0f267d9fe9a7037b4c78ad779db367f221->enter($__internal_5bf4e4f6656d2127418cf6e28ca7aa0f267d9fe9a7037b4c78ad779db367f221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5bf4e4f6656d2127418cf6e28ca7aa0f267d9fe9a7037b4c78ad779db367f221->leave($__internal_5bf4e4f6656d2127418cf6e28ca7aa0f267d9fe9a7037b4c78ad779db367f221_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
