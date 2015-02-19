<?php

/* Win8EnrolBundle:Enrol:showAll.html.twig */
class __TwigTemplate_5bdeb6151c65debe457a54c3f44b6e17e2746f9a010f9f5303f6a27849f33954 extends Twig_Template
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
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Dział</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["registrations"]) ? $context["registrations"] : $this->getContext($context, "registrations")));
        foreach ($context['_seq'] as $context["_key"] => $context["registered"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["registered"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["registered"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["registered"], "surname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["registered"], "department", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registration_delete", array("id" => $this->getAttribute($context["registered"], "id", array()))), "html", null, true);
            echo "\">
                        [Usuń]
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registered'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "Win8EnrolBundle:Enrol:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  84 => 25,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  64 => 19,  60 => 18,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
