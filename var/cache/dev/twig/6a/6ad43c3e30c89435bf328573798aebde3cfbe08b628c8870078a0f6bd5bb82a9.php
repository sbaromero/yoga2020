<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4dd67c6677aa19238678643d90ae18ec427dd56b48ec56549069b6edeebaa283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ffa752e27639e375c81db0f8eb8003a498183f45bea54c32c4216d9acd8a3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffa752e27639e375c81db0f8eb8003a498183f45bea54c32c4216d9acd8a3ec->enter($__internal_2ffa752e27639e375c81db0f8eb8003a498183f45bea54c32c4216d9acd8a3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ffa752e27639e375c81db0f8eb8003a498183f45bea54c32c4216d9acd8a3ec->leave($__internal_2ffa752e27639e375c81db0f8eb8003a498183f45bea54c32c4216d9acd8a3ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ec6d69f39cbb83ce1f2be7d171db4c81fe913cd4d4fe1d4a6c8af3e32906176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec6d69f39cbb83ce1f2be7d171db4c81fe913cd4d4fe1d4a6c8af3e32906176->enter($__internal_1ec6d69f39cbb83ce1f2be7d171db4c81fe913cd4d4fe1d4a6c8af3e32906176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1ec6d69f39cbb83ce1f2be7d171db4c81fe913cd4d4fe1d4a6c8af3e32906176->leave($__internal_1ec6d69f39cbb83ce1f2be7d171db4c81fe913cd4d4fe1d4a6c8af3e32906176_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_acb8d50e4e3db8d76fcb571faac63aa5324280c1864729aeecd039ad85c0b2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb8d50e4e3db8d76fcb571faac63aa5324280c1864729aeecd039ad85c0b2e0->enter($__internal_acb8d50e4e3db8d76fcb571faac63aa5324280c1864729aeecd039ad85c0b2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_acb8d50e4e3db8d76fcb571faac63aa5324280c1864729aeecd039ad85c0b2e0->leave($__internal_acb8d50e4e3db8d76fcb571faac63aa5324280c1864729aeecd039ad85c0b2e0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d7b7581717b4a63ab1ef23a2676a0d473646d301cdefd1fbdd5a4f7d750c73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7b7581717b4a63ab1ef23a2676a0d473646d301cdefd1fbdd5a4f7d750c73c->enter($__internal_4d7b7581717b4a63ab1ef23a2676a0d473646d301cdefd1fbdd5a4f7d750c73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4d7b7581717b4a63ab1ef23a2676a0d473646d301cdefd1fbdd5a4f7d750c73c->leave($__internal_4d7b7581717b4a63ab1ef23a2676a0d473646d301cdefd1fbdd5a4f7d750c73c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/environment/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
