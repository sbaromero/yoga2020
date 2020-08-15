<?php

/* CYAYogaBundle:Tipocuota:index.html.twig */
class __TwigTemplate_6e73278d38783e90cb39d065318d2fecfd3fed6bee1806559b77f3b7d0fc3c7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Tipocuota:index.html.twig", 1);
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
        $__internal_d492bccfa550e068bb3dfa25b9a697b25d6580b63d8149d789e42d3a8ab08896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d492bccfa550e068bb3dfa25b9a697b25d6580b63d8149d789e42d3a8ab08896->enter($__internal_d492bccfa550e068bb3dfa25b9a697b25d6580b63d8149d789e42d3a8ab08896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Tipocuota:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d492bccfa550e068bb3dfa25b9a697b25d6580b63d8149d789e42d3a8ab08896->leave($__internal_d492bccfa550e068bb3dfa25b9a697b25d6580b63d8149d789e42d3a8ab08896_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46ecec2edb4722104396191a68d682672796aebaf13d5dceb10f6a9f3223aa38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ecec2edb4722104396191a68d682672796aebaf13d5dceb10f6a9f3223aa38->enter($__internal_46ecec2edb4722104396191a68d682672796aebaf13d5dceb10f6a9f3223aa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Tipocuota:index.html.twig"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 5
        echo twig_include($this->env, $context, "CYAYogaBundle:Tipocuota:messages/success.html.twig");
        echo "
<div class=\"container-fluid alumnos\">
        <div class=\"container alumnos-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2> <i class=\"fa fa-list-ol\" aria-hidden=\"true\"></i> &nbsp;  Listado de Tipos de Cuota</h2>
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_tipocuota_add");
        echo "\" class=\"head-link\">
    \t\t\t        <h3>
    \t\t\t           <span><i class=\"icon ion-plus\"></i></span>
    \t\t\t            Nuevo tipo de cuota
    \t\t\t         </h3>
    \t\t\t    </a>
                </div>
                <div class=\"col-sm-7\">
                    <form method=\"get\" action=\"\" class=\"form-inline pull-right\" role=\"search\">

        \t\t\t</form>
                </div>
            </div>
        </div>
    </div>
\t<div class=\"container\">
\t    <div class=\"row\">
\t    \t
\t    <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>

\t\t\t\t\t\t\t<th>";
        // line 34
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "t.nombre");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 35
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Valor", "t.valor");
        echo " </th>
\t\t\t\t\t\t\t<th>";
        // line 36
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Tipo", "t.escurso");
        echo " </th>
\t\t\t\t\t\t\t<th>Nº Inscriptos </th>
\t\t\t\t\t\t\t
                            <th>Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipocuota"]) {
            // line 45
            echo "                            <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuota"], "id", array()), "html", null, true);
            echo "\">
                                
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuota"], "nombre", array()), "html", null, true);
            echo "</td>
                                <td>\$ ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuota"], "valor", array()), "html", null, true);
            echo "</td>
                                
                                <td>
                               
                                ";
            // line 53
            if (($this->getAttribute($context["tipocuota"], "escurso", array()) == 1)) {
                // line 54
                echo "                               
                               <span class=\"text-danger\">    CURSO </span>
                               
                                 ";
            }
            // line 57
            echo " 
                                 
                                 ";
            // line 61
            if (($this->getAttribute($context["tipocuota"], "escurso", array()) == 0)) {
                // line 62
                echo "                               
                                 <span class=\"text-success\">    CLASE </span>
                               
                                 ";
            }
            // line 65
            echo " 
                                
                       
                                 
                                 </td>
               
                            <td> ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuota"], "cantidad", array()), "html", null, true);
            echo "</td>




                                <td class=\"actions\">
                                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_tipocuota_edit", array("id" => $this->getAttribute($context["tipocuota"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\"  title=\"Editar\">
                                   <i class=\"fa fa-pencil\"></i> 
                                    </a>
                                    
                                  <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_tipocuota_delete", array("id" => $this->getAttribute($context["tipocuota"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Está seguro?')\"
                                  class=\"btn btn btn-danger btn-delete\"
                                        title=\"Eliminar\" >
