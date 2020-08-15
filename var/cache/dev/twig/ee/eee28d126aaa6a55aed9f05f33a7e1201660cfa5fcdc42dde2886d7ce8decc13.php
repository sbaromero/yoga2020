<?php

/* CYAYogaBundle:Usuario:view.html.twig */
class __TwigTemplate_81411bffbef7315ed3fda027969ec875589fd8489bd0713854130ba57ad1e388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Usuario:view.html.twig", 1);
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
        $__internal_9189faa951d533f6c7706269c05fb9e933f1bbfe82baa09ca0200788c7316dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9189faa951d533f6c7706269c05fb9e933f1bbfe82baa09ca0200788c7316dbc->enter($__internal_9189faa951d533f6c7706269c05fb9e933f1bbfe82baa09ca0200788c7316dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Usuario:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9189faa951d533f6c7706269c05fb9e933f1bbfe82baa09ca0200788c7316dbc->leave($__internal_9189faa951d533f6c7706269c05fb9e933f1bbfe82baa09ca0200788c7316dbc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c05922baf17c44253a0ab0425583996ddc6c786ee60059f85c34318a5ba0c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c05922baf17c44253a0ab0425583996ddc6c786ee60059f85c34318a5ba0c9e->enter($__internal_9c05922baf17c44253a0ab0425583996ddc6c786ee60059f85c34318a5ba0c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Usuario:view.html.twig"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t
\t    <div class=\"container-fluid alumnos\">
        <div class=\"container alumnos-icon\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                 
                 ";
        // line 11
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "brochure", array()) != null)) {
            // line 12
            echo "                  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("web/uploads/brochures" . "/") . $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "brochure", array()))), "html", null, true);
            echo "\" class=\"img-circle\" /> 
                  ";
        }
        // line 14
        echo "                   <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellido", array()), "html", null, true);
        echo " (edad: ";
        echo twig_escape_filter($this->env, (isset($context["edad"]) ? $context["edad"] : $this->getContext($context, "edad")), "html", null, true);
        echo "    años)</h2> 
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_index");
        echo "\" class=\"head-link\">
        \t\t\t        <h3>
        \t\t\t           <i class=\"icon ion-android-arrow-dropleft-circle\"></i>
        \t\t\t            regresar al listado de usuarios
        \t\t\t         </h3>
        \t\t\t    </a>
                </div>
                
            </div>
        </div>
    </div>
\t
\t
\t<h4>
\t<div class=\"container well\">
\t    <div class=\"col-md-9\">
\t  \t    <br>
\t        <dl>
\t           
\t            <div class=\"col-md-4\">
\t            <dt>Usuario</dt></dt>
\t            <dd>
\t                ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombreusuario", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>Nombre</dt>
\t            <dd>
\t                ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>Apellido</dt>
\t            <dd>
\t                ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellido", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

               <dt>DNI</dt>
\t            <dd>
\t                ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "dni", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>
\t            
\t            
\t            
\t            
\t            <dt>Dirección</dt>
\t            <dd>
\t                ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "direccion", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>
\t            <dt>Ciudad</dt>
\t            <dd>
\t                ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "ciudad", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>
\t            

\t            <dt>Teléfono</dt>
\t            <dd>
\t                ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "telefono", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

                
                
\t            <dt>Mail</dt>
\t            <dd>
\t                ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "mail", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t             <br>
\t             </div>
\t            <div class=\"col-md-4\">
\t            <dt>Fecha Nacimiento</dt>
\t            <dd>
\t                ";
        // line 99
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "fechanacimiento", array()), "d/m/Y"), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>
\t            <dt>Fecha Ingreso</dt>
\t            
\t            <dd>
\t                ";
        // line 106
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "fechaingreso", array()), "d/m/Y"), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>
\t            <dt>Fecha Re-Ingreso</dt>
\t            <dd>
\t                ";
        // line 112
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "fechareingreso", array()), "d/m/Y"), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            
\t            <br>
\t            <dt>Tipo de Cuota</dt>
\t            <dd>
\t          <b>  <span class=\"text-success\">    ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "tipocuota", array()), "nombre", array()), "html", null, true);
        echo " </span></b>

