<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_77d4113959c668b426a9f75f0911cac593ecbf8245756d967d5305d373e5a033 extends Twig_Template
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
        $__internal_6ab2e3ed979dd3320ef027d02fb02b0fa9161b043b6ced4bcefeda615485cb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab2e3ed979dd3320ef027d02fb02b0fa9161b043b6ced4bcefeda615485cb09->enter($__internal_6ab2e3ed979dd3320ef027d02fb02b0fa9161b043b6ced4bcefeda615485cb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6ab2e3ed979dd3320ef027d02fb02b0fa9161b043b6ced4bcefeda615485cb09->leave($__internal_6ab2e3ed979dd3320ef027d02fb02b0fa9161b043b6ced4bcefeda615485cb09_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return "{% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}
";
    }
}
