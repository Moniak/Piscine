<?php

/* base.html.twig */
class __TwigTemplate_162bbc603dfc728c993b8ef0f28953b39d4606f123178af2d1d3421c0b3f275b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de9495b91d1afcd43e0bd47193fb28e1b4b3e45fa59bc509580a2730ffc695f0 = $this->env->getExtension("native_profiler");
        $__internal_de9495b91d1afcd43e0bd47193fb28e1b4b3e45fa59bc509580a2730ffc695f0->enter($__internal_de9495b91d1afcd43e0bd47193fb28e1b4b3e45fa59bc509580a2730ffc695f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_de9495b91d1afcd43e0bd47193fb28e1b4b3e45fa59bc509580a2730ffc695f0->leave($__internal_de9495b91d1afcd43e0bd47193fb28e1b4b3e45fa59bc509580a2730ffc695f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7f20afb58ec5d8453b2170d9f8df41bfe7455c20bbcd18543bb1bd6be235ead = $this->env->getExtension("native_profiler");
        $__internal_b7f20afb58ec5d8453b2170d9f8df41bfe7455c20bbcd18543bb1bd6be235ead->enter($__internal_b7f20afb58ec5d8453b2170d9f8df41bfe7455c20bbcd18543bb1bd6be235ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b7f20afb58ec5d8453b2170d9f8df41bfe7455c20bbcd18543bb1bd6be235ead->leave($__internal_b7f20afb58ec5d8453b2170d9f8df41bfe7455c20bbcd18543bb1bd6be235ead_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_155a3dab4d0d516703e095ff228a47d8ab37adc08eabb778e90ff7af5315c7bf = $this->env->getExtension("native_profiler");
        $__internal_155a3dab4d0d516703e095ff228a47d8ab37adc08eabb778e90ff7af5315c7bf->enter($__internal_155a3dab4d0d516703e095ff228a47d8ab37adc08eabb778e90ff7af5315c7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_155a3dab4d0d516703e095ff228a47d8ab37adc08eabb778e90ff7af5315c7bf->leave($__internal_155a3dab4d0d516703e095ff228a47d8ab37adc08eabb778e90ff7af5315c7bf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4790cfce4b62093625b42fcb97e8af0918d808ebcaa97d0f24cce5d0ffe89ace = $this->env->getExtension("native_profiler");
        $__internal_4790cfce4b62093625b42fcb97e8af0918d808ebcaa97d0f24cce5d0ffe89ace->enter($__internal_4790cfce4b62093625b42fcb97e8af0918d808ebcaa97d0f24cce5d0ffe89ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4790cfce4b62093625b42fcb97e8af0918d808ebcaa97d0f24cce5d0ffe89ace->leave($__internal_4790cfce4b62093625b42fcb97e8af0918d808ebcaa97d0f24cce5d0ffe89ace_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6986936f2fc2929ea7fe6b997c3160cd46c9c2233b557d1e22dcd7fbe5c44c63 = $this->env->getExtension("native_profiler");
        $__internal_6986936f2fc2929ea7fe6b997c3160cd46c9c2233b557d1e22dcd7fbe5c44c63->enter($__internal_6986936f2fc2929ea7fe6b997c3160cd46c9c2233b557d1e22dcd7fbe5c44c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6986936f2fc2929ea7fe6b997c3160cd46c9c2233b557d1e22dcd7fbe5c44c63->leave($__internal_6986936f2fc2929ea7fe6b997c3160cd46c9c2233b557d1e22dcd7fbe5c44c63_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