\t                &nbsp;
\t            </dd>
\t            
\t          
\t            
\t            
\t            <br>
\t            <dt>Rol</dt>
\t            <dd>
                \t";
        // line 130
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol", array()) == "ROLE_ADMIN")) {
            // line 131
            echo "\t\t\t\t\t\tAdministrador
\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 132
(isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol", array()) == "ROLE_USER")) {
            // line 133
            echo "\t\t\t\t\t\tUsuario
\t\t\t    \t";
        } elseif (($this->getAttribute(        // line 134
(isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol", array()) == "ROLE_SUPER")) {
            // line 135
            echo "\t\t\t\t    \tSuperadmin
                \t";
        }
        // line 137
        echo "\t                &nbsp;
\t            </dd>
\t            <br>

\t          
           <dt>Locker</dt>
\t           <b>
\t            <dd>
                \t";
        // line 145
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "haveLocker", array()) == 1)) {
            // line 146
            echo "\t\t\t\t\t\t<span class=\"text-success\">SI</span>
\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 147
(isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "haveLocker", array()) == 0)) {
            // line 148
            echo "\t\t\t\t\t\t<span class=\"text-warning\">NO</span>
\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 149
(isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "haveLocker", array()) == null)) {
            // line 150
            echo "\t\t\t\t\t\t<span class=\"text-warning\">NO</span>
                \t";
        }
        // line 152
        echo "\t                &nbsp;
\t            </dd>
\t             </b>
\t            <br>
               
              <dt>Asociación</dt>
\t           <b>
\t            <dd>
                \t";
        // line 160
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "haveAsoc", array()) == 1)) {
            // line 161
            echo "\t\t\t\t\t\t<span class=\"text-success\">SI</span>
\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 162
(isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "haveAsoc", array()) == 0)) {
            // line 163
            echo "\t\t\t\t\t\t<span class=\"text-warning\">NO</span>
\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 164
(isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "haveAsoc", array()) == null)) {
            // line 165
            echo "\t\t\t\t\t\t<span class=\"text-warning\">NO</span>
                \t";
        }
        // line 167
        echo "\t                &nbsp;
\t            </dd>
\t             </b>
\t            <br>
               
                 <dt>Estado del Usuario</dt>
\t           <b>
\t            <dd>
                \t";
        // line 175
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "isActive", array()) == 1)) {
            // line 176
            echo "\t\t\t\t\t\t<span class=\"text-success\">Usuario Activo</span>
\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 177
(isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "isActive", array()) == 0)) {
            // line 178
            echo "\t\t\t\t\t\t<span class=\"text-warning\">Usuario Inactivo</span>
\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 179
(isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "isActive", array()) == null)) {
            // line 180
            echo "\t\t\t\t\t\t<span class=\"text-warning\">Usuario Inactivo</span>
                \t";
        }
        // line 182
        echo "\t                &nbsp;
\t            </dd>
\t             </b>
\t            <br>
               
               
                 </div>
               
               
