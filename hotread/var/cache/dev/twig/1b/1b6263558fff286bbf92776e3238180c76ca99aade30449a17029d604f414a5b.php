<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_18e98ad0f3ba939638c3da5eb2d745a05e0a8aa7ef166e9d5f8d24b7472c4e6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ee1fe0344015e2f42a5ef213997f4697509ec066e09c19f803bccc97bbf3e384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1fe0344015e2f42a5ef213997f4697509ec066e09c19f803bccc97bbf3e384->enter($__internal_ee1fe0344015e2f42a5ef213997f4697509ec066e09c19f803bccc97bbf3e384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ad5b47d4f3e3bfa8ee362356cb44cef9514db9d99ed7b371e7cff362c89f9cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5b47d4f3e3bfa8ee362356cb44cef9514db9d99ed7b371e7cff362c89f9cde->enter($__internal_ad5b47d4f3e3bfa8ee362356cb44cef9514db9d99ed7b371e7cff362c89f9cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee1fe0344015e2f42a5ef213997f4697509ec066e09c19f803bccc97bbf3e384->leave($__internal_ee1fe0344015e2f42a5ef213997f4697509ec066e09c19f803bccc97bbf3e384_prof);

        
        $__internal_ad5b47d4f3e3bfa8ee362356cb44cef9514db9d99ed7b371e7cff362c89f9cde->leave($__internal_ad5b47d4f3e3bfa8ee362356cb44cef9514db9d99ed7b371e7cff362c89f9cde_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_406bedcf931548de35389299c4e1236ce3c7a8ae1087a539df71903b420b4b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406bedcf931548de35389299c4e1236ce3c7a8ae1087a539df71903b420b4b8d->enter($__internal_406bedcf931548de35389299c4e1236ce3c7a8ae1087a539df71903b420b4b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0609a081cfcbde9404aaa801eeafb48cba2cc1418f6b6002dd5203d02495fd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0609a081cfcbde9404aaa801eeafb48cba2cc1418f6b6002dd5203d02495fd34->enter($__internal_0609a081cfcbde9404aaa801eeafb48cba2cc1418f6b6002dd5203d02495fd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0609a081cfcbde9404aaa801eeafb48cba2cc1418f6b6002dd5203d02495fd34->leave($__internal_0609a081cfcbde9404aaa801eeafb48cba2cc1418f6b6002dd5203d02495fd34_prof);

        
        $__internal_406bedcf931548de35389299c4e1236ce3c7a8ae1087a539df71903b420b4b8d->leave($__internal_406bedcf931548de35389299c4e1236ce3c7a8ae1087a539df71903b420b4b8d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa6a1ebe23afa8b61676eebbef497e2701c72a2cdb2845dd2bab30ea044ddeff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6a1ebe23afa8b61676eebbef497e2701c72a2cdb2845dd2bab30ea044ddeff->enter($__internal_aa6a1ebe23afa8b61676eebbef497e2701c72a2cdb2845dd2bab30ea044ddeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0a17e862138ab18dacf8bd330d76a064f0b22dd213531d42249c3da5a54d3e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a17e862138ab18dacf8bd330d76a064f0b22dd213531d42249c3da5a54d3e36->enter($__internal_0a17e862138ab18dacf8bd330d76a064f0b22dd213531d42249c3da5a54d3e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0a17e862138ab18dacf8bd330d76a064f0b22dd213531d42249c3da5a54d3e36->leave($__internal_0a17e862138ab18dacf8bd330d76a064f0b22dd213531d42249c3da5a54d3e36_prof);

        
        $__internal_aa6a1ebe23afa8b61676eebbef497e2701c72a2cdb2845dd2bab30ea044ddeff->leave($__internal_aa6a1ebe23afa8b61676eebbef497e2701c72a2cdb2845dd2bab30ea044ddeff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dfa66ed348d2e0b723c870d0fe7bb2ecd7360d3233cd242a540e6492dacd995f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa66ed348d2e0b723c870d0fe7bb2ecd7360d3233cd242a540e6492dacd995f->enter($__internal_dfa66ed348d2e0b723c870d0fe7bb2ecd7360d3233cd242a540e6492dacd995f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d5b03fb9792b7432f8523cb8170956e53a3b44e36917cd6e23be9aaea2886129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b03fb9792b7432f8523cb8170956e53a3b44e36917cd6e23be9aaea2886129->enter($__internal_d5b03fb9792b7432f8523cb8170956e53a3b44e36917cd6e23be9aaea2886129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d5b03fb9792b7432f8523cb8170956e53a3b44e36917cd6e23be9aaea2886129->leave($__internal_d5b03fb9792b7432f8523cb8170956e53a3b44e36917cd6e23be9aaea2886129_prof);

        
        $__internal_dfa66ed348d2e0b723c870d0fe7bb2ecd7360d3233cd242a540e6492dacd995f->leave($__internal_dfa66ed348d2e0b723c870d0fe7bb2ecd7360d3233cd242a540e6492dacd995f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ankitesh/myGitPro/blogpot/hotread/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
