You can use a customized template.
===

The Login unit includes a default login form, but it can be replaced with a custom template provided by the developer.  

Set up your custom template file following the structure below.

File paths are resolved relative to the file that called `Login::Auto()`.  

```
index.php - `<?php OP()->Unit()->Login()->Auto() ?>`
├── login/
│   └── form.phtml
└── register/
    ├── confirm.phtml
    ├── failure.phtml
    ├── form.phtml
    └── success.phtml
```
