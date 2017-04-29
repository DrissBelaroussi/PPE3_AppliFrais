<?php

/* base.html.twig */
class __TwigTemplate_48abf3c345b96286f12eaf36920311b572e10701b17c36ec6864bf14b0060f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7618d47df7de4ed710c14f43a324f194d798156c156a42fe1d164c275783b8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7618d47df7de4ed710c14f43a324f194d798156c156a42fe1d164c275783b8f8->enter($__internal_7618d47df7de4ed710c14f43a324f194d798156c156a42fe1d164c275783b8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7618d47df7de4ed710c14f43a324f194d798156c156a42fe1d164c275783b8f8->leave($__internal_7618d47df7de4ed710c14f43a324f194d798156c156a42fe1d164c275783b8f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2811dbeddbf2e3669fb9e131d5ff92f6e05b2aaefe96cd67993a5c7ecfcf9d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2811dbeddbf2e3669fb9e131d5ff92f6e05b2aaefe96cd67993a5c7ecfcf9d35->enter($__internal_2811dbeddbf2e3669fb9e131d5ff92f6e05b2aaefe96cd67993a5c7ecfcf9d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2811dbeddbf2e3669fb9e131d5ff92f6e05b2aaefe96cd67993a5c7ecfcf9d35->leave($__internal_2811dbeddbf2e3669fb9e131d5ff92f6e05b2aaefe96cd67993a5c7ecfcf9d35_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a6e29271c55fc65e79c852120f6e8704fd74bf24bd003716495460f42525b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6e29271c55fc65e79c852120f6e8704fd74bf24bd003716495460f42525b98->enter($__internal_6a6e29271c55fc65e79c852120f6e8704fd74bf24bd003716495460f42525b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6a6e29271c55fc65e79c852120f6e8704fd74bf24bd003716495460f42525b98->leave($__internal_6a6e29271c55fc65e79c852120f6e8704fd74bf24bd003716495460f42525b98_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a600a5ab5858cdc96c4de344019302beb6bc6e534c1f609538c4160b21d39592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a600a5ab5858cdc96c4de344019302beb6bc6e534c1f609538c4160b21d39592->enter($__internal_a600a5ab5858cdc96c4de344019302beb6bc6e534c1f609538c4160b21d39592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a600a5ab5858cdc96c4de344019302beb6bc6e534c1f609538c4160b21d39592->leave($__internal_a600a5ab5858cdc96c4de344019302beb6bc6e534c1f609538c4160b21d39592_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52ef95a655309b14b09061eabfb9247e5776c44a24228a64d1292fbdf4bf8243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ef95a655309b14b09061eabfb9247e5776c44a24228a64d1292fbdf4bf8243->enter($__internal_52ef95a655309b14b09061eabfb9247e5776c44a24228a64d1292fbdf4bf8243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_52ef95a655309b14b09061eabfb9247e5776c44a24228a64d1292fbdf4bf8243->leave($__internal_52ef95a655309b14b09061eabfb9247e5776c44a24228a64d1292fbdf4bf8243_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
