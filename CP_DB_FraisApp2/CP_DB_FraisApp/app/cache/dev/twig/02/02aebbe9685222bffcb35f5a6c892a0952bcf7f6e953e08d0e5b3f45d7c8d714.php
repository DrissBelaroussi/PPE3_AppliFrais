<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2bd0a008a51e54b49b52d3e52bbf6c3cf7fdccfd2c937bdc8a548213fb8151d1 extends Twig_Template
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
        $__internal_5c5a1dabbd1dee0131a850fa57e8430cca19cd28cc868b1c57bd9faf821bff2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5a1dabbd1dee0131a850fa57e8430cca19cd28cc868b1c57bd9faf821bff2a->enter($__internal_5c5a1dabbd1dee0131a850fa57e8430cca19cd28cc868b1c57bd9faf821bff2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5c5a1dabbd1dee0131a850fa57e8430cca19cd28cc868b1c57bd9faf821bff2a->leave($__internal_5c5a1dabbd1dee0131a850fa57e8430cca19cd28cc868b1c57bd9faf821bff2a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
