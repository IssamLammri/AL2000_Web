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

/* CRUD/Tous.html.twig */
class __TwigTemplate_cc0fc83a33ee586e650ce90fadb3105c403afed33b298524621633d412e22396 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "CRUD/Tous.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "CRUD/Tous.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "CRUD/Tous.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CRUD AL2000";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"jumbotron text-center\">
        <h1> Welcome to AL2000 ADMIN</h1>

    </div>
    <div class=\"card bg-white text-dark\">
            <div class=\"container\">
                <h1> CRUD </h1>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonne_index");
        echo "\"> Abonne </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Acteur </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Administrateur </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> AL2000 </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Carte_Abonnement </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Carte Bleu </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Catalogue </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Catalogue Film</a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Client</a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Demande_Film</a>

                <a class=\"btn btn-outline-dark\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> DVD </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Employer </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\">Film </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Film Genre </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Genre </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Interdité Genre  </a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Location</a>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Crud");
        echo "\"> Technicien  </a>

            </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "CRUD/Tous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 32,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  147 => 27,  143 => 26,  139 => 25,  134 => 23,  130 => 22,  126 => 21,  122 => 20,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'base.html.twig' %}

{% block title 'CRUD AL2000' %}

{% block body %}

    <div class=\"jumbotron text-center\">
        <h1> Welcome to AL2000 ADMIN</h1>

    </div>
    <div class=\"card bg-white text-dark\">
            <div class=\"container\">
                <h1> CRUD </h1>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('abonne_index') }}\"> Abonne </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Acteur </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Administrateur </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> AL2000 </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Carte_Abonnement </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Carte Bleu </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Catalogue </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Catalogue Film</a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Client</a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Demande_Film</a>

                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> DVD </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Employer </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\">Film </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Film Genre </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Genre </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Interdité Genre  </a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Location</a>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('Crud') }}\"> Technicien  </a>

            </div>
    </div>

{% endblock %}", "CRUD/Tous.html.twig", "E:\\Projet AL2000\\AL2000 Web\\AL2000_Site\\templates\\CRUD\\Tous.html.twig");
    }
}
