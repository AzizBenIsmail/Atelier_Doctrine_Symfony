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

/* student/listStudentsEnabled.html.twig */
class __TwigTemplate_ee786175d5dbedc461b67bf6d2a0f3ef160ded9301b725bae76473e19ce991de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/listStudentsEnabled.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/listStudentsEnabled.html.twig"));

        // line 1
        echo "<h1>Enabled Students</h1>
<table border=\"1\">
    <tr>
        <td>NSC</td>
        <td>Email</td>
        <td>Class</td>
        <td>Action</td>
    </tr>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["studentsByEnabled"]) || array_key_exists("studentsByEnabled", $context) ? $context["studentsByEnabled"] : (function () { throw new RuntimeError('Variable "studentsByEnabled" does not exist.', 9, $this->source); })()));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "classroom", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateStudent", ["nsc" => twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">Update</a>
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteStudent", ["nsc" => twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">Delete</a>
            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showStudent", ["nsc" => twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">Show</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>
<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addStudent");
        echo "\">Add Student</a>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "student/listStudentsEnabled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  89 => 19,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Enabled Students</h1>
<table border=\"1\">
    <tr>
        <td>NSC</td>
        <td>Email</td>
        <td>Class</td>
        <td>Action</td>
    </tr>
    {% for student in studentsByEnabled %}
        <tr>
            <td>{{ student.nsc }}</td>
            <td>{{ student.email }}</td>
            <td>{{ student.classroom }}</td>
            <td><a href=\"{{ path('updateStudent',{'nsc':student.nsc}) }}\">Update</a>
            <a href=\"{{ path('deleteStudent',{'nsc':student.nsc}) }}\">Delete</a>
            <a href=\"{{ path('showStudent',{'nsc':student.nsc}) }}\">Show</a></td>
        </tr>
    {% endfor %}
</table>
<a href=\"{{ path('addStudent') }}\">Add Student</a>

", "student/listStudentsEnabled.html.twig", "C:\\Users\\safouane\\Desktop\\Atelier\\templates\\student\\listStudentsEnabled.html.twig");
    }
}
