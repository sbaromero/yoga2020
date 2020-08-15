<?php

/* CYAYogaBundle:Alumnocc:index.html.twig */
class __TwigTemplate_4af84fe132226e0dd44d541dd07ad9cfa7365ed6ca9000671831f711c5290e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Alumnocc:index.html.twig", 1);
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
        $__internal_6be909e1001f31e26dbd8599fb3afb3f1378eb8041458c69b3910c46eb27cc22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be909e1001f31e26dbd8599fb3afb3f1378eb8041458c69b3910c46eb27cc22->enter($__internal_6be909e1001f31e26dbd8599fb3afb3f1378eb8041458c69b3910c46eb27cc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Alumnocc:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6be909e1001f31e26dbd8599fb3afb3f1378eb8041458c69b3910c46eb27cc22->leave($__internal_6be909e1001f31e26dbd8599fb3afb3f1378eb8041458c69b3910c46eb27cc22_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_279a058244fb139e718d3a2b9fa7b2406c638e7e69af966d43d8c73bcc4205e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279a058244fb139e718d3a2b9fa7b2406c638e7e69af966d43d8c73bcc4205e3->enter($__internal_279a058244fb139e718d3a2b9fa7b2406c638e7e69af966d43d8c73bcc4205e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Alumnocc:index.html.twig"));

        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 6
        echo twig_include($this->env, $context, "CYAYogaBundle:Alumnocc:messages/success.html.twig");
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "CYAYogaBundle:Alumnocc:messages/danger.html.twig");
        echo "
    <div class=\"container-fluid cuenta\">
        <div class=\"container cuenta-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2> <i class=\"fa fa-credit-card\" aria-hidden=\"true\"></i> &nbsp; Cuentas Corrientes de Alumnos </h2>
                   <h4>Leyenda: pc (pago cuota)  - cc (cuota cancel.) - vp (venta producto) - pd (pago diario) - ge (generada) </h4>
                
                
                
                

             
             
                </div>
                
                   
                       
                <div class=\"col-sm-7\">
                    <form method=\"get\" action=\"\" class=\"form-inline pull-right\" role=\"search\">
                        
                        <div class=\"form-group select-class\">
                          <select class=\"form-control\" id=\"pago\" name=\"pago\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "pago"), "method"), "html", null, true);
        echo "\">
                            <option value=\"\" selected disabled>Tipo</option>
                            <option value=\"\">Todas</option>
                            <option value=\"S\">Pagas</option>
                            <option value=\"N\">No pagas</option>
                          </select>
                        </div>
                        
        \t\t\t\t<div class=\"form-group\">
                            <select class=\"selectpicker\" data-live-search=\"true\" id=\"usuario\" name=\"usuario\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "usuario"), "method"), "html", null, true);
        echo "\">
                                <option value=\"\" selected disabled>Usuario</option>
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
            // line 41
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "nombrecompleto", array()), "html", null, true);
            echo " </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                             </select>
                        </div>

        \t\t\t\t<input type=\"submit\" value=\"Buscar\" class=\"btn btn-success\">
        \t\t\t</form>
        \t\t
                </div>
                \t 
            </div>
                      
                       
                       
        </div>
          
    </div>
          
            <div class=\"container\">
                   <div class=\"row well\"align ='right'>
                        <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_generarcuota");
        echo "\" class=\"btn btn-success\"  > Generar Cuotas Pendientes </a>
                      
    &nbsp;
                      
                        <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_generacc");
        echo "\" class=\"btn btn-success\"  > Generar CC  </a>
                       </div>
