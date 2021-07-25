#Features
* **Forms** - create 3 types of forms (order,feedback and request)  with custom field settingsat.
* **Mail Alert** - get the contents of the forms by Email and notify the customer. For this created 6 templates for email (3 user and 3 admin)

#Installation
1. Install the plugin
2. Add a component named "Modal" to your template footer
3. Configure the "Modal" component (turn off or turn on jquery, magnific-popup, css style)
4. Add a component named "Button" to where you want to call the form.
5. In the settings of the Button component, select the form type (request, feedback and order)
6. If you want to display the **order form then you must pass to the id component of the product**, an example below
```
{% component 'Button3' item_id = 1 %}
```
7. Go to the plugin settings сonfigure
8. Enjoy