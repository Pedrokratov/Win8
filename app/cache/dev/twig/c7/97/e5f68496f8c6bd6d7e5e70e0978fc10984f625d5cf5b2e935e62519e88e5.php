<?php

/* Win8EnrolBundle:Enrol:report.html.twig */
class __TwigTemplate_c797e5f68496f8c6bd6d7e5e70e0978fc10984f625d5cf5b2e935e62519e88e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("Win8LayoutBundle::master.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Win8LayoutBundle::master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Win8EnrolBundle:Enrol:register";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <table class=\"table\">
        <thead>
        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Dział</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registration"]) ? $context["registration"] : $this->getContext($context, "registration")), "firstname", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registration"]) ? $context["registration"] : $this->getContext($context, "registration")), "surname", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registration"]) ? $context["registration"] : $this->getContext($context, "registration")), "department", array()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "Win8EnrolBundle:Enrol:report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  64 => 19,  60 => 18,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
