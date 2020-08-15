<?php

/* CYAYogaBundle:Alumnocc:messages/success.html.twig */
class __TwigTemplate_6124efbe20a5f101ec5b61956f2b2d7787bfd57b561532cdf248f63f943565f5 extends Twig_Template
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
        $__internal_372ee5d70fd9ac2ae811fb83a7493a4ec1d133af968dc9bf992f26a4fb813613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372ee5d70fd9ac2ae811fb83a7493a4ec1d133af968dc9bf992f26a4fb813613->enter($__internal_372ee5d70fd9ac2ae811fb83a7493a4ec1d133af968dc9bf992f26a4fb813613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Alumnocc:messages/success.html.twig"));

        // line 1
        echo "    ";
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "        <div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\">
            <div class=\"container\"> 
                <span id=\"user-message\"></span>
            </div>
        </div>
    ";
        }
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            <div class=\"container\"> ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_372ee5d70fd9ac2ae811fb83a7493a4ec1d133af968dc9bf992f26a4fb813613->leave($__internal_372ee5d70fd9ac2ae811fb83a7493a4ec1d133af968dc9bf992f26a4fb813613_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Alumnocc:messages/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  38 => 9,  33 => 8,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% if flashMessage is not defined %}
        <div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\">
            <div class=\"container\"> 
                <span id=\"user-message\"></span>
            </div>
        </div>
    {% endif %}
    {% for flashMessage in app.session.flashbag.get('mensaje') %}
        <div class=\"alert alert-success\" role=\"alert\">
            <div class=\"container\"> {{ flashMessage }} </div>
        </div>
    {% endfor %}", "CYAYogaBundle:Alumnocc:messages/success.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Alumnocc/messages/success.html.twig");
    }
}
