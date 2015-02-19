<?php

/* Win8EnrolBundle:Termin:list.html.twig */
class __TwigTemplate_7625b85482d1b140c202bc4340076b5e5f84f763318d29b6fb6c776939ff8248 extends Twig_Template
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
        echo "    <div>    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("new_termin");
        echo "\">
            <h1 style=\"color: #000000; border-style:solid;border-width: 1px;background-color: cornflowerblue;\">Dodaj nowy termin</h1>
        </a></div>


<table class=\"table\">
    <thead>
    <tr>
        <th>Id</th>
        <th>Data od</th>
        <th>Data do</th>
        <th>Liczba osób</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["termins"]) ? $context["termins"] : $this->getContext($context, "termins")));
        foreach ($context['_seq'] as $context["_key"] => $context["termin"]) {
            // line 23
            echo "        <tr>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["termin"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["termin"], "datefrom", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["termin"], "dateto", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["termin"], "availableplaceno", array()), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("termin_delete", array("id" => $this->getAttribute($context["termin"], "id", array()))), "html", null, true);
            echo "\">
                    [Usuń]
                </a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['termin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "Win8EnrolBundle:Termin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  90 => 29,  85 => 27,  81 => 26,  77 => 25,  73 => 24,  70 => 23,  66 => 22,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
