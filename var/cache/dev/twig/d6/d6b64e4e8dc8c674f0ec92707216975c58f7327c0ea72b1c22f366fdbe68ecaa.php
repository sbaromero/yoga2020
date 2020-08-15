<?php

/* CYAYogaBundle:Usuario:home.html.twig */
class __TwigTemplate_b30eb8d40ad99667e151b41f4558474658d20eca9edd481cadfbb91ae34d3108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CYAYogaBundle:Usuario:home.html.twig", 1);
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
        $__internal_fe52647b5d306d5605a6e81610f94a111507e1ba4ba2b743fab95e9840157efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe52647b5d306d5605a6e81610f94a111507e1ba4ba2b743fab95e9840157efc->enter($__internal_fe52647b5d306d5605a6e81610f94a111507e1ba4ba2b743fab95e9840157efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CYAYogaBundle:Usuario:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe52647b5d306d5605a6e81610f94a111507e1ba4ba2b743fab95e9840157efc->leave($__internal_fe52647b5d306d5605a6e81610f94a111507e1ba4ba2b743fab95e9840157efc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5e5c94f47cdf05ec346eb02e711896409720c85f7072775edf177cff4507007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e5c94f47cdf05ec346eb02e711896409720c85f7072775edf177cff4507007->enter($__internal_b5e5c94f47cdf05ec346eb02e711896409720c85f7072775edf177cff4507007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CYAYogaBundle:Usuario:home.html.twig"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo " 
\t";
        // line 5
        echo twig_include($this->env, $context, "CYAYogaBundle:Usuario:messages/success.html.twig");
        echo "
    ";
        // line 6
        echo twig_include($this->env, $context, "CYAYogaBundle:Usuario:messages/danger.html.twig");
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t    <div class=\"home-avatar\">
\t\t\t    
\t\t\t    ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "brochure", array())) {
            // line 12
            echo "\t\t\t    <span>
\t\t            <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("web/uploads/brochures" . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "brochure", array()))), "html", null, true);
            echo "\" class=\"avatar-tabla\"/> 
\t\t        </span>
\t\t         ";
        }
        // line 16
        echo "\t\t        ";
        // line 17
        echo "\t\t        ";
        // line 18
        echo "\t\t        ";
        // line 19
        echo "\t\t        ";
        // line 20
        echo "\t\t         
\t\t        <h2 class=\"bienvenido\">
\t\t            Bienvenido  al Sistema de Alumnos del Centro de Yoga Aplicada: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombrecompleto", array()), "html", null, true);
        echo "
\t\t           
\t\t            
\t\t            <!-- <small>
\t\t            ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "rol", array()) == "ROLE_ADMIN")) {
            // line 27
            echo "\t\t                Administrador
\t\t            ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "rol", array()) == "ROLE_USER")) {
            // line 29
            echo "\t\t                Usuario
\t\t            ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 30
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "rol", array()) == "ROLE_SUPER")) {
            // line 31
            echo "\t\t                Superadmin
\t\t            ";
        }
        // line 33
        echo "\t\t            </small>
\t\t            -->
\t\t        </h2>
\t\t        <div class=\"clearfix\"></div>
\t        </div>
        </div>
\t</div>
\t";
        // line 40
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 41
            echo "\t<div class=\"container home\">
