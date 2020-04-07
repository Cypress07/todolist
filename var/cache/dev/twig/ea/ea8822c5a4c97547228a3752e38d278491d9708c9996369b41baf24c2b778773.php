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
                    <button id=\"newlist\" class=\"btn btn-outline-primary\" type=\"submit\">
                        <i class=\"fas fa-plus-square\"></i>
                    </button>
                    </div>
                </div>
        </form>
    </li>
        </ul>
    <div class=\"col-md-5 list mb-1\">    
        ";
        // line 29
        if ((isset($context["currentlisting"]) || array_key_exists("currentlisting", $context) ? $context["currentlisting"] : (function () { throw new RuntimeError('Variable "currentlisting" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "            <nav class=\"navbar navbar-expand-lg navbar-light bg-light justify-content-between\">
                <a class=\"navbar-brand\" href=\"#\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentlisting"]) || array_key_exists("currentlisting", $context) ? $context["currentlisting"] : (function () { throw new RuntimeError('Variable "currentlisting" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</a>
                <div>
                    <a id=\"new\" href = \"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_create", ["listingId" => twig_get_attribute($this->env, $this->source, (isset($context["currentlisting"]) || array_key_exists("currentlisting", $context) ? $context["currentlisting"] : (function () { throw new RuntimeError('Variable "currentlisting" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">
                <button class=\"btn btn-outline-primary\" type=\"submit\">
                    <i class=\"fas fa-plus-square\"></i>
                    </button>
                </a>
                <a id=\"del\" href = \"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_delete", ["listingId" => twig_get_attribute($this->env, $this->source, (isset($context["currentlisting"]) || array_key_exists("currentlisting", $context) ? $context["currentlisting"] : (function () { throw new RuntimeError('Variable "currentlisting" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">
                    <button class=\"btn btn-outline-danger\" type=\"delete\">
                        <i class=\"fas fa-recycle\"></i>
                    </button>
                    </a>
                </div>
                </a>
                </nav>
           
                <div class=\"row px-4 mt-3\"> 
               <table class=\"table table-striped\">
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["currentlisting"]) || array_key_exists("currentlisting", $context) ? $context["currentlisting"] : (function () { throw new RuntimeError('Variable "currentlisting" does not exist.', 49, $this->source); })()), "tasks", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 50
                echo "                ";
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentlisting"]) || array_key_exists("currentlisting", $context) ? $context["currentlisting"] : (function () { throw new RuntimeError('Variable "currentlisting" does not exist.', 50, $this->source); })()), "tasks", [], "any", false, false, false, 50))) {
                    // line 51
                    echo "                    <tr>
                    <td>
                    <a href class=\"navbar justify-content-between\"> ";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 53), "html", null, true);
                    echo "</a>
                    </td>
                    <td>     
                    <a href = \"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["listingId" => twig_get_attribute($this->env, $this->source, (isset($context["currentlisting"]) || array_key_exists("currentlisting", $context) ? $context["currentlisting"] : (function () { throw new RuntimeError('Variable "currentlisting" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "taskId" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                    echo "\">
                            <i class=\"fas fa-pencil-alt\"></i>
                    </a>  
                    <a href = \"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_delete", ["listingId" => twig_get_attribute($this->env, $this->source, (isset($context["currentlisting"]) || array_key_exists("currentlisting", $context) ? $context["currentlisting"] : (function () { throw new RuntimeError('Variable "currentlisting" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "taskId" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                    echo "\">
                            <i class=\"far fa-trash-alt\"></i>
                            
                    </a>                
                    </td>
                    </tr>
                </div>  
            ";
                } else {
                    // line 66
                    echo "  
        <h5 class=\"navbar-brand\" >Pas de tâche existante</h5>
        <p> Vous pouvez créer une nouvelle tâche en cliquant sur le bouton
            <i class=\"fas fa-plus-square\"></i>
        </p>
        ";
                }
                // line 72
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                </table>
        ";
        } else {
            // line 75
            echo "        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">Pas de liste existante</a>
          </nav>
          <p>Vous pouvez créer une nouvelle liste en tapant son nom puis Entrée, ou en cliquant sur le bouton <i class=\"fas fa-plus-square\"></i></p>  
          ";
        }
        // line 80
        echo "        </div>
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
        return array (  223 => 80,  216 => 75,  212 => 73,  206 => 72,  198 => 66,  187 => 59,  181 => 56,  175 => 53,  171 => 51,  168 => 50,  164 => 49,  150 => 38,  142 => 33,  137 => 31,  134 => 30,  132 => 29,  115 => 15,  112 => 14,  101 => 11,  98 => 10,  94 => 9,  90 => 7,  80 => 6,  69 => 4,  59 => 3,  36 => 1,);
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
                    <button id=\"newlist\" class=\"btn btn-outline-primary\" type=\"submit\">
                        <i class=\"fas fa-plus-square\"></i>
                    </button>
                    </div>
                </div>
        </form>
    </li>
        </ul>
    <div class=\"col-md-5 list mb-1\">    
        {% if currentlisting %}
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light justify-content-between\">
                <a class=\"navbar-brand\" href=\"#\">{{currentlisting.name}}</a>
                <div>
                    <a id=\"new\" href = \"{{path ('task_create', {'listingId' : currentlisting.id }) }}\">
                <button class=\"btn btn-outline-primary\" type=\"submit\">
                    <i class=\"fas fa-plus-square\"></i>
                    </button>
                </a>
                <a id=\"del\" href = \"{{path ('listing_delete', {'listingId' : currentlisting.id }) }}\">
                    <button class=\"btn btn-outline-danger\" type=\"delete\">
                        <i class=\"fas fa-recycle\"></i>
                    </button>
                    </a>
                </div>
                </a>
                </nav>
           
                <div class=\"row px-4 mt-3\"> 
               <table class=\"table table-striped\">
                {% for task in currentlisting.tasks %}
                {% if currentlisting.tasks | length %}
                    <tr>
                    <td>
                    <a href class=\"navbar justify-content-between\"> {{task.name}}</a>
                    </td>
                    <td>     
                    <a href = \"{{path ('task_edit', {'listingId' : currentlisting.id , 'taskId' : task.id }) }}\">
                            <i class=\"fas fa-pencil-alt\"></i>
                    </a>  
                    <a href = \"{{path ('task_delete', {'listingId' : currentlisting.id, 'taskId': task.id }) }}\">
                            <i class=\"far fa-trash-alt\"></i>
                            
                    </a>                
                    </td>
                    </tr>
                </div>  
            {% else %}  
        <h5 class=\"navbar-brand\" >Pas de tâche existante</h5>
        <p> Vous pouvez créer une nouvelle tâche en cliquant sur le bouton
            <i class=\"fas fa-plus-square\"></i>
        </p>
        {% endif %}
        {% endfor %}
                </table>
        {% else %}
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">Pas de liste existante</a>
          </nav>
          <p>Vous pouvez créer une nouvelle liste en tapant son nom puis Entrée, ou en cliquant sur le bouton <i class=\"fas fa-plus-square\"></i></p>  
          {% endif %}
        </div>
{% endblock %}
", "listing.html.twig", "C:\\workspace\\todolist\\templates\\listing.html.twig");
    }
}
