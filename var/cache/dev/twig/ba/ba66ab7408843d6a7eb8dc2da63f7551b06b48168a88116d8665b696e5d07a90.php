<?php

/* CYAYogaBundle:Alumnocc:generacc.html.twig */
class __TwigTemplate_228294d3922acbf5009218215c474c80acb94b628c70f1e4f334f55fa45807a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Alumnocc:generacc.html.twig", 1);
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
        $__internal_7702ca44accfb68b766fa9afe2c87ca1ac2405046d9d6b34fead275b4ff24a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7702ca44accfb68b766fa9afe2c87ca1ac2405046d9d6b34fead275b4ff24a74->enter($__internal_7702ca44accfb68b766fa9afe2c87ca1ac2405046d9d6b34fead275b4ff24a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Alumnocc:generacc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7702ca44accfb68b766fa9afe2c87ca1ac2405046d9d6b34fead275b4ff24a74->leave($__internal_7702ca44accfb68b766fa9afe2c87ca1ac2405046d9d6b34fead275b4ff24a74_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_35bd6a6fb3ad7f5251994ff945c8dd38ba9aadf6f77be6c8446ba277e244a293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bd6a6fb3ad7f5251994ff945c8dd38ba9aadf6f77be6c8446ba277e244a293->enter($__internal_35bd6a6fb3ad7f5251994ff945c8dd38ba9aadf6f77be6c8446ba277e244a293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Alumnocc:generacc.html.twig"));

        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"container-fluid cuenta\">
        <div class=\"container cuenta-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2>Generar Deuda o Cuota</h2>
                </div>
            </div>
        </div>
</div>


\t<div class=\"container\">

\t    ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form"), "action" => "", "method" => "POST"));
        echo "
\t    <div class=\"container grey-input\">
        <div class=\"row\">
         
         \t<div class=\"col-sm-4\">
         \t    
         \t    <div class=\"form-group\">
               <b> Seleccione Usuario </b>
                <select class=\"selectpicker\" data-live-search=\"true\" id=\"usuario\" name=\"usuario\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "usuario"), "method"), "html", null, true);
        echo "\">
                   <option value=\"\">Usuario</option>
                 ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
            // line 31
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "nombrecompleto", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "               </select>
            </div>
         \t    
         \t             <b> Tipo de Cuenta Corriente </b>
                          <select class=\"form-control\" id=\"tipocc\"name=\"tipocc\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "tipocc"), "method"), "html", null, true);
        echo "\">
                            <option value=\"GE\">Cuenta Corriente Normal</option>
                            <option value=\"PC\">Cuota Mes</option>
                          </select>
         <br>
                         <b> Mes </b>
                          <select class=\"form-control\" id=\"mes\"name=\"mes\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "mes"), "method"), "html", null, true);
        echo "\">
                            <option value=\"2\">Enero</option>
                            <option value=\"3\">Febrero</option>
                            <option value=\"4\">Marzo</option>
                            <option value=\"5\">Abril</option>
                            <option value=\"6\">Mayo</option>
                            <option value=\"7\">Junio</option>
                            <option value=\"8\">Julio</option>
                            <option value=\"9\">Agosto</option>
                            <option value=\"10\">Septiembre</option>
                            <option value=\"11\">Octubre</option>
                            <option value=\"12\">Noviembre</option>
                            <option value=\"1\">Diciembre</option>

                           
                          </select>
             <br>             
                          <b> Año </b>
                          <select class=\"form-control\" id=\"año\"name=\"año\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "año"), "method"), "html", null, true);
        echo "\">
                            <option value=\"2017\">2017</option>
                            <option value=\"2018\">2018</option>
                             <option value=\"2019\">2019</option>
                              <option value=\"2020\">2020</option>
                               <option value=\"2021\">2021</option>
                               <option value=\"2022\">2022</option>
                               <option value=\"2023\">2023</option>
                               <option value=\"2024\">2024</option>
                               <option value=\"2025\">2025</option>
                               <option value=\"2026\">2026</option>
                               <option value=\"2027\">2026</option>
                               
                          </select>
           
       <br>
            
          </div> 
        </div>    
        
        
     <div class=\"row\">  
       <div class=\"col-sm-4\">
           <div class=\"form-group\">
\t        <b>  Monto \$ </b>
\t     \t";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deuda", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Monto")));
        echo "
\t    \t<span class=\"text-danger\">";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deuda", array()), 'errors');
        echo "</span>
\t\t  </div> 
      </div> 
     </div>     
        <div class=\"row\">  
         <div class=\"col-sm-4\">
           <div class=\"form-group\">
\t        <b>  Comentario </b>
\t     \t";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comentario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Monto")));
        echo "
\t    \t<span class=\"text-danger\">";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comentario", array()), 'errors');
        echo "</span>
