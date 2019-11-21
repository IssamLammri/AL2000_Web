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

/* Home/home.html.twig */
class __TwigTemplate_4b1d4beaa4037a98f0c990aa0d407da9d7352b0748fce72840a3d366e7ff687b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Home/home.html.twig", 1);
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

        echo "AL2000";
        
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
        <h1> Welcome to AL2000</h1>
        <p> En déployant l’AL2000, CyberVideo cherche (1) à réduire ses coûts et (2) à apporter des
            services de proximité à ses clients. Pour réussir CyberVideo doit également (3) satisfaire les
            petits commençants exploitant directement les AL2000 (les opérateurs).
            1. Les coûts liés aux opérations nominales et à la maintenance de l’AL2000 doivent être
            minimaux. En particulier :
            • il faut donner aux opérateurs les moyens de gérer entièrement la location des DVDs et,
            ainsi, limiter fortement les interventions d’employés CyberVideo.
            • il faut donner aux abonnés les moyens de gérer eux-mêmes leurs abonnements.
            2. Les clients doivent percevoir en l’AL2000 l’émergence d’un nouveau service de proximité
            facile d’usage. Il faut donc :
            • installer des AL2000 dans des endroits stratégiques où les personnes passent souvent
            • permettre des modes de paiements divers
            • permettre des locations rapides (une location ou une restitution ne doit pas dépasser
            quelques minutes)
            • fournir des moyens pour favoriser les abonnements et fidéliser les clients
            3. Les petits commerçants doivent trouver leur intérêt. En particulier :
            • il faut donner aux opérateurs la possibilité de fixer leurs prix (à partir d’un tarif de
            base défini par CyberVideo)
            • il faut donner aux opérateurs des moyens de communiquer avec leurs clients pour
            gérer le contenu de l’AL2000 et leur politique tarifaire
            Enfin, CyberVideo se soucie beaucoup de son image de « partenaire privilégié des familles ».
            Il faut donc mettre en œuvre des mécanismes de protection des mineurs.
        </p>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'base.html.twig' %}

{% block title 'AL2000' %}

{% block body %}

    <div class=\"jumbotron text-center\">
        <h1> Welcome to AL2000</h1>
        <p> En déployant l’AL2000, CyberVideo cherche (1) à réduire ses coûts et (2) à apporter des
            services de proximité à ses clients. Pour réussir CyberVideo doit également (3) satisfaire les
            petits commençants exploitant directement les AL2000 (les opérateurs).
            1. Les coûts liés aux opérations nominales et à la maintenance de l’AL2000 doivent être
            minimaux. En particulier :
            • il faut donner aux opérateurs les moyens de gérer entièrement la location des DVDs et,
            ainsi, limiter fortement les interventions d’employés CyberVideo.
            • il faut donner aux abonnés les moyens de gérer eux-mêmes leurs abonnements.
            2. Les clients doivent percevoir en l’AL2000 l’émergence d’un nouveau service de proximité
            facile d’usage. Il faut donc :
            • installer des AL2000 dans des endroits stratégiques où les personnes passent souvent
            • permettre des modes de paiements divers
            • permettre des locations rapides (une location ou une restitution ne doit pas dépasser
            quelques minutes)
            • fournir des moyens pour favoriser les abonnements et fidéliser les clients
            3. Les petits commerçants doivent trouver leur intérêt. En particulier :
            • il faut donner aux opérateurs la possibilité de fixer leurs prix (à partir d’un tarif de
            base défini par CyberVideo)
            • il faut donner aux opérateurs des moyens de communiquer avec leurs clients pour
            gérer le contenu de l’AL2000 et leur politique tarifaire
            Enfin, CyberVideo se soucie beaucoup de son image de « partenaire privilégié des familles ».
            Il faut donc mettre en œuvre des mécanismes de protection des mineurs.
        </p>
    </div>


{% endblock %}", "Home/home.html.twig", "E:\\Projet AL2000\\AL2000 Web\\AL2000_Site\\templates\\Home\\Home.html.twig");
    }
}
