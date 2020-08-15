<?php

/* CYAYogaBundle:Usuario:edit.html.twig */
class __TwigTemplate_f3124f684c32da92fd5ec54dc48e4c87d62bcf09fda360a975458bcee5783566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Usuario:edit.html.twig", 1);
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
        $__internal_c3dce92c12cd083632291734ee83a60e67921f2e7296c8d8c452e9e1dd9115c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3dce92c12cd083632291734ee83a60e67921f2e7296c8d8c452e9e1dd9115c6->enter($__internal_c3dce92c12cd083632291734ee83a60e67921f2e7296c8d8c452e9e1dd9115c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Usuario:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3dce92c12cd083632291734ee83a60e67921f2e7296c8d8c452e9e1dd9115c6->leave($__internal_c3dce92c12cd083632291734ee83a60e67921f2e7296c8d8c452e9e1dd9115c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebe1e15b9e0fae7dc2c9cb0fdbadab41e98ee406e55c649fede57c21dc8b0c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe1e15b9e0fae7dc2c9cb0fdbadab41e98ee406e55c649fede57c21dc8b0c10->enter($__internal_ebe1e15b9e0fae7dc2c9cb0fdbadab41e98ee406e55c649fede57c21dc8b0c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Usuario:edit.html.twig"));

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
\t\t\t<div class=\"col-md-20\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2>Editar Usuario </h2>
\t\t\t\t\t   ";
        // line 11
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "brochure", array()) != null)) {
            // line 12
            echo "\t\t\t\t\t <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("web/uploads/brochures" . "/") . $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "brochure", array()))), "html", null, true);
            echo "\" class=\"avatar-tabla\" /> 
\t\t\t\t\t ";
        }
        // line 14
        echo "                   <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellido", array()), "html", null, true);
        echo " </h2> 
\t
\t\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_editavatar", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\"class=\"btn btn-sm btn-primary\">
                 <i class=\"icon ion-eye\"></i> Cambiar Avatar
                 </a>
\t\t\t\t</div>
\t\t\t
\t\t\t\t";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("rol" => "form")));
        echo "
\t\t\t\t<h4 class=\"text-danger\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</h4>
                     
\t
\t\t\t\t\t     
\t\t\t\t
\t\t\t\t\t<fieldset>
                     
            
\t            
                 <div class=\"col-md-20\">
                   
                   
                 <div class=\"col-md-6\">
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Nombre de usuario
\t\t\t\t\t        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreusuario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de usuario")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreusuario", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
                        <div class=\"form-group\">
\t\t\t\t\t        Nombre
\t\t\t\t\t        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div> 
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Apellido
\t\t\t\t\t        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Apellido")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>  
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t        DNI
\t\t\t\t\t        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "DNI")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t        Dirección
\t\t\t\t\t        ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Dirección")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t        Ciudad
\t\t\t\t\t        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ciudad")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Teléfono
\t\t\t\t\t        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Teléfono")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Mail
\t\t\t\t\t        ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mail")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t</div>
\t\t   <div class=\"col-md-6\">\t\t
\t\t\t\t\t    
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Fecha de nacimiento
\t\t\t\t\t        ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechanacimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fecha de nacimiento")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechanacimiento", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    
\t\t\t
\t\t\t\t
\t\t
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Fecha de Ingreso
\t\t\t\t\t        ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaingreso", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fecha de ingreso")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaingreso", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t           Fecha de Re-Ingreso (se generarán las deudas de cta. cte a partir de esta fecha)
\t\t\t\t\t        ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechareingreso", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fecha de reingreso")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechareingreso", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Rol
\t\t\t\t\t        ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Rol")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Tipo de cuota
\t\t\t\t\t        ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipocuota", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tipo de cuota")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipocuota", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <br>
\t\t\t\t\t   
                     
\t\t\t\t\t
\t\t\t\t  \t 
\t\t\t\t  \t  <br>
\t\t\t\t\t    
\t\t\t\t\t    
\t\t\t\t\t   \t\tLocker  
\t\t\t\t\t\t    <label>
\t\t\t\t\t\t\t\t";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "haveLocker", array()), 'widget');
        echo " 
