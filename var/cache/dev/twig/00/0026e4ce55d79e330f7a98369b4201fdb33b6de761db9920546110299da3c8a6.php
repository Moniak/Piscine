<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dfb61a470f51165f5336c32968ac0edd6a030f024f47ef9b203eea54de111413 extends Twig_Template
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
        $__internal_ed0384da119873f1ad80978e094f0132215fa1cab5684c3acfe84b1990523ea3 = $this->env->getExtension("native_profiler");
        $__internal_ed0384da119873f1ad80978e094f0132215fa1cab5684c3acfe84b1990523ea3->enter($__internal_ed0384da119873f1ad80978e094f0132215fa1cab5684c3acfe84b1990523ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed0384da119873f1ad80978e094f0132215fa1cab5684c3acfe84b1990523ea3->leave($__internal_ed0384da119873f1ad80978e094f0132215fa1cab5684c3acfe84b1990523ea3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72b92dbaa70c05103de2f972c5826ae5f1e73ecf16812dad1eb4d39e9cff1fa5 = $this->env->getExtension("native_profiler");
        $__internal_72b92dbaa70c05103de2f972c5826ae5f1e73ecf16812dad1eb4d39e9cff1fa5->enter($__internal_72b92dbaa70c05103de2f972c5826ae5f1e73ecf16812dad1eb4d39e9cff1fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72b92dbaa70c05103de2f972c5826ae5f1e73ecf16812dad1eb4d39e9cff1fa5->leave($__internal_72b92dbaa70c05103de2f972c5826ae5f1e73ecf16812dad1eb4d39e9cff1fa5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_791454bffcf940af956075b6619d76fc2078a0c47ea4430918a123516f585b0e = $this->env->getExtension("native_profiler");
        $__internal_791454bffcf940af956075b6619d76fc2078a0c47ea4430918a123516f585b0e->enter($__internal_791454bffcf940af956075b6619d76fc2078a0c47ea4430918a123516f585b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_791454bffcf940af956075b6619d76fc2078a0c47ea4430918a123516f585b0e->leave($__internal_791454bffcf940af956075b6619d76fc2078a0c47ea4430918a123516f585b0e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dda27fbb99aedb2466f26031bd50a8a0ffc068cd1cc287561e2b53246af76fe0 = $this->env->getExtension("native_profiler");
        $__internal_dda27fbb99aedb2466f26031bd50a8a0ffc068cd1cc287561e2b53246af76fe0->enter($__internal_dda27fbb99aedb2466f26031bd50a8a0ffc068cd1cc287561e2b53246af76fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dda27fbb99aedb2466f26031bd50a8a0ffc068cd1cc287561e2b53246af76fe0->leave($__internal_dda27fbb99aedb2466f26031bd50a8a0ffc068cd1cc287561e2b53246af76fe0_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
