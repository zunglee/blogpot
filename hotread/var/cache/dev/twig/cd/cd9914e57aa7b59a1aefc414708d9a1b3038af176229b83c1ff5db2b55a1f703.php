<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_06661b8783b7360d803ed65581b646fe6aca17805c9762be0efeb71f53026ab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b02cb86acb28e3c1ec725be2efed6e4f83610ac3bcca61937e539d1b5c77aae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02cb86acb28e3c1ec725be2efed6e4f83610ac3bcca61937e539d1b5c77aae4->enter($__internal_b02cb86acb28e3c1ec725be2efed6e4f83610ac3bcca61937e539d1b5c77aae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1fb97eabbb89700461ed08d19ebb4ed353eab838f4c38c33fe4fa9c944740211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb97eabbb89700461ed08d19ebb4ed353eab838f4c38c33fe4fa9c944740211->enter($__internal_1fb97eabbb89700461ed08d19ebb4ed353eab838f4c38c33fe4fa9c944740211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b02cb86acb28e3c1ec725be2efed6e4f83610ac3bcca61937e539d1b5c77aae4->leave($__internal_b02cb86acb28e3c1ec725be2efed6e4f83610ac3bcca61937e539d1b5c77aae4_prof);

        
        $__internal_1fb97eabbb89700461ed08d19ebb4ed353eab838f4c38c33fe4fa9c944740211->leave($__internal_1fb97eabbb89700461ed08d19ebb4ed353eab838f4c38c33fe4fa9c944740211_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3847e711e78aa877b69bed1330ed555a47efe2c0a7df7d2df6ab479cf8371e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3847e711e78aa877b69bed1330ed555a47efe2c0a7df7d2df6ab479cf8371e8a->enter($__internal_3847e711e78aa877b69bed1330ed555a47efe2c0a7df7d2df6ab479cf8371e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_92a984e4540c2659b4ebaaff4c48b90c0dd8dc1eeca9455020ce9e137ddc27d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a984e4540c2659b4ebaaff4c48b90c0dd8dc1eeca9455020ce9e137ddc27d3->enter($__internal_92a984e4540c2659b4ebaaff4c48b90c0dd8dc1eeca9455020ce9e137ddc27d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_92a984e4540c2659b4ebaaff4c48b90c0dd8dc1eeca9455020ce9e137ddc27d3->leave($__internal_92a984e4540c2659b4ebaaff4c48b90c0dd8dc1eeca9455020ce9e137ddc27d3_prof);

        
        $__internal_3847e711e78aa877b69bed1330ed555a47efe2c0a7df7d2df6ab479cf8371e8a->leave($__internal_3847e711e78aa877b69bed1330ed555a47efe2c0a7df7d2df6ab479cf8371e8a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/ankitesh/myGitPro/blogpot/hotread/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