\t
\t
\t";
        // line 69
        if (((isset($context["datosuser"]) ? $context["datosuser"] : $this->getContext($context, "datosuser")) != null)) {
            // line 70
            echo "\t
\t    <div class=\"row well\">
\t                
            <h3><b>   ";
            // line 73
            if (((isset($context["datosuser"]) ? $context["datosuser"] : $this->getContext($context, "datosuser")) != null)) {
                echo "   ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosuser"]) ? $context["datosuser"] : $this->getContext($context, "datosuser")), "nombrecompleto", array()), "html", null, true);
                echo " ";
            }
            echo "     </b></h3>
                       
                    
                        <div >
                           ";
            // line 77
            if (((isset($context["datosuser"]) ? $context["datosuser"] : $this->getContext($context, "datosuser")) != null)) {
                // line 78
                echo "                           
                           ";
                // line 79
                if (($this->getAttribute((isset($context["datosuser"]) ? $context["datosuser"] : $this->getContext($context, "datosuser")), "isActive", array()) == 1)) {
                    // line 80
                    echo "                       <h4>   <b>Estado: </b> <font color=\"green\"> Activo  </font></h4>
                           ";
                }
                // line 82
                echo "                           ";
                if (($this->getAttribute((isset($context["datosuser"]) ? $context["datosuser"] : $this->getContext($context, "datosuser")), "isActive", array()) == 0)) {
                    // line 83
                    echo "                         <h4>   <b>Estado: </b> <font color=\"red\"> Inactivo </font> </h4>
                           ";
                }
                // line 85
                echo "                           
                         
                         
                          <h4> <b>Tipo de Cuota: </b> ";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datosuser"]) ? $context["datosuser"] : $this->getContext($context, "datosuser")), "tipocuota", array()), "nombre", array()), "html", null, true);
                echo " &nbsp; <b>Valor: </b>  \$ ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datosuser"]) ? $context["datosuser"] : $this->getContext($context, "datosuser")), "tipocuota", array()), "valor", array()), "html", null, true);
                echo " </h4>
                       
                           <h4>
                            ";
                // line 91
                if (($this->getAttribute((isset($context["datosuser"]) ? $context["datosuser"] : $this->getContext($context, "datosuser")), "haveasoc", array()) == 1)) {
                    // line 92
                    echo "                              <b> Asociación </b> : Sí    
                           ";
                } else {
                    // line 94
                    echo "                                 <b> Asociación </b> : No    
                           ";
                }
                // line 96
                echo "                           &nbsp;
                           ";
                // line 97
                if (($this->getAttribute((isset($context["datosuser"]) ? $context["datosuser"] : $this->getContext($context, "datosuser")), "havelocker", array()) == 1)) {
                    // line 98
                    echo "                                <b> Locker </b> : Sí    
                             ";
                } else {
                    // line 100
                    echo "                                 <b> Locker </b> : No    
                           ";
                }
                // line 101
                echo " </h4>
                           
                           
               
                      ";
            }
            // line 106
            echo "              
          
                     
          
             </div>
            
          
  
            
            </div>
            </div>
      
       
      
      <div class=\"container\">
\t    <div class=\"row well\">
         
          <H4> Total Movimientos: ";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "</H4>
          <H4> Total Deudas: ";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["deudas"]) ? $context["deudas"] : $this->getContext($context, "deudas")), "html", null, true);
            echo "</H4>
           <H4> Total Pagado: ";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["pagados"]) ? $context["pagados"] : $this->getContext($context, "pagados")), "html", null, true);
            echo "</H4>
            <H4> Total Bonificaciones: ";
            // line 126
            echo twig_escape_filter($this->env, (isset($context["bonificaciones"]) ? $context["bonificaciones"] : $this->getContext($context, "bonificaciones")), "html", null, true);
            echo "</H4>
        
          </br>
          
         
          <div align = center>
          
         ";
            // line 133
            if (((isset($context["saldo"]) ? $context["saldo"] : $this->getContext($context, "saldo")) < 0)) {
                echo "  
         <H4 >  <b> <span class=\"text-danger\">SALDO NEGATIVO: \$ ";
                // line 134
                echo twig_escape_filter($this->env, (isset($context["saldo"]) ? $context["saldo"] : $this->getContext($context, "saldo")), "html", null, true);
                echo "</span> </b>  <H4 >
         ";
            }
            // line 135
            echo "</td>  
         
          ";
            // line 137
            if (((isset($context["saldo"]) ? $context["saldo"] : $this->getContext($context, "saldo")) >= 0)) {
                echo "  
         <H4 >  <b> <span class=\"text-success\">SALDO POSITIVO: \$ ";
                // line 138
                echo twig_escape_filter($this->env, (isset($context["saldo"]) ? $context["saldo"] : $this->getContext($context, "saldo")), "html", null, true);
                echo "</span> </b>  <H4 >
         ";
            }
            // line 139
            echo "</td>  
           
           
                <div class=\"navigation\">
                    ";
            // line 143
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
                </div>
 </div>
