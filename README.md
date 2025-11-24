op-unit-login
===

# Usage

```php
//  Automatically the Login process.
OP()->Unit('Login')->Auto();
```

## Customize

If you want to customize the form to your liking, please refer to `reference > customize.md`.

## Database

### SQLite

 1. copy: unit:/login/db/Login.sqlite3 --> asset:/db/Login.sqlite3
 1. sudo chgrp _www asset:/db
 1. sudo chgrp _www asset:/db/Login.sqlite3
 1. sudo chmod 0775 asset:/db
 1. sudo chmod 0664 asset:/db/Login.sqlite3
