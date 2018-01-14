<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fa8b1657fa76ee54466d7f5a5e13a7a092890726d47d7fd53fccbe8d612f8345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_802871b31f4d8c5bd6395ee54049252748a3575f5f37445d0ba8758247182d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802871b31f4d8c5bd6395ee54049252748a3575f5f37445d0ba8758247182d5e->enter($__internal_802871b31f4d8c5bd6395ee54049252748a3575f5f37445d0ba8758247182d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a7c99ef4765b4eab4bc59f3fc07542558ae740a5a5127b75e8ed16a9973d1894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c99ef4765b4eab4bc59f3fc07542558ae740a5a5127b75e8ed16a9973d1894->enter($__internal_a7c99ef4765b4eab4bc59f3fc07542558ae740a5a5127b75e8ed16a9973d1894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_802871b31f4d8c5bd6395ee54049252748a3575f5f37445d0ba8758247182d5e->leave($__internal_802871b31f4d8c5bd6395ee54049252748a3575f5f37445d0ba8758247182d5e_prof);

        
        $__internal_a7c99ef4765b4eab4bc59f3fc07542558ae740a5a5127b75e8ed16a9973d1894->leave($__internal_a7c99ef4765b4eab4bc59f3fc07542558ae740a5a5127b75e8ed16a9973d1894_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f8b1900cf4de3092fac9fca4c76ce1b088d2d1d17ab02f26f11de92a59ae8f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b1900cf4de3092fac9fca4c76ce1b088d2d1d17ab02f26f11de92a59ae8f1f->enter($__internal_f8b1900cf4de3092fac9fca4c76ce1b088d2d1d17ab02f26f11de92a59ae8f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e8f84a527d4507edcb7f8e88b2ff613704a76ca434ba35becf4064b830098a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f84a527d4507edcb7f8e88b2ff613704a76ca434ba35becf4064b830098a2a->enter($__internal_e8f84a527d4507edcb7f8e88b2ff613704a76ca434ba35becf4064b830098a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8f84a527d4507edcb7f8e88b2ff613704a76ca434ba35becf4064b830098a2a->leave($__internal_e8f84a527d4507edcb7f8e88b2ff613704a76ca434ba35becf4064b830098a2a_prof);

        
        $__internal_f8b1900cf4de3092fac9fca4c76ce1b088d2d1d17ab02f26f11de92a59ae8f1f->leave($__internal_f8b1900cf4de3092fac9fca4c76ce1b088d2d1d17ab02f26f11de92a59ae8f1f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94a9e1b91c401e69846df0b5a8722a680e3c30b04a594eac6c28dcf0fba99dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a9e1b91c401e69846df0b5a8722a680e3c30b04a594eac6c28dcf0fba99dee->enter($__internal_94a9e1b91c401e69846df0b5a8722a680e3c30b04a594eac6c28dcf0fba99dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_606892f6df8f243275b925b4edbfe2d7d4fb5bb3e3460b6b3f2d427e6cbe5263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606892f6df8f243275b925b4edbfe2d7d4fb5bb3e3460b6b3f2d427e6cbe5263->enter($__internal_606892f6df8f243275b925b4edbfe2d7d4fb5bb3e3460b6b3f2d427e6cbe5263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_606892f6df8f243275b925b4edbfe2d7d4fb5bb3e3460b6b3f2d427e6cbe5263->leave($__internal_606892f6df8f243275b925b4edbfe2d7d4fb5bb3e3460b6b3f2d427e6cbe5263_prof);

        
        $__internal_94a9e1b91c401e69846df0b5a8722a680e3c30b04a594eac6c28dcf0fba99dee->leave($__internal_94a9e1b91c401e69846df0b5a8722a680e3c30b04a594eac6c28dcf0fba99dee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d761b75ce5f90d0c360fd1d45426a54b6458f8faff55b33225231aad474009d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d761b75ce5f90d0c360fd1d45426a54b6458f8faff55b33225231aad474009d5->enter($__internal_d761b75ce5f90d0c360fd1d45426a54b6458f8faff55b33225231aad474009d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0acba9d3e9d12a14ca5d621c1cd564c23a066607d10f3942491f4e9dd1fab882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acba9d3e9d12a14ca5d621c1cd564c23a066607d10f3942491f4e9dd1fab882->enter($__internal_0acba9d3e9d12a14ca5d621c1cd564c23a066607d10f3942491f4e9dd1fab882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0acba9d3e9d12a14ca5d621c1cd564c23a066607d10f3942491f4e9dd1fab882->leave($__internal_0acba9d3e9d12a14ca5d621c1cd564c23a066607d10f3942491f4e9dd1fab882_prof);

        
        $__internal_d761b75ce5f90d0c360fd1d45426a54b6458f8faff55b33225231aad474009d5->leave($__internal_d761b75ce5f90d0c360fd1d45426a54b6458f8faff55b33225231aad474009d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ankitesh/myGitPro/blogpot/hotread/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
