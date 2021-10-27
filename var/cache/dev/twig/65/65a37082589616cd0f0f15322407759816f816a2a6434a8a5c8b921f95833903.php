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

/* student/listWithSearch.html.twig */
class __TwigTemplate_b1198d16a0c5c13fe81ad6edd94fe1475a2258f7da87be2b283b957a95700420 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/listWithSearch.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/listWithSearch.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchStudent"]) || array_key_exists("searchStudent", $context) ? $context["searchStudent"] : (function () { throw new RuntimeError('Variable "searchStudent" does not exist.', 1, $this->source); })()), 'form');
        echo "
<table border=\"1\">
    <tr>
        <td>NSC</td>
        <td>Email</td>
        <td>Classe</td>
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
<h1>List of students order By Mail</h1>
<table border=\"1\">
    <tr>
        <td>NSC</td>
        <td>Email</td>
        <td>Classe</td>
        <td>Action</td>
    </tr>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["studentsByMail"]) || array_key_exists("studentsByMail", $context) ? $context["studentsByMail"] : (function () { throw new RuntimeError('Variable "studentsByMail" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 30
            echo "        <tr>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "classroom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateStudent", ["nsc" => twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">Update</a>
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteStudent", ["nsc" => twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">Delete</a>
                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showStudent", ["nsc" => twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Show</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "student/listWithSearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  132 => 36,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  109 => 30,  105 => 29,  93 => 20,  90 => 19,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  58 => 10,  54 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form(searchStudent) }}
<table border=\"1\">
    <tr>
        <td>NSC</td>
        <td>Email</td>
        <td>Classe</td>
        <td>Action</td>
    </tr>
    {% for student in students %}
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
<h1>List of students order By Mail</h1>
<table border=\"1\">
    <tr>
        <td>NSC</td>
        <td>Email</td>
        <td>Classe</td>
        <td>Action</td>
    </tr>
    {% for student in studentsByMail %}
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
", "student/listWithSearch.html.twig", "C:\\xampp\\htdocs\\Atelier_doctrine-main\\templates\\student\\listWithSearch.html.twig");
    }
}
