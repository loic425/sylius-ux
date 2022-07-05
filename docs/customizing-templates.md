# Customizing templates

```html
<!-- templates/bundles/SyliusUxSemanticUiBundle/layout.html.twig -->
{% extends '@!SyliusUxSemanticUiBundle/layout.html.twig' %}

{% block sidebar %}
    <a class="item" href="/admin" style="padding: 0 0;">
        <div class="sidebar-logo">
            <img src="https://placeholderlogo.com/img/placeholder-logo-4.png" class="ui fluid image">
        </div>
    </a>

    <!--You can use Knp Menu bundle to render the menu -->
    {{ knp_menu_render('app.admin.main', {'template': '@SyliusUxSemanticUi/menu/sidebar.html.twig', 'currentClass': 'active'}) }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel="stylesheet" href="path/to/your/custom/css/file"/>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src="path/to/your/custom/js/file"></script>
{% endblock %}
```
