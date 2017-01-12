<?php

/* partials/header.html.twig */
class __TwigTemplate_b2a9dee72708588788bb4cff06bf014d0069d7034a766b158bbff1cb45d32c7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<head>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.js\"></script>
";
        // line 3
        $this->getAttribute(($context["assets"] ?? null), "addJS", array(0 => "theme://js/lauraslens.js"), "method");
        // line 4
        echo "
";
        // line 5
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

</head>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.js\"></script>
{% do assets.addJS('theme://js/lauraslens.js') %}

{{ assets.js() }}

</head>", "partials/header.html.twig", "C:\\xampp\\htdocs\\LaurasLens\\user\\themes\\lauraslens\\templates\\partials\\header.html.twig");
    }
}
