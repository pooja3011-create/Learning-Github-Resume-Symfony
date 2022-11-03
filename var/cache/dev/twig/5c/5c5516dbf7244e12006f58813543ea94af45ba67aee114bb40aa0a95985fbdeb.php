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

/* resume/resume.html.twig */
class __TwigTemplate_9a25ea3d26bba47b97c55065d71f54746576cda14b60030182421bbdde2fdc87 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resume/resume.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resume/resume.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "resume/resume.html.twig", 1);
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

        echo "GitHub Resume for ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "login", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <div id=\"wrapper\" class=\"border\">
        <div id=\"container\">
            <div id=\"welcome\">
                <div class=\"githubImg\">
                    <a class=\"navbar-brand\" href=\"/\">
                        <img class=\"github-logo\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images") . (isset($context["github_logo"]) || array_key_exists("github_logo", $context) ? $context["github_logo"] : (function () { throw new RuntimeError('Variable "github_logo" does not exist.', 11, $this->source); })())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["github_logo"]) || array_key_exists("github_logo", $context) ? $context["github_logo"] : (function () { throw new RuntimeError('Variable "github_logo" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\" />
                        Github2Resume
                    </a>
                </div>
                <div id=\"back\">
                    <p>
                        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">BACK</a>
                    </p>
                </div>
                <hr>
                <div class=\"userImg text-center\">
                    ";
        // line 22
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "avatar_url", [], "any", false, false, false, 22))) {
            // line 23
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "avatar_url", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"img-thumbnail\" alt=\"avatar of ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "login", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                    ";
        }
        // line 25
        echo "                    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</h1>
                </div>
            </div>
            <div style=\"clear: both;\"></div>
            <div id=\"content\">
                <table>
                    <tr>
                        <td><strong>Username:</strong></td>
                        <td><ul><li>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "login", [], "any", false, false, false, 33), "html", null, true);
        echo "</li></ul></td>
                    </tr>
                    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "public_repos", [], "any", false, false, false, 35)) {
            // line 36
            echo "                    <tr>
                        <td><strong>Repositories:</strong></td>
                        <td><ul><li><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "html_url", [], "any", false, false, false, 38), "html", null, true);
            echo "?tab=repositories\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "public_repos", [], "any", false, false, false, 38), "html", null, true);
            echo "</a></ul></li></td>
                    </tr>
                    ";
        }
        // line 41
        echo "
                    ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "followers", [], "any", false, false, false, 42)) {
            // line 43
            echo "                    <tr>
                        <td><strong>Followers:</strong></td>
                        <td><ul><li>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "followers", [], "any", false, false, false, 45), "html", null, true);
            echo "</ul></li></td>
                    </tr>
                    ";
        }
        // line 48
        echo "
                    ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "location", [], "any", false, false, false, 49)) {
            // line 50
            echo "                    <tr>
                        <td><strong>Location:</strong></td>
                        <td><ul><li>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "location", [], "any", false, false, false, 52), "html", null, true);
            echo "</ul></li></td>
                    </tr>
                    ";
        }
        // line 55
        echo "
                    ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56)) {
            // line 57
            echo "                    <tr>
                        <td><strong>Email:</strong></td>
                        <td><ul><li><a href=\"mailto:";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), "html", null, true);
            echo "</a></ul></li></td>
                    </tr>
                    ";
        }
        // line 62
        echo "
                    ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "blog", [], "any", false, false, false, 63)) {
            // line 64
            echo "                    <tr>
                        <td><strong>Website:</strong></td>
                        <td><ul><li><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "blog", [], "any", false, false, false, 66), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "blog", [], "any", false, false, false, 66), "html", null, true);
            echo "</a></ul></li></td>
                    </tr>
                    ";
        }
        // line 69
        echo "
                    ";
        // line 70
        if ((isset($context["repos"]) || array_key_exists("repos", $context) ? $context["repos"] : (function () { throw new RuntimeError('Variable "repos" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "                    <tr>
                        <td><strong>Languages:</strong></td>
                        <td>
                            <ul>
                                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["langs"]) || array_key_exists("langs", $context) ? $context["langs"] : (function () { throw new RuntimeError('Variable "langs" does not exist.', 75, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 76
                echo "                                    <li>
                                        ";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 77), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "percentage", [], "any", false, false, false, 77), "html", null, true);
                echo "%
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                            </ul>
                        </td>
                    </tr>
                    ";
        }
        // line 84
        echo "                    
                    ";
        // line 85
        if ((isset($context["repos"]) || array_key_exists("repos", $context) ? $context["repos"] : (function () { throw new RuntimeError('Variable "repos" does not exist.', 85, $this->source); })())) {
            // line 86
            echo "                    <tr>
                        <td><strong>Repositories:</strong></td>
                        <td>
                            <ul class=\"userDetails\">
                                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["repos"]) || array_key_exists("repos", $context) ? $context["repos"] : (function () { throw new RuntimeError('Variable "repos" does not exist.', 90, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["repo"]) {
                // line 91
                echo "                                    <li>
                                        <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repo"], "html_url", [], "any", false, false, false, 92), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repo"], "name", [], "any", false, false, false, 92), "html", null, true);
                echo "</a>
                                        ";
                // line 93
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["repo"], "description", [], "any", false, false, false, 93))) {
                    // line 94
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repo"], "description", [], "any", false, false, false, 94), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 96
                echo "
                                        <div class=\"repoDetails\">
                                            ";
                // line 98
                if (twig_get_attribute($this->env, $this->source, $context["repo"], "language", [], "any", false, false, false, 98)) {
                    // line 99
                    echo "                                                <span class=\"mr-3\">
                                                    <span class=\"repo-lan\"></span>
                                                    <span>";
                    // line 101
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repo"], "language", [], "any", false, false, false, 101), "html", null, true);
                    echo "</span>
                                                </span>
                                            ";
                }
                // line 104
                echo "
                                            ";
                // line 105
                if (twig_get_attribute($this->env, $this->source, $context["repo"], "stargazers_count", [], "any", false, false, false, 105)) {
                    // line 106
                    echo "                                                <a class=\"mr-3 stargazersCount\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repo"], "html_url", [], "any", false, false, false, 106), "html", null, true);
                    echo "/stargazers\">
                                                    <span class=\"star\">☆</span>
                                                    <span class=\"stargazers_count\">";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repo"], "stargazers_count", [], "any", false, false, false, 108), "html", null, true);
                    echo "</span>
                                                </a>
                                            ";
                }
                // line 111
                echo "
                                            ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["repo"], "pushed_at", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "                                                <span>Updated on ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repo"], "pushed_at", [], "any", false, false, false, 113), "F d, Y"), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 115
                echo "                                        </div>
                                    </li>
                                    <hr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                            </ul>
                        </td>
                    </tr>
                    ";
        }
        // line 123
        echo "                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "resume/resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 123,  340 => 119,  331 => 115,  325 => 113,  323 => 112,  320 => 111,  314 => 108,  308 => 106,  306 => 105,  303 => 104,  297 => 101,  293 => 99,  291 => 98,  287 => 96,  281 => 94,  279 => 93,  273 => 92,  270 => 91,  266 => 90,  260 => 86,  258 => 85,  255 => 84,  249 => 80,  238 => 77,  235 => 76,  231 => 75,  225 => 71,  223 => 70,  220 => 69,  212 => 66,  208 => 64,  206 => 63,  203 => 62,  195 => 59,  191 => 57,  189 => 56,  186 => 55,  180 => 52,  176 => 50,  174 => 49,  171 => 48,  165 => 45,  161 => 43,  159 => 42,  156 => 41,  148 => 38,  144 => 36,  142 => 35,  137 => 33,  125 => 25,  117 => 23,  115 => 22,  107 => 17,  96 => 11,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}GitHub Resume for {{ user.login }}{% endblock %}