\t\t\t                           <i class=\"fa fa-trash\"></i>
\t\t\t                     </a>
                                    
                                    
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipocuota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                    </tbody>
                </table>
           <H4> Total Tipos de cuota: ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</H4>
                ";
        // line 95
        echo "                <div class=\"navigation\">
                    ";
        // line 96
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_46ecec2edb4722104396191a68d682672796aebaf13d5dceb10f6a9f3223aa38->leave($__internal_46ecec2edb4722104396191a68d682672796aebaf13d5dceb10f6a9f3223aa38_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Tipocuota:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 96,  187 => 95,  183 => 93,  179 => 91,  163 => 81,  156 => 77,  147 => 71,  139 => 65,  133 => 62,  131 => 61,  127 => 57,  121 => 54,  119 => 53,  112 => 48,  108 => 47,  102 => 45,  98 => 44,  87 => 36,  83 => 35,  79 => 34,  53 => 11,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
{{ include('CYAYogaBundle:Tipocuota:messages/success.html.twig')}}
<div class=\"container-fluid alumnos\">
        <div class=\"container alumnos-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2> <i class=\"fa fa-list-ol\" aria-hidden=\"true\"></i> &nbsp;  Listado de Tipos de Cuota</h2>
                    <a href=\"{{ path('cya_tipocuota_add') }}\" class=\"head-link\">
    \t\t\t        <h3>
    \t\t\t           <span><i class=\"icon ion-plus\"></i></span>
    \t\t\t            Nuevo tipo de cuota
    \t\t\t         </h3>
    \t\t\t    </a>
                </div>
                <div class=\"col-sm-7\">
                    <form method=\"get\" action=\"\" class=\"form-inline pull-right\" role=\"search\">

        \t\t\t</form>
                </div>
            </div>
        </div>
    </div>
\t<div class=\"container\">
\t    <div class=\"row\">
\t    \t
\t    <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>

\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Nombre', 't.nombre') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Valor', 't.valor') }} </th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Tipo', 't.escurso') }} </th>
\t\t\t\t\t\t\t<th>Nº Inscriptos </th>
\t\t\t\t\t\t\t
                            <th>Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        {% for tipocuota in pagination %}
                            <tr data-id=\"{{ tipocuota.id }}\">
                                
                                <td>{{ tipocuota.nombre }}</td>
                                <td>\$ {{ tipocuota.valor }}</td>
                                
                                <td>
                               
                                {% 
                                if  tipocuota.escurso   == 1 %}
                               
                               <span class=\"text-danger\">    CURSO </span>
                               
                                 {% endif %} 
                                 
                                 {% 
                                
                                 if  tipocuota.escurso   == 0 %}
                               
                                 <span class=\"text-success\">    CLASE </span>
                               
                                 {% endif %} 
                                
                       
                                 
                                 </td>
               
                            <td> {{ tipocuota.cantidad }}</td>




                                <td class=\"actions\">
                                    <a href=\"{{ path('cya_tipocuota_edit', {id: tipocuota.id }) }}\" class=\"btn btn-success\"  title=\"Editar\">
                                   <i class=\"fa fa-pencil\"></i> 
                                    </a>
                                    
                                  <a href=\"{{ path('cya_tipocuota_delete', {id: tipocuota.id }) }}\" onclick=\"return confirm('Está seguro?')\"
                                  class=\"btn btn btn-danger btn-delete\"
                                        title=\"Eliminar\" >
\t\t\t                           <i class=\"fa fa-trash\"></i>
\t\t\t                     </a>
                                    
                                    
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
           <H4> Total Tipos de cuota: {{ pagination.getTotalItemCount }}</H4>
                {# display navigation #}
                <div class=\"navigation\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "CYAYogaBundle:Tipocuota:index.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Tipocuota/index.html.twig");
    }
}
