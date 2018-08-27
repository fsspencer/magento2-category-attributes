# Magento 2 Category Attributes
This is a sample extension to show you how to create category attributes.

## Installation

NOTE:  This extension comes with some sample attributes. Make sure to modify them before installing the extension.

1. Create the following directory structure `app/code/Codealist/CategoryAttributes`
2. Clone this repository inside that directory using `git clone https://github.com/fsspencer/magento2-category-attributes ./`
3. Execute: php bin/magento setup:upgrade

Now when you log into the Admin Panel and go to Stores > Products > Categories, you'll be able to see the attributes created.

## Overview

This module creates some category attributes using EavSetupFactory model and then make them visible by extending the uiComponent
`category_form.xml`.


## Compatibility
- Magento 2.0
- Magento 2.1
- Magento 2.2