{% block body %}
    <div id=\"wrapper\" class=\"border\">
        <div id=\"container\">
            <div id=\"welcome\">
                <div class=\"githubImg\">
                    <a class=\"navbar-brand\" href=\"/\">
                        <img class=\"github-logo\" src=\"{{ asset(\"images\") ~  github_logo }}\" alt=\"{{ github_logo }}\" />
                        Github2Resume
                    </a>
                </div>
                <div id=\"back\">
                    <p>
                        <a href=\"{{ url('home') }}\">BACK</a>
                    </p>
                </div>
                <hr>
                <div class=\"userImg text-center\">
                    {% if user.avatar_url is not empty %}
                        <img src=\"{{ user.avatar_url }}\" class=\"img-thumbnail\" alt=\"avatar of {{ user.login }}\">
                    {% endif %}
                    <h1>{{ user.name }}</h1>
                </div>
            </div>
            <div style=\"clear: both;\"></div>
            <div id=\"content\">
                <table>
                    <tr>
                        <td><strong>Username:</strong></td>
                        <td><ul><li>{{ user.login }}</li></ul></td>
                    </tr>
                    {% if user.public_repos %}
                    <tr>
                        <td><strong>Repositories:</strong></td>
                        <td><ul><li><a href=\"{{ user.html_url }}?tab=repositories\">{{ user.public_repos }}</a></ul></li></td>
                    </tr>
                    {% endif %}

                    {% if user.followers %}
                    <tr>
                        <td><strong>Followers:</strong></td>
                        <td><ul><li>{{ user.followers }}</ul></li></td>
                    </tr>
                    {% endif %}

                    {% if user.location %}
                    <tr>
                        <td><strong>Location:</strong></td>
                        <td><ul><li>{{ user.location }}</ul></li></td>
                    </tr>
                    {% endif %}

                    {% if user.email %}
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td><ul><li><a href=\"mailto:{{ user.email }}\">{{ user.email }}</a></ul></li></td>
                    </tr>
                    {% endif %}

                    {% if user.blog %}
                    <tr>
                        <td><strong>Website:</strong></td>
                        <td><ul><li><a href=\"{{ user.blog }}\">{{ user.blog }}</a></ul></li></td>
                    </tr>
                    {% endif %}

                    {% if repos %}
                    <tr>
                        <td><strong>Languages:</strong></td>
                        <td>
                            <ul>
                                {% for lang in langs %}
                                    <li>
                                        {{ lang.name }} - {{ lang.percentage }}%
                                    </li>
                                {% endfor %}
                            </ul>
                        </td>
                    </tr>
                    {% endif %}
                    
                    {% if repos %}
                    <tr>
                        <td><strong>Repositories:</strong></td>
                        <td>
                            <ul class=\"userDetails\">
                                {% for repo in repos %}
                                    <li>
                                        <a href=\"{{ repo.html_url }}\">{{ repo.name }}</a>
                                        {% if repo.description is not empty %}
                                            <p>{{ repo.description }}</p>
                                        {% endif %}

                                        <div class=\"repoDetails\">
                                            {% if repo.language %}
                                                <span class=\"mr-3\">
                                                    <span class=\"repo-lan\"></span>
                                                    <span>{{ repo.language }}</span>
                                                </span>
                                            {% endif %}

                                            {% if repo.stargazers_count %}
                                                <a class=\"mr-3 stargazersCount\" href=\"{{repo.html_url}}/stargazers\">
                                                    <span class=\"star\">☆</span>
                                                    <span class=\"stargazers_count\">{{ repo.stargazers_count }}</span>
                                                </a>
                                            {% endif %}

                                            {% if repo.pushed_at %}
                                                <span>Updated on {{ repo.pushed_at | date('F d, Y') }}</span>
                                            {% endif %}
                                        </div>
                                    </li>
                                    <hr>
                                {% endfor %}
                            </ul>
                        </td>
                    </tr>
                    {% endif %}
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "resume/resume.html.twig", "/var/www/html/github-resume/templates/resume/resume.html.twig");
    }
}