\t            <dt>Creado el</dt>
\t            <dd>
\t                ";
        // line 193
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "createdAt", array()), "d/m/Y"), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>Actualizado el</dt>
\t            <dd>
\t                ";
        // line 200
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "updatedAt", array()), "d/m/Y"), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>
\t         
\t       
\t        </dl>
\t    </div>
\t    
\t    
\t    <div class=\"col-md-3\">
\t    \t
\t\t\t<p>
\t\t    \t<a href=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_edit", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">
\t\t    \t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t        \t Editar Usuario
\t\t\t\t </a>
\t\t\t</p>
\t\t\t
\t\t\t
\t\t\t\t<p>
\t\t    \t<a href=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_index", array("usuario" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">
\t\t    \t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t        \t Ver Cuentas Corrientes
\t\t\t\t </a>
\t\t\t   </p>
\t\t\t   \t<p>
\t\t    \t<a href=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_imprimircuota", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">
\t\t    \t\t<span class=\"glyphicon glyphicon-prin\"></span>
\t\t        \t Imprimir Cuota
\t\t\t\t </a>
\t\t\t   </p>
\t\t\t   
\t    </div>
\t</div>
\t</h4>
\t
";
        
        $__internal_9c05922baf17c44253a0ab0425583996ddc6c786ee60059f85c34318a5ba0c9e->leave($__internal_9c05922baf17c44253a0ab0425583996ddc6c786ee60059f85c34318a5ba0c9e_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Usuario:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 227,  366 => 221,  355 => 213,  339 => 200,  329 => 193,  316 => 182,  312 => 180,  310 => 179,  307 => 178,  305 => 177,  302 => 176,  300 => 175,  290 => 167,  286 => 165,  284 => 164,  281 => 163,  279 => 162,  276 => 161,  274 => 160,  264 => 152,  260 => 150,  258 => 149,  255 => 148,  253 => 147,  250 => 146,  248 => 145,  238 => 137,  234 => 135,  232 => 134,  229 => 133,  227 => 132,  224 => 131,  222 => 130,  208 => 119,  198 => 112,  189 => 106,  179 => 99,  168 => 91,  156 => 82,  145 => 74,  136 => 68,  123 => 58,  113 => 51,  103 => 44,  93 => 37,  68 => 15,  59 => 14,  53 => 12,  51 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
\t{{ parent() }}
\t
\t    <div class=\"container-fluid alumnos\">
        <div class=\"container alumnos-icon\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                 
                 {%if usuario.brochure != null%}
                  <img src=\"{{ asset('web/uploads/brochures'~'/'~usuario.brochure) }}\" class=\"img-circle\" /> 
                  {%endif%}
                   <h2>{{ usuario.nombre }} {{ usuario.apellido }} (edad: {{ edad }}    años)</h2> 
                    <a href=\"{{ path('cya_usuario_index') }}\" class=\"head-link\">
        \t\t\t        <h3>
        \t\t\t           <i class=\"icon ion-android-arrow-dropleft-circle\"></i>
        \t\t\t            regresar al listado de usuarios
        \t\t\t         </h3>
        \t\t\t    </a>
                </div>
                
            </div>
        </div>
    </div>
\t
\t
\t<h4>
\t<div class=\"container well\">
\t    <div class=\"col-md-9\">
\t  \t    <br>
\t        <dl>
\t           
\t            <div class=\"col-md-4\">
\t            <dt>Usuario</dt></dt>
\t            <dd>
\t                {{ usuario.nombreusuario }}
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>Nombre</dt>
\t            <dd>
\t                {{ usuario.nombre }}
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>Apellido</dt>
\t            <dd>
\t                {{ usuario.apellido }}
\t                &nbsp;
\t            </dd>
\t            <br>

               <dt>DNI</dt>
\t            <dd>
\t                {{ usuario.dni }}
\t                &nbsp;
\t            </dd>
\t            <br>
\t            
\t            
\t            
\t            
\t            <dt>Dirección</dt>
\t            <dd>
\t                {{ usuario.direccion }}
\t                &nbsp;
\t            </dd>
\t            <br>
\t            <dt>Ciudad</dt>
\t            <dd>
\t                {{ usuario.ciudad }}
\t                &nbsp;
\t            </dd>
\t            <br>
\t            

\t            <dt>Teléfono</dt>
\t            <dd>
\t                {{ usuario.telefono }}
\t                &nbsp;
\t            </dd>
\t            <br>

                
                
\t            <dt>Mail</dt>
\t            <dd>
\t                {{ usuario.mail }}
\t                &nbsp;
\t            </dd>
\t             <br>
\t             </div>
\t            <div class=\"col-md-4\">
\t            <dt>Fecha Nacimiento</dt>
\t            <dd>
\t                {{ usuario.fechanacimiento|date('d/m/Y') }}
\t                &nbsp;
\t            </dd>
\t            <br>
\t            <dt>Fecha Ingreso</dt>
\t            
\t            <dd>
\t                {{ usuario.fechaingreso|date('d/m/Y') }}
\t                &nbsp;
\t            </dd>
\t            <br>
\t            <dt>Fecha Re-Ingreso</dt>
\t            <dd>
\t                {{ usuario.fechareingreso|date('d/m/Y') }}
\t                &nbsp;
\t            </dd>
\t            
\t            <br>
\t            <dt>Tipo de Cuota</dt>
\t            <dd>
\t          <b>  <span class=\"text-success\">    {{ usuario.tipocuota.nombre }} </span></b>

\t                &nbsp;
\t            </dd>
\t            
\t          
\t            
\t            
\t            <br>
\t            <dt>Rol</dt>
\t            <dd>
                \t{% if usuario.rol == 'ROLE_ADMIN' %}
\t\t\t\t\t\tAdministrador
\t\t\t\t\t{% elseif usuario.rol == 'ROLE_USER' %}
\t\t\t\t\t\tUsuario
\t\t\t    \t{% elseif usuario.rol == 'ROLE_SUPER' %}
\t\t\t\t    \tSuperadmin
                \t{% endif %}
\t                &nbsp;
\t            </dd>
\t            <br>

\t          
           <dt>Locker</dt>
\t           <b>
\t            <dd>
                \t{% if usuario.haveLocker == 1 %}
\t\t\t\t\t\t<span class=\"text-success\">SI</span>
\t\t\t\t\t{% elseif usuario.haveLocker == 0 %}
\t\t\t\t\t\t<span class=\"text-warning\">NO</span>
\t\t\t\t\t\t\t{% elseif usuario.haveLocker == null %}
\t\t\t\t\t\t<span class=\"text-warning\">NO</span>
                \t{% endif %}
\t                &nbsp;
\t            </dd>
\t             </b>
\t            <br>
               
              <dt>Asociación</dt>
\t           <b>
\t            <dd>
                \t{% if usuario.haveAsoc == 1 %}
\t\t\t\t\t\t<span class=\"text-success\">SI</span>
\t\t\t\t\t{% elseif usuario.haveAsoc == 0 %}
\t\t\t\t\t\t<span class=\"text-warning\">NO</span>
\t\t\t\t\t\t\t{% elseif usuario.haveAsoc == null %}
\t\t\t\t\t\t<span class=\"text-warning\">NO</span>
                \t{% endif %}
\t                &nbsp;
\t            </dd>
\t             </b>
\t            <br>
               
                 <dt>Estado del Usuario</dt>
\t           <b>
\t            <dd>
                \t{% if usuario.isActive == 1 %}
\t\t\t\t\t\t<span class=\"text-success\">Usuario Activo</span>
\t\t\t\t\t{% elseif usuario.isActive == 0 %}
\t\t\t\t\t\t<span class=\"text-warning\">Usuario Inactivo</span>
\t\t\t\t\t\t\t{% elseif usuario.isActive == null %}
\t\t\t\t\t\t<span class=\"text-warning\">Usuario Inactivo</span>
                \t{% endif %}
\t                &nbsp;
\t            </dd>
\t             </b>
\t            <br>
               
               
                 </div>
               
               
\t            <dt>Creado el</dt>
\t            <dd>
\t                {{ usuario.createdAt|date('d/m/Y') }}
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>Actualizado el</dt>
\t            <dd>
\t                {{ usuario.updatedAt|date('d/m/Y') }}
\t                &nbsp;
\t            </dd>
\t            <br>
\t         
\t       
\t        </dl>
\t    </div>
\t    
\t    
\t    <div class=\"col-md-3\">
\t    \t
\t\t\t<p>
\t\t    \t<a href=\"{{ path('cya_usuario_edit', { id: usuario.id }) }}\" class=\"btn btn-primary btn-lg btn-block\">
\t\t    \t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t        \t Editar Usuario
\t\t\t\t </a>
\t\t\t</p>
\t\t\t
\t\t\t
\t\t\t\t<p>
\t\t    \t<a href=\"{{ path('cya_alumnocc_index', { usuario: usuario.id }) }}\" class=\"btn btn-primary btn-lg btn-block\">
\t\t    \t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t        \t Ver Cuentas Corrientes
\t\t\t\t </a>
\t\t\t   </p>
\t\t\t   \t<p>
\t\t    \t<a href=\"{{ path('cya_usuario_imprimircuota', { id: usuario.id }) }}\" class=\"btn btn-primary btn-lg btn-block\">
\t\t    \t\t<span class=\"glyphicon glyphicon-prin\"></span>
\t\t        \t Imprimir Cuota
\t\t\t\t </a>
\t\t\t   </p>
\t\t\t   
\t    </div>
\t</div>
\t</h4>
\t
{% endblock %}", "CYAYogaBundle:Usuario:view.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Usuario/view.html.twig");
    }
}