\t\t  </div> 
         </div>      
    </div>   
           
            <br><br>
             <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-2\" align = \"left\">
                ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Generar CC.", "attr" => array("class" => "btn btn-success")));
        echo "
            </div>
            
          </div>
          </div>
          ";
        // line 109
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
          
 </div>

 
 
 <br>
 <br>
 
       
 
 
 
 ";
        
        $__internal_35bd6a6fb3ad7f5251994ff945c8dd38ba9aadf6f77be6c8446ba277e244a293->leave($__internal_35bd6a6fb3ad7f5251994ff945c8dd38ba9aadf6f77be6c8446ba277e244a293_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Alumnocc:generacc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 109,  183 => 104,  172 => 96,  168 => 95,  157 => 87,  153 => 86,  125 => 61,  104 => 43,  95 => 37,  89 => 33,  78 => 31,  74 => 30,  69 => 28,  58 => 20,  40 => 5,  34 => 4,  11 => 1,);
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

<div class=\"container-fluid cuenta\">
        <div class=\"container cuenta-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2>Generar Deuda o Cuota</h2>
                </div>
            </div>
        </div>
</div>


\t<div class=\"container\">

\t    {{ form_start(form, {'attr' : {'role' : 'form'}, 'action':'', 'method':'POST' }) }}
\t    <div class=\"container grey-input\">
        <div class=\"row\">
         
         \t<div class=\"col-sm-4\">
         \t    
         \t    <div class=\"form-group\">
               <b> Seleccione Usuario </b>
                <select class=\"selectpicker\" data-live-search=\"true\" id=\"usuario\" name=\"usuario\" value=\"{{ app.request.get('usuario') }}\">
                   <option value=\"\">Usuario</option>
                 {% for us in usuarios %}
                    <option value=\"{{ us.id }}\">{{ us.nombrecompleto }}</option>
                {% endfor %}
               </select>
            </div>
         \t    
         \t             <b> Tipo de Cuenta Corriente </b>
                          <select class=\"form-control\" id=\"tipocc\"name=\"tipocc\" value=\"{{ app.request.get('tipocc') }}\">
                            <option value=\"GE\">Cuenta Corriente Normal</option>
                            <option value=\"PC\">Cuota Mes</option>
                          </select>
         <br>
                         <b> Mes </b>
                          <select class=\"form-control\" id=\"mes\"name=\"mes\" value=\"{{ app.request.get('mes') }}\">
                            <option value=\"2\">Enero</option>
                            <option value=\"3\">Febrero</option>
                            <option value=\"4\">Marzo</option>
                            <option value=\"5\">Abril</option>
                            <option value=\"6\">Mayo</option>
                            <option value=\"7\">Junio</option>
                            <option value=\"8\">Julio</option>
                            <option value=\"9\">Agosto</option>
                            <option value=\"10\">Septiembre</option>
                            <option value=\"11\">Octubre</option>
                            <option value=\"12\">Noviembre</option>
                            <option value=\"1\">Diciembre</option>

                           
                          </select>
             <br>             
                          <b> Año </b>
                          <select class=\"form-control\" id=\"año\"name=\"año\" value=\"{{ app.request.get('año') }}\">
                            <option value=\"2017\">2017</option>
                            <option value=\"2018\">2018</option>
                             <option value=\"2019\">2019</option>
                              <option value=\"2020\">2020</option>
                               <option value=\"2021\">2021</option>
                               <option value=\"2022\">2022</option>
                               <option value=\"2023\">2023</option>
                               <option value=\"2024\">2024</option>
                               <option value=\"2025\">2025</option>
                               <option value=\"2026\">2026</option>
                               <option value=\"2027\">2026</option>
                               
                          </select>
           
       <br>
            
          </div> 
        </div>    
        
        
     <div class=\"row\">  
       <div class=\"col-sm-4\">
           <div class=\"form-group\">
\t        <b>  Monto \$ </b>
\t     \t{{ form_widget(form.deuda, {'attr': {'class': 'form-control', 'placeholder' : 'Monto'}}) }}
\t    \t<span class=\"text-danger\">{{ form_errors(form.deuda) }}</span>
\t\t  </div> 
      </div> 
     </div>     
        <div class=\"row\">  
         <div class=\"col-sm-4\">
           <div class=\"form-group\">
\t        <b>  Comentario </b>
\t     \t{{ form_widget(form.comentario, {'attr': {'class': 'form-control', 'placeholder' : 'Monto'}}) }}
\t    \t<span class=\"text-danger\">{{ form_errors(form.comentario) }}</span>
\t\t  </div> 
         </div>      
    </div>   
           
            <br><br>
             <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-2\" align = \"left\">
                {{ form_widget(form.save, {'label' : 'Generar CC.', 'attr': {'class': 'btn btn-success'} }) }}
            </div>
            
          </div>
          </div>
          {{ form_end(form) }}
          
 </div>

 
 
 <br>
 <br>
 
       
 
 
 
 {% endblock %}
", "CYAYogaBundle:Alumnocc:generacc.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Alumnocc/generacc.html.twig");
    }
}