</div>
</div> 
    ";
        }
        // line 148
        echo "   
      
            
                
\t<div class=\"container\">
\t    <div class=\"row well\">
\t    \t
\t    <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>

\t\t\t\t\t\t\t<th>";
        // line 160
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Alumno", "a.nombrecompleto");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 161
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha de Reingreso", "a.fechavencimiento");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 162
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cuota Mes", "a.deuda");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 163
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Debe", "a.deuda");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 164
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Pagado", "a.pagado");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 165
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Bonificación", "a.bonificacion");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 166
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Modificacion", "a.fechamodificacion");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 167
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Tipo", "a.tipo");
        echo "</th>
\t\t\t\t\t\t\t<th align=center>";
        // line 168
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Comentario", "a.comentario");
        echo "</th>
                            <th>";
        // line 169
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Ticket", "a.ticket");
        echo "</th>
                            
                            <th>Acciones</th>
                   
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumnocc"]) {
            // line 177
            echo "                            <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumnocc"], "id", array()), "html", null, true);
            echo "\">
                                
                                <td>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumnocc"], "usuario", array()), "apellido", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumnocc"], "usuario", array()), "nombre", array()), "html", null, true);
            echo " </td>
                                <td>";
            // line 180
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["alumnocc"], "usuario", array()), "fechareingreso", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumnocc"], "mes", array()), "html", null, true);
            echo "</td>

                                <td>";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumnocc"], "deuda", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumnocc"], "pagado", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumnocc"], "bonificacion", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 186
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alumnocc"], "fechamodificacion", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumnocc"], "tipo", array()), "html", null, true);
            echo "</td>
                               <h6> <td>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumnocc"], "comentario", array()), "html", null, true);
            echo "</td> </h6>
                               <td>";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumnocc"], "ticket", array()), "html", null, true);
            echo "</td>
                               
                                <td class=\"actions\" style = \"width:100%;\">
                                   
                                    <a href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_detallepago", array("id" => $this->getAttribute($context["alumnocc"], "id", array()))), "html", null, true);
            echo "\" 
                                    ";
            // line 194
            if ((($this->getAttribute($context["alumnocc"], "pagado", array()) == 0) || ($this->getAttribute($context["alumnocc"], "tipo", array()) != "VP"))) {
                // line 195
                echo "                                        class=\"btn btn-warning disabled\"
                                    
                                    ";
            } elseif ((($this->getAttribute(            // line 197
$context["alumnocc"], "pagado", array()) > 0) || ($this->getAttribute($context["alumnocc"], "tipo", array()) == "VP"))) {
                echo " 
                                        class=\"btn btn-warning\"
                                    ";
            }
            // line 199
            echo " title = \"Detalle\">
                                          <i class=\"fa fa-search\"></i>
                                        
                                    </a>
                                    
                                    <a href=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_pago", array("id" => $this->getAttribute($context["alumnocc"], "id", array()))), "html", null, true);
            echo "\"
                                        ";
            // line 205
            if (($this->getAttribute($context["alumnocc"], "deuda", array()) <= ($this->getAttribute($context["alumnocc"], "pagado", array()) + $this->getAttribute($context["alumnocc"], "bonificacion", array())))) {
                // line 206
                echo "                                            class=\"btn btn-success disabled\"
                                        ";
            } elseif (($this->getAttribute(            // line 207
$context["alumnocc"], "deuda", array()) > ($this->getAttribute($context["alumnocc"], "pagado", array()) + $this->getAttribute($context["alumnocc"], "bonificacion", array())))) {
                echo " 
                                            class=\"btn btn-success\"
                                        ";
            }
            // line 209
            echo "  title = \"Pagar\">
                                       <i class=\"fa fa-usd\"></i> 
                                       
                                    </a>
                                    
                                    <a href=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_delete", array("id" => $this->getAttribute($context["alumnocc"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Está seguro??')\"