\t    <div class=\"row\">
    \t        <div class=\"col-sm-4\">
    \t        \t<div class=\"top alumnos\"><i class=\"icon ion-android-people\"></i> <h2>Usuarios</h2></div>
    \t        \t<div class=\"box\">
    \t        \t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t";
            // line 48
            echo "\t\t\t\t\t\t\t";
            // line 49
            echo "\t\t\t\t\t\t\t";
            // line 50
            echo "\t\t\t\t\t\t\t";
            // line 51
            echo "\t\t\t\t\t\t\t";
            // line 52
            echo "\t\t\t\t\t\t\t";
            // line 53
            echo "\t\t\t\t\t\t\t";
            // line 54
            echo "\t\t\t\t\t\t\t";
            // line 55
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["totclases"]) ? $context["totclases"] : $this->getContext($context, "totclases")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t    Total Activos Clases Yoga 
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["totclases2"]) ? $context["totclases2"] : $this->getContext($context, "totclases2")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t   Total Al. Activos Profesorados y Posgr. 
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["totclases3"]) ? $context["totclases3"] : $this->getContext($context, "totclases3")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t   Otros Usuarios Activos 
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">";
            // line 73
            echo twig_escape_filter($this->env, (((isset($context["totclases"]) ? $context["totclases"] : $this->getContext($context, "totclases")) + (isset($context["totclases2"]) ? $context["totclases2"] : $this->getContext($context, "totclases2"))) + (isset($context["totclases3"]) ? $context["totclases3"] : $this->getContext($context, "totclases3"))), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t    Total Activos
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_rapido");
            echo "\" class=\"btn home-usuario\"><i class=\"icon ion-android-people\"></i><span>Carga rápida</span></a>
\t\t\t\t\t\t<a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_index");
            echo "\" class=\"btn home-usuario\"><i class=\"icon ion-ios-compose\"></i><span>Listado</span></a>
    \t        \t</div>
    \t        </div>
\t       
\t        \t<div class=\"col-sm-4\">
\t            <div class=\"top cuenta\"><i class=\"icon ion-card\"></i> <h2>Cuenta corriente</h2></div>
    \t            <div class=\"box\">
    \t            \t\t <ul class=\"list-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 88
            echo "\t\t\t\t\t\t\t ";
            // line 89
            echo "\t\t\t\t\t\t\t ";
            // line 90
            echo "\t\t\t\t\t\t  ";
            // line 91
            echo "\t\t\t\t\t\t  ";
            // line 92
            echo "\t\t\t\t\t\t\t ";
            // line 93
            echo "\t\t\t\t\t\t\t ";
            // line 94
            echo "\t\t\t\t\t\t  ";
            // line 95
            echo "\t\t\t\t\t\t        <li class=\"list-group-item\">
\t\t\t\t\t\t\t      <span class=\"badge\">";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["saldocc"]) ? $context["saldocc"] : $this->getContext($context, "saldocc")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t       Total Adeudado al Instituto \$
\t\t\t\t\t\t     \t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_pagodiario");
            echo "\" class=\"btn home-usuario cuenta-home\"><i class=\"icon ion-social-usd\"></i><span>Pago Clase</span></a>
\t\t\t\t\t\t<a href=\"";
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_index");
            echo "\" class=\"btn home-usuario cuenta-home\"><i class=\"icon ion-ios-compose\"></i><span>Listado CC</span></a>
    \t        \t\t
    \t        \t</div>
\t       \t \t</div>
\t       \t \t
    \t        <div class=\"col-sm-4\">
    \t        \t<div class=\"top producto\"><i class=\"icon ion-bag\"></i> <h2>Productos</h2></div>
    \t            <div class=\"box\">
    \t        \t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["saldo"]) ? $context["saldo"] : $this->getContext($context, "saldo")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t    Ganancia estimada \$
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t    Stock Total de Productos
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">";
            // line 119
            echo twig_escape_filter($this->env, (isset($context["lockers"]) ? $context["lockers"] : $this->getContext($context, "lockers")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t    Lockers Asignados
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">";
            // line 123
            echo 0;
            echo "</span>
\t\t\t\t\t\t\t    Lockers Libres
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_detalleventa_add");
            echo "\" class=\"btn home-usuario productos\"><i class=\"icon ion-bag\"></i><span>Nueva venta</span></a>
\t\t\t\t\t\t<a href=\"";
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_locker_add");
            echo "\" class=\"btn home-usuario productos\"><i class=\"icon ion-ios-unlocked\"></i><span>Nuevo locker</span></a>
\t\t\t\t\t    <a href=\"";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_producto_index");
            echo "\" class=\"btn home-usuario productos\"><i class=\"icon ion-ios-unlocked\"></i><span>Listado de Productos</span></a>
    \t        \t</div>
    \t        </div>
\t      </div>
    \t        <div class=\"col-sm-4\">
    \t            <div class=\"top caja\"><i class=\"icon ion-social-usd\"></i> <h2>Caja</h2></div>
    \t            <div class=\"box\">
\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">";
            // line 140
            echo twig_escape_filter($this->env, (isset($context["saldoc"]) ? $context["saldoc"] : $this->getContext($context, "saldoc")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t   Saldo
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"";
            // line 144
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_movimiento_add");
            echo "\" class=\"btn home-usuario caja-home\"><i class=\"icon ion-ios-filing\"></i><span>Nuevo mov. de caja</span></a>
\t\t\t\t\t\t<a href=\"";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_movimiento_index");
            echo "\" class=\"btn home-usuario caja-home\"><i class=\"icon ion-ios-compose\"></i><span>Listado de movs.</span></a>
    \t        \t</div>
    \t        </div>
\t        \t
\t     ";
            // line 150
            echo "    \t ";
            // line 151
            echo "    \t ";
            // line 152
            echo "    \t            
    \t ";
            // line 154
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 156
            echo "\t\t\t\t\t\t";
            // line 157
            echo "\t\t\t\t\t\t";
            // line 158
            echo "\t\t\t\t\t\t";
            // line 159
            echo "\t\t\t\t\t ";
            // line 160
            echo "\t\t\t\t\t\t";
            // line 161
            echo "\t\t\t\t\t\t";
            // line 162
            echo "\t\t\t\t\t\t";
            // line 163
            echo "    \t ";
            // line 164
            echo "    \t ";
            // line 165
            echo "    \t ";
            // line 166
            echo "    \t         
    \t         
    \t         
    \t         
    \t         
    \t         
    \t         
\t    </div>
\t</div>
\t";
        }
        // line 176
        echo "\t
\t
\t";
        // line 178
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 179
            echo "\t<div class=\"container home\">
\t    <div class=\"row\">
\t        <a href=\"";
            // line 181
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_usuario_editpublic");
            echo "\">
    \t        <div class=\"col-sm-6 alumnos\">
    \t            <i class=\"icon ion-android-people\"></i>
    \t            <h2>EDITAR USUARIO</h2>
    \t        </div>
\t        </a>
\t          <a href=\"";
            // line 187
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cya_alumnocc_indexpublic");
            echo "\">
\t        <div class=\"col-sm-6 cuenta\">
\t            <i class=\"icon ion-card\"></i>
\t            <h2>CTA. CORRIENTE</h2>
\t        </div>
\t        </a>
\t    </div>
\t\t <br>
\t\t<b> Mensajes para ";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombrecompleto", array()), "html", null, true);
            echo " </b> <br><br>
\t\t           Curso Actual: <i>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipocuota", array()), "mensaje", array()), "html", null, true);
            echo "</i> <br><br>
\t\t           Administración:<i></i>
\t</div>
\t";
        }
        // line 200
        echo "\t
