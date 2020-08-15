<?php

/* CYAYogaBundle:Movimiento:index.html.twig */
class __TwigTemplate_ac2cf7edba797a3e449dc5c2e63af0c3dee399b869de0b15333796867f2d03f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Movimiento:index.html.twig", 1);
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
        $__internal_d0e89f44e3ff37f31064bc5a64528826accc1498827da5b3cac4b9d54be6565e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e89f44e3ff37f31064bc5a64528826accc1498827da5b3cac4b9d54be6565e->enter($__internal_d0e89f44e3ff37f31064bc5a64528826accc1498827da5b3cac4b9d54be6565e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Movimiento:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0e89f44e3ff37f31064bc5a64528826accc1498827da5b3cac4b9d54be6565e->leave($__internal_d0e89f44e3ff37f31064bc5a64528826accc1498827da5b3cac4b9d54be6565e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6effb83378960a843d4d263f823ca1b7184723b4e167884ecdbb02bb4763d46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6effb83378960a843d4d263f823ca1b7184723b4e167884ecdbb02bb4763d46d->enter($__internal_6effb83378960a843d4d263f823ca1b7184723b4e167884ecdbb02bb4763d46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Movimiento:index.html.twig"));

        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 6
        echo twig_include($this->env, $context, "CYAYogaBundle:Movimiento:messages/success.html.twig");
        echo "
<div class=\"container-fluid caja\">
        <div class=\"container caja-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2><i class=\"fa fa-usd\"></i> &nbsp; Movimientos de Caja</h2>
                    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_movimiento_add");
        echo "\" class=\"head-link\">
        \t\t\t        <h3>
        \t\t\t           <span><i class=\"icon ion-plus\"></i></span>
        \t\t\t            Nuevo movimiento
        \t\t\t         </h3>
        \t\t\t    </a>
                </div>
                <div class=\"col-sm-7\">
                    <form method=\"get\" action=\"\" class=\"form-inline pull-right\" role=\"search\">
        \t\t\t\t
        \t\t\t\t<div class=\"form-group select-class\">
                          <select class=\"form-control\" id=\"dc\"name=\"dc\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "dc"), "method"), "html", null, true);
        echo "\">
                            <option value=\"\" selected disabled>Débito/Crédito</option>
                            <option value=\"\">Todos</option>
                            <option value=\"D\">Débito</option>
                            <option value=\"C\">Crédito</option>
                          </select>
                        </div>
                        
                        <div class=\"form-group select-class\">
                          <select class=\"form-control\" id=\"tipo\"name=\"tipo\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "tipo"), "method"), "html", null, true);
        echo "\">
                            <option value=\"\" selected disabled>Tipo</option>
                            <option value=\"\">Todos</option>
                            <option value=\"MB\">Movimientos básicos</option>
                            <option value=\"CC\">Movimientos CC</option>
                            <option value=\"VP\">Venta de productos</option>
                          </select>
                        </div>
                        
                        <div class=\"form-group select-class\">
                            <select class=\"form-control\" id=\"rubro\" name=\"rubro\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "rubro"), "method"), "html", null, true);
        echo "\">
                                <option value=\"\" selected disabled>Rubro</option>
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubros"]) ? $context["rubros"] : $this->getContext($context, "rubros")));
        foreach ($context['_seq'] as $context["_key"] => $context["ru"]) {
            // line 45
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ru"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ru"], "nombre", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ru'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                             </select>
                        </div>
                        <br>
                         <br>
                        <div class=\"form-group select-class\">
                            <select class=\"form-control\" id=\"usuario\" name=\"usuario\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "usuario"), "method"), "html", null, true);
        echo "\">
                                <option value=\"\" selected disabled>Usuario (que hizo el movimiento)</option>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
            // line 55
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
        // line 57
        echo "                             </select>
                        </div>
                        
                        <div class=\"select-class2\">
                            <div class=\"form-group\">
                                    Desde
                                    <input type='date' class=\"\" id=\"fd\"name=\"fd\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "fd"), "method"), "html", null, true);
        echo "\" />
                            </div>
                            
                            <div class=\"form-group\">
                                    Hasta
                                    <input type='date' class=\"\" id=\"fh\"name=\"fh\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "fh"), "method"), "html", null, true);
        echo "\" />
                            </div>
                        
                        <input type=\"submit\" value=\"buscar\" class=\"btn btn-success\" margin-top=\"5px\">
        \t\t\t\t</div>
        \t\t\t</form>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
    \t
    \t    <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
    
    \t\t\t\t\t\t\t<th>";
        // line 86
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha", "m.fecha");
        echo "</th>
    \t\t\t\t\t\t\t <th>";
        // line 87
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "D/C", "m.rubro.tipo");
        echo "</th>
    \t\t\t\t\t\t\t<th>";
        // line 88
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Monto", "m.monto");
        echo " </th>
    \t\t\t\t\t\t\t<th>";
        // line 89
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Descripcion", "m.descripcion");
        echo " </th>
    \t\t\t\t\t\t\t<th>";
        // line 90
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Rubro", "m.rubro.nombre");
        echo "</th>
    \t\t\t\t\t\t\t<th>";
        // line 91
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Tipo", "m.tipo");
        echo "</th>
    \t\t\t\t\t\t\t<th>";
        // line 92
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Usuario", "m.usuario.nombrecompleto");
        echo "</th>
    \t\t\t\t\t\t\t<th>";
        // line 93
        echo "Acciones";
        echo "</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 99
            echo "                                <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "id", array()), "html", null, true);
            echo "\">
                                  <td>  
                                    ";
            // line 101
            if (($this->getAttribute($this->getAttribute($context["movimiento"], "rubro", array()), "tipo", array()) == "C")) {
                // line 102
                echo "                                    <span class=\"text-success\"> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["movimiento"], "fecha", array()), "d/m/Y  H:i:s"), "html", null, true);
                echo "  </span>
                                    ";
            }
            // line 104
            echo "                                     ";
            if (($this->getAttribute($this->getAttribute($context["movimiento"], "rubro", array()), "tipo", array()) == "D")) {
                // line 105
                echo "                                     <span class=\"text-danger\"> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["movimiento"], "fecha", array()), "d/m/Y  H:i:s"), "html", null, true);
                echo "  </span>
                                    ";
            }
            // line 107
            echo "                                  </td>
                                  
                                  
                                    <td>
                                        ";
            // line 111
            if (($this->getAttribute($this->getAttribute($context["movimiento"], "rubro", array()), "tipo", array()) == "C")) {
                // line 112
                echo "                                     <span class=\"text-success\">       <strong>Crédito</strong> </span>
                                        ";
            }
            // line 113
            echo "    
                                        ";
            // line 114
            if (($this->getAttribute($this->getAttribute($context["movimiento"], "rubro", array()), "tipo", array()) == "D")) {
                // line 115
                echo "                                       <span class=\"text-danger\">     <strong>Débito</strong> </span>
                                        ";
            }
            // line 116
            echo "    
                                    </td>
                                 
                                    <td>
                                    ";
            // line 120
            if (($this->getAttribute($this->getAttribute($context["movimiento"], "rubro", array()), "tipo", array()) == "C")) {
                // line 121
                echo "                               <strong>  <span class=\"text-success\"> \$ ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "monto", array()), "html", null, true);
                echo " </span> </strong>
                                     ";
            }
            // line 123
            echo "                               ";
            if (($this->getAttribute($this->getAttribute($context["movimiento"], "rubro", array()), "tipo", array()) == "D")) {
                // line 124
                echo "                               <strong>  <span class=\"text-danger\"> \$ ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "monto", array()), "html", null, true);
                echo " </span> </strong>
                                     ";
            }
            // line 126
            echo "                                    </td>
                                    
                                    
                                <td>
                                    ";
            // line 130
            if (($this->getAttribute($this->getAttribute($context["movimiento"], "rubro", array()), "tipo", array()) == "C")) {
                // line 131
                echo "                               <span class=\"text-success\">  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "descripcion", array()), "html", null, true);
                echo " </span> 
                                     ";
            }
            // line 133
            echo "                               ";
            if (($this->getAttribute($this->getAttribute($context["movimiento"], "rubro", array()), "tipo", array()) == "D")) {
                // line 134
                echo "                                <span class=\"text-danger\">  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "descripcion", array()), "html", null, true);
                echo " </span> 
                                     ";
            }
            // line 136
            echo "                                 </td>
                                    
                                   <td>
                                    ";
            // line 139
            if (($this->getAttribute($this->getAttribute($context["movimiento"], "rubro", array()), "tipo", array()) == "C")) {
                // line 140
                echo "                               <span class=\"text-success\">  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movimiento"], "rubro", array()), "nombre", array()), "html", null, true);
                echo " </span> 
                                     ";
            }
            // line 142
            echo "                               ";
            if (($this->getAttribute($this->getAttribute($context["movimiento"], "rubro", array()), "tipo", array()) == "D")) {
                // line 143
                echo "                                <span class=\"text-danger\">  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movimiento"], "rubro", array()), "nombre", array()), "html", null, true);
                echo " </span> 
                                     ";
            }
            // line 145
            echo "                                 </td>   
                             
                                    
                                    
                                    <td>
                                        
                         
                                        
                                        ";
            // line 153
            if (($this->getAttribute($context["movimiento"], "tipo", array()) == "MB")) {
                // line 154
                echo "                                            Movimiento de caja básico
                                        ";
            }
            // line 155
            echo "    
                                        ";
            // line 156
            if (($this->getAttribute($context["movimiento"], "tipo", array()) == "PP")) {
                // line 157
                echo "                                            Pago a Proveedores
                                        ";
            }
            // line 158
            echo "  
                                        
                                        
                                        ";
            // line 161
            if ((($this->getAttribute($context["movimiento"], "tipo", array()) == "CC") && ($this->getAttribute($context["movimiento"], "alumnocc", array()) != null))) {
                // line 162
                echo "                                            Movimiento de CC - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["movimiento"], "alumnocc", array()), "usuario", array()), "nombrecompleto", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 163
            echo "   
                                        
                                        ";
            // line 165
            if (($this->getAttribute($context["movimiento"], "tipo", array()) == "VP")) {
                // line 166
                echo "                                           Venta de productos
                                        ";
            }
            // line 167
            echo "   
                       
                                        
                                    </td>
                                    
                                    <td>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movimiento"], "usuario", array()), "nombrecompleto", array()), "html", null, true);
            echo "</td>
                                    <td class=\"actions\">
                                        <a href=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_movimiento_details", array("id" => $this->getAttribute($context["movimiento"], "id", array()))), "html", null, true);
            echo "\" 
                                        ";
            // line 175
            if (((($this->getAttribute($context["movimiento"], "tipo", array()) == "MB") || ($this->getAttribute($context["movimiento"], "tipo", array()) == "CC")) || ($this->getAttribute($context["movimiento"], "tipo", array()) == "PP"))) {
                // line 176
                echo "                                            class=\"none\"
                                            
                                            
                                            
                                        ";
            } elseif (($this->getAttribute(            // line 180
$context["movimiento"], "tipo", array()) == "VP")) {
                echo " 
                                            class=\"btn btn-sm btn-primary\"
                                         
                                         title = \"Detalle de Venta (Productos)\">
                                             <i class=\"fa fa-search\"></i>
                                              ";
            }
            // line 186
            echo "                                        </a>
                               ";
            // line 188
            echo "    \t\t\t                        ";
            // line 189
            echo "    \t\t\t                        ";
            // line 190
            echo "                                    </td>
                                    
                                    ";
            // line 192
            if ($this->getAttribute($context["movimiento"], "alumnocc", array())) {
                echo " 
                                    <td>
                                       <a href=\"";
                // line 194
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_view", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["movimiento"], "alumnocc", array()), "usuario", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\">
\t\t    \t                    \t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t                             \tAlumno
\t\t\t\t                        </a>
\t\t\t\t                      
\t\t\t\t                     </td>
\t\t\t\t                     
\t\t\t\t                     <td>
                                       <a href=\"";
                // line 202
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_index", array("usuario" => $this->getAttribute($this->getAttribute($this->getAttribute($context["movimiento"], "alumnocc", array()), "usuario", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\">
\t\t    \t                    \t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t                             \tCC
\t\t\t\t                        </a>
\t\t\t\t                       ";
            }
            // line 206
            echo " 
\t\t\t\t                     </td>
\t\t\t\t                     
    
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                        </tbody>
                    </table>
                   
               <H4> ";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Total Movimientos:", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</H4>
               <H4> ";
        // line 216
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Saldo Caja total: \$", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["saldo"]) ? $context["saldo"] : $this->getContext($context, "saldo")), "html", null, true);
        echo "</H4>
                <H4> ";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Saldo de esta consulta: \$", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["saldo2"]) ? $context["saldo2"] : $this->getContext($context, "saldo2")), "html", null, true);
        echo "</H4>
                    <div class=\"navigation\">
                        ";
        // line 219
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
    
                </div>   
                    
                </div>
            </div>
        </div>
 </div>
