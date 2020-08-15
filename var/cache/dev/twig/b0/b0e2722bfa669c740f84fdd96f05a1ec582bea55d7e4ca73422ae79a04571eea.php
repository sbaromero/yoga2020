<?php

/* footer.html.twig */
class __TwigTemplate_c148f2180e06b5e57f582ddff717a89763f1d72147cf31154a96d04f900c72a7 extends Twig_Template
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
        $__internal_80cadc453411caec670b9106be5cf7798de2e9586ae816fddf5c099a2680a01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80cadc453411caec670b9106be5cf7798de2e9586ae816fddf5c099a2680a01d->enter($__internal_80cadc453411caec670b9106be5cf7798de2e9586ae816fddf5c099a2680a01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer>
    <a href=\"#inicio\" class=\"head-link\">
        ";
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 4
            echo "            SUBIR <i class=\"icon ion-android-arrow-dropup\"></i>
        ";
        }
        // line 6
        echo "    </a>
</footer>";
        
        $__internal_80cadc453411caec670b9106be5cf7798de2e9586ae816fddf5c099a2680a01d->leave($__internal_80cadc453411caec670b9106be5cf7798de2e9586ae816fddf5c099a2680a01d_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
    <a href=\"#inicio\" class=\"head-link\">
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            SUBIR <i class=\"icon ion-android-arrow-dropup\"></i>
        {% endif %}
    </a>
</footer>", "footer.html.twig", "/home/ubuntu/environment/app/Resources/views/footer.html.twig");
    }
}
