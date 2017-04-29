<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_881877b638f0b5ee60c2b0e87167ef66efe30d1e8fccf377ef1ae8d0926db635 extends Twig_Template
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
        $__internal_dd6fcca766908f18db2a8da9ff09a921102d08c565bb8c8b52fe596e20d24d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6fcca766908f18db2a8da9ff09a921102d08c565bb8c8b52fe596e20d24d19->enter($__internal_dd6fcca766908f18db2a8da9ff09a921102d08c565bb8c8b52fe596e20d24d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_dd6fcca766908f18db2a8da9ff09a921102d08c565bb8c8b52fe596e20d24d19->leave($__internal_dd6fcca766908f18db2a8da9ff09a921102d08c565bb8c8b52fe596e20d24d19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
