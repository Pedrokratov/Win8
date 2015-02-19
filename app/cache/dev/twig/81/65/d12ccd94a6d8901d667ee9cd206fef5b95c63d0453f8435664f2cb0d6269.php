<?php

/* Win8LayoutBundle::master.html.twig */
class __TwigTemplate_8165d12ccd94a6d8901d667ee9cd206fef5b95c63d0453f8435664f2cb0d6269 extends Twig_Template
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
        // line 14
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<div class=\"container\">
    <h1>Szkolenie Windows 8</h1>
    <nav role=\"navigation\" class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"navbar-collapse collapse\" id=\"navbar\">
                ";
        // line 23
        echo $this->env->getExtension('knp_menu')->render("Win8LayoutBundle:Builder:mainMenu");
        echo "
            </div>
        </div>
    </nav>


    ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
</div>
";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Zapisy";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ad954db_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad954db_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ad954db_style_1.css");
            // line 11
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\">
        ";
            // asset "ad954db_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad954db_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ad954db_bootstrap.min_2.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\">
        ";
        } else {
            // asset "ad954db"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad954db") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ad954db.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\">
        ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    ";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "
    ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "633fbb5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_633fbb5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/633fbb5_jquery-1.11.1.min_1.js");
            // line 39
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "633fbb5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_633fbb5_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/633fbb5_bootstrap.min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "633fbb5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_633fbb5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/633fbb5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "Win8LayoutBundle::master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  120 => 35,  117 => 34,  112 => 30,  109 => 29,  105 => 13,  85 => 11,  80 => 7,  77 => 6,  71 => 5,  65 => 42,  63 => 34,  59 => 32,  57 => 29,  48 => 23,  35 => 14,  33 => 6,  29 => 5,  23 => 1,);
    }
}
