# Condition Maker WordPress Plugin

![Condition Maker Logo](https://hariskhandurrani.com/images/haris.jpeg)

Condition Maker is a WordPress plugin that enables you to create conditional logic using shortcodes. With this plugin, you can easily define conditions based on attribute values and comparison operators to control the display of content on your WordPress site.

## Installation

1. Download the latest release from the [GitHub repository](#https://github.com/Haris-khan-Durrani/Condition-Maker-WordPress-Plugin).
2. Extract the downloaded ZIP file.
3. Upload the extracted folder to the `wp-content/plugins/` directory of your WordPress installation.
4. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

### Shortcode: `[makecond]`

The main shortcode provided by the Condition Maker plugin is `[makecond]`. This shortcode allows you to create conditional logic with various attributes. Here is an example of its usage:

```php
[makecond input_attribute="some_attribute" input_is_shortcode="yes" comparison_operator="==" comparison_value="some_value" output_attribute="[shortcode_content]" attr="yes" elseouashort="no" elseout=""]


Certainly! Below is the updated README file incorporating the additional information you provided:

markdown
Copy code
# Condition Maker WordPress Plugin

![Condition Maker Logo](path/to/your/logo.png)

Condition Maker is a WordPress plugin that enables you to create conditional logic using shortcodes. With this plugin, you can easily define conditions based on attribute values and comparison operators to control the display of content on your WordPress site.

## Installation

1. Download the latest release from the [GitHub repository](#your-github-repository-link).
2. Extract the downloaded ZIP file.
3. Upload the extracted folder to the `wp-content/plugins/` directory of your WordPress installation.
4. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

### Shortcode: `[makecond]`

The main shortcode provided by the Condition Maker plugin is `[makecond]`. This shortcode allows you to create conditional logic with various attributes. Here is an example of its usage:

```php
[makecond input_attribute="some_attribute" input_is_shortcode="yes" comparison_operator="==" comparison_value="some_value" output_attribute="[shortcode_content]" attr="yes" elseouashort="no" elseout=""]


###Shortcode Attributes
input_attribute: The attribute to be compared.
input_is_shortcode: Set to 'yes' if the input attribute is a shortcode.
compare_is_shortcode: Set to 'yes' if the comparison value is a shortcode.
comparison_operator: The operator used for comparison. See the Comparison Operators section for a list of supported operators.
comparison_value: The value to compare against.
output_attribute: The content to be displayed if the condition is met.
attr: Set to 'yes' if the output attribute may contain shortcodes.
elseouashort: Set to 'yes' if an alternative output is specified.
elseout: The content to be displayed if the condition is not met and elseouashort is set to 'yes'.


###Comparison Operators
The following comparison operators are supported:

==: Equal to
===: Identical to (strict comparison)
!=: Not equal to
<: Less than
<=: Less than or equal to
>: Greater than
>=: Greater than or equal to
!: Not (negation)
!==: Not identical to (strict negation)
in_array: Value exists in the specified array (comma-separated values)
