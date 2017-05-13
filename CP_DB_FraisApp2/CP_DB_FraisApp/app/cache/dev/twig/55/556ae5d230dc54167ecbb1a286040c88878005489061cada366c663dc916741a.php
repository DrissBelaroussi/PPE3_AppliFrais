<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_a4b462f41b70752dde365fde86f0cfb56645ee1ed92fabddcb463ac81f7e38ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_455c9f297c9da3ba1b4efb877e80de74da24cd6a104037b88176719685652e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455c9f297c9da3ba1b4efb877e80de74da24cd6a104037b88176719685652e81->enter($__internal_455c9f297c9da3ba1b4efb877e80de74da24cd6a104037b88176719685652e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_455c9f297c9da3ba1b4efb877e80de74da24cd6a104037b88176719685652e81->leave($__internal_455c9f297c9da3ba1b4efb877e80de74da24cd6a104037b88176719685652e81_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a0f3e1de820ecd9339d6f719851e3634a160d52f3793ead1c6bed02066e5d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0f3e1de820ecd9339d6f719851e3634a160d52f3793ead1c6bed02066e5d89->enter($__internal_2a0f3e1de820ecd9339d6f719851e3634a160d52f3793ead1c6bed02066e5d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Configure database";
        
        $__internal_2a0f3e1de820ecd9339d6f719851e3634a160d52f3793ead1c6bed02066e5d89->leave($__internal_2a0f3e1de820ecd9339d6f719851e3634a160d52f3793ead1c6bed02066e5d89_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_84d9dbfb0e4af693f318737e5f8fbc7bbc655e42d9ddc7a4ac6a4ea843e7c4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d9dbfb0e4af693f318737e5f8fbc7bbc655e42d9ddc7a4ac6a4ea843e7c4b9->enter($__internal_84d9dbfb0e4af693f318737e5f8fbc7bbc655e42d9ddc7a4ac6a4ea843e7c4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 9)->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver", array()), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
        
        $__internal_84d9dbfb0e4af693f318737e5f8fbc7bbc655e42d9ddc7a4ac6a4ea843e7c4b9->leave($__internal_84d9dbfb0e4af693f318737e5f8fbc7bbc655e42d9ddc7a4ac6a4ea843e7c4b9_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  97 => 25,  93 => 24,  87 => 21,  83 => 20,  79 => 19,  74 => 17,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"SensioDistributionBundle::Configurator/layout.html.twig\" %}

{% block title %}Symfony - Configure database{% endblock %}

{% block content %}
    {% form_theme form \"SensioDistributionBundle::Configurator/form.html.twig\" %}

    <div class=\"step\">
        {% include \"SensioDistributionBundle::Configurator/steps.html.twig\" with { \"index\": index, \"count\": count } %}

        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            {{ form_errors(form) }}
        </div>
        <form action=\"{{ path('_configurator_step', { 'index': index }) }}\" method=\"POST\">
            <div class=\"symfony-form-column\">
                {{ form_row(form.driver) }}
                {{ form_row(form.host) }}
                {{ form_row(form.name) }}
            </div>
            <div class=\"symfony-form-column\">
                {{ form_row(form.user) }}
                {{ form_row(form.password) }}
            </div>

            {{ form_rest(form) }}

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
{% endblock %}
";
    }
}