\t\t\t                            ";
            // line 215
            if (($this->getAttribute($context["alumnocc"], "tipo", array()) == "CC")) {
                // line 216
                echo "                                            class=\"btn btn btn-danger btn-delete\"
                                        ";
            } elseif (($this->getAttribute(            // line 217
$context["alumnocc"], "tipo", array()) == "PD")) {
                echo " 
                                            class=\"btn btn btn-danger btn-delete\"
                                        ";
            } elseif (($this->getAttribute(            // line 219
$context["alumnocc"], "tipo", array()) == "VP")) {
                echo " 
                                            class=\"btn btn btn-danger btn-delete\"
                                             ";
            } elseif (($this->getAttribute(            // line 221
$context["alumnocc"], "tipo", array()) == "GE")) {
                echo " 
                                            class=\"btn btn btn-danger btn-delete\"
                                        ";
            } elseif (($this->getAttribute(            // line 223
$context["alumnocc"], "tipo", array()) == "PC")) {
                // line 224
                echo "                                         class=\"btn btn btn-danger btn-delete\"   
                                         
                                        ";
            }
            // line 226
            echo "  title = \"Eliminar\">
                                        
\t\t\t                           <i class=\"fa fa-trash\"></i>
\t\t\t                        </a>
\t\t\t                        
\t\t\t                        
\t\t\t                         <a href=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_ticket", array("id" => $this->getAttribute($context["alumnocc"], "id", array()))), "html", null, true);
            echo "\"
                                        class=\"btn btn-success\"
                                         title = \"Ticket Entregado\">
                                       <i class=\"fa fa-check\"></i> 
                                       
                                    </a>
\t\t\t                        
\t\t\t                        
\t\t\t                      
\t\t\t                         <th>
\t\t\t                        
\t\t\t                             
\t\t\t                           ";
            // line 244
            if (($this->getAttribute($context["alumnocc"], "pagado", array()) > 0)) {
                // line 245
                echo "\t\t\t                     
\t\t\t                          
    \t\t\t                     ";
                // line 247
                $context["mez"] = $this->getAttribute($context["alumnocc"], "mes", array());
                // line 248
                echo "                                     ";
                $context["mez"] = twig_replace_filter((isset($context["mez"]) ? $context["mez"] : $this->getContext($context, "mez")), array("/" => "-"));
                // line 249
                echo "                                    
                                     ";
                // line 250
                if (((isset($context["mez"]) ? $context["mez"] : $this->getContext($context, "mez")) == null)) {
                    // line 251
                    echo "                                     ";
                    $context["mez"] = "_";
                    // line 252
                    echo "                                     ";
                }
                // line 253
                echo "
                                        
\t\t\t                         <a href=\"";
                // line 255
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_imprimircuota2", array("id" => $this->getAttribute($this->getAttribute($context["alumnocc"], "usuario", array()), "id", array()), "valorcuota" => $this->getAttribute($context["alumnocc"], "pagado", array()), "mes" => (isset($context["mez"]) ? $context["mez"] : $this->getContext($context, "mez")), "cc" => $this->getAttribute($context["alumnocc"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
\t\t\t    \t                 <span class=\"icon ion-print\"></span>
\t\t\t        \t             Impr. (Pagó: \$ ";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumnocc"], "pagado", array()), "html", null, true);
                echo ")
\t\t\t\t\t                  </a>
\t\t\t\t\t                     ";
            }
            // line 259
            echo " 
\t\t\t                        <th>
                                     </td>
                                 
                                 
                                
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumnocc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                        
                        
                    </tbody>
                </table>
         
                   </div>
        </div>
    </div>  
    
   

