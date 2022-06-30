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

/* base.html */
class __TwigTemplate_8b6dc869993e36da32ccaf9f2a681230 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'navbar' => [$this, 'block_navbar'],
            'login' => [$this, 'block_login'],
            'content' => [$this, 'block_content'],
            'name' => [$this, 'block_name'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        ob_start();
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "</head>

<body>
    <div class=\"container-fluid !direction !spacing\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-9\">
                <div class=\"row\" id=\"navbar\">
                    ";
        // line 24
        $this->displayBlock('navbar', $context, $blocks);
        // line 51
        echo "                </div>
                <div class=\"row\" id=\"content\">";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        echo " </div>
                <div class=\"row\" id=\"footer\">";
        // line 53
        $this->displayBlock('name', $context, $blocks);
        echo "</div>
            </div>
        </div>
    </div>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\"
        crossorigin=\"anonymous\"></script>
</body>

</html>
";
        $extension = $this->env->getExtension(\nochso\HtmlCompressTwig\Extension::class);
        echo $extension->compress($this->env, ob_get_clean());
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>


    <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo " - Diễn đàn</title>
    ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 24
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                        <div class=\"container-fluid\">
                            <a class=\"navbar-brand\" href=\"/\">Diễn Đàn</a>
                            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                                data-bs-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\"
                                aria-label=\"Toggle navigation\">
                                <span class=\"navbar-toggler-icon\"></span>
                            </button>
                            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Trang chủ</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/post\">Bài viết</a>
                                    </li>
                                </ul>
                                ";
        // line 42
        $this->displayBlock('login', $context, $blocks);
        // line 47
        echo "                            </div>
                        </div>
                    </nav>
                    ";
    }

    // line 42
    public function block_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "loggedIn", [], "any", false, false, false, 43) == true)) {
            // line 44
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "email", [], "any", false, false, false, 44), "html", null, true);
            echo "
                                ";
        }
        // line 46
        echo "                                ";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 53
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 53,  163 => 52,  159 => 46,  153 => 44,  150 => 43,  146 => 42,  139 => 47,  137 => 42,  118 => 25,  114 => 24,  102 => 15,  92 => 7,  88 => 6,  71 => 53,  67 => 52,  64 => 51,  62 => 24,  53 => 17,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html", "/Users/chicken/source/php/demo/App/Views/base.html");
    }
}