";
        
        $__internal_6effb83378960a843d4d263f823ca1b7184723b4e167884ecdbb02bb4763d46d->leave($__internal_6effb83378960a843d4d263f823ca1b7184723b4e167884ecdbb02bb4763d46d_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Movimiento:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 219,  472 => 217,  466 => 216,  460 => 215,  455 => 212,  444 => 206,  436 => 202,  425 => 194,  420 => 192,  416 => 190,  414 => 189,  412 => 188,  409 => 186,  400 => 180,  394 => 176,  392 => 175,  388 => 174,  383 => 172,  376 => 167,  372 => 166,  370 => 165,  366 => 163,  360 => 162,  358 => 161,  353 => 158,  349 => 157,  347 => 156,  344 => 155,  340 => 154,  338 => 153,  328 => 145,  322 => 143,  319 => 142,  313 => 140,  311 => 139,  306 => 136,  300 => 134,  297 => 133,  291 => 131,  289 => 130,  283 => 126,  277 => 124,  274 => 123,  268 => 121,  266 => 120,  260 => 116,  256 => 115,  254 => 114,  251 => 113,  247 => 112,  245 => 111,  239 => 107,  233 => 105,  230 => 104,  224 => 102,  222 => 101,  216 => 99,  212 => 98,  204 => 93,  200 => 92,  196 => 91,  192 => 90,  188 => 89,  184 => 88,  180 => 87,  176 => 86,  155 => 68,  147 => 63,  139 => 57,  128 => 55,  124 => 54,  119 => 52,  112 => 47,  101 => 45,  97 => 44,  92 => 42,  79 => 32,  67 => 23,  53 => 12,  44 => 6,  40 => 5,  34 => 4,  11 => 1,);
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
{{ include('CYAYogaBundle:Movimiento:messages/success.html.twig')}}
<div class=\"container-fluid caja\">
        <div class=\"container caja-icon\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h2><i class=\"fa fa-usd\"></i> &nbsp; Movimientos de Caja</h2>
                    <a href=\"{{ path('cya_movimiento_add') }}\" class=\"head-link\">
        \t\t\t        <h3>
        \t\t\t           <span><i class=\"icon ion-plus\"></i></span>
        \t\t\t            Nuevo movimiento
        \t\t\t         </h3>
        \t\t\t    </a>
                </div>
                <div class=\"col-sm-7\">
                    <form method=\"get\" action=\"\" class=\"form-inline pull-right\" role=\"search\">
        \t\t\t\t
        \t\t\t\t<div class=\"form-group select-class\">
                          <select class=\"form-control\" id=\"dc\"name=\"dc\" value=\"{{ app.request.get('dc') }}\">
                            <option value=\"\" selected disabled>Débito/Crédito</option>
                            <option value=\"\">Todos</option>
                            <option value=\"D\">Débito</option>
                            <option value=\"C\">Crédito</option>
                          </select>
                        </div>
                        
                        <div class=\"form-group select-class\">
                          <select class=\"form-control\" id=\"tipo\"name=\"tipo\" value=\"{{ app.request.get('tipo') }}\">
                            <option value=\"\" selected disabled>Tipo</option>
                            <option value=\"\">Todos</option>
                            <option value=\"MB\">Movimientos básicos</option>
                            <option value=\"CC\">Movimientos CC</option>
                            <option value=\"VP\">Venta de productos</option>
                          </select>
                        </div>
                        
                        <div class=\"form-group select-class\">
                            <select class=\"form-control\" id=\"rubro\" name=\"rubro\" value=\"{{ app.request.get('rubro') }}\">
                                <option value=\"\" selected disabled>Rubro</option>
                                {% for ru in rubros %}
                                    <option value=\"{{ ru.id }}\">{{ ru.nombre }}</option>
                                {% endfor %}
                             </select>
                        </div>
                        <br>
                         <br>
                        <div class=\"form-group select-class\">
                            <select class=\"form-control\" id=\"usuario\" name=\"usuario\" value=\"{{ app.request.get('usuario') }}\">
                                <option value=\"\" selected disabled>Usuario (que hizo el movimiento)</option>
                                {% for us in usuarios %}
                                    <option value=\"{{ us.id }}\">{{ us.nombrecompleto }}</option>
                                {% endfor %}
                             </select>
                        </div>
                        
                        <div class=\"select-class2\">
                            <div class=\"form-group\">
                                    Desde
                                    <input type='date' class=\"\" id=\"fd\"name=\"fd\" value=\"{{ app.request.get('fd') }}\" />
                            </div>
                            
                            <div class=\"form-group\">
                                    Hasta
                                    <input type='date' class=\"\" id=\"fh\"name=\"fh\" value=\"{{ app.request.get('fh') }}\" />
                            </div>
                        
                        <input type=\"submit\" value=\"buscar\" class=\"btn btn-success\" margin-top=\"5px\">
        \t\t\t\t</div>
        \t\t\t</form>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
    \t
    \t    <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
    
    \t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Fecha', 'm.fecha') }}</th>
    \t\t\t\t\t\t\t <th>{{ knp_pagination_sortable(pagination, 'D/C', 'm.rubro.tipo') }}</th>
    \t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Monto', 'm.monto') }} </th>
    \t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Descripcion', 'm.descripcion') }} </th>
    \t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Rubro', 'm.rubro.nombre') }}</th>
    \t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Tipo', 'm.tipo') }}</th>
    \t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Usuario', 'm.usuario.nombrecompleto') }}</th>
    \t\t\t\t\t\t\t<th>{{ 'Acciones' }}</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            {% for movimiento in pagination %}
                                <tr data-id=\"{{ movimiento.id }}\">
                                  <td>  
                                    {% if movimiento.rubro.tipo == 'C' %}
                                    <span class=\"text-success\"> {{ movimiento.fecha | date('d/m/Y  H:i:s') }}  </span>
                                    {% endif %}
                                     {% if movimiento.rubro.tipo == 'D' %}
                                     <span class=\"text-danger\"> {{ movimiento.fecha | date('d/m/Y  H:i:s') }}  </span>
                                    {% endif %}
                                  </td>
                                  
                                  
                                    <td>
                                        {% if movimiento.rubro.tipo == 'C' %}
                                     <span class=\"text-success\">       <strong>Crédito</strong> </span>
                                        {% endif %}    
                                        {% if movimiento.rubro.tipo == 'D' %}
                                       <span class=\"text-danger\">     <strong>Débito</strong> </span>
                                        {% endif %}    
                                    </td>
                                 
                                    <td>
                                    {% if movimiento.rubro.tipo == 'C' %}
                               <strong>  <span class=\"text-success\"> \$ {{ movimiento.monto }} </span> </strong>
                                     {% endif %}
                               {% if movimiento.rubro.tipo == 'D' %}
                               <strong>  <span class=\"text-danger\"> \$ {{ movimiento.monto }} </span> </strong>
                                     {% endif %}
                                    </td>
                                    
                                    
                                <td>
                                    {% if movimiento.rubro.tipo == 'C' %}
                               <span class=\"text-success\">  {{ movimiento.descripcion }} </span> 
                                     {% endif %}
                               {% if movimiento.rubro.tipo == 'D' %}
                                <span class=\"text-danger\">  {{ movimiento.descripcion }} </span> 
                                     {% endif %}
                                 </td>
                                    
                                   <td>
                                    {% if movimiento.rubro.tipo == 'C' %}
                               <span class=\"text-success\">  {{ movimiento.rubro.nombre }} </span> 
                                     {% endif %}
                               {% if movimiento.rubro.tipo == 'D' %}
                                <span class=\"text-danger\">  {{ movimiento.rubro.nombre }} </span> 
                                     {% endif %}
                                 </td>   
                             
                                    
                                    
                                    <td>
                                        
                         
                                        
                                        {% if movimiento.tipo == 'MB' %}
                                            Movimiento de caja básico
                                        {% endif %}    
                                        {% if movimiento.tipo == 'PP' %}
                                            Pago a Proveedores
                                        {% endif %}  
                                        
                                        
                                        {% if movimiento.tipo == 'CC' and  movimiento.alumnocc != null  %}
                                            Movimiento de CC - {{ movimiento.alumnocc.usuario.nombrecompleto }}
                                        {% endif %}   
                                        
                                        {% if movimiento.tipo == 'VP' %}
                                           Venta de productos
                                        {% endif %}   
                       
                                        
                                    </td>
                                    
                                    <td>{{ movimiento.usuario.nombrecompleto }}</td>
                                    <td class=\"actions\">
                                        <a href=\"{{ path('cya_movimiento_details', {id: movimiento.id }) }}\" 
                                        {% if movimiento.tipo == 'MB' or movimiento.tipo == 'CC' or movimiento.tipo == 'PP'  %}
                                            class=\"none\"
                                            
                                            
                                            
                                        {% elseif movimiento.tipo == 'VP' %} 
                                            class=\"btn btn-sm btn-primary\"
                                         
                                         title = \"Detalle de Venta (Productos)\">
                                             <i class=\"fa fa-search\"></i>
                                              {% endif %}
                                        </a>
                               {#          <a href=\"{{ path('cya_movimiento_delete', {id: movimiento.id }) }}\" class=\"btn btn-sm btn-danger btn-delete\" onclick=\"return confirm('Está seguro?')\">#}
    \t\t\t                        {#    eliminar#}
    \t\t\t                        {#</a>#}
                                    </td>
                                    
                                    {%if movimiento.alumnocc %} 
                                    <td>
                                       <a href=\"{{ path('cya_usuario_view', { id: movimiento.alumnocc.usuario.id }) }}\" class=\"btn btn-primary\">
\t\t    \t                    \t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t                             \tAlumno
\t\t\t\t                        </a>
\t\t\t\t                      
\t\t\t\t                     </td>
\t\t\t\t                     
\t\t\t\t                     <td>
                                       <a href=\"{{ path('cya_alumnocc_index', { usuario: movimiento.alumnocc.usuario.id }) }}\" class=\"btn btn-primary\">
\t\t    \t                    \t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t                             \tCC
\t\t\t\t                        </a>
\t\t\t\t                       {% endif %} 
\t\t\t\t                     </td>
\t\t\t\t                     
    
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                   
               <H4> {% trans %}Total Movimientos:{% endtrans %} {{ pagination.getTotalItemCount }}</H4>
               <H4> {% trans %}Saldo Caja total: \${% endtrans %} {{ saldo }}</H4>
                <H4> {% trans %}Saldo de esta consulta: \${% endtrans %} {{ saldo2 }}</H4>
                    <div class=\"navigation\">
                        {{ knp_pagination_render(pagination) }}
                    </div>
    
                </div>   
                    
                </div>
            </div>
        </div>
 </div>
{% endblock %}
", "CYAYogaBundle:Movimiento:index.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Movimiento/index.html.twig");
    }
}
