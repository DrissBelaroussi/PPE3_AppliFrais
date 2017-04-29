<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f0e1bbf0679abb073fc2cc0711f76c37be61e0c6914083f6f3a33d9bdb39ad21 extends Twig_Template
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
        $__internal_984dc73d3fe55a0f0ff61b24db2f882cfa0f815bf076a0da91ac160958d389d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984dc73d3fe55a0f0ff61b24db2f882cfa0f815bf076a0da91ac160958d389d4->enter($__internal_984dc73d3fe55a0f0ff61b24db2f882cfa0f815bf076a0da91ac160958d389d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_984dc73d3fe55a0f0ff61b24db2f882cfa0f815bf076a0da91ac160958d389d4->leave($__internal_984dc73d3fe55a0f0ff61b24db2f882cfa0f815bf076a0da91ac160958d389d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