\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "haveLocker", array()), 'errors');
        echo "</span>
\t\t\t\t\t  \t    </label>
\t\t\t\t\t        &nbsp;
\t\t\t\t\t        &nbsp;
\t\t\t\t\t        &nbsp;
\t\t\t\t\t    
\t\t\t\t\t 
\t\t\t\t\t   \t\tAsociación   
\t\t\t\t\t\t    <label>
\t\t\t\t\t\t\t\t";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "haveAsoc", array()), 'widget');
        echo " 
\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "haveAsoc", array()), 'errors');
        echo "</span>
\t\t\t\t\t\t    </label>
\t\t\t\t\t\t    
\t\t\t\t\t\t     <br><br><br><br> 
\t\t\t\t\t   \t\tEstado 
\t\t\t\t\t\t    <label>
\t\t\t\t\t\t\t\t";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo " 
\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'errors');
        echo "</span>
\t\t\t\t\t\t    </label>
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t    <br> 
\t\t\t\t\t<br>
                    <br>
\t\t\t\t    <p align=center>
\t\t\t\t        ";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Grabar Modificación", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t    </p>
\t\t</div>\t\t
\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t  <div class=\"hidden\">
\t\t\t\t\t        Avatar
\t\t\t\t\t        ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "brochure", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "archivo")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "brochure", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t \t</fieldset>
                     

                 
                   
