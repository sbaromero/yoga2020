<?php

/* CYAYogaBundle:Detalleventa:add.html.twig */
class __TwigTemplate_e51eeee9537ecab2c4bfffbc6fdc7d9d547da1d36709e6ab34282cbcaad20f8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Detalleventa:add.html.twig", 1);
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
        $__internal_c9a98f32c615be502729e00c627ad9195b00c82c4c8de781c1a8118ceea8ef10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a98f32c615be502729e00c627ad9195b00c82c4c8de781c1a8118ceea8ef10->enter($__internal_c9a98f32c615be502729e00c627ad9195b00c82c4c8de781c1a8118ceea8ef10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Detalleventa:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9a98f32c615be502729e00c627ad9195b00c82c4c8de781c1a8118ceea8ef10->leave($__internal_c9a98f32c615be502729e00c627ad9195b00c82c4c8de781c1a8118ceea8ef10_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c1d74a2dd88a81c249f2a4f41009db41556c5cd3e4d45a2a2f398428e8606b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1d74a2dd88a81c249f2a4f41009db41556c5cd3e4d45a2a2f398428e8606b5->enter($__internal_9c1d74a2dd88a81c249f2a4f41009db41556c5cd3e4d45a2a2f398428e8606b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Detalleventa:add.html.twig"));

        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "


<div class=\"container-fluid producto\">
        <div class=\"container productos-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2><i class=\"fa fa-shopping-bag\"></i> Venta de Productos</h2>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_maestroventa_add");
        echo "\" class=\"head-link\">
        \t\t\t      <h3>
        \t\t\t           <span><i class=\"icon ion-skip-forward\"></i></span>
    \t\t\t               <i class=\"fa fa-usd\"></i>  Confirmar Venta
        \t\t\t         </h3>
        \t\t\t </a>
                </div>
            </div>
        </div>
</div>


\t<div class=\"container\">
\t    <div class = \"row well\">   
\t    ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form"), "action" => "", "method" => "POST"));
        echo "
      
          
            <div class=\"col-sm-2\"> 
                <div class=\"form-group\">
                     Cantidad
                     ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cantidad")));
        echo "
                     <span class=\"text-danger\"> ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'errors');
        echo " </span>
                </div>
            </div>
            <br>
            <div class=\"col-sm-2\">
               <div class=\"form-group\">
        
            <select class=\"selectpicker\" data-live-search=\"true\" id=\"producto\" name=\"producto\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "producto"), "method"), "html", null, true);
        echo "\">
                <option value=\"\" selected disabled>Producto</option>
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
            // line 44
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "descripcion", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "             </select>
                </div>
            </div> 
            
              <div class = \"col-sm-2\"> 
              </div> 
            <div class = \"form-group\"> 

            ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Agregar Producto", "attr" => array("class" => "btn btn-success")));
        echo "
      
            </div>

          </div>
            ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  

   <br>
   <br>
         <div class=\"container\">
\t    <div class=\"row well\">
\t    \t
\t    <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>

\t\t\t\t\t\t\t<th>";
        // line 73
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Producto", "m.nombreproducto");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 74
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cantidad", "m.cantidad");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 75
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Precio unitario", "m.producto.precio");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 76
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Precio Total", "m.precioproducto");
        echo "</th>
\t\t\t\t\t\t
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["detalleventa"]) {
            // line 82
            echo "                                
                                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleventa"], "nombreproducto", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleventa"], "cantidad", array()), "html", null, true);
            echo "</td>
                                <td>\$";
            // line 85
            echo twig_escape_filter($this->env, ($this->getAttribute($context["detalleventa"], "precioproducto", array()) / $this->getAttribute($context["detalleventa"], "cantidad", array())), "html", null, true);
            echo "</td>
                                <td>\$ ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleventa"], "precioproducto", array()), "html", null, true);
            echo "</td>
                                 <td class=\"actions\">
                                      
    \t\t\t                           <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_detalleventa_delete", array("id" => $this->getAttribute($context["detalleventa"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" title =\"Eliminar\" >
    \t\t\t                              <i class=\"fa fa-trash\"></i>  
    \t\t\t                        </a>
                                    </td>
                                
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalleventa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    </tbody>

                </table>

           <br>

            <b>
           <H4> ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Total productos cargados:", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " </H4> <h4>Monto Total: \$ ";
        echo twig_escape_filter($this->env, (isset($context["saldo"]) ? $context["saldo"] : $this->getContext($context, "saldo")), "html", null, true);
        echo "</h4>
                ";
        // line 105
        echo "                <div class=\"navigation\">
                    ";
        // line 106
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            
            <a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_maestroventa_add");
        echo "\" class=\"btn btn-success\">
    \t\t<i class=\"fa fa-usd\"></i>  Confirmar Venta  
    \t\t</a>
            
             
            </b>
             <br>
              <br>
            </div>
            
                
            </div>
        </div> 
         
         
         
         
 
 ";
        
        $__internal_9c1d74a2dd88a81c249f2a4f41009db41556c5cd3e4d45a2a2f398428e8606b5->leave($__internal_9c1d74a2dd88a81c249f2a4f41009db41556c5cd3e4d45a2a2f398428e8606b5_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Detalleventa:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 109,  224 => 106,  221 => 105,  213 => 103,  204 => 96,  191 => 89,  185 => 86,  181 => 85,  177 => 84,  173 => 83,  170 => 82,  166 => 81,  158 => 76,  154 => 75,  150 => 74,  146 => 73,  129 => 59,  121 => 54,  111 => 46,  100 => 44,  96 => 43,  91 => 41,  81 => 34,  77 => 33,  68 => 27,  51 => 13,  40 => 5,  34 => 4,  11 => 1,);
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


