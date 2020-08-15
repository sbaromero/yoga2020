<?php

/* menu.html.twig */
class __TwigTemplate_b5a44bc7c135be07a0fa3ee9f5ba17be4c70e4a26de59c008d778de97698da9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_978b42d190cf5f21b40f00e741ccb117eacf38356263a8b570785d053054dba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978b42d190cf5f21b40f00e741ccb117eacf38356263a8b570785d053054dba3->enter($__internal_978b42d190cf5f21b40f00e741ccb117eacf38356263a8b570785d053054dba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container-fluid container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_inicio");
        echo "\"> 
                <i class=\"icon ion-android-home\"></i>
                <span>Inicio</span>
            </a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-left\">
                ";
        // line 18
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 19
            echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    
                    <div class=\"change\"><i class=\"fa fa-users\"></i> &nbsp;Usuarios</div><div class=\"icon1\"></div><span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_rapido");
            echo "\">Carga Rápida de Usuario</a></li>
                         <li><a href=\"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_add");
            echo "\">Nuevo Usuario</a></li>
                         <li><a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_index");
            echo "\">Listado de Usuarios</a></li>
                         <li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_tipocuota_add");
            echo "\">Nuevo Tipo de Cuota</a></li>
                        <li><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_tipocuota_index");
            echo "\">Listado de Tipos de Cuota</a></li>

                        
                    </ul>
                
                </li>
                
                     <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"change\"><i class=\"icon ion-bag\"> </i> &nbsp;Prod.</div><div class=\"icon2\"></div><span class=\"caret\"></span>
                    </a>
                     <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_tipoproducto_add");
            echo "\">Nuevo Tipo de Producto</a></li>
                        <li><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_tipoproducto_index");
            echo "\">Listado de Tipos de Productos</a></li>
                       
                        <li><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_producto_add");
            echo "\">Nuevo Producto</a></li>
                         <li><a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_producto_index");
            echo "\"> Listado de Productos</a></li>
                         <li><a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_detalleventa_add");
            echo "\">Venta de Productos</a></li>
                         <li><a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_stock_add");
            echo "\">Cargar Stock de Productos</a></li>
                         
                          <li><a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_locker_add");
            echo "\">Nuevo Locker</a></li>
                          <li><a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_locker_index");
            echo "\">Listado de Lockers</a></li>
                         
                          <li><a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_lockersocio_add");
            echo "\">Asignar Locker</a></li>
                          <li><a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_lockersocio_index");
            echo "\">Listado de Asignaciones de Lockers</a></li>

                    </ul>
                    
                    
                    
                  </li>
                  
                  <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                       
                        <div class=\"change\"><i class=\"fa fa-usd\"> </i> &nbsp;Caja</div><div class=\"icon3\"></div><span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_rubro_index");
            echo "\"> Rubros de Caja</a></li>
                          <li><a href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_movimiento_add");
            echo "\"> Nuevo Movimiento de Caja </a></li>
                          <li><a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_movimiento_index");
            echo "\"> Listado de movimientos de Caja </a></li>
                          <li><a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_caja_index");
            echo "\"> Cierres de Caja</a></li>
                        </ul>
                   </li>
                   
                   <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    
                    <div class=\"change\"><i class=\"fa fa-credit-card\"> </i> &nbsp;Cta. Cte</div><div class=\"icon4\"></div><span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                       <li><a href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_index");
            echo "\">Listado Cta. Cte. y Cuotas</a></li>
                        <li><a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_pagodiario");
            echo "\">Pago diario clase de yoga</a></li>
                        <li><a href=\"";
            // line 79
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_indexdeuda");
            echo "\">Listado de Deuda de Alumnos</a></li>
                        <li><a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_proveedor_index");
            echo "\">Proveedores</a></li>
                        <li><a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_proveedorcc_index");
            echo "\">CC. con Proveedores</a></li>
                        </li>
                   
                        
                        
                   </ul>
                   </li>
                   
                   ";
            // line 90
            echo "                   ";
            // line 91
            echo "                    
                   ";
            // line 93
            echo "                   ";
            // line 94
            echo "                   ";
            // line 95
            echo "                   ";
            // line 96
            echo "                   ";
            // line 97
            echo "                   ";
            // line 98
            echo "                   ";
            // line 99
            echo "                   ";
            // line 100
            echo "                   
                   
    
                   
                   
                   ";
        }
        // line 106
        echo "                   ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 107
            echo "                   
                       <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                   
                            Usuario<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_editpublic");
            echo "\">Editar datos personales</a></li>
                            </ul>
                       
                       </li>
                       <li></li> <li></li>
                       <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            
                            Cuenta corriente<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 123
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_indexpublic");
            echo "\">Ver Resumen</a></li>

                           </ul>
                          </li>
                   ";
        }
        // line 128
        echo "                   
            </ul>
            
            
            
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"drop-fix\">
  
                        ";
        // line 137
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "brochure", array())) {
            // line 138
            echo "                        <span class=\"avatar\">
                            <img src=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("web/uploads/brochures" . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "brochure", array()))), "html", null, true);
            echo "\"class=\"avatar-tabla\" /> 
                        </span>
                        ";
        } else {
            // line 142
            echo "                         <span class=\"avatar\">
                         <img src=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/img/avatar.jpg"), "html", null, true);
            echo "\"class=\"avatar-tabla\"/> 
                           </span>
                        ";
        }
        // line 146
        echo "                        <div class=\"change\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</div>
                    </a>
                      
                </li>
                <li><a href=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_yoga_logout");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Cerrar sesión\"><i class=\"icon ion-close-circled\"></i></a></li>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_978b42d190cf5f21b40f00e741ccb117eacf38356263a8b570785d053054dba3->leave($__internal_978b42d190cf5f21b40f00e741ccb117eacf38356263a8b570785d053054dba3_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 150,  280 => 146,  274 => 143,  271 => 142,  265 => 139,  262 => 138,  260 => 137,  249 => 128,  241 => 123,  228 => 113,  220 => 107,  217 => 106,  209 => 100,  207 => 99,  205 => 98,  203 => 97,  201 => 96,  199 => 95,  197 => 94,  195 => 93,  192 => 91,  190 => 90,  179 => 81,  175 => 80,  171 => 79,  167 => 78,  163 => 77,  151 => 68,  147 => 67,  143 => 66,  139 => 65,  123 => 52,  119 => 51,  114 => 49,  110 => 48,  105 => 46,  101 => 45,  97 => 44,  93 => 43,  88 => 41,  84 => 40,  69 => 28,  65 => 27,  61 => 26,  57 => 25,  53 => 24,  46 => 19,  44 => 18,  33 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container-fluid container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ path(\"cya_usuario_inicio\") }}\"> 
                <i class=\"icon ion-android-home\"></i>
                <span>Inicio</span>
            </a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-left\">
                {% if is_granted('ROLE_SUPER') or is_granted('ROLE_ADMIN') %}
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    
                    <div class=\"change\"><i class=\"fa fa-users\"></i> &nbsp;Usuarios</div><div class=\"icon1\"></div><span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('cya_usuario_rapido') }}\">Carga Rápida de Usuario</a></li>
                         <li><a href=\"{{ path('cya_usuario_add') }}\">Nuevo Usuario</a></li>
                         <li><a href=\"{{ path('cya_usuario_index') }}\">Listado de Usuarios</a></li>
                         <li><a href=\"{{ path('cya_tipocuota_add') }}\">Nuevo Tipo de Cuota</a></li>
                        <li><a href=\"{{ path('cya_tipocuota_index') }}\">Listado de Tipos de Cuota</a></li>

                        
                    </ul>
                
                </li>
                
                     <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"change\"><i class=\"icon ion-bag\"> </i> &nbsp;Prod.</div><div class=\"icon2\"></div><span class=\"caret\"></span>
                    </a>
                     <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('cya_tipoproducto_add') }}\">Nuevo Tipo de Producto</a></li>
                        <li><a href=\"{{ path('cya_tipoproducto_index') }}\">Listado de Tipos de Productos</a></li>
                       
                        <li><a href=\"{{ path('cya_producto_add') }}\">Nuevo Producto</a></li>
                         <li><a href=\"{{ path('cya_producto_index') }}\"> Listado de Productos</a></li>
                         <li><a href=\"{{ path('cya_detalleventa_add') }}\">Venta de Productos</a></li>
                         <li><a href=\"{{ path('cya_stock_add') }}\">Cargar Stock de Productos</a></li>
                         
                          <li><a href=\"{{ path('cya_locker_add') }}\">Nuevo Locker</a></li>
                          <li><a href=\"{{ path('cya_locker_index') }}\">Listado de Lockers</a></li>
                         
                          <li><a href=\"{{ path('cya_lockersocio_add') }}\">Asignar Locker</a></li>
                          <li><a href=\"{{ path('cya_lockersocio_index') }}\">Listado de Asignaciones de Lockers</a></li>

                    </ul>
                    
                    
                    
                  </li>
                  
                  <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                       
                        <div class=\"change\"><i class=\"fa fa-usd\"> </i> &nbsp;Caja</div><div class=\"icon3\"></div><span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"{{ path('cya_rubro_index') }}\"> Rubros de Caja</a></li>
                          <li><a href=\"{{ path('cya_movimiento_add') }}\"> Nuevo Movimiento de Caja </a></li>
                          <li><a href=\"{{ path('cya_movimiento_index') }}\"> Listado de movimientos de Caja </a></li>
                          <li><a href=\"{{ path('cya_caja_index') }}\"> Cierres de Caja</a></li>
                        </ul>
                   </li>
                   
                   <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    
                    <div class=\"change\"><i class=\"fa fa-credit-card\"> </i> &nbsp;Cta. Cte</div><div class=\"icon4\"></div><span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                       <li><a href=\"{{ path('cya_alumnocc_index') }}\">Listado Cta. Cte. y Cuotas</a></li>
                        <li><a href=\"{{ path('cya_alumnocc_pagodiario') }}\">Pago diario clase de yoga</a></li>
                        <li><a href=\"{{ path('cya_alumnocc_indexdeuda') }}\">Listado de Deuda de Alumnos</a></li>
                        <li><a href=\"{{ path('cya_proveedor_index') }}\">Proveedores</a></li>
                        <li><a href=\"{{ path('cya_proveedorcc_index') }}\">CC. con Proveedores</a></li>
                        </li>
                   
                        
                        
                   </ul>
                   </li>
                   
                   {# <li class=\"dropdown\">#}
                   {# <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
                    
                   {# <div class=\"change\"><i class=\"fa fa-graduation-cap\"> </i> &nbsp;Cursos</div><div class=\"icon5\"></div><span class=\"caret\"></span></a>#}
                   {# <ul class=\"dropdown-menu\">#}
                   {#     <li><a href=\"{{ path('cya_curso_index') }}\">Listado de Cursos</a></li>#}
                   {#     <li><a href=\"{{ path('cya_materia_index') }}\">Listado de Módulos</a></li>#}
                   {#      <li><a href=\"{{ path('cya_tema_index') }}\">Temas por Módulos</a></li>#}
                   {#     <li><a href=\"{{ path('cya_cursada_index') }}\">Inscripciones a Cursar</a></li>#}
                   {#    <li><a href=\"{{ path('cya_cursada_index') }}\">Inscripciones a Rendir</a></li>#}
                   {#</ul>#}
                   
                   
    
                   
                   
                   {% endif %}
                   {% if is_granted('ROLE_USER') %}
                   
                       <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                   
                            Usuario<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ path('cya_usuario_editpublic') }}\">Editar datos personales</a></li>
                            </ul>
                       
                       </li>
                       <li></li> <li></li>
                       <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            
                            Cuenta corriente<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ path('cya_alumnocc_indexpublic') }}\">Ver Resumen</a></li>

                           </ul>
                          </li>
                   {% endif %}
                   
            </ul>
            
            
            
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"drop-fix\">
  
                        {% if (app.user.brochure) %}
                        <span class=\"avatar\">
                            <img src=\"{{ asset('web/uploads/brochures'~'/'~ app.user.brochure) }}\"class=\"avatar-tabla\" /> 
                        </span>
                        {% else %}
                         <span class=\"avatar\">
                         <img src=\"{{ asset('public/img/avatar.jpg') }}\"class=\"avatar-tabla\"/> 
                           </span>
                        {% endif %}
                        <div class=\"change\">{{ app.user.username }}</div>
                    </a>
                      
                </li>
                <li><a href=\"{{ path('cya_yoga_logout') }}\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Cerrar sesión\"><i class=\"icon ion-close-circled\"></i></a></li>
            </ul>
        </div>
    </div>
</nav>", "menu.html.twig", "/home/ubuntu/environment/app/Resources/views/menu.html.twig");
    }
}