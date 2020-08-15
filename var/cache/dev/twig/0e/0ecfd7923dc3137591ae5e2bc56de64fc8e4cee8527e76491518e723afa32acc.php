<?php

/* CYAYogaBundle:Security:login.html.twig */
class __TwigTemplate_ce3828b6929277ed1d27ff48dbb56e0726c6939758abddd719e0926fff148ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff1c71b54fbaed93c0aa98166607af783706064273f3da17f258eaefa0d86cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1c71b54fbaed93c0aa98166607af783706064273f3da17f258eaefa0d86cb0->enter($__internal_ff1c71b54fbaed93c0aa98166607af783706064273f3da17f258eaefa0d86cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff1c71b54fbaed93c0aa98166607af783706064273f3da17f258eaefa0d86cb0->leave($__internal_ff1c71b54fbaed93c0aa98166607af783706064273f3da17f258eaefa0d86cb0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_79805c90c50bddbe46c76e15a1663a790be4fd0c843c7bdf4c6b0bf33f31dcf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79805c90c50bddbe46c76e15a1663a790be4fd0c843c7bdf4c6b0bf33f31dcf1->enter($__internal_79805c90c50bddbe46c76e15a1663a790be4fd0c843c7bdf4c6b0bf33f31dcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/signin.css"), "html", null, true);
        echo "\">
";
        
        $__internal_79805c90c50bddbe46c76e15a1663a790be4fd0c843c7bdf4c6b0bf33f31dcf1->leave($__internal_79805c90c50bddbe46c76e15a1663a790be4fd0c843c7bdf4c6b0bf33f31dcf1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc135cc30f26fdb207df1d5066cb8393ebc7798eb8f7d6ba5430d879b15e38ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc135cc30f26fdb207df1d5066cb8393ebc7798eb8f7d6ba5430d879b15e38ee->enter($__internal_bc135cc30f26fdb207df1d5066cb8393ebc7798eb8f7d6ba5430d879b15e38ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Security:login.html.twig"));

        // line 10
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4 col-sm-offset-4\">
                <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_yoga_login_check");
        echo "\" method=\"post\" class=\"form-signin\">
        \t\t\t<h2 class=\"form-signin-heading\">Bienvenido al Sistema del Centro de Yoga Aplicada</h2>
        
                    ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "                    <div class=\"text-danger\">
                        <p>
                            <strong>
                                ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                            </strong>
                        </p>
                    </div>
                    ";
        }
        // line 26
        echo "                    
                    <span class=\"sign-in-avatar\">
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/img/avatar.jpg"), "html", null, true);
        echo "\"/> 
                    </span>
        
        \t\t    <label for=\"username\" class=\"sr-only\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo ":</label>
        \t\t    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_nombreusuario\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Nombre de Usuario\" required autofocus />
        
        \t\t    <label for=\"password\" class=\"sr-only\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password"), "html", null, true);
        echo ":</label>
        \t\t    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Contraseña\" required />
        \t\t    
        \t\t    <input type=\"hidden\" name=\"_target_path\" value=\"cya_yoga_home\" />
        
        \t\t    <button type=\"submit\" class=\"btn btn-lg btn-sign-in\">Ingresar</button>
        \t\t</form>
            </div>
        </div>
\t\t
    </div> <!-- /container -->
";
        
        $__internal_bc135cc30f26fdb207df1d5066cb8393ebc7798eb8f7d6ba5430d879b15e38ee->leave($__internal_bc135cc30f26fdb207df1d5066cb8393ebc7798eb8f7d6ba5430d879b15e38ee_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  102 => 32,  98 => 31,  92 => 28,  88 => 26,  80 => 21,  75 => 18,  73 => 17,  67 => 14,  61 => 10,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/signin.css') }}\">
{% endblock %}

{% block body %}
{#\t{{ parent() }} #}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4 col-sm-offset-4\">
                <form action=\"{{ path('cya_yoga_login_check') }}\" method=\"post\" class=\"form-signin\">
        \t\t\t<h2 class=\"form-signin-heading\">Bienvenido al Sistema del Centro de Yoga Aplicada</h2>
        
                    {% if error %}
                    <div class=\"text-danger\">
                        <p>
                            <strong>
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </strong>
                        </p>
                    </div>
                    {% endif %}
                    
                    <span class=\"sign-in-avatar\">
                        <img src=\"{{ asset('public/img/avatar.jpg') }}\"/> 
                    </span>
        
        \t\t    <label for=\"username\" class=\"sr-only\">{{ 'Username'|trans }}:</label>
        \t\t    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_nombreusuario\" value=\"{{ last_username }}\" placeholder=\"Nombre de Usuario\" required autofocus />
        
        \t\t    <label for=\"password\" class=\"sr-only\">{{ 'Password'|trans }}:</label>
        \t\t    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Contraseña\" required />
        \t\t    
        \t\t    <input type=\"hidden\" name=\"_target_path\" value=\"cya_yoga_home\" />
        
        \t\t    <button type=\"submit\" class=\"btn btn-lg btn-sign-in\">Ingresar</button>
        \t\t</form>
            </div>
        </div>
\t\t
    </div> <!-- /container -->
{% endblock %}", "CYAYogaBundle:Security:login.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Security/login.html.twig");
    }
}
