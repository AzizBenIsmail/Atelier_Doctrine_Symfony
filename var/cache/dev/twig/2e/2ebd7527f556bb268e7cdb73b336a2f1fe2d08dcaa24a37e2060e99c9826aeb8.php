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

/* student/listWithSearchDate.html.twig */
class __TwigTemplate_2924d2f5dce93384acc7095905f4d051c08c97e4255044e3ffab0f2d2dcd5bd6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/listWithSearchDate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/listWithSearchDate.html.twig"));

        // line 1
        echo "<table border=\"1\">
    <tr>
        <td>NSC</td>
        <td>Email</td>
        <td>Date of birth</td>
        <td>Class</td>
        <td>Action</td>
    </tr>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 10
            echo "        <tr>
            <td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 11), "html", null, true);
            echo "</td>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "email", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "DateOfBirth", [], "any", false, false, false, 13)), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "classroom", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateStudent", ["nsc" => twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">Update</a>
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteStudent", ["nsc" => twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">Delete</a>
                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showStudent", ["nsc" => twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">Show</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>
<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addStudent");
        echo "\">Add Student</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "student/listWithSearchDate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  93 => 20,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table border=\"1\">
    <tr>
        <td>NSC</td>
        <td>Email</td>
        <td>Date of birth</td>
        <td>Class</td>
        <td>Action</td>
    </tr>
    {% for student in students %}
        <tr>
            <td>{{ student.nsc }}</td>
            <td>{{ student.email }}</td>
            <td>{{ student.DateOfBirth|date }}</td>
            <td>{{ student.classroom }}</td>
            <td><a href=\"{{ path('updateStudent',{'nsc':student.nsc}) }}\">Update</a>
                <a href=\"{{ path('deleteStudent',{'nsc':student.nsc}) }}\">Delete</a>
                <a href=\"{{ path('showStudent',{'nsc':student.nsc}) }}\">Show</a></td>
        </tr>
    {% endfor %}
</table>
<a href=\"{{ path('addStudent') }}\">Add Student</a>
", "student/listWithSearchDate.html.twig", "C:\\Users\\safouane\\Desktop\\Atelier\\templates\\student\\listWithSearchDate.html.twig");
    }
}