<div class=\"container-fluid producto\">
        <div class=\"container productos-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2><i class=\"fa fa-shopping-bag\"></i> Venta de Productos</h2>
                    <a href=\"{{ path('cya_maestroventa_add') }}\" class=\"head-link\">
        \t\t\t      <h3>
        \t\t\t           <span><i class=\"icon ion-skip-forward\"></i></span>
    \t\t\t               <i class=\"fa fa-usd\"></i>  Confirmar Venta
        \t\t\t         </h3>
        \t\t\t </a>
                </div>
            </div>
        </div>
</div>


\t<div class=\"container\">
\t    <div class = \"row well\">   
\t    {{ form_start(form, {'attr' : {'role' : 'form'}, 'action':'', 'method':'POST' }) }}
      
          
            <div class=\"col-sm-2\"> 
                <div class=\"form-group\">
                     Cantidad
                     {{ form_widget(form.cantidad, { 'attr' : { 'class' : 'form-control', 'placeholder' : 'Cantidad'} }) }}
                     <span class=\"text-danger\"> {{ form_errors(form.cantidad) }} </span>
                </div>
            </div>
            <br>
            <div class=\"col-sm-2\">
               <div class=\"form-group\">
        
            <select class=\"selectpicker\" data-live-search=\"true\" id=\"producto\" name=\"producto\" value=\"{{ app.request.get('producto') }}\">
                <option value=\"\" selected disabled>Producto</option>
                {% for us in productos %}
                    <option value=\"{{ us.id }}\">{{ us.descripcion }}</option>
                {% endfor %}
             </select>
                </div>
            </div> 
            
              <div class = \"col-sm-2\"> 
              </div> 
            <div class = \"form-group\"> 

            {{ form_widget(form.save, {'label' : 'Agregar Producto', 'attr': {'class': 'btn btn-success'} }) }}
      
            </div>

          </div>
            {{ form_end(form) }}
    </div>
  

   <br>
   <br>
         <div class=\"container\">
\t    <div class=\"row well\">
\t    \t
\t    <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>

\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Producto', 'm.nombreproducto') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Cantidad', 'm.cantidad') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Precio unitario', 'm.producto.precio') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Precio Total', 'm.precioproducto') }}</th>
\t\t\t\t\t\t
                        </tr>
                    </thead>
                    <tbody>
                        {% for detalleventa in pagination %}
                                
                                <td>{{ detalleventa.nombreproducto }}</td>
                                <td>{{ detalleventa.cantidad }}</td>
                                <td>\${{ detalleventa.precioproducto/detalleventa.cantidad }}</td>
                                <td>\$ {{ detalleventa.precioproducto }}</td>
                                 <td class=\"actions\">
                                      
    \t\t\t                           <a href=\"{{ path('cya_detalleventa_delete', {id: detalleventa.id }) }}\" class=\"btn btn-danger\" title =\"Eliminar\" >
    \t\t\t                              <i class=\"fa fa-trash\"></i>  
    \t\t\t                        </a>
                                    </td>
                                
                            </tr>
                        {% endfor %}
                    </tbody>

                </table>

           <br>

            <b>
           <H4> {% trans %}Total productos cargados:{% endtrans %} {{ pagination.getTotalItemCount }} </H4> <h4>Monto Total: \$ {{ saldo }}</h4>
                {# display navigation #}
                <div class=\"navigation\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            
            <a href=\"{{ path('cya_maestroventa_add') }}\" class=\"btn btn-success\">
    \t\t<i class=\"fa fa-usd\"></i>  Confirmar Venta  
    \t\t</a>
            
             
            </b>
             <br>
              <br>
            </div>
            
                
            </div>
        </div> 
         
         
         
         
 
 {% endblock %}
", "CYAYogaBundle:Detalleventa:add.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Detalleventa/add.html.twig");
    }
}
