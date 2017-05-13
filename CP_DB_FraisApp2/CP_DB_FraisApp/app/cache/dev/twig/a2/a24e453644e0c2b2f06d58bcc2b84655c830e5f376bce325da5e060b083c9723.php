<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7706ba9e02356a4a7b854344e9f5e6dbefa0a6cec4e05c5b8350453d2d5770d0 extends Twig_Template
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
        $__internal_3175649c41e92f610cfe61b072b45d52976c4d09ecae51de771200927ee33bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3175649c41e92f610cfe61b072b45d52976c4d09ecae51de771200927ee33bb3->enter($__internal_3175649c41e92f610cfe61b072b45d52976c4d09ecae51de771200927ee33bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_3175649c41e92f610cfe61b072b45d52976c4d09ecae51de771200927ee33bb3->leave($__internal_3175649c41e92f610cfe61b072b45d52976c4d09ecae51de771200927ee33bb3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