";
        
        $__internal_279a058244fb139e718d3a2b9fa7b2406c638e7e69af966d43d8c73bcc4205e3->leave($__internal_279a058244fb139e718d3a2b9fa7b2406c638e7e69af966d43d8c73bcc4205e3_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Alumnocc:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 267,  548 => 259,  542 => 257,  537 => 255,  533 => 253,  530 => 252,  527 => 251,  525 => 250,  522 => 249,  519 => 248,  517 => 247,  513 => 245,  511 => 244,  496 => 232,  488 => 226,  483 => 224,  481 => 223,  476 => 221,  471 => 219,  466 => 217,  463 => 216,  461 => 215,  457 => 214,  450 => 209,  444 => 207,  441 => 206,  439 => 205,  435 => 204,  428 => 199,  422 => 197,  418 => 195,  416 => 194,  412 => 193,  405 => 189,  401 => 188,  397 => 187,  393 => 186,  389 => 185,  385 => 184,  381 => 183,  376 => 181,  372 => 180,  366 => 179,  360 => 177,  356 => 176,  346 => 169,  342 => 168,  338 => 167,  334 => 166,  330 => 165,  326 => 164,  322 => 163,  318 => 162,  314 => 161,  310 => 160,  296 => 148,  287 => 143,  281 => 139,  276 => 138,  272 => 137,  268 => 135,  263 => 134,  259 => 133,  249 => 126,  245 => 125,  241 => 124,  237 => 123,  218 => 106,  211 => 101,  207 => 100,  203 => 98,  201 => 97,  198 => 96,  194 => 94,  190 => 92,  188 => 91,  180 => 88,  175 => 85,  171 => 83,  168 => 82,  164 => 80,  162 => 79,  159 => 78,  157 => 77,  146 => 73,  141 => 70,  139 => 69,  132 => 65,  125 => 61,  105 => 43,  94 => 41,  90 => 40,  85 => 38,  73 => 29,  48 => 7,  44 => 6,  40 => 5,  34 => 4,  11 => 1,);
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
{{ include('CYAYogaBundle:Alumnocc:messages/success.html.twig')}}
{{ include('CYAYogaBundle:Alumnocc:messages/danger.html.twig')}}
    <div class=\"container-fluid cuenta\">
        <div class=\"container cuenta-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2> <i class=\"fa fa-credit-card\" aria-hidden=\"true\"></i> &nbsp; Cuentas Corrientes de Alumnos </h2>
                   <h4>Leyenda: pc (pago cuota)  - cc (cuota cancel.) - vp (venta producto) - pd (pago diario) - ge (generada) </h4>
                
                
                
                

             
             
                </div>
                
                   
                       
                <div class=\"col-sm-7\">
                    <form method=\"get\" action=\"\" class=\"form-inline pull-right\" role=\"search\">
                        
                        <div class=\"form-group select-class\">
                          <select class=\"form-control\" id=\"pago\" name=\"pago\" value=\"{{ app.request.get('pago') }}\">
                            <option value=\"\" selected disabled>Tipo</option>
                            <option value=\"\">Todas</option>
                            <option value=\"S\">Pagas</option>
                            <option value=\"N\">No pagas</option>
                          </select>
                        </div>
                        
        \t\t\t\t<div class=\"form-group\">
                            <select class=\"selectpicker\" data-live-search=\"true\" id=\"usuario\" name=\"usuario\" value=\"{{ app.request.get('usuario') }}\">
                                <option value=\"\" selected disabled>Usuario</option>
                                {% for us in usuarios %}
                                    <option value=\"{{ us.id }}\">{{ us.nombrecompleto }} </option>
                                {% endfor %}
                             </select>
                        </div>

        \t\t\t\t<input type=\"submit\" value=\"Buscar\" class=\"btn btn-success\">
        \t\t\t</form>
        \t\t
                </div>
                \t 
            </div>
                      
                       
                       
        </div>
          
    </div>
          
            <div class=\"container\">
                   <div class=\"row well\"align ='right'>
                        <a href=\"{{ path('cya_usuario_generarcuota') }}\" class=\"btn btn-success\"  > Generar Cuotas Pendientes </a>
                      
    &nbsp;
                      
                        <a href=\"{{ path('cya_alumnocc_generacc') }}\" class=\"btn btn-success\"  > Generar CC  </a>
                       </div>
