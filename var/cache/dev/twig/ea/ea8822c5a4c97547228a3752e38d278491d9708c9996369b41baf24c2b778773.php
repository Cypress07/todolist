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

/* listing.html.twig */
class __TwigTemplate_db966ac9d08beae5b5dad1c46cea257407e8b9059d419857b34b14ad4f91e671 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listing.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "listing.html.twig", 1);
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

        // line 4
        echo "    Liste des tâches
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"col-md-4 offset-md-2 left-column mb-1\">
        <ul class=\"list_group\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new RuntimeError('Variable "listings" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
            // line 10
            echo "        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
            <a href = \"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_show", ["listingId" => twig_get_attribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listing"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "</a>
        </li>       
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
        <form method=\"post\" action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_create");
        echo " \">
            <div class=\"input-group\">
               <input type =\"text\" placeholder=\"Ajouter une liste\"
               class=\"form-control input-block-level\" name=\"name\"/>
                <div class=\"input-group-append\"></div>
                    <button class=\"btn btn-outline-primary\" type=\"submit\">
                        <i class=\"fas fa-plus-square\"></i>
                    </button>
                    </div>
                </div>
        </form>
    </li>
        </ul>
    <div class=\"col-md-5 list mb-1\">    
        </li>
        ";
        // line 30
        if ((isset($context["currentlisting"]) || array_key_exists("currentlisting", $context) ? $context["currentlisting"] : (function () { throw new RuntimeError('Variable "currentlisting" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
            <nav class=\"navbar navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"#\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentlisting"]) || array_key_exists("currentlisting", $context) ? $context["currentlisting"] : (function () { throw new RuntimeError('Variable "currentlisting" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</a>
                <a href = \"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_delete", ["listingId" => twig_get_attribute($this->env, $this->source, (isset($context["currentlisting"]) || array_key_exists("currentlisting", $context) ? $context["currentlisting"] : (function () { throw new RuntimeError('Variable "currentlisting" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"</a>
                    <button class=\"btn btn-outline-danger\" type=\"delete\"><i class=\"fas fa-radiation-alt\"></i></i></button></a>
              </nav>
            </li>
        ";
        } else {
            // line 39
            echo "        <nav class=\"navbar navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">Pas de liste existante</a>
          </nav>
        <p>Vous pouvez créer une nouvelle liste en tapant son nom puis Entrée, ou en cliquant sur le bouton <i class=\"fas fa-plus-square\"></i></p>  
        ";
        }
        // line 44
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 44,  151 => 39,  143 => 34,  139 => 33,  135 => 31,  133 => 30,  115 => 15,  112 => 14,  101 => 11,  98 => 10,  94 => 9,  90 => 7,  80 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Liste des tâches
{% endblock %}
{% block body %}
    <div class=\"col-md-4 offset-md-2 left-column mb-1\">
        <ul class=\"list_group\">
    {% for listing in listings %}
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
            <a href = \"{{path ('listing_show', {'listingId' : listing.id }) }}\">{{listing.name}}</a>
        </li>       
{% endfor %}
    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
        <form method=\"post\" action=\"{{path ('listing_create')}} \">
            <div class=\"input-group\">
               <input type =\"text\" placeholder=\"Ajouter une liste\"
               class=\"form-control input-block-level\" name=\"name\"/>
                <div class=\"input-group-append\"></div>
                    <button class=\"btn btn-outline-primary\" type=\"submit\">
                        <i class=\"fas fa-plus-square\"></i>
                    </button>
                    </div>
                </div>
        </form>
    </li>
        </ul>
    <div class=\"col-md-5 list mb-1\">    
        </li>
        {% if currentlisting %}
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
            <nav class=\"navbar navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"#\">{{currentlisting.name}}</a>
                <a href = \"{{path ('listing_delete', {'listingId' : currentlisting.id }) }}\"</a>
                    <button class=\"btn btn-outline-danger\" type=\"delete\"><i class=\"fas fa-radiation-alt\"></i></i></button></a>
              </nav>
            </li>
        {% else %}
        <nav class=\"navbar navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">Pas de liste existante</a>
          </nav>
        <p>Vous pouvez créer une nouvelle liste en tapant son nom puis Entrée, ou en cliquant sur le bouton <i class=\"fas fa-plus-square\"></i></p>  
        {% endif %}
    </div>
{% endblock %}", "listing.html.twig", "C:\\workspace\\todolist\\templates\\listing.html.twig");
    }
}
