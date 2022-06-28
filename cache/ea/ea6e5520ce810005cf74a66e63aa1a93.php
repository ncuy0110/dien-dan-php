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
        // line 18
        echo "</head>

<body>
    <div class=\"container-fluid !direction !spacing\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-9\">
                <div class=\"row\" id=\"navbar\">
                    ";
        // line 25
        $this->displayBlock('navbar', $context, $blocks);
        // line 48
        echo "                </div>
                <div class=\"row\" id=\"content\">";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        echo " </div>
                <div class=\"row\" id=\"footer\">";
        // line 50
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
    <link rel=\"stylesheet\"
        href=\"https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css\"
        integrity=\"sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM\" crossorigin=\"anonymous\">

    <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo " - Diễn đàn</title>
    ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 25
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                        <div class=\"container-fluid\">
                            <a class=\"navbar-brand\" href=\"#\">Diễn Đàn</a>
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
                                        <a class=\"nav-link\" href=\"#\">Bài viết</a>
                                    </li>
                                </ul>
                                ";
        // line 43
        $this->displayBlock('login', $context, $blocks);
        // line 44
        echo "                            </div>
                        </div>
                    </nav>
                    ";
    }

    // line 43
    public function block_login($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 49
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 50
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
        return array (  160 => 50,  153 => 49,  147 => 43,  140 => 44,  138 => 43,  119 => 26,  115 => 25,  103 => 16,  92 => 7,  88 => 6,  71 => 50,  67 => 49,  64 => 48,  62 => 25,  53 => 18,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html", "/Users/chicken/source/php/demo/App/Views/base.html");
    }
}