\t\t\t\t";
        // line 164
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_ebe1e15b9e0fae7dc2c9cb0fdbadab41e98ee406e55c649fede57c21dc8b0c10->leave($__internal_ebe1e15b9e0fae7dc2c9cb0fdbadab41e98ee406e55c649fede57c21dc8b0c10_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 164,  317 => 152,  313 => 151,  302 => 143,  291 => 135,  287 => 134,  278 => 128,  274 => 127,  262 => 118,  258 => 117,  243 => 105,  239 => 104,  232 => 100,  228 => 99,  221 => 95,  217 => 94,  210 => 90,  206 => 89,  195 => 81,  191 => 80,  181 => 73,  177 => 72,  170 => 68,  166 => 67,  159 => 63,  155 => 62,  148 => 58,  144 => 57,  137 => 53,  133 => 52,  126 => 48,  122 => 47,  115 => 43,  111 => 42,  104 => 38,  100 => 37,  82 => 22,  78 => 21,  70 => 16,  62 => 14,  56 => 12,  54 => 11,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t\t<div class=\"col-md-20\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2>Editar Usuario </h2>
\t\t\t\t\t   {%if usuario.brochure != null%}
\t\t\t\t\t <img src=\"{{ asset('web/uploads/brochures'~'/'~usuario.brochure) }}\" class=\"avatar-tabla\" /> 
\t\t\t\t\t {%endif%}
                   <h2>{{ usuario.nombre }} {{ usuario.apellido }} </h2> 
\t
\t\t\t\t<a href=\"{{ path('cya_usuario_editavatar', {id: usuario.id }) }}\"class=\"btn btn-sm btn-primary\">
                 <i class=\"icon ion-eye\"></i> Cambiar Avatar
                 </a>
\t\t\t\t</div>
\t\t\t
\t\t\t\t{{ form_start(form, {'attr': { 'rol' : 'form'}}) }}
\t\t\t\t<h4 class=\"text-danger\">{{ form_errors(form) }}</h4>
                     
\t
\t\t\t\t\t     
\t\t\t\t
\t\t\t\t\t<fieldset>
                     
            
\t            
                 <div class=\"col-md-20\">
                   
                   
                 <div class=\"col-md-6\">
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Nombre de usuario
\t\t\t\t\t        {{ form_widget(form.nombreusuario, {'attr': {'class': 'form-control', 'placeholder' : 'Nombre de usuario'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.nombreusuario) }}</span>
\t\t\t\t\t    </div>
                        <div class=\"form-group\">
\t\t\t\t\t        Nombre
\t\t\t\t\t        {{ form_widget(form.nombre, {'attr': {'class': 'form-control', 'placeholder' : 'Nombre'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.nombre) }}</span>
\t\t\t\t\t    </div> 
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Apellido
\t\t\t\t\t        {{ form_widget(form.apellido, {'attr': {'class': 'form-control', 'placeholder' : 'Apellido'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.apellido) }}</span>
\t\t\t\t\t    </div>  
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t        DNI
\t\t\t\t\t        {{ form_widget(form.dni, {'attr': {'class': 'form-control', 'placeholder' : 'DNI'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.dni) }}</span>
\t\t\t\t\t    </div>
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
\t\t</div>
\t\t   <div class=\"col-md-6\">\t\t
\t\t\t\t\t    
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Fecha de nacimiento
\t\t\t\t\t        {{ form_widget(form.fechanacimiento, {'attr': {'class': 'form-control', 'placeholder' : 'Fecha de nacimiento'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.fechanacimiento) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    
\t\t\t
\t\t\t\t
\t\t
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Fecha de Ingreso
\t\t\t\t\t        {{ form_widget(form.fechaingreso, {'attr': {'class': 'form-control', 'placeholder' : 'Fecha de ingreso'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.fechaingreso) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t           Fecha de Re-Ingreso (se generarán las deudas de cta. cte a partir de esta fecha)
\t\t\t\t\t        {{ form_widget(form.fechareingreso, {'attr': {'class': 'form-control', 'placeholder' : 'Fecha de reingreso'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.fechareingreso) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Rol
\t\t\t\t\t        {{ form_widget(form.rol, {'attr': {'class': 'form-control', 'placeholder' : 'Rol'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.rol) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        Tipo de cuota
\t\t\t\t\t        {{ form_widget(form.tipocuota, {'attr': {'class': 'form-control', 'placeholder' : 'Tipo de cuota'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.tipocuota) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t\t    <br>
\t\t\t\t\t   
                     
\t\t\t\t\t
\t\t\t\t  \t 
\t\t\t\t  \t  <br>
\t\t\t\t\t    
\t\t\t\t\t    
\t\t\t\t\t   \t\tLocker  
\t\t\t\t\t\t    <label>
\t\t\t\t\t\t\t\t{{ form_widget(form.haveLocker) }} 
\t\t\t\t\t\t\t\t<span class=\"text-danger\">{{ form_errors(form.haveLocker) }}</span>
\t\t\t\t\t  \t    </label>
\t\t\t\t\t        &nbsp;
\t\t\t\t\t        &nbsp;
\t\t\t\t\t        &nbsp;
\t\t\t\t\t    
\t\t\t\t\t 
\t\t\t\t\t   \t\tAsociación   
\t\t\t\t\t\t    <label>
\t\t\t\t\t\t\t\t{{ form_widget(form.haveAsoc) }} 
\t\t\t\t\t\t\t\t<span class=\"text-danger\">{{ form_errors(form.haveAsoc) }}</span>
\t\t\t\t\t\t    </label>
\t\t\t\t\t\t    
\t\t\t\t\t\t     <br><br><br><br> 
\t\t\t\t\t   \t\tEstado 
\t\t\t\t\t\t    <label>
\t\t\t\t\t\t\t\t{{ form_widget(form.isActive) }} 
\t\t\t\t\t\t\t\t<span class=\"text-danger\">{{ form_errors(form.isActive) }}</span>
\t\t\t\t\t\t    </label>
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t    <br> 
\t\t\t\t\t<br>
                    <br>
\t\t\t\t    <p align=center>
\t\t\t\t        {{ form_widget(form.save, {'label' : 'Grabar Modificación', 'attr': {'class': 'btn btn-success'}}) }}
\t\t\t\t    </p>
\t\t</div>\t\t
\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t  <div class=\"hidden\">
\t\t\t\t\t        Avatar
\t\t\t\t\t        {{ form_widget(form.brochure, {'attr': {'class': 'form-control', 'placeholder' : 'archivo'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.brochure) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t \t</fieldset>
                     

                 
                   
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "CYAYogaBundle:Usuario:edit.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Usuario/edit.html.twig");
    }
}