\t

\t
\t
";
        
        $__internal_b5e5c94f47cdf05ec346eb02e711896409720c85f7072775edf177cff4507007->leave($__internal_b5e5c94f47cdf05ec346eb02e711896409720c85f7072775edf177cff4507007_prof);

    }

    public function getTemplateName()
    {
        return "CYAYogaBundle:Usuario:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 200,  373 => 196,  369 => 195,  358 => 187,  349 => 181,  345 => 179,  343 => 178,  339 => 176,  327 => 166,  325 => 165,  323 => 164,  321 => 163,  319 => 162,  317 => 161,  315 => 160,  313 => 159,  311 => 158,  309 => 157,  307 => 156,  304 => 154,  301 => 152,  299 => 151,  297 => 150,  290 => 145,  286 => 144,  279 => 140,  266 => 130,  262 => 129,  258 => 128,  250 => 123,  243 => 119,  236 => 115,  229 => 111,  216 => 101,  212 => 100,  205 => 96,  202 => 95,  200 => 94,  198 => 93,  196 => 92,  194 => 91,  192 => 90,  190 => 89,  188 => 88,  176 => 78,  172 => 77,  165 => 73,  156 => 67,  148 => 62,  141 => 58,  136 => 55,  134 => 54,  132 => 53,  130 => 52,  128 => 51,  126 => 50,  124 => 49,  122 => 48,  114 => 41,  112 => 40,  103 => 33,  99 => 31,  97 => 30,  94 => 29,  92 => 28,  89 => 27,  87 => 26,  80 => 22,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  62 => 13,  59 => 12,  57 => 11,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
\t{{ include('CYAYogaBundle:Usuario:messages/success.html.twig')}}
    {{ include('CYAYogaBundle:Usuario:messages/danger.html.twig')}}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t    <div class=\"home-avatar\">
\t\t\t    
\t\t\t    {% if app.user.brochure %}
\t\t\t    <span>
\t\t            <img src=\"{{ asset('web/uploads/brochures'~'/'~ app.user.brochure) }}\" class=\"avatar-tabla\"/> 
\t\t        </span>
\t\t         {% endif %}
\t\t        {# <span>#}
\t\t        {#<img src=\"{{ asset('public/img/avatar.jpg') }}\"/> #}
\t\t        {# </span>#}
\t\t        {# {% endif %}#}
\t\t         
\t\t        <h2 class=\"bienvenido\">
\t\t            Bienvenido  al Sistema de Alumnos del Centro de Yoga Aplicada: {{ app.user.nombrecompleto}}
\t\t           
\t\t            
\t\t            <!-- <small>
\t\t            {% if app.user.rol == 'ROLE_ADMIN' %}
\t\t                Administrador
\t\t            {% elseif app.user.rol == 'ROLE_USER' %}
\t\t                Usuario
\t\t            {% elseif app.user.rol == 'ROLE_SUPER' %}
\t\t                Superadmin
\t\t            {% endif %}
\t\t            </small>
\t\t            -->
\t\t        </h2>
\t\t        <div class=\"clearfix\"></div>
\t        </div>
        </div>
\t</div>
\t{% if is_granted('ROLE_SUPER') or is_granted('ROLE_ADMIN') %}
\t<div class=\"container home\">
\t    <div class=\"row\">
    \t        <div class=\"col-sm-4\">
    \t        \t<div class=\"top alumnos\"><i class=\"icon ion-android-people\"></i> <h2>Usuarios</h2></div>
    \t        \t<div class=\"box\">
    \t        \t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t{#<li class=\"list-group-item\">#}
\t\t\t\t\t\t\t{#    <span class=\"badge\">{{ usuariosa }}</span>#}
\t\t\t\t\t\t\t{#    Usuarios activos #}
\t\t\t\t\t\t\t{#</li>#}
\t\t\t\t\t\t\t{#<li class=\"list-group-item\">#}
\t\t\t\t\t\t\t{#    <span class=\"badge\">{{ usuariosi }}</span>#}
\t\t\t\t\t\t\t{#    Usuarios Inactivos #}
\t\t\t\t\t\t\t{#</li>#}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">{{ totclases }}</span>
\t\t\t\t\t\t\t    Total Activos Clases Yoga 
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">{{ totclases2 }}</span>
\t\t\t\t\t\t\t   Total Al. Activos Profesorados y Posgr. 
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">{{ totclases3 }}</span>
\t\t\t\t\t\t\t   Otros Usuarios Activos 
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">{{ totclases+totclases2+totclases3 }}</span>
\t\t\t\t\t\t\t    Total Activos
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"{{ path('cya_usuario_rapido') }}\" class=\"btn home-usuario\"><i class=\"icon ion-android-people\"></i><span>Carga rápida</span></a>
\t\t\t\t\t\t<a href=\"{{ path('cya_usuario_index') }}\" class=\"btn home-usuario\"><i class=\"icon ion-ios-compose\"></i><span>Listado</span></a>
    \t        \t</div>
    \t        </div>
\t       
\t        \t<div class=\"col-sm-4\">
\t            <div class=\"top cuenta\"><i class=\"icon ion-card\"></i> <h2>Cuenta corriente</h2></div>
    \t            <div class=\"box\">
    \t            \t\t <ul class=\"list-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{#<li class=\"list-group-item\">#}
\t\t\t\t\t\t\t {#     <span class=\"badge\">{{ deudas }}</span>#}
\t\t\t\t\t\t\t {#      Deuda \$#}
\t\t\t\t\t\t  {#   \t</li>#}
\t\t\t\t\t\t  {#      <li class=\"list-group-item\">#}
\t\t\t\t\t\t\t {#     <span class=\"badge\">{{ pagados }}</span>#}
\t\t\t\t\t\t\t {#      Pagado + Bonificaciones \$#}
\t\t\t\t\t\t  {#   \t</li>#}
\t\t\t\t\t\t        <li class=\"list-group-item\">
\t\t\t\t\t\t\t      <span class=\"badge\">{{ saldocc }}</span>
\t\t\t\t\t\t\t       Total Adeudado al Instituto \$
\t\t\t\t\t\t     \t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"{{ path('cya_alumnocc_pagodiario') }}\" class=\"btn home-usuario cuenta-home\"><i class=\"icon ion-social-usd\"></i><span>Pago Clase</span></a>
\t\t\t\t\t\t<a href=\"{{ path('cya_alumnocc_index') }}\" class=\"btn home-usuario cuenta-home\"><i class=\"icon ion-ios-compose\"></i><span>Listado CC</span></a>
    \t        \t\t
    \t        \t</div>
\t       \t \t</div>
\t       \t \t
    \t        <div class=\"col-sm-4\">
    \t        \t<div class=\"top producto\"><i class=\"icon ion-bag\"></i> <h2>Productos</h2></div>
    \t            <div class=\"box\">
    \t        \t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">{{ saldo }}</span>
\t\t\t\t\t\t\t    Ganancia estimada \$
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">{{ productos }}</span>
\t\t\t\t\t\t\t    Stock Total de Productos
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">{{ lockers }}</span>
\t\t\t\t\t\t\t    Lockers Asignados
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">{{ 0 }}</span>
\t\t\t\t\t\t\t    Lockers Libres
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"{{ path('cya_detalleventa_add') }}\" class=\"btn home-usuario productos\"><i class=\"icon ion-bag\"></i><span>Nueva venta</span></a>
\t\t\t\t\t\t<a href=\"{{ path('cya_locker_add') }}\" class=\"btn home-usuario productos\"><i class=\"icon ion-ios-unlocked\"></i><span>Nuevo locker</span></a>
\t\t\t\t\t    <a href=\"{{ path('cya_producto_index') }}\" class=\"btn home-usuario productos\"><i class=\"icon ion-ios-unlocked\"></i><span>Listado de Productos</span></a>
    \t        \t</div>
    \t        </div>
\t      </div>
    \t        <div class=\"col-sm-4\">
    \t            <div class=\"top caja\"><i class=\"icon ion-social-usd\"></i> <h2>Caja</h2></div>
    \t            <div class=\"box\">
\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t    <span class=\"badge\">{{ saldoc }}</span>
\t\t\t\t\t\t\t   Saldo
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"{{ path('cya_movimiento_add') }}\" class=\"btn home-usuario caja-home\"><i class=\"icon ion-ios-filing\"></i><span>Nuevo mov. de caja</span></a>
\t\t\t\t\t\t<a href=\"{{ path('cya_movimiento_index') }}\" class=\"btn home-usuario caja-home\"><i class=\"icon ion-ios-compose\"></i><span>Listado de movs.</span></a>
    \t        \t</div>
    \t        </div>
\t        \t
\t     {#   \t<div class=\"col-sm-4\">#}
    \t {#           <div class=\"top profesorado\"><i class=\"icon ion-university\"></i> <h2>Cursos</h2></div>#}
    \t {#           <div class=\"box\">#}
    \t            
    \t {#           \t\t<ul class=\"list-group\">#}
\t\t\t\t\t\t\t
\t\t\t\t\t\t{#\t\t<li class=\"list-group-item\">#}
\t\t\t\t\t\t{#\t    <span class=\"badge\">0</span>#}
\t\t\t\t\t\t{#\tCursos#}
\t\t\t\t\t\t{#\t</li>#}
\t\t\t\t\t {#   \t</ul>#}
\t\t\t\t\t\t{#<a href=\"{{ path('cya_curso_index') }}\" class=\"btn home-usuario profesorado-home\"><i class=\"icon ion-ios-bookmarks\"></i><span>Listado de Cursos</span></a>#}
\t\t\t\t\t\t{#<a href=\"{{ path('cya_materia_index') }}\" class=\"btn home-usuario profesorado-home\"><i class=\"icon ion-university\"></i><span>Listado de Materias</span></a>#}
\t\t\t\t\t\t{#<a href=\"{{ path('cya_usuario_index') }}\" class=\"btn home-usuario profesorado-home\"><i class=\"icon ion-university\"></i><span>Inscripción a Materias</span></a>#}
    \t {#       \t</div>#}
    \t {#         </div>#}
    \t {#        </div>#}
    \t         
    \t         
    \t         
    \t         
    \t         
    \t         
    \t         
\t    </div>
\t</div>
\t{% endif %}
\t
\t
\t{% if is_granted('ROLE_USER') %}
\t<div class=\"container home\">
\t    <div class=\"row\">
\t        <a href=\"{{ path('cya_usuario_editpublic') }}\">
    \t        <div class=\"col-sm-6 alumnos\">
    \t            <i class=\"icon ion-android-people\"></i>
    \t            <h2>EDITAR USUARIO</h2>
    \t        </div>
\t        </a>
\t          <a href=\"{{ path('cya_alumnocc_indexpublic') }}\">
\t        <div class=\"col-sm-6 cuenta\">
\t            <i class=\"icon ion-card\"></i>
\t            <h2>CTA. CORRIENTE</h2>
\t        </div>
\t        </a>
\t    </div>
\t\t <br>
\t\t<b> Mensajes para {{ app.user.nombrecompleto}} </b> <br><br>
\t\t           Curso Actual: <i>{{ app.user.tipocuota.mensaje}}</i> <br><br>
\t\t           Administración:<i></i>
\t</div>
\t{% endif %}
\t
\t

\t
\t
{% endblock %}", "CYAYogaBundle:Usuario:home.html.twig", "/home/ubuntu/environment/src/CYA/YogaBundle/Resources/views/Usuario/home.html.twig");
    }
}