\t
\t
\t{% if datosuser != null %}
\t
\t    <div class=\"row well\">
\t                
            <h3><b>   {% if datosuser != null %}   {{datosuser.nombrecompleto}} {% endif %}     </b></h3>
                       
                    
                        <div >
                           {% if datosuser != null %}
                           
                           {% if datosuser.isActive == 1 %}
                       <h4>   <b>Estado: </b> <font color=\"green\"> Activo  </font></h4>
                           {% endif %}
                           {% if datosuser.isActive == 0 %}
                         <h4>   <b>Estado: </b> <font color=\"red\"> Inactivo </font> </h4>
                           {% endif %}
                           
                         
                         
                          <h4> <b>Tipo de Cuota: </b> {{datosuser.tipocuota.nombre}} &nbsp; <b>Valor: </b>  \$ {{datosuser.tipocuota.valor}} </h4>
                       
                           <h4>
                            {% if datosuser.haveasoc == 1 %}
                              <b> Asociación </b> : Sí    
                           {% else %}
                                 <b> Asociación </b> : No    
                           {% endif %}
                           &nbsp;
                           {% if datosuser.havelocker == 1 %}
                                <b> Locker </b> : Sí    
                             {% else %}
                                 <b> Locker </b> : No    
                           {% endif %} </h4>
                           
                           
               
                      {% endif %}
              
          
                     
          
             </div>
            
          
  
            
            </div>
            </div>
      
       
      
      <div class=\"container\">
\t    <div class=\"row well\">
         
          <H4> Total Movimientos: {{ contador }}</H4>
          <H4> Total Deudas: {{ deudas }}</H4>
           <H4> Total Pagado: {{ pagados }}</H4>
            <H4> Total Bonificaciones: {{ bonificaciones }}</H4>
        
          </br>
          
         
          <div align = center>
          
         {% if saldo < 0 %}  
         <H4 >  <b> <span class=\"text-danger\">SALDO NEGATIVO: \$ {{ saldo }}</span> </b>  <H4 >
         {% endif %}</td>  
         
          {% if saldo >= 0 %}  
         <H4 >  <b> <span class=\"text-success\">SALDO POSITIVO: \$ {{ saldo }}</span> </b>  <H4 >
         {% endif %}</td>  
           
           
                <div class=\"navigation\">
                    {{ knp_pagination_render(pagination) }}
                </div>
 </div>
</div>
</div> 
    {% endif %}   
      
            
                
\t<div class=\"container\">
\t    <div class=\"row well\">
\t    \t
\t    <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>

