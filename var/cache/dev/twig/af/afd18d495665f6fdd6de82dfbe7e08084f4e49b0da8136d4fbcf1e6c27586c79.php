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

/* club/list.html.twig */
class __TwigTemplate_c357f23027d4ca4fc0238774141ab59defe2483b1d066e6c7b7feaeddf112d94 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/list.html.twig"));

        // line 1
        echo "<h1>Liste des clubs</h1>
<table border=\"1\">
    <tr>
        <td>REF</td>
        <td>Creation_Date</td>
        <td>Action</td>
    </tr>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 9
            echo "        <tr>
            <td>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "ref", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>
            <td>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "creationDate", [], "any", false, false, false, 11)), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateClub", ["id" => twig_get_attribute($this->env, $this->source, $context["club"], "ref", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">Update</a>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteClub", ["id" => twig_get_attribute($this->env, $this->source, $context["club"], "ref", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">Delete</a>
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showClub", ["id" => twig_get_attribute($this->env, $this->source, $context["club"], "ref", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">Show</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</table>
<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addClub");
        echo "\">Add Club</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "club/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  84 => 17,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Liste des clubs</h1>
<table border=\"1\">
    <tr>
        <td>REF</td>
        <td>Creation_Date</td>
        <td>Action</td>
    </tr>
    {% for club in clubs %}
        <tr>
            <td>{{ club.ref }}</td>
            <td>{{ club.creationDate|date }}</td>
            <td><a href=\"{{ path('updateClub',{'id':club.ref}) }}\">Update</a>
            <a href=\"{{ path('deleteClub',{'id':club.ref}) }}\">Delete</a>
            <a href=\"{{ path('showClub',{'id':club.ref}) }}\">Show</a></td>
        </tr>
    {% endfor %}
</table>
<a href=\"{{ path('addClub') }}\">Add Club</a>
", "club/list.html.twig", "C:\\Users\\safouane\\Desktop\\Atelier\\templates\\club\\list.html.twig");
    }
}
