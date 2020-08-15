<?php

/* CYAYogaBundle:Usuario:editpublic.html.twig */
class __TwigTemplate_7d62c7e0a2102baa5d6611bac977f6a265fa941bc3f646d6029c1899107e33b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Usuario:editpublic.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b4ca2dea547d3a17c5dafc67139d59dbf40f4c20eab36ca6043d8cbb5a71d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4ca2dea547d3a17c5dafc67139d59dbf40f4c20eab36ca6043d8cbb5a71d5d->enter($__internal_6b4ca2dea547d3a17c5dafc67139d59dbf40f4c20eab36ca6043d8cbb5a71d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Usuario:editpublic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b4ca2dea547d3a17c5dafc67139d59dbf40f4c20eab36ca6043d8cbb5a71d5d->leave($__internal_6b4ca2dea547d3a17c5dafc67139d59dbf40f4c20eab36ca6043d8cbb5a71d5d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27d1e2c097eb6dca0fead4b8ee39e824ce4b8c2f3d9be60fd5a2ec740fdb26cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d1e2c097eb6dca0fead4b8ee39e824ce4b8c2f3d9be60fd5a2ec740fdb26cf->enter($__internal_27d1e2c097eb6dca0fead4b8ee39e824ce4b8c2f3d9be60fd5a2ec740fdb26cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Usuario:editpublic.html.twig"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "CYAYogaBundle:Usuario:messages/success.html.twig");
        echo "
\t<div class=\"main container\">
\t\t<div class=\"row well\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2>Edite sus datos personales </h2>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("rol" => "form")));
        echo "
\t\t\t\t<h4 class=\"text-danger\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</h4>
                  \t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_editavatar", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\"class=\"btn btn-sm btn-primary\">
                 <i class=\"icon ion-eye\"></i> Cambiar Avatar
                </a>   
                  <br>
                 <br>
\t\t\t\t\t<fieldset>
\t\t\t\t\t    
\t\t\t\t\t       
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t        Dirección
\t\t\t\t\t        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Dirección")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t        Ciudad
\t\t\t\t\t        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ciudad")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Teléfono
\t\t\t\t\t        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Teléfono")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Mail
\t\t\t\t\t        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mail")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Fecha de nacimiento
\t\t\t\t\t        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechanacimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fecha de nacimiento")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechanacimiento", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Password
\t\t\t\t\t        ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    
\t\t\t\t\t    <div class=\"hidden\">
\t\t\t\t\t        Avatar
\t\t\t\t\t        ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "brochure", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "archivo")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "brochure", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t \t</fieldset>
                     
\t\t\t\t    <p>
\t\t\t\t        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Modificar Usuario", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t    </p>
                 
                   
\t\t\t\t";
        // line 66
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_27d1e2c097eb6dca0fead4b8ee39e824ce4b8c2f3d9be60fd5a2ec740fdb26cf->leave($__internal_27d1e2c097eb6dca0fead4b8ee39e824ce4b8c2f3d9be60fd5a2ec740fdb26cf_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Usuario:editpublic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 66,  156 => 62,  148 => 57,  144 => 56,  136 => 51,  132 => 50,  125 => 46,  121 => 45,  114 => 41,  110 => 40,  103 => 36,  99 => 35,  92 => 31,  88 => 30,  81 => 26,  77 => 25,  64 => 15,  60 => 14,  56 => 13,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}
    {{ parent() }}
    {{ include('CYAYogaBundle:Usuario:messages/success.html.twig') }}
\t<div class=\"main container\">
\t\t<div class=\"row well\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2>Edite sus datos personales </h2>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t{{ form_start(form, {'attr': { 'rol' : 'form'}}) }}
\t\t\t\t<h4 class=\"text-danger\">{{ form_errors(form) }}</h4>
                  \t<a href=\"{{ path('cya_usuario_editavatar', {id: usuario.id }) }}\"class=\"btn btn-sm btn-primary\">
                 <i class=\"icon ion-eye\"></i> Cambiar Avatar
                </a>   
                  <br>
                 <br>
\t\t\t\t\t<fieldset>
\t\t\t\t\t    
\t\t\t\t\t       
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t        Dirección
\t\t\t\t\t        {{ form_widget(form.direccion, {'attr': {'class': 'form-control', 'placeholder' : 'Dirección'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.direccion) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t        Ciudad
\t\t\t\t\t        {{ form_widget(form.ciudad, {'attr': {'class': 'form-control', 'placeholder' : 'Ciudad'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.ciudad) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Teléfono
\t\t\t\t\t        {{ form_widget(form.telefono, {'attr': {'class': 'form-control', 'placeholder' : 'Teléfono'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.telefono) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Mail
\t\t\t\t\t        {{ form_widget(form.mail, {'attr': {'class': 'form-control', 'placeholder' : 'Mail'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.mail) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Fecha de nacimiento
\t\t\t\t\t        {{ form_widget(form.fechanacimiento, {'attr': {'class': 'form-control', 'placeholder' : 'Fecha de nacimiento'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.fechanacimiento) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Password
\t\t\t\t\t        {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder' : 'Password'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.password) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    
\t\t\t\t\t    <div class=\"hidden\">
\t\t\t\t\t        Avatar
\t\t\t\t\t        {{ form_widget(form.brochure, {'attr': {'class': 'form-control', 'placeholder' : 'archivo'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.brochure) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t \t</fieldset>
                     
\t\t\t\t    <p>
\t\t\t\t        {{ form_widget(form.save, {'label' : 'Modificar Usuario', 'attr': {'class': 'btn btn-success'}}) }}
\t\t\t\t    </p>
                 
                   
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "CYAYogaBundle:Usuario:editpublic.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Usuario/editpublic.html.twig");
    }
}
