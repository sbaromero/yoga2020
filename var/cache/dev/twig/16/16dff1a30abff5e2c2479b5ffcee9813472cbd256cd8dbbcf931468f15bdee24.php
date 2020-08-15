<?php

/* layout.html.twig */
class __TwigTemplate_2e7b6178d01cc52974a9d5fec2aaf3326223b1e597c2a74c2ca4aad94061a23e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f60a00d4c40b7aa8f1fdc8a92e73297749d922d81ede2d27b8389d60a3f3969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f60a00d4c40b7aa8f1fdc8a92e73297749d922d81ede2d27b8389d60a3f3969->enter($__internal_2f60a00d4c40b7aa8f1fdc8a92e73297749d922d81ede2d27b8389d60a3f3969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
    </head>
    <body id=\"inicio\">
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        
        ";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
        // line 35
        echo "        
        ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "    </body>
</html>

";
        
        $__internal_2f60a00d4c40b7aa8f1fdc8a92e73297749d922d81ede2d27b8389d60a3f3969->leave($__internal_2f60a00d4c40b7aa8f1fdc8a92e73297749d922d81ede2d27b8389d60a3f3969_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8563281800fa02ff0e02defe7822d222f29ec9e6eae42eb2be1700c73c811fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8563281800fa02ff0e02defe7822d222f29ec9e6eae42eb2be1700c73c811fc5->enter($__internal_8563281800fa02ff0e02defe7822d222f29ec9e6eae42eb2be1700c73c811fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        echo "Sistema de Centro de Yoga Aplicada";
        
        $__internal_8563281800fa02ff0e02defe7822d222f29ec9e6eae42eb2be1700c73c811fc5->leave($__internal_8563281800fa02ff0e02defe7822d222f29ec9e6eae42eb2be1700c73c811fc5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_837507453f05c793ef6330c34000979ed8a94a2af353c1db195a09cdfb7f387f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837507453f05c793ef6330c34000979ed8a94a2af353c1db195a09cdfb7f387f->enter($__internal_837507453f05c793ef6330c34000979ed8a94a2af353c1db195a09cdfb7f387f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-switch.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,900|Droid+Serif:400,400italic,700italic\" rel='stylesheet' type='text/css'>
            <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel='stylesheet' type='text/css'>
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-select.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js_plugins/toastr/toastr.min.css"), "html", null, true);
        echo "\" />
               
        ";
        
        $__internal_837507453f05c793ef6330c34000979ed8a94a2af353c1db195a09cdfb7f387f->leave($__internal_837507453f05c793ef6330c34000979ed8a94a2af353c1db195a09cdfb7f387f_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_a569abbed7423661a80eaefd05de96d4505ae71f6a304e826ba0bb41cfe19f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a569abbed7423661a80eaefd05de96d4505ae71f6a304e826ba0bb41cfe19f32->enter($__internal_a569abbed7423661a80eaefd05de96d4505ae71f6a304e826ba0bb41cfe19f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 25
        echo "        
        ";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 27
            echo "            ";
            echo twig_include($this->env, $context, "menu.html.twig");
            echo "
        ";
        }
        // line 29
        echo "        
        ";
        
        $__internal_a569abbed7423661a80eaefd05de96d4505ae71f6a304e826ba0bb41cfe19f32->leave($__internal_a569abbed7423661a80eaefd05de96d4505ae71f6a304e826ba0bb41cfe19f32_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8db1c9802976d0703c0f0492e87cff2addc853e2605b7c89b8988dd0e686124d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db1c9802976d0703c0f0492e87cff2addc853e2605b7c89b8988dd0e686124d->enter($__internal_8db1c9802976d0703c0f0492e87cff2addc853e2605b7c89b8988dd0e686124d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 33
        echo "        ";
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
        ";
        
        $__internal_8db1c9802976d0703c0f0492e87cff2addc853e2605b7c89b8988dd0e686124d->leave($__internal_8db1c9802976d0703c0f0492e87cff2addc853e2605b7c89b8988dd0e686124d_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9a95f77253c949503b10ec1cbe383d2394e85c2f9956dfe1a9ee50af4026432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a95f77253c949503b10ec1cbe383d2394e85c2f9956dfe1a9ee50af4026432->enter($__internal_d9a95f77253c949503b10ec1cbe383d2394e85c2f9956dfe1a9ee50af4026432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        echo "  
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/funciones.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js_plugins/toastr/toastr.min.js"), "html", null, true);
        echo "\"></script>
            <script>
                \$(document).ready(function() {
                    \$('.js-datepicker').datepicker({
                        format: 'yyyy-mm-dd'
                    });
                    
                    \$('.inputswitch').bootstrapSwitch();
                    \$('.selectpicker').selectpicker({});
                    
                    toastr.options = {
                        \"closeButton\": true,
                        \"debug\": false,
                        \"progressBar\": true,
                        \"positionClass\": \"toast-top-left\",
                        \"preventDuplicates\": false,
                        \"showDuration\": \"3000\",
                        \"hideDuration\": \"1000\",
                        \"timeOut\": \"10000\",
                        \"extendedTimeOut\": \"1000\",
                        \"showEasing\": \"swing\",
                        \"hideEasing\": \"linear\",
                        \"showMethod\": \"fadeIn\",
                        \"hideMethod\": \"fadeOut\"
                    }
                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 71
            echo "                        toastr.success('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transacción exitosa"), "html", null, true);
            echo "');
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 75
            echo "                        toastr.info('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Información del Sistema"), "html", null, true);
            echo "');
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                   
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 79
            echo "                        toastr.error('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error"), "html", null, true);
            echo "');
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 82
            echo "                        toastr.error('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error"), "html", null, true);
            echo "');
                    ";
        }
        // line 84
        echo "                    ";
        if (array_key_exists("invalid_username", $context)) {
            // line 85
            echo "                        toastr.error('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username")))), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mensaje del sistema"), "html", null, true);
            echo "');
                    ";
        }
        // line 87
        echo "                    ";
        if (((array_key_exists("form", $context) && ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array()) == false)) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "method", array()) == "POST"))) {
            // line 88
            echo "                        toastr.error('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Revise los valores ingresados"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error en los datos"), "html", null, true);
            echo "');
                    ";
        }
        // line 90
        echo "                    
                });
                
                
                
            </script>
           
           <script>  </script>
            
            
        ";
        
        $__internal_d9a95f77253c949503b10ec1cbe383d2394e85c2f9956dfe1a9ee50af4026432->leave($__internal_d9a95f77253c949503b10ec1cbe383d2394e85c2f9956dfe1a9ee50af4026432_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 90,  317 => 88,  314 => 87,  306 => 85,  303 => 84,  295 => 82,  292 => 81,  281 => 79,  277 => 78,  274 => 77,  263 => 75,  259 => 74,  256 => 73,  245 => 71,  241 => 70,  213 => 45,  209 => 44,  205 => 43,  201 => 42,  197 => 41,  193 => 40,  189 => 39,  185 => 38,  181 => 37,  173 => 36,  163 => 33,  157 => 32,  149 => 29,  143 => 27,  141 => 26,  138 => 25,  132 => 24,  122 => 17,  118 => 16,  114 => 15,  108 => 12,  104 => 11,  100 => 10,  96 => 9,  92 => 8,  87 => 7,  81 => 6,  69 => 5,  59 => 101,  57 => 36,  54 => 35,  52 => 32,  49 => 31,  47 => 24,  39 => 20,  37 => 6,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Sistema de Centro de Yoga Aplicada{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.min.css') }}\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/style.css') }}\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap-switch.css') }}\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/style.css') }}\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/font-awesome.min.css') }}\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap-datepicker3.min.css') }}\" type=\"text/css\" media=\"all\"/>
            <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,900|Droid+Serif:400,400italic,700italic\" rel='stylesheet' type='text/css'>
            <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel='stylesheet' type='text/css'>
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap-select.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap-select.min.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('public/js_plugins/toastr/toastr.min.css') }}\" />
               
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        
    </head>
    <body id=\"inicio\">
        {% block body %}
        
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {{ include('menu.html.twig') }}
        {% endif %}
        
        {% endblock %}
        
        {% block footer %}
        {{ include('footer.html.twig') }}
        {% endblock %}
        
        {% block javascripts %}  
            <script src=\"{{ asset('public/js/jquery-3.1.0.min.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootbox.min.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootstrap-datepicker.js') }}\"></script>
            <script src=\"{{ asset('public/js/funciones.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootstrap-switch.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootstrap-select.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootstrap-select.min.js') }}\"></script>
            <script src=\"{{ asset('public/js_plugins/toastr/toastr.min.js') }}\"></script>
            <script>
                \$(document).ready(function() {
                    \$('.js-datepicker').datepicker({
                        format: 'yyyy-mm-dd'
                    });
                    
                    \$('.inputswitch').bootstrapSwitch();
                    \$('.selectpicker').selectpicker({});
                    
                    toastr.options = {
                        \"closeButton\": true,
                        \"debug\": false,
                        \"progressBar\": true,
                        \"positionClass\": \"toast-top-left\",
                        \"preventDuplicates\": false,
                        \"showDuration\": \"3000\",
                        \"hideDuration\": \"1000\",
                        \"timeOut\": \"10000\",
                        \"extendedTimeOut\": \"1000\",
                        \"showEasing\": \"swing\",
                        \"hideEasing\": \"linear\",
                        \"showMethod\": \"fadeIn\",
                        \"hideMethod\": \"fadeOut\"
                    }
                    {% for flashMessage in app.session.flashbag.get('success') %}
                        toastr.success('{{ flashMessage|trans }}', '{{ 'Transacción exitosa'|trans }}');
                    {% endfor %}

                    {% for flashMessage in app.session.flashbag.get('notice') %}
                        toastr.info('{{ flashMessage|trans }}', '{{ 'Información del Sistema'|trans }}');
                    {% endfor %}
                   
                    {% for flashMessage in app.session.flashbag.get('error') %}
                        toastr.error('{{ flashMessage|trans }}', '{{ 'Error'|trans }}');
                    {% endfor %}
                    {% if error is defined and error %}
                        toastr.error('{{ error.messageKey|trans(error.messageData, 'security') }}', '{{ 'Error'|trans }}');
                    {% endif %}
                    {% if invalid_username is defined %}
                        toastr.error('{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}', '{{ 'Mensaje del sistema'|trans }}');
                    {% endif %}
                    {% if form is defined and form.vars.valid == false and app.request.method == 'POST' %}
                        toastr.error('{{ 'Revise los valores ingresados'|trans }}', '{{ 'Error en los datos'|trans }}');
                    {% endif %}
                    
                });
                
                
                
            </script>
           
           <script>  </script>
            
            
        {% endblock %}
    </body>
</html>

", "layout.html.twig", "/home/ubuntu/environment/app/Resources/views/layout.html.twig");
    }
}
