<?php

/* CYAYogaBundle:Usuario:messages/danger.html.twig */
class __TwigTemplate_279e666f0b84a98697e8ec9db581e6aff9c969ae9c8141a2e6fc1ba23bec1544 extends Twig_Template
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
        $__internal_e73935246c5cd5e55a486c835cfe4b18c29e9554aebf6833157f7eca25cc9810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73935246c5cd5e55a486c835cfe4b18c29e9554aebf6833157f7eca25cc9810->enter($__internal_e73935246c5cd5e55a486c835cfe4b18c29e9554aebf6833157f7eca25cc9810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Usuario:messages/danger.html.twig"));

        // line 1
        echo "    ";
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "        <div class=\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\">
            <div class=\"container\"> 
                <span id=\"user-message-danger\"></span>
            </div>
        </div>
    ";
        }
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
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
        
        $__internal_e73935246c5cd5e55a486c835cfe4b18c29e9554aebf6833157f7eca25cc9810->leave($__internal_e73935246c5cd5e55a486c835cfe4b18c29e9554aebf6833157f7eca25cc9810_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Usuario:messages/danger.html.twig";
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
        <div class=\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\">
            <div class=\"container\"> 
                <span id=\"user-message-danger\"></span>
            </div>
        </div>
    {% endif %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"alert alert-danger\" role=\"alert\">
            <div class=\"container\"> {{ flashMessage }} </div>
        </div>
    {% endfor %}", "CYAYogaBundle:Usuario:messages/danger.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Usuario/messages/danger.html.twig");
    }
}
