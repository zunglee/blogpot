<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_20342e4fc25765a55c7465fd7ddb45b8cd94ce396a6a0eacc53bc589e74df279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac652e45b97602f9ef70f15daadd0718b75cc785d9cae554d1d8ad0e74cbaf80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac652e45b97602f9ef70f15daadd0718b75cc785d9cae554d1d8ad0e74cbaf80->enter($__internal_ac652e45b97602f9ef70f15daadd0718b75cc785d9cae554d1d8ad0e74cbaf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_56d16ea3d8916a9da220290acd86f0fc5bbf181ef3e4891a242eea80d01d93d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d16ea3d8916a9da220290acd86f0fc5bbf181ef3e4891a242eea80d01d93d6->enter($__internal_56d16ea3d8916a9da220290acd86f0fc5bbf181ef3e4891a242eea80d01d93d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ac652e45b97602f9ef70f15daadd0718b75cc785d9cae554d1d8ad0e74cbaf80->leave($__internal_ac652e45b97602f9ef70f15daadd0718b75cc785d9cae554d1d8ad0e74cbaf80_prof);

        
        $__internal_56d16ea3d8916a9da220290acd86f0fc5bbf181ef3e4891a242eea80d01d93d6->leave($__internal_56d16ea3d8916a9da220290acd86f0fc5bbf181ef3e4891a242eea80d01d93d6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c475b511cac6f9caee1b9c0e6a819029a63e5e68d3a1aa01d5b6e6f196ffafdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c475b511cac6f9caee1b9c0e6a819029a63e5e68d3a1aa01d5b6e6f196ffafdc->enter($__internal_c475b511cac6f9caee1b9c0e6a819029a63e5e68d3a1aa01d5b6e6f196ffafdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6e2e925f7074891a55d424825f3a1f60c3d540ac0f7f37abce9146f374e2bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e2e925f7074891a55d424825f3a1f60c3d540ac0f7f37abce9146f374e2bdf->enter($__internal_b6e2e925f7074891a55d424825f3a1f60c3d540ac0f7f37abce9146f374e2bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b6e2e925f7074891a55d424825f3a1f60c3d540ac0f7f37abce9146f374e2bdf->leave($__internal_b6e2e925f7074891a55d424825f3a1f60c3d540ac0f7f37abce9146f374e2bdf_prof);

        
        $__internal_c475b511cac6f9caee1b9c0e6a819029a63e5e68d3a1aa01d5b6e6f196ffafdc->leave($__internal_c475b511cac6f9caee1b9c0e6a819029a63e5e68d3a1aa01d5b6e6f196ffafdc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ebf0de924dc2de387c01466bba194295592c86ee26734a1ad64a98b7aa7e894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ebf0de924dc2de387c01466bba194295592c86ee26734a1ad64a98b7aa7e894->enter($__internal_2ebf0de924dc2de387c01466bba194295592c86ee26734a1ad64a98b7aa7e894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1d421233d4805de83519af54d3a5d457199fd136cecc46fe373563dfadd12ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d421233d4805de83519af54d3a5d457199fd136cecc46fe373563dfadd12ec4->enter($__internal_1d421233d4805de83519af54d3a5d457199fd136cecc46fe373563dfadd12ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1d421233d4805de83519af54d3a5d457199fd136cecc46fe373563dfadd12ec4->leave($__internal_1d421233d4805de83519af54d3a5d457199fd136cecc46fe373563dfadd12ec4_prof);

        
        $__internal_2ebf0de924dc2de387c01466bba194295592c86ee26734a1ad64a98b7aa7e894->leave($__internal_2ebf0de924dc2de387c01466bba194295592c86ee26734a1ad64a98b7aa7e894_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d1550fd8db6bf618a83f440bf917343ee8afefdb022ef00ddcbc4fe27872c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1550fd8db6bf618a83f440bf917343ee8afefdb022ef00ddcbc4fe27872c6b->enter($__internal_4d1550fd8db6bf618a83f440bf917343ee8afefdb022ef00ddcbc4fe27872c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20e4334f00d560c134e3f0216ba505ce2a1f0c82f16be329d3a7dc7eef264524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e4334f00d560c134e3f0216ba505ce2a1f0c82f16be329d3a7dc7eef264524->enter($__internal_20e4334f00d560c134e3f0216ba505ce2a1f0c82f16be329d3a7dc7eef264524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20e4334f00d560c134e3f0216ba505ce2a1f0c82f16be329d3a7dc7eef264524->leave($__internal_20e4334f00d560c134e3f0216ba505ce2a1f0c82f16be329d3a7dc7eef264524_prof);

        
        $__internal_4d1550fd8db6bf618a83f440bf917343ee8afefdb022ef00ddcbc4fe27872c6b->leave($__internal_4d1550fd8db6bf618a83f440bf917343ee8afefdb022ef00ddcbc4fe27872c6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ankitesh/myGitPro/blogpot/hotread/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
