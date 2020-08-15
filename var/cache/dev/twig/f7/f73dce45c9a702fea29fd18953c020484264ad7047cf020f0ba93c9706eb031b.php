<?php

/* CYAYogaBundle:Usuario:index.html.twig */
class __TwigTemplate_9c66af6e9831169acc1437959d28eacd732671229898662b90b4ca60dcccae93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Usuario:index.html.twig", 1);
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
        $__internal_80a83e37cb79ca3d32066320db7623473771090a2232d5e45c92d0f83385d3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a83e37cb79ca3d32066320db7623473771090a2232d5e45c92d0f83385d3bf->enter($__internal_80a83e37cb79ca3d32066320db7623473771090a2232d5e45c92d0f83385d3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Usuario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a83e37cb79ca3d32066320db7623473771090a2232d5e45c92d0f83385d3bf->leave($__internal_80a83e37cb79ca3d32066320db7623473771090a2232d5e45c92d0f83385d3bf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d51024efae280f533e5671c847de99fe6ff794010235c71b9342a916a18d8dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51024efae280f533e5671c847de99fe6ff794010235c71b9342a916a18d8dbb->enter($__internal_d51024efae280f533e5671c847de99fe6ff794010235c71b9342a916a18d8dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Usuario:index.html.twig"));

        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 8
        echo "    <div class=\"container-fluid alumnos\">
        <div class=\"container alumnos-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2><i class=\"fa fa-users\"></i> Listado de Usuarios </h2>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_add");
        echo "\" class=\"head-link\">
        \t\t\t        <h3>
        \t\t\t            <span><i class=\"icon ion-android-person-add\"></i></span>
        \t\t\t            agregar nuevo usuario
        \t\t\t         </h3>
        \t\t\t    </a>
                </div>
                <div class=\"col-sm-7\">
                    <form method=\"get\" action=\"\" class=\"form-inline pull-right\" role=\"search\">
                    \t<div class=\"form-group\">
                            <select class=\"selectpicker\" data-live-search=\"true\" id=\"usuariot\" name=\"usuariot\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "usuariot"), "method"), "html", null, true);
        echo "\">
                                <option value=\"\" selected disabled>Usuario</option>
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuariot"]) ? $context["usuariot"] : $this->getContext($context, "usuariot")));
        foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
            // line 26
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "nombrecompleto", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                             </select>
                        </div>
        \t\t\t\t
        \t\t\t\t<div class=\"form-group select-class\">
                          <select class=\"form-control\" id=\"estado\"name=\"estado\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "estado"), "method"), "html", null, true);
        echo "\">
                            <option value=\"3\">Todos</option>
                            <option value=\"1\">Activos</option>
                            <option value=\"0\">Inactivos</option>
                          </select>
                        </div>
                        
                        <br>
                        <br>
                        
                        <div class=\"form-group select-class\">
                            <select class=\"form-control\" id=\"tipocuota\" name=\"tipocuota\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "tipocuota"), "method"), "html", null, true);
        echo "\">
                                <option value=\"\" selected disabled>Buscar por Tipo de cuota</option>
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipocuotas"]) ? $context["tipocuotas"] : $this->getContext($context, "tipocuotas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
            // line 46
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "nombre", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                             </select>
                        </div>
                        
        \t\t\t\t
        \t\t\t\t<input type=\"submit\" value=\"Buscar\" class=\"btn btn-default\" >
        \t\t\t</form>
                </div>
            </div>
        </div>
    </div>
           
            
\t<div class=\"container\">
\t    
\t    ";
        // line 62
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()) < 1000)) {
            // line 63
            echo "\t                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 64
                echo "\t                <H4>  <b>   ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "tipocuota", array()), "nombre", array()), "html", null, true);
                echo " </b> </H4>
\t                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t                  <H4> <b>Total Usuarios:</b>  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
            echo " </H4>
\t                 
\t                  
                <div class=\"navigation\">
                    ";
            // line 70
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
                </div>
                
        ";
        }
        // line 73
        echo "        
                
                
