<?php

/* CYAYogaBundle:Tipocuota:edit.html.twig */
class __TwigTemplate_9afcce085dc809e328f093709d6864201728e27c55cc79663581921f35efbff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Tipocuota:edit.html.twig", 1);
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
        $__internal_2c862afebe53f289dde4aac184d116c75f0aa26962d79f4ed6b35a7e6ecc1ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c862afebe53f289dde4aac184d116c75f0aa26962d79f4ed6b35a7e6ecc1ceb->enter($__internal_2c862afebe53f289dde4aac184d116c75f0aa26962d79f4ed6b35a7e6ecc1ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Tipocuota:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c862afebe53f289dde4aac184d116c75f0aa26962d79f4ed6b35a7e6ecc1ceb->leave($__internal_2c862afebe53f289dde4aac184d116c75f0aa26962d79f4ed6b35a7e6ecc1ceb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76570dc9fd8d35e204ee13d96305e09ec9406bd423bbba4132b389866eaf1704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76570dc9fd8d35e204ee13d96305e09ec9406bd423bbba4132b389866eaf1704->enter($__internal_76570dc9fd8d35e204ee13d96305e09ec9406bd423bbba4132b389866eaf1704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Tipocuota:edit.html.twig"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "CYAYogaBundle:Tipocuota:messages/success.html.twig");
        echo "
\t<div class=\"main container\">
\t\t<div class=\"row well\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2><i class=\"fa fa-credit-card\" aria-hidden=\"true\"></i> Editar tipo de cuota</h2>
\t\t\t\t</div>
\t\t\t\t";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t\t\t\t<h4 class=\"text-danger\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</h4>
                     
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t                <div class=\"form-group\">
\t\t\t                     Nombre
\t\t\t                     ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre")));
        echo "
\t\t\t                     <span class=\"text-danger\"> ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo " </span>
\t\t\t               </div>
\t\t\t            </div>
\t\t\t            
\t\t\t            <div class=\"col-sm-4\"> 
\t\t\t                <div class=\"form-group\">
\t\t\t                     Valor
\t\t\t                     ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valor", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Valor")));
        echo "
\t\t\t                     <span class=\"text-danger\"> ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valor", array()), 'errors');
        echo " </span>
\t\t\t                </div>
\t\t\t            </div>
\t\t\t            
\t\t\t             <br><br>  <br><br>  <br><br>  <br><br>
          
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                <b> Cambie el mensaje para todos los Alumnos de este Curso/Actividad: </b> 
                     ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mensaje", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mensaje")));
        echo "
                     <span class=\"text-danger\"> ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mensaje", array()), 'errors');
        echo " </span>
               </div>
            </div>
            
            
\t\t\t            
\t\t\t        
\t\t\t            
\t\t\t         <br><br><br><br><br><br>
          <div class=\"row\">
              
             <div class=\"col-sm-6\">
                     <label> Tipo
                         ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "escurso", array()), 'widget');
        echo "
                         <span class=\"text-danger\"> ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "escurso", array()), 'errors');
        echo " </span>
                     </label>
             </div>
                  
          </div>
          
       
            
            
          
          
          
          <br><br><br>
          
\t\t\t            
\t\t\t\t \t</fieldset>
                     
\t\t\t\t    <p>
\t\t\t\t        ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Modificar tipo de cuota", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t    </p>
                 
                   
\t\t\t\t";
        // line 75
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_76570dc9fd8d35e204ee13d96305e09ec9406bd423bbba4132b389866eaf1704->leave($__internal_76570dc9fd8d35e204ee13d96305e09ec9406bd423bbba4132b389866eaf1704_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Tipocuota:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 75,  144 => 71,  123 => 53,  119 => 52,  103 => 39,  99 => 38,  87 => 29,  83 => 28,  73 => 21,  69 => 20,  59 => 13,  55 => 12,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    {{ include('CYAYogaBundle:Tipocuota:messages/success.html.twig') }}
\t<div class=\"main container\">
\t\t<div class=\"row well\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2><i class=\"fa fa-credit-card\" aria-hidden=\"true\"></i> Editar tipo de cuota</h2>
\t\t\t\t</div>
\t\t\t\t{{ form_start(form, {'attr': { 'role' : 'form'}}) }}
\t\t\t\t<h4 class=\"text-danger\">{{ form_errors(form) }}</h4>
                     
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t                <div class=\"form-group\">
\t\t\t                     Nombre
\t\t\t                     {{ form_widget(form.nombre, { 'attr' : { 'class' : 'form-control', 'placeholder' : 'Nombre'} }) }}
\t\t\t                     <span class=\"text-danger\"> {{ form_errors(form.nombre) }} </span>
\t\t\t               </div>
\t\t\t            </div>
\t\t\t            
\t\t\t            <div class=\"col-sm-4\"> 
\t\t\t                <div class=\"form-group\">
\t\t\t                     Valor
\t\t\t                     {{ form_widget(form.valor, { 'attr' : { 'class' : 'form-control', 'placeholder' : 'Valor'} }) }}
\t\t\t                     <span class=\"text-danger\"> {{ form_errors(form.valor) }} </span>
\t\t\t                </div>
\t\t\t            </div>
\t\t\t            
\t\t\t             <br><br>  <br><br>  <br><br>  <br><br>
          
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                <b> Cambie el mensaje para todos los Alumnos de este Curso/Actividad: </b> 
                     {{ form_widget(form.mensaje, { 'attr' : { 'class' : 'form-control', 'placeholder' : 'Mensaje'} }) }}
                     <span class=\"text-danger\"> {{ form_errors(form.mensaje) }} </span>
               </div>
            </div>
            
            
\t\t\t            
\t\t\t        
\t\t\t            
\t\t\t         <br><br><br><br><br><br>
          <div class=\"row\">
              
             <div class=\"col-sm-6\">
                     <label> Tipo
                         {{ form_widget(form.escurso) }}
                         <span class=\"text-danger\"> {{ form_errors(form.escurso) }} </span>
                     </label>
             </div>
                  
          </div>
          
       
            
            
          
          
          
          <br><br><br>
          
\t\t\t            
\t\t\t\t \t</fieldset>
                     
\t\t\t\t    <p>
\t\t\t\t        {{ form_widget(form.save, {'label' : 'Modificar tipo de cuota', 'attr': {'class': 'btn btn-success'}}) }}
\t\t\t\t    </p>
                 
                   
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "CYAYogaBundle:Tipocuota:edit.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Tipocuota/edit.html.twig");
    }
}
