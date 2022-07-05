# Customizing templates

```html
<!-- templates/bundles/SyliusUxSemanticUiBundle/layout.html.twig -->
{% extends '@!SyliusUxSemanticUiBundle/layout.html.twig' %}

{% block logo %}
    <div style="max-width: 200px; margin:0 auto;">
        <img src="https://demo.monofony.com/assets/backend/img/admin-logo.svg" class="ui fluid image">
    </div>
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