\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Alumno', 'a.nombrecompleto') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Fecha de Reingreso', 'a.fechavencimiento') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Cuota Mes', 'a.deuda') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Debe', 'a.deuda') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Pagado', 'a.pagado') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Bonificación', 'a.bonificacion') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Modificacion', 'a.fechamodificacion') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Tipo', 'a.tipo') }}</th>
\t\t\t\t\t\t\t<th align=center>{{ knp_pagination_sortable(pagination, 'Comentario', 'a.comentario') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Ticket', 'a.ticket') }}</th>
                            
                            <th>Acciones</th>
                   
                        </tr>
                    </thead>
                    <tbody>
                        {% for alumnocc in pagination %}
                            <tr data-id=\"{{ alumnocc.id }}\">
                                
                                <td>{{ alumnocc.usuario.apellido }}, {{ alumnocc.usuario.nombre }} </td>
                                <td>{{ alumnocc.usuario.fechareingreso |date('d/m/Y') }}</td>
                                <td>{{ alumnocc.mes }}</td>

                                <td>{{ alumnocc.deuda }}</td>
                                <td>{{ alumnocc.pagado }}</td>
                                <td>{{ alumnocc.bonificacion }}</td>
                                <td>{{ alumnocc.fechamodificacion |date('d/m/Y') }}</td>
                                <td>{{ alumnocc.tipo }}</td>
                               <h6> <td>{{ alumnocc.comentario }}</td> </h6>
                               <td>{{ alumnocc.ticket }}</td>
                               
                                <td class=\"actions\" style = \"width:100%;\">
                                   
                                    <a href=\"{{ path('cya_alumnocc_detallepago', {id: alumnocc.id }) }}\" 
                                    {% if alumnocc.pagado == 0 or alumnocc.tipo != 'VP' %}
                                        class=\"btn btn-warning disabled\"
                                    
                                    {% elseif alumnocc.pagado > 0 or alumnocc.tipo == 'VP' %} 
                                        class=\"btn btn-warning\"
                                    {% endif %} title = \"Detalle\">
                                          <i class=\"fa fa-search\"></i>
                                        
                                    </a>
                                    
                                    <a href=\"{{ path('cya_alumnocc_pago', {id: alumnocc.id }) }}\"
                                        {% if alumnocc.deuda <= (alumnocc.pagado + alumnocc.bonificacion)  %}
                                            class=\"btn btn-success disabled\"
                                        {% elseif alumnocc.deuda > (alumnocc.pagado + alumnocc.bonificacion) %} 
                                            class=\"btn btn-success\"
                                        {% endif %}  title = \"Pagar\">
                                       <i class=\"fa fa-usd\"></i> 
                                       
                                    </a>
                                    
                                    <a href=\"{{ path('cya_alumnocc_delete', {id: alumnocc.id }) }}\" onclick=\"return confirm('Está seguro??')\"
\t\t\t                            {% if alumnocc.tipo == 'CC' %}
                                            class=\"btn btn btn-danger btn-delete\"
                                        {% elseif alumnocc.tipo == 'PD' %} 
                                            class=\"btn btn btn-danger btn-delete\"
                                        {% elseif alumnocc.tipo == 'VP' %} 
                                            class=\"btn btn btn-danger btn-delete\"
                                             {% elseif alumnocc.tipo == 'GE' %} 
                                            class=\"btn btn btn-danger btn-delete\"
                                        {% elseif alumnocc.tipo == 'PC' %}
                                         class=\"btn btn btn-danger btn-delete\"   
                                         
                                        {% endif %}  title = \"Eliminar\">
                                        
\t\t\t                           <i class=\"fa fa-trash\"></i>
\t\t\t                        </a>
\t\t\t                        
\t\t\t                        
\t\t\t                         <a href=\"{{ path('cya_alumnocc_ticket', {id: alumnocc.id }) }}\"
                                        class=\"btn btn-success\"
                                         title = \"Ticket Entregado\">
                                       <i class=\"fa fa-check\"></i> 
                                       
                                    </a>
\t\t\t                        
\t\t\t                        
\t\t\t                      
\t\t\t                         <th>
\t\t\t                        
\t\t\t                             
\t\t\t                           {% if alumnocc.pagado > 0 %}
\t\t\t                     
\t\t\t                          
    \t\t\t                     {% set mez = alumnocc.mes   %}
                                     {% set mez = mez|replace({'/': '-'}) %}
                                    
                                     {% if mez == null  %}
                                     {% set mez = '_'   %}
                                     {% endif   %}

                                        
\t\t\t                         <a href=\"{{ path('cya_usuario_imprimircuota2', { id: alumnocc.usuario.id ,valorcuota:alumnocc.pagado, mes:mez, cc:alumnocc.id}) }}\" class=\"btn btn-sm btn-primary\">
\t\t\t    \t                 <span class=\"icon ion-print\"></span>
\t\t\t        \t             Impr. (Pagó: \$ {{alumnocc.pagado}})
\t\t\t\t\t                  </a>
\t\t\t\t\t                     {% endif %} 
\t\t\t                        <th>
                                     </td>
                                 
                                 
                                
                            </tr>
                        {% endfor %}
                        
                        
                    </tbody>
                </table>
         
                   </div>
        </div>
    </div>  
    
   

{% endblock %}
", "CYAYogaBundle:Alumnocc:index.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Alumnocc/index.html.twig");
    }
}