\t    <div class=\"row well\">
\t    \t
\t    <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>

\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th>";
        // line 84
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Usuario", "u.apellido");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 85
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "DNI", "u.dni");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 86
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Teléfono", "u.telefono");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 87
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Mail", "u.mail");
        echo "</th>
\t\t\t\t\t\t\t<th>Tipo de Cuota</th>
\t\t\t\t\t\t\t<th>Estado</th>
                            <th align = \"right\">      Acciones  </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 95
            echo "                            <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "\">
                                
                                
                                <td colspan=\"1\"> 
                                
                                ";
            // line 100
            if (($this->getAttribute($context["usuario"], "brochure", array()) != null)) {
                // line 101
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("web/uploads/brochures" . "/") . $this->getAttribute($context["usuario"], "brochure", array()))), "html", null, true);
                echo "\" class=\"avatar-tabla\" />  
                                 ";
            }
            // line 102
            echo " 
                                 
                                 <td>";
            // line 104
            if (($this->getAttribute($context["usuario"], "isActive", array()) == 1)) {
                // line 105
                echo "                                <b> <span class=\"text-success\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apellido", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
                echo " </span>
                                  ";
            }
            // line 106
            echo " 
                                 
                                 ";
            // line 108
            if (($this->getAttribute($context["usuario"], "isActive", array()) == 0)) {
                // line 109
                echo "                                <b> <span class=\"text-danger\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apellido", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
                echo " </span>
                                  ";
            }
            // line 110
            echo " 
                                    
                                  
                                </td>
                                
                                 <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "dni", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "telefono", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "mail", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "tipocuota", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 119
            if (($this->getAttribute($context["usuario"], "isActive", array()) == 1)) {
                // line 120
                echo "\t\t\t\t\t               <b>   <span class=\"text-success\">Activo</span></b>
\t\t\t\t                      ";
            } elseif (($this->getAttribute(            // line 121
$context["usuario"], "isActive", array()) == 0)) {
                // line 122
                echo "\t\t\t\t\t\t            <b> <span class=\"text-danger\">Inactivo</span> </b>
                                \t";
            }
            // line 123
            echo "</td>
                               
                               
                                <td class=\"actions\" style = \"width:20%;\" align = \"center\" >
                                    <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_view", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\" title = \"Detalle\"  class=\"btn btn-warning\">
                                        <i class=\"fa fa-search\"></i> 
                                    </a>
                                ";
            // line 131
            echo "                                
                                ";
            // line 133
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_edit", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\"  class=\"btn btn-success\" title = \"Editar\">
                                        <i class=\"fa fa-pencil\"></i> 
                                    </a>
                                ";
            // line 137
            echo "                                ";
            // line 138
            echo "                                   
                                      <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_editpass", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" title= \"Cambiar Password\">
                                        <i class=\"fa fa-key\"></i> 
                                    </a>
                                ";
            // line 143
            echo "                                ";
            // line 144
            echo "                                
                                   <a href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_imprimircuota", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\" title = \"Imprimir Cuota\">
