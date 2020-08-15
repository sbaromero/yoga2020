<?php

/* CYAYogaBundle:Tipocuota:add.html.twig */
class __TwigTemplate_5691ab37a5b90c312a9cbbc05fcfd60a11f1c2e2113b02d373846fc1bea79107 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Tipocuota:add.html.twig", 1);
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
        $__internal_586583d4fcde527d99b99cdcc29be5874e730cff27d7cd41c7c4cc046e9b3759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_586583d4fcde527d99b99cdcc29be5874e730cff27d7cd41c7c4cc046e9b3759->enter($__internal_586583d4fcde527d99b99cdcc29be5874e730cff27d7cd41c7c4cc046e9b3759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Tipocuota:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_586583d4fcde527d99b99cdcc29be5874e730cff27d7cd41c7c4cc046e9b3759->leave($__internal_586583d4fcde527d99b99cdcc29be5874e730cff27d7cd41c7c4cc046e9b3759_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa65bd2b3cdc4590dc6a8e3ce0f5f22902e798f6d32d7e09beedf08d4051adbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa65bd2b3cdc4590dc6a8e3ce0f5f22902e798f6d32d7e09beedf08d4051adbc->enter($__internal_aa65bd2b3cdc4590dc6a8e3ce0f5f22902e798f6d32d7e09beedf08d4051adbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Tipocuota:add.html.twig"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container-fluid alumnos\">
        <div class=\"container alumnos-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2><i class=\"fa fa-credit-card\"></i>&nbsp; Nuevo Tipo de Cuota</h2>
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_tipocuota_index");
        echo "\" class=\"head-link\">
    \t\t\t        <h3>
    \t\t\t           <span><i class=\"icon ion-android-arrow-dropleft back\"></i></span>
    \t\t\t            regresar al listado
    \t\t\t         </h3>
    \t\t\t    </a>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form"), "action" => "", "method" => "POST"));
        echo "
           
     <div class=\"container grey-input\">
        <div class=\"row\">
            
            <div class=\"col-sm-4\">
                <div class=\"form-group\">
                     Nombre
                     ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre")));
        echo "
                     <span class=\"text-danger\"> ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo " </span>
               </div>
            </div>
            
            
            
            
            <div class=\"col-sm-4\"> 
                <div class=\"form-group\">
                     Valor
                     ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valor", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Valor")));
        echo "
                     <span class=\"text-danger\"> ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valor", array()), 'errors');
        echo " </span>
                </div>
            </div>
           </div> 
           
           
           
          <br><br>
          
            <div class=\"col-sm-9\">
                <div class=\"form-group\">
                <b> Ingrese un mensaje para todos los Alumnos de este Curso/Actividad: </b> 
                     ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mensaje", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mensaje")));
        echo "
                     <span class=\"text-danger\"> ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mensaje", array()), 'errors');
        echo " </span>
               </div>
            </div>
          
          
          
          
            <br><br><br>
           
           
           
           <br><br><br>
          <div class=\"row\">
              
             <div class=\"col-sm-6\">
                     <label> Tipo
                         ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "escurso", array()), 'widget');
        echo "
                         <span class=\"text-danger\"> ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "escurso", array()), 'errors');
        echo " </span>
                     </label>
             </div>
                  
          </div>
          

            <div class=\"col-sm-6\">
                ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Agregar tipo de cuota", "attr" => array("class" => "btn alumnos-btn")));
        echo "
            </div>
            
            ";
        // line 82
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
         </div>
     </div>
";
        
        $__internal_aa65bd2b3cdc4590dc6a8e3ce0f5f22902e798f6d32d7e09beedf08d4051adbc->leave($__internal_aa65bd2b3cdc4590dc6a8e3ce0f5f22902e798f6d32d7e09beedf08d4051adbc_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Tipocuota:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 82,  149 => 79,  138 => 71,  134 => 70,  115 => 54,  111 => 53,  96 => 41,  92 => 40,  79 => 30,  75 => 29,  64 => 21,  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <div class=\"container-fluid alumnos\">
        <div class=\"container alumnos-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2><i class=\"fa fa-credit-card\"></i>&nbsp; Nuevo Tipo de Cuota</h2>
                    <a href=\"{{ path('cya_tipocuota_index') }}\" class=\"head-link\">
    \t\t\t        <h3>
    \t\t\t           <span><i class=\"icon ion-android-arrow-dropleft back\"></i></span>
    \t\t\t            regresar al listado
    \t\t\t         </h3>
    \t\t\t    </a>
                </div>
            </div>
        </div>
    </div>
    
    {{ form_start(form, {'attr' : {'role' : 'form'}, 'action':'', 'method':'POST' }) }}
           
     <div class=\"container grey-input\">
        <div class=\"row\">
            
            <div class=\"col-sm-4\">
                <div class=\"form-group\">
                     Nombre
                     {{ form_widget(form.nombre, { 'attr' : { 'class' : 'form-control', 'placeholder' : 'Nombre'} }) }}
                     <span class=\"text-danger\"> {{ form_errors(form.nombre) }} </span>
               </div>
            </div>
            
            
            
            
            <div class=\"col-sm-4\"> 
                <div class=\"form-group\">
                     Valor
                     {{ form_widget(form.valor, { 'attr' : { 'class' : 'form-control', 'placeholder' : 'Valor'} }) }}
                     <span class=\"text-danger\"> {{ form_errors(form.valor) }} </span>
                </div>
            </div>
           </div> 
           
           
           
          <br><br>
          
            <div class=\"col-sm-9\">
                <div class=\"form-group\">
                <b> Ingrese un mensaje para todos los Alumnos de este Curso/Actividad: </b> 
                     {{ form_widget(form.mensaje, { 'attr' : { 'class' : 'form-control', 'placeholder' : 'Mensaje'} }) }}
                     <span class=\"text-danger\"> {{ form_errors(form.mensaje) }} </span>
               </div>
            </div>
          
          
          
          
            <br><br><br>
           
           
           
           <br><br><br>
          <div class=\"row\">
              
             <div class=\"col-sm-6\">
                     <label> Tipo
                         {{ form_widget(form.escurso) }}
                         <span class=\"text-danger\"> {{ form_errors(form.escurso) }} </span>
                     </label>
             </div>
                  
          </div>
          

            <div class=\"col-sm-6\">
                {{ form_widget(form.save, {'label' : 'Agregar tipo de cuota', 'attr': {'class': 'btn alumnos-btn'} }) }}
            </div>
            
            {{ form_end(form) }}
         </div>
     </div>
{% endblock %}

", "CYAYogaBundle:Tipocuota:add.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Tipocuota/add.html.twig");
    }
}
