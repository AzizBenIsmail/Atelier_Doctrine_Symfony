<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* classroom/list.html.twig */
class __TwigTemplate_da84f4a4589dcc8d1040965ce9d514277cf8944838bf18a313e90e6e263b2f13 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classroom/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classroom/list.html.twig"));

        // line 1
        echo "<table border=\"1\">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Action</td>
    </tr>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) || array_key_exists("classrooms", $context) ? $context["classrooms"] : (function () { throw new RuntimeError('Variable "classrooms" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
            // line 8
            echo "        <tr>
            <td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "</td>
            <td>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>

            <td> <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteClassroom", ["id" => twig_get_attribute($this->env, $this->source, $context["classroom"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">Delete</a>
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateClassroom", ["id" => twig_get_attribute($this->env, $this->source, $context["classroom"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">Update</a>
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showClassroom", ["id" => twig_get_attribute($this->env, $this->source, $context["classroom"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">Show</a></td>
            </td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>
<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addClassroom");
        echo "\">Add Classroom</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "classroom/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  86 => 19,  75 => 14,  71 => 13,  67 => 12,  62 => 10,  58 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table border=\"1\">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Action</td>
    </tr>
    {% for classroom in classrooms %}
        <tr>
            <td>{{ classroom.id }}</td>
            <td>{{ classroom.name }}</td>

            <td> <a href=\"{{ path('deleteClassroom',{'id':classroom.id}) }}\">Delete</a>
                <a href=\"{{ path('updateClassroom',{'id':classroom.id}) }}\">Update</a>
                <a href=\"{{ path('showClassroom',{'id':classroom.id}) }}\">Show</a></td>
            </td>

        </tr>
    {% endfor %}
</table>
<a href=\"{{ path('addClassroom') }}\">Add Classroom</a>
", "classroom/list.html.twig", "C:\\xampp\\htdocs\\Atelier_doctrine-main\\templates\\classroom\\list.html.twig");
    }
}
