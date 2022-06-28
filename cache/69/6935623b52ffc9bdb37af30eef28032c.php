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

/* /auth/register.html */
class __TwigTemplate_5671f2e725ab201e3ed35dd15d4a4e02 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'navbar' => [$this, 'block_navbar'],
            'login' => [$this, 'block_login'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html", "/auth/register.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Đăng nhập";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<a class=\"btn btn-primary\" href=\"/login\">Login</a>";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<div class=\"row d-flex justify-content-center mt-5\">
    <div class=\"col-6\">
        <form action=\"/register\" method=\"POST\">
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">Mật khẩu</label>
                <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"repeatPassword\" class=\"form-label\">Nhập lại mật khẩu</label>
                <input type=\"password\" name=\"repeatPassword\" class=\"form-control\" id=\"repeatPassword\" required>
            </div>
            ";
        // line 30
        if (array_key_exists("error", $context)) {
            // line 31
            echo "            <div class=\"mb-3\">
                <div class=\"alert alert-danger\" role=\"alert\">
                    ";
            // line 33
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
                </div>
            </div>
            ";
        }
        // line 37
        echo "            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/auth/register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 37,  111 => 33,  107 => 31,  105 => 30,  88 => 15,  84 => 14,  77 => 12,  71 => 9,  67 => 8,  61 => 5,  57 => 4,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/auth/register.html", "/Users/chicken/source/php/demo/App/Views/auth/register.html");
    }
}
