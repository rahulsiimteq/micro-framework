# PHP micro-framework

### Workflow of this framework

#### Entry point

- All the route requests are handled by ```.htaccess``` file.
- The entry point of this framework is ```index.php``` file. It will load the main ```Handler/handler.php``` to filter the url.
- Those controllers is responsible for calling models and its views.
- The folder structure would be as follows:

```
1. mkdir controllers
2. mkdir Handler
3. mkdir models
4. mkdir views
5. .htaccess
6. index.php
```
