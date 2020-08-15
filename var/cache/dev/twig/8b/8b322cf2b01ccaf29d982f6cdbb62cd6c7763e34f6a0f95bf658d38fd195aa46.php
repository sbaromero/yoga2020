<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d0f1252ee43eb9f3f62229b7f72d387c87de27b436365a987f1abe8637683109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0be961130f17e41d6724ffab201a7c2e08db31f0607a55bdfe7a6e1abaad257b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be961130f17e41d6724ffab201a7c2e08db31f0607a55bdfe7a6e1abaad257b->enter($__internal_0be961130f17e41d6724ffab201a7c2e08db31f0607a55bdfe7a6e1abaad257b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be961130f17e41d6724ffab201a7c2e08db31f0607a55bdfe7a6e1abaad257b->leave($__internal_0be961130f17e41d6724ffab201a7c2e08db31f0607a55bdfe7a6e1abaad257b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e5ca7d31596d55b2cf8cc595bf3db1e658d40c2fd66af47ae03e0d88a27e877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5ca7d31596d55b2cf8cc595bf3db1e658d40c2fd66af47ae03e0d88a27e877->enter($__internal_2e5ca7d31596d55b2cf8cc595bf3db1e658d40c2fd66af47ae03e0d88a27e877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_2e5ca7d31596d55b2cf8cc595bf3db1e658d40c2fd66af47ae03e0d88a27e877->leave($__internal_2e5ca7d31596d55b2cf8cc595bf3db1e658d40c2fd66af47ae03e0d88a27e877_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8ffde8d5d41945c424594513b0bf3daa90d40b08a41d9722dde02091221ba05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ffde8d5d41945c424594513b0bf3daa90d40b08a41d9722dde02091221ba05->enter($__internal_e8ffde8d5d41945c424594513b0bf3daa90d40b08a41d9722dde02091221ba05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8ffde8d5d41945c424594513b0bf3daa90d40b08a41d9722dde02091221ba05->leave($__internal_e8ffde8d5d41945c424594513b0bf3daa90d40b08a41d9722dde02091221ba05_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_afa4a1873eda8c22f7e39404720397d83cd354cab71ce87a1fe04cc6daf3bdcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa4a1873eda8c22f7e39404720397d83cd354cab71ce87a1fe04cc6daf3bdcb->enter($__internal_afa4a1873eda8c22f7e39404720397d83cd354cab71ce87a1fe04cc6daf3bdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_afa4a1873eda8c22f7e39404720397d83cd354cab71ce87a1fe04cc6daf3bdcb->leave($__internal_afa4a1873eda8c22f7e39404720397d83cd354cab71ce87a1fe04cc6daf3bdcb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/environment/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
