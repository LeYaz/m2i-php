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

/* contact.php */
class __TwigTemplate_f8a2113877e6c075803f660fa9d3138d extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Document</title>
</head>
<body>

<form action=\"/contact-us\" method=\"post\">
    <div><label for=\"name\">Name</label><input type=\"text\" id=\"name\" name=\"name\"></div>
    <div><label for=\"email\">email</label><input type=\"text\" id=\"email\" name=\"email\"></div>

    <div><input type=\"submit\" value=\"Create\"></div>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "contact.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Document</title>
</head>
<body>

<form action=\"/contact-us\" method=\"post\">
    <div><label for=\"name\">Name</label><input type=\"text\" id=\"name\" name=\"name\"></div>
    <div><label for=\"email\">email</label><input type=\"text\" id=\"email\" name=\"email\"></div>

    <div><input type=\"submit\" value=\"Create\"></div>
</form>
</body>
</html>", "contact.php", "/var/www/html/src/Resources/views/contact.php");
    }
}