\t\t    \t\t                <span class=\"fa fa-print\"></span>
\t\t\t                       </a>
\t\t\t                      
\t\t\t                     ";
            // line 150
            echo "\t\t    \t\t                ";
            // line 151
            echo "\t\t\t                     ";
            // line 152
            echo "\t\t\t                       
                             </td>
                             
                             
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                    </tbody>
                </table>
              <H4> Total Usuarios: ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</H4>
                <div class=\"navigation\">
                    ";
        // line 162
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d51024efae280f533e5671c847de99fe6ff794010235c71b9342a916a18d8dbb->leave($__internal_d51024efae280f533e5671c847de99fe6ff794010235c71b9342a916a18d8dbb_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 162,  353 => 160,  349 => 158,  338 => 152,  336 => 151,  334 => 150,  327 => 145,  324 => 144,  322 => 143,  316 => 139,  313 => 138,  311 => 137,  304 => 133,  301 => 131,  295 => 127,  289 => 123,  285 => 122,  283 => 121,  280 => 120,  278 => 119,  274 => 118,  270 => 117,  266 => 116,  262 => 115,  255 => 110,  247 => 109,  245 => 108,  241 => 106,  233 => 105,  231 => 104,  227 => 102,  221 => 101,  219 => 100,  210 => 95,  206 => 94,  196 => 87,  192 => 86,  188 => 85,  184 => 84,  171 => 73,  164 => 70,  156 => 66,  147 => 64,  142 => 63,  140 => 62,  124 => 48,  113 => 46,  109 => 45,  104 => 43,  90 => 32,  84 => 28,  73 => 26,  69 => 25,  64 => 23,  51 => 13,  44 => 8,  40 => 5,  34 => 4,  11 => 1,);
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
{# include('CYAYogaBundle:Usuario:messages/success.html.twig')#}
{# include('CYAYogaBundle:Usuario:messages/danger.html.twig')#}
    <div class=\"container-fluid alumnos\">
        <div class=\"container alumnos-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2><i class=\"fa fa-users\"></i> Listado de Usuarios </h2>
                    <a href=\"{{ path('cya_usuario_add') }}\" class=\"head-link\">
        \t\t\t        <h3>
        \t\t\t            <span><i class=\"icon ion-android-person-add\"></i></span>
        \t\t\t            agregar nuevo usuario
        \t\t\t         </h3>
        \t\t\t    </a>
                </div>
                <div class=\"col-sm-7\">
                    <form method=\"get\" action=\"\" class=\"form-inline pull-right\" role=\"search\">
                    \t<div class=\"form-group\">
                            <select class=\"selectpicker\" data-live-search=\"true\" id=\"usuariot\" name=\"usuariot\" value=\"{{ app.request.get('usuariot') }}\">
                                <option value=\"\" selected disabled>Usuario</option>
                                {% for us in usuariot %}
                                    <option value=\"{{ us.id }}\">{{ us.nombrecompleto }}</option>
                                {% endfor %}
                             </select>
                        </div>
        \t\t\t\t
        \t\t\t\t<div class=\"form-group select-class\">
                          <select class=\"form-control\" id=\"estado\"name=\"estado\" value=\"{{ app.request.get('estado') }}\">
                            <option value=\"3\">Todos</option>
                            <option value=\"1\">Activos</option>
                            <option value=\"0\">Inactivos</option>
                          </select>
                        </div>
                        
                        <br>
                        <br>
                        
                        <div class=\"form-group select-class\">
                            <select class=\"form-control\" id=\"tipocuota\" name=\"tipocuota\" value=\"{{ app.request.get('tipocuota') }}\">
                                <option value=\"\" selected disabled>Buscar por Tipo de cuota</option>
                                {% for tc in tipocuotas %}
                                    <option value=\"{{ tc.id }}\">{{ tc.nombre }}</option>
                                {% endfor %}
                             </select>
                        </div>
                        
        \t\t\t\t
        \t\t\t\t<input type=\"submit\" value=\"Buscar\" class=\"btn btn-default\" >
        \t\t\t</form>
                </div>
            </div>
        </div>
    </div>
           
            
\t<div class=\"container\">
\t    
\t    {% if  pagination.getTotalItemCount < 1000 %}
\t                  {% for usuario in pagination |slice(0,1)  %}
\t                <H4>  <b>   {{ usuario.tipocuota.nombre }} </b> </H4>
\t                   {% endfor %}
\t                  <H4> <b>Total Usuarios:</b>  {{ pagination.getTotalItemCount }} </H4>
\t                 
\t                  
                <div class=\"navigation\">
                    {{ knp_pagination_render(pagination) }}
                </div>
                
        {% endif %}        
                
                
\t    <div class=\"row well\">
\t    \t
\t    <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>

\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Usuario', 'u.apellido') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'DNI', 'u.dni') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Teléfono', 'u.telefono') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Mail', 'u.mail') }}</th>
\t\t\t\t\t\t\t<th>Tipo de Cuota</th>
\t\t\t\t\t\t\t<th>Estado</th>
                            <th align = \"right\">      Acciones  </th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for usuario in pagination %}
                            <tr data-id=\"{{ usuario.id }}\">
                                
                                
                                <td colspan=\"1\"> 
                                
                                {% if usuario.brochure != null %}
                                <img src=\"{{ asset('web/uploads/brochures'~'/'~usuario.brochure) }}\" class=\"avatar-tabla\" />  
                                 {% endif %} 
                                 
                                 <td>{% if usuario.isActive == 1 %}
                                <b> <span class=\"text-success\"> {{ usuario.apellido }}, {{ usuario.nombre }} </span>
                                  {% endif %} 
                                 
                                 {% if usuario.isActive == 0 %}
                                <b> <span class=\"text-danger\"> {{ usuario.apellido }}, {{ usuario.nombre }} </span>
                                  {% endif %} 
                                    
                                  
                                </td>
                                
                                 <td>{{ usuario.dni }}</td>
                                 <td>{{ usuario.telefono }}</td>
                                 <td>{{ usuario.mail }}</td>
                                <td>{{ usuario.tipocuota.nombre }}</td>
                                <td>{% if usuario.isActive == 1 %}
\t\t\t\t\t               <b>   <span class=\"text-success\">Activo</span></b>
\t\t\t\t                      {% elseif usuario.isActive == 0 %}
\t\t\t\t\t\t            <b> <span class=\"text-danger\">Inactivo</span> </b>
                                \t{% endif %}</td>
                               
                               
                                <td class=\"actions\" style = \"width:20%;\" align = \"center\" >
                                    <a href=\"{{ path('cya_usuario_view', {id: usuario.id }) }}\" title = \"Detalle\"  class=\"btn btn-warning\">
                                        <i class=\"fa fa-search\"></i> 
                                    </a>
                                {#  </td>#}
                                
                                {#<td class=\"actions\">    #}
                                    <a href=\"{{ path('cya_usuario_edit', {id: usuario.id }) }}\"  class=\"btn btn-success\" title = \"Editar\">
                                        <i class=\"fa fa-pencil\"></i> 
                                    </a>
                                {#   </td>#}
                                {#<td class=\"actions\">    #}
                                   
                                      <a href=\"{{ path('cya_usuario_editpass', {id: usuario.id }) }}\" class=\"btn btn-danger\" title= \"Cambiar Password\">
                                        <i class=\"fa fa-key\"></i> 
                                    </a>
                                {# </td>#}
                                {#<td class=\"actions\">    #}
                                
                                   <a href=\"{{ path('cya_usuario_imprimircuota', { id: usuario.id }) }}\" class=\"btn btn-success\" title = \"Imprimir Cuota\">
\t\t    \t\t                <span class=\"fa fa-print\"></span>
\t\t\t                       </a>
\t\t\t                      
\t\t\t                     {# <a href=\"{{ path('cya_cursada_add', { id: usuario.id }) }}\" class=\"btn btn-primary\" title = \"Inscribir a Curso/Materias\">#}
\t\t    \t\t                {#<span class=\"fa fa-graduation-cap\"></span>#}
\t\t\t                     {#  </a> #}
\t\t\t                       
                             </td>
                             
                             
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
              <H4> Total Usuarios: {{ pagination.getTotalItemCount }}</H4>
                <div class=\"navigation\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "CYAYogaBundle:Usuario:index.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Usuario/index.html.twig");
    }
}
