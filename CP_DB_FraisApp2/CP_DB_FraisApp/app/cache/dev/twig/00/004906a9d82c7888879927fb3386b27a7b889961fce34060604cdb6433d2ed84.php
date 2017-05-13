<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8faa8eb488dfc349198cf6b2f042f6291eb37084283de106e68d3f9fd1d4dea0 extends Twig_Template
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
        $__internal_e1863075c45eb97be6cee26f0e63fbd544e208b9d60a0ee134e697e270bf1747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1863075c45eb97be6cee26f0e63fbd544e208b9d60a0ee134e697e270bf1747->enter($__internal_e1863075c45eb97be6cee26f0e63fbd544e208b9d60a0ee134e697e270bf1747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e1863075c45eb97be6cee26f0e63fbd544e208b9d60a0ee134e697e270bf1747->leave($__internal_e1863075c45eb97be6cee26f0e63fbd544e208b9d60a0ee134e697e270bf1747_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
