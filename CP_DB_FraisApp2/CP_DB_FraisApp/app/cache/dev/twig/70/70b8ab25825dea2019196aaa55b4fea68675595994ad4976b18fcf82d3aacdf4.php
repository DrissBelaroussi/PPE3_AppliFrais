<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_febc23cb2eb98fec99d8e6e99c3ce8811c31dfc08578ccbf4a7cab055b0b4528 extends Twig_Template
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
        $__internal_3657f01676891ecfac312bcad1aa35b5f0a6f45cc6df97f0d9119d31aa0370b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3657f01676891ecfac312bcad1aa35b5f0a6f45cc6df97f0d9119d31aa0370b6->enter($__internal_3657f01676891ecfac312bcad1aa35b5f0a6f45cc6df97f0d9119d31aa0370b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_3657f01676891ecfac312bcad1aa35b5f0a6f45cc6df97f0d9119d31aa0370b6->leave($__internal_3657f01676891ecfac312bcad1aa35b5f0a6f45cc6df97f0d9119d31aa0370b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
";
    }
}
