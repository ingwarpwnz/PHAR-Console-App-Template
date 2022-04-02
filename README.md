# PHAR Console App Template

The project is the initial assembly for console projects, in the form of a PHAR archive.

## Building

The compilation takes place in the file `build/app.phar`.

```shell
make compile
```

### App Version

To build the PHAR archive correctly, the project must have a git repository and a version tag created.

To have application versioning, you need to add a parameter to the `box.json` file.

```json
{
    "git-version": "package_version",
}
```

And also add the version to the application class parameter.

```php
$app = new Application('App Name', '@package_version@');
```
