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

/* classroom/show.html.twig */
class __TwigTemplate_326742626bfb622d7b05128ebfdcfa5c7e4cc3325b71e815890a05bf85f13451 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classroom/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classroom/show.html.twig"));

        // line 1
        echo "<h4>Classroom:#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["classroom"]) || array_key_exists("classroom", $context) ? $context["classroom"] : (function () { throw new RuntimeError('Variable "classroom" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["classroom"]) || array_key_exists("classroom", $context) ? $context["classroom"] : (function () { throw new RuntimeError('Variable "classroom" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "</h4>

<h4>Students of ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["classroom"]) || array_key_exists("classroom", $context) ? $context["classroom"] : (function () { throw new RuntimeError('Variable "classroom" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "</h4>
<table border=\"1\">
    <tr>
        <td>NSC</td>
        <td>Email</td>
        <td>Classe</td>
        <td>Action</td>
    </tr>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 12
            echo "        <tr>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "email", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "classroom", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateStudent", ["nsc" => twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">Update</a>
                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteStudent", ["nsc" => twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">Delete</a>
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showStudent", ["nsc" => twig_get_attribute($this->env, $this->source, $context["student"], "nsc", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">Show</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "classroom/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  66 => 12,  62 => 11,  51 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4>Classroom:#{{ classroom.id }}_{{ classroom.name }}</h4>

<h4>Students of {{ classroom.name }}</h4>
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
", "classroom/show.html.twig", "C:\\xampp\\htdocs\\Atelier_doctrine-main\\templates\\classroom\\show.html.twig");
    }
}